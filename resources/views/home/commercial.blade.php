@extends('layouts.base')

@section('title', 'Commercial &amp; Corporate Treasury Solutions')

@section('content')
<!-- HERO -->
    <section class="fl-hero" style="background: linear-gradient(135deg, #00172e 0%, #002244 100%); color: #ffffff;">
        <div class="fl-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="fl-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-building-columns"></i> COMMERCIAL &amp; INSTITUTIONAL
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Strategic Capital &amp; Treasury Solutions for Market Leaders
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Scale your mid-market enterprise with syndicated debt financing, cross-border treasury optimization, and specialized industry relationship managers.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href={{ route('contact') }} class="fl-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Connect with a Commercial Team <i class="fas fa-arrow-right"></i></a>
                    <a href={{ route('rates') }} class="fl-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Treasury Rates</a>
                </div>
            </div>
        </div>
    </section>

    <!-- COMMERCIAL PILLARS -->
    <section class="fl-section" style="background-color: var(--fl-bg);">
        <div class="fl-container">
            <h2 class="fl-section-title">Institutional Capabilities</h2>
            <p class="fl-section-subtitle">Comprehensive corporate finance and liquidity management across global markets.</p>

            <div class="fl-ecosystem-grid">
                <!-- Corporate Lending -->
                <div class="fl-ecosystem-card">
                    <div style="font-size: 2.5rem; color: var(--fl-blue); margin-bottom: 12px;"><i class="fas fa-money-bill-trend-up"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--fl-navy); margin-bottom: 8px;">Corporate Lending &amp; Syndication</h3>
                    <p style="font-size: 0.88rem; color: var(--fl-text-secondary); margin-bottom: 16px;">
                        Custom senior secured credit facilities, asset-backed loans, project finance, and syndicated underwriting to support mergers and acquisitions.
                    </p>
                    <a href={{ route('contact') }} class="fl-link-arrow">Explore Corporate Lending <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Treasury Management -->
                <div class="fl-ecosystem-card">
                    <div style="font-size: 2.5rem; color: var(--fl-gold-dark); margin-bottom: 12px;"><i class="fas fa-vault"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--fl-navy); margin-bottom: 8px;">Global Treasury &amp; Liquidity Pools</h3>
                    <p style="font-size: 0.88rem; color: var(--fl-text-secondary); margin-bottom: 16px;">
                        Automated liquidity concentration, multi-currency target balance sweeping, and direct host-to-host API ERP integration.
                    </p>
                    <a href={{ route('contact') }} class="fl-link-arrow">Treasury Solutions <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- International Trade Finance -->
                <div class="fl-ecosystem-card">
                    <div style="font-size: 2.5rem; color: #0284c7; margin-bottom: 12px;"><i class="fas fa-ship"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--fl-navy); margin-bottom: 8px;">Trade Finance &amp; FX Hedging</h3>
                    <p style="font-size: 0.88rem; color: var(--fl-text-secondary); margin-bottom: 16px;">
                        Commercial letters of credit, export development financing, and foreign exchange forward contracts to mitigate currency risk.
                    </p>
                    <a href={{ route('contact') }} class="fl-link-arrow">Trade Services <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
