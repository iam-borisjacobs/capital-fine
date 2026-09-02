@extends('layouts.base')

@section('title', 'Mobile Banking App - iOS & Android')

@section('content')

    <!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #002244 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-mobile-screen"></i> MOBILE BANKING
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Bank Anytime, Anywhere with the Mobile Banking Experience
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Take full control of your finances on the go. Deposit cheques with your camera, send instantaneous transfers, manage credit cards, and track spending insights.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('login') }}" class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Sign In to Web App <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('register') }}" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Enroll Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- APP FEATURES -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Everything You Need in Your Pocket</h2>
            <p class="rbc-section-subtitle">Powerful digital tools designed for lightning-fast, secure daily transactions.</p>

            <div class="rbc-ecosystem-grid">
                <div class="rbc-ecosystem-card">
                    <div class="rbc-ecosystem-header">
                        <h3 class="rbc-ecosystem-title"><i class="fas fa-fingerprint" style="color: var(--rbc-gold); margin-right: 8px;"></i> Biometric Authentication</h3>
                    </div>
                    <div class="rbc-ecosystem-body">
                        <p style="font-size: 0.9rem; color: var(--rbc-text-secondary);">Log in with Face ID or Touch ID for frictionless, ultra-secure access.</p>
                    </div>
                </div>

                <div class="rbc-ecosystem-card">
                    <div class="rbc-ecosystem-header">
                        <h3 class="rbc-ecosystem-title"><i class="fas fa-camera" style="color: var(--rbc-cyan); margin-right: 8px;"></i> Mobile Cheque Deposit</h3>
                    </div>
                    <div class="rbc-ecosystem-body">
                        <p style="font-size: 0.9rem; color: var(--rbc-text-secondary);">Snap a photo of the front and back of any cheque to deposit funds immediately.</p>
                    </div>
                </div>

                <div class="rbc-ecosystem-card">
                    <div class="rbc-ecosystem-header">
                        <h3 class="rbc-ecosystem-title"><i class="fas fa-lock" style="color: var(--rbc-teal); margin-right: 8px;"></i> Instant Card Lock</h3>
                    </div>
                    <div class="rbc-ecosystem-body">
                        <p style="font-size: 0.9rem; color: var(--rbc-text-secondary);">Misplaced your debit or credit card? Lock and unlock it instantly with a single tap.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
