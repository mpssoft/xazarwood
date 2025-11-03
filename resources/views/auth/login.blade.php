@extends("layouts.app")

@section("content")
    <div id="lightboxOverlay" class="p-10 inset-0  bg-black/50 lightbox-overlay  z-50">
        <!-- Lightbox Content -->
        <div class="w-[90%] lightbox-content mx-auto  bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-900 dark:via-wood-800 dark:to-wood-950 rounded-2xl shadow-2xl max-w-md mx-auto" onclick="event.stopPropagation()">
            <!-- Header -->
            <div class="p-8 pb-6">

                <div class="text-center mb-6">
                    <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-amber-400 to-orange-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-atom text-white text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-wood-800 dark:text-wood-100">ورود با موبایل</h2>
                </div>
                <p class="text-wood-600 dark:text-wood-300 mb-8 text-center">شماره موبایل خود را برای دریافت کد تایید وارد کنید</p>
                <div id="errorBox" class="text-red-400 text-sm mb-4 hidden"></div>
                <form id="otpForm" class="space-y-6">
                    @csrf
                    <!-- Mobile Step -->
                    <div id="mobileStep" class="space-y-6">
                        <div id="mobileSection">
                            <label for="mobile" class="block text-sm font-medium text-wood-600 dark:text-wood-400 mb-2">شماره موبایل</label>
                            <input
                                type="tel"
                                id="mobile"
                                name="mobile"
                                required
                                class="w-full px-4 py-3 text-wood-800 dark:text-wood-200 bg-wood-100 dark:bg-wood-800 border border-wood-300 dark:border-wood-600 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all duration-200"
                                placeholder="شماره موبایل را وارد کنید"
                                maxlength="11"
                            >
                        </div>
                        <!-- OTP Code Input (hidden initially) -->
                        <div id="otpCodeBox" class="hidden">
                            <a onclick="event.preventDefault();showMobileSection()" class="text-amber-600 dark:text-amber-400 hover:text-amber-700 dark:hover:text-amber-300 transition-colors">تغییر شماره</a>
                            <label class="block text-wood-600 dark:text-wood-300 text-sm font-medium mb-2">
                                <i class="fas fa-key mr-2"></i> کد تأیید
                            </label>

                            <div id="otpInputs" class="flex gap-3 justify-center rtl flex-row-reverse">
                                <input type="text" maxlength="1"
                                       class="otp-digit w-14 h-14 text-center text-wood-800 dark:text-wood-200 text-2xl bg-wood-100 dark:bg-wood-800 border border-wood-300 dark:border-wood-600 rounded-xl focus:ring-2 focus:ring-amber-500 outline-none transition-all duration-200"
                                       inputmode="numeric"/>
                                <input type="text" maxlength="1"
                                       class="otp-digit w-14 h-14 text-center text-wood-800 dark:text-wood-200 text-2xl bg-wood-100 dark:bg-wood-800 border border-wood-300 dark:border-wood-600 rounded-xl focus:ring-2 focus:ring-amber-500 outline-none transition-all duration-200"
                                       inputmode="numeric"/>
                                <input type="text" maxlength="1"
                                       class="otp-digit w-14 h-14 text-center text-wood-800 dark:text-wood-200 text-2xl bg-wood-100 dark:bg-wood-800 border border-wood-300 dark:border-wood-600 rounded-xl focus:ring-2 focus:ring-amber-500 outline-none transition-all duration-200"
                                       inputmode="numeric"/>
                                <input type="text" maxlength="1"
                                       class="otp-digit w-14 h-14 text-center text-wood-800 dark:text-wood-200 text-2xl bg-wood-100 dark:bg-wood-800 border border-wood-300 dark:border-wood-600 rounded-xl focus:ring-2 focus:ring-amber-500 outline-none transition-all duration-200"
                                       inputmode="numeric"/>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox"
                                   class="h-4 w-4 mr-2 text-amber-600 focus:ring-amber-500 border-wood-300 dark:border-wood-600 rounded">
                            <label for="remember" class="ml-2 block text-wood-600 dark:text-wood-400 text-sm mr-4">
                                مرا به خاطر بسپار
                            </label>
                        </div>
                        <button type="submit"
                                id="sendOtpBtn"
                                class="w-full bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-900 dark:via-wood-800 dark:to-wood-950 text-wood-800 dark:text-wood-100 px-6 py-3 rounded-lg font-semibold text-lg flex items-center justify-center gap-2 hover:from-wood-100 hover:via-wood-200 hover:to-wood-300 dark:hover:from-wood-800 dark:hover:via-wood-700 dark:hover:to-wood-900 hover:shadow-md hover:-translate-y-0.5 transition-all duration-200">
                            <span class="btn-text">ارسال کد تأیید</span>
                            <span class="spinner hidden w-5 h-5 border-2 border-wood-800 dark:border-wood-100 border-t-transparent rounded-full animate-spin"></span>
                        </button>

                        <div id="timerBox" class="text-center text-amber-600 dark:text-amber-400 mt-4 hidden">
                            لطفاً <span id="timer">60</span> ثانیه صبر کنید...
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@push('scripts')

@endpush
  @endsection
@section('script')
    {{ $script ?? '' }}
@endsection
@section('head')
    {{ $head ?? '' }}
@endsection
