@extends('layouts.base')

@section('title', 'Small Business & Commercial Banking')

@section('content')
    <!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff; position: relative; overflow: hidden;">
        <div style="position: absolute; right: 0; top: 0; bottom: 0; width: 50%; background-image: url('{{ asset('storage/app/public/photos/business_banner.jpg') }}'); background-size: cover; background-position: center; opacity: 0.35;"></div>
        <div class="rbc-container" style="position: relative; z-index: 2;">
            <div style="max-width: 720px; padding: 40px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-briefcase"></i> BUSINESS BANKING
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Empower Your Business to Scale Faster and Smarter
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    From merchant point-of-sale systems to business credit lines and automated payroll, we supply the financial backbone your company needs.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('register') }}" class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Open Business Account <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('contact') }}" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Speak to Commercial Banker</a>
                </div>
            </div>
        </div>
    </section>

    <!-- BUSINESS SPOTLIGHT -->
    <section class="rbc-section" style="background-color: var(--rbc-surface);">
        <div class="rbc-container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div style="border-radius: 16px; overflow: hidden; box-shadow: var(--rbc-shadow-xl); border: 1px solid var(--rbc-border);">
                    <img src="{{ asset('storage/app/public/photos/business_banner.jpg') }}" alt="Business Owners POS" style="width: 100%; height: auto; display: block;">
                </div>
                <div>
                    <span class="rbc-badge-pill"><i class="fas fa-store"></i> MERCHANT SERVICES</span>
                    <h2 class="rbc-section-title" style="text-align: left; margin-bottom: 16px;">Next-Day Deposits &amp; Smart Terminals</h2>
                    <p style="color: var(--rbc-text-secondary); line-height: 1.6; margin-bottom: 20px;">
                        Accept contactless cards, Apple Pay, Google Pay, and international currencies with competitive processing rates and next-morning fund settlement.
                    </p>
                    <ul class="rbc-feature-list" style="margin-bottom: 24px;">
                        <li class="rbc-feature-item"><span><strong>Commercial Credit Lines:</strong> Maintain liquidity for inventory and seasonal demand.</span></li>
                        <li class="rbc-feature-item"><span><strong>Multi-User Access:</strong> Granular permissions for accountants and managers.</span></li>
                        <li class="rbc-feature-item"><span><strong>Automated Invoicing:</strong> Send professional payment links directly to customers.</span></li>
                    </ul>
                    <a href="{{ route('contact') }}" class="rbc-btn-primary">Get Business Solutions</a>
                </div>
            </div>
        </div>
    </section>
@endsection
