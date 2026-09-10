@extends('layouts.base')

@section('title', 'Media Newsroom &amp; Press Releases')

@section('content')
<!-- HERO -->
    <section class="rbc-hero" style="background: linear-gradient(135deg, #001f3f 0%, #0051a5 100%); color: #ffffff;">
        <div class="rbc-container">
            <div style="max-width: 720px; padding: 30px 0;">
                <span class="rbc-badge-pill" style="background: rgba(254, 209, 0, 0.2); color: #fed100; border-color: rgba(254, 209, 0, 0.4);">
                    <i class="fas fa-newspaper"></i> PRESS RELEASES &amp; STORIES
                </span>
                <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.15;">
                    Latest News, Innovation &amp; Economic Research
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9);">
                    Stay up to date with executive announcements, community initiatives, sustainable financing milestones, and macroeconomic reports.
                </p>
            </div>
        </div>
    </section>

    <!-- NEWS ARTICLES GRID -->
    <section class="rbc-section" style="background-color: var(--rbc-bg);">
        <div class="rbc-container">
            <div class="rbc-article-grid">
                <!-- Press 1 -->
                <div class="rbc-article-card">
                    <div class="rbc-article-thumb" style="background: linear-gradient(135deg, #002752, #0051a5); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div class="rbc-article-body">
                        <span class="rbc-article-tag">Press Release</span>
                        <h3 class="rbc-article-title">{{ $settings->site_name ?? 'Flutran Global' }} Reports Record Third Quarter 2026 Net Income</h3>
                        <p class="rbc-article-snippet">Strong performance driven by robust volume growth in Digital Capital, elevated client trading in Global Markets, and disciplined cost control.</p>
                    </div>
                </div>

                <!-- Press 2 -->
                <div class="rbc-article-card">
                    <div class="rbc-article-thumb" style="background: linear-gradient(135deg, #15803d, #166534); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <div class="rbc-article-body">
                        <span class="rbc-article-tag">Community &amp; Climate</span>
                        <h3 class="rbc-article-title">{{ $settings->site_name ?? 'Flutran Global' }} Commits Additional $100 Million to Green Clean-Tech Innovations</h3>
                        <p class="rbc-article-snippet">Expanding venture capital investments in carbon capture, hydrogen power, and grid modernization projects globally.</p>
                    </div>
                </div>

                <!-- Press 3 -->
                <div class="rbc-article-card">
                    <div class="rbc-article-thumb" style="background: linear-gradient(135deg, #334155, #1e293b); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="rbc-article-body">
                        <span class="rbc-article-tag">Recognition</span>
                        <h3 class="rbc-article-title">{{ $settings->site_name ?? 'Flutran Global' }} Named Best Financial Platform for Second Consecutive Year</h3>
                        <p class="rbc-article-snippet">Evaluation commended {{ $settings->site_name ?? 'Flutran Global' }} for digital platform client experience, wealth management advisory depth, and balance sheet resilience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEGA FOOTER -->
@endsection
