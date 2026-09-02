@extends('layouts.base')

@section('title', 'Help Centre &amp; Frequently Asked Questions')

@section('content')
<!-- HERO SEARCH -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff; text-align: center;">
        <div class="rbc-container">
            <div style="max-width: 720px; margin: 0 auto; padding: 20px 0;">
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px;">
                    How Can We Assist You Today?
                </h1>
                <p style="font-size: 1.15rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 28px;">
                    Search our knowledge base for answers regarding online banking, cards, wire transfers, statements, and fraud protection.
                </p>

                <div class="rbc-help-search-box" style="background: #ffffff; box-shadow: var(--rbc-shadow-xl);">
                    <form class="rbc-help-search-field" style="width: 100%;" onsubmit="event.preventDefault();">
                        <input type="text" class="rbc-input" placeholder="Type your question (e.g. How to set up Autodeposit?)" style="padding: 12px 18px; font-size: 1rem;">
                        <button type="submit" class="rbc-btn-primary">Search FAQs</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQS ACCORDION SECTION -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container" style="max-width: 860px;">
            <h2 class="rbc-section-title">Popular Frequently Asked Questions</h2>
            <p class="rbc-section-subtitle">Quick answers to the most common client inquiries.</p>

            <div style="display: flex; flex-direction: column; gap: 12px;">
                <div class="rbc-category-accordion active">
                    <button class="rbc-accordion-trigger">
                        <span>How do I set up Interac e-Transfer Autodeposit?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="rbc-accordion-body">
                        Sign in to the RBC Mobile App or Online Banking. Navigate to <strong>Transfer &amp; Pay &gt; Interac e-Transfer Settings &gt; Autodeposit</strong>. Enter your email address and select the chequing or savings account you want funds deposited into. Any incoming transfers sent to that email will deposit automatically without needing security questions.
                    </div>
                </div>

                <div class="rbc-category-accordion">
                    <button class="rbc-accordion-trigger">
                        <span>What should I do if my debit or credit card is lost or stolen?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="rbc-accordion-body">
                        Immediately open the RBC Mobile App, tap on your card, and switch on <strong>Lock Card</strong>. This will instantly block any new transactions. Then call our 24/7 dedicated fraud department at <strong>1-800-769-2511</strong> or request a replacement card right through Online Banking.
                    </div>
                </div>

                <div class="rbc-category-accordion">
                    <button class="rbc-accordion-trigger">
                        <span>Where can I find my Branch Transit and Institution Number?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="rbc-accordion-body">
                        Royal Bank's financial institution number is <strong>003</strong>. Your 5-digit branch transit number is shown at the top of your monthly e-Statement or directly on the Account Details page in Online Banking. You can also download a pre-filled Direct Deposit Void Cheque PDF in seconds from your dashboard.
                    </div>
                </div>

                <div class="rbc-category-accordion">
                    <button class="rbc-accordion-trigger">
                        <span>How does the RBC 100% Digital Banking Security Guarantee work?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="rbc-accordion-body">
                        We guarantee 100% reimbursement for any direct losses resulting from unauthorized transactions conducted through RBC Online Banking or the RBC Mobile App, provided you have met your client responsibilities to protect your password and notify us promptly.
                    </div>
                </div>

                <div class="rbc-category-accordion">
                    <button class="rbc-accordion-trigger">
                        <span>How do I download tax receipts (T5, T3, RRSP contribution slips)?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="rbc-accordion-body">
                        Sign in to Online Banking and visit the <strong>Documents &amp; e-Statements</strong> tab. All official CRA tax tax slips are uploaded each year by February 28th and stored for 7 years in secure PDF format for easy download.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
