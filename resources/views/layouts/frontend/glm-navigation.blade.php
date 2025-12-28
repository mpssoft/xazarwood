<!-- Header -->
<!-- Divider -->
<div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
<header class="fixed w-full py-2 border-b border-wood-400 dark:border-wood-900  bg-white/95 dark:bg-wood-950/95 backdrop-blur-sm shadow-lg  top-0 z-50 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 py-1">
        <div class="flex items-center justify-between">
            <!-- Brand and Navigation -->
            <div class="flex items-center space-x-reverse space-x-8">
                <a href="/">
                <div class="flex items-center justify-center space-x-3 space-x-reverse text-center">
                    <div class="flex items-center justify-center  w-10 h-10 bg-amber-600 dark:bg-amber-400 rounded-full  shadow-lg">
                        <i class="fas fa-tree text-wood-100 dark:text-wood-900 "></i>
                    </div>
                    <!-- 🪵 Brand Text -->
                    <div class="flex flex-col items-center leading-tight font-extrabold">

                        <span style="font-family:'Vazirmatn-bold' !important;" class=" text-2xl  font-bold  bg-gradient-to-r from-amber-600 via-yellow-400 to-amber-800  text-transparent bg-clip-text    tv-optimized-text-shadow">
            خزرچوب
        </span>
                    </div>


                </div>
                </a>
                <!-- Desktop Navigation -->

                <nav class="hidden lg:flex lg:items-center lg:justify-start space-x-reverse space-x-6">
                    <!-- Products (Dining Table with custom path) -->
                    <a href="{{route('products-list','میز')}}" title="میزهای چوبی روستیک خززچوب" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M4 10v10m16-10v10M8 10v10m8-10v10"/>
                        </svg>
                        میزها
                    </a>

                    <!-- Categories (Clock) -->
                    <a href="{{route('products-list','ساعت')}}" title="ساعت های چوبی روستیک خزرچوب" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium">
                        <i class="fas fa-clock ml-2"></i>
                        ساعت‌ها
                    </a>

                    <!-- categories (wooden dishes) -->
                    <a href="{{route('products-list','ظروف')}}" title="ظروف چوبی روستیک خزرچوب" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium">
                        <i class="fas fa-coffee ml-2"></i>
                        ظروف چوبی
                    </a>
                    <!-- Categories (chairs) -->
                    <a href="{{route('products-list','صندل')}}" title="صندل ها چوبی روستیک خزرچوب" class="flex items-center text-wood-700 dark:text-wood-200 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium">
                        <i class="fas fa-chair ml-2"></i>
                        صندلی چوبی
                    </a>

                    <!-- Dropdown (Contact) -->
                    <div class="relative group">
                        <!-- Trigger -->
                        <button class="flex items-center text-wood-700 dark:text-wood-200
                 hover:text-amber-600 dark:hover:text-wood-300 transition-colors font-medium">
                            <i class="fas fa-envelope ml-2"></i>
                            تماس
                            <i class="fas  text-sm fa-chevron-down mr-2"></i>
                        </button>

                        <!-- Dropdown menu -->
                        <div class="absolute overflow-hidden right-0 mt-6 w-72  p-5 bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-900 dark:via-wood-800 dark:to-wood-950 text-wood-800 dark:text-wood-100 rounded-lg shadow-[0_8px_32px_rgba(74,47,31,0.15)] dark:shadow-[0_8px_32px_rgba(0,0,0,0.5)]
              transform scale-95 opacity-0 invisible
              group-hover:visible group-hover:opacity-100 group-hover:scale-100
              transition-all duration-200 ease-out">
                            <nav class="space-y-1">
                                <!-- Divider -->
                                <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
                                <a href="/about" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                                    <i class="fas fa-info-circle text-amber-600 group-hover:text-amber-700 dark:text-amber-400 dark:group-hover:text-amber-300 transition-colors duration-200 w-4"></i>
                                    <span class="font-medium">درباره خزرچوب</span>
                                </a>

                                <a href="/ask" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                                    <i class="fas fa-question-circle text-green-600 group-hover:text-green-700 dark:text-green-400 dark:group-hover:text-green-300 transition-colors duration-200 w-4"></i>
                                    <span class="font-medium">سوالات متداول </span>
                                </a>
                                <a href="/terms-of-service" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                                    <i class="fas fa-list-check text-red-600 group-hover:text-red-700 dark:text-red-400 dark:group-hover:text-red-300 transition-colors duration-200 w-4"></i>
                                    <span class="font-medium">شرایط و ضوابط استفاده  </span>
                                </a>
                                <a href="/contact" class="flex items-center justify-between px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-envelope text-amber-600 group-hover:text-amber-700 dark:text-amber-400 dark:group-hover:text-amber-300 transition-colors duration-200 w-4"></i>
                                        <span class="font-medium">تماس با ما</span>
                                    </div>
                                </a>
                            </nav>

                            <!-- Divider -->
                            <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
                        </div>
                    </div>

                </nav>

            </div>

            <!-- Right Side Actions -->
            <div class="flex items-center space-x-reverse space-x-3">

                <!-- Theme Toggle -->
                <button onclick="toggleTheme()" class="p-2 rounded-full bg-wood-100 dark:bg-wood-800 hover:bg-wood-200 dark:hover:bg-wood-700 transition-colors">
                    <svg id="sunIcon" class="w-5 h-5 text-wood-700 dark:text-wood-200 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <svg id="moonIcon" class="w-5 h-5 text-wood-700 dark:text-wood-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>


                <!-- Cart Dropdown -->
                <div class="relative">
                    <button  id="cartBtn" class="p-2 flex rounded-full bg-wood-100 dark:bg-wood-800 hover:bg-wood-200 dark:hover:bg-wood-700 transition-colors relative">
                        <svg class="w-5 h-5 text-wood-700 dark:text-wood-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span id="itemsCount" class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">3</span>
                    </button>

                    <!-- Cart Dropdown Menu -->
                    <div id="cartDropdown" class="hidden absolute left-0 mt-5 w-72 max-w-[90vw] bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-900 dark:via-wood-800 dark:to-wood-950 text-wood-800 dark:text-wood-100 rounded-2xl shadow-[0_8px_32px_rgba(74,47,31,0.15)] dark:shadow-[0_8px_32px_rgba(0,0,0,0.5)] z-50 p-3 space-y-2 with-blur border border-wood-300/50 dark:border-wood-700/50">
                        <input type="hidden" id="count" value="0">

                        <!-- Cart Items -->
                        <div id="cartItems" class="space-y-3">

                        </div>


                    </div>
                </div>
                <!-- User Profile Dropdown -->
                <div class="relative hidden md:flex">
                    @if(auth()->check())
                        <button id="userMenuBtn" class=" transition-colors">

                            <div class="w-10 h-10 rounded-full bg-gradient-to-r from-amber-400 to-orange-500 p-0.5 transition-all duration-200 hover:scale-105 shadow-lg hover:shadow-xl">
                                <img src="{{auth()->user()->image ? Storage::disk('users')->url( 'thumbs/'.auth()->user()->image) : '/images/user-avatar-man2.jpg'}}" class="w-full h-full rounded-full border-2 border-white dark:border-slate-700"
                                     alt="avatar">
                            </div>
                        </button>

                        <!-- User Dropdown Menu -->
                        <div id="userDropdown" class="hidden absolute left-0 mt-16 w-72 max-w-[90vw] bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-900 dark:via-wood-800 dark:to-wood-950 text-wood-800 dark:text-wood-100 rounded-2xl shadow-[0_8px_32px_rgba(74,47,31,0.15)] dark:shadow-[0_8px_32px_rgba(0,0,0,0.5)] z-50 p-5 space-y-4 with-blur border border-wood-300/50 dark:border-wood-700/50">
                            <!-- User Info Section -->
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-r from-amber-400 to-orange-500 p-0.5">
                                    <img src="{{auth()->user()->image ? Storage::disk('users')->url( 'thumbs/'.auth()->user()->image) : '/images/user-avatar-man2.jpg'}}" class="w-full h-full rounded-full border-2 border-white dark:border-slate-700"
                                         alt="avatar">
                                </div>
                                <div>
                                    <p class="font-bold text-lg bg-gradient-to-r from-amber-600 to-orange-600 bg-clip-text text-transparent">
                                        {{auth()->user()->name}}</p>
                                    <a href="/{{auth()->user()->role}}" class="text-sm text-amber-600 hover:text-amber-700 dark:text-amber-400 dark:hover:text-amber-300 hover:underline transition-colors duration-200">مشاهده پنل کاربری</a>
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>

                            <!-- Navigation Menu -->
                            <nav class="space-y-1">
                                <a href="{{route('shop.user.orders.index')}}" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                                    <i class="fas fa-box text-amber-600 group-hover:text-amber-700 dark:text-amber-400 dark:group-hover:text-amber-300 transition-colors duration-200 w-4"></i>
                                    <span class="font-medium">سفارش‌ها</span>
                                </a>
                                <a href="{{route('user.addresses.index')}}" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                                    <i class="fas fa-box text-amber-600 group-hover:text-amber-700 dark:text-amber-400 dark:group-hover:text-amber-300 transition-colors duration-200 w-4"></i>
                                    <span class="font-medium">آدرس های من</span>
                                </a>
                               {{-- <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                                    <i class="fas fa-heart text-red-500 group-hover:text-red-600 dark:text-red-400 dark:group-hover:text-red-300 transition-colors duration-200 w-4"></i>
                                    <span class="font-medium">علاقه‌مندی‌ها</span>
                                </a>--}}

                                <a href="{{route('user.profile.edit')}}" class="flex items-center justify-between px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-user-edit text-amber-600 group-hover:text-amber-700 dark:text-amber-400 dark:group-hover:text-amber-300 transition-colors duration-200 w-4"></i>
                                        <span class="font-medium"> اطلاعات کاربری</span>
                                    </div>
                                </a>
                            </nav>

                            <!-- Divider -->
                            <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>

                            <!-- Logout Section -->
                            <form action="{{route('logout')}}" method="post" id="logout-form">@csrf</form>
                            <button onclick="event.preventDefault();document.getElementById('logout-form').submit()"
                             class="w-full text-center bg-gradient-to-r from-red-50 to-orange-50 dark:from-red-900/20 dark:to-orange-900/20 hover:from-red-100 hover:to-orange-100 dark:hover:from-red-900/30 dark:hover:to-orange-900/30 text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 py-3 rounded-xl transition-all duration-200 font-medium hover:scale-[0.98]">
                                <i class="fas fa-sign-out-alt ml-2"></i>
                                خروج از حساب کاربری
                            </button>
                        </div>
                    @else
                        <div id="authButtons" class="hidden md:flex ">
                            <a href="#" onclick="openLoginBox()"
                               class="bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-900 dark:via-wood-800 dark:to-wood-950 text-wood-800 dark:text-wood-100 px-6 py-2 rounded-lg font-medium hover:from-wood-100 hover:via-wood-200 hover:to-wood-300 dark:hover:from-wood-800 dark:hover:via-wood-700 dark:hover:to-wood-900 hover:shadow-md hover:-translate-y-0.5 transition-all ">
                                ورود / ثبت نام
                            </a>
                        </div>
                    @endif
                </div>

                <!-- Mobile Menu Toggle -->
                <button onclick="toggleMobileMenu()" class="lg:hidden p-2 rounded-full bg-wood-100 dark:bg-wood-800 hover:bg-wood-200 dark:hover:bg-wood-700 transition-colors">
                    <svg id="menuIcon" class="w-5 h-5 text-wood-700 dark:text-wood-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="closeIcon" class="w-5 h-5 text-wood-700 dark:text-wood-200 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

          <!-- Beautiful Mobile Menu -->
        <div id="mobileMenu" class="mobile-menu fixed top-0 right-0 min-h-full w-80 bg-white dark:bg-wood-900/95  shadow-2xl z-50 lg:hidden ">

            <!-- Header Section -->
            <div class="bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-900 dark:via-wood-800 dark:to-wood-950 text-wood-800 dark:text-wood-100  shadow-[0_8px_32px_rgba(74,47,31,0.15)] dark:shadow-[0_8px_32px_rgba(0,0,0,0.5)] p-6 pt-0 relative overflow-hidden">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10 ">

                    <button onclick="toggleMobileMenu()" class=" float-left z-10 text-white/90 hover:text-white hover:bg-white/20 p-2 rounded-full transition-all duration-200">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                    <div class="">
                        <div class="flex items-center text-center space-x-3 space-x-reverse">

                            <div class="w-full">
                                <div class="p-4  flex items-center justify-center">
                                    <i class="fas fa-tree  text-7xl text-amber-500 dark:text-white "></i>
                                </div>
                                <div class="flex items-center justify-center space-x-3 space-x-reverse text-center">

                                    <!-- 🪵 Brand Text -->
                                     <div class="flex flex-col items-center leading-tight font-extrabold">

        <span class="text-3xl bg-gradient-to-l from-wood-700 to-wood-400 dark:from-wood-300 dark:to-wood-100
                     bg-clip-text text-transparent drop-shadow-sm tracking-tight">
            XazarWoods
        </span>
                                        <span class="text-xl text-wood-800 dark:text-wood-200 drop-shadow-sm tracking-tight">
            خزرچوب
        </span>
                                    </div>


                                </div>

                                <p class="text-amber-600 dark:text-white/80 text-sm">زیبایی طبیعت در خانه شما</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Menu Content -->
            <div class="p-3  overflow-y-auto h-full pb-32">
                <!-- Courses Section -->
                <div class="space-y-1 ">
                    <a href="{{ route('products-list','all') }}"  class="flex items-center space-x-422222 space-x-reverse  rounded-xl hover:bg-gradient-to-r hover:from-wood-300 hover:to-wood-50 dark:hover:from-wood-950/95 dark:hover:to-yellow-900/20 text-gray-700 dark:text-gray-700 group transition-all duration-200 hover:transform hover:-translate-x-1">
                        <div class="flex items-center space-x-4 space-x-reverse p-4 text-gray-800 dark:text-gray-100">
                            <div class="w-10 h-10 bg-gradient-to-br from-wood-500 to-wood-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-box-open text-white text-sm"></i>
                            </div>
                            <span class="font-semibold ">همه محصولات</span>
                        </div>
                    </a>
                    <div class="mr-6 space-y-1">
                        @foreach(\Modules\Blog\Models\Category::all() as $category)
                            <a href="{{ route('products-list',$category->name) }}"  class="flex items-center space-x-3 space-x-reverse p-3 py-2 rounded-lg hover:bg-gradient-to-r hover:from-wood-300 hover:to-wood-50 dark:hover:from-wood-950/95 dark:hover:to-yellow-900/20 text-gray-600 dark:text-gray-300 group transition-all duration-200 hover:transform hover:-translate-x-1">
                                <div class="w-8 h-8 bg-gradient-to-br from-wood-400 to-wood-400 rounded-lg flex items-center justify-center group-hover:scale-105 transition-transform duration-200">
                                    <i class="fas fa-box text-white text-xs"></i>
                                </div>
                                <span class="font-medium">{{$category->name}}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
               {{-- <a href="{{ route('files') }}"  class="flex items-center space-x-4 space-x-reverse  rounded-xl hover:bg-gradient-to-r hover:from-wood-300 hover:to-wood-50 dark:hover:from-wood-950/95 dark:hover:to-yellow-900/20 text-gray-700 dark:text-gray-700 group transition-all duration-200 hover:transform hover:-translate-x-1">
                    <div class="flex items-center space-x-4 space-x-reverse p-4 text-gray-800 dark:text-gray-100">
                        <div class="w-10 h-10 bg-gradient-to-br from-wood-500 to-wood-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-file-archive text-white text-sm"></i>
                        </div>
                        <span class="font-semibold "> قبل از خرید </span>
                    </div>
                </a>--}}


                @if(auth()->check())
                    <div id="mobileUserPanelLink" class="pt-4 border-t border-wood-200 dark:border-wood-700">
                        <a href="{{auth()->user()->role=='admin'? route('admin.home'):route('shop.user.orders.index')}}" onclick="showUserDashboard(); toggleMobileMenu()" class="flex items-center space-x-4 space-x-reverse p-4 rounded-xl hover:bg-gradient-to-r hover:from-indigo-50 hover:to-purple-50 dark:hover:from-indigo-900/20 dark:hover:to-purple-900/20 text-gray-700 dark:text-gray-200 group transition-all duration-200 hover:transform hover:-translate-x-1">
                            <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                <i class="fas fa-user-cog text-white text-sm"></i>
                            </div>
                            <span class="font-medium dark:text-white">پنل کاربری</span>
                        </a>
                    </div>
                @else
                    <div class="pt-4 border-t border-wood-200 dark:border-wood-700">
                        <button onclick="openLoginBox()"
                                class="bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-900 dark:via-wood-800 dark:to-wood-950 text-wood-800 dark:text-wood-100 px-6 py-2 rounded-lg font-medium hover:from-wood-100 hover:via-wood-200 hover:to-wood-300 dark:hover:from-wood-800 dark:hover:via-wood-700 dark:hover:to-wood-900 hover:shadow-md hover:-translate-y-0.5 transition-all ">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>ورود / ثبت نام</span>
                        </button>
                    </div>
                @endif
            </div>


        </div>

    </div>

</header>

@push('scripts')
    <script>
        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuButton = e.target.closest('button[onclick="toggleMobileMenu()"]');

            if (!mobileMenu.contains(e.target) && !menuButton && mobileMenu.classList.contains('active')) {
                mobileMenu.classList.remove('active');

                document.getElementById('menuIcon').classList.toggle('hidden');
                document.getElementById('closeIcon').classList.toggle('hidden');
            }
        });
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('active');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');


            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');

        }
    </script>
@endpush
