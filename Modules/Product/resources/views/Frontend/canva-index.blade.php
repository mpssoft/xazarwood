@extends('layouts.app')

@section('content')
<div class="bg-wood-50 dark:bg-wood-950 text-wood-900 dark:text-wood-100 min-h-full transition-colors duration-300" dir="rtl"><!-- Header -->
<header class="bg-gradient-to-r from-wood-100 to-wood-200 dark:from-wood-900 dark:to-wood-800 py-8 px-4">
    <div class="max-w-7xl mx-auto text-center">

        <h1 class="text-3xl md:text-4xl font-bold text-wood-800 dark:text-wood-100 mb-3">مجموعه چوب دست‌ساز</h1>
        <p class="text-lg text-wood-600 dark:text-wood-300 mb-6 max-w-xl mx-auto">قطعات مبلمان دست‌ساز که زیبایی طبیعی و ظرافت بی‌زمان را به خانه شما می‌آورد</p>
        <div class="flex flex-wrap justify-center gap-4 text-wood-700 dark:text-wood-300">
            <div class="flex items-center space-x-2 space-x-reverse">
                <div class="w-8 h-8 bg-wood-300 dark:bg-wood-700 rounded-full flex items-center justify-center"><i class="fas fa-shipping-fast text-wood-700 dark:text-wood-300 text-sm"></i>
                </div><span class="font-medium text-sm">ارسال رایگان</span>
            </div>
            <div class="flex items-center space-x-2 space-x-reverse">
                <div class="w-8 h-8 bg-wood-300 dark:bg-wood-700 rounded-full flex items-center justify-center"><i class="fas fa-certificate text-wood-700 dark:text-wood-300 text-sm"></i>
                </div><span class="font-medium text-sm">ضمانت کیفیت</span>
            </div>
            <div class="flex items-center space-x-2 space-x-reverse">
                <div class="w-8 h-8 bg-wood-300 dark:bg-wood-700 rounded-full flex items-center justify-center"><i class="fas fa-hammer text-wood-700 dark:text-wood-300 text-sm"></i>
                </div><span class="font-medium text-sm">دست‌ساز</span>
            </div>
        </div>
    </div>
</header><!-- Filter Section -->
<section class="max-w-7xl mx-auto px-4 py-6">
    <div class="bg-white dark:bg-wood-900 rounded-xl shadow-lg border border-wood-200 dark:border-wood-700 p-6">
        <h2 class="text-lg font-bold text-wood-800 dark:text-wood-100 mb-4 text-center flex items-center justify-center"><i class="fas fa-filter ml-2 text-wood-600 dark:text-wood-400"></i> دسته‌بندی محصولات</h2>
        <div class="flex flex-wrap justify-center gap-3"><button class="px-4 py-2 bg-wood-100 hover:bg-wood-200 dark:bg-wood-800 dark:hover:bg-wood-700 text-wood-800 dark:text-wood-200 rounded-lg font-medium transition-all duration-300 border border-wood-300 dark:border-wood-600 hover:shadow-md text-sm"> <i class="fas fa-th ml-2 text-wood-600 dark:text-wood-400"></i>همه محصولات </button> <button class="px-4 py-2 bg-wood-100 hover:bg-wood-200 dark:bg-wood-800 dark:hover:bg-wood-700 text-wood-800 dark:text-wood-200 rounded-lg font-medium transition-all duration-300 border border-wood-300 dark:border-wood-600 hover:shadow-md text-sm"> <i class="fas fa-table ml-2 text-wood-600 dark:text-wood-400"></i>میز و صندلی </button> <button class="px-4 py-2 bg-wood-100 hover:bg-wood-200 dark:bg-wood-800 dark:hover:bg-wood-700 text-wood-800 dark:text-wood-200 rounded-lg font-medium transition-all duration-300 border border-wood-300 dark:border-wood-600 hover:shadow-md text-sm"> <i class="fas fa-archive ml-2 text-wood-600 dark:text-wood-400"></i>کمد و قفسه </button> <button class="px-4 py-2 bg-wood-100 hover:bg-wood-200 dark:bg-wood-800 dark:hover:bg-wood-700 text-wood-800 dark:text-wood-200 rounded-lg font-medium transition-all duration-300 border border-wood-300 dark:border-wood-600 hover:shadow-md text-sm"> <i class="fas fa-couch ml-2 text-wood-600 dark:text-wood-400"></i>اتاق نشیمن </button> <button class="px-4 py-2 bg-wood-100 hover:bg-wood-200 dark:bg-wood-800 dark:hover:bg-wood-700 text-wood-800 dark:text-wood-200 rounded-lg font-medium transition-all duration-300 border border-wood-300 dark:border-wood-600 hover:shadow-md text-sm"> <i class="fas fa-star ml-2 text-wood-600 dark:text-wood-400"></i>تزئینی </button>
        </div>
    </div>
