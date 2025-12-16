<!doctype html>
<html lang="fa" dir="rtl" class="page-html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تایید خرید</title>

    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <style>
        body {
            box-sizing: border-box;
            direction:rtl !important;
        }

        .page-html {
            height: 100%;
        }

        .page-body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Vazirmatn', Arial, sans-serif;
            background: linear-gradient(135deg, #EBF4FF 0%, #E8D8F5 50%, #FFE8F0 100%);
        }

        .main-wrapper {
            width: 100%;
            height: 100%;
            overflow: auto;
            padding: 32px 16px;
        }

        .email-container {
            max-width: 650px;
            margin: 0 auto;
        }

        /* Shop Name Section */
        .shop-header {
            text-align: center;
            margin-bottom: 16px;
            background: #eee;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);

        }

        .shop-badge {
            display: inline-block;
            border-radius: 16px;
            padding: 16px 32px;
        }

        .shop-badge-inner {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .shop-icon {
            width: 40px;
            height: 40px;
            color: #92400e;
        }

        .shop-name {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
            color: #78350f;
        }

        /* Success Icon Section */
        .success-section {
            text-align: center;
            margin-bottom: 24px;
        }

        .success-icon-wrapper {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
        }

        .success-checkmark {
            width: 48px;
            height: 48px;
            color: white;
        }

        .email-title {
            margin: 0 0 8px 0;
            font-size: 30px;
            font-weight: 700;
            color: #111827;
        }

        .email-subtitle {
            margin: 0;
            color: #6b7280;
            font-size: 16px;
        }

        /* Card Styles */
        .email-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
        }

        .card-center {
            text-align: center;
        }

        .greeting-text {
            margin: 0 0 12px 0;
            font-size: 18px;
            color: #374151;
            font-weight: 500;
        }

        .thank-you-text {
            margin: 0;
            color: #6b7280;
            line-height: 1.7;
            font-size: 16px;
        }

        /* Section Headers */
        .section-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            padding-bottom: 16px;
        }

        .section-header-blue {
            border-bottom: 2px solid #DBEAFE;
        }

        .section-header-green {
            border-bottom: 2px solid #D1FAE5;
        }

        .section-header-purple {
            border-bottom: 2px solid #E9D5FF;
        }

        .section-header-orange {
            border-bottom: 2px solid #FED7AA;
        }

        .section-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section-icon-blue {
            background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
        }

        .section-icon-green {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }

        .section-icon-purple {
            background: linear-gradient(135deg, #a855f7 0%, #ec4899 100%);
        }

        .section-icon-orange {
            background: linear-gradient(135deg, #f97316 0%, #dc2626 100%);
        }

        .section-icon svg {
            width: 20px;
            height: 20px;
            color: white;
        }

        .section-title {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
            color: #111827;
        }

        /* Info Rows */
        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 14px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #6b7280;
            font-size: 16px;
        }

        .info-value {
            color: #111827;
            font-weight: 500;
            font-size: 16px;
        }

        /* Product Items */
        .product-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px;
            border-bottom: 1px solid #e5e7eb;
        }

        .product-item:last-child {
            border-bottom: none;
        }

        .product-details {
            display: flex;
            align-items: center;
            gap: 16px;
            flex: 1;
        }

        .product-icon-wrapper {
            width: 64px;
            height: 64px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .product-icon-blue {
            background: linear-gradient(135deg, #DBEAFE 0%, #BFDBFE 100%);
        }

        .product-icon-green {
            background: linear-gradient(135deg, #D1FAE5 0%, #A7F3D0 100%);
        }

        .product-icon-purple {
            background: linear-gradient(135deg, #E9D5FF 0%, #DDD6FE 100%);
        }

        .product-icon-wrapper svg {
            width: 32px;
            height: 32px;
        }

        .product-icon-blue svg {
            color: #2563eb;
        }

        .product-icon-green svg {
            color: #10b981;
        }

        .product-icon-purple svg {
            color: #a855f7;
        }

        .product-name {
            margin: 0 0 4px 0;
            font-weight: 700;
            color: #111827;
            font-size: 16px;
        }

        .product-quantity-wrapper {
            margin: 0;
            font-size: 14px;
            color: #6b7280;
        }

        .product-quantity {
            font-weight: 600;
        }

        .price-badge {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            white-space: nowrap;
            margin-right: 12px;
        }

        /* Summary Section */
        .total-row {
            background: linear-gradient(135deg, #eff6ff 0%, #e0e7ff 100%);
            padding: 20px;
            border-radius: 8px;
            margin-top: 10px;
        }

        .total-row-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-label {
            font-size: 20px;
            font-weight: 700;
            color: #111827;
        }

        .total-amount {
            font-size: 24px;
            font-weight: 700;
            color: #2563eb;
        }

        /* Tracking Section */
        .tracking-card {
            background: linear-gradient(135deg, #EBF8FF 0%, #E0E7FF 100%);
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
        }

        .tracking-content {
            display: flex;
            gap: 16px;
        }

        .tracking-icon-wrapper {
            flex-shrink: 0;
        }

        .tracking-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tracking-icon svg {
            width: 24px;
            height: 24px;
            color: white;
        }

        .tracking-text {
            flex: 1;
        }

        .tracking-title {
            margin: 0 0 8px 0;
            font-size: 18px;
            font-weight: 700;
            color: #111827;
        }

        .tracking-message {
            margin: 0;
            color: #374151;
            line-height: 1.7;
            font-size: 16px;
        }

        /* Footer */
        .footer-card {
            background: #f9fafb;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
        }

        .footer-content {
            text-align: center;
            margin-bottom: 16px;
        }

        .help-header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 12px;
        }

        .help-icon {
            width: 24px;
            height: 24px;
            color: #2563eb;
        }

        .help-title {
            margin: 0;
            font-size: 18px;
            font-weight: 700;
            color: #111827;
        }

        .support-text {
            margin: 0 0 16px 0;
            color: #6b7280;
            line-height: 1.7;
            font-size: 16px;
        }

        .action-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .action-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            color: white;
        }

        .action-button-green {
            background: #16a34a;
        }

        .action-button-blue {
            background: #2563eb;
        }

        .action-button svg {
            width: 16px;
            height: 16px;
        }

        .footer-divider {
            border-top: 1px solid #d1d5db;
            padding-top: 16px;
        }

        .footer-thanks {
            text-align: center;
            font-size: 14px;
            color: #6b7280;
            margin: 0 0 8px 0;
        }

        .footer-copyright {
            text-align: center;
            font-size: 12px;
            color: #9ca3af;
            margin: 0 0 16px 0;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
        }

        .footer-link {
            font-size: 12px;
            color: #2563eb;
            text-decoration: none;
        }

        .footer-separator {
            color: #9ca3af;
        }
    </style>
    <style>@view-transition { navigation: auto; }</style>

    <script src="https://cdn.tailwindcss.com" type="text/javascript"></script>
</head>
<body class="page-body">
<div class="main-wrapper">
    <div class="email-container"><!-- Shop Name -->
        <div class="shop-header">
            <div class="shop-badge">
                <div class="shop-badge-inner">

                    <a href="/" >
                        <h2 id="shop-name" class="shop-name">صنایع چوبی خزرچوب</h2>
                    </a>
                </div>
            </div>
        </div><!-- Success Icon -->
        <div class="success-section">

            <h1 id="email-subject" class="email-title" style="text-align:center:font-size:15px;">خرید شما با موفقیت انجام شد!</h1>
            <p class="email-subtitle" style="text-align:center">از خرید شما سپاسگزاریم</p>
        </div><!-- Greeting Message -->
        <div class="email-card card-center">
            <p id="greeting" class="greeting-text" style="text-align: right">سلام،  <b>{{$user->name }} {{$user->family}} </b>   عزیز</p>
            <p id="thank-you-message" class="thank-you-text" style="text-align: right">از اینکه فروشگاه ما را برای خرید انتخاب کردید صمیمانه سپاسگزاریم. سفارش شما با موفقیت ثبت شد و در اسرع وقت برای ارسال آماده خواهد شد.</p>
        </div><!-- Order Information -->
        <div class="email-card">
            <div class="section-header section-header-blue">
                <div class="section-icon section-icon-blue">
                    <svg fill="currentColor" viewbox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" /> <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" />
                    </svg>
                </div>
                <h2 class="section-title">اطلاعات سفارش</h2>
            </div>
            <div>
                <div class="info-row"><span id="order-number-label" class="info-label">کد رهگیری :</span> <span id="order-number" class="info-value">{{$order->id}}</span>
                </div>
                <div class="info-row"><span id="order-date-label" class="info-label">تاریخ سفارش:</span> <span id="order-date" class="info-value">{{\Morilog\Jalali\Jalalian::forge($order->updated_at)->format('l d F Y')}} - ساعت  {{\Morilog\Jalali\Jalalian::forge($order->updated_at)->format('H:i')}}</span>
                </div>
                <div class="info-row"><span id="payment-method-label" class="info-label">روش پرداخت:</span> <span id="payment-method" class="info-value">پرداخت آنلاین</span>
                </div>
            </div>
        </div><!-- Products List -->
        <div class="email-card">
            <div class="section-header section-header-purple">
                <div class="section-icon section-icon-purple">
                    <svg fill="currentColor" viewbox="0 0 20 20"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                    </svg>
                </div>
                <h2 id="products-title" class="section-title">محصولات خریداری شده</h2>
            </div>
            <div><!-- Product 1 -->
                @foreach($order->items as $item)
                <div class="product-item">
                    <div class="product-details">
                        <div class="product-icon-wrapper product-icon-blue">
                            <img src="{{asset(str_replace(['big','1500'],['thumb','100'],$item->item->main_image))}}" style="width:63px;height:63px;border-radius:7px" />
                        </div>
                        <div>
                            <a href="{{route('show.product',['product'=>$item->item->id,'name'=>$item->item->name])}}">
                            <h3 id="product1-name" class="product-name">{{$item->item->name}}</h3>
                            <p class="product-quantity-wrapper">تعداد: <span id="product1-quantity" class="product-quantity">{{$item->quantity}} </span></p>
                            </a>
                        </div>
                    </div>
                    <div class="price-badge"><span id="product1-price">{{number_format($item->price)}}</span> تومان
                    </div>
                </div>
                @endforeach

            </div>
        </div><!-- Order Summary -->
        <div class="email-card">
            <div class="section-header section-header-orange">
                <div class="section-icon section-icon-orange">
                    <svg fill="currentColor" viewbox="0 0 20 20"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" /> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" />
                    </svg>
                </div>
                <h2 class="section-title">خلاصه مالی</h2>
            </div>
            <div>
                <div class="info-row"><span id="subtotal-label" class="info-label">جمع جزء:</span> <span id="subtotal" class="info-value">{{number_format($order->price)}} تومان</span>
                </div>
                <div class="info-row"><span id="shipping-label" class="info-label">هزینه ارسال:</span> <span id="shipping-cost" class="info-value">{{number_format($order->shipping_price)}} تومان</span>
                </div>
                <div class="info-row"><span id="tax-label" class="info-label">مالیات بر ارزش افزوده (۹٪):</span> <span id="tax-amount" class="info-value">0 تومان</span>
                </div>
                <div class="total-row">
                    <div class="total-row-inner"><span id="total-label" class="total-label">جمع کل:</span> <span class="total-amount"> <span id="total-amount">{{number_format($order->price+$order->shipping_price)}}</span> تومان </span>
                    </div>
                </div>
            </div>
        </div><!-- Tracking Info -->

        <div class="footer-card">

            <div class="footer-divider">
                <p class="footer-thanks">از اعتماد شما سپاسگزاریم</p>
                <p class="footer-copyright">© ۱۴۰۳ <span id="company-name">فروشگاه آنلاین {{env('APP_NAME')}}</span> - تمامی حقوق محفوظ است</p>

            </div>
        </div>
    </div>
</div>

</body>
</html>
