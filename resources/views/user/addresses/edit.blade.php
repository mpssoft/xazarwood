@extends('layouts.user.master')

@section('content')

<div class="h-full w-full overflow-auto bg-gradient-to-br from-wood-50 via-wood-100 to-wood-200 dark:from-wood-950 dark:via-wood-900 dark:to-wood-950"><!-- Main Container -->
<main class="min-h-full p-4 >
    <div class="max-w-6xl mx-auto"><!-- Header -->
        <header class="mb-4">
            <div class="bg-wood-100 dark:bg-wood-800 rounded-2xl shadow-lg p-6 border-2 border-wood-300 dark:border-wood-700">
                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-4 flex-1">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-wood-500 to-wood-700 dark:from-wood-600 dark:to-wood-800 flex items-center justify-center shadow-md">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-wood-900 dark:text-wood-50">ویرایش آدرس </h1>
                            <p class="text-wood-700 dark:text-wood-300 mt-1">اطلاعات آدرس را وارد کنید</p>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- Form Card -->
        <div class="bg-wood-100 dark:bg-wood-800 rounded-2xl shadow-lg border-2 border-wood-300 dark:border-wood-700"><!-- Form Header -->
            <div class="bg-gradient-to-r from-wood-500 to-wood-700 dark:from-wood-600 dark:to-wood-800 text-white p-6 rounded-t-2xl">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-white bg-opacity-20 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold">اطلاعات آدرس</h2>
                        <p class="text-wood-100 text-sm mt-1">لطفاً تمام فیلدها را با دقت تکمیل کنید</p>
                    </div>
                </div>
            </div><!-- Form Content -->
            <form class="p-6 space-y-6" action="{{route('user.addresses.update',$address->id)}}" method="post">
                @csrf
                @method('put')
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="province_id" class="block text-sm font-semibold text-wood-900 dark:text-wood-100 mb-2"> <span class="flex items-center gap-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
          </svg> استان </span> </label>
                        <select id="province" name="province_id" required class="w-full px-4 py-3 rounded-xl border-2 border-wood-300 dark:border-wood-600 bg-wood-50 dark:bg-wood-900 text-wood-900 dark:text-wood-100 focus:border-wood-500 dark:focus:border-wood-500 focus:outline-none transition-colors placeholder-wood-400 dark:placeholder-wood-500" >
                            @foreach(\App\Models\ProvinceCity::where('parent',0)->get() as $item)
                                <option value="{{$item->id}}" {{$item->id==$address->province_id? 'selected':''}}>{{$item->title}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div>
                        <label for="city" class="block text-sm font-semibold text-wood-900 dark:text-wood-100 mb-2"> <span class="flex items-center gap-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
          </svg> شهر </span> </label>
                        <select id="city" name="city_id" required class="w-full px-4 py-3 rounded-xl border-2 border-wood-300 dark:border-wood-600 bg-wood-50 dark:bg-wood-900 text-wood-900 dark:text-wood-100 focus:border-wood-500 dark:focus:border-wood-500 focus:outline-none transition-colors placeholder-wood-400 dark:placeholder-wood-500" >
                            @foreach(\App\Models\ProvinceCity::where('parent',$address->province_id)->get() as $item)
                                <option value="{{$item->id}}" {{$item->id==$address->city_id? 'selected':''}}>{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>


                </div>

                <!-- Address Field -->
                <div>
                    <label for="address" class="block text-sm font-semibold text-wood-900 dark:text-wood-100 mb-2"> <span class="flex items-center gap-2">
         <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
         </svg> آدرس کامل </span> </label>
                    <textarea id="address" name="address" required rows="4" class="w-full px-4 py-3 rounded-xl border-2 border-wood-300 dark:border-wood-600 bg-wood-50 dark:bg-wood-900 text-wood-900 dark:text-wood-100 focus:border-wood-500 dark:focus:border-wood-500 focus:outline-none transition-colors resize-none placeholder-wood-400 dark:placeholder-wood-500" placeholder="آدرس دقیق شامل خیابان، کوچه، پلاک و واحد">{{$address->address}}</textarea>
                </div>
                <!--   Postal Code -->


                    <div><label for="postal-code" class="block text-sm font-semibold text-wood-900 dark:text-wood-100 mb-2"> <span class="flex items-center gap-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg> کد پستی </span> </label>
                        <input type="text" id="postal-code" value="{{$address->postal_code}}" name="postal_code" required maxlength="10" class="w-full px-4 py-3 rounded-xl border-2 border-wood-300 dark:border-wood-600 bg-wood-50 dark:bg-wood-900 text-wood-900 dark:text-wood-100 focus:border-wood-500 dark:focus:border-wood-500 focus:outline-none transition-colors placeholder-wood-400 dark:placeholder-wood-500" placeholder="۱۲۳۴۵۶۷۸۹۰">
                    </div>

                <!-- Default Address Checkbox -->
                <div class="bg-wood-200 dark:bg-wood-900 rounded-xl border-2 border-wood-300 dark:border-wood-700 p-4">
                    <label for="is-default" class="flex items-start gap-3 cursor-pointer group">
                        <input type="checkbox" id="is-default" {{$address->id == auth()->user()->default_address ? 'checked':''}} name="is_default" class="w-5 h-5 mt-0.5 rounded border-2 border-wood-500 dark:border-wood-500 text-wood-600 dark:text-wood-500 focus:ring-2 focus:ring-wood-500 dark:focus:ring-wood-500 cursor-pointer">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <svg class="w-5 h-5 text-wood-600 dark:text-wood-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg><span class="text-sm font-bold text-wood-900 dark:text-wood-100">تنظیم به عنوان آدرس پیش‌فرض</span>
                            </div>
                            <p class="text-xs text-wood-700 dark:text-wood-300">این آدرس به صورت پیش‌فرض برای ارسال سفارش‌ها استفاده خواهد شد</p>
                        </div></label>
                </div><!-- Action Buttons -->
                <div class="flex gap-3 pt-4 border-t-2 border-wood-300 dark:border-wood-700">
                    <button type="submit" class="flex-1 bg-gradient-to-r from-wood-500 to-wood-700 hover:from-wood-600 hover:to-wood-800 dark:from-wood-600 dark:to-wood-800 dark:hover:from-wood-700 dark:hover:to-wood-900 text-white px-6 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl transition-all duration-200 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg><span>ذخیره آدرس</span> </button>
                    <a href="{{route('user.addresses.index')}}" class="px-6 py-4 rounded-xl font-bold bg-wood-300 dark:bg-wood-700 text-wood-900 dark:text-wood-100 hover:bg-wood-400 dark:hover:bg-wood-600 transition-colors flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg><span>انصراف</span> </a>
                </div>
            </form>
        </div>

    </div>
</main>
</div>
@endsection
@push('scripts')

    <script>
        $("#province").on('change',async function(e){

            const res = await $.ajax({
                url: '/getCities',
                type: 'POST',
                data: {
                    province_id:$(this).val()
                },
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(res){
                    citySelect = $("#city");
                    citySelect.empty();
                    citySelect.append('<option value="">انتخاب شهر...</option>');
                    res.cities.forEach(function(city){
                        citySelect.append(`<option value="${city.id}">${city.title}</option>`)
                    });
                },
                error:function(xhr){
                    //alert(xhr.responseText)
                }
            });

        });
    </script>
@endpush
