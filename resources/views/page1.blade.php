<!-- Page 1: Welcome Section -->
<section id="page-1" class="h-screen w-full relative flex flex-col overflow-hidden snap-section">
    <!-- Main Content Area -->
    <div class="flex-grow flex items-center justify-center w-full px-6 sm:px-8 lg:px-20">
        <div class="flex flex-col lg:flex-row items-center justify-center w-full max-w-7xl sm:gap-12 lg:gap-24">
            
            <!-- Left Side: Logo -->
            <div id="page1-logo" class="flex-shrink-0 -mt-28 sm:-mt-20 lg:mt-0 scroll-animate">
                <img src="{{ asset('img/logo.png') }}" alt="One Techno Logo" class="h-48 sm:h-56 lg:h-72 xl:h-80 w-auto object-contain drop-shadow-xl">
            </div>

            <!-- Right Side: Content -->
            <div id="page1-content" class="text-center flex flex-col items-center w-full lg:w-auto scroll-animate relative">
                <!-- Language Switcher - Top Right -->
                <div class="flex items-center gap-2 mb-4 bg-gray-100 p-1 rounded-full">
                    <button id="btn-indonesia" class="text-[10px] font-bold px-3 py-1 rounded-full bg-yellow-500 text-black transition-all duration-300">IND</button>
                    <button id="btn-english" class="text-[10px] font-bold px-3 py-1 rounded-full text-black hover:bg-gray-200 transition-all duration-300">ENG</button>
                </div>

                <p id="page1-desc" class="text-black text-base sm:text-lg lg:text-2xl mb-8 sm:mb-10 leading-relaxed font-medium max-w-sm lg:max-w-lg text-center"
                   data-text-id="Jasa Website Dan Sistem Cepat dengan Teknologi Modern di Dunia Digital."
                   data-text-en="Fast Website and System Services with Modern Technology in the Digital World.">
                    Jasa Website Dan Sistem Cepat dengan Teknologi Modern di Dunia Digital.
                </p>
                
                <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 w-full sm:w-auto justify-center">
                    <!-- Nav Buttons -->
                    <button id="nav-portofolio" class="bg-black text-white px-8 sm:px-10 py-3 sm:py-3.5 rounded-full font-bold text-xs sm:text-sm tracking-wider hover:opacity-70 transition shadow-md hover:scale-105 transform duration-300 w-full sm:w-auto text-center"
                        data-text-id="PORTOFOLIO" data-text-en="PORTFOLIO">
                        PORTOFOLIO
                    </button>
                    <button id="nav-faq" class="bg-black text-white px-8 sm:px-10 py-3 sm:py-3.5 rounded-full font-bold text-xs sm:text-sm tracking-wider hover:opacity-70 transition shadow-md hover:scale-105 transform duration-300 w-full sm:w-auto text-center"
                        data-text-id="FAQ" data-text-en="FAQ">
                        FAQ
                    </button>
                    <button id="nav-testimoni" class="bg-black text-white px-8 sm:px-10 py-3 sm:py-3.5 rounded-full font-bold text-xs sm:text-sm tracking-wider hover:opacity-70 transition shadow-md hover:scale-105 transform duration-300 w-full sm:w-auto text-center"
                        data-text-id="TESTIMONI" data-text-en="TESTIMONIALS">
                        TESTIMONI
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Center: Arrow -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex flex-col items-center animate-bounce z-50">
        <!-- Chevron Down -->
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10">
            <path d="M7 10l5 5 5-5" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p class="text-black text-xs sm:text-sm font-semibold tracking-wider mt-1">SCROLL</p>
    </div>
</section>