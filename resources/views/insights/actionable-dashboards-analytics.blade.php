@extends('layouts.app')

@section('content')
    <!-- Article Hero Section -->
    <section class="article-detail-hero">
        <div class="article-hero-background">
            <img src="{{ asset('images/insights/article4.jpg') }}" alt="Data Analytics Dashboards" class="article-hero-image">
            <div class="article-hero-overlay"></div>
        </div>
        
        <div class="article-hero-content" data-aos="fade-up">
            <div class="article-category-badge data">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <rect x="2" y="10" width="3" height="4" stroke="currentColor" stroke-width="1.5"/>
                    <rect x="6.5" y="6" width="3" height="8" stroke="currentColor" stroke-width="1.5"/>
                    <rect x="11" y="2" width="3" height="12" stroke="currentColor" stroke-width="1.5"/>
                </svg>
                Data & Analytics
            </div>
            
            <h1 class="article-hero-title">Empowering Smarter Decisions Through Clear, Actionable Dashboards</h1>
            
            <div class="article-hero-meta">
                <div class="article-meta-item">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M8 4v4l2 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    10 min read
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
                As businesses scale, the volume of data grows exponentially—yet actionable insights often shrink. Many organizations still struggle with inconsistent reporting, delayed information, and dashboards that fail to drive meaningful decisions. Through our Data & Analytics service, SBI transforms scattered data into curated, real-time dashboards tailored to each client's operational needs.
            </p>
        </div>
    </section>

    <!-- Article Content Section -->
    <section class="article-content-section">
        <div class="article-content-container">
            <article class="article-content-body" data-aos="fade-up">
                <h2>From Data Overload to Strategic Clarity</h2>
                
                <p>In today's business landscape, data is no longer a back-office asset—it is the foundation of every strategic move. Yet many organizations still struggle with scattered reports, inconsistent templates, and insights that arrive too late to guide real decisions. Our Data & Analytics service helps companies break this cycle by converting raw information into dashboards that are accurate, real-time, and truly useful for the teams who rely on them every day.</p>
                
                <blockquote>
                    A well-designed dashboard is not just a reporting tool—it becomes the control center for the entire operation.
                </blockquote>

                <div class="article-content-image" data-aos="fade-up">
                    <img src="{{ asset('images/insights/article4.jpg') }}" alt="Power BI Dashboard Analytics">
                    <div class="article-image-caption">
                        Real-time dashboards centralize key metrics like supplier performance, spend tracking, and operational KPIs into one actionable interface
                    </div>
                </div>

                <h2>Case Study: Integrated Procurement Overview Dashboard</h2>
                
                <p>Over the past projects, our work has shown that a well-designed dashboard is not just a reporting tool—it becomes the control center for the entire operation. For example, when developing an integrated Procurement Overview Dashboard, we centralized everything from supplier ratings to cost distribution in one Power BI interface.</p>
                
                <p>This immediately reduced report preparation time, eliminated manual consolidation errors, and gave management a clearer picture of where performance was improving—or slipping—at any moment.</p>

                <div class="article-highlight-box">
                    <h3>Essential Procurement Indicators</h3>
                    <p>To make insights easier to understand and act on, we structured the dashboard around a few essential procurement indicators:</p>
                    <ul>
                        <li><strong>Supplier Performance Visibility</strong> – enabling targeted engagement with high-impact suppliers</li>
                        <li><strong>Spend Tracking by PO Type & Region</strong> – supporting tighter cost control and budget alignment</li>
                        <li><strong>Buyer-Level Spend Monitoring</strong> – improving accountability and purchasing discipline</li>
                        <li><strong>Return-to-Supplier Insights</strong> – clearly showing quality issues and operational bottlenecks</li>
                        <li><strong>Late Invoice Tracking</strong> – helping finance anticipate delays and maintain strong supplier trust</li>
                    </ul>
                </div>

                <div class="article-stats-grid">
                    <div class="article-stat-card">
                        <span class="article-stat-number">70%</span>
                        <span class="article-stat-label">Faster Reporting</span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">100%</span>
                        <span class="article-stat-label">Data Accuracy</span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">Real-time</span>
                        <span class="article-stat-label">Updates</span>
                    </div>
                </div>

                <h2>Building Consistency Across the Organization</h2>
                
                <p>Consistency also plays an important role in building a mature analytics culture. Many companies face confusion simply because dashboards vary widely from department to department. To address this, we created a standardized Power BI template—a reusable design system that included company colors, typography rules, logo placement, and layout principles.</p>
                
                <p>With this template, every future dashboard across the organization followed the same visual identity and analytical structure, making cross-department reporting easier and significantly more professional.</p>

                <h2>From Development to Ownership</h2>
                
                <p>But a dashboard's true value depends on its users. That is why our service doesn't stop at development. We provide structured training and handover sessions to ensure that your team can update, maintain, and expand the dashboards confidently on their own.</p>
                
                <blockquote>
                    This upskilling component often becomes one of the strongest long-term benefits for clients, transforming dashboards from a one-time project into a sustainable analytical capability.
                </blockquote>

                <h2>Beyond Procurement: Analytics for Every Function</h2>
                
                <p>While procurement dashboards demonstrate the power of structured analytics, SBI's capability extends across all business functions. We've built dashboards for:</p>
                
                <ul>
                    <li><strong>Finance:</strong> Cash flow projections, budget variance, AR/AP aging</li>
                    <li><strong>Operations:</strong> Production efficiency, asset utilization, downtime analysis</li>
                    <li><strong>Sales:</strong> Pipeline visibility, conversion rates, customer segmentation</li>
                    <li><strong>Supply Chain:</strong> Inventory turnover, delivery performance, logistics costs</li>
                    <li><strong>HR:</strong> Workforce analytics, training completion, turnover trends</li>
                </ul>

                <h2>The SBI Approach to Data & Analytics</h2>
                
                <p>Our approach always starts with understanding your specific needs—not imposing a template. We work closely with your team to:</p>
                
                <ol>
                    <li>Identify the key decisions you need to make</li>
                    <li>Determine what data would support those decisions</li>
                    <li>Design dashboards that are intuitive and actionable</li>
                    <li>Establish data governance and refresh schedules</li>
                    <li>Train your team to maintain and evolve the solution</li>
                </ol>
                
                <p>The result is not just a dashboard—it's a foundation for data-driven decision-making that grows with your business. When executed properly, analytics becomes your competitive advantage, helping you spot opportunities faster, respond to challenges earlier, and operate with confidence backed by facts.</p>
                
                <p>In a world where every company has access to data, the winners are those who can turn that data into action. That's where SBI makes the difference.</p>
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
