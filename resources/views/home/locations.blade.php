@extends('layouts.base')

@section('title', 'Find a Branch or ATM Near You')

@section('content')
<!-- SEARCH & MAP HERO -->
    <section class="rbc-section" style="background: #ffffff; border-bottom: 1px solid var(--rbc-border);">
        <div class="rbc-container">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <h1 style="font-size: 2.4rem; font-weight: 800; color: var(--rbc-navy); margin-bottom: 12px;">
                    Branch &amp; ATM Locator
                </h1>
                <p style="font-size: 1.05rem; color: var(--rbc-text-secondary); margin-bottom: 24px;">
                    Find any of our 1,200+ full-service branches, 24-hour drive-thru ATMs, and commercial financial centres.
                </p>

                <form class="rbc-locator-form" style="margin-bottom: 20px;" onsubmit="event.preventDefault();">
                    <input type="text" class="rbc-input" placeholder="Enter city, postal code, street address, or transit #">
                    <button type="submit" class="rbc-btn-primary" style="white-space: nowrap;">Search Nearby</button>
                </form>

                <!-- Filter Chips -->
                <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                    <span style="background: var(--rbc-bg); border: 1px solid var(--rbc-border); padding: 6px 14px; border-radius: var(--rbc-radius-full); font-size: 0.82rem; font-weight: 600; cursor: pointer; color: var(--rbc-navy);">
                        <i class="fas fa-clock" style="color: var(--rbc-blue);"></i> Open Now
                    </span>
                    <span style="background: var(--rbc-bg); border: 1px solid var(--rbc-border); padding: 6px 14px; border-radius: var(--rbc-radius-full); font-size: 0.82rem; font-weight: 600; cursor: pointer; color: var(--rbc-navy);">
                        <i class="fas fa-money-bill-transfer" style="color: var(--rbc-blue);"></i> 24/7 ATM Access
                    </span>
                    <span style="background: var(--rbc-bg); border: 1px solid var(--rbc-border); padding: 6px 14px; border-radius: var(--rbc-radius-full); font-size: 0.82rem; font-weight: 600; cursor: pointer; color: var(--rbc-navy);">
                        <i class="fas fa-wheelchair" style="color: var(--rbc-blue);"></i> Wheelchair Accessible
                    </span>
                    <span style="background: var(--rbc-bg); border: 1px solid var(--rbc-border); padding: 6px 14px; border-radius: var(--rbc-radius-full); font-size: 0.82rem; font-weight: 600; cursor: pointer; color: var(--rbc-navy);">
                        <i class="fas fa-user-tie" style="color: var(--rbc-blue);"></i> Financial Advisors on Site
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- BRANCH LISTINGS GRID -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <h2 class="rbc-section-title" style="font-size: 1.6rem; text-align: left; margin-bottom: 24px;">Featured Downtown &amp; Regional Branches</h2>

            <div class="rbc-ecosystem-grid">
                <!-- Branch 1 -->
                <div class="rbc-ecosystem-card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                        <div>
                            <span class="rbc-badge-pill" style="margin-bottom: 6px;">Main Corporate Branch</span>
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy);">Royal Bank Plaza</h3>
                        </div>
                        <span style="color: #16a34a; font-weight: 700; font-size: 0.82rem;"><i class="fas fa-circle" style="font-size: 0.6rem;"></i> Open Now</span>
                    </div>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 12px;">
                        <i class="fas fa-location-dot" style="color: var(--rbc-blue);"></i> 200 Bay Street, South Tower, Financial District
                    </p>
                    <p style="font-size: 0.82rem; color: var(--rbc-text-muted); margin-bottom: 16px;">
                        Transit #: <strong>00002</strong> | Institution #: <strong>003</strong><br>
                        Mon - Fri: 9:00 AM - 5:00 PM | Sat: 9:30 AM - 3:00 PM
                    </p>
                    <div style="display: flex; gap: 10px; margin-top: auto;">
                        <a href={{ route('contact') }} class="rbc-btn-primary" style="flex: 1; justify-content: center; font-size: 0.85rem; padding: 8px 12px;">Book Appointment</a>
                        <a href="tel:18007692511" class="rbc-btn-secondary" style="font-size: 0.85rem; padding: 8px 12px;"><i class="fas fa-phone"></i></a>
                    </div>
                </div>

                <!-- Branch 2 -->
                <div class="rbc-ecosystem-card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                        <div>
                            <span class="rbc-badge-pill" style="margin-bottom: 6px; background: #e0f2fe; color: #0284c7; border-color: #bae6fd;">Drive-Thru ATM</span>
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy);">Commercial Centre North</h3>
                        </div>
                        <span style="color: #16a34a; font-weight: 700; font-size: 0.82rem;"><i class="fas fa-circle" style="font-size: 0.6rem;"></i> Open Now</span>
                    </div>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 12px;">
                        <i class="fas fa-location-dot" style="color: var(--rbc-blue);"></i> 5100 Yonge Street, Suite 100
                    </p>
                    <p style="font-size: 0.82rem; color: var(--rbc-text-muted); margin-bottom: 16px;">
                        Transit #: <strong>01422</strong> | Institution #: <strong>003</strong><br>
                        Mon - Fri: 9:00 AM - 6:00 PM | Sat: 9:00 AM - 4:00 PM
                    </p>
                    <div style="display: flex; gap: 10px; margin-top: auto;">
                        <a href={{ route('contact') }} class="rbc-btn-primary" style="flex: 1; justify-content: center; font-size: 0.85rem; padding: 8px 12px;">Book Appointment</a>
                        <a href="tel:18007692511" class="rbc-btn-secondary" style="font-size: 0.85rem; padding: 8px 12px;"><i class="fas fa-phone"></i></a>
                    </div>
                </div>

                <!-- Branch 3 -->
                <div class="rbc-ecosystem-card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                        <div>
                            <span class="rbc-badge-pill" style="margin-bottom: 6px; background: #fef3c7; color: #b45309; border-color: #fde68a;">Wealth Advisory Centre</span>
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--rbc-navy);">West End Financial Hub</h3>
                        </div>
                        <span style="color: #16a34a; font-weight: 700; font-size: 0.82rem;"><i class="fas fa-circle" style="font-size: 0.6rem;"></i> Open Now</span>
                    </div>
                    <p style="font-size: 0.88rem; color: var(--rbc-text-secondary); margin-bottom: 12px;">
                        <i class="fas fa-location-dot" style="color: var(--rbc-blue);"></i> 320 Bloor Street West, Annex
                    </p>
                    <p style="font-size: 0.82rem; color: var(--rbc-text-muted); margin-bottom: 16px;">
                        Transit #: <strong>03881</strong> | Institution #: <strong>003</strong><br>
                        Mon - Fri: 9:30 AM - 5:00 PM | Sat: 10:00 AM - 2:00 PM
                    </p>
                    <div style="display: flex; gap: 10px; margin-top: auto;">
                        <a href={{ route('contact') }} class="rbc-btn-primary" style="flex: 1; justify-content: center; font-size: 0.85rem; padding: 8px 12px;">Book Appointment</a>
                        <a href="tel:18007692511" class="rbc-btn-secondary" style="font-size: 0.85rem; padding: 8px 12px;"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
