@extends('layouts.app')
@push('styles')
    <style>
        body {
            box-sizing: border-box;
        }
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .faq-item {
            transition: all 0.3s ease;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        .faq-answer.active {
            max-height: 500px;
        }
        .faq-icon {
            transition: transform 0.3s ease;
        }
        .faq-icon.active {
            transform: rotate(180deg);
        }
    </style>
    @endpush
 @section('content')

     <div class="bg-wood-50 dark:bg-wood-900 text-wood-900 dark:text-wood-100 min-h-full"><!-- Header -->
    <!-- Hero Section -->
         <section class="relative py-20 overflow-hidden min-h-[600px]"><!-- Background Image -->
             <div class="absolute inset-0 z-0" style="background: url({{asset('/images/tables/big/xazarwood_ir_rustic_table_with_rustic_chairs.jpg')}});background-attachment:fixed;background-size: cover;">
                 <!-- Gradient Overlay -->

         <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-10"></div>
             </div>
         <div class="max-w-6xl mx-auto px-6 relative z-20">
             <div class="text-center fade-in">
                 <div class="inline-block bg-wood-600 dark:bg-wood-500 text-white px-4 py-2 rounded-full text-sm font-medium mb-4"><i class="fas fa-question-circle ml-2"></i> پاسخ به سوالات شما
                 </div>
                 <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">سوالات متداول</h2>
                 <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">پاسخ سوالات رایج درباره محصولات، سفارش‌گذاری و خدمات خزرچوب</p>
             </div>
         </div><!-- Decorative Elements -->
         <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-wood-50 dark:from-wood-900 to-transparent z-20"></div>
     </section>
     <main class="max-w-4xl mx-auto px-6 py-16"><!-- Search Box -->
         <section class="mb-12 fade-in">
             <div class="bg-white dark:bg-wood-800 rounded-2xl shadow-lg p-6">
                 <div class="relative"><input type="text" id="searchInput" placeholder="جستجو در سوالات..." class="w-full px-6 py-4 pr-14 bg-wood-50 dark:bg-wood-700 border border-wood-200 dark:border-wood-600 rounded-xl focus:outline-none focus:ring-2 focus:ring-wood-500 text-wood-900 dark:text-wood-100"> <i class="fas fa-search absolute right-5 top-1/2 transform -translate-y-1/2 text-wood-400"></i>
                 </div>
             </div>
         </section><!-- FAQ Categories -->
         <section class="mb-12 fade-in">
             <div class="flex flex-wrap gap-3 justify-center"><button onclick="filterCategory('all')" class="category-btn active px-6 py-2 bg-wood-600 text-white rounded-full hover:bg-wood-700 transition-colors"> <i class="fas fa-th ml-2"></i> همه سوالات </button> <button onclick="filterCategory('product')" class="category-btn px-6 py-2 bg-wood-100 dark:bg-wood-800 text-wood-700 dark:text-wood-300 rounded-full hover:bg-wood-200 dark:hover:bg-wood-700 transition-colors"> <i class="fas fa-box ml-2"></i> محصولات </button> <button onclick="filterCategory('order')" class="category-btn px-6 py-2 bg-wood-100 dark:bg-wood-800 text-wood-700 dark:text-wood-300 rounded-full hover:bg-wood-200 dark:hover:bg-wood-700 transition-colors"> <i class="fas fa-shopping-cart ml-2"></i> سفارش‌گذاری </button> <button onclick="filterCategory('delivery')" class="category-btn px-6 py-2 bg-wood-100 dark:bg-wood-800 text-wood-700 dark:text-wood-300 rounded-full hover:bg-wood-200 dark:hover:bg-wood-700 transition-colors"> <i class="fas fa-truck ml-2"></i> تحویل </button> <button onclick="filterCategory('care')" class="category-btn px-6 py-2 bg-wood-100 dark:bg-wood-800 text-wood-700 dark:text-wood-300 rounded-full hover:bg-wood-200 dark:hover:bg-wood-700 transition-colors"> <i class="fas fa-heart ml-2"></i> نگهداری </button>
             </div>
         </section><!-- FAQ Items -->
         <section class="space-y-4 fade-in"><!-- Product Questions -->
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="product"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-box text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">چه نوع چوبی برای محصولات استفاده می‌کنید؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         ما از چوب گردو مرغوب و طبیعی استفاده می‌کنیم. چوب گردو به دلیل زیبایی رگه‌های طبیعی، دوام بالا و مقاومت در برابر رطوبت، یکی از بهترین انتخاب‌ها برای ساخت محصولات چوبی است. تمام چوب‌های ما از منابع معتبر تهیه می‌شوند و قبل از استفاده به طور کامل خشک و آماده‌سازی می‌شوند.
                     </div>
                 </div>
             </div>
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="product"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-palette text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">آیا می‌توانم محصول با طراحی سفارشی سفارش دهم؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         بله، حتماً! ما با افتخار محصولات سفارشی با طراحی دلخواه شما می‌سازیم. شما می‌توانید ایده، اندازه، طرح و جزئیات مورد نظر خود را با ما در میان بگذارید. تیم ما با شما مشاوره می‌کند و طرح نهایی را برای تایید ارائه می‌دهد. سپس محصول شما با دقت و عشق ساخته خواهد شد.
                     </div>
                 </div>
             </div>
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="product"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-shield-alt text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">محصولات شما چقدر دوام دارند؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         محصولات ما برای نسل‌ها ساخته شده‌اند. با استفاده از چوب گردو مرغوب، تکنیک‌های دست‌سازی حرفه‌ای و پوشش‌های محافظ با کیفیت، محصولات ما دوام بسیار بالایی دارند. با نگهداری صحیح، محصولات چوبی ما می‌توانند دهه‌ها زیبایی و کارایی خود را حفظ کنند و حتی با گذشت زمان زیباتر شوند.
                     </div>
                 </div>
             </div><!-- Order Questions -->
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="order"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-shopping-cart text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">چگونه می‌توانم سفارش دهم؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         سفارش‌گذاری بسیار آسان است! می‌توانید از طریق تماس تلفنی با شماره‌های ۰۹۱۴۴۸۵۱۰۳۳ یا ۰۹۳۵۴۰۶۲۲۴۸ با ما در ارتباط باشید. همچنین می‌توانید از طریق پیام مستقیم در شبکه‌های اجتماعی یا فرم تماس در وب‌سایت، سفارش خود را ثبت کنید. تیم ما در اسرع وقت با شما تماس خواهد گرفت.
                     </div>
                 </div>
             </div>
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="order"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-money-bill-wave text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">روش پرداخت چگونه است؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         پرداخت به صورت مرحله‌ای انجام می‌شود. معمولاً ۵۰٪ مبلغ به عنوان پیش‌پرداخت هنگام ثبت سفارش و ۵۰٪ باقیمانده هنگام تحویل محصول دریافت می‌شود. پرداخت می‌تواند به صورت نقدی، کارت به کارت یا واریز بانکی انجام شود. برای سفارشات بزرگ، شرایط پرداخت قابل مذاکره است.
                     </div>
                 </div>
             </div>
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="order"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-clock text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">مدت زمان آماده‌سازی سفارش چقدر است؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         معمولاً محصولات ما در کمتر از ۲ هفته آماده می‌شوند. البته این زمان بسته به پیچیدگی طرح، اندازه محصول و حجم سفارشات جاری ممکن است متفاوت باشد. برای سفارشات سفارشی یا پروژه‌های بزرگ، زمان دقیق هنگام ثبت سفارش اعلام می‌شود. ما همیشه سعی می‌کنیم سفارش شما را در سریع‌ترین زمان ممکن با بالاترین کیفیت تحویل دهیم.
                     </div>
                 </div>
             </div><!-- Delivery Questions -->
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="delivery"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-truck text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">آیا ارسال به سایر شهرها امکان‌پذیر است؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         بله، ما به تمام نقاط ایران ارسال انجام می‌دهیم. محصولات با بسته‌بندی حرفه‌ای و ایمن برای جلوگیری از هرگونه آسیب در حین حمل و نقل آماده می‌شوند. هزینه ارسال بسته به مقصد، اندازه و وزن محصول متفاوت است و هنگام ثبت سفارش به شما اعلام می‌شود. برای سفارشات محلی در سلماس، تحویل رایگان است.
                     </div>
                 </div>
             </div>
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="delivery"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-box-open text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">بسته‌بندی محصولات چگونه است؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         ما به بسته‌بندی محصولات خود بسیار اهمیت می‌دهیم. هر محصول با مواد محافظ مناسب مانند فوم، کاغذ حباب‌دار و کارتن‌های مقاوم بسته‌بندی می‌شود. برای محصولات شکننده یا بزرگ، از جعبه‌های چوبی سفارشی استفاده می‌کنیم. هدف ما این است که محصول شما دقیقاً به همان شکلی که از کارگاه خارج شده، به دست شما برسد.
                     </div>
                 </div>
             </div>
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="delivery"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-undo text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">آیا امکان مرجوع کردن محصول وجود دارد؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         از آنجایی که محصولات ما دست‌ساز و اغلب سفارشی هستند، امکان مرجوع کردن محدود است. اما اگر محصول دارای نقص ساخت باشد یا در حین حمل آسیب دیده باشد، حتماً آن را تعویض یا تعمیر می‌کنیم. رضایت شما برای ما بسیار مهم است و تا رسیدن به نتیجه مطلوب، در کنار شما خواهیم بود.
                     </div>
                 </div>
             </div><!-- Care Questions -->
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="care"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-heart text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">چگونه از محصولات چوبی نگهداری کنم؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         نگهداری از محصولات چوبی ساده است: از قرار دادن آنها در معرض مستقیم نور خورشید یا رطوبت زیاد خودداری کنید. برای تمیز کردن، از پارچه نرم و مرطوب استفاده کنید و سپس خشک کنید. از مواد شیمیایی قوی یا سیم ظرفشویی استفاده نکنید. هر ۶ ماه یک بار می‌توانید با روغن مخصوص چوب، سطح را تغذیه کنید تا زیبایی و درخشش آن حفظ شود.
                     </div>
                 </div>
             </div>
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="care"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-tint text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">آیا محصولات در برابر آب مقاوم هستند؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         محصولات ما با پوشش‌های محافظ مقاوم در برابر رطوبت پوشانده شده‌اند، اما توصیه می‌کنیم از قرار دادن طولانی‌مدت آنها در آب یا رطوبت بالا خودداری کنید. برای ظروف آشپزخانه، می‌توانید آنها را با آب بشویید اما سریعاً خشک کنید. برای میزها و مبلمان، از زیرلیوانی و رومیزی استفاده کنید تا از تماس مستقیم با مایعات جلوگیری شود.
                     </div>
                 </div>
             </div>
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="care"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-tools text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">اگر محصول خراش برداشت یا آسیب دید چه کنم؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         خراش‌های جزئی بخشی از زیبایی طبیعی چوب هستند و با گذشت زمان به آن شخصیت می‌بخشند. برای خراش‌های عمیق‌تر، می‌توانید با ما تماس بگیرید. ما خدمات تعمیر و بازسازی ارائه می‌دهیم. در بسیاری موارد، می‌توانیم محصول را سنباده زده و دوباره پوشش دهیم تا مانند نو شود. همچنین راهنمایی‌های لازم برای تعمیرات ساده را در اختیار شما قرار می‌دهیم.
                     </div>
                 </div>
             </div><!-- General Questions -->
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="product"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-certificate text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">آیا گارانتی برای محصولات وجود دارد؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         بله، تمام محصولات ما دارای ضمانت کیفیت ساخت هستند. اگر در طول ۶ ماه اول، هرگونه نقص ساختی مشاهده کردید، ما آن را رایگان تعمیر یا تعویض می‌کنیم. این ضمانت شامل آسیب‌های ناشی از استفاده نادرست یا حوادث نمی‌شود. ما به کیفیت کار خود اطمینان کامل داریم و پشت هر محصولی که می‌سازیم می‌ایستیم.
                     </div>
                 </div>
             </div>
             <div class="faq-item bg-white dark:bg-wood-800 rounded-xl shadow-sm overflow-hidden" data-category="order"><button onclick="toggleFaq(this)" class="w-full px-6 py-5 flex items-center justify-between text-right hover:bg-wood-50 dark:hover:bg-wood-700 transition-colors">
                     <div class="flex items-start space-x-4 space-x-reverse flex-1">
                         <div class="w-10 h-10 bg-wood-100 dark:bg-wood-700 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-eye text-wood-600 dark:text-wood-400"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-wood-800 dark:text-wood-100">آیا می‌توانم قبل از خرید، کارگاه را ببینم؟</h3>
                         </div>
                     </div><i class="fas fa-chevron-down faq-icon text-wood-600 dark:text-wood-400"></i> </button>
                 <div class="faq-answer px-6 pb-5">
                     <div class="pr-14 text-wood-700 dark:text-wood-300 leading-relaxed">
                         حتماً! ما از بازدید مشتریان از کارگاه استقبال می‌کنیم. شما می‌توانید فرآیند ساخت را از نزدیک ببینید، با محصولات آماده آشنا شوید و با علیرضا حق نظری، بنیانگذار و استاد چوب‌کار ما، مشاوره حضوری داشته باشید. لطفاً قبل از بازدید، با شماره‌های ۰۹۱۴۴۸۵۱۰۳۳ یا ۰۹۳۵۴۰۶۲۲۴۸ هماهنگ کنید تا بهترین زمان را برای شما تنظیم کنیم.
                     </div>
                 </div>
             </div>
         </section><!-- Still Have Questions -->
         <section class="mt-16 fade-in">
             <div class="bg-gradient-to-br from-wood-600 to-wood-700 dark:from-wood-700 dark:to-wood-800 rounded-2xl shadow-xl p-8 md:p-12 text-center text-white"><i class="fas fa-question-circle text-5xl mb-6 opacity-80"></i>
                 <h3 class="text-3xl font-bold mb-4">سوال دیگری دارید؟</h3>
                 <p class="text-white/90 mb-8 max-w-2xl mx-auto">اگر پاسخ سوال خود را پیدا نکردید، خوشحال می‌شویم که به صورت مستقیم به شما کمک کنیم</p>
                 <div class="flex flex-wrap justify-center gap-4"><a href="tel:+989144851033" class="bg-white/20 hover:bg-white/30 px-6 py-3 rounded-lg transition-colors inline-flex items-center"> <i class="fas fa-phone ml-2"></i> تماس با ما </a> <a href="#" class="bg-white/20 hover:bg-white/30 px-6 py-3 rounded-lg transition-colors inline-flex items-center"> <i class="fas fa-envelope ml-2"></i> ارسال پیام </a> <a href="#" target="_blank" rel="noopener noreferrer" class="bg-white/20 hover:bg-white/30 px-6 py-3 rounded-lg transition-colors inline-flex items-center"> <i class="fab fa-instagram ml-2"></i> اینستاگرام </a>
                 </div>
             </div>
         </section>
     </main><!-- Footer -->
     </div>


 @endsection
@push('scripts')
    <script>

        // FAQ Toggle
        function toggleFaq(button) {
            const answer = button.nextElementSibling;
            const icon = button.querySelector('.faq-icon');
            const isActive = answer.classList.contains('active');

            // Close all other FAQs
            document.querySelectorAll('.faq-answer').forEach(item => {
                item.classList.remove('active');
            });
            document.querySelectorAll('.faq-icon').forEach(item => {
                item.classList.remove('active');
            });

            // Toggle current FAQ
            if (!isActive) {
                answer.classList.add('active');
                icon.classList.add('active');
            }
        }

        // Category Filter
        function filterCategory(category) {
            const items = document.querySelectorAll('.faq-item');
            const buttons = document.querySelectorAll('.category-btn');

            // Update button styles
            buttons.forEach(btn => {
                btn.classList.remove('active', 'bg-wood-600', 'text-white');
                btn.classList.add('bg-wood-100', 'dark:bg-wood-800', 'text-wood-700', 'dark:text-wood-300');
            });
            event.target.classList.remove('bg-wood-100', 'dark:bg-wood-800', 'text-wood-700', 'dark:text-wood-300');
            event.target.classList.add('active', 'bg-wood-600', 'text-white');

            // Filter items
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }

                // Close all answers when filtering
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('.faq-icon');
                answer.classList.remove('active');
                icon.classList.remove('active');
            });
        }

        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const items = document.querySelectorAll('.faq-item');

            items.forEach(item => {
                const question = item.querySelector('h3').textContent.toLowerCase();
                const answer = item.querySelector('.faq-answer').textContent.toLowerCase();

                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>


     @endpush
