/**
 * SERVICE DETAIL PAGES - Interactive Features
 */

document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 Service Detail Page Initialized');

    // Initialize AOS with custom settings for detail pages
    if (typeof AOS !== 'undefined') {
        AOS.refresh();
    }

    // Smooth scroll for internal links
    const internalLinks = document.querySelectorAll('a[href^="#"]');
    internalLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href.length > 1) {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const headerOffset = 100;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Form submission handling
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            
            // You can add your form submission logic here
            console.log('Form submitted:', Object.fromEntries(formData));
            
            // Show success message (you can customize this)
            alert('Thank you! We will get back to you within 24 hours.');
            
            // Close modal
            closeContactModal();
            
            // Reset form
            this.reset();
        });
    }

    // Add scroll reveal animation for stats
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    };

    const statsObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    const statItems = document.querySelectorAll('.stat-item, .pain-card, .result-card');
    statItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = `all 0.6s ease ${index * 0.1}s`;
        statsObserver.observe(item);
    });

    console.log('✨ Service Detail animations loaded');
});

// Modal functions (global scope for onclick handlers)
window.openContactModal = function() {
    const modal = document.getElementById('contactModal');
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
};

window.closeContactModal = function() {
    const modal = document.getElementById('contactModal');
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
};

// Service Modal function for "Get Started with SBI" buttons
window.openServiceModal = function() {
    const modal = document.getElementById('serviceContactModal');
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
        console.log('📞 Service Contact Modal opened');
    } else {
        console.error('Service contact modal not found');
    }
};

window.closeServiceModal = function() {
    const modal = document.getElementById('serviceContactModal');
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
};
