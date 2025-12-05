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
    
    // Dropdown Filter Functionality
    const dropdownBtn = document.getElementById('filterDropdownBtn');
    const dropdownMenu = document.getElementById('filterDropdownMenu');
    const currentFilterLabel = document.getElementById('currentFilter');
    const dropdownOptions = document.querySelectorAll('.insights-dropdown-option');
    let activeTag = 'all';
    
    if (searchInput && articlesGrid) {
        // Get all articles
        const articles = Array.from(articlesGrid.querySelectorAll('.insights-article-card'));
        
        // Filter function
        function filterArticles() {
            const searchTerm = searchInput.value.toLowerCase().trim();
            let visibleCount = 0;
            
            articles.forEach(article => {
                const title = article.querySelector('.insights-article-title-card')?.textContent.toLowerCase() || '';
                const summary = article.querySelector('.insights-article-summary')?.textContent.toLowerCase() || '';
                const category = article.querySelector('.insights-category-tag')?.textContent.toLowerCase() || '';
                const articleTag = article.getAttribute('data-tag') || '';
                
                // Check if matches search term
                const matchesSearch = searchTerm === '' || 
                                    title.includes(searchTerm) || 
                                    summary.includes(searchTerm) || 
                                    category.includes(searchTerm);
                
                // Check if matches active tag filter
                const matchesTag = activeTag === 'all' || articleTag === activeTag;
                
                if (matchesSearch && matchesTag) {
                    article.style.display = '';
                    article.style.opacity = '1';
                    article.style.transform = 'none';
                    visibleCount++;
                } else {
                    article.style.display = 'none';
                }
            });
            
            // Show/hide clear button
            if (clearButton) {
                clearButton.style.display = searchTerm ? 'block' : 'none';
            }
            
            // Show/hide no results message
            if (noResults) {
                noResults.style.display = (visibleCount === 0) ? 'block' : 'none';
            }
        }
        
        // Dropdown toggle
        if (dropdownBtn && dropdownMenu) {
            dropdownBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                this.classList.toggle('open');
                dropdownMenu.classList.toggle('open');
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
                    dropdownBtn.classList.remove('open');
                    dropdownMenu.classList.remove('open');
                }
            });
            
            // Dropdown option clicks
            dropdownOptions.forEach(option => {
                option.addEventListener('click', function(e) {
                    e.stopPropagation();
                    
                    // Update active state
                    dropdownOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Update label
                    if (currentFilterLabel) {
                        currentFilterLabel.textContent = this.textContent;
                    }
                    
                    // Update active tag
                    activeTag = this.getAttribute('data-filter');
                    
                    // Filter articles
                    filterArticles();
                    
                    // Close dropdown
                    dropdownBtn.classList.remove('open');
                    dropdownMenu.classList.remove('open');
                    
                    console.log('✅ Filter:', activeTag);
                });
            });
        }
        
        // Search input event
        searchInput.addEventListener('input', filterArticles);
        
        // Clear search
        if (clearButton) {
            clearButton.addEventListener('click', function() {
                searchInput.value = '';
                filterArticles();
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
