@extends('layouts.base')

@section('title', 'Mobile Platform & Web App - iOS & Android')

@section('content')

    <!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #002244 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-mobile-screen"></i> MOBILE PLATFORM
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Manage Capital Anytime, Anywhere with the Mobile Platform
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Take full control of your assets on the go. Clear digital instruments, execute instantaneous settlements, manage global smart cards, and monitor portfolio analytics.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('login') }}" class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Sign In to Client Portal <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('register') }}" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Create Account</a>
                </div>
            </div>
        </div>
    </section>

    <!-- APP FEATURES -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Institutional Control in Your Pocket</h2>
            <p class="rbc-section-subtitle">Powerful digital tools engineered for real-time asset management and high-volume transactions.</p>

            <div class="rbc-ecosystem-grid">
                <div class="rbc-ecosystem-card">
                    <div class="rbc-ecosystem-header">
                        <h3 class="rbc-ecosystem-title"><i class="fas fa-fingerprint" style="color: var(--rbc-gold); margin-right: 8px;"></i> Biometric Authentication</h3>
                    </div>
                    <div class="rbc-ecosystem-body">
                        <p style="font-size: 0.9rem; color: var(--rbc-text-secondary);">Authenticate with Face ID, Touch ID, or cryptographic hardware keys for secure access.</p>
                    </div>
                </div>

                <div class="rbc-ecosystem-card">
                    <div class="rbc-ecosystem-header">
                        <h3 class="rbc-ecosystem-title"><i class="fas fa-file-invoice-dollar" style="color: var(--rbc-cyan); margin-right: 8px;"></i> Digital Instrument Clearance</h3>
                    </div>
                    <div class="rbc-ecosystem-body">
                        <p style="font-size: 0.9rem; color: var(--rbc-text-secondary);">Capture and submit digital instruments and remittances for accelerated clearing directly from your mobile device.</p>
                    </div>
                </div>

                <div class="rbc-ecosystem-card">
                    <div class="rbc-ecosystem-header">
                        <h3 class="rbc-ecosystem-title"><i class="fas fa-shield-halved" style="color: var(--rbc-teal); margin-right: 8px;"></i> Global Smart Card Controls</h3>
                    </div>
                    <div class="rbc-ecosystem-body">
                        <p style="font-size: 0.9rem; color: var(--rbc-text-secondary);">Misplaced your smart card? Freeze and unfreeze spending limits instantly with a single tap.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
