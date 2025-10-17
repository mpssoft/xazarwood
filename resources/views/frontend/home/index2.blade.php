<!DOCTYPE html>
<html lang="fa" dir="rtl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XazarWood - میزهای روستیک و محصولات چوبی</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        window.tailwind = {
            config: {
                darkMode: 'class',
                theme: {
                    extend: {},
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            box-sizing: border-box;
            font-family: 'Vazirmatn', sans-serif;
        }

        .wood-texture {
            background: white;
            box-shadow: 0 4px 20px rgba(245, 158, 11, 0.2);
        }

        .dark .wood-texture {
            background: linear-gradient(135deg, #1f2937 0%, #374151 50%, #4b5563 100%);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
        }

        .wooden-text {
            background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 25%, #f59e0b 50%, #d97706 75%, #92400e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 1px 1px 2px rgba(146, 64, 14, 0.2);
        }

        .dark .wooden-text {
            background: linear-gradient(135deg, #fbbf24 0%, #fde047 25%, #facc15 50%, #f59e0b 75%, #d97706 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 1px 1px 3px rgba(69, 26, 3, 0.4);
        }

        .wood-grain-bg {
            background: linear-gradient(180deg, #fef7ed 0%, #fed7aa 50%, #fdba74 100%);
            box-shadow: inset 0 0 30px rgba(245, 158, 11, 0.1);
        }

        .dark .wood-grain-bg {
            background: linear-gradient(180deg, #111827 0%, #1f2937 50%, #374151 100%);
            box-shadow: inset 0 0 30px rgba(0, 0, 0, 0.3);
        }

        .carved-shadow {
            text-shadow:
                1px 1px 0px rgba(146, 64, 14, 0.2),
                0px 0px 4px rgba(146, 64, 14, 0.1);
        }

        .dark .carved-shadow {
            text-shadow:
                2px 2px 0px rgba(69, 26, 3, 0.6),
                -1px -1px 0px rgba(251, 191, 36, 0.2),
                1px 1px 8px rgba(69, 26, 3, 0.3);
        }

        .wood-button {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            border: none;
            box-shadow:
                0 8px 25px rgba(245, 158, 11, 0.4),
                0 4px 12px rgba(0, 0, 0, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 12px;
        }

        .wood-button:hover {
            background: linear-gradient(135deg, #d97706 0%, #b45309 100%);
            transform: translateY(-3px);
            box-shadow:
                0 12px 35px rgba(245, 158, 11, 0.5),
                0 8px 16px rgba(0, 0, 0, 0.25),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }

        .wood-panel {
            background: rgba(255, 255, 255, 0.95);
            border: 2px solid rgba(245, 158, 11, 0.3);
            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.15),
                0 8px 16px rgba(245, 158, 11, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(15px);
            border-radius: 20px;
        }

        .dark .wood-panel {
            background: rgba(55, 65, 81, 0.95);
            border: 2px solid rgba(156, 163, 175, 0.4);
            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.5),
                0 8px 16px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(156, 163, 175, 0.2);
            backdrop-filter: blur(15px);
        }

        .floating-animation {
            animation: float-gentle 6s ease-in-out infinite;
        }

        @keyframes float-gentle {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-12px) rotate(1deg); }
            66% { transform: translateY(-8px) rotate(-1deg); }
        }

        .wood-rings {
            background: transparent;
        }

        .slide-up {
            opacity: 0;
            transform: translateY(60px);
            transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .slide-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .wood-glow {
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.4);
            animation: glow-pulse 4s ease-in-out infinite alternate;
        }

        @keyframes glow-pulse {
            from { box-shadow: 0 0 30px rgba(245, 158, 11, 0.4); }
            to { box-shadow: 0 0 50px rgba(245, 158, 11, 0.7); }
        }

        .hover-wood {
            transition: all 0.4s ease;
        }

        .hover-wood:hover {
            transform: translateY(-8px) rotateY(5deg);
            box-shadow: 0 15px 35px rgba(245, 158, 11, 0.3);
        }

        .wood-border {
            border-image: linear-gradient(45deg, #f59e0b, #d97706, #b45309, #92400e) 1;
        }

        .grain-lines {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 50%, #f59e0b 100%);
        }

        .dark .grain-lines {
            background: linear-gradient(135deg, #451a03 0%, #78350f 50%, #92400e 100%);
        }

        /* Slider Styles */
        .slider-container {
            position: relative;
            overflow: hidden;
        }

        .slider-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .slider-slide.active {
            opacity: 1;
            transform: translateX(0);
        }

        .slider-slide.prev {
            transform: translateX(-100%);
        }

        .slider-dot.active {
            transform: scale(1.3);
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.6);
        }

        .slider-btn {
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .slider-btn:hover {
            box-shadow: 0 12px 40px rgba(245, 158, 11, 0.4);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-gray-100 dark:bg-gradient-to-br dark:from-gray-900 dark:to-slate-800 text-gray-900 dark:text-gray-100 transition-colors duration-500">

<!-- Header -->
<header class="fixed top-0 w-full z-50 wood-texture backdrop-blur-sm shadow-[1px_1px_10px_gray]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center gap-6">
            <!-- Brand -->
            <div class="flex items-center space-x-4 space-x-reverse ">
                <div class="relative">
                    <div class="w-16 h-16 wood-button rounded-2xl flex items-center justify-center">
                        <i class="fas fa-tree text-white text-3xl"></i>
                    </div>
                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-yellow-400 rounded-full border-2 border-white"></div>
                </div>
                <div>
                    <h1 class="text-2xl font-black wooden-text carved-shadow">XazarWood</h1>
                    <p class="text-xs text-gray-800 dark:text-yellow-300 font-bold">صنایع چوبی</p>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="hidden lg:flex items-center space-x-8 space-x-reverse   px-6  py-4 ">
                <a href="#home" class="text-gray-900 dark:text-yellow-200 hover:text-gray-700 dark:hover:text-yellow-400 font-bold text-lg transition-colors carved-shadow">
                    <i class="fas fa-home ml-2"></i>صفحه اصلی
                </a>
                <a href="#about" class="text-gray-900 dark:text-yellow-200 hover:text-gray-700 dark:hover:text-yellow-400 font-bold text-lg transition-colors carved-shadow">
                    <i class="fas fa-info-circle ml-2"></i>درباره ما
                </a>
                <a href="#products" class="text-gray-900 dark:text-yellow-200 hover:text-gray-700 dark:hover:text-yellow-400 font-bold text-lg transition-colors carved-shadow">
                    <i class="fas fa-tools ml-2"></i>محصولات
                </a>
                <a href="#showcase" class="text-gray-900 dark:text-yellow-200 hover:text-gray-700 dark:hover:text-yellow-400 font-bold text-lg transition-colors carved-shadow">
                    <i class="fas fa-star ml-2"></i>نمونه کارها
                </a>
                <a href="#contact" class="text-gray-900 dark:text-yellow-200 hover:text-gray-700 dark:hover:text-yellow-400 font-bold text-lg transition-colors carved-shadow">
                    <i class="fas fa-envelope ml-2"></i>ارتباط
                </a>


            </nav>
            </div>
            <div class="flex items-center space-x-4">
                <!-- Theme Toggle -->
                <button id="theme-toggle" class="wood-button p-4 rounded-xl text-white hover:scale-110 transition-all">
                    <i class="fas fa-sun dark:hidden text-xl"></i>
                    <i class="fas fa-moon hidden dark:inline text-xl"></i>
                </button>
            </div>
            <!-- Mobile Menu -->
            <button id="mobile-menu-btn" class="lg:hidden wood-button p-3 rounded-xl">
                <i class="fas fa-bars text-white text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="lg:hidden hidden wood-grain-bg border-t-2 border-slate-400 dark:border-yellow-500">
        <div class="px-4 py-6 space-y-3">
            <a href="#home" class="block px-6 py-4 text-gray-900 dark:text-yellow-200 hover:bg-slate-200 dark:hover:bg-orange-800 rounded-xl font-bold text-lg">
                <i class="fas fa-home ml-3"></i>صفحه اصلی
            </a>
            <a href="#about" class="block px-6 py-4 text-gray-900 dark:text-yellow-200 hover:bg-slate-200 dark:hover:bg-orange-800 rounded-xl font-bold text-lg">
                <i class="fas fa-info-circle ml-3"></i>درباره ما
            </a>
            <a href="#products" class="block px-6 py-4 text-gray-900 dark:text-yellow-200 hover:bg-slate-200 dark:hover:bg-orange-800 rounded-xl font-bold text-lg">
                <i class="fas fa-tools ml-3"></i>محصولات
            </a>
            <a href="#showcase" class="block px-6 py-4 text-gray-900 dark:text-yellow-200 hover:bg-slate-200 dark:hover:bg-orange-800 rounded-xl font-bold text-lg">
                <i class="fas fa-star ml-3"></i>نمونه کارها
            </a>
            <a href="#contact" class="block px-6 py-4 text-gray-900 dark:text-yellow-200 hover:bg-slate-200 dark:hover:bg-orange-800 rounded-xl font-bold text-lg">
                <i class="fas fa-envelope ml-3"></i>ارتباط
            </a>
        </div>
    </div>
</header>

<!-- Image Slider Section -->
<section class="pt-24 pb-12 wood-grain-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


        <!-- Image Slider -->
        <div class="relative wood-panel rounded-3xl overflow-hidden slide-up">
            <div class="slider-container relative h-80 md:h-[500px]">
                <!-- Slide 1 -->
                <div class="slider-slide active wood-texture flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-table text-7xl wooden-text mb-6"></i>
                        <h3 class="text-3xl font-black text-gray-900 dark:text-gray-100 mb-3">میز روستیک بلوط</h3>
                        <p class="text-lg text-gray-900 dark:text-gray-300 font-bold">میز ناهارخوری ۸ نفره از چوب بلوط طبیعی</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slider-slide wood-texture flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-utensils text-7xl wooden-text mb-6"></i>
                        <h3 class="text-3xl font-black text-gray-900 dark:text-gray-100 mb-3">ست ظروف چوبی</h3>
                        <p class="text-lg text-gray-900 dark:text-gray-300 font-bold">مجموعه کامل کاسه و بشقاب چوب گردو</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slider-slide wood-texture flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-mug-hot text-7xl wooden-text mb-6"></i>
                        <h3 class="text-3xl font-black text-gray-900 dark:text-gray-100 mb-3">ماگ چوبی حکاکی</h3>
                        <p class="text-lg text-gray-900 dark:text-gray-300 font-bold">ماگ چوب راش با حکاکی نام شخصی</p>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="slider-slide wood-texture flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-clock text-7xl wooden-text mb-6"></i>
                        <h3 class="text-3xl font-black text-gray-900 dark:text-gray-100 mb-3">ساعت دیواری چوبی</h3>
                        <p class="text-lg text-gray-900 dark:text-gray-300 font-bold">ساعت دیواری با طراحی سنتی ایرانی</p>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="slider-slide wood-texture flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-chair text-7xl wooden-text mb-6"></i>
                        <h3 class="text-3xl font-black text-gray-900 dark:text-gray-100 mb-3">صندلی روستیک</h3>
                        <p class="text-lg text-gray-900 dark:text-gray-300 font-bold">صندلی چوب بلوط با طراحی کلاسیک</p>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button class="slider-btn slider-prev absolute left-6 top-1/2 transform -translate-y-1/2 wood-button p-4 rounded-full text-white hover:scale-110 transition-all z-10 shadow-2xl">
                <i class="fas fa-chevron-left text-xl"></i>
            </button>
            <button class="slider-btn slider-next absolute right-6 top-1/2 transform -translate-y-1/2 wood-button p-4 rounded-full text-white hover:scale-110 transition-all z-10 shadow-2xl">
                <i class="fas fa-chevron-right text-xl"></i>
            </button>

            <!-- Dots Indicator -->
            <div class="slider-dots absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3 space-x-reverse">
                <button class="slider-dot active w-3 h-3 rounded-full bg-orange-600 dark:bg-yellow-400 transition-all shadow-lg"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-orange-300 dark:bg-gray-500 hover:bg-orange-600 dark:hover:bg-yellow-400 transition-all shadow-lg"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-orange-300 dark:bg-gray-500 hover:bg-orange-600 dark:hover:bg-yellow-400 transition-all shadow-lg"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-orange-300 dark:bg-gray-500 hover:bg-orange-600 dark:hover:bg-yellow-400 transition-all shadow-lg"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-orange-300 dark:bg-gray-500 hover:bg-orange-600 dark:hover:bg-yellow-400 transition-all shadow-lg"></button>
            </div>
        </div>
    </div>
</section>

<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden wood-grain-bg">
    <div class="absolute inset-0 wood-rings opacity-40"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="slide-up">
            <div class="mb-12 floating-animation">
                <i class="fas fa-hammer text-9xl wooden-text"></i>
            </div>

            <h1 class="text-7xl md:text-9xl font-black text-gray-900 dark:text-orange-100 mb-8 leading-tight carved-shadow">
                صنایع چوبی
                <br>
                <span class="wooden-text">XazarWood</span>
            </h1>

            <p class="text-2xl md:text-4xl text-gray-900 dark:text-yellow-300 mb-12 max-w-5xl mx-auto leading-relaxed font-bold">
                میزهای روستیک، ظروف چوبی، ماگ و ساعت‌های چوبی دست‌ساز
                <br>
                <span class="wooden-text">از دل طبیعت تا قلب خانه شما</span>
            </p>

            <div class="flex flex-col sm:flex-row gap-8 justify-center items-center">
                <button class="wood-button text-white px-12 py-6 rounded-2xl font-black text-2xl transition-all wood-glow">
                    <i class="fas fa-shopping-bag ml-3"></i>کاوش محصولات
                </button>
                <button class="border-4 border-slate-600 dark:border-yellow-400 text-gray-900 dark:text-yellow-200 hover:bg-slate-600 hover:text-white dark:hover:bg-yellow-400 dark:hover:text-orange-900 px-12 py-6 rounded-2xl font-black text-2xl transition-all hover:scale-105">
                    <i class="fas fa-phone-alt ml-3"></i>تماس فوری
                </button>
            </div>
        </div>
    </div>

    <!-- Floating Elements -->
    <div class="absolute top-24 right-20 floating-animation opacity-50" style="animation-delay: -1s;">
        <i class="fas fa-cut text-5xl text-orange-500"></i>
    </div>
    <div class="absolute bottom-40 left-20 floating-animation opacity-50" style="animation-delay: -3s;">
        <i class="fas fa-ruler text-5xl text-orange-500"></i>
    </div>
    <div class="absolute top-1/2 left-40 floating-animation opacity-50" style="animation-delay: -2s;">
        <i class="fas fa-drafting-compass text-5xl text-orange-500"></i>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-28 wood-texture">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div class="slide-up">
                <div class="wood-panel p-12 rounded-3xl hover-wood">
                    <h2 class="text-6xl md:text-7xl font-black text-gray-900 dark:text-orange-100 mb-10 carved-shadow">
                        <i class="fas fa-seedling wooden-text ml-4"></i>
                        هنر کهن
                        <br>
                        <span class="wooden-text">کیفیت نوین</span>
                    </h2>

                    <p class="text-2xl text-gray-900 dark:text-yellow-200 mb-8 leading-relaxed font-semibold">
                        XazarWood با ۲۰ سال تجربه در صنعت چوب، تولیدکننده میزهای روستیک و محصولات چوبی منحصر به فرد است. ما از بهترین چوب‌های طبیعی شمال کشور استفاده می‌کنیم.
                    </p>

                    <p class="text-2xl text-gray-900 dark:text-yellow-200 mb-10 leading-relaxed font-semibold">
                        هر محصول با دست و با عشق ساخته می‌شود. از میزهای روستیک گرفته تا ظروف چوبی، ماگ‌ها و ساعت‌های چوبی - همه با کیفیت استثنایی و طراحی بی‌نظیر.
                    </p>

                    <!-- Achievement Cards -->
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center wood-panel p-6 rounded-2xl hover-wood">
                            <div class="text-5xl font-black wooden-text mb-3">۲۰+</div>
                            <div class="text-lg text-gray-900 dark:text-yellow-300 font-bold">سال تجربه</div>
                        </div>
                        <div class="text-center wood-panel p-6 rounded-2xl hover-wood">
                            <div class="text-5xl font-black wooden-text mb-3">۸۰۰+</div>
                            <div class="text-lg text-gray-900 dark:text-yellow-300 font-bold">مشتری خوشحال</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-up">
                <div class="relative">
                    <!-- Craft Process -->
                    <div class="wood-panel p-12 rounded-3xl hover-wood">
                        <div class="text-center mb-10">
                            <i class="fas fa-cogs text-7xl wooden-text mb-6"></i>
                            <h3 class="text-3xl font-black text-orange-900 dark:text-orange-100 carved-shadow">فرآیند تولید</h3>
                        </div>

                        <div class="space-y-8">
                            <div class="flex items-center space-x-6 space-x-reverse">
                                <div class="wood-button p-4 rounded-full flex-shrink-0">
                                    <i class="fas fa-tree text-white text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-black text-orange-900 dark:text-orange-100 text-xl mb-2">انتخاب چوب</h4>
                                    <p class="text-gray-800 dark:text-yellow-300 font-semibold">چوب‌های مرغوب از جنگل‌های شمال</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-6 space-x-reverse">
                                <div class="wood-button p-4 rounded-full flex-shrink-0">
                                    <i class="fas fa-hammer text-white text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-black text-gray-900 dark:text-orange-100 text-xl mb-2">کار دستی</h4>
                                    <p class="text-gray-800 dark:text-yellow-300 font-semibold">ساخت با ابزار سنتی و مدرن</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-6 space-x-reverse">
                                <div class="wood-button p-4 rounded-full flex-shrink-0">
                                    <i class="fas fa-paint-brush text-white text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-black text-gray-900 dark:text-orange-100 text-xl mb-2">پرداخت نهایی</h4>
                                    <p class="text-gray-800 dark:text-yellow-300 font-semibold">روغن‌کاری و پولیش طبیعی</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quality Badge -->
                    <div class="absolute -top-8 -left-8 wood-panel rounded-full p-8 shadow-2xl hover-wood">
                        <i class="fas fa-medal text-4xl wooden-text"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="py-28 wood-grain-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-24 slide-up">
            <h2 class="text-6xl md:text-7xl font-black text-gray-900 dark:text-gray-100 mb-8 carved-shadow">
                <i class="fas fa-tools wooden-text ml-4"></i>محصولات ما
            </h2>
            <p class="text-3xl text-gray-800 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed font-bold">
                مجموعه کاملی از میزهای روستیک و صنایع چوبی دست‌ساز با کیفیت بی‌نظیر
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-10">
            <!-- Product 1 -->
            <div class="slide-up wood-panel rounded-3xl overflow-hidden hover-wood">
                <div class="h-80 wood-texture grain-lines flex items-center justify-center relative">
                    <i class="fas fa-table text-9xl wooden-text"></i>
                    <div class="absolute top-6 right-6 wood-button text-white px-4 py-2 rounded-full text-sm font-black">
                        محبوب‌ترین
                    </div>
                </div>
                <div class="p-10">
                    <h3 class="text-3xl font-black text-gray-900 dark:text-orange-100 mb-4 carved-shadow">
                        <i class="fas fa-table ml-3"></i>میزهای روستیک
                    </h3>
                    <p class="text-gray-800 dark:text-yellow-300 mb-8 leading-relaxed font-semibold text-lg">
                        میزهای چوب بلوط و راش دست‌ساز با طراحی روستیک اصیل و کلاسیک
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-4xl font-black wooden-text">از ۳ میلیون</span>
                        <button class="wood-button px-8 py-4 rounded-2xl font-black text-white transition-all hover:scale-105">
                            <i class="fas fa-eye ml-2"></i>مشاهده
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="slide-up wood-panel rounded-3xl overflow-hidden hover-wood">
                <div class="h-80 wood-texture grain-lines flex items-center justify-center relative">
                    <i class="fas fa-utensils text-9xl wooden-text"></i>
                    <div class="absolute top-6 right-6 wood-button text-white px-4 py-2 rounded-full text-sm font-black">
                        تازه
                    </div>
                </div>
                <div class="p-10">
                    <h3 class="text-3xl font-black text-gray-900 dark:text-orange-100 mb-4 carved-shadow">
                        <i class="fas fa-utensils ml-3"></i>ظروف چوبی
                    </h3>
                    <p class="text-gray-800 dark:text-yellow-300 mb-8 leading-relaxed font-semibold text-lg">
                        کاسه‌ها، بشقاب‌ها و ظروف سرو چوبی زیبا برای آشپزخانه مدرن
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-4xl font-black wooden-text">از ۱۵۰ هزار</span>
                        <button class="wood-button px-8 py-4 rounded-2xl font-black text-white transition-all hover:scale-105">
                            <i class="fas fa-eye ml-2"></i>مشاهده
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="slide-up wood-panel rounded-3xl overflow-hidden hover-wood">
                <div class="h-80 wood-texture grain-lines flex items-center justify-center relative">
                    <i class="fas fa-mug-hot text-9xl wooden-text"></i>
                    <div class="absolute top-6 right-6 wood-button text-white px-4 py-2 rounded-full text-sm font-black">
                        پرفروش
                    </div>
                </div>
                <div class="p-10">
                    <h3 class="text-3xl font-black text-gray-900 dark:text-orange-100 mb-4 carved-shadow">
                        <i class="fas fa-mug-hot ml-3"></i>ماگ چوبی
                    </h3>
                    <p class="text-gray-800 dark:text-yellow-300 mb-8 leading-relaxed font-semibold text-lg">
                        ماگ‌های چوبی عایق‌دار برای چای و قهوه با طراحی منحصر به فرد
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-4xl font-black wooden-text">از ۲۲۰ هزار</span>
                        <button class="wood-button px-8 py-4 rounded-2xl font-black text-white transition-all hover:scale-105">
                            <i class="fas fa-eye ml-2"></i>مشاهده
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="slide-up wood-panel rounded-3xl overflow-hidden hover-wood">
                <div class="h-80 wood-texture grain-lines flex items-center justify-center relative">
                    <i class="fas fa-clock text-9xl wooden-text"></i>
                    <div class="absolute top-6 right-6 wood-button text-white px-4 py-2 rounded-full text-sm font-black">
                        ویژه
                    </div>
                </div>
                <div class="p-10">
                    <h3 class="text-3xl font-black text-gray-900 dark:text-orange-100 mb-4 carved-shadow">
                        <i class="fas fa-clock ml-3"></i>ساعت‌های چوبی
                    </h3>
                    <p class="text-gray-800 dark:text-yellow-300 mb-8 leading-relaxed font-semibold text-lg">
                        ساعت‌های دیواری و رومیزی با حکاکی دستی و طراحی سنتی
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-4xl font-black wooden-text">از ۵۵۰ هزار</span>
                        <button class="wood-button px-8 py-4 rounded-2xl font-black text-white transition-all hover:scale-105">
                            <i class="fas fa-eye ml-2"></i>مشاهده
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Showcase Section -->
<section id="showcase" class="py-28 wood-texture">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-24 slide-up">
            <h2 class="text-6xl md:text-7xl font-black text-gray-900 dark:text-gray-100 mb-8 carved-shadow">
                <i class="fas fa-star wooden-text ml-4"></i>نمونه کارها
            </h2>
            <p class="text-3xl text-gray-900 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed font-bold">
                برخی از بهترین آثار ما که با دقت و عشق ساخته شده‌اند
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Showcase Card 1 -->
            <div class="slide-up wood-panel p-8 hover-wood group">
                <div class="text-center mb-6">
                    <i class="fas fa-table text-6xl wooden-text mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-2xl font-black text-gray-900 dark:text-orange-100 mb-3">میز روستیک بلوط</h3>
                    <p class="text-gray-800 dark:text-yellow-300 font-semibold">میز ناهارخوری ۶ نفره از چوب بلوط طبیعی</p>
                </div>
                <div class="flex justify-between items-center pt-4 border-t border-orange-200 dark:border-orange-700">
                    <span class="text-2xl font-black wooden-text">۴.۵ میلیون</span>
                    <div class="flex space-x-1 space-x-reverse">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
            </div>

            <!-- Showcase Card 2 -->
            <div class="slide-up wood-panel p-8 hover-wood group">
                <div class="text-center mb-6">
                    <i class="fas fa-utensils text-6xl wooden-text mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-2xl font-black text-gray-900 dark:text-orange-100 mb-3">ست ظروف چوبی</h3>
                    <p class="text-gray-800 dark:text-yellow-300 font-semibold">مجموعه کامل کاسه و بشقاب چوب گردو</p>
                </div>
                <div class="flex justify-between items-center pt-4 border-t border-orange-200 dark:border-orange-700">
                    <span class="text-2xl font-black wooden-text">۸۵۰ هزار</span>
                    <div class="flex space-x-1 space-x-reverse">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-gray-300"></i>
                    </div>
                </div>
            </div>

            <!-- Showcase Card 3 -->
            <div class="slide-up wood-panel p-8 hover-wood group">
                <div class="text-center mb-6">
                    <i class="fas fa-mug-hot text-6xl wooden-text mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-2xl font-black text-gray-900 dark:text-orange-100 mb-3">ماگ چوبی حکاکی</h3>
                    <p class="text-gray-800 dark:text-yellow-300 font-semibold">ماگ چوب راش با حکاکی نام شخصی</p>
                </div>
                <div class="flex justify-between items-center pt-4 border-t border-orange-200 dark:border-orange-700">
                    <span class="text-2xl font-black wooden-text">۳۲۰ هزار</span>
                    <div class="flex space-x-1 space-x-reverse">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
            </div>

            <!-- Showcase Card 4 -->
            <div class="slide-up wood-panel p-8 hover-wood group">
                <div class="text-center mb-6">
                    <i class="fas fa-clock text-6xl wooden-text mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-2xl font-black text-gray-900 dark:text-orange-100 mb-3">ساعت دیواری چوبی</h3>
                    <p class="text-gray-800 dark:text-yellow-300 font-semibold">ساعت دیواری با طراحی سنتی ایرانی</p>
                </div>
                <div class="flex justify-between items-center pt-4 border-t border-orange-200 dark:border-orange-700">
                    <span class="text-2xl font-black wooden-text">۷۵۰ هزار</span>
                    <div class="flex space-x-1 space-x-reverse">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-gray-300"></i>
                    </div>
                </div>
            </div>

            <!-- Showcase Card 5 -->
            <div class="slide-up wood-panel p-8 hover-wood group">
                <div class="text-center mb-6">
                    <i class="fas fa-chair text-6xl wooden-text mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-2xl font-black text-gray-900 dark:text-orange-100 mb-3">صندلی روستیک</h3>
                    <p class="text-gray-800 dark:text-yellow-300 font-semibold">صندلی چوب بلوط با طراحی کلاسیک</p>
                </div>
                <div class="flex justify-between items-center pt-4 border-t border-orange-200 dark:border-orange-700">
                    <span class="text-2xl font-black wooden-text">۱.۲ میلیون</span>
                    <div class="flex space-x-1 space-x-reverse">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
            </div>

            <!-- Showcase Card 6 -->
            <div class="slide-up wood-panel p-8 hover-wood group">
                <div class="text-center mb-6">
                    <i class="fas fa-couch text-6xl wooden-text mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-2xl font-black text-gray-900 dark:text-orange-100 mb-3">نیمکت چوبی</h3>
                    <p class="text-gray-800 dark:text-yellow-300 font-semibold">نیمکت دو نفره برای فضای باز</p>
                </div>
                <div class="flex justify-between items-center pt-4 border-t border-orange-200 dark:border-orange-700">
                    <span class="text-2xl font-black wooden-text">۲.۸ میلیون</span>
                    <div class="flex space-x-1 space-x-reverse">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-28 wood-grain-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-24 slide-up">
            <h2 class="text-6xl md:text-7xl font-black text-gray-900 dark:text-gray-100 mb-8 carved-shadow">
                <i class="fas fa-envelope wooden-text ml-4"></i>ارتباط با ما
            </h2>
            <p class="text-3xl text-gray-900 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed font-bold">
                برای سفارش میزهای روستیک و محصولات چوبی، همین حالا با ما تماس بگیرید
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-20">
            <div class="slide-up space-y-12">
                <div class="flex items-center space-x-8 space-x-reverse wood-panel p-8 rounded-3xl hover-wood">
                    <div class="wood-button p-6 rounded-2xl flex-shrink-0">
                        <i class="fas fa-map-marker-alt text-white text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-gray-900 dark:text-orange-100 text-2xl mb-3 carved-shadow">
                            <i class="fas fa-home ml-3"></i>آدرس کارگاه
                        </h3>
                        <p class="text-gray-800 dark:text-yellow-300 text-xl font-semibold leading-relaxed">
                            مازندران، ساری، خیابان صنعتگران، کوچه چوب‌کاران، پلاک ۲۵
                        </p>
                    </div>
                </div>

                <div class="flex items-center space-x-8 space-x-reverse wood-panel p-8 rounded-3xl hover-wood">
                    <div class="wood-button p-6 rounded-2xl flex-shrink-0">
                        <i class="fas fa-phone text-white text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-gray-900 dark:text-orange-100 text-2xl mb-3 carved-shadow">
                            <i class="fas fa-mobile-alt ml-3"></i>شماره تماس
                        </h3>
                        <p class="text-gray-800 dark:text-yellow-300 text-xl font-semibold">
                            ۰۹۱۱-۳۴۵-۶۷۸۹ | ۰۱۱-۴۴۵۵۶۶۷۷
                        </p>
                    </div>
                </div>

                <div class="flex items-center space-x-8 space-x-reverse wood-panel p-8 rounded-3xl hover-wood">
                    <div class="wood-button p-6 rounded-2xl flex-shrink-0">
                        <i class="fas fa-envelope text-white text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-gray-900 dark:text-orange-100 text-2xl mb-3 carved-shadow">
                            <i class="fas fa-at ml-3"></i>ایمیل
                        </h3>
                        <p class="text-gray-800 dark:text-yellow-300 text-xl font-semibold">
                            info@xazarwood.ir | sales@xazarwood.ir
                        </p>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="flex space-x-6 space-x-reverse pt-8">
                    <a href="#" class="wood-button p-6 rounded-2xl text-white hover:scale-110 transition-all">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="#" class="wood-button p-6 rounded-2xl text-white hover:scale-110 transition-all">
                        <i class="fab fa-telegram text-2xl"></i>
                    </a>
                    <a href="#" class="wood-button p-6 rounded-2xl text-white hover:scale-110 transition-all">
                        <i class="fab fa-whatsapp text-2xl"></i>
                    </a>
                    <a href="#" class="wood-button p-6 rounded-2xl text-white hover:scale-110 transition-all">
                        <i class="fas fa-phone text-2xl"></i>
                    </a>
                </div>
            </div>

            <form class="slide-up wood-panel p-12 rounded-3xl space-y-10 hover-wood" onsubmit="handleFormSubmit(event)">
                <div>
                    <label for="name" class="block text-2xl font-black text-gray-900 dark:text-orange-100 mb-4 carved-shadow">
                        <i class="fas fa-user ml-3"></i>نام و نام خانوادگی
                    </label>
                    <input type="text" id="name" name="name" required class="w-full px-8 py-6 border-4 border-orange-600 dark:border-yellow-500 rounded-2xl focus:ring-6 focus:ring-orange-300 focus:border-orange-500 bg-orange-50 dark:bg-orange-900 text-gray-900 dark:text-orange-100 text-xl font-bold">
                </div>

                <div>
                    <label for="phone" class="block text-2xl font-black text-gray-900 dark:text-orange-100 mb-4 carved-shadow">
                        <i class="fas fa-phone ml-3"></i>شماره موبایل
                    </label>
                    <input type="tel" id="phone" name="phone" required class="w-full px-8 py-6 border-4 border-orange-600 dark:border-yellow-500 rounded-2xl focus:ring-6 focus:ring-orange-300 focus:border-orange-500 bg-orange-50 dark:bg-orange-900 text-gray-900 dark:text-orange-100 text-xl font-bold">
                </div>

                <div>
                    <label for="product" class="block text-2xl font-black text-gray-900 dark:text-orange-100 mb-4 carved-shadow">
                        <i class="fas fa-shopping-cart ml-3"></i>محصول مورد علاقه
                    </label>
                    <select id="product" name="product" required class="w-full px-8 py-6 border-4 border-orange-600 dark:border-yellow-500 rounded-2xl focus:ring-6 focus:ring-orange-300 focus:border-orange-500 bg-orange-50 dark:bg-orange-900 text-gray-900 dark:text-orange-100 text-xl font-bold">
                        <option value="">انتخاب کنید</option>
                        <option value="rustic-table">میز روستیک</option>
                        <option value="wooden-dishes">ظروف چوبی</option>
                        <option value="wooden-mug">ماگ چوبی</option>
                        <option value="wooden-clock">ساعت چوبی</option>
                        <option value="custom-order">سفارش ویژه</option>
                    </select>
                </div>

                <div>
                    <label for="message" class="block text-2xl font-black text-gray-900 dark:text-orange-100 mb-4 carved-shadow">
                        <i class="fas fa-comment ml-3"></i>توضیحات و جزئیات سفارش
                    </label>
                    <textarea id="message" name="message" rows="6" required class="w-full px-8 py-6 border-4 border-orange-600 dark:border-yellow-500 rounded-2xl focus:ring-6 focus:ring-orange-300 focus:border-orange-500 bg-orange-50 dark:bg-orange-900 text-gray-900 dark:text-orange-100 text-xl font-bold"></textarea>
                </div>

                <button type="submit" class="w-full wood-button px-10 py-8 rounded-2xl font-black text-2xl text-white transition-all transform hover:scale-105 wood-glow">
                    <i class="fas fa-paper-plane ml-3"></i>ارسال درخواست سفارش
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="wood-texture border-t-6 border-orange-600 dark:border-yellow-500 text-gray-900 dark:text-orange-100 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-12">
            <div class="space-y-8">
                <div class="flex items-center space-x-4 space-x-reverse">
                    <div class="w-16 h-16 wood-button rounded-2xl flex items-center justify-center">
                        <i class="fas fa-tree text-white text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-3xl font-black wooden-text carved-shadow">XazarWood</h3>
                        <p class="text-gray-800 dark:text-yellow-300 font-bold text-lg">صنایع چوبی</p>
                    </div>
                </div>
                <p class="text-gray-800 dark:text-yellow-300 leading-relaxed font-semibold text-lg">
                    از دل طبیعت شمال، برای زیبایی و گرمای خانه شما
                </p>
            </div>

            <div>
                <h3 class="font-black text-gray-900 dark:text-orange-100 mb-8 text-2xl carved-shadow">
                    <i class="fas fa-tools ml-3"></i>محصولات
                </h3>
                <ul class="space-y-4 text-gray-800 dark:text-yellow-300 font-bold text-lg">
                    <li><a href="#" class="hover:text-gray-600 dark:hover:text-yellow-400 transition-colors">میزهای روستیک</a></li>
                    <li><a href="#" class="hover:text-gray-600 dark:hover:text-yellow-400 transition-colors">ظروف چوبی</a></li>
                    <li><a href="#" class="hover:text-gray-600 dark:hover:text-yellow-400 transition-colors">ماگ چوبی</a></li>
                    <li><a href="#" class="hover:text-gray-600 dark:hover:text-yellow-400 transition-colors">ساعت‌های چوبی</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-black text-gray-900 dark:text-orange-100 mb-8 text-2xl carved-shadow">
                    <i class="fas fa-info-circle ml-3"></i>درباره ما
                </h3>
                <ul class="space-y-4 text-gray-800 dark:text-yellow-300 font-bold text-lg">
                    <li><a href="#" class="hover:text-gray-600 dark:hover:text-yellow-400 transition-colors">داستان XazarWood</a></li>
                    <li><a href="#" class="hover:text-gray-600 dark:hover:text-yellow-400 transition-colors">فرآیند ساخت</a></li>
                    <li><a href="#" class="hover:text-gray-600 dark:hover:text-yellow-400 transition-colors">کیفیت محصولات</a></li>
                    <li><a href="#" class="hover:text-gray-600 dark:hover:text-yellow-400 transition-colors">مشارکت با ما</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-black text-gray-900 dark:text-orange-100 mb-8 text-2xl carved-shadow">
                    <i class="fas fa-share-alt ml-3"></i>شبکه‌های اجتماعی
                </h3>
                <div class="flex space-x-4 space-x-reverse">
                    <a href="#" class="wood-button p-4 rounded-xl hover:scale-110 transition-all">
                        <i class="fab fa-instagram text-white text-xl"></i>
                    </a>
                    <a href="#" class="wood-button p-4 rounded-xl hover:scale-110 transition-all">
                        <i class="fab fa-telegram text-white text-xl"></i>
                    </a>
                    <a href="#" class="wood-button p-4 rounded-xl hover:scale-110 transition-all">
                        <i class="fab fa-whatsapp text-white text-xl"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t-4 border-orange-700 dark:border-yellow-500 mt-16 pt-12 text-center">
            <p class="text-gray-800 dark:text-yellow-300 text-xl font-bold">
                &copy; ۱۴۰۳ XazarWood. کلیه حقوق محفوظ است. |
                <i class="fas fa-heart text-red-500 mx-2"></i>
                با عشق به چوب و طبیعت تولید شده
            </p>
        </div>
    </div>
</footer>

<script>
    // Theme Toggle
    const themeToggle = document.getElementById('theme-toggle');
    const html = document.documentElement;

    const currentTheme = localStorage.getItem('theme') || 'light';
    if (currentTheme === 'dark') {
        html.classList.add('dark');
    }

    function toggleTheme() {
        html.classList.toggle('dark');
        const isDark = html.classList.contains('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
    }

    themeToggle.addEventListener('click', toggleTheme);

    // Mobile Menu
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Smooth Scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                mobileMenu.classList.add('hidden');
            }
        });
    });

    // Scroll Animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.slide-up').forEach(el => {
        observer.observe(el);
    });

    // Form Handler
    function handleFormSubmit(event) {
        event.preventDefault();

        const formData = new FormData(event.target);
        const name = formData.get('name');
        const product = formData.get('product');

        // Success notification
        const notification = document.createElement('div');
        notification.className = 'fixed top-8 left-8 wood-panel px-10 py-8 rounded-3xl shadow-2xl z-50 transform -translate-x-full transition-transform duration-700 border-4 border-orange-600 dark:border-yellow-500';
        notification.innerHTML = `
                <div class="flex items-center space-x-6 space-x-reverse">
                    <i class="fas fa-check-circle text-green-600 text-4xl"></i>
                    <div>
                        <h4 class="font-black text-orange-900 dark:text-orange-100 text-2xl mb-2 carved-shadow">درخواست ثبت شد! 🎉</h4>
                        <p class="text-orange-700 dark:text-yellow-300 font-bold text-lg">سلام ${name}! درخواست شما برای ${getProductName(product)} با موفقیت ارسال شد.</p>
                    </div>
                </div>
            `;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.classList.remove('-translate-x-full');
        }, 100);

        setTimeout(() => {
            notification.classList.add('-translate-x-full');
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 700);
        }, 5000);

        event.target.reset();
    }

    function getProductName(product) {
        const productNames = {
            'rustic-table': 'میز روستیک',
            'wooden-dishes': 'ظروف چوبی',
            'wooden-mug': 'ماگ چوبی',
            'wooden-clock': 'ساعت چوبی',
            'custom-order': 'سفارش ویژه'
        };
        return productNames[product] || 'محصول';
    }

    // Button Effects
    document.querySelectorAll('.wood-button').forEach(button => {
        button.addEventListener('mousedown', function() {
            this.style.transform = 'scale(0.96) translateY(3px)';
        });

        button.addEventListener('mouseup', function() {
            this.style.transform = '';
        });

        button.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });

    // Parallax Effect
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const floatingElements = document.querySelectorAll('.floating-animation');

        floatingElements.forEach((element, index) => {
            const speed = 0.2 + (index * 0.1);
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // Image Slider Functionality
    class ImageSlider {
        constructor() {
            this.currentSlide = 0;
            this.slides = document.querySelectorAll('.slider-slide');
            this.dots = document.querySelectorAll('.slider-dot');
            this.prevBtn = document.querySelector('.slider-prev');
            this.nextBtn = document.querySelector('.slider-next');
            this.totalSlides = this.slides.length;
            this.autoSlideInterval = null;

            this.init();
        }

        init() {
            // Add event listeners
            this.prevBtn.addEventListener('click', () => this.prevSlide());
            this.nextBtn.addEventListener('click', () => this.nextSlide());

            // Add dot click listeners
            this.dots.forEach((dot, index) => {
                dot.addEventListener('click', () => this.goToSlide(index));
            });

            // Start auto-slide
            this.startAutoSlide();

            // Pause auto-slide on hover
            const sliderContainer = document.querySelector('.slider-container');
            sliderContainer.addEventListener('mouseenter', () => this.stopAutoSlide());
            sliderContainer.addEventListener('mouseleave', () => this.startAutoSlide());
        }

        updateSlider() {
            // Update slides
            this.slides.forEach((slide, index) => {
                slide.classList.remove('active', 'prev');
                if (index === this.currentSlide) {
                    slide.classList.add('active');
                } else if (index < this.currentSlide) {
                    slide.classList.add('prev');
                }
            });

            // Update dots
            this.dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentSlide);
                if (index === this.currentSlide) {
                    dot.classList.remove('bg-orange-300', 'dark:bg-yellow-600');
                    dot.classList.add('bg-orange-600', 'dark:bg-yellow-400');
                } else {
                    dot.classList.remove('bg-orange-600', 'dark:bg-yellow-400');
                    dot.classList.add('bg-orange-300', 'dark:bg-yellow-600');
                }
            });
        }

        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
            this.updateSlider();
        }

        prevSlide() {
            this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
            this.updateSlider();
        }

        goToSlide(index) {
            this.currentSlide = index;
            this.updateSlider();
        }

        startAutoSlide() {
            this.stopAutoSlide();
            this.autoSlideInterval = setInterval(() => {
                this.nextSlide();
            }, 4000);
        }

        stopAutoSlide() {
            if (this.autoSlideInterval) {
                clearInterval(this.autoSlideInterval);
                this.autoSlideInterval = null;
            }
        }
    }

    // Initialize slider when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
        new ImageSlider();
    });
</script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'98fe8de61387c1a5',t:'MTc2MDY5MTA4OC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
