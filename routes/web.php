<?php


use App\Http\Controllers\Admin\panel\SliderController;
use App\Http\Controllers\Auth\OtpLoginController;
use App\Http\Controllers\Auth\TwoFactorAuthenticateController;

use App\Http\Controllers\Frontend\ContactMessageController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;

use App\Models\User;
use App\Notifications\NotifyAdminBuy;
use App\Notifications\NotifyUserBuy;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Modules\Shop\Http\Controllers\CartController;
use Modules\Shop\Models\CartItem;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/r',function(){
    Artisan::call('route:list');
    echo "<pre>";
    echo Artisan::output();
});

Route::post('/getCities',[HomeController::class,'getCities']);

Route::middleware('auth')->group(function () {
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/auth/twoFactorAuth',[TwoFactorAuthenticateController::class,'twoFactorAuthForm'])->name('twoFactorAuthForm');
Route::post('/auth/twoFactorAuth',[TwoFactorAuthenticateController::class,'verifyToken'])->name('auth.verifyToken');

Route::get('about',[HomeController::class,'about'])->name('about');
Route::get('contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');
Route::get('ask',[HomeController::class,'faq'])->name('faq');
Route::get('terms-of-service',[HomeController::class,'termsOfService'])->name('termsOfService');


Route::post('/send-otp', [OtpLoginController::class, 'sendOtp'])->name('otp.send');
Route::post('/verify-otp', [OtpLoginController::class, 'verifyOtp'])->name('otp.verify');


// click slider increament
Route::post('slider/click/{slider}',[SliderController::class,'click'])->name('slider.click');

require __DIR__.'/auth.php';
