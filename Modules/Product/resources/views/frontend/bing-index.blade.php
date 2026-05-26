@extends('layouts.app')

@section('content')

<div class="bg-wood-50 dark:bg-wood-950 text-wood-900 dark:text-wood-100 min-h-screen">

    <section class="max-w-7xl mx-auto px-4 pt-5 mb-2">

        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3 space-x-reverse text-wood-600 dark:text-wood-400 text-sm"><span>{{__('Home')}}</span> <i class="fas fa-chevron-left text-xs"></i><a href="{{route('products-list', isset($products[0]) ?  $products[0]->categories()->first()->name : 'all')}}"> <span class="text-wood-800 dark:text-wood-200">{{ isset($products[0]) ?  __($products[0]->categories()->first()->english) :''}}</span> </a>
            </div>
        </div>

    </section>
    <!-- Divider -->
    <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
<div class="grid md:grid-cols-6 ">
    <div class="col-span-1"></div>
<header class="flex w-full grid-cols-5 col-span-5 mx-auto items-center justify-start p-4   ">

    <div class="flex items-center gap-4">
        <div>
        <label for="sort" class="text-sm">{{__('Sort')}}:</label>
        <select id="sort" class="border pr-10 text-sm  border-wood-300 dark:border-wood-700 rounded px-2  bg-wood-100 dark:bg-wood-950">

            <option value="price-low">{{__('Cheapest')}}</option>
            <option value="price-high">{{__('Most expensive')}}</option>
            <option value="newest" selected>{{__('Newest')}}</option>
        </select>
        </div>
        <div>
        <input type="checkbox" class="stock border  border-wood-300  dark:border-wood-700 rounded p-2  bg-wood-100 dark:bg-wood-950">
        <label for="stock" class="text-sm">{{__('Just existing')}}</label>
        </div>
    </div>
</header>
</div>
    <!-- Divider -->
    <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
<!-- لایه اصلی -->
<div class="grid grid-cols-1 md:grid-cols-6 max-w-7xl mx-auto h-full gap-2">
    <!-- بخش فیلترها -->
    <aside class="w-full col-span-1  border-l border-wood-200 dark:border-wood-800 p-4 hidden md:block sticky top-20 h-screen overflow-y-auto">

        <h2 class="text-sm text-center mb-4">دسته‌بندی</h2>
        <!-- Divider -->
        <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
        <!-- دسته‌بندی -->
        <div class="mb-6 mt-3">

            <ul class="space-y-1">
             @foreach(\Modules\Blog\Models\Category::all() as $category)
                <li><label class="text-xs"><input  type="checkbox" value="{{$category->id}}" class=" cat mr-2 ml-2 border  border-wood-300  dark:border-wood-700 rounded p-2  bg-wood-100 dark:bg-wood-950">{{__($category->english)}}</label></li>
                @endforeach
            </ul>
        </div>

    </aside>

    <!-- بخش محصولات -->
    <main id="product-list-container" class="col-span-5  p-2 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 grid-rows-[max-content] gap-2">

            <!-- Product 1: Oak Dining Table -->
          @include('product::frontend.product-card',$products)

    </main>
</div>


</div>
@endsection
@push('scripts')
    <script>
        let cat = [];
        $(document).ready(function(){
            $('#sort,.cat,.stock').on('change',function(){
                let val = $('#sort').val();
                let cats = $('.cat:checked')
                    .map(function () {
                        return this.value;
                    }).get();
                let stock = $('.stock').is(":checked");
                $.ajax({
                    url:'/sort-list/all',
                    type:'get',
                    headers: {'X-CSRF-TOKEN': "{{csrf_token()}}" },
                    data:{sort:val,cat:cats,stock:stock},
                    success:function(res){

                        $("#product-list-container").html(res);
                        document.querySelectorAll('[data-expire]').forEach(function (el) {
                            let expireDate = new Date(el.getAttribute('data-expire')).getTime();

                            let timer = setInterval(function () {
                                let now = new Date().getTime();
                                let distance = expireDate - now;

                                if (distance < 0) {
                                    clearInterval(timer);
                                    el.innerHTML = "Expired";
                                    el.classList.remove("text-red-600");
                                    el.classList.add("text-gray-500");
                                    return;
                                }

                                let days    = Math.floor(distance / (1000 * 60 * 60 * 24));
                                let hours   = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                // Pad single digits with leading zeros
                                hours   = hours.toString().padStart(2, '0');
                                minutes = minutes.toString().padStart(2, '0');
                                seconds = seconds.toString().padStart(2, '0');

                                el.innerHTML = ` ${days}d ${hours}h ${minutes}m ${seconds}s`;
                                el.innerHTML = `
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-slate-200/30 to-slate-300/10 overflow-hidden w-[40px] dark:from-slate-400/30 dark:to-slate-500/10 backdrop-blur-sm border border-slate-300/20 dark:border-slate-400/20 px-3 py-2 rounded-lg  font-bold mb-1 shadow-lg">${seconds.toString().padStart(2, '0')}</div>
                        <div class="text-xs opacity-80">ثانیه</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-slate-200/30 to-slate-300/10 dark:from-slate-400/30 dark:to-slate-500/10 backdrop-blur-sm border border-slate-300/20 dark:border-slate-400/20 px-3 py-2 rounded-lg  font-bold mb-1 shadow-lg">${minutes.toString().padStart(2, '0')}</div>
                        <div class="text-xs opacity-80">دقیقه</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-slate-200/30 to-slate-300/10 dark:from-slate-400/30 dark:to-slate-500/10 backdrop-blur-sm border border-slate-300/20 dark:border-slate-400/20 px-3 py-2 rounded-lg  font-bold mb-1 shadow-lg">${hours.toString().padStart(2, '0')}</div>
                        <div class="text-xs opacity-80">ساعت</div>
                    </div>

                   <div class="text-center">
                        <div class="bg-gradient-to-br from-slate-200/30 to-slate-300/10 dark:from-slate-400/30 dark:to-slate-500/10 backdrop-blur-sm border border-slate-300/20 dark:border-slate-400/20 px-3 py-2 rounded-lg  font-bold mb-1 shadow-lg">${days.toString().padStart(2, '0')}</div>
                        <div class="text-xs opacity-80">روز</div>
                    </div>
                `;
                            }, 1000);
                        });
                    }
                });
            });
        });

    </script>
@endpush