</section><!-- Products Grid -->
<main class="max-w-7xl mx-auto px-4 pb-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8"><!-- Product 1: Oak Dining Table -->
        <div class="bg-white dark:bg-wood-900 rounded-2xl shadow-lg hover:shadow-xl border border-wood-200 dark:border-wood-700 overflow-hidden transition-all duration-300 hover:-translate-y-2">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-700 flex items-center justify-center">
                    <div class="text-center text-wood-700 dark:text-wood-300"><i class="fas fa-table text-6xl mb-4"></i>
                        <p class="text-sm font-medium">میز غذاخوری بلوط</p>
                    </div>
                </div>
                <div class="absolute top-4 right-4 flex flex-col space-y-2"><span class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center"> <i class="fas fa-fire ml-1"></i>پرفروش </span> <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center"> <i class="fas fa-tag ml-1"></i>۱۵٪ تخفیف </span>
                </div>
                <div class="absolute bottom-4 left-4"><span class="bg-wood-600 dark:bg-wood-400 text-wood-100 dark:text-wood-900 px-3 py-1 rounded-full text-xs font-medium flex items-center"> <i class="fas fa-tree ml-1"></i>چوب بلوط </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 leading-tight">میز غذاخوری بلوط ممتاز</h3><button class="text-wood-400 hover:text-red-500 dark:text-wood-500 dark:hover:text-red-400 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-wood-600 dark:text-wood-400 mb-4 leading-relaxed">میز غذاخوری ۶ نفره دست‌ساز از چوب بلوط ممتاز با طراحی کلاسیک</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-green-600 dark:text-green-400">۱,۲۹۹,۰۰۰ تومان</span> <span class="text-sm text-wood-500 dark:text-wood-400 line-through">۱,۵۲۹,۰۰۰ تومان</span>
                    </div><span class="bg-wood-200 dark:bg-wood-700 text-wood-800 dark:text-wood-200 px-3 py-1 rounded-full text-sm font-medium">میز</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-wood-600 dark:text-wood-400">
                    <div class="flex items-center space-x-2 space-x-reverse"><i class="fas fa-ruler-combined"></i> <span>۱۸۳ × ۹۱ × ۷۶ سانتی‌متر</span>
                    </div>
                    <div class="flex items-center space-x-1 space-x-reverse">
                        <div class="flex text-yellow-400"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                        </div><span class="text-wood-700 dark:text-wood-300 font-medium">(۱۲۷)</span>
                    </div>
                </div>
                <div class="flex space-x-3 space-x-reverse"><button class="flex-1 bg-wood-600 hover:bg-wood-700 dark:bg-wood-500 dark:hover:bg-wood-400 text-white dark:text-wood-900 px-4 py-3 rounded-xl font-medium transition-all duration-300 hover:shadow-lg"> <i class="fas fa-shopping-cart ml-2"></i>افزودن به سبد </button> <button class="bg-wood-200 hover:bg-wood-300 dark:bg-wood-700 dark:hover:bg-wood-600 text-wood-800 dark:text-wood-200 px-4 py-3 rounded-xl font-medium transition-all duration-300"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 2: Walnut Bookshelf -->
        <div class="bg-white dark:bg-wood-900 rounded-2xl shadow-lg hover:shadow-xl border border-wood-200 dark:border-wood-700 overflow-hidden transition-all duration-300 hover:-translate-y-2">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-700 flex items-center justify-center">
                    <div class="text-center text-wood-700 dark:text-wood-300"><i class="fas fa-book text-6xl mb-4"></i>
                        <p class="text-sm font-medium">قفسه کتاب گردو</p>
                    </div>
                </div>
                <div class="absolute top-4 right-4"><span class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center"> <i class="fas fa-star ml-1"></i>جدید </span>
                </div>
                <div class="absolute bottom-4 left-4"><span class="bg-wood-600 dark:bg-wood-400 text-wood-100 dark:text-wood-900 px-3 py-1 rounded-full text-xs font-medium flex items-center"> <i class="fas fa-tree ml-1"></i>چوب گردو </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 leading-tight">قفسه کتاب نمایشی گردو</h3><button class="text-wood-400 hover:text-red-500 dark:text-wood-500 dark:hover:text-red-400 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-wood-600 dark:text-wood-400 mb-4 leading-relaxed">قفسه کتاب ۵ طبقه از چوب گردو غنی با قفسه‌های قابل تنظیم</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-wood-800 dark:text-wood-200">۸۹۹,۰۰۰ تومان</span>
                    </div><span class="bg-wood-200 dark:bg-wood-700 text-wood-800 dark:text-wood-200 px-3 py-1 rounded-full text-sm font-medium">کمد</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-wood-600 dark:text-wood-400">
                    <div class="flex items-center space-x-2 space-x-reverse"><i class="fas fa-ruler-combined"></i> <span>۱۲۲ × ۴۱ × ۲۰۱ سانتی‌متر</span>
                    </div>
                    <div class="flex items-center space-x-1 space-x-reverse">
                        <div class="flex text-yellow-400"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star text-gray-300"></i>
                        </div><span class="text-wood-700 dark:text-wood-300 font-medium">(۸۹)</span>
                    </div>
                </div>
                <div class="flex space-x-3 space-x-reverse"><button class="flex-1 bg-wood-600 hover:bg-wood-700 dark:bg-wood-500 dark:hover:bg-wood-400 text-white dark:text-wood-900 px-4 py-3 rounded-xl font-medium transition-all duration-300 hover:shadow-lg"> <i class="fas fa-shopping-cart ml-2"></i>افزودن به سبد </button> <button class="bg-wood-200 hover:bg-wood-300 dark:bg-wood-700 dark:hover:bg-wood-600 text-wood-800 dark:text-wood-200 px-4 py-3 rounded-xl font-medium transition-all duration-300"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 3: Cedar Coffee Table -->
        <div class="bg-white dark:bg-wood-900 rounded-2xl shadow-lg hover:shadow-xl border border-wood-200 dark:border-wood-700 overflow-hidden transition-all duration-300 hover:-translate-y-2">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-700 flex items-center justify-center">
                    <div class="text-center text-wood-700 dark:text-wood-300"><i class="fas fa-coffee text-6xl mb-4"></i>
                        <p class="text-sm font-medium">Cedar Coffee Table</p>
                    </div>
                </div>
                <div class="absolute top-4 left-4 flex flex-col space-y-2"><span class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center"> <i class="fas fa-fire mr-1"></i>Popular </span> <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center"> <i class="fas fa-tag mr-1"></i>20% Off </span>
                </div>
                <div class="absolute bottom-4 right-4"><span class="bg-wood-600 dark:bg-wood-400 text-wood-100 dark:text-wood-900 px-3 py-1 rounded-full text-xs font-medium flex items-center"> <i class="fas fa-tree mr-1"></i>Cedar </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 leading-tight">Rustic Cedar Coffee Table</h3><button class="text-wood-400 hover:text-red-500 dark:text-wood-500 dark:hover:text-red-400 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-wood-600 dark:text-wood-400 mb-4 leading-relaxed">Beautiful coffee table with natural cedar finish and minimalist design</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-green-600 dark:text-green-400">$459</span> <span class="text-sm text-wood-500 dark:text-wood-400 line-through">$574</span>
                    </div><span class="bg-wood-200 dark:bg-wood-700 text-wood-800 dark:text-wood-200 px-3 py-1 rounded-full text-sm font-medium">Table</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-wood-600 dark:text-wood-400">
                    <div class="flex items-center space-x-2"><i class="fas fa-ruler-combined"></i> <span>48" × 24" × 18"</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <div class="flex text-yellow-400"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star text-gray-300"></i>
                        </div><span class="text-wood-700 dark:text-wood-300 font-medium">(156)</span>
                    </div>
                </div>
                <div class="flex space-x-3"><button class="flex-1 bg-wood-600 hover:bg-wood-700 dark:bg-wood-500 dark:hover:bg-wood-400 text-white dark:text-wood-900 px-4 py-3 rounded-xl font-medium transition-all duration-300 hover:shadow-lg"> <i class="fas fa-shopping-cart mr-2"></i>Add to Cart </button> <button class="bg-wood-200 hover:bg-wood-300 dark:bg-wood-700 dark:hover:bg-wood-600 text-wood-800 dark:text-wood-200 px-4 py-3 rounded-xl font-medium transition-all duration-300"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 4: Pine Office Desk -->
        <div class="bg-white dark:bg-wood-900 rounded-2xl shadow-lg hover:shadow-xl border border-wood-200 dark:border-wood-700 overflow-hidden transition-all duration-300 hover:-translate-y-2">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-700 flex items-center justify-center">
                    <div class="text-center text-wood-700 dark:text-wood-300"><i class="fas fa-desktop text-6xl mb-4"></i>
                        <p class="text-sm font-medium">Pine Office Desk</p>
                    </div>
                </div>
                <div class="absolute top-4 left-4"><span class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center"> <i class="fas fa-star mr-1"></i>New </span>
                </div>
                <div class="absolute bottom-4 right-4"><span class="bg-wood-600 dark:bg-wood-400 text-wood-100 dark:text-wood-900 px-3 py-1 rounded-full text-xs font-medium flex items-center"> <i class="fas fa-tree mr-1"></i>Pine </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 leading-tight">Modern Pine Office Desk</h3><button class="text-wood-400 hover:text-red-500 dark:text-wood-500 dark:hover:text-red-400 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-wood-600 dark:text-wood-400 mb-4 leading-relaxed">Contemporary office desk with hidden drawers and cable management system</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-wood-800 dark:text-wood-200">$729</span>
                    </div><span class="bg-wood-200 dark:bg-wood-700 text-wood-800 dark:text-wood-200 px-3 py-1 rounded-full text-sm font-medium">Desk</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-wood-600 dark:text-wood-400">
                    <div class="flex items-center space-x-2"><i class="fas fa-ruler-combined"></i> <span>55" × 28" × 30"</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <div class="flex text-yellow-400"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star text-gray-300"></i>
                        </div><span class="text-wood-700 dark:text-wood-300 font-medium">(74)</span>
                    </div>
                </div>
                <div class="flex space-x-3"><button class="flex-1 bg-wood-600 hover:bg-wood-700 dark:bg-wood-500 dark:hover:bg-wood-400 text-white dark:text-wood-900 px-4 py-3 rounded-xl font-medium transition-all duration-300 hover:shadow-lg"> <i class="fas fa-shopping-cart mr-2"></i>Add to Cart </button> <button class="bg-wood-200 hover:bg-wood-300 dark:bg-wood-700 dark:hover:bg-wood-600 text-wood-800 dark:text-wood-200 px-4 py-3 rounded-xl font-medium transition-all duration-300"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 5: Mahogany Dining Chair -->
        <div class="bg-white dark:bg-wood-900 rounded-2xl shadow-lg hover:shadow-xl border border-wood-200 dark:border-wood-700 overflow-hidden transition-all duration-300 hover:-translate-y-2">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-700 flex items-center justify-center">
                    <div class="text-center text-wood-700 dark:text-wood-300"><i class="fas fa-chair text-6xl mb-4"></i>
                        <p class="text-sm font-medium">Mahogany Chair</p>
                    </div>
                </div>
                <div class="absolute top-4 left-4"><span class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center"> <i class="fas fa-tag mr-1"></i>25% Off </span>
                </div>
                <div class="absolute bottom-4 right-4"><span class="bg-wood-600 dark:bg-wood-400 text-wood-100 dark:text-wood-900 px-3 py-1 rounded-full text-xs font-medium flex items-center"> <i class="fas fa-tree mr-1"></i>Mahogany </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 leading-tight">Elegant Mahogany Chair</h3><button class="text-wood-400 hover:text-red-500 dark:text-wood-500 dark:hover:text-red-400 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-wood-600 dark:text-wood-400 mb-4 leading-relaxed">Comfortable dining chair crafted from rich mahogany with fabric cushion</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-green-600 dark:text-green-400">$189</span> <span class="text-sm text-wood-500 dark:text-wood-400 line-through">$252</span>
                    </div><span class="bg-wood-200 dark:bg-wood-700 text-wood-800 dark:text-wood-200 px-3 py-1 rounded-full text-sm font-medium">Chair</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-wood-600 dark:text-wood-400">
                    <div class="flex items-center space-x-2"><i class="fas fa-ruler-combined"></i> <span>18" × 20" × 34"</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <div class="flex text-yellow-400"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star text-gray-300"></i>
                        </div><span class="text-wood-700 dark:text-wood-300 font-medium">(203)</span>
                    </div>
                </div>
                <div class="flex space-x-3"><button class="flex-1 bg-wood-600 hover:bg-wood-700 dark:bg-wood-500 dark:hover:bg-wood-400 text-white dark:text-wood-900 px-4 py-3 rounded-xl font-medium transition-all duration-300 hover:shadow-lg"> <i class="fas fa-shopping-cart mr-2"></i>Add to Cart </button> <button class="bg-wood-200 hover:bg-wood-300 dark:bg-wood-700 dark:hover:bg-wood-600 text-wood-800 dark:text-wood-200 px-4 py-3 rounded-xl font-medium transition-all duration-300"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 6: Birch Wall Shelf -->
        <div class="bg-white dark:bg-wood-900 rounded-2xl shadow-lg hover:shadow-xl border border-wood-200 dark:border-wood-700 overflow-hidden transition-all duration-300 hover:-translate-y-2">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-700 flex items-center justify-center">
                    <div class="text-center text-wood-700 dark:text-wood-300"><i class="fas fa-th-large text-6xl mb-4"></i>
                        <p class="text-sm font-medium">Birch Wall Shelf</p>
                    </div>
                </div>
                <div class="absolute top-4 left-4"><span class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center"> <i class="fas fa-star mr-1"></i>New </span>
                </div>
                <div class="absolute bottom-4 right-4"><span class="bg-wood-600 dark:bg-wood-400 text-wood-100 dark:text-wood-900 px-3 py-1 rounded-full text-xs font-medium flex items-center"> <i class="fas fa-tree mr-1"></i>Birch </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 leading-tight">Modern Birch Wall Shelf</h3><button class="text-wood-400 hover:text-red-500 dark:text-wood-500 dark:hover:text-red-400 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-wood-600 dark:text-wood-400 mb-4 leading-relaxed">Floating wall shelf made from birch wood perfect for displaying decorative items</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-wood-800 dark:text-wood-200">$129</span>
                    </div><span class="bg-wood-200 dark:bg-wood-700 text-wood-800 dark:text-wood-200 px-3 py-1 rounded-full text-sm font-medium">Decorative</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-wood-600 dark:text-wood-400">
                    <div class="flex items-center space-x-2"><i class="fas fa-ruler-combined"></i> <span>36" × 8" × 6"</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <div class="flex text-yellow-400"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star text-gray-300"></i>
                        </div><span class="text-wood-700 dark:text-wood-300 font-medium">(67)</span>
                    </div>
                </div>
                <div class="flex space-x-3"><button class="flex-1 bg-wood-600 hover:bg-wood-700 dark:bg-wood-500 dark:hover:bg-wood-400 text-white dark:text-wood-900 px-4 py-3 rounded-xl font-medium transition-all duration-300 hover:shadow-lg"> <i class="fas fa-shopping-cart mr-2"></i>Add to Cart </button> <button class="bg-wood-200 hover:bg-wood-300 dark:bg-wood-700 dark:hover:bg-wood-600 text-wood-800 dark:text-wood-200 px-4 py-3 rounded-xl font-medium transition-all duration-300"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 7: Teak Wardrobe -->
        <div class="bg-white dark:bg-wood-900 rounded-2xl shadow-lg hover:shadow-xl border border-wood-200 dark:border-wood-700 overflow-hidden transition-all duration-300 hover:-translate-y-2">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-700 flex items-center justify-center">
                    <div class="text-center text-wood-700 dark:text-wood-300"><i class="fas fa-door-open text-6xl mb-4"></i>
                        <p class="text-sm font-medium">Teak Wardrobe</p>
                    </div>
                </div>
                <div class="absolute top-4 left-4"><span class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center"> <i class="fas fa-fire mr-1"></i>Premium </span>
                </div>
                <div class="absolute bottom-4 right-4"><span class="bg-wood-600 dark:bg-wood-400 text-wood-100 dark:text-wood-900 px-3 py-1 rounded-full text-xs font-medium flex items-center"> <i class="fas fa-tree mr-1"></i>Teak </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 leading-tight">Luxury Teak Wardrobe</h3><button class="text-wood-400 hover:text-red-500 dark:text-wood-500 dark:hover:text-red-400 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-wood-600 dark:text-wood-400 mb-4 leading-relaxed">3-door wardrobe made from premium teak wood with mirror and internal drawers</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-wood-800 dark:text-wood-200">$1,899</span>
                    </div><span class="bg-wood-200 dark:bg-wood-700 text-wood-800 dark:text-wood-200 px-3 py-1 rounded-full text-sm font-medium">Storage</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-wood-600 dark:text-wood-400">
                    <div class="flex items-center space-x-2"><i class="fas fa-ruler-combined"></i> <span>71" × 24" × 87"</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <div class="flex text-yellow-400"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                        </div><span class="text-wood-700 dark:text-wood-300 font-medium">(45)</span>
                    </div>
                </div>
                <div class="flex space-x-3"><button class="flex-1 bg-wood-600 hover:bg-wood-700 dark:bg-wood-500 dark:hover:bg-wood-400 text-white dark:text-wood-900 px-4 py-3 rounded-xl font-medium transition-all duration-300 hover:shadow-lg"> <i class="fas fa-shopping-cart mr-2"></i>Add to Cart </button> <button class="bg-wood-200 hover:bg-wood-300 dark:bg-wood-700 dark:hover:bg-wood-600 text-wood-800 dark:text-wood-200 px-4 py-3 rounded-xl font-medium transition-all duration-300"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 8: Maple Side Table -->
        <div class="bg-white dark:bg-wood-900 rounded-2xl shadow-lg hover:shadow-xl border border-wood-200 dark:border-wood-700 overflow-hidden transition-all duration-300 hover:-translate-y-2">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-700 flex items-center justify-center">
                    <div class="text-center text-wood-700 dark:text-wood-300"><i class="fas fa-table text-6xl mb-4"></i>
                        <p class="text-sm font-medium">Maple Side Table</p>
                    </div>
                </div>
                <div class="absolute top-4 left-4 flex flex-col space-y-2"><span class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center"> <i class="fas fa-fire mr-1"></i>Popular </span> <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center"> <i class="fas fa-tag mr-1"></i>10% Off </span>
                </div>
                <div class="absolute bottom-4 right-4"><span class="bg-wood-600 dark:bg-wood-400 text-wood-100 dark:text-wood-900 px-3 py-1 rounded-full text-xs font-medium flex items-center"> <i class="fas fa-tree mr-1"></i>Maple </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 leading-tight">Classic Maple Side Table</h3><button class="text-wood-400 hover:text-red-500 dark:text-wood-500 dark:hover:text-red-400 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-wood-600 dark:text-wood-400 mb-4 leading-relaxed">Elegant side table crafted from maple wood with minimalist design</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-green-600 dark:text-green-400">$269</span> <span class="text-sm text-wood-500 dark:text-wood-400 line-through">$299</span>
                    </div><span class="bg-wood-200 dark:bg-wood-700 text-wood-800 dark:text-wood-200 px-3 py-1 rounded-full text-sm font-medium">Table</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-wood-600 dark:text-wood-400">
                    <div class="flex items-center space-x-2"><i class="fas fa-ruler-combined"></i> <span>20" × 16" × 24"</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <div class="flex text-yellow-400"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star text-gray-300"></i>
                        </div><span class="text-wood-700 dark:text-wood-300 font-medium">(98)</span>
                    </div>
                </div>
                <div class="flex space-x-3"><button class="flex-1 bg-wood-600 hover:bg-wood-700 dark:bg-wood-500 dark:hover:bg-wood-400 text-white dark:text-wood-900 px-4 py-3 rounded-xl font-medium transition-all duration-300 hover:shadow-lg"> <i class="fas fa-shopping-cart mr-2"></i>Add to Cart </button> <button class="bg-wood-200 hover:bg-wood-300 dark:bg-wood-700 dark:hover:bg-wood-600 text-wood-800 dark:text-wood-200 px-4 py-3 rounded-xl font-medium transition-all duration-300"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div>
    </div>
</main><!-- Footer -->

</div>
@endsection
@push('scripts')
    <script>
        // Theme toggle functionality
        function toggleTheme() {
            const html = document.documentElement;
            const isDark = html.classList.contains('dark');

            if (isDark) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }

        // Load saved theme on page load
        document.addEventListener('DOMContentLoaded', function() {
            const savedTheme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
                document.documentElement.classList.add('dark');
            }
        });

        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('section button');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active state from all buttons
                    filterButtons.forEach(btn => {
                        btn.classList.remove('bg-wood-600', 'text-white', 'dark:bg-wood-400', 'dark:text-wood-900');
                        btn.classList.add('bg-wood-100', 'hover:bg-wood-200', 'dark:bg-wood-800', 'dark:hover:bg-wood-700', 'text-wood-800', 'dark:text-wood-200');
                    });

                    // Add active state to clicked button
                    this.classList.remove('bg-wood-100', 'hover:bg-wood-200', 'dark:bg-wood-800', 'dark:hover:bg-wood-700', 'text-wood-800', 'dark:text-wood-200');
                    this.classList.add('bg-wood-600', 'text-white', 'dark:bg-wood-400', 'dark:text-wood-900');
                });
            });
        });
    </script>
@endpush

