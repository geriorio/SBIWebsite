<footer class="footer-modern" id="contact">
    <div class="footer-gradient"></div>
    
    <div class="footer-container">
        <!-- Top Section -->
        <div class="footer-top">
            <div class="footer-brand-col">
                <div class="footer-brand">
                    <div class="brand-icon-footer">
                        @if(file_exists(public_path('sbi.webp')))
                            <img src="{{ asset('sbi.png') }}" alt="SBI Logo" style="width: 100%; height: 100%; object-fit: contain;" />
                        @else
                            <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="18" stroke="url(#footerGradient)" stroke-width="2"/>
                                <path d="M12 20 L18 14 L24 20 L30 14" stroke="url(#footerGradient)" stroke-width="2" stroke-linecap="round"/>
                                <defs>
                                    <linearGradient id="footerGradient" x1="0" y1="0" x2="40" y2="40">
                                        <stop offset="0%" stop-color="#00E5FF"/>
                                        <stop offset="100%" stop-color="#00B8D4"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        @endif
                    </div>
                    <div>
                        <h3 class="footer-brand-name">Samudera Biru</h3>
                        <p class="footer-brand-sub">Internasional</p>
                    </div>
                </div>
                <p class="footer-tagline">Empowering Indonesian industries through innovation and technology excellence.</p>
                
                <div class="footer-social">
                    <a href="#" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M18.5 0h-17A1.5 1.5 0 000 1.5v17A1.5 1.5 0 001.5 20h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0018.5 0zM6 17H3V8h3v9zM4.5 6.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3zM17 17h-3v-4.5c0-1.1-.9-2-2-2s-2 .9-2 2V17H7V8h3v1.2c.5-.8 1.6-1.4 2.5-1.4 1.9 0 3.5 1.6 3.5 3.5V17z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="https://wa.me/6281234567890" class="social-link" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.002 0C4.477 0 0 4.477 0 10c0 1.89.525 3.66 1.438 5.168L.546 18.82a.5.5 0 00.634.634l3.652-1.892A9.954 9.954 0 0010.002 20c5.523 0 10-4.477 10-10s-4.477-10-10-10zm5.238 14.243c-.224.627-1.32 1.152-1.813 1.227-.347.053-.8.095-2.603-.562-2.313-.844-3.798-3.177-3.914-3.323-.115-.147-.944-1.255-.944-2.395 0-1.14.598-1.7.81-1.932.212-.232.463-.29.618-.29.155 0 .31.002.446.008.143.007.335-.054.525.4.193.462.656 1.6.713 1.716.058.116.097.251.02.405-.077.155-.116.251-.232.386-.116.136-.244.303-.348.407-.116.116-.236.24-.102.471.135.232.6.99 1.288 1.603.885.788 1.631 1.033 1.862 1.149.232.116.367.097.502-.058.136-.155.58-.677.735-.91.155-.232.31-.193.522-.116.213.077 1.352.638 1.584.754.232.116.387.174.445.27.058.097.058.561-.166 1.188z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer-links-col">
                <h4 class="footer-heading">Services</h4>
                <ul class="footer-links">
                    <li><a href="{{ url('/services/operational') }}">Operational Excellence</a></li>
                    <li><a href="{{ url('/services/digital') }}">Digital Transformation</a></li>
                    <li><a href="{{ url('/services/data') }}">Data & Analytics</a></li>
                    <li><a href="{{ url('/services/capability') }}">Capability Building</a></li>
                </ul>
            </div>

            <div class="footer-links-col">
                <h4 class="footer-heading">Company</h4>
                <ul class="footer-links">
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/career') }}#testimonials">Our Team</a></li>
                    <li><a href="{{ url('/career') }}">Careers</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="footer-newsletter-col">
                <h4 class="footer-heading">Newsletter</h4>
                <p class="newsletter-desc">Subscribe for monthly insights and updates</p>
                <form class="newsletter-form" id="newsletterForm" novalidate>
                    @csrf
                    <div class="input-group">
                        <input 
                            type="text" 
                            name="email" 
                            id="newsletterEmail" 
                            placeholder="Enter your email"
                            autocomplete="off"
                        />
                        <button type="submit" class="submit-btn">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M8 15L13 10L8 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </form>
                
                <div class="footer-contact">
                    <div class="contact-item">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                            <path d="M0 4a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2H2a2 2 0 01-2-2V4zm2-1a1 1 0 00-1 1v.217l7 4.2 7-4.2V4a1 1 0 00-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 002 13h12a1 1 0 00.966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                        </svg>
                        <span>info@samuderabiru.net</span>
                    </div>
                    <div class="contact-item">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                            <path d="M8 0C5.243 0 3 2.243 3 5c0 3.188 4.5 9.5 4.706 9.781a.5.5 0 00.588 0C8.5 14.5 13 8.188 13 5c0-2.757-2.243-5-5-5zm0 7a2 2 0 110-4 2 2 0 010 4z"/>
                        </svg>
                        <span>Skysuites Residence Surabaya</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="footer-bottom">
            <p class="copyright">© {{ date('Y') }} Samudera Biru Internasional. All rights reserved.</p>
            <div class="footer-legal">
                <a href="#">Privacy Policy</a>
                <span class="divider">•</span>
                <a href="#">Terms of Service</a>
                <span class="divider">•</span>
                <a href="#">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>

