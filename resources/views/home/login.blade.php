@extends('layouts.base')

@section('title', 'Sign In to Client Financial Portal')

@section('content')
<div class="rbc-auth-card" style="width: 100%;">
            <div class="rbc-auth-header">
                <h1 style="font-size: 1.65rem; font-weight: 800; color: var(--rbc-navy); margin-bottom: 6px;">Sign In to Client Portal</h1>
                <p style="font-size: 0.88rem; color: var(--rbc-text-muted);">Private &amp; Enterprise Accounts</p>
            </div>

            <!-- Security Notice -->
            <div class="rbc-security-notice">
                <i class="fas fa-shield-halved" style="font-size: 1.2rem; color: var(--rbc-blue); margin-top: 2px;"></i>
                <div>
                    <strong>Security Check:</strong> Never enter your credentials on any site other than the official portal URL. Flutran Global will never ask for your PIN via SMS or email.
                </div>
            </div>

            <!-- Login Form -->
            <form action="index.html" method="get" onsubmit="event.preventDefault(); alert('Front-end simulation: Credentials received. In production, this posts to your auth route.'); window.location.href={{ route('home') }};">
                <div class="rbc-form-group">
                    <label class="rbc-form-label" for="clientCard">Client Access ID or Username</label>
                    <div style="position: relative;">
                        <input type="text" id="clientCard" class="rbc-input" placeholder="4519 •••• •••• ••••" required autocomplete="username" style="padding-left: 40px;">
                        <i class="fas fa-id-card" style="position: absolute; left: 14px; top: 13px; color: var(--rbc-text-muted);"></i>
                    </div>
                </div>

                <div class="rbc-form-group">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 6px;">
                        <label class="rbc-form-label" for="clientPassword" style="margin-bottom: 0;">Password</label>
                        <a href={{ route('password.request') }} style="font-size: 0.82rem; font-weight: 600;">Forgot Password?</a>
                    </div>
                    <div style="position: relative;">
                        <input type="password" id="clientPassword" class="rbc-input" placeholder="Enter your password" required autocomplete="current-password" style="padding-left: 40px;">
                        <i class="fas fa-key" style="position: absolute; left: 14px; top: 13px; color: var(--rbc-text-muted);"></i>
                    </div>
                </div>

                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 24px;">
                    <input type="checkbox" id="rememberMe" style="width: 16px; height: 16px; accent-color: var(--rbc-blue);">
                    <label for="rememberMe" style="font-size: 0.88rem; color: var(--rbc-text-secondary); cursor: pointer;">
                        Remember my Client Access ID
                    </label>
                </div>

                <button type="submit" class="rbc-btn-primary" style="width: 100%; justify-content: center; font-size: 1rem; padding: 13px;">
                    <i class="fas fa-lock"></i> Sign In to Account
                </button>
            </form>

            <div style="margin-top: 28px; padding-top: 20px; border-top: 1px solid var(--rbc-border); text-align: center;">
                <p style="font-size: 0.9rem; color: var(--rbc-text-secondary); margin-bottom: 12px;">New to Digital Portal?</p>
                <a href={{ route('register') }} class="rbc-btn-secondary" style="width: 100%; justify-content: center;">
                    Enroll / Activate Client Access
                </a>
            </div>
        </div>
@endsection
