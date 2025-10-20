<?php

use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\Admin\ProductController;

Route::middleware(['auth', 'admin.auth'])->group(function () {
    Route::resource('products', ProductController::class)->names('admin.products');
});
