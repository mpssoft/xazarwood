<!-- Beautiful Header -->

<header class="flex w-full justify-between items-center px-6 py-4  bg-gradient-to-b from-white  to-wood-100 dark:from-wood-800  dark:to-wood-900 shadow-[0_4px_12px_rgba(0,0,0,0.15)] dark:shadow-[0_4px_12px_rgba(0,0,0,0.4)] sticky top-0 z-50 backdrop-blur-sm">
    <!-- Toggle Button (Mobile) -->

    <div class="md:hidden ">
        <button @click="sidebarOpen = !sidebarOpen; toggleButton = true" class="w-10 h-10 bg-gradient-to-r from-pink-500 to-purple-500 text-white rounded-xl hover:from-pink-600 hover:to-purple-600 transition-all duration-200 flex items-center justify-center shadow-lg hover:shadow-xl hover:scale-105">
            <i class="fas fa-bars text-sm"></i>
        </button>
    </div>

    <!-- Branding section - hidden on small screens, visible on medium+ -->
    <div class="flex items-center gap-20">
        <div class="hidden md:flex items-center ">
            <a href="/" class="flex items-center gap-2 hover:scale-105 transition-transform duration-200">
            <div class="flex items-center justify-center space-x-3 space-x-reverse text-center">
                <div class="flex items-center justify-center  w-10 h-10 bg-amber-600 dark:bg-amber-400 rounded-full  shadow-lg">
                    <i class="fas fa-tree text-wood-100 dark:text-wood-900 "></i>
                </div>
                <!-- 🪵 Brand Text -->
                <div class="flex flex-col items-center leading-tight font-extrabold">

                        <span style="font-family:'Vazirmatn-bold' !important;" class=" text-2xl  font-bold  bg-gradient-to-r from-amber-600 via-yellow-400 to-amber-800  text-transparent bg-clip-text    tv-optimized-text-shadow">
            صنایع خزرچوب
        </span>
                </div>


            </div>
            </a>
        </div>



        <div class="hidden text-gray-500 dark:text-gray-300 sm:block  text-sm  float-right md:text-lg  truncate    ">
            <span class="">👋</span> {{auth()->user()->name}} عزیز؛ خوش اومدی
        </div>
    </div>
    <div class="flex items-center gap-3">
        {{-- <!-- Notification Bell -->
         <button class="w-10 h-10 bg-gradient-to-r from-orange-100 to-orange-200 dark:from-orange-900/30 dark:to-orange-800/30 hover:from-orange-200 hover:to-orange-300 dark:hover:from-orange-800/40 dark:hover:to-orange-700/40 rounded-xl flex items-center justify-center transition-all duration-200 hover:scale-105 shadow-sm hover:shadow-md group">
             <i class="fas fa-bell text-orange-500 group-hover:text-orange-600 transition-colors duration-200"></i>
         </button>

         <!-- Lock Icon -->
         <button class="w-10 h-10 bg-gradient-to-r from-green-100 to-green-200 dark:from-green-900/30 dark:to-green-800/30 hover:from-green-200 hover:to-green-300 dark:hover:from-green-800/40 dark:hover:to-green-700/40 rounded-xl flex items-center justify-center transition-all duration-200 hover:scale-105 shadow-sm hover:shadow-md group">
             <i class="fas fa-lock text-green-500 group-hover:text-green-600 transition-colors duration-200"></i>
         </button>
 --}}
        <!-- Theme Toggle -->
        <button @click="dark = !dark" class="w-10 h-10 bg-gradient-to-r from-blue-100 to-purple-200 dark:from-blue-900/30 dark:to-purple-800/30 hover:from-blue-200 hover:to-purple-300 dark:hover:from-blue-800/40 dark:hover:to-purple-700/40 rounded-xl flex items-center justify-center transition-all duration-200 hover:scale-105 shadow-sm hover:shadow-md group">
            <i x-show="!dark" class="fas fa-moon text-blue-500 group-hover:text-blue-600 transition-colors duration-200"></i>
            <i x-show="dark" class="fas fa-sun text-yellow-500 group-hover:text-yellow-600 transition-colors duration-200"></i>
        </button>
        <div class="relative" x-data="{ open: false }">
            <button @mouseenter="open = !open" class="flex items-center focus:outline-none group mt-2">
                <span class="text-xs text-gray-200 ml-3">{{auth()->user()->name}}</span>
                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-pink-400 to-purple-500 p-0.5 hover:from-pink-500 hover:to-purple-600 transition-all duration-200 hover:scale-105 shadow-lg hover:shadow-xl">
                    <img src="{{auth()->user()->image ? Storage::disk('users')->url( 'thumbs/'.auth()->user()->image) : '/images/user-avatar-man.jpg'}}" class="w-full h-full rounded-full border-2 border-white dark:border-wood-700"
                         alt="avatar">
                </div>
            </button>
            <div
                x-show="open"
                @click.away="open = false"
                @mouseleave="open = false"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class=" absolute left-0 mt-16 w-72 max-w-[90vw] bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-900 dark:via-wood-800 dark:to-wood-950 text-wood-800 dark:text-wood-100 rounded-2xl shadow-[0_8px_32px_rgba(74,47,31,0.15)] dark:shadow-[0_8px_32px_rgba(0,0,0,0.5)] z-50 p-5 space-y-4 with-blur border border-wood-300/50 dark:border-wood-700/50"
            >
                <!-- User Info Section -->



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
                        <a href="{{route('shop.admin.orders.index')}}" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50 dark:hover:from-wood-800 dark:hover:to-wood-700 transition-all duration-200 group hover:-translate-x-1">
                            <i class="fas fa-box text-amber-600 group-hover:text-amber-700 dark:text-amber-400 dark:group-hover:text-amber-300 transition-colors duration-200 w-4"></i>
                            <span class="font-medium">سفارش‌ها</span>
                        </a>



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

                <!-- Divider -->
                <div class="h-px bg-gradient-to-r from-transparent via-gray-300 dark:via-gray-600 to-transparent"></div>

            </div>
        </div>
    </div>

</header>

