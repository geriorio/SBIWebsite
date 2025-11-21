// Insights Page JavaScript
console.log('✅ Insights.js loaded!');

document.addEventListener('DOMContentLoaded', function() {
    console.log('✅ DOM Content Loaded - Insights');
    
    // Typing Animation Effect - Only on Insights Page
    const insightsHero = document.querySelector('.insights-hero-modern');
    
    if (!insightsHero) {
        console.log('❌ Not on insights page, exiting...');
        return;
    }
    
    const typingElement = insightsHero.querySelector('.typing-text');
    const typingElementSecond = insightsHero.querySelector('.typing-text-second');
    const heroDescription = insightsHero.querySelector('.hero-description');
    
    if (typingElement && typingElementSecond) {
        const text = typingElement.getAttribute('data-text');
        const textSecond = typingElementSecond.getAttribute('data-text');
        
        // Clear initial content
        typingElement.textContent = '';
        typingElementSecond.textContent = '';
        
        // PASTIKAN TIDAK ADA CURSOR DI BARIS PERTAMA
        typingElement.classList.remove('show-cursor');
        typingElementSecond.classList.remove('show-cursor');
        
        let charIndex = 0;
        
        // First Line Typing - TANPA CURSOR
        function typeCharacter() {
            if (charIndex < text.length) {
                typingElement.textContent += text.charAt(charIndex);
                charIndex++;
                
                const typingSpeed = Math.random() * 70 + 50;
                setTimeout(typeCharacter, typingSpeed);
            } else {
                console.log('✅ Line 1 complete (no cursor), starting line 2');
                setTimeout(startSecondLine, 300);
            }
        }
        
        // Second Line Typing - DENGAN CURSOR
        function startSecondLine() {
            // Add cursor to line 2
            typingElementSecond.classList.add('show-cursor');
            console.log('✅ Cursor added to line 2');
            
            let charIndexSecond = 0;
            
            function typeCharacterSecond() {
                if (charIndexSecond < textSecond.length) {
                    typingElementSecond.textContent += textSecond.charAt(charIndexSecond);
                    charIndexSecond++;
                    
                    const typingSpeed = Math.random() * 70 + 50;
                    setTimeout(typeCharacterSecond, typingSpeed);
                } else {
                    // Remove cursor and show description immediately
                    typingElementSecond.classList.remove('show-cursor');
                    console.log('✅ Typing complete, cursor removed');
                    
                    // Show description with fade-in
                    if (heroDescription) {
                        heroDescription.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                        heroDescription.style.transform = 'translateY(20px)';
                        
                        setTimeout(() => {
                            heroDescription.style.opacity = '1';
                            heroDescription.style.transform = 'translateY(0)';
                            console.log('✅ Description shown');
                        }, 100);
                    }
                }
            }
            
            typeCharacterSecond();
        }
        
        // Start typing after delay
        console.log('⏰ Starting typing in 1 second...');
        setTimeout(typeCharacter, 1000);
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href && href.startsWith('#') && href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
    
    // Article Search Functionality
    const searchInput = document.getElementById('insightsArticleSearch');
    const clearButton = document.getElementById('insightsClearSearch');
    const articlesGrid = document.getElementById('insightsArticlesGrid');
    const noResults = document.getElementById('insightsNoResults');
    
    if (searchInput && articlesGrid) {
        // Get all articles
        const articles = Array.from(articlesGrid.querySelectorAll('.insights-article-card'));
        
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();
            
            // Show/hide clear button
            if (clearButton) {
                clearButton.style.display = searchTerm ? 'block' : 'none';
            }
            
            let visibleCount = 0;
            
            // Filter articles
            articles.forEach(article => {
                const title = article.querySelector('.insights-article-title-card')?.textContent.toLowerCase() || '';
                const summary = article.querySelector('.insights-article-summary')?.textContent.toLowerCase() || '';
                const category = article.querySelector('.insights-category-tag')?.textContent.toLowerCase() || '';
                
                const matches = title.includes(searchTerm) || 
                               summary.includes(searchTerm) || 
                               category.includes(searchTerm);
                
                if (matches || searchTerm === '') {
                    article.style.display = '';
                    visibleCount++;
                } else {
                    article.style.display = 'none';
                }
            });
            
            // Show/hide no results message
            if (noResults) {
                noResults.style.display = (visibleCount === 0 && searchTerm !== '') ? 'block' : 'none';
            }
        });
        
        // Clear search
        if (clearButton) {
            clearButton.addEventListener('click', function() {
                searchInput.value = '';
                searchInput.dispatchEvent(new Event('input'));
                searchInput.focus();
            });
        }
    }
    
    // Load More Insights functionality
    const loadMoreBtn = document.querySelector('.load-more-btn');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            // Add loading state
            const btnText = this.querySelector('span');
            const originalText = btnText.textContent;
            btnText.textContent = 'Loading...';
            this.style.pointerEvents = 'none';
            
            // Simulate loading (replace with actual API call)
            setTimeout(() => {
                btnText.textContent = originalText;
                this.style.pointerEvents = 'auto';
                
                // Here you would typically load more insights
                console.log('Load more insights...');
            }, 1500);
        });
    }
    
    // Newsletter form submission
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailInput = this.querySelector('.newsletter-input');
            const submitBtn = this.querySelector('.newsletter-submit');
            const btnText = submitBtn.querySelector('span');
            const originalText = btnText.textContent;
            
            // Basic email validation
            const email = emailInput.value.trim();
            if (!email || !email.includes('@')) {
                alert('Please enter a valid email address');
                return;
            }
            
            // Show loading state
            btnText.textContent = 'Subscribing...';
            submitBtn.style.pointerEvents = 'none';
            
            // Simulate API call (replace with actual subscription logic)
            setTimeout(() => {
                btnText.textContent = 'Subscribed!';
                emailInput.value = '';
                
                setTimeout(() => {
                    btnText.textContent = originalText;
                    submitBtn.style.pointerEvents = 'auto';
                }, 2000);
            }, 1500);
        });
    }
});
