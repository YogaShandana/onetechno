

<!-- Success Popup Overlay -->
<div id="success-popup" class="fixed inset-0 z-[200] flex items-center justify-center invisible opacity-0 transition-all duration-300 bg-black/50 backdrop-blur-sm p-4">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 transform scale-95 transition-all duration-300">
        <!-- Success Icon -->
        <div class="flex justify-center mb-6">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
        </div>
        
        <!-- Success Message -->
        <div class="text-center">
            <h3 id="success-title" class="text-xl font-bold text-gray-800 mb-3" data-text-id="Berhasil Dikirim!" data-text-en="Successfully Sent!">Berhasil Dikirim!</h3>
            <p id="success-message" class="text-gray-600 mb-6" data-text-id="Testimoni berhasil dikirim!" data-text-en="Testimonial sent successfully!">Testimoni berhasil dikirim!</p>
            <button id="success-ok-btn" class="bg-[#FFC107] text-black font-bold py-3 px-8 rounded-full hover:bg-yellow-400 transition-all duration-300 w-full" data-text-id="OK" data-text-en="OK">OK</button>
        </div>
    </div>
</div>

<!-- Testimoni Popup Overlay -->
<div id="testimoni-popup" class="fixed inset-0 z-[100] flex items-center justify-center invisible opacity-0 transition-all duration-500 bg-black/60 backdrop-blur-sm p-4 print:hidden">
    <!-- Popup Content -->
    <div id="testimoni-content" class="bg-white w-full max-w-2xl max-h-[80vh] rounded-3xl shadow-2xl overflow-hidden transform scale-95 transition-all duration-500 relative flex flex-col">
        
        <!-- Header -->
        <div class="bg-[#FFC107] p-6 sm:p-8 flex items-center justify-between sticky top-0 z-10">
            <h2 id="testi-header" class="text-black text-2xl sm:text-3xl font-extrabold tracking-tight" data-text-id="Apa Kata Mereka?" data-text-en="What They Say?">Apa Kata Mereka?</h2>
            <button id="close-testimoni" class="w-10 h-10 flex items-center justify-center rounded-full bg-black/10 text-black hover:bg-black hover:text-white transition-all duration-300">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <!-- Seluruh Konten Popup Scrollable -->
        <div class="p-6 sm:p-8 overflow-y-auto max-h-[calc(80vh-88px)] custom-scrollbar flex flex-col items-center w-full">
            <div class="relative w-full flex flex-col items-center justify-center gap-2">
                <div class="testimoni-slider w-full max-w-lg">
                    @if(isset($testimonis) && $testimonis->count() > 0)
                        @foreach($testimonis as $index => $testimoni)
                            <!-- Slide {{ $index + 1 }} -->
                            <div class="testimoni-slide bg-gray-50 p-6 rounded-2xl border border-gray-100 {{ $index > 0 ? 'hidden' : '' }}">
                                <div class="flex items-center gap-1 mb-3 text-yellow-500">
                                    @for($i=0; $i<$testimoni->rate; $i++)
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    @endfor
                                    @for($i=$testimoni->rate; $i<5; $i++)
                                        <svg class="w-4 h-4 fill-gray-300" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    @endfor
                                </div>
                                <p class="text-gray-700 italic mb-4">"{{ $testimoni->komentar }}"</p>
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-r from-yellow-200 to-blue-200 flex items-center justify-center font-bold text-gray-700">
                                        {{ strtoupper(substr($testimoni->nama, 0, 1)) }}
                                    </div>
                                    <div>
                                        <h4 class="text-black font-bold text-sm">{{ $testimoni->nama }}</h4>
                                        <p class="text-xs text-gray-500">{{ $testimoni->nama_website }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <!-- Default Slide when no testimoni -->
                        <div class="testimoni-slide bg-gray-50 p-6 rounded-2xl border border-gray-100">
                            <div class="flex items-center gap-1 mb-3 text-yellow-500">
                                @for($i=0; $i<5; $i++)
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                @endfor
                            </div>
                            <p class="text-gray-700 italic mb-4">"Tambahkan testimoni di bawah untuk menampilkan review anda"</p>
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center font-bold text-gray-700">?</div>
                                <div>
                                    <h4 class="text-black font-bold text-sm">Admin</h4>
                                    <p class="text-xs text-gray-500">OneTechno</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <!-- Navigasi dot di bawah slider -->
                @if(isset($testimonis) && $testimonis->count() > 1)
                    <div id="testimoni-dots" class="flex justify-center gap-2 mt-4">
                        @foreach($testimonis as $index => $testimoni)
                            <button class="w-2 h-2 rounded-full bg-gray-300 hover:bg-gray-500 transition-colors {{ $index == 0 ? 'bg-yellow-500' : '' }}" data-slide="{{ $index }}"></button>
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Tombol Beri Rating & Form Testimoni (toggle) di bagian bawah -->
            <div class="mt-8 w-full max-w-md mx-auto flex flex-col items-center">
                <style>
                    .star-input svg { color: #d1d5db; transition: color 0.2s; }
                    .star-input input:checked ~ label svg,
                    .star-input label:hover ~ label svg,
                    .star-input label:hover svg {
                        color: #facc15 !important;
                    }
                </style>
                <form id="testimoni-form" class="w-full bg-gray-50 rounded-2xl border border-gray-100 p-6 flex flex-col gap-4 mt-2">
                    <div class="flex flex-col items-center gap-2">
                        <label for="testimoni-rating" class="text-black font-semibold testi-form-label" data-text-id="Beri Rating Anda:" data-text-en="Give Your Rating:">Beri Rating Anda:</label>
                        <div id="testimoni-rating" class="star-input flex flex-row-reverse justify-center gap-1 text-2xl">
                            @for($i = 5; $i >= 1; $i--)
                                <input type="radio" id="star{{$i}}" name="rating" value="{{$i}}" class="hidden" />
                                <label for="star{{$i}}" class="cursor-pointer hover:scale-110 transition-transform">
                                    <svg class="inline w-8 h-8" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                </label>
                            @endfor
                        </div>
                        <div id="rating-error" class="text-red-500 text-sm text-center mt-1 hidden" data-text-id="Silakan berikan rating terlebih dahulu!" data-text-en="Please give a rating first!">Silakan berikan rating terlebih dahulu!</div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="testimoni-comment" class="text-black font-semibold testi-form-label" data-text-id="Komentar Anda:" data-text-en="Your Comment:">Komentar Anda:</label>
                        <textarea id="testimoni-comment" name="comment" rows="3" required class="rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-yellow-300"></textarea>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="testimoni-nama" class="text-black font-semibold testi-form-label" data-text-id="Nama Anda:" data-text-en="Your Name:">Nama Anda:</label>
                        <input id="testimoni-nama" name="nama" type="text" required class="rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-yellow-300" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="testimoni-asal" class="text-black font-semibold testi-form-label" data-text-id="Nama Website Anda:" data-text-en="Your Website Name:">Nama Website Anda:</label>
                        <input id="testimoni-asal" name="asal" type="text" required class="rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-yellow-300" />
                    </div>
                    <button type="submit" class="mt-2 bg-[#FFC107] text-black font-bold py-2 px-6 rounded-full hover:bg-yellow-400 transition testi-form-label" data-text-id="Kirim" data-text-en="Submit">Kirim</button>
                </form>
            </div>

            <!-- Footer Action -->
            <div class="mt-8 text-center pt-4 pb-8 w-full">
                <p class="text-gray-400 text-sm mb-4 testi-form-label" data-text-id="Ingin bisnis Anda sesukses mereka?" data-text-en="Want your business to be as successful as theirs?">Ingin bisnis Anda sesukses mereka?</p>
                <button id="start-now-testi" class="inline-flex items-center gap-2 bg-black text-white font-bold py-3 px-8 rounded-full hover:scale-105 transition-transform testi-form-label" data-text-id="Hubungi Kami" data-text-en="Contact Us">
                    Hubungi Kami
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #FFC107;
        border-radius: 2px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #e6ac00;
    }
</style>
