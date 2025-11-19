@extends('layouts.app')

@section('content')
    <!-- Contact Hero Section -->
    <section class="contact-hero-modern">
        <div class="contact-hero-bg">
            <div class="contact-animated-bg"></div>
        </div>
        
        <div class="contact-hero-wrapper">
            <div class="contact-hero-left" data-aos="fade-right">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Get In Touch
                </div>
                <h1 class="hero-heading">
                    <span class="text-gradient">BECOME A PART OF</span>
                    <br/>SBI CHANGE INITIATIVE
                </h1>
                <p class="hero-description">
                    Join us in transforming Indonesian industries. Let's discuss how we can work together to achieve your digital transformation goals.
                </p>
                
                <!-- Contact Info Cards -->
                <div class="contact-info-cards">
                    <div class="info-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M3 8L10.89 13.26C11.2187 13.4793 11.6049 13.5963 12 13.5963C12.3951 13.5963 12.7813 13.4793 13.11 13.26L21 8M5 19H19C19.5304 19 20.0391 18.7893 20.4142 18.4142C20.7893 18.0391 21 17.5304 21 17V7C21 6.46957 20.7893 5.96086 20.4142 5.58579C20.0391 5.21071 19.5304 5 19 5H5C4.46957 5 3.96086 5.21071 3.58579 5.58579C3.21071 5.96086 3 6.46957 3 7V17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Email</div>
                            <div class="info-value">info@samuderabiru.com</div>
                        </div>
                    </div>

                    <div class="info-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M3 5C3 3.89543 3.89543 3 5 3H8.27924C8.70967 3 9.09181 3.27543 9.22792 3.68377L10.7257 8.17721C10.8831 8.64932 10.6694 9.16531 10.2243 9.38787L7.96701 10.5165C9.06925 12.9612 11.0388 14.9308 13.4835 16.033L14.6121 13.7757C14.8347 13.3306 15.3507 13.1169 15.8228 13.2743L20.3162 14.7721C20.7246 14.9082 21 15.2903 21 15.7208V19C21 20.1046 20.1046 21 19 21H18C9.71573 21 3 14.2843 3 6V5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Phone</div>
                            <div class="info-value">+62 21 1234 5678</div>
                        </div>
                    </div>

                    <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M17.657 16.657L13.414 20.9C13.039 21.2746 12.5306 21.4851 12 21.4851C11.4694 21.4851 10.961 21.2746 10.586 20.9L6.343 16.657C5.22422 15.5381 4.46234 14.1127 4.15369 12.5608C3.84504 11.009 4.00349 9.40047 4.60901 7.93868C5.21452 6.4769 6.2399 5.22749 7.55548 4.34846C8.87107 3.46943 10.4178 3.00024 12 3.00024C13.5822 3.00024 15.1289 3.46943 16.4445 4.34846C17.7601 5.22749 18.7855 6.4769 19.391 7.93868C19.9965 9.40047 20.155 11.009 19.8463 12.5608C19.5377 14.1127 18.7758 15.5381 17.657 16.657Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Office</div>
                            <div class="info-value">Jakarta, Indonesia</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-hero-right" data-aos="fade-left" data-aos-delay="200">
                <div class="contact-form-card">
                    <div class="contact-form-header">
                        <h2 class="contact-form-title">GENERAL INQUIRIES</h2>
                        <p class="contact-form-subtitle">Fill out the form and we'll get back to you within 24 hours</p>
                    </div>

                    <form class="contact-form-modern" id="contactForm">
                        <div class="contact-form-group">
                            <label for="fullName" class="contact-form-label">Full Name</label>
                            <input 
                                type="text" 
                                id="fullName" 
                                name="fullName" 
                                class="contact-form-input" 
                                placeholder="John Doe"
                                required
                            >
                            <div class="contact-input-line"></div>
                        </div>

                        <div class="contact-form-group">
                            <label for="email" class="contact-form-label">Email</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="contact-form-input" 
                                placeholder="john@example.com"
                                required
                            >
                            <div class="contact-input-line"></div>
                        </div>

                        <div class="contact-form-group">
                            <label for="subject" class="contact-form-label">Subject</label>
                            <input 
                                type="text" 
                                id="subject" 
                                name="subject" 
                                class="contact-form-input" 
                                placeholder="How can we help you?"
                                required
                            >
                            <div class="contact-input-line"></div>
                        </div>

                        <div class="contact-form-group">
                            <label for="message" class="contact-form-label">Message</label>
                            <textarea 
                                id="message" 
                                name="message" 
                                class="contact-form-textarea" 
                                placeholder="Tell us more about your project..."
                                rows="4"
                                required
                            ></textarea>
                            <div class="contact-input-line"></div>
                        </div>

                        <button type="submit" class="contact-btn-submit">
                            <span class="contact-btn-text">SUBMIT</span>
                            <div class="contact-btn-glow"></div>
                            <svg class="contact-btn-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4.5 10H15.5M15.5 10L10.5 5M15.5 10L10.5 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
// Contact Form Handling with enhanced animations
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const button = this.querySelector('.contact-btn-submit');
        const btnText = button.querySelector('.contact-btn-text');
        
        // Show loading state
        button.classList.add('loading');
        btnText.textContent = 'SENDING';
        
        // Simulate form submission (replace with actual API call)
        setTimeout(() => {
            button.classList.remove('loading');
            button.classList.add('success');
            btnText.textContent = 'SENT!';
            
            // Reset form
            this.reset();
            
            // Remove focused states
            document.querySelectorAll('.contact-form-group').forEach(group => {
                group.classList.remove('focused');
            });
            
            // Reset button after 3 seconds
            setTimeout(() => {
                button.classList.remove('success');
                btnText.textContent = 'SUBMIT';
            }, 3000);
        }, 2000);
    });
}

// Form input animations with Contact prefix
document.querySelectorAll('.contact-form-input, .contact-form-textarea').forEach(input => {
    input.addEventListener('focus', function() {
        this.parentElement.classList.add('focused');
    });
    
    input.addEventListener('blur', function() {
        if (!this.value) {
            this.parentElement.classList.remove('focused');
        }
    });
    
    // Add particle effect on focus
    input.addEventListener('focus', function() {
        createInputParticles(this);
    });
});

// Create particle effect for inputs
function createInputParticles(input) {
    const rect = input.getBoundingClientRect();
    const particles = 5;
    
    for (let i = 0; i < particles; i++) {
        const particle = document.createElement('div');
        particle.style.cssText = `
            position: fixed;
            width: 4px;
            height: 4px;
            background: var(--primary);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            left: ${rect.left + Math.random() * rect.width}px;
            top: ${rect.bottom}px;
            opacity: 1;
            transition: all 0.6s ease-out;
        `;
        document.body.appendChild(particle);
        
        setTimeout(() => {
            particle.style.transform = `translateY(-${20 + Math.random() * 20}px)`;
            particle.style.opacity = '0';
        }, 10);
        
        setTimeout(() => {
            particle.remove();
        }, 620);
    }
}
</script>
@endpush
