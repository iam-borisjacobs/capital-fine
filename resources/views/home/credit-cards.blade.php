@extends('layouts.base')

@section('title', 'Global Cards - Smart Rewards, Travel Passes & Multi-Currency Solutions')

@section('content')
    <!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #00172e 0%, #003da5 100%); color: #ffffff; position: relative; overflow: hidden;">
        <div style="position: absolute; right: 0; top: 0; bottom: 0; width: 50%; background-image: url('{{ asset('storage/app/public/photos/credit_cards_banner.jpg') }}'); background-size: cover; background-position: center; opacity: 0.35;"></div>
        <div class="rbc-container" style="position: relative; z-index: 2;">
            <div style="max-width: 720px; padding: 40px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-credit-card"></i> GLOBAL CARD SUITE
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Find the Perfect Card for Global Travel, Rewards &amp; Low Rates
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Earn up to 70,000 welcome reward points, receive 2% value-back on everyday essentials, and enjoy worldwide VIP concierge privileges.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ route('register') }}" class="rbc-btn-signin" style="padding: 12px 28px; font-size: 1rem;">Apply Online in Minutes <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('rewards') }}" class="rbc-btn-secondary" style="border-color: #ffffff; color: #ffffff;">Explore Rewards Perks</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CARD CATALOG -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title">Featured Global Cards</h2>
            <p class="rbc-section-subtitle">Select the card that matches your lifestyle, international travel, or business enterprise needs.</p>

            <div class="rbc-ecosystem-grid">
                <!-- Card 1: Aurum Elite Metal Card -->
                <div class="rbc-ecosystem-card">
                    <div style="height: 180px; border-radius: 12px; overflow: hidden; margin-bottom: 18px; box-shadow: 0 8px 20px rgba(0,0,0,0.25);">
                        <img src="{{ asset('storage/app/public/photos/credit_cards_banner.jpg') }}" alt="Aurum Elite Metal Card" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>

                    <span class="rbc-badge-pill" style="align-self: flex-start; margin-bottom: 8px;">Top Travel &amp; Elite</span>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 4px;">Aurum Elite World Metal</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-muted); margin-bottom: 16px;">Annual Facility: <strong>$120</strong> | Rate: <strong>19.99%</strong></p>

                    <ul class="rbc-feature-list" style="margin-bottom: 24px;">
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Up to <strong>70,000 Welcome Points</strong> upon activation</li>
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Fly any airline with zero blackout dates or restrictions</li>
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Comprehensive worldwide travel &amp; asset protection coverage</li>
                    </ul>
                    <div style="margin-top: auto;">
                        <a href="{{ route('register') }}" class="rbc-btn-primary" style="width: 100%; justify-content: center;">Apply for Aurum Elite</a>
                    </div>
                </div>

                <!-- Card 2: Value Rewards World Card -->
                <div class="rbc-ecosystem-card">
                    <div style="height: 180px; background: linear-gradient(135deg, #15803d 0%, #166534 100%); border-radius: 12px; display: flex; flex-direction: column; justify-content: space-between; padding: 18px; color: #ffffff; margin-bottom: 18px; box-shadow: 0 8px 20px rgba(0,0,0,0.2);">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 800; font-size: 0.95rem; color: var(--rbc-gold);"><i class="fas fa-coins"></i> REWARDS PLUS</span>
                            <i class="fas fa-wifi"></i>
                        </div>
                        <div style="font-size: 1.15rem; font-weight: 700; letter-spacing: 2px;">•••• •••• •••• 3140</div>
                        <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.75rem;">
                            <span>GLOBAL PASS</span>
                            <span>MEMBER SINCE 2022</span>
                        </div>
                    </div>

                    <span class="rbc-badge-pill" style="align-self: flex-start; margin-bottom: 8px; background: #e0f2fe; color: #0369a1; border-color: #bae6fd;">Top Rewards</span>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 4px;">Apex Value Rewards Card</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-muted); margin-bottom: 16px;">Annual Fee: <strong>$0</strong> First Year | Rate: <strong>20.99%</strong></p>

                    <ul class="rbc-feature-list" style="margin-bottom: 24px;">
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Up to <strong>2% Unlimited Value-Back</strong> on groceries &amp; fuel</li>
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> 1% Rebate credit on all other eligible card transactions</li>
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Zero liability security protection for verified cardholders</li>
                    </ul>
                    <div style="margin-top: auto;">
                        <a href="{{ route('register') }}" class="rbc-btn-primary" style="width: 100%; justify-content: center;">Apply for Apex Rewards</a>
                    </div>
                </div>

                <!-- Card 3: Low Rate Preferred Card -->
                <div class="rbc-ecosystem-card">
                    <div style="height: 180px; background: linear-gradient(135deg, #0369a1 0%, #002244 100%); border-radius: 12px; display: flex; flex-direction: column; justify-content: space-between; padding: 18px; color: #ffffff; margin-bottom: 18px; box-shadow: 0 8px 20px rgba(0,0,0,0.2);">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 800; font-size: 0.95rem; color: #ffffff;"><i class="fas fa-percent"></i> LOW RATE ACCESS</span>
                            <i class="fas fa-wifi"></i>
                        </div>
                        <div style="font-size: 1.15rem; font-weight: 700; letter-spacing: 2px;">•••• •••• •••• 5591</div>
                        <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.75rem;">
                            <span>SMART ACCESS</span>
                            <span>VALUED CLIENT</span>
                        </div>
                    </div>

                    <span class="rbc-badge-pill" style="align-self: flex-start; margin-bottom: 8px; background: #fef3c7; color: #92400e; border-color: #fde68a;">Lowest APR</span>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 4px;">Low Rate Preferred Smart Card</h3>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-muted); margin-bottom: 16px;">Annual Fee: <strong>$20</strong> | Facility Rate: <strong>12.99%</strong></p>

                    <ul class="rbc-feature-list" style="margin-bottom: 24px;">
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Fixed <strong>12.99% Low Facility Rate</strong> on all purchases</li>
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Low balance transfer promotion rate available</li>
                        <li style="display: flex; gap: 10px; font-size: 0.88rem;"><i class="fas fa-check-circle" style="color: #16a34a; margin-top: 3px;"></i> Budgeting controls and transaction category alerts</li>
                    </ul>
                    <div style="margin-top: auto;">
                        <a href="{{ route('register') }}" class="rbc-btn-primary" style="width: 100%; justify-content: center;">Apply for Low Rate</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
