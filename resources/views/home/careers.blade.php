@extends('layouts.base')

@section('title', 'Careers &amp; Life at Join Our Team')

@section('content')
<!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #00172e 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-users"></i> JOIN ROYAL BANK
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Build a Meaningful Career at a Global Leader
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Discover competitive compensation, industry-leading benefits, continuous learning stipends, and flexible hybrid working models.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="#job-search" class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Browse Open Positions <i class="fas fa-arrow-right"></i></a>
                    <a href={{ route('about') }} class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Our Workplace Culture</a>
                </div>
            </div>
        </div>
    </section>

    <!-- OPEN POSITIONS SECTION -->
    <section class="rbc-section" id="job-search" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Current Featured Opportunities</h2>
            <p class="rbc-section-subtitle">Explore careers across technology, quantitative finance, retail banking, and risk intelligence.</p>

            <div style="display: flex; flex-direction: column; gap: 16px; max-width: 900px; margin: 0 auto;">
                <!-- Job 1 -->
                <div class="rbc-ecosystem-card" style="padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 12px;">
                        <div>
                            <span class="rbc-badge-pill" style="margin-bottom: 6px; background: #e0f2fe; color: #0284c7; border-color: #bae6fd;">Technology &amp; Digital</span>
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy);">Senior Full Stack Cloud Engineer</h3>
                            <p style="font-size: 0.88rem; color: var(--rbc-text-muted); margin-top: 4px;">
                                <i class="fas fa-location-dot"></i> Toronto, ON (Hybrid) | Full-Time | Job ID: #TECH-9941
                            </p>
                        </div>
                        <a href={{ route('contact') }} class="rbc-btn-primary" style="font-size: 0.88rem; padding: 9px 20px;">Apply Now</a>
                    </div>
                </div>

                <!-- Job 2 -->
                <div class="rbc-ecosystem-card" style="padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 12px;">
                        <div>
                            <span class="rbc-badge-pill" style="margin-bottom: 6px; background: #fef3c7; color: #b45309; border-color: #fde68a;">Wealth Management</span>
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy);">Senior Private Client Wealth Advisor</h3>
                            <p style="font-size: 0.88rem; color: var(--rbc-text-muted); margin-top: 4px;">
                                <i class="fas fa-location-dot"></i> Vancouver, BC | Full-Time | Job ID: #WM-3310
                            </p>
                        </div>
                        <a href={{ route('contact') }} class="rbc-btn-primary" style="font-size: 0.88rem; padding: 9px 20px;">Apply Now</a>
                    </div>
                </div>

                <!-- Job 3 -->
                <div class="rbc-ecosystem-card" style="padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 12px;">
                        <div>
                            <span class="rbc-badge-pill" style="margin-bottom: 6px; background: #dcfce7; color: #166534; border-color: #bbf7d0;">Retail Banking</span>
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy);">Mortgage Development Specialist</h3>
                            <p style="font-size: 0.88rem; color: var(--rbc-text-muted); margin-top: 4px;">
                                <i class="fas fa-location-dot"></i> Montreal, QC | Full-Time | Job ID: #MORT-1142
                            </p>
                        </div>
                        <a href={{ route('contact') }} class="rbc-btn-primary" style="font-size: 0.88rem; padding: 9px 20px;">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
