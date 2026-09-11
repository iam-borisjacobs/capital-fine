<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noimageindex, notranslate">
    <meta name="googlebot" content="noindex, nofollow, noarchive, nosnippet, noimageindex, notranslate">
    <meta name="bingbot" content="noindex, nofollow, noarchive, nosnippet, noimageindex, notranslate">
    <meta name="slurp" content="noindex, nofollow">
    <meta name="duckduckbot" content="noindex, nofollow">
    <meta name="baiduspider" content="noindex, nofollow">
    <meta name="yandex" content="noindex, nofollow">
    <meta name="description" content="{{ $settings->site_name ?? 'Flutran Global' }} - Personal & Commercial Solutions, Property Financing, Global Cards, Strategic Investments and Capital Facilities.">
    <title>@yield('title', 'Welcome') | {{ $settings->site_name ?? 'Flutran Global' }}</title>

    @if(!empty($settings->favicon))
        <link rel="icon" href="{{ asset('storage/app/public/'.$settings->favicon) }}" type="image/png">
    @endif

    <!-- CSS Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('temp/custom/assets/css/portal-style.css') }}">
    
    @yield('styles')
</head>
<body>

    <!-- 1. TOP SEGMENT BAR -->
    <div class="fl-topbar">
        <div class="fl-container">
            <div class="fl-topbar-inner">
                <ul class="fl-segment-links">
                    <li><a href="{{ route('home') }}" class="fl-segment-link {{ request()->routeIs('home') ? 'active' : '' }}">Personal</a></li>
                    <li><a href="{{ route('business') }}" class="fl-segment-link {{ request()->routeIs('business') ? 'active' : '' }}">Business</a></li>
                    <li><a href="{{ route('commercial') }}" class="fl-segment-link {{ request()->routeIs('commercial') ? 'active' : '' }}">Commercial</a></li>
                    <li><a href="{{ route('investments') }}" class="fl-segment-link {{ request()->routeIs('investments') ? 'active' : '' }}">Wealth</a></li>
                    <li><a href="{{ route('about') }}" class="fl-segment-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                </ul>
                <div class="fl-topbar-right">
                    <a href="{{ route('rates') }}"><i class="fas fa-chart-line"></i> Rates &amp; FX</a>
                    <a href="{{ route('locations') }}"><i class="fas fa-location-dot"></i> Global Access Points</a>
                    <a href="{{ route('contact') }}"><i class="fas fa-headset"></i> Contact Us</a>
                    <a href="{{ route('login') }}" style="color: var(--fl-gold); font-weight: 700;"><i class="fas fa-lock"></i> Sign In</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. MAIN BRAND HEADER -->
    <header class="fl-main-nav">
        <div class="fl-container">
            <div class="fl-main-nav-inner">
                <a href="{{ route('home') }}" class="fl-brand">
                    @if(!empty($settings->logo))
                        <img src="{{ asset('storage/app/public/'.$settings->logo) }}" alt="{{ $settings->site_name ?? 'Flutran Global' }}" class="fl-logo-img" onerror="this.style.display='none'; document.getElementById('flBrandFallback').style.display='flex';">
                        <div id="flBrandFallback" style="display: none; align-items: center; gap: 10px;">
                            <div class="fl-brand-crest">
                                <i class="fas fa-shield-halved"></i>
                            </div>
                            <div class="fl-brand-text">
                                <span class="fl-brand-title">{{ $settings->site_name ?? 'Flutran Global' }}</span>
                                <span class="fl-brand-tag">Client Financial Portal</span>
                            </div>
                        </div>
                    @else
                        <div class="fl-brand-crest">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <div class="fl-brand-text">
                            <span class="fl-brand-title">{{ $settings->site_name ?? 'Flutran Global' }}</span>
                            <span class="fl-brand-tag">Client Financial Portal</span>
                        </div>
                    @endif
                </a>

                <div class="fl-header-actions">
                    <form class="fl-search-form" action="{{ route('help') }}" method="get">
                        <input type="text" name="q" class="fl-search-input" placeholder="Search {{ $settings->site_name ?? 'Platform' }}...">
                        <button type="submit" class="fl-search-btn" aria-label="Search">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>

                    <a href="{{ route('contact') }}" class="fl-header-contact">
                        <i class="fas fa-phone"></i>
                        <span>{{ $settings->contact_email ?? '+1 (800) 555-0199' }}</span>
                    </a>

                    <a href="{{ route('login') }}" class="fl-btn-signin">
                        <i class="fas fa-lock"></i>
                        <span>Sign In</span>
                    </a>

                    <button class="fl-mobile-toggle" id="flMobileToggle" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. PRODUCT SUB-NAVIGATION -->
    <nav class="fl-subnav">
        <div class="fl-container">
            <ul class="fl-subnav-list" id="flSubnavList">
                <li class="fl-subnav-item {{ request()->routeIs('accounts') ? 'active' : '' }}">
                    <a href="{{ route('accounts') }}" class="fl-subnav-link">
                        Accounts <i class="fas fa-chevron-down" style="font-size: 0.7rem;"></i>
                    </a>
                    <div class="fl-dropdown">
                        <a href="{{ route('accounts') }}" class="fl-dropdown-item">Operating Accounts <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('accounts') }}" class="fl-dropdown-item">High-Yield Savings <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('accounts') }}" class="fl-dropdown-item">Student &amp; Youth Solutions <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('accounts') }}" class="fl-dropdown-item">Senior &amp; Executive Accounts <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('accounts') }}" class="fl-dropdown-item">Compare All Accounts <i class="fas fa-arrow-right"></i></a>
                    </div>
                </li>
                <li class="fl-subnav-item {{ request()->routeIs('credit-cards') || request()->routeIs('cards') ? 'active' : '' }}">
                    <a href="{{ route('credit-cards') }}" class="fl-subnav-link">
                        Global Cards <i class="fas fa-chevron-down" style="font-size: 0.7rem;"></i>
                    </a>
                    <div class="fl-dropdown">
                        <a href="{{ route('credit-cards') }}" class="fl-dropdown-item">Smart Rewards Cards <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('credit-cards') }}" class="fl-dropdown-item">Global Travel Passes <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('credit-cards') }}" class="fl-dropdown-item">No Annual Fee Solutions <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('credit-cards') }}" class="fl-dropdown-item">Low Rate Facilities <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('credit-cards') }}" class="fl-dropdown-item">Card Selector Tool <i class="fas fa-arrow-right"></i></a>
                    </div>
                </li>
                <li class="fl-subnav-item {{ request()->routeIs('mortgages') ? 'active' : '' }}">
                    <a href="{{ route('mortgages') }}" class="fl-subnav-link">
                        Property Solutions <i class="fas fa-chevron-down" style="font-size: 0.7rem;"></i>
                    </a>
                    <div class="fl-dropdown">
                        <a href="{{ route('mortgages') }}" class="fl-dropdown-item">Fixed Rate Property Financing <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('mortgages') }}" class="fl-dropdown-item">Variable Rate Solutions <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('mortgages') }}" class="fl-dropdown-item">First-Time Property Buyers <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('calculators') }}" class="fl-dropdown-item">Financing Estimator <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('mortgages') }}" class="fl-dropdown-item">Renew or Restructure <i class="fas fa-arrow-right"></i></a>
                    </div>
                </li>
                <li class="fl-subnav-item {{ request()->routeIs('loans') ? 'active' : '' }}">
                    <a href="{{ route('loans') }}" class="fl-subnav-link">
                        Credit &amp; Financing <i class="fas fa-chevron-down" style="font-size: 0.7rem;"></i>
                    </a>
                    <div class="fl-dropdown">
                        <a href="{{ route('loans') }}" class="fl-dropdown-item">Personal Credit Facilities <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('loans') }}" class="fl-dropdown-item">Strategic Lines of Credit <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('loans') }}" class="fl-dropdown-item">Asset Financing <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('loans') }}" class="fl-dropdown-item">Property Equity Solutions <i class="fas fa-arrow-right"></i></a>
                    </div>
                </li>
                <li class="fl-subnav-item {{ request()->routeIs('investments') ? 'active' : '' }}">
                    <a href="{{ route('investments') }}" class="fl-subnav-link">
                        Investments <i class="fas fa-chevron-down" style="font-size: 0.7rem;"></i>
                    </a>
                    <div class="fl-dropdown">
                        <a href="{{ route('investments') }}" class="fl-dropdown-item">Guaranteed Term Deposits <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('investments') }}" class="fl-dropdown-item">Portfolio Funds <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('investments') }}" class="fl-dropdown-item">Tax-Advantaged Accounts <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('investments') }}" class="fl-dropdown-item">Direct Investing <i class="fas fa-arrow-right"></i></a>
                    </div>
                </li>
                <li class="fl-subnav-item {{ request()->routeIs('rewards') ? 'active' : '' }}">
                    <a href="{{ route('rewards') }}" class="fl-subnav-link">Rewards</a>
                </li>
                <li class="fl-subnav-item {{ request()->routeIs('advice') ? 'active' : '' }}">
                    <a href="{{ route('advice') }}" class="fl-subnav-link">Advice</a>
                </li>
                <li class="fl-subnav-item {{ request()->routeIs('calculators') ? 'active' : '' }}">
                    <a href="{{ route('calculators') }}" class="fl-subnav-link">Calculators</a>
                </li>
                <li class="fl-subnav-item {{ request()->routeIs('digital-banking') ? 'active' : '' }}">
                    <a href="{{ route('digital-banking') }}" class="fl-subnav-link">Digital Platform</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    @yield('content')

    <!-- 10. COMPREHENSIVE FOOTER -->
    <footer class="fl-footer">
        <div class="fl-container">
            <div class="fl-footer-grid">
                <!-- Column 1: About Us -->
                <div class="fl-footer-col">
                    <h4>About {{ $settings->site_name ?? 'Flutran Global' }}</h4>
                    <ul class="fl-footer-links">
                        <li><a href="{{ route('about') }}"><i class="fas fa-angle-right"></i> About Us</a></li>
                        <li><a href="{{ route('careers') }}"><i class="fas fa-angle-right"></i> Careers &amp; Culture</a></li>
                        <li><a href="{{ route('newsroom') }}"><i class="fas fa-angle-right"></i> Newsroom &amp; Media</a></li>
                        <li><a href="{{ route('investors') }}"><i class="fas fa-angle-right"></i> Investor Relations</a></li>
                        <li><a href="{{ route('services') }}"><i class="fas fa-angle-right"></i> Financial Services Directory</a></li>
                    </ul>
                </div>

                <!-- Column 2: Customer Service -->
                <div class="fl-footer-col">
                    <h4>Customer Service</h4>
                    <ul class="fl-footer-links">
                        <li><a href="{{ route('accounts') }}"><i class="fas fa-angle-right"></i> Apply Online</a></li>
                        <li><a href="{{ route('locations') }}"><i class="fas fa-angle-right"></i> Client Centers &amp; Locations</a></li>
                        <li><a href="{{ route('help') }}"><i class="fas fa-angle-right"></i> Help Centre &amp; FAQs</a></li>
                        <li><a href="{{ route('contact') }}"><i class="fas fa-angle-right"></i> Book an Appointment</a></li>
                        <li><a href="{{ route('contact') }}"><i class="fas fa-phone"></i> {{ $settings->contact_email ?? 'Support' }}</a></li>
                    </ul>
                </div>

                <!-- Column 3: Daily Numbers -->
                <div class="fl-footer-col">
                    <h4>Daily Numbers</h4>
                    <ul class="fl-footer-links">
                        <li><a href="{{ route('rates') }}"><i class="fas fa-angle-right"></i> Foreign Exchange Rates</a></li>
                        <li><a href="{{ route('rates') }}"><i class="fas fa-angle-right"></i> Prime Lending Rate</a></li>
                        <li><a href="{{ route('mortgages') }}"><i class="fas fa-angle-right"></i> Property Financing Rates</a></li>
                        <li><a href="{{ route('investments') }}"><i class="fas fa-angle-right"></i> Guaranteed Wealth Rates</a></li>
                        <li><a href="{{ route('calculators') }}"><i class="fas fa-angle-right"></i> Financial Calculators</a></li>
                    </ul>
                </div>

                <!-- Column 4: Protecting Your Money -->
                <div class="fl-footer-col">
                    <h4>Protecting Your Capital</h4>
                    <ul class="fl-footer-links">
                        <li><a href="{{ route('security') }}"><i class="fas fa-shield-halved"></i> 100% Security Guarantee</a></li>
                        <li><a href="{{ route('security') }}"><i class="fas fa-angle-right"></i> Cybersecurity Standards</a></li>
                        <li><a href="{{ route('alerts') }}"><i class="fas fa-angle-right"></i> Fraud &amp; Alert Settings</a></li>
                    </ul>
                    <div class="fl-security-badge">
                        <div class="fl-security-badge-icon"><i class="fas fa-building-shield"></i></div>
                        <div class="fl-security-badge-text">
                            {{ $settings->site_name ?? 'Flutran Global' }} operates institutional financial infrastructure with enterprise custody standards.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fl-footer-bottom">
            <div class="fl-container">
                <div class="fl-footer-bottom-inner">
                    <div>
                        {{ $settings->site_name ?? 'Flutran Global' }} Platform, &copy; 1995-{{ date('Y') }}. All rights reserved.
                    </div>
                    <ul class="fl-legal-links">
                        <li><a href="{{ route('privacy') }}">Privacy &amp; Security</a></li>
                        <li><a href="{{ route('terms') }}">Legal Terms</a></li>
                        <li><a href="{{ route('accessibility') }}">Accessibility</a></li>
                    </ul>
                    <div class="fl-social-icons">
                        <a href="#" class="fl-social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="fl-social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="fl-social-btn" aria-label="X"><i class="fab fa-x-twitter"></i></a>
                        <a href="#" class="fl-social-btn" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="fl-social-btn" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript Engine -->
    <script src="{{ asset('temp/custom/assets/js/portal-main.js') }}"></script>
    @yield('scripts')
</body>
</html>
