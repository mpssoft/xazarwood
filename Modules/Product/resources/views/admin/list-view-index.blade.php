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
