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
    <meta name="description" content="{{ $settings->site_name ?? 'Flutran Global' }} - Personal & Commercial Banking, Mortgages, Credit Cards, Investments and Loans.">
    <title>@yield('title', 'Welcome') | {{ $settings->site_name ?? 'Flutran Global Bank' }}</title>

    @if(!empty($settings->favicon))
        <link rel="icon" href="{{ asset('storage/app/public/'.$settings->favicon) }}" type="image/png">
    @endif

    <!-- CSS Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('temp/custom/assets/css/rbc-style.css') }}">
    
    @yield('styles')
</head>
<body>

    <!-- 1. TOP SEGMENT BAR -->
    <div class="rbc-topbar">
        <div class="rbc-container">
            <div class="rbc-topbar-inner">
                <ul class="rbc-segment-links">
                    <li><a href="{{ route('home') }}" class="rbc-segment-link {{ request()->routeIs('home') ? 'active' : '' }}">Personal</a></li>
                    <li><a href="{{ route('business') }}" class="rbc-segment-link {{ request()->routeIs('business') ? 'active' : '' }}">Business</a></li>
                    <li><a href="{{ route('commercial') }}" class="rbc-segment-link {{ request()->routeIs('commercial') ? 'active' : '' }}">Commercial</a></li>
                    <li><a href="{{ route('investments') }}" class="rbc-segment-link {{ request()->routeIs('investments') ? 'active' : '' }}">Wealth</a></li>
                    <li><a href="{{ route('about') }}" class="rbc-segment-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                </ul>
                <div class="rbc-topbar-right">
                    <a href="{{ route('rates') }}"><i class="fas fa-chart-line"></i> Rates &amp; FX</a>
                    <a href="{{ route('locations') }}"><i class="fas fa-location-dot"></i> Find Branch / ATM</a>
                    <a href="{{ route('contact') }}"><i class="fas fa-headset"></i> Contact Us</a>
                    <a href="{{ route('login') }}" style="color: var(--rbc-gold); font-weight: 700;"><i class="fas fa-lock"></i> Sign In</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. MAIN BRAND HEADER -->
    <header class="rbc-main-nav">
        <div class="rbc-container">
            <div class="rbc-main-nav-inner">
                <a href="{{ route('home') }}" class="rbc-brand">
                    @if(!empty($settings->logo))
                        <img src="{{ asset('storage/app/public/'.$settings->logo) }}" alt="{{ $settings->site_name ?? 'Flutran Global Bank' }}" class="rbc-logo-img">
                    @else
                        <div class="rbc-brand-crest">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <div class="rbc-brand-text">
                            <span class="rbc-brand-title">{{ $settings->site_name ?? 'Flutran Global Bank' }}</span>
                            <span class="rbc-brand-tag">Online Banking</span>
                        </div>
                    @endif
                </a>

                <div class="rbc-header-actions">
                    <form class="rbc-search-form" action="{{ route('help') }}" method="get">
                        <input type="text" name="q" class="rbc-search-input" placeholder="Search {{ $settings->site_name ?? 'Bank' }}...">
                        <button type="submit" class="rbc-search-btn" aria-label="Search">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>

                    <a href="{{ route('contact') }}" class="rbc-header-contact">
                        <i class="fas fa-phone"></i>
                        <span>{{ $settings->contact_email ?? '1-800-769-2511' }}</span>
                    </a>

                    <a href="{{ route('login') }}" class="rbc-btn-signin">
                        <i class="fas fa-lock"></i>
                        <span>Sign In</span>
                    </a>

                    <button class="rbc-mobile-toggle" id="rbcMobileToggle" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. PRODUCT SUB-NAVIGATION -->
    <nav class="rbc-subnav">
        <div class="rbc-container">
            <ul class="rbc-subnav-list" id="rbcSubnavList">
                <li class="rbc-subnav-item {{ request()->routeIs('accounts') ? 'active' : '' }}">
                    <a href="{{ route('accounts') }}" class="rbc-subnav-link">
                        Accounts <i class="fas fa-chevron-down" style="font-size: 0.7rem;"></i>
                    </a>
                    <div class="rbc-dropdown">
                        <a href="{{ route('accounts') }}" class="rbc-dropdown-item">Chequing Accounts <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('accounts') }}" class="rbc-dropdown-item">Savings Accounts <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('accounts') }}" class="rbc-dropdown-item">Student &amp; Youth Banking <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('accounts') }}" class="rbc-dropdown-item">Senior Banking <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('accounts') }}" class="rbc-dropdown-item">Compare All Accounts <i class="fas fa-arrow-right"></i></a>
                    </div>
                </li>
                <li class="rbc-subnav-item {{ request()->routeIs('credit-cards') ? 'active' : '' }}">
                    <a href="{{ route('credit-cards') }}" class="rbc-subnav-link">
                        Credit Cards <i class="fas fa-chevron-down" style="font-size: 0.7rem;"></i>
                    </a>
                    <div class="rbc-dropdown">
                        <a href="{{ route('credit-cards') }}" class="rbc-dropdown-item">Cash Back Cards <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('credit-cards') }}" class="rbc-dropdown-item">Travel Points <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('credit-cards') }}" class="rbc-dropdown-item">No Annual Fee Cards <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('credit-cards') }}" class="rbc-dropdown-item">Low Interest Cards <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('credit-cards') }}" class="rbc-dropdown-item">Card Selector Tool <i class="fas fa-arrow-right"></i></a>
                    </div>
                </li>
                <li class="rbc-subnav-item {{ request()->routeIs('mortgages') ? 'active' : '' }}">
                    <a href="{{ route('mortgages') }}" class="rbc-subnav-link">
                        Mortgages <i class="fas fa-chevron-down" style="font-size: 0.7rem;"></i>
                    </a>
                    <div class="rbc-dropdown">
                        <a href="{{ route('mortgages') }}" class="rbc-dropdown-item">Fixed Rate Mortgages <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('mortgages') }}" class="rbc-dropdown-item">Variable Rate Mortgages <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('mortgages') }}" class="rbc-dropdown-item">First-Time Home Buyers <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('calculators') }}" class="rbc-dropdown-item">Mortgage Calculator <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('mortgages') }}" class="rbc-dropdown-item">Renew or Refinance <i class="fas fa-arrow-right"></i></a>
                    </div>
                </li>
                <li class="rbc-subnav-item {{ request()->routeIs('loans') ? 'active' : '' }}">
                    <a href="{{ route('loans') }}" class="rbc-subnav-link">
                        Loans <i class="fas fa-chevron-down" style="font-size: 0.7rem;"></i>
                    </a>
                    <div class="rbc-dropdown">
                        <a href="{{ route('loans') }}" class="rbc-dropdown-item">Personal Loans <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('loans') }}" class="rbc-dropdown-item">Lines of Credit <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('loans') }}" class="rbc-dropdown-item">Auto Financing <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('loans') }}" class="rbc-dropdown-item">Home Equity (HELOC) <i class="fas fa-arrow-right"></i></a>
                    </div>
                </li>
                <li class="rbc-subnav-item {{ request()->routeIs('investments') ? 'active' : '' }}">
                    <a href="{{ route('investments') }}" class="rbc-subnav-link">
                        Investments <i class="fas fa-chevron-down" style="font-size: 0.7rem;"></i>
                    </a>
                    <div class="rbc-dropdown">
                        <a href="{{ route('investments') }}" class="rbc-dropdown-item">GICs &amp; Term Deposits <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('investments') }}" class="rbc-dropdown-item">Mutual Funds <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('investments') }}" class="rbc-dropdown-item">TFSA &amp; RRSP <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('investments') }}" class="rbc-dropdown-item">Direct Investing <i class="fas fa-arrow-right"></i></a>
                    </div>
                </li>
                <li class="rbc-subnav-item {{ request()->routeIs('rewards') ? 'active' : '' }}">
                    <a href="{{ route('rewards') }}" class="rbc-subnav-link">Rewards</a>
                </li>
                <li class="rbc-subnav-item {{ request()->routeIs('advice') ? 'active' : '' }}">
                    <a href="{{ route('advice') }}" class="rbc-subnav-link">Advice</a>
                </li>
                <li class="rbc-subnav-item {{ request()->routeIs('calculators') ? 'active' : '' }}">
                    <a href="{{ route('calculators') }}" class="rbc-subnav-link">Calculators</a>
                </li>
                <li class="rbc-subnav-item {{ request()->routeIs('digital-banking') ? 'active' : '' }}">
                    <a href="{{ route('digital-banking') }}" class="rbc-subnav-link">Digital Banking</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    @yield('content')

    <!-- 10. COMPREHENSIVE FOOTER -->
    <footer class="rbc-footer">
        <div class="rbc-container">
            <div class="rbc-footer-grid">
                <!-- Column 1: About RBC -->
                <div class="rbc-footer-col">
                    <h4>About {{ $settings->site_name ?? 'Flutran Global' }}</h4>
                    <ul class="rbc-footer-links">
                        <li><a href="{{ route('about') }}"><i class="fas fa-angle-right"></i> About Us</a></li>
                        <li><a href="{{ route('careers') }}"><i class="fas fa-angle-right"></i> Careers &amp; Culture</a></li>
                        <li><a href="{{ route('newsroom') }}"><i class="fas fa-angle-right"></i> Newsroom &amp; Media</a></li>
                        <li><a href="{{ route('investors') }}"><i class="fas fa-angle-right"></i> Investor Relations</a></li>
                        <li><a href="{{ route('services') }}"><i class="fas fa-angle-right"></i> Banking Services Directory</a></li>
                    </ul>
                </div>

                <!-- Column 2: Customer Service -->
                <div class="rbc-footer-col">
                    <h4>Customer Service</h4>
                    <ul class="rbc-footer-links">
                        <li><a href="{{ route('accounts') }}"><i class="fas fa-angle-right"></i> Apply Online</a></li>
                        <li><a href="{{ route('locations') }}"><i class="fas fa-angle-right"></i> Branch &amp; ATM Locator</a></li>
                        <li><a href="{{ route('help') }}"><i class="fas fa-angle-right"></i> Help Centre &amp; FAQs</a></li>
                        <li><a href="{{ route('contact') }}"><i class="fas fa-angle-right"></i> Book an Appointment</a></li>
                        <li><a href="{{ route('contact') }}"><i class="fas fa-phone"></i> {{ $settings->contact_email ?? 'Support' }}</a></li>
                    </ul>
                </div>

                <!-- Column 3: Daily Numbers -->
                <div class="rbc-footer-col">
                    <h4>Daily Numbers</h4>
                    <ul class="rbc-footer-links">
                        <li><a href="{{ route('rates') }}"><i class="fas fa-angle-right"></i> Foreign Exchange Rates</a></li>
                        <li><a href="{{ route('rates') }}"><i class="fas fa-angle-right"></i> Prime Lending Rate</a></li>
                        <li><a href="{{ route('mortgages') }}"><i class="fas fa-angle-right"></i> Mortgage Rates</a></li>
                        <li><a href="{{ route('investments') }}"><i class="fas fa-angle-right"></i> GIC &amp; Wealth Rates</a></li>
                        <li><a href="{{ route('calculators') }}"><i class="fas fa-angle-right"></i> Financial Calculators</a></li>
                    </ul>
                </div>

                <!-- Column 4: Protecting Your Money -->
                <div class="rbc-footer-col">
                    <h4>Protecting Your Money</h4>
                    <ul class="rbc-footer-links">
                        <li><a href="{{ route('security') }}"><i class="fas fa-shield-halved"></i> 100% Security Guarantee</a></li>
                        <li><a href="{{ route('security') }}"><i class="fas fa-angle-right"></i> Cybersecurity Tips</a></li>
                        <li><a href="{{ route('alerts') }}"><i class="fas fa-angle-right"></i> Fraud &amp; Alert Settings</a></li>
                    </ul>
                    <div class="rbc-cdic-badge">
                        <div class="rbc-cdic-icon"><i class="fas fa-building-shield"></i></div>
                        <div class="rbc-cdic-text">
                            {{ $settings->site_name ?? 'Flutran Global' }} is a recognized institutional banking network member.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rbc-footer-bottom">
            <div class="rbc-container">
                <div class="rbc-footer-bottom-inner">
                    <div>
                        {{ $settings->site_name ?? 'Flutran Global Bank' }} Website, &copy; 1995-{{ date('Y') }}. All rights reserved.
                    </div>
                    <ul class="rbc-legal-links">
                        <li><a href="{{ route('privacy') }}">Privacy &amp; Security</a></li>
                        <li><a href="{{ route('terms') }}">Legal Terms</a></li>
                        <li><a href="{{ route('accessibility') }}">Accessibility</a></li>
                    </ul>
                    <div class="rbc-social-icons">
                        <a href="#" class="rbc-social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="rbc-social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="rbc-social-btn" aria-label="X"><i class="fab fa-x-twitter"></i></a>
                        <a href="#" class="rbc-social-btn" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="rbc-social-btn" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript Engine -->
    <script src="{{ asset('temp/custom/assets/js/rbc-main.js') }}"></script>
    @yield('scripts')
</body>
</html>
