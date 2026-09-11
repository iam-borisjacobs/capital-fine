@extends('layouts.base')

@section('title', 'Property Solutions & Real Estate Financing')

@section('content')
    <!-- HERO -->
    <section class="fl-hero" style="background: linear-gradient(135deg, #002244 0%, #0051a5 100%); color: #ffffff; position: relative; overflow: hidden;">
        <div style="position: absolute; right: 0; top: 0; bottom: 0; width: 50%; background-image: url('{{ asset('storage/app/public/photos/mortgages_banner.jpg') }}'); background-size: cover; background-position: center; opacity: 0.35;"></div>
        <div class="fl-container" style="position: relative; z-index: 2;">
            <div style="max-width: 720px; padding: 40px 0;">
                <span class="fl-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-house"></i> PROPERTY FINANCING SOLUTIONS
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Get Your Property Financing Pre-Approved with Guaranteed Rates
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Lock in your rate for up to 120 days. Whether you are acquiring your first real estate asset, restructuring, or refinancing, our specialists are here to guide you.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" class="fl-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Get Pre-Approved Online <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('calculators') }}" class="fl-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Calculate Payments</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPERTY RATES CARDS -->
    <section class="fl-section" style="background-color: var(--fl-bg);">
        <div class="fl-container">
            <h2 class="fl-section-title">Special Featured Property Rates</h2>
            <p class="fl-section-subtitle">Lock in competitive rates with flexible prepayment options and payment frequency choices.</p>

            <div class="fl-ecosystem-grid">
                <!-- 5 Year Fixed -->
                <div class="fl-ecosystem-card">
                    <span class="fl-badge-pill" style="align-self: flex-start; margin-bottom: 8px;">Most Selected</span>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--fl-navy);">5-Year Fixed Closed</h3>
                    <div style="font-size: 2.8rem; font-weight: 800; color: var(--fl-blue); margin: 12px 0;">
                        4.49% <span style="font-size: 0.95rem; font-weight: 500; color: var(--fl-text-muted);">APR</span>
                    </div>
                    <ul class="fl-feature-list" style="margin-bottom: 24px;">
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Predictable monthly payments guaranteed for 5 full years</li>
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Prepay up to 10% of original principal each year</li>
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Rate guarantee held for 120 days during your property search</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="fl-btn-primary" style="width: 100%; justify-content: center;">Apply for 5-Year Fixed</a>
                </div>

                <!-- 5 Year Variable -->
                <div class="fl-ecosystem-card">
                    <span class="fl-badge-pill" style="align-self: flex-start; margin-bottom: 8px; background: #e0f2fe; color: #0284c7; border-color: #bae6fd;">Maximum Flexibility</span>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--fl-navy);">5-Year Variable Closed</h3>
                    <div style="font-size: 2.8rem; font-weight: 800; color: var(--fl-blue); margin: 12px 0;">
                        4.95% <span style="font-size: 0.95rem; font-weight: 500; color: var(--fl-text-muted);">Prime - 0.50%</span>
                    </div>
                    <ul class="fl-feature-list" style="margin-bottom: 24px;">
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Benefit immediately when prime interest rates decrease</li>
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Convert to a fixed rate anytime without prepayment penalties</li>
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Flexible accelerated payment options to pay down balances faster</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="fl-btn-primary" style="width: 100%; justify-content: center;">Apply for 5-Year Variable</a>
                </div>

                <!-- First Time Buyer -->
                <div class="fl-ecosystem-card">
                    <span class="fl-badge-pill" style="align-self: flex-start; margin-bottom: 8px; background: #fef3c7; color: #92400e; border-color: #fde68a;">First-Time Property Buyers</span>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--fl-navy);">First Property Advantage</h3>
                    <div style="font-size: 2.8rem; font-weight: 800; color: var(--fl-blue); margin: 12px 0;">
                        4.39% <span style="font-size: 0.95rem; font-weight: 500; color: var(--fl-text-muted);">Special Rate</span>
                    </div>
                    <ul class="fl-feature-list" style="margin-bottom: 24px;">
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Capital funding options starting as low as 5%</li>
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Buyer Incentive and Tax-Advantaged FHSA integration</li>
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Free dedicated consultation with an accredited real estate specialist</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="fl-btn-primary" style="width: 100%; justify-content: center;">Explore Property Package</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PRE-APPROVAL SPOTLIGHT -->
    <section class="fl-section" style="background-color: var(--fl-surface);">
        <div class="fl-container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div style="border-radius: 16px; overflow: hidden; box-shadow: var(--fl-shadow-xl); border: 1px solid var(--fl-border);">
                    <img src="{{ asset('storage/app/public/photos/mortgages_banner.jpg') }}" alt="Homeowners holding keys" style="width: 100%; height: auto; display: block;">
                </div>
                <div>
                    <span class="fl-badge-pill"><i class="fas fa-key"></i> FAST PRE-APPROVAL</span>
                    <h2 class="fl-section-title" style="text-align: left; margin-bottom: 16px;">Acquire with Complete Confidence</h2>
                    <p style="color: var(--fl-text-secondary); line-height: 1.6; margin-bottom: 20px;">
                        Knowing your pre-approved financing capacity gives you powerful bargaining leverage when making an offer. Our digital pre-approval process takes under 15 minutes with no obligation.
                    </p>
                    <a href="{{ route('contact') }}" class="fl-btn-primary">Start Property Pre-Approval Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection
