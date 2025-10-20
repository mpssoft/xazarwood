@extends('layouts.admin.master')

@section('content')

<div class="bg-gray-50 dark:bg-slate-900 text-gray-900 dark:text-slate-100 transition-colors duration-300">

<!-- Header -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
    <header class="bg-white dark:bg-slate-800 shadow-lg border border-gray-200 dark:border-slate-700 rounded-xl">
        <div class="px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Brand -->
                <div class="flex items-center space-x-4 space-x-reverse">
                    <div class="w-12 h-12 bg-blue-600 dark:bg-slate-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-box-open text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-slate-100">مدیریت محصولات</h1>
                        <p class="text-sm text-gray-500 dark:text-slate-400">XazarWood - پنل مدیریت</p>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex items-center space-x-4 space-x-reverse">
                    <button id="theme-toggle" class="p-2 rounded-lg bg-gray-100 dark:bg-slate-700 hover:bg-gray-200 dark:hover:bg-slate-600 transition-colors">
                        <i class="fas fa-sun dark:hidden text-gray-600"></i>
                        <i class="fas fa-moon hidden dark:inline text-slate-300"></i>
                    </button>
                    <button id="add-product-btn" class="bg-blue-600 dark:bg-slate-600 hover:bg-blue-700 dark:hover:bg-slate-500 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                        <i class="fas fa-plus ml-2"></i>افزودن محصول
                    </button>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">



    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-slate-700">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 dark:bg-slate-700">
                    <i class="fas fa-box text-blue-600 dark:text-slate-300"></i>
                </div>
                <div class="mr-4">
                    <p class="text-sm font-medium text-gray-600 dark:text-slate-400">کل محصولات</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-slate-100">۱۲</p>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-slate-700">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 dark:bg-slate-700">
                    <i class="fas fa-check-circle text-green-600 dark:text-slate-300"></i>
                </div>
                <div class="mr-4">
                    <p class="text-sm font-medium text-gray-600 dark:text-slate-400">موجود</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-slate-100">۹</p>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-slate-700">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-red-100 dark:bg-slate-700">
                    <i class="fas fa-exclamation-triangle text-red-600 dark:text-slate-300"></i>
                </div>
                <div class="mr-4">
                    <p class="text-sm font-medium text-gray-600 dark:text-slate-400">کم موجود</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-slate-100">۳</p>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-slate-700">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 dark:bg-slate-700">
                    <i class="fas fa-dollar-sign text-yellow-600 dark:text-slate-300"></i>
                </div>
                <div class="mr-4">
                    <p class="text-sm font-medium text-gray-600 dark:text-slate-400">ارزش کل</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-slate-100">۴۵ میلیون</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-slate-700 mb-8">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <label for="search" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">جستجو</label>
                <div class="relative">
                    <input type="text" id="search" placeholder="نام محصول را جستجو کنید..." class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400 dark:text-slate-500"></i>
                </div>
            </div>

            <div>
                <label for="status-filter" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">وضعیت</label>
                <select id="status-filter" class="px-4 py-2 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100">
                    <option value="">همه</option>
                    <option value="in-stock">موجود</option>
                    <option value="low-stock">کم موجود</option>
                    <option value="out-of-stock">ناموجود</option>
                </select>
            </div>

            <div>
                <label for="sort-filter" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">مرتب‌سازی</label>
                <select id="sort-filter" class="px-4 py-2 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100">
                    <option value="name">نام محصول</option>
                    <option value="price">قیمت</option>
                    <option value="stock">موجودی</option>
                    <option value="date">تاریخ ایجاد</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <div id="products-grid" class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">

        <!-- Product Card 1 -->
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
            <!-- Product Image -->
            <div class="relative h-48 bg-gray-100 dark:bg-slate-700">
                <div class="w-full h-full flex items-center justify-center">
                    <i class="fas fa-table text-6xl text-gray-400 dark:text-slate-500"></i>
                </div>
                <div class="absolute top-3 right-3">
                        <span class="bg-green-100 dark:bg-slate-700 text-green-800 dark:text-slate-300 px-2 py-1 rounded-full text-xs font-medium animate-pulse">
                            موجود
                        </span>
                </div>
                <div class="absolute top-3 left-3 flex space-x-2 space-x-reverse">
                    <button class="p-2 bg-white dark:bg-slate-800 rounded-full shadow-md hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                        <i class="fas fa-edit text-blue-600 dark:text-slate-300 text-sm"></i>
                    </button>
                    <button class="p-2 bg-white dark:bg-slate-800 rounded-full shadow-md hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                        <i class="fas fa-trash text-red-600 dark:text-slate-300 text-sm"></i>
                    </button>
                </div>
            </div>

            <!-- Product Info -->
            <div class="p-6">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-slate-100">میز روستیک بلوط</h3>
                    <span class="text-lg font-bold text-blue-600 dark:text-slate-300">۳.۵ میلیون</span>
                </div>

                <p class="text-gray-600 dark:text-slate-400 text-sm mb-4 line-clamp-2">
                    میز ناهارخوری ۶ نفره از چوب بلوط طبیعی با طراحی روستیک و کلاسیک
                </p>

                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center space-x-2 space-x-reverse">
                        <i class="fas fa-boxes text-gray-400 dark:text-slate-500 text-sm"></i>
                        <span class="text-sm text-gray-600 dark:text-slate-400">موجودی: ۵ عدد</span>
                    </div>
                    <div class="flex items-center space-x-2 space-x-reverse">
                        <i class="fas fa-images text-gray-400 dark:text-slate-500 text-sm"></i>
                        <span class="text-sm text-gray-600 dark:text-slate-400">۳ تصویر</span>
                    </div>
                </div>

                <!-- Gallery Management -->
                <div class="border-t border-gray-200 dark:border-slate-700 pt-4">
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-sm font-medium text-gray-700 dark:text-slate-300">گالری تصاویر</span>
                        <button class="text-blue-600 dark:text-slate-300 hover:text-blue-700 dark:hover:text-slate-200 text-sm font-medium">
                            <i class="fas fa-plus ml-1"></i>افزودن
                        </button>
                    </div>

                    <div class="grid grid-cols-3 gap-2">
                        <div class="aspect-square bg-gray-100 dark:bg-slate-700 rounded-lg flex items-center justify-center relative group">
                            <i class="fas fa-image text-gray-400 dark:text-slate-500"></i>
                            <button class="absolute top-1 right-1 p-1 bg-red-500 text-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                        <div class="aspect-square bg-gray-100 dark:bg-slate-700 rounded-lg flex items-center justify-center relative group">
                            <i class="fas fa-image text-gray-400 dark:text-slate-500"></i>
                            <button class="absolute top-1 right-1 p-1 bg-red-500 text-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                        <div class="aspect-square bg-gray-100 dark:bg-slate-700 rounded-lg flex items-center justify-center relative group">
                            <i class="fas fa-image text-gray-400 dark:text-slate-500"></i>
                            <button class="absolute top-1 right-1 p-1 bg-red-500 text-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
            <div class="relative h-48 bg-gray-100 dark:bg-slate-700">
                <div class="w-full h-full flex items-center justify-center">
                    <i class="fas fa-utensils text-6xl text-gray-400 dark:text-slate-500"></i>
                </div>
                <div class="absolute top-3 right-3">
                        <span class="bg-yellow-100 dark:bg-slate-700 text-yellow-800 dark:text-slate-300 px-2 py-1 rounded-full text-xs font-medium animate-pulse">
                            کم موجود
                        </span>
                </div>
                <div class="absolute top-3 left-3 flex space-x-2 space-x-reverse">
                    <button class="p-2 bg-white dark:bg-slate-800 rounded-full shadow-md hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                        <i class="fas fa-edit text-blue-600 dark:text-slate-300 text-sm"></i>
                    </button>
                    <button class="p-2 bg-white dark:bg-slate-800 rounded-full shadow-md hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                        <i class="fas fa-trash text-red-600 dark:text-slate-300 text-sm"></i>
                    </button>
                </div>
            </div>

            <div class="p-6">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-slate-100">ست ظروف چوبی</h3>
                    <span class="text-lg font-bold text-blue-600 dark:text-slate-300">۸۵۰ هزار</span>
                </div>

                <p class="text-gray-600 dark:text-slate-400 text-sm mb-4 line-clamp-2">
                    مجموعه کامل کاسه و بشقاب چوب گردو برای آشپزخانه مدرن
                </p>

                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center space-x-2 space-x-reverse">
                        <i class="fas fa-boxes text-gray-400 dark:text-slate-500 text-sm"></i>
                        <span class="text-sm text-gray-600 dark:text-slate-400">موجودی: ۲ عدد</span>
                    </div>
                    <div class="flex items-center space-x-2 space-x-reverse">
                        <i class="fas fa-images text-gray-400 dark:text-slate-500 text-sm"></i>
                        <span class="text-sm text-gray-600 dark:text-slate-400">۵ تصویر</span>
                    </div>
                </div>

                <div class="border-t border-gray-200 dark:border-slate-700 pt-4">
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-sm font-medium text-gray-700 dark:text-slate-300">گالری تصاویر</span>
                        <button class="text-blue-600 dark:text-slate-300 hover:text-blue-700 dark:hover:text-slate-200 text-sm font-medium">
                            <i class="fas fa-plus ml-1"></i>افزودن
                        </button>
                    </div>

                    <div class="grid grid-cols-3 gap-2">
                        <div class="aspect-square bg-gray-100 dark:bg-slate-700 rounded-lg flex items-center justify-center relative group">
                            <i class="fas fa-image text-gray-400 dark:text-slate-500"></i>
                            <button class="absolute top-1 right-1 p-1 bg-red-500 text-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                        <div class="aspect-square bg-gray-100 dark:bg-slate-700 rounded-lg flex items-center justify-center relative group">
                            <i class="fas fa-image text-gray-400 dark:text-slate-500"></i>
                            <button class="absolute top-1 right-1 p-1 bg-red-500 text-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
            <div class="relative h-48 bg-gray-100 dark:bg-slate-700">
                <div class="w-full h-full flex items-center justify-center">
                    <i class="fas fa-mug-hot text-6xl text-gray-400 dark:text-slate-500"></i>
                </div>
                <div class="absolute top-3 right-3">
                        <span class="bg-red-100 dark:bg-slate-700 text-red-800 dark:text-slate-300 px-2 py-1 rounded-full text-xs font-medium animate-pulse">
                            ناموجود
                        </span>
                </div>
                <div class="absolute top-3 left-3 flex space-x-2 space-x-reverse">
                    <button class="p-2 bg-white dark:bg-slate-800 rounded-full shadow-md hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                        <i class="fas fa-edit text-blue-600 dark:text-slate-300 text-sm"></i>
                    </button>
                    <button class="p-2 bg-white dark:bg-slate-800 rounded-full shadow-md hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                        <i class="fas fa-trash text-red-600 dark:text-slate-300 text-sm"></i>
                    </button>
                </div>
            </div>

            <div class="p-6">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-slate-100">ماگ چوبی حکاکی</h3>
                    <span class="text-lg font-bold text-blue-600 dark:text-slate-300">۳۲۰ هزار</span>
                </div>

                <p class="text-gray-600 dark:text-slate-400 text-sm mb-4 line-clamp-2">
                    ماگ چوب راش با حکاکی نام شخصی و طراحی منحصر به فرد
                </p>

                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center space-x-2 space-x-reverse">
                        <i class="fas fa-boxes text-gray-400 dark:text-slate-500 text-sm"></i>
                        <span class="text-sm text-gray-600 dark:text-slate-400">موجودی: ۰ عدد</span>
                    </div>
                    <div class="flex items-center space-x-2 space-x-reverse">
                        <i class="fas fa-images text-gray-400 dark:text-slate-500 text-sm"></i>
                        <span class="text-sm text-gray-600 dark:text-slate-400">۲ تصویر</span>
                    </div>
                </div>

                <div class="border-t border-gray-200 dark:border-slate-700 pt-4">
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-sm font-medium text-gray-700 dark:text-slate-300">گالری تصاویر</span>
                        <button class="text-blue-600 dark:text-slate-300 hover:text-blue-700 dark:hover:text-slate-200 text-sm font-medium">
                            <i class="fas fa-plus ml-1"></i>افزودن
                        </button>
                    </div>

                    <div class="grid grid-cols-3 gap-2">
                        <div class="aspect-square bg-gray-100 dark:bg-slate-700 rounded-lg flex items-center justify-center relative group">
                            <i class="fas fa-image text-gray-400 dark:text-slate-500"></i>
                            <button class="absolute top-1 right-1 p-1 bg-red-500 text-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                        <div class="aspect-square bg-gray-100 dark:bg-slate-700 rounded-lg flex items-center justify-center relative group">
                            <i class="fas fa-image text-gray-400 dark:text-slate-500"></i>
                            <button class="absolute top-1 right-1 p-1 bg-red-500 text-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-8">
        <nav class="flex items-center space-x-2 space-x-reverse">
            <button class="px-3 py-2 text-sm font-medium text-gray-500 dark:text-slate-400 bg-white dark:bg-slate-800 border border-gray-300 dark:border-slate-600 rounded-lg hover:bg-gray-50 dark:hover:bg-slate-700">
                قبلی
            </button>
            <button class="px-3 py-2 text-sm font-medium text-white bg-blue-600 dark:bg-slate-600 border border-blue-600 dark:border-slate-600 rounded-lg">
                ۱
            </button>
            <button class="px-3 py-2 text-sm font-medium text-gray-500 dark:text-slate-400 bg-white dark:bg-slate-800 border border-gray-300 dark:border-slate-600 rounded-lg hover:bg-gray-50 dark:hover:bg-slate-700">
                ۲
            </button>
            <button class="px-3 py-2 text-sm font-medium text-gray-500 dark:text-slate-400 bg-white dark:bg-slate-800 border border-gray-300 dark:border-slate-600 rounded-lg hover:bg-gray-50 dark:hover:bg-slate-700">
                ۳
            </button>
            <button class="px-3 py-2 text-sm font-medium text-gray-500 dark:text-slate-400 bg-white dark:bg-slate-800 border border-gray-300 dark:border-slate-600 rounded-lg hover:bg-gray-50 dark:hover:bg-slate-700">
                بعدی
            </button>
        </nav>
    </div>

