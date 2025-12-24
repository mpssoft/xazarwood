@extends('layouts.admin.master')

@section('content')


    <style>
        body {
            box-sizing: border-box;
        }

        .smooth-transition {
            transition: all 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fadeIn 0.6s ease-out;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.375rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .status-pending {
            background-color: #fef3c7;
            color: #92400e;
        }

        .status-processing {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .status-shipped {
            background-color: #e0e7ff;
            color: #4338ca;
        }

        .status-delivered {
            background-color: #d1fae5;
            color: #065f46;
        }

        .dark .status-pending {
            background-color: #78350f;
            color: #fef3c7;
        }

        .dark .status-processing {
            background-color: #1e3a8a;
            color: #dbeafe;
        }

        .dark .status-shipped {
            background-color: #312e81;
            color: #e0e7ff;
        }

        .dark .status-delivered {
            background-color: #064e3b;
            color: #d1fae5;
        }

        .filter-btn {
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: all 0.2s;
            cursor: pointer;
        }

        .filter-btn:hover {
            transform: translateY(-2px);
        }

        .filter-active {
            background-color: #b8935f;
            color: white;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .animate-spin {
            animation: spin 1s linear infinite;
        }
    </style>

<div class="h-full w-full m-0 p-0 overflow-auto">
<div class="w-full min-h-full bg-wood-50 dark:bg-wood-950 smooth-transition">
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8"><!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-4">
                <div>
                    <h1 id="page-title" class="text-3xl font-bold text-wood-900 dark:text-wood-100">سفارشات مشتری ها</h1>

                </div>
            </div>
        </div><!-- Search and Filter -->
        <div class="bg-white dark:bg-wood-900 rounded-xl shadow-lg p-6 mb-8 animate-fade-in">
            <div class="flex flex-col md:flex-row gap-4 mb-6"><!-- Search -->
                <div class="flex-1"><label for="search-input" class="sr-only">جستجو سفارش</label>
                    <div class="relative"><input type="text" id="search-input" placeholder="جستجوی شماره سفارش..." class="w-full px-4 py-3 pr-12 rounded-lg border-2 border-wood-200 dark:border-wood-700 bg-wood-50 dark:bg-wood-800 text-wood-900 dark:text-wood-100 focus:border-wood-600 dark:focus:border-wood-400 focus:outline-none smooth-transition">
                        <svg class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-wood-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div><!-- Status Filters -->
            <div class="flex flex-wrap gap-2">
                <button class="filter-btn filter-active" data-filter="all"> <span id="all-orders-label">همه سفارشات</span> <span class="mr-2 bg-wood-300 dark:bg-wood-600 px-2 py-0.5 rounded-full text-xs">{{auth()->user()->orders()->count()}}</span> </button>
                <button class="filter-btn bg-wood-100 dark:bg-wood-800 text-wood-700 dark:text-wood-300" data-filter="pending"> <span id="pending-label">در انتظار</span> <span class="mr-2 bg-wood-200 dark:bg-wood-700 px-2 py-0.5 rounded-full text-xs">{{auth()->user()->orders()->where('status','pending')->count()}}</span> </button>
                <button class="filter-btn bg-wood-100 dark:bg-wood-800 text-wood-700 dark:text-wood-300" data-filter="processing"> <span id="processing-label">در حال پردازش</span> <span class="mr-2 bg-wood-200 dark:bg-wood-700 px-2 py-0.5 rounded-full text-xs">{{auth()->user()->orders()->where('status','paid')->count()}}</span> </button>
                <button class="filter-btn bg-wood-100 dark:bg-wood-800 text-wood-700 dark:text-wood-300" data-filter="shipped"> <span id="shipped-label">ارسال شده</span> <span class="mr-2 bg-wood-200 dark:bg-wood-700 px-2 py-0.5 rounded-full text-xs">{{auth()->user()->orders()->where('status','sent')->count()}}</span> </button>
                <button class="filter-btn bg-wood-100 dark:bg-wood-800 text-wood-700 dark:text-wood-300" data-filter="delivered"> <span id="delivered-label">تحویل داده شد</span> <span class="mr-2 bg-wood-200 dark:bg-wood-700 px-2 py-0.5 rounded-full text-xs">{{auth()->user()->orders()->where('status','delivered')->count()}}</span> </button>
            </div>
        </div><!-- Orders List - Static HTML Cards -->
        <div id="orders-container" class="space-y-4">
            <!-- Order Card 1 - Processing -->
            @foreach($orders as $order)

            <div class="bg-white dark:bg-wood-900 rounded-xl shadow-lg p-6 hover:shadow-xl smooth-transition animate-fade-in">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex items-start justify-start gap-4 mb-3">
                            <div>
                                <h3 class="text-xl font-bold text-wood-900 dark:text-wood-100 mb-1">شماره سفارش: {{ $order->id }}</h3>
                                <p class="text-sm text-wood-600 dark:text-wood-400"><span>تاریخ ثبت سفارش:  {{$order->created_at}}</span> </p>
                            </div>
                            <div>
                            @php $status = ['pending' => 'در انتظار پرداخت', 'paid'=>'در حال پردازش ', 'sent'=>'ارسال شده', 'delivered'=>'تحویل داده شده'] @endphp
                            @switch($order->status)
                                @case('pending')
                                    <span class="status-badge status-pending">
          <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" />
          </svg> {{$status[$order->status]}} </span>
                                    @break
                             @case('sent')
                                    <span class="status-badge status-shipped">
          <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" /> <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z" />
          </svg> {{$status[$order->status]}} </span>
                                @break
                            @case('delivered')
                                    <span class="status-badge status-delivered">
          <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" />
          </svg> {{$status[$order->status]}} </span>
                                @break
                            @case('paid')
                                    <span class="status-badge status-processing">
          <svg class="w-4 h-4 " fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
          </svg> {{$status[$order->status]}} </span>
                                @break
                            @endswitch
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-3">

                            @foreach($order->items as $item)

                            <span class="px-3 py-1 bg-wood-100 dark:bg-wood-800 text-wood-700 dark:text-wood-300 rounded-full text-sm"> {{$item->item->name ?? ''}} </span>
                            @endforeach

                        </div>
                        <div class="flex items-center gap-2 text-wood-600 dark:text-wood-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg><span class="text-sm">{{$order->items->count()}} محصول</span>
                        </div>
                    </div>
                    <div class="flex  flex-col items-start  lg:items-end gap-3 lg:min-w-[200px]">
                        <div class="text-left lg:text-right w-full">
                            <p class="text-sm text-wood-600 dark:text-wood-400 mb-1">مبلغ کل</p>
                            <div class="flex items-center gap-3">
                            <p class="text-2xl font-bold text-wood-900 dark:text-wood-100">{{number_format($order->price+$order->shipping_price)}}</p>
                            <p class="text-xs text-wood-500 dark:text-wood-500"> تومان </p>
                            </div>
                        </div>
                        <div class="flex items-center  w-full gap-1">
                        <a href="{{route('shop.admin.order.show',['order_id'=>$order->id])}}" class="w-full lg:w-auto px-2 py-1 bg-wood-600 hover:bg-wood-700 text-white rounded-lg font-medium smooth-transition"><span id="view-details-button" class="text-sm ">مشاهده جزئیات</span> </a>

                        <a href="{{route('shop.admin.order.sent',$order->id)}}" class="w-full lg:w-auto px-2 py-1 bg-blue-600 hover:bg-blue-700  text-white rounded-lg font-medium smooth-transition"><span id="view-details-button" class="text-sm "> ارسال شده</span> </a>
                        <a href="{{route('shop.admin.order.delivered',$order->id)}}" class="w-full lg:w-auto px-2 py-1 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium smooth-transition"><span id="view-details-button" class="text-sm ">تحویل شده </span> </a>
                       @if($order->status == 'pending')

                                <form action="{{ route('shop.admin.order.delete',$order->id) }}" onsubmit="event.preventDefault();confirmDelete(event);" method="post" id="{{'delete-'.$order->id}}">@csrf @method('delete')
                                    @csrf
                                    @method('DELETE')

                                <button type="submit" class="w-full lg:w-auto px-2 py-1 bg-red-600 hover:bg-red-700 text-white rounded-lg font-medium smooth-transition"><span id="view-details-button" class="text-sm ">حذف </span> </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div><!-- Order Card 2 - Shipped -->
            @endforeach
        </div>
    </div>
</div>
</div>


@endsection
@push('scripts')
    <script>
        function confirmDelete(e) {
            e.preventDefault();
            Swal.fire({
                title: 'حذف سفارش ',
                text: 'آیا مطمئن هستید که می‌خواهید این سفارش  را لغو کنید؟',
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
    </script>
@endpush