<script>
// Notification System
function showNotification(type, title, message) {
    let container = document.querySelector('.notification-container');
    if (!container) {
        container = document.createElement('div');
        container.className = 'notification-container';
        document.body.appendChild(container);
    }

    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    
    const icons = {
        success: '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
        error: '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
        warning: '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>'
    };
    
    notification.innerHTML = `
        <div class="notification-icon">${icons[type]}</div>
        <div class="notification-content">
            <div class="notification-title">${title}</div>
            <div class="notification-message">${message}</div>
        </div>
        <button class="notification-close">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="notification-progress"></div>
    `;
    
    container.appendChild(notification);
    
    const closeBtn = notification.querySelector('.notification-close');
    closeBtn.addEventListener('click', () => removeNotification(notification));
    
    setTimeout(() => removeNotification(notification), 5000);
}

function removeNotification(notification) {
    notification.classList.add('removing');
    setTimeout(() => {
        notification.remove();
        const container = document.querySelector('.notification-container');
        if (container && container.children.length === 0) {
            container.remove();
        }
    }, 300);
}

function isValidEmail(email) {
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.(com|id|co\.id|net|org|edu|gov|mil|int|info|biz|name|museum|coop|aero|[a-z]{2})$/i;
    return emailRegex.test(email);
}

// Newsletter Form Submission
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('newsletterForm');
    if (!form) return;
    
    const emailInput = form.querySelector('input[name="email"]');
    
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        const submitBtn = form.querySelector('.submit-btn');
        const emailValue = emailInput.value.trim();
        
        // Validate email
        if (!emailValue) {
            showNotification('error', 'Email Required', 'Please enter your email address.');
            emailInput.focus();
            return;
        }
        
        if (!isValidEmail(emailValue)) {
            showNotification('error', 'Invalid Email', 'Please enter a valid email address (e.g., name@company.com)');
            emailInput.focus();
            return;
        }
        
        // Disable button
        submitBtn.disabled = true;
        
        try {
            const response = await fetch('/api/newsletter', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ email: emailValue })
            });
            
            const result = await response.json();
            
            if (response.ok && result.success) {
                form.reset();
                showNotification('success', 'Subscribed!', result.message);
            } else {
                let errorMessage = result.message || 'An error occurred. Please try again.';
                if (result.errors) {
                    errorMessage = Object.values(result.errors).flat().join('. ');
                }
                showNotification('error', 'Subscription Failed', errorMessage);
            }
        } catch (error) {
            console.error('Form submission error:', error);
            showNotification('error', 'Connection Error', 'Unable to subscribe. Please check your connection and try again.');
        } finally {
            submitBtn.disabled = false;
        }
    });
});
</script>
