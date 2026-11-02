<?php

namespace App\Http\Controllers;

use AllowDynamicProperties;
use App\Helpers\BitPay;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\User;
use App\Notifications\Channels\MelipayamakChannel;
use App\Notifications\LessonPlanPaidNotification;
use App\Notifications\NotifyAdminBuy;
use App\Notifications\NotifyUserBuy;
use App\Notifications\SendOtpSms;
use App\Services\SpotPlayerService;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Modules\File\Models\File;
use Modules\LessonPlan\Models\LessonPlan;
use Modules\Shop\Models\CartItem;
use function PHPUnit\Framework\isEmpty;
use App\Services\TorobPayService;

#[AllowDynamicProperties] class PaymentController extends Controller
{

    // STEP 1: Create an order (user clicks "buy course")
    public function createOrder()
    {
        $user = auth()->user();
        $cart = $user->cartItems()->get(); // fetch user's cart

        if ($cart->isEmpty()) {
            alert('سبد خرید خالی است', 'هیچ آیتمی برای پرداخت وجود ندارد', 'toast');
            return redirect()->route('shop.cart.index');
        }

        $totalPrice = $cart->sum(function ($item) {
            $i = json_decode($item->discount,true);

            $price = $item->price ?? 0;
            if (!is_null($item->discount)) {
                if ($i['type'] === 'percent') {
                    $price -= $price * ($i['value'] / 100);

                } else  {
                    $price -= $i['value'];
                }
            }
            $price = $price* $item->qty ?? 0;
            return max($price, 0); // never below zero
        });

        // if order exists then continue and update with new items
        if(session('orderId')){
            // update order with new price and shipping price and user address id

            $order = Order::whereId(session('orderId'))->first();
            $order->update([
                'status' => 'pending',
                'price' => $totalPrice,
                'shipping_price' => session('shipping_cost'),
                'user_address_id' => session('checkout.address'),
            ]);
            $order->items()->delete();
            foreach ($cart as $cartItem) {
                $order->items()->create([
                    'order_id' => $order->id,
                    'item_id' => $cartItem['item_id'],
                    'item_type' => $cartItem['item_type'],
                    'price' => $cartItem['price'],
                    'discount' => $cartItem['discount'] ?? null
                ]);
            }
        }else {
            // Create the Order
            $order = Order::create([
                'user_id' => $user->id,
                'status' => 'pending',
                'price' => $totalPrice,
                'shipping_price' => session('shipping_cost'),
                'user_address_id' => session('checkout.address'),
            ]);

            // Create OrderItems
            foreach ($cart as $cartItem) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'item_id' => $cartItem['item_id'],
                    'item_type' => $cartItem['item_type'],
                    'price' => $cartItem['price'],
                    'discount' => $cartItem['discount'] ?? null
                ]);
            }
        }


        $totalPrice += session('shipping_cost');

        $response = $this->pay($totalPrice,$order);
        return ($response);

    }

    private function pay(mixed $totalPrice, $order)
    {
        switch (session('checkout.gateway'))
        {
            case 'zarinpal':
                // Payment creation & redirect (same as before)
               Payment::create([
                    'order_id' => $order->id,
                    'gateway' => 'zarinpal',
                    'status' => 'initiated',
                ]);
                return $this->zarinpal($totalPrice,$order);
            case 'bitpay':
                // Payment creation & redirect (same as before)
                Payment::create([
                    'order_id' => $order->id,
                    'gateway' => 'bitpay',
                    'status' => 'initiated',
                ]);
                return $this->bitpay($totalPrice,$order);
            case 'torobpay':
                $payment = Payment::create([
                    'order_id' => $order->id,
                    'gateway' => 'torobpay',
                    'status' => 'initiated',
                ]);
                return $this->torobpay($totalPrice, $order, $payment);
        }
    }

    private function torobpay($totalPrice, $order, Payment $payment)
    {
        $order->loadMissing([
            'user',
            'address.province',
            'address.city',
            'items.item',
        ]);

        $service = app(TorobPayService::class);

        $transactionId = 'order-' . $order->id . '-payment-' . $payment->id;

        $result = $service->createOrderPayment(
            $order,
            $order->address,
            $transactionId
        );

        $payment->update([
            'payment_token' => $result['paymentToken'],
            'transaction_id' => $transactionId,
        ]);

        return redirect()->away($result['paymentPageUrl']);
    }
    public function torobpayCallback(Request $request)
    {
        $request->validate([
            'transactionId' => ['required', 'string'],
            'state' => ['required', 'in:OK,FAILED'],
        ]);

        $payment = Payment::with('order')
            ->where('gateway', 'torobpay')
            ->where('transaction_id', $request->transactionId)
            ->firstOrFail();

        $order = $payment->order;

        if ($payment->status === 'success') {
            alert("","پرداخت قبلا با موفقیت انجام شده است",'success');
            return redirect()->route('shop.user.orders.index');

        }

        if ($request->state === 'FAILED') {
            $payment->update([
                'status' => 'failed',
            ]);

            alert("","پرداخت با خطا مواجه شد",'error');
            return redirect()->route('shop.cart.review');
        }

        $request->validate([
            'amount' => ['required', 'integer', 'min:1'],
        ]);

        $expectedAmount = (int) ($order->price * 10);

        if ((int) $request->amount !== $expectedAmount) {
            return response('Payment amount mismatch.', 400);
        }

        try {
            $service = app(TorobPayService::class);

            $statusResponse = $service->getPaymentStatus(
                $payment->payment_token
            );

            $statusResponse = $service->getPaymentStatus(
                $payment->payment_token
            );

            $currentStatus = $statusResponse['status'] ?? null;

            if ($currentStatus === 'PENDING') {
                $service->verifyPayment($payment->payment_token);

                $currentStatus = 'VERIFY';
            }

            if ($currentStatus === 'VERIFY') {
                $service->settlePayment($payment->payment_token);

                $currentStatus = 'SETTLE';
            }

            if ($currentStatus === 'REVERT') {
                $payment->update([
                    'status' => 'failed',
                ]);

                return response('Payment was reverted.', 200);
            }

            if ($currentStatus !== 'SETTLE') {
                throw new \RuntimeException(
                    'Unexpected TorobPay payment status: ' . ($currentStatus ?? 'unknown')
                );
            }
            $order->update([
                'status' => 'paid',
            ]);
            $this->paymentSuccess($order);
            $payment->update([
                'status' => 'success',
            ]);

            return redirect()->route('shop.user.orders.index')
                ->with('success', 'پرداخت با موفقیت انجام شد.');

        } catch (\Throwable $e) {
            Log::error('TorobPay callback failed', [
                'payment_id' => $payment->id,
                'error' => $e->getMessage(),
            ]);

            return response('Payment verification failed.', 500);
        }
    }
    public function bitpay($totalPrice,$order)
    {

        $amount      = $totalPrice*10;

        $orderId    = $order->id;
        $redirectUrl = env('BITPAY_CALLBACK_URL');
        $name        = auth()->user()->name;
        $email       = auth()->user()->email;
        $description = "شماره خرید :".$orderId;

        $bitPay = new BitPay(env('BITPAY_TOKEN'), env('BITPAY_IS_TEST'));
        //dd($amount);
        $result = $bitPay->Send($amount, $orderId, $redirectUrl, $name, $email, $description);

        if ($result->status > 0)
            return Redirect::away($result->redirectUrl);

        alert("",$result->getMessage(),'error');
        return back()->with('error', $result->GetMessage());
    }

    private function zarinpal($totalPrice,$order)
    {

        $response = zarinpal()
            ->merchantId(config('zarinpal.merchant_id'))
            ->amount($totalPrice)
            ->request()
            ->description('پرداخت سفارش #' . $order->id)
            ->callbackUrl(route('shop.cart.payment.zarinpalCallback',[
                'order_id' => $order->id,
                'price' => $totalPrice,
            ]))
            ->send();

        if (!$response->success()) {
            alert('', $response->error()->message(), 'toast');
            return redirect()->route('shop.cart.index');
        }

        return $response->redirect();
    }



    public function bitpayCallback(Request $request)
    {
        $transId = $request->trans_id;
        $idGet   = $request->id_get;
        $factor  = $request->factorId;

        $bitPay = new BitPay(env('BITPAY_TOKEN'), env('BITPAY_IS_TEST'));

        $result = $bitPay->Get($transId, $idGet);

        if ($result->status == 1) {
            // TODO: return to user orders and show success message
            $payment = Payment::with('order')->where('order_id',request('factorId'))->firstOrFail();
            $payment->update([
                'status' => "success",
                'gateway' => session('checkout.gateway') ?? 'bitpay',
                'resnumber' => $request->id_get,
                'transaction_id' => $request->trans_id,
            ]);


            $payment->order->update([
                'status' => 'paid',
            ]);


            $this->paymentSuccess($payment->order);


            return view('shop::user.order.show', [
                'status'=>'success','msg'=>"تشکر از اعتماد شما به خزرچوب، سفارش شما با موفقیت ثبت و بزودی بررسی خواهد شد. با تشکر" . $factor
            ]);
        }else{

            alert("",$result->getMessage(),'error');
            return redirect('/cart');

        }

    }


