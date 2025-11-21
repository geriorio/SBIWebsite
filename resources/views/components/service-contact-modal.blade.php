<!-- Service Contact Modal -->
<div id="serviceContactModal" class="service-modal">
    <div class="service-modal-overlay"></div>
    <div class="service-modal-container">
        <button class="service-modal-close" onclick="closeServiceModal()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <div class="service-modal-content">
            <div class="service-form-card">
                <div class="service-form-header">
                    <div class="form-icon-wrapper">
                        <svg class="form-icon" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M28 22C28 22.5304 27.7893 23.0391 27.4142 23.4142C27.0391 23.7893 26.5304 24 26 24H8L4 28V6C4 5.46957 4.21071 4.96086 4.58579 4.58579C4.96086 4.21071 5.46957 4 6 4H26C26.5304 4 27.0391 4.21071 27.4142 4.58579C27.7893 4.96086 28 5.46957 28 6V22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="form-icon-glow"></div>
                    </div>
                    <h3 class="service-form-title">Start Your Transformation</h3>
                    <p class="service-form-subtitle">We'll respond within 24 hours</p>
                </div>

                <form class="service-form" id="serviceContactForm">
                    @csrf
                    <input type="hidden" name="source" value="service">
                    
                    <div class="service-form-row">
                        <div class="service-form-group">
                            <label for="serviceFullName" class="service-form-label">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M13.3333 14V12.6667C13.3333 11.9594 13.0524 11.2811 12.5523 10.781C12.0522 10.281 11.3739 10 10.6667 10H5.33333C4.62609 10 3.94781 10.281 3.44772 10.781C2.94762 11.2811 2.66667 11.9594 2.66667 12.6667V14M10.6667 4.66667C10.6667 6.13943 9.47276 7.33333 8 7.33333C6.52724 7.33333 5.33333 6.13943 5.33333 4.66667C5.33333 3.19391 6.52724 2 8 2C9.47276 2 10.6667 3.19391 10.6667 4.66667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Full Name
                            </label>
                            <input 
                                type="text" 
                                id="serviceFullName" 
                                name="full_name" 
                                class="service-form-input" 
                                placeholder="John Doe"
                                required
                            >
                            <div class="service-input-glow"></div>
                        </div>

                        <div class="service-form-group">
                            <label for="serviceEmail" class="service-form-label">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M2.66667 4L8 7.33333M8 7.33333L13.3333 4M8 7.33333V12.6667M2.66667 4V10.6667C2.66667 11.0203 2.80714 11.3594 3.05719 11.6095C3.30724 11.8595 3.64638 12 4 12H12C12.3536 12 12.6928 11.8595 12.9428 11.6095C13.1929 11.3594 13.3333 11.0203 13.3333 10.6667V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Email
                            </label>
                            <input 
                                type="email" 
                                id="serviceEmail" 
                                name="email" 
                                class="service-form-input" 
                                placeholder="john@company.com"
                                pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.(com|id|co\.id|net|org|edu|gov|mil|int|info|biz|name|museum|coop|aero|[a-z]{2})"
                                title="Please enter a valid email address ending with .com, .id, etc."
                                required
                            >
                            <div class="service-input-glow"></div>
                        </div>
                    </div>

                    <div class="service-form-group">
                        <label for="serviceSubject" class="service-form-label">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14 7.33333V4.66667C14 4.31305 13.8595 3.97391 13.6095 3.72386C13.3594 3.47381 13.0203 3.33333 12.6667 3.33333H3.33333C2.97971 3.33333 2.64057 3.47381 2.39052 3.72386C2.14048 3.97391 2 4.31305 2 4.66667V11.3333C2 11.687 2.14048 12.0261 2.39052 12.2761C2.64057 12.5262 2.97971 12.6667 3.33333 12.6667H8.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 4.66667L8 8.66667L14 4.66667M11.3333 10H14.6667M13 8.66667V11.3333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Subject
                        </label>
                        <input 
                            type="text" 
                            id="serviceSubject" 
                            name="subject" 
                            class="service-form-input" 
                            placeholder="Digital Transformation Consultation"
                            required
                        >
                        <div class="service-input-glow"></div>
                    </div>

                    <div class="service-form-group">
                        <label for="serviceMessage" class="service-form-label">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14 10C14 10.3536 13.8595 10.6928 13.6095 10.9428C13.3594 11.1929 13.0203 11.3333 12.6667 11.3333H5.33333L2 14V3.33333C2 2.97971 2.14048 2.64057 2.39052 2.39052C2.64057 2.14048 2.97971 2 3.33333 2H12.6667C13.0203 2 13.3594 2.14048 13.6095 2.39052C13.8595 2.64057 14 2.97971 14 3.33333V10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Message
                        </label>
                        <textarea 
                            id="serviceMessage" 
                            name="message" 
                            class="service-form-textarea" 
                            placeholder="Tell us about your business goals and transformation needs..."
                            rows="4"
                            required
                        ></textarea>
                        <div class="service-input-glow"></div>
                    </div>

                    <button type="submit" class="service-submit-btn">
                        <span class="service-btn-text">Send Message</span>
                        <div class="service-btn-shine"></div>
                        <svg class="service-btn-arrow" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M4.16667 10H15.8333M15.8333 10L10.8333 5M15.8333 10L10.8333 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function openServiceModal() {
    document.getElementById('serviceContactModal').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeServiceModal() {
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
    
    overlay.addEventListener('click', closeServiceModal);
    
    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeServiceModal();
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
                closeServiceModal();
                form.reset();
                
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
