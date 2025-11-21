@extends('layouts.app')

@section('content')
    <!-- Article Hero Section -->
    <section class="article-detail-hero">
        <div class="article-hero-background">
            <img src="{{ asset('images/insights/article2.jpg') }}" alt="System Integration" class="article-hero-image">
            <div class="article-hero-overlay"></div>
        </div>
        
        <div class="article-hero-content" data-aos="fade-up">
            <div class="article-category-badge integration">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M8 1V2M8 14V15M2.22 2.22L2.93 2.93M13.07 13.07L13.78 13.78M1 8H2M14 8H15M2.22 13.78L2.93 13.07M13.07 2.93L13.78 2.22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                System Integration
            </div>
            
            <h1 class="article-hero-title">System Integration: Connecting Every Part of Your Business Into One Intelligent Flow</h1>
            
            <div class="article-hero-meta">
                <div class="article-meta-item">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M8 4v4l2 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    7 min read
                </div>
                <div class="article-meta-divider"></div>
                <div class="article-meta-item">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <rect x="2" y="3" width="12" height="11" rx="2" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M2 6h12M5 1v2M11 1v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    November 2024
                </div>
            </div>
        </div>
    </section>

    <!-- Article Summary Section -->
    <section class="article-summary-section">
        <div class="article-summary-container" data-aos="fade-up">
            <p class="article-summary-text">
                The world is moving faster than ever. Businesses are expanding, customers expect immediate response, and operations demand accuracy across every step. But as companies grow, their systems often don't grow with them. Data becomes scattered, processes stay manual, and the gap between what teams want to do and what their systems allow them to do becomes wider. System integration is the bridge that closes that gap—turning disconnected tools into a single, intelligent network.
            </p>
        </div>
    </section>

    <!-- Article Content Section -->
    <section class="article-content-section">
        <div class="article-content-container">
            <article class="article-content-body" data-aos="fade-up">
                <h2>Why System Integration Matters More Today Than Ever</h2>
                
                <p>Modern companies operate in a global, real-time world. Supply chains shift by the hour. Customer expectations evolve by the day. And technology accelerates by the minute.</p>
                
                <p>But even as businesses scale, many of their internal systems remain siloed—data sits in one platform, operations run in another, and teams spend unnecessary hours trying to piece information together manually. This fragmentation quietly slows down decision-making, drains productivity, and creates inconsistencies that directly affect customer experience.</p>

                <div class="article-content-image" data-aos="fade-up">
                    <img src="{{ asset('images/insights/article2.jpg') }}" alt="System Integration Architecture">
                    <div class="article-image-caption">
                        Seamless system integration connects telemetry devices, automation platforms, and ERP systems into one unified workflow
                    </div>
                </div>

                <h2>A Real Integration Example: Turning Telemetry Data Into Actionable ERP Workflows</h2>
                
                <p>One of our recent projects involved integrating a telemetry system with the client's ERP to enable real-time monitoring, smarter scheduling, and automated order creation. Previously, tank levels were checked manually and orders were submitted reactively—causing delays, last-minute arrangements, and high operational pressure.</p>
                
                <p>By linking telemetry data to the ERP through an intermediate automation platform, we built a seamless flow:</p>

                <div class="article-highlight-box">
                    <h3>The Integration Process</h3>
                    <ul>
                        <li>Telemetry devices send tank-level data in real time</li>
                        <li>Data is processed and synchronized into the ERP periodically</li>
                        <li>The system calculates consumption trends and refill timing</li>
                        <li>Sales orders are generated automatically when tank levels reach a defined threshold</li>
                        <li>The business gains predictive insights instead of reactive scrambling</li>
                    </ul>
                </div>

                <p>This integration transformed how the company served its customers. Operations became proactive, logistics became predictable, and customers experienced faster, more reliable service without needing to request it manually.</p>

                <div class="article-stats-grid">
                    <div class="article-stat-card">
                        <span class="article-stat-number">100%</span>
                        <span class="article-stat-label">Automated Orders</span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">Real-time</span>
                        <span class="article-stat-label">Data Sync</span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">Zero</span>
                        <span class="article-stat-label">Manual Checks</span>
                    </div>
                </div>

                <h2>Beyond Telemetry—SBI Integrates Whatever Your Business Needs</h2>
                
                <p>Every company's technology landscape is different. Some need asset management tools connected to ERP. Some need HR platforms synchronized with attendance records. Others need WhatsApp approvals integrated into workflows. And many need data from multiple systems flowing cleanly into dashboards or automated decision engines.</p>
                
                <p>SBI's role is not to push a specific tool. Our job is to understand how your business works, identify where connection brings the most value, and recommend systems that fit your operational reality.</p>
                
                <blockquote>
                    Whether you are thinking about integrating a new platform into your ERP, evaluating if a system will actually work for your processes, or wanting to automate a workflow but unsure where to begin—our experienced consultants will assess your needs and design the right integration strategy.
                </blockquote>

                <h2>Integration as a Growth Enabler</h2>
                
                <p>System integration isn't just about connecting tools—it's about enabling your business to scale without friction. When systems communicate seamlessly, teams can focus on strategic work rather than manual coordination. Decision-makers get accurate, timely information. And customers experience consistency across every touchpoint.</p>
                
                <p>As technology continues to evolve, SBI ensures your business evolves with it—smartly, smoothly, and sustainably. We bridge the gap between isolated systems and unified operations, transforming complexity into clarity and disconnection into intelligent flow.</p>
                
                <p>The companies that thrive in the modern economy are those that can adapt quickly, respond intelligently, and operate efficiently. System integration is the foundation that makes all of that possible.</p>
            </article>
        </div>
    </section>

    <!-- Back Navigation -->
    <section class="article-back-nav">
        <div class="article-back-container">
            <a href="{{ route('insights') }}" class="article-back-button">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M16 10H4M4 10L9 5M4 10L9 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>Back to Insights</span>
            </a>
        </div>
    </section>
@endsection
