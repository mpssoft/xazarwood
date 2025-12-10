<?php

namespace App\Http\Controllers;

use AllowDynamicProperties;
use App\Helpers\BitPay;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Notifications\Channels\MelipayamakChannel;
use App\Notifications\LessonPlanPaidNotification;
use App\Notifications\NotifyUserLicense;
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
        $totalPrice +=session('shipping_cost');
// Create the Order
        $order = Order::create([
            'user_id' => $user->id,
            'status'  => 'pending',
            'price'   => 2000,//$totalPrice,
            'shipping_price'   => session('shipping_cost'),
            'user_address_id'   => session('checkout.address'),
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

        // Payment creation & redirect (same as before)
        $payment = Payment::create([
            'order_id' => $order->id,
            'gateway' => 'zarinpal',
            'status' => 'initiated',
        ]);


        $response = $this->pay(20000,$order);
        return ($response);

    }

    private function pay(mixed $totalPrice, $order)
    {
        switch (session('checkout.gateway'))
        {
            case 'zarinpal':
                return $this->zarinpal($totalPrice,$order);
            case 'bitpay':
                return $this->bitpay($totalPrice,$order);
        }
    }
    public function bitpay($totalPrice,$order)
    {
        $amount      = $totalPrice;
        $orderId    = $order->id;
        $redirectUrl = env('BITPAY_CALLBACK_URL');
        $name        = auth()->user()->name;
        $email       = auth()->user()->email;
        $description = "شماره خرید :".$orderId;

        $bitPay = new BitPay(env('BITPAY_TOKEN'), env('BITPAY_IS_TEST'));

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
            ->callbackUrl(env('ZARINPAL_CALLBACK_URL'), [
                'order_id' => $order->id,
                'price' => $totalPrice
            ])
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
                'resnumber' => $result->get_id,
                'transaction_id' => $request->trans_id,
            ]);


            $payment->order->update([
                'status' => 'paid',
            ]);

            // if item hase file
            $this->paymentSuccess($payment->order);

            // return response()->redirectTo('/user')->with()
            return view('shop::user.order.show', [
                'status'=>'success','msg'=>"تشکر از اعتماد شما به خزرچوب، سفارش شما با موفقیت ثبت و بزودی بررسی خواهد شد. با تشکر" . $factor
            ]);
        }

        return view('shop::error', ['msg' => $result->GetMessage()]);
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
            'resnumber' =>  $response->referenceId(),
            'transaction_id' => 'MANUAL-' . now()->timestamp,
        ]);


        $payment->order->update([
            'status' => 'paid',
        ]);

        // if item hase file
        $this->paymentSuccess($payment->order, new SpotPlayerService());

        //alert('', 'پرداخت موفق', 'toast');
        // clear cart items

        if($this->file && !is_null($this->licenses))
        {
            return redirect(route('user.courses.bought'))->with(['licenses' => $this->licenses, 'file' => true]);
        }elseif($this->file) {
            return redirect(route('user.files.index'))->with([
                'file' => true,
                'message' => 'پرداخت با موفقیت انجام شد.'
            ]);
        }elseif($this->lessonplan) {
            return redirect(route('user.lessonplans.index'))->with([
                'lessonplan' => true,
                'message' => 'پرداخت با موفقیت انجام شد.'
            ]);
        }else{
            return redirect(route('user.courses.bought'))->with(['licenses' => $this->licenses]);
        }


}

// STEP 2: Simulate payment success
    public function paymentSuccess(Order $order)
    {
        DB::beginTransaction();

        try {
            $order->load('items.item'); // eager load order items + related models
            $user = auth()->user();
            Log::info("Reached paymentSuccess for order {$order->id}");

            CartItem::where('user_id', auth()->id())->delete();
            Cookie::queue(Cookie::forget('shop_cart'));

            // TODO : ارسال پیامک
            DB::commit();
           // $channel = new MelipayamakChannel();
           // $response = $channel->send(auth()->user(), new NotifyUserLicense(auth()->user()->mobile, $licenses[0]['course'] ?? 'درس مورد نظر'));

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Payment error', [
                'order_id' => $order->id,
                'message'  => $e->getMessage(),
            ]);
            return back()->with('error', 'Payment processed but license generation failed.');
        }
    }



}
