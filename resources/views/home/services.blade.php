@extends('layouts.base')

@section('title', 'Financial &amp; Capital Solutions Directory')

@section('content')
<!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-layer-group"></i> COMPLETE SOLUTIONS DIRECTORY
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Explore All Capital &amp; Treasury Solutions
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    From operating accounts and global smart cards to property solutions, private wealth management, and international trade finance.
                </p>
            </div>
        </div>
    </section>

    <!-- DIRECTORY GRID -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <div class="rbc-ecosystem-grid">
                <!-- Operating Accounts -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.2rem; color: var(--rbc-blue); margin-bottom: 10px;"><i class="fas fa-wallet"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 6px;">Operating &amp; Treasury Accounts</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">High-yield liquidity reserves, operating accounts, multi-currency corporate portfolios.</p>
                    <a href={{ route('accounts') }} class="rbc-link-arrow">Browse Accounts <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Global Cards -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.2rem; color: var(--rbc-gold-dark); margin-bottom: 10px;"><i class="fas fa-credit-card"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 6px;">Global Cards</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">Apex Titanium travel rewards, value-back privileges, $0 annual fee, and preferred interest cards.</p>
                    <a href={{ route('credit-cards') }} class="rbc-link-arrow">Browse Global Cards <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Property Solutions -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.2rem; color: #16a34a; margin-bottom: 10px;"><i class="fas fa-house"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 6px;">Property Solutions</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">Fixed &amp; variable property financing, rate locks, and residential &amp; commercial portfolio lending.</p>
                    <a href={{ route('mortgages') }} class="rbc-link-arrow">Property Solutions <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Credit & Capital Facilities -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.2rem; color: #0284c7; margin-bottom: 10px;"><i class="fas fa-coins"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 6px;">Credit &amp; Capital Facilities</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">Structured term credit, liquidity facilities, asset financing, and corporate lines.</p>
                    <a href={{ route('loans') }} class="rbc-link-arrow">Explore Financing <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Investments & Wealth -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.2rem; color: #7c3aed; margin-bottom: 10px;"><i class="fas fa-chart-pie"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 6px;">Investments &amp; Wealth</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">Fixed income certificates, tax-advantaged accounts, diversified portfolios, and private wealth advisory.</p>
                    <a href={{ route('investments') }} class="rbc-link-arrow">Investing Options <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Business & Commercial -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.2rem; color: #0f172a; margin-bottom: 10px;"><i class="fas fa-briefcase"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 6px;">Enterprise &amp; Commercial</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">Commercial treasury, merchant payment processing, and corporate trade settlement.</p>
                    <a href={{ route('business') }} class="rbc-link-arrow">Enterprise Hub <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
