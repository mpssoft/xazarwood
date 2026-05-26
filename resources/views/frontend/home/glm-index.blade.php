@extends('layouts.app')

@section('content')
    @include('frontend.home.glm-slider')

    <!-- Categories Section -->
    <section id="categories" class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4">{{__('Our products')}}</h2>
                <p class="text-lg text-wood-600 dark:text-wood-300">{{__('Three main categories')}}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Main Product - Rustic Tables -->
                <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:-translate-y-2">

                    <img src="{{asset('/images/tables/big/xazarwood_ir_rustic_table_with_rustic_chairs_and_wooden_cup.jpg')}}" alt="{{__('Rustic tables')}}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end">
                        <div class="p-6 text-right w-full">

                            <h3 class="text-2xl font-bold text-white mb-2">{{__('Rustic tables')}}</h3>
                            <p class="text-white/90 text-sm mb-4">{{__('Unique designs with natural wood')}}</p>
                            <div class="flex items-center justify-between">

                                <a href="{{route('products-list',__('Rustic Table'))}}" title="{{__('Unique designs with natural wood')}}" class="px-4 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-medium transition-colors">
                                    {{__('Show category')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rustic Clocks -->
                <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:-translate-y-2">
                    <img src="{{asset('/images/clocks/_0063ee4b-3d9a-4a8b-b49a-9697a8b00e12.jpg')}}" alt="{{__('Wooden clocks')}}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end">
                        <div class="p-6 text-right w-full">

                            <h3 class="text-2xl font-bold text-white mb-2">{{__('Rustic wooden clocks')}}</h3>
                            <p class="text-white/90 text-sm mb-4">{{__('Follow time with the beauty of nature')}}</p>
                            <div class="flex items-center justify-between">

                                <a href="{{route('products-list',__('Wooden clocks'))}}" title="{{__('Rustic wooden clocks')}}" class="px-4 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-medium transition-colors">
                                    {{__('Show category')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wooden Kitchenware -->
                <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:-translate-y-2">

                    <img src="{{asset('/images/1760712938389.jpg')}}" alt="{{__('Wooden dishes')}}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end">
                        <div class="p-6 text-right w-full">
                            <h3 class="text-2xl font-bold text-white mb-2">{{__('Wooden dishes')}}</h3>
                            <p class="text-white/90 text-sm mb-4">{{__('The taste of nature in your food')}}</p>
                            <div class="flex items-center justify-between">

                                <a href="{{route('products-list',__('Wooden dishes'))}}" class="px-4 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-medium transition-colors">
                                    {{__('Show category')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products - Main Focus on Rustic Tables -->
    <section id="products" class="py-16 bg-white dark:bg-wood-950 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4">{{__('Rustic tables')}}</h2>
                <p class="text-lg text-wood-600 dark:text-wood-300"> {{__('Best rustic hand-made tables')}}</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4  gap-3">
                <!-- Product 1 - Featured Rustic Table -->
                @include('product::frontend.product-card',['products' =>$tables])

            </div>

            <!-- Other Products Section -->
            <div class="mt-16">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-wood-800 dark:text-wood-100 mb-4">{{__('Rustic wooden clocks')}}</h3>
                    <p class="text-lg text-wood-600 dark:text-wood-300">{{__('Taiwanese silent motor')}}</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4  gap-3">
                    <!-- Clock Product 1 -->
                    @include('product::frontend.product-card',['products'=>$clocks])

                </div>
            </div>
            <!--  dishes  -->
            <div class="mt-16">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-wood-800 dark:text-wood-100 mb-4">{{__('Rustic wooden dishes')}}</h3>
                    <p class="text-lg text-wood-600 dark:text-wood-300">{{__('Wooden dishes made from walnut wood')}}</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4  gap-3">
                    <!-- Clock Product 1 -->
                    @include('product::frontend.product-card',['products'=>$dishes])

                </div>
            </div>

            <div class="text-center mt-8">
                <a href="{{route('products-list','all')}}" class="px-8 py-3 border-2 border-amber-600 text-amber-600 dark:text-amber-400 hover:bg-amber-600 hover:text-white rounded-lg font-semibold transition-all duration-300">
                    {{__('Show all products')}}
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="{{asset('/images/dishs/chocolate/big/xazarwoods_com_rustic_rustic_dish_1500x1500_014.webp')}}" alt="{{__("Xazarwoods' Workshop")}}" class="rounded-2xl shadow-2xl">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-6">{{__('Rustic Table Art')}}</h2>
                    <p class="text-wood-600 dark:text-wood-300 mb-4">
                        {{__('We have been specializing in the handcrafted production of rustic tables for over 15 years. Every table that leaves our workshop is a result of a blend of traditional art and modern techniques.')}}
                    </p>
                    <p class="text-wood-600 dark:text-wood-300 mb-6">
                        {{__('Our primary specialty is crafting rustic tables, each with its own story. We are committed to using sustainable woods and eco-friendly production methods.')}}
                    </p>
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div>
                            <div class="text-3xl font-bold text-amber-600 dark:text-amber-400">20+</div>
                            <div class="text-sm text-wood-600 dark:text-wood-300">{{__('Years of experience')}}</div>
                        </div>
                        {{--<div>
                            <div class="text-3xl font-bold text-amber-600 dark:text-amber-400">۵۰۰۰+</div>
                            <div class="text-sm text-wood-600 dark:text-wood-300">میز فروخته شده</div>
                        </div>--}}
                        <div>
                            <div class="text-3xl font-bold text-amber-600 dark:text-amber-400">۱۰۰%</div>
                            <div class="text-sm text-wood-600 dark:text-wood-300">{{__('Hand-made')}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-12 bg-white dark:bg-wood-950 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-amber-100 dark:bg-amber-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tree text-2xl text-amber-600 dark:text-amber-400 icon-pulse"></i>
                    </div>
                    <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">{{__('Natural wood')}}</h3>
                    <p class="text-sm text-wood-600 dark:text-wood-300">{{__('Using the best natural woods')}}</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-hand-holding-heart text-2xl text-green-600 dark:text-green-400 icon-pulse"></i>
                    </div>
                    <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">{{__('Hand-made')}}</h3>
                    <p class="text-sm text-wood-600 dark:text-wood-300">{{__('Every piece is crafted with care and love')}}</p>
                </div>
                {{-- <div class="text-center">
                     <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                         <i class="fas fa-truck text-2xl text-blue-600 dark:text-blue-400 icon-pulse"></i>
                     </div>
                     <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">ارسال سریع</h3>
                     <p class="text-sm text-wood-600 dark:text-wood-300">تحویل در کمتر از ۴۸ ساعت</p>
                 </div>--}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-2xl text-purple-600 dark:text-purple-400 icon-pulse"></i>
                    </div>
                    <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">{{__('Quality Assurance')}}</h3>
                    <p class="text-sm text-wood-600 dark:text-wood-300">{{__('10-year quality guarantee for products')}}</p>
                </div>
            </div>
        </div>
    </section>

    {{--
    <!-- Testimonials -->
    <section class="py-16 bg-white dark:bg-wood-950 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4">نظرات مشتریان</h2>
                <p class="text-lg text-wood-600 dark:text-wood-300">مشتریان ما چه می‌گویند</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-wood-50 dark:bg-wood-900 p-6 rounded-xl">
                    <div class="flex mb-4">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="text-wood-600 dark:text-wood-300 mb-4">
                        "میز روستیک که خریدم فوق‌العاده است. کیفیت چوب و طراحی بی‌نظیر است. واقعاً هنر دست‌ساز است."
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-amber-200 rounded-full ml-3"></div>
                        <div>
                            <div class="font-semibold text-wood-800 dark:text-wood-100">علی رضایی</div>
                            <div class="text-sm text-wood-500 dark:text-wood-400">تهران</div>
                        </div>
                    </div>
                </div>
                <div class="bg-wood-50 dark:bg-wood-900 p-6 rounded-xl">
                    <div class="flex mb-4">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="text-wood-600 dark:text-wood-300 mb-4">
                        "ساعت چوبی روستیک که خریدم همزمان زیبا و کاربردی است. از خریدم بسیار راضی هستم."
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-200 rounded-full ml-3"></div>
                        <div>
                            <div class="font-semibold text-wood-800 dark:text-wood-100">مریم احمدی</div>
                            <div class="text-sm text-wood-500 dark:text-wood-400">اصفهان</div>
                        </div>
                    </div>
                </div>
                <div class="bg-wood-50 dark:bg-wood-900 p-6 rounded-xl">
                    <div class="flex mb-4">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="text-wood-600 dark:text-wood-300 mb-4">
                        "ظروف چوبی آشپزخانه کیفیت فوق‌العاده‌ای دارند. هر قطعه هنری واقعی است. پیشنهاد می‌کنم!"
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
    --}}

    {{--
    <!-- Newsletter -->
    <section class="py-16 bg-gradient-to-r from-amber-600 to-orange-600">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="flex items-center justify-center mb-4">
                <i class="fas fa-table text-white text-3xl ml-3"></i>
                <h2 class="text-3xl font-bold text-white">عضویت در خبرنامه میزهای روستیک</h2>
            </div>
            <p class="text-white/90 mb-8">از جدیدترین میزها و تخفیف‌های ویژه باخبر شوید</p>
            <form class="flex flex-col md:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="ایمیل خود را وارد کنید" class="flex-1 px-4 py-3 rounded-lg text-wood-800 focus:outline-none focus:ring-2 focus:ring-white">
                <button type="submit" class="px-6 py-3 bg-white text-amber-600 rounded-lg font-semibold hover:bg-wood-50 transition-colors">
                    عضویت
                </button>
            </form>
        </div>
    </section>
    --}}
@endsection
