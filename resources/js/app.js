import './bootstrap';
import './testimoni-slider';

// Main DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
    const scrollContainer = document.querySelector('.scroll-container');

    // Track which pages have been animated
    const animatedPages = {
        page2: false,
        page3: false,
        page4: false
    };

    // Scroll animation for Page 1
    const page1 = document.getElementById('page-1');
    const logoElement = document.getElementById('page1-logo');
    const contentElement = document.getElementById('page1-content');

    let page1Animated = false;
    // Wait for initial animation to complete, then let JavaScript take over
    if (logoElement && contentElement) {
        setTimeout(() => {
            // Remove CSS animation and let JavaScript control
            logoElement.style.animation = 'none';
            contentElement.style.animation = 'none';
            // Set initial state for JavaScript control
            logoElement.style.opacity = '1';
            logoElement.style.transform = 'translateY(0) scale(1)';
            contentElement.style.opacity = '1';
            contentElement.style.transform = 'translateY(0) scale(1)';
            page1Animated = true;
        }, 1600);
    }


    // Language switcher for page 1
    const btnInd = document.getElementById('btn-indonesia');
    const btnEng = document.getElementById('btn-english');
    function switchLang(lang) {
        // Description
        const desc = document.getElementById('page1-desc');
        if (desc) desc.textContent = desc.getAttribute('data-text-' + lang);
        // Nav buttons
        ['nav-portofolio', 'nav-faq', 'nav-testimoni'].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.textContent = el.getAttribute('data-text-' + lang);
        });
        // FAQ
        document.querySelectorAll('.faq-q').forEach(q => {
            q.textContent = q.getAttribute('data-text-' + lang);
        });
        document.querySelectorAll('.faq-a').forEach(a => {
            a.textContent = a.getAttribute('data-text-' + lang);
        });
        const faqFooterText = document.getElementById('faq-footer-text');
        if (faqFooterText) faqFooterText.textContent = faqFooterText.getAttribute('data-text-' + lang);
        const faqFooterBtn = document.getElementById('faq-footer-btn');
        if (faqFooterBtn) faqFooterBtn.textContent = faqFooterBtn.getAttribute('data-text-' + lang);
        // Testimoni
        document.querySelectorAll('.testi-text').forEach(el => {
            el.textContent = el.getAttribute('data-text-' + lang);
        });
        document.querySelectorAll('.testi-name').forEach(el => {
            el.textContent = el.getAttribute('data-text-' + lang);
        });
        document.querySelectorAll('.testi-job').forEach(el => {
            el.textContent = el.getAttribute('data-text-' + lang);
        });
        document.querySelectorAll('.testi-form-label').forEach(el => {
            el.textContent = el.getAttribute('data-text-' + lang);
        });
        const testiHeader = document.getElementById('testi-header');
        if (testiHeader) testiHeader.textContent = testiHeader.getAttribute('data-text-' + lang);
        // Page 2
        document.querySelectorAll('.page2-step').forEach(el => {
            el.textContent = el.getAttribute('data-text-' + lang);
        });
        const page2Desc = document.getElementById('page2-desc');
        if (page2Desc) page2Desc.textContent = page2Desc.getAttribute('data-text-' + lang);
        // Page 3
        const page3Title = document.querySelector('#page-3 h1[data-text-id]');
        if (page3Title) page3Title.textContent = page3Title.getAttribute('data-text-' + lang);
        const page3Desc = document.querySelector('#page-3 p[data-text-id]');
        if (page3Desc) page3Desc.textContent = page3Desc.getAttribute('data-text-' + lang);
        // Page 4
        document.querySelectorAll('.page4-title').forEach(el => {
            el.textContent = el.getAttribute('data-text-' + lang);
        });
        // Contact button
        const contactBtn = document.querySelector('#contact-btn span[data-text-id]');
        if (contactBtn) contactBtn.textContent = contactBtn.getAttribute('data-text-' + lang);
        
        // Testimoni form elements
        document.querySelectorAll('.testi-form-label').forEach(el => {
            el.textContent = el.getAttribute('data-text-' + lang);
        });
        if (testiHeader) testiHeader.textContent = testiHeader.getAttribute('data-text-' + lang);
        
        // Success popup elements
        const successTitle = document.getElementById('success-title');
        const successMessage = document.getElementById('success-message');
        const successOkBtn = document.getElementById('success-ok-btn');
        if (successTitle) successTitle.textContent = successTitle.getAttribute('data-text-' + lang);
        if (successMessage) successMessage.textContent = successMessage.getAttribute('data-text-' + lang);
        if (successOkBtn) successOkBtn.textContent = successOkBtn.getAttribute('data-text-' + lang);
        
        // Rating error message element
        const ratingError = document.getElementById('rating-error');
        if (ratingError) ratingError.textContent = ratingError.getAttribute('data-text-' + lang);
        
        // Update WhatsApp URL with language-specific auto text
        const whatsappLink = document.querySelector('a[href*="wa.me"]');
        if (whatsappLink) {
            const baseUrl = 'https://wa.me/6285119310399?text=';
            if (lang === 'id') {
                const autoTextId = 'Halo%20OneTechno!%20Saya%20tertarik%20dengan%20layanan%20digital%20yang%20Anda%20tawarkan.%20Bisakah%20kita%20diskusi%20lebih%20lanjut?';
                whatsappLink.href = baseUrl + autoTextId;
            } else {
                const autoTextEn = 'Hello%20OneTechno!%20I%20am%20interested%20in%20your%20digital%20services.%20Can%20we%20discuss%20further?';
                whatsappLink.href = baseUrl + autoTextEn;
            }
        }
        
        // Highlight active lang
        if (btnInd && btnEng) {
            if (lang === 'id') {
                btnInd.classList.add('bg-yellow-500');
                btnEng.classList.remove('bg-yellow-500');
            } else {
                btnEng.classList.add('bg-yellow-500');
                btnInd.classList.remove('bg-yellow-500');
            }
        }
    }
    if (btnInd) btnInd.addEventListener('click', () => switchLang('id'));
    if (btnEng) btnEng.addEventListener('click', () => switchLang('en'));
    // Default: Indonesia
    switchLang('id');

    const page2 = document.getElementById('page-2');
    const page3 = document.getElementById('page-3');
    const page4 = document.getElementById('page-4');

    const page2Content = document.getElementById('page2-content');
    const page2Image = document.getElementById('page2-image');
    const page3Images = document.getElementById('page3-images');
    const page4Title = document.getElementById('page4-title');
    const page4Grid = document.getElementById('page4-grid');

    if (scrollContainer) {
        scrollContainer.addEventListener('scroll', function () {
            const scrollPosition = scrollContainer.scrollTop;
            const windowHeight = window.innerHeight;

            // Page 1 animations - always responsive to scroll position
            if (logoElement && contentElement) {
                const scrollProgress1 = Math.min(scrollPosition / windowHeight, 1);
                // Calculate values based on how far we've scrolled (exit animation)
                const opacity1 = 1 - (scrollProgress1 * 1.5);
                const translateY1 = scrollProgress1 * 150;
                const scale1 = 1 - (scrollProgress1 * 0.2);

                logoElement.style.opacity = Math.max(0, Math.min(1, opacity1));
                logoElement.style.transform = `translateY(-${translateY1}px) scale(${scale1})`;
                contentElement.style.opacity = Math.max(0, Math.min(1, opacity1));
                contentElement.style.transform = `translateY(-${translateY1}px) scale(${scale1})`;
            }

            // Page 2 animations
            if (page2 && page2Content && page2Image) {
                const page2Top = page2.offsetTop;
                const page2Bottom = page2Top + page2.offsetHeight;

                if (scrollPosition + windowHeight > page2Top && scrollPosition < page2Bottom) {
                    const scrollFromPage2Top = scrollPosition - page2Top;
                    const page2Progress = Math.max(0, Math.min(1, (scrollFromPage2Top + windowHeight) / (windowHeight * 1.5)));

                    const opacity = Math.min(1, page2Progress * 2.5);
                    const isMobile = window.innerWidth < 1024;

                    if (isMobile) {
                        page2Content.style.opacity = opacity;
                        page2Content.style.transform = 'none';
                        page2Image.style.opacity = opacity;
                        page2Image.style.transform = 'none';
                    } else {
                        const translateX = (1 - page2Progress) * -150;
                        page2Content.style.opacity = opacity;
                        page2Content.style.transform = `translateX(${translateX}px)`;
                        page2Image.style.opacity = opacity;
                        page2Image.style.transform = `translateX(${-translateX}px)`;
                    }
                }
            }

            // Page 3 animations
            if (page3 && page3Images) {
                const page3Top = page3.offsetTop;
                const page3Bottom = page3Top + page3.offsetHeight;

                if (scrollPosition + windowHeight > page3Top && scrollPosition < page3Bottom) {
                    const page3Progress = Math.max(0, Math.min(1, (scrollPosition - page3Top + windowHeight) / (windowHeight * 1.5)));
                    const opacity = Math.min(1, page3Progress * 2.5);
                    const scale = 0.85 + (page3Progress * 0.15);
                    const translateY = (1 - page3Progress) * 70;

                    // Animate title (with inline styles)
                    const titleElement = document.querySelector('#page-3 .scroll-animate:first-child');
                    if (titleElement) {
                        titleElement.style.opacity = opacity;
                        titleElement.style.transform = `translateY(${translateY}px) scale(${scale})`;
                    }

                    // Animate portfolio images
                    page3Images.style.opacity = opacity;
                    page3Images.style.transform = `translateY(${translateY}px) scale(${scale})`;
                }
            }

            // Page 4 animations
            if (page4 && page4Title && page4Grid) {
                const page4Top = page4.offsetTop;
                const page4Bottom = page4Top + page4.offsetHeight;
                const distanceFromTop = scrollPosition - page4Top + windowHeight;

                if (scrollPosition + windowHeight > page4Top && scrollPosition < page4Bottom) {
                    // Title animation
                    const titleProgress = Math.max(0, Math.min(1, (distanceFromTop - windowHeight * 0.2) / (windowHeight * 0.7)));
                    const titleOpacity = Math.min(1, titleProgress * 2);
                    const titleTranslateY = (1 - titleProgress) * 100;

                    page4Title.style.opacity = titleOpacity;
                    page4Title.style.transform = `translateY(${titleTranslateY}px)`;

                    // Grid animation
                    const gridProgress = Math.max(0, Math.min(1, (distanceFromTop - windowHeight * 0.4) / (windowHeight * 0.7)));
                    const gridOpacity = Math.min(1, gridProgress * 2);
                    const gridTranslateY = (1 - gridProgress) * 120;
                    const gridScale = 0.9 + (gridProgress * 0.1);

                    page4Grid.style.opacity = gridOpacity;
                    page4Grid.style.transform = `translateY(${gridTranslateY}px) scale(${gridScale})`;
                }
            }
        });
    }

    // Page 2 Feature Clicks
    const stepTerpercaya = document.getElementById('step-terpercaya');
    const stepCepat = document.getElementById('step-cepat');
    const stepMurah = document.getElementById('step-murah');
    const page2Desc = document.getElementById('page2-desc');

    const descriptions = {
        terpercaya: "One Techno Menjamin Keamanan dan Kepercayaan Penuh Dalam Setiap Solusi Digital yang Kami Bangun untuk Bisnis Anda.",
        cepat: "One Techno Memproses Pengerjaan yang Kilat dan Responsif Namun Tetap Mengutamakan Kualitas Terbaik.",
        murah: "One Techno Memberikan Penawaran Harga Terbaik dengan Kualitas Premium yang Dapat Disesuaikan dengan Kebutuhan Anda."
    };

    function updatePage2Desc(key, activeElement) {
        if (!page2Desc) return;

        // Remove active states from all
        [stepTerpercaya, stepCepat, stepMurah].forEach(el => {
            if (el) {
                el.classList.remove('scale-110', 'z-40', 'brightness-110');
                el.classList.add('z-20');
            }
        });

        // Add active state to clicked one
        if (activeElement) {
            activeElement.classList.remove('z-20');
            activeElement.classList.add('scale-110', 'z-40', 'brightness-110');
        }

        page2Desc.style.opacity = '0';
        setTimeout(() => {
            page2Desc.innerHTML = descriptions[key];
            page2Desc.style.opacity = '1';
        }, 300);
    }

    if (stepTerpercaya) stepTerpercaya.addEventListener('click', () => updatePage2Desc('terpercaya', stepTerpercaya));
    if (stepCepat) stepCepat.addEventListener('click', () => updatePage2Desc('cepat', stepCepat));
    if (stepMurah) stepMurah.addEventListener('click', () => updatePage2Desc('murah', stepMurah));

    // Initialize first state
    if (stepTerpercaya) {
        stepTerpercaya.classList.add('scale-110', 'z-40', 'brightness-110');
    }

    // Navigation Buttons Jump & Popups
    const navPortofolio = document.getElementById('nav-portofolio');
    const navFaq = document.getElementById('nav-faq');
    const navTestimoni = document.getElementById('nav-testimoni');

    const faqPopup = document.getElementById('faq-popup');
    const faqContent = document.getElementById('faq-content');
    const closeFaq = document.getElementById('close-faq');

    const testiPopup = document.getElementById('testimoni-popup');
    const testiContent = document.getElementById('testimoni-content');
    const closeTesti = document.getElementById('close-testimoni');
    const startNowTesti = document.getElementById('start-now-testi');

    if (navPortofolio && scrollContainer) {
        navPortofolio.addEventListener('click', () => {
            const page4 = document.getElementById('page-4');
            if (page4) {
                scrollContainer.scrollTo({
                    top: page4.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    }

    // FAQ Popup Logic
    if (navFaq && faqPopup && faqContent && closeFaq) {
        const toggleFaq = (show) => {
            if (show) {
                faqPopup.classList.remove('invisible', 'opacity-0');
                faqPopup.classList.add('visible', 'opacity-100');
                faqContent.classList.remove('scale-95');
                faqContent.classList.add('scale-100');
            } else {
                faqPopup.classList.remove('visible', 'opacity-100');
                faqPopup.classList.add('invisible', 'opacity-0');
                faqContent.classList.remove('scale-100');
                faqContent.classList.add('scale-95');
            }
        };

        navFaq.addEventListener('click', (e) => {
            e.preventDefault();
            toggleFaq(true);
        });

        closeFaq.addEventListener('click', () => toggleFaq(false));

        faqPopup.addEventListener('click', (e) => {
            if (e.target === faqPopup) toggleFaq(false);
        });
    }

    // Testimoni Popup Logic
    if (navTestimoni && testiPopup && testiContent && closeTesti) {
        const toggleTesti = (show) => {
            if (show) {
                testiPopup.classList.remove('invisible', 'opacity-0');
                testiPopup.classList.add('visible', 'opacity-100');
                testiContent.classList.remove('scale-95');
                testiContent.classList.add('scale-100');
            } else {
                testiPopup.classList.remove('visible', 'opacity-100');
                testiPopup.classList.add('invisible', 'opacity-0');
                testiContent.classList.remove('scale-100');
                testiContent.classList.add('scale-95');
            }
        };

        navTestimoni.addEventListener('click', (e) => {
            e.preventDefault();
            toggleTesti(true);
        });

        closeTesti.addEventListener('click', () => toggleTesti(false));

        testiPopup.addEventListener('click', (e) => {
            if (e.target === testiPopup) toggleTesti(false);
        });

        if (startNowTesti) {
            startNowTesti.addEventListener('click', () => {
                toggleTesti(false);
                const page4 = document.getElementById('page-4');
                if (page4 && scrollContainer) {
                    scrollContainer.scrollTo({
                        top: page4.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        }
    }

    // Language toggle
    const btnIndonesia = document.getElementById('btn-indonesia');
    const btnEnglish = document.getElementById('btn-english');

    if (btnIndonesia && btnEnglish) {
        btnIndonesia.addEventListener('click', function () {
            // Set Indonesia active
            btnIndonesia.classList.add('bg-yellow-500', 'text-black');
            btnIndonesia.classList.remove('bg-transparent', 'hover:bg-gray-200');

            // Set English inactive
            btnEnglish.classList.remove('bg-yellow-500');
            btnEnglish.classList.add('bg-transparent', 'hover:bg-gray-200');
        });

        btnEnglish.addEventListener('click', function () {
            // Set English active
            btnEnglish.classList.add('bg-yellow-500', 'text-black');
            btnEnglish.classList.remove('bg-transparent', 'hover:bg-gray-200');

            // Set Indonesia inactive
            btnIndonesia.classList.remove('bg-yellow-500');
            btnIndonesia.classList.add('bg-transparent', 'hover:bg-gray-200');
        });
    }

    // Toggle social media popup
    const contactBtn = document.getElementById('contact-btn');
    const socialPopup = document.getElementById('social-popup');
    const contactContainer = document.getElementById('contact-container');
    let isPopupOpen = false;

    if (contactBtn && socialPopup) {
        contactBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            isPopupOpen = !isPopupOpen;

            if (isPopupOpen) {
                socialPopup.classList.remove('opacity-0', 'invisible', 'translate-y-2');
                socialPopup.classList.add('opacity-100', 'visible', 'translate-y-0');
            } else {
                socialPopup.classList.add('opacity-0', 'invisible', 'translate-y-2');
                socialPopup.classList.remove('opacity-100', 'visible', 'translate-y-0');
            }
        });

        // Close popup when clicking outside
        document.addEventListener('click', function (e) {
            if (isPopupOpen && !contactContainer.contains(e.target)) {
                isPopupOpen = false;
                socialPopup.classList.add('opacity-0', 'invisible', 'translate-y-2');
                socialPopup.classList.remove('opacity-100', 'visible', 'translate-y-0');
            }
        });
    }
});
