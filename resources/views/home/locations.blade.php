@extends('layouts.base')

@section('title', 'Client Advisory Centers & Global Access Points')

@section('content')
<!-- SEARCH & MAP HERO -->
    <section class="rbc-section" style="background: #ffffff; border-bottom: 1px solid var(--rbc-border);">
        <div class="rbc-container">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <h1 style="font-size: 2.4rem; font-weight: 800; color: var(--rbc-navy); margin-bottom: 12px;">
                    Client Advisory Centers &amp; Global Access
                </h1>
                <p style="font-size: 1.05rem; color: var(--rbc-text-secondary); margin-bottom: 24px;">
                    Connect with our dedicated capital advisors, private wealth consultants, and institutional treasury desks worldwide.
                </p>

                <form class="rbc-locator-form" style="margin-bottom: 20px;" onsubmit="event.preventDefault();">
                    <input type="text" class="rbc-input" placeholder="Enter city, country, postal code, or desk region">
                    <button type="submit" class="rbc-btn-primary" style="white-space: nowrap;">Search Network</button>
                </form>

                <!-- Filter Chips -->
                <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                    <span style="background: var(--rbc-bg); border: 1px solid var(--rbc-border); padding: 6px 14px; border-radius: var(--rbc-radius-full); font-size: 0.82rem; font-weight: 600; cursor: pointer; color: var(--rbc-navy);">
                        <i class="fas fa-clock" style="color: var(--rbc-blue);"></i> Active Trading Hours
                    </span>
                    <span style="background: var(--rbc-bg); border: 1px solid var(--rbc-border); padding: 6px 14px; border-radius: var(--rbc-radius-full); font-size: 0.82rem; font-weight: 600; cursor: pointer; color: var(--rbc-navy);">
                        <i class="fas fa-globe" style="color: var(--rbc-blue);"></i> Global Wire &amp; FX Desk
                    </span>
                    <span style="background: var(--rbc-bg); border: 1px solid var(--rbc-border); padding: 6px 14px; border-radius: var(--rbc-radius-full); font-size: 0.82rem; font-weight: 600; cursor: pointer; color: var(--rbc-navy);">
                        <i class="fas fa-vault" style="color: var(--rbc-blue);"></i> Institutional Custody
                    </span>
                    <span style="background: var(--rbc-bg); border: 1px solid var(--rbc-border); padding: 6px 14px; border-radius: var(--rbc-radius-full); font-size: 0.82rem; font-weight: 600; cursor: pointer; color: var(--rbc-navy);">
                        <i class="fas fa-user-tie" style="color: var(--rbc-blue);"></i> Senior Capital Advisors
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- ADVISORY HUBS GRID -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title" style="font-size: 1.6rem; text-align: left; margin-bottom: 24px;">Featured Global Advisory Centers</h2>

            <div class="rbc-ecosystem-grid">
                <!-- Hub 1 -->
                <div class="rbc-ecosystem-card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                        <div>
                            <span class="rbc-badge-pill" style="margin-bottom: 6px;">Global Treasury &amp; Executive Office</span>
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy);">Financial District Hub</h3>
                        </div>
                        <span style="color: #16a34a; font-weight: 700; font-size: 0.82rem;"><i class="fas fa-circle" style="font-size: 0.6rem;"></i> Open</span>
                    </div>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 12px;">
                        <i class="fas fa-location-dot" style="color: var(--rbc-blue);"></i> 200 Bay Street, South Tower, Financial District
                    </p>
                    <p style="font-size: 0.82rem; color: var(--rbc-text-muted); margin-bottom: 16px;">
                        Desk Routing: <strong>TOR-001</strong> | SWIFT/BIC: <strong>FLTRUS33</strong><br>
                        Mon - Fri: 8:30 AM - 5:30 PM EST
                    </p>
                    <div style="display: flex; gap: 10px; margin-top: auto;">
                        <a href="{{ route('contact') }}" class="rbc-btn-primary" style="flex: 1; justify-content: center; font-size: 0.85rem; padding: 8px 12px;">Book Consultation</a>
                        <a href="{{ route('contact') }}" class="rbc-btn-secondary" style="font-size: 0.85rem; padding: 8px 12px;"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Hub 2 -->
                <div class="rbc-ecosystem-card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                        <div>
                            <span class="rbc-badge-pill" style="margin-bottom: 6px; background: #e0f2fe; color: #0284c7; border-color: #bae6fd;">European Capital Center</span>
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy);">Canary Wharf Center</h3>
                        </div>
                        <span style="color: #16a34a; font-weight: 700; font-size: 0.82rem;"><i class="fas fa-circle" style="font-size: 0.6rem;"></i> Open</span>
                    </div>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 12px;">
                        <i class="fas fa-location-dot" style="color: var(--rbc-blue);"></i> One Canada Square, Level 28, London
                    </p>
                    <p style="font-size: 0.82rem; color: var(--rbc-text-muted); margin-bottom: 16px;">
                        Desk Routing: <strong>LON-044</strong> | SEPA: <strong>Active</strong><br>
                        Mon - Fri: 8:00 AM - 6:00 PM GMT
                    </p>
                    <div style="display: flex; gap: 10px; margin-top: auto;">
                        <a href="{{ route('contact') }}" class="rbc-btn-primary" style="flex: 1; justify-content: center; font-size: 0.85rem; padding: 8px 12px;">Book Consultation</a>
                        <a href="{{ route('contact') }}" class="rbc-btn-secondary" style="font-size: 0.85rem; padding: 8px 12px;"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Hub 3 -->
                <div class="rbc-ecosystem-card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                        <div>
                            <span class="rbc-badge-pill" style="margin-bottom: 6px; background: #fef3c7; color: #b45309; border-color: #fde68a;">Private Wealth Advisory</span>
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy);">Asia-Pacific Financial Hub</h3>
                        </div>
                        <span style="color: #16a34a; font-weight: 700; font-size: 0.82rem;"><i class="fas fa-circle" style="font-size: 0.6rem;"></i> Open</span>
                    </div>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 12px;">
                        <i class="fas fa-location-dot" style="color: var(--rbc-blue);"></i> Marina Bay Financial Centre, Tower 2, Singapore
                    </p>
                    <p style="font-size: 0.82rem; color: var(--rbc-text-muted); margin-bottom: 16px;">
                        Desk Routing: <strong>SGP-065</strong> | Regional Clearing: <strong>APAC</strong><br>
                        Mon - Fri: 9:00 AM - 6:00 PM SGT
                    </p>
                    <div style="display: flex; gap: 10px; margin-top: auto;">
                        <a href="{{ route('contact') }}" class="rbc-btn-primary" style="flex: 1; justify-content: center; font-size: 0.85rem; padding: 8px 12px;">Book Consultation</a>
                        <a href="{{ route('contact') }}" class="rbc-btn-secondary" style="font-size: 0.85rem; padding: 8px 12px;"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
