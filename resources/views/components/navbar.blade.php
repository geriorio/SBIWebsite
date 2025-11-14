<nav class="navbar-glass" id="mainNav">
    <div class="nav-container">
        <a class="nav-brand" href="/"> 
            <div class="brand-icon">
                @if(file_exists(public_path('sbi.webp')))
                    <img src="{{ asset('sbi.png') }}" alt="SBI Logo" style="width: 100%; height: 100%; object-fit: contain;" />
                @else
                    <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="18" stroke="url(#brandGradient)" stroke-width="2"/>
                        <path d="M12 20 L18 14 L24 20 L30 14" stroke="url(#brandGradient)" stroke-width="2" stroke-linecap="round"/>
                        <defs>
                            <linearGradient id="brandGradient" x1="0" y1="0" x2="40" y2="40">
                                <stop offset="0%" stop-color="#00E5FF"/>
                                <stop offset="100%" stop-color="#00B8D4"/>
                            </linearGradient>
                        </defs>
                    </svg>
                @endif
            </div>
        </a>

        <ul class="nav-links">
            <li><a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="/about" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="#services" class="nav-link">Services</a></li>
            <li><a href="#insights" class="nav-link">Insights</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>

        <button class="nav-cta">
            <span>Get Started</span>
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>

        <button class="mobile-toggle" id="mobileToggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>
