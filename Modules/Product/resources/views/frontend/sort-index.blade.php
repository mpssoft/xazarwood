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

