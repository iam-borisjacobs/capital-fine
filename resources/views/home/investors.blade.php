@extends('layouts.base')

@section('title', 'Investor Relations & Financial Performance')

@section('content')
<!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #00172e 0%, #003da5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-chart-line"></i> CAPITAL PERFORMANCE
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Financial Strength, Sustainable Growth &amp; Discipline
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    {{ $settings->site_name }} is a premier global financial institution with robust liquidity reserves, Tier 1 capital adequacy, and disciplined portfolio management.
                </p>
            </div>
        </div>
    </section>

    <!-- STOCK & EARNINGS STRIP -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <div class="rbc-ecosystem-grid">
                <!-- Capital Summary -->
                <div class="rbc-ecosystem-card">
                    <span class="rbc-badge-pill" style="align-self: flex-start; margin-bottom: 8px;">Institutional Reserves</span>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy);">Balance Sheet &amp; Reserves</h3>
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--rbc-blue); margin: 10px 0;">
                        $42.8B+ <span style="font-size: 0.95rem; color: #16a34a; font-weight: 700;">Assets Under Management</span>
                    </div>
                    <ul class="rbc-feature-list">
                        <li>Tier 1 Capital Ratio: <strong>16.8%</strong></li>
                        <li>Liquidity Coverage Ratio: <strong>148%</strong></li>
                        <li>Standard &amp; Poor's Rating: <strong>AA- Stable</strong></li>
                    </ul>
                </div>

                <!-- Quarterly Reports -->
                <div class="rbc-ecosystem-card">
                    <span class="rbc-badge-pill" style="align-self: flex-start; margin-bottom: 8px; background: #e0f2fe; color: #0284c7; border-color: #bae6fd;">Latest Disclosures</span>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 12px;">Quarterly Disclosures</h3>
                    <ul class="rbc-feature-list" style="margin-bottom: 20px;">
                        <li><a href="#" style="color: var(--rbc-blue); font-weight: 600;"><i class="fas fa-file-pdf"></i> Annual Global Solvency Review (PDF)</a></li>
                        <li><a href="#" style="color: var(--rbc-blue); font-weight: 600;"><i class="fas fa-file-pdf"></i> Q3 Supplementary Financial Disclosures</a></li>
                        <li><a href="#" style="color: var(--rbc-blue); font-weight: 600;"><i class="fas fa-podcast"></i> Executive Capital &amp; Treasury Briefing</a></li>
                    </ul>
                </div>

                <!-- Governance -->
                <div class="rbc-ecosystem-card">
                    <span class="rbc-badge-pill" style="align-self: flex-start; margin-bottom: 8px; background: #fef3c7; color: #b45309; border-color: #fde68a;">Corporate Board</span>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 12px;">Governance &amp; Oversight</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 16px;">
                        {{ $settings->site_name }} adheres to the highest international standards of corporate governance, fiduciary responsibility, and regulatory compliance.
                    </p>
                    <a href="{{ route('about') }}" class="rbc-link-arrow">View Leadership &amp; Governance <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
