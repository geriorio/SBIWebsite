@extends('layouts.app')

@push('styles')
@vite(['resources/css/service-detail.css'])
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="detail-hero capability-hero">
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
                <span class="breadcrumb-current">Capability Building</span>
            </div>

            <div class="hero-content" data-aos="fade-up">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Pillar 04
                </div>
                <h1 class="hero-title">
                    Capability Building & <br>
                    <span class="text-gradient">Digital Skills Enablement</span>
                </h1>
                <p class="hero-subtitle">
                    Empower Your People to Lead in a Digital-First World
                </p>
            </div>

            <div class="hero-stats" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <circle cx="16" cy="12" r="6" stroke="currentColor" stroke-width="2"/>
                            <path d="M8 28C8 22 11 18 16 18C21 18 24 22 24 28" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="stat-text">
                        <div class="stat-value">92%</div>
                        <div class="stat-label">User Adoption Rate</div>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M8 24L16 12L24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="stat-text">
                        <div class="stat-value">500+</div>
                        <div class="stat-label">Users Trained</div>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <rect x="8" y="8" width="16" height="16" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M8 14H24M14 8V24" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="stat-text">
                        <div class="stat-value">100+</div>
                        <div class="stat-label">Training Modules</div>
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
                        <strong>Technology only works when people know how to use it confidently.</strong>
                    </p>
                    <p class="section-text">
                        This service focuses on building digital skills across your company — ensuring your team is equipped to operate new systems, adopt new processes, and make decisions using data.
                    </p>
                </div>
                <div class="intro-visual" data-aos="fade-left">
                    <div class="visual-card">
                        <div class="visual-stat">
                            <div class="visual-number">85%</div>
                            <div class="visual-label">Skills Improvement</div>
                        </div>
                        <div class="visual-stat">
                            <div class="visual-number">40+</div>
                            <div class="visual-label">Companies Trained</div>
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
                <p class="section-subtitle">Many digital projects fail not because the system is wrong — but because employees weren't trained to use it effectively</p>
            </div>

            <div class="pain-points-grid">
                <div class="pain-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 12V24M24 32V36" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="24" cy="24" r="18" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Low System Adoption</h3>
                    <p>Users resist new systems due to lack of confidence</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="18" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 24L22 30L32 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Knowledge Gaps</h3>
                    <p>Teams lack skills for modern digital tools</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 24H36M12 16H36M12 32H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Vendor Dependency</h3>
                    <p>Over-reliance on external consultants for support</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="8" y="8" width="32" height="32" rx="4" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 20H32M16 28H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Poor Change Management</h3>
                    <p>Resistance to transformation initiatives</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="500">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 12L12 24L24 36L36 24L24 12Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Inconsistent Usage</h3>
                    <p>Different people using systems in different ways</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="600">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="18" cy="18" r="8" stroke="currentColor" stroke-width="2"/>
                            <circle cx="30" cy="30" r="8" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Skill Mismatch</h3>
                    <p>Team capabilities don't match business needs</p>
                </div>
            </div>

            <div class="pain-footer" data-aos="fade-up">
                <p class="emphasis-text">We solve this problem through practical, tailored capability development programs.</p>
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
                <!-- ERP Training -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="deliverable-number">01</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">ERP Training & User Enablement</h3>
                            <p class="deliverable-tagline">Hands-on, role-based training</p>
                        </div>
                        <ul class="deliverable-features">
                            <li>Epicor user training (all modules)</li>
                            <li>SOP-based operational training</li>
                            <li>Admin & super user competency building</li>
                            <li>Post-go-live support</li>
                            <li>Change readiness & adoption support</li>
                        </ul>
                        <div class="deliverable-best-for">
                            <strong>Best for:</strong> companies implementing or optimizing their ERP
                        </div>
                    </div>
                </div>

                <!-- Power BI Training -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="deliverable-number">02</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">Power BI & Analytics Training</h3>
                            <p class="deliverable-tagline">Certified training programs</p>
                        </div>
                        <ul class="deliverable-features">
                            <li>Power BI fundamentals</li>
                            <li>Data modeling techniques</li>
                            <li>Visual storytelling with data</li>
                            <li>Dashboard creation masterclass</li>
                            <li>Data cleansing & ETL basics</li>
                            <li>Performance optimization</li>
                        </ul>
                        <div class="deliverable-best-for">
                            <strong>Best for:</strong> teams building data-driven decision culture
                        </div>
                    </div>
                </div>

                <!-- Learning Platform -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="deliverable-number">03</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">Customized Learning Platform</h3>
                            <p class="deliverable-tagline">Tailored digital learning paths for your organization</p>
                        </div>
                        <ul class="deliverable-features">
                            <li>Custom courses designed for your company</li>
                            <li>Online learning modules</li>
                            <li>Role-based learning journeys</li>
                            <li>Tracking & reporting dashboards</li>
                            <li>Blended training options (online + classroom)</li>
                            <li>Certification programs</li>
                        </ul>
                        <div class="deliverable-best-for">
                            <strong>Best for:</strong> large organizations with ongoing training needs
                        </div>
                    </div>
                </div>

                <!-- Digital Skills -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="deliverable-number">04</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">Digital Skills Development</h3>
                            <p class="deliverable-tagline">Skills required for modern work</p>
                        </div>
                        <ul class="deliverable-features">
                            <li>Digital adoption strategies</li>
                            <li>Reporting best practices</li>
                            <li>Workflow automation basics</li>
                            <li>System-to-system collaboration</li>
                            <li>Data literacy fundamentals</li>
                            <li>Process documentation skills</li>
                        </ul>
                        <div class="deliverable-best-for">
                            <strong>Best for:</strong> teams transitioning to digital-first operations
                        </div>
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
                            <path d="M8 32L16 20L24 28L32 16L40 24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M32 16H40V24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Higher Adoption</h3>
                    <p>Significantly improved system adoption rates</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="16" r="8" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M10 38C10 30 15 26 24 26C33 26 38 30 38 38" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Confident Staff</h3>
                    <p>More capable and empowered employees</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M18 24L22 28L30 18" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Less Dependency</h3>
                    <p>Reduced reliance on external support</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="400">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M24 16L28 24L24 32L20 24L24 16Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Better Decisions</h3>
                    <p>Improved decision-making across teams</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="500">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M16 24L24 16L32 24L24 32L16 24Z" fill="currentColor" opacity="0.3"/>
                        </svg>
                    </div>
                    <h3>Sustainable Change</h3>
                    <p>Transformation that lasts</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="600">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 8L34 16L24 24L14 16L24 8Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                            <path d="M14 24L24 32L34 24M14 32L24 40L34 32" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Future-Ready</h3>
                    <p>Teams prepared for continuous evolution</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="detail-cta-section">
        <div class="detail-container">
            <div class="cta-content" data-aos="zoom-in">
                <h2 class="cta-title">Curate Your Training Program</h2>
                <p class="cta-subtitle">Let's build a learning journey tailored to your team</p>
                <button class="cta-button" onclick="openServiceModal()">
                    <span>Design Your Program</span>
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
