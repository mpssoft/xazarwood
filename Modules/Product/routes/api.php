<?php

use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\Api\ApiKeyController;

Route::middleware(['api.key'])->prefix('v1')->group(function () {
    Route::get('list-products', [ApiKeyController::class,'listProducts'])->name('list.products');
});
