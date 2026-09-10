@extends('layouts.base')

@section('title', 'Institutional Capital, Global Cards, Real Estate & Wealth Solutions')

@section('styles')
<style>
/* Modern Interactive Hero Slider Styles */
.rbc-hero-slider {
    position: relative;
    overflow: hidden;
    background: #00172e;
    color: #ffffff;
    min-height: 540px;
}

.rbc-slide {
    display: none;
    position: relative;
    min-height: 540px;
    background-size: cover;
    background-position: center;
    transition: opacity 0.8s ease-in-out;
}

.rbc-slide.active {
    display: flex;
    align-items: center;
    animation: fadeInSlide 0.8s ease-in-out forwards;
}

@keyframes fadeInSlide {
    from { opacity: 0; transform: scale(1.02); }
    to { opacity: 1; transform: scale(1); }
}

.rbc-slide-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(0, 23, 46, 0.92) 0%, rgba(0, 34, 68, 0.8) 50%, rgba(0, 34, 68, 0.35) 100%);
    z-index: 1;
}

.rbc-slide-container {
    position: relative;
    z-index: 2;
    padding: 60px 0;
}

.rbc-slider-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: rgba(0, 34, 68, 0.65);
    border: 1px solid rgba(255, 255, 255, 0.25);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 10;
    transition: all 0.25s ease;
    backdrop-filter: blur(8px);
}

.rbc-slider-btn:hover {
    background: var(--rbc-gold);
    color: var(--rbc-navy);
    border-color: var(--rbc-gold);
    transform: translateY(-50%) scale(1.1);
}

.rbc-slider-btn.prev { left: 24px; }
.rbc-slider-btn.next { right: 24px; }

.rbc-slider-dots {
    position: absolute;
    bottom: 24px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
    z-index: 10;
}

.rbc-dot {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.35);
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.rbc-dot.active {
    background: var(--rbc-gold);
    width: 38px;
    border-radius: 12px;
}

.rbc-glass-card {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: 20px;
    padding: 24px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}
</style>
@endsection

