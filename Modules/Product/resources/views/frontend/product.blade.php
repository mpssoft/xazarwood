@extends('layouts.app')

    @section('content')
@push('styles')

    <style>

        #lightboxImage img, #mainImageSrc, .thumbs {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;     /* Keep whole photo visible */
            display: block;
            border-radius:10px;
            margin: auto;            /* Center horizontally */
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%); /* Center vertically */
        }
    </style>
@endpush
<div class="bg-wood-50 md:p-5 dark:bg-wood-900 text-wood-900 dark:text-wood-100 min-h-full">
    <!-- Simple Header -->
<div class="container bg-slate-700/10 dark:bg-wood-950/50  md:rounded-2xl w-full md:w-[90%] mx-auto">
    <header class="max-w-6xl mx-auto px-6 py-8">
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-3 space-x-reverse text-wood-600 dark:text-wood-400 text-sm"><span>{{__('Home')}}</span> <i class="fas fa-chevron-left text-xs"></i><a href="{{route('products-list',$product->categories()->first()->name)}}"> <span class="text-wood-800 dark:text-wood-200">{{__($product->categories()->first()->english)}}</span> </a><i class="fas fa-chevron-left text-xs"></i> <span class="text-wood-800 dark:text-wood-200">{{$product->name}}</span>
        </div>
    </div>
</header><!-- Main Product Section -->
    @php  $activeDiscount = 0; @endphp
