
@extends('layouts.admin.master')

@section('content')


<div class="bg-gray-50 dark:bg-slate-900 text-gray-900 dark:text-slate-100 min-h-full transition-colors duration-300">

<!-- Header -->
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
    <header class="bg-white dark:bg-slate-800 shadow-sm border border-gray-200 dark:border-slate-700 rounded-xl">
        <div class="px-6 py-4">
            <!-- Breadcrumb -->
            <nav class="flex items-center space-x-2 space-x-reverse text-sm text-gray-500 dark:text-slate-400 mb-4">
                <a href="#" class="hover:text-gray-700 dark:hover:text-slate-300">پنل مدیریت</a>
                <i class="fas fa-chevron-left text-xs"></i>
                <a href="#" class="hover:text-gray-700 dark:hover:text-slate-300">دسته‌بندی‌ها</a>
                <i class="fas fa-chevron-left text-xs"></i>
                <span class="text-gray-900 dark:text-slate-100">ویرایش دسته</span>
            </nav>

            <div class="flex items-center justify-between">
                <!-- Brand & Navigation -->
                <div class="flex items-center space-x-4 space-x-reverse">
                    <a href="#" class="p-2 rounded-lg bg-gray-100 dark:bg-slate-700 hover:bg-gray-200 dark:hover:bg-slate-600 transition-colors">
                        <i class="fas fa-arrow-right text-gray-600 dark:text-slate-300"></i>
                    </a>
                    <div class="w-12 h-12 bg-green-600 dark:bg-slate-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-folder-plus text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-slate-100">ویرایش دسته‌بندی </h1>
                        <p class="text-sm text-gray-500 dark:text-slate-400">XazarWood - پنل مدیریت</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <!-- Form Card -->
    <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 overflow-hidden">

        <!-- Form Header -->
        <div class="bg-gradient-to-l from-green-50 to-blue-50 dark:from-slate-700 dark:to-slate-600 px-6 py-4 border-b border-gray-200 dark:border-slate-700">
            <div class="flex items-center">
                <div class="w-10 h-10 bg-green-100 dark:bg-slate-700 rounded-lg flex items-center justify-center ml-3">
                    <i class="fas fa-tags text-green-600 dark:text-slate-300"></i>
                </div>
                <div>
                    <h2 class="text-lg font-bold text-gray-900 dark:text-slate-100">اطلاعات دسته‌بندی</h2>
                    <p class="text-sm text-gray-600 dark:text-slate-400">نام و توضیحات دسته‌بندی را وارد کنید</p>
                </div>
            </div>
        </div>

        <!-- Form Body -->
        <form method="POST" action="{{route('admin.categories.update',$category->id)}}" class="p-6">
        @csrf
            @method('put')
            <!-- Category Name -->
            <div class="mb-6">
                <label for="category-name" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-3">
                    <i class="fas fa-tag text-gray-400 dark:text-slate-500 ml-2"></i>
                    نام دسته‌بندی *
                </label>
                <input
                    value="{{old('name',$category->name)}}"
                    type="text"
                    id="category-name"
                    name="name"
                    required
                    class="w-full px-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100 placeholder-gray-500 dark:placeholder-slate-400 transition-colors"
                    placeholder="مثال: مبلمان، آشپزخانه، تزئینی"
                    maxlength="100">
                <p class="text-xs text-gray-500 dark:text-slate-400 mt-2">
                    <i class="fas fa-info-circle ml-1"></i>
                    حداکثر ۱۰۰ کاراکتر
                </p>
            </div>
  <!-- Category English Name -->
            <div class="mb-6">
                <label for="english" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-3">
                    <i class="fas fa-tag text-gray-400 dark:text-slate-500 ml-2"></i>
                    نام انگلیسی دسته‌بندی *
                </label>
                <input
                    value="{{old('name',$category->english)}}"
                    type="text"
                    id="english"
                    name="english"
                    required
                    class="w-full px-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100 placeholder-gray-500 dark:placeholder-slate-400 transition-colors"
                    placeholder="Coffee Table"
                    maxlength="100">
                <p class="text-xs text-gray-500 dark:text-slate-400 mt-2">
                    <i class="fas fa-info-circle ml-1"></i>
                    حداکثر ۱۰۰ کاراکتر
                </p>
            </div>
  <!-- Category Code -->
            <div class="mb-6">
                <label for="category-code" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-3">
                    <i class="fas fa-tag text-gray-400 dark:text-slate-500 ml-2"></i>
                    کد دسته‌بندی *
                </label>
                <input
                    value="{{old('name',$category->category_code)}}"
                    type="text"
                    id="category-code"
                    name="category_code"
                    required
                    class="w-full px-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100 placeholder-gray-500 dark:placeholder-slate-400 transition-colors"
                    placeholder="Coffee Table: CT"
                    maxlength="100">
                <p class="text-xs text-gray-500 dark:text-slate-400 mt-2">
                    <i class="fas fa-info-circle ml-1"></i>
                    حداکثر ۱۰۰ کاراکتر
                </p>
            </div>

            <!-- Category Description -->
            <div class="mb-8">
                <label for="category-description" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-3">
                    <i class="fas fa-align-left text-gray-400 dark:text-slate-500 ml-2"></i>
                    توضیحات دسته‌بندی
                </label>
                <textarea
                    id="category-description"
                    name="description"
                    rows="5"
                    class="w-full px-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100 placeholder-gray-500 dark:placeholder-slate-400 resize-none transition-colors"
                    placeholder="توضیح کوتاهی درباره این دسته‌بندی و محصولاتی که شامل می‌شود..."
                    maxlength="500">{{old('description',$category->description)}}</textarea>
                <p class="text-xs text-gray-500 dark:text-slate-400 mt-2">
                    <i class="fas fa-info-circle ml-1"></i>
                    حداکثر ۵۰۰ کاراکتر - این فیلد اختیاری است
                </p>
            </div>

            <!-- Form Actions -->
            <div class="flex flex-col sm:flex-row justify-end space-y-3 sm:space-y-0 sm:space-x-4 sm:space-x-reverse pt-6 border-t border-gray-200 dark:border-slate-700">
                <a href="{{route('admin.categories.index')}}" class="inline-flex items-center justify-center px-6 py-3 text-gray-700 dark:text-slate-300 bg-gray-100 dark:bg-slate-700 hover:bg-gray-200 dark:hover:bg-slate-600 rounded-lg font-medium transition-colors">
                    <i class="fas fa-times ml-2"></i>
                    انصراف
                </a>
                <button type="submit" class="inline-flex items-center justify-center px-6 py-3 bg-green-600 dark:bg-green-700 hover:bg-green-700 dark:hover:bg-green-600 text-white rounded-lg font-medium transition-colors shadow-sm">
                    <i class="fas fa-check ml-2"></i>
                    ثبت تغییرات
                </button>
            </div>

        </form>
    </div>


</main>


</div>


@endsection
