@extends('layouts.app')

@section('content')
    <!-- About Hero Section -->
    <section class="about-hero-modern">
        <div class="hero-image-background">
            <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero Background" class="hero-bg-image">
            <div class="image-overlay"></div>
        </div>
        <div class="particles-bg"></div>
        <div class="hero-gradient"></div>
        
        <div class="about-hero-content" data-aos="fade-up">
            <div class="hero-badge">
                <span class="badge-dot"></span>
                Our Story
            </div>
            <h1 class="hero-heading">
                <span class="text-gradient">Fighting</span> For A Change
            </h1>
            <p class="hero-description">
                Bringing Indonesian Industries an inch closer to international competition
            </p>
        </div>
    </section>

    <!-- Company Introduction -->
    <section class="about-intro-section">
        <div class="section-container">
            <div class="intro-wrapper" data-aos="fade-up">
                <p class="intro-text-large">
                    At <span class="text-gradient-inline">Samudera Biru Internasional</span>, we focus our resources on increasing the competitiveness of 
                    Indonesian companies across all industries. Ranging from Finance to Manufacturing, we strive to create 
                    stronger business ecosystems.
                </p>
                <p class="intro-text">
                    Working together with our clients in each and every step of their transformation process, we implement 
                    digital analytics and modern technological instruments tailored to achieve operational excellence and 
                    stronger execution capabilities.
                </p>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="vm-section-modern">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag">Core Values</span>
                <h2 class="section-title">Our Core <span class="text-gradient">Beliefs</span></h2>
            </div>

            <div class="vm-grid">
                <div class="vm-card-modern" data-aos="fade-right" data-aos-delay="100">
                    <div class="vm-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 8L32 16L24 24L16 16L24 8Z" stroke="url(#vmGradient1)" stroke-width="2" fill="rgba(0,229,255,0.1)"/>
                            <circle cx="24" cy="32" r="8" stroke="url(#vmGradient1)" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3 class="vm-title-modern">VISION</h3>
                    <p class="vm-text-modern">
                        Helping Indonesian companies across various industries achieve sustainable competitive advantages 
                        in domestic and international markets, while sparking a culture of continuous improvement
                    </p>
                </div>

                <div class="vm-card-modern" data-aos="fade-left" data-aos-delay="200">
                    <div class="vm-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="8" y="8" width="32" height="32" rx="4" stroke="url(#vmGradient2)" stroke-width="2"/>
                            <path d="M16 24L22 30L32 18" stroke="url(#vmGradient2)" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="vm-title-modern">MISSION</h3>
                    <div class="mission-list-modern">
                        <div class="mission-item-modern">
                            <span class="mission-icon">▸</span>
                            <p>Be the catalyst for nation-wide energy transformation towards sustainable solar energy</p>
                        </div>
                        <div class="mission-item-modern">
                            <span class="mission-icon">▸</span>
                            <p>Provide 4.0 Tech consultancy and implementation assistance for operational excellence</p>
                        </div>
                        <div class="mission-item-modern">
                            <span class="mission-icon">▸</span>
                            <p>Enhance Indonesia's human capital for knowledge-based economy transition</p>
                        </div>
                        <div class="mission-item-modern">
                            <span class="mission-icon">▸</span>
                            <p>Assist business ecosystem creation with ERP and critical systems consultancy</p>
                        </div>
                    </div>
                </div>
            </div>

            <svg width="0" height="0">
                <defs>
                    <linearGradient id="vmGradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#00E5FF"/>
                        <stop offset="100%" stop-color="#00B8D4"/>
                    </linearGradient>
                    <linearGradient id="vmGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#76FF03"/>
                        <stop offset="100%" stop-color="#64DD17"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section-modern">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag">Leadership</span>
                <h2 class="section-title">Meet The <span class="text-gradient">Blue Ocean Thinkers</span></h2>
            </div>

            <!-- Team Grid -->
            <div class="team-grid">
                <!-- Founder -->
                <div class="team-card-modern" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card-inner">
                        <div class="team-image-container">
                            <picture>
                                <source srcset="{{ asset('images/team/imelda.webp') }}" type="image/webp">
                                <source srcset="{{ asset('images/team/imelda.png') }}" type="image/png">
                                <img src="{{ asset('images/team/imelda.jpg') }}" alt="Imelda Harsono" class="team-image">
                            </picture>
                            <div class="team-overlay">
                                <div class="team-role-badge">Founder & MD</div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name-modern">Imelda Harsono</h3>
                            <p class="team-position">FOUNDER & MANAGING DIRECTOR</p>
                            <div class="team-quote-modern">
                                <svg class="quote-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9C6 6.8 7.8 5 10 5V7C8.9 7 8 7.9 8 9H10V15H4V9H6ZM18 9C18 6.8 19.8 5 22 5V7C20.9 7 20 7.9 20 9H22V15H16V9H18Z" fill="currentColor"/>
                                </svg>
                                <p>Our Business Intelligence team is trained to constantly adapt towards changes by leveraging technology to achieve maximum business performance</p>
                            </div>
                            <div class="team-bio-modern">
                                <div class="bio-content">
                                    <p class="bio-preview">Imelda Harsono founded Samudera Biru Internasional in 2015 as a renewable energy company to facilitate wide-scale adoption of solar projects throughout Indonesia...</p>
                                    <div class="bio-full" style="display: none;">
                                        <p>Imelda Harsono founded Samudera Biru Internasional in 2015 as a renewable energy company to facilitate wide-scale adoption of solar projects throughout Indonesia. As the Industry 4.0 revolution rapidly took hold in the rest of the world, Imelda quickly expanded SBI's mission into business process consulting services to help local companies achieve a successful transition into the 4.0 era without getting left behind.</p>
                                        <p>Her passion for improving the skills and education of working age Indonesians led her to join the Board of HarukaEdu, a company dedicated to providing technology platform solutions that enable affordable lifelong learning.</p>
                                        <p>Imelda is currently enrolled at Harvard Business School's Owner/President Management Program, a two year program designed to enhance the business skills of top world executives and entrepreneurs. She also holds a BA in Political Science and Philosophy from the National University of Singapore, a Master of Management from Universitas Pelita Harapan Graduate School of Business (Cum Laude), and a Master of Laws in International Commercial Law from the University of Edinburgh in Scotland.</p>
                                    </div>
                                </div>
                                <button class="read-more-btn" onclick="toggleBio(this)">
                                    <span class="read-more-text">Read More</span>
                                    <svg class="read-more-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Co-Founder -->
                <div class="team-card-modern" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-card-inner">
                        <div class="team-image-container">
                            <img src="{{ asset('images/team/rachmat.webp') }}" alt="Rachmat Harsono" class="team-image">
                            <div class="team-overlay">
                                <div class="team-role-badge">Co-Founder</div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name-modern">Rachmat Harsono</h3>
                            <p class="team-position">CO-FOUNDER & COMMISSIONER</p>
                            <div class="team-quote-modern">
                                <svg class="quote-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9C6 6.8 7.8 5 10 5V7C8.9 7 8 7.9 8 9H10V15H4V9H6ZM18 9C18 6.8 19.8 5 22 5V7C20.9 7 20 7.9 20 9H22V15H16V9H18Z" fill="currentColor"/>
                                </svg>
                                <p>SBI was established to brought change into the landscape of Indonesian Industry. A catalyst of a nation-wide change into alternative energy</p>
                            </div>
                            <div class="team-bio-modern">
                                <div class="bio-content">
                                    <p class="bio-preview">Rachmat has 15+ years experience in Indonesia's energy industry and is a driven and passionate serial Entrepreneur...</p>
                                    <div class="bio-full" style="display: none;">
                                        <p>Rachmat has 15+ years experience in Indonesia's energy industry and is a driven and passionate serial Entrepreneur. He has received numerous awards, including Fortune 40 under 40 (Indonesia) and is a member of the Chicago Booth CFO Forum. Rachmat has a BSc in Marketing, International Business and HR from Marquette University and a MBA from the University of Chicago Booth School of Business.</p>
                                    </div>
                                </div>
                                <button class="read-more-btn" onclick="toggleBio(this)">
                                    <span class="read-more-text">Read More</span>
                                    <svg class="read-more-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- COO -->
                <div class="team-card-modern" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-card-inner">
                        <div class="team-image-container">
                            <picture>
                                <source srcset="{{ asset('images/team/mario.webp') }}" type="image/webp">
                                <source srcset="{{ asset('images/team/mario.png') }}" type="image/png">
                                <img src="{{ asset('images/team/mario.jpg') }}" alt="Mario Velez" class="team-image">
                            </picture>
                            <div class="team-overlay">
                                <div class="team-role-badge">COO</div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name-modern">Mario Velez</h3>
                            <p class="team-position">CHIEF OPERATING OFFICER</p>
                            <div class="team-quote-modern">
                                <svg class="quote-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9C6 6.8 7.8 5 10 5V7C8.9 7 8 7.9 8 9H10V15H4V9H6ZM18 9C18 6.8 19.8 5 22 5V7C20.9 7 20 7.9 20 9H22V15H16V9H18Z" fill="currentColor"/>
                                </svg>
                                <p>In the Industry 4.0 era, businesses failing to use technology to radically and continuously change are making themselves vulnerable to severe disruption</p>
                            </div>
                            <div class="team-bio-modern">
                                <div class="bio-content">
                                    <p class="bio-preview">After graduating with a B.A. from Pomona College in Claremont, California, Mario began his career as a Strategy and Operations consultant at Deloitte Consulting...</p>
                                    <div class="bio-full" style="display: none;">
                                        <p>After graduating with a B.A. from Pomona College in Claremont, California, Mario began his career as a Strategy and Operations consultant at Deloitte Consulting. He later obtained a Juris Doctor degree from the University of Chicago Law School in 2009 and an LLM with Distinction in Commercial Law from the University of Edinburgh in 2010. Prior to moving to Indonesia, Mario worked as an attorney for White & Case, an international law firm, where he represented multinational companies and sovereigns.</p>
                                    </div>
                                </div>
                                <button class="read-more-btn" onclick="toggleBio(this)">
                                    <span class="read-more-text">Read More</span>
                                    <svg class="read-more-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
function toggleBio(button) {
    const bioContent = button.previousElementSibling;
    const preview = bioContent.querySelector('.bio-preview');
    const full = bioContent.querySelector('.bio-full');
    const readMoreText = button.querySelector('.read-more-text');
    
    if (full.style.display === 'none') {
        // Expand
        preview.style.display = 'none';
        full.style.display = 'block';
        readMoreText.textContent = 'Read Less';
        button.classList.add('expanded');
        
        // Smooth scroll to keep button in view if needed
        setTimeout(() => {
            const buttonRect = button.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            
            if (buttonRect.bottom > windowHeight) {
                button.scrollIntoView({ behavior: 'smooth', block: 'end' });
            }
        }, 100);
    } else {
        // Collapse
        preview.style.display = 'block';
        full.style.display = 'none';
        readMoreText.textContent = 'Read More';
        button.classList.remove('expanded');
    }
}
</script>
@endpush
