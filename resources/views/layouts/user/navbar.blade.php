<!-- Beautiful Header -->
<header class="flex justify-between items-center px-6 py-4 bg-gradient-to-l from-white via-wood-50 to-wood-100 dark:from-wood-900  dark:to-wood-950 shadow-[0_4px_12px_rgba(0,0,0,0.15)] dark:shadow-[0_4px_12px_rgba(0,0,0,0.4)] sticky top-0 z-30 backdrop-blur-sm">
    <!-- Toggle Button (Mobile) -->
    <div class="md:hidden">
        <button @click="sidebarOpen = !sidebarOpen; toggleButton = true;" class="w-10 h-10 bg-gradient-to-r from-pink-500 to-purple-500 text-white rounded-xl hover:from-pink-600 hover:to-purple-600 transition-all duration-200 flex items-center justify-center shadow-lg hover:shadow-xl hover:scale-105">
            <i class="fas fa-bars text-sm"></i>
        </button>
    </div>

    <div class="hidden sm:block text-sm md:text-lg font-bold truncate bg-gradient-to-r from-pink-600 via-purple-600 to-blue-600 bg-clip-text text-transparent drop-shadow-sm">
         {{Auth::user()->name}} عزیز؛ خوش اومدی
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

    </div>
</header>

