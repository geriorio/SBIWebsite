@extends('layouts.app')

@push('styles')
@vite(['resources/css/service-detail.css'])
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="detail-hero operational-hero">
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
                <span class="breadcrumb-current">Operational Efficiency</span>
            </div>

            <div class="hero-content" data-aos="fade-up">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Pillar 01
                </div>
                <h1 class="hero-title">
                    Operational Efficiency & <br>
                    <span class="text-gradient">Process Redesign</span>
                </h1>
                <p class="hero-subtitle">
                    Build a Business That Works Smoothly, Scales Confidently, and Operates Without Bottlenecks
                </p>
            </div>

            <div class="hero-stats" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16 8V16L20 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="16" cy="16" r="12" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="stat-text">
                        <div class="stat-value">40%</div>
                        <div class="stat-label">Faster Cycle Times</div>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M6 16L12 22L26 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="stat-text">
                        <div class="stat-value">60%</div>
                        <div class="stat-label">Error Reduction</div>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M8 24L16 12L24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 12H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="stat-text">
                        <div class="stat-value">35%</div>
                        <div class="stat-label">Cost Savings</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="detail-intro">
        <div class="detail-container">
            <div class="intro-grid">
                <div class="intro-content" data-aos="fade-right">
                    <h2 class="section-title">What This Service Is About</h2>
                    <p class="section-text">
                        <strong>Operational Efficiency & Process Redesign</strong> focuses on streamlining how work gets done across your organization. It's not just about fixing tasks — it's about reshaping entire workflows so your people, systems, and decisions move in sync.
                    </p>
                    <p class="section-text">
                        We work with companies to understand their current reality, identify inefficiencies, and rebuild processes that increase productivity and reduce cost.
                    </p>
                </div>
                <div class="intro-visual" data-aos="fade-left">
                    <div class="visual-card">
                        <div class="visual-stat">
                            <div class="visual-number">3x</div>
                            <div class="visual-label">Process Improvement</div>
                        </div>
                        <div class="visual-stat">
                            <div class="visual-number">85%</div>
                            <div class="visual-label">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pain Points Section -->
    <section class="pain-points-section">
        <div class="detail-container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title centered">Why Companies Need This</h2>
                <p class="section-subtitle">You may need this service if you're experiencing:</p>
            </div>

            <div class="pain-points-grid">
                <div class="pain-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 16V24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="24" cy="32" r="2" fill="currentColor"/>
                        </svg>
                    </div>
                    <h3>Long Approval Chains</h3>
                    <p>Slow cycle times and bottlenecked decision-making</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 24H36M12 16H36M12 32H36" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Manual & Duplicated Work</h3>
                    <p>Too many manual steps eating away at productivity</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="18" cy="18" r="8" stroke="currentColor" stroke-width="2"/>
                            <circle cx="30" cy="30" r="8" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 20L26 28" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Department Silos</h3>
                    <p>Confusion between departments and handover issues</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 12L32 24L24 36L16 24L24 12Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Errors & Inconsistency</h3>
                    <p>Frequent errors and inconsistent output quality</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="500">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="16" r="6" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 36C12 28 16 24 24 24C32 24 36 28 36 36" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Overloaded Teams</h3>
                    <p>Employees feeling overwhelmed or misaligned</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="600">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 36L24 12L36 36" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18 28H30" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Growth Misalignment</h3>
                    <p>Processes that don't match your business growth</p>
                </div>
            </div>

            <div class="pain-footer" data-aos="fade-up">
                <p class="emphasis-text">These problems don't solve themselves — they grow.</p>
                <p class="section-text">Our role is to fix the root issue, simplify, and build a system that actually supports your long-term goals.</p>
            </div>
        </div>
    </section>

    <!-- What We Deliver Section -->
    <section class="deliverables-section">
        <div class="detail-container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title centered">What SBI Delivers</h2>
                <p class="section-subtitle">End-to-end transformation of how your business operates</p>
            </div>

            <div class="deliverables-list">
                <!-- BPR -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="deliverable-number">01</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">Business Process Reengineering (BPR)</h3>
                            <p class="deliverable-tagline">When your structure needs a major upgrade</p>
                        </div>
                        <ul class="deliverable-features">
                            <li>Full redesign of core workflows</li>
                            <li>Standardization across sites or branches</li>
                            <li>Elimination of redundant steps</li>
                            <li>Modernization of outdated routines</li>
                            <li>Clear end-to-end SOPs</li>
                        </ul>
                        <div class="deliverable-best-for">
                            <strong>Best for:</strong> businesses seeking breakthrough improvements
                        </div>
                    </div>
                </div>

                <!-- BPE -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="deliverable-number">02</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">Business Process Engineering (BPE)</h3>
                            <p class="deliverable-tagline">For companies where processes still work — but not well</p>
                        </div>
                        <ul class="deliverable-features">
                            <li>Targeted fixes to broken areas</li>
                            <li>Bottleneck analysis</li>
                            <li>Streamlined handovers between teams</li>
                            <li>SOP refinement</li>
                            <li>Reduction of manual tasks</li>
                        </ul>
                        <div class="deliverable-best-for">
                            <strong>Best for:</strong> improving performance without large-scale restructuring
                        </div>
                    </div>
                </div>

                <!-- Operating Model -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="deliverable-number">03</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">Operating Model Development</h3>
                            <p class="deliverable-tagline">Redesign the "big picture" behind how your organization runs</p>
                        </div>
                        <ul class="deliverable-features">
                            <li>Roles & responsibilities</li>
                            <li>Decision rights</li>
                            <li>Workflow ownership</li>
                            <li>Governance structure</li>
                            <li>Performance indicators</li>
                        </ul>
                        <div class="deliverable-best-for">
                            <strong>Best for:</strong> companies restructuring for scale
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section class="results-section">
        <div class="detail-container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title centered white">Results You Can Expect</h2>
            </div>

            <div class="results-grid">
                <div class="result-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M24 14V24L30 30" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Faster Cycle Times</h3>
                    <p>End-to-end process completion in record time</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M18 24L22 28L30 18" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Lower Overhead</h3>
                    <p>Reduced operational costs across the board</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="3" fill="currentColor"/>
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M24 4V8M24 40V44M4 24H8M40 24H44" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Increased Accuracy</h3>
                    <p>Fewer errors and higher quality output</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="400">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="18" cy="18" r="8" stroke="currentColor" stroke-width="2.5"/>
                            <circle cx="30" cy="30" r="8" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M23 21L27 27" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Better Coordination</h3>
                    <p>Seamless collaboration between teams</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="500">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M8 32L16 20L24 28L32 16L40 24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M32 16H40V24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Higher Productivity</h3>
                    <p>More output using the same resources</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="600">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 8L34 16L24 24L14 16L24 8Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                            <path d="M14 24L24 32L34 24M14 32L24 40L34 32" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Scalable Structure</h3>
                    <p>A foundation that grows with your business</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="detail-cta-section">
        <div class="detail-container">
            <div class="cta-content" data-aos="zoom-in">
                <h2 class="cta-title">Ready to Optimize Your Operations?</h2>
                <p class="cta-subtitle">Let's build a business that runs like clockwork</p>
                <button class="cta-button" onclick="openServiceModal()">
                    <span>Get Started with SBI</span>
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
