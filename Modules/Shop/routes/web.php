<?php

use App\Http\Controllers\Admin\panel\UserController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use Modules\Shop\Http\Controllers\CartController;
use Modules\Shop\Http\Controllers\ShopController;

Route::middleware(['auth'])->group(function () {
    Route::resource('shops', ShopController::class)->names('shop');
});


Route::prefix('cart')->name('shop.cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::get('/add/{model}/{id}/{qty}', [CartController::class, 'add'])->name('add');
    Route::delete('/remove', [CartController::class, 'remove'])->name('remove');
    Route::post('/removeDiscount', [CartController::class, 'removeDiscount'])->name('removeDiscount');
    Route::post('/saveAddress', [CartController::class, 'saveAddress'])->name('saveAddress');
    Route::post('/apply-discount', [CartController::class, 'applyDiscount'])->name('applyDiscount');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::post('/gateway', [CartController::class, 'gateway'])->name('gateway');
    Route::get('/review', [CartController::class, 'review'])->name('review');
    Route::post('/place-order', [CartController::class, 'placeOrder'])->name('placeOrder');
    Route::get('/items',[CartController::class,'cartItems'])->name('items');
    Route::get('/create/{order}',[CartController::class,'create'])->name('create');

    Route::post('/addAddress',[CartController::class,'addAddress']);
    Route::get('/checkout', [PaymentController::class, 'createOrder'])->name('checkout');
    Route::get('/payment/bitpayCallback',[PaymentController::class,'bitpayCallback'])->name('payment.bitpayCallback');

    Route::get('/payment/zarinpalCallback',[PaymentController::class,'zarinpalCallback'])->name('payment.zarinpalCallback');
    Route::get('/payment/success/{orderId}', [PaymentController::class, 'paymentSuccess'])->name('payment.success');

});
