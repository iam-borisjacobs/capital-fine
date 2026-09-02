@extends('layouts.base')

@section('title', 'Market Rates & Currency Exchange Charts')

@section('content')

    <!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #002244 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-chart-line"></i> FINANCIAL MARKET CHARTS
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Live Market Rates &amp; Global Foreign Exchange
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Monitor real-time benchmark interest rates, currency conversion trends, and fixed income yields updated continuously.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('rates') }}" class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">View All Rates <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('calculators') }}" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Financial Calculators</a>
                </div>
            </div>
        </div>
    </section>

    <!-- LIVE RATES TABLE -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Major Foreign Exchange Benchmarks</h2>
            <p class="rbc-section-subtitle">Real-time mid-market indicative conversion rates for primary trading pairs.</p>

            <div style="background: var(--rbc-surface); border-radius: 12px; border: 1px solid var(--rbc-border); overflow: hidden; box-shadow: var(--rbc-shadow-md); margin-bottom: 40px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead style="background: #f1f5f9; border-bottom: 2px solid var(--rbc-border);">
                        <tr>
                            <th style="padding: 16px 20px; font-weight: 700; color: var(--rbc-navy);">Currency Pair</th>
                            <th style="padding: 16px 20px; font-weight: 700; color: var(--rbc-navy);">Bank Buys</th>
                            <th style="padding: 16px 20px; font-weight: 700; color: var(--rbc-navy);">Bank Sells</th>
                            <th style="padding: 16px 20px; font-weight: 700; color: var(--rbc-navy);">24h Trend</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid var(--rbc-border);">
                            <td style="padding: 16px 20px; font-weight: 700;"><i class="fas fa-dollar-sign" style="color: #15803d; margin-right: 8px;"></i> USD / CAD</td>
                            <td style="padding: 16px 20px;">1.3645</td>
                            <td style="padding: 16px 20px;">1.3780</td>
                            <td style="padding: 16px 20px; color: #15803d;"><i class="fas fa-arrow-trend-up"></i> +0.18%</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--rbc-border);">
                            <td style="padding: 16px 20px; font-weight: 700;"><i class="fas fa-euro-sign" style="color: #0369a1; margin-right: 8px;"></i> EUR / USD</td>
                            <td style="padding: 16px 20px;">1.0820</td>
                            <td style="padding: 16px 20px;">1.0945</td>
                            <td style="padding: 16px 20px; color: #15803d;"><i class="fas fa-arrow-trend-up"></i> +0.05%</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--rbc-border);">
                            <td style="padding: 16px 20px; font-weight: 700;"><i class="fas fa-sterling-sign" style="color: #b91c1c; margin-right: 8px;"></i> GBP / USD</td>
                            <td style="padding: 16px 20px;">1.2850</td>
                            <td style="padding: 16px 20px;">1.2990</td>
                            <td style="padding: 16px 20px; color: #b91c1c;"><i class="fas fa-arrow-trend-down"></i> -0.12%</td>
                        </tr>
                        <tr>
                            <td style="padding: 16px 20px; font-weight: 700;"><i class="fas fa-yen-sign" style="color: #d97706; margin-right: 8px;"></i> USD / JPY</td>
                            <td style="padding: 16px 20px;">153.20</td>
                            <td style="padding: 16px 20px;">154.90</td>
                            <td style="padding: 16px 20px; color: #15803d;"><i class="fas fa-arrow-trend-up"></i> +0.31%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
