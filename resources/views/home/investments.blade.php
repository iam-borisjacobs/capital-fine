@extends('layouts.base')

@section('title', 'Investments, Wealth Management & GICs')

@section('content')
    <!-- HERO -->
    <section class="fl-hero" style="background: linear-gradient(135deg, #00172e 0%, #003da5 100%); color: #ffffff; position: relative; overflow: hidden;">
        <div style="position: absolute; right: 0; top: 0; bottom: 0; width: 50%; background-image: url('{{ asset('storage/app/public/photos/investments_banner.jpg') }}'); background-size: cover; background-position: center; opacity: 0.35;"></div>
        <div class="fl-container" style="position: relative; z-index: 2;">
            <div style="max-width: 720px; padding: 40px 0;">
                <span class="fl-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-arrow-trend-up"></i> WEALTH &amp; CAPITAL GROWTH
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Grow, Protect, and Compound Your Wealth for the Future
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    From high-yield guaranteed investment certificates (GICs) to customized global equity portfolios, discover wealth management built around your unique goals.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('register') }}" class="fl-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Start Investing Online <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('contact') }}" class="fl-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Book an Investment Advisor</a>
                </div>
            </div>
        </div>
    </section>

    <!-- INVESTMENTS SPOTLIGHT -->
    <section class="fl-section" style="background-color: var(--fl-surface);">
        <div class="fl-container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <span class="fl-badge-pill"><i class="fas fa-chart-pie"></i> HIGH-YIELD PORTFOLIOS</span>
                    <h2 class="fl-section-title" style="text-align: left; margin-bottom: 16px;">Institutional-Grade Analytics &amp; Yield</h2>
                    <p style="color: var(--fl-text-secondary); line-height: 1.6; margin-bottom: 20px;">
                        Access real-time automated portfolio rebalancing, tax-advantaged accounts, and risk-adjusted growth models engineered to outperform market volatility.
                    </p>
                    <ul class="fl-feature-list" style="margin-bottom: 24px;">
                        <li class="fl-feature-item"><span><strong>Guaranteed Return Certificates:</strong> Earn up to 5.15% fixed annual interest.</span></li>
                        <li class="fl-feature-item"><span><strong>Automated Rebalancing:</strong> Keep asset allocations aligned with your risk tolerance.</span></li>
                        <li class="fl-feature-item"><span><strong>Tax-Free Savings Integration:</strong> Maximize compounding returns with zero tax on gains.</span></li>
                    </ul>
                    <a href="{{ route('contact') }}" class="fl-btn-primary">Connect with Wealth Manager</a>
                </div>
                <div style="border-radius: 16px; overflow: hidden; box-shadow: var(--fl-shadow-xl); border: 1px solid var(--fl-border);">
                    <img src="{{ asset('storage/app/public/photos/investments_banner.jpg') }}" alt="Investment Analytics" style="width: 100%; height: auto; display: block;">
                </div>
            </div>
        </div>
    </section>
@endsection
