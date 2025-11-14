<footer class="footer-modern" id="contact">
    <div class="footer-gradient"></div>
    
    <div class="footer-container">
        <!-- Top Section -->
        <div class="footer-top">
            <div class="footer-brand-col">
                <div class="footer-brand">
                    <div class="brand-icon-footer">
                        @if(file_exists(public_path('sbi.webp')))
                            <img src="{{ asset('sbi.png') }}" alt="SBI Logo" style="width: 100%; height: 100%; object-fit: contain;" />
                        @else
                            <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="18" stroke="url(#footerGradient)" stroke-width="2"/>
                                <path d="M12 20 L18 14 L24 20 L30 14" stroke="url(#footerGradient)" stroke-width="2" stroke-linecap="round"/>
                                <defs>
                                    <linearGradient id="footerGradient" x1="0" y1="0" x2="40" y2="40">
                                        <stop offset="0%" stop-color="#00E5FF"/>
                                        <stop offset="100%" stop-color="#00B8D4"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        @endif
                    </div>
                    <div>
                        <h3 class="footer-brand-name">Samudera Biru</h3>
                        <p class="footer-brand-sub">Internasional</p>
                    </div>
                </div>
                <p class="footer-tagline">Empowering Indonesian industries through innovation and technology excellence.</p>
                
                <div class="footer-social">
                    <a href="#" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M18.5 0h-17A1.5 1.5 0 000 1.5v17A1.5 1.5 0 001.5 20h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0018.5 0zM6 17H3V8h3v9zM4.5 6.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3zM17 17h-3v-4.5c0-1.1-.9-2-2-2s-2 .9-2 2V17H7V8h3v1.2c.5-.8 1.6-1.4 2.5-1.4 1.9 0 3.5 1.6 3.5 3.5V17z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer-links-col">
                <h4 class="footer-heading">Services</h4>
                <ul class="footer-links">
                    <li><a href="#">Business Process Transformation</a></li>
                    <li><a href="#">Renewable Energy Alternatives</a></li>
                    <li><a href="#">Employee Talent Management</a></li>
                    <li><a href="#">Business Process Optimization</a></li>
                    <li><a href="#">Asset Management System</a></li>
                </ul>
            </div>

            <div class="footer-links-col">
                <h4 class="footer-heading">Company</h4>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footer-newsletter-col">
                <h4 class="footer-heading">Newsletter</h4>
                <p class="newsletter-desc">Subscribe for monthly insights and updates</p>
                <form class="newsletter-form" action="#" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="email" name="email" placeholder="Enter your email" required />
                        <button type="submit" class="submit-btn">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M8 15L13 10L8 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </form>
                
                <div class="footer-contact">
                    <div class="contact-item">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                            <path d="M0 4a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2H2a2 2 0 01-2-2V4zm2-1a1 1 0 00-1 1v.217l7 4.2 7-4.2V4a1 1 0 00-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 002 13h12a1 1 0 00.966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                        </svg>
                        <span>info@samuderabiru.net</span>
                    </div>
                    <div class="contact-item">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                            <path d="M8 0a8 8 0 100 16A8 8 0 008 0zM4.5 7.5a.5.5 0 000 1h5.793l-2.147 2.146a.5.5 0 00.708.708l3-3a.5.5 0 000-.708l-3-3a.5.5 0 10-.708.708L10.293 7.5H4.5z"/>
                        </svg>
                        <span>SOHO SkySuites, Surabaya</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="footer-bottom">
            <p class="copyright">© {{ date('Y') }} Samudera Biru Internasional. All rights reserved.</p>
            <div class="footer-legal">
                <a href="#">Privacy Policy</a>
                <span class="divider">•</span>
                <a href="#">Terms of Service</a>
                <span class="divider">•</span>
                <a href="#">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>
