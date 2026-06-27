@push('styles')
<link rel='stylesheet' id='elementor-post-229-css' href='{{ asset('wp-content/uploads/elementor/css/post-229ee66.css') }}' media='all'/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<style>
    :root {
        --brand:       #B01E16;
        --brand-dark:  #8C1510;
        --brand-light: #FEF2F1;
        --ink:         #1A1A2E;
        --muted:       #64748B;
    }

    /* ── HERO ── */
    .tn-hero {
        position: relative;
        min-height: 52vh;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    /* Ken-Burns slideshow */
    .tn-slides { position: absolute; inset: 0; z-index: 0; }
    .tn-slide {
        position: absolute; inset: 0;
        background-size: cover;
        background-position: center;
        opacity: 0;
        transform: scale(1.07);
        animation: kbFade 21s infinite ease-in-out;
    }
    .tn-slide:nth-child(1) { animation-delay: 0s; }
    .tn-slide:nth-child(2) { animation-delay: 7s; }
    .tn-slide:nth-child(3) { animation-delay: 14s; }
    @keyframes kbFade {
        0%   { opacity: 0; transform: scale(1.07); }
        7%   { opacity: 1; transform: scale(1); }
        30%  { opacity: 1; transform: scale(1); }
        38%  { opacity: 0; transform: scale(1.07); }
        100% { opacity: 0; transform: scale(1.07); }
    }

    /* Layered overlay: dark vignette + red diagonal accent */
    .tn-overlay {
        position: absolute; inset: 0; z-index: 1;
        background:
            linear-gradient(to bottom, rgba(10,10,22,.30) 0%, rgba(10,10,22,.82) 100%),
            radial-gradient(ellipse at 75% 0%, rgba(176,30,22,.38) 0%, transparent 55%);
    }

    /* Diagonal bottom cut */
    .tn-hero::after {
        content: '';
        position: absolute;
        bottom: -2px; left: 0; right: 0;
        height: 90px;
        background: #fff;
        clip-path: polygon(0 100%, 100% 0, 100% 100%);
        z-index: 3;
    }

    /* Hero content */
    .tn-content {
        position: relative; z-index: 2;
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 72px 24px 88px;
    }

    /* Live badge */
    .tn-badge {
        display: inline-flex; align-items: center; gap: 9px;
        background: rgba(255,255,255,.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,.22);
        border-radius: 100px;
        padding: 7px 20px;
        font-size: .72rem;
        font-weight: 700;
        color: #fff;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 28px;
        animation: fadeDown .8s ease both;
    }
    .tn-dot {
        width: 9px; height: 9px;
        border-radius: 50%;
        background: #4ADE80;
        box-shadow: 0 0 0 3px rgba(74,222,128,.3);
        animation: livePulse 2s infinite;
    }
    @keyframes livePulse {
        0%, 100% { box-shadow: 0 0 0 3px rgba(74,222,128,.3); }
        50%       { box-shadow: 0 0 0 8px rgba(74,222,128,.08); }
    }

    .tn-title {
        font-size: clamp(2.2rem, 5.5vw, 4.2rem);
        font-weight: 900;
        color: #fff;
        line-height: 1.08;
        max-width: 860px;
        margin-bottom: 20px;
        letter-spacing: -.5px;
        animation: fadeDown .9s .1s ease both;
    }
    .tn-title em {
        font-style: normal;
        color: #FF7B72;
    }

    .tn-sub {
        font-size: clamp(.95rem, 2vw, 1.1rem);
        color: rgba(255,255,255,.75);
        max-width: 560px;
        line-height: 1.7;
        animation: fadeDown 1s .2s ease both;
    }

    /* ── FLOATING TRACK CARD ── */
    .tn-card-wrap {
        position: relative; z-index: 10;
        margin-top: -108px;
        padding: 0 16px;
    }
    .tn-card {
        max-width: 820px;
        margin: 0 auto;
        background: #fff;
        border-radius: 22px;
        box-shadow: 0 20px 72px rgba(0,0,0,.18), 0 2px 8px rgba(0,0,0,.06);
        overflow: hidden;
        animation: fadeUp 1s .35s ease both;
    }
    .tn-card-top {
        background: var(--brand);
        padding: 18px 36px;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .tn-card-top i { font-size: 1.1rem; color: rgba(255,255,255,.9); }
    .tn-card-top span {
        font-size: .72rem;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: rgba(255,255,255,.9);
    }
    .tn-card-body {
        padding: 32px 36px 28px;
    }
    .tn-card-body h2 {
        font-size: 1.35rem;
        font-weight: 800;
        color: var(--ink);
        margin-bottom: 20px;
        line-height: 1.25;
    }

    /* Input group */
    .tn-input-wrap {
        display: flex;
        border-radius: 14px;
        border: 2px solid #E2E8F0;
        overflow: hidden;
        background: #F8FAFC;
        transition: border-color .2s, box-shadow .2s;
    }
    .tn-input-wrap:focus-within {
        border-color: var(--brand);
        box-shadow: 0 0 0 4px rgba(176,30,22,.1);
        background: #fff;
    }
    .tn-awb {
        flex: 1;
        border: none !important;
        background: transparent !important;
        padding: 16px 20px;
        font-size: 1rem;
        color: var(--ink);
        outline: none !important;
        box-shadow: none !important;
        min-width: 0;
    }
    .tn-awb::placeholder { color: #94A3B8; }
    .tn-btn {
        background: var(--brand);
        color: #fff;
        border: none;
        padding: 16px 34px;
        font-weight: 800;
        font-size: .9rem;
        letter-spacing: .6px;
        text-transform: uppercase;
        cursor: pointer;
        display: flex; align-items: center; gap: 8px;
        flex-shrink: 0;
        transition: background .2s, transform .15s;
    }
    .tn-btn:hover  { background: var(--brand-dark); }
    .tn-btn:active { transform: scale(.97); }

    .tn-card-meta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 14px;
    }
    .tn-hint {
        font-size: .76rem;
        color: var(--muted);
        display: flex; align-items: center; gap: 5px;
    }
    .tn-hint i { color: #F59E0B; font-size: .8rem; }
    .tn-chips { display: flex; gap: 6px; flex-wrap: wrap; }
    .tn-chip {
        font-size: .68rem;
        font-weight: 700;
        padding: 4px 11px;
        border-radius: 100px;
        background: var(--brand-light);
        color: var(--brand);
        border: 1px solid rgba(176,30,22,.2);
        cursor: pointer;
        transition: background .15s;
        white-space: nowrap;
    }
    .tn-chip:hover { background: #fdd9d7; }

    /* ── STATS STRIP ── */
    .tn-stats {
        background: var(--ink);
        padding: 36px 0;
        margin-top: 60px;
    }
    .tn-stat {
        text-align: center;
        color: #fff;
        padding: 10px 16px;
    }
    .tn-stat-num {
        font-size: 2.2rem;
        font-weight: 900;
        line-height: 1;
        margin-bottom: 5px;
        color: #fff;
    }
    .tn-stat-num span { color: var(--brand); }
    .tn-stat-label {
        font-size: .72rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: rgba(255,255,255,.55);
    }
    .tn-stat-divider {
        width: 1px; height: 44px;
        background: rgba(255,255,255,.12);
        margin: auto;
    }

    /* ── HOW IT WORKS ── */
    .tn-how {
        background: #FAFBFD;
        padding: 80px 0 72px;
    }
    .section-eyebrow {
        font-size: .7rem;
        font-weight: 800;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: var(--brand);
        margin-bottom: 8px;
    }
    .section-title {
        font-size: clamp(1.6rem, 3vw, 2.1rem);
        font-weight: 900;
        color: var(--ink);
        margin-bottom: 52px;
        letter-spacing: -.3px;
    }

    .step-card {
        position: relative;
        background: #fff;
        border-radius: 18px;
        padding: 34px 28px 30px;
        height: 100%;
        box-shadow: 0 2px 20px rgba(0,0,0,.06);
        border: 1px solid #EEF2F7;
        transition: transform .25s, box-shadow .25s, border-color .25s;
        overflow: hidden;
    }
    .step-card::before {
        content: '';
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 3px;
        background: var(--brand);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .3s ease;
    }
    .step-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 16px 48px rgba(0,0,0,.11);
        border-color: rgba(176,30,22,.15);
    }
    .step-card:hover::before { transform: scaleX(1); }

    .step-num-bg {
        position: absolute;
        top: 12px; right: 16px;
        font-size: 4.5rem;
        font-weight: 900;
        color: #F1F5F9;
        line-height: 1;
        pointer-events: none;
        user-select: none;
    }
    .step-icon {
        width: 54px; height: 54px;
        border-radius: 14px;
        background: var(--brand-light);
        display: flex; align-items: center; justify-content: center;
        font-size: 1.45rem;
        color: var(--brand);
        margin-bottom: 20px;
    }
    .step-card h3 {
        font-size: 1.05rem;
        font-weight: 800;
        color: var(--ink);
        margin-bottom: 10px;
    }
    .step-card p {
        font-size: .875rem;
        color: var(--muted);
        margin: 0;
        line-height: 1.65;
    }
    .step-connector {
        display: flex; align-items: center; justify-content: center;
        padding-top: 40px;
    }
    .step-connector i { color: #CBD5E1; font-size: 1.3rem; }

    /* ── TRUST BAR ── */
    .tn-trust {
        background: var(--brand);
        padding: 20px 0;
    }
    .tn-trust-item {
        display: flex; align-items: center; gap: 10px;
        color: #fff;
        font-size: .88rem;
        font-weight: 600;
        justify-content: center;
        white-space: nowrap;
    }
    .tn-trust-item i { font-size: 1.05rem; color: rgba(255,255,255,.75); }
    .tn-trust-sep {
        color: rgba(255,255,255,.3);
        font-size: .7rem;
    }

    /* Keyframes */
    @keyframes fadeDown {
        from { opacity: 0; transform: translateY(-20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(28px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 991px) {
        .step-connector { display: none; }
    }
    @media (max-width: 768px) {
        .tn-hero { min-height: 46vh; }
        .tn-content { padding: 68px 20px 108px; }
        .tn-card-wrap { margin-top: -94px; }
        .tn-card-top  { padding: 16px 22px; }
        .tn-card-body { padding: 26px 22px 22px; }
        .tn-stats { margin-top: 70px; }
        .tn-stat-divider { display: none; }
        .tn-trust-item { font-size: .8rem; }
    }
    @media (max-width: 576px) {
        .tn-hero { min-height: 40vh; }
        .tn-btn { padding: 16px 22px; font-size: .82rem; letter-spacing: 0; }
        .tn-card-meta { flex-direction: column; align-items: flex-start; }
        .tn-hero::after { height: 50px; }
        .tn-card-wrap { margin-top: -72px; }
    }
</style>
@endpush

@include('partials.header')

<!-- ═══ HERO ═══ -->
<section class="tn-hero">
    <div class="tn-slides">
        <div class="tn-slide" style="background-image:url('{{ asset('assets/images/aerial-view-cargo-ship-cargo-container-harbor.jpg') }}')"></div>
        <div class="tn-slide" style="background-image:url('{{ asset('assets/images/cargo-ship-sailing-through-ocean.jpg') }}')"></div>
        <div class="tn-slide" style="background-image:url('{{ asset('assets/images/air-cargo.jpg') }}')"></div>
    </div>
    <div class="tn-overlay"></div>

    <div class="tn-content">
        <div class="tn-badge">
            <span class="tn-dot"></span>
            Live Tracking System
        </div>

        <h1 class="tn-title">
            Track Your Shipment<br>
            <em>Anywhere in the World</em>
        </h1>
        <p class="tn-sub">
            Real-time visibility from pickup to final delivery across air, sea, and road freight.
        </p>
    </div>
</section>

<!-- ═══ FLOATING TRACKING CARD ═══ -->
<div class="tn-card-wrap">
    <div class="tn-card">
        <div class="tn-card-top">
            <i class="bi bi-geo-alt-fill"></i>
            <span>Shipment Tracker &mdash; Enter your AWB / tracking number below</span>
        </div>
        <div class="tn-card-body">
            <h2>Where is my package right now?</h2>

            @if($errors->any())
                <div class="alert alert-danger py-2 mb-3 rounded-3">
                    <i class="bi bi-exclamation-triangle-fill me-1"></i>
                    {{ $errors->first('tracking_number') }}
                </div>
            @endif

            <form method="POST" action="{{ route('track.submit') }}">
                @csrf
                <div class="tn-input-wrap">
                    <input type="text" name="tracking_number"
                           class="tn-awb"
                           placeholder="e.g. ZAH-7500-10171-77305"
                           value="{{ old('tracking_number') }}"
                           autocomplete="off"
                           required>
                    <button type="submit" class="tn-btn">
                        <i class="bi bi-search"></i> Track
                    </button>
                </div>

                <div class="tn-card-meta">
                    <span class="tn-hint">
                        <i class="bi bi-shield-check-fill"></i>
                        Secure &amp; encrypted lookup
                    </span>
                    <div class="tn-chips">
                        <span class="tn-chip" onclick="document.querySelector('.tn-awb').value=this.dataset.val" data-val="ZAH-7500-10171-77305">Sample AWB</span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ═══ STATS STRIP ═══ -->
<div class="tn-stats">
    <div class="container">
        <div class="row align-items-center justify-content-center g-0">
            <div class="col-6 col-md-3">
                <div class="tn-stat">
                    <div class="tn-stat-num">50<span>K+</span></div>
                    <div class="tn-stat-label">Packages Delivered</div>
                </div>
            </div>
            <div class="col-md-auto d-none d-md-block">
                <div class="tn-stat-divider"></div>
            </div>
            <div class="col-6 col-md-3">
                <div class="tn-stat">
                    <div class="tn-stat-num">80<span>+</span></div>
                    <div class="tn-stat-label">Countries Covered</div>
                </div>
            </div>
            <div class="col-md-auto d-none d-md-block">
                <div class="tn-stat-divider"></div>
            </div>
            <div class="col-6 col-md-3">
                <div class="tn-stat">
                    <div class="tn-stat-num">99<span>%</span></div>
                    <div class="tn-stat-label">On-Time Delivery</div>
                </div>
            </div>
            <div class="col-md-auto d-none d-md-block">
                <div class="tn-stat-divider"></div>
            </div>
            <div class="col-6 col-md-3">
                <div class="tn-stat">
                    <div class="tn-stat-num">24<span>/7</span></div>
                    <div class="tn-stat-label">Live Support</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ═══ TRUST BAR ═══ -->
<div class="tn-trust">
    <div class="container">
        <div class="row justify-content-center align-items-center g-3">
            <div class="col-auto"><span class="tn-trust-item"><i class="bi bi-shield-lock-fill"></i> SSL Encrypted</span></div>
            <div class="col-auto d-none d-sm-block"><span class="tn-trust-sep">&#9679;</span></div>
            <div class="col-auto"><span class="tn-trust-item"><i class="bi bi-clock-fill"></i> Real-Time Updates</span></div>
            <div class="col-auto d-none d-sm-block"><span class="tn-trust-sep">&#9679;</span></div>
            <div class="col-auto"><span class="tn-trust-item"><i class="bi bi-globe2"></i> Worldwide Coverage</span></div>
            <div class="col-auto d-none d-sm-block"><span class="tn-trust-sep">&#9679;</span></div>
            <div class="col-auto"><span class="tn-trust-item"><i class="bi bi-bell-fill"></i> Instant Notifications</span></div>
        </div>
    </div>
</div>

<!-- ═══ HOW IT WORKS ═══ -->
<section class="tn-how">
    <div class="container">
        <div class="text-center">
            <p class="section-eyebrow">How It Works</p>
            <h2 class="section-title">Track your shipment in 3 simple steps</h2>
        </div>
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-4 col-md-6">
                <div class="step-card h-100">
                    <div class="step-num-bg">01</div>
                    <div class="step-icon"><i class="bi bi-upc-scan"></i></div>
                    <h3>Enter Your Tracking Number</h3>
                    <p>Type or paste the AWB / tracking number found in your shipment confirmation email into the search bar above.</p>
                </div>
            </div>
            <div class="col-lg-auto d-none d-lg-flex align-items-center step-connector">
                <i class="bi bi-arrow-right-short"></i>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="step-card h-100">
                    <div class="step-num-bg">02</div>
                    <div class="step-icon"><i class="bi bi-radar"></i></div>
                    <h3>We Locate Your Shipment</h3>
                    <p>Our system instantly queries live carrier data across air, ocean, and road networks to pinpoint your package&rsquo;s exact location.</p>
                </div>
            </div>
            <div class="col-lg-auto d-none d-lg-flex align-items-center step-connector">
                <i class="bi bi-arrow-right-short"></i>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="step-card h-100">
                    <div class="step-num-bg">03</div>
                    <div class="step-icon"><i class="bi bi-map-fill"></i></div>
                    <h3>View Full Journey &amp; Status</h3>
                    <p>See every checkpoint from origin pickup to customs clearance to your door with timestamps and status updates in real time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@include('partials.footer')
