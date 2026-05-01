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

                            <a href="{{route('admin.products.create')}}" id="add-product-btn" class="bg-blue-600 dark:bg-slate-600 hover:bg-blue-700 dark:hover:bg-slate-500 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                <i class="fas fa-plus ml-2"></i>افزودن محصول
                            </a>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">



            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-2 mb-4">
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
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-slate-700 mb-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <label for="search" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">جستجو</label>
                        <div class="relative">
                            <input type="text" id="search" placeholder="نام محصول را جستجو کنید..." class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400 dark:text-slate-500"></i>
                        </div>
                    </div>

                    <div>
                        <label for="status-filter" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">دسته</label>
                        <select id="status-filter" onchange="getProducts(this.value)" class="px-4 py-2 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100">
                            <option value="all">همه</option>
                            @foreach(\Modules\Blog\Models\Category::all() as $category)
                                <option {{$category->id==$cat ? 'selected' :''}} value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
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
                    </div><div >
                        <label  class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">نمایش</label>
                        <div class="flex  flex-1   p-2 gap-3   text-[10px] items-center justify-center">
                            <a href="{{route('admin.products.index',['layout'=>'list', 'category'=>$cat ] )}}">
                                <i class="fas fa-list  text-[25px] text-blue-600 dark:text-slate-300"></i>
                            </a>
                            <a href="{{route('admin.products.index',['layout'=>'icon', 'category'=>$cat ] )}}">
                            <div class="grid grid-cols-2 gap-1" >
                                <i class="fas fa-square   text-blue-600 dark:text-slate-300"></i>
                                <i class="fas fa-square  text-blue-600 dark:text-slate-300"></i>
                                <i class="fas fa-square  text-blue-600 dark:text-slate-300"></i>
                                <i class="fas fa-square  text-blue-600 dark:text-slate-300"></i>
                            </div>
                                        </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class=" mb-4 text-wood-900 dark:text-wood-100 min-h-screen">

              <!-- لایه اصلی -->
                <div class="grid grid-cols-1 md:grid-cols-6  mx-auto h-full gap-2 ">

                    <!-- بخش محصولات -->
                    <main id="product-list-container" class="w-full col-span-6   grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 grid-rows-[max-content] gap-2">

                        <!-- Product 1: Oak Dining Table -->
                        @include('product::admin.product-card',$products)

                    </main>
                </div>


            </div>
            <!-- Pagination -->
            <div class="flex justify-center mt-8">
                <nav class="flex items-center space-x-2 space-x-reverse">
                    {{$products->render()}}

                </nav>
            </div>

        </main>
    </div>
    <script src="/js/modules/sweetalert2.js"></script>
    <script>
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

        function confirmDelete(e) {
            e.preventDefault();
            Swal.fire({
                title: 'حذف محصول',
                text: 'آیا مطمئن هستید که می‌خواهید این دسته محصول را حذف کنید؟',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor:'red',
                confirmButtonText: 'بله، حذف کن',
                cancelButtonText: 'لغو'
            }).then((result) => {
                if (result.isConfirmed) {
                    e.target.submit();
                }
            });
            return false;
        }

        // Configure SweetAlert2 defaults for RTL
        Swal.mixin({
            customClass: {
                popup: 'swal2-rtl'
            }
        });

        function getProducts(v){
            url = "/products/?category="+v;
            location.replace(url);
        }
    </script>

@endsection
