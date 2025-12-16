<?php

namespace Modules\Shop\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = auth()->user()->orders()->with('items.item')->get();

        return view('shop::user.order.index' , compact('orders'));
    }



    public function show()
    {

        return view('shop::user.order.show');
    }

    public function delete(Order $order)
    {
        auth()->user()->orders()->whereId($order->id)->delete();
        alert("","سفارش مورد نظر شما حذف شد!","success");
        return back();
    }

}
