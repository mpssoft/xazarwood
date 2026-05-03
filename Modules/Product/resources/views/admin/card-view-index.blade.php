<div class=" mb-4 text-wood-900 dark:text-wood-100 min-h-screen">

    <!-- لایه اصلی -->
    <div class="grid grid-cols-1 md:grid-cols-6  mx-auto h-full gap-2 ">

        <!-- بخش محصولات -->
        <main id="product-list-container" class="w-full col-span-6   grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 grid-rows-[max-content] gap-2">

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
    <div class="flex flex-col h-full  group relative bg-white dark:bg-slate-800 rounded-xl p-2 shadow-sm border border-gray-200 dark:border-slate-700  overflow-hidden">
        <div class="relative  h-full ">


                <!-- بلوک مستقل برای هر اسلایدر -->
                <div class="product-slider-wrapper relative w-full max-w-xs mx-auto mb-4">
                    @if(count($product->images)>1)
                    <!-- دکمه‌های ناوبری -->
                    <button class="prev-slide absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white text-gray-800 p-2 rounded-full shadow-md transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <button class="next-slide absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white text-gray-800 p-2 rounded-full shadow-md transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                    @endif
                    <!-- کانتینر تصاویر -->
                    <div class="overflow-hidden rounded-lg shadow  w-full">
                        <div class="slider-track flex transition-transform duration-300 ease-in-out">
                            <div class="min-w-full relative ">
                                <img src="{{ asset($product->main_image) }}" class="rounded-lg w-full h-full object-cover">
                                <!-- دکمه حذف -->
                                <button type="button" class="absolute top-1 right-1 bg-red-600 text-white rounded-full px-2 py-1 text-xs remove-gallery hover:bg-red-700 transition" data-url="{{ $product->main_image }}">
                                    ×
                                </button>
                            </div>
                            @foreach($product->images as $img)
                                <div class="min-w-full relative ">
                                    <img src="{{ asset($img->image) }}" class="rounded-lg w-full h-full object-cover">
                                    <!-- دکمه حذف -->
                                    <button type="button" class="absolute top-1 right-1 bg-red-600 text-white rounded-full px-2 py-1 text-xs remove-gallery hover:bg-red-700 transition" data-url="{{ $img->image }}">
                                        ×
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


        @if($product->stock==0 || $product->status == 'inactive')
                <div class="badge-unavailable absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-full shadow-lg z-10 flex items-center space-x-2 space-x-reverse"> <span class="font-bold text-sm">فروخته شد</span> </div>
            @endif
        </div>
        <div class="absolute top-4 right-4 flex flex-col space-y-2">

            @if($activeDiscount && $product->stock > 0 && $product->status == 'active')
                <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                        <i class="fas fa-tag ml-1"></i>{{ $activeDiscount->value }}{{ $activeDiscount->type == 'percent' ? '%' : ' تومان' }} تخفیف </span>
            @endif
        </div>
        <div class="flex flex-col h-full  p-2 ">

            <div class="flex h-full  flex-1"></div>
            <div class="flex gap-8 justify-center text-lg w-full border border-gray-300 dark:border-slate-600 rounded mb-2">
                <a href="{{route('admin.products.copy',$product->id)}}"  class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 p-1"> <i class="fas fa-copy "></i> </a>
                <a href="{{route('admin.products.edit',$product->id)}}"  class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 p-1"> <i class="fas fa-edit "></i> </a>
                <form action="{{ route('admin.products.destroy',$product->id) }}" onsubmit="event.preventDefault();confirmDelete(event);" method="post" id="{{'delete-'.$product->id}}">@csrf @method('delete')

                    <button class="text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 p-1"> <i class="fas fa-trash "></i> </button>
                </form>
            </div>
            <!-- Product Name -->
            <div class="flex gap-4 items-center mb-2">
                <label for="product-name" class="block  text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                    نام
                </label>
                <input type="text" id="product-name" name="name" required data-id="{{$product->id}}"
                       value="{{old('name',$product->name)}}"
                       class="w-full admin-input px-4 py-1 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
                       placeholder="نام محصول را وارد کنید...">
            </div>
            <!-- Product Code -->
            <div class="flex gap-4 items-center mb-2">
                <label for="product-code" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                    کد
                </label>
                <input type="text" id="product-code" name="product_code" required data-id="{{$product->id}}"
                       value="{{old('product_code',$product->product_code)}}"
                       class="w-full admin-input px-4 py-1 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
                       placeholder="Code : XW-CT-[ID] [XazarWood-CoffeeTable]">
            </div>
            <!-- Stock -->
            <div class="flex gap-4 items-center mb-2">
                <label for="product-stock" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                    موجودی
                </label>
                <input type="text" id="product-stock" name="stock" required data-id="{{$product->id}}"
                       value="{{old('stock',$product->stock)}}"
                       class="w-full admin-input px-4 py-1 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
                       placeholder="تعداد موجودی">
            </div>
            <!-- Price -->
            <div class="flex gap-4 items-center mb-2">
                <label for="product-price" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                    قیمت
                </label>
                <div class="relative">
                    <input type="text" id="product-price" name="price" required data-id="{{$product->id}}"
                           value="{{old('price',$product->price)}}"
                           class="w-full admin-input format_number px-4 py-1 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
                           placeholder="0">
                    <span class="absolute left-3 top-1 text-gray-500 dark:text-slate-400">تومان</span>
                </div>
            </div>

            <!-- Status -->
            <div class="flex gap-4 items-center mb-2">
                <label for="product-status" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                    وضعیت
                </label>
                <select id="product-status" name="status" data-id="{{$product->id}}"
                        class="admin-input w-full px-4 py-1 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100">
                    <option value="active" {{$product->status == "active"? "selected":""}}>فعال</option>
                    <option value="inactive" {{$product->status == "inactive"? "selected":""}}>غیرفعال</option>

                </select>
            </div>

        </div>
    </div>
