@extends('layouts.base')

@section('title', 'Operating &amp; High-Yield Capital Accounts')

@section('content')
<!-- HERO -->
    <section class="fl-hero" style="background: linear-gradient(135deg, #002244 0%, #0051a5 100%); color: #ffffff;">
        <div class="fl-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="fl-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-wallet"></i> CAPITAL &amp; LIQUIDITY ACCOUNTS
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Operating &amp; High-Yield Accounts Built for Modern Capital Management
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    From seamless multi-currency settlements and digital transfers to premium yield reserves, select the liquidity tier optimized for your financial requirements.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href={{ route('register') }} class="fl-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Open an Account Online <i class="fas fa-arrow-right"></i></a>
                    <a href="#compare-accounts" class="fl-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Compare Accounts</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ACCOUNTS PRODUCT CARDS -->
    <section class="fl-section" style="background-color: var(--fl-bg);">
        <div class="fl-container">
            <h2 class="fl-section-title">Explore Our Core Operating &amp; Treasury Tiers</h2>
            <p class="fl-section-subtitle">Select the account structure with tailored settlement capabilities, institutional limits, and elite tier benefits.</p>

            <div class="fl-ecosystem-grid">
                <!-- Signature Capital Reserve -->
                <div class="fl-ecosystem-card">
                    <span class="fl-badge-pill" style="align-self: flex-start; margin-bottom: 12px;">Most Popular</span>
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--fl-navy); margin-bottom: 8px;">Signature Capital Reserve</h3>
                    <div style="font-size: 2.2rem; font-weight: 800; color: var(--fl-blue); margin-bottom: 16px;">
                        $16.95 <span style="font-size: 0.95rem; font-weight: 500; color: var(--fl-text-muted);">/ month (Waived with Asset Threshold)</span>
                    </div>
                    <ul class="fl-feature-list" style="margin-bottom: 24px;">
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> <strong>Unlimited</strong> Digital Settlements &amp; Electronic Transfers</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Up to $39 annual fee credit on eligible Global Cards</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> 3 complimentary global network disbursements per month</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Priority draft issuance and customized check services</li>
                    </ul>
                    <div style="margin-top: auto;">
                        <a href={{ route('register') }} class="fl-btn-primary" style="width: 100%; justify-content: center;">Open Signature Account</a>
                    </div>
                </div>

                <!-- Advantage Operating Account -->
                <div class="fl-ecosystem-card">
                    <span class="fl-badge-pill" style="align-self: flex-start; margin-bottom: 12px; background: #e0f2fe; color: #0284c7; border-color: #bae6fd;">Everyday Value</span>
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--fl-navy); margin-bottom: 8px;">Advantage Operating Account</h3>
                    <div style="font-size: 2.2rem; font-weight: 800; color: var(--fl-blue); margin-bottom: 16px;">
                        $11.95 <span style="font-size: 0.95rem; font-weight: 500; color: var(--fl-text-muted);">/ month (Free for Qualifying Tiers)</span>
                    </div>
                    <ul class="fl-feature-list" style="margin-bottom: 24px;">
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> <strong>Unlimited</strong> real-time domestic &amp; regional transfers</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> $0 monthly fee for emerging founders &amp; young professionals</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Instant mobile draft clearance anywhere in the world</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Earn rewards points on all card spend</li>
                    </ul>
                    <div style="margin-top: auto;">
                        <a href={{ route('register') }} class="fl-btn-primary" style="width: 100%; justify-content: center;">Open Advantage Account</a>
                    </div>
                </div>

                <!-- Apex Private Treasury Tier -->
                <div class="fl-ecosystem-card">
                    <span class="fl-badge-pill" style="align-self: flex-start; margin-bottom: 12px; background: #fef3c7; color: #b45309; border-color: #fde68a;">Premium Luxury</span>
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--fl-navy); margin-bottom: 8px;">Apex Private Treasury</h3>
                    <div style="font-size: 2.2rem; font-weight: 800; color: var(--fl-blue); margin-bottom: 16px;">
                        $30.00 <span style="font-size: 0.95rem; font-weight: 500; color: var(--fl-text-muted);">/ month</span>
                    </div>
                    <ul class="fl-feature-list" style="margin-bottom: 24px;">
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Unlimited high-value transactions worldwide</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Up to $120 annual fee credit on premium metal travel cards</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Unlimited complimentary global network liquidity access</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Dedicated private wealth manager &amp; safety vault privileges</li>
                    </ul>
                    <div style="margin-top: auto;">
                        <a href={{ route('register') }} class="fl-btn-primary" style="width: 100%; justify-content: center;">Open Private Treasury Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON TABLE -->
    <section class="fl-section" id="compare-accounts" style="background-color: #ffffff;">
        <div class="fl-container">
            <h2 class="fl-section-title">Compare All Operating &amp; Treasury Tiers</h2>
            <p class="fl-section-subtitle">A side-by-side breakdown of features, fees, and benefits to help you choose with confidence.</p>

            <div class="fl-table-wrapper">
                <table class="fl-table">
                    <thead>
                        <tr>
                            <th>Account Features</th>
                            <th>Standard Operating</th>
                            <th>Advantage Operating</th>
                            <th>Signature Capital</th>
                            <th>Apex Private Treasury</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Monthly Fee</strong></td>
                            <td>$4.00</td>
                            <td>$11.95</td>
                            <td>$16.95</td>
                            <td>$30.00</td>
                        </tr>
                        <tr>
                            <td><strong>Included Settlements</strong></td>
                            <td>12 per month</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                            <td>Unlimited Worldwide</td>
                        </tr>
                        <tr>
                            <td><strong>Electronic Transfers</strong></td>
                            <td>Free unlimited</td>
                            <td>Free unlimited</td>
                            <td>Free unlimited</td>
                            <td>Free unlimited</td>
                        </tr>
                        <tr>
                            <td><strong>Global Card Annual Fee Credit</strong></td>
                            <td>None</td>
                            <td>None</td>
                            <td>Up to $39/year</td>
                            <td>Up to $120/year</td>
                        </tr>
                        <tr>
                            <td><strong>Global Network Disbursements</strong></td>
                            <td>Standard fee</td>
                            <td>Standard fee</td>
                            <td>3 free / month</td>
                            <td>Free Worldwide</td>
                        </tr>
                        <tr>
                            <td><strong>Extended Liquidity Buffer</strong></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes (fee waived)</td>
                            <td>Yes (fee waived)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
