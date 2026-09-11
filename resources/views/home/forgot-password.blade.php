@extends('layouts.base')

@section('title', 'Reset Password &amp; Recover Access')

@section('content')
<div class="fl-auth-card" style="width: 100%;">
            <div class="fl-auth-header">
                <h1 style="font-size: 1.65rem; font-weight: 800; color: var(--fl-navy); margin-bottom: 6px;">Reset Your Password</h1>
                <p style="font-size: 0.88rem; color: var(--fl-text-muted);">Verify your identity to create a new password or recover your username</p>
            </div>

            <!-- Recovery Notice -->
            <div class="fl-security-notice">
                <i class="fas fa-shield-halved" style="font-size: 1.2rem; color: var(--fl-blue); margin-top: 2px;"></i>
                <div>
                    We will send a one-time verification code (OTP) to the mobile phone number or email registered on your profile.
                </div>
            </div>

            <!-- Recovery Form -->
            <form action="login.html" method="get" onsubmit="event.preventDefault(); alert('Front-end simulation: A one-time verification code has been dispatched. In production, this proceeds to OTP entry.'); window.location.href={{ route('login') }};">
                <div class="fl-form-group">
                    <label class="fl-form-label" for="recCard">Client Card Number or Username</label>
                    <input type="text" id="recCard" class="fl-input" placeholder="Enter your 16-digit card or username" required>
                </div>

                <div class="fl-form-group">
                    <label class="fl-form-label" for="recEmail">Registered Email Address or Phone</label>
                    <input type="text" id="recEmail" class="fl-input" placeholder="Enter registered email or mobile #" required>
                </div>

                <button type="submit" class="fl-btn-primary" style="width: 100%; justify-content: center; font-size: 1rem; padding: 13px; margin-top: 8px;">
                    Send Verification Code <i class="fas fa-paper-plane"></i>
                </button>
            </form>

            <div style="margin-top: 24px; text-align: center; border-top: 1px solid var(--fl-border); padding-top: 18px;">
                <a href={{ route('login') }} style="font-weight: 700; color: var(--fl-blue); font-size: 0.9rem;">
                    <i class="fas fa-arrow-left"></i> Return to Sign In
                </a>
            </div>
        </div>
@endsection
