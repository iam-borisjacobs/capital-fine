@extends('layouts.base')

@section('title', 'Smart Digital &amp; Mobile Platform')

@section('content')
<!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #00172e 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-mobile-screen"></i> SMART DIGITAL PLATFORM
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Manage Your Capital Anywhere, Anytime with the Digital Portal
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Execute global settlements in seconds, deposit instruments via mobile scan, and manage smart card security controls in real time.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href={{ route('login') }} class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Access Client Portal <i class="fas fa-arrow-right"></i></a>
                    <a href={{ route('register') }} class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Create Client Account</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES GRID -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Built for Performance and Total Security</h2>
            <p class="rbc-section-subtitle">Cutting-edge digital tools designed to make every settlement faster, safer, and completely seamless.</p>

            <div class="rbc-ecosystem-grid">
                <!-- Mobile Instrument Deposit -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.5rem; color: var(--rbc-blue); margin-bottom: 12px;"><i class="fas fa-camera"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">Digital Instrument Clearance</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 16px;">
                        Skip the waiting queue. Simply capture financial drafts and instruments with high-resolution mobile scan to clear capital directly into your operating balance 24/7.
                    </p>
                </div>

                <!-- Instant Card Lock -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.5rem; color: #dc2626; margin-bottom: 12px;"><i class="fas fa-lock"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">Instant Global Card Freeze</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 16px;">
                        Misplaced your smart card? Freeze it with a single tap in the portal to block all authorizations, and unfreeze instantly whenever you are ready.
                    </p>
                </div>

                <!-- Biometric & 2FA Security -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.5rem; color: #16a34a; margin-bottom: 12px;"><i class="fas fa-fingerprint"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">FaceID &amp; Biometric Keys</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 16px;">
                        Authenticate instantly with biometric encryption and automated multi-factor cryptographic verification for all high-value outbound transfers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
