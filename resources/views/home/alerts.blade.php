@extends('layouts.base')

@section('title', 'Security & Transaction Alerts')

@section('content')

    <!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #002244 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-bell"></i> REAL-TIME NOTIFICATIONS
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Stay Informed with Real-Time Banking &amp; Security Alerts
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Get notified immediately via SMS, push notification, or email when money moves in or out of your accounts, or if unusual activity is detected.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('login') }}" class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Manage Alert Settings <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('security') }}" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Security Guarantee</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ALERTS GRID -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Types of Alerts You Can Set Up</h2>
            <p class="rbc-section-subtitle">Customize notification preferences so you're always in control of your financial activity.</p>

            <div class="rbc-ecosystem-grid">
                <!-- Alert 1 -->
                <div class="rbc-ecosystem-card">
                    <div class="rbc-ecosystem-header">
                        <h3 class="rbc-ecosystem-title"><i class="fas fa-money-bill-transfer" style="color: var(--rbc-gold); margin-right: 8px;"></i> Large Transaction Alerts</h3>
                    </div>
                    <div class="rbc-ecosystem-body">
                        <p style="font-size: 0.9rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">
                            Receive a notification anytime a withdrawal, wire, or card purchase exceeds a threshold you customize.
                        </p>
                    </div>
                    <div class="rbc-ecosystem-footer">
                        <a href="{{ route('login') }}" class="rbc-link-arrow">Configure Limits <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Alert 2 -->
                <div class="rbc-ecosystem-card">
                    <div class="rbc-ecosystem-header">
                        <h3 class="rbc-ecosystem-title"><i class="fas fa-shield-virus" style="color: var(--rbc-cyan); margin-right: 8px;"></i> Suspicious Activity Warnings</h3>
                    </div>
                    <div class="rbc-ecosystem-body">
                        <p style="font-size: 0.9rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">
                            Instant automated alerts if a login attempt occurs from an unrecognized device or unusual geographic location.
                        </p>
                    </div>
                    <div class="rbc-ecosystem-footer">
                        <a href="{{ route('security') }}" class="rbc-link-arrow">Security Protocol <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Alert 3 -->
                <div class="rbc-ecosystem-card">
                    <div class="rbc-ecosystem-header">
                        <h3 class="rbc-ecosystem-title"><i class="fas fa-credit-card" style="color: var(--rbc-teal); margin-right: 8px;"></i> Balance &amp; Payment Reminders</h3>
                    </div>
                    <div class="rbc-ecosystem-body">
                        <p style="font-size: 0.9rem; color: var(--rbc-text-secondary); margin-bottom: 14px;">
                            Avoid overdraft fees and late penalties with automated low balance warnings and credit card payment due reminders.
                        </p>
                    </div>
                    <div class="rbc-ecosystem-footer">
                        <a href="{{ route('login') }}" class="rbc-link-arrow">Set Reminders <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
