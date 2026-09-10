@extends('layouts.base')

@section('title', 'Terms &amp; Conditions - Electronic Access Agreement')

@section('content')
<!-- CONTENT -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container" style="max-width: 900px;">
            <div class="rbc-auth-card" style="margin: 0; max-width: 100%; padding: 40px;">
                <h1 style="font-size: 2.2rem; font-weight: 800; color: var(--rbc-navy); margin-bottom: 8px;">
                    Electronic Access Agreement &amp; Legal Terms
                </h1>
                <p style="font-size: 0.88rem; color: var(--rbc-text-muted); margin-bottom: 28px;">Last Updated: August 2026</p>

                <div style="color: var(--rbc-text-secondary); line-height: 1.7; font-size: 0.95rem; display: flex; flex-direction: column; gap: 20px;">
                    <div>
                        <h3 style="color: var(--rbc-navy); font-size: 1.2rem; margin-bottom: 6px;">1. Agreement to Terms</h3>
                        <p>By accessing or using {{ $settings->site_name ?? 'Flutran Global' }} Digital Portal, Mobile App, or any affiliated digital services, you agree to be bound by the terms and conditions outlined in this Electronic Access Agreement, as well as all applicable statutory regulations.</p>
                    </div>

                    <div>
                        <h3 style="color: var(--rbc-navy); font-size: 1.2rem; margin-bottom: 6px;">2. Client Security &amp; Confidentiality</h3>
                        <p>You agree to maintain the strict confidentiality of your Client Access ID, Username, Password, PIN, and two-factor authentication tokens. You must not disclose these credentials to unauthorized third parties.</p>
                    </div>

                    <div>
                        <h3 style="color: var(--rbc-navy); font-size: 1.2rem; margin-bottom: 6px;">3. Electronic Transactions &amp; Settlements</h3>
                        <p>You authorize {{ $settings->site_name ?? 'Flutran Global' }} to execute debit or credit settlements on your designated accounts in accordance with instructions received electronically. Instructions transmitted using valid security credentials are treated as having been authorized directly by you.</p>
                    </div>

                    <div>
                        <h3 style="color: var(--rbc-navy); font-size: 1.2rem; margin-bottom: 6px;">4. 100% Security Guarantee Conditions</h3>
                        <p>To qualify for the 100% Digital Security Guarantee, you must take reasonable steps to safeguard your credentials, keep your devices updated with current OS security patches, and notify our team immediately upon suspecting any unauthorized account activity.</p>
                    </div>

                    <div>
                        <h3 style="color: var(--rbc-navy); font-size: 1.2rem; margin-bottom: 6px;">5. Amendments &amp; Jurisdiction</h3>
                        <p>{{ $settings->site_name ?? 'Flutran Global' }} reserves the right to amend these terms by posting revised terms on this website. This agreement is governed by applicable financial regulatory and corporate governance frameworks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
