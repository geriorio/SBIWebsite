<!-- Service Modal for Service Details -->
<div id="serviceModal" class="service-modal">
    <div class="service-modal-overlay" onclick="closeServiceModal()"></div>
    <div class="service-modal-container">
        <button class="service-modal-close" onclick="closeServiceModal()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <div class="service-modal-content">
            <h2 id="modalTitle" class="service-detail-modal-title"></h2>
            <div id="modalContent" class="service-detail-modal-content"></div>
        </div>
    </div>
</div>
