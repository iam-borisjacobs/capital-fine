@extends('layouts.base')

@section('title', 'Global Capital Settlements & Digital Remittances')

@section('content')

    <!-- HERO -->
    <section class="fl-hero" style="background: linear-gradient(135deg, #002244 0%, #0051a5 100%); color: #ffffff;">
        <div class="fl-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="fl-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-paper-plane"></i> GLOBAL CAPITAL SETTLEMENTS
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Transfer Capital Seamlessly Across Global Corridors
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Enjoy zero-fee domestic digital transfers and competitive institutional wire routing to over 120 jurisdictions in real time.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('login') }}" class="fl-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Sign In to Transfer Capital <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('register') }}" class="fl-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Open Account</a>
                </div>
            </div>
        </div>
    </section>

    <!-- TRANSFER METHODS GRID -->
    <section class="fl-section" style="background-color: var(--fl-bg);">
        <div class="fl-container">
            <h2 class="fl-section-title">Institutional Channels for Liquidity Transfer</h2>
            <p class="fl-section-subtitle">Select the optimal clearing rail based on destination, currency, and settlement speed.</p>

            <div class="fl-ecosystem-grid">
                <!-- Method 1: Instant Digital Transfer -->
                <div class="fl-ecosystem-card">
                    <div class="fl-ecosystem-header">
                        <h3 class="fl-ecosystem-title"><i class="fas fa-bolt" style="color: var(--fl-gold); margin-right: 8px;"></i> Instant Digital Transfer</h3>
                    </div>
                    <div class="fl-ecosystem-body">
                        <p style="font-size: 0.9rem; color: var(--fl-text-secondary); margin-bottom: 16px;">
                            Transmit liquidity directly using verified client identifiers or secure emails. Settlement completes in seconds.
                        </p>
                        <ul class="fl-feature-list">
                            <li class="fl-feature-item"><span><strong>Fee:</strong> $0.00 / Zero fee with eligible accounts</span></li>
                            <li class="fl-feature-item"><span><strong>Speed:</strong> Instantaneous (under 60 seconds)</span></li>
                            <li class="fl-feature-item"><span><strong>Limit:</strong> High-tier thresholds available</span></li>
                        </ul>
                    </div>
                    <div class="fl-ecosystem-footer">
                        <a href="{{ route('login') }}" class="fl-link-arrow">Send Digital Transfer <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Method 2: Global Wire Transfer -->
                <div class="fl-ecosystem-card">
                    <div class="fl-ecosystem-header">
                        <h3 class="fl-ecosystem-title"><i class="fas fa-globe" style="color: var(--fl-cyan); margin-right: 8px;"></i> International Wire &amp; SWIFT</h3>
                    </div>
                    <div class="fl-ecosystem-body">
                        <p style="font-size: 0.9rem; color: var(--fl-text-secondary); margin-bottom: 16px;">
                            Execute high-volume international settlements via SWIFT and SEPA clearing rails with full tracking.
                        </p>
                        <ul class="fl-feature-list">
                            <li class="fl-feature-item"><span><strong>Currencies:</strong> USD, EUR, GBP, CAD, CHF, JPY &amp; 40+ more</span></li>
                            <li class="fl-feature-item"><span><strong>Speed:</strong> Same day to next business day</span></li>
                            <li class="fl-feature-item"><span><strong>Security:</strong> Guaranteed 256-bit cryptographic routing</span></li>
                        </ul>
                    </div>
                    <div class="fl-ecosystem-footer">
                        <a href="{{ route('login') }}" class="fl-link-arrow">Initiate Wire Settlement <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Method 3: Internal Account Transfer -->
                <div class="fl-ecosystem-card">
                    <div class="fl-ecosystem-header">
                        <h3 class="fl-ecosystem-title"><i class="fas fa-arrows-rotate" style="color: var(--fl-teal); margin-right: 8px;"></i> Internal Portfolio Rebalancing</h3>
                    </div>
                    <div class="fl-ecosystem-body">
                        <p style="font-size: 0.9rem; color: var(--fl-text-secondary); margin-bottom: 16px;">
                            Instantly allocate funds between your operating accounts, treasury reserves, and investment portfolios.
                        </p>
                        <ul class="fl-feature-list">
                            <li class="fl-feature-item"><span><strong>Fee:</strong> $0.00 / Always Free</span></li>
                            <li class="fl-feature-item"><span><strong>Speed:</strong> Real-time 24/7 instant clearance</span></li>
                            <li class="fl-feature-item"><span><strong>Limit:</strong> Unlimited internal rebalancing</span></li>
                        </ul>
                    </div>
                    <div class="fl-ecosystem-footer">
                        <a href="{{ route('login') }}" class="fl-link-arrow">Rebalance Accounts <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECURITY GUARANTEE -->
    <section class="fl-section" style="background-color: var(--fl-surface);">
        <div class="fl-container">
            <div style="display: flex; align-items: center; gap: 30px; flex-wrap: wrap;">
                <div style="flex: 1; min-width: 280px;">
                    <span class="fl-badge-pill"><i class="fas fa-shield-halved"></i> 100% SECURITY GUARANTEE</span>
                    <h3 style="font-size: 1.8rem; font-weight: 800; color: var(--fl-navy); margin-top: 10px; margin-bottom: 14px;">Your Capital is Fully Protected Every Step of the Way</h3>
                    <p style="color: var(--fl-text-secondary); line-height: 1.6; margin-bottom: 20px;">
                        Every settlement is backed by our full reimbursement security guarantee. We verify transactions with real-time biometric and multi-factor challenge authentication.
                    </p>
                    <a href="{{ route('security') }}" class="fl-btn-secondary">Learn About Our Security Protocol</a>
                </div>
                <div style="width: 200px; text-align: center;">
                    <i class="fas fa-shield-halved" style="font-size: 6rem; color: var(--fl-blue);"></i>
                </div>
            </div>
        </div>
    </section>

@endsection
