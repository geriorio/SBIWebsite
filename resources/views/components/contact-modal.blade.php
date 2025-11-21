<!-- Contact Modal -->
<div id="contactModal" class="contact-modal">
    <div class="modal-overlay" onclick="closeContactModal()"></div>
    <div class="modal-container">
        <button class="modal-close" onclick="closeContactModal()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <div class="modal-header">
            <h3 class="modal-title">Let's Start a Conversation</h3>
            <p class="modal-subtitle">Tell us about your project and we'll get back to you within 24 hours</p>
        </div>

        <form class="modal-form" id="contactForm" action="{{ route('contact.submit') }}" method="POST">
            @csrf
            
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="company">Company *</label>
                    <input type="text" id="company" name="company" required placeholder="Your Company">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required placeholder="john@company.com">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="+62 812 3456 7890">
                </div>
            </div>

            <div class="form-group">
                <label for="service">Service Interest</label>
                <select id="service" name="service">
                    <option value="">Select a service...</option>
                    <option value="operational">Operational Efficiency & Process Redesign</option>
                    <option value="digital">Digital Transformation & System Integration</option>
                    <option value="data">Data Architecture & Business Intelligence</option>
                    <option value="capability">Capability Building & Skills Enablement</option>
                    <option value="other">Other / Not Sure</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Tell Us About Your Project *</label>
                <textarea id="message" name="message" rows="5" required placeholder="Describe your challenges, goals, or what you'd like to discuss..."></textarea>
            </div>

            <button type="submit" class="form-submit-btn">
                <span>Send Message</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M18 2L9 11M18 2L12 18L9 11M18 2L2 8L9 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </form>
    </div>
</div>

<script>
function openContactModal() {
    const modal = document.getElementById('contactModal');
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closeContactModal() {
    const modal = document.getElementById('contactModal');
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
}

// Close on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeContactModal();
    }
});
</script>
