@extends('layouts.base')

@section('title', 'All Banking Products &amp; Services Directory')

@section('content')
<!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-layer-group"></i> COMPLETE SERVICE DIRECTORY
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Explore All Royal Bank Financial Services
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    From daily chequing and credit cards to mortgages, private wealth management, and global corporate trade finance.
                </p>
            </div>
        </div>
    </section>

    <!-- DIRECTORY GRID -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <div class="rbc-ecosystem-grid">
                <!-- Personal Accounts -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.2rem; color: var(--rbc-blue); margin-bottom: 10px;"><i class="fas fa-wallet"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 6px;">Bank Accounts</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">Chequing, High-Interest eSavings, Youth, Student, and Senior advantage plans.</p>
                    <a href={{ route('accounts') }} class="rbc-link-arrow">Browse Accounts <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Credit Cards -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.2rem; color: var(--rbc-gold-dark); margin-bottom: 10px;"><i class="fas fa-credit-card"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 6px;">Credit Cards</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">Avion travel points, 2% cash back cards, $0 annual fee, and low-interest options.</p>
                    <a href={{ route('credit-cards') }} class="rbc-link-arrow">Browse Credit Cards <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Mortgages -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.2rem; color: #16a34a; margin-bottom: 10px;"><i class="fas fa-house"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 6px;">Mortgages</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">Fixed &amp; variable rate mortgages, 120-day rate guarantee, and refinancing.</p>
                    <a href={{ route('mortgages') }} class="rbc-link-arrow">Mortgage Solutions <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Loans & Lines of Credit -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.2rem; color: #0284c7; margin-bottom: 10px;"><i class="fas fa-coins"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 6px;">Loans &amp; Lines of Credit</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">Personal term loans, auto finance, debt consolidation, and Homeline HELOC.</p>
                    <a href={{ route('loans') }} class="rbc-link-arrow">Explore Borrowing <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Investments & Wealth -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.2rem; color: #7c3aed; margin-bottom: 10px;"><i class="fas fa-chart-pie"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 6px;">Investments &amp; Wealth</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">GICs, TFSA, RRSP, Mutual Funds, Direct Investing, and Private Banking.</p>
                    <a href={{ route('investments') }} class="rbc-link-arrow">Investing Options <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Business & Commercial -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.2rem; color: #0f172a; margin-bottom: 10px;"><i class="fas fa-briefcase"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 6px;">Business &amp; Commercial</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">Small business accounts, commercial credit facilities, and Moneris POS terminals.</p>
                    <a href={{ route('business') }} class="rbc-link-arrow">Business Hub <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
