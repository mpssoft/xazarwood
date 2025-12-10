<?php

use Illuminate\Support\Facades\Route;
use Modules\Shop\Http\Controllers\User\UserController;

Route::get('/order/show',[UserController::class,'show'])->name('order.show');
Route::get('/orders',[UserController::class,'index'])->name('orders');
