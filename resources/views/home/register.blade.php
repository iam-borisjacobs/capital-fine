@extends('layouts.base')

@section('title', 'Enroll &amp; Activate Digital Portal Access')

@section('content')
<div class="fl-auth-card">
            <div class="fl-auth-header">
                <h1 style="font-size: 1.65rem; font-weight: 800; color: var(--fl-navy); margin-bottom: 6px;">Enroll in Client Digital Portal</h1>
                <p style="font-size: 0.88rem; color: var(--fl-text-muted);">Activate 24/7 digital access to your accounts in 3 easy steps</p>
            </div>

            <!-- Enrollment Steps Indicator -->
            <div style="display: flex; justify-content: space-between; margin-bottom: 30px; position: relative;">
                <div style="text-align: center; flex: 1;">
                    <div style="width: 32px; height: 32px; background: var(--fl-blue); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 6px auto; font-weight: 700; font-size: 0.85rem;">1</div>
                    <span style="font-size: 0.75rem; font-weight: 700; color: var(--fl-blue);">Access Details</span>
                </div>
                <div style="text-align: center; flex: 1;">
                    <div style="width: 32px; height: 32px; background: #e2e8f0; color: var(--fl-text-muted); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 6px auto; font-weight: 700; font-size: 0.85rem;">2</div>
                    <span style="font-size: 0.75rem; font-weight: 600; color: var(--fl-text-muted);">Identification</span>
                </div>
                <div style="text-align: center; flex: 1;">
                    <div style="width: 32px; height: 32px; background: #e2e8f0; color: var(--fl-text-muted); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 6px auto; font-weight: 700; font-size: 0.85rem;">3</div>
                    <span style="font-size: 0.75rem; font-weight: 600; color: var(--fl-text-muted);">Password &amp; Security</span>
                </div>
            </div>

            <!-- Registration Form -->
            <form action="login.html" method="get" onsubmit="event.preventDefault(); alert('Front-end simulation: Account registration information validated. Ready for backend integration.'); window.location.href={{ route('login') }};">
                <div class="fl-form-group">
                    <label class="fl-form-label" for="regCard">Client ID or Global Smart Card Number</label>
                    <input type="text" id="regCard" class="fl-input" placeholder="16-digit card or client number" required>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="fl-form-group">
                        <label class="fl-form-label" for="regPostal">Postal Code</label>
                        <input type="text" id="regPostal" class="fl-input" placeholder="e.g. M5J 2J2" required>
                    </div>
                    <div class="fl-form-group">
                        <label class="fl-form-label" for="regBirth">Date of Birth</label>
                        <input type="date" id="regBirth" class="fl-input" required>
                    </div>
                </div>

                <div class="fl-form-group">
                    <label class="fl-form-label" for="regEmail">Email Address for Security Alerts</label>
                    <input type="email" id="regEmail" class="fl-input" placeholder="name@domain.com" required>
                </div>

                <div class="fl-form-group">
                    <label class="fl-form-label" for="regPassword">Create New Portal Password</label>
                    <input type="password" id="regPassword" class="fl-input" placeholder="Min 8 characters with numbers &amp; symbols" required>
                </div>

                <div style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 24px;">
                    <input type="checkbox" id="agreeTerms" required style="width: 16px; height: 16px; margin-top: 3px; accent-color: var(--fl-blue);">
                    <label for="agreeTerms" style="font-size: 0.85rem; color: var(--fl-text-secondary); line-height: 1.4;">
                        I agree to the <a href={{ route('terms') }} target="_blank" style="color: var(--fl-blue); font-weight: 600;">Electronic Access Agreement</a> and understand the <a href={{ route('security') }} target="_blank" style="color: var(--fl-blue); font-weight: 600;">100% Security Guarantee</a> responsibilities.
                    </label>
                </div>

                <button type="submit" class="fl-btn-primary" style="width: 100%; justify-content: center; font-size: 1rem; padding: 13px;">
                    Continue Activation <i class="fas fa-arrow-right"></i>
                </button>
            </form>

            <div style="margin-top: 24px; text-align: center;">
                <p style="font-size: 0.88rem; color: var(--fl-text-secondary);">
                    Already have active online access? <a href={{ route('login') }} style="font-weight: 700; color: var(--fl-blue);">Sign In here</a>
                </p>
            </div>
        </div>
@endsection
