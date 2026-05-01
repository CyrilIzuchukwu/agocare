<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  {{-- ===== BASIC SEO ===== --}}
  <title>{{ $seo->meta_title ?? ($webName ?? 'AGO Care Foundation') . ' — Hope. Care. Dignity.' }}</title>
  <meta name="author" content="{{ $webName ?? 'AGO Care Foundation' }}">
  <meta name="description"
    content="{{ $seo->meta_description ?? 'AGO Cares Foundation is a Non-Governmental Organisation committed to improving the quality of life of persons with disabilities, people living with albinism, and vulnerable children across Nigeria.' }}">
  @if ($seo->meta_keywords ?? null)
  <meta name="keywords" content="{{ $seo->meta_keywords }}">
  @else
  <meta name="keywords"
    content="AGO Care Foundation, disability support, albinism, orphans, Nigeria NGO, charity, donate, volunteer, Anambra">
  @endif
  <meta name="robots" content="{{ $seo->robots ?? 'index, follow' }}">
  @if ($seo->canonical_url ?? null)
  <link rel="canonical" href="{{ $seo->canonical_url }}">
  @endif

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  {{-- ===== OPEN GRAPH ===== --}}
  <meta property="og:type" content="{{ $seo->og_type ?? 'website' }}">
  <meta property="og:title"
    content="{{ $seo->og_title ?? ($seo->meta_title ?? ($webName ?? 'AGO Care Foundation') . ' — Hope. Care. Dignity.') }}">
  <meta property="og:description"
    content="{{ $seo->og_description ?? ($seo->meta_description ?? 'Supporting persons with disabilities, people living with albinism, and vulnerable children across Nigeria.') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:site_name" content="{{ $webName ?? 'AGO Care Foundation' }}">
  @if ($seo->og_image ?? null)
  <meta property="og:image" content="{{ Storage::url($seo->og_image) }}">
  @else
  <meta property="og:image" content="{{ asset('assets/img/logo-copy.png') }}">
  @endif

  {{-- ===== TWITTER CARD ===== --}}
  <meta name="twitter:card" content="{{ $seo->twitter_card ?? 'summary_large_image' }}">
  <meta name="twitter:title"
    content="{{ $seo->twitter_title ?? ($seo->og_title ?? ($webName ?? 'AGO Care Foundation')) }}">
  <meta name="twitter:description"
    content="{{ $seo->twitter_description ?? ($seo->og_description ?? ($seo->meta_description ?? 'Supporting persons with disabilities across Nigeria.')) }}">
  @if ($seo->twitter_site ?? null)
  <meta name="twitter:site" content="{{ $seo->twitter_site }}">
  @endif
  @if ($seo->twitter_image ?? null)
  <meta name="twitter:image" content="{{ Storage::url($seo->twitter_image) }}">
  @elseif($seo->og_image ?? null)
  <meta name="twitter:image" content="{{ Storage::url($seo->og_image) }}">
  @else
  <meta name="twitter:image" content="{{ asset('assets/img/logo-copy.png') }}">
  @endif

  {{-- ===== GOOGLE SITE VERIFICATION ===== --}}
  @if ($seo->google_site_verification ?? null)
  <meta name="google-site-verification" content="{{ $seo->google_site_verification }}">
  @endif

  {{-- ===== SCHEMA.ORG STRUCTURED DATA ===== --}}
  {{-- @php
  $schemaName = $seo->schema_name ?? ($webName ?? 'AGO Care Foundation');
  $schemaType = $seo->schema_type ?? 'Organization';
  $schemaUrl = $seo->schema_url ?? url('/');
  $schemaLogo = $seo->schema_logo ? Storage::url($seo->schema_logo) : asset('assets/img/logo-copy.png');
  $schemaDesc = $seo->meta_description ?? 'AGO Cares Foundation supports persons with disabilities, people living with albinism, and vulnerable children across Nigeria.';
  $schemaTel = $infos->site_phone ?? '+2349123263656';
  @endphp
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "{{ $schemaType }}",
      "name": "{{ $schemaName }}",
      "url": "{{ $schemaUrl }}",
      "logo": "{{ $schemaLogo }}",
      "description": "{{ $schemaDesc }}",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "{{ $schemaTel }}",
        "contactType": "customer service"
      }
    }
  </script> --}}


  {{-- ===== GOOGLE TAG MANAGER (head) ===== --}}
  @if ($seo->google_tag_manager_id ?? null)
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', '{{ $seo->google_tag_manager_id }}');
  </script>
  @endif

  {{-- ===== GOOGLE ANALYTICS ===== --}}
  @if ($seo->google_analytics_id ?? null)
  <script async src="https://www.googletagmanager.com/gtag/js?id={{ $seo->google_analytics_id }}"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', '{{ $seo->google_analytics_id }}');
  </script>
  @endif

  {{-- ===== FACEBOOK PIXEL ===== --}}
  @if ($seo->facebook_pixel_id ?? null)
  @php $fbPixelId = $seo->facebook_pixel_id; @endphp
  <script>
    (function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', 'https://connect.facebook.net/en_US/fbevents.js'));
    fbq('init', '{{ $fbPixelId }}');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id={{ $fbPixelId }}&ev=PageView&noscript=1" /></noscript>
  @endif

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon.png') }}">
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
  <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
  <meta name="msapplication-TileColor" content="#18355b">
  <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicon.png') }}">
  <meta name="theme-color" content="#18355b">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/mobile.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard_assets/css/iziToast.min.css') }}">
</head>

<body>

  {{-- ===== GOOGLE TAG MANAGER (body) ===== --}}
  @if ($seo->google_tag_manager_id ?? null)
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ $seo->google_tag_manager_id }}"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  @endif

  <!-- Preloader -->
  <div id="global-loader">
    <div class="whirly-loader">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>

  <!-- Search Popup -->
  <div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="far fa-times"></i></button>
    <form action="#">
      <input type="text" placeholder="What are you looking for?">
      <button type="submit"><i class="fal fa-search"></i></button>
    </form>
  </div>

  <!-- Mobile Menu -->
  @include('partials.mobile-menu')

  <!-- Header -->
  @include('partials.header')

  <!-- Page Content -->
  @yield('content')

  <!-- Footer -->
  @include('partials.footer')

  <!-- Scroll To Top -->
  <div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
        style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
      </path>
    </svg>
  </div>

  <!-- JavaScript -->
  <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('dashboard_assets/js/iziToast.min.js') }}"></script>


  <!-- Handle Session Messages with iziToast -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Ensure iziToast is only initialized once
      if (window.iziToastInitialized) return;
      window.iziToastInitialized = true;

      @if(session('success'))
      iziToast.success({
        message: @json(session('success')),
        position: 'topRight',
        timeout: 5000,
        pauseOnHover: true,
        progressBar: true,
        animateInside: true,
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        resetOnHover: true,
      });
      @elseif(session('error'))
      iziToast.error({
        message: @json(session('error')),
        position: 'topRight',
        timeout: 5000,
        pauseOnHover: true,
        progressBar: true,
        animateInside: true,
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        resetOnHover: true,
      });
      @elseif(session('info'))
      iziToast.info({
        message: @json(session('info')),
        position: 'topRight',
        timeout: 5000,
        pauseOnHover: true,
        progressBar: true,
        animateInside: true,
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        resetOnHover: true,
      });
      @elseif(session('warning'))
      iziToast.warning({
        message: @json(session('warning')),
        position: 'topRight',
        timeout: 5000,
        pauseOnHover: true,
        progressBar: true,
        animateInside: true,
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        resetOnHover: true,
      });
      @endif
    });
  </script>


  <!-- WhatsApp Float -->
  <a href="https://wa.me/2349123263656?text=Hello%20AGO%20Care%20Foundation,%20I%20would%20like%20to%20make%20an%20enquiry."
    class="whatsapp-float" target="_blank" rel="noopener"
    aria-label="Chat with AGO Care Foundation on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
</body>

</html>
