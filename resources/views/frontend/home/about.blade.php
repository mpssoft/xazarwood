@extends('layouts.app')
@section('content')

<div class="bg-wood-50 dark:bg-wood-900 text-wood-900 dark:text-wood-100 min-h-full"><!-- Header -->
<!-- Hero Section -->
<section class="relative py-20 overflow-hidden min-h-[600px]"><!-- Background Image -->
    <div class="absolute inset-0 z-0" style="background: url({{asset('/images/tables/big/xazarwood_ir_rustic_table_with_rustic_chairs.jpg')}});background-attachment:fixed;background-size: cover;">
        <!-- Fallback background -->
        <div class="w-full h-full bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-700" style="display: none;"></div>
    </div><!-- Gradient Overlay (black from bottom to transparent top) -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-10"></div>
    <div class="max-w-6xl mx-auto px-6 relative z-20">
        <div class="text-center fade-in">
            <div class="inline-block bg-wood-600 dark:bg-wood-500 text-white px-4 py-2 rounded-full text-sm font-medium mb-4"><i class="fas fa-hammer ml-2"></i> بیش از ۱۵ سال تجربه
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">درباره خزرچوب</h2>
            <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">ما با عشق و دقت، محصولات چوبی دست‌ساز از جنس گردو می‌سازیم که زیبایی و دوام را در خانه شما به ارمغان می‌آورد</p>
        </div>
    </div><!-- Decorative Elements -->
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-wood-50 dark:from-wood-900 to-transparent z-20"></div>
</section>
<main class="max-w-6xl mx-auto px-6 py-16"><!-- Story Section -->
    <section class="mb-20 fade-in">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-6"><i class="fas fa-book-open text-wood-600 dark:text-wood-400 ml-3"></i> داستان ما</h3>
                <div class="space-y-4 text-wood-700 dark:text-wood-300 leading-relaxed">
                    <p>خزرچوب در شهر زیبای <strong>سلماس</strong> با هدف احیای هنر چوب‌کاری سنتی و ترکیب آن با طراحی مدرن تاسیس شد. ما معتقدیم که هر قطعه چوب داستانی دارد و وظیفه ما این است که آن داستان را به زیباترین شکل ممکن روایت کنیم.</p>
                    <p>با استفاده از چوب گردو مرغوب و تکنیک‌های دست‌سازی، ما محصولاتی می‌سازیم که نه تنها زیبا هستند، بلکه برای نسل‌ها دوام خواهند آورد. هر محصول ما حاصل ساعت‌ها کار دقیق و عاشقانه است.</p>
                    <p>فلسفه ما ساده است: <strong>کیفیت بی‌نظیر، طراحی منحصر به فرد، و رضایت کامل مشتری</strong>.</p>
                </div>
            </div>
            <div class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg p-8">
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center p-6 bg-wood-50 dark:bg-wood-700 rounded-xl">
                        <div class="text-4xl font-bold text-wood-600 dark:text-wood-400 mb-2">
                            ۱۵+
                        </div>
                        <div class="text-sm text-wood-700 dark:text-wood-300">
                            سال تجربه
                        </div>
                    </div>

                    <div class="text-center p-6 bg-wood-50 dark:bg-wood-700 rounded-xl">
                        <div class="text-4xl font-bold text-wood-600 dark:text-wood-400 mb-2">
                            ۱۰۰٪
                        </div>
                        <div class="text-sm text-wood-700 dark:text-wood-300">
                            دست‌ساز
                        </div>
                    </div>
                    <div class="text-center p-6 bg-wood-50 dark:bg-wood-700 rounded-xl">
                        <div class="text-4xl font-bold text-wood-600 dark:text-wood-400 mb-2">
                            100+
                        </div>
                        <div class="text-sm text-wood-700 dark:text-wood-300">
                            مشتری راضی
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Founder Section -->
    <section class="mb-20 fade-in">
        <div class="bg-gradient-to-br from-wood-600 to-wood-700 dark:from-wood-700 dark:to-wood-800 rounded-2xl shadow-xl p-8 md:p-12 text-white">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <div class="flex justify-center">
                    <div class="w-40 h-40 bg-white dark:bg-wood-600 rounded-full flex items-center justify-center shadow-lg"><i class="fas fa-user-tie text-6xl text-wood-600 dark:text-wood-200"></i>
                    </div>
                </div>
                <div class="md:col-span-2">

                    <h3 class="text-3xl font-bold mb-4">علیرضا حق نظری</h3>
                    <p class="text-white/90 leading-relaxed mb-4">با بیش از ۱۵ سال تجربه در هنر چوب‌کاری، علیرضا حق نظری تمام عشق و تخصص خود را در ساخت محصولات چوبی منحصر به فرد به کار می‌گیرد. او معتقد است که چوب‌کاری فقط یک حرفه نیست، بلکه یک هنر و یک سبک زندگی است.</p>
                    <div class="flex flex-wrap gap-3"> <span class="bg-white/20 px-3 py-1 rounded-lg text-sm"> <i class="fas fa-palette ml-1"></i> طراح محصول </span> <span class="bg-white/20 px-3 py-1 rounded-lg text-sm"> <i class="fas fa-tools ml-1"></i> استاد کار دست‌ساز </span>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Products Section -->
    <section class="mb-20 fade-in">
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4">محصولات ما</h3>
            <p class="text-lg text-wood-700 dark:text-wood-300 max-w-2xl mx-auto">ما طیف متنوعی از محصولات چوبی دست‌ساز را با استفاده از چوب گردو مرغوب تولید می‌کنیم</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6"><!-- Product 1 -->
            <div class="bg-white dark:bg-wood-800 rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow">
                <div class="w-20 h-20 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-700 dark:to-wood-600 rounded-full flex items-center justify-center mx-auto mb-4 product-icon"><i class="fas fa-table text-3xl text-wood-600 dark:text-wood-300"></i>
                </div>
                <h4 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-2">میزهای روستیک</h4>
                <p class="text-sm text-wood-600 dark:text-wood-400">میزهای غذاخوری و جلو مبلی با طراحی روستیک و مدرن</p>
            </div><!-- Product 2 -->
            <div class="bg-white dark:bg-wood-800 rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow">
                <div class="w-20 h-20 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-700 dark:to-wood-600 rounded-full flex items-center justify-center mx-auto mb-4 product-icon"><i class="fas fa-clock text-3xl text-wood-600 dark:text-wood-300"></i>
                </div>
                <h4 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-2">ساعت‌های دیواری</h4>
                <p class="text-sm text-wood-600 dark:text-wood-400">ساعت‌های چوبی دست‌ساز با طراحی‌های منحصر به فرد</p>
            </div><!-- Product 3 -->
            <div class="bg-white dark:bg-wood-800 rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow">
                <div class="w-20 h-20 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-700 dark:to-wood-600 rounded-full flex items-center justify-center mx-auto mb-4 product-icon"><i class="fas fa-utensils text-3xl text-wood-600 dark:text-wood-300"></i>
                </div>
                <h4 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-2">ظروف آشپزخانه</h4>
                <p class="text-sm text-wood-600 dark:text-wood-400">کاسه، بشقاب و ظروف چوبی برای آشپزخانه شما</p>
            </div><!-- Product 4 -->
            <div class="bg-white dark:bg-wood-800 rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow">
                <div class="w-20 h-20 bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-700 dark:to-wood-600 rounded-full flex items-center justify-center mx-auto mb-4 product-icon"><i class="fas fa-chair text-3xl text-wood-600 dark:text-wood-300"></i>
                </div>
                <h4 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-2">صندلی‌های چوبی</h4>
                <p class="text-sm text-wood-600 dark:text-wood-400">صندلی‌های راحت و زیبا با کیفیت بی‌نظیر</p>
            </div>
        </div>
    </section><!-- Why Choose Us Section -->
    <section class="mb-20 fade-in">
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4">چرا خزرچوب؟</h3>
            <p class="text-lg text-wood-700 dark:text-wood-300 max-w-2xl mx-auto">ویژگی‌هایی که ما را از دیگران متمایز می‌کند</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-wood-800 rounded-xl shadow-sm p-6">
                <div class="flex items-start space-x-4 space-x-reverse">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-leaf text-green-600 dark:text-green-400 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-wood-800 dark:text-wood-100 mb-2">چوب گردو مرغوب</h4>
                        <p class="text-sm text-wood-600 dark:text-wood-400">استفاده از بهترین چوب گردو طبیعی با کیفیت عالی</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-wood-800 rounded-xl shadow-sm p-6">
                <div class="flex items-start space-x-4 space-x-reverse">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-hands text-blue-600 dark:text-blue-400 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-wood-800 dark:text-wood-100 mb-2">۱۰۰٪ دست‌ساز</h4>
                        <p class="text-sm text-wood-600 dark:text-wood-400">تمام محصولات با دست و با دقت بالا ساخته می‌شوند</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-wood-800 rounded-xl shadow-sm p-6">
                <div class="flex items-start space-x-4 space-x-reverse">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-palette text-purple-600 dark:text-purple-400 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-wood-800 dark:text-wood-100 mb-2">طراحی سفارشی</h4>
                        <p class="text-sm text-wood-600 dark:text-wood-400">امکان سفارش محصول با طراحی دلخواه شما</p>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-wood-800 rounded-xl shadow-sm p-6">
                <div class="flex items-start space-x-4 space-x-reverse">
                    <div class="w-12 h-12 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-heart text-red-600 dark:text-red-400 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-wood-800 dark:text-wood-100 mb-2">ساخت با عشق</h4>
                        <p class="text-sm text-wood-600 dark:text-wood-400">هر محصول با دقت و علاقه فراوان ساخته می‌شود</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-wood-800 rounded-xl shadow-sm p-6">
                <div class="flex items-start space-x-4 space-x-reverse">
                    <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-shield-alt text-yellow-600 dark:text-yellow-400 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-wood-800 dark:text-wood-100 mb-2">ضمانت کیفیت</h4>
                        <p class="text-sm text-wood-600 dark:text-wood-400">تضمین کیفیت و دوام بالای محصولات</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Process Section -->
    <section class="mb-20 fade-in">
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4">فرآیند کار ما</h3>
            <p class="text-lg text-wood-700 dark:text-wood-300 max-w-2xl mx-auto">از سفارش تا تحویل، مراحل ساخت محصول شما</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="w-16 h-16 bg-wood-600 dark:bg-wood-500 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                    ۱
                </div>
                <h4 class="text-lg font-bold text-wood-800 dark:text-wood-100 mb-2">مشاوره و سفارش</h4>
                <p class="text-sm text-wood-600 dark:text-wood-400">دریافت سفارش و مشاوره رایگان درباره طراحی</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-wood-600 dark:bg-wood-500 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                    ۲
                </div>
                <h4 class="text-lg font-bold text-wood-800 dark:text-wood-100 mb-2">طراحی و تایید</h4>
                <p class="text-sm text-wood-600 dark:text-wood-400">ارائه طرح نهایی و دریافت تایید شما</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-wood-600 dark:bg-wood-500 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                    ۳
                </div>
                <h4 class="text-lg font-bold text-wood-800 dark:text-wood-100 mb-2">ساخت دست‌ساز</h4>
                <p class="text-sm text-wood-600 dark:text-wood-400">شروع ساخت محصول با دقت و کیفیت بالا</p>
            </div>

        </div>
    </section><!-- Contact CTA Section -->
    <section class="fade-in">
        <div class="bg-gradient-to-br from-wood-600 to-wood-700 dark:from-wood-700 dark:to-wood-800 rounded-2xl shadow-xl p-8 md:p-12 text-center text-white"><i class="fas fa-map-marker-alt text-5xl mb-6 opacity-80"></i>
            <h3 class="text-3xl font-bold mb-4">ما را پیدا کنید</h3>
            <p class="text-xl mb-2">شهر سلماس، آذربایجان غربی</p>

            <section class="mb-20 fade-in">
                <div class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg p-8">
                    <div class="text-center mb-8">
                        <h3 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4"><i class="fas fa-map text-wood-600 dark:text-wood-400 ml-3"></i> موقعیت کارگاه</h3>
                        <p class="text-wood-700 dark:text-wood-300">سلماس، خیابان شریعتی، تقاطع خیابان فردوسی - صنایع چوبی خزرچوب</p>
                    </div>
                    <div class="bg-wood-100 dark:bg-wood-700 rounded-xl h-96 flex items-center justify-center">
                        <div class="text-center w-full h-full ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d783.9248787387371!2d44.759149199999996!3d38.193653399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4011af00343ba77d%3A0x5eaf2462f575c259!2sXazarwood!5e0!3m2!1sen!2s!4v1762699283415!5m2!1sen!2s" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/contact" >
                <div class="bg-white/20 px-6 py-3 rounded-lg"><i class="fas fa-phone ml-2"></i> <span>تماس با ما</span>
                </div>
                </a>
            </div>
        </div>
    </section>
</main><!-- Footer -->
</div>

@endsection
