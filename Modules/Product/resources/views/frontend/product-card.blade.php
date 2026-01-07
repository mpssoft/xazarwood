
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
    <div class="flex flex-col h-full group relative bg-wood-50 dark:bg-wood-900 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
        <div class="relative overflow-hidden h-full">
            <img src="{{asset($product->main_image)}}" alt="{{$product->name}}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
            @if($product->stock==0 || $product->status == 'inactive')
                <div class="badge-unavailable absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-full shadow-lg z-10 flex items-center space-x-2 space-x-reverse"> <span class="font-bold text-sm">ناموجود</span> </div>
            @endif
        </div>
        <div class="absolute top-4 right-4 flex flex-col space-y-2">

            @if($activeDiscount && $product->stock > 0 && $product->status == 'active')
                <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                        <i class="fas fa-tag ml-1"></i>{{ $activeDiscount->value }}{{ $activeDiscount->type == 'percent' ? '%' : ' تومان' }} تخفیف </span>
            @endif
        </div>
        <div class="flex flex-col md:h-full  p-4 ">
            <a  href="{{route('show.product',['product'=>$product->id,'name'=>$product->name . ' ' . $product->product_code])}}">
                <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">{{$product->name}}</h3>
                <p class="text-wood-600 dark:text-wood-300 text-sm mb-3">{{$product->description}}</p>
            </a>
            <div class="flex h-full  flex-1"></div>
            @if($product->stock == 0 || $product->status == 'inactive')

                <div class="flex justify-between  space-x-3 space-x-reverse">
                    <span class="text-xl font-bold text-gray-700 dark:text-gray-400">{{number_format($product->price)}}</span>

                    <button id="btn-{{$product->id}}"
                            disabled
                            class="flex  items-center px-3 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg text-sm transition-colors">

                        <i class="fas fa-cart-arrow-down"></i>
                        <span>نا موجود</span>
                        <span class="spinner-{{$product->id}}  hidden"><i
                                class="fas fa-spinner fa-spin-pulse"></i></span>
                    </button>
                </div>
            @else
                <div class="flex items-center justify-between">
                    @if($activeDiscount)
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col text-right">
                                <div class="flex items-center">
                                    <div class="text-center text text-wood-500 dark:text-wood-400 line-through mb-1">
                                        {{ number_format($product->price) }} تومان

                                    </div>

                                </div>
                                <div class="font-bold text-gray-800 dark:text-slate-200 text-xl">
                                    {{ number_format($finalPrice) }}
                                </div><span class="text-xs">تومان</span>
                            </div>

                        </div>
                    @else
                        <div class="flex flex-col items-center ">
                            <span class="text-xl font-bold text-amber-700 dark:text-amber-400">{{number_format($product->price)}}</span>
                            <span class="text-xs">تومان</span>
                        </div>
                    @endif
                    <button id="btn-{{$product->id}}"
                            onclick="addToCart('product','{{$product->id}}')"
                            class="px-3 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-lg text-sm transition-colors">

                        <i class="fas fa-cart-arrow-down"></i>
                        <span>افزودن به سبد</span>
                        <span class="spinner-{{$product->id}}  hidden"><i
                                class="fas fa-spinner fa-spin-pulse"></i></span>
                    </button>
                </div>
            @endif
        </div>
    </div>
@endforeach


