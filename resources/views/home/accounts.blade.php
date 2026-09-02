@extends('layouts.base')

@section('title', 'Chequing &amp; Savings Bank Accounts')

@section('content')
<!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #002244 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-wallet"></i> PERSONAL BANK ACCOUNTS
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Chequing &amp; Savings Accounts Designed for Your Everyday Life
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    From unlimited day-to-day debit and e-Transfers to high-interest savings, find the account that puts more back in your pocket.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href={{ route('register') }} class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Open an Account Online <i class="fas fa-arrow-right"></i></a>
                    <a href="#compare-accounts" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Compare Accounts</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ACCOUNTS PRODUCT CARDS -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Explore Our Popular Chequing Accounts</h2>
            <p class="rbc-section-subtitle">Pick the account with the right fee rebate program, transaction limits, and rewards for you.</p>

            <div class="rbc-ecosystem-grid">
                <!-- RBC Signature No Limit -->
                <div class="rbc-ecosystem-card">
                    <span class="rbc-badge-pill" style="align-self: flex-start; margin-bottom: 12px;">Most Popular</span>
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">RBC Signature No Limit</h3>
                    <div style="font-size: 2.2rem; font-weight: 800; color: var(--rbc-blue); margin-bottom: 16px;">
                        $16.95 <span style="font-size: 0.95rem; font-weight: 500; color: var(--rbc-text-muted);">/ month (or $0 with Value Program)</span>
                    </div>
                    <ul class="rbc-feature-list" style="margin-bottom: 24px;">
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> <strong>Unlimited</strong> Debit &amp; Interac e-Transfers</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Up to $39 annual fee rebate on eligible credit cards</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> 3 free non-RBC ATM withdrawals per month in Canada</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Free personalized cheque orders</li>
                    </ul>
                    <div style="margin-top: auto;">
                        <a href={{ route('register') }} class="rbc-btn-primary" style="width: 100%; justify-content: center;">Open Signature Account</a>
                    </div>
                </div>

                <!-- RBC Advantage Banking -->
                <div class="rbc-ecosystem-card">
                    <span class="rbc-badge-pill" style="align-self: flex-start; margin-bottom: 12px; background: #e0f2fe; color: #0284c7; border-color: #bae6fd;">Everyday Value</span>
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">RBC Advantage Banking</h3>
                    <div style="font-size: 2.2rem; font-weight: 800; color: var(--rbc-blue); margin-bottom: 16px;">
                        $11.95 <span style="font-size: 0.95rem; font-weight: 500; color: var(--rbc-text-muted);">/ month (Free for Students)</span>
                    </div>
                    <ul class="rbc-feature-list" style="margin-bottom: 24px;">
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> <strong>Unlimited</strong> free debits and e-Transfers in Canada</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> $0 monthly fee for full-time students</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Free mobile cheque deposits anywhere</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Earn Avion points on debit card spending</li>
                    </ul>
                    <div style="margin-top: auto;">
                        <a href={{ route('register') }} class="rbc-btn-primary" style="width: 100%; justify-content: center;">Open Advantage Account</a>
                    </div>
                </div>

                <!-- RBC VIP Banking -->
                <div class="rbc-ecosystem-card">
                    <span class="rbc-badge-pill" style="align-self: flex-start; margin-bottom: 12px; background: #fef3c7; color: #b45309; border-color: #fde68a;">Premium Luxury</span>
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">RBC VIP Banking</h3>
                    <div style="font-size: 2.2rem; font-weight: 800; color: var(--rbc-blue); margin-bottom: 16px;">
                        $30.00 <span style="font-size: 0.95rem; font-weight: 500; color: var(--rbc-text-muted);">/ month</span>
                    </div>
                    <ul class="rbc-feature-list" style="margin-bottom: 24px;">
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Unlimited transactions in Canada and worldwide</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Up to $120 annual fee rebate on premium travel cards</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Unlimited free worldwide ATM withdrawals</li>
                        <li style="display: flex; gap: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 4px;"></i> Free bank drafts &amp; safety deposit box discount</li>
                    </ul>
                    <div style="margin-top: auto;">
                        <a href={{ route('register') }} class="rbc-btn-primary" style="width: 100%; justify-content: center;">Open VIP Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON TABLE -->
    <section class="rbc-section" id="compare-accounts" style="background-color: #ffffff;">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Compare All Chequing Accounts</h2>
            <p class="rbc-section-subtitle">A side-by-side breakdown of features, fees, and benefits to help you choose with confidence.</p>

            <div class="rbc-table-wrapper">
                <table class="rbc-table">
                    <thead>
                        <tr>
                            <th>Account Features</th>
                            <th>RBC Day to Day</th>
                            <th>RBC Advantage</th>
                            <th>RBC Signature No Limit</th>
                            <th>RBC VIP Banking</th>
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
                            <td><strong>Included Debits</strong></td>
                            <td>12 per month</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                            <td>Unlimited Worldwide</td>
                        </tr>
                        <tr>
                            <td><strong>Interac e-Transfers</strong></td>
                            <td>Free unlimited</td>
                            <td>Free unlimited</td>
                            <td>Free unlimited</td>
                            <td>Free unlimited</td>
                        </tr>
                        <tr>
                            <td><strong>Credit Card Annual Fee Rebate</strong></td>
                            <td>None</td>
                            <td>None</td>
                            <td>Up to $39/year</td>
                            <td>Up to $120/year</td>
                        </tr>
                        <tr>
                            <td><strong>Non-RBC ATM Withdrawals</strong></td>
                            <td>Standard fee</td>
                            <td>Standard fee</td>
                            <td>3 free / month</td>
                            <td>Free Worldwide</td>
                        </tr>
                        <tr>
                            <td><strong>Overdraft Protection Available</strong></td>
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
