@extends('layouts.user.master')

@section('content')

<body class="h-full w-full m-0 p-0 overflow-auto">
<div class="w-full min-h-full bg-wood-50 dark:bg-wood-950 smooth-transition">
    <div class="max-w-6xl mx-auto px-4 py-8 sm:px-6 lg:px-8"><!-- Header -->
        <!-- Success Header -->
        <div class="text-center mb-12 bg-white dark:bg-wood-900 rounded-xl shadow-lg p-8 mb-8 animate-fade-in">
            <div class="flex justify-center mb-6">
                <div class="w-24 h-24 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center animate-checkmark">
                    <svg class="w-12 h-12 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>
            <h1 id="success-title" class="text-4xl font-bold text-wood-900 dark:text-wood-100 mb-3">سفارش شما با موفقیت ثبت شد!</h1>
            <p id="success-message" class="text-lg text-wood-600 dark:text-wood-400 mb-4">سفارش شما دریافت شد و در حال پردازش است</p>
            <div class="flex items-center justify-center gap-2 text-wood-700 dark:text-wood-300"><span class="font-semibold">شماره سفارش:</span> <span id="order-number" class="font-mono text-wood-900 dark:text-wood-100 text-xl">ORD-2024-8742</span>
            </div>
        </div>
        <!-- Order Status Timeline -->
        <div class="bg-white dark:bg-wood-900 rounded-xl shadow-lg p-8 mb-8 animate-fade-in">
            <h2 id="order-status-title" class="text-2xl font-semibold text-wood-900 dark:text-wood-100 mb-8">وضعیت سفارش</h2>
            <div class="relative"><!-- Vertical Line -->
                <div class="absolute right-6 top-0 bottom-0 w-1 bg-wood-200 dark:bg-wood-700"></div>
                <div id="progress-line" class="absolute right-6 top-0 w-1 bg-wood-600 progress-animate"></div><!-- Steps -->
                <div class="space-y-8"><!-- Step 1: Order Placed -->
                    <div class="flex items-start gap-6 relative">
                        <div class="w-12 h-12 rounded-full bg-wood-600 flex items-center justify-center text-white font-bold z-10 flex-shrink-0">
                            <svg class="w-6 h-6" fill="currentColor" viewbox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-wood-900 dark:text-wood-100 mb-1">سفارش ثبت شد</h3>
                            <p class="text-sm text-wood-600 dark:text-wood-400 mb-2">سفارش شما با موفقیت ثبت و پرداخت انجام شد</p>
                            <p class="text-xs text-wood-500 dark:text-wood-500">۱۴۰۳/۰۸/۲۵ - ساعت ۱۴:۳۰</p>
                        </div>
                    </div><!-- Step 2: Processing -->
                    <div class="flex items-start gap-6 relative">
                        <div class="w-12 h-12 rounded-full bg-wood-600 flex items-center justify-center text-white font-bold z-10 flex-shrink-0">
                            <div class="w-6 h-6 border-3 border-white border-t-transparent rounded-full animate-spin"></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-wood-900 dark:text-wood-100 mb-1">در حال پردازش</h3>
                            <p class="text-sm text-wood-600 dark:text-wood-400 mb-2">سفارش شما در حال آماده‌سازی است</p>
                            <p class="text-xs text-wood-500 dark:text-wood-500">در حال انجام...</p>
                        </div>
                    </div><!-- Step 3: Shipping -->
                    <div class="flex items-start gap-6 relative opacity-50">
                        <div class="w-12 h-12 rounded-full bg-wood-300 dark:bg-wood-700 flex items-center justify-center text-wood-600 dark:text-wood-400 font-bold z-10 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-wood-900 dark:text-wood-100 mb-1">ارسال شده</h3>
                            <p class="text-sm text-wood-600 dark:text-wood-400 mb-2">سفارش از انبار ارسال خواهد شد</p>
                            <p class="text-xs text-wood-500 dark:text-wood-500">در انتظار...</p>
                        </div>
                    </div><!-- Step 4: Delivered -->
                    <div class="flex items-start gap-6 relative opacity-50">
                        <div class="w-12 h-12 rounded-full bg-wood-300 dark:bg-wood-700 flex items-center justify-center text-wood-600 dark:text-wood-400 font-bold z-10 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-wood-900 dark:text-wood-100 mb-1">تحویل داده شد</h3>
                            <p class="text-sm text-wood-600 dark:text-wood-400 mb-2">سفارش به دست شما خواهد رسید</p>
                            <p class="text-xs text-wood-500 dark:text-wood-500">در انتظار...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8"><!-- Left Column - Order Items -->
            <div class="space-y-6"><!-- Order Items -->
                <div class="bg-white dark:bg-wood-900 rounded-xl shadow-lg p-6 animate-slide-in">
                    <h2 id="order-items-title" class="text-2xl font-semibold text-wood-900 dark:text-wood-100 mb-6">محصولات سفارش</h2>
                    <div id="order-items" class="space-y-4"><!-- Order items will be rendered here -->
                    </div>
                    <div class="mt-6 pt-6 border-t-2 border-wood-200 dark:border-wood-700 space-y-3">
                        <div class="flex justify-between text-wood-700 dark:text-wood-300"><span>جمع جزء</span> <span id="subtotal-amount">۰ تومان</span>
                        </div>
                        <div class="flex justify-between text-wood-700 dark:text-wood-300"><span>هزینه ارسال</span> <span id="shipping-amount">۱۵۰,۰۰۰ تومان</span>
                        </div>
                        <div class="flex justify-between text-lg font-bold text-wood-900 dark:text-wood-100 pt-3 border-t border-wood-200 dark:border-wood-700"><span>جمع کل</span> <span id="total-amount">۰ تومان</span>
                        </div>
                    </div>
                </div>
            </div><!-- Right Column - Delivery Address & Contact -->
            <div class="space-y-6"><!-- Delivery Address -->
                <div class="bg-white dark:bg-wood-900 rounded-xl shadow-lg p-6 animate-slide-in">
                    <h2 id="delivery-address-title" class="text-2xl font-semibold text-wood-900 dark:text-wood-100 mb-6">آدرس تحویل</h2>
                    <div class="bg-wood-50 dark:bg-wood-800 rounded-lg p-5">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-wood-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-bold text-wood-900 dark:text-wood-100 mb-2">منزل</p>
                                <p class="text-wood-700 dark:text-wood-300 leading-relaxed mb-3">تهران، خیابان ولیعصر، نرسیده به میدان ونک، پلاک ۱۲۳، واحد ۴</p>
                                <p class="text-sm text-wood-600 dark:text-wood-400"><span class="font-semibold">کد پستی:</span> ۱۲۳۴۵۶۷۸۹۰</p>
                            </div>
                        </div>
                        <div class="border-t border-wood-200 dark:border-wood-700 pt-4 space-y-2">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-wood-600 dark:text-wood-400 flex-shrink-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <div>
                                    <p class="text-sm text-wood-600 dark:text-wood-400">گیرنده</p>
                                    <p class="font-semibold text-wood-900 dark:text-wood-100">علی محمدی</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-wood-600 dark:text-wood-400 flex-shrink-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <div>
                                    <p class="text-sm text-wood-600 dark:text-wood-400">شماره تماس</p>
                                    <p class="font-semibold text-wood-900 dark:text-wood-100">۰۹۱۲ ۳۴۵ ۶۷۸۹</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Estimated Delivery -->
                <div class="bg-white dark:bg-wood-900 rounded-xl shadow-lg p-6 animate-slide-in">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-wood-100 dark:bg-wood-800 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-wood-600 dark:text-wood-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-wood-600 dark:text-wood-400">زمان تحویل تخمینی</p>
                            <p class="text-lg font-bold text-wood-900 dark:text-wood-100">۳ تا ۵ روز کاری</p>
                        </div>
                    </div>
                    <div class="bg-wood-50 dark:bg-wood-800 rounded-lg p-4">
                        <p class="text-sm text-wood-700 dark:text-wood-300">سفارش شما پس از تایید و بسته‌بندی، از طریق <span class="font-semibold">ارسال فوری</span> به آدرس شما ارسال خواهد شد.</p>
                    </div>
                </div><!-- Support Contact -->
                <div class="bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-900 rounded-xl shadow-lg p-6 animate-slide-in">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-wood-600 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-wood-900 dark:text-wood-100 mb-2">نیاز به پشتیبانی دارید؟</h3>
                            <p class="text-sm text-wood-700 dark:text-wood-300 mb-3">تیم پشتیبانی ما آماده پاسخگویی به سوالات شما است</p><button class="px-4 py-2 bg-wood-600 hover:bg-wood-700 text-white rounded-lg text-sm font-medium smooth-transition"> تماس با پشتیبانی </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