<main class="max-w-6xl mx-auto px-6 pb-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16"><!-- Product Images -->
        <div class="space-y-4"><!-- Main Image -->
            <div class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg overflow-hidden cursor-pointer" onclick="openLightbox()">
                <div id="mainImage" class="h-[352px] relative bg-white duration-300">
                    <img id="mainImageSrc" src="{{asset($product->main_image)}}" alt="{{$product->name}}" class="w-full h-96 object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"> <!-- Fallback content if image fails to load -->
                    @if($product->stock==0 || $product->status == 'inactive')
                        <div class="badge-unavailable absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-full shadow-lg z-10 flex items-center space-x-2 space-x-reverse"><span class="font-bold text-sm">{{__('Sold')}}</span> </div>
                    @endif
                    <div class="h-96 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-700 dark:to-wood-600 flex items-center justify-center absolute inset-0" style="display: none;">
                        <div class="text-center text-wood-700 dark:text-wood-300">
                            <i class="fas fa-table text-8xl mb-4"></i>
                            <p class="text-lg font-medium">{{$product->name}}</p>
                        </div>
                    </div><!-- Sale Badge -->
                    <!-- Zoom Icon -->
                    <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white w-10 h-10 rounded-full flex items-center justify-center"><i class="fas fa-search-plus text-sm"></i>
                    </div>
                </div>
            </div><!-- Thumbnail Images -->
            <div class="grid grid-cols-4 gap-3">
                <div class="bg-white dark:bg-wood-800 rounded-lg shadow-sm border-2 border-wood-200 dark:border-wood-600 overflow-hidden cursor-pointer hover:border-wood-500 transition-colors" onclick="selectThumbnail(0, this)" data-image="{{asset($product->main_image)}}" data-big="{{str_replace(['small','500'],['big','1500'],asset($product->main_image))}}" data-title="{{$product->name}}" data-subtitle="{{$product->description}}"><img src="{{asset($product->main_image)}}" alt="{{$product->name}}" class="w-full h-20 object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="h-20 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-700 dark:to-wood-600 flex items-center justify-center" style="display: none;"><i class="fas fa-table text-xl text-wood-700 dark:text-wood-300"></i>
                    </div>
                </div>
                @php $i=1; @endphp
                @foreach($product->images as $image)
                <div class="bg-white w-full md:w-[100px] dark:bg-wood-800 rounded-lg shadow-sm border-2 border-wood-200 dark:border-wood-600 overflow-hidden cursor-pointer hover:border-wood-500 transition-colors" onclick="selectThumbnail({{$i++}}, this)" data-image="{{asset($image->image)}}" data-big="{{str_replace(['small','500'],['big','1500'],asset($image->image))}}" data-title="{{$product->name}}" data-subtitle="{{$product->description}}">
                    <img src="{{asset($image->image)}}" alt="{{$product->name}}" class="w-full  h-20 object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class=" thumbs bg-gradient-to-br from-wood-200 to-wood-300 dark:from-wood-600 dark:to-wood-500 flex items-center justify-center" style="display: none;"><i class="fas fa-eye text-xl text-wood-700 dark:text-wood-300"></i>
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- Product Details -->
        <div class="space-y-6"><!-- Product Header -->
            <div>
                <h1 class="text-2xl font-bold text-wood-800 dark:text-wood-100 mb-2">{{$product->name}} </h1>
                <p class="text-wood-700 dark:text-wood-300  text-sm"> کد : {{$product->product_code}}</p>
                <p class="text-wood-700 dark:text-wood-300  text-sm"> {!! $product->description  !!}</p>
{{--
                <div class="flex items-center space-x-4 space-x-reverse mt-4">
                    <div class="flex text-yellow-400"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                    </div><span class="text-wood-700 dark:text-wood-300 font-medium">۴.۹ (۱۲۷ نظر)</span> <span class="bg-green-100 dark:bg-green-900 text-green-700 dark:text-green-300 px-3 py-1 rounded-full text-sm font-medium"> موجود در انبار </span>
                </div>--}}
            </div>
            <!-- Price Section -->
            @if($product->stock == 0 || $product->status == 'inactive')
                <div class="bg-red-50 mb-3 dark:bg-red-900/20 text-red-600 dark:text-red-400 px-3 py-1 rounded-lg text-sm font-bold">
                    {{__('Out of stock')}}
                </div>
                <div class="bg-white dark:bg-wood-800 rounded-xl p-6 shadow-sm">

                    <div class="space-y-3">
                        <button id="btn-{{$product->id}}"
                                disabled="true"
                                class=" bg-gray-600  dark:bg-gray-500  text-white dark:text-gray-900 px-6 py-3 rounded-lg font-medium transition-colors">
                            <i class="fas fa-shopping-cart ml-2"></i>{{__('Add to cart')}}
                            <span class="spinner-{{$product->id}}  hidden"><i
                                    class="fas fa-spinner fa-spin-pulse"></i></span>
                        </button>
                    </div>
                </div>
            @else
            <div class="flex items-center justify-between mb-6 bg-white dark:bg-wood-800 rounded-xl p-6 shadow-sm">
                <div class="flex flex-col w-full">
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

                    @if($activeDiscount)
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col text-right">
                                <span class="text-sm text-amber-400 mb-3"> ({{__('Update')}}  {{ \Morilog\Jalali\Jalalian::forge($product->updated_at)->ago() }} )</span>
                                <div class="flex items-center">
                                <div class="text-center text-lg text-wood-500 dark:text-wood-400 line-through mb-1">
                                    {{ number_format($product->price) }} تومان


                                </div>
                                    <!-- Discount Badge -->
                                    <div class="flex bg-red-300 text-sm dark:bg-red-500 text-red-500 dark:text-white px-2 mr-2 py-1 rounded  font-bold shadow-sm">
                                        {{ $activeDiscount->value }}{{ $activeDiscount->type == 'percent' ? '%' : ' تومان' }}
                                        {{__("Discount")}}
                                    </div>
                                </div>
                                <div class="font-bold text-gray-800 dark:text-slate-200 text-2xl">
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
                        <span class="text-sm text-amber-400 mb-3"> ({{__('Update')}}  {{ \Morilog\Jalali\Jalalian::forge($product->updated_at)->ago() }} )</span>
                        <div class="text-right">
                            <div class="font-bold text-gray-800 dark:text-wood-200 text-2xl">
                                {{ number_format($product->price) }} تومان

                            </div>
                        </div>


                    @endif
                </div>

            </div>

                @if(strpos($product->product_code,'XW-CH-LUNA') !== false || strpos($product->product_code,'XW-CH-026') !== false)
                    <div class="bg-white dark:bg-white-800 rounded-xl p-6 shadow-sm">
                        <label class="text-red-800  font-medium">
                            <span class="fas fa-check"></span>
                            {{__('The minimum order quantity for this product is 4 units.')}}
                        </label>
                    </div>
                @endif
            <div class="bg-white dark:bg-wood-800 rounded-xl p-6 shadow-sm">
                {{--<div class="flex items-center justify-between mb-4">
                    <label class="text-wood-800 dark:text-wood-200 font-medium">تعداد:</label>
                    <div class="flex items-center bg-wood-100 dark:bg-wood-700 rounded-lg">
                        <button class="px-3 py-2 text-wood-600 dark:text-wood-400 hover:bg-wood-200 dark:hover:bg-wood-600 rounded-r-lg transition-colors" onclick="decreaseQuantity()"> <i class="fas fa-minus"></i> </button> <input type="number" id="quantity" value="1" min="1" max="10" class="w-16 text-center py-2 bg-transparent text-wood-800 dark:text-wood-200 border-none outline-none font-medium"> <button class="px-3 py-2 text-wood-600 dark:text-wood-400 hover:bg-wood-200 dark:hover:bg-wood-600 rounded-l-lg transition-colors" onclick="increaseQuantity()"> <i class="fas fa-plus"></i> </button>
                    </div>
                </div>--}}
                <div class="space-y-3">
                    <button id="btn-{{$product->id}}"
                            onclick="addToCart('product','{{$product->id}}')"
                     class=" bg-amber-600 hover:bg-amber-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                        <i class="fas fa-shopping-cart ml-2"></i>{{__('Add to cart')}}
                        <span class="spinner-{{$product->id}}  hidden"><i
                                class="fas fa-spinner fa-spin-pulse"></i></span>
                    </button>
                </div>
            </div>
                @endif
        </div>
    </div><!-- Specifications -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16"><!-- Technical Specs -->
        <div class="bg-white dark:bg-wood-800 rounded-xl p-6 shadow-sm">
            <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-4 flex items-center">
                <i class="fas fa-ruler-combined text-wood-600 dark:text-wood-400 ml-3"></i> {{__('Product detail')}}</h3>
            <div class="space-y-3">
                @foreach($product->attributes()->get() as $attribute)
                <div class="flex justify-between py-2 border-b border-wood-100 dark:border-wood-700">
                    <span class="text-wood-600 dark:text-wood-400">{{$attribute->name}}</span>
                    <span class="font-medium">{{$attribute->pivot->value->value}} {{$attribute->name=='وزن' ? 'کیلو':''}}</span>
                </div>
                @endforeach
            </div>
        </div><!-- Care Instructions -->
        <div class="bg-white dark:bg-wood-800 rounded-xl p-6 shadow-sm">
            <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-4 flex items-center"><i class="fas fa-heart text-wood-600 dark:text-wood-400 ml-3"></i>{{__('Maintenance Guide')}}</h3>
            <div class="space-y-3">
                <div class="flex items-center p-3 bg-wood-50 dark:bg-wood-700 rounded-lg"><i class="fas fa-droplet text-blue-500 ml-3"></i> <span class="text-sm">{{__('Use mild detergents.')}}</span>
                </div>
                <div class="flex items-center p-3 bg-wood-50 dark:bg-wood-700 rounded-lg"><i class="fas fa-sun text-yellow-500 ml-3"></i> <span class="text-sm">{{__('Avoid direct sunlight.')}}</span>
                </div>
                <div class="flex items-center p-3 bg-wood-50 dark:bg-wood-700 rounded-lg"><i class="fas fa-thermometer-half text-red-500 ml-3"></i> <span class="text-sm">{{__('Appropriate temperature: 18-24 °C')}}</span>
                </div>
                <div class="flex items-center p-3 bg-wood-50 dark:bg-wood-700 rounded-lg"><i class="fas fa-tint text-cyan-500 ml-3"></i> <span class="text-sm">{{__('Optimal humidity: 40-60%')}}</span>
                </div>
            </div>
        </div>

    </div>
    <div class="overflow-auto">
        {!! $product->content !!}
    </div>
    <!-- Related Products -->
    <section>
        <h2 class="text-2xl font-bold  text-wood-800 dark:text-wood-100 mb-6" >{{__('Related products')}}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
            <!-- Related Product 1 -->
            @include('product::frontend.product-card',['products'=>$relatedProducts])


        </div>
    </section>
