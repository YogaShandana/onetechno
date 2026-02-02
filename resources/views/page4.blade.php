<!-- Page 4: All Portfolio Section -->
<section id="page-4" class="min-h-screen w-full relative bg-white z-40">
    <div class="w-full min-h-screen flex flex-col px-2 py-8 pb-32 mb-16 sm:pb-8 sm:mb-0 lg:py-16">
        
        <!-- Title -->
        <div id="page4-title" class="text-center mb-3 lg:mb-16 pt-2 sm:pt-4 lg:pt-4 scroll-animate">
            <h1 class="text-black text-2xl sm:text-3xl lg:text-5xl font-extrabold tracking-wider page4-title"
                data-text-id="PORTOFOLIO" data-text-en="PORTFOLIO">
                PORTOFOLIO
            </h1>
        </div>

        <!-- Portfolio Grid -->
        <div id="page4-grid" class="w-full px-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-6 lg:gap-8 scroll-animate" style="padding-bottom: 4rem; margin-bottom: 1rem;">
            
            @if(isset($portos) && $portos->count() > 0)
                @foreach($portos as $porto)
                <!-- Portfolio Item {{ $porto->id }} -->
                <div class="group {{ $porto->url ? 'cursor-pointer' : 'cursor-default' }} transition-all duration-300 hover:scale-102 relative" @if($porto->url) onclick="window.open('{{ $porto->url }}', '_blank')" @endif>
                    @if($porto->full_image)
                        <img src="{{ asset($porto->full_image) }}" 
                             alt="{{ $porto->title }}"
                             class="w-full h-full object-cover rounded-lg shadow-2xl hover:shadow-3xl transition-all duration-300"
                             style="box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25), 0 -10px 20px -5px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(255, 255, 255, 0.05);">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent rounded-b-lg p-3">
                            <h3 class="text-white font-bold text-base sm:text-lg">{{ $porto->title }}</h3>
                        </div>
                    @else
                        <!-- Default Placeholder -->
                        <div class="aspect-video bg-gradient-to-br from-gray-200 to-gray-300 rounded-lg shadow-2xl hover:shadow-3xl transition-all duration-300 flex items-center justify-center"
                             style="box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25), 0 -10px 20px -5px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(255, 255, 255, 0.05);">
                            <div class="text-center">
                                <div class="text-lg font-bold text-gray-600">{{ $porto->title ?? 'NO IMAGE' }}</div>
                            </div>
                        </div>
                    @endif
                </div>
                @endforeach
            @else
                <!-- Default when no data -->
                <div class="group cursor-pointer transition-all duration-300">
                    <div class="aspect-video bg-gradient-to-br from-gray-200 to-gray-300 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 flex items-center justify-center">
                        <div class="text-center">
                            <div class="text-lg font-bold text-gray-600">NO PORTFOLIO</div>
                        </div>
                    </div>
                </div>
            @endif
            
        </div>
    </div>
</section>