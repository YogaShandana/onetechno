// Simple slider for testimoni popup
// Requires: HTML structure with .testimoni-slider and .testimoni-slide

document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.testimoni-slider');
    const slides = document.querySelectorAll('.testimoni-slide');
    const dotsContainer = document.getElementById('testimoni-dots');
    const dots = document.querySelectorAll('#testimoni-dots button');
    let current = 0;
    
    if (!slider || slides.length === 0) return;

    function showSlide(idx) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('hidden', i !== idx);
        });
        
        // Update dots
        dots.forEach((dot, i) => {
            if (i === idx) {
                dot.classList.remove('bg-gray-300');
                dot.classList.add('bg-yellow-500', 'scale-125');
            } else {
                dot.classList.remove('bg-yellow-500', 'scale-125');
                dot.classList.add('bg-gray-300');
            }
        });
        
        current = idx;
    }

    // Dot navigation event listeners
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            showSlide(i);
        });
    });

    // Geser dengan swipe (touch events)
    let startX = 0;
    let isSwiping = false;
    slider.addEventListener('touchstart', function(e) {
        if (e.touches.length === 1) {
            startX = e.touches[0].clientX;
            isSwiping = true;
        }
    });
    slider.addEventListener('touchmove', function(e) {
        if (!isSwiping) return;
        const diff = e.touches[0].clientX - startX;
        if (Math.abs(diff) > 50) {
            if (diff < 0) {
                // next
                showSlide((current + 1) % slides.length);
            } else {
                // prev
                showSlide((current - 1 + slides.length) % slides.length);
            }
            isSwiping = false;
        }
    });
    slider.addEventListener('touchend', function() {
        isSwiping = false;
    });

    // Optional: auto-slide every 3s (only if more than 1 slide)
    if (slides.length > 1) {
        setInterval(() => showSlide((current + 1) % slides.length), 3000);
    }

    // Initialize first slide
    showSlide(0);
    
    // Success Popup Functions
    function showSuccessPopup() {
        const successPopup = document.getElementById('success-popup');
        const successContent = successPopup.querySelector('div');
        
        if (successPopup) {
            // Update text based on current language
            updateSuccessPopupLanguage();
            
            // Show popup
            successPopup.classList.remove('invisible', 'opacity-0');
            successContent.classList.remove('scale-95');
            successContent.classList.add('scale-100');
        }
    }
    
    function hideSuccessPopup() {
        const successPopup = document.getElementById('success-popup');
        const successContent = successPopup.querySelector('div');
        
        if (successPopup) {
            successContent.classList.remove('scale-100');
            successContent.classList.add('scale-95');
            
            setTimeout(() => {
                successPopup.classList.add('invisible', 'opacity-0');
            }, 200);
        }
    }
    
    // Warning Popup Functions
    function showWarningPopup() {
        const warningPopup = document.getElementById('warning-popup');
        const warningContent = warningPopup.querySelector('div');
        
        if (warningPopup) {
            // Update text based on current language
            updateWarningPopupLanguage();
            
            // Show popup
            warningPopup.classList.remove('invisible', 'opacity-0');
            warningContent.classList.remove('scale-95');
            warningContent.classList.add('scale-100');
        }
    }
    
    function showErrorPopup() {
        const warningPopup = document.getElementById('warning-popup');
        const warningContent = warningPopup.querySelector('div');
        const warningTitle = document.getElementById('warning-title');
        const warningMessage = document.getElementById('warning-message');
        
        if (warningPopup) {
            // Get current language
            const btnIndonesia = document.getElementById('btn-indonesia');
            const isIndonesian = btnIndonesia && btnIndonesia.classList.contains('bg-yellow-500');
            
            // Set error messages
            if (warningTitle) {
                warningTitle.textContent = isIndonesian ? 'Error!' : 'Error!';
            }
            if (warningMessage) {
                warningMessage.textContent = isIndonesian ? 
                    'Terjadi kesalahan saat mengirim testimoni. Silakan coba lagi.' :
                    'An error occurred while sending testimonial. Please try again.';
            }
            
            // Show popup
            warningPopup.classList.remove('invisible', 'opacity-0');
            warningContent.classList.remove('scale-95');
            warningContent.classList.add('scale-100');
        }
    }
    
    function hideWarningPopup() {
        const warningPopup = document.getElementById('warning-popup');
        const warningContent = warningPopup.querySelector('div');
        
        if (warningPopup) {
            warningContent.classList.remove('scale-100');
            warningContent.classList.add('scale-95');
            
            setTimeout(() => {
                warningPopup.classList.add('invisible', 'opacity-0');
            }, 200);
        }
    }
    
    function updateWarningPopupLanguage() {
        // Get current language
        const btnIndonesia = document.getElementById('btn-indonesia');
        const isIndonesian = btnIndonesia && btnIndonesia.classList.contains('bg-yellow-500');
        const lang = isIndonesian ? 'id' : 'en';
        
        // Update warning popup text
        const warningTitle = document.getElementById('warning-title');
        const warningMessage = document.getElementById('warning-message');
        const warningOkBtn = document.getElementById('warning-ok-btn');
        
        if (warningTitle) warningTitle.textContent = warningTitle.getAttribute('data-text-' + lang);
        if (warningMessage) warningMessage.textContent = warningMessage.getAttribute('data-text-' + lang);
        if (warningOkBtn) warningOkBtn.textContent = warningOkBtn.getAttribute('data-text-' + lang);
    }
    
    function updateSuccessPopupLanguage() {
        // Get current language
        const btnIndonesia = document.getElementById('btn-indonesia');
        const isIndonesian = btnIndonesia && btnIndonesia.classList.contains('bg-yellow-500');
        const lang = isIndonesian ? 'id' : 'en';
        
        // Update success popup text
        const successTitle = document.getElementById('success-title');
        const successMessage = document.getElementById('success-message');
        const successOkBtn = document.getElementById('success-ok-btn');
        
        if (successTitle) successTitle.textContent = successTitle.getAttribute('data-text-' + lang);
        if (successMessage) successMessage.textContent = successMessage.getAttribute('data-text-' + lang);
        if (successOkBtn) successOkBtn.textContent = successOkBtn.getAttribute('data-text-' + lang);
    }
    
    // Success popup event listeners
    const successOkBtn = document.getElementById('success-ok-btn');
    const successPopup = document.getElementById('success-popup');
    
    if (successOkBtn) {
        successOkBtn.addEventListener('click', hideSuccessPopup);
    }
    
    // Close success popup on backdrop click
    if (successPopup) {
        successPopup.addEventListener('click', function(e) {
            if (e.target === this) {
                hideSuccessPopup();
            }
        });
    }
    
    // Warning popup event listeners
    const warningOkBtn = document.getElementById('warning-ok-btn');
    const warningPopup = document.getElementById('warning-popup');
    
    if (warningOkBtn) {
        warningOkBtn.addEventListener('click', hideWarningPopup);
    }
    
    // Close warning popup on backdrop click
    if (warningPopup) {
        warningPopup.addEventListener('click', function(e) {
            if (e.target === this) {
                hideWarningPopup();
            }
        });
    }
    
    // Close popups on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            if (!successPopup.classList.contains('invisible')) {
                hideSuccessPopup();
            }
            if (!warningPopup.classList.contains('invisible')) {
                hideWarningPopup();
            }
        }
    });
    
    // Testimoni Form Submission
    const testimoniForm = document.getElementById('testimoni-form');
    if (testimoniForm) {
        testimoniForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            // Get current language
            const btnIndonesia = document.getElementById('btn-indonesia');
            const isIndonesian = btnIndonesia && btnIndonesia.classList.contains('bg-yellow-500');
            
            // Get form data
            const formData = new FormData(this);
            const rating = formData.get('rating');
            const comment = formData.get('comment');
            const nama = formData.get('nama');
            const asal = formData.get('asal');
            
            // Validate rating
            if (!rating) {
                showWarningPopup();
                return;
            }
            
            // Show loading state
            submitBtn.disabled = true;
            submitBtn.textContent = isIndonesian ? 'Mengirim...' : 'Sending...';
            
            try {
                const response = await fetch('/testimoni', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                    },
                    body: JSON.stringify({
                        rating: parseInt(rating),
                        comment: comment,
                        nama: nama,
                        asal: asal
                    })
                });
                
                const result = await response.json();
                
                if (result.success) {
                    // Show custom success popup instead of alert
                    showSuccessPopup();
                    
                    // Reset form
                    this.reset();
                    
                    // Reset stars
                    document.querySelectorAll('input[name="rating"]').forEach(input => {
                        input.checked = false;
                    });
                    
                    // Reset button
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                    
                } else {
                    throw new Error(result.message || 'Terjadi kesalahan');
                }
                
            } catch (error) {
                console.error('Error:', error);
                // Show error using warning popup with different message
                showErrorPopup();
                
                // Reset button
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }
        });
    }
});
