@extends('layouts.base')

@section('title', 'Advisory Insights & Market Intelligence')

@section('content')
<!-- HERO -->
    <section class="fl-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff;">
        <div class="fl-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="fl-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-book-open-reader"></i> ADVISORY INSIGHTS &amp; INTELLIGENCE
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Empowering Your Strategic Decisions with Expert Knowledge
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Read in-depth research on property financing, tax optimization, treasury liquidity, and institutional asset allocation curated by global capital analysts.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" class="fl-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Book Consultation <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('calculators') }}" class="fl-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Financial Calculators</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ARTICLE LIBRARY -->
    <section class="fl-section" style="background-color: var(--fl-bg);">
        <div class="fl-container">
            <h2 class="fl-section-title">Latest Research &amp; Capital Commentary</h2>
            <p class="fl-section-subtitle">Actionable intelligence for private clients, family offices, and enterprise treasurers.</p>

            <div class="fl-article-grid">
                <!-- Article 1 -->
                <div class="fl-article-card">
                    <div class="fl-article-thumb" style="background: linear-gradient(135deg, #002752, #0051a5); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <div class="fl-article-body">
                        <span class="fl-article-tag">Economy &amp; Real Estate</span>
                        <h3 class="fl-article-title">How Benchmark Rate Cycles Impact Real Estate &amp; Structured Facilities</h3>
                        <p class="fl-article-snippet">Understand what macroeconomic inflation shifts mean for fixed asset yields, debt pricing, and liquidity management.</p>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="fl-article-card">
                    <div class="fl-article-thumb" style="background: linear-gradient(135deg, #065f46, #047857); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-shield-heart"></i>
                    </div>
                    <div class="fl-article-body">
                        <span class="fl-article-tag">Wealth &amp; Estate Planning</span>
                        <h3 class="fl-article-title">The 5-Pillar Strategy for Sovereign Wealth &amp; Compounding</h3>
                        <p class="fl-article-snippet">How to balance non-custodial assets, high-yield treasury certificates, and multi-asset reserves to build lasting passive yield.</p>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="fl-article-card">
                    <div class="fl-article-thumb" style="background: linear-gradient(135deg, #475569, #1e293b); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="fl-article-body">
                        <span class="fl-article-tag">Family Office</span>
                        <h3 class="fl-article-title">Strategic Family Office Governance &amp; Generational Wealth Transfer</h3>
                        <p class="fl-article-snippet">A structured framework for multi-generational trusts, succession protocols, and tax-sheltered cross-border wealth structures.</p>
                    </div>
                </div>

                <!-- Article 4 -->
                <div class="fl-article-card">
                    <div class="fl-article-thumb" style="background: linear-gradient(135deg, #7c2d12, #9a3412); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <div class="fl-article-body">
                        <span class="fl-article-tag">Tax Mitigation</span>
                        <h3 class="fl-article-title">10 Smart Year-End Tax Mitigation &amp; Capital Preservation Strategies</h3>
                        <p class="fl-article-snippet">From loss harvesting to philanthropic endowments through appreciated equities, explore institutional wealth preservation.</p>
                    </div>
                </div>

                <!-- Article 5 -->
                <div class="fl-article-card">
                    <div class="fl-article-thumb" style="background: linear-gradient(135deg, #1e1b4b, #312e81); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="fl-article-body">
                        <span class="fl-article-tag">Enterprise Treasury</span>
                        <h3 class="fl-article-title">Liquidity &amp; Working Capital Management for Scaling Enterprises</h3>
                        <p class="fl-article-snippet">How optimizing receivable collection cycles and leveraging flexible lines of credit keeps working capital stable during expansion.</p>
                    </div>
                </div>

                <!-- Article 6 -->
                <div class="fl-article-card">
                    <div class="fl-article-thumb" style="background: linear-gradient(135deg, #0284c7, #0369a1); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="fl-article-body">
                        <span class="fl-article-tag">Cyber Protection</span>
                        <h3 class="fl-article-title">Safeguarding High-Net-Worth Portfolios Against Modern Cyber Threats</h3>
                        <p class="fl-article-snippet">Crucial security protocols to protect corporate credentials, biometric tokens, and institutional wire authorizations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
