@extends('layouts.app')

@section('content')

<div class="bg-wood-50 dark:bg-wood-900 text-wood-900 dark:text-wood-100 min-h-full"><!-- Header -->
<!-- Hero Section -->
    <section class="relative py-20 overflow-hidden min-h-[600px]"><!-- Background Image -->
        <div class="absolute inset-0 z-0" style="background: url({{asset('/images/tables/big/xazarwood_ir_rustic_table_with_rustic_chairs.jpg')}});background-attachment:fixed;background-size: cover;">

        <div class="w-full h-full bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-700" style="display: none;"></div>
    </div><!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-10"></div>
    <div class="max-w-6xl mx-auto px-6 relative z-20">
        <div class="text-center fade-in">
            <div class="inline-block bg-wood-600 dark:bg-wood-500 text-white px-4 py-2 rounded-full text-sm font-medium mb-4"><i class="fas fa-phone-alt ml-2"></i> آماده پاسخگویی به شما هستیم
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">تماس با ما</h2>
            <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">برای سفارش، مشاوره یا هرگونه سوال، با ما در ارتباط باشید</p>
        </div>
    </div><!-- Decorative Elements -->
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-wood-50 dark:from-wood-900 to-transparent z-20"></div>
</section>
<main class="max-w-6xl mx-auto px-6 py-16"><!-- Contact Cards -->
    <section class="mb-20 fade-in">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6"><!-- Phone Card -->
            <div class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg p-8 text-center contact-card">
                <div class="w-20 h-20 bg-gradient-to-br from-green-100 to-green-200 dark:from-green-900 dark:to-green-800 rounded-full flex items-center justify-center mx-auto mb-6"><i class="fas fa-phone-alt text-3xl text-green-600 dark:text-green-400"></i>
                </div>
                <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-4">تماس تلفنی</h3>
                <p class="text-sm text-wood-600 dark:text-wood-400 mb-4">با ما تماس بگیرید</p>
                <div class="space-y-3"><a href="tel:+989144851033" class="block text-wood-700 dark:text-wood-300 hover:text-wood-600 dark:hover:text-wood-200 font-medium text-lg transition-colors"> <i class="fas fa-mobile-alt ml-2 text-green-600 dark:text-green-400"></i> ۰۹۱۴۴۸۵۱۰۳۳ </a> <a href="tel:+989354062248" class="block text-wood-700 dark:text-wood-300 hover:text-wood-600 dark:hover:text-wood-200 font-medium text-lg transition-colors"> <i class="fas fa-mobile-alt ml-2 text-green-600 dark:text-green-400"></i> ۰۹۳۵۴۰۶۲۲۴۸ </a>
                </div>
            </div><!-- Location Card -->
            <div class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg p-8 text-center contact-card">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-200 dark:from-blue-900 dark:to-blue-800 rounded-full flex items-center justify-center mx-auto mb-6"><i class="fas fa-map-marker-alt text-3xl text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-4">آدرس کارگاه</h3>
                <p class="text-wood-700 dark:text-wood-300 leading-relaxed">سلماس، خیابان شریعتی<br>
                    تقاطع خیابان فردوسی<br><span class="font-bold">صنایع چوبی خزرچوب</span></p>
            </div><!-- Social Card -->
            <div class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg p-8 text-center contact-card">
                <div class="w-20 h-20 bg-gradient-to-br from-purple-100 to-purple-200 dark:from-purple-900 dark:to-purple-800 rounded-full flex items-center justify-center mx-auto mb-6"><i class="fas fa-share-alt text-3xl text-purple-600 dark:text-purple-400"></i>
                </div>
                <h3 class="text-xl font-bold text-wood-800 dark:text-wood-100 mb-4">شبکه‌های اجتماعی</h3>
                <p class="text-sm text-wood-600 dark:text-wood-400 mb-4">ما را دنبال کنید</p>
                <div class="flex  items-center justify-center gap-2 mt-3   " >
                    <div class="flex  gap-4 ">
                        <a href="https://instagram.com/xazarwood" target="_blank" rel="noopener noreferrer" class="p-2 w-10 h-10 rounded-2xl social-icon bg-gradient-to-br from-purple-600 via-pink-600 to-orange-500 text-white hover:shadow-xl">
                            <svg fill="currentColor" viewbox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg></a>
                        <!-- Telegram --> <a href="https://t.me/xazarwood" target="_blank" rel="noopener noreferrer" class="p-2 w-10 h-10 rounded-full social-icon bg-blue-500 text-white hover:shadow-xl hover:bg-blue-600">
                            <svg fill="currentColor" viewbox="0 0 24 24"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                            </svg></a> <!-- WhatsApp --> <a href="https://wa.me/989356042248" target="_blank" rel="noopener noreferrer" class="p-2 w-10 h-10 rounded-full social-icon bg-green-500 text-white hover:shadow-xl hover:bg-green-600">
                            <svg fill="currentColor" viewbox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg></a>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- Contact Person Section -->
    <section class="mb-20 fade-in">
        <div class="bg-gradient-to-br from-wood-600 to-wood-700 dark:from-wood-700 dark:to-wood-800 rounded-2xl shadow-xl p-8 md:p-12 text-white">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <div class="flex justify-center">
                    <div class="w-40 h-40 bg-white dark:bg-wood-600 rounded-full flex items-center justify-center shadow-lg"><i class="fas fa-user-tie text-6xl text-wood-600 dark:text-wood-200"></i>
                    </div>
                </div>
                <div class="md:col-span-2 text-center md:text-right">
                    <div class="inline-block bg-white/20 px-3 py-1 rounded-full text-sm mb-3"><i class="fas fa-star ml-1"></i> مدیر و بنیانگذار
                    </div>
                    <h3 class="text-3xl font-bold mb-4">علیرضا حق نظری</h3>
                    <p class="text-white/90 leading-relaxed mb-6">برای مشاوره تخصصی، سفارش محصولات سفارشی یا بازدید از کارگاه، می‌توانید مستقیماً با من در تماس باشید.</p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4"><a href="tel:+989144851033" class="bg-white/20 hover:bg-white/30 px-6 py-3 rounded-lg transition-colors inline-flex items-center"> <i class="fas fa-phone ml-2"></i> ۰۹۱۴۴۸۵۱۰۳۳ </a> <a href="tel:+989354062248" class="bg-white/20 hover:bg-white/30 px-6 py-3 rounded-lg transition-colors inline-flex items-center"> <i class="fas fa-phone ml-2"></i> ۰۹۳۵۴۰۶۲۲۴۸ </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Contact Form -->
    <section id="contact" class="mb-20 fade-in">
        <div class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg p-8 md:p-12">
            <div class="text-center mb-8">
                <h3 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4"><i class="fas fa-envelope text-wood-600 dark:text-wood-400 ml-3"></i> ارسال پیام</h3>
                <p class="text-wood-700 dark:text-wood-300">فرم زیر را پر کنید تا در اسرع وقت با شما تماس بگیریم</p>
            </div>
            <form id="contactForm" action="" class="max-w-2xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div><label for="name" class="block text-sm font-medium text-wood-700 dark:text-wood-300 mb-2"> نام و نام خانوادگی * </label> <input type="text" id="name" name="name" required class="w-full px-4 py-3 bg-wood-50 dark:bg-wood-700 border border-wood-200 dark:border-wood-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-wood-500 text-wood-900 dark:text-wood-100" placeholder="نام خود را وارد کنید">
                    </div>
                    <div><label for="phone" class="block text-sm font-medium text-wood-700 dark:text-wood-300 mb-2"> شماره تماس * </label>
                        <input type="text" id="phone" name="phone" required class="w-full px-4 py-3 bg-wood-50 dark:bg-wood-700 border border-wood-200 dark:border-wood-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-wood-500 text-wood-900 dark:text-wood-100" placeholder="۰۹۱۲۳۴۵۶۷۸۹">
                    </div>
                </div>
                <div class="mb-6"><label for="subject" class="block text-sm font-medium text-wood-700 dark:text-wood-300 mb-2"> موضوع </label>
                    <select id="subject" name="subject" class="w-full px-4 py-3 bg-wood-50 dark:bg-wood-700 border border-wood-200 dark:border-wood-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-wood-500 text-wood-900 dark:text-wood-100"> <option value="">موضوع را انتخاب کنید</option> <option value="order">سفارش محصول</option> <option value="consultation">مشاوره</option> <option value="custom">طراحی سفارشی</option> <option value="visit">بازدید از کارگاه</option> <option value="other">سایر موارد</option> </select>
                </div>
                <div class="mb-6"><label for="message" class="block text-sm font-medium text-wood-700 dark:text-wood-300 mb-2"> پیام شما * </label>
                    <textarea id="message" name="message" required rows="5" class="w-full px-4 py-3 bg-wood-50 dark:bg-wood-700 border border-wood-200 dark:border-wood-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-wood-500 text-wood-900 dark:text-wood-100 resize-none" placeholder="پیام خود را بنویسید..."></textarea>
                </div><button type="submit" class="w-full bg-wood-600 hover:bg-wood-700 dark:bg-wood-500 dark:hover:bg-wood-600 text-white font-bold py-4 px-6 rounded-lg transition-colors flex items-center justify-center"> <i class="fas fa-paper-plane ml-2"></i> ارسال پیام </button>
                <div id="formMessage" class="mt-4 p-4 rounded-lg hidden"></div>
            </form>
        </div>
    </section><!-- Map Section -->
    <section class="mb-20 fade-in">
        <div class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg p-8">
            <div class="text-center mb-8">
                <h3 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4"><i class="fas fa-map text-wood-600 dark:text-wood-400 ml-3"></i> موقعیت کارگاه</h3>
                <p class="text-wood-700 dark:text-wood-300">سلماس، خیابان شریعتی، تقاطع خیابان فردوسی - صنایع چوبی خزرچوب</p>
            </div>
            <div class="bg-wood-100 dark:bg-wood-700 rounded-xl h-96 flex items-center justify-center">
                <div class="text-center w-full h-full p-10">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d783.9248787387371!2d44.759149199999996!3d38.193653399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4011af00343ba77d%3A0x5eaf2462f575c259!2sXazarwood!5e0!3m2!1sen!2s!4v1762699283415!5m2!1sen!2s" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section><!-- Working Hours -->
    <section class="fade-in">
        <div class="bg-gradient-to-br from-wood-100 to-wood-200 dark:from-wood-800 dark:to-wood-700 rounded-2xl shadow-lg p-8 md:p-12">
            <div class="text-center mb-8">
                <h3 class="text-3xl font-bold text-wood-800 dark:text-wood-100 mb-4"><i class="fas fa-clock text-wood-600 dark:text-wood-400 ml-3"></i> ساعات کاری</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                <div class="bg-white dark:bg-wood-800 rounded-xl p-6 text-center">
                    <div class="text-wood-600 dark:text-wood-400 mb-2"><i class="fas fa-calendar-week text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-wood-800 dark:text-wood-100 mb-2">شنبه تا پنجشنبه</h4>
                    <p class="text-wood-700 dark:text-wood-300">۸:۰۰ صبح - ۶:۰۰ عصر</p>
                </div>
                <div class="bg-white dark:bg-wood-800 rounded-xl p-6 text-center">
                    <div class="text-wood-600 dark:text-wood-400 mb-2"><i class="fas fa-calendar-day text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-wood-800 dark:text-wood-100 mb-2">جمعه</h4>
                    <p class="text-wood-700 dark:text-wood-300">تعطیل</p>
                </div>
            </div>
            <div class="text-center mt-8">
                <p class="text-wood-700 dark:text-wood-300"><i class="fas fa-info-circle ml-2"></i> برای بازدید از کارگاه، لطفاً از قبل هماهنگ کنید</p>
            </div>
        </div>
    </section>
</main><!-- Footer -->
</div>
@endsection
@push('scripts')
    <script src="/js/modules/sweetalert2.js"></script>
    <script src="/js/jquery/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#contactForm').on('submit', function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: '/contact', // آدرس روت ذخیره فرم
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'موفق!',
                        text: response.message || 'پیام شما با موفقیت ارسال شد.',
                        confirmButtonText: 'باشه'
                    });
                    $('#contactForm')[0].reset();
                },
                error: function (xhr) {
                    let errorMessage = 'خطایی در ارسال داده رخ داد.';

                    if (xhr.status === 422) {
                        // خطای ولیدیشن لاراول
                        let errors = xhr.responseJSON.errors;
                        errorMessage = Object.values(errors).map(err => err.join(', ')).join('\n');
                    } else {
                        // خطاهای غیر ولیدیشن
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        } else {
                            console.error("Server Response:", xhr.responseText);
                        }
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'خطا',
                        text: errorMessage,
                        confirmButtonText: 'باشه'
                    });
                }
            });
        });

    </script>

@endpush
