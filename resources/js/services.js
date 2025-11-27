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
// SERVICE MODAL FUNCTIONALITY
// ========================================

const serviceContent = {
    operational: {
        title: 'Operational Efficiency & Process Redesign',
        offerings: [
            {
                title: 'Business Process Redesign (BPR)',
                features: [
                    'Full redesign of core workflows',
                    'Standardization across sites or branches',
                    'Elimination of redundant steps',
                    'Modernization of outdated routines',
                    'Clear end-to-end SOPs'
                ],
                bestFor: 'Businesses seeking breakthrough improvements'
            },
            {
                title: 'Business Process Engineering (BPE)',
                features: [
                    'Targeted fixes to broken areas',
                    'Bottleneck analysis',
                    'Streamlined handovers between teams',
                    'SOP refinement',
                    'Reduction of manual tasks'
                ],
                bestFor: 'Improving performance without large-scale restructuring'
            },
            {
                title: 'Operating Model Development',
                features: [
                    'Roles & responsibilities',
                    'Decision rights',
                    'Workflow ownership',
                    'Governance structure',
                    'Performance indicators'
                ],
                bestFor: 'Redesigning the “big picture” behind how your organization runs'
            }
        ]
    },
    digital: {
        title: 'Digital Transformation & System Integration',
        offerings: [
            {
                title: 'ERP Selection Consulting',
                features: [
                    'Business requirements analysis',
                    'Fit-gap evaluation',
                    'Vendor comparison',
                    'Total cost and timeline modeling',
                    'Final recommendation & negotiation support'
                ],
            },
            {
                title: 'EPICOR End-to-End Implementation',
                description: 'Our team implements all major EPICOR modules with complete project ownership. We cover every phase:',
                features: [
                    'Business structure development',
                    'Project scoping & requirement mapping',
                    'Module configuration',
                    'BPM (Business Process Management) creation',
                    'Custom workflows & automation',
                    'Reporting setup',
                    'UAT & readiness testing',
                    'Go-live support',
                    'Post go-live hypercare'
                ]
            }
        ],
        platforms: [
            { name: 'Anova', image: 'anova.jpg' },
            { name: 'TrackAbout', image: 'trackabout.png' },
            { name: 'MCEasy', image: 'mceasy.png' },
            { name: 'Gajiku', image: 'gajiku.jpg' },
            { name: 'GreatDay HR', image: 'greatday.png' },
            { name: 'SMT Education', image: 'smtedu.jpg' },
            { name: 'Yeastar', image: 'yeastar.png' },
            { name: 'Icertis', image: 'icertis.jpg' }
        ]
    },
    data: {
        title: 'Data Architecture, Dashboards & Insights',
        offerings: [
            {
                title: 'Management Dashboards & Reporting',
                description: 'We design dashboards that give real-time visibility across: Sales, Finance, Operations, Supply chain, Inventory, Procurement, HR and many more. Tools we use:',
                features: [
                    'Microsoft Power BI',
                    'EPICOR data visualization',
                    'Multi-system integrated dashboards',
                ],
            },
            {
                title: 'Enterprise Data Management (EDM)',
                description: 'We help companies build a trusted data foundation through:',
                features: [
                    'Data strategy',
                    'Data governance',
                    'Data quality & cleansing',
                    'Master data management',
                    'Data architecture planning'
                ],
            },
            {
                title: 'Data & Analytics Academy',
                description: 'We upskill your teams to become data-driven through:',
                features: [
                    'Power BI training (Basic–Advanced)',
                    'Data visualization workshops',
                    'Dashboard creation training',
                    'Reporting fundamentals',
                    'Customized learning paths',
                    'Dedicated online learning platform for your company'
                ],
            }
        ]
    },
    capability: {
        title: 'Capability Building & Organizational Alignment',
        offerings: [
            {
                title: 'ERP Training & User Enablement',
                description: 'We equip your team with hands-on, role-based training, including:',
                features: [
                    'Epicor user training (all modules)',
                    'SOP-based operational training',
                    'Admin & super user competency building',
                    'Post-go-live support',
                    'Change readiness & adoption support'
                ],
            },
            {
                title: 'Power BI & Analytics Training',
                description: 'We are certified to deliver:',
                features: [
                    'Power BI fundamentals',
                    'Data modeling',
                    'Visual storytelling',
                    'Dashboard creation',
                    'Data cleansing & ETL basics',
                    'Performance optimization'
                ],
            },
            {
                title: 'Customized Learning Platform',
                description: 'We build digital learning paths tailored to your organization:',
                features: [
                    'Custom courses',
                    'Online learning modules',
                    'Role-based learning journeys',
                    'Tracking & reporting',
                    'Blended training options'
                ],
            }
        ]
    }
};

