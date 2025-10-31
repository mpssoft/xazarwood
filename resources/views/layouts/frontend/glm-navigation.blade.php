<!-- Header -->
<header class="bg-white/95 dark:bg-wood-950/95 backdrop-blur-sm shadow-lg sticky top-0 z-50 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Brand and Navigation -->
            <div class="flex items-center space-x-reverse space-x-8">
                <div class="flex items-center space-x-reverse space-x-3">
                    <span class="text-3xl">🪵</span>
                    <h1 class="text-2xl font-bold bg-gradient-to-l from-amber-700 to-orange-700 dark:from-wood-300 dark:to-wood-200 bg-clip-text text-transparent">
                        میزهای روستیک
                    </h1>
                </div>

                <!-- Desktop Navigation -->

                <nav class="hidden lg:flex lg:items-center lg:justify-start space-x-reverse space-x-6">
                    <a href="#" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium">
                        <i class="fas fa-home ml-2"></i>
                        خانه
                    </a>
                    <a href="#products" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium">
                        <i class="fas fa-table ml-2"></i>
                        میزها
                    </a>
                    <a href="#categories" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium">
                        <i class="fas fa-clock ml-2"></i>
                        ساعت‌ها
                    </a>
                    <a href="#about" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium">
                        <i class="fas fa-utensils ml-2"></i>
                        ظروف آشپزخانه
                    </a>
                    <a href="#contact" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium">
                        <i class="fas fa-envelope ml-2"></i>
                        تماس
                    </a>
                </nav>
            </div>

            <!-- Right Side Actions -->
            <div class="flex items-center space-x-reverse space-x-3">

                <!-- Theme Toggle -->
                <button onclick="toggleTheme()" class="p-2 rounded-lg bg-wood-100 dark:bg-wood-800 hover:bg-wood-200 dark:hover:bg-wood-700 transition-colors">
                    <svg id="sunIcon" class="w-5 h-5 text-wood-700 dark:text-wood-200 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <svg id="moonIcon" class="w-5 h-5 text-wood-700 dark:text-wood-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>


                <!-- Cart Dropdown -->
                <div class="relative">
                    <button id="cartBtn" class="p-2 rounded-lg bg-wood-100 dark:bg-wood-800 hover:bg-wood-200 dark:hover:bg-wood-700 transition-colors relative">
                        <svg class="w-6 h-6 text-wood-700 dark:text-wood-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">3</span>
                    </button>

                    <!-- Cart Dropdown Menu -->
                    <div id="cartDropdown" class="hidden absolute left-0 mt-3 w-72 max-w-[90vw] bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-900 dark:via-wood-800 dark:to-wood-950 text-wood-800 dark:text-wood-100 rounded-2xl shadow-[0_8px_32px_rgba(74,47,31,0.15)] dark:shadow-[0_8px_32px_rgba(0,0,0,0.5)] z-50 p-3 space-y-2 with-blur border border-wood-300/50 dark:border-wood-700/50">
                        <input type="hidden" id="count" value="0">

                        <!-- Cart Items -->
                        <div id="cartItems" class="space-y-3">

                        </div>


                    </div>
                </div>
                <!-- User Profile Dropdown -->
                <div class="relative">
                    @if(auth()->check())
                        <button id="userMenuBtn" class="p-2 rounded-lg bg-wood-100 dark:bg-wood-800 hover:bg-wood-200 dark:hover:bg-wood-700 transition-colors">
                            <svg class="w-6 h-6 text-wood-700 dark:text-wood-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </button>

                        <!-- User Dropdown Menu -->
                        <div id="userDropdown" class="hidden absolute left-0 mt-3 w-72 max-w-[90vw] bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-900 dark:via-wood-800 dark:to-wood-950 text-wood-800 dark:text-wood-100 rounded-2xl shadow-[0_8px_32px_rgba(74,47,31,0.15)] dark:shadow-[0_8px_32px_rgba(0,0,0,0.5)] z-50 p-5 space-y-4 with-blur border border-wood-300/50 dark:border-wood-700/50">
                            <!-- User Info Section -->
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-r from-amber-400 to-orange-500 p-0.5">
                                    <img src="https://picsum.photos/seed/userprofile/100/100" class="w-full h-full rounded-full border-2 border-white dark:border-wood-800" alt="avatar">
                                </div>
                                <div>
                                    <p class="font-bold text-lg bg-gradient-to-r from-amber-600 to-orange-600 bg-clip-text text-transparent">اکبر</p>
                                    <a href="#" class="text-sm text-amber-600 hover:text-amber-700 dark:text-amber-400 dark:hover:text-amber-300 hover:underline transition-colors duration-200">مشاهده پنل کاربری</a>
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>

                            <!-- Navigation Menu -->
                            <nav class="space-y-1">
                                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                                    <i class="fas fa-box text-amber-600 group-hover:text-amber-700 dark:text-amber-400 dark:group-hover:text-amber-300 transition-colors duration-200 w-4"></i>
                                    <span class="font-medium">سفارش‌ها</span>
                                </a>
                                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                                    <i class="fas fa-heart text-red-500 group-hover:text-red-600 dark:text-red-400 dark:group-hover:text-red-300 transition-colors duration-200 w-4"></i>
                                    <span class="font-medium">علاقه‌مندی‌ها</span>
                                </a>
                                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                                    <i class="fas fa-credit-card text-green-600 group-hover:text-green-700 dark:text-green-400 dark:group-hover:text-green-300 transition-colors duration-200 w-4"></i>
                                    <span class="font-medium">روش‌های پرداخت</span>
                                </a>
                                <a href="#" class="flex items-center justify-between px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-user-edit text-amber-600 group-hover:text-amber-700 dark:text-amber-400 dark:group-hover:text-amber-300 transition-colors duration-200 w-4"></i>
                                        <span class="font-medium">ویرایش پروفایل</span>
                                    </div>
                                </a>
                            </nav>

                            <!-- Divider -->
                            <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>

                            <!-- Logout Section -->
                            <button class="w-full text-center bg-gradient-to-r from-red-50 to-orange-50 dark:from-red-900/20 dark:to-orange-900/20 hover:from-red-100 hover:to-orange-100 dark:hover:from-red-900/30 dark:hover:to-orange-900/30 text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 py-3 rounded-xl transition-all duration-200 font-medium hover:scale-[0.98]">
                                <i class="fas fa-sign-out-alt ml-2"></i>
                                خروج از حساب کاربری
                            </button>
                        </div>
                    @else
                        <div id="authButtons">
                            <a href="#" onclick="openLightbox()"
                               class="bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-900 dark:via-wood-800 dark:to-wood-950 text-wood-800 dark:text-wood-100 px-6 py-2 rounded-lg font-medium hover:from-wood-100 hover:via-wood-200 hover:to-wood-300 dark:hover:from-wood-800 dark:hover:via-wood-700 dark:hover:to-wood-900 hover:shadow-md hover:-translate-y-0.5 transition-all duration-200">
                                ورود / ثبت نام
                            </a>
                        </div>
                    @endif
                </div>

                <!-- Mobile Menu Toggle -->
                <button onclick="toggleMobileMenu()" class="lg:hidden p-2 rounded-lg bg-wood-100 dark:bg-wood-800 hover:bg-wood-200 dark:hover:bg-wood-700 transition-colors">
                    <svg id="menuIcon" class="w-6 h-6 text-wood-700 dark:text-wood-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="closeIcon" class="w-6 h-6 text-wood-700 dark:text-wood-200 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <nav id="mobileMenu" class="hidden lg:hidden mt-4 pb-4 border-t border-wood-200 dark:border-wood-800">
            <div class="flex flex-col space-y-3 pt-4">
                <a href="#" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium py-2">
                    <i class="fas fa-home ml-2"></i>
                    خانه
                </a>
                <a href="#products" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium py-2">
                    <i class="fas fa-table ml-2"></i>
                    میزها
                </a>
                <a href="#categories" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium py-2">
                    <i class="fas fa-clock ml-2"></i>
                    ساعت‌ها
                </a>
                <a href="#about" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium py-2">
                    <i class="fas fa-utensils ml-2"></i>
                    ظروف آشپزخانه
                </a>
                <a href="#contact" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium py-2">
                    <i class="fas fa-envelope ml-2"></i>
                    تماس
                </a>
            </div>
        </nav>
    </div>
</header>