public function zarinpalCallback()
    {
        $authority = request()->query('Authority'); // دریافت کوئری استرینگ ارسال شده توسط زرین پال
        $status = request()->query('Status'); // دریافت کوئری استرینگ ارسال شده توسط زرین پال

        $response = zarinpal()
            ->merchantId(config('zarinpal.merchant_id')) // تعیین مرچنت کد در حین اجرا - اختیاری
            ->amount(request('price'))
            ->verification()
            ->authority($authority)
            ->send();

        if (!$response->success()) {
            alert('', $response->error()->message(), 'error');
            return redirect('/cart');

        }

        $payment = Payment::with('order')->where('order_id',request('order_id'))->firstOrFail();
        $payment->update([
            'status' => "success",
            'gateway' => session('checkout.gateway') ?? 'zarinpal',
            'resnumber' =>  $response->referenceId(),
            'transaction_id' => 'MANUAL-' . now()->timestamp,
        ]);


        $payment->order->update([
            'status' => 'paid',
        ]);

        // if item hase file
        $this->paymentSuccess($payment->order);


        return view('shop::user.order.show', [
            'status'=>'success',
            'msg'=>"تشکر از اعتماد شما به خزرچوب، سفارش شما با موفقیت ثبت و بزودی بررسی خواهد شد. با تشکر"  ,
            'order_id' => request('order_id')
        ]);

}

// STEP 2: Simulate payment success
    public function paymentSuccess(Order $order)
    {
        DB::beginTransaction();

        try {
            $order->load([
                'user',
                'items.item',
            ]);

            $user = $order->user;

            if (!$user) {
                throw new \RuntimeException(
                    "User not found for order ID: {$order->id}"
                );
            }

            $orderDetail = '';

            foreach ($order->items as $orderItem) {
                if ($orderItem->item) {
                    $orderDetail .= $orderItem->item->name . "\n";
                }
            }
            $admin = User::where('mobile','09384056563')->first();

            $user->notify(new NotifyUserBuy($order, $orderDetail));
            $admin->notify(new NotifyAdminBuy($user,$order,$orderDetail));

            // Delete only this user's cart.
            CartItem::where('user_id', $user->id)->delete();

            Cookie::queue(Cookie::forget('shop_cart'));

            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();

            Log::error('Payment success processing error', [
                'order_id' => $order->id,
                'message' => $e->getMessage(),
            ]);

            throw $e;
        }
    }


}
