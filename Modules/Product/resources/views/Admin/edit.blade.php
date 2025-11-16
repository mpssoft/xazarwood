@extends('layouts.admin.master')

@section('content')

<div class="bg-gray-50 dark:bg-slate-900 text-gray-900 dark:text-slate-100 transition-colors duration-300">

<!-- Header -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
    <header class="bg-white dark:bg-slate-800 shadow-lg border border-gray-200 dark:border-slate-700 rounded-xl">
        <div class="px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Brand & Navigation -->
                <div class="flex items-center space-x-4 space-x-reverse">

                    <div class="w-12 h-12 bg-blue-600 dark:bg-slate-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-plus text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-slate-100">ویرایش محصول </h1>
                        <p class="text-sm text-gray-500 dark:text-slate-400">XazarWood - پنل مدیریت</p>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex items-center space-x-4 space-x-reverse">
                    <button id="back-btn" class="p-2 rounded-lg bg-gray-100 dark:bg-slate-700 hover:bg-gray-200 dark:hover:bg-slate-600 transition-colors">
                           <i class="fas fa-arrow-left text-gray-600 dark:text-slate-300"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    @include('layouts.errors')
    <div id="attributes" data-attributes="{{json_encode(\Modules\Product\Models\Attribute::all()->pluck('name'))}}"></div>
    <form id="product-form" class="space-y-8" action="{{route('admin.products.update',$product->id)}}" method="post">
