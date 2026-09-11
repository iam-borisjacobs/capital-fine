@extends('layouts.base')

@section('title', 'Privacy Policy &amp; Data Protection')

@section('content')
<!-- CONTENT -->
    <section class="fl-section" style="background-color: var(--fl-bg);">
        <div class="fl-container" style="max-width: 900px;">
            <div class="fl-auth-card" style="margin: 0; max-width: 100%; padding: 40px;">
                <h1 style="font-size: 2.2rem; font-weight: 800; color: var(--fl-navy); margin-bottom: 8px;">
                    {{ $settings->site_name ?? 'Flutran Global' }} Global Client Privacy Policy
                </h1>
                <p style="font-size: 0.88rem; color: var(--fl-text-muted); margin-bottom: 28px;">Last Updated: August 2026</p>

                <div style="color: var(--fl-text-secondary); line-height: 1.7; font-size: 0.95rem; display: flex; flex-direction: column; gap: 20px;">
                    <div>
                        <h3 style="color: var(--fl-navy); font-size: 1.2rem; margin-bottom: 6px;">1. Our Commitment to Your Privacy</h3>
                        <p>At {{ $settings->site_name ?? 'Flutran Global' }}, safeguarding your personal and financial information is fundamental to the trust you place in us. We never sell your personal identifiable data to third-party marketing companies.</p>
                    </div>

                    <div>
                        <h3 style="color: var(--fl-navy); font-size: 1.2rem; margin-bottom: 6px;">2. Information We Collect</h3>
                        <p>We collect personal information necessary to verify your identity, process settlements, assess credit facility applications, comply with anti-money laundering (AML) legislation, and deliver tailored financial advisory services.</p>
                    </div>

                    <div>
                        <h3 style="color: var(--fl-navy); font-size: 1.2rem; margin-bottom: 6px;">3. Cookies &amp; Digital Tracking</h3>
                        <p>We use essential cookies to maintain secure sessions in the Client Portal and analytical cookies to improve platform navigation. You may adjust your browser cookie settings at any time without impacting core authentication security.</p>
                    </div>

                    <div>
                        <h3 style="color: var(--fl-navy); font-size: 1.2rem; margin-bottom: 6px;">4. Data Retention &amp; Security Standards</h3>
                        <p>All personal data is retained in accordance with statutory privacy requirements and international financial data privacy standards, stored in georedundant encrypted data centres.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
