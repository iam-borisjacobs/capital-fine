@extends('layouts.base')

@section('title', 'Financial Advice &amp; My Money Matters')

@section('content')
<!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-book-open-reader"></i> FINANCIAL ADVICE &amp; INSIGHTS
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Empowering Your Financial Decisions with Expert Knowledge
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Read in-depth guides on home buying, tax planning, retirement strategies, and smart investing curated by RBC economic analysts and accredited advisors.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href={{ route('contact') }} class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Book a Free Advisory Session <i class="fas fa-arrow-right"></i></a>
                    <a href={{ route('calculators') }} class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Financial Calculators</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ARTICLE LIBRARY -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Latest Articles &amp; Economic Commentary</h2>
            <p class="rbc-section-subtitle">Actionable advice for every stage of your personal financial journey.</p>

            <div class="rbc-article-grid">
                <!-- Article 1 -->
                <div class="rbc-article-card">
                    <div class="rbc-article-thumb" style="background: linear-gradient(135deg, #002752, #0051a5); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <div class="rbc-article-body">
                        <span class="rbc-article-tag">Economy &amp; Housing</span>
                        <h3 class="rbc-article-title">How Central Bank Rate Cuts Will Impact Mortgage Renewals</h3>
                        <p class="rbc-article-snippet">Understand what falling inflation numbers mean for bond yields, fixed mortgage pricing, and the optimal timing for your loan renewal.</p>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="rbc-article-card">
                    <div class="rbc-article-thumb" style="background: linear-gradient(135deg, #065f46, #047857); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-shield-heart"></i>
                    </div>
                    <div class="rbc-article-body">
                        <span class="rbc-article-tag">Retirement &amp; Estate</span>
                        <h3 class="rbc-article-title">The 5 Pillar Strategy to Retire 5 Years Earlier</h3>
                        <p class="rbc-article-snippet">How to balance non-registered portfolios, TFSA compounding, and employer pension indexing to build lasting passive income.</p>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="rbc-article-card">
                    <div class="rbc-article-thumb" style="background: linear-gradient(135deg, #475569, #1e293b); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="rbc-article-body">
                        <span class="rbc-article-tag">Students &amp; Family</span>
                        <h3 class="rbc-article-title">Maximizing RESP Government Matching Grants for Your Children</h3>
                        <p class="rbc-article-snippet">A complete breakdown of the Canada Education Savings Grant (CESG) rules and how to capture up to $7,200 in free government funding.</p>
                    </div>
                </div>

                <!-- Article 4 -->
                <div class="rbc-article-card">
                    <div class="rbc-article-thumb" style="background: linear-gradient(135deg, #7c2d12, #9a3412); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <div class="rbc-article-body">
                        <span class="rbc-article-tag">Tax Strategies</span>
                        <h3 class="rbc-article-title">10 Smart Year-End Tax Moves to Keep More of Your Money</h3>
                        <p class="rbc-article-snippet">From tax-loss harvesting to charitable gifting through appreciated securities, discover proven wealth preservation techniques.</p>
                    </div>
                </div>

                <!-- Article 5 -->
                <div class="rbc-article-card">
                    <div class="rbc-article-thumb" style="background: linear-gradient(135deg, #1e1b4b, #312e81); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="rbc-article-body">
                        <span class="rbc-article-tag">Small Business</span>
                        <h3 class="rbc-article-title">Cash Flow Management Tips for Scaling Enterprises</h3>
                        <p class="rbc-article-snippet">How optimizing receivable collection cycles and leveraging flexible lines of credit keeps working capital stable during expansion.</p>
                    </div>
                </div>

                <!-- Article 6 -->
                <div class="rbc-article-card">
                    <div class="rbc-article-thumb" style="background: linear-gradient(135deg, #0284c7, #0369a1); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="rbc-article-body">
                        <span class="rbc-article-tag">Digital Safety</span>
                        <h3 class="rbc-article-title">Recognizing Modern Social Engineering and AI Voice Scams</h3>
                        <p class="rbc-article-snippet">Crucial cybersecurity habits to protect your online identity, two-factor authentication tokens, and wire authorizations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
