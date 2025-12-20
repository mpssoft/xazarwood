
@extends('layouts.admin.master')

@section('content')

<body class="bg-gray-50 dark:bg-slate-900 text-gray-900 dark:text-slate-100 min-h-full transition-colors duration-300">

<!-- Header -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
    <header class="bg-white dark:bg-slate-800 shadow-sm border border-gray-200 dark:border-slate-700 rounded-xl">
        <div class="px-6 py-4">
            <!-- Breadcrumb -->
            <nav class="flex items-center space-x-2 space-x-reverse text-sm text-gray-500 dark:text-slate-400 mb-4">
                <a href="#" class="hover:text-gray-700 dark:hover:text-slate-300">پنل مدیریت</a>
                <i class="fas fa-chevron-left text-xs"></i>
                <span class="text-gray-900 dark:text-slate-100">دسته‌بندی‌ها</span>
            </nav>

            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                <!-- Brand & Navigation -->
                <div class="flex items-center space-x-4 space-x-reverse mb-4 lg:mb-0">
                    <a href="#" class="p-2 rounded-lg bg-gray-100 dark:bg-slate-700 hover:bg-gray-200 dark:hover:bg-slate-600 transition-colors">
                        <i class="fas fa-arrow-right text-gray-600 dark:text-slate-300"></i>
                    </a>
                    <div class="w-12 h-12 bg-blue-600 dark:bg-slate-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-list text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-slate-100">مدیریت دسته‌بندی‌ها</h1>
                        <p class="text-sm text-gray-500 dark:text-slate-400">XazarWood - پنل مدیریت</p>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex items-center space-x-3 space-x-reverse">

                    <a href="{{route('admin.categories.create')}}" class="bg-blue-600 dark:bg-slate-600 hover:bg-blue-700 dark:hover:bg-slate-500 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                        <i class="fas fa-plus ml-2"></i>افزودن دسته‌بندی
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <!-- Filters & Search -->
    <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 p-6 mb-8">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">

            <!-- Search -->
            <div class="flex-1 max-w-md">
                <div class="relative">
                    <input type="text" id="search-input" placeholder="جستجو در دسته‌بندی‌ها..."
                           class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100 placeholder-gray-500 dark:placeholder-slate-400">
                    <i class="fas fa-search absolute left-3 top-3.5 text-gray-400 dark:text-slate-500"></i>
                </div>
            </div>

            <!-- Bulk Actions -->
            <div class="flex items-center space-x-3 space-x-reverse">
                <select id="bulk-action" class="px-4 py-2 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100">
                    <option value="">عملیات گروهی</option>
                    <option value="delete">حذف انتخاب شده‌ها</option>
                    <option value="activate">فعال کردن</option>
                    <option value="deactivate">غیرفعال کردن</option>
                </select>
                <button id="apply-bulk" class="px-4 py-2 bg-gray-600 dark:bg-slate-600 hover:bg-gray-700 dark:hover:bg-slate-500 text-white rounded-lg font-medium transition-colors">
                    اعمال
                </button>
            </div>
        </div>
    </div>

    <!-- Categories Table -->
    <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 overflow-hidden">

        <!-- Table Header -->
        <div class="px-6 py-4 border-b border-gray-200 dark:border-slate-700">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-slate-100">
                    <i class="fas fa-table text-gray-500 dark:text-slate-400 ml-2"></i>
                    لیست دسته‌بندی‌ها
                </h2>
                <span class="text-sm text-gray-500 dark:text-slate-400">مجموع: ۶ دسته‌بندی</span>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 dark:bg-slate-700">
                <tr>

                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-slate-400 uppercase tracking-wider">
                        نام دسته‌بندی
                    </th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-slate-400 uppercase tracking-wider">
                        نام انگلیسی
                    </th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-slate-400 uppercase tracking-wider">
                        کد دسته بندی
                    </th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-slate-400 uppercase tracking-wider">
                        توضیحات
                    </th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-slate-400 uppercase tracking-wider">
                        عملیات
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white dark:bg-slate-800 divide-y divide-gray-200 dark:divide-slate-700">


                <!-- Sample Category 1 -->
                @foreach($categories as $category)
                <tr class="hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">

                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-100 dark:bg-slate-700 rounded-lg flex items-center justify-center ml-3">
                                <i class="fas fa-couch text-blue-600 dark:text-slate-300"></i>
                            </div>
                            <div>
                                <div class="text-sm font-medium text-gray-900 dark:text-slate-100">{{$category->name}}</div>

                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 dark:text-slate-100 max-w-xs truncate">
                            {{$category->english}}
                        </div>
                    </td>
                     <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 dark:text-slate-100 max-w-xs truncate">
                            {{$category->category_code}}
                        </div>
                    </td>
                     <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 dark:text-slate-100 max-w-xs truncate">
                            {{$category->description}}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex items-center space-x-2 space-x-reverse">
                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="text-blue-600 dark:text-blue-400 hover:text-blue-900 dark:hover:text-blue-300 transition-colors">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.categories.destroy',$category->id) }}" onsubmit="event.preventDefault();confirmDelete(event);" method="post" id="{{'delete-'.$category->id}}">@csrf @method('delete')

                            <button  class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300 transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
                            </form>
                        </div>
                    </td>

                </tr>@endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-white dark:bg-slate-800 px-4 py-3 border-t border-gray-200 dark:border-slate-700 sm:px-6">
            <div class="flex items-center justify-between">
               {{$categories->render()}}
            </div>
        </div>
    </div>

</main>

<!-- Hidden form for delete requests -->
<form id="delete-form" method="POST" style="display: none;">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="DELETE">
</form>
</body>


@endsection
@push('scripts')
    <script src="/js/modules/sweetalert2.js"></script>
    <script>


        // Search functionality
        document.getElementById('search-input').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');

            rows.forEach(row => {
                const categoryName = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const categoryDesc = row.querySelector('td:nth-child(3)').textContent.toLowerCase();

                if (categoryName.includes(searchTerm) || categoryDesc.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        function confirmDelete(e) {
            e.preventDefault();
            Swal.fire({
                title: 'حذف دسته گرافیک',
                text: 'آیا مطمئن هستید که می‌خواهید این دسته گرافیک را حذف کنید؟',
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
    </script>
@endpush
