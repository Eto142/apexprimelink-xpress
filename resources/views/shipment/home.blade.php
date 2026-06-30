<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="apexprimelink-xpress Company Limited – Shipment Tracking">
    <title>Track Your Shipment | apexprimelink-xpress Company Limited</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('wp-content/uploads/2022/04/Screenshot_20231009_092214-150x150.png') }}" sizes="32x32">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Rajdhani:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- Map: Google Maps iframe embed (free, no key) --}}

    <style>
        /* ======================================================
           apexprimelink-xpress — TRACKING PAGE DESIGN SYSTEM
        ====================================================== */
        :root {
            --primary:        #B01E16;
            --primary-mid:    #8C1510;
            --primary-light:  #D63A30;
            --navy:           #2D2D2D;
            --navy-mid:       #444444;
            --accent:         #FF7900;
            --accent-hover:   #CC6100;
            --accent-light:   #FFB347;
            --white:          #FFFFFF;
            --off-white:      #FDF5F4;
            --light-gray:     #F0EEED;
            --border:         #E2D8D7;
            --text:           #2A1818;
            --text-muted:     #6B5555;
            --text-light:     #A08075;
            --success:        #16A34A;
            --shadow-sm:      0 1px 4px rgba(0,0,0,.07);
            --shadow-md:      0 4px 18px rgba(0,0,0,.10);
            --shadow-lg:      0 12px 40px rgba(0,0,0,.13);
            --radius-sm:      6px;
            --radius-md:      10px;
            --radius-lg:      16px;
            --transition:     all .3s ease;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; font-size: 16px; }
        body {
            font-family: 'Inter', sans-serif;
            background: var(--off-white);
            color: var(--text);
            line-height: 1.7;
            overflow-x: hidden;
        }
        a { text-decoration: none; color: inherit; transition: var(--transition); }
        img { max-width: 100%; display: block; height: auto; }
        ul { list-style: none; padding: 0; margin: 0; }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ======================================================
           TOP LOGO BAR
        ====================================================== */
        .track-topbar {
            background: #FFFFFF;
            padding: 14px 0;
            border-bottom: 3px solid var(--primary);
            box-shadow: 0 2px 10px rgba(0,0,0,.07);
        }
        .track-topbar-inner {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .track-topbar-inner .topbar-right {
            font-size: .8rem;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .track-topbar-inner .topbar-right i { color: var(--accent); }
        .track-logo {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .track-logo img {
            height: 60px;
            width: auto;
        }
        .track-logo-text .logo-name {
            display: block;
            font-family: 'Rajdhani', sans-serif;
            font-size: 22px;
            font-weight: 700;
            color: var(--navy);
            text-transform: uppercase;
            letter-spacing: .5px;
            line-height: 1.1;
        }
        .track-logo-text .logo-tagline {
            font-size: 11px;
            color: var(--accent);
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 600;
        }

        /* ======================================================
           TRACKING HERO BANNER
        ====================================================== */
        .tracking-hero {
            background: linear-gradient(145deg, #0D0404 0%, #1F0808 35%, #2D1010 65%, #1A0606 100%);
            padding: 36px 0 56px;
            text-align: center;
            position: relative;
            overflow: hidden;
            clip-path: polygon(0 0, 100% 0, 100% 92%, 50% 100%, 0 92%);
            margin-bottom: 40px;
        }
        .tracking-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.025'%3E%3Cpath d='M0 0h40v40H0zm40 40h40v40H40z'/%3E%3C/g%3E%3C/svg%3E");
        }
        .tracking-hero::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0; right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--accent), var(--primary-light), var(--accent));
        }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,121,0,.15);
            color: var(--accent-light);
            border: 1px solid rgba(255,121,0,.35);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }
        .tracking-hero h1 {
            font-family: 'Rajdhani', sans-serif;
            font-size: clamp(1.7rem, 3.5vw, 2.5rem);
            font-weight: 700;
            color: var(--white);
            margin-bottom: 8px;
        }
        .tracking-hero .tracking-id {
            font-size: 1.1rem;
            color: rgba(255,255,255,.8);
            margin-bottom: 32px;
        }
        .tracking-id strong {
            color: var(--accent-light);
            font-family: 'Rajdhani', sans-serif;
            font-size: 1.3rem;
            letter-spacing: 1px;
        }
        .badge-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            position: relative;
            z-index: 1;
        }
        .badge-item {
            background: rgba(255,255,255,.07);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,.15);
            padding: 14px 22px;
            border-radius: 8px;
            color: white;
            min-width: 160px;
            text-align: center;
            border-top: 3px solid var(--accent);
        }
        .badge-item small {
            display: block;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: rgba(255,255,255,.55);
            margin-bottom: 5px;
            font-weight: 600;
        }
        .badge-item strong {
            font-size: 1.05rem;
            font-weight: 700;
        }

        /* ======================================================
           INFO CARDS
        ====================================================== */
        .info-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
            margin-bottom: 24px;
            overflow: hidden;
            border: 1px solid var(--border);
            transition: var(--transition);
        }
        .info-card:hover {
            box-shadow: var(--shadow-lg);
            border-color: #d0c0be;
        }
        .info-header {
            background: var(--white);
            border-bottom: 1px solid var(--border);
            border-left: 5px solid var(--primary);
            padding: 14px 20px;
            font-family: 'Rajdhani', sans-serif;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--navy);
            display: flex;
            align-items: center;
            gap: 10px;
            letter-spacing: .2px;
        }
        .info-header i {
            width: 30px;
            height: 30px;
            background: var(--primary);
            color: #fff;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: .8rem;
            flex-shrink: 0;
        }
        .info-body { padding: 22px; }

        .sub-heading {
            font-family: 'Rajdhani', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            padding-bottom: 6px;
            border-bottom: 1px solid var(--border);
        }
        .sub-heading i { color: var(--primary); }

        .info-row {
            display: flex;
            margin-bottom: 10px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--light-gray);
            font-size: 0.9rem;
        }
        .info-row:last-child { border-bottom: none; margin-bottom: 0; }
        .info-label {
            flex: 0 0 140px;
            font-weight: 600;
            color: var(--text-muted);
            font-size: .82rem;
            text-transform: uppercase;
            letter-spacing: .4px;
        }
        .info-value {
            flex: 1;
            color: var(--text);
            font-weight: 500;
        }

        /* ======================================================
           TABLE
        ====================================================== */
        .table-responsive { overflow-x: auto; }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.875rem;
        }
        table thead {
            background: var(--navy);
            color: var(--white);
        }
        table th, table td {
            padding: 12px 14px;
            border: 1px solid var(--border);
            text-align: left;
        }
        table th { font-weight: 700; letter-spacing: .3px; }
        table tbody tr:nth-child(even) { background: var(--off-white); }
        table tbody tr:hover { background: #fef0ee; }

        /* ======================================================
           PACKAGE IMAGE
        ====================================================== */
        .package-image-wrap {
            text-align: center;
            margin-bottom: 28px;
        }
        .package-image {
            max-width: 100%;
            max-height: 400px;
            width: auto;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-lg);
            border: 3px solid var(--white);
            outline: 1px solid var(--border);
        }

        /* ======================================================
           TIMELINE
        ====================================================== */
        .timeline {
            position: relative;
            padding-left: 36px;
        }
        .timeline::before {
            content: '';
            position: absolute;
            left: 14px;
            top: 10px;
            bottom: 10px;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary), var(--accent));
            border-radius: 2px;
        }
        .timeline-item {
            position: relative;
            margin-bottom: 24px;
            display: flex;
            gap: 16px;
        }
        .timeline-dot {
            position: absolute;
            left: -44px;
            width: 34px;
            height: 34px;
            border-radius: 8px;
            background: var(--primary);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: .82rem;
            z-index: 2;
            box-shadow: 0 3px 10px rgba(176,30,22,.3);
            flex-shrink: 0;
        }
        .timeline-item:first-child .timeline-dot {
            background: var(--navy);
            box-shadow: 0 3px 10px rgba(45,45,45,.3);
        }
        .timeline-content {
            flex: 1;
            background: var(--white);
            padding: 16px 20px;
            border-radius: var(--radius-md);
            border: 1px solid var(--border);
            border-left: 4px solid var(--primary);
            box-shadow: var(--shadow-sm);
        }
        .timeline-date {
            font-size: .78rem;
            color: var(--text-muted);
            margin-bottom: 4px;
            font-weight: 500;
        }
        .timeline-status {
            font-family: 'Rajdhani', sans-serif;
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--navy);
        }
        .timeline-location {
            font-size: .875rem;
            color: var(--primary);
            font-weight: 600;
            margin-top: 3px;
        }
        .timeline-remarks {
            margin-top: 10px;
            background: #fff8f5;
            border: 1px solid #fad9cc;
            padding: 8px 14px;
            border-radius: var(--radius-sm);
            font-size: .875rem;
            color: var(--text-muted);
        }

        /* ======================================================
           SIDEBAR COMPONENTS
        ====================================================== */
        .route-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }
        .route-pin {
            width: 42px;
            height: 42px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .95rem;
            flex-shrink: 0;
        }
        .route-pin.origin { background: var(--primary); color: var(--white); }
        .route-pin.dest   { background: var(--navy); color: var(--white); }
        .route-label { font-size: .72rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: .8px; font-weight: 600; }
        .route-name { font-weight: 700; color: var(--navy); font-size: .95rem; }

        .progress-track {
            height: 6px;
            background: var(--light-gray);
            border-radius: 10px;
            overflow: hidden;
            margin: 8px 0 16px;
        }
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            border-radius: 10px;
            transition: width .6s ease;
        }

        .action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            width: 100%;
            padding: 13px 24px;
            border-radius: 8px;
            font-size: .9rem;
            font-weight: 700;
            cursor: pointer;
            border: none;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-mid) 100%);
            color: var(--white);
            box-shadow: 0 4px 16px rgba(176,30,22,.3);
            transition: var(--transition);
            text-align: center;
        }
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(176,30,22,.4);
            color: var(--white);
        }
        .action-btn-outline {
            background: transparent;
            color: var(--navy);
            border: 2px solid var(--navy);
            box-shadow: none;
            margin-top: 10px;
        }
        .action-btn-outline:hover {
            background: var(--navy);
            color: var(--white);
            box-shadow: none;
        }

        /* ======================================================
           FOOTER
        ====================================================== */
        .track-footer {
            background: var(--navy);
            color: rgba(255,255,255,.7);
            padding: 50px 0 24px;
            margin-top: 70px;
            border-top: 4px solid var(--primary);
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-bottom: 40px;
        }
        .footer-col-title {
            font-family: 'Rajdhani', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            color: var(--white);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 16px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--accent);
            display: inline-block;
        }
        .footer-links li { margin-bottom: 8px; }
        .footer-links a {
            color: rgba(255,255,255,.6);
            font-size: .875rem;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition);
        }
        .footer-links a:hover { color: var(--accent); transform: translateX(4px); }
        .footer-links i { font-size: .75rem; color: var(--accent); }
        .footer-bottom {
            text-align: center;
            border-top: 1px solid rgba(255,255,255,.08);
            padding-top: 24px;
            font-size: .875rem;
            color: rgba(255,255,255,.45);
        }

        /* ======================================================
           LAYOUT GRID
        ====================================================== */
        .content-grid {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 28px;
            align-items: start;
        }

        /* ======================================================
           PRINT
        ====================================================== */
        @media print {
            .no-print { display: none !important; }
            body { background: white; }
            .info-card { box-shadow: none; border: 1px solid #ddd; }
            .track-topbar { background: var(--primary) !important; -webkit-print-color-adjust: exact; }
            .tracking-hero { clip-path: none; margin-bottom: 20px; }
        }

        /* Map animations */
        @keyframes pulseDot {
            0%, 100% { opacity: 1; transform: scale(1); }
            50%       { opacity: .4; transform: scale(.7); }
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        @keyframes spinSync {
            to { transform: rotate(360deg); }
        }
        .syncing { animation: spinSync .6s linear infinite; }

        /* ======================================================
           RESPONSIVE HELPER CLASSES
        ====================================================== */
        .tracking-strip {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.18);
            border-radius: 50px;
            padding: 10px 24px;
            margin: 8px 0 18px;
        }
        .package-banner {
            display: flex;
            align-items: center;
            gap: 16px;
            background: linear-gradient(135deg,var(--primary) 0%,var(--primary-mid) 100%);
            border-radius: var(--radius-md);
            padding: 16px 20px;
            margin-bottom: 24px;
        }
        .package-banner-right {
            margin-left: auto;
            text-align: right;
            flex-shrink: 0;
        }
        .detail-grid-2col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 24px;
        }

        /* ======================================================
           RESPONSIVE
        ====================================================== */
        @media (max-width: 1024px) {
            .content-grid { grid-template-columns: 1fr 300px; }
        }
        @media (max-width: 960px) {
            .content-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 767px) {
            .tracking-hero { padding: 26px 0 44px; margin-bottom: 28px; }
            .tracking-hero h1 { font-size: 1.75rem; }
            .badge-group { gap: 10px; }
            .badge-item { min-width: 140px; }
            .info-row { flex-direction: column; gap: 2px; }
            .info-label { flex: none; }
            .timeline { padding-left: 28px; }
            .timeline::before { left: 12px; }
            .timeline-dot { width: 30px; height: 30px; left: -36px; font-size: .8rem; }
            .footer-grid { grid-template-columns: 1fr; gap: 28px; }
            .track-logo img { height: 46px; }
            .info-body { padding: 16px; }
            .info-header { padding: 14px 16px; font-size: 1rem; }
            .detail-grid-2col { grid-template-columns: 1fr !important; }
            .package-banner { flex-direction: column; align-items: flex-start; gap: 12px; padding: 14px 16px; }
            .package-banner-right { margin-left: 0; text-align: left; }
            .tracking-strip { border-radius: 14px; padding: 12px 16px; width: 100%; }
            #shipment-map { height: 280px !important; }
            table th, table td { padding: 10px 10px; font-size: .82rem; }
            .action-btn { padding: 11px 18px; font-size: .875rem; }
            .track-footer { padding: 36px 0 20px; margin-top: 40px; }
        }
        @media (max-width: 576px) {
            .tracking-hero { padding: 20px 0 38px; }
            .tracking-hero h1 { font-size: 1.5rem; }
            .badge-item { min-width: calc(50% - 8px); }
            .hero-badge { font-size: 11px; padding: 7px 18px; }
            .info-card { margin-bottom: 18px; }
            .timeline-content { padding: 12px 14px; }
            .timeline-date { font-size: .75rem; }
        }
        @media (max-width: 480px) {
            .container { padding: 0 12px; }
            .badge-item { min-width: 100%; }
            .tracking-strip { border-radius: 12px; }
            .info-body { padding: 12px; }
            .info-header { padding: 12px 14px; }
            .package-banner { padding: 12px 14px; }
            .timeline { padding-left: 24px; }
            .timeline-dot { width: 26px; height: 26px; left: -32px; font-size: .75rem; }
            table th, table td { padding: 8px 8px; font-size: .78rem; }
            .footer-links a { font-size: .82rem; }
        }
        @media (max-width: 360px) {
            .tracking-hero h1 { font-size: 1.3rem; }
            .badge-item { min-width: 100%; padding: 10px 12px; }
            .track-logo img { height: 38px; }
        }

        /* ======================================================
           NEW ADDITIONS — v2 ENHANCEMENTS
        ====================================================== */

        /* --- Keyframe Animations --- */
        @keyframes shimmer        { to { background-position: 200% center; } }
        @keyframes heroGradient   { 0%,100% { background-position:0% 50%; } 50% { background-position:100% 50%; } }
        @keyframes floatOrb       { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-18px); } }
        @keyframes progressFill   { from { width:0%; } }
        @keyframes pulseRingNavy  { 0%{box-shadow:0 0 0 0 rgba(140,21,16,.5);} 70%{box-shadow:0 0 0 10px rgba(140,21,16,0);} 100%{box-shadow:0 0 0 0 rgba(140,21,16,0);} }

        /* --- Custom Cursor --- */
        * { cursor: none !important; }
        .custom-cursor {
            position: fixed;
            top: 0;
            left: 0;
            width: 22px;
            height: 22px;
            border: 2px solid #C62828;
            background: rgba(198, 40, 40, 0.15);
            pointer-events: none;
            z-index: 999999;
            transform: translate(-50%, -50%) scale(1);
            border-radius: 50%;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
            animation: cursorAmoeba 2s infinite ease-in-out;
            box-shadow: 0 0 10px rgba(198, 40, 40, 0.5), 0 0 20px rgba(198, 40, 40, 0.25);
        }
        .custom-cursor.paused {
            transform: translate(-50%, -50%) scale(1.5);
            background: rgba(198, 40, 40, 0.3);
            box-shadow: 0 0 18px rgba(198, 40, 40, 0.7), 0 0 36px rgba(198, 40, 40, 0.4);
        }
        @keyframes cursorAmoeba {
            0%   { border-radius: 40% 60% 60% 40% / 40% 40% 60% 60%; }
            25%  { border-radius: 60% 40% 30% 70% / 50% 60% 40% 50%; }
            50%  { border-radius: 70% 30% 40% 60% / 60% 40% 50% 50%; }
            75%  { border-radius: 30% 70% 60% 40% / 60% 50% 50% 60%; }
            100% { border-radius: 40% 60% 60% 40% / 40% 40% 60% 60%; }
        }

        /* --- Topbar accent bar --- */
        .topbar-accent-bar {
            height: 3px;
            background: linear-gradient(90deg, #C62828, #FF8C00, #C62828);
            background-size: 200% auto;
            animation: shimmer 3.5s linear infinite;
        }
        .track-topbar {
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 1px 0 #E5CECC, 0 2px 12px rgba(0,0,0,.05);
        }
        .topbar-contact {
            display: flex;
            align-items: center;
            gap: 22px;
        }
        .topbar-contact-item {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: .8rem;
            color: #6B5555;
            font-weight: 500;
        }
        .topbar-contact-item i { color: #FF8C00; }
        .topbar-contact-item a { color: #6B5555; text-decoration: none; }
        .topbar-contact-item a:hover { color: #C62828; }

        /* --- Hero animated gradient & orbs --- */
        .tracking-hero {
            background: linear-gradient(145deg, #0D0404 0%, #1F0808 35%, #2D1010 65%, #1A0606 100%);
            background-size: 300% 300% !important;
            animation: heroGradient 14s ease infinite;
        }
        .hero-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(70px);
            pointer-events: none;
            z-index: 0;
        }
        .hero-orb-1 {
            width: 520px; height: 520px;
            background: radial-gradient(circle, rgba(255,140,0,.14) 0%, transparent 70%);
            top: -220px; right: -80px;
            animation: floatOrb 7s ease-in-out infinite;
        }
        .hero-orb-2 {
            width: 380px; height: 380px;
            background: radial-gradient(circle, rgba(176,30,22,.18) 0%, transparent 70%);
            bottom: -140px; left: -60px;
            animation: floatOrb 9s ease-in-out infinite reverse;
        }
        .tracking-hero .container { position: relative; z-index: 1; }
        .hero-live-dot {
            width: 8px; height: 8px;
            border-radius: 50%;
            background: #FFBA45;
            display: inline-block;
            animation: pulseDot 1.4s infinite;
        }

        /* --- Copy button --- */
        .copy-btn {
            background: rgba(255,140,0,.2);
            border: 1px solid rgba(255,140,0,.38);
            cursor: pointer;
            color: #FFBA45;
            padding: 5px 12px;
            border-radius: 6px;
            transition: all .3s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: .72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .copy-btn:hover { background: rgba(255,140,0,.35); transform: scale(1.06); }

        /* --- Status step tracker --- */
        .status-steps {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: 0;
            margin: 0 auto 22px;
            max-width: 680px;
            animation: fadeInUp .7s ease .5s both;
        }
        .step-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 7px;
            flex: 1;
            position: relative;
        }
        .step-item:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 17px; left: 50%;
            width: 100%; height: 2px;
            background: rgba(255,255,255,.14);
            z-index: 0;
        }
        .step-item.done:not(:last-child)::after {
            background: linear-gradient(90deg, #FF8C00, rgba(255,255,255,.2));
        }
        .step-dot {
            width: 36px; height: 36px;
            border-radius: 50%;
            background: rgba(255,255,255,.08);
            border: 2px solid rgba(255,255,255,.18);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,.35);
            font-size: .78rem;
            position: relative; z-index: 1;
            transition: all .3s ease;
        }
        .step-item.done .step-dot {
            background: #FF8C00;
            border-color: #FF8C00;
            color: #fff;
            box-shadow: 0 0 18px rgba(255,140,0,.55);
        }
        .step-item.current .step-dot {
            background: #fff;
            border-color: #fff;
            color: #C62828;
            box-shadow: 0 0 22px rgba(255,255,255,.65);
            animation: pulseRing 2s infinite;
        }
        .step-label {
            font-size: .62rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .8px;
            color: rgba(255,255,255,.3);
            text-align: center;
            line-height: 1.2;
            max-width: 64px;
        }
        .step-item.done .step-label,
        .step-item.current .step-label { color: rgba(255,255,255,.82); }
        .step-item.current .step-label { color: #FFBA45; }

        /* --- Timeline enhancements --- */
        .timeline-item:first-child .timeline-dot {
            animation: pulseRingNavy 2.5s infinite;
        }
        .timeline-dot.dot-delivered { background: linear-gradient(135deg,#1B8F52,#16A34A); box-shadow:0 3px 12px rgba(27,143,82,.4); animation:none; }
        .timeline-dot.dot-transit   { background: linear-gradient(135deg,#1A56DB,#2563EB); box-shadow:0 3px 12px rgba(26,86,219,.35); animation:none; }
        .timeline-dot.dot-pending   { background: linear-gradient(135deg,#D97706,#F59E0B); box-shadow:0 3px 12px rgba(217,119,6,.35); animation:none; }

        .current-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: linear-gradient(135deg, #2D1A1A, #6B1010);
            color: #fff;
            font-size: .62rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 3px 10px;
            border-radius: 50px;
            margin-left: 8px;
            vertical-align: middle;
        }
        .current-badge .live-dot {
            width: 6px; height: 6px;
            border-radius: 50%;
            background: #FFBA45;
            animation: pulseDot 1.2s infinite;
        }
        .timeline-content:hover { box-shadow: 0 4px 20px rgba(140,21,16,.10); }
        .timeline-item:first-child .timeline-content {
            background: #FDF6F4;
            box-shadow: 0 3px 18px rgba(0,0,0,.08);
        }

        /* --- Card hover lift --- */
        .info-card:hover { transform: translateY(-3px); }
        .badge-item:hover { background: rgba(255,255,255,.13); transform: translateY(-4px); box-shadow: 0 10px 30px rgba(0,0,0,.2); }

        /* --- Header icon badge --- */
        .h-icon {
            width: 32px; height: 32px;
            background: linear-gradient(135deg, #C62828, #EF5350);
            color: #fff;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: .82rem;
            flex-shrink: 0;
            box-shadow: 0 3px 10px rgba(198,40,40,.28);
        }

        /* --- Progress fill animation --- */
        .progress-fill {
            animation: progressFill .9s cubic-bezier(0.4,0,0.2,1) .4s both !important;
            box-shadow: 0 2px 8px rgba(198,40,40,.28);
        }

        /* --- Action button shimmer --- */
        .action-btn { position: relative; overflow: hidden; }
        .action-btn::before {
            content: '';
            position: absolute;
            top: 0; left: -100%; width: 100%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,.1), transparent);
            transition: left .5s ease;
        }
        .action-btn:hover::before { left: 100%; }
        .action-btn:hover { transform: translateY(-2px); }

        /* --- Route connector --- */
        .route-connector {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 2px 6px;
        }
        .route-connector-line { flex: 1; border-top: 2px dashed #E5CECC; }
        .route-connector-icon { color: #FF8C00; font-size: .9rem; }
        .route-wrap + .route-wrap { border-top: 1px dashed #E5CECC; }

        /* --- Scroll-reveal --- */
        .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .55s cubic-bezier(0.4,0,0.2,1), transform .55s cubic-bezier(0.4,0,0.2,1);
        }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        .reveal-d1 { transition-delay: .1s; }
        .reveal-d2 { transition-delay: .2s; }
        .reveal-d3 { transition-delay: .3s; }

        /* --- Toast notification --- */
        .toast-notify {
            position: fixed;
            bottom: 28px; right: 28px;
            background: #2D1A1A;
            color: #fff;
            padding: 14px 20px;
            border-radius: 12px;
            font-size: .875rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 9999;
            box-shadow: 0 20px 60px rgba(140,21,16,.22);
            transform: translateY(80px);
            opacity: 0;
            transition: all .35s cubic-bezier(0.4,0,0.2,1);
            border-left: 4px solid var(--accent);
            pointer-events: none;
        }
        .toast-notify.show { transform: translateY(0); opacity: 1; }
        .toast-notify i { color: var(--accent-light); }

        /* --- Back to top --- */
        .back-to-top {
            position: fixed;
            bottom: 90px; right: 28px;
            width: 46px; height: 46px;
            background: linear-gradient(135deg, #C62828, #8B0000);
            color: #fff;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 1rem;
            box-shadow: 0 4px 20px rgba(198,40,40,.4);
            cursor: pointer;
            transition: all .3s ease;
            opacity: 0;
            pointer-events: none;
            z-index: 998;
            border: none;
        }
        .back-to-top.visible { opacity: 1; pointer-events: all; }
        .back-to-top:hover { transform: translateY(-3px); box-shadow: 0 8px 28px rgba(198,40,40,.5); }

        /* --- Footer enhancements --- */
        .track-footer::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: linear-gradient(90deg, #C62828, #FF8C00, #C62828);
            background-size: 200% auto;
            animation: shimmer 4s linear infinite;
        }
        .track-footer { position: relative; overflow: hidden; }
        .footer-col-title {
            display: flex !important;
            align-items: center;
            gap: 8px;
        }
        .footer-col-title::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, #FF8C00, transparent);
            margin-left: 4px;
        }
        .footer-social {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        .footer-social a {
            width: 38px; height: 38px;
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.10);
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,.55);
            font-size: .9rem;
            text-decoration: none;
            transition: all .3s ease;
        }
        .footer-social a:hover {
            background: #FF8C00;
            border-color: #FF8C00;
            color: #fff;
            transform: translateY(-3px);
        }
        .footer-bottom {
            display: flex !important;
            align-items: center;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
        }
        .footer-divider {
            width: 4px; height: 4px;
            border-radius: 50%;
            background: rgba(255,255,255,.18);
        }

        /* --- Help card inner --- */
        .help-inner {
            background: linear-gradient(135deg, #FDF6F4, #FDECEA);
            border-radius: 12px;
            padding: 18px;
        }
        .help-inner p { font-size: .875rem; color: #6B5555; margin-bottom: 14px; line-height: 1.7; }
        .help-phone {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 14px;
            background: #fff;
            border: 1px solid #E5CECC;
            border-radius: 8px;
            padding: 11px 16px;
            font-size: .9rem;
            font-weight: 700;
            color: var(--navy);
        }
        .help-phone i { color: var(--primary); }

        /* --- Responsive additions --- */
        @media (max-width: 767px) {
            .topbar-contact { display: none; }
            .status-steps { gap: 0; }
            .step-label { max-width: 50px; font-size: .58rem; }
            .back-to-top { bottom: 80px; right: 16px; }
            .toast-notify { bottom: 20px; right: 12px; left: 12px; }
        }
        @media (max-width: 576px) {
            .step-dot { width: 28px; height: 28px; font-size: .68rem; }
            .step-item:not(:last-child)::after { top: 14px; }
        }
        @media (max-width: 480px) {
            .badge-item { min-width: 100%; }
            .status-steps { max-width: 100%; }
            .footer-divider { display: none; }
            .footer-bottom { flex-direction: column; gap: 8px; }
        }
    </style>
</head>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '8b6914e19136a73bd34e7ffac91def94b3dc89d0';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript>Powered by <a href="https://www.smartsupp.com" target="_blank">Smartsupp</a></noscript>


<body>
<div class="custom-cursor" id="custom-cursor"></div>

<!-- ===========================
     LOGO TOP BAR
=========================== -->
<div class="track-topbar no-print">
    <div class="topbar-accent-bar"></div>
    <div class="container">
        <div class="track-topbar-inner">
            <a href="{{ url('/') }}" class="track-logo" aria-label="apexprimelink-xpress Home">
                <img src="{{ asset('wp-content/uploads/2022/04/Screenshot_20231009_092214.png') }}"
                     alt="apexprimelink-xpress Company Limited">
            </a>
            <div class="topbar-contact">
                <div class="topbar-contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:+4906251986620">+49 (0) 6251 986 620</a>
                </div>
                <div class="topbar-contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:support@apexprimelink-xpress.com">support@apexprimelink-xpress.com</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===========================
     HERO BANNER
=========================== -->
<section class="tracking-hero">
    <!-- Decorative floating orbs -->
    <div class="hero-orb hero-orb-1"></div>
    <div class="hero-orb hero-orb-2"></div>

    <div class="container">
        <span class="hero-badge">
            <span class="hero-live-dot"></span> Live Tracking
        </span>

        {{-- Package name / product --}}
        @if(!empty($shipment->product))
        <p style="font-size:.8rem; font-weight:700; text-transform:uppercase; letter-spacing:2.5px; color:var(--accent-light); margin-bottom:6px;">Package</p>
        <h1 style="font-size:clamp(1.6rem,4vw,2.8rem);">{{ $shipment->product }}</h1>
        @else
        <h1>Shipment Tracking Details</h1>
        @endif

        {{-- Tracking number strip --}}
        <div class="tracking-strip">
            <i class="fas fa-barcode" style="color:var(--accent-light); font-size:1.1rem;"></i>
            <span style="font-size:.74rem; text-transform:uppercase; letter-spacing:1.5px; color:rgba(255,255,255,.55); font-weight:600;">Tracking ID</span>
            <strong style="font-family:'Rajdhani',sans-serif; font-size:1.3rem; letter-spacing:2px; background:linear-gradient(135deg,#fff 20%,#FFBA45 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">{{ $shipment->tracking_number }}</strong>
            <button class="copy-btn" id="copy-tracking-btn" title="Copy tracking number">
                <i class="fas fa-copy"></i> Copy
            </button>
        </div>

        {{-- STATUS STEP TRACKER --}}
        @php
            $statusLower = strtolower($shipment->status ?? '');
            $currentStep = 0;
            if (str_contains($statusLower, 'picked') || str_contains($statusLower, 'pickup')) $currentStep = 0;
            if (str_contains($statusLower, 'transit') || str_contains($statusLower, 'ship'))  $currentStep = 1;
            if (str_contains($statusLower, 'custom') || str_contains($statusLower, 'clear'))  $currentStep = 2;
            if (str_contains($statusLower, 'delivery') || str_contains($statusLower, 'out'))  $currentStep = 3;
            if (str_contains($statusLower, 'delivered'))                                       $currentStep = 4;
            $steps = [
                ['icon' => 'fa-box',          'label' => 'Picked Up'],
                ['icon' => 'fa-shipping-fast','label' => 'In Transit'],
                ['icon' => 'fa-shield-halved','label' => 'Customs'],
                ['icon' => 'fa-truck',         'label' => 'Out for Delivery'],
                ['icon' => 'fa-check-circle', 'label' => 'Delivered'],
            ];
        @endphp
        <div class="status-steps">
            @foreach($steps as $i => $step)
            @if($i === $currentStep)
            <div class="step-item current">
                <div class="step-dot"><i class="fas {{ $step['icon'] }}"></i></div>
                <span class="step-label">{{ $step['label'] }}</span>
            </div>
            @endif
            @endforeach
        </div>

        <div class="badge-group">
            <div class="badge-item">
                <small>Current Status</small>
                <strong>{{ $shipment->status }}</strong>
            </div>
            <div class="badge-item">
                <small>Origin</small>
                <strong>{{ $shipment->origin }}</strong>
            </div>
            <div class="badge-item">
                <small>Destination</small>
                <strong>{{ $shipment->destination }}</strong>
            </div>
            <div class="badge-item">
                <small>Expected Delivery</small>
                <strong>{{ $shipment->expected_delivery_date }}</strong>
            </div>
        </div>
    </div>
</section>

<!-- ===========================
     MAIN CONTENT
=========================== -->
<div class="container" style="padding-bottom: 20px;">
    <div class="content-grid">

        <!-- ===== LEFT / MAIN COLUMN ===== -->
        <div>

            {{-- PACKAGE DETAILS --}}
            <div class="info-card reveal">
                <div class="info-header">
                    <span class="h-icon"><i class="fas fa-box-open"></i></span> Package Details
                </div>
                <div class="info-body">

                    {{-- Package name banner --}}
                    @if(!empty($shipment->product))
                    <div class="package-banner">
                        <div style="width:44px;height:44px;border-radius:50%;background:rgba(255,121,0,.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <i class="fas fa-cube" style="color:var(--accent);font-size:1.1rem;"></i>
                        </div>
                        <div>
                            <div style="font-size:.7rem;text-transform:uppercase;letter-spacing:2px;color:rgba(255,255,255,.55);font-weight:600;margin-bottom:3px;">Package Name</div>
                            <div style="font-family:'Rajdhani',sans-serif;font-size:1.35rem;font-weight:700;color:var(--white);line-height:1.2;">{{ $shipment->product }}</div>
                            @if(!empty($shipment->description))
                            <div style="font-size:.8rem;color:rgba(255,255,255,.6);margin-top:3px;">{{ $shipment->description }}</div>
                            @endif
                        </div>
                        <div class="package-banner-right">
                            <div style="font-size:.7rem;text-transform:uppercase;letter-spacing:1.5px;color:rgba(255,255,255,.5);margin-bottom:3px;">Tracking No.</div>
                            <div style="font-family:'Rajdhani',sans-serif;font-size:1rem;font-weight:700;color:var(--accent-light);">{{ $shipment->tracking_number }}</div>
                        </div>
                    </div>
                    @endif

                    <div class="detail-grid-2col">
                        <div>
                            <div class="sub-heading"><i class="fas fa-user-tie"></i> Sender Information</div>
                            <div class="info-row"><span class="info-label">Name</span><span class="info-value">{{ $shipment->shipper_name }}</span></div>
                            <div class="info-row"><span class="info-label">Address</span><span class="info-value">{{ $shipment->shipper_address }}</span></div>
                            <div class="info-row"><span class="info-label">Origin</span><span class="info-value">{{ $shipment->origin }}</span></div>
                        </div>
                        <div>
                            <div class="sub-heading"><i class="fas fa-user"></i> Receiver Information</div>
                            <div class="info-row"><span class="info-label">Name</span><span class="info-value">{{ $shipment->receiver_name }}</span></div>
                            <div class="info-row"><span class="info-label">Address</span><span class="info-value">{{ $shipment->receiver_address }}</span></div>
                            <div class="info-row"><span class="info-label">Destination</span><span class="info-value">{{ $shipment->destination }}</span></div>
                        </div>
                    </div>

                    <div class="detail-grid-2col">
                        <div>
                            <div class="sub-heading"><i class="fas fa-info-circle"></i> Shipment Details</div>
                            <div class="info-row"><span class="info-label">Carrier</span><span class="info-value">{{ $shipment->carrier }}</span></div>
                            <div class="info-row"><span class="info-label">Reference No</span><span class="info-value">{{ $shipment->reference_no }}</span></div>
                            <div class="info-row"><span class="info-label">Shipment Mode</span><span class="info-value">{{ $shipment->shipment_mode }}</span></div>
                        </div>
                        <div>
                            <div class="sub-heading"><i class="fas fa-clock"></i> Timing</div>
                            <div class="info-row"><span class="info-label">Departure</span><span class="info-value">{{ $shipment->departure_time }}</span></div>
                            <div class="info-row"><span class="info-label">Exp. Delivery</span><span class="info-value">{{ $shipment->expected_delivery_date }}</span></div>
                            <div class="info-row"><span class="info-label">Pickup Date</span><span class="info-value">{{ $shipment->pickup_date }}</span></div>
                            <div class="info-row"><span class="info-label">Pickup Time</span><span class="info-value">{{ $shipment->pickup_time }}</span></div>
                        </div>
                    </div>

                    <div class="sub-heading"><i class="fas fa-boxes"></i> Package Specifications</div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Qty</th>
                                    <th>Weight (kg)</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $shipment->quantity }}</td>
                                    <td>{{ $shipment->weight }}</td>
                                    <td>{{ $shipment->description }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    @if($shipment->comments)
                    <div style="margin-top:20px;">
                        <div class="sub-heading"><i class="fas fa-comment-alt"></i> Additional Comments</div>
                        <p style="font-size:.9rem; color:var(--text-muted); background:var(--off-white); padding:14px 16px; border-radius:var(--radius-sm); border-left:4px solid var(--accent);">
                            {{ $shipment->comments }}
                        </p>
                    </div>
                    @endif
                </div>
            </div>

            {{-- LIVE MAP --}}
            @if(\App\Models\Setting::get('show_shipment_map', '1'))
            <div class="info-card reveal reveal-d1" id="live-map-card">
                <div class="info-header" style="justify-content:space-between;">
                    <span style="display:flex;align-items:center;gap:10px;"><span class="h-icon"><i class="fas fa-map-marked-alt"></i></span> Live Shipment Map</span>
                    <span id="map-status-badge" style="font-size:.75rem; font-weight:600; background:rgba(255,121,0,.15); color:var(--accent-light); padding:4px 12px; border-radius:50px; display:flex; align-items:center; gap:6px;">
                        <span id="map-live-dot" style="width:8px;height:8px;border-radius:50%;background:var(--accent-light);display:inline-block;animation:pulseDot 1.4s infinite;"></span>
                        LIVE
                    </span>
                </div>
                <div style="position:relative;">
                    @php
                        $mapLocation = $history->first()?->location ?? $shipment->destination ?? $shipment->origin ?? '';
                    @endphp
                    <iframe
                        id="shipment-map-iframe"
                        src="https://maps.google.com/maps?q={{ urlencode($mapLocation) }}&t=m&z=10&output=embed&iwloc=near"
                        width="100%"
                        height="420"
                        style="border:0; border-radius:0 0 var(--radius-lg) var(--radius-lg); display:block;"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Shipment current location map">
                    </iframe>
                </div>
                <div style="padding:12px 20px; background:var(--off-white); border-top:1px solid var(--border); display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:8px;">
                    <span style="font-size:.8rem; color:var(--text-muted);"><i class="fas fa-map-marker-alt" style="color:var(--primary);"></i> &nbsp;Showing current stop &nbsp;|&nbsp; Map &copy; Google</span>
                    <span id="map-last-updated" style="font-size:.8rem; color:var(--text-muted);"></span>
                </div>
            </div>
            @endif

            {{-- PACKAGE IMAGE --}}
            @if(!empty($shipment->image))
            <div class="info-card reveal reveal-d1">
                <div class="info-header">
                    <span class="h-icon"><i class="fas fa-image"></i></span> Package Image
                </div>
                <div class="info-body" style="text-align:center; padding: 28px 24px;">
                    <img src="{{ asset($shipment->image) }}"
                         alt="Package Image"
                         class="package-image"
                         onerror="this.closest('.info-card').style.display='none'">
                    <p style="margin-top:12px; font-size:.8rem; color:var(--text-muted);">
                        <i class="fas fa-box"></i> Shipment #{{ $shipment->tracking_number }}
                    </p>
                </div>
            </div>
            @endif

            {{-- SHIPMENT HISTORY --}}
            <div class="info-card reveal reveal-d2">
                <div class="info-header">
                    <span class="h-icon"><i class="fas fa-history"></i></span> Shipment History
                </div>
                <div class="info-body">
                    <div class="timeline">
                        @forelse($history as $index => $item)
                        <div class="timeline-item">
                            @php
                                $s   = strtolower($item->status ?? '');
                                $dotClass = '';
                                if (str_contains($s,'deliver'))                $dotClass = 'dot-delivered';
                                elseif (str_contains($s,'transit') || str_contains($s,'ship')) $dotClass = 'dot-transit';
                                elseif (str_contains($s,'pending') || str_contains($s,'hold')) $dotClass = 'dot-pending';
                                $icon = str_contains($s,'deliver') ? 'check-circle'
                                      : (str_contains($s,'transit') ? 'shipping-fast'
                                      : (str_contains($s,'receiv')  ? 'inbox'
                                      : (str_contains($s,'clear')   ? 'shield-halved'
                                      : 'info-circle')));
                            @endphp
                            <div class="timeline-dot {{ $dotClass }}">
                                <i class="fas fa-{{ $icon }}"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="timeline-date">
                                    <i class="far fa-calendar-alt"></i> {{ $item->date }}
                                    @if(!empty($item->time)) &nbsp;&middot;&nbsp; {{ $item->time }} @endif
                                    @if($index === 0)
                                    <span class="current-badge"><span class="live-dot"></span> Current</span>
                                    @endif
                                </div>
                                <div class="timeline-status">{{ $item->status }}</div>
                                <div class="timeline-location">
                                    <i class="fas fa-map-marker-alt"></i> {{ $item->location }}
                                </div>
                                @if(!empty($item->remarks))
                                <div class="timeline-remarks">
                                    <i class="fas fa-comment-dots"></i>
                                    <span>{{ $item->remarks }}</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        @empty
                        <div style="text-align:center; color:var(--text-muted); padding:30px 0;">
                            <i class="fas fa-satellite-dish" style="font-size:2rem; opacity:.3; margin-bottom:12px; display:block;"></i>
                            No tracking history available yet.
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
        <!-- ===== END LEFT COLUMN ===== -->

        <!-- ===== RIGHT / SIDEBAR ===== -->
        <div>

            {{-- QUICK SUMMARY --}}
            <div class="info-card reveal">
                <div class="info-header">
                    <span class="h-icon"><i class="fas fa-clipboard-list"></i></span> Quick Summary
                </div>
                <div class="info-body">
                    <div class="info-row"><span class="info-label">Package Type</span><span class="info-value">{{ $shipment->package_type }}</span></div>
                    <div class="info-row"><span class="info-label">Total Weight</span><span class="info-value">{{ $shipment->weight }}</span></div>
                    <div class="info-row"><span class="info-label">Shipment Type</span><span class="info-value">{{ $shipment->shipment_type }}</span></div>
                    <div class="info-row"><span class="info-label">Product</span><span class="info-value">{{ $shipment->product }}</span></div>
                    <div class="info-row"><span class="info-label">Value</span><span class="info-value">{{ $shipment->currency ?? 'USD' }} {{ $shipment->value }}</span></div>
                    <div class="info-row"><span class="info-label">Payment Mode</span><span class="info-value">{{ $shipment->payment_mode }}</span></div>
                    <div class="info-row"><span class="info-label">Total Freight</span><span class="info-value">{{ $shipment->currency ?? 'USD' }} {{ $shipment->total_freight }}</span></div>
                </div>
            </div>

            {{-- SHIPPING ROUTE --}}
            <div class="info-card reveal reveal-d1">
                <div class="info-header">
                    <span class="h-icon"><i class="fas fa-route"></i></span> Shipping Route
                </div>
                <div class="info-body">
                    <div class="route-wrap">
                        <div class="route-pin origin"><i class="fas fa-map-pin"></i></div>
                        <div>
                            <div class="route-label">Origin</div>
                            <div class="route-name">{{ $shipment->origin }}</div>
                        </div>
                    </div>
                    <div class="route-connector">
                        <div class="route-connector-line"></div>
                        <span class="route-connector-icon"><i class="fas fa-truck"></i></span>
                        <div class="route-connector-line"></div>
                    </div>
                    <div class="progress-track">
                        <div class="progress-fill" style="width: {{ $shipment->progress_percent ?? '45%' }};"></div>
                    </div>
                    <p style="font-size:.75rem; color:var(--text-muted); text-align:right; margin-bottom:8px; font-weight:600;">
                        <i class="fas fa-circle-dot" style="color:var(--accent);"></i> {{ $shipment->status }}
                    </p>
                    <div class="route-wrap">
                        <div class="route-pin dest"><i class="fas fa-flag-checkered"></i></div>
                        <div>
                            <div class="route-label">Destination</div>
                            <div class="route-name">{{ $shipment->destination }}</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ACTIONS --}}
            <div class="info-card reveal reveal-d2 no-print">
                <div class="info-header">
                    <span class="h-icon"><i class="fas fa-bolt"></i></span> Actions
                </div>
                <div class="info-body">
                    <button class="action-btn" onclick="window.print()">
                        <i class="fas fa-print"></i> Print / Save PDF
                    </button>
                    <a href="{{ url('/track-now') }}" class="action-btn action-btn-outline">
                        <i class="fas fa-search"></i> Track Another Shipment
                    </a>
                </div>
            </div>

            {{-- NEED HELP --}}
            <div class="info-card reveal reveal-d3 no-print">
                <div class="info-header">
                    <span class="h-icon"><i class="fas fa-headset"></i></span> Need Help?
                </div>
                <div class="info-body" style="padding:16px;">
                    <div class="help-inner">
                        <p>Our support team is available 24/7 to assist you with any questions about your shipment.</p>
                        <a href="{{ url('/contact') }}" class="action-btn">
                            <i class="fas fa-envelope"></i> Contact Support
                        </a>
                        <div class="help-phone">
                            <i class="fas fa-phone-alt"></i> +49 (0) 6251 986 620
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- ===== END SIDEBAR ===== -->

    </div>
</div>
<!-- ===== END MAIN CONTENT ===== -->

<!-- ===========================
     FOOTER
=========================== -->
<footer class="track-footer no-print">
    <div class="container">
        <div class="footer-grid">
            <div>
                <div class="footer-col-title"><i class="fas fa-truck-fast"></i> Our Services</div>
                <ul class="footer-links">
                    <li><a href="{{ url('/services') }}"><i class="fas fa-ship"></i> Ocean Freight</a></li>
                    <li><a href="{{ url('/services') }}"><i class="fas fa-plane"></i> Air Cargo</a></li>
                    <li><a href="{{ url('/services') }}"><i class="fas fa-truck"></i> Road Logistics</a></li>
                    <li><a href="{{ url('/services') }}"><i class="fas fa-warehouse"></i> Warehousing</a></li>
                    <li><a href="{{ url('/services') }}"><i class="fas fa-file-contract"></i> Customs Brokerage</a></li>
                </ul>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter/X"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div>
                <div class="footer-col-title"><i class="fas fa-address-card"></i> Contact Us</div>
                <ul class="footer-links">
                    <li><a href="mailto:support@apexprimelink-xpress.com"><i class="fas fa-envelope"></i> support@apexprimelink-xpress.com</a></li>
                    <li><a href="#"><i class="fas fa-map-marker-alt"></i>  12 Bishopsgate, London EC2N 4BQ, United Kingdom</a></li>
                </ul>
            </div>
            <div>
                <div class="footer-col-title"><i class="fas fa-link"></i> Quick Links</div>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="{{ url('/about') }}"><i class="fas fa-chevron-right"></i> About Us</a></li>
                    <li><a href="{{ url('/track-now') }}"><i class="fas fa-chevron-right"></i> Track Shipment</a></li>
                    <li><a href="{{ url('/faq') }}"><i class="fas fa-chevron-right"></i> FAQ</a></li>
                    <li><a href="{{ url('/contact') }}"><i class="fas fa-chevron-right"></i> Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} apexprimelink-xpress Company Limited.</span>
            <span class="footer-divider"></span>
            <span>All Rights Reserved.</span>
            <span class="footer-divider"></span>
            <a href="{{ url('/privacy') }}" style="color:rgba(255,255,255,.35);">Privacy Policy</a>
            <span class="footer-divider"></span>
            <a href="{{ url('/terms') }}" style="color:rgba(255,255,255,.35);">Terms of Service</a>
        </div>
    </div>
</footer>

<!-- Toast notification -->
<div class="toast-notify" id="toast-notify" role="status" aria-live="polite">
    <i class="fas fa-check-circle"></i>
    <span>Tracking number copied!</span>
</div>

<!-- Back to top -->
<button class="back-to-top no-print" id="back-to-top" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ---- Map last updated ---- */
    const mapUpdated = document.getElementById('map-last-updated');
    if (mapUpdated) mapUpdated.textContent = 'Loaded at ' + new Date().toLocaleTimeString();

    /* ---- Copy tracking number with toast ---- */
    const copyBtn  = document.getElementById('copy-tracking-btn');
    const toast    = document.getElementById('toast-notify');
    let toastTimer;
    if (copyBtn && toast) {
        const trackNum = copyBtn.closest('.tracking-strip')?.querySelector('strong')?.textContent?.trim() || '';
        copyBtn.addEventListener('click', function () {
            navigator.clipboard.writeText(trackNum).then(function () {
                toast.classList.add('show');
                clearTimeout(toastTimer);
                toastTimer = setTimeout(function () { toast.classList.remove('show'); }, 2600);
            }).catch(function () {
                // Fallback for older browsers
                const ta = document.createElement('textarea');
                ta.value = trackNum;
                ta.style.position = 'fixed'; ta.style.opacity = '0';
                document.body.appendChild(ta);
                ta.select();
                document.execCommand('copy');
                document.body.removeChild(ta);
                toast.classList.add('show');
                clearTimeout(toastTimer);
                toastTimer = setTimeout(function () { toast.classList.remove('show'); }, 2600);
            });
        });
    }

    /* ---- Scroll-reveal (Intersection Observer) ---- */
    if ('IntersectionObserver' in window) {
        const reveals = document.querySelectorAll('.reveal');
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        reveals.forEach(function (el) { observer.observe(el); });
    } else {
        // Fallback: show all immediately
        document.querySelectorAll('.reveal').forEach(function(el){ el.classList.add('visible'); });
    }

    /* ---- Back to top ---- */
    const btt = document.getElementById('back-to-top');
    if (btt) {
        window.addEventListener('scroll', function () {
            btt.classList.toggle('visible', window.scrollY > 380);
        }, { passive: true });
        btt.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ---- Custom cursor ---- */
    (function() {
        var cursor = document.getElementById('custom-cursor');
        if (!cursor) return;
        var mouseX = 0, mouseY = 0, currentX = 0, currentY = 0;
        var pauseTimer = null;
        document.addEventListener('mousemove', function(e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
            cursor.classList.remove('paused');
            clearTimeout(pauseTimer);
            pauseTimer = setTimeout(function() { cursor.classList.add('paused'); }, 500);
        });
        document.addEventListener('mousedown', function() { cursor.classList.add('paused'); });
        document.addEventListener('mouseup',   function() { cursor.classList.remove('paused'); });
        function animateCursor() {
            currentX += (mouseX - currentX) * 0.45;
            currentY += (mouseY - currentY) * 0.45;
            cursor.style.left = currentX + 'px';
            cursor.style.top  = currentY + 'px';
            requestAnimationFrame(animateCursor);
        }
        animateCursor();
    })();

});
</script>

</body>
</html>
