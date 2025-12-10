<?php

namespace Modules\Shop\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shop::user.order.index');
    }



    public function show()
    {
        return view('shop::user.order.show');
    }



}
