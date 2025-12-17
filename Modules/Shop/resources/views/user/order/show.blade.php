@extends('layouts.user.master')

@section('content')
@php
    $status = ['pending'=>0,'paid'=>65,'sent'=>80,'delivered'=>100];
    $order = \App\Models\Order::whereId(request('order_id'))->with('items.item')->first();
    $progress =$status[$order->status];
 @endphp
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

        @keyframes slideIn {
            from { transform: translateX(50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .animate-slide-in {
            animation: slideIn 0.5s ease-out;
        }

        @keyframes checkmark {
            0% { transform: scale(0) rotate(0deg); opacity: 0; }
            50% { transform: scale(1.2) rotate(180deg); }
            100% { transform: scale(1) rotate(360deg); opacity: 1; }
        }

        .animate-checkmark {
            animation: checkmark 0.8s ease-out;
        }

        @keyframes progressFill {
            from { height: 0; }
            to { height: {{$progress}}%; }
        }

        @keyframes progressFillHorizontal {
            from { width: 0; }
            to { width: {{$progress}}%; }
        }

        .progress-animate {
            animation: progressFill 1.5s ease-out forwards;
        }

        .progress-animate-horizontal {
            animation: progressFillHorizontal 1.5s ease-out forwards;
        }
    </style>

<div class="h-full w-full m-0 p-0 overflow-auto">
<div class="w-full min-h-full bg-wood-50 dark:bg-wood-950 smooth-transition">
    <div class="max-w-6xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
            @if(request('Authority'))
        <!-- Success Header -->
        <div class="text-center mb-12 animate-fade-in">
            <div class="flex justify-center mb-6">
                <div class="w-24 h-24 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center animate-checkmark">
                    <svg class="w-12 h-12 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>
            <h1 id="success-title" class="text-4xl font-bold text-wood-900 dark:text-wood-100 mb-3">سفارش شما با موفقیت ثبت شد!</h1>
            <p id="success-message" class="text-lg text-wood-600 dark:text-wood-400 mb-4">سفارش شما دریافت شد و در حال پردازش است</p>
            <div class="flex items-center justify-center gap-2 text-wood-700 dark:text-wood-300"><span class="font-semibold">شماره سفارش:</span> <span id="order-number" class="font-mono text-wood-900 dark:text-wood-100 text-xl">{{request('order_id')}}</span>
            </div>
        </div>
            @endif
            <!-- Order Status Timeline -->
        <div class="bg-white dark:bg-wood-900 rounded-xl shadow-lg p-8 mb-8 animate-fade-in">
            <h2 id="order-status-title" class="text-2xl font-semibold text-wood-900 dark:text-wood-100 mb-8">وضعیت سفارش</h2>
            <div class="relative"><!-- Vertical Line (mobile only) -->
                <div class="absolute right-6 top-0 bottom-0 w-1 bg-wood-200 dark:bg-wood-700 md:hidden"></div>
                <div class="absolute right-6 top-0 w-1 bg-wood-600 dark:bg-wood-200 progress-animate md:hidden"></div>
                <!-- Horizontal Line (md and up) -->
                <div class="hidden md:block absolute top-6 right-0 left-0 h-1 bg-wood-200 dark:bg-wood-700"></div>
                <div class="hidden md:block absolute top-6 right-0 h-1 bg-wood-600 dark:bg-wood-200 progress-animate-horizontal"></div>
                <!-- Steps -->
                <div class="space-y-8 md:space-y-0 md:flex md:justify-between md:gap-4">
                    <!-- Step 1: Order Placed -->
                    <div class="flex items-start gap-6 md:flex-col md:items-center md:flex-1 md:text-center relative">
                        @if( $status[$order->status] > 33)
                            <div class="w-12 h-12 rounded-full bg-wood-600 dark:bg-wood-400 flex items-center justify-center text-white font-bold z-10 flex-shrink-0">
                                <span class="w-6 h-6 fa fa-check text-xl"></span>
                            </div>
                        @else
                            <div class="w-12 h-12 rounded-full bg-wood-600 flex items-center justify-center text-white font-bold z-10 flex-shrink-0">
                                <span class="fa fa-refresh w-5 h-5"></span>
                            </div>
                        @endif
                        <div class="flex-1 md:mt-4">
                            <h3 class="text-lg font-semibold text-wood-900 dark:text-wood-100 mb-1">سفارش ثبت شد</h3>
                            @if( $status[$order->status] > 33)
                                <p class="text-sm text-wood-600 dark:text-wood-400 mb-2">سفارش پرداخت شده </p>
                            @else
                                <p class="text-sm text-wood-600 dark:text-wood-400 mb-2">سفارش شما در انتظار پرداخت می باشد</p>
                            @endif
                                <p class="text-xs text-wood-500 dark:text-wood-500">{{$order->updated_at}}</p>

                        </div>
                    </div>
                    <!-- Step 2: Processing -->
                    <div class="flex items-start gap-6 md:flex-col md:items-center md:flex-1 md:text-center relative {{$status[$order->status]>32 ? 'opacity-100':'opacity-50'}}">
                        @if( $status[$order->status] > 64)
                            <div class="w-12 h-12 rounded-full bg-wood-600 dark:bg-wood-400 flex items-center justify-center text-white font-bold z-10 flex-shrink-0">
                                <span class="w-6 h-6 fa fa-check text-xl"></span>
                            </div>
                        @else
                        <div class="w-12 h-12 rounded-full bg-wood-600 flex items-center justify-center text-white font-bold z-10 flex-shrink-0">
                            <span class="fa fa-refresh w-5 h-5"></span>
                        </div>
                        @endif
                        <div class="flex-1 md:mt-4">
                            <h3 class="text-lg font-semibold text-wood-900 dark:text-wood-100 mb-1">در حال پردازش</h3>
                            <p class="text-sm text-wood-600 dark:text-wood-400 mb-2">سفارش شما در حال آماده‌سازی است</p>
                            <p class="text-xs text-wood-500 dark:text-wood-500">{{ $status[$order->status] > 64? $order->updated_at:'در حال انجام...' }}</p>
                        </div>
                    </div>
                    <!-- Step 3: Shipping -->
                    <div class="flex items-start gap-6 md:flex-col md:items-center md:flex-1 md:text-center relative {{$status[$order->status]>64 ? 'opacity-100':'opacity-50'}} ">
                        @if( $status[$order->status] > 79)
                            <div class="w-12 h-12 rounded-full bg-wood-600 dark:bg-wood-400 flex items-center justify-center text-white font-bold z-10 flex-shrink-0">
                                <span class="w-6 h-6 fa fa-check text-xl"></span>
                            </div>
                        @else
                            <div class="w-12 h-12 rounded-full bg-wood-600 flex items-center justify-center text-white font-bold z-10 flex-shrink-0">
                                    <span class="fa fa-refresh w-5 h-5"></span>
                            </div>
                        @endif
                        <div class="flex-1 md:mt-4">
                            <h3 class="text-lg font-semibold text-wood-900 dark:text-wood-100 mb-1">ارسال شده</h3>
                            <p class="text-sm text-wood-600 dark:text-wood-400 mb-2">سفارش از انبار ارسال خواهد شد</p>
                            <p class="text-xs text-wood-500 dark:text-wood-500">در انتظار...</p>
                        </div>
                    </div><!-- Step 4: Delivered -->
                    <div class="flex items-start gap-6 md:flex-col md:items-center md:flex-1 md:text-center relative {{$status[$order->status]>90 ? 'opacity-100':'opacity-50'}}">
                        @if( $status[$order->status] > 90)
                            <div class="w-12 h-12 rounded-full bg-wood-600 dark:bg-wood-400 flex items-center justify-center text-white font-bold z-10 flex-shrink-0">
                                <span class="w-6 h-6 fa fa-check text-xl"></span>
                            </div>
                        @else
                            <div class="w-12 h-12 rounded-full bg-wood-600 flex items-center justify-center text-white font-bold z-10 flex-shrink-0">
                                <span class="fa fa-refresh w-5 h-5"></span>
                            </div>
                        @endif
                        <div class="flex-1 md:mt-4">
                            <h3 class="text-lg font-semibold text-wood-900 dark:text-wood-100 mb-1">تحویل داده شد</h3>
                            <p class="text-sm text-wood-600 dark:text-wood-400 mb-2">سفارش به دست شما خواهد رسید</p>
                            <p class="text-xs text-wood-500 dark:text-wood-500">در انتظار...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8"><!-- Left Column - Order Items -->
            <div class="space-y-6"><!-- Order Items -->
                <div class="bg-white dark:bg-wood-900 rounded-xl shadow-lg p-6 animate-slide-in">
                    <h2 id="order-items-title" class="text-2xl font-semibold text-wood-900 dark:text-wood-100 mb-6" style="font-size: 24px;">محصولات سفارش</h2>
                    <div id="order-items" class="space-y-4">
                        @foreach($order->items as $item)
                        <div class="flex items-center gap-1 ">
                            <div class=""><img class="h-10 w-10 rounded" src="{{str_replace(['big','1500'],['thumb','100'],$item->item->main_image)}}"></div>
                            <div class="flex-1">
                                <h3 class="font-semibold text-wood-900 dark:text-wood-100 mb-1">{{$item->item->name}}</h3>
                                <p class="text-sm text-wood-600 dark:text-wood-400">تعداد: {{$item->quantity}}</p>
                            </div>
                            <div class=" text-right">
                                <p class="font-bold text-wood-900 dark:text-wood-100">{{number_format($item->price)}}</p>
                                <p class="text-xs text-wood-500 dark:text-wood-500">تومان</p>
                            </div>
                        </div>
                            <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
                        @endforeach

                    </div>
                    <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
                    <div class="mt-2 pt-6  border-wood-200 dark:border-wood-700 space-y-3">
                        <div class="flex justify-between text-wood-700 dark:text-wood-300"><span>جمع جزء</span> <span id="subtotal-amount">{{number_format($order->price)}} تومان</span>
                        </div>
                        <div class="flex justify-between text-wood-700 dark:text-wood-300"><span>هزینه ارسال</span> <span id="shipping-amount">{{number_format($order->shipping_price)}} تومان</span>
                        </div>
                        <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
                        <div class="flex justify-between text-lg font-bold text-wood-900 dark:text-wood-100 pt-1 border-wood-200 dark:border-wood-700"><span>جمع کل</span> <span id="total-amount">{{number_format($order->price+$order->shipping_price)}} تومان</span>
                        </div>
                    </div>
                </div>
            </div><!-- Right Column - Delivery Address & Contact -->
            <div class="space-y-6"><!-- Delivery Address -->
                <div class="bg-white dark:bg-wood-900 rounded-xl shadow-lg p-6 animate-slide-in">
                    <h2 id="delivery-address-title" class="text-2xl font-semibold text-wood-900 dark:text-wood-100 mb-6">آدرس تحویل</h2>
                    <div class="bg-wood-50 dark:bg-wood-800 rounded-lg p-5">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-wood-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-wood-700 dark:text-wood-300 leading-relaxed mb-3">{{$order->address->province->title}} , {{$order->address->city->title}} , {{$order->address->address}}</p>
                                <p class="text-sm text-wood-600 dark:text-wood-400"><span class="font-semibold">کد پستی:</span>
                                    {{$order->address->postal_code}}</p>
                            </div>
                        </div>

                    </div>
                </div><!-- Estimated Delivery -->
                <div class="bg-white dark:bg-wood-900 rounded-xl shadow-lg p-6 animate-slide-in">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-wood-100 dark:bg-wood-800 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-wood-600 dark:text-wood-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-wood-600 dark:text-wood-400">زمان تحویل تخمینی</p>
                            <p class="text-lg font-bold text-wood-900 dark:text-wood-100">۳ تا ۵ روز کاری</p>
                        </div>
                    </div>
                    <div class="bg-wood-50 dark:bg-wood-800 rounded-lg p-4">
                        <p class="text-sm text-wood-700 dark:text-wood-300">سفارش شما پس از تایید و بسته‌بندی، از طریق <span class="font-semibold">ارسال فوری</span> به آدرس شما ارسال خواهد شد.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


@endsection
