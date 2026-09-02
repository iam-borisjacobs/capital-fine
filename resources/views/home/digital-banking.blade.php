@extends('layouts.base')

@section('title', 'Digital &amp; Mobile Banking App')

@section('content')
<!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #00172e 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-mobile-screen"></i> AWARD-WINNING MOBILE APP
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Bank Anywhere, Anytime with the RBC Mobile App
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Send money in seconds with Interac e-Transfer Autodeposit, deposit physical cheques by taking a photo, and lock a lost credit card instantly.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href={{ route('login') }} class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Sign In to Online Banking <i class="fas fa-arrow-right"></i></a>
                    <a href={{ route('register') }} class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Enroll in Digital Banking</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES GRID -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Built for Your Pocket and Peace of Mind</h2>
            <p class="rbc-section-subtitle">Cutting-edge digital tools designed to make every transaction faster, safer, and effortless.</p>

            <div class="rbc-ecosystem-grid">
                <!-- Mobile Cheque Deposit -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.5rem; color: var(--rbc-blue); margin-bottom: 12px;"><i class="fas fa-camera"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">Mobile Cheque Deposit</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 16px;">
                        Skip the branch lineup. Simply snap a photo of the front and back of any cheque to deposit funds directly into your account 24/7.
                    </p>
                </div>

                <!-- Instant Card Lock -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.5rem; color: #dc2626; margin-bottom: 12px;"><i class="fas fa-lock"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">Instant Card Lock</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 16px;">
                        Misplaced your debit or credit card? Lock it with a single tap in the app to prevent unauthorized charges, and unlock it instantly when found.
                    </p>
                </div>

                <!-- Biometric & 2FA Security -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.5rem; color: #16a34a; margin-bottom: 12px;"><i class="fas fa-fingerprint"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">FaceID &amp; Biometrics</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 16px;">
                        Sign in quickly and securely using your fingerprint or facial recognition with automated 2-factor push authentication for major transfers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
