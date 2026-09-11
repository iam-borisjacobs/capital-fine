@extends('layouts.base')

@section('title', 'Accessibility & Inclusion Commitment')

@section('content')
<!-- CONTENT -->
    <section class="fl-section" style="background-color: var(--fl-bg);">
        <div class="fl-container" style="max-width: 900px;">
            <div class="fl-auth-card" style="margin: 0; max-width: 100%; padding: 40px;">
                <h1 style="font-size: 2.2rem; font-weight: 800; color: var(--fl-navy); margin-bottom: 8px;">
                    Commitment to Accessibility &amp; Universal Inclusion
                </h1>
                <p style="font-size: 0.88rem; color: var(--fl-text-muted); margin-bottom: 28px;">Accessibility &amp; Inclusion Compliance Framework</p>

                <div style="color: var(--fl-text-secondary); line-height: 1.7; font-size: 0.95rem; display: flex; flex-direction: column; gap: 20px;">
                    <div>
                        <h3 style="color: var(--fl-navy); font-size: 1.2rem; margin-bottom: 6px;">1. Web &amp; Digital Platform Standards</h3>
                        <p>{{ $settings->site_name ?? 'Flutran Global' }} digital properties are developed in alignment with the World Wide Web Consortium (W3C) Web Content Accessibility Guidelines (WCAG) 2.1 Level AA, including full keyboard navigation, high contrast ratios, and semantic screen-reader labeling.</p>
                    </div>

                    <div>
                        <h3 style="color: var(--fl-navy); font-size: 1.2rem; margin-bottom: 6px;">2. Assistive Advisory Hub Services</h3>
                        <p>All client advisory centers and consultation hubs feature step-free wheelchair access, automatic doors, assistive interactive consoles, and full accommodation for certified service animals.</p>
                    </div>

                    <div>
                        <h3 style="color: var(--fl-navy); font-size: 1.2rem; margin-bottom: 6px;">3. Alternate Document Formats</h3>
                        <p>Monthly account statements, investment prospectuses, and advisory materials are available upon request in large print, accessible electronic PDF, and audio formats. Specialized accessibility support is available through our client advisory desk.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
