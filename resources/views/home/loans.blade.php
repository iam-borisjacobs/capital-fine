@extends('layouts.base')

@section('title', 'Personal Loans, Lines of Credit & Auto Financing')

@section('content')
    <!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #002244 0%, #0051a5 100%); color: #ffffff; position: relative; overflow: hidden;">
        <div style="position: absolute; right: 0; top: 0; bottom: 0; width: 50%; background-image: url('{{ asset('storage/app/public/photos/loans_banner.jpg') }}'); background-size: cover; background-position: center; opacity: 0.35;"></div>
        <div class="rbc-container" style="position: relative; z-index: 2;">
            <div style="max-width: 720px; padding: 40px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-coins"></i> FLEXIBLE FINANCING
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Personal Loans &amp; Lines of Credit Tailored to Your Needs
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Whether consolidating higher-interest balances, financing a new electric vehicle, or funding major home renovations, enjoy competitive rates and custom repayment schedules.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Apply for a Loan Online <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('calculators') }}" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Calculate Monthly Payments</a>
                </div>
            </div>
        </div>
    </section>

    <!-- LOANS SPOTLIGHT -->
    <section class="rbc-section" style="background-color: var(--rbc-surface);">
        <div class="rbc-container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div style="border-radius: 16px; overflow: hidden; box-shadow: var(--rbc-shadow-xl); border: 1px solid var(--rbc-border);">
                    <img src="{{ asset('storage/app/public/photos/loans_banner.jpg') }}" alt="Loan Approval Handshake" style="width: 100%; height: auto; display: block;">
                </div>
                <div>
                    <span class="rbc-badge-pill"><i class="fas fa-check-double"></i> FAST DECISIONS</span>
                    <h2 class="rbc-section-title" style="text-align: left; margin-bottom: 16px;">Quick Approvals with Transparent Terms</h2>
                    <p style="color: var(--rbc-text-secondary); line-height: 1.6; margin-bottom: 20px;">
                        Borrow anywhere from $5,000 to $100,000+ with zero prepayment penalties. Pay down your loan faster anytime or set up automated bi-weekly or monthly payments.
                    </p>
                    <ul class="rbc-feature-list" style="margin-bottom: 24px;">
                        <li class="rbc-feature-item"><span><strong>Low Fixed Rates:</strong> Lock in guaranteed monthly payments from 6.99% APR.</span></li>
                        <li class="rbc-feature-item"><span><strong>Revolving Credit Lines:</strong> Only pay interest on the funds you actually use.</span></li>
                        <li class="rbc-feature-item"><span><strong>Zero Hidden Fees:</strong> No origination fees or early repayment charges.</span></li>
                    </ul>
                    <a href="{{ route('contact') }}" class="rbc-btn-primary">Speak to a Loan Advisor</a>
                </div>
            </div>
        </div>
    </section>
@endsection
