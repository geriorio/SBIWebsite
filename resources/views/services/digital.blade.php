@extends('layouts.app')

@push('styles')
@vite(['resources/css/service-detail.css'])
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="detail-hero digital-hero">
        <div class="hero-bg-pattern"></div>
        <div class="hero-glow"></div>
        
        <div class="detail-container">
            <div class="hero-breadcrumb" data-aos="fade-down">
                <a href="{{ route('services') }}" class="breadcrumb-link">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Services
                </a>
                <span class="breadcrumb-divider">/</span>
                <span class="breadcrumb-current">Digital Transformation</span>
            </div>

            <div class="hero-content" data-aos="fade-up">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Pillar 02
                </div>
                <h1 class="hero-title">
                    Digital Transformation & <br>
                    <span class="text-gradient">System Integration</span>
                </h1>
                <p class="hero-subtitle">
                    Build a Connected, Digital-First Business That Moves at Market Speed
                </p>
            </div>

            <div class="hero-stats" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <rect x="6" y="6" width="20" height="20" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M6 12H26M12 6V26" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="stat-text">
                        <div class="stat-value">70%</div>
                        <div class="stat-label">Implementation Success Rate</div>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <circle cx="16" cy="16" r="12" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 12V16L19 19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="stat-text">
                        <div class="stat-value">50%</div>
                        <div class="stat-label">Faster Data Flow</div>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M8 20L14 14L18 18L24 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="stat-text">
                        <div class="stat-value">45%</div>
                        <div class="stat-label">Cost Reduction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section class="detail-intro">
        <div class="detail-container">
            <div class="intro-grid">
                <div class="intro-content" data-aos="fade-right">
                    <h2 class="section-title">What This Service Is About</h2>
                    <p class="section-text">
                        This pillar focuses on helping companies <strong>choose, implement, and unite their most important digital systems</strong> — from ERP to industry-specific platforms.
                    </p>
                    <p class="section-text">
                        We also ensure every system communicates smoothly, eliminating data silos and manual work.
                    </p>
                </div>
                <div class="intro-visual" data-aos="fade-left">
                    <div class="visual-card">
                        <div class="visual-stat">
                            <div class="visual-number">15+</div>
                            <div class="visual-label">ERP Implementations</div>
                        </div>
                        <div class="visual-stat">
                            <div class="visual-number">25+</div>
                            <div class="visual-label">System Integrations</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pain Points -->
    <section class="pain-points-section">
        <div class="detail-container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title centered">Why Companies Need This</h2>
                <p class="section-subtitle">Most organizations face challenges like:</p>
            </div>

            <div class="pain-points-grid">
                <div class="pain-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 12V24M24 32V36" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="24" cy="24" r="18" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Wrong ERP Choices</h3>
                    <p>Choosing the wrong ERP due to vendor bias or lack of expertise</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="18" cy="18" r="8" stroke="currentColor" stroke-width="2"/>
                            <circle cx="30" cy="30" r="8" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 20L28 28" stroke="currentColor" stroke-width="2" stroke-dasharray="4 4"/>
                        </svg>
                    </div>
                    <h3>System Silos</h3>
                    <p>Systems that cannot talk to each other, creating data islands</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 16H36M12 24H36M12 32H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Manual Data Entry</h3>
                    <p>Repeated manual data entry between platforms</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 12L12 24L24 36L36 24L24 12Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Complex Workflows</h3>
                    <p>Complex, outdated, or inconsistent workflows</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="500">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 36L24 12L36 36" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18 28H30" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>High Failure Rates</h3>
                    <p>High implementation failure rates industry-wide</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="600">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="8" y="8" width="32" height="32" rx="4" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 20H32M16 28H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Technology Mismatch</h3>
                    <p>Technology that doesn't fit the business model</p>
                </div>
            </div>

            <div class="pain-footer" data-aos="fade-up">
                <p class="emphasis-text">We help your technology fit your business, not the other way around.</p>
            </div>
        </div>
    </section>

    <!-- What We Deliver -->
    <section class="deliverables-section">
        <div class="detail-container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title centered">What SBI Delivers</h2>
            </div>

            <div class="deliverables-list">
                <!-- ERP Selection -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="deliverable-number">01</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">ERP Selection Consulting</h3>
                            <p class="deliverable-tagline">Make the right decision from the start</p>
                        </div>
                        <ul class="deliverable-features">
                            <li>Business requirements analysis</li>
                            <li>Fit-gap evaluation</li>
                            <li>Vendor comparison</li>
                            <li>Total cost and timeline modeling</li>
                            <li>Final recommendation & negotiation support</li>
                        </ul>
                        <div class="deliverable-best-for">
                            <strong>Best for:</strong> companies choosing their first ERP or replacing legacy systems
                        </div>
                    </div>
                </div>

                <!-- EPICOR Implementation -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="deliverable-number">02</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">EPICOR End-to-End Implementation</h3>
                            <p class="deliverable-tagline">Complete project ownership from scoping to go-live</p>
                        </div>
                        
                        <h4 style="margin: 1.5rem 0 1rem; font-size: 1.25rem; font-weight: 700; color: #0EA5E9;">Implementation Phases</h4>
                        <ul class="deliverable-features">
                            <li>Business structure development</li>
                            <li>Project scoping & requirement mapping</li>
                            <li>Module configuration</li>
                            <li>BPM (Business Process Management) creation</li>
                            <li>Custom workflows & automation</li>
                            <li>Reporting setup</li>
                            <li>UAT & readiness testing</li>
                            <li>Go-live support</li>
                            <li>Post go-live hypercare</li>
                        </ul>

                        <h4 style="margin: 1.5rem 0 1rem; font-size: 1.25rem; font-weight: 700; color: #0EA5E9;">Supported Modules</h4>
                        <ul class="deliverable-features">
                            <li>Finance and Accounting (FICO)</li>
                            <li>Inventory & Warehouse</li>
                            <li>Sales & Order Management</li>
                            <li>Procurement & Supplier Management</li>
                            <li>Distribution</li>
                            <li>Production</li>
                            <li>Asset Management</li>
                            <li>Maintenance</li>
                            <li>Project Management</li>
                            <li>Other modules based on company needs</li>
                        </ul>

                        <h4 style="margin: 1.5rem 0 1rem; font-size: 1.25rem; font-weight: 700; color: #0EA5E9;">Additional Capabilities</h4>
                        <ul class="deliverable-features">
                            <li>Multi-system integrations</li>
                            <li>Custom workflow design</li>
                            <li>Training & change management</li>
                        </ul>
                    </div>
                </div>

                <!-- System Integration -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="deliverable-number">03</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">System Integration Services</h3>
                            <p class="deliverable-tagline">Unite your business applications into one ecosystem</p>
                        </div>

                        <h4 style="margin: 1.5rem 0 1rem; font-size: 1.25rem; font-weight: 700; color: #0EA5E9;">Industries & Platforms We Integrate</h4>
                        
                        <div style="margin: 1.5rem 0;">
                            <p style="font-weight: 700; color: #334155; margin-bottom: 1rem;">Asset Management:</p>
                            <div class="platforms-grid">
                                <div class="platform-item">
                                    <div class="platform-logo" style="background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; padding: 1rem;">
                                        <span style="font-weight: 700; color: #0EA5E9;">Anova</span>
                                    </div>
                                </div>
                                <div class="platform-item">
                                    <div class="platform-logo" style="background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; padding: 1rem;">
                                        <span style="font-weight: 700; color: #0EA5E9;">Track About</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin: 1.5rem 0;">
                            <p style="font-weight: 700; color: #334155; margin-bottom: 1rem;">Supply Chain & Fleet:</p>
                            <div class="platforms-grid">
                                <div class="platform-item">
                                    <div class="platform-logo" style="background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; padding: 1rem;">
                                        <span style="font-weight: 700; color: #0EA5E9;">McEasy</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin: 1.5rem 0;">
                            <p style="font-weight: 700; color: #334155; margin-bottom: 1rem;">HR & Workforce Systems:</p>
                            <div class="platforms-grid">
                                <div class="platform-item">
                                    <div class="platform-logo" style="background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; padding: 1rem;">
                                        <span style="font-weight: 700; color: #0EA5E9;">Sunfish</span>
                                    </div>
                                </div>
                                <div class="platform-item">
                                    <div class="platform-logo" style="background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; padding: 1rem;">
                                        <span style="font-weight: 700; color: #0EA5E9;">Gajiku</span>
                                    </div>
                                </div>
                                <div class="platform-item">
                                    <div class="platform-logo" style="background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; padding: 1rem;">
                                        <span style="font-weight: 700; color: #0EA5E9;">GreatDay HR</span>
                                    </div>
                                </div>
                                <div class="platform-item">
                                    <div class="platform-logo" style="background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; padding: 1rem;">
                                        <span style="font-weight: 700; color: #0EA5E9;">SMT Edu</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin: 1.5rem 0;">
                            <p style="font-weight: 700; color: #334155; margin-bottom: 1rem;">Call Center & Telephony:</p>
                            <div class="platforms-grid">
                                <div class="platform-item">
                                    <div class="platform-logo" style="background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; padding: 1rem;">
                                        <span style="font-weight: 700; color: #0EA5E9;">Yeastar</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin: 1.5rem 0;">
                            <p style="font-weight: 700; color: #334155; margin-bottom: 1rem;">Sales Contracting:</p>
                            <div class="platforms-grid">
                                <div class="platform-item">
                                    <div class="platform-logo" style="background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; padding: 1rem;">
                                        <span style="font-weight: 700; color: #0EA5E9;">Iceritis</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4 style="margin: 1.5rem 0 1rem; font-size: 1.25rem; font-weight: 700; color: #0EA5E9;">Custom Integration Architecture</h4>
                        <ul class="deliverable-features">
                            <li>API integration frameworks</li>
                            <li>Data synchronization</li>
                            <li>Workflow orchestration</li>
                            <li>Automation triggers</li>
                            <li>Error monitoring & exception reporting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results -->
    <section class="results-section">
        <div class="detail-container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title centered white">Results You Can Expect</h2>
            </div>

            <div class="results-grid">
                <div class="result-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="8" y="8" width="32" height="32" rx="4" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M8 18H40M18 8V40" stroke="currentColor" stroke-width="2.5"/>
                        </svg>
                    </div>
                    <h3>Fewer Manual Processes</h3>
                    <p>Automation reduces manual intervention dramatically</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="16" cy="16" r="8" stroke="currentColor" stroke-width="2.5"/>
                            <circle cx="32" cy="32" r="8" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M22 20L28 28" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Seamless Data Flow</h3>
                    <p>Information moves smoothly across all systems</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M18 24L22 28L30 18" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Reduced Human Error</h3>
                    <p>Fewer mistakes through system validation</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="400">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="6" y="10" width="36" height="28" rx="2" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M12 20L20 28L36 16" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Faster Reporting</h3>
                    <p>Real-time insights and analysis capabilities</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="500">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M24 14V24H34" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Lower Operating Costs</h3>
                    <p>Significant reduction in operational expenses</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="600">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 8L34 16L24 24L14 16L24 8Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                            <path d="M14 24L24 32L34 24M14 32L24 40L34 32" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Scalable Foundation</h3>
                    <p>A digital infrastructure built for growth</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="detail-cta-section">
        <div class="detail-container">
            <div class="cta-content" data-aos="zoom-in">
                <h2 class="cta-title">Talk to an ERP Specialist</h2>
                <p class="cta-subtitle">Let's build your digital-first business together</p>
                <button class="cta-button" onclick="openServiceModal()">
                    <span>Schedule a Consultation</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    @include('components.service-contact-modal')
@endsection

@push('scripts')
@vite(['resources/js/service-detail.js'])
@endpush
