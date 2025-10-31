@extends('layouts.app')

@push('scripts')

@endpush
@section('content')


<div class="bg-gradient-to-br from-amber-50 to-orange-50 dark:from-wood-900 dark:to-wood-800 min-h-screen">


<!-- Hero Section -->
<section class="max-w-7xl mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h2 class="text-4xl font-bold text-wood-800 dark:text-wood-100 mb-4">
            گنجینه‌های چوبی دست‌ساز
        </h2>
        <p class="text-lg text-wood-600 dark:text-wood-400 max-w-2xl mx-auto">
            مجموعه محصولات چوبی برتر ما را کشف کنید، هر قطعه با دقت به جزئیات و زیبایی طبیعی ساخته شده است.
        </p>
    </div>
</section>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 pb-16">

    <!-- Horizontal Filter Bar -->
    <div class="bg-white dark:bg-wood-800 rounded-xl shadow-lg p-4 mb-6">
        <div class="flex flex-wrap items-center gap-4">
            <!-- Category Filter -->
            <div class="flex items-center space-x-reverse space-x-2">
                <label class="text-sm font-medium text-wood-700 dark:text-wood-300">دسته‌بندی:</label>
                <select class="px-3 py-2 rounded-lg border border-wood-300 dark:border-wood-600 bg-white dark:bg-wood-700 text-wood-800 dark:text-wood-200 text-sm focus:outline-none focus:ring-2 focus:ring-amber-500">
                    <option>همه دسته‌بندی‌ها</option>
                    <option>مبلمان (۲۴)</option>
                    <option>دکوراسیون (۱۸)</option>
                    <option>آشپزخانه (۱۲)</option>
                    <option>نورپردازی (۸)</option>
                    <option>انبارداری (۱۵)</option>
                </select>
            </div>

            <!-- Material Filter -->
            <div class="flex items-center space-x-reverse space-x-2">
                <label class="text-sm font-medium text-wood-700 dark:text-wood-300">جنس:</label>
                <select class="px-3 py-2 rounded-lg border border-wood-300 dark:border-wood-600 bg-white dark:bg-wood-700 text-wood-800 dark:text-wood-200 text-sm focus:outline-none focus:ring-2 focus:ring-amber-500">
                    <option>همه جنس‌ها</option>
                    <option>بلوط (۲۰)</option>
                    <option>گردو (۱۵)</option>
                    <option>کاج (۱۲)</option>
                    <option>ماهونی (۱۰)</option>
                    <option افرا (۸)</option>
                </select>
            </div>

            <!-- Price Range Filter -->
            <div class="flex items-center space-x-reverse space-x-2">
                <label class="text-sm font-medium text-wood-700 dark:text-wood-300">قیمت:</label>
                <select class="px-3 py-2 rounded-lg border border-wood-300 dark:border-wood-600 bg-white dark:bg-wood-700 text-wood-800 dark:text-wood-200 text-sm focus:outline-none focus:ring-2 focus:ring-amber-500">
                    <option>همه قیمت‌ها</option>
                    <option>زیر ۲ میلیون تومان</option>
                    <option>۲ تا ۵ میلیون تومان</option>
                    <option>۵ تا ۸ میلیون تومان</option>
                    <option>بیش از ۸ میلیون تومان</option>
                </select>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center space-x-reverse space-x-2 mr-auto">
                <button class="px-4 py-2 bg-gradient-to-l from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-white rounded-lg font-medium text-sm transition-all duration-300 transform hover:scale-105">
                    اعمال فیلتر
                </button>
                <button class="px-4 py-2 border border-wood-300 dark:border-wood-600 text-wood-600 dark:text-wood-400 rounded-lg hover:bg-wood-100 dark:hover:bg-wood-700 text-sm transition-colors">
                    پاک کردن
                </button>
            </div>
        </div>
    </div>

    <!-- Sort and View Options -->
    <div class="bg-white dark:bg-wood-800 rounded-xl shadow-lg p-4 mb-6 flex flex-wrap items-center justify-between gap-4">
        <div class="flex items-center space-x-reverse space-x-4">
            <span class="text-wood-600 dark:text-wood-400">نمایش ۸ محصول از ۷۷ محصول</span>
        </div>
        <div class="flex items-center space-x-reverse space-x-4">
            <select class="px-4 py-2 rounded-lg border border-wood-300 dark:border-wood-600 bg-white dark:bg-wood-700 text-wood-800 dark:text-wood-200 focus:outline-none focus:ring-2 focus:ring-amber-500">
                <option>مرتب‌سازی: ویژه</option>
                <option>قیمت: کم به زیاد</option>
                <option>قیمت: زیاد به کم</option>
                <option>جدیدترین‌ها</option>
            </select>
            <div class="flex space-x-reverse space-x-2">
                <button class="p-2 rounded-lg bg-amber-100 dark:bg-amber-900 text-amber-600 dark:text-amber-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                </button>
                <button class="p-2 rounded-lg hover:bg-wood-100 dark:hover:bg-wood-700 text-wood-600 dark:text-wood-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

        <!-- Product Card 1 -->
        <div class="group bg-white dark:bg-wood-800 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
            <div class="relative overflow-hidden">
                <img src="https://picsum.photos/seed/oaktable/400/300" alt="میز ناهارخوری بلوط" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-amber-600 text-white text-xs font-semibold rounded-full">
                            پرفروش‌ترین
                        </span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-2">میز ناهارخوری بلوط</h3>
                <p class="text-wood-600 dark:text-wood-400 text-sm mb-4">میز بلوط محکم با روکش طبیعی، برای ۶ نفر</p>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-amber-700 dark:text-amber-400">۸٬۹۹۰٬۰۰۰ تومان</span>
                    <button class="px-4 py-2 bg-gradient-to-l from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                        جزئیات
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="group bg-white dark:bg-wood-800 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
            <div class="relative overflow-hidden">
                <img src="https://picsum.photos/seed/walnutshelf/400/300" alt="کتابخانه گردو" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-green-600 text-white text-xs font-semibold rounded-full">
                            دوست‌دار محیط زیست
                        </span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-2">کتابخانه گردو</h3>
                <p class="text-wood-600 dark:text-wood-400 text-sm mb-4">واحد قفسه‌بندی ۵ طبقه قابل تنظیم</p>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-amber-700 dark:text-amber-400">۵٬۴۹۰٬۰۰۰ تومان</span>
                    <button class="px-4 py-2 bg-gradient-to-l from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                        جزئیات
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="group bg-white dark:bg-wood-800 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
            <div class="relative overflow-hidden">
                <img src="https://picsum.photos/seed/pinechair/400/300" alt="صندلی ناهارخوری کاج" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full">
                            محصول جدید
                        </span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-2">صندلی ناهارخوری کاج</h3>
                <p class="text-wood-600 dark:text-wood-400 text-sm mb-4">راحت با بالشتک پارچه‌ای</p>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-amber-700 dark:text-amber-400">۱٬۸۹۰٬۰۰۰ تومان</span>
                    <button class="px-4 py-2 bg-gradient-to-l from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                        جزئیات
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="group bg-white dark:bg-wood-800 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
            <div class="relative overflow-hidden">
                <img src="https://picsum.photos/seed/teakcabinet/400/300" alt="کابینت انبارداری تیک" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-purple-600 text-white text-xs font-semibold rounded-full">
                            نسخه محدود
                        </span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-2">کابینت انبارداری تیک</h3>
                <p class="text-wood-600 dark:text-wood-400 text-sm mb-4">سبک کلاسیک با دستگیره‌های برنجی</p>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-amber-700 dark:text-amber-400">۷٬۹۹۰٬۰۰۰ تومان</span>
                    <button class="px-4 py-2 bg-gradient-to-l from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                        جزئیات
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 5 -->
        <div class="group bg-white dark:bg-wood-800 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
            <div class="relative overflow-hidden">
                <img src="https://picsum.photos/seed/mapledesk/400/300" alt="میز تحریر افرا" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-red-600 text-white text-xs font-semibold rounded-full">
                            پیشنهاد ویژه
                        </span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-2">میز تحریر افرا</h3>
                <p class="text-wood-600 dark:text-wood-400 text-sm mb-4">طراحی مدرن با کشو</p>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-amber-700 dark:text-amber-400">۴٬۴۹۰٬۰۰۰ تومان</span>
                    <button class="px-4 py-2 bg-gradient-to-l from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                        جزئیات
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 6 -->
        <div class="group bg-white dark:bg-wood-800 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
            <div class="relative overflow-hidden">
                <img src="https://picsum.photos/seed/chest/400/300" alt="صندوقچه سدر" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-indigo-600 text-white text-xs font-semibold rounded-full">
                            دست‌ساز
                        </span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-2">صندوقچه سدر</h3>
                <p class="text-wood-600 dark:text-wood-400 text-sm mb-4">چوب معطر با قفل برنجی</p>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-amber-700 dark:text-amber-400">۶٬۲۹۰٬۰۰۰ تومان</span>
                    <button class="px-4 py-2 bg-gradient-to-l from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                        جزئیات
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 7 -->
        <div class="group bg-white dark:bg-wood-800 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
            <div class="relative overflow-hidden">
                <img src="https://picsum.photos/seed/bench/400/300" alt="نیمکت باغچه بلوط" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-teal-600 text-white text-xs font-semibold rounded-full">
                            فضای باز
                        </span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-2">نیمکت باغچه بلوط</h3>
                <p class="text-wood-600 dark:text-wood-400 text-sm mb-4">مقاوم در برابر آب و هوا، ۳ نفره</p>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-amber-700 dark:text-amber-400">۳٬۸۹۰٬۰۰۰ تومان</span>
                    <button class="px-4 py-2 bg-gradient-to-l from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                        جزئیات
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 8 -->
        <div class="group bg-white dark:bg-wood-800 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
            <div class="relative overflow-hidden">
                <img src="https://picsum.photos/seed/coffeetable/400/300" alt="میز قهوه‌خوری ماهونی" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-orange-600 text-white text-xs font-semibold rounded-full">
                            پریمیوم
                        </span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-2">میز قهوه‌خوری ماهونی</h3>
                <p class="text-wood-600 dark:text-wood-400 text-sm mb-4">طراحی شیک با رویه شیشه‌ای</p>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-amber-700 dark:text-amber-400">۵٬۹۹۰٬۰۰۰ تومان</span>
                    <button class="px-4 py-2 bg-gradient-to-l from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                        جزئیات
                    </button>
                </div>
            </div>
        </div>

    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-center mt-8 space-x-reverse space-x-2">
        <button class="px-3 py-2 rounded-lg border border-wood-300 dark:border-wood-600 text-wood-600 dark:text-wood-400 hover:bg-wood-100 dark:hover:bg-wood-700 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button class="px-4 py-2 rounded-lg bg-amber-600 text-white">۱</button>
        <button class="px-4 py-2 rounded-lg border border-wood-300 dark:border-wood-600 text-wood-600 dark:text-wood-400 hover:bg-wood-100 dark:hover:bg-wood-700 transition-colors">۲</button>
        <button class="px-4 py-2 rounded-lg border border-wood-300 dark:border-wood-600 text-wood-600 dark:text-wood-400 hover:bg-wood-100 dark:hover:bg-wood-700 transition-colors">۳</button>
        <span class="px-2 text-wood-500">...</span>
        <button class="px-4 py-2 rounded-lg border border-wood-300 dark:border-wood-600 text-wood-600 dark:text-wood-400 hover:bg-wood-100 dark:hover:bg-wood-700 transition-colors">۱۰</button>
        <button class="px-3 py-2 rounded-lg border border-wood-300 dark:border-wood-600 text-wood-600 dark:text-wood-400 hover:bg-wood-100 dark:hover:bg-wood-700 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>


</div>

@endsection
