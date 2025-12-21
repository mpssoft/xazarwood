<!-- Hero Slider -->
<section class="relative h-96 md:h-[550px] mt-12 md:mt-16  overflow-hidden">
    <div class="relative w-full h-full" id="sliderContainer"><!-- Slides --> @foreach($sliders as $index => $slider)
            <div class="slide {{ $loop->first ? 'slide-active' : '' }} absolute inset-0" data-slide="{{ $index }}" style="opacity: {{ $loop->first ? '1' : '0' }}; transition: opacity 0.8s ease-in-out; pointer-events: {{ $loop->first ? 'auto' : 'none' }};"><img src="{{asset($slider->image)}}" alt="{{$slider->title}}" class="w-full h-full object-cover ">
                <div class="absolute  pt-32 flex inset-0 items-center  transition-all duration-700">
                    <div class="max-w-7xl mx-auto px-4 text-center md:text-right">
                        <h2 class="text-2xl md:text-5xl font-bold text-white mb-4">{{$slider->title}}</h2>
                        <p class=" text-white/90 mb-6 max-w-2xl">{{$slider->subtitle}}</p>
                        @if(!empty($slider->link))
                        <a href="{{$slider->link}}" class="p-2 md:px-8 md:py-3 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-semibold transition-all duration-300 transform hover:scale-105"> {{$slider->button_text}} </a>
                        @endif
                    </div>
                </div>
            </div> @endforeach
    </div><!-- Navigation Arrows --> <button onclick="previousSlide()" class="absolute hidden md:flex left-4 top-1/2 transform -translate-y-1/2 p-3 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full text-white transition-all duration-300 z-10">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg></button> <button onclick="nextSlide()" class="absolute hidden md:flex right-4 top-1/2 transform -translate-y-1/2 p-3 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full text-white transition-all duration-300 z-10">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg></button> <!-- Slider Indicators -->
    <div class="absolute flex bottom-4 left-1/2 transform -translate-x-1/2  space-x-reverse space-x-2 z-10">
        @foreach($sliders as $index => $slider) <button onclick="goToSlide({{ $index }})" class="indicator w-3 h-3 {{ $loop->first ? 'bg-white' : 'bg-white/50' }} rounded-full transition-all duration-300" data-indicator="{{ $index }}"></button> @endforeach
    </div>
</section>
@push('scripts')
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const indicators = document.querySelectorAll('.indicator');
        const totalSlides = slides.length;
        let autoPlayInterval;

        // Touch/swipe variables
        let touchStartX = 0;
        let touchEndX = 0;
        let isDragging = false;
        const sliderContainer = document.getElementById('sliderContainer');

        function showSlide(index) {
            // Remove active class from all slides
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.add('slide-active');
                    slide.style.opacity = '1';
                    slide.style.pointerEvents = 'auto';
                } else {
                    slide.classList.remove('slide-active');
                    slide.style.opacity = '0';
                    slide.style.pointerEvents = 'none';
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

            currentSlide = index;
        }

        function nextSlide() {
            const next = (currentSlide + 1) % totalSlides;
            showSlide(next);
            resetAutoPlay();
        }

        function previousSlide() {
            const prev = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(prev);
            resetAutoPlay();
        }

        function goToSlide(index) {
            showSlide(index);
            resetAutoPlay();
        }

        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                nextSlide();
            }, 7000);
        }

        function resetAutoPlay() {
            clearInterval(autoPlayInterval);
            startAutoPlay();
        }

        // Touch event handlers for swipe functionality
        function handleTouchStart(e) {
            touchStartX = e.touches[0].clientX;
            isDragging = true;
        }

        function handleTouchMove(e) {
            if (!isDragging) return;
            touchEndX = e.touches[0].clientX;
        }

        function handleTouchEnd() {
            if (!isDragging) return;
            isDragging = false;

            const swipeThreshold = 50;
            const difference = touchStartX - touchEndX;

            if (Math.abs(difference) > swipeThreshold) {
                if (difference > 0) {
                    // Swiped left - go to next slide
                    nextSlide();
                } else {
                    // Swiped right - go to previous slide
                    previousSlide();
                }
            }

            touchStartX = 0;
            touchEndX = 0;
        }

        // Mouse event handlers for desktop drag
        function handleMouseDown(e) {
            touchStartX = e.clientX;
            isDragging = true;
            sliderContainer.style.cursor = 'grabbing';
        }

        function handleMouseMove(e) {
            if (!isDragging) return;
            touchEndX = e.clientX;
        }

        function handleMouseUp() {
            if (!isDragging) return;
            isDragging = false;
            sliderContainer.style.cursor = 'grab';

            const swipeThreshold = 50;
            const difference = touchStartX - touchEndX;

            if (Math.abs(difference) > swipeThreshold) {
                if (difference > 0) {
                    nextSlide();
                } else {
                    previousSlide();
                }
            }

            touchStartX = 0;
            touchEndX = 0;
        }

        // Add event listeners
        if (sliderContainer) {
            sliderContainer.addEventListener('touchstart', handleTouchStart, { passive: true });
            sliderContainer.addEventListener('touchmove', handleTouchMove, { passive: true });
            sliderContainer.addEventListener('touchend', handleTouchEnd);

            sliderContainer.addEventListener('mousedown', handleMouseDown);
            sliderContainer.addEventListener('mousemove', handleMouseMove);
            sliderContainer.addEventListener('mouseup', handleMouseUp);
            sliderContainer.addEventListener('mouseleave', () => {
                if (isDragging) {
                    isDragging = false;
                    sliderContainer.style.cursor = 'grab';
                }
            });

            sliderContainer.style.cursor = 'grab';
        }

        // Toggle gradient overlay on mouse enter/leave with slow transition
        slides.forEach(slide => {
            const overlay = slide.querySelector('.bg-gradient-to-l');

            // Add transition to overlay opacity
            if (overlay) {
                overlay.style.transition = 'opacity 0.7s ease-in-out';
                overlay.style.opacity = '1';
            }

            slide.addEventListener('mouseenter', () => {
                if (overlay) {
                    overlay.style.opacity = '0.6';
                }
            });

            slide.addEventListener('mouseleave', () => {
                if (overlay) {
                    overlay.style.opacity = '1';
                }
            });
        });

        // Start auto-play when page loads
        if (totalSlides > 1) {
            startAutoPlay();
        }
    </script>
@endpush
