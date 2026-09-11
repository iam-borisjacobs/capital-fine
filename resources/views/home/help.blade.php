@extends('layouts.base')

@section('title', 'Help Centre &amp; Frequently Asked Questions')

@section('content')
<!-- HERO SEARCH -->
    <section class="fl-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff; text-align: center;">
        <div class="fl-container">
            <div style="max-width: 720px; margin: 0 auto; padding: 20px 0;">
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px;">
                    How Can We Assist You Today?
                </h1>
                <p style="font-size: 1.15rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Search our knowledge base for answers regarding digital platform access, smart cards, international wires, statements, and fraud protection.
                </p>

                <div class="fl-help-search-box" style="background: #ffffff; box-shadow: var(--fl-shadow-xl);">
                    <form class="fl-help-search-field" style="width: 100%;" onsubmit="event.preventDefault();">
                        <input type="text" class="fl-input" placeholder="Type your question (e.g. How to set up Autodeposit?)" style="padding: 12px 18px; font-size: 1rem;">
                        <button type="submit" class="fl-btn-primary">Search FAQs</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQS ACCORDION SECTION -->
    <section class="fl-section" style="background-color: var(--fl-bg);">
        <div class="fl-container" style="max-width: 860px;">
            <h2 class="fl-section-title">Popular Frequently Asked Questions</h2>
            <p class="fl-section-subtitle">Quick answers to the most common client inquiries.</p>

            <div style="display: flex; flex-direction: column; gap: 12px;">
                <div class="fl-category-accordion active">
                    <button class="fl-accordion-trigger">
                        <span>How do I set up Electronic Autodeposit?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="fl-accordion-body">
                        Sign in to the Client Portal or Mobile App. Navigate to <strong>Transfer &amp; Pay &gt; Electronic Transfer Settings &gt; Autodeposit</strong>. Enter your email address and select the operating or reserve account you want funds deposited into. Any incoming transfers sent to that email will deposit automatically without needing security questions.
                    </div>
                </div>

                <div class="fl-category-accordion">
                    <button class="fl-accordion-trigger">
                        <span>What should I do if my global smart card is lost or misplaced?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="fl-accordion-body">
                        Immediately open the Mobile App, tap on your card, and switch on <strong>Lock Card</strong>. This will instantly block any new authorizations. Then contact our 24/7 dedicated security desk or request a replacement card right through the Client Portal.
                    </div>
                </div>

                <div class="fl-category-accordion">
                    <button class="fl-accordion-trigger">
                        <span>Where can I find my Routing and Institution Number?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="fl-accordion-body">
                        Our financial institution routing details are displayed at the top of your monthly e-Statement and directly on the Account Details page in the Client Portal. You can also download pre-filled Direct Deposit confirmation documents in seconds from your dashboard.
                    </div>
                </div>

                <div class="fl-category-accordion">
                    <button class="fl-accordion-trigger">
                        <span>How does the 100% Digital Security Guarantee work?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="fl-accordion-body">
                        We guarantee 100% reimbursement for any direct losses resulting from unauthorized transactions conducted through the Client Portal or Mobile App, provided you have met your client responsibilities to protect your credentials and notify us promptly.
                    </div>
                </div>

                <div class="fl-category-accordion">
                    <button class="fl-accordion-trigger">
                        <span>How do I download tax receipts and statements?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="fl-accordion-body">
                        Sign in to the Client Portal and visit the <strong>Documents &amp; e-Statements</strong> tab. All official tax summaries and statements are generated each year and stored for 7 years in secure PDF format for easy download.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
