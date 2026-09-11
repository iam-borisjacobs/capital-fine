@extends('layouts.base')

@section('title', 'Enterprise & Small Business Capital Solutions')

@section('content')
    <!-- HERO -->
    <section class="fl-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff; position: relative; overflow: hidden;">
        <div style="position: absolute; right: 0; top: 0; bottom: 0; width: 50%; background-image: url('{{ asset('storage/app/public/photos/business_banner.jpg') }}'); background-size: cover; background-position: center; opacity: 0.35;"></div>
        <div class="fl-container" style="position: relative; z-index: 2;">
            <div style="max-width: 720px; padding: 40px 0;">
                <span class="fl-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-briefcase"></i> ENTERPRISE CAPITAL
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Empower Your Business to Scale Faster and Smarter
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    From digital payment gateways to working capital facilities and automated treasury payroll, we supply the financial infrastructure your company needs.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('register') }}" class="fl-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Open Commercial Account <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('contact') }}" class="fl-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Speak to Capital Advisor</a>
                </div>
            </div>
        </div>
    </section>

    <!-- BUSINESS SPOTLIGHT -->
    <section class="fl-section" style="background-color: var(--fl-surface);">
        <div class="fl-container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div style="border-radius: 16px; overflow: hidden; box-shadow: var(--fl-shadow-xl); border: 1px solid var(--fl-border);">
                    <img src="{{ asset('storage/app/public/photos/business_banner.jpg') }}" alt="Business Owners POS" style="width: 100%; height: auto; display: block;">
                </div>
                <div>
                    <span class="fl-badge-pill"><i class="fas fa-store"></i> MERCHANT CLEARING</span>
                    <h2 class="fl-section-title" style="text-align: left; margin-bottom: 16px;">Next-Day Settlements &amp; Smart Gateways</h2>
                    <p style="color: var(--fl-text-secondary); line-height: 1.6; margin-bottom: 20px;">
                        Accept contactless global cards, mobile wallets, and international currencies with competitive processing rates and next-morning liquidity settlement.
                    </p>
                    <ul class="fl-feature-list" style="margin-bottom: 24px;">
                        <li class="fl-feature-item"><span><strong>Structured Capital Facilities:</strong> Maintain liquidity for inventory, expansion, and seasonal demand.</span></li>
                        <li class="fl-feature-item"><span><strong>Multi-User Controls:</strong> Granular permissions for financial controllers and treasurers.</span></li>
                        <li class="fl-feature-item"><span><strong>Automated Invoicing:</strong> Issue digital payment requests directly to global clients.</span></li>
                    </ul>
                    <a href="{{ route('contact') }}" class="fl-btn-primary">Explore Enterprise Solutions</a>
                </div>
            </div>
        </div>
    </section>
@endsection
