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
                <div class="flex justify-center gap-4"><a href="#" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-gradient-to-br from-pink-500 to-purple-600 rounded-lg flex items-center justify-center text-white hover:scale-110 transition-transform"> <i class="fab fa-instagram text-xl"></i> </a> <a href="#" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center text-white hover:scale-110 transition-transform"> <i class="fab fa-telegram text-xl"></i> </a> <a href="#" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center text-white hover:scale-110 transition-transform"> <i class="fab fa-whatsapp text-xl"></i> </a>
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
            <form id="contactForm" class="max-w-2xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div><label for="name" class="block text-sm font-medium text-wood-700 dark:text-wood-300 mb-2"> نام و نام خانوادگی * </label> <input type="text" id="name" name="name" required class="w-full px-4 py-3 bg-wood-50 dark:bg-wood-700 border border-wood-200 dark:border-wood-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-wood-500 text-wood-900 dark:text-wood-100" placeholder="نام خود را وارد کنید">
                    </div>
                    <div><label for="phone" class="block text-sm font-medium text-wood-700 dark:text-wood-300 mb-2"> شماره تماس * </label> <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 bg-wood-50 dark:bg-wood-700 border border-wood-200 dark:border-wood-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-wood-500 text-wood-900 dark:text-wood-100" placeholder="۰۹۱۲۳۴۵۶۷۸۹">
                    </div>
                </div>
                <div class="mb-6"><label for="subject" class="block text-sm font-medium text-wood-700 dark:text-wood-300 mb-2"> موضوع </label> <select id="subject" name="subject" class="w-full px-4 py-3 bg-wood-50 dark:bg-wood-700 border border-wood-200 dark:border-wood-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-wood-500 text-wood-900 dark:text-wood-100"> <option value="">موضوع را انتخاب کنید</option> <option value="order">سفارش محصول</option> <option value="consultation">مشاوره</option> <option value="custom">طراحی سفارشی</option> <option value="visit">بازدید از کارگاه</option> <option value="other">سایر موارد</option> </select>
                </div>
                <div class="mb-6"><label for="message" class="block text-sm font-medium text-wood-700 dark:text-wood-300 mb-2"> پیام شما * </label> <textarea id="message" name="message" required rows="5" class="w-full px-4 py-3 bg-wood-50 dark:bg-wood-700 border border-wood-200 dark:border-wood-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-wood-500 text-wood-900 dark:text-wood-100 resize-none" placeholder="پیام خود را بنویسید..."></textarea>
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

        // Contact form handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formMessage = document.getElementById('formMessage');
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            // Show success message
            formMessage.className = 'mt-4 p-4 rounded-lg bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 border border-green-300 dark:border-green-700';
            formMessage.textContent = '✓ پیام شما با موفقیت ارسال شد! به زودی با شما تماس خواهیم گرفت.';
            formMessage.classList.remove('hidden');

            // Reset form
            this.reset();

            // Hide message after 5 seconds
            setTimeout(() => {
                formMessage.classList.add('hidden');
            }, 5000);
        });
    </script>


@endpush
