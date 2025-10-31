<!DOCTYPE html>
<html lang="fa" dir="rtl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>چوب‌آلات دست‌ساز - صفحه اصلی</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        wood: {
                            50: '#fdf8f3',
                            100: '#faf2e8',
                            200: '#f5e6d4',
                            300: '#edd4b3',
                            400: '#e2b88d',
                            500: '#d4a574',
                            600: '#b8935f',
                            700: '#9c7a52',
                            800: '#7d5f3f',
                            900: '#634a31',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Slider Animation */
        @keyframes slide {
            0%, 33% { transform: translateX(0); }
            33.33%, 66% { transform: translateX(-100%); }
            66.66%, 100% { transform: translateX(-200%); }
        }

        .slider-container {
            animation: slide 12s infinite;
        }

        .slider-container:hover {
            animation-play-state: paused;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--wood-100);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--wood-500);
            border-radius: 4px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-amber-50 to-orange-50 dark:from-wood-900 dark:to-wood-800 min-h-screen">
<!-- Header -->
<header class="bg-white/90 dark:bg-wood-800/90 backdrop-blur-sm shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-reverse space-x-3">
                <span class="text-3xl">🪵</span>
                <h1 class="text-2xl font-bold bg-gradient-to-l from-amber-700 to-orange-700 dark:from-wood-200 dark:to-wood-100 bg-clip-text text-transparent">
                    چوب‌آلات دست‌ساز
                </h1>
            </div>
            <nav class="hidden md:flex items-center space-x-reverse space-x-6">
                <a href="#" class="text-wood-700 dark:text-wood-300 hover:text-amber-600 dark:hover:text-amber-400 transition-colors">خانه</a>
                <a href="#products" class="text-wood-700 dark:text-wood-300 hover:text-amber-600 dark:hover:text-amber-400 transition-colors">محصولات</a>
                <a href="#categories" class="text-wood-700 dark:text-wood-300 hover:text-amber-600 dark:hover:text-amber-400 transition-colors">دسته‌بندی‌ها</a>
                <a href="#about" class="text-wood-700 dark:text-wood-300 hover:text-amber-600 dark:hover:text-amber-400 transition-colors">درباره ما</a>
                <a href="#contact" class="text-wood-700 dark:text-wood-300 hover:text-amber-600 dark:hover:text-amber-400 transition-colors">تماس</a>
            </nav>
            <div class="flex items-center space-x-reverse space-x-4">
                <button class="p-2 rounded-lg hover:bg-wood-100 dark:hover:bg-wood-700 transition-colors">
                    <svg class="w-6 h-6 text-wood-600 dark:text-wood-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </button>
                <button class="p-2 rounded-lg hover:bg-wood-100 dark:hover:bg-wood-700 transition-colors">
                    <svg class="w-6 h-6 text-wood-600 dark:text-wood-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Hero Slider -->
<section class="relative h-96 md:h-[500px] overflow-hidden">
    <div class="flex slider-container">
        <!-- Slide 1 -->
        <div class="min-w-full h-96 md:h-[500px] relative">
            <img src="https://picsum.photos/seed/slide1/1920/500" alt="اسلاید ۱" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-l from-black/60 to-transparent flex items-center">
                <div class="max-w-7xl mx-auto px-4 text-right">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">هنر چوب، طبیعت در خانه شما</h2>
                    <p class="text-xl text-white/90 mb-6 max-w-2xl">با محصولات دست‌ساز ما، فضایی گرم و دلنشین به خانه خود بیفزایید</p>
                    <button class="px-8 py-3 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        مشاهده محصولات
                    </button>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="min-w-full h-96 md:h-[500px] relative">
            <img src="https://picsum.photos/seed/slide2/1920/500" alt="اسلاید ۲" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-l from-black/60 to-transparent flex items-center">
                <div class="max-w-7xl mx-auto px-4 text-right">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">طراحی مدرن، کیفیت سنتی</h2>
                    <p class="text-xl text-white/90 mb-6 max-w-2xl">ترکیبی از هنر سنتی و طراحی مدرن برای سبک زندگی امروزی</p>
                    <button class="px-8 py-3 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        کالکشن جدید
                    </button>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="min-w-full h-96 md:h-[500px] relative">
            <img src="https://picsum.photos/seed/slide3/1920/500" alt="اسلاید ۳" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-l from-black/60 to-transparent flex items-center">
                <div class="max-w-7xl mx-auto px-4 text-right">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">محصولات پایدار و دوست‌دار محیط زیست</h2>
                    <p class="text-xl text-white/90 mb-6 max-w-2xl">با خرید از ما، به حفاظت از محیط زیست کمک کنید</p>
                    <button class="px-8 py-3 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        اطلاعات بیشتر
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Indicators -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-reverse space-x-2">
        <button class="w-3 h-3 bg-white rounded-full opacity-75"></button>
        <button class="w-3 h-3 bg-white/50 rounded-full"></button>
        <button class="w-3 h-3 bg-white/50 rounded-full"></button>
    </div>
