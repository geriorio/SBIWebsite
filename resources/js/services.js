/**
 * SERVICES PAGE - Interactive Animations & Effects
 * Optimized for performance - minimal lag
 */

// Wait for both DOM and AOS to be ready
function initializeServicesPage() {
    console.log('🚀 Services Page Initialized');

    // ========================================
    // SMOOTH SCROLL FOR NAVIGATION & CTA BUTTONS
    // ========================================
    
    // Function to handle smooth scroll with proper offset
    function smoothScrollToElement(targetId) {
        const target = document.querySelector(targetId);
        if (!target) {
            console.warn(`❌ Target not found: ${targetId}`);
            return false;
        }
        
        // Calculate offset based on fixed header/navbar height
        const headerOffset = 120;
        
        // Get the target's position relative to viewport
        const elementPosition = target.getBoundingClientRect().top;
        
        // Calculate absolute position including current scroll
        const absolutePosition = elementPosition + window.pageYOffset;
        
        // Final scroll position with header offset
        const offsetPosition = absolutePosition - headerOffset;
        
        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
        
        console.log(`✅ Scrolling to ${targetId}`, {
            target: target,
            elementPositionInViewport: elementPosition,
            currentScrollY: window.pageYOffset,
            absolutePosition: absolutePosition,
            finalScrollPosition: offsetPosition
        });
        
        return true;
    }
    
    // Apply to all anchor links that start with #
    const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');
    
    console.log(`Found ${smoothScrollLinks.length} anchor links`);
    
    smoothScrollLinks.forEach((link, index) => {
        const href = link.getAttribute('href');
        console.log(`Link ${index + 1}: href="${href}"`);
        
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Skip empty or just '#' hrefs
            if (!href || href === '#' || href.length <= 1) {
                return;
            }
            
            // Prevent default anchor behavior
            e.preventDefault();
            e.stopPropagation();
            
            console.log(`🖱️ Clicked link with href: ${href}`);
            
            // Perform smooth scroll
            const scrolled = smoothScrollToElement(href);
            if (!scrolled) {
                console.error(`❌ Failed to scroll to ${href}`);
            }
        });
    });

    // ========================================
    // LIGHTWEIGHT PARALLAX SCROLL EFFECT
    // (Optimized - reduced calculations)
    // ========================================
    let ticking = false;
    
    function parallaxScroll() {
        const scrolled = window.pageYOffset;
        
        // Hero content parallax only
        const heroContent = document.querySelector('.services-hero-content');
        if (heroContent && scrolled < 800) {
            heroContent.style.transform = `translateY(${scrolled * 0.2}px)`;
            heroContent.style.opacity = Math.max(0, 1 - (scrolled / 600));
        }

        ticking = false;
    }

    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(parallaxScroll);
            ticking = true;
        }
    }, { passive: true });

    // ========================================
    // SIMPLE PILLAR CARDS HOVER
    // (No 3D tilt - just simple hover)
    // ========================================
    const pillarCards = document.querySelectorAll('.pillar-card');
    
    pillarCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const cta = this.querySelector('.pillar-cta');
            if (cta) {
                cta.style.transform = 'translateY(-2px) scale(1.02)';
            }
        });

        card.addEventListener('mouseleave', function() {
            const cta = this.querySelector('.pillar-cta');
            if (cta) {
                cta.style.transform = '';
            }
        });
    });

    // ========================================
    // VALUE CARDS STAGGER ANIMATION
    // ========================================
    const valueCards = document.querySelectorAll('.choose-value-card');
    
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    };

    const cardObserver = new IntersectionObserver(function(entries) {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, observerOptions);

    valueCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(40px)';
        card.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
        cardObserver.observe(card);
    });

    // ========================================
    // SIMPLE ICON HOVER EFFECT
    // ========================================
    const iconWrappers = document.querySelectorAll('.value-icon-wrapper');
    
    iconWrappers.forEach(wrapper => {
        wrapper.addEventListener('mouseenter', function() {
            const glow = this.querySelector('.icon-glow');
            const icon = this.querySelector('.value-icon');
            
            if (glow) {
                glow.style.opacity = '0.6';
                glow.style.transform = 'scale(1.2)';
            }
            
            if (icon) {
                icon.style.transform = 'scale(1.05)';
            }
        });

        wrapper.addEventListener('mouseleave', function() {
            const glow = this.querySelector('.icon-glow');
            const icon = this.querySelector('.value-icon');
            
            if (glow) {
                glow.style.opacity = '';
                glow.style.transform = '';
            }
            
            if (icon) {
                icon.style.transform = '';
            }
        });
    });

    // ========================================
    // CTA BUTTON SIMPLE RIPPLE EFFECT
    // ========================================
    const ctaButtons = document.querySelectorAll('.pillar-cta, .cta-button');
    
    ctaButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = button.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.5);
                transform: scale(0);
                animation: ripple 0.5s ease-out;
                pointer-events: none;
            `;
            
            button.style.position = 'relative';
            button.style.overflow = 'hidden';
            button.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 500);
        });
    });

    // Add ripple animation
    if (!document.getElementById('ripple-animation-style')) {
        const style = document.createElement('style');
        style.id = 'ripple-animation-style';
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(2);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    }

    // ========================================
    // SECTION REVEAL ON SCROLL
    // ========================================
    const sections = document.querySelectorAll('.services-intro-section, .service-pillars-section, .why-choose-sbi-section, .services-cta-section');
    
    const sectionObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('section-visible');
            }
        });
    }, {
        threshold: 0.1
    });

    sections.forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
        sectionObserver.observe(section);
    });

    // Add visible class styles
    if (!document.getElementById('section-visible-style')) {
        const sectionStyle = document.createElement('style');
        sectionStyle.id = 'section-visible-style';
        sectionStyle.textContent = `
            .section-visible {
                opacity: 1 !important;
                transform: translateY(0) !important;
            }
        `;
        document.head.appendChild(sectionStyle);
    }

    // ========================================
    // SIMPLE MAGNETIC CTA BUTTON EFFECT
    // (Reduced intensity)
    // ========================================
    const magneticButtons = document.querySelectorAll('.cta-button');
    
    magneticButtons.forEach(button => {
        button.addEventListener('mousemove', function(e) {
            if (window.innerWidth > 768) {
                const rect = button.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                button.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) scale(1.02)`;
            }
        });

        button.addEventListener('mouseleave', function() {
            button.style.transform = '';
        });
    });

    console.log('✨ Services animations loaded - optimized for performance');
    document.body.classList.add('services-loaded');
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    // Small delay to ensure AOS has initialized
    setTimeout(() => {
        initializeServicesPage();
    }, 100);
});

// ========================================
// RESIZE HANDLER (Debounced)
// ========================================
let resizeTimer;
window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        // Only log, no heavy operations
        console.log('📱 Window resized');
    }, 250);
}, { passive: true });
