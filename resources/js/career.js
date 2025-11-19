// ========================================
// CAREER PAGE INTERACTIONS
// ========================================
import AOS from 'aos';

document.addEventListener('DOMContentLoaded', () => {
    // Initialize modals
    initModals();
    
    // Refresh AOS to detect all elements on this page
    setTimeout(() => {
        if (typeof AOS !== 'undefined' && AOS.refresh) {
            AOS.refresh();
        }
    }, 100);
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
