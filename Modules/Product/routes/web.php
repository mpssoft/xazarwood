<?php

use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\Admin\ProductController;
use Modules\Product\Http\Controllers\Frontend\FrontendProductController;

Route::middleware(['auth', 'admin.auth'])->group(function () {
    Route::resource('products', ProductController::class)->names('admin.products');
    Route::post('admin/attribute/values',[\Modules\Product\Http\Controllers\Admin\AttributeController::class,'getValues'])->name('admin.attributes.values');
});

Route::get('/product-list/{cat}',[FrontendProductController::class,'index'])->name('products-list');
Route::get('/product/{product}/{name}',[FrontendProductController::class,'showProduct'])->name('show.product');
