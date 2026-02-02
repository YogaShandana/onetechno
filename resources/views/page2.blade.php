<!-- Page 2: Features Section -->
<section id="page-2" class="h-screen w-full relative overflow-hidden bg-white flex items-center snap-section">
    <!-- Main Grid Container -->
    <div class="w-full h-full grid grid-cols-1 lg:grid-cols-2">
        
        <!-- Left Grid: Content -->
        <div id="page2-content" class="flex flex-col justify-center items-center lg:items-start px-6 lg:pl-32 relative z-20 h-full mt-4 sm:mt-6 lg:mt-0 scroll-animate">
          
            <!-- Step Bar (Arrows) -->
            <div class="flex items-center w-full max-w-lg mb-4 sm:mb-6 lg:mb-10 filter drop-shadow-xl">
                <!-- Step 1: Terpercaya -->
                <div id="step-terpercaya" class="h-12 lg:h-16 flex-1 bg-black text-white flex items-center justify-center font-bold tracking-wider relative z-30 text-xs sm:text-sm pl-2 cursor-pointer hover:opacity-80 transition-all duration-300 page2-step" 
                     style="clip-path: polygon(0% 0%, 90% 0%, 100% 50%, 90% 100%, 0% 100%);"
                     data-text-id="TERPERCAYA" data-text-en="RELIABLE">
                    TERPERCAYA
                </div>
                
                <!-- Step 2: Cepat -->
                <div id="step-cepat" class="h-12 lg:h-16 flex-1 bg-[#5D5D5D] text-[#FFC107] flex items-center justify-center font-bold tracking-wider -ml-6 lg:-ml-8 relative z-20 pl-4 lg:pl-6 text-xs sm:text-sm cursor-pointer hover:opacity-80 transition-all duration-300 page2-step" 
                     style="clip-path: polygon(0% 0%, 90% 0%, 100% 50%, 90% 100%, 0% 100%, 10% 50%);"
                     data-text-id="CEPAT" data-text-en="FAST">
                    CEPAT
                </div>
                
                <!-- Step 3: Murah -->
                <div id="step-murah" class="h-12 lg:h-16 flex-1 bg-[#FFC107] text-black flex items-center justify-center font-bold tracking-wider -ml-6 lg:-ml-8 relative z-10 pl-4 lg:pl-6 text-xs sm:text-sm cursor-pointer hover:opacity-80 transition-all duration-300 page2-step" 
                     style="clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%, 10% 50%);"
                     data-text-id="MURAH" data-text-en="AFFORDABLE">
                    MURAH
                </div>
            </div>

            <!-- Text -->
            <div id="page2-desc-container" class="min-h-[100px] flex items-center justify-center lg:justify-start">
                <p id="page2-desc" class="text-black text-base lg:text-xl text-center lg:text-left leading-relaxed max-w-md font-medium transition-opacity duration-300"
                   data-text-id="One Techno Menjamin Keamanan dan Kepercayaan Penuh Dalam Setiap Solusi Digital yang Kami Bangun untuk Bisnis Anda."
                   data-text-en="One Techno Guarantees Full Security and Trust in Every Digital Solution We Build for Your Business.">
                    One Techno Menjamin Keamanan dan Kepercayaan Penuh Dalam Setiap Solusi Digital yang Kami Bangun untuk Bisnis Anda.
                </p>
            </div>
        </div>

        <!-- Right Grid: Person Image -->
        <div id="page2-image" class="relative h-full w-full flex items-end justify-center lg:justify-start overflow-visible z-10 scroll-animate">
            <!-- Image positioned at bottom -->
            <img src="{{ asset('img/orang.png') }}" alt="Person" class="h-3/4 lg:h-[90%] w-auto object-contain object-bottom translate-x-0 lg:-translate-x-32">
        </div>
        
    </div>
</section>