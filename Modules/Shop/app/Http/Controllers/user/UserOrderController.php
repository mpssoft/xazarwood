<?php

namespace Modules\Shop\Http\Controllers\User;

use App\Http\Controllers\Controller;
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



}
