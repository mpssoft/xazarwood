<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مجموعه چوبی خزر - محصولات چوبی</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Vazir:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <style>
        body {
            box-sizing: border-box;
            font-family: 'Vazir', sans-serif;
        }

        .product-card {
            transition: all 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(139, 69, 19, 0.15);
        }

        .wood-texture {
            background-image:
                linear-gradient(45deg, rgba(160, 82, 45, 0.1) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(160, 82, 45, 0.1) 25%, transparent 25%),
                linear-gradient(45deg, transparent 75%, rgba(160, 82, 45, 0.1) 75%),
                linear-gradient(-45deg, transparent 75%, rgba(160, 82, 45, 0.1) 75%);
            background-size: 20px 20px;
            background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .badge-bestseller {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: white;
        }

        .badge-new {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
        }

        .badge-sale {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
        }

        .wood-badge {
            background: rgba(92, 51, 23, 0.9);
            color: #fef3c7;
        }

        .rating-stars {
            color: #fbbf24;
        }

        .btn-primary {
            background: linear-gradient(135deg, #92400e, #78350f);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #78350f, #451a03);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(120, 53, 15, 0.3);
        }

        .btn-secondary {
            background: rgba(217, 119, 6, 0.1);
            color: #92400e;
            border: 1px solid rgba(217, 119, 6, 0.3);
        }

        .btn-secondary:hover {
            background: rgba(217, 119, 6, 0.2);
            border-color: rgba(217, 119, 6, 0.5);
        }

        .filter-chip {
            background: white;
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .filter-chip:hover {
            border-color: #92400e;
            background: #fef3c7;
            transform: translateY(-2px);
        }

        .hero-pattern {
            background-image: radial-gradient(circle at 25px 25px, rgba(139, 69, 19, 0.1) 2%, transparent 0%),
            radial-gradient(circle at 75px 75px, rgba(160, 82, 45, 0.1) 2%, transparent 0%);
            background-size: 100px 100px;
        }
    </style>
    <style>@view-transition { navigation: auto; }</style>
    <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
    <script src="/_sdk/element_sdk.js" type="text/javascript"></script>
</head>
<body class="bg-gradient-to-br from-amber-50 via-orange-50 to-yellow-50 text-amber-900 min-h-full hero-pattern"><!-- Header -->
<header class="text-center py-16 px-4">
    <div class="max-w-4xl mx-auto">
        <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-amber-800 to-amber-900 rounded-full mb-8 shadow-2xl"><i class="fas fa-tree text-amber-100 text-4xl"></i>
        </div>
        <h1 class="text-5xl md:text-6xl font-bold text-amber-900 mb-6 leading-tight">مجموعه چوبی خزر</h1>
        <p class="text-xl md:text-2xl text-amber-700 mb-8 leading-relaxed">کیفیت برتر، طراحی منحصر به فرد و زیبایی طبیعی چوب در هر محصول</p>
        <div class="flex flex-wrap items-center justify-center gap-8 text-amber-600">
            <div class="flex items-center space-x-3 space-x-reverse">
                <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center"><i class="fas fa-shipping-fast text-amber-800 text-lg"></i>
                </div><span class="font-medium">ارسال رایگان</span>
            </div>
            <div class="flex items-center space-x-3 space-x-reverse">
                <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center"><i class="fas fa-certificate text-amber-800 text-lg"></i>
                </div><span class="font-medium">ضمانت کیفیت</span>
            </div>
            <div class="flex items-center space-x-3 space-x-reverse">
                <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center"><i class="fas fa-tools text-amber-800 text-lg"></i>
                </div><span class="font-medium">ساخت دست</span>
            </div>
        </div>
    </div>
</header><!-- Filter Section -->
<section class="max-w-7xl mx-auto px-4 mb-12">
    <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl border border-amber-200/50 p-8 wood-texture">
        <h2 class="text-2xl font-bold text-amber-900 mb-6 text-center"><i class="fas fa-filter ml-3"></i>دسته‌بندی محصولات</h2>
        <div class="flex flex-wrap justify-center gap-4">
            <div class="filter-chip px-6 py-3 rounded-2xl cursor-pointer font-medium"><i class="fas fa-th ml-2 text-amber-600"></i>همه محصولات
            </div>
            <div class="filter-chip px-6 py-3 rounded-2xl cursor-pointer font-medium"><i class="fas fa-table ml-2 text-amber-600"></i>میز و صندلی
            </div>
            <div class="filter-chip px-6 py-3 rounded-2xl cursor-pointer font-medium"><i class="fas fa-archive ml-2 text-amber-600"></i>کابینت و قفسه
            </div>
            <div class="filter-chip px-6 py-3 rounded-2xl cursor-pointer font-medium"><i class="fas fa-couch ml-2 text-amber-600"></i>مبلمان اداری
            </div>
            <div class="filter-chip px-6 py-3 rounded-2xl cursor-pointer font-medium"><i class="fas fa-star ml-2 text-amber-600"></i>تزئینی و هنری
            </div>
        </div>
    </div>
</section><!-- Products Grid -->
<main class="max-w-7xl mx-auto px-4 pb-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8"><!-- Product 1: میز ناهارخوری چوب راش -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl border border-amber-200/50 overflow-hidden">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-amber-100 to-amber-200 flex items-center justify-center">
                    <div class="text-center text-amber-700"><i class="fas fa-table text-6xl mb-4"></i>
                        <p class="text-sm font-medium">میز ناهارخوری راش</p>
                    </div>
                </div>
                <div class="absolute top-4 right-4 flex flex-col space-y-2"><span class="badge badge-bestseller"> <i class="fas fa-fire ml-1"></i>پرفروش </span> <span class="badge badge-sale"> <i class="fas fa-tag ml-1"></i>تخفیف ۱۵٪ </span>
                </div>
                <div class="absolute bottom-4 left-4"><span class="badge wood-badge"> <i class="fas fa-tree ml-1"></i>چوب راش </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-amber-900 leading-tight">میز ناهارخوری چوب راش</h3><button class="text-amber-400 hover:text-red-500 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-amber-700 mb-4 leading-relaxed">میز ناهارخوری ۶ نفره از چوب راش طبیعی با طراحی کلاسیک و مدرن</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-green-700">۳,۸۰۰,۰۰۰ تومان</span> <span class="text-sm text-amber-500 line-through">۴,۵۰۰,۰۰۰ تومان</span>
                    </div><span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">میز</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-amber-600">
                    <div class="flex items-center space-x-2 space-x-reverse"><i class="fas fa-ruler-combined"></i> <span>۱۸۰×۹۰×۷۵ سم</span>
                    </div>
                    <div class="flex items-center space-x-1 space-x-reverse">
                        <div class="flex rating-stars"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                        </div><span class="text-amber-700 font-medium">(۱۲۷)</span>
                    </div>
                </div>
                <div class="flex space-x-3 space-x-reverse"><button class="flex-1 btn-primary text-white px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-shopping-cart ml-2"></i>افزودن به سبد </button> <button class="btn-secondary px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 2: صندلی اداری چوب بلوط -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl border border-amber-200/50 overflow-hidden">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-amber-100 to-amber-200 flex items-center justify-center">
                    <div class="text-center text-amber-700"><i class="fas fa-chair text-6xl mb-4"></i>
                        <p class="text-sm font-medium">صندلی اداری بلوط</p>
                    </div>
                </div>
                <div class="absolute top-4 right-4"><span class="badge badge-new"> <i class="fas fa-star ml-1"></i>جدید </span>
                </div>
                <div class="absolute bottom-4 left-4"><span class="badge wood-badge"> <i class="fas fa-tree ml-1"></i>چوب بلوط </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-amber-900 leading-tight">صندلی اداری چوب بلوط</h3><button class="text-amber-400 hover:text-red-500 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-amber-700 mb-4 leading-relaxed">صندلی اداری ارگونومیک از چوب بلوط با نشیمن چرمی طبیعی</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-amber-900">۲,۸۰۰,۰۰۰ تومان</span>
                    </div><span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">صندلی</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-amber-600">
                    <div class="flex items-center space-x-2 space-x-reverse"><i class="fas fa-ruler-combined"></i> <span>۶۰×۶۰×۱۱۰ سم</span>
                    </div>
                    <div class="flex items-center space-x-1 space-x-reverse">
                        <div class="flex rating-stars"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star text-gray-300"></i>
                        </div><span class="text-amber-700 font-medium">(۸۹)</span>
                    </div>
                </div>
                <div class="flex space-x-3 space-x-reverse"><button class="flex-1 btn-primary text-white px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-shopping-cart ml-2"></i>افزودن به سبد </button> <button class="btn-secondary px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 3: کتابخانه چوب گردو -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl border border-amber-200/50 overflow-hidden">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-amber-100 to-amber-200 flex items-center justify-center">
                    <div class="text-center text-amber-700"><i class="fas fa-book text-6xl mb-4"></i>
                        <p class="text-sm font-medium">کتابخانه گردو</p>
                    </div>
                </div>
                <div class="absolute top-4 right-4 flex flex-col space-y-2"><span class="badge badge-bestseller"> <i class="fas fa-fire ml-1"></i>پرفروش </span> <span class="badge badge-sale"> <i class="fas fa-tag ml-1"></i>تخفیف ۱۲٪ </span>
                </div>
                <div class="absolute bottom-4 left-4"><span class="badge wood-badge"> <i class="fas fa-tree ml-1"></i>چوب گردو </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-amber-900 leading-tight">کتابخانه چوب گردو</h3><button class="text-amber-400 hover:text-red-500 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-amber-700 mb-4 leading-relaxed">کتابخانه ۵ طبقه از چوب گردو با قفسه‌های قابل تنظیم</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-green-700">۵,۵۰۰,۰۰۰ تومان</span> <span class="text-sm text-amber-500 line-through">۶,۲۰۰,۰۰۰ تومان</span>
                    </div><span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">کابینت</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-amber-600">
                    <div class="flex items-center space-x-2 space-x-reverse"><i class="fas fa-ruler-combined"></i> <span>۱۲۰×۴۰×۲۰۰ سم</span>
                    </div>
                    <div class="flex items-center space-x-1 space-x-reverse">
                        <div class="flex rating-stars"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                        </div><span class="text-amber-700 font-medium">(۱۵۶)</span>
                    </div>
                </div>
                <div class="flex space-x-3 space-x-reverse"><button class="flex-1 btn-primary text-white px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-shopping-cart ml-2"></i>افزودن به سبد </button> <button class="btn-secondary px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 4: میز کار چوب توسکا -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl border border-amber-200/50 overflow-hidden">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-amber-100 to-amber-200 flex items-center justify-center">
                    <div class="text-center text-amber-700"><i class="fas fa-desktop text-6xl mb-4"></i>
                        <p class="text-sm font-medium">میز کار توسکا</p>
                    </div>
                </div>
                <div class="absolute top-4 right-4"><span class="badge badge-new"> <i class="fas fa-star ml-1"></i>جدید </span>
                </div>
                <div class="absolute bottom-4 left-4"><span class="badge wood-badge"> <i class="fas fa-tree ml-1"></i>چوب توسکا </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-amber-900 leading-tight">میز کار چوب توسکا</h3><button class="text-amber-400 hover:text-red-500 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-amber-700 mb-4 leading-relaxed">میز کار مدرن از چوب توسکا با کشوهای مخفی و سیستم مدیریت کابل</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-amber-900">۳,۵۰۰,۰۰۰ تومان</span>
                    </div><span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">میز</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-amber-600">
                    <div class="flex items-center space-x-2 space-x-reverse"><i class="fas fa-ruler-combined"></i> <span>۱۴۰×۷۰×۷۵ سم</span>
                    </div>
                    <div class="flex items-center space-x-1 space-x-reverse">
                        <div class="flex rating-stars"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star text-gray-300"></i>
                        </div><span class="text-amber-700 font-medium">(۷۴)</span>
                    </div>
                </div>
                <div class="flex space-x-3 space-x-reverse"><button class="flex-1 btn-primary text-white px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-shopping-cart ml-2"></i>افزودن به سبد </button> <button class="btn-secondary px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 5: صندلی غذاخوری چوب راش -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl border border-amber-200/50 overflow-hidden">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-amber-100 to-amber-200 flex items-center justify-center">
                    <div class="text-center text-amber-700"><i class="fas fa-chair text-6xl mb-4"></i>
                        <p class="text-sm font-medium">صندلی غذاخوری</p>
                    </div>
                </div>
                <div class="absolute top-4 right-4"><span class="badge badge-sale"> <i class="fas fa-tag ml-1"></i>تخفیف ۱۸٪ </span>
                </div>
                <div class="absolute bottom-4 left-4"><span class="badge wood-badge"> <i class="fas fa-tree ml-1"></i>چوب راش </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-amber-900 leading-tight">صندلی غذاخوری راش</h3><button class="text-amber-400 hover:text-red-500 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-amber-700 mb-4 leading-relaxed">صندلی غذاخوری راحت از چوب راش با نشیمن پارچه‌ای</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-green-700">۹۸۰,۰۰۰ تومان</span> <span class="text-sm text-amber-500 line-through">۱,۲۰۰,۰۰۰ تومان</span>
                    </div><span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">صندلی</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-amber-600">
                    <div class="flex items-center space-x-2 space-x-reverse"><i class="fas fa-ruler-combined"></i> <span>۴۵×۵۰×۸۵ سم</span>
                    </div>
                    <div class="flex items-center space-x-1 space-x-reverse">
                        <div class="flex rating-stars"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star text-gray-300"></i>
                        </div><span class="text-amber-700 font-medium">(۲۰۳)</span>
                    </div>
                </div>
                <div class="flex space-x-3 space-x-reverse"><button class="flex-1 btn-primary text-white px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-shopping-cart ml-2"></i>افزودن به سبد </button> <button class="btn-secondary px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 6: کمد لباس چوب بلوط -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl border border-amber-200/50 overflow-hidden">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-amber-100 to-amber-200 flex items-center justify-center">
                    <div class="text-center text-amber-700"><i class="fas fa-door-open text-6xl mb-4"></i>
                        <p class="text-sm font-medium">کمد لباس بلوط</p>
                    </div>
                </div>
                <div class="absolute top-4 right-4"><span class="badge badge-new"> <i class="fas fa-star ml-1"></i>جدید </span>
                </div>
                <div class="absolute bottom-4 left-4"><span class="badge wood-badge"> <i class="fas fa-tree ml-1"></i>چوب بلوط </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-amber-900 leading-tight">کمد لباس چوب بلوط</h3><button class="text-amber-400 hover:text-red-500 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-amber-700 mb-4 leading-relaxed">کمد لباس ۳ درب از چوب بلوط با آینه و کشوهای داخلی</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-amber-900">۸,۵۰۰,۰۰۰ تومان</span>
                    </div><span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">کابینت</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-amber-600">
                    <div class="flex items-center space-x-2 space-x-reverse"><i class="fas fa-ruler-combined"></i> <span>۱۸۰×۶۰×۲۲۰ سم</span>
                    </div>
                    <div class="flex items-center space-x-1 space-x-reverse">
                        <div class="flex rating-stars"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                        </div><span class="text-amber-700 font-medium">(۴۵)</span>
                    </div>
                </div>
                <div class="flex space-x-3 space-x-reverse"><button class="flex-1 btn-primary text-white px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-shopping-cart ml-2"></i>افزودن به سبد </button> <button class="btn-secondary px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 7: میز جلو مبلی چوب گردو -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl border border-amber-200/50 overflow-hidden">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-amber-100 to-amber-200 flex items-center justify-center">
                    <div class="text-center text-amber-700"><i class="fas fa-coffee text-6xl mb-4"></i>
                        <p class="text-sm font-medium">میز جلو مبلی</p>
                    </div>
                </div>
                <div class="absolute top-4 right-4 flex flex-col space-y-2"><span class="badge badge-bestseller"> <i class="fas fa-fire ml-1"></i>پرفروش </span> <span class="badge badge-sale"> <i class="fas fa-tag ml-1"></i>تخفیف ۱۶٪ </span>
                </div>
                <div class="absolute bottom-4 left-4"><span class="badge wood-badge"> <i class="fas fa-tree ml-1"></i>چوب گردو </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-amber-900 leading-tight">میز جلو مبلی گردو</h3><button class="text-amber-400 hover:text-red-500 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-amber-700 mb-4 leading-relaxed">میز جلو مبلی شیک از چوب گردو با طراحی مینیمال</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-green-700">۱,۸۵۰,۰۰۰ تومان</span> <span class="text-sm text-amber-500 line-through">۲,۲۰۰,۰۰۰ تومان</span>
                    </div><span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">میز</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-amber-600">
                    <div class="flex items-center space-x-2 space-x-reverse"><i class="fas fa-ruler-combined"></i> <span>۱۲۰×۶۰×۴۵ سم</span>
                    </div>
                    <div class="flex items-center space-x-1 space-x-reverse">
                        <div class="flex rating-stars"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star text-gray-300"></i>
                        </div><span class="text-amber-700 font-medium">(۹۸)</span>
                    </div>
                </div>
                <div class="flex space-x-3 space-x-reverse"><button class="flex-1 btn-primary text-white px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-shopping-cart ml-2"></i>افزودن به سبد </button> <button class="btn-secondary px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div><!-- Product 8: قفسه دیواری چوب توسکا -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl border border-amber-200/50 overflow-hidden">
            <div class="relative">
                <div class="h-64 bg-gradient-to-br from-amber-100 to-amber-200 flex items-center justify-center">
                    <div class="text-center text-amber-700"><i class="fas fa-th-large text-6xl mb-4"></i>
                        <p class="text-sm font-medium">قفسه دیواری</p>
                    </div>
                </div>
                <div class="absolute top-4 right-4"><span class="badge badge-new"> <i class="fas fa-star ml-1"></i>جدید </span>
                </div>
                <div class="absolute bottom-4 left-4"><span class="badge wood-badge"> <i class="fas fa-tree ml-1"></i>چوب توسکا </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold text-amber-900 leading-tight">قفسه دیواری توسکا</h3><button class="text-amber-400 hover:text-red-500 transition-colors"> <i class="fas fa-heart text-xl"></i> </button>
                </div>
                <p class="text-amber-700 mb-4 leading-relaxed">قفسه دیواری مدرن از چوب توسکا برای نمایش اشیاء تزئینی</p>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex flex-col"><span class="text-2xl font-bold text-amber-900">۱,۸۰۰,۰۰۰ تومان</span>
                    </div><span class="bg-amber-200 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">تزئینی</span>
                </div>
                <div class="flex items-center justify-between mb-6 text-sm text-amber-600">
                    <div class="flex items-center space-x-2 space-x-reverse"><i class="fas fa-ruler-combined"></i> <span>۱۰۰×۲۵×۱۵ سم</span>
                    </div>
                    <div class="flex items-center space-x-1 space-x-reverse">
                        <div class="flex rating-stars"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star text-gray-300"></i>
                        </div><span class="text-amber-700 font-medium">(۶۷)</span>
                    </div>
                </div>
                <div class="flex space-x-3 space-x-reverse"><button class="flex-1 btn-primary text-white px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-shopping-cart ml-2"></i>افزودن به سبد </button> <button class="btn-secondary px-4 py-3 rounded-2xl font-medium"> <i class="fas fa-eye"></i> </button>
                </div>
            </div>
        </div>
    </div>
</main><!-- Footer -->
<footer class="bg-gradient-to-r from-amber-800 to-amber-900 text-amber-100 py-16 mt-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <div class="mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-amber-700 rounded-full mb-4"><i class="fas fa-tree text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold mb-2">مجموعه چوبی خزر</h3>
            <p class="text-amber-300">کیفیت برتر در هر محصول</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <div>
                <h4 class="font-bold mb-4">تماس با ما</h4>
                <div class="space-y-2 text-amber-200">
                    <p><i class="fas fa-phone ml-2"></i>۰۲۱-۱۲۳۴۵۶۷۸</p>
                    <p><i class="fas fa-envelope ml-2"></i>info@xazarwood.ir</p>
                    <p><i class="fas fa-map-marker-alt ml-2"></i>تهران، خیابان ولیعصر</p>
                </div>
            </div>
            <div>
                <h4 class="font-bold mb-4">خدمات</h4>
                <div class="space-y-2 text-amber-200">
                    <p>طراحی سفارشی</p>
                    <p>ارسال رایگان</p>
                    <p>نصب و راه‌اندازی</p>
                    <p>خدمات پس از فروش</p>
                </div>
            </div>
            <div>
                <h4 class="font-bold mb-4">شبکه‌های اجتماعی</h4>
                <div class="flex justify-center space-x-4 space-x-reverse"><button class="w-10 h-10 bg-amber-700 hover:bg-amber-600 rounded-full flex items-center justify-center transition-colors"> <i class="fab fa-instagram"></i> </button> <button class="w-10 h-10 bg-amber-700 hover:bg-amber-600 rounded-full flex items-center justify-center transition-colors"> <i class="fab fa-telegram"></i> </button> <button class="w-10 h-10 bg-amber-700 hover:bg-amber-600 rounded-full flex items-center justify-center transition-colors"> <i class="fab fa-whatsapp"></i> </button>
                </div>
            </div>
        </div>
        <div class="border-t border-amber-700 pt-8">
            <p class="text-amber-300">© ۱۴۰۳ مجموعه چوبی خزر. تمامی حقوق محفوظ است.</p>
        </div>
    </div>
</footer>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9971c233a59c49b7',t:'MTc2MTg5OTA5My4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
