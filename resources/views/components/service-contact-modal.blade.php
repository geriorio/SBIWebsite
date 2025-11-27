<!-- Service Contact Modal -->
<div id="serviceContactModal" class="service-modal">
    <div class="service-modal-overlay"></div>
    <button class="service-modal-close" onclick="closeContactFormModal()">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
    <div class="service-modal-content">
        <div class="service-form-card">
            <div class="service-form-header">
                <div class="form-icon-wrapper">
                    <svg class="form-icon" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M16 4C9.37258 4 4 9.37258 4 16C4 22.6274 9.37258 28 16 28C22.6274 28 28 22.6274 28 16C28 9.37258 22.6274 4 16 4Z" stroke="#00E5FF" stroke-width="2"/>
                        <path d="M16 10V16L20 20" stroke="#00E5FF" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <div class="form-icon-glow"></div>
                </div>
                <h3 class="service-form-title">Start Your Transformation</h3>
                <p class="service-form-subtitle">We'll respond within 24 hours</p>
            </div>
            <form class="service-form" id="serviceContactForm">
                <div class="service-form-row">
                    <div class="service-form-group">
                        <label class="service-form-label" for="full_name">Full Name</label>
                        <input type="text" class="service-form-input" id="full_name" name="full_name" required>
                        <div class="service-input-glow"></div>
                    </div>
                    <div class="service-form-group">
                        <label class="service-form-label" for="email">Email</label>
                        <input type="email" class="service-form-input" id="email" name="email" required>
                        <div class="service-input-glow"></div>
                    </div>
                </div>
                <div class="service-form-group">
                    <label class="service-form-label" for="subject">Subject</label>
                    <input type="text" class="service-form-input" id="subject" name="subject" required>
                    <div class="service-input-glow"></div>
                </div>
                <div class="service-form-group">
                    <label class="service-form-label" for="message">Message</label>
                    <textarea class="service-form-textarea" id="message" name="message" rows="4" required></textarea>
                    <div class="service-input-glow"></div>
                </div>
                <button type="submit" class="service-submit-btn">
                    <span class="service-btn-text">Send Message</span>
                    <span class="service-btn-arrow">→</span>
                    <span class="service-btn-shine"></span>
                </button>
                <div class="service-form-message" id="formMessage"></div>
            </form>
        </div>
    </div>
</div>

<script>
function openContactFormModal() {
    document.getElementById('serviceContactModal').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeContactFormModal() {
    document.getElementById('serviceContactModal').classList.remove('active');
    document.body.style.overflow = '';
}

// Notification System
function showNotification(type, title, message) {
    // Create container if doesn't exist
    let container = document.querySelector('.notification-container');
    if (!container) {
        container = document.createElement('div');
        container.className = 'notification-container';
        document.body.appendChild(container);
    }

    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    
    // Icons for different types
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
    
    // Close button handler
    const closeBtn = notification.querySelector('.notification-close');
    closeBtn.addEventListener('click', () => removeNotification(notification));
    
    // Auto remove after 5 seconds
    setTimeout(() => removeNotification(notification), 5000);
}

function removeNotification(notification) {
    notification.classList.add('removing');
    setTimeout(() => {
        notification.remove();
        // Remove container if empty
        const container = document.querySelector('.notification-container');
        if (container && container.children.length === 0) {
            container.remove();
        }
    }, 300);
}

// Email validation function
function isValidEmail(email) {
    // More strict email validation
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.(com|id|co\.id|net|org|edu|gov|mil|int|info|biz|name|museum|coop|aero|[a-z]{2})$/i;
    return emailRegex.test(email);
}

// Close on overlay click
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('serviceContactModal');
    const overlay = modal.querySelector('.service-modal-overlay');
    
    overlay.addEventListener('click', closeContactFormModal);
    
    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeContactFormModal();
        }
    });

    // Handle form submission
    const form = document.getElementById('serviceContactForm');
    const emailInput = form.querySelector('input[name="email"]');
    
    // Real-time email validation
    emailInput.addEventListener('blur', function() {
        if (this.value && !isValidEmail(this.value)) {
            this.style.borderColor = 'rgba(239, 83, 80, 0.8)';
            showNotification('error', 'Invalid Email', 'Please enter a valid email address ending with .com, .id, etc.');
        } else if (this.value) {
            this.style.borderColor = 'rgba(0, 229, 255, 0.5)';
        }
    });
    
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const submitBtn = form.querySelector('.service-submit-btn');
        const btnText = submitBtn.querySelector('.service-btn-text');
        const originalText = btnText.textContent;
        
        // Validate email before submission
        const emailValue = emailInput.value;
        if (!isValidEmail(emailValue)) {
            showNotification('error', 'Invalid Email', 'Please enter a valid email address (e.g., name@company.com)');
            emailInput.focus();
            emailInput.style.borderColor = 'rgba(239, 83, 80, 0.8)';
            return;
        }
        
        // Disable button and show loading
        submitBtn.disabled = true;
        btnText.textContent = 'Sending...';
        
        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());
        
        try {
            const response = await fetch('/api/contact', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                },
                body: JSON.stringify(data)
            });
            
            const result = await response.json();
            
            if (response.ok && result.success) {
                // Close modal first
                closeContactFormModal();
                form.reset();

                // Remove all error notifications before showing success
                const container = document.querySelector('.notification-container');
                if (container) {
                    Array.from(container.querySelectorAll('.notification.error')).forEach(n => n.remove());
                }

                // Show success notification
                setTimeout(() => {
                    showNotification('success', 'Message Sent!', result.message);
                }, 300);
            } else {
                // Show error notification
                let errorMessage = result.message || 'An error occurred. Please try again.';
                if (result.errors) {
                    errorMessage = Object.values(result.errors).flat().join('. ');
                }
                showNotification('error', 'Submission Failed', errorMessage);
            }
        } catch (error) {
            console.error('Form submission error:', error);
            showNotification('error', 'Connection Error', 'Unable to send message. Please check your connection and try again.');
        } finally {
            submitBtn.disabled = false;
            btnText.textContent = originalText;
        }
    });
});
</script>
