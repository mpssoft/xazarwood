<?php

use App\Http\Controllers\Admin\panel\AdminCourseController;
use App\Http\Controllers\Admin\panel\AdminPanelController;
use App\Http\Controllers\Admin\panel\AdminProfileController;
use App\Http\Controllers\Admin\panel\GradeController;
use App\Http\Controllers\Admin\panel\GroupController;
use App\Http\Controllers\Admin\panel\LicenseController;
use App\Http\Controllers\Admin\panel\UserController;
use App\Http\Controllers\Admin\panel\UserMessageController;
use Illuminate\Support\Facades\Route;


Route::get("/",[AdminPanelController::class,'home'])->name('home');



Route::resource('sliders', \App\Http\Controllers\Admin\panel\SliderController::class)->names('sliders');


Route::resource('users', UserController::class);
Route::post('users/search', [UserController::class,'search'])->name('users.search');

Route::resource('messages', UserMessageController::class);
Route::resource('licenses', LicenseController::class);

Route::get('/messages/create/{user?}', [UserMessageController::class,'create'])->name('messages.create');


Route::post('messages/mark-as-read/{message}',[UserMessageController::class,'markAsRead'])->name('messages.mark-as-read');
Route::post('/messages/{id}/reply', [UserMessageController::class, 'reply'])->name('messages.reply');
Route::post('/messages/send', [UserMessageController::class, 'send'])->name('messages.send');

Route::get('/edit',[AdminProfileController::class,'edit'])->name('profile.edit');
Route::put('/update',[AdminProfileController::class,'update'])->name('profile.update');






