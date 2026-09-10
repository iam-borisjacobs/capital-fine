@extends('layouts.base')

@section('title', 'Apex Rewards &amp; Global Benefits Program')

@section('content')
<!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #00172e 0%, #1e293b 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-gem"></i> APEX ELITE REWARDS
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Transform Card Spend into Global Travel, Statement Credits, and Capital Perks
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Join thousands of premier clients enjoying member-exclusive partner privileges, travel redemptions with zero blackout dates, and flexible reward conversion.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href={{ route('credit-cards') }} class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Get an Apex Smart Card <i class="fas fa-arrow-right"></i></a>
                    <a href={{ route('login') }} class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Check Rewards Balance</a>
                </div>
            </div>
        </div>
    </section>

    <!-- WAYS TO REDEEM -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Three Ways to Redeem Your Apex Rewards</h2>
            <p class="rbc-section-subtitle">Your points never expire as long as your account remains open. Redeem how, where, and when you want.</p>

            <div class="rbc-ecosystem-grid">
                <!-- Travel Booking -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.5rem; color: var(--rbc-blue); margin-bottom: 12px;"><i class="fas fa-plane-departure"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">Worldwide Travel &amp; Concierge</h3>
                    <p style="font-size: 0.9rem; color: var(--rbc-text-secondary); margin-bottom: 16px;">
                        Book flights on any carrier with zero seat restrictions or blackout dates. Also redeem for 5-star hotels, luxury car rentals, cruises, and vacation packages.
                    </p>
                    <a href={{ route('login') }} class="rbc-link-arrow">Explore Travel Privileges <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Pay with Points -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.5rem; color: var(--rbc-gold-dark); margin-bottom: 12px;"><i class="fas fa-receipt"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">Statement Credits &amp; Offsets</h3>
                    <p style="font-size: 0.9rem; color: var(--rbc-text-secondary); margin-bottom: 16px;">
                        Convert points directly into statement credits to cover monthly card charges, financing payments, or allocate straight into your investment reserves.
                    </p>
                    <a href={{ route('login') }} class="rbc-link-arrow">Apply Statement Credits <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Gift Cards & Merchandise -->
                <div class="rbc-ecosystem-card">
                    <div style="font-size: 2.5rem; color: #16a34a; margin-bottom: 12px;"><i class="fas fa-gift"></i></div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">Curated Tech &amp; Vouchers</h3>
                    <p style="font-size: 0.9rem; color: var(--rbc-text-secondary); margin-bottom: 16px;">
                        Select from premium electronics, high-end lifestyle products, and digital vouchers across hundreds of world-renowned luxury brands.
                    </p>
                    <a href={{ route('login') }} class="rbc-link-arrow">Browse Catalog <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
