@extends('layouts.app')

@section('content')
    <div class="bg-wood-50 dark:bg-wood-950 text-wood-900 dark:text-wood-50 min-h-screen">

        <!-- Header -->
        <div class="bg-gradient-to-r from-wood-600 to-wood-800 text-wood-50 py-12">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-wood-50 bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-file-contract text-3xl"></i>
                    </div>
                    <h1 class="text-4xl font-bold mb-4">شرایط و ضوابط</h1>
                    <p class="text-xl opacity-90">فروشگاه اینترنتی خزرچوب</p>
                    <div class="mt-6 text-sm opacity-80">
                        <i class="fas fa-globe ml-2"></i>
                        XazarWoods.com
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

            <!-- Introduction -->
            <div class="bg-wood-50 dark:bg-wood-900 rounded-2xl shadow-lg border border-wood-200 dark:border-wood-800 p-8 mb-8">
                <div class="bg-wood-100 dark:bg-wood-900/20 rounded-lg p-6 mb-8">
                    <div class="flex items-start gap-4">
                        <i class="fas fa-info-circle text-wood-700 text-2xl mt-1"></i>
                        <div>
                            <h2 class="text-xl font-bold text-wood-800 dark:text-wood-200 mb-3">مقدمه</h2>
                            <p class="text-wood-700 dark:text-wood-300 leading-relaxed">
                                از انتخاب فروشگاه اینترنتی خزرچوب (XazarWoods.com) سپاسگزاریم. این مجموعه عرضه‌کننده محصولات دست‌ساز چوبی شامل میزهای چوبی روستیک، ساعت‌های چوبی، صندل‌های چوبی و ظروف چوبی است.
                                استفاده از خدمات، ثبت سفارش یا خرید از سایت به معنای پذیرش کامل شرایط و قوانین زیر می‌باشد.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Table of Contents -->
                <div class="bg-wood-50 dark:bg-wood-800 rounded-lg p-6 mb-8">
                    <h3 class="font-bold text-wood-900 dark:text-wood-50 mb-4">
                        <i class="fas fa-list ml-2"></i>
                        فهرست مطالب
                    </h3>
                    <div class="grid md:grid-cols-2 gap-3">
                        <a href="#section1" class="flex items-center gap-3 p-3 bg-wood-50 dark:bg-wood-800 rounded-lg hover:bg-wood-100 dark:hover:bg-wood-900/20 transition-colors group">
                            <span class="w-8 h-8 bg-wood-100 dark:bg-wood-900 text-wood-700 dark:text-wood-300 rounded-full flex items-center justify-center text-sm font-bold">۱</span>
                            <span class="text-wood-700 dark:text-wood-300 group-hover:text-wood-700 dark:group-hover:text-wood-300">مالکیت فکری و کپی‌رایت</span>
                        </a>
                        <a href="#section2" class="flex items-center gap-3 p-3 bg-wood-50 dark:bg-wood-800 rounded-lg hover:bg-wood-100 dark:hover:bg-wood-900/20 transition-colors group">
                            <span class="w-8 h-8 bg-wood-100 dark:bg-wood-900 text-wood-700 dark:text-wood-300 rounded-full flex items-center justify-center text-sm font-bold">۲</span>
                            <span class="text-wood-700 dark:text-wood-300 group-hover:text-wood-700 dark:group-hover:text-wood-300">شرایط خرید، ارسال و بازگشت کالا</span>
                        </a>
                        <a href="#section3" class="flex items-center gap-3 p-3 bg-wood-50 dark:bg-wood-800 rounded-lg hover:bg-wood-100 dark:hover:bg-wood-900/20 transition-colors group">
                            <span class="w-8 h-8 bg-wood-100 dark:bg-wood-900 text-wood-700 dark:text-wood-300 rounded-full flex items-center justify-center text-sm font-bold">۳</span>
                            <span class="text-wood-700 dark:text-wood-300 group-hover:text-wood-700 dark:group-hover:text-wood-300">حریم خصوصی</span>
                        </a>
                        <a href="#section4" class="flex items-center gap-3 p-3 bg-wood-50 dark:bg-wood-800 rounded-lg hover:bg-wood-100 dark:hover:bg-wood-900/20 transition-colors group">
                            <span class="w-8 h-8 bg-wood-100 dark:bg-wood-900 text-wood-700 dark:text-wood-300 rounded-full flex items-center justify-center text-sm font-bold">۴</span>
                            <span class="text-wood-700 dark:text-wood-300 group-hover:text-wood-700 dark:group-hover:text-wood-300">محدودیت‌ها و مسئولیت‌ها</span>
                        </a>
                        <a href="#section5" class="flex items-center gap-3 p-3 bg-wood-50 dark:bg-wood-800 rounded-lg hover:bg-wood-100 dark:hover:bg-wood-900/20 transition-colors group">
                            <span class="w-8 h-8 bg-wood-100 dark:bg-wood-900 text-wood-700 dark:text-wood-300 rounded-full flex items-center justify-center text-sm font-bold">۵</span>
                            <span class="text-wood-700 dark:text-wood-300 group-hover:text-wood-700 dark:group-hover:text-wood-300">قبول شرایط</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Section 1 -->
            <div id="section1" class="bg-wood-50 dark:bg-wood-800 rounded-2xl shadow-lg border border-wood-200 dark:border-wood-800 p-8 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-wood-600 to-wood-700 rounded-full flex items-center justify-center">
                        <span class="text-wood-50 font-bold text-lg">۱</span>
                    </div>
                    <h2 class="text-2xl font-bold text-wood-900 dark:text-wood-50">مالکیت فکری و کپی‌رایت</h2>
                </div>

                <div class="space-y-6">
                    <div class="border-r-4 border-wood-700 pr-6">
                        <h3 class="font-bold text-wood-900 dark:text-wood-50 mb-3 flex items-center gap-2">
                            <i class="fas fa-copyright text-wood-700"></i>
                            مالکیت محتوا
                        </h3>
                        <p class="text-wood-700 dark:text-wood-300 leading-relaxed">
                            تمامی تصاویر محصولات، مدل‌های چوبی، توضیحات، طراحی‌ها و محتوای وب‌سایت خزرچوب متعلق به مجموعه XazarWoods است و هرگونه استفاده بدون مجوز کتبی پیگرد قانونی دارد.
                        </p>
                    </div>

                    <div class="border-r-4 border-wood-600 pr-6">
                        <h3 class="font-bold text-wood-900 dark:text-wood-50 mb-3 flex items-center gap-2">
                            <i class="fas fa-user-shield text-wood-600"></i>
                            استفاده شخصی
                        </h3>
                        <p class="text-wood-700 dark:text-wood-300 leading-relaxed">
                            مشتریان تنها مجاز به مشاهده و استفاده شخصی از محتوای سایت هستند. هرگونه استفاده تجاری یا انتشار عمومی غیرقانونی است.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div id="section2" class="bg-wood-50 dark:bg-wood-800 rounded-2xl shadow-lg border border-wood-200 dark:border-wood-800 p-8 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-wood-600 to-wood-700 rounded-full flex items-center justify-center">
                        <span class="text-wood-50 font-bold text-lg">۲</span>
                    </div>
                    <h2 class="text-2xl font-bold text-wood-900 dark:text-wood-50">شرایط خرید، ارسال و بازگشت کالا</h2>
                </div>

                <div class="space-y-6">
                    <div class="border-r-4 border-wood-600 pr-6">
                        <h3 class="font-bold text-wood-900 dark:text-wood-50 mb-3 flex items-center gap-2">
                            <i class="fas fa-check-circle text-wood-600"></i>
                            ثبت و تأیید خرید
                        </h3>
                        <p class="text-wood-700 dark:text-wood-300 leading-relaxed">
                            پس از ثبت سفارش، هماهنگی‌های لازم جهت آماده‌سازی و ارسال کالا با شما انجام می‌شود. پرداخت‌ها از طریق درگاه‌های امن بانکی صورت می‌گیرد.
                        </p>
                    </div>

                    <div class="border-r-4 border-wood-500 pr-6">
                        <h3 class="font-bold text-wood-900 dark:text-wood-50 mb-3 flex items-center gap-2">
                            <i class="fas fa-shipping-fast text-wood-500"></i>
                            شرایط ارسال
                        </h3>
                        <p class="text-wood-700 dark:text-wood-300 leading-relaxed">
                            هزینه ارسال بر عهده مشتری بوده و بر اساس فاصله شهر، وزن محصول و نوع باربری تعیین می‌شود. زمان ارسال بسته به نوع محصول (آماده یا سفارشی) متفاوت است.
                        </p>
                    </div>

                    <div class="bg-wood-100 dark:bg-wood-900/20 border-2 border-wood-200 dark:border-wood-800 rounded-lg p-6">
                        <h3 class="font-bold text-wood-800 dark:text-wood-200 mb-4 flex items-center gap-2">
                            <i class="fas fa-exclamation-triangle text-wood-700 text-xl"></i>
                            شرایط بازگشت کالا
                        </h3>
                        <div class="bg-wood-100 dark:bg-wood-900/40 rounded-lg p-4 mb-4">
                            <p class="text-wood-800 dark:text-wood-200 font-semibold leading-relaxed">
                                بازگشت کالا تنها در صورتی امکان‌پذیر است که محصول هنگام حمل‌ونقل دچار شکستگی یا آسیب شده باشد.
                            </p>
                        </div>
                        <p class="text-wood-700 dark:text-wood-300 leading-relaxed">
                            مشتری موظف است حداکثر ۲۴ ساعت پس از دریافت کالا، همراه با عکس و فیلم از آسیب، موضوع را به پشتیبانی اطلاع دهد.
                        </p>
                    </div>

                    <div class="border-r-4 border-wood-500 pr-6">
                        <h3 class="font-bold text-wood-900 dark:text-wood-50 mb-3 flex items-center gap-2">
                            <i class="fas fa-user-check text-wood-500"></i>
                            مسئولیت مشتری
                        </h3>
                        <p class="text-wood-700 dark:text-wood-300 leading-relaxed">
                            انتخاب رنگ، مدل و ابعاد صحیح کالا بر عهده خریدار است. اختلاف‌های طبیعی در بافت و رنگ چوب جزء ویژگی‌های طبیعی محصول بوده و نقص محسوب نمی‌شود.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div id="section3" class="bg-wood-50 dark:bg-wood-800 rounded-2xl shadow-lg border border-wood-200 dark:border-wood-800 p-8 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-wood-600 to-wood-700 rounded-full flex items-center justify-center">
                        <span class="text-wood-50 font-bold text-lg">۳</span>
                    </div>
                    <h2 class="text-2xl font-bold text-wood-900 dark:text-wood-50">حریم خصوصی</h2>
                </div>

                <div class="space-y-6">
                    <div class="border-r-4 border-wood-600 pr-6">
                        <h3 class="font-bold text-wood-900 dark:text-wood-50 mb-3 flex items-center gap-2">
                            <i class="fas fa-database text-wood-600"></i>
                            جمع‌آوری اطلاعات
                        </h3>
                        <p class="text-wood-700 dark:text-wood-300 leading-relaxed">
                            اطلاعاتی مانند نام، شماره تماس، آدرس و مشخصات پرداخت تنها برای ثبت و ارسال سفارش استفاده می‌شود و محرمانه خواهد بود.
                        </p>
                    </div>

                    <div class="bg-wood-100 dark:bg-wood-900/20 border border-wood-200 dark:border-wood-800 rounded-lg p-4">
                        <h3 class="font-bold text-wood-800 dark:text-wood-200 mb-3 flex items-center gap-2">
                            <i class="fas fa-shield-alt text-wood-600"></i>
                            حفظ اطلاعات
                        </h3>
                        <p class="text-wood-700 dark:text-wood-300 leading-relaxed">
                            خزرچوب متعهد است اطلاعات مشتریان را نزد خود محفوظ نگه دارد و بدون اجازه آنان در اختیار هیچ مجموعه دیگری قرار ندهد، مگر طبق قانون.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 4 -->
            <div id="section4" class="bg-wood-50 dark:bg-wood-800 rounded-2xl shadow-lg border border-wood-200 dark:border-wood-800 p-8 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-wood-600 to-wood-700 rounded-full flex items-center justify-center">
                        <span class="text-wood-50 font-bold text-lg">۴</span>
                    </div>
                    <h2 class="text-2xl font-bold text-wood-900 dark:text-wood-50">محدودیت‌ها و مسئولیت‌ها</h2>
                </div>

                <div class="space-y-6">
                    <div class="border-r-4 border-wood-500 pr-6">
                        <h3 class="font-bold text-wood-900 dark:text-wood-50 mb-3 flex items-center gap-2">
                            <i class="fas fa-box-open text-wood-500"></i>
                            کیفیت و ویژگی‌های محصول
                        </h3>
                        <p class="text-wood-700 dark:text-wood-300 leading-relaxed">
                            تمام محصولات چوبی خزرچوب دست‌ساز بوده و ممکن است اختلاف‌های طبیعی در بافت، رگه و رنگ داشته باشند. این ویژگی‌ها جزء ماهیت چوب طبیعی است.
                        </p>
                    </div>

                    <div class="border-r-4 border-wood-500 pr-6">
                        <h3 class="font-bold text-wood-900 dark:text-wood-50 mb-3 flex items-center gap-2">
                            <i class="fas fa-exclamation-circle text-wood-500"></i>
                            مسئولیت حمل‌ونقل
                        </h3>
                        <p class="text-wood-700 dark:text-wood-300 leading-relaxed">
                            مسئولیت تأخیرهای احتمالی شرکت‌های حمل‌ونقل بر عهده خزرچوب نیست. با این حال تیم پشتیبانی تمام تلاش خود را برای پیگیری وضعیت بسته انجام می‌دهد.
                        </p>
                    </div>

                    <div class="border-r-4 border-wood-700 pr-6">
                        <h3 class="font-bold text-wood-900 dark:text-wood-50 mb-3 flex items-center gap-2">
                            <i class="fas fa-edit text-wood-700"></i>
                            تغییرات قوانین
                        </h3>
                        <p class="text-wood-700 dark:text-wood-300 leading-relaxed">
                            خزرچوب این حق را دارد که شرایط و قوانین وب‌سایت را در هر زمان به‌روزرسانی کند. نسخه جدید پس از انتشار در همین صفحه معتبر خواهد بود.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 5 -->
            <div id="section5" class="bg-wood-50 dark:bg-wood-800 rounded-2xl shadow-lg border border-wood-200 dark:border-wood-800 p-8 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-wood-600 to-wood-700 rounded-full flex items-center justify-center">
                        <span class="text-wood-50 font-bold text-lg">۵</span>
                    </div>
                    <h2 class="text-2xl font-bold text-wood-900 dark:text-wood-50">قبول شرایط</h2>
                </div>

                <div class="bg-gradient-to-r from-wood-100 to-wood-200 dark:from-wood-900/20 dark:to-wood-900/20 border border-wood-200 dark:border-wood-800 rounded-lg p-6">
                    <div class="flex items-start gap-4">
                        <i class="fas fa-hand-paper text-wood-700 text-2xl mt-1"></i>
                        <div>
                            <h3 class="font-bold text-wood-800 dark:text-wood-200 mb-3">تأیید و پذیرش</h3>
                            <p class="text-wood-700 dark:text-wood-300 leading-relaxed mb-4">
                                ثبت سفارش یا استفاده از خدمات سایت XazarWoods.com به منزله پذیرش کامل شرایط و قوانین ذکر شده در این صفحه است.
                            </p>
                            <div class="bg-wood-100 dark:bg-wood-900/30 border border-wood-200 dark:border-wood-800 rounded-lg p-4">
                                <p class="text-wood-700 dark:text-wood-200 font-semibold">
                                    <i class="fas fa-info-circle ml-2"></i>
                                    در صورتی که با این شرایط موافق نیستید، لطفاً از ادامه فرآیند خرید خودداری نمایید.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Back to Top Button -->
            <div class="fixed bottom-8 left-8">
                <button onclick="scrollToTop()" class="bg-wood-600 hover:bg-wood-700 text-wood-50 w-12 h-12 rounded-full shadow-lg transition-all duration-300 transform hover:scale-110">
                    <i class="fas fa-arrow-up"></i>
                </button>
            </div>

        </div>
    </div>

@endsection

@push('scripts')

@endpush
