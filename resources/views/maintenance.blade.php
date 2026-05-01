<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Under Maintenance — {{ $siteName }}</title>
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --primary: #18355b;
      --accent: #c62024;
      --light: #f4f7fb;
    }

    body {
      font-family: 'Nunito Sans', sans-serif;
      background: var(--light);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* ── Top bar ── */
    .maint-topbar {
      background: var(--primary);
      padding: 16px 32px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .maint-topbar img {
      height: 48px;
    }

    .maint-topbar .badge-live {
      background: var(--accent);
      color: #fff;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 4px 14px;
      border-radius: 20px;
    }

    /* ── Main content ── */
    .maint-main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 60px 20px;
    }

    .maint-card {
      background: #fff;
      border-radius: 24px;
      box-shadow: 0 8px 48px rgba(24, 53, 91, 0.10);
      max-width: 680px;
      width: 100%;
      padding: 60px 56px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    /* Decorative top accent line */
    .maint-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: linear-gradient(90deg, var(--primary), var(--accent));
    }

    /* Animated gear icon */
    .maint-icon-wrap {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary), #2a5298);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 32px;
      box-shadow: 0 8px 32px rgba(24, 53, 91, 0.25);
    }

    .maint-icon-wrap i {
      font-size: 42px;
      color: #fff;
      animation: spin-slow 6s linear infinite;
    }

    @keyframes spin-slow {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    .maint-tag {
      display: inline-block;
      background: rgba(198, 32, 36, 0.08);
      color: var(--accent);
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 5px 18px;
      border-radius: 20px;
      margin-bottom: 20px;
    }

    .maint-title {
      font-size: 36px;
      font-weight: 800;
      color: var(--primary);
      line-height: 1.2;
      margin-bottom: 20px;
    }

    .maint-message {
      font-size: 16px;
      color: #666;
      line-height: 1.8;
      margin-bottom: 36px;
    }

    /* Progress bar */
    .maint-progress-wrap {
      background: #f0f0f0;
      border-radius: 50px;
      height: 6px;
      margin-bottom: 36px;
      overflow: hidden;
    }

    .maint-progress-bar {
      height: 100%;
      width: 70%;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      border-radius: 50px;
      animation: progress-pulse 2.5s ease-in-out infinite alternate;
    }

    @keyframes progress-pulse {
      from {
        width: 55%;
      }

      to {
        width: 85%;
      }
    }

    /* Contact row */
    .maint-contact {
      display: flex;
      justify-content: center;
      gap: 24px;
      flex-wrap: wrap;
      margin-bottom: 36px;
    }

    .maint-contact a {
      display: flex;
      align-items: center;
      gap: 8px;
      color: var(--primary);
      text-decoration: none;
      font-size: 14px;
      font-weight: 600;
      padding: 10px 20px;
      border: 2px solid #e8edf4;
      border-radius: 50px;
      transition: all 0.2s;
    }

    .maint-contact a:hover {
      border-color: var(--primary);
      background: var(--primary);
      color: #fff;
    }

    .maint-contact a i {
      font-size: 16px;
    }

    /* Admin login link */
    .maint-admin-link {
      font-size: 13px;
      color: #aaa;
    }

    .maint-admin-link a {
      color: var(--accent);
      text-decoration: none;
      font-weight: 600;
    }

    .maint-admin-link a:hover {
      text-decoration: underline;
    }

    /* ── Footer ── */
    .maint-footer {
      background: var(--primary);
      color: rgba(255, 255, 255, 0.6);
      text-align: center;
      padding: 16px;
      font-size: 13px;
    }

    .maint-footer span {
      color: #fff;
      font-weight: 600;
    }

    @media (max-width: 576px) {
      .maint-card {
        padding: 40px 24px;
      }

      .maint-title {
        font-size: 26px;
      }

      .maint-topbar {
        padding: 12px 20px;
      }

      .maint-topbar img {
        height: 36px;
      }
    }
  </style>
</head>

<body>

  {{-- Top bar --}}
  <div class="maint-topbar">
    <img src="{{ asset('assets/img/logo-copy-white.png') }}" alt="{{ $siteName }} Logo">
    <span class="badge-live">Maintenance</span>
  </div>

  {{-- Main --}}
  <div class="maint-main">
    <div class="maint-card">

      <div class="maint-icon-wrap">
        <i class="fas fa-cog"></i>
      </div>

      <span class="maint-tag">We'll be back soon</span>

      <h1 class="maint-title">We're Under<br>Maintenance</h1>

      <p class="maint-message">{{ $message }}</p>

      <div class="maint-progress-wrap">
        <div class="maint-progress-bar"></div>
      </div>

      <div class="maint-contact">
        <a href="mailto:support@agofoundation.com.ng">
          <i class="fas fa-envelope"></i> Email Us
        </a>
        <a href="https://wa.me/2349123263656" target="_blank" rel="noopener">
          <i class="fab fa-whatsapp"></i> WhatsApp
        </a>
        <a href="tel:+2349123263656">
          <i class="fas fa-phone"></i> Call Us
        </a>
      </div>

      <p class="maint-admin-link">
        Are you an admin? <a href="{{ route('login') }}">Sign in here</a>
      </p>

    </div>
  </div>

  {{-- Footer --}}
  <div class="maint-footer">
    &copy; {{ date('Y') }} <span>{{ $siteName }}</span>. All rights reserved.
  </div>

  <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
</body>

</html>
