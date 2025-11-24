@extends('layouts.app')

@section('content')
    <div class="bg-wood-50 dark:bg-wood-950 transition-colors duration-300">

        <div class="min-h-screen py-8">
            <div class="container mx-auto px-4 max-w-6xl">
                <!-- Header Section -->
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-wood-500 to-amber-600 rounded-full mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l-1.5-6m0 0h15M17 21a2 2 0 100-4 2 2 0 000 4zM9 21a2 2 0 100-4 2 2 0 000 4z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold bg-gradient-to-r from-wood-800 to-wood-600 dark:from-wood-100 dark:to-wood-300 bg-clip-text text-transparent mb-2">
                        سبد خرید شما
                    </h1>
                    <p class="text-wood-600 dark:text-wood-400">محصولات انتخابی شما برای خرید</p>
                </div>

                @if( count($cart))

                    <!-- Sample Cart Data -->
                    <div id="cart-content">
                        <!-- Cart Items -->
                        <div
                            class="bg-white dark:bg-wood-800 rounded-2xl shadow-xl border border-wood-200 dark:border-wood-700 overflow-hidden mb-8">
                            <div
                                class="bg-gradient-to-r from-wood-50 to-wood-100 dark:from-wood-700 dark:to-wood-800 px-6 py-4 border-b border-wood-200 dark:border-wood-600">
                                <h2 class="text-lg font-semibold text-wood-800 dark:text-wood-100 flex items-center">
                                    <svg class="w-5 h-5 ml-2 text-blue-500" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                    </svg>
                                    آیتم‌های سبد خرید
                                </h2>
                            </div>

                            <!-- Desktop Table View -->
                            <div class="hidden md:block overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                    <tr class="bg-wood-50 dark:bg-wood-700/50 text-wood-700 dark:text-wood-200">
                                        <th class="py-4 px-6 text-right font-medium">نام محصول</th>
                                        <th class="py-4 px-6 text-right font-medium">قیمت</th>
                                        <th class="py-4 px-6 text-right font-medium">تعداد</th>
                                        <th class="py-4 px-6 text-right font-medium">قیمت کل</th>
                                        <th class="py-4 px-6 text-right font-medium">تخفیف</th>
                                        <th class="py-4 px-6 text-right font-medium">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-wood-200 dark:divide-wood-700">
                                    @php
                                        $wholePrice = 0;
                                        $wholeDiscount = 0;
                                    @endphp
                                    @foreach($cart as $item)

                                        <tr class="hover:bg-wood-50 dark:hover:bg-wood-700/30 transition-colors duration-200">
                                            <td class="py-4 px-6">
                                                <div class="flex items-center">

                                                    <span
                                                        class="font-medium text-wood-800 dark:text-wood-100">{{$item['model']->name}}</span>
                                                </div>
                                            </td>


                                            <td class="py-4 px-6">
                                                @if(!is_null($item['discount']))
                                                    @php

                                                        if(!is_array($item['discount']))
                                                            $discount = collect(json_decode($item['discount']));
                                                        else
                                                            $discount = collect($item['discount']);

                                                        if($discount['type'] == 'percent')
                                                            $discounted = $item['price'] - ($item['price'] * ($discount['value']  / 100 ));
                                                        else
                                                            $discounted = $item['price'] - $discount['value'] ;

                                                    @endphp
                                                    <del
                                                        class="text-amber-600 text-sm "> {{number_format($item['price'])}}
                                                        تومان
                                                    </del>
                                                    <br> <span class="font-semibold text-wood-800 dark:text-wood-100">{{number_format($discounted) }} تومان</span>

                                                @else

                                                    <span class="font-semibold text-wood-800 dark:text-wood-100">{{number_format($item['price'])}} تومان</span>
                                                @endif
                                            </td>
                                            <td class="py-4 px-6">

                                                <div class="flex items-center gap-2 select-none"
                                                     data-product-id="{{$item['item_id']}}"
                                                     data-product-model="{{strtolower(class_basename($item['item_type']))}}">
                                                    <!-- Plus Button -->
                                                    <button
                                                        type="button"
                                                        class="plus-btn w-9 h-9 flex items-center justify-center
               rounded-lg border border-wood-300 dark:border-wood-600
               bg-white dark:bg-wood-800
               text-wood-700 dark:text-wood-200
               hover:bg-wood-100 dark:hover:bg-wood-700 transition">
                                                        <i class="fas fa-plus"></i>
                                                    </button>

                                                    <!-- Quantity Input -->
                                                    <input
                                                        type="number"
                                                        value="{{$item['qty']}}"
                                                        min="1"
                                                        class="quantity-input w-16 h-9 text-center
               rounded-lg border border-wood-300 dark:border-wood-600
               bg-white dark:bg-wood-800
               text-wood-900 dark:text-wood-100
               focus:ring-2 focus:ring-blue-500 outline-none transition
               [appearance:textfield]
               [&::-webkit-inner-spin-button]:appearance-none
               [&::-webkit-outer-spin-button]:appearance-none"
                                                    />

                                                    <!-- Minus Button -->
                                                    <button
                                                        type="button"
                                                        class="minus-btn w-9 h-9 flex items-center justify-center
               rounded-lg border border-wood-300 dark:border-wood-600
               bg-white dark:bg-wood-800
               text-wood-700 dark:text-wood-200
               hover:bg-wood-100 dark:hover:bg-wood-700 transition">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>

                                            </td>
                                            <td class="py-4 px-6">
                                                <span class="font-semibold text-wood-800 dark:text-wood-100 ">
                                                     @if(!is_null($item['discount']))
                                                        <del class="text-amber-600 text-sm "> {{number_format($item['price']*$item['qty'])}} تومان</del>
                                                        <br>
                                                        {{number_format($discounted*$item['qty'])}} تومان
                                                    @else

                                                        {{number_format($item['price']*$item['qty'])}} تومان
                                                    @endif
                                                </span></td>
                                            <td class="py-4 px-6">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300">
                                              @if(!is_null($item['discount']))
                                                {{$discount['type'] == 'percent' ? $discount['value'].'٪':$discount['value'].' تومان '}}
                                            @endif
                                        </span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <button
                                                    onclick="removeItem('{{addslashes($item['item_type'])}}',{{$item['item_id']}})"
                                                    class="flex  items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-lg text-white bg-amber-500 hover:bg-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 dark:focus:ring-offset-wood-800 transition-all duration-200 hover:shadow-lg">
                                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                    حذف
                                                </button>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Mobile Card View -->
                            <div class="md:hidden space-y-4 p-4">
                                @foreach($cart as $item)

                                    <div
                                        class="bg-wood-50 dark:bg-wood-700 rounded-xl p-4 border border-wood-200 dark:border-wood-600 transition-colors duration-300">
                                        <div class="flex items-start justify-between mb-3">
                                            <div class="flex items-center">

                                                <div
                                                    class="w-12 h-12 bg-blue-100 overflow-hidden dark:bg-blue-900/50 rounded-lg flex items-center justify-center ml-3 transition-colors duration-300">
                                                   <img src="{{asset($item['model']['main_image'])}}" class="h-full object-cover">
                                                </div>
                                                <div>
                                                    <a href="{{route('show.product',['product'=>$item['item_id'],'name'=>$item['model']['name']])}}" >
                                                    <h3 class="font-semibold text-wood-800 dark:text-wood-100 transition-colors duration-300">{{$item['model']['title']??$item['model']['name']}}</h3>
                                                    </a>
                                                </div>

                                            </div>
                                            @if(!is_null($item['discount']))
                                                @php
                                                    $hasDiscount = true;
                                                    if(!is_array($item['discount']))
                                                        $discount = collect(json_decode($item['discount']));
                                                    else
                                                        $discount = collect($item['discount']);
                                                     $discountCode[] = $discount['code'];
                                                     $discountPrice[] = $discount['value'];
                                                     $discountType[] = $discount['type'] == 'percent' ? '%':'تومان';
                                                    if($discount['type'] == 'percent'){
                                                        $discounted = $item['price'] - ($item['price'] * ($discount['value']  / 100 ));
                                                        $sign = "%";
                                                    }
                                                    else{
                                                        $discounted = $item['price'] - $discount['value'] ;
                                                        $sign = "تومان";
                                                        }
                                                    $wholePrice += $item['price']*$item['qty'];
                                                    $wholeDiscount += ($item['price'] - $discounted)*$item['qty'];
                                                @endphp

                                            @endif
                                            @if(!is_null($item['discount']))  <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 dark:bg-green-900/50 text-green-800 dark:text-green-300 transition-colors duration-300">

                                                    {{$discount['value']??''}}{{$sign??'' }}

                                </span> @endif
                                        </div>

                                        <div class="flex items-center justify-between">

                                            <div class="text-left">
                                                @if(!is_null($item['discount']))

                                                    <del
                                                        class="font-semibold text-amber-800 dark:text-amber-400 transition-colors text-sm  duration-300">
                                                        {{number_format($item['price']*$item['qty'])}} تومان
                                                    </del>
                                                    <p class="font-semibold text-wood-800 dark:text-wood-100 transition-colors duration-300">{{number_format($discounted * $item['qty'])}}
                                                        تومان</p>
                                                @else
                                                    @php  $wholePrice += $item['price']*$item['qty']; @endphp
                                                    <p class="font-semibold text-wood-800 dark:text-wood-100 transition-colors duration-300">
                                                        {{number_format($item['price'] * $item['qty'])}} تومان</p>
                                                @endif

                                            </div>
                                            <div class="flex flex-col items-center select-none"
                                                 data-product-id="{{$item['item_id']}}"
                                                 data-product-model="{{strtolower(class_basename($item['item_type']))}}">
                                                <!-- Plus Button -->
                                                <button
                                                    type="button"
                                                    class="plus-btn w-9 h-9 flex items-center justify-center
               rounded-lg sticky t-4 z-20 border  border-wood-300 dark:border-wood-600
               bg-white dark:bg-wood-800
               text-wood-700 dark:text-wood-200
               hover:bg-wood-100 dark:hover:bg-wood-700 transition">
                                                    <i class="fas fa-plus"></i>
                                                </button>

                                                <!-- Quantity Input -->
                                                <input
                                                    type="number"
                                                    value="{{$item['qty']}}"
                                                    min="1"
                                                    class="quantity-input w-16 h-9 text-center
               rounded-lg border border-wood-300 dark:border-wood-600
               bg-white dark:bg-wood-800
               text-wood-900 dark:text-wood-100
               focus:ring-2 focus:ring-blue-500 outline-none transition
               [appearance:textfield]
               [&::-webkit-inner-spin-button]:appearance-none
               [&::-webkit-outer-spin-button]:appearance-none"
                                                />

                                                <!-- Minus Button -->
                                                <button
                                                    type="button"
                                                    class="minus-btn w-9 h-9 flex items-center justify-center
               rounded-lg border border-wood-300 dark:border-wood-600
               bg-white dark:bg-wood-800
               text-wood-700 dark:text-wood-200
               hover:bg-wood-100 dark:hover:bg-wood-700 transition">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                            <button
                                                onclick="removeItem('{{addslashes($item['item_type'])}}',{{$item['item_id']}})"
                                                class="flex  items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-lg text-white bg-amber-500 hover:bg-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 dark:focus:ring-offset-wood-800 transition-all duration-200 hover:shadow-lg">
                                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                                حذف
                                            </button>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <!-- Order Summary -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                            <div class="lg:col-span-1">
                                <!-- Coupon Section -->
                                <!-- Alerts (validation errors) -->
                                @if(session('result'))

                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-emerald-100 text-emerald-700 px-2.5 py-1 text-xs font-medium">
                              <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm-1 14-4-4 1.414-1.414L11 12.172l5.586-5.586L18 8l-7 8Z"/>
                              </svg>
                              {{ session('result')['message'] }}
                            </span>

                                @else
                                    @if ($errors->any())
                                        <div
                                            class="mb-6 rounded-xl border border-rose-300/60 bg-rose-50/80 text-rose-700 dark:border-rose-500/40 dark:bg-rose-900/30 dark:text-rose-200 p-4">

                                            <ul class="list-disc pr-5 text-sm space-y-1">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                @endif
                                @if(isset($hasDiscount))
                                    <div class=" mb-4">
                                        <div
                                            class="flex items-start justify-between rounded-xl border border-green-300 bg-green-50 dark:bg-green-900/30 dark:border-green-700 p-4">
                                            <div class="flex items-center gap-3">
                                                <!-- Success icon -->
                                                <span
                                                    class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-green-500 text-white">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
      </span>

                                                <div class="leading-relaxed">
                                                    <p class="text-sm font-semibold text-green-800 dark:text-green-200">
                                                        کد تخفیف اعمال شده
                                                    </p>
                                                    @php

                                                        $discounts = array_map(null,$discountCode,$discountPrice,$discountType);

                                                    @endphp
                                                    @foreach($discounts as [$code,$price,$type])
                                                        <p class="mt-1 text-sm text-green-700 dark:text-green-300 inline-flex">
                                                            کد: <span
                                                                class="font-bold tracking-wide text-green-900 dark:text-green-100">{{$code ?? ''}}</span>
                                                            <span class="mx-2 text-green-600/60">|</span>
                                                            مقدار تخفیف:
                                                            <span
                                                                class="font-bold text-green-900 dark:text-green-100">{{$price ?? ''}} {{$type ?? ''}}</span>
                                                        </p>
                                                        <form action="{{route('shop.cart.removeDiscount')}}"
                                                              method="post" class="inline-block ">
                                                            <input type="hidden" value="{{$code??''}}" name="code">
                                                            @csrf
                                                            <button
                                                                class="p-2 sm:p-3 text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-xl transition-colors duration-200"
                                                                title="حذف">
                                                                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none"
                                                                     stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          stroke-width="2"
                                                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                        <br>
                                                    @endforeach
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                @endif
                                <div
                                    class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg border border-wood-200 dark:border-wood-700 p-6 mb-6">
                                    <h3 class="text-lg font-semibold text-wood-800 dark:text-wood-100 mb-4 flex items-center">
                                        <svg class="w-5 h-5 ml-2 text-green-500" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>
                                        کد تخفیف
                                    </h3>
                                    <div class="flex space-x-3 space-x-reverse">
                                        <form action="{{route('shop.cart.applyDiscount')}}" method="post"
                                              class="w-full flex flex-col  space-x-3 space-x-reverse">
                                            @csrf
                                            <input type="text" name="code" placeholder="کد تخفیف خود را وارد کنید"
                                                   class="flex-1 mb-2 px-4 py-3 border border-wood-300 dark:border-wood-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-wood-700 text-wood-900 dark:text-wood-400 placeholder-wood-500 dark:placeholder-wood-400">
                                            <button
                                                class="px-10 h-12 py-0  bg-wood-500 hover:bg-wood-600 text-white font-medium rounded-lg transition-colors duration-200 hover:shadow-lg">
                                                اعمال
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Order Summary Card -->
                            <div class="lg:col-span-2">
                                <div
                                    class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg border border-wood-200 dark:border-wood-700 p-6 sticky top-8">
                                    <h3 class="text-lg font-semibold text-wood-800 dark:text-wood-100 mb-6 flex items-center">
                                        <svg class="w-5 h-5 ml-2 text-blue-500" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                        خلاصه سفارش
                                    </h3>

                                    <div class="space-y-4 mb-6">
                                        <div class="flex justify-between text-wood-600 dark:text-wood-300">
                                            <span>جمع کل محصولات:</span>
                                            <span>{{ number_format($wholePrice) }} تومان</span>
                                        </div>
                                        <div class="flex justify-between text-green-600 dark:text-green-400">
                                            <span>تخفیف:</span>
                                            <span>{{ number_format($wholeDiscount) }} تومان</span>
                                        </div>

                                        <hr class="border-wood-200 dark:border-wood-600">
                                        <div
                                            class="flex justify-between text-lg font-bold text-wood-800 dark:text-wood-100">
                                            <span>مبلغ نهایی:</span>
                                            <span class="text-blue-600 dark:text-blue-400">{{ number_format($wholePrice-$wholeDiscount) }} تومان</span>
                                        </div>
                                    </div>

                                    <a id="enabledPaymentButton" href="{{route('user.cart.checkout')}}"
                                       class=" w-full bg-green-800 hover:from-wood-600 hover:to-wood-700 text-white font-semibold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl flex items-center justify-center">
                                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                        </svg>
                                        ادامه پرداخت
                                    </a>
                                    <a href="{{route('all.courses')}}"
                                       class="mt-5 w-full bg-gradient-to-r from-wood-500 to-wood-800 hover:from-wood-600 hover:to-wood-950 text-white font-semibold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl flex items-center justify-center">
                                        <span class="fas fa-plus ml-3"> </span>
                                        افزودن محصولات بیشتر
                                    </a>

                                    <div class="mt-4 text-center">
                                        <p class="text-sm text-wood-500 dark:text-wood-400 flex items-center justify-center">
                                            <svg class="w-4 h-4 ml-1 text-green-500" fill="none" stroke="currentColor"
                                                 viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                            </svg>
                                            پرداخت امن و محفوظ
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

            </div>
            @else
                <!-- Empty Cart State -->
                <div id="empty-cart" class="hidden text-center py-16">
                    <div class="max-w-md mx-auto">
                        <div
                            class="w-24 h-24 bg-wood-100 dark:bg-wood-700 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-12 h-12 text-wood-400 dark:text-wood-500" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l-1.5-6m0 0h15M17 21a2 2 0 100-4 2 2 0 000 4zM9 21a2 2 0 100-4 2 2 0 000 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-wood-800 dark:text-wood-100 mb-2">سبد خرید شما خالی
                            است</h3>
                        <p class="text-wood-600 dark:text-wood-400 mb-6">هنوز محصولی به سبد خرید خود اضافه نکرده‌اید</p>
                        <button
                            class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-3 px-6 rounded-lg transition-colors duration-200">
                            مشاهده محصولات
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $(".plus-btn").on("click", function () {
                let container = $(this).closest("div[data-product-id]");
                let input = container.find(".quantity-input");

                let val = parseInt(input.val()) || 1;

                input.val(val + 1).trigger("change");
            });

            $(".minus-btn").on("click", function () {
                let container = $(this).closest("div[data-product-id]");
                let input = container.find(".quantity-input");
                let val = parseInt(input.val()) || 1;

                if (val > 1) input.val(val - 1).trigger("change");
            });

            $(".quantity-input").on("change", function () {
                let container = $(this).closest("div[data-product-id]");
                let productId = container.data("product-id");
                let model = container.data("product-model");
                let quantity = $(this).val();
                changeQuantity(model,productId,quantity);


            });
        });

        function changeQuantity(model,id,qty,cart=true)
        {
            url = "/cart/add/"+model+"/"+id+"/"+qty;
            fetch(url, {
                method: "GET",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },

            })
                .then(res => res.json())
                .then(data => {
                    if (window.location.pathname === "/cart") {
                        window.location.reload();
                    }
                    if (cart) {
                        window.location.href = "/cart";
                    }
                    if (data.success) {

                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            title: data.message,
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        });

                    } else {

                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title:data.message ?? "Something went wrong!",
                            showConfirmButton: false,
                            timer: 3000
                        });
                    }
                })
                .catch((data) => {

                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: "Server error!",
                        showConfirmButton: false,
                        timer: 3000
                    });
                })
        }
    </script>
@endpush