@csrf
        @method('put')
        <!-- Basic Information -->
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 p-6">
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 bg-blue-100 dark:bg-slate-700 rounded-lg flex items-center justify-center ml-3">
                    <i class="fas fa-info-circle text-blue-600 dark:text-slate-300"></i>
                </div>
                <h2 class="text-xl font-bold text-gray-900 dark:text-slate-100">اطلاعات پایه</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Product Name -->
                <div class="md:col-span-2">
                    <label for="product-name" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                        نام محصول *
                    </label>
                    <input type="text" id="product-name" name="name" required
                           value="{{old('name',$product->name)}}"
                           class="w-full px-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
                           placeholder="نام محصول را وارد کنید...">
                </div>

                <!-- Price -->
                <div>
                    <label for="product-price" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                        قیمت (تومان) *
                    </label>
                    <div class="relative">
                        <input type="text" id="product-price" name="price" required
                               value="{{old('price',$product->price)}}"
                               class="w-full format_number px-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
                               placeholder="0">
                        <span class="absolute left-3 top-3 text-gray-500 dark:text-slate-400">تومان</span>
                    </div>
                </div>

                <!-- Stock -->
                <div>
                    <label for="product-stock" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                        موجودی *
                    </label>
                    <input type="text" id="product-stock" name="stock" required
                           value="{{old('stock',$product->stock)}}"
                           class="w-full px-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
                           placeholder="تعداد موجودی">
                </div>

                <!-- Category -->
                <div>
                    <label for="product-category" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                        دسته‌بندی *
                    </label>
                    <select id="categories" name="categories[]" multiple required
                            class="w-full px-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100">
                        <option value="">انتخاب دسته‌بندی</option>
                        @foreach(\Modules\Blog\Models\Category::all() as $category)
                            <option value="{{$category->id}}" {{in_array($category->id,$product->categories->pluck('id')->toArray())? "selected":""}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Status -->
                <div>
                    <label for="product-status" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                        وضعیت
                    </label>
                    <select id="product-status" name="status"
                            class="w-full px-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100">
                        <option value="active" {{$product->status == "active"? "selected":""}}>فعال</option>
                        <option value="inactive" {{$product->status == "inactive"? "selected":""}}>غیرفعال</option>

                    </select>
                </div>

            </div>
            <div>
                <label for="product-category" class="block text-sm mt-6 font-medium text-gray-700 dark:text-slate-300 mb-2">
                    ویژگی محصول
                </label>
                <div id="attribute_section">
                    @foreach($product->attributes as $attribute)
                        <div class="flex flex-wrap grid md:grid-cols-3 gap-4 mb-4" id="attribute-${id}">

                            <!-- col-5 -->
                            <div class="w-full ">
                                <div class="flex flex-col gap-1">
                                    <label class="text-sm font-medium text-gray-700 dark:text-slate-200">عنوان ویژگی</label>

                                    <select
                                        name="attributes[{{$loop->index}}][name]"
                                        onchange="changeAttributeValues(event, {{$loop->index}});"
                                        id="attribute-name-{{$loop->index}}"
                                        class="w-full px-4 py-2 border border-gray-300 dark:border-slate-600 rounded-lg
                               focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                               bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
                                    >
                                        <option value="">انتخاب کنید</option>
                                        @foreach(\Modules\Product\Models\Attribute::all() as $attr)
                                            <option value="{{$attr->name}}" {{$attr->name == $attribute->name? 'selected':''}}>{{$attr->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- col-5 -->
                            <div class="w-full ">
                                <div class="flex flex-col gap-1">
                                    <label class="text-sm font-medium text-gray-700 dark:text-slate-200">مقدار ویژگی</label>

                                    <select
                                        name="attributes[{{$loop->index}}][value]"
                                        id="attribute-value-{{$loop->index}}"
                                        class="w-full px-4 py-2 border border-gray-300 dark:border-slate-600 rounded-lg
                               focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                               bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
                                    >
                                        <option value="">انتخاب کنید</option>
                                        @foreach($attribute->values as $value)
                                            <option value="{{$value->value}}" {{ $value->id === $attribute->pivot->value_id ? 'selected':''}}> {{$value->value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- col-2 -->
                            <div class="w-full ">
                                <label class="text-sm font-medium text-gray-700 dark:text-slate-200">اقدامات</label>
                                <div class="mt-1">
                                    <button
                                        type="button"
                                        onclick="document.getElementById('attribute-{{$loop->index}}').remove()"
                                        class="px-3 py-2 text-sm rounded-lg
                               bg-yellow-400 hover:bg-yellow-500
                               text-gray-900 font-medium
                               dark:bg-yellow-500 dark:hover:bg-yellow-600"
                                    >
                                        حذف
                                    </button>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                <button class="p-2 bg-red-600 dark:bg-red-700 hover:bg-red-700 dark:hover:bg-red-600 text-white rounded-lg font-medium transition-colors" type="button" id="add_product_attribute">ویژگی جدید</button>
            </div>

        </div>

        <!-- Description -->
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 p-6">
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 bg-green-100 dark:bg-slate-700 rounded-lg flex items-center justify-center ml-3">
                    <i class="fas fa-align-left text-green-600 dark:text-slate-300"></i>
                </div>
                <h2 class="text-xl font-bold text-gray-900 dark:text-slate-100">توضیحات محصول</h2>
            </div>

            <div class="space-y-6">
                <!-- Short Description -->
                <div>
                    <label for="short-description" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                        توضیحات کوتاه *
                    </label>
                    <textarea id="short-description" name="description" rows="3" required
                              class="w-full px-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
                              placeholder="توضیح کوتاه محصول برای نمایش در لیست محصولات...">{{old('description',$product->description)}}</textarea>
                    <p class="text-sm text-gray-500 dark:text-slate-400 mt-1">حداکثر ۱۵۰ کاراکتر</p>
                </div>

                <!-- Full Description -->

                <!-- TinyMCE Content Editor -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 p-6">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center">
                            <i class="fas fa-edit text-green-600 dark:text-green-400"></i>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white">محتوا </h2>

                    </div>

                    <div class="form-group">
                        <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
                            <i class="fas fa-paragraph ml-2 text-purple-600"></i>
                            شرح کامل  *
                        </label>

                        <!-- TinyMCE Editor -->
                        <textarea id="content" name="content" class="tinymce-editor">{{old('content')}}</textarea>

                        <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                            <i class="fas fa-info-circle ml-1"></i>
                            از ابزارهای ویرایشگر برای قالب‌بندی متن، افزودن تصاویر، جداول و لینک استفاده کنید
                        </div>
                    </div>
                </div>

                @error('content')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

            </div>
        </div>

        <!-- Product Images -->
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 p-6">
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 bg-purple-100 dark:bg-slate-700 rounded-lg flex items-center justify-center ml-3">
                    <i class="fas fa-images text-purple-600 dark:text-slate-300"></i>
                </div>
                <h2 class="text-xl font-bold text-gray-900 dark:text-slate-100">تصاویر محصول</h2>
            </div>

            <!-- Main Image -->
            <div class="mb-8">
                <label class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-3">
                    تصویر اصلی محصول *
                </label>
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <button type="button" id="btn-main-image" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">
                        انتخاب تصویر اصلی
                    </button>
                    <input type="hidden" id="main_image" name="main_image" value="{{$product->main_image}}">
                </div>
                <div id="main-image-preview" class="mt-4 ">
                    <img src="{{asset($product->main_image)}}" class="rounded-lg shadow max-h-40" alt="Main Image">
                </div>
            </div>

            <!-- Gallery Images -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-3">
                    گالری تصاویر
                </label>
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <button type="button" id="btn-gallery-images" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg shadow">
                        انتخاب تصاویر گالری
                    </button>


                    <input type="hidden"  id="gallery_images" name="gallery_images" value="{{ implode(',',$product->images->pluck('image')->toArray())}}">
                </div>

                <!-- Gallery Preview -->
                <div id="gallery-preview" class="mt-6 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 ">

                   @foreach($product->images as $image)
                    <div class="relative">
                        <img src="{{asset($image->image)}}" class="rounded-lg shadow max-h-32 w-full object-cover">
                        <button type="button" class="absolute top-1 right-1 bg-red-600 text-white rounded-full px-2 py-1 text-xs remove-gallery" data-url="{{$image->image}}">×</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

      {{--  <!-- Product Specifications -->
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 p-6">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-orange-100 dark:bg-slate-700 rounded-lg flex items-center justify-center ml-3">
                        <i class="fas fa-cogs text-orange-600 dark:text-slate-300"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 dark:text-slate-100">مشخصات فنی</h2>
                </div>
                <button type="button" id="add-spec-btn" class="bg-blue-600 dark:bg-slate-600 hover:bg-blue-700 dark:hover:bg-slate-500 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                    <i class="fas fa-plus ml-2"></i>افزودن مشخصه
                </button>
            </div>

            <div id="specifications-container" class="space-y-4">
                <!-- Default specifications -->
                <div class="spec-row grid grid-cols-1 md:grid-cols-2 gap-4 p-4 bg-gray-50 dark:bg-slate-700 rounded-lg">
                    <div>
                        <input type="text" name="spec_name[]" placeholder="نام مشخصه (مثل: جنس)"
                               class="w-full px-3 py-2 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-800 text-gray-900 dark:text-slate-100">
                    </div>
                    <div class="flex space-x-2 space-x-reverse">
                        <input type="text" name="spec_value[]" placeholder="مقدار (مثل: چوب بلوط)"
                               class="flex-1 px-3 py-2 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-800 text-gray-900 dark:text-slate-100">
                        <button type="button" class="remove-spec-btn p-2 text-red-600 dark:text-red-400 hover:bg-red-100 dark:hover:bg-red-900 rounded-lg transition-colors">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
--}}
        <!-- SEO & Tags -->
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 p-6">
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 bg-indigo-100 dark:bg-slate-700 rounded-lg flex items-center justify-center ml-3">
                    <i class="fas fa-tags text-indigo-600 dark:text-slate-300"></i>
                </div>
                <h2 class="text-xl font-bold text-gray-900 dark:text-slate-100">برچسب‌ها و SEO</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Tags -->
                <div>
                    <label for="product-tags" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                        برچسب‌ها
                    </label>
                    <input type="text" id="product-tags" name="keywords"
                           value="{{old('keywords',$product->keywords)}}"
                           class="w-full px-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
                           placeholder="چوب، دست‌ساز، مدرن (با کاما جدا کنید)">
                    <p class="text-sm text-gray-500 dark:text-slate-400 mt-1">برچسب‌ها را با کاما از هم جدا کنید</p>
                </div>

             {{--   <!-- SKU -->
                <div>
                    <label for="product-sku" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                        کد محصول (SKU)
                    </label>
                    <input type="text" id="product-sku" name="sku"
                           class="w-full px-4 py-3 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
                           placeholder="XW-001">
                </div>--}}
            </div>
        </div>

        <!-- Form Actions -->
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-700 p-6">
            <div class="flex flex-col sm:flex-row justify-end space-y-3 sm:space-y-0 sm:space-x-4 sm:space-x-reverse">
                <a href="{{route('admin.products.index')}}" type="button" id="cancel-btn" class="px-6 py-3 text-gray-700 dark:text-slate-300 bg-gray-100 dark:bg-slate-700 hover:bg-gray-200 dark:hover:bg-slate-600 rounded-lg font-medium transition-colors">
                    <i class="fas fa-times ml-2"></i>انصراف
                </a>

                <button type="submit" class="px-6 py-3 bg-green-600 dark:bg-green-700 hover:bg-green-700 dark:hover:bg-green-600 text-white rounded-lg font-medium transition-colors">
                    <i class="fas fa-check ml-2"></i>ثبت تغییرات محصول
                </button>
            </div>
        </div>

    </form>

</main>

<!-- Success Modal -->
<div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
    <div class="bg-white dark:bg-slate-800 rounded-xl shadow-xl max-w-md w-full p-6 text-center">
        <div class="w-16 h-16 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-check text-2xl text-green-600 dark:text-green-400"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-900 dark:text-slate-100 mb-2">محصول با موفقیت ایجاد شد!</h3>
        <p class="text-gray-600 dark:text-slate-400 mb-6">محصول جدید به فهرست محصولات اضافه شد.</p>
        <div class="flex space-x-3 space-x-reverse">
            <button id="view-product-btn" class="flex-1 bg-blue-600 dark:bg-slate-600 hover:bg-blue-700 dark:hover:bg-slate-500 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                مشاهده محصول
            </button>
            <button id="add-another-btn" class="flex-1 bg-gray-600 dark:bg-slate-700 hover:bg-gray-700 dark:hover:bg-slate-600 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                افزودن محصول جدید
            </button>
        </div>
    </div>
</div>
</div>


@endsection
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/{{env('TINYMC_API_KEY')}}/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        // Initialize TinyMCE with Laravel File Manager
        tinymce.init({
            selector: '.tinymce-editor',
            height: 400,
            language: 'fa',
            directionality: 'rtl',
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount', 'emoticons'
            ],
            toolbar: 'undo redo | blocks | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | link image media | table | emoticons | code fullscreen preview',
            content_style: 'body { font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; font-size: 14px; direction: rtl; text-align: right; }',

            // Laravel File Manager Integration
            file_picker_callback (callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
                let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

                tinymce.activeEditor.windowManager.openUrl({
                    url : '/file-manager/tinymce5',
                    title : 'Laravel File manager',
                    width : x * 0.8,
                    height : y * 0.8,
                    onMessage: (api, message) => {
                        callback(message.content, { text: message.text })
                    }
                })
            },

            // Additional settings
            relative_urls: false,
            remove_script_host: false,
            convert_urls: true,
            branding: false,
            menubar: false,
            statusbar: true,
            resize: true,

            // Image settings
            image_advtab: true,
            image_caption: true,
            image_title: true,

            // Table settings
            table_default_attributes: {
                'class': 'table table-bordered'
            },
            table_default_styles: {
                'border-collapse': 'collapse',
                'width': '100%'
            },

            // Setup callback
            setup: function(editor) {
                editor.on('change', function() {
                    editor.save();
                });
            }
        });
    </script>
    <script>
        // Image Upload Handling
        function setupImageUpload(uploadElement, inputElement, previewElement, isMultiple = false) {
            uploadElement.addEventListener('click', () => {
                inputElement.click();
            });

            uploadElement.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadElement.classList.add('border-blue-500', 'bg-blue-50', 'dark:bg-slate-700');
            });

            uploadElement.addEventListener('dragleave', () => {
                uploadElement.classList.remove('border-blue-500', 'bg-blue-50', 'dark:bg-slate-700');
            });

            uploadElement.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadElement.classList.remove('border-blue-500', 'bg-blue-50', 'dark:bg-slate-700');

                const files = e.dataTransfer.files;
                handleImageFiles(files, previewElement, isMultiple);
            });

            inputElement.addEventListener('change', (e) => {
                handleImageFiles(e.target.files, previewElement, isMultiple);
            });
        }

        function handleImageFiles(files, previewElement, isMultiple) {
            if (!isMultiple) {
                // Handle single main image
                const file = files[0];
                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        previewElement.innerHTML = `
                            <div class="relative inline-block">
                                <img src="${e.target.result}" alt="Main Image" class="w-full h-48 object-cover rounded-lg">
                                <button type="button" class="absolute top-2 right-2 p-2 bg-red-500 text-white rounded-full hover:bg-red-600 transition-colors" onclick="removeMainImage()">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        `;
                        previewElement.classList.remove('hidden');
                        document.getElementById('main-image-placeholder').classList.add('hidden');
                    };
                    reader.readAsDataURL(file);
                }
            } else {
                // Handle gallery images
                previewElement.classList.remove('hidden');

                Array.from(files).forEach((file, index) => {
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            const imageDiv = document.createElement('div');
                            imageDiv.className = 'relative aspect-square bg-gray-100 dark:bg-slate-700 rounded-lg overflow-hidden group';
                            imageDiv.innerHTML = `
                                <img src="${e.target.result}" alt="Gallery ${index + 1}" class="w-full h-full object-cover">
                                <button type="button" class="absolute top-2 right-2 p-1 bg-red-500 text-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity" onclick="this.parentElement.remove()">
                                    <i class="fas fa-times text-xs"></i>
                                </button>
                            `;
                            previewElement.appendChild(imageDiv);
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
        }

        function removeMainImage() {
            document.getElementById('main-image-preview').classList.add('hidden');
            document.getElementById('main-image-preview').innerHTML = '';
            document.getElementById('main-image-placeholder').classList.remove('hidden');
            document.getElementById('main-image-input').value = '';
        }

        // Setup image uploads
        setupImageUpload(
            document.getElementById('main-image-upload'),
            document.getElementById('main-image-input'),
            document.getElementById('main-image-preview'),
            false
        );

        setupImageUpload(
            document.getElementById('gallery-upload'),
            document.getElementById('gallery-input'),
            document.getElementById('gallery-preview'),
            true
        );

        // Specifications Management
        document.getElementById('add-spec-btn').addEventListener('click', () => {
            const container = document.getElementById('specifications-container');
            const newSpec = document.createElement('div');
            newSpec.className = 'spec-row grid grid-cols-1 md:grid-cols-2 gap-4 p-4 bg-gray-50 dark:bg-slate-700 rounded-lg';
            newSpec.innerHTML = `
                <div>
                    <input type="text" name="spec_name[]" placeholder="نام مشخصه (مثل: جنس)"
                           class="w-full px-3 py-2 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-800 text-gray-900 dark:text-slate-100">
                </div>
                <div class="flex space-x-2 space-x-reverse">
                    <input type="text" name="spec_value[]" placeholder="مقدار (مثل: چوب بلوط)"
                           class="flex-1 px-3 py-2 border border-gray-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-slate-800 text-gray-900 dark:text-slate-100">
                    <button type="button" class="remove-spec-btn p-2 text-red-600 dark:text-red-400 hover:bg-red-100 dark:hover:bg-red-900 rounded-lg transition-colors">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            `;
            container.appendChild(newSpec);
        });

        // Remove specification
        document.addEventListener('click', (e) => {
            if (e.target.closest('.remove-spec-btn')) {
                e.target.closest('.spec-row').remove();
            }
        });

        // Form Submission
        document.getElementById('product-form').addEventListener('submit', (e) => {
            e.preventDefault();

            // Collect form data
            const formData = new FormData(e.target);
            const productData = {
                name: formData.get('name'),
                price: formData.get('price'),
                stock: formData.get('stock'),
                category: formData.get('category'),
                status: formData.get('status'),
                short_description: formData.get('short_description'),
                full_description: formData.get('full_description'),
                tags: formData.get('tags'),
                sku: formData.get('sku'),
                specifications: []
            };

            // Collect specifications
            const specNames = formData.getAll('spec_name[]');
            const specValues = formData.getAll('spec_value[]');
            for (let i = 0; i < specNames.length; i++) {
                if (specNames[i] && specValues[i]) {
                    productData.specifications.push({
                        name: specNames[i],
                        value: specValues[i]
                    });
                }
            }

            // Here you would send the data to your backend
            console.log('Product data:', productData);

            // Show success modal
            document.getElementById('success-modal').classList.remove('hidden');
        });

        // Success Modal Actions
        document.getElementById('view-product-btn').addEventListener('click', () => {
            console.log('Navigate to product view');
            // window.location.href = '/admin/products/1';
        });

        document.getElementById('add-another-btn').addEventListener('click', () => {
            document.getElementById('success-modal').classList.add('hidden');
            document.getElementById('product-form').reset();
            document.getElementById('main-image-preview').classList.add('hidden');
            document.getElementById('main-image-preview').innerHTML = '';
            document.getElementById('main-image-placeholder').classList.remove('hidden');
            document.getElementById('gallery-preview').classList.add('hidden');
            document.getElementById('gallery-preview').innerHTML = '';
        });

        // Other Actions
        document.getElementById('cancel-btn').addEventListener('click', () => {
            if (confirm('آیا مطمئن هستید؟ تغییرات ذخیره نشده از بین خواهد رفت.')) {
                console.log('Navigate back to products list');
                // window.location.href = '/admin/products';
            }
        });

        document.getElementById('save-draft-btn').addEventListener('click', () => {
            console.log('Save as draft');
            showNotification('پیش‌نویس ذخیره شد', 'success');
        });

        document.getElementById('preview-btn').addEventListener('click', () => {
            console.log('Show preview');
            showNotification('پیش‌نمایش در حال توسعه است', 'info');
        });

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

        // Auto-save functionality (optional)
        let autoSaveTimeout;
        const formInputs = document.querySelectorAll('input, textarea, select');

        formInputs.forEach(input => {
            input.addEventListener('input', () => {
                clearTimeout(autoSaveTimeout);
                autoSaveTimeout = setTimeout(() => {
                    // Auto-save logic here
                    console.log('Auto-saving...');
                }, 2000);
            });
        });
    </script>
    <script>
        $("#gallery_images").val(JSON.stringify($("#gallery_images").val().split(',')))
        function openFileManager(callback, type = 'image') {
            window.open('/file-manager/fm-button?type=' + type, 'fm', 'width=1000,height=600');
            window.fmSetLink = callback;
        }

        // ---- Main image ----
        $('#btn-main-image').on('click', function() {
            openFileManager(function(url) {
                $('#main_image').val(url);
                $('#main-image-preview img').attr('src', url);
                $('#main-image-preview').removeClass('hidden');
            });
        });

        // --- Utility: read gallery value as array (supports JSON or CSV) ---
        function getGalleryArray() {
            const raw = ($('#gallery_images').val() || '').trim();
            if (!raw) return [];

            // Try JSON first
            try {
                const parsed = JSON.parse(raw);
                if (Array.isArray(parsed)) return parsed.map(s => String(s).trim()).filter(Boolean);
            } catch (e) {
                // not JSON -> fall through to CSV
            }

            // CSV fallback
            return raw.split(',')
                .map(s => s.trim())
                .filter(Boolean);
        }

        // --- Utility: set gallery input (we store as JSON) ---
        function setGalleryArray(arr) {
            const clean = arr.map(s => String(s).trim()).filter(Boolean);
            $('#gallery_images').val(JSON.stringify(clean));
        }

        // --- Utility: redraw preview from array ---
        function renderGalleryPreview(arr) {
            const gallery = $('#gallery-preview');
            gallery.empty();

            if (!arr.length) {
                gallery.addClass('hidden');
                return;
            }

            gallery.removeClass('hidden');
            arr.forEach(url => {
                gallery.append(`
            <div class="relative inline-block mr-2 mb-2">
                <img src="${url}" class="rounded-lg shadow max-h-32 w-40 object-cover">
                <button type="button" class="absolute top-1 right-1 bg-red-600 text-white rounded-full px-2 py-1 text-xs remove-gallery" data-url="${url}">&times;</button>
            </div>
        `);
            });
        }

        // --- When user chooses images (merge new ones) ---
        $('#btn-gallery-images').on('click', function() {
            openFileManager(function(urls) {
                // normalize to array
                if (!Array.isArray(urls)) urls = [urls];

                // existing as array (supports previous CSV or JSON)
                const existing = getGalleryArray();

                // merge and dedupe
                const merged = [...new Set([...existing, ...urls.map(s => String(s).trim()).filter(Boolean)])];

                // save as JSON and update preview
                setGalleryArray(merged);
                renderGalleryPreview(merged);

                console.log('Gallery updated:', merged);
            }, 'image');
        });

        // --- Remove handler (works with JSON stored by setGalleryArray) ---
        $(document).on('click', '.remove-gallery', function() {
            const url = $(this).data('url');
            let arr = getGalleryArray();

            // remove the clicked url
            arr = arr.filter(u => u !== url);

            // save and update preview
            setGalleryArray(arr);
            renderGalleryPreview(arr);

            console.log('Removed', url, 'remaining:', arr);
        });


        function removeCamas() {
            $('.format_number').each(function (index, element) {
                $(this).val($(this).val().replace(/,/g, "")); // Remove existing commas
            });
        }


        $('#categories').select2({

            'placeholder' : 'دسترسی مورد نظر را انتخاب کنید'
        });


        let changeAttributeValues = (event , id) => {
            let valueBox = $(`select[name='attributes[${id}][value]']`);

            $.ajaxSetup({
                headers : {
                    'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type' : 'application/json'
                }
            })

            $.ajax({
                type : 'POST',
                url : '/admin/attribute/values',
                data : JSON.stringify({
                    name : event.target.value
                }),
                success : function(data) {
                    valueBox.html(`
                            <option selected>انتخاب کنید</option>
                            ${
                        data.data.map(function (item) {
                            return `<option value="${item}">${item}</option>`
                        })
                    }
                        `);

                    $('.attribute-select').select2({ tags : true });
                }
            });
        }

        let createNewAttr = ({ attributes , id }) => {

            return `
        <div class="flex flex-wrap grid md:grid-cols-3 gap-4 mb-4" id="attribute-${id}">

            <!-- col-5 -->
            <div class="w-full ">
            <div class="flex flex-col gap-1">
            <label class="text-sm font-medium text-gray-700 dark:text-slate-200">عنوان ویژگی</label>

            <select
            name="attributes[${id}][name]"
            onchange="changeAttributeValues(event, ${id});"
            id="attribute-name-${id}"
            class="w-full px-4 py-2 border border-gray-300 dark:border-slate-600 rounded-lg
                               focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                               bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
            >
            <option value="">انتخاب کنید</option>
            ${
            attributes.map(item =>
            `<option value="${item}">${item}</option>`
            ).join("")
            }
            </select>
            </div>
            </div>

                <!-- col-5 -->
            <div class="w-full ">
            <div class="flex flex-col gap-1">
            <label class="text-sm font-medium text-gray-700 dark:text-slate-200">مقدار ویژگی</label>

            <select
            name="attributes[${id}][value]"
            id="attribute-value-${id}"
            class="w-full px-4 py-2 border border-gray-300 dark:border-slate-600 rounded-lg
                               focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                               bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100"
            >
            <option value="">انتخاب کنید</option>
            </select>
            </div>
            </div>

                <!-- col-2 -->
            <div class="w-full ">
            <label class="text-sm font-medium text-gray-700 dark:text-slate-200">اقدامات</label>
            <div class="mt-1">
            <button
            type="button"
            onclick="document.getElementById('attribute-${id}').remove()"
            class="px-3 py-2 text-sm rounded-lg
                               bg-yellow-400 hover:bg-yellow-500
                               text-gray-900 font-medium
                               dark:bg-yellow-500 dark:hover:bg-yellow-600"
            >
            حذف
            </button>
            </div>
            </div>

            </div>
            `
}


        $(document).on('click','#add_product_attribute',(function() {
            let attributesSection = $('#attribute_section');
            let id = attributesSection.children().length;
            let attributes = $("#attributes").data('attributes')
            attributesSection.append(
                createNewAttr({
                    attributes,
                    id
                })
            );

            $(`#attribute-name-${id}`).select2({ tags: true });
            $(`#attribute-value-${id}`).select2({ tags: true });


        }));

    </script>
@endpush
