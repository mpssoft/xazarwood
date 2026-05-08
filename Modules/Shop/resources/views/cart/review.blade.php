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
                        بررسی نهایی سفارش
                    </h1>

                </div>
                <!-- Progress Steps -->
                <div class="mb-8">
                    <div class="flex items-center justify-center gap-4">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-wood-600 text-white flex items-center justify-center font-bold">
                                ✓
                            </div><span class="text-sm font-medium text-wood-900 dark:text-wood-100">سبد خرید</span>
                        </div>
                        <div class="w-16 h-1 bg-wood-600"></div>
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-wood-600 text-white flex items-center justify-center font-bold">
                                2
                            </div><span class="text-sm font-medium text-wood-900 dark:text-wood-100">بررسی و پرداخت</span>
                        </div>
                        <div class="w-16 h-1 bg-wood-300 dark:bg-wood-700"></div>
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-wood-300 dark:bg-wood-700 text-wood-600 dark:text-wood-400 flex items-center justify-center font-bold">
                                3
                            </div><span class="text-sm font-medium text-wood-500 dark:text-wood-500">تکمیل</span>
                        </div>
                    </div>
                </div>
                @if( count($cart))

                    <!-- Sample Cart Data -->
                    <div id="cart-content">
                        <!-- Cart Items -->
                        <div
                            class="bg-white dark:bg-wood-900 rounded-2xl shadow-xl border border-wood-200 dark:border-wood-700 overflow-hidden mb-8">
                            <div
                                class="bg-gradient-to-r from-wood-50 to-wood-100 dark:from-wood-700 dark:to-wood-900 px-6 py-4 border-b border-wood-200 dark:border-wood-600">
                                <h2 class="text-lg font-semibold text-wood-800 dark:text-wood-100 flex items-center">
                                    <svg class="w-5 h-5 ml-2 text-blue-500" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                    </svg>
                                    محصولات سفارش
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

                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-wood-200 dark:divide-wood-700">
                                    @php
                                        $wholePrice = 0;
                                        $wholeDiscount = 0;
                                        $shipping_cost=0; $barbary_cost=0; $post_cost=0; session()->put('shipping_cost',0);
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

                                                    <!-- Quantity Input -->
                                                    <label
                                                        class="quantity-input w-16 h-9 text-center

               text-wood-900 dark:text-wood-100

               "
                                                    >{{$item['qty']}}</label>


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

                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Mobile Card View -->

                            <div class="md:hidden space-y-4 p-4">
                                @foreach($cart as $item)
                                    @php
                                        $record = $item['model']->attributes->where('name','وزن')->first();
                                        // calculate shipping cost
                                        if(!is_null($record)){
                                            if($record->pivot->value->value<10){
                                                //post

                                                $shipping_cost +=400000 * $item['qty'];
                                                $post_cost +=400000 * $item['qty'];
                                                session()->put('shipping_cost',$shipping_cost);
                                            }else{
                                                //barbary

                                                $shipping_cost += 1500000 * $item['qty'];
                                                $barbary_cost += 1500000 * $item['qty'];
                                                session()->put('shipping_cost',$shipping_cost);

                                            }
                                        }else{
                                        $shipping_cost += 250000 * $item['qty'];
                                        $post_cost += 250000 * $item['qty'];
                                        session()->put('shipping_cost',$shipping_cost);
                                    }

                                    @endphp
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

                                                <!-- Quantity Input -->
                                                <label class="text-wood-800 dark:text-wood-100">تعداد: {{$item['qty']}}</label>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-3 mb-3">
                        <!-- Delivery Address Review -->
                        <div class="bg-white  dark:bg-wood-900 rounded-xl shadow-lg p-6 animate-fade-in">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class=" font-semibold text-wood-900 dark:text-wood-100">آدرس تحویل</h2>

                            </div>
                            <!-- Divider -->
                            <div class="h-px mb-3 bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
                            <div id="address-display" class="bg-wood-50 dark:bg-wood-800 rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-wood-600 dark:text-wood-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <div>
                                        @php $address = auth()->user()->addresses()->where('id',session('checkout.address'))->first();  @endphp

                                        <p class="text-wood-700 dark:text-wood-300 text-sm leading-relaxed">{{$address->province->title}},{{$address->city->title}}</p>
                                        <p class="text-wood-700 dark:text-wood-300 text-sm leading-relaxed">{{$address->address}}</p>
                                        <p class="text-wood-700 dark:text-wood-300 text-sm leading-relaxed">{{$address->name}} {{$address->family}}</p>
                                        <p class="text-wood-600 dark:text-wood-400 text-sm mt-2">موبایل : {{$address->mobile}}</p>
                                        <p class="text-wood-600 dark:text-wood-400 text-sm mt-2">کد پستی: {{$address->postal_code}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- Payment Method -->
                            <div class="  bg-white dark:bg-wood-900 rounded-xl shadow-lg p-6 animate-fade-in">
                                <h2 class=" font-semibold text-wood-900 dark:text-wood-100 mb-6">روش پرداخت</h2>
                                <!-- Divider -->
                                <div class="h-px mb-3 bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
                                <div class="mb-2"><label class="flex items-center gap-4 p-4 border-2 border-wood-300 dark:border-wood-700 rounded-lg cursor-pointer hover:border-wood-500 dark:hover:border-wood-500 smooth-transition has-[:checked]:border-wood-600 has-[:checked]:bg-wood-50 dark:has-[:checked]:bg-wood-800">
                                        <input type="radio"  name="payment" value="zarinpal" checked  class="w-5 h-5 text-wood-600 focus:ring-wood-500">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2">
                                                <svg class="w-6 h-6 text-wood-600 dark:text-wood-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                                </svg><span class="text-sm text-wood-900 dark:text-wood-100">پرداخت آنلاین</span>
                                            </div>
                                            <p class="text-sm text-wood-600 dark:text-wood-400 mr-8 mt-1">زرین پال</p>
                                        </div></label>
                                </div>
                                <div class="mb-2"><label class="flex items-center gap-4 p-4 border-2 border-wood-300 dark:border-wood-700 rounded-lg cursor-pointer hover:border-wood-500 dark:hover:border-wood-500 smooth-transition has-[:checked]:border-wood-600 has-[:checked]:bg-wood-50 dark:has-[:checked]:bg-wood-800">
                                        <input type="radio"  name="payment" value="bitpay"  class="w-5 h-5 text-wood-600 focus:ring-wood-500">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2">
                                                <svg class="w-6 h-6 text-wood-600 dark:text-wood-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                                </svg><span class="text-sm text-wood-900 dark:text-wood-100">پرداخت آنلاین</span>
                                            </div>
                                            <p class="text-sm text-wood-600 dark:text-wood-400 mr-8 mt-1"> BitPay</p>
                                        </div></label>
                                </div>
                            </div>
                        </div>
                            <!-- Order Summary -->

                        <div class="grid md:grid-cols-2 gap-4 w-full  ">
                            <!-- Shipping Method -->
                            <div class="bg-white dark:bg-wood-900 rounded-xl shadow-lg p-6 animate-fade-in">
                                <h2 class=" font-semibold text-wood-900 dark:text-wood-100 mb-6">روش ارسال</h2>
                                <!-- Divider -->
                                <div class="h-px mb-3 bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
                                <div class="space-y-3">

                                    @if($barbary_cost)
                                    <label class="flex items-center gap-4 py-2 px-4 border-2 border-wood-300 dark:border-wood-700 rounded-lg cursor-pointer hover:border-wood-500 dark:hover:border-wood-500 smooth-transition has-[:checked]:border-wood-600 has-[:checked]:bg-wood-50 dark:has-[:checked]:bg-wood-800">
                                        <input type="radio" name="shipping_barbary" value="express" checked class="w-5 h-5 text-wood-600 focus:ring-wood-500">
                                        <div class="flex-1">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-2">
                                                    <i  class="w-6 h-6 text-wood-600 dark:text-wood-400 fa fa-truck"></i>
                                                    <span class="text-sm text-wood-900 dark:text-wood-100 ">محصولات سنگین</span>
                                                    <span class="text-sm text-wood-900 dark:text-wood-100">ارسال با باربری</span>
                                                </div><span class="text-sm text-wood-600 dark:text-wood-400">{{number_format($barbary_cost)}} تومان</span>
                                            </div>
                                            <p class="text-sm text-wood-600 dark:text-wood-400 mr-8 mt-1">تحویل در 2 تا 4 روز کاری</p>
                                        </div></label>

                                    @endif
                                        @if($post_cost)
                                        <label class="flex items-center gap-4 py-2 px-4 border-2 border-wood-300 dark:border-wood-700 rounded-lg cursor-pointer hover:border-wood-500 dark:hover:border-wood-500 smooth-transition has-[:checked]:border-wood-600 has-[:checked]:bg-wood-50 dark:has-[:checked]:bg-wood-800">
                                            <input type="radio" name="shipping_post" checked value="post" class="w-5 h-5 text-wood-600 focus:ring-wood-500">
                                        <div class="flex-1">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-2">
                                                    <svg class="w-6 h-6 text-wood-600 dark:text-wood-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                    </svg><span class="text-sm text-wood-900 dark:text-wood-100">پست پیشتاز</span>
                                                </div><span class="text-sm text-wood-600 dark:text-wood-400">{{number_format($post_cost)}} تومان</span>
                                            </div>
                                            <p class="text-sm text-wood-600 dark:text-wood-400 mr-8 mt-1">تحویل در ۵ تا ۷ روز کاری</p>
                                        </div></label>
                                            @endif
                                        <div id="address-display" class="bg-wood-50 dark:bg-wood-800 rounded-lg p-4">
                                            <div class="flex items-start gap-3">
                                                <i class="fa fa-truck w-6 h-6 text-wood-600 dark:text-wood-400 mt-1 flex-shrink-0" >
                                                </i>
                                                <div>

                                                    <p class="text-wood-700 dark:text-wood-300 text-sm leading-relaxed">محصولات سنگین با باربری ارسال خواهد شد.</p>

                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <!-- Order Summary Card -->
                            <div class=" bg-white  dark:bg-wood-900 rounded-xl shadow-lg p-6 animate-fade-in">


                                <h3 class=" text-wood-800 dark:text-wood-100 mb-3 mt-3 flex items-center">
                                    <svg class="w-5 h-5 ml-2 text-blue-500" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                    خلاصه سفارش
                                </h3>
                                <!-- Divider -->
                                <div class="h-px mb-3 bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
                                <div class="space-y-4 mb-6">
                                    <div class="flex justify-between text-wood-600 dark:text-wood-300">
                                        <span>جمع کل محصولات:</span>
                                        <span>{{ number_format($wholePrice) }} تومان</span>
                                    </div>
                                    <div class="flex justify-between text-wood-600 dark:text-wood-300">
                                        <span>هزینه ارسال:</span>
                                        @php session()->put('shipping_cost',$shipping_cost); @endphp
                                        <span>{{ number_format($shipping_cost) }} تومان</span>
                                    </div>
                                    <div class="flex justify-between text-green-600 dark:text-green-400">
                                        <span>تخفیف:</span>
                                        <span>{{ number_format($wholeDiscount) }} تومان</span>
                                    </div>

                                    <!-- Divider -->
                                    <div class="h-px bg-gradient-to-r from-transparent via-wood-300 dark:via-wood-600 to-transparent"></div>
                                    <div
                                        class="flex justify-between text-lg font-bold text-wood-800 dark:text-wood-100">
                                        <span>مبلغ قابل پرداخت:</span>
                                        <span class="text-blue-600 dark:text-blue-400">{{ number_format($wholePrice-$wholeDiscount+$shipping_cost) }} تومان</span>
                                    </div>
                                </div>

                                <a id="enabledPaymentButton" href="{{route('shop.cart.checkout')}}"
                                   class=" w-full bg-green-800 hover:from-wood-600 hover:to-wood-700 text-white font-semibold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl flex items-center justify-center">
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                    </svg>
                                    ادامه پرداخت
                                </a>
                                <a href="/cart"
                                   class="mt-5 w-full bg-gradient-to-r from-wood-500 to-wood-800 hover:from-wood-600 hover:to-wood-950 text-white font-semibold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl flex items-center justify-center">
                                    <span class="fas fa-arrow-right ml-3"> </span>
                                    برگشت
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
        $("#province").on('change',function(){

            $.ajax({
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
            })
        });

        $("#address-form").on('submit',function(e){
            e.preventDefault();
            formData = $(this).serialize();

            $.ajax({
                url: '/addAddress',
                type: 'POST',
                data:formData,
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(res){

                    savedSelect = $("#saved-addresses");
                    savedSelect.append(`<option value="${res.address.id}" selected >${res.address.address}</option>`);
                    $(".address-alert").toggleClass('hidden');
                    $('#new-address-toggle').click();
                },

            });
        });
        $('[name="payment"]').on('click',function(){
            let gate = $(this).val();
            $.ajax({
                url:'/cart/gateway',
                data: {gateway : gate},
                type:'post',
                headers : {'X-CSRF-TOKEN':'{{csrf_token()}}'},

            });
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
