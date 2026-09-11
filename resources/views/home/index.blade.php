@extends('layouts.base')

@section('title', 'Institutional Capital, Global Cards, Real Estate & Wealth Solutions')

@section('styles')
<style>
/* Modern Interactive Hero Slider Styles */
.fl-hero-slider {
    position: relative;
    overflow: hidden;
    background: #00172e;
    color: #ffffff;
    min-height: 540px;
}

.fl-slide {
    display: none;
    position: relative;
    min-height: 540px;
    background-size: cover;
    background-position: center;
    transition: opacity 0.8s ease-in-out;
}

.fl-slide.active {
    display: flex;
    align-items: center;
    animation: fadeInSlide 0.8s ease-in-out forwards;
}

@keyframes fadeInSlide {
    from { opacity: 0; transform: scale(1.02); }
    to { opacity: 1; transform: scale(1); }
}

.fl-slide-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(0, 23, 46, 0.92) 0%, rgba(0, 34, 68, 0.8) 50%, rgba(0, 34, 68, 0.35) 100%);
    z-index: 1;
}

.fl-slide-container {
    position: relative;
    z-index: 2;
    padding: 60px 0;
}

.fl-slider-btn {
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

.fl-slider-btn:hover {
    background: var(--fl-gold);
    color: var(--fl-navy);
    border-color: var(--fl-gold);
    transform: translateY(-50%) scale(1.1);
}

.fl-slider-btn.prev { left: 24px; }
.fl-slider-btn.next { right: 24px; }

.fl-slider-dots {
    position: absolute;
    bottom: 24px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
    z-index: 10;
}

.fl-dot {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.35);
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.fl-dot.active {
    background: var(--fl-gold);
    width: 38px;
    border-radius: 12px;
}

.fl-glass-card {
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
    <section class="fl-hero-slider" id="flHeroSlider">
        <!-- Slide 1: Global Capital & Financial Growth -->
        <div class="fl-slide active" style="background-image: url('{{ asset('storage/app/public/photos/hero_slide1.jpg') }}');">
            <div class="fl-slide-overlay"></div>
            <div class="fl-container fl-slide-container">
                <div class="fl-hero-grid">
                    <div class="fl-hero-content">
                        <span class="fl-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                            <i class="fas fa-chart-line"></i> INSTITUTIONAL CAPITAL &amp; WEALTH
                        </span>
                        <h1 class="fl-hero-title" style="color: #ffffff;">Powering Global Trade &amp; Next-Generation Wealth Management</h1>
                        <p class="fl-hero-desc" style="color: rgba(255,255,255,0.9);">
                            Experience world-class capital management, seamless commercial transactions, and institutional liquidity solutions with {{ $settings->site_name ?? 'Flutran Global' }}.
                        </p>
                        <div class="fl-hero-actions">
                            <a href="{{ route('register') }}" class="fl-btn-primary" style="padding: 13px 30px; font-size: 1rem;">
                                Open Account Online <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="{{ route('investments') }}" class="fl-btn-secondary" style="border-color: #ffffff; color: #ffffff;">
                                Explore Wealth Portfolios
                            </a>
                        </div>
                        <p class="fl-hero-fineprint" style="color: rgba(255,255,255,0.7);"><i class="fas fa-shield-halved"></i> 256-Bit SSL Encrypted Institutional Financial Infrastructure.</p>
                    </div>

                    <div class="fl-hero-visual">
                        <div class="fl-glass-card">
                            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 12px; margin-bottom: 16px;">
                                <span style="font-weight: 700; color: var(--fl-gold);"><i class="fas fa-vault"></i> {{ $settings->site_name ?? 'Flutran' }} Treasury</span>
                                <span style="font-size: 0.8rem; background: #15803d; color: #fff; padding: 3px 8px; border-radius: 4px;"><i class="fas fa-check-circle"></i> Active</span>
                            </div>
                            <div style="margin-bottom: 14px;">
                                <div style="font-size: 0.85rem; color: rgba(255,255,255,0.7);">Total Portfolio Growth</div>
                                <div style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">+32.5% <span style="font-size: 0.9rem; font-weight: 500; color: #4ade80;">(Annualized)</span></div>
                            </div>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                                <a href="{{ route('send-money') }}" style="background: var(--fl-blue); color: #fff; text-decoration: none; padding: 10px; border-radius: 8px; text-align: center; font-size: 0.82rem; font-weight: 700;">
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
        <div class="fl-slide" style="background-image: url('{{ asset('storage/app/public/photos/hero_slide2.jpg') }}');">
            <div class="fl-slide-overlay"></div>
            <div class="fl-container fl-slide-container">
                <div class="fl-hero-grid">
                    <div class="fl-hero-content">
                        <span class="fl-badge-pill" style="background: rgba(0, 163, 224, 0.2); color: #00a3e0; border-color: rgba(0, 163, 224, 0.4);">
                            <i class="fas fa-mobile-screen"></i> SMART DIGITAL PLATFORM
                        </span>
                        <h1 class="fl-hero-title" style="color: #ffffff;">Fast, Flexible Financial Control on Your Phone &amp; Web</h1>
                        <p class="fl-hero-desc" style="color: rgba(255,255,255,0.9);">
                            Transfer capital with zero friction, manage multi-currency global cards, and enjoy 24/7 liquidity management in the palm of your hand.
                        </p>
                        <div class="fl-hero-actions">
                            <a href="{{ route('credit-cards') }}" class="fl-btn-primary" style="padding: 13px 30px; font-size: 1rem;">
                                Explore Global Cards <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="{{ route('login') }}" class="fl-btn-secondary" style="border-color: #ffffff; color: #ffffff;">
                                Sign In to Portal
                            </a>
                        </div>
                        <p class="fl-hero-fineprint" style="color: rgba(255,255,255,0.7);"><i class="fas fa-bolt"></i> Instant digital issuance &amp; seamless cross-border spending.</p>
                    </div>

                    <div class="fl-hero-visual">
                        <div class="fl-glass-card">
                            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 12px; margin-bottom: 16px;">
                                <span style="font-weight: 700; color: #fff;"><i class="fas fa-credit-card" style="color: var(--fl-gold);"></i> Apex Titanium Card</span>
                                <span style="font-size: 0.8rem; color: #94a3b8;">•••• 9876</span>
                            </div>
                            <div style="background: linear-gradient(135deg, #1e293b, #0f172a); border-radius: 12px; padding: 14px; margin-bottom: 14px; border: 1px solid rgba(255,255,255,0.1);">
                                <div style="font-size: 0.75rem; color: #94a3b8;">Available Liquidity</div>
                                <div style="font-size: 1.6rem; font-weight: 800; color: #ffffff;">$514,520.80</div>
                            </div>
                            <div style="display: flex; gap: 8px;">
                                <a href="{{ route('accounts') }}" style="flex: 1; background: var(--fl-gold); color: var(--fl-navy); text-decoration: none; padding: 8px; border-radius: 8px; text-align: center; font-size: 0.8rem; font-weight: 700;">
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
        <div class="fl-slide" style="background-image: url('{{ asset('storage/app/public/photos/hero_slide3.jpg') }}');">
            <div class="fl-slide-overlay"></div>
            <div class="fl-container fl-slide-container">
                <div class="fl-hero-grid">
                    <div class="fl-hero-content">
                        <span class="fl-badge-pill" style="background: rgba(22, 163, 74, 0.2); color: #4ade80; border-color: rgba(22, 163, 74, 0.4);">
                            <i class="fas fa-hand-holding-dollar"></i> PRIVATE CLIENT &amp; ADVISORY
                        </span>
                        <h1 class="fl-hero-title" style="color: #ffffff;">Personalized Wealth Strategies for What Truly Matters</h1>
                        <p class="fl-hero-desc" style="color: rgba(255,255,255,0.9);">
                            From acquiring prime real estate to compounding strategic assets, our certified portfolio advisors craft customized roadmaps for you.
                        </p>
                        <div class="fl-hero-actions">
                            <a href="{{ route('contact') }}" class="fl-btn-primary" style="padding: 13px 30px; font-size: 1rem;">
                                Book an Advisor <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="{{ route('calculators') }}" class="fl-btn-secondary" style="border-color: #ffffff; color: #ffffff;">
                                Financing &amp; Wealth Estimator
                            </a>
                        </div>
                        <p class="fl-hero-fineprint" style="color: rgba(255,255,255,0.7);"><i class="fas fa-users"></i> Over 70,000 global clients guided worldwide.</p>
                    </div>

                    <div class="fl-hero-visual">
                        <div class="fl-glass-card">
                            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 12px; margin-bottom: 16px;">
                                <span style="font-weight: 700; color: #fff;"><i class="fas fa-house" style="color: var(--fl-gold);"></i> Property Solutions</span>
                                <span style="font-size: 0.8rem; background: var(--fl-gold); color: var(--fl-navy); font-weight: 700; padding: 2px 8px; border-radius: 4px;">Prime Rate</span>
                            </div>
                            <div style="margin-bottom: 14px;">
                                <div style="font-size: 0.85rem; color: rgba(255,255,255,0.7);">Fixed 5-Year Property Rate</div>
                                <div style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">4.49% <span style="font-size: 0.9rem; font-weight: 500; color: #4ade80;">Special APR</span></div>
                            </div>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                                <a href="{{ route('mortgages') }}" style="background: var(--fl-blue); color: #fff; text-decoration: none; padding: 10px; border-radius: 8px; text-align: center; font-size: 0.82rem; font-weight: 700;">
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
        <button class="fl-slider-btn prev" id="heroPrevBtn" aria-label="Previous Slide"><i class="fas fa-chevron-left"></i></button>
        <button class="fl-slider-btn next" id="heroNextBtn" aria-label="Next Slide"><i class="fas fa-chevron-right"></i></button>

        <!-- Slider Dots -->
        <div class="fl-slider-dots" id="heroDots">
            <span class="fl-dot active" data-index="0"></span>
            <span class="fl-dot" data-index="1"></span>
            <span class="fl-dot" data-index="2"></span>
        </div>
    </section>

    <!-- 5. 5-CARD PROMOTIONAL CAROUSEL BAR -->
    <section class="fl-promo-bar">
        <div class="fl-container">
            <div class="fl-promo-grid">
                <a href="{{ route('accounts') }}" class="fl-promo-card">
                    <div class="fl-promo-card-thumb">
                        <img src="{{ asset('storage/app/public/photos/promo_chequing.jpg') }}" alt="Operating Accounts">
                    </div>
                    <div class="fl-promo-card-body">
                        <span class="fl-promo-card-title">Operating Accounts</span>
                    </div>
                </a>

                <a href="{{ route('investments') }}" class="fl-promo-card">
                    <div class="fl-promo-card-thumb">
                        <img src="{{ asset('storage/app/public/photos/promo_wealth.jpg') }}" alt="High-Yield Portfolio">
                    </div>
                    <div class="fl-promo-card-body">
                        <span class="fl-promo-card-title">High-Yield Portfolio</span>
                    </div>
                </a>

                <a href="{{ route('credit-cards') }}" class="fl-promo-card">
                    <div class="fl-promo-card-thumb">
                        <img src="{{ asset('storage/app/public/photos/promo_cards.jpg') }}" alt="Smart Global Cards">
                    </div>
                    <div class="fl-promo-card-body">
                        <span class="fl-promo-card-title">Smart Global Cards</span>
                    </div>
                </a>

                <a href="{{ route('rewards') }}" class="fl-promo-card">
                    <div class="fl-promo-card-thumb">
                        <img src="{{ asset('storage/app/public/photos/promo_rewards.jpg') }}" alt="Rewards & Perks">
                    </div>
                    <div class="fl-promo-card-body">
                        <span class="fl-promo-card-title">Rewards &amp; Perks</span>
                    </div>
                </a>

                <a href="{{ route('investments') }}" class="fl-promo-card">
                    <div class="fl-promo-card-thumb">
                        <img src="{{ asset('storage/app/public/photos/promo_investing.jpg') }}" alt="Strategic Asset Allocation">
                    </div>
                    <div class="fl-promo-card-body">
                        <span class="fl-promo-card-title">Strategic Asset Allocation</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. WELCOME TO PERSONAL & WEALTH SOLUTIONS (3-CARD ECOSYSTEM) -->
    <section class="fl-section" style="background-color: var(--fl-bg);">
        <div class="fl-container">
            <h2 class="fl-section-title">Welcome to {{ $settings->site_name ?? 'Flutran Global' }} Financial Platform</h2>
            <p class="fl-section-subtitle">Explore institutional-grade financial solutions, global cards, property financing, and private wealth management designed to accelerate your capital.</p>

            <div class="fl-ecosystem-grid">
                <!-- Card 1: Products & Services -->
                <div class="fl-ecosystem-card">
                    <div class="fl-ecosystem-header">
                        <h3 class="fl-ecosystem-title">Products and Solutions</h3>
                    </div>
                    <div class="fl-ecosystem-body">
                        <ul class="fl-feature-list">
                            <li class="fl-feature-item">
                                <a href="{{ route('mortgages') }}">
                                    <div class="fl-feature-icon"><i class="fas fa-house"></i></div>
                                    <span>Explore Property Solutions</span>
                                </a>
                            </li>
                            <li class="fl-feature-item">
                                <a href="{{ route('accounts') }}">
                                    <div class="fl-feature-icon"><i class="fas fa-wallet"></i></div>
                                    <span>Open an Operating Account</span>
                                </a>
                            </li>
                            <li class="fl-feature-item">
                                <a href="{{ route('investments') }}">
                                    <div class="fl-feature-icon"><i class="fas fa-chart-pie"></i></div>
                                    <span>Personal Wealth &amp; Portfolios</span>
                                </a>
                            </li>
                            <li class="fl-feature-item">
                                <a href="{{ route('loans') }}">
                                    <div class="fl-feature-icon"><i class="fas fa-coins"></i></div>
                                    <span>Credit Facilities &amp; Financing</span>
                                </a>
                            </li>
                            <li class="fl-feature-item">
                                <a href="{{ route('credit-cards') }}">
                                    <div class="fl-feature-icon"><i class="fas fa-credit-card"></i></div>
                                    <span>Explore Global Cards</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="fl-ecosystem-footer">
                        <a href="{{ route('accounts') }}" class="fl-link-arrow">View all solutions <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 2: Customer Service -->
                <div class="fl-ecosystem-card">
                    <div class="fl-ecosystem-header">
                        <h3 class="fl-ecosystem-title">Client Advisory</h3>
                    </div>
                    <div class="fl-ecosystem-body">
                        <p style="font-size: 0.88rem; color: var(--fl-text-secondary); margin-bottom: 16px;">
                            <strong>Direct Support:</strong> Log in to Client Portal or connect directly with an executive wealth advisor for fast, dedicated assistance.
                        </p>
                        <ul class="fl-feature-list">
                            <li class="fl-feature-item">
                                <a href="{{ route('help') }}">
                                    <div class="fl-feature-icon"><i class="fas fa-circle-question"></i></div>
                                    <span>Help Centre &amp; FAQs</span>
                                </a>
                            </li>
                            <li class="fl-feature-item">
                                <a href="{{ route('locations') }}">
                                    <div class="fl-feature-icon"><i class="fas fa-map-location-dot"></i></div>
                                    <span>Find Client Centers &amp; Locations</span>
                                </a>
                            </li>
                            <li class="fl-feature-item">
                                <a href="{{ route('contact') }}">
                                    <div class="fl-feature-icon"><i class="fas fa-calendar-check"></i></div>
                                    <span>Book an Appointment</span>
                                </a>
                            </li>
                            <li class="fl-feature-item">
                                <a href="{{ route('digital-banking') }}">
                                    <div class="fl-feature-icon"><i class="fas fa-mobile-screen"></i></div>
                                    <span>Benefits of Digital Platform</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="fl-ecosystem-footer">
                        <a href="{{ route('help') }}" class="fl-link-arrow">Visit Help Centre <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 3: Discover Convenience -->
                <div class="fl-ecosystem-card">
                    <div class="fl-ecosystem-header">
                        <h3 class="fl-ecosystem-title">Digital Experience</h3>
                    </div>
                    <div class="fl-ecosystem-body">
                        <div class="fl-app-showcase">
                            <div class="fl-app-icon-badge">
                                <i class="fas fa-shield-halved"></i>
                            </div>
                            <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--fl-navy); margin-bottom: 8px;">24/7 Digital Platform</h4>
                            <p style="font-size: 0.9rem; color: var(--fl-text-secondary); line-height: 1.5; margin-bottom: 18px;">
                                Manage assets, wire funds securely worldwide, monitor live transactions, and configure security settings from any device.
                            </p>
                            <div style="display: flex; justify-content: center; gap: 10px; margin-bottom: 10px;">
                                <a href="{{ route('login') }}" class="fl-btn-primary" style="font-size: 0.82rem; padding: 6px 14px;">Sign In Now</a>
                                <a href="{{ route('register') }}" class="fl-btn-secondary" style="font-size: 0.82rem; padding: 6px 14px;">Enroll</a>
                            </div>
                        </div>
                    </div>
                    <div class="fl-ecosystem-footer">
                        <a href="{{ route('digital-banking') }}" class="fl-link-arrow">Learn more about Digital Platform <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. "HOW CAN WE HELP YOU TODAY?" SECTION -->
    <section class="fl-section fl-help-hub">
        <div class="fl-container">
            <h2 class="fl-section-title">How can we assist you today?</h2>

            <!-- Quick Action 4-Card Strip -->
            <div class="fl-quick-tools-bar">
                <a href="{{ route('rates') }}" class="fl-quick-tool-card">
                    <div class="fl-quick-tool-icon"><i class="fas fa-percent"></i></div>
                    <span>Market Rates</span>
                </a>
                <a href="{{ route('rates') }}" class="fl-quick-tool-card">
                    <div class="fl-quick-tool-icon"><i class="fas fa-arrow-right-arrow-left"></i></div>
                    <span>Foreign Exchange</span>
                </a>
                <a href="{{ route('calculators') }}" class="fl-quick-tool-card">
                    <div class="fl-quick-tool-icon"><i class="fas fa-calculator"></i></div>
                    <span>Financing &amp; Wealth Estimator</span>
                </a>
                <a href="{{ route('investments') }}" class="fl-quick-tool-card">
                    <div class="fl-quick-tool-icon"><i class="fas fa-chart-pie"></i></div>
                    <span>Portfolio Growth</span>
                </a>
            </div>

            <!-- Category Accordions -->
            <div class="fl-category-grid">
                <div class="fl-category-accordion">
                    <button class="fl-accordion-trigger">
                        <span>Property Acquisition &amp; Financing</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="fl-accordion-body">
                        Discover step-by-step guidance for real estate acquisitions, get pre-approved in minutes, and lock in competitive fixed or variable property rates.
                        <div style="margin-top: 10px;"><a href="{{ route('mortgages') }}" class="fl-link-arrow">Explore Property Solutions <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>

                <div class="fl-category-accordion">
                    <button class="fl-accordion-trigger">
                        <span>New Accounts &amp; Personal Solutions</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="fl-accordion-body">
                        Start your journey with flexible operating accounts, high-yield deposit solutions, and dedicated international wire facilities.
                        <div style="margin-top: 10px;"><a href="{{ route('accounts') }}" class="fl-link-arrow">Explore Operating Accounts <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>

                <div class="fl-category-accordion">
                    <button class="fl-accordion-trigger">
                        <span>Student &amp; Youth Solutions</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="fl-accordion-body">
                        Zero monthly fee student accounts, credit facilities with low prime rates, and smart reward cards built for modern campus life.
                        <div style="margin-top: 10px;"><a href="{{ route('accounts') }}" class="fl-link-arrow">Student Solutions Hub <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>

                <div class="fl-category-accordion">
                    <button class="fl-accordion-trigger">
                        <span>Retirement &amp; Wealth Planning</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="fl-accordion-body">
                        Maximize your assets with high-yield term deposits, portfolio funds, and diversified holdings guided by experienced wealth managers.
                        <div style="margin-top: 10px;"><a href="{{ route('investments') }}" class="fl-link-arrow">Wealth Calculators &amp; Plans <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>

                <div class="fl-category-accordion">
                    <button class="fl-accordion-trigger">
                        <span>Small Business &amp; Enterprise Solutions</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="fl-accordion-body">
                        Custom corporate operating accounts, commercial credit lines, treasury automation, and payment gateway integrations for enterprises.
                        <div style="margin-top: 10px;"><a href="{{ route('business') }}" class="fl-link-arrow">Business Solutions Hub <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>

                <div class="fl-category-accordion">
                    <button class="fl-accordion-trigger">
                        <span>Online &amp; Mobile Platform Security</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="fl-accordion-body">
                        256-bit SSL encryption, multi-factor verification, 24/7 fraud monitoring, and our 100% Security Guarantee to safeguard your capital.
                        <div style="margin-top: 10px;"><a href="{{ route('security') }}" class="fl-link-arrow">Security Details <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- "Did not find it?" Search Box -->
            <div class="fl-help-search-box">
                <span class="fl-help-search-label">Did not find what you are looking for?</span>
                <form class="fl-help-search-field" action="{{ route('help') }}" method="get">
                    <input type="text" name="q" class="fl-input" placeholder="Search topics, questions, or financial terms...">
                    <button type="submit" class="fl-btn-primary" style="padding: 10px 24px;">Find</button>
                </form>
            </div>
        </div>
    </section>

    <!-- 8. "MY MONEY MATTERS" EDITORIAL SECTION -->
    <section class="fl-section" style="background-color: var(--fl-bg);">
        <div class="fl-container">
            <h2 class="fl-section-title">Financial Insights &amp; Market Guidance</h2>
            <p class="fl-section-subtitle">Articles, expert analysis, and calculators to help you take control of your financial wellbeing and reach your goals.</p>

            <div class="fl-article-grid">
                <!-- Article 1 -->
                <a href="{{ route('advice') }}" class="fl-article-card">
                    <div class="fl-article-thumb" style="background-image: url('{{ asset('storage/app/public/photos/investments_banner.jpg') }}'); background-size: cover; background-position: center; display: flex; align-items: flex-end; padding: 12px; position: relative;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(0,23,46,0.85) 100%);"></div>
                        <span style="position: relative; z-index: 2; color: #fff; font-size: 0.8rem; font-weight: 700; background: rgba(0,34,68,0.7); padding: 2px 8px; border-radius: 4px;"><i class="fas fa-chart-line"></i> Markets</span>
                    </div>
                    <div class="fl-article-body">
                        <span class="fl-article-tag">Real Estate &amp; Rates</span>
                        <h3 class="fl-article-title">Central Financial Policy Rates Explained and How They Shape Property Financing</h3>
                        <p class="fl-article-snippet">Understand how policy rate decisions directly impact fixed vs. variable payments, qualification tests, and future refinancing.</p>
                    </div>
                </a>

                <!-- Article 2 -->
                <a href="{{ route('advice') }}" class="fl-article-card">
                    <div class="fl-article-thumb" style="background-image: url('{{ asset('storage/app/public/photos/business_banner.jpg') }}'); background-size: cover; background-position: center; display: flex; align-items: flex-end; padding: 12px; position: relative;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(0,23,46,0.85) 100%);"></div>
                        <span style="position: relative; z-index: 2; color: #fff; font-size: 0.8rem; font-weight: 700; background: rgba(0,34,68,0.7); padding: 2px 8px; border-radius: 4px;"><i class="fas fa-store"></i> Enterprise</span>
                    </div>
                    <div class="fl-article-body">
                        <span class="fl-article-tag">Corporate &amp; Commerce</span>
                        <h3 class="fl-article-title">Strategic Capital &amp; Liquidity Management to Help Scale Modern Enterprises</h3>
                        <p class="fl-article-snippet">From hedging exchange volatility to managing equipment leasing, discover how top managers protect working capital.</p>
                    </div>
                </a>

                <!-- Article 3 -->
                <a href="{{ route('advice') }}" class="fl-article-card">
                    <div class="fl-article-thumb" style="background-image: url('{{ asset('storage/app/public/photos/security_banner.jpg') }}'); background-size: cover; background-position: center; display: flex; align-items: flex-end; padding: 12px; position: relative;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(0,23,46,0.85) 100%);"></div>
                        <span style="position: relative; z-index: 2; color: #fff; font-size: 0.8rem; font-weight: 700; background: rgba(0,34,68,0.7); padding: 2px 8px; border-radius: 4px;"><i class="fas fa-shield-halved"></i> Cyber Safety</span>
                    </div>
                    <div class="fl-article-body">
                        <span class="fl-article-tag">Security &amp; Protection</span>
                        <h3 class="fl-article-title">Protecting Your Digital Identity and Financial Assets in the Cloud Era</h3>
                        <p class="fl-article-snippet">How multi-layered encryption, biometric authentication, and active fraud detection keep your funds inviolable.</p>
                    </div>
                </a>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('advice') }}" class="fl-btn-secondary">Discover More Articles</a>
            </div>
        </div>
    </section>

    <!-- 9. AWARDS & RECOGNITION -->
    <section class="fl-awards-section">
        <div class="fl-container">
            <div class="fl-awards-grid">
                <div style="font-size: 1.5rem; font-weight: 800; color: var(--fl-navy); max-width: 200px;">
                    Awards &amp; Recognition
                </div>

                <div class="fl-award-item">
                    <div class="fl-award-icon"><i class="fas fa-trophy"></i></div>
                    <div class="fl-award-text">
                        <h4>Financial Service Excellence 2025</h4>
                        <p>Recognized for Mobile Platform Excellence, Infrastructure Reliability, and Wealth Planning.</p>
                    </div>
                </div>

                <div class="fl-award-item">
                    <div class="fl-award-icon"><i class="fas fa-award"></i></div>
                    <div class="fl-award-text">
                        <h4>Top Digital Financial Platform 2026</h4>
                        <p>Awarded for outstanding cyber protection, rapid international settlements, and customer satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. CLIENT CENTERS LOCATOR BANNER -->
    <section class="fl-locator-banner">
        <div class="fl-container">
            <div class="fl-locator-box">
                <h3 class="fl-locator-title">Find Client Centers &amp; Global Access Points</h3>
                <p class="fl-locator-desc">Access thousands of partner access points and institutional facilities globally with 24/7 digital support.</p>
                <form class="fl-locator-form" action="{{ route('locations') }}" method="get">
                    <input type="text" name="location" class="fl-input" placeholder="Search by address, city, country, or routing identifier">
                    <button type="submit" class="fl-btn-primary" style="padding: 10px 26px;">Search</button>
                </form>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
<script>
// Hero Slider Interactive Engine
document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.fl-slide');
    const dots = document.querySelectorAll('.fl-dot');
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

    const sliderElem = document.getElementById('flHeroSlider');
    if (sliderElem) {
        sliderElem.addEventListener('mouseenter', () => clearInterval(slideInterval));
        sliderElem.addEventListener('mouseleave', () => startTimer());
    }

    startTimer();
});
</script>
@endsection
