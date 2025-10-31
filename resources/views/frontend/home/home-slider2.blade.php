<style>
    .slide {
        transition: transform 1s ease-in-out;
    }

    .slide-enter-left {
        animation: slideInLeft 1s ease-out forwards;
    }

    .slide-enter-right {
        animation: slideInRight 1s ease-out forwards;
    }

    @keyframes slideInLeft {
        from {
            transform: translateX(-100px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideInRight {
        from {
            transform: translateX(100px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .slide-content {
        opacity: 0;
        transform: translateX(-100px);
    }

    .slide-image {
        opacity: 0;
        transform: translateX(100px);
    }


</style>

<!-- Image Slider Section -->
<section class="pt-24 pb-12 wood-grain-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


        <!-- Image Slider -->
        <div class="relative wood-panel rounded-3xl overflow-hidden slide-up">
            <div class="slider-container  relative h-80 md:h-[500px]" id="slider">
                @foreach($sliders as $slider)
                <!-- Slide 1 -->
                <div class="slider-slide {{$loop->first? 'active':''}}  wood-texture p-20 flex flex-col items-center justify-center" style="background:url('{{$slider->image}};background-size:cover;')">
                    <div class="flex-1 "></div>
                    <div class="flex-col text-center " >

                        <h3 class=" text-3xl font-black text-gray-900 dark:text-gray-100 mb-3">{{$slider->title}}</h3>
                        <p class="text-lg text-gray-900 dark:text-gray-300 font-bold">{{$slider->subtitle}}</p>
                    </div>

                </div>
                @endforeach


            </div>

            <!-- Navigation Arrows -->
            <button class="slider-btn slider-prev absolute left-6 top-1/2 transform -translate-y-1/2 wood-button p-4 rounded-full text-white hover:scale-110 transition-all z-10 shadow-2xl">
                <i class="fas fa-chevron-left text-xl"></i>
            </button>
            <button class="slider-btn slider-next absolute right-6 top-1/2 transform -translate-y-1/2 wood-button p-4 rounded-full text-white hover:scale-110 transition-all z-10 shadow-2xl">
                <i class="fas fa-chevron-right text-xl"></i>
            </button>

            <!-- Dots Indicator -->
            <div class="slider-dots absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3 space-x-reverse">

                @foreach($sliders as $slider)
                    <button class="slider-dot {{$loop->first? 'slider-dot w-3 h-3 rounded-full dark:bg-gray-500 hover:bg-orange-600 dark:hover:bg-yellow-400 transition-all shadow-lg active bg-orange-600 ':''}} w-3 h-3 rounded-full bg-orange-300 dark:bg-gray-500 hover:bg-orange-600 dark:hover:bg-yellow-400 transition-all shadow-lg"></button>
                @endforeach

            </div>
        </div>
    </div>
</section>


<script>
    // Image Slider Functionality
    class ImageSlider {
        constructor() {
            this.currentSlide = 0;
            this.slider = document.querySelector('#slider');
            this.slides = document.querySelectorAll('.slider-slide');
            this.dots = document.querySelectorAll('.slider-dot');
            this.prevBtn = document.querySelector('.slider-prev');
            this.nextBtn = document.querySelector('.slider-next');
            this.totalSlides = this.slides.length;
            this.autoSlideInterval = null;

            this.init();
        }

        init() {
            // Add event listeners
            this.prevBtn.addEventListener('click', () => this.prevSlide());
            this.nextBtn.addEventListener('click', () => this.nextSlide());

            // Add dot click listeners
            this.dots.forEach((dot, index) => {
                dot.addEventListener('click', () => this.goToSlide(index));
            });

            // Start auto-slide
            this.startAutoSlide();
            this.initSwipe()
            // Pause auto-slide on hover
            const sliderContainer = document.querySelector('.slider-container');
            sliderContainer.addEventListener('mouseenter', () => this.stopAutoSlide());
            sliderContainer.addEventListener('mouseleave', () => this.startAutoSlide());
        }
        initSwipe() {
            let startX = 0;
            let endX = 0;

            this.slider.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
            });

            this.slider.addEventListener('touchend', (e) => {
                endX = e.changedTouches[0].clientX;
                const diff = startX - endX;

                if (Math.abs(diff) > 50) { // detect meaningful swipe
                    if (diff > 0) this.nextSlide(); // swipe left
                    else this.prevSlide();          // swipe right
                }
            });
        }
        updateSlider() {
            // Update slides
            this.slides.forEach((slide, index) => {
                slide.classList.remove('active', 'prev');
                if (index === this.currentSlide) {
                    slide.classList.add('active');
                } else if (index < this.currentSlide) {
                    slide.classList.add('prev');
                }
            });

            // Update dots
            this.dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentSlide);
                if (index === this.currentSlide) {
                    dot.classList.remove('bg-orange-300', 'dark:bg-yellow-600');
                    dot.classList.add('bg-orange-600', 'dark:bg-yellow-400');
                } else {
                    dot.classList.remove('bg-orange-600', 'dark:bg-yellow-400');
                    dot.classList.add('bg-orange-300', 'dark:bg-yellow-600');
                }
            });
        }

        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
            this.updateSlider();
        }

        prevSlide() {
            this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
            this.updateSlider();
        }

        goToSlide(index) {
            this.currentSlide = index;
            this.updateSlider();
        }

        startAutoSlide() {
            this.stopAutoSlide();
            this.autoSlideInterval = setInterval(() => {
                this.nextSlide();
            }, 5000);
        }

        stopAutoSlide() {
            if (this.autoSlideInterval) {
                clearInterval(this.autoSlideInterval);
                this.autoSlideInterval = null;
            }
        }
    }

    // Initialize slider when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
        new ImageSlider();
    });

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".slider-link").forEach(function (link) {
            link.addEventListener("click", function () {
                let sliderId = this.dataset.id;

                // sendBeacon requires a Blob or FormData
                const data = new FormData();
                data.append('_token', "{{ csrf_token() }}");

                navigator.sendBeacon(`/slider/click/${sliderId}`, data);
                // navigation will continue normally
            });
        });
    });

</script>
