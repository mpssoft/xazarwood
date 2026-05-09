<?php

use Illuminate\Support\Facades\Route;
use Modules\Shop\Http\Controllers\Admin\AdminOrderController;
use Modules\Shop\Http\Controllers\DiscountController;

Route::resource('discounts', DiscountController::class);

Route::get('/order/show',[AdminOrderController::class,'show'])->name('order.show');
Route::get('/order/ready/{order}',[AdminOrderController::class,'ready'])->name('order.ready');
Route::get('/order/sent/{order}',[AdminOrderController::class,'sent'])->name('order.sent');
Route::get('/order/cancel/{order}',[AdminOrderController::class,'cancel'])->name('order.cancel');
Route::get('/order/delivered/order/{order}',[AdminOrderController::class,'delivered'])->name('order.delivered');
Route::delete('/order/delete/{order}',[AdminOrderController::class,'delete'])->name('order.delete');
Route::get('/orders',[AdminOrderController::class,'index'])->name('orders.index');
