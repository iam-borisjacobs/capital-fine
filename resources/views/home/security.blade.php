@extends('layouts.base')

@section('title', 'Security Guarantee & Cyber Protection')

@section('content')
    <!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #00172e 0%, #003da5 100%); color: #ffffff; position: relative; overflow: hidden;">
        <div style="position: absolute; right: 0; top: 0; bottom: 0; width: 50%; background-image: url('{{ asset('storage/app/public/photos/security_banner.jpg') }}'); background-size: cover; background-position: center; opacity: 0.35;"></div>
        <div class="rbc-container" style="position: relative; z-index: 2;">
            <div style="max-width: 720px; padding: 40px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-shield-halved"></i> 100% SECURITY GUARANTEE
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Your Funds and Data are Inviolably Protected
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    We deploy defense-grade 256-bit encryption, continuous biometric authentication, automated fraud anomaly detection, and full reimbursement protection for unauthorized transactions.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('register') }}" class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Open Protected Account <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('help') }}" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Security FAQs</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECURITY SPOTLIGHT -->
    <section class="rbc-section" style="background-color: var(--rbc-surface);">
        <div class="rbc-container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <span class="rbc-badge-pill"><i class="fas fa-lock"></i> MULTI-LAYER DEFENSE</span>
                    <h2 class="rbc-section-title" style="text-align: left; margin-bottom: 16px;">How We Guard Every Dollar</h2>
                    <p style="color: var(--rbc-text-secondary); line-height: 1.6; margin-bottom: 20px;">
                        Our global cyber intelligence center operates around the clock to neutralize threats before they ever reach your accounts.
                    </p>
                    <ul class="rbc-feature-list" style="margin-bottom: 24px;">
                        <li class="rbc-feature-item"><span><strong>Zero Liability Promise:</strong> You are 100% covered against unauthorized transactions when you follow basic security steps.</span></li>
                        <li class="rbc-feature-item"><span><strong>Hardware Security Keys:</strong> Support for YubiKey and biometric passkeys.</span></li>
                        <li class="rbc-feature-item"><span><strong>Instant Card Freeze:</strong> Lock or unlock debit and credit cards in 1 tap from your portal.</span></li>
                    </ul>
                    <a href="{{ route('alerts') }}" class="rbc-btn-primary">Configure Security Alerts</a>
                </div>
                <div style="border-radius: 16px; overflow: hidden; box-shadow: var(--rbc-shadow-xl); border: 1px solid var(--rbc-border);">
                    <img src="{{ asset('storage/app/public/photos/security_banner.jpg') }}" alt="Cyber Security Vault" style="width: 100%; height: auto; display: block;">
                </div>
            </div>
        </div>
    </section>
@endsection