function openServiceModal(serviceType) {
    const modal = document.getElementById('serviceModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalContent = document.getElementById('modalContent');
    if (modalTitle) modalTitle.className = 'service-detail-modal-title';
    if (modalContent) modalContent.className = 'service-detail-modal-content';
    
    if (!modal || !modalTitle || !modalContent) {
        console.error('Modal elements not found');
        return;
    }
    
    const content = serviceContent[serviceType];
    if (!content) {
        console.error('Service content not found:', serviceType);
        return;
    }
    
    // Set title
    modalTitle.textContent = content.title;
    
    // Build offerings grid HTML
    let offeringsHTML = `<div class="modal-offerings-grid ${serviceType === 'digital' ? 'grid-2-col' : ''}">`;
    
    content.offerings.forEach(offering => {
        // Check if this card should only show logos
        if (offering.showLogos && content.platforms) {
            offeringsHTML += `
                <div class="modal-offering-card">
                    <h3 class="modal-offering-title">${offering.title}</h3>
                    <div class="modal-offering-logos-only">
                        <div class="modal-platforms-grid-inline">
                            ${content.platforms.map(platform => `
                                <div class="modal-platform-logo-small">
                                    <img src="/images/${platform.image}" alt="${platform.name}" loading="lazy">
                                </div>
                            `).join('')}
                        </div>
                    </div>
                </div>
            `;
        } else {
            // Normal card with optional description, features and optional bestFor
            const descriptionSection = offering.description ? `
                <p class="modal-offering-description">${offering.description}</p>
            ` : '';
            
            const bestForSection = offering.bestFor ? `
                <div class="modal-offering-bestfor">
                    <div class="modal-offering-bestfor-label">Best For</div>
                    <div class="modal-offering-bestfor-text">${offering.bestFor}</div>
                </div>
            ` : '';
            
            offeringsHTML += `
                <div class="modal-offering-card">
                    <h3 class="modal-offering-title">${offering.title}</h3>
                    ${descriptionSection}
                    <ul class="modal-offering-features">
                        ${offering.features.map(feature => `<li>${feature}</li>`).join('')}
                    </ul>
                    ${bestForSection}
                </div>
            `;
        }
    });
    
    offeringsHTML += '</div>';
    
    // Add platform logos for digital service
    if (serviceType === 'digital' && content.platforms) {
        offeringsHTML += `
            <div class="modal-platforms-section">
                <h3 class="modal-platforms-title">Platforms We Integrate & Implement</h3>
                <div class="modal-platforms-grid">
                    ${content.platforms.map(platform => `
                        <div class="modal-platform-logo">
                            <img src="/images/${platform.image}" alt="${platform.name}" loading="lazy">
                        </div>
                    `).join('')}
                </div>
                <p class="modal-platforms-more">...and many more</p>
            </div>
        `;
    }
    
    modalContent.innerHTML = offeringsHTML;
    
    // Show modal with animation
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
    
    console.log('✅ Modal opened:', serviceType);
}

function closeServiceModal() {
    const modal = document.getElementById('serviceModal');
    if (!modal) return;
    
    modal.classList.remove('active');
    document.body.style.overflow = '';
    
    console.log('✅ Modal closed');
}

// ESC key to close modal
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeServiceModal();
    }
});

// Make functions globally available
window.openServiceModal = openServiceModal;
window.closeServiceModal = closeServiceModal;

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
