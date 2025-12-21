@extends('layouts.app')

@section('content')
@include('frontend.home.glm-slider')
<!-- Features Section -->
<section class="py-12 bg-white dark:bg-wood-950 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="text-center">
                <div class="w-16 h-16 bg-amber-100 dark:bg-amber-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-tree text-2xl text-amber-600 dark:text-amber-400 icon-pulse"></i>
                </div>
                <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">چوب طبیعی</h3>
                <p class="text-sm text-wood-600 dark:text-wood-300">استفاده از بهترین چوب‌های طبیعی</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-hand-holding-heart text-2xl text-green-600 dark:text-green-400 icon-pulse"></i>
                </div>
                <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">ساخت دستی</h3>
                <p class="text-sm text-wood-600 dark:text-wood-300">هر قطعه با دقت و عشق ساخته شده</p>
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
                <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">ضمانت کیفیت</h3>
                <p class="text-sm text-wood-600 dark:text-wood-300">ضمانت ۱۰ ساله کیفیت محصولات</p>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section id="categories" class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4">محصولات ما</h2>
            <p class="text-lg text-wood-600 dark:text-wood-300">هنر چوب در سه دسته اصلی</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Main Product - Rustic Tables -->
            <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:-translate-y-2">

                <img src="{{asset('/images/tables/big/xazarwood_ir_rustic_table_with_rustic_chairs_and_wooden_cup.jpg')}}" alt="میزهای روستیک" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end">
                    <div class="p-6 text-right w-full">

                        <h3 class="text-2xl font-bold text-white mb-2">میزهای روستیک</h3>
                        <p class="text-white/90 text-sm mb-4">طراحی‌های منحصر به فرد با چوب طبیعی</p>
                        <div class="flex items-center justify-between">

                            <a href="{{route('products-list','میز روستیک')}}" title="میز های روستیک زیبا با طراحی منحصر به فرد " class="px-4 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-medium transition-colors">
                                مشاهده
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rustic Clocks -->
            <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:-translate-y-2">
                <img src="{{asset('/images/clocks/_0063ee4b-3d9a-4a8b-b49a-9697a8b00e12.jpg')}}" alt="ساعت‌های چوبی" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end">
                    <div class="p-6 text-right w-full">

                        <h3 class="text-2xl font-bold text-white mb-2">ساعت‌های چوبی روستیک</h3>
                        <p class="text-white/90 text-sm mb-4">زمان را با زیبایی طبیعت دنبال کنید</p>
                        <div class="flex items-center justify-between">

                            <a href="{{route('products-list','ساعت چوبی')}}" title="ساعت‌های چوبی روستیک" class="px-4 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-medium transition-colors">
                                مشاهده
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wooden Kitchenware -->
            <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:-translate-y-2">

                <img src="{{asset('/images/1760712938389.jpg')}}" alt="ظروف چوبی" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end">
                    <div class="p-6 text-right w-full">
                        <h3 class="text-2xl font-bold text-white mb-2">ظروف چوبی آشپزخانه</h3>
                        <p class="text-white/90 text-sm mb-4">طعم طبیعت در غذای شما</p>
                        <div class="flex items-center justify-between">

                            <a href="{{route('products-list','ظروف چوبی')}}" class="px-4 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-medium transition-colors">
                                مشاهده
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
            <h2 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4">میزهای روستیک ویژه</h2>
            <p class="text-lg text-wood-600 dark:text-wood-300">منتخب بهترین میزهای روستیک دست‌ساز</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Product 1 - Featured Rustic Table -->
            @foreach($tables as $table)
            <div class="group bg-wood-50 dark:bg-wood-900 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    <img src="{{asset($table->main_image)}}" alt="{{$table->name}}" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-gradient-to-r from-amber-600 to-orange-600 text-white text-xs font-semibold rounded-full">
                                میز روستیک
                            </span>
                    </div>
                </div>
                <div class="p-4">
                    <a href="{{route('show.product',['product'=>$table->id,'name'=>$table->name])}}">
                    <h3 class="font-semibold text-wood-800 dark:text-wood-100 mb-2">{{$table->name}}</h3>
                    </a>
                    <p class="text-wood-600 dark:text-wood-300 text-sm mb-3">{{$table->description}}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-amber-700 dark:text-amber-400">{{number_format($table->price)}} تومان</span>

                        <button id="btn-{{$table->id}}"
                                onclick="addToCart('product','{{$table->id}}')"
                                class="px-3 py-2 bg-amber-600 hover:bg-amber-700 text-white rounded-lg text-sm transition-colors">

                            <i class="fas fa-cart-arrow-down"></i>
                            <span>افزودن به سبد</span>
                            <span class="spinner-{{$table->id}}  hidden"><i
                                    class="fas fa-spinner fa-spin-pulse"></i></span>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <!-- Other Products Section -->
        <div class="mt-16">
            <div class="text-center mb-8">
                <h3 class="text-2xl font-bold text-wood-800 dark:text-wood-100 mb-4">ساعت‌ها و ظروف چوبی</h3>
                <p class="text-lg text-wood-600 dark:text-wood-300">سایر محصولات روستیک</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Clock Product 1 -->
                @include('product::frontend.product-card',$products)

               </div>
        </div>

        <div class="text-center mt-8">
            <a href="{{route('products-list','all')}}" class="px-8 py-3 border-2 border-amber-600 text-amber-600 dark:text-amber-400 hover:bg-amber-600 hover:text-white rounded-lg font-semibold transition-all duration-300">
                مشاهده همه محصولات
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{asset('/images/kargah.jpg')}}" alt="کارگاه چوب" class="rounded-2xl shadow-2xl">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-6">هنر میزهای روستیک</h2>
                <p class="text-wood-600 dark:text-wood-300 mb-4">
                    ما بیش از 15 سال است که در زمینه تولید میزهای روستیک دست‌ساز فعالیت داریم. هر میز که از کارگاه ما خارج می‌شود، نتیجه ترکیبی از هنر سنتی و تکنیک‌های مدرن است.
                </p>
                <p class="text-wood-600 dark:text-wood-300 mb-6">
                    تخصص اصلی ما ساخت میزهای روستیک است که هر کدام داستان خود را دارند. ما به استفاده از چوب‌های پایدار و روش‌های تولید دوست‌دار محیط زیست متعهد هستیم.
                </p>
                <div class="grid grid-cols-2 gap-4 text-center">
                    <div>
                        <div class="text-3xl font-bold text-amber-600 dark:text-amber-400">15+</div>
                        <div class="text-sm text-wood-600 dark:text-wood-300">سال تجربه</div>
                    </div>
                    {{--<div>
                        <div class="text-3xl font-bold text-amber-600 dark:text-amber-400">۵۰۰۰+</div>
                        <div class="text-sm text-wood-600 dark:text-wood-300">میز فروخته شده</div>
                    </div>--}}
                    <div>
                        <div class="text-3xl font-bold text-amber-600 dark:text-amber-400">۱۰۰%</div>
                        <div class="text-sm text-wood-600 dark:text-wood-300">دست‌ساز</div>
                    </div>
                </div>
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