@section('content')

    <!-- 4. INTERACTIVE HERO SLIDER WITH SLIDING FINANCIAL IMAGERY -->
    <section class="rbc-hero-slider" id="rbcHeroSlider">
        <!-- Slide 1: Global Capital & Financial Growth -->
        <div class="rbc-slide active" style="background-image: url('{{ asset('storage/app/public/photos/hero_slide1.jpg') }}');">
            <div class="rbc-slide-overlay"></div>
            <div class="rbc-container rbc-slide-container">
                <div class="rbc-hero-grid">
                    <div class="rbc-hero-content">
                        <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                            <i class="fas fa-chart-line"></i> INSTITUTIONAL CAPITAL &amp; WEALTH
                        </span>
                        <h1 class="rbc-hero-title" style="color: #ffffff;">Powering Global Trade &amp; Next-Generation Wealth Management</h1>
                        <p class="rbc-hero-desc" style="color: rgba(255,255,255,0.9);">
                            Experience world-class capital management, seamless commercial transactions, and institutional liquidity solutions with {{ $settings->site_name ?? 'Flutran Global' }}.
                        </p>
                        <div class="rbc-hero-actions">
                            <a href="{{ route('register') }}" class="rbc-btn-primary" style="padding: 13px 30px; font-size: 1rem;">
                                Open Account Online <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="{{ route('investments') }}" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">
                                Explore Wealth Portfolios
                            </a>
                        </div>
                        <p class="rbc-hero-fineprint" style="color: rgba(255,255,255,0.7);"><i class="fas fa-shield-halved"></i> 256-Bit SSL Encrypted Institutional Financial Infrastructure.</p>
                    </div>

                    <div class="rbc-hero-visual">
                        <div class="rbc-glass-card">
                            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 12px; margin-bottom: 16px;">
                                <span style="font-weight: 700; color: var(--rbc-gold);"><i class="fas fa-vault"></i> {{ $settings->site_name ?? 'Flutran' }} Treasury</span>
                                <span style="font-size: 0.8rem; background: #15803d; color: #fff; padding: 3px 8px; border-radius: 4px;"><i class="fas fa-check-circle"></i> Active</span>
                            </div>
                            <div style="margin-bottom: 14px;">
                                <div style="font-size: 0.85rem; color: rgba(255,255,255,0.7);">Total Portfolio Growth</div>
                                <div style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">+32.5% <span style="font-size: 0.9rem; font-weight: 500; color: #4ade80;">(Annualized)</span></div>
                            </div>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                                <a href="{{ route('send-money') }}" style="background: var(--rbc-blue); color: #fff; text-decoration: none; padding: 10px; border-radius: 8px; text-align: center; font-size: 0.82rem; font-weight: 700;">
                                    <i class="fas fa-paper-plane"></i> Direct Wire
                                </a>
                                <a href="{{ route('rates') }}" style="background: rgba(255,255,255,0.15); color: #fff; text-decoration: none; padding: 10px; border-radius: 8px; text-align: center; font-size: 0.82rem; font-weight: 700;">
                                    <i class="fas fa-chart-pie"></i> Rates &amp; FX
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: Digital Platform & Global Cards -->
        <div class="rbc-slide" style="background-image: url('{{ asset('storage/app/public/photos/hero_slide2.jpg') }}');">
            <div class="rbc-slide-overlay"></div>
            <div class="rbc-container rbc-slide-container">
                <div class="rbc-hero-grid">
                    <div class="rbc-hero-content">
                        <span class="rbc-badge-pill" style="background: rgba(0, 163, 224, 0.2); color: #00a3e0; border-color: rgba(0, 163, 224, 0.4);">
                            <i class="fas fa-mobile-screen"></i> SMART DIGITAL PLATFORM
                        </span>
                        <h1 class="rbc-hero-title" style="color: #ffffff;">Fast, Flexible Financial Control on Your Phone &amp; Web</h1>
                        <p class="rbc-hero-desc" style="color: rgba(255,255,255,0.9);">
                            Transfer capital with zero friction, manage multi-currency global cards, and enjoy 24/7 liquidity management in the palm of your hand.
                        </p>
                        <div class="rbc-hero-actions">
                            <a href="{{ route('credit-cards') }}" class="rbc-btn-primary" style="padding: 13px 30px; font-size: 1rem;">
                                Explore Global Cards <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="{{ route('login') }}" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">
                                Sign In to Portal
                            </a>
                        </div>
                        <p class="rbc-hero-fineprint" style="color: rgba(255,255,255,0.7);"><i class="fas fa-bolt"></i> Instant digital issuance &amp; seamless cross-border spending.</p>
                    </div>

                    <div class="rbc-hero-visual">
                        <div class="rbc-glass-card">
                            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 12px; margin-bottom: 16px;">
                                <span style="font-weight: 700; color: #fff;"><i class="fas fa-credit-card" style="color: var(--rbc-gold);"></i> Apex Titanium Card</span>
                                <span style="font-size: 0.8rem; color: #94a3b8;">•••• 9876</span>
                            </div>
                            <div style="background: linear-gradient(135deg, #1e293b, #0f172a); border-radius: 12px; padding: 14px; margin-bottom: 14px; border: 1px solid rgba(255,255,255,0.1);">
                                <div style="font-size: 0.75rem; color: #94a3b8;">Available Liquidity</div>
                                <div style="font-size: 1.6rem; font-weight: 800; color: #ffffff;">$514,520.80</div>
                            </div>
                            <div style="display: flex; gap: 8px;">
                                <a href="{{ route('accounts') }}" style="flex: 1; background: var(--rbc-gold); color: var(--rbc-navy); text-decoration: none; padding: 8px; border-radius: 8px; text-align: center; font-size: 0.8rem; font-weight: 700;">
                                    View Accounts
                                </a>
                                <a href="{{ route('rewards') }}" style="flex: 1; background: rgba(255,255,255,0.15); color: #fff; text-decoration: none; padding: 8px; border-radius: 8px; text-align: center; font-size: 0.8rem; font-weight: 700;">
                                    Rewards Points
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Private Wealth & Portfolio Advisory -->
        <div class="rbc-slide" style="background-image: url('{{ asset('storage/app/public/photos/hero_slide3.jpg') }}');">
            <div class="rbc-slide-overlay"></div>
            <div class="rbc-container rbc-slide-container">
                <div class="rbc-hero-grid">
                    <div class="rbc-hero-content">
                        <span class="rbc-badge-pill" style="background: rgba(22, 163, 74, 0.2); color: #4ade80; border-color: rgba(22, 163, 74, 0.4);">
                            <i class="fas fa-hand-holding-dollar"></i> PRIVATE CLIENT &amp; ADVISORY
                        </span>
                        <h1 class="rbc-hero-title" style="color: #ffffff;">Personalized Wealth Strategies for What Truly Matters</h1>
                        <p class="rbc-hero-desc" style="color: rgba(255,255,255,0.9);">
                            From acquiring prime real estate to compounding strategic assets, our certified portfolio advisors craft customized roadmaps for you.
                        </p>
                        <div class="rbc-hero-actions">
                            <a href="{{ route('contact') }}" class="rbc-btn-primary" style="padding: 13px 30px; font-size: 1rem;">
                                Book an Advisor <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="{{ route('calculators') }}" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">
                                Financing &amp; Wealth Estimator
                            </a>
                        </div>
                        <p class="rbc-hero-fineprint" style="color: rgba(255,255,255,0.7);"><i class="fas fa-users"></i> Over 70,000 global clients guided worldwide.</p>
                    </div>

                    <div class="rbc-hero-visual">
                        <div class="rbc-glass-card">
                            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 12px; margin-bottom: 16px;">
                                <span style="font-weight: 700; color: #fff;"><i class="fas fa-house" style="color: var(--rbc-gold);"></i> Property Solutions</span>
                                <span style="font-size: 0.8rem; background: var(--rbc-gold); color: var(--rbc-navy); font-weight: 700; padding: 2px 8px; border-radius: 4px;">Prime Rate</span>
                            </div>
                            <div style="margin-bottom: 14px;">
                                <div style="font-size: 0.85rem; color: rgba(255,255,255,0.7);">Fixed 5-Year Property Rate</div>
                                <div style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">4.49% <span style="font-size: 0.9rem; font-weight: 500; color: #4ade80;">Special APR</span></div>
                            </div>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                                <a href="{{ route('mortgages') }}" style="background: var(--rbc-blue); color: #fff; text-decoration: none; padding: 10px; border-radius: 8px; text-align: center; font-size: 0.82rem; font-weight: 700;">
                                    Pre-Approval
                                </a>
                                <a href="{{ route('loans') }}" style="background: rgba(255,255,255,0.15); color: #fff; text-decoration: none; padding: 10px; border-radius: 8px; text-align: center; font-size: 0.82rem; font-weight: 700;">
                                    Credit Facilities
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Arrows -->
        <button class="rbc-slider-btn prev" id="heroPrevBtn" aria-label="Previous Slide"><i class="fas fa-chevron-left"></i></button>
        <button class="rbc-slider-btn next" id="heroNextBtn" aria-label="Next Slide"><i class="fas fa-chevron-right"></i></button>

        <!-- Slider Dots -->
        <div class="rbc-slider-dots" id="heroDots">
            <span class="rbc-dot active" data-index="0"></span>
            <span class="rbc-dot" data-index="1"></span>
            <span class="rbc-dot" data-index="2"></span>
        </div>
    </section>

    <!-- 5. 5-CARD PROMOTIONAL CAROUSEL BAR -->
    <section class="rbc-promo-bar">
        <div class="rbc-container">
            <div class="rbc-promo-grid">
                <a href="{{ route('accounts') }}" class="rbc-promo-card">
                    <div class="rbc-promo-card-thumb">
                        <img src="{{ asset('storage/app/public/photos/promo_chequing.jpg') }}" alt="Operating Accounts">
                    </div>
                    <div class="rbc-promo-card-body">
                        <span class="rbc-promo-card-title">Operating Accounts</span>
                    </div>
                </a>

                <a href="{{ route('investments') }}" class="rbc-promo-card">
                    <div class="rbc-promo-card-thumb">
                        <img src="{{ asset('storage/app/public/photos/promo_wealth.jpg') }}" alt="High-Yield Portfolio">
                    </div>
                    <div class="rbc-promo-card-body">
                        <span class="rbc-promo-card-title">High-Yield Portfolio</span>
                    </div>
                </a>

                <a href="{{ route('credit-cards') }}" class="rbc-promo-card">
                    <div class="rbc-promo-card-thumb">
                        <img src="{{ asset('storage/app/public/photos/promo_cards.jpg') }}" alt="Smart Global Cards">
                    </div>
                    <div class="rbc-promo-card-body">
                        <span class="rbc-promo-card-title">Smart Global Cards</span>
                    </div>
                </a>

                <a href="{{ route('rewards') }}" class="rbc-promo-card">
                    <div class="rbc-promo-card-thumb">
                        <img src="{{ asset('storage/app/public/photos/promo_rewards.jpg') }}" alt="Rewards & Perks">
                    </div>
                    <div class="rbc-promo-card-body">
                        <span class="rbc-promo-card-title">Rewards &amp; Perks</span>
                    </div>
                </a>

                <a href="{{ route('investments') }}" class="rbc-promo-card">
                    <div class="rbc-promo-card-thumb">
                        <img src="{{ asset('storage/app/public/photos/promo_investing.jpg') }}" alt="Strategic Asset Allocation">
                    </div>
                    <div class="rbc-promo-card-body">
                        <span class="rbc-promo-card-title">Strategic Asset Allocation</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. WELCOME TO PERSONAL & WEALTH SOLUTIONS (3-CARD ECOSYSTEM) -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Welcome to {{ $settings->site_name ?? 'Flutran Global' }} Financial Platform</h2>
            <p class="rbc-section-subtitle">Explore institutional-grade financial solutions, global cards, property financing, and private wealth management designed to accelerate your capital.</p>

            <div class="rbc-ecosystem-grid">
                <!-- Card 1: Products & Services -->
                <div class="rbc-ecosystem-card">
                    <div class="rbc-ecosystem-header">
                        <h3 class="rbc-ecosystem-title">Products and Solutions</h3>
                    </div>
                    <div class="rbc-ecosystem-body">
                        <ul class="rbc-feature-list">
                            <li class="rbc-feature-item">
                                <a href="{{ route('mortgages') }}">
                                    <div class="rbc-feature-icon"><i class="fas fa-house"></i></div>
                                    <span>Explore Property Solutions</span>
                                </a>
                            </li>
                            <li class="rbc-feature-item">
                                <a href="{{ route('accounts') }}">
                                    <div class="rbc-feature-icon"><i class="fas fa-wallet"></i></div>
                                    <span>Open an Operating Account</span>
                                </a>
                            </li>
                            <li class="rbc-feature-item">
                                <a href="{{ route('investments') }}">
                                    <div class="rbc-feature-icon"><i class="fas fa-chart-pie"></i></div>
                                    <span>Personal Wealth &amp; Portfolios</span>
                                </a>
                            </li>
                            <li class="rbc-feature-item">
                                <a href="{{ route('loans') }}">
                                    <div class="rbc-feature-icon"><i class="fas fa-coins"></i></div>
                                    <span>Credit Facilities &amp; Financing</span>
                                </a>
                            </li>
                            <li class="rbc-feature-item">
                                <a href="{{ route('credit-cards') }}">
                                    <div class="rbc-feature-icon"><i class="fas fa-credit-card"></i></div>
                                    <span>Explore Global Cards</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rbc-ecosystem-footer">
                        <a href="{{ route('accounts') }}" class="rbc-link-arrow">View all solutions <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 2: Customer Service -->
                <div class="rbc-ecosystem-card">
                    <div class="rbc-ecosystem-header">
                        <h3 class="rbc-ecosystem-title">Client Advisory</h3>
                    </div>
                    <div class="rbc-ecosystem-body">
                        <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 16px;">
                            <strong>Direct Support:</strong> Log in to Client Portal or connect directly with an executive wealth advisor for fast, dedicated assistance.
                        </p>
                        <ul class="rbc-feature-list">
                            <li class="rbc-feature-item">
                                <a href="{{ route('help') }}">
                                    <div class="rbc-feature-icon"><i class="fas fa-circle-question"></i></div>
                                    <span>Help Centre &amp; FAQs</span>
                                </a>
                            </li>
                            <li class="rbc-feature-item">
                                <a href="{{ route('locations') }}">
                                    <div class="rbc-feature-icon"><i class="fas fa-map-location-dot"></i></div>
                                    <span>Find Client Centers &amp; Locations</span>
                                </a>
                            </li>
                            <li class="rbc-feature-item">
                                <a href="{{ route('contact') }}">
                                    <div class="rbc-feature-icon"><i class="fas fa-calendar-check"></i></div>
                                    <span>Book an Appointment</span>
                                </a>
                            </li>
                            <li class="rbc-feature-item">
                                <a href="{{ route('digital-banking') }}">
                                    <div class="rbc-feature-icon"><i class="fas fa-mobile-screen"></i></div>
                                    <span>Benefits of Digital Platform</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rbc-ecosystem-footer">
                        <a href="{{ route('help') }}" class="rbc-link-arrow">Visit Help Centre <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 3: Discover Convenience -->
                <div class="rbc-ecosystem-card">
                    <div class="rbc-ecosystem-header">
                        <h3 class="rbc-ecosystem-title">Digital Experience</h3>
                    </div>
                    <div class="rbc-ecosystem-body">
                        <div class="rbc-app-showcase">
                            <div class="rbc-app-icon-badge">
                                <i class="fas fa-shield-halved"></i>
                            </div>
                            <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">24/7 Digital Platform</h4>
                            <p style="font-size: 0.9rem; color: var(--rbc-text-secondary); line-height: 1.5; margin-bottom: 18px;">
                                Manage assets, wire funds securely worldwide, monitor live transactions, and configure security settings from any device.
                            </p>
                            <div style="display: flex; justify-content: center; gap: 10px; margin-bottom: 10px;">
                                <a href="{{ route('login') }}" class="rbc-btn-primary" style="font-size: 0.82rem; padding: 6px 14px;">Sign In Now</a>
                                <a href="{{ route('register') }}" class="rbc-btn-secondary" style="font-size: 0.82rem; padding: 6px 14px;">Enroll</a>
                            </div>
                        </div>
                    </div>
                    <div class="rbc-ecosystem-footer">
                        <a href="{{ route('digital-banking') }}" class="rbc-link-arrow">Learn more about Digital Platform <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. "HOW CAN WE HELP YOU TODAY?" SECTION -->
    <section class="rbc-section rbc-help-hub">
        <div class="rbc-container">
            <h2 class="rbc-section-title">How can we assist you today?</h2>

            <!-- Quick Action 4-Card Strip -->
            <div class="rbc-quick-tools-bar">
                <a href="{{ route('rates') }}" class="rbc-quick-tool-card">
                    <div class="rbc-quick-tool-icon"><i class="fas fa-percent"></i></div>
                    <span>Market Rates</span>
                </a>
                <a href="{{ route('rates') }}" class="rbc-quick-tool-card">
                    <div class="rbc-quick-tool-icon"><i class="fas fa-arrow-right-arrow-left"></i></div>
                    <span>Foreign Exchange</span>
                </a>
                <a href="{{ route('calculators') }}" class="rbc-quick-tool-card">
                    <div class="rbc-quick-tool-icon"><i class="fas fa-calculator"></i></div>
                    <span>Financing &amp; Wealth Estimator</span>
                </a>
                <a href="{{ route('investments') }}" class="rbc-quick-tool-card">
                    <div class="rbc-quick-tool-icon"><i class="fas fa-chart-pie"></i></div>
                    <span>Portfolio Growth</span>
                </a>
            </div>

            <!-- Category Accordions -->
            <div class="rbc-category-grid">
                <div class="rbc-category-accordion">
                    <button class="rbc-accordion-trigger">
                        <span>Property Acquisition &amp; Financing</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="rbc-accordion-body">
                        Discover step-by-step guidance for real estate acquisitions, get pre-approved in minutes, and lock in competitive fixed or variable property rates.
                        <div style="margin-top: 10px;"><a href="{{ route('mortgages') }}" class="rbc-link-arrow">Explore Property Solutions <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>

                <div class="rbc-category-accordion">
                    <button class="rbc-accordion-trigger">
                        <span>New Accounts &amp; Personal Solutions</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="rbc-accordion-body">
                        Start your journey with flexible operating accounts, high-yield deposit solutions, and dedicated international wire facilities.
                        <div style="margin-top: 10px;"><a href="{{ route('accounts') }}" class="rbc-link-arrow">Explore Operating Accounts <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>

                <div class="rbc-category-accordion">
                    <button class="rbc-accordion-trigger">
                        <span>Student &amp; Youth Solutions</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="rbc-accordion-body">
                        Zero monthly fee student accounts, credit facilities with low prime rates, and smart reward cards built for modern campus life.
                        <div style="margin-top: 10px;"><a href="{{ route('accounts') }}" class="rbc-link-arrow">Student Solutions Hub <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>

                <div class="rbc-category-accordion">
                    <button class="rbc-accordion-trigger">
                        <span>Retirement &amp; Wealth Planning</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="rbc-accordion-body">
                        Maximize your assets with high-yield term deposits, portfolio funds, and diversified holdings guided by experienced wealth managers.
                        <div style="margin-top: 10px;"><a href="{{ route('investments') }}" class="rbc-link-arrow">Wealth Calculators &amp; Plans <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>

                <div class="rbc-category-accordion">
                    <button class="rbc-accordion-trigger">
                        <span>Small Business &amp; Enterprise Solutions</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="rbc-accordion-body">
                        Custom corporate operating accounts, commercial credit lines, treasury automation, and payment gateway integrations for enterprises.
                        <div style="margin-top: 10px;"><a href="{{ route('business') }}" class="rbc-link-arrow">Business Solutions Hub <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>

                <div class="rbc-category-accordion">
                    <button class="rbc-accordion-trigger">
                        <span>Online &amp; Mobile Platform Security</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="rbc-accordion-body">
                        256-bit SSL encryption, multi-factor verification, 24/7 fraud monitoring, and our 100% Security Guarantee to safeguard your capital.
                        <div style="margin-top: 10px;"><a href="{{ route('security') }}" class="rbc-link-arrow">Security Details <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- "Did not find it?" Search Box -->
            <div class="rbc-help-search-box">
                <span class="rbc-help-search-label">Did not find what you are looking for?</span>
                <form class="rbc-help-search-field" action="{{ route('help') }}" method="get">
                    <input type="text" name="q" class="rbc-input" placeholder="Search topics, questions, or financial terms...">
                    <button type="submit" class="rbc-btn-primary" style="padding: 10px 24px;">Find</button>
                </form>
            </div>
        </div>
    </section>

    <!-- 8. "MY MONEY MATTERS" EDITORIAL SECTION -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Financial Insights &amp; Market Guidance</h2>
            <p class="rbc-section-subtitle">Articles, expert analysis, and calculators to help you take control of your financial wellbeing and reach your goals.</p>

            <div class="rbc-article-grid">
                <!-- Article 1 -->
                <a href="{{ route('advice') }}" class="rbc-article-card">
                    <div class="rbc-article-thumb" style="background-image: url('{{ asset('storage/app/public/photos/investments_banner.jpg') }}'); background-size: cover; background-position: center; display: flex; align-items: flex-end; padding: 12px; position: relative;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(0,23,46,0.85) 100%);"></div>
                        <span style="position: relative; z-index: 2; color: #fff; font-size: 0.8rem; font-weight: 700; background: rgba(0,34,68,0.7); padding: 2px 8px; border-radius: 4px;"><i class="fas fa-chart-line"></i> Markets</span>
                    </div>
                    <div class="rbc-article-body">
                        <span class="rbc-article-tag">Real Estate &amp; Rates</span>
                        <h3 class="rbc-article-title">Central Financial Policy Rates Explained and How They Shape Property Financing</h3>
                        <p class="rbc-article-snippet">Understand how policy rate decisions directly impact fixed vs. variable payments, qualification tests, and future refinancing.</p>
                    </div>
                </a>

                <!-- Article 2 -->
                <a href="{{ route('advice') }}" class="rbc-article-card">
                    <div class="rbc-article-thumb" style="background-image: url('{{ asset('storage/app/public/photos/business_banner.jpg') }}'); background-size: cover; background-position: center; display: flex; align-items: flex-end; padding: 12px; position: relative;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(0,23,46,0.85) 100%);"></div>
                        <span style="position: relative; z-index: 2; color: #fff; font-size: 0.8rem; font-weight: 700; background: rgba(0,34,68,0.7); padding: 2px 8px; border-radius: 4px;"><i class="fas fa-store"></i> Enterprise</span>
                    </div>
                    <div class="rbc-article-body">
                        <span class="rbc-article-tag">Corporate &amp; Commerce</span>
                        <h3 class="rbc-article-title">Strategic Capital &amp; Liquidity Management to Help Scale Modern Enterprises</h3>
                        <p class="rbc-article-snippet">From hedging exchange volatility to managing equipment leasing, discover how top managers protect working capital.</p>
                    </div>
                </a>

                <!-- Article 3 -->
                <a href="{{ route('advice') }}" class="rbc-article-card">
                    <div class="rbc-article-thumb" style="background-image: url('{{ asset('storage/app/public/photos/security_banner.jpg') }}'); background-size: cover; background-position: center; display: flex; align-items: flex-end; padding: 12px; position: relative;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(0,23,46,0.85) 100%);"></div>
                        <span style="position: relative; z-index: 2; color: #fff; font-size: 0.8rem; font-weight: 700; background: rgba(0,34,68,0.7); padding: 2px 8px; border-radius: 4px;"><i class="fas fa-shield-halved"></i> Cyber Safety</span>
                    </div>
                    <div class="rbc-article-body">
                        <span class="rbc-article-tag">Security &amp; Protection</span>
                        <h3 class="rbc-article-title">Protecting Your Digital Identity and Financial Assets in the Cloud Era</h3>
                        <p class="rbc-article-snippet">How multi-layered encryption, biometric authentication, and active fraud detection keep your funds inviolable.</p>
                    </div>
                </a>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('advice') }}" class="rbc-btn-secondary">Discover More Articles</a>
            </div>
        </div>
    </section>

    <!-- 9. AWARDS & RECOGNITION -->
    <section class="rbc-awards-section">
        <div class="rbc-container">
            <div class="rbc-awards-grid">
                <div style="font-size: 1.5rem; font-weight: 800; color: var(--rbc-navy); max-width: 200px;">
                    Awards &amp; Recognition
                </div>

                <div class="rbc-award-item">
                    <div class="rbc-award-icon"><i class="fas fa-trophy"></i></div>
                    <div class="rbc-award-text">
                        <h4>Financial Service Excellence 2025</h4>
                        <p>Recognized for Mobile Platform Excellence, Infrastructure Reliability, and Wealth Planning.</p>
                    </div>
                </div>

                <div class="rbc-award-item">
                    <div class="rbc-award-icon"><i class="fas fa-award"></i></div>
                    <div class="rbc-award-text">
                        <h4>Top Digital Financial Platform 2026</h4>
                        <p>Awarded for outstanding cyber protection, rapid international settlements, and customer satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. CLIENT CENTERS LOCATOR BANNER -->
    <section class="rbc-locator-banner">
        <div class="rbc-container">
            <div class="rbc-locator-box">
                <h3 class="rbc-locator-title">Find Client Centers &amp; Global Access Points</h3>
                <p class="rbc-locator-desc">Access thousands of partner access points and institutional facilities globally with 24/7 digital support.</p>
                <form class="rbc-locator-form" action="{{ route('locations') }}" method="get">
                    <input type="text" name="location" class="rbc-input" placeholder="Search by address, city, country, or routing identifier">
                    <button type="submit" class="rbc-btn-primary" style="padding: 10px 26px;">Search</button>
                </form>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
<script>
// Hero Slider Interactive Engine
document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.rbc-slide');
    const dots = document.querySelectorAll('.rbc-dot');
    const prevBtn = document.getElementById('heroPrevBtn');
    const nextBtn = document.getElementById('heroNextBtn');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (dots[i]) dots[i].classList.remove('active');
        });
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        if (dots[currentSlide]) dots[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); resetTimer(); });
    if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); resetTimer(); });

    dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
            showSlide(idx);
            resetTimer();
        });
    });

    function startTimer() {
        slideInterval = setInterval(nextSlide, 6000);
    }

    function resetTimer() {
        clearInterval(slideInterval);
        startTimer();
    }

    const sliderElem = document.getElementById('rbcHeroSlider');
    if (sliderElem) {
        sliderElem.addEventListener('mouseenter', () => clearInterval(slideInterval));
        sliderElem.addEventListener('mouseleave', () => startTimer());
    }

    startTimer();
});
</script>
@endsection