@endforeach
        </main>
    </div>


</div>
@push('scripts')
    <script>
        $('.admin-input').on('change', function () {
            let id = $(this).data('id');
            let field = $(this).attr('name');
            let value = $(this).val();
            $this = $(this);
            $.ajax({
                url: "/products/update/" + id,
                method: "PUT",
                data: {
                    _token: "{{ csrf_token() }}",
                    field: field,
                    value: value
                },
                success: function (res) {
                    $this.fadeOut().delay(500).fadeIn();


                },
                error: function () {
                    console.log("Error updating the field.");
                }
            });
        });

        $(document).ready(function() {
            // برای هر بلوک اسلایدر به صورت جداگانه عمل می‌کنیم
            $('.product-slider-wrapper').each(function() {
                let $wrapper = $(this);
                let $track = $wrapper.find('.slider-track');
                let $prevBtn = $wrapper.find('.prev-slide');
                let $nextBtn = $wrapper.find('.next-slide');

                // تعداد اسلایدها در این اسلایدر خاص
                let totalSlides = $track.children().length;
                console.log('total slides:'+ totalSlides)
                let currentIndex = 0;

                // تابع به‌روزرسانی موقعیت
                function updateSlider() {
                    let offset = 100 * currentIndex;
                    $track.css('transform', `translateX(${offset}%)`);
                }

                // دکمه بعدی
                $nextBtn.on('click', function() {
                    if (currentIndex < totalSlides - 1) {
                        currentIndex++;
                    } else {
                        currentIndex = 0; // برگشت به اول
                    }
                    updateSlider();
                });

                // دکمه قبلی
                $prevBtn.on('click', function() {
                    if (currentIndex > 0) {
                        currentIndex--;
                    } else {
                        currentIndex = totalSlides - 1; // برگشت به آخر
                    }
                    updateSlider();
                });
            });
        });


    </script>
@endpush

