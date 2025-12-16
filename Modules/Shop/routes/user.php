<?php

use Illuminate\Support\Facades\Route;
use Modules\Shop\Http\Controllers\User\UserOrderController;

Route::get('/order/show',[UserOrderController::class,'show'])->name('order.show');
Route::delete('/order/delete/{order}',[UserOrderController::class,'delete'])->name('order.delete');
Route::get('/orders',[UserOrderController::class,'index'])->name('orders.index');
