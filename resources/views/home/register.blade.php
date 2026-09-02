@extends('layouts.base')

@section('title', 'Enroll &amp; Activate Online Banking')

@section('content')
<div class="rbc-auth-card">
            <div class="rbc-auth-header">
                <h1 style="font-size: 1.65rem; font-weight: 800; color: var(--rbc-navy); margin-bottom: 6px;">Enroll in RBC Online Banking</h1>
                <p style="font-size: 0.88rem; color: var(--rbc-text-muted);">Activate 24/7 digital access to your accounts in 3 easy steps</p>
            </div>

            <!-- Enrollment Steps Indicator -->
            <div style="display: flex; justify-content: space-between; margin-bottom: 30px; position: relative;">
                <div style="text-align: center; flex: 1;">
                    <div style="width: 32px; height: 32px; background: var(--rbc-blue); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 6px auto; font-weight: 700; font-size: 0.85rem;">1</div>
                    <span style="font-size: 0.75rem; font-weight: 700; color: var(--rbc-blue);">Card Details</span>
                </div>
                <div style="text-align: center; flex: 1;">
                    <div style="width: 32px; height: 32px; background: #e2e8f0; color: var(--rbc-text-muted); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 6px auto; font-weight: 700; font-size: 0.85rem;">2</div>
                    <span style="font-size: 0.75rem; font-weight: 600; color: var(--rbc-text-muted);">Identification</span>
                </div>
                <div style="text-align: center; flex: 1;">
                    <div style="width: 32px; height: 32px; background: #e2e8f0; color: var(--rbc-text-muted); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 6px auto; font-weight: 700; font-size: 0.85rem;">3</div>
                    <span style="font-size: 0.75rem; font-weight: 600; color: var(--rbc-text-muted);">Password &amp; Security</span>
                </div>
            </div>

            <!-- Registration Form -->
            <form action="login.html" method="get" onsubmit="event.preventDefault(); alert('Front-end simulation: Account registration information validated. Ready for backend integration.'); window.location.href={{ route('login') }};">
                <div class="rbc-form-group">
                    <label class="rbc-form-label" for="regCard">RBC Client Card (Debit) or Credit Card Number</label>
                    <input type="text" id="regCard" class="rbc-input" placeholder="16-digit card number" required>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="rbc-form-group">
                        <label class="rbc-form-label" for="regPostal">Postal Code</label>
                        <input type="text" id="regPostal" class="rbc-input" placeholder="e.g. M5J 2J2" required>
                    </div>
                    <div class="rbc-form-group">
                        <label class="rbc-form-label" for="regBirth">Date of Birth</label>
                        <input type="date" id="regBirth" class="rbc-input" required>
                    </div>
                </div>

                <div class="rbc-form-group">
                    <label class="rbc-form-label" for="regEmail">Email Address for Security Alerts</label>
                    <input type="email" id="regEmail" class="rbc-input" placeholder="name@domain.com" required>
                </div>

                <div class="rbc-form-group">
                    <label class="rbc-form-label" for="regPassword">Create New Online Banking Password</label>
                    <input type="password" id="regPassword" class="rbc-input" placeholder="Min 8 characters with numbers &amp; symbols" required>
                </div>

                <div style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 24px;">
                    <input type="checkbox" id="agreeTerms" required style="width: 16px; height: 16px; margin-top: 3px; accent-color: var(--rbc-blue);">
                    <label for="agreeTerms" style="font-size: 0.85rem; color: var(--rbc-text-secondary); line-height: 1.4;">
                        I agree to the <a href={{ route('terms') }} target="_blank" style="color: var(--rbc-blue); font-weight: 600;">Electronic Access Agreement</a> and understand the <a href={{ route('security') }} target="_blank" style="color: var(--rbc-blue); font-weight: 600;">100% Security Guarantee</a> responsibilities.
                    </label>
                </div>

                <button type="submit" class="rbc-btn-primary" style="width: 100%; justify-content: center; font-size: 1rem; padding: 13px;">
                    Continue Activation <i class="fas fa-arrow-right"></i>
                </button>
            </form>

            <div style="margin-top: 24px; text-align: center;">
                <p style="font-size: 0.88rem; color: var(--rbc-text-secondary);">
                    Already have active online access? <a href={{ route('login') }} style="font-weight: 700; color: var(--rbc-blue);">Sign In here</a>
                </p>
            </div>
        </div>
@endsection