</section>

<!-- Features Section -->
<section class="py-12 bg-white dark:bg-wood-800">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="w-16 h-16 bg-amber-100 dark:bg-amber-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">کیفیت تضمین شده</h3>
                <p class="text-sm text-wood-600 dark:text-wood-400">بهترین مواد اولیه و ساخت حرفه‌ای</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">دوست‌دار محیط زیست</h3>
                <p class="text-sm text-wood-600 dark:text-wood-400">منابع تجدیدپذیر و فرآیندهای پایدار</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">ارسال سریع</h3>
                <p class="text-sm text-wood-600 dark:text-wood-400">تحویل در کمتر از ۴۸ ساعت</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">ساخت با عشق</h3>
                <p class="text-sm text-wood-600 dark:text-wood-400">هر قطعه با دقت و علاقه ساخته شده</p>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section id="categories" class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4">دسته‌بندی‌های محبوب</h2>
            <p class="text-lg text-wood-600 dark:text-wood-400">محصولات ما را بر اساس نیاز خود دسته‌بندی کنید</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                <img src="https://picsum.photos/seed/furniture/300/200" alt="مبلمان" class="w-full h-40 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                    <div class="p-4 text-right">
                        <h3 class="text-white font-semibold">مبلمان</h3>
                        <p class="text-white/80 text-sm">۲۴ محصول</p>
                    </div>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                <img src="https://picsum.photos/seed/decor/300/200" alt="دکوراسیون" class="w-full h-40 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                    <div class="p-4 text-right">
                        <h3 class="text-white font-semibold">دکوراسیون</h3>
                        <p class="text-white/80 text-sm">۱۸ محصول</p>
                    </div>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                <img src="https://picsum.photos/seed/kitchen/300/200" alt="آشپزخانه" class="w-full h-40 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                    <div class="p-4 text-right">
                        <h3 class="text-white font-semibold">آشپزخانه</h3>
                        <p class="text-white/80 text-sm">۱۲ محصول</p>
                    </div>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                <img src="https://picsum.photos/seed/lighting/300/200" alt="نورپردازی" class="w-full h-40 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                    <div class="p-4 text-right">
                        <h3 class="text-white font-semibold">نورپردازی</h3>
                        <p class="text-white/80 text-sm">۸ محصول</p>
                    </div>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                <img src="https://picsum.photos/seed/storage/300/200" alt="انبارداری" class="w-full h-40 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                    <div class="p-4 text-right">
                        <h3 class="text-white font-semibold">انبارداری</h3>
                        <p class="text-white/80 text-sm">۱۵ محصول</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section id="products" class="py-16 bg-white dark:bg-wood-800">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4">محصولات ویژه</h2>
            <p class="text-lg text-wood-600 dark:text-wood-400">برترین محصولات این هفته را مشاهده کنید</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Product 1 -->
            <div class="group bg-wood-50 dark:bg-wood-700 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                <div class="relative overflow-hidden">
                    <img src="https://picsum.photos/seed/product1/400/300" alt="میز ناهارخوری" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                    <span class="absolute top-4 right-4 px-3 py-1 bg-red-600 text-white text-xs font-semibold rounded-full">
                            ۲۰٪ تخفیف
                        </span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">میز ناهارخوری بلوط</h3>
                    <p class="text-wood-600 dark:text-wood-400 text-sm mb-3">میز ۶ نفره با طراحی کلاسیک</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-lg text-gray-400 line-through">۱۰٬۹۹۰٬۰۰۰</span>
                            <span class="text-xl font-bold text-amber-700 dark:text-amber-400 block">۸٬۹۹۰٬۰۰۰ تومان</span>
                        </div>
                        <button class="px-3 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-lg text-sm transition-colors">
                            خرید
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="group bg-wood-50 dark:bg-wood-700 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                <div class="relative overflow-hidden">
                    <img src="https://picsum.photos/seed/product2/400/300" alt="کتابخانه" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                    <span class="absolute top-4 right-4 px-3 py-1 bg-green-600 text-white text-xs font-semibold rounded-full">
                            جدید
                        </span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">کتابخانه مدرن</h3>
                    <p class="text-wood-600 dark:text-wood-400 text-sm mb-3">۷ طبقه با طراحی مینیمال</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-amber-700 dark:text-amber-400">۴٬۵۹۰٬۰۰۰ تومان</span>
                        <button class="px-3 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-lg text-sm transition-colors">
                            خرید
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="group bg-wood-50 dark:bg-wood-700 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                <div class="relative overflow-hidden">
                    <img src="https://picsum.photos/seed/product3/400/300" alt="صندلی" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">صندلی راحتی</h3>
                    <p class="text-wood-600 dark:text-wood-400 text-sm mb-3">با روکش چرمی طبیعی</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-amber-700 dark:text-amber-400">۲٬۸۹۰٬۰۰۰ تومان</span>
                        <button class="px-3 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-lg text-sm transition-colors">
                            خرید
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="group bg-wood-50 dark:bg-wood-700 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                <div class="relative overflow-hidden">
                    <img src="https://picsum.photos/seed/product4/400/300" alt="میز تحریر" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                    <span class="absolute top-4 right-4 px-3 py-1 bg-purple-600 text-white text-xs font-semibold rounded-full">
                            محدود
                        </span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">میز تحریر افرا</h3>
                    <p class="text-wood-600 dark:text-wood-400 text-sm mb-3">با کشوهای مخفی</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-amber-700 dark:text-amber-400">۵٬۲۹۰٬۰۰۰ تومان</span>
                        <button class="px-3 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-lg text-sm transition-colors">
                            خرید
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-8">
            <button class="px-8 py-3 border-2 border-amber-600 text-amber-600 dark:text-amber-400 hover:bg-amber-600 hover:text-white rounded-lg font-semibold transition-all duration-300">
                مشاهده همه محصولات
            </button>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="https://picsum.photos/seed/workshop/600/400" alt="کارگاه" class="rounded-2xl shadow-2xl">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-6">داستان ما</h2>
                <p class="text-wood-600 dark:text-wood-400 mb-4">
                    ما بیش از ۲۰ سال است که در زمینه تولید محصولات چوبی دست‌ساز فعالیت داریم. هر قطعه که از کارگاه ما خارج می‌شود، نتیجه ترکیبی از هنر سنتی و تکنیک‌های مدرن است.
                </p>
                <p class="text-wood-600 dark:text-wood-400 mb-6">
                    ماموریت ما ایجاد محصولاتی است که نه تنها زیبا هستند، بلکه دوام داشته و برای نسل‌ها باقی بمانند. ما به استفاده از چوب‌های پایدار و روش‌های تولید دوست‌دار محیط زیست متعهد هستیم.
                </p>
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div>
                        <div class="text-3xl font-bold text-amber-600 dark:text-amber-400">۲۰+</div>
                        <div class="text-sm text-wood-600 dark:text-wood-400">سال تجربه</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-amber-600 dark:text-amber-400">۵۰۰۰+</div>
                        <div class="text-sm text-wood-600 dark:text-wood-400">مشتری راضی</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-amber-600 dark:text-amber-400">۱۰۰%</div>
                        <div class="text-sm text-wood-600 dark:text-wood-400">دست‌ساز</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-white dark:bg-wood-800">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4">نظرات مشتریان</h2>
            <p class="text-lg text-wood-600 dark:text-wood-400">مشتریان ما چه می‌گویند</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-wood-50 dark:bg-wood-700 p-6 rounded-xl">
                <div class="flex mb-4">
                    <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                </div>
                <p class="text-wood-600 dark:text-wood-400 mb-4">
                    "کیفیت محصولات فوق‌العاده است. میز ناهارخوری که خریدم دقیقاً همانطور بود که در تصاویر نمایش داده شده بود."
                </p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-amber-200 rounded-full ml-3"></div>
                    <div>
                        <div class="font-semibold text-wood-800 dark:text-wood-100">علی رضایی</div>
                        <div class="text-sm text-wood-500 dark:text-wood-400">تهران</div>
                    </div>
                </div>
            </div>
            <div class="bg-wood-50 dark:bg-wood-700 p-6 rounded-xl">
                <div class="flex mb-4">
                    <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                </div>
                <p class="text-wood-600 dark:text-wood-400 mb-4">
                    "خدمات عالی و محصولات باکیفیت. از خریدم بسیار راضی هستم و حتماً دوباره از شما خرید می‌کنم."
                </p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-green-200 rounded-full ml-3"></div>
                    <div>
                        <div class="font-semibold text-wood-800 dark:text-wood-100">مریم احمدی</div>
                        <div class="text-sm text-wood-500 dark:text-wood-400">اصفهان</div>
                    </div>
                </div>
            </div>
            <div class="bg-wood-50 dark:bg-wood-700 p-6 rounded-xl">
                <div class="flex mb-4">
                    <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                </div>
                <p class="text-wood-600 dark:text-wood-400 mb-4">
                    "طراحی‌های منحصر به فرد و کیفیت ساخت بی‌نظیر. هر قطعه هنری واقعی است. پیشنهاد می‌کنم!"
                </p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-blue-200 rounded-full ml-3"></div>
                    <div>
                        <div class="font-semibold text-wood-800 dark:text-wood-100">رضا محمدی</div>
                        <div class="text-sm text-wood-500 dark:text-wood-400">شیراز</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-16 bg-gradient-to-r from-amber-600 to-orange-600">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">عضویت در خبرنامه</h2>
        <p class="text-white/90 mb-8">از جدیدترین محصولات و تخفیف‌های ویژه باخبر شوید</p>
        <form class="flex flex-col md:flex-row gap-4 max-w-md mx-auto">
            <input type="email" placeholder="ایمیل خود را وارد کنید" class="flex-1 px-4 py-3 rounded-lg text-wood-800 focus:outline-none focus:ring-2 focus:ring-white">
            <button type="submit" class="px-6 py-3 bg-white text-amber-600 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                عضویت
            </button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer id="contact" class="bg-wood-800 dark:bg-wood-900 text-wood-200 py-12">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <div>
                <div class="flex items-center space-x-reverse space-x-2 mb-4">
                    <span class="text-2xl">🪵</span>
                    <h3 class="text-xl font-bold">چوب‌آلات دست‌ساز</h3>
                </div>
                <p class="text-wood-400 text-sm">
                    ارائه بهترین محصولات چوبی دست‌ساز با کیفیت برتر
                </p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">لینک‌های سریع</h4>
                <ul class="space-y-2 text-sm text-wood-400">
                    <li><a href="#" class="hover:text-amber-400 transition-colors">درباره ما</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition-colors">محصولات</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition-colors">خدمات</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition-colors">تماس با ما</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">خدمات</h4>
                <ul class="space-y-2 text-sm text-wood-400">
                    <li><a href="#" class="hover:text-amber-400 transition-colors">طراحی سفارشی</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition-colors">نصب و تحویل</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition-colors">مشاوره رایگان</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition-colors">ضمانت کیفیت</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">تماس با ما</h4>
                <ul class="space-y-2 text-sm text-wood-400">
                    <li>📍 تهران، خیابان ولیعصر</li>
                    <li>📞 ۰۲۱-۸۸۷۷۶۶۵۵</li>
                    <li>📧 info@woodcraft.ir</li>
                    <li>🕐 شنبه تا چهارشنبه ۹-۱۷</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-wood-700 pt-8 text-center">
            <p class="text-sm text-wood-400">© ۱۴۰۳ چوب‌آلات دست‌ساز. تمامی حقوق محفوظ است.</p>
        </div>
    </div>
</footer>
</body>
</html>
