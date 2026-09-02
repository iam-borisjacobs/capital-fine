@extends('layouts.base')

@section('title', 'Contact Us & Appointment Booking')

@section('content')
    <!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff; position: relative; overflow: hidden;">
        <div style="position: absolute; right: 0; top: 0; bottom: 0; width: 50%; background-image: url('{{ asset('storage/app/public/photos/contact_banner.jpg') }}'); background-size: cover; background-position: center; opacity: 0.35;"></div>
        <div class="rbc-container" style="position: relative; z-index: 2;">
            <div style="max-width: 720px; padding: 40px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-headset"></i> 24/7 DEDICATED SUPPORT
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    We are Here to Help You Navigate Every Financial Milestone
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Whether you have questions about everyday accounts, international wire transfers, or need private wealth consultation, our team is ready.
                </p>
            </div>
        </div>
    </section>

    <!-- CONTACT GRID -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                <!-- Left: Form -->
                <div class="rbc-ecosystem-card" style="padding: 32px;">
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 8px;">Send Us a Message</h3>
                    <p style="font-size: 0.9rem; color: var(--rbc-text-secondary); margin-bottom: 24px;">An accredited representative will respond within 24 business hours.</p>

                    @if(session('success'))
                        <div style="background: #dcfce7; color: #15803d; padding: 12px 16px; border-radius: 8px; margin-bottom: 20px; font-weight: 600;">
                            <i class="fas fa-check-circle"></i> {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('enquiry') }}" method="post">
                        @csrf
                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 0.85rem; font-weight: 600; color: var(--rbc-navy); margin-bottom: 6px;">Your Full Name *</label>
                            <input type="text" name="name" class="rbc-input" required placeholder="e.g. Alexander Vance">
                        </div>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                            <div>
                                <label style="display: block; font-size: 0.85rem; font-weight: 600; color: var(--rbc-navy); margin-bottom: 6px;">Email Address *</label>
                                <input type="email" name="email" class="rbc-input" required placeholder="alexander@example.com">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.85rem; font-weight: 600; color: var(--rbc-navy); margin-bottom: 6px;">Phone Number</label>
                                <input type="text" name="phone" class="rbc-input" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>
                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 0.85rem; font-weight: 600; color: var(--rbc-navy); margin-bottom: 6px;">Topic of Inquiry *</label>
                            <select name="subject" class="rbc-input">
                                <option value="Personal Accounts & Cards">Personal Accounts &amp; Cards</option>
                                <option value="Mortgages & Pre-approval">Mortgages &amp; Pre-approval</option>
                                <option value="Commercial & Business Banking">Commercial &amp; Business Banking</option>
                                <option value="Wealth Management & GICs">Wealth Management &amp; GICs</option>
                                <option value="International Wire Transfers">International Wire Transfers</option>
                            </select>
                        </div>
                        <div style="margin-bottom: 20px;">
                            <label style="display: block; font-size: 0.85rem; font-weight: 600; color: var(--rbc-navy); margin-bottom: 6px;">Message *</label>
                            <textarea name="message" class="rbc-input" rows="4" required placeholder="How can our financial specialists assist you today?"></textarea>
                        </div>
                        <button type="submit" class="rbc-btn-primary" style="width: 100%; justify-content: center; padding: 12px;">Submit Inquiry</button>
                    </form>
                </div>

                <!-- Right: Support Card with Advisor Photo -->
                <div>
                    <div style="border-radius: 16px; overflow: hidden; box-shadow: var(--rbc-shadow-xl); border: 1px solid var(--rbc-border); margin-bottom: 24px;">
                        <img src="{{ asset('storage/app/public/photos/contact_banner.jpg') }}" alt="Customer Support Specialist" style="width: 100%; height: 260px; object-fit: cover; display: block;">
                    </div>

                    <div class="rbc-ecosystem-card" style="padding: 28px;">
                        <h4 style="font-size: 1.2rem; font-weight: 700; color: var(--rbc-navy); margin-bottom: 16px;">Direct Channels</h4>
                        <div style="display: flex; flex-direction: column; gap: 14px;">
                            <div style="display: flex; gap: 14px; align-items: center;">
                                <div style="width: 44px; height: 44px; border-radius: 50%; background: #e0f2fe; color: var(--rbc-blue); display: flex; align-items: center; justify-content: center; font-size: 1.1rem;"><i class="fas fa-phone"></i></div>
                                <div>
                                    <div style="font-size: 0.8rem; color: var(--rbc-text-secondary);">Telephone Banking</div>
                                    <div style="font-weight: 700; color: var(--rbc-navy);">{{ $settings->contact_phone ?? '+1 (800) 769-2511' }}</div>
                                </div>
                            </div>
                            <div style="display: flex; gap: 14px; align-items: center;">
                                <div style="width: 44px; height: 44px; border-radius: 50%; background: #fef3c7; color: #92400e; display: flex; align-items: center; justify-content: center; font-size: 1.1rem;"><i class="fas fa-envelope"></i></div>
                                <div>
                                    <div style="font-size: 0.8rem; color: var(--rbc-text-secondary);">Support Email</div>
                                    <div style="font-weight: 700; color: var(--rbc-navy);">{{ $settings->contact_email ?? 'support@flutranglobal.com' }}</div>
                                </div>
                            </div>
                            <div style="display: flex; gap: 14px; align-items: center;">
                                <div style="width: 44px; height: 44px; border-radius: 50%; background: #dcfce7; color: #15803d; display: flex; align-items: center; justify-content: center; font-size: 1.1rem;"><i class="fas fa-location-dot"></i></div>
                                <div>
                                    <div style="font-size: 0.8rem; color: var(--rbc-text-secondary);">Global Headquarters</div>
                                    <div style="font-weight: 700; color: var(--rbc-navy);">{{ $settings->address ?? '200 Bay Street, Financial District' }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
