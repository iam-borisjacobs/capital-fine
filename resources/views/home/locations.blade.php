@extends('layouts.base')

@section('title', 'Client Advisory Centers & Global Access Points')

@section('content')
<!-- SEARCH & MAP HERO -->
    <section class="fl-section" style="background: #ffffff; border-bottom: 1px solid var(--fl-border);">
        <div class="fl-container">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <h1 style="font-size: 2.4rem; font-weight: 800; color: var(--fl-navy); margin-bottom: 12px;">
                    Client Advisory Centers &amp; Global Access
                </h1>
                <p style="font-size: 1.05rem; color: var(--fl-text-secondary); margin-bottom: 24px;">
                    Connect with our dedicated capital advisors, private wealth consultants, and institutional treasury desks worldwide.
                </p>

                <form class="fl-locator-form" style="margin-bottom: 20px;" onsubmit="event.preventDefault();">
                    <input type="text" class="fl-input" placeholder="Enter city, country, postal code, or desk region">
                    <button type="submit" class="fl-btn-primary" style="white-space: nowrap;">Search Network</button>
                </form>

                <!-- Filter Chips -->
                <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                    <span style="background: var(--fl-bg); border: 1px solid var(--fl-border); padding: 6px 14px; border-radius: var(--fl-radius-full); font-size: 0.82rem; font-weight: 600; cursor: pointer; color: var(--fl-navy);">
                        <i class="fas fa-clock" style="color: var(--fl-blue);"></i> Active Trading Hours
                    </span>
                    <span style="background: var(--fl-bg); border: 1px solid var(--fl-border); padding: 6px 14px; border-radius: var(--fl-radius-full); font-size: 0.82rem; font-weight: 600; cursor: pointer; color: var(--fl-navy);">
                        <i class="fas fa-globe" style="color: var(--fl-blue);"></i> Global Wire &amp; FX Desk
                    </span>
                    <span style="background: var(--fl-bg); border: 1px solid var(--fl-border); padding: 6px 14px; border-radius: var(--fl-radius-full); font-size: 0.82rem; font-weight: 600; cursor: pointer; color: var(--fl-navy);">
                        <i class="fas fa-vault" style="color: var(--fl-blue);"></i> Institutional Custody
                    </span>
                    <span style="background: var(--fl-bg); border: 1px solid var(--fl-border); padding: 6px 14px; border-radius: var(--fl-radius-full); font-size: 0.82rem; font-weight: 600; cursor: pointer; color: var(--fl-navy);">
                        <i class="fas fa-user-tie" style="color: var(--fl-blue);"></i> Senior Capital Advisors
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- ADVISORY HUBS GRID -->
    <section class="fl-section" style="background-color: var(--fl-bg);">
        <div class="fl-container">
            <h2 class="fl-section-title" style="font-size: 1.6rem; text-align: left; margin-bottom: 24px;">Featured Global Advisory Centers</h2>

            <div class="fl-ecosystem-grid">
                <!-- Hub 1 -->
                <div class="fl-ecosystem-card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                        <div>
                            <span class="fl-badge-pill" style="margin-bottom: 6px;">Global Treasury &amp; Executive Office</span>
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--fl-navy);">Financial District Hub</h3>
                        </div>
                        <span style="color: #16a34a; font-weight: 700; font-size: 0.82rem;"><i class="fas fa-circle" style="font-size: 0.6rem;"></i> Open</span>
                    </div>
                    <p style="font-size: 0.88rem; color: var(--fl-text-secondary); margin-bottom: 12px;">
                        <i class="fas fa-location-dot" style="color: var(--fl-blue);"></i> 100 Financial Boulevard, Suite 500
                    </p>
                    <p style="font-size: 0.82rem; color: var(--fl-text-muted); margin-bottom: 16px;">
                        Desk Routing: <strong>TOR-001</strong> | SWIFT/BIC: <strong>FLTRUS33</strong><br>
                        Mon - Fri: 8:30 AM - 5:30 PM EST
                    </p>
                    <div style="display: flex; gap: 10px; margin-top: auto;">
                        <a href="{{ route('contact') }}" class="fl-btn-primary" style="flex: 1; justify-content: center; font-size: 0.85rem; padding: 8px 12px;">Book Consultation</a>
                        <a href="{{ route('contact') }}" class="fl-btn-secondary" style="font-size: 0.85rem; padding: 8px 12px;"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Hub 2 -->
                <div class="fl-ecosystem-card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                        <div>
                            <span class="fl-badge-pill" style="margin-bottom: 6px; background: #e0f2fe; color: #0284c7; border-color: #bae6fd;">European Capital Center</span>
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--fl-navy);">Canary Wharf Center</h3>
                        </div>
                        <span style="color: #16a34a; font-weight: 700; font-size: 0.82rem;"><i class="fas fa-circle" style="font-size: 0.6rem;"></i> Open</span>
                    </div>
                    <p style="font-size: 0.88rem; color: var(--fl-text-secondary); margin-bottom: 12px;">
                        <i class="fas fa-location-dot" style="color: var(--fl-blue);"></i> One Canada Square, Level 28, London
                    </p>
                    <p style="font-size: 0.82rem; color: var(--fl-text-muted); margin-bottom: 16px;">
                        Desk Routing: <strong>LON-044</strong> | SEPA: <strong>Active</strong><br>
                        Mon - Fri: 8:00 AM - 6:00 PM GMT
                    </p>
                    <div style="display: flex; gap: 10px; margin-top: auto;">
                        <a href="{{ route('contact') }}" class="fl-btn-primary" style="flex: 1; justify-content: center; font-size: 0.85rem; padding: 8px 12px;">Book Consultation</a>
                        <a href="{{ route('contact') }}" class="fl-btn-secondary" style="font-size: 0.85rem; padding: 8px 12px;"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Hub 3 -->
                <div class="fl-ecosystem-card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                        <div>
                            <span class="fl-badge-pill" style="margin-bottom: 6px; background: #fef3c7; color: #b45309; border-color: #fde68a;">Private Wealth Advisory</span>
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--fl-navy);">Asia-Pacific Financial Hub</h3>
                        </div>
                        <span style="color: #16a34a; font-weight: 700; font-size: 0.82rem;"><i class="fas fa-circle" style="font-size: 0.6rem;"></i> Open</span>
                    </div>
                    <p style="font-size: 0.88rem; color: var(--fl-text-secondary); margin-bottom: 12px;">
                        <i class="fas fa-location-dot" style="color: var(--fl-blue);"></i> Marina Bay Financial Centre, Tower 2, Singapore
                    </p>
                    <p style="font-size: 0.82rem; color: var(--fl-text-muted); margin-bottom: 16px;">
                        Desk Routing: <strong>SGP-065</strong> | Regional Clearing: <strong>APAC</strong><br>
                        Mon - Fri: 9:00 AM - 6:00 PM SGT
                    </p>
                    <div style="display: flex; gap: 10px; margin-top: auto;">
                        <a href="{{ route('contact') }}" class="fl-btn-primary" style="flex: 1; justify-content: center; font-size: 0.85rem; padding: 8px 12px;">Book Consultation</a>
                        <a href="{{ route('contact') }}" class="fl-btn-secondary" style="font-size: 0.85rem; padding: 8px 12px;"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
