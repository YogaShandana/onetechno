<!-- FAQ Popup Overlay -->
<div id="faq-popup" class="fixed inset-0 z-[100] flex items-center justify-center invisible opacity-0 transition-all duration-500 bg-black/60 backdrop-blur-sm p-4 print:hidden">
    <!-- Popup Content -->
    <div id="faq-content" class="bg-white w-full max-w-2xl max-h-[80vh] rounded-3xl shadow-2xl overflow-hidden transform scale-95 transition-all duration-500 relative">
        
        <!-- Header -->
        <div class="bg-black p-6 sm:p-8 flex items-center justify-between sticky top-0 z-10">
            <h2 class="text-white text-2xl sm:text-3xl font-extrabold tracking-tight">FAQ</h2>
            <button id="close-faq" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 text-white hover:bg-yellow-500 hover:text-black transition-all duration-300">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <!-- Scrollable Questions -->
        <div class="p-6 sm:p-8 overflow-y-auto max-h-[calc(80vh-88px)] custom-scrollbar">
            <div class="space-y-6">

                <!-- Q1 -->
                <div class="border-b border-gray-100 pb-4">
                    <h3 class="text-black font-bold text-lg mb-2 faq-q" data-text-id="Berapa lama pengerjaan satu website?" data-text-en="How long does it take to build a website?">Berapa lama pengerjaan satu website?</h3>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed faq-a" data-text-id="Waktu pengerjaan bervariasi tergantung kompleksitas, namun untuk landing page standar biasanya memakan waktu 3-7 hari kerja." data-text-en="The timeline varies depending on complexity, but a standard landing page usually takes 3-7 working days.">
                        Waktu pengerjaan bervariasi tergantung kompleksitas, namun untuk landing page standar biasanya memakan waktu 3-7 hari kerja.
                    </p>
                </div>


                <!-- Q2 -->
                <div class="border-b border-gray-100 pb-4">
                    <h3 class="text-black font-bold text-lg mb-2 faq-q" data-text-id="Apakah harga sudah termasuk domain & hosting?" data-text-en="Is the price including domain & hosting?">Apakah harga sudah termasuk domain & hosting?</h3>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed faq-a" data-text-id="Ya, paket kami biasanya sudah mencakup biaya domain (.com/.id) dan cloud hosting untuk tahun pertama." data-text-en="Yes, our packages usually include domain (.com/.id) and cloud hosting for the first year.">
                        Ya, paket kami biasanya sudah mencakup biaya domain (.com/.id) dan cloud hosting untuk tahun pertama.
                    </p>
                </div>


                <!-- Q3 -->
                <div class="border-b border-gray-100 pb-4">
                    <h3 class="text-black font-bold text-lg mb-2 faq-q" data-text-id="Apakah website ramah tampilan mobile?" data-text-en="Is the website mobile-friendly?">Apakah website ramah tampilan mobile?</h3>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed faq-a" data-text-id="Tentu. Semua website yang kami bangun menggunakan prinsip responsive design, sehingga tampil sempurna di HP, Tablet, maupun Desktop." data-text-en="Absolutely. All our websites use responsive design principles, so they look perfect on mobile, tablet, and desktop.">
                        Tentu. Semua website yang kami bangun menggunakan prinsip responsive design, sehingga tampil sempurna di HP, Tablet, maupun Desktop.
                    </p>
                </div>


                <!-- Q4 -->
                <div class="border-b border-gray-100 pb-4">
                    <h3 class="text-black font-bold text-lg mb-2 faq-q" data-text-id="Bagaimana dengan revisi desain?" data-text-en="How about design revisions?">Bagaimana dengan revisi desain?</h3>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed faq-a" data-text-id="Kami memberikan revisi gratis sampai Anda mendapatkan visual yang benar-benar sesuai dengan konsep bisnis Anda." data-text-en="We provide free revisions until you get a look that truly fits your business concept.">
                        Kami memberikan revisi gratis sampai Anda mendapatkan visual yang benar-benar sesuai dengan konsep bisnis Anda.
                    </p>
                </div>
            </div>

            <!-- Footer Action -->
            <div class="mt-8 text-center pt-4 pb-8">
                <p id="faq-footer-text" class="text-gray-400 text-sm mb-4" data-text-id="Masih punya pertanyaan lain?" data-text-en="Still have other questions?">Masih punya pertanyaan lain?</p>
                <a id="faq-footer-btn" href="https://wa.me/yournumber" target="_blank" class="inline-flex items-center gap-2 bg-yellow-500 text-black font-bold py-3 px-8 rounded-full hover:scale-105 transition-transform"
                   data-text-id="Hubungi Kami" data-text-en="Contact Us">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 10px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #999;
    }
</style>