</main><!-- Lightbox Modal -->
<div id="lightbox" class="fixed max-w-full inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center p-4">
    <div class="relative max-w-full max-h-full"><!-- Close Button --> <button onclick="closeLightbox()" class="absolute -top-12 right-0 text-white hover:text-gray-300 text-2xl z-10"> <i class="fas fa-times"></i> </button> <!-- Image Container -->
        <div id="lightboxImage" class="rounded-2xl max-w-full overflow-hidden relative" style="width: 800px; height: 600px;"><!-- Images will be loaded here -->
        </div><!-- Navigation Arrows --> <button onclick="previousImage()" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 text-white w-12 h-12 rounded-full flex items-center justify-center transition-all"> <i class="fas fa-chevron-left"></i> </button> <button onclick="nextImage()" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 text-white w-12 h-12 rounded-full flex items-center justify-center transition-all"> <i class="fas fa-chevron-right"></i> </button> <!-- Image Counter -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 text-white px-4 py-2 rounded-full text-sm"><span id="imageCounter">1 از 4</span>
        </div>
    </div>
</div>

</div>
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

        // Quantity controls
        function increaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            const currentValue = parseInt(quantityInput.value);
            if (currentValue < 10) {
                quantityInput.value = currentValue + 1;
            }
        }

        function decreaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            const currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        }

        // Thumbnail selection functionality
        function selectThumbnail(index, thumbnailElement) {
            // Get image data from thumbnail
            const imageUrl = thumbnailElement.getAttribute('data-big');
            const title = thumbnailElement.getAttribute('data-title');
            const subtitle = thumbnailElement.getAttribute('data-subtitle');

            // Update main image
            const mainImageSrc = document.getElementById('mainImageSrc');
            mainImageSrc.src = imageUrl;
            mainImageSrc.alt = title;

            // Update current index for lightbox
            currentImageIndex = index;

            // Update thumbnail borders
            const thumbnails = document.querySelectorAll('[data-image]');
            thumbnails.forEach((thumb, i) => {
                if (i === index) {
                    thumb.classList.remove('border-wood-200', 'dark:border-wood-600');
                    thumb.classList.add('border-wood-500');
                } else {
                    thumb.classList.remove('border-wood-500');
                    thumb.classList.add('border-wood-200', 'dark:border-wood-600');
                }
            });
        }

        // Lightbox functionality with real images
        let currentImageIndex = 0;

        // Get image data from thumbnails
        function getImageData() {
            const thumbnails = document.querySelectorAll('[data-image]');
            const imageData = [];

            thumbnails.forEach(thumb => {
                imageData.push({
                    url: thumb.getAttribute('data-big'),
                    title: thumb.getAttribute('data-title'),
                    subtitle: thumb.getAttribute('data-subtitle')
                });
            });

            return imageData;
        }

        function openLightbox() {
            document.getElementById('lightbox').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            updateLightboxImage();
        }

        function closeLightbox() {
            document.getElementById('lightbox').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function nextImage() {
            const imageData = getImageData();
            currentImageIndex = (currentImageIndex + 1) % imageData.length;
            updateLightboxImage();
        }

        function previousImage() {
            const imageData = getImageData();
            currentImageIndex = (currentImageIndex - 1 + imageData.length) % imageData.length;
            updateLightboxImage();
        }

        function updateLightboxImage() {
            const imageData = getImageData();
            const lightboxImage = document.getElementById('lightboxImage');
            const imageCounter = document.getElementById('imageCounter');
            const currentImage = imageData[currentImageIndex];

            lightboxImage.innerHTML = `
                <img src="${currentImage.url}" alt="${currentImage.title}"
                     class=" object-cover"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                     >

                <!-- Fallback content if image fails to load -->
                <div class="bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-700 dark:to-wood-600 w-full h-full flex items-center justify-center absolute inset-0" style="display: none;">
                    <div class="text-center text-wood-700 dark:text-wood-300">
                        <i class="fas fa-image text-6xl mb-4"></i>
                        <p class="text-xl font-medium">تصویر در حال بارگذاری...</p>
                    </div>
                </div>

                <!-- Image overlay with title -->
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                    <p class="text-white text-xl font-bold">${currentImage.title}</p>
                    <p class="text-white/80 text-sm mt-1">${currentImage.subtitle}</p>
                </div>

                <!-- Sale Badge -->
                 @if($activeDiscount)
                <div class="absolute top-6 right-6">
                    <span class="bg-red-500 text-white px-4 py-3 rounded-xl text-lg font-bold shadow-lg">
                        {{ $activeDiscount->value }}{{ $activeDiscount->type == 'percent' ? '%' : ' تومان' }} تخفیف
                    </span>
                </div>
                @endif
            `;

            imageCounter.textContent = `${currentImageIndex + 1} از ${imageData.length}`;
        }

        // Close lightbox with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeLightbox();
            } else if (e.key === 'ArrowRight') {
                nextImage();
            } else if (e.key === 'ArrowLeft') {
                previousImage();
            }
        });

        // Close lightbox when clicking outside the image
        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });
    </script>
@endpush
