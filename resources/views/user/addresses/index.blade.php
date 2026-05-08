@extends('layouts.user.master')

@section('content')

<div class="h-full w-full overflow-auto bg-gradient-to-br from-wood-100  to-yellow-50 dark:from-stone-900 dark:via-amber-950 dark:to-stone-900"><!-- Main Container -->
<main class="min-h-full p-4 sm:p-6 lg:p-8">
    <div class="max-w-5xl mx-auto"><!-- Header -->
        <header class="mb-8">
            <div class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg p-6 border-2 border-amber-200 dark:border-amber-900">
                <div class="flex items-center justify-between flex-wrap gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-amber-600 to-orange-700 dark:from-amber-700 dark:to-orange-800 flex items-center justify-center shadow-md">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold text-amber-900 dark:text-amber-100">آدرس‌های من</h1>
                            <p class="text-amber-700 dark:text-amber-300 mt-1">مدیریت آدرس‌های ارسال</p>
                        </div>
                    </div><a href="{{route('user.addresses.create')}}" class="bg-gradient-to-r from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 dark:from-amber-700 dark:to-orange-700 dark:hover:from-amber-800 dark:hover:to-orange-800 text-white px-6 py-3 rounded-xl font-semibold shadow-md hover:shadow-lg transition-all duration-200 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg><span>افزودن آدرس جدید</span> </a>
                </div>
            </div>
        </header><!-- Address List -->
        <div class="space-y-4"><!-- Address Card 1 - Default -->
            @foreach($addresses as $address)
                <div class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg p-6 border-2 border-amber-200 dark:border-amber-800 hover:shadow-xl transition-shadow duration-200">
                <div class="flex items-start justify-between gap-4 mb-4">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-orange-600 dark:from-amber-600 dark:to-orange-700 flex items-center justify-center flex-shrink-0 shadow-md">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-2">

                                @if($address->id == auth()->user()->default_address )
                                <span class="px-3 py-1 bg-gradient-to-r from-green-500 to-emerald-600 text-white text-xs font-semibold rounded-full shadow-sm"> {{ __('messages.default') }}</span>
                                @endif
                            </div>

                            <p class="text-amber-700 dark:text-amber-300 mb-1">{{$address->name}} - {{$address->family}} </p>
                            <p class="text-amber-700 dark:text-amber-300 mb-1">{{$address->province->title}} - {{$address->city->title}} - {{$address->address}}</p>
                            <p class="text-amber-700 dark:text-amber-300"> کد پستی: {{$address->postal_code}}</p>
                            <p class="text-amber-700 dark:text-amber-300"> شماره موبایل: {{$address->mobile}}</p>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 pt-4 border-t-2 border-amber-100 dark:border-amber-900">
                    @if(auth()->user()->default_address != $address->id)
                        <form action="{{route('user.set.default.address',['default_address'=>$address->id])}}" method="post" >
                        @csrf
                            @method('PUT')
                            <button class="flex-1 bg-amber-100 dark:bg-amber-900 text-amber-900 dark:text-amber-100 px-4 py-2 rounded-lg font-semibold hover:bg-amber-200 dark:hover:bg-amber-800 transition-colors text-sm"> <span class="inline-flex items-center gap-2">
         <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
         </svg> تنظیم به عنوان پیش‌فرض </span> </button>
                        </form>
                    @endif
                        <a href="{{route('user.addresses.edit',$address->id)}}" class="bg-amber-600 dark:bg-amber-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-amber-700 dark:hover:bg-amber-800 transition-colors text-sm flex-shrink-0"> <span class="inline-flex items-center gap-2">
         <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
         </svg> ویرایش </span> </a>
                        <form action="{{route('user.addresses.destroy',$address->id)}}" method="post" onsubmit="event.preventDefault();confirmDelete(event);" >
                            @csrf
                            @method('delete')
                            <button class="bg-red-600 dark:bg-red-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-700 dark:hover:bg-red-800 transition-colors text-sm flex-shrink-0"> <span class="inline-flex items-center gap-2">
         <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
         </svg> حذف </span> </button>
                        </form>


                </div>
            </div><!-- Address Card 2 -->
            @endforeach
        </div>
    </div>
</main>
</div>
@endsection
@push('scripts')

        <script src="/js/modules/sweetalert2.js"></script>
    <script>

        function confirmDelete(e) {
            e.preventDefault();
            Swal.fire({
                title: 'حذف آدرس',
                text: 'آیا مطمئن هستید که می‌خواهید این آدرس را حذف کنید؟',
                icon: 'warning',
                showCancelButton: true,

                confirmButtonText: 'بله، حذف کن',
                cancelButtonText: 'لغو'
            }).then((result) => {
                if (result.isConfirmed) {
                    e.target.submit();
                }
            });
            return false;
        }
    </script>

@endpush
