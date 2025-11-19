// ========================================
// MODERN INTERACTIONS - SAMUDERA BIRU
// ========================================

document.addEventListener('DOMContentLoaded', () => {
    initVideoBackground();
    initNavbar();
    initSmoothScroll();
    initCounterAnimation();
    initCardTilt();
    initScrollAnimations();
    initTypingAnimation(); // Add typing animation
});

// Video background handler
function initVideoBackground() {
    const video = document.querySelector('.video-background video');
    
    if (!video) return;
    
    // Play video when it's loaded
    video.addEventListener('loadeddata', () => {
        video.play().catch(err => {
            console.log('Video autoplay failed:', err);
            // Fallback: hide video if autoplay fails
            video.style.display = 'none';
        });
    });
    
    // Pause video when not in viewport (performance optimization)
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                video.play().catch(() => {});
            } else {
                video.pause();
            }
        });
    }, { threshold: 0.1 });
    
    observer.observe(video);
    
    // Reduce playback rate for smoother, cinematic effect
    video.playbackRate = 0.75;
}

// Navbar scroll effect
function initNavbar() {
    const navbar = document.getElementById('mainNav');
    const mobileToggle = document.getElementById('mobileToggle');
    
    if (!navbar) return;
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Smooth scroll for nav links (only for anchors, not page navigation)
    document.querySelectorAll('.nav-link').forEach(link => {
        const href = link.getAttribute('href');
        
        // Only apply smooth scroll for anchor links (#), not page links
        if (href && href.startsWith('#')) {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
                
                // Update active state
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                link.classList.add('active');
            });
        }
    });
}

// Smooth scroll for all internal links
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Animated counters for stats
function initCounterAnimation() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200; // Animation speed
    
    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const increment = target / speed;
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.ceil(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        updateCounter();
    };
    
    // Intersection Observer for triggering animation on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => observer.observe(counter));
}

// 3D Tilt effect for service cards
function initCardTilt() {
    const cards = document.querySelectorAll('[data-tilt]');
    
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;
            
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
        });
    });
}

// Scroll animations for elements
function initScrollAnimations() {
    const animateOnScroll = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    };
    
    const observer = new IntersectionObserver(animateOnScroll, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    });
    
    // Elements to animate
    const elements = document.querySelectorAll('.service-card, .about-content, .cta-content');
    
    elements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
}

// Typing Animation for Homepage Hero - Looping Effect
function initTypingAnimation() {
    console.log('🏠 initTypingAnimation called');
    
    const typingElement = document.querySelector('.hero-heading .typing-text');
    
    console.log('Homepage Typing Element:', typingElement);
    
    if (!typingElement) {
        console.log('❌ Typing element not found on homepage');
        return;
    }
    
    const text = typingElement.textContent.trim();
    console.log('Original Text:', text);
    
    typingElement.textContent = '';
    
    let charIndex = 0;
    let isDeleting = false;
    
    function typeEffect() {
        if (!isDeleting && charIndex < text.length) {
            // Typing forward
            typingElement.textContent += text.charAt(charIndex);
            charIndex++;
            setTimeout(typeEffect, 100);
        } else if (!isDeleting && charIndex === text.length) {
            // Pause at end before deleting
            isDeleting = true;
            setTimeout(typeEffect, 2000);
        } else if (isDeleting && charIndex > 0) {
            // Deleting backward
            typingElement.textContent = text.substring(0, charIndex - 1);
            charIndex--;
            setTimeout(typeEffect, 50);
        } else if (isDeleting && charIndex === 0) {
            // Pause at start before typing again
            isDeleting = false;
            setTimeout(typeEffect, 500);
        }
    }
    
    // Start typing after animations settle
    console.log('⏰ Homepage typing will start in 1.5 seconds');
    setTimeout(typeEffect, 1500);
}

// Newsletter form submission
const newsletterForm = document.querySelector('.newsletter-form');
if (newsletterForm) {
    newsletterForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const email = newsletterForm.querySelector('input[type="email"]').value;
        
        // Add your newsletter subscription logic here
        console.log('Newsletter subscription:', email);
        
        // Show success message (you can customize this)
        alert('Thank you for subscribing!');
        newsletterForm.reset();
    });
}
