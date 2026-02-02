<!-- Page 3: Portfolio Section -->
<section id="page-3" class="h-screen lg:h-screen w-full relative bg-black flex items-center justify-center snap-section" style="overflow-y: auto; min-height: 100vh;">
    <div class="w-full h-full flex flex-col items-center justify-center px-4 sm:px-6 lg:px-20 py-8 sm:py-0 relative -mt-8 sm:-mt-12 lg:-mt-20" style="min-height: 100vh; padding-bottom: 6rem;">
        
        <!-- Title and Description - FORCE VISIBLE -->
        <div class="text-center mb-8 w-full scroll-animate" style="z-index: 9999; position: relative; background: rgba(0,0,0,0.8); padding: 20px; border-radius: 10px;">
            <h1 class="text-white text-2xl sm:text-3xl lg:text-5xl font-extrabold tracking-wider mb-4 lg:mb-6 drop-shadow-lg"
                data-text-id="RESPONSIF" data-text-en="RESPONSIVE"
                style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8) !important;">
                RESPONSIF
            </h1>
            <p class="text-white text-base lg:text-xl max-w-2xl mx-auto leading-relaxed px-4 sm:px-0 font-medium drop-shadow-lg"
               data-text-id="Semua Portofolio Dibuat Dengan Tampilan Responsif untuk Semua Perangkat Anda"
               data-text-en="All Our Portfolios Are Created With Responsive Views For All Your Devices"
               style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8) !important;">
                Semua Portofolio Dibuat Dengan Tampilan Responsif untuk Semua Perangkat Anda.
            </p>
        </div>

        <!-- Portfolio Images Container -->
        <div id="page3-images" class="relative w-full max-w-5xl flex items-center justify-center z-10 px-8 sm:px-12 lg:px-0 scroll-animate">
            
            <!-- Left Arrow -->
            <button id="prev-porto" class="absolute left-0 sm:left-2 lg:-left-20 z-30 group cursor-pointer hover:scale-110 transition-transform duration-300">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 sm:w-14 lg:w-24 lg:h-24">
                    <path d="M50 20L30 40L50 60" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-[#FFC107] transition-colors"/>
                </svg>
            </button>

            <!-- Portfolio Images -->
            <div class="w-full max-w-6xl">
                <div id="porto-slider" class="flex transition-transform duration-500">
                    @if(isset($portos) && $portos->count() > 0)
                        @foreach($portos as $index => $porto)
                            <div class="porto-slide w-full flex-shrink-0 relative group {{ $index > 0 ? 'hidden' : '' }}" data-porto-id="{{ $porto->id }}">
                                <!-- Both Views Side by Side -->
                                <div class="flex flex-row items-center justify-center gap-4 sm:gap-6 lg:gap-12">
                                    <!-- Laptop/Desktop View -->
                                    <div class="flex-1 max-w-lg lg:max-w-3xl">
                                        @if($porto->laptop_image)
                                            <img src="{{ asset($porto->laptop_image) }}" 
                                                 alt="{{ $porto->title }} - Desktop"
                                                 class="w-full h-auto object-cover rounded-lg shadow-2xl hover:shadow-3xl transition-all duration-300 {{ $porto->url ? 'cursor-pointer' : 'cursor-default' }} group-hover:scale-105"
                                                 @if($porto->url) onclick="window.open('{{ $porto->url }}', '_blank')" @endif>
                                        @else
                                            <div class="w-full aspect-video bg-gray-300 rounded-lg shadow-2xl hover:shadow-3xl transition-all duration-300 flex items-center justify-center group-hover:scale-105">
                                                <span class="text-gray-600 text-sm lg:text-lg">{{ $porto->title ?? 'No Desktop Image' }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <!-- Mobile View -->
                                    <div class="flex-shrink-0 max-w-[120px] sm:max-w-[150px] lg:max-w-xs">
                                        @if($porto->hp_image)
                                            <img src="{{ asset($porto->hp_image) }}" 
                                                 alt="{{ $porto->title }} - Mobile"
                                                 class="w-full h-auto max-h-[200px] sm:max-h-[250px] lg:max-h-[500px] object-contain rounded-lg shadow-2xl hover:shadow-3xl transition-all duration-300 {{ $porto->url ? 'cursor-pointer' : 'cursor-default' }} group-hover:scale-105"
                                                 @if($porto->url) onclick="window.open('{{ $porto->url }}', '_blank')" @endif>
                                        @else
                                            <div class="w-full aspect-[9/16] max-h-[200px] sm:max-h-[250px] lg:max-h-[500px] bg-gray-300 rounded-lg shadow-2xl hover:shadow-3xl transition-all duration-300 flex items-center justify-center group-hover:scale-105">
                                                <span class="text-gray-600 text-xs sm:text-sm lg:text-lg">{{ $porto->title ?? 'No Mobile Image' }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <!-- Default when no portfolio -->
                        <div class="w-full flex-shrink-0">
                            <div class="w-full aspect-video bg-gray-300 rounded-lg shadow-2xl flex items-center justify-center">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-gray-600 mb-2">NO PORTFOLIO</div>
                                    <div class="text-sm text-gray-500">Add portfolio items in admin panel</div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Right Arrow -->
            <button id="next-porto" class="absolute right-0 sm:right-2 lg:-right-20 z-30 group cursor-pointer hover:scale-110 transition-transform duration-300">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 sm:w-14 lg:w-24 lg:h-24">
                    <path d="M30 20L50 40L30 60" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-[#FFC107] transition-colors"/>
                </svg>
            </button>
        </div>

    </div>
    
    <!-- Portfolio Slider Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const portfolios = @json($portos ?? []);
            let currentIndex = 0;
            let autoSlideInterval = null;
            let isPaused = false;
            let isManualAction = false;
            const autoSlideDelay = 2000; // 2 seconds
            
            function showPortfolio(index) {
                const slides = document.querySelectorAll('.porto-slide');
                
                slides.forEach((slide, i) => {
                    slide.classList.toggle('hidden', i !== index);
                });
            }
            
            function nextSlide() {
                if (portfolios.length > 0) {
                    currentIndex = (currentIndex + 1) % portfolios.length;
                    showPortfolio(currentIndex);
                }
            }
            
            function prevSlide() {
                if (portfolios.length > 0) {
                    currentIndex = currentIndex === 0 ? portfolios.length - 1 : currentIndex - 1;
                    showPortfolio(currentIndex);
                }
            }
            
            function startAutoSlide() {
                // Always clear existing interval first
                stopAutoSlide();
                
                if (!isPaused && !isManualAction && portfolios.length > 1) {
                    autoSlideInterval = setInterval(() => {
                        if (!isPaused && !isManualAction) {
                            nextSlide();
                        }
                    }, autoSlideDelay);
                }
            }
            
            function stopAutoSlide() {
                if (autoSlideInterval) {
                    clearInterval(autoSlideInterval);
                    autoSlideInterval = null;
                }
            }
            
            function pauseAutoSlide() {
                isPaused = true;
                stopAutoSlide();
            }
            
            function resumeAutoSlide() {
                isPaused = false;
                // Small delay before resuming to prevent rapid starts
                setTimeout(() => {
                    if (!isPaused && !isManualAction) {
                        startAutoSlide();
                    }
                }, 500);
            }
            
            // Event listeners for manual navigation
            document.getElementById('next-porto')?.addEventListener('click', () => {
                isManualAction = true;
                stopAutoSlide();
                nextSlide();
                
                // Resume auto slide after longer delay for manual action
                setTimeout(() => {
                    isManualAction = false;
                    if (!isPaused) {
                        startAutoSlide();
                    }
                }, 3000);
            });
            
            document.getElementById('prev-porto')?.addEventListener('click', () => {
                isManualAction = true;
                stopAutoSlide();
                prevSlide();
                
                // Resume auto slide after longer delay for manual action
                setTimeout(() => {
                    isManualAction = false;
                    if (!isPaused) {
                        startAutoSlide();
                    }
                }, 3000);
            });
            
            // Pause auto slide on hover
            const sliderContainer = document.getElementById('page3-images');
            if (sliderContainer) {
                sliderContainer.addEventListener('mouseenter', pauseAutoSlide);
                sliderContainer.addEventListener('mouseleave', resumeAutoSlide);
            }
            
            // Start auto slide when portfolio section is visible
            const page3Section = document.getElementById('page-3');
            if (page3Section && portfolios.length > 1) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            // Delay start to prevent immediate trigger
                            setTimeout(() => {
                                if (entry.isIntersecting && !isPaused && !isManualAction) {
                                    startAutoSlide();
                                }
                            }, 1000);
                        } else {
                            stopAutoSlide();
                        }
                    });
                }, { threshold: 0.3 });
                
                observer.observe(page3Section);
            }
            
            // Initialize first slide
            showPortfolio(0);
            
            // Cleanup on page unload
            window.addEventListener('beforeunload', stopAutoSlide);
        });
    </script>
</section>
