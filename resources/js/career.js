// ========================================
// CAREER PAGE INTERACTIONS
// ========================================
import AOS from 'aos';

// Initialize page
function initCareerPage() {
    // Initialize modals
    initModals();
    
    // Refresh AOS to detect all elements on this page
    if (typeof AOS !== 'undefined' && AOS.refresh) {
        AOS.refresh();
    }
}

// Initialize on DOM ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCareerPage);
} else {
    initCareerPage();
}

// Also refresh on load event
window.addEventListener('load', () => {
    if (typeof AOS !== 'undefined' && AOS.refresh) {
        AOS.refresh();
    }
});

// Modal functions
function initModals() {
    // Get all modals
    const modals = document.querySelectorAll('.career-modal');
    
    // Close modal on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            modals.forEach(modal => {
                if (modal.classList.contains('active')) {
                    const modalId = modal.id.replace('modal-', '');
                    closeModal(modalId);
                }
            });
        }
    });
}

// Open modal
window.openModal = function(type) {
    const modal = document.getElementById(`modal-${type}`);
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

// Close modal
window.closeModal = function(type) {
    const modal = document.getElementById(`modal-${type}`);
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
}
