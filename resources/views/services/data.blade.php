@extends('layouts.app')

@push('styles')
@vite(['resources/css/service-detail.css'])
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="detail-hero data-hero">
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
                <span class="breadcrumb-current">Data Architecture</span>
            </div>

            <div class="hero-content" data-aos="fade-up">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Pillar 03
                </div>
                <h1 class="hero-title">
                    Data Architecture, Dashboards & <br>
                    <span class="text-gradient">Business Intelligence</span>
                </h1>
                <p class="hero-subtitle">
                    Turn Data Into a Strategic Asset
                </p>
            </div>

            <div class="hero-stats" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M8 24L16 12L24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="16" cy="12" r="2" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="stat-text">
                        <div class="stat-value">80%</div>
                        <div class="stat-label">Faster Insights</div>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <rect x="6" y="6" width="20" height="20" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M6 12H26M12 6V26" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="stat-text">
                        <div class="stat-value">100%</div>
                        <div class="stat-label">Data Accuracy</div>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16 8V16L20 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="16" cy="16" r="12" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="stat-text">
                        <div class="stat-value">90%</div>
                        <div class="stat-label">Decision Confidence</div>
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
                        Your business generates data every day. The question is: <strong>Is it helping you make better decisions?</strong>
                    </p>
                    <p class="section-text">
                        We help organizations transform raw data into clear, reliable insights through data foundation, architecture, and visualization systems.
                    </p>
                </div>
                <div class="intro-visual" data-aos="fade-left">
                    <div class="visual-card">
                        <div class="visual-stat">
                            <div class="visual-number">50+</div>
                            <div class="visual-label">Dashboards Created</div>
                        </div>
                        <div class="visual-stat">
                            <div class="visual-number">95%</div>
                            <div class="visual-label">User Adoption Rate</div>
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
                <p class="section-subtitle">If your leaders are facing:</p>
            </div>

            <div class="pain-points-grid">
                <div class="pain-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 24H36M12 16H36M12 32H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Inconsistent Reports</h3>
                    <p>Different versions of the truth across departments</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="18" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 16V24L28 28" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Slow Decision-Making</h3>
                    <p>Waiting days or weeks for basic insights</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="8" y="12" width="32" height="24" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 20H32M16 28H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Excel Dependency</h3>
                    <p>Manual, error-prone Excel-heavy processes</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="18" cy="18" r="8" stroke="currentColor" stroke-width="2"/>
                            <circle cx="30" cy="30" r="8" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Data Misalignment</h3>
                    <p>Data that doesn't match across systems</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="500">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 12L12 24L24 36L36 24L24 12Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Performance Blindness</h3>
                    <p>Difficulty identifying performance gaps</p>
                </div>

                <div class="pain-card" data-aos="zoom-in" data-aos-delay="600">
                    <div class="pain-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 36L24 12L36 36" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18 28H30" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Lack of Trust</h3>
                    <p>Leaders don't trust the numbers they receive</p>
                </div>
            </div>

            <div class="pain-footer" data-aos="fade-up">
                <p class="emphasis-text">Then it's time to build a single source of truth.</p>
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
                <!-- Management Dashboards -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="deliverable-number">01</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">Management Dashboards & Reporting</h3>
                            <p class="deliverable-tagline">Real-time visibility across your entire business</p>
                        </div>
                        <p style="margin-bottom: 1rem; color: #475569;">We design dashboards that give real-time visibility across:</p>
                        <ul class="deliverable-features">
                            <li>Sales performance & pipeline</li>
                            <li>Finance & cash flow</li>
                            <li>Operations & production</li>
                            <li>Supply chain tracking</li>
                            <li>Inventory levels</li>
                            <li>Procurement metrics</li>
                            <li>HR & workforce analytics</li>
                        </ul>
                        <h4 style="margin: 1.5rem 0 1rem; font-size: 1.1rem; font-weight: 700; color: #0EA5E9;">Tools we use:</h4>
                        <ul class="deliverable-features">
                            <li>Microsoft Power BI</li>
                            <li>EPICOR data visualization</li>
                            <li>Multi-system integrated dashboards</li>
                        </ul>
                        <div class="deliverable-best-for">
                            We also help define consistent KPIs that align teams across regions and functions
                        </div>
                    </div>
                </div>

                <!-- Process Intelligence -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="deliverable-number">02</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">Process Intelligence</h3>
                            <p class="deliverable-tagline">Discover what actually happens vs. what should happen</p>
                        </div>
                        <p style="margin-bottom: 1rem; color: #475569;">Your business has two versions of its processes:</p>
                        <ul class="deliverable-features">
                            <li><strong>What should happen</strong> (documented procedures)</li>
                            <li><strong>What actually happens</strong> (real behavior)</li>
                        </ul>
                        <p style="margin: 1.5rem 0 1rem; color: #475569;">We use data-driven analysis to uncover the real flow and identify:</p>
                        <ul class="deliverable-features">
                            <li>Bottlenecks slowing operations</li>
                            <li>Compliance issues</li>
                            <li>Fraud or anomalies</li>
                            <li>Process gaps</li>
                            <li>Performance drops</li>
                        </ul>
                        <div class="deliverable-best-for">
                            <strong>Result:</strong> Leaders gain clarity they've never had before
                        </div>
                    </div>
                </div>

                <!-- Enterprise Data Management -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="deliverable-number">03</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">Enterprise Data Management (EDM)</h3>
                            <p class="deliverable-tagline">Build a trusted data foundation</p>
                        </div>
                        <ul class="deliverable-features">
                            <li>Data strategy development</li>
                            <li>Data governance frameworks</li>
                            <li>Data quality & cleansing</li>
                            <li>Master data management</li>
                            <li>Data architecture planning</li>
                        </ul>
                        <div class="deliverable-best-for">
                            <strong>Truth:</strong> When your data is trustworthy, your decisions become powerful
                        </div>
                    </div>
                </div>

                <!-- Data Academy -->
                <div class="deliverable-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="deliverable-number">04</div>
                    <div class="deliverable-content">
                        <div class="deliverable-header">
                            <h3 class="deliverable-title">Data & Analytics Academy</h3>
                            <p class="deliverable-tagline">Upskill your teams to become data-driven</p>
                        </div>
                        <ul class="deliverable-features">
                            <li>Power BI training (Basic–Advanced)</li>
                            <li>Data visualization workshops</li>
                            <li>Dashboard creation training</li>
                            <li>Reporting fundamentals</li>
                            <li>Customized learning paths</li>
                            <li>Dedicated online learning platform for your company</li>
                        </ul>
                        <div class="deliverable-best-for">
                            Your transformation becomes sustainable when your people grow with it
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
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M24 14V24L30 30" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Faster Insights</h3>
                    <p>Real-time reporting instead of waiting days</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="3" fill="currentColor"/>
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M24 4V8M24 40V44M4 24H8M40 24H44" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Consistent Data</h3>
                    <p>One version of truth across all departments</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M8 32L16 20L24 28L32 16L40 24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M32 16H40V24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Better Forecasting</h3>
                    <p>Improved planning and decision quality</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="400">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2.5"/>
                            <circle cx="24" cy="24" r="12" stroke="currentColor" stroke-width="2.5"/>
                            <circle cx="24" cy="24" r="4" fill="currentColor"/>
                        </svg>
                    </div>
                    <h3>Clear KPIs</h3>
                    <p>Metrics that drive leadership decisions</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="500">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 8L32 16L24 24L16 16L24 8Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                            <path d="M16 24L24 32L32 24M16 32L24 40L32 32" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Data Culture</h3>
                    <p>Teams that use data daily</p>
                </div>
                <div class="result-card" data-aos="flip-left" data-aos-delay="600">
                    <div class="result-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M18 24L22 28L30 18" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Trusted Decisions</h3>
                    <p>Confidence in every strategic move</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="detail-cta-section">
        <div class="detail-container">
            <div class="cta-content" data-aos="zoom-in">
                <h2 class="cta-title">Request a Dashboard Demo</h2>
                <p class="cta-subtitle">See how we turn data into strategic insights</p>
                <button class="cta-button" onclick="openServiceModal()">
                    <span>Book a Demo</span>
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
