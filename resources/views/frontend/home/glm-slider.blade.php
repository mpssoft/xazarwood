<!-- Hero Slider -->
<section class="relative h-96 md:h-[500px] overflow-hidden">
    <div class="relative w-full h-full">
        <!-- Slide 1 -->
        <div class="slide slide-active absolute inset-0" data-slide="0">
            <img src="https://picsum.photos/seed/rustictable1/1920/500" alt="میز روستیک" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-l from-black/70 to-transparent flex items-center">
                <div class="max-w-7xl mx-auto px-4 text-right">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">میزهای روستیک دست‌ساز</h2>
                    <p class="text-xl text-white/90 mb-6 max-w-2xl">هنر چوب طبیعی در قالب میزهایی با طراحی بی‌نظیر و کیفیت استثنایی</p>
                    <button class="px-8 py-3 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        مشاهده مجموعه
                    </button>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide slide-next absolute inset-0" data-slide="1">
            <img src="https://picsum.photos/seed/rusticclock/1920/500" alt="ساعت چوبی" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-l from-black/70 to-transparent flex items-center">
                <div class="max-w-7xl mx-auto px-4 text-right">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">ساعت‌های چوبی روستیک</h2>
                    <p class="text-xl text-white/90 mb-6 max-w-2xl">زمان را با زیبایی چوب طبیعی تجربه کنید</p>
                    <button class="px-8 py-3 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        کالکشن ساعت‌ها
                    </button>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide slide-next absolute inset-0" data-slide="2">
            <img src="https://picsum.photos/seed/woodenkitchen/1920/500" alt="ظروف چوبی" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-l from-black/70 to-transparent flex items-center">
                <div class="max-w-7xl mx-auto px-4 text-right">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">ظروف چوبی آشپزخانه</h2>
                    <p class="text-xl text-white/90 mb-6 max-w-2xl">طعم طبیعت در آشپزخانه شما با ظروف چوبی دست‌ساز</p>
                    <button class="px-8 py-3 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        مشاهده ظروف
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <button onclick="previousSlide()" class="absolute left-4 top-1/2 transform -translate-y-1/2 p-3 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full text-white transition-all duration-300">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>
    <button onclick="nextSlide()" class="absolute right-4 top-1/2 transform -translate-y-1/2 p-3 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full text-white transition-all duration-300">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    <!-- Slider Indicators -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-reverse space-x-2">
        <button onclick="goToSlide(0)" class="indicator w-3 h-3 bg-white rounded-full transition-all duration-300" data-indicator="0"></button>
        <button onclick="goToSlide(1)" class="indicator w-3 h-3 bg-white/50 rounded-full transition-all duration-300" data-indicator="1"></button>
        <button onclick="goToSlide(2)" class="indicator w-3 h-3 bg-white/50 rounded-full transition-all duration-300" data-indicator="2"></button>
    </div>
</section>
@push('scripts')
    <script>
        // Slider functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const indicators = document.querySelectorAll('.indicator');
        let autoSlideInterval;

        function showSlide(index) {
            // Hide all slides
            slides.forEach((slide, i) => {
                slide.classList.remove('slide-active', 'slide-prev', 'slide-next');
                if (i === index) {
                    slide.classList.add('slide-active');
                } else if (i < index) {
                    slide.classList.add('slide-prev');
                } else {
                    slide.classList.add('slide-next');
                }
            });

            // Update indicators
            indicators.forEach((indicator, i) => {
                if (i === index) {
                    indicator.classList.remove('bg-white/50');
                    indicator.classList.add('bg-white');
                } else {
                    indicator.classList.remove('bg-white');
                    indicator.classList.add('bg-white/50');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
            resetAutoSlide();
        }

        function previousSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
            resetAutoSlide();
        }

        function goToSlide(index) {
            currentSlide = index;
            showSlide(currentSlide);
            resetAutoSlide();
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 5000);
        }

        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        }


        // Start auto slider
    startAutoSlide();

    // Pause auto slide on hover
    const sliderContainer = document.querySelector('.relative.h-96');
    sliderContainer.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
    sliderContainer.addEventListener('mouseleave', startAutoSlide);
    </script>
@endpush