</main>
</div>
<script>
    // Theme Toggle
    const themeToggle = document.getElementById('theme-toggle');
    const html = document.documentElement;

    const currentTheme = localStorage.getItem('theme') || 'light';
    if (currentTheme === 'dark') {
        html.classList.add('dark');
    }

    themeToggle.addEventListener('click', () => {
        html.classList.toggle('dark');
        const isDark = html.classList.contains('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });

    // Add Product Button - Navigate to new route
    const addProductBtn = document.getElementById('add-product-btn');

    addProductBtn.addEventListener('click', () => {
        // Here you would navigate to your add product route
        console.log('Navigate to add product page');
        // Example: window.location.href = '/admin/products/add';
    });

    // Search Functionality
    const searchInput = document.getElementById('search');
    const statusFilter = document.getElementById('status-filter');
    const sortFilter = document.getElementById('sort-filter');

    function filterProducts() {
        const searchTerm = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value;
        const sortValue = sortFilter.value;

        // Here you would implement the actual filtering logic
        console.log('Filtering products:', { searchTerm, statusValue, sortValue });
    }

    searchInput.addEventListener('input', filterProducts);
    statusFilter.addEventListener('change', filterProducts);
    sortFilter.addEventListener('change', filterProducts);



    // Notification System
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 left-4 z-50 p-4 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 ${
            type === 'success' ? 'bg-green-500 text-white' :
                type === 'error' ? 'bg-red-500 text-white' :
                    'bg-blue-500 text-white'
        }`;
        notification.innerHTML = `
                <div class="flex items-center space-x-3 space-x-reverse">
                    <i class="fas fa-${type === 'success' ? 'check' : type === 'error' ? 'exclamation-triangle' : 'info'}-circle"></i>
                    <span>${message}</span>
                </div>
            `;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);

        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }

    // Gallery Management in Product Cards
    document.addEventListener('click', (e) => {
        if (e.target.closest('.grid button')) {
            const button = e.target.closest('button');
            if (button.querySelector('.fa-times')) {
                // Remove image
                button.closest('.aspect-square').remove();
            }
        }
    });
</script>

@endsection
