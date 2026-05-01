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
                        <option  {{$category->id==$cat ? 'selected' :''}}  value="{{$category->id}}">{{$category->name}}</option>
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

    <div class="hidden md:block bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden"><!-- Table Header -->
        <div class="bg-wood-100 dark:bg-wood-700 px-6 py-4 border-b border-wood-200 dark:border-wood-600">
            <div class="grid grid-cols-12 gap-4 items-center font-bold text-sm text-wood-700 dark:text-wood-300">
                <div class="col-span-1">
                    تصویر
                </div>
                <div class="col-span-2">
                    نام محصول
                </div>
                <div class="col-span-1">
                    کد
                </div>
                <div class="col-span-1">
                    قیمت
                </div>
                <div class="col-span-2">
                    توضیحات
                </div>
                <div class="col-span-2">
                    کلمات کلیدی
                </div>
                <div class="col-span-1">
                    موجودی
                </div>
                <div class="col-span-1">
                    وضعیت
                </div>
            </div>
        </div>
        <!-- Product Rows -->
        <div id="productList"><!-- Product 1 -->
            @foreach($products as $product)
                <div class="product-row px-6 py-4 border-b border-wood-200 dark:border-wood-700" data-status="active">
                    <div class="grid grid-cols-12 gap-4 items-center"><!-- Image -->
                        <div class="col-span-1"><img src="{{asset(str_replace(['small','500'],['thumb','100'],$product->main_image))}}"  class="w-12 h-12 object-cover rounded-lg shadow-sm" >
                        </div><!-- Name -->
                        <div class="col-span-2">
                            <h3 class="font-bold text-wood-800 dark:text-wood-100 text-sm">{{$product->name}}</h3>
                        </div><!-- Product Code -->
                        <div class="col-span-1"><span class="text-xs font-mono bg-wood-100 dark:bg-wood-700 px-2 py-1 rounded text-wood-700 dark:text-wood-300">{{$product->product_code}}</span>
                        </div><!-- Price -->
                        <div class="col-span-1"><span class="font-bold text-amber-600 dark:text-amber-400 text-sm">{{number_format($product->price)}}</span> <span class="text-xs text-wood-600 dark:text-wood-400 block">تومان</span>
                        </div><!-- Description -->
                        <div class="col-span-2">
                            <p class="text-xs text-wood-600 dark:text-wood-400 line-clamp-2">{!! $product->description !!}</p>
                        </div><!-- Keywords -->

                        <div class="col-span-2">
                            <div class="flex flex-wrap gap-1">
                                @foreach(explode(",",$product->keywords) as $keyword)
                                    <span class="text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 px-2 py-0.5 rounded">{{$keyword}}</span>
                                @endforeach
                            </div>
                        </div><!-- Stock -->
                        <div class="col-span-1">
                            <div class="flex items-center">

                                <span class="text-sm font-bold text-wood-700 dark:text-wood-300">{{$product->stock}}</span>
                            </div>
                        </div><!-- Status -->
                        <div class="col-span-1 flex items-center justify-between">
                            @if($product->status == 'active')
                                <span class="text-xs bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 px-2 py-1 rounded font-bold">فعال</span>
                            @else
                                <span class="text-xs bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 px-2 py-1 rounded font-bold">غیر فعال</span>
                            @endif

                        </div>
                        <div class="flex gap-3 justify-center  w-full">
                            <a href="{{route('admin.products.copy',$product->id)}}"  class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 p-1"> <i class="fas fa-copy text-sm"></i> </a>
                            <a href="{{route('admin.products.edit',$product->id)}}"  class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 p-1"> <i class="fas fa-edit text-sm"></i> </a>
                            <form action="{{ route('admin.products.destroy',$product->id) }}" onsubmit="event.preventDefault();confirmDelete(event);" method="post" id="{{'delete-'.$product->id}}">@csrf @method('delete')

                                <button class="text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 p-1"> <i class="fas fa-trash text-sm"></i> </button>
                            </form>
                        </div>
                    </div>
                </div><!-- Product 2 -->
            @endforeach

        </div>
        @if($products->count() <= 0)
            <!-- Empty State (hidden by default) -->
            <div id="emptyState" class="hidden p-12 text-center"><i class="fas fa-search text-5xl text-wood-300 dark:text-wood-600 mb-4"></i>
                <p class="text-wood-600 dark:text-wood-400 font-medium">محصولی یافت نشد</p>
            </div>
        @endif
    </div>

    <!-- Products Grid -->
    <div id="products-grid" class="md:hidden grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
        <!-- Product List -->

        <!-- Product Card 1 -->
        @foreach($products as $product)
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
            <!-- Product Image -->
            <div class="relative h-48 bg-gray-100 dark:bg-slate-700" style="background:url('{{asset($product->main_image)}}');background-size:cover">

                <div class="absolute top-3 right-3">
                       @if($product->stock > 0)
                        <span class="bg-green-100 dark:bg-slate-700 text-green-800 dark:text-slate-300 px-2 py-1 rounded-full text-xs font-medium animate-pulse">
                            موجود
                        </span>
                    @else
                        <span class="bg-red-100 dark:bg-red-700 text-red-800 dark:text-red-300 px-2 py-1 rounded-full text-xs font-medium animate-pulse">
                            نا موجود
                        </span>
                    @endif
                </div>
                <div class="absolute top-3 left-3 flex space-x-2 space-x-reverse">
                    <a href="{{route('admin.products.edit',$product->id)}}" class="p-2 bg-white dark:bg-slate-800 rounded-full shadow-md hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                        <i class="fas fa-edit text-blue-600 dark:text-slate-300 text-sm"></i>
                    </a>
                    <form action="{{ route('admin.products.destroy',$product->id) }}" onsubmit="event.preventDefault();confirmDelete(event);" method="post" id="{{'delete-'.$product->id}}">@csrf @method('delete')

                        <button class="p-2 bg-white dark:bg-slate-800 rounded-full shadow-md hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                        <i class="fas fa-trash text-red-600 dark:text-slate-300 text-sm"></i>
                    </button>
                    </form>
                </div>
            </div>

            <!-- Product Info -->
            <div class="p-6">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-slate-100">{{$product->name}}</h3>
                    <span class="text-lg font-bold text-blue-600 dark:text-slate-300">{{$product->price}} تومان </span>
                </div>

                <p dir="ltr" class="text-gray-600 text-left dark:text-slate-400 text-sm mb-4 line-clamp-2">
                    Code : {{$product->product_code}}
                </p>
                <p class="text-gray-600 dark:text-slate-400 text-sm mb-4 line-clamp-2">
                    {{$product->description}}
                </p>

                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center space-x-2 space-x-reverse">
                        <i class="fas fa-boxes text-gray-400 dark:text-slate-500 text-sm"></i>
                        <span class="text-sm text-gray-600 dark:text-slate-400">موجودی: {{$product->stock}} عدد</span>
                    </div>
                    <div class="flex items-center space-x-2 space-x-reverse">
                        <i class="fas fa-images text-gray-400 dark:text-slate-500 text-sm"></i>
                        <span class="text-sm text-gray-600 dark:text-slate-400">{{$product->images()->count()}} تصویر</span>
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

                        @foreach($product->images as $image)
                        <div class="aspect-square bg-gray-100 dark:bg-slate-700 rounded-lg flex items-center justify-center relative group">
                            <img src="{{asset($image->image)}}" />
                            <button class="absolute top-1 right-1 p-1 bg-red-500 text-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach

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
