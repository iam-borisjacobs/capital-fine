@extends('layouts.base')

@section('title', 'Today\'s Yield Benchmarks &amp; Foreign Exchange')

@section('content')
<!-- HERO -->
    <section class="fl-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff;">
        <div class="fl-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="fl-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-percent"></i> DAILY FINANCIAL BENCHMARKS
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Current Yield Rates &amp; Real-Time Foreign Exchange
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Review live lending benchmarks, property financing rates, structured yield reserves, and calculate real-time foreign exchange conversions.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="#fx-converter" class="fl-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Convert Currency <i class="fas fa-arrow-right"></i></a>
                    <a href={{ route('calculators') }} class="fl-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Property &amp; Financing Calculators</a>
                </div>
            </div>
        </div>
    </section>

    <!-- KEY RATES SUMMARY BOARD -->
    <section class="fl-section" style="background-color: var(--fl-bg);">
        <div class="fl-container">
            <h2 class="fl-section-title">Today's Benchmark Financing Rates</h2>
            <p class="fl-section-subtitle">Official benchmark rates updated daily in accordance with central monetary policy benchmarks.</p>

            <div class="fl-quick-tools-bar" style="grid-template-columns: repeat(4, 1fr); margin-bottom: 30px;">
                <div class="fl-ecosystem-card" style="padding: 20px; text-align: center;">
                    <div style="font-size: 0.82rem; font-weight: 700; color: var(--fl-text-muted); text-transform: uppercase;">Benchmark Prime</div>
                    <div style="font-size: 2.4rem; font-weight: 800; color: var(--fl-blue); margin: 6px 0;">5.95%</div>
                    <div style="font-size: 0.78rem; color: var(--fl-text-secondary);">Effective Today</div>
                </div>

                <div class="fl-ecosystem-card" style="padding: 20px; text-align: center;">
                    <div style="font-size: 0.82rem; font-weight: 700; color: var(--fl-text-muted); text-transform: uppercase;">5-Year Fixed Property</div>
                    <div style="font-size: 2.4rem; font-weight: 800; color: var(--fl-blue); margin: 6px 0;">4.89%</div>
                    <div style="font-size: 0.78rem; color: #16a34a; font-weight: 700;">Special Offer APR</div>
                </div>

                <div class="fl-ecosystem-card" style="padding: 20px; text-align: center;">
                    <div style="font-size: 0.82rem; font-weight: 700; color: var(--fl-text-muted); text-transform: uppercase;">1-Year GIC Yield</div>
                    <div style="font-size: 2.4rem; font-weight: 800; color: var(--fl-blue); margin: 6px 0;">4.75%</div>
                    <div style="font-size: 0.78rem; color: #16a34a; font-weight: 700;">Guaranteed Return</div>
                </div>

                <div class="fl-ecosystem-card" style="padding: 20px; text-align: center;">
                    <div style="font-size: 0.82rem; font-weight: 700; color: var(--fl-text-muted); text-transform: uppercase;">High-Yield Liquidity</div>
                    <div style="font-size: 2.4rem; font-weight: 800; color: var(--fl-blue); margin: 6px 0;">3.25%</div>
                    <div style="font-size: 0.78rem; color: var(--fl-text-secondary);">No Minimum Balance</div>
                </div>
            </div>

            <!-- MORTGAGE & GIC TABLE -->
            <div class="fl-table-wrapper" style="margin-bottom: 40px;">
                <table class="fl-table">
                    <thead>
                        <tr>
                            <th>Product / Term</th>
                            <th>Posted Rate</th>
                            <th>Special Discounted Rate</th>
                            <th>Qualifying APR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>5-Year Fixed Property Facility</strong></td>
                            <td>6.49%</td>
                            <td><strong style="color: var(--fl-blue);">4.89%</strong></td>
                            <td>4.92%</td>
                        </tr>
                        <tr>
                            <td><strong>3-Year Fixed Property Facility</strong></td>
                            <td>6.74%</td>
                            <td><strong style="color: var(--fl-blue);">5.14%</strong></td>
                            <td>5.18%</td>
                        </tr>
                        <tr>
                            <td><strong>5-Year Variable Facility (Prime - 0.50%)</strong></td>
                            <td>5.95%</td>
                            <td><strong style="color: var(--fl-blue);">5.45%</strong></td>
                            <td>5.48%</td>
                        </tr>
                        <tr>
                            <td><strong>1-Year Guaranteed Certificate</strong></td>
                            <td>4.25%</td>
                            <td><strong style="color: var(--fl-blue);">4.75%</strong></td>
                            <td>4.75%</td>
                        </tr>
                        <tr>
                            <td><strong>2-Year Guaranteed Certificate</strong></td>
                            <td>4.00%</td>
                            <td><strong style="color: var(--fl-blue);">4.50%</strong></td>
                            <td>4.50%</td>
                        </tr>
                        <tr>
                            <td><strong>5-Year Guaranteed Certificate</strong></td>
                            <td>3.75%</td>
                            <td><strong style="color: var(--fl-blue);">4.15%</strong></td>
                            <td>4.15%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- LIVE CURRENCY CONVERTER -->
    <section class="fl-section" id="fx-converter" style="background-color: #ffffff;">
        <div class="fl-container">
            <h2 class="fl-section-title">Foreign Exchange Currency Converter</h2>
            <p class="fl-section-subtitle">Real-time competitive foreign currency exchange rates for international wires, travel disbursements, and institutional FX settlements.</p>

            <div class="fl-calc-card">
                <div class="fl-calc-grid">
                    <div>
                        <div class="fl-form-group">
                            <label class="fl-form-label" for="fxAmount">You Convert ($)</label>
                            <input type="number" id="fxAmount" class="fl-input" value="1000" step="50">
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                            <div class="fl-form-group">
                                <label class="fl-form-label" for="fxFrom">From Currency</label>
                                <select id="fxFrom" class="fl-input">
                                    <option value="USD">USD - US Dollar</option>
                                    <option value="CAD" selected>CAD - Canadian Dollar</option>
                                    <option value="EUR">EUR - Euro</option>
                                    <option value="GBP">GBP - British Pound</option>
                                    <option value="AUD">AUD - Australian Dollar</option>
                                    <option value="JPY">JPY - Japanese Yen</option>
                                </select>
                            </div>

                            <div class="fl-form-group">
                                <label class="fl-form-label" for="fxTo">To Currency</label>
                                <select id="fxTo" class="fl-input">
                                    <option value="USD" selected>USD - US Dollar</option>
                                    <option value="CAD">CAD - Canadian Dollar</option>
                                    <option value="EUR">EUR - Euro</option>
                                    <option value="GBP">GBP - British Pound</option>
                                    <option value="AUD">AUD - Australian Dollar</option>
                                    <option value="JPY">JPY - Japanese Yen</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="fl-calc-result-box">
                        <span style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.05em; opacity: 0.85;">Converted Amount</span>
                        <div class="fl-calc-amount" id="fxResult">735.29 USD</div>
                        <p style="font-size: 0.85rem; opacity: 0.85; margin-top: 6px;">Zero hidden commissions. Indicative exchange rate.</p>
                        <div style="margin-top: 24px;">
                            <a href={{ route('login') }} class="fl-btn-signin" style="width: 100%; justify-content: center;">Execute International Wire Transfer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
