<?php

use App\Http\Controllers\Admin\panel\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\User\ChatController;
use App\Http\Controllers\User\panel\UserCourseController;
use App\Http\Controllers\User\panel\UserMessageController;
use App\Http\Controllers\User\panel\UserAddressController;
use App\Http\Controllers\User\panel\UserProfileController;
use Illuminate\Support\Facades\Route;
use Modules\Shop\Http\Controllers\User\UserOrderController;


Route::get('/',[UserOrderController::class,'index'])->name('orders.index');

Route::resource('messages',UserMessageController::class);
Route::resource('addresses',UserAddressController::class);
Route::put('/set-default-address',[UserAddressController::class,'setDefaultAddress'])->name('set.default.address');
Route::get('/messages/create/{user?}', [UserMessageController::class,'create'])->name('messages.create');

Route::get('/edit',[UserProfileController::class,'edit'])->name('profile.edit');
Route::put('/update',[UserProfileController::class,'update'])->name('profile.update');

Route::get('/chat',[ChatController::class,'show'])->name('chat.show');

Route::post('messages/mark-as-read/{message}',[UserMessageController::class,'markAsRead'])->name('messages.mark-as-read');
Route::post('/messages/{id}/reply', [UserMessageController::class, 'reply'])->name('messages.reply');
Route::post('/messages/send', [UserMessageController::class, 'send'])->name('messages.send');
