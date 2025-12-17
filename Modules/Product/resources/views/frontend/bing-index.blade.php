@extends('layouts.app')

@section('content')

<div class="bg-wood-50 dark:bg-wood-950 text-wood-900 dark:text-wood-100 min-h-screen">

    <section class="max-w-7xl mx-auto px-4 pt-5 mb-2">

        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3 space-x-reverse text-wood-600 dark:text-wood-400 text-sm"><span>خانه</span> <i class="fas fa-chevron-left text-xs"></i><a href="{{route('products-list', isset($products[0]) ?  $products[0]->categories()->first()->name : 'all')}}"> <span class="text-wood-800 dark:text-wood-200">{{ isset($products[0]) ?  $products[0]->categories()->first()->name:''}}</span> </a>
            </div>
        </div>

    </section>
    <!-- Divider -->
    <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
<div class="grid md:grid-cols-6 ">
    <div class="col-span-1"></div>
<header class=" max-w-7xl mx-auto  p-4 flex justify-between items-center">

    <div class="flex items-center gap-2">
        <label for="sort" class="text-sm">مرتب‌سازی:</label>
        <select id="sort" class="border text-sm  border-wood-300 dark:border-wood-700 rounded px-2  bg-wood-100 dark:bg-wood-950">

            <option value="price-low">ارزانترین</option>
            <option value="price-high">گرانترین</option>
            <option value="newest" selected>جدیدترین</option>
        </select>
    </div>
</header>
</div>
    <!-- Divider -->
    <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
<!-- لایه اصلی -->
<div class="grid grid-cols-1 md:grid-cols-6 max-w-7xl mx-auto h-full gap-2">
    <!-- بخش فیلترها -->
    <aside class="w-full col-span-1  border-l border-wood-200 dark:border-wood-800 p-4 hidden md:block sticky top-20 h-screen overflow-y-auto">

        <h2 class="text-sm text-center mb-4">فیلترها</h2>
        <!-- Divider -->
        <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
        <!-- دسته‌بندی -->
        <div class="mb-6 mt-3">
            <h3 class="text-sm font-medium mb-2">دسته‌بندی</h3>
            <ul class="space-y-1">
             @foreach(\Modules\Blog\Models\Category::all() as $category)
                <li><label><input  type="checkbox" value="{{$category->id}}" class=" cat mr-2">{{$category->name}}</label></li>
                @endforeach
            </ul>
        </div>

    </aside>

    <!-- بخش محصولات -->
    <main id="product-list-container" class="col-span-5  p-2 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 grid-rows-[max-content] gap-2">

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
                <div class="flex flex-col bg-white dark:bg-wood-900   rounded-2xl shadow-lg hover:shadow-xl border border-wood-200 dark:border-wood-700 overflow-hidden transition-all duration-300 ">
                    <a href="{{route('show.product',['product'=>$product->id,'name'=>$product->name])}}">
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
                    </a>
                    <div class="flex flex-col h-full  p-3">
                        <a href="{{route('show.product',['product'=>$product->id,'name'=>$product->name])}}">
                        <div class="flex items-start justify-between mb-2">
                            <h3 class=" font-bold text-wood-800 dark:text-wood-100 leading-tight">{{$product->name}}</h3>
                        </div>
                        <p class="flex text-wood-600 text-sm dark:text-wood-400 mb-4 leading-relaxed">{{$product->description}}</p>
                        </a>
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

                        </div>
                    </div>
                </div>
            @endforeach


    </main>
</div>


</div>
@endsection
@push('scripts')
    <script>
        let cat = [];
        $(document).ready(function(){
            $('#sort,.cat').on('change',function(){
                let val = $('#sort').val();
                let cats = $('.cat:checked')
                    .map(function () {
                        return this.value;
                    }).get();

                $.ajax({
                    url:'/sort-list/all',
                    type:'get',
                    headers: {'X-CSRF-TOKEN': "{{csrf_token()}}" },
                    data:{sort:val,cat:cats},
                    success:function(res){

                        $("#product-list-container").html(res);
                        document.querySelectorAll('[data-expire]').forEach(function (el) {
                            let expireDate = new Date(el.getAttribute('data-expire')).getTime();

                            let timer = setInterval(function () {
                                let now = new Date().getTime();
                                let distance = expireDate - now;

                                if (distance < 0) {
                                    clearInterval(timer);
                                    el.innerHTML = "Expired";
                                    el.classList.remove("text-red-600");
                                    el.classList.add("text-gray-500");
                                    return;
                                }

                                let days    = Math.floor(distance / (1000 * 60 * 60 * 24));
                                let hours   = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                // Pad single digits with leading zeros
                                hours   = hours.toString().padStart(2, '0');
                                minutes = minutes.toString().padStart(2, '0');
                                seconds = seconds.toString().padStart(2, '0');

                                el.innerHTML = ` ${days}d ${hours}h ${minutes}m ${seconds}s`;
                                el.innerHTML = `
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-slate-200/30 to-slate-300/10 overflow-hidden w-[40px] dark:from-slate-400/30 dark:to-slate-500/10 backdrop-blur-sm border border-slate-300/20 dark:border-slate-400/20 px-3 py-2 rounded-lg  font-bold mb-1 shadow-lg">${seconds.toString().padStart(2, '0')}</div>
                        <div class="text-xs opacity-80">ثانیه</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-slate-200/30 to-slate-300/10 dark:from-slate-400/30 dark:to-slate-500/10 backdrop-blur-sm border border-slate-300/20 dark:border-slate-400/20 px-3 py-2 rounded-lg  font-bold mb-1 shadow-lg">${minutes.toString().padStart(2, '0')}</div>
                        <div class="text-xs opacity-80">دقیقه</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-slate-200/30 to-slate-300/10 dark:from-slate-400/30 dark:to-slate-500/10 backdrop-blur-sm border border-slate-300/20 dark:border-slate-400/20 px-3 py-2 rounded-lg  font-bold mb-1 shadow-lg">${hours.toString().padStart(2, '0')}</div>
                        <div class="text-xs opacity-80">ساعت</div>
                    </div>

                   <div class="text-center">
                        <div class="bg-gradient-to-br from-slate-200/30 to-slate-300/10 dark:from-slate-400/30 dark:to-slate-500/10 backdrop-blur-sm border border-slate-300/20 dark:border-slate-400/20 px-3 py-2 rounded-lg  font-bold mb-1 shadow-lg">${days.toString().padStart(2, '0')}</div>
                        <div class="text-xs opacity-80">روز</div>
                    </div>
                `;
                            }, 1000);
                        });
                    }
                });
            });
        });

    </script>
@endpush
