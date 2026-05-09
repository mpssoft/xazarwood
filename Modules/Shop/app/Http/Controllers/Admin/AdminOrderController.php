<?php

namespace Modules\Shop\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('items.item')->get();

        return view('shop::admin.order.index' , compact('orders'));
    }



    public function show()
    {

        return view('shop::admin.order.show');
    }
    public function sent(Order $order)
    {
        $order->update(['status'=>'sent']);
        toast('وضعیت به ارسال شده تغییر یافت','success')->position('bottom-right');
        return back();
    }
    public function delivered(Order $order)
    {
        $order->update(['status'=>'delivered']);
        toast('وضعیت به تحویل شده تغییر یافت','success')->position('bottom-right');
        return back();
    }public function cancel(Order $order)
    {
        $order->update(['status'=>'canceled']);
        toast('وضعیت به لغو شده تغییر یافت','success')->position('bottom-right');
        return back();
    }

    public function delete(Order $order)
    {
        $order->delete();
        alert("","سفارش مورد نظر شما حذف شد!","success");
        return back();
    }

}
