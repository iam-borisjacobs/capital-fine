@extends('layouts.base')

@section('title', 'Financial Calculators - Mortgage, Loan &amp; Savings')

@section('content')
<!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-calculator"></i> INTERACTIVE PLANNING TOOLS
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Plan Your Financial Future with Precision Calculators
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Model home purchases, loan repayment schedules, retirement compounding growth, and currency foreign exchange in real time.
                </p>
            </div>
        </div>
    </section>

    <!-- TABBED CALCULATOR SECTION -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <!-- CALCULATOR TABS -->
            <div style="display: flex; gap: 10px; justify-content: center; flex-wrap: wrap; margin-bottom: 30px;">
                <button class="rbc-btn-primary rbc-tab-btn active" data-tab-group="calc" data-tab-target="tab-mortgage" style="border-radius: var(--rbc-radius-full);">
                    <i class="fas fa-house"></i> Mortgage Calculator
                </button>
                <button class="rbc-btn-secondary rbc-tab-btn" data-tab-group="calc" data-tab-target="tab-loan" style="border-radius: var(--rbc-radius-full); background: #fff;">
                    <i class="fas fa-coins"></i> Loan Estimator
                </button>
                <button class="rbc-btn-secondary rbc-tab-btn" data-tab-group="calc" data-tab-target="tab-savings" style="border-radius: var(--rbc-radius-full); background: #fff;">
                    <i class="fas fa-piggy-bank"></i> Savings Growth
                </button>
            </div>

            <!-- TAB 1: MORTGAGE -->
            <div id="tab-mortgage" class="rbc-tab-content active" data-tab-group="calc">
                <div class="rbc-calc-card">
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 20px;">Mortgage Payment Calculator</h3>
                    <div class="rbc-calc-grid">
                        <div>
                            <div class="rbc-form-group">
                                <label class="rbc-form-label" for="mortgageHomePrice">Home Purchase Price ($)</label>
                                <input type="number" id="mortgageHomePrice" class="rbc-input" value="650000" step="5000">
                            </div>
                            <div class="rbc-form-group">
                                <label class="rbc-form-label" for="mortgageDownPayment">Down Payment ($)</label>
                                <input type="number" id="mortgageDownPayment" class="rbc-input" value="130000" step="5000">
                            </div>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                                <div class="rbc-form-group">
                                    <label class="rbc-form-label" for="mortgageRate">Interest Rate (%)</label>
                                    <input type="number" id="mortgageRate" class="rbc-input" value="4.89" step="0.05">
                                </div>
                                <div class="rbc-form-group">
                                    <label class="rbc-form-label" for="mortgageTerm">Amortization</label>
                                    <select id="mortgageTerm" class="rbc-input">
                                        <option value="15">15 Years</option>
                                        <option value="20">20 Years</option>
                                        <option value="25" selected>25 Years</option>
                                        <option value="30">30 Years</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="rbc-calc-result-box">
                            <span style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.05em; opacity: 0.85;">Estimated Monthly Payment</span>
                            <div class="rbc-calc-amount" id="mortgageMonthlyPayment">$2,987</div>
                            <div style="font-size: 0.9rem; opacity: 0.9; margin-top: 10px;">
                                Total Estimated Interest: <strong id="mortgageTotalInterest" style="color: var(--rbc-gold);">$376,100</strong>
                            </div>
                            <div style="margin-top: 24px;">
                                <a href={{ route('contact') }} class="rbc-btn-signin" style="width: 100%; justify-content: center;">Get Pre-Approved Online</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 2: LOAN -->
            <div id="tab-loan" class="rbc-tab-content" data-tab-group="calc" style="display: none;">
                <div class="rbc-calc-card">
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 20px;">Personal Loan Payment Estimator</h3>
                    <div class="rbc-calc-grid">
                        <div>
                            <div class="rbc-form-group">
                                <label class="rbc-form-label" for="calcLoanAmount">Loan Amount ($)</label>
                                <input type="number" id="calcLoanAmount" class="rbc-input" value="25000" step="1000">
                            </div>
                            <div class="rbc-form-group">
                                <label class="rbc-form-label" for="calcLoanRate">Interest Rate (%)</label>
                                <input type="number" id="calcLoanRate" class="rbc-input" value="6.5" step="0.1">
                            </div>
                            <div class="rbc-form-group">
                                <label class="rbc-form-label" for="calcLoanTerm">Loan Term</label>
                                <select id="calcLoanTerm" class="rbc-input">
                                    <option value="12">12 Months</option>
                                    <option value="24">24 Months</option>
                                    <option value="36" selected>36 Months</option>
                                    <option value="48">48 Months</option>
                                    <option value="60">60 Months</option>
                                </select>
                            </div>
                        </div>

                        <div class="rbc-calc-result-box">
                            <span style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.05em; opacity: 0.85;">Monthly Installment</span>
                            <div class="rbc-calc-amount" id="calcLoanResult">$766</div>
                            <p style="font-size: 0.85rem; opacity: 0.85; margin-top: 6px;">Zero prepayment penalties.</p>
                            <div style="margin-top: 24px;">
                                <a href={{ route('register') }} class="rbc-btn-signin" style="width: 100%; justify-content: center;">Apply for Loan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 3: SAVINGS GROWTH -->
            <div id="tab-savings" class="rbc-tab-content" data-tab-group="calc" style="display: none;">
                <div class="rbc-calc-card">
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 20px;">Compound Interest &amp; Savings Growth</h3>
                    <div class="rbc-calc-grid">
                        <div>
                            <div class="rbc-form-group">
                                <label class="rbc-form-label">Initial Deposit ($)</label>
                                <input type="number" class="rbc-input" value="10000" step="500">
                            </div>
                            <div class="rbc-form-group">
                                <label class="rbc-form-label">Monthly Contribution ($)</label>
                                <input type="number" class="rbc-input" value="500" step="50">
                            </div>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                                <div class="rbc-form-group">
                                    <label class="rbc-form-label">Estimated Annual Return (%)</label>
                                    <input type="number" class="rbc-input" value="5.5" step="0.1">
                                </div>
                                <div class="rbc-form-group">
                                    <label class="rbc-form-label">Investment Years</label>
                                    <input type="number" class="rbc-input" value="10" step="1">
                                </div>
                            </div>
                        </div>

                        <div class="rbc-calc-result-box">
                            <span style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.05em; opacity: 0.85;">Projected Future Wealth</span>
                            <div class="rbc-calc-amount">$95,340</div>
                            <p style="font-size: 0.85rem; opacity: 0.85; margin-top: 6px;">Total Contributed: $70,000 | Interest Earned: $25,340</p>
                            <div style="margin-top: 24px;">
                                <a href={{ route('investments') }} class="rbc-btn-signin" style="width: 100%; justify-content: center;">Start TFSA / RRSP Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
