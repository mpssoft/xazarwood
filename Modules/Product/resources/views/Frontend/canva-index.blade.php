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
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-2">
        <!-- Product 1: Oak Dining Table -->
        @foreach($products as $product)
            @php
                // Check for active product discount
                $productDiscount = $product->discounts
                    ->where('start_at', '<', now())
                    ->where('end_at', '>', now())
                    ->where('is_active', 1)
                    ->first();

                // Initialize category discount
                $categoryDiscount = null;

                // If no product discount, check categories
                if (!$productDiscount && $product->categories && $product->categories->count() > 0) {
                    foreach ($product->categories as $category) {
                        $activeCatDiscount = $category->discounts
                            ->where('start_at', '<', now())
                            ->where('end_at', '>', now())
                            ->where('is_active', 1)
                            ->first();

                        if ($activeCatDiscount) {
                            $categoryDiscount = $activeCatDiscount;
                            break; // stop at first found
                        }
                    }
                }

                // Determine which discount to use
                $activeDiscount = $productDiscount ?? $categoryDiscount;

                // Calculate discount amount if any
                if ($activeDiscount) {
                    $disValue = $activeDiscount->value;
                    $disType = $activeDiscount->type;

                    if ($disType == 'percent') {
                        $dis = $product->price * ($disValue / 100);
                    } else {
                        $dis = $disValue; // fixed amount
                    }

                    $finalPrice = max(0, $product->price - $dis);
                }
            @endphp
        <div class="flex flex-col bg-white h-[520px] dark:bg-wood-900  rounded-2xl shadow-lg hover:shadow-xl border border-wood-200 dark:border-wood-700 overflow-hidden transition-all duration-300 ">
            <div class="flex relative">
                <div class="h-auto bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-700 flex items-center justify-center">
                    <div class="text-center w-full h-full text-wood-700 dark:text-wood-300" >
                        <img src="{{asset($product->main_image)}}" class="h-full w-full "/>
                    </div>
                </div>
                <div class="absolute top-4 right-4 flex flex-col space-y-2">
                   {{-- <span class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                        <i class="fas fa-fire ml-1"></i>پرفروش </span>--}}
                    @if($activeDiscount)
                    <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                        <i class="fas fa-tag ml-1"></i>{{ $activeDiscount->value }}{{ $activeDiscount->type == 'percent' ? '%' : ' تومان' }} تخفیف </span>
                    @endif
                </div>

            </div>
            <div class="flex flex-col h-full  p-3">
                <div class="flex items-start justify-between mb-2">
                    <h3 class=" font-bold text-wood-800 dark:text-wood-100 leading-tight">{{$product->name}}</h3>
                </div>
                <p class="flex text-wood-600 text-sm dark:text-wood-400 mb-4 leading-relaxed">{{$product->description}}</p>
                <!-- Price Section -->
                <div class=" flex flex-1" ></div>
                <div class="flex items-center border dark:border-0 justify-between mb-3 bg-white dark:bg-wood-800 rounded-xl p-3 shadow-sm">
                    <div class="flex flex-col h-full w-full">

                        @if($activeDiscount)
                            <div class="flex justify-between items-center">
                                <div class="flex flex-col text-right">
                                    <div class="flex items-center">
                                        <div class="text-center text text-wood-500 dark:text-wood-400 line-through mb-1">
                                            {{ number_format($product->price) }} تومان

                                        </div>

                                    </div>
                                    <div class="font-bold text-gray-800 dark:text-slate-200 text-xl">
                                        {{ number_format($finalPrice) }} <span class="">تومان</span>
                                    </div>
                                </div>

                            </div>

                            <!-- Countdown -->
                            <div
                                class=" justify-center  p-2 rounded-xl flex items-center gap-3 shadow-2xl w-full"
                                data-expire="{{ $activeDiscount->end_at }}"
                                id="countdown-{{ $product->id }}">
                                Loading timer...
                            </div>
                        @else
                            <!-- Price Section -->
                            <div class="text-right">
                                <div class="font-bold text-gray-800 dark:text-wood-200 text-xl">
                                    {{ number_format($product->price) }} تومان
                                </div>
                            </div>
                        @endif
                    </div>

                </div>


                <div class="flex space-x-3 space-x-reverse">
                    <button
                        id="btn-{{$product->id}}"
                        onclick="addToCart('product','{{$product->id}}')"
                        class="flex-1 bg-wood-600 hover:bg-wood-700 dark:bg-wood-500 dark:hover:bg-wood-400 text-white dark:text-wood-900 px-4 py-3 rounded-xl font-medium transition-all duration-300 hover:shadow-lg">
                        <span class="spinner-{{$product->id}}  hidden"><i
                                class="fas fa-spinner fa-spin-pulse"></i></span>
                        <i class="fas fa-shopping-cart ml-2"></i>افزودن به سبد </button>
                    <a href="{{route('show.product',['product'=>$product->id,'name'=>$product->name])}}" class="bg-wood-200 hover:bg-wood-300 dark:bg-wood-700 dark:hover:bg-wood-600 text-wood-800 dark:text-wood-200 px-4 py-3 rounded-xl font-medium transition-all duration-300"> <i class="fas fa-eye"></i> </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</main>
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

