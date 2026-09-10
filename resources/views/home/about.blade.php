@extends('layouts.base')

@section('title', 'About Us - History, Leadership & Purpose')

@section('content')
    <!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff; position: relative; overflow: hidden;">
        <div style="position: absolute; right: 0; top: 0; bottom: 0; width: 50%; background-image: url('{{ asset('storage/app/public/photos/about_banner.jpg') }}'); background-size: cover; background-position: center; opacity: 0.35;"></div>
        <div class="rbc-container" style="position: relative; z-index: 2;">
            <div style="max-width: 720px; padding: 40px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-landmark"></i> INSTITUTIONAL HERITAGE
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Helping Clients Thrive and Global Communities Prosper
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    {{ $settings->site_name ?? 'Flutran Global' }} is a premier financial institution dedicated to empowering individuals, scale-ups, and corporate enterprises with world-class digital finance, private treasury, and capital management.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('register') }}" class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Join Our Global Network <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('contact') }}" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Contact Leadership Team</a>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="rbc-section-sm" style="background: #ffffff; border-bottom: 1px solid var(--rbc-border);">
        <div class="rbc-container">
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
                <div>
                    <div style="font-size: 2.6rem; font-weight: 800; color: var(--rbc-blue);">70K+</div>
                    <div style="font-size: 0.9rem; color: var(--rbc-text-secondary); font-weight: 600;">Active Global Clients</div>
                </div>
                <div>
                    <div style="font-size: 2.6rem; font-weight: 800; color: var(--rbc-blue);">120+</div>
                    <div style="font-size: 0.9rem; color: var(--rbc-text-secondary); font-weight: 600;">Countries Connected</div>
                </div>
                <div>
                    <div style="font-size: 2.6rem; font-weight: 800; color: var(--rbc-blue);">$1.2B+</div>
                    <div style="font-size: 0.9rem; color: var(--rbc-text-secondary); font-weight: 600;">Assets &amp; Settlements</div>
                </div>
                <div>
                    <div style="font-size: 2.6rem; font-weight: 800; color: var(--rbc-blue);">99.99%</div>
                    <div style="font-size: 0.9rem; color: var(--rbc-text-secondary); font-weight: 600;">Platform Uptime</div>
                </div>
            </div>
        </div>
    </section>

    <!-- LEADERSHIP & CORPORATE IMAGE SECTION -->
    <section class="rbc-section" style="background-color: var(--rbc-surface);">
        <div class="rbc-container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <span class="rbc-badge-pill"><i class="fas fa-users"></i> EXECUTIVE LEADERSHIP</span>
                    <h2 class="rbc-section-title" style="text-align: left; margin-bottom: 16px;">Governed by Integrity, Built on Innovation</h2>
                    <p style="color: var(--rbc-text-secondary); line-height: 1.6; margin-bottom: 20px;">
                        Our executive leadership team brings decades of global capital markets and financial technology expertise across North America, Europe, and Asia. We are dedicated to providing stable, secure, and transparent capital custody.
                    </p>
                    <ul class="rbc-feature-list" style="margin-bottom: 24px;">
                        <li class="rbc-feature-item"><span><strong>Client First:</strong> Every decision prioritizes the safety, growth, and autonomy of our clients.</span></li>
                        <li class="rbc-feature-item"><span><strong>Uncompromising Security:</strong> Multi-layered encryption, biometric audits, and stringent regulatory compliance.</span></li>
                        <li class="rbc-feature-item"><span><strong>Sustainable Prosperity:</strong> Supporting renewable infrastructure and ethical investments worldwide.</span></li>
                    </ul>
                    <a href="{{ route('careers') }}" class="rbc-btn-primary">Explore Careers at {{ $settings->site_name ?? 'Flutran Global' }}</a>
                </div>
                <div>
                    <div style="border-radius: 16px; overflow: hidden; box-shadow: var(--rbc-shadow-xl); border: 1px solid var(--rbc-border);">
                        <img src="{{ asset('storage/app/public/photos/about_banner.jpg') }}" alt="Executive Board" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION & VALUES -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Our Core Commitments</h2>
            <p class="rbc-section-subtitle">Guiding principles that define our relationship with clients, partners, and communities.</p>

            <div class="rbc-ecosystem-grid">
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.5rem; color: var(--rbc-blue); margin-bottom: 12px;"><i class="fas fa-handshake"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">Trust &amp; Transparency</h3>
                    <p style="font-size: 0.9rem; color: var(--rbc-text-secondary);">
                        We earn our clients’ loyalty by providing straightforward terms, clear reporting, and zero hidden penalties.
                    </p>
                </div>

                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.5rem; color: var(--rbc-blue); margin-bottom: 12px;"><i class="fas fa-shield-halved"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">100% Security Guarantee</h3>
                    <p style="font-size: 0.9rem; color: var(--rbc-text-secondary);">
                        Our state-of-the-art fraud detection network monitors unauthorized attempts 24 hours a day, 365 days a year.
                    </p>
                </div>

                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.5rem; color: var(--rbc-blue); margin-bottom: 12px;"><i class="fas fa-lightbulb"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">Fintech Innovation</h3>
                    <p style="font-size: 0.9rem; color: var(--rbc-text-secondary);">
                        Continuously pioneering modern digital solutions to simplify global settlements, structured financing, and portfolio management.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
