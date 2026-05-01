@extends('layouts.app')
@section('content')
{{-- ===== BREADCRUMB ===== --}}
<div class="breadcumb-wrapper">
  <div class="container">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">About Us</h1>
      <ul class="breadcumb-menu">
        <li><a href="/">Home</a></li>
        <li>About Us</li>
      </ul>
    </div>
  </div>
</div>


{{-- ===== MISSION / VISION / CORE VALUES ===== --}}
<section class="space" id="mission-vision">
  <div class="container">
    <div class="title-area mb-30 text-center">
      <span class="sub-title">AGO Care Foundation</span>
      <h2 class="sec-title">Who We Are & What We Stand For</h2>
    </div>
    <div class="service-grid-wrapper">
      <div class="feature-card style2">
        <div class="feature-card-bg-shape">
          <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="Decorative card background shape">
        </div>
        <div class="box-icon">
          <i class="fas fa-bullseye"></i>
        </div>
        <h3 class="box-title">Our Mission</h3>
        <p class="box-text">To raise awareness and promote acceptance by educating society on disability
          issues, reducing stigma, and supporting equal social and economic inclusion for persons with
          disabilities.</p>
      </div>

      <div class="feature-card style2">
        <div class="feature-card-bg-shape">
          <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="Decorative card background shape">
        </div>
        <div class="box-icon">
          <i class="fas fa-eye"></i>
        </div>
        <h3 class="box-title">Our Vision</h3>
        <p class="box-text">To build an inclusive Nigeria where persons with disabilities have equal access
          to education, opportunities, social support, and economic empowerment without barriers.</p>
      </div>

      <div class="feature-card style2">
        <div class="feature-card-bg-shape">
          <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="Decorative card background shape">
        </div>
        <div class="box-icon">
          <i class="fas fa-cog"></i>
        </div>
        <h3 class="box-title">Our Core Values</h3>
        <p class="box-text">Creativity, Respect, Integrity, Confidence, Service, Empathy, Inclusion,
          Excellence, Accountability, and Collaboration in delivering support and equal opportunities
          for all.</p>
      </div>
    </div>
  </div>
</section>


{{-- ===== WHO WE ARE ===== --}}
<div class="overflow-hidden space-bottom shape-mockup-wrap" id="who-we-are">
  <div class="shape-mockup about-bg-shape2-1 jump-reverse" style="top: 10%; right: 5%;">
    <img src="{{ asset('assets/img/shape/heart-shape1.png') }}" alt="shape">
  </div>
  <div class="container">
    <div class="row gx-60 gy-60 align-items-center">
      <div class="col-xl-6 col-lg-10">
        <div class="img-box2">
          <div class="img1">
            <img src="{{ asset('assets/img/normal/about_2_1.png') }}" alt="About">
          </div>
          <div class="img2 jump">
            <img src="{{ asset('assets/img/normal/about_2_2.png') }}" alt="About">
          </div>
          <div class="img3 moving bg-mask"
            style="mask-image: url('{{ asset('assets/img/normal/about_2_3-mask.png') }}');">
            <img src="{{ asset('assets/img/normal/about_2_3.png') }}" alt="About" class="bg-mask"
              style="mask-image: url('{{ asset('assets/img/normal/about_2_3-mask.png') }}');">
          </div>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="about-wrap2">
          <div class="title-area mb-35">
            <span class="sub-title after-none before-none">Welcome to AGO Cares Foundation</span>
            <h2 class="sec-title">Hope. Care. Dignity.</h2>
            <p class="mt-30">Abugu Gloria Onyedikachi Foundation (AGO CARES) is a Non-Governmental
              Organisation committed to improving the quality of life of people with special needs.
              Through health interventions, academic support, skills development, economic
              empowerment, social welfare, and advocacy, we promote social inclusion, dignity,
              and human rights.</p>
          </div>

          <div class="about-feature-grid">
            <div class="box-icon">
              <img src="{{ asset('assets/img/icon/feature-icon3-4.svg') }}" alt="icon">
            </div>
            <div class="media-body">
              <h4 class="box-title">People Living with Albinism</h4>
              <p class="box-text">We support people living with albinism through healthcare access,
                awareness campaigns, protection of rights, and social inclusion initiatives.</p>
            </div>
          </div>

          <div class="about-feature-grid">
            <div class="box-icon">
              <img src="{{ asset('assets/img/icon/feature-icon3-4.svg') }}" alt="icon">
            </div>
            <div class="media-body">
              <h4 class="box-title">People with Disabilities & Orphans</h4>
              <p class="box-text">We empower persons with disabilities and support orphanages by
                providing welfare assistance, education support, skill acquisition, and advocacy
                for equal opportunities.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


{{-- ===== MARQUEE STRIP ===== --}}
<div class="space-bottom overflow-hidden ago-marquee-wrap">
  <div class="container-fluid p-0">
    <div class="swiper th-slider marquee-slider1"
      data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"true","speed":10000,"spaceBetween":20}'>
      <div class="swiper-wrapper">
        @foreach (['Hope', 'Care', 'Dignity', 'Inclusion', 'Health', 'Education', 'Empowerment', 'Disability', 'Albinism', 'Community', 'Hope', 'Care', 'Dignity', 'Inclusion', 'Health', 'Education'] as $index => $word)
        <div class="swiper-slide">
          <div class="marquee-card">
            <a href="#">
              <span
                class="{{ $index % 2 === 0 ? 'text-stroke' : 'text-theme' }}">{{ $word }}</span>
            </a>
            <span><img src="{{ asset('assets/img/icon/marquee-circle-icon.svg') }}"
                alt="img"></span>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>


{{-- ===== OUR TEAM ===== --}}
<section class="space-bottom team-area-1" id="our-team">
  <div class="shape-mockup team-bg-shape1-1 spin d-xxl-block d-none" data-top="0%" data-right="3%">
    <img src="{{ asset('assets/img/shape/hand-group-shape1.png') }}" alt="img">
  </div>
  <div class="container">
    <div class="title-area text-center mb-50">
      <span class="sub-title">The People Behind AGO</span>
      <h2 class="sec-title">Meet Our Team</h2>
    </div>

    {{-- Founder Highlight --}}
    <div class="row gx-0 justify-content-center mb-60 founder-highlight">
      <div class="col-lg-5">
        <div class="swiper th-slider testi-thumb-slider1"
          data-slider-options='{"effect":"fade","loop":false}'>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testi-box-img">
                <img class="testi-img" src="{{ asset('assets/img/user/user-icon.jpg') }}"
                  alt="Mrs. Abugu Gloria">
                <div class="testi-card_review">
                  <i class="fas fa-star"></i> Founder
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="testi-slider1">
          <div class="testi-card">
            <p class="box-text">"I founded AGO Cares Foundation with one clear purpose — to ensure that
              persons
              with disabilities, people living with albinism, and vulnerable children are never left
              behind.
              Too many face not just physical challenges, but the crushing weight of stigma and exclusion.
              Through healthcare, education, and advocacy, we are building a Nigeria where no one is
              defined
              by their condition but celebrated for their potential."</p>
            <h3 class="box-title">Mrs. Abugu Gloria Onyedikachi</h3>
            <p class="box-desig">Founder &amp; President, AGO Cares Foundation</p>
            <div class="quote-icon" data-mask-src="{{ asset('assets/img/icon/quote2.svg') }}"></div>
          </div>
        </div>
      </div>
    </div>

    {{-- Board of Directors --}}
    <div class="title-area text-center mb-40">
      <span class="sub-title">Governance</span>
      <h2 class="sec-title">Board of Directors</h2>
    </div>

    <div class="slider-area directors">
      <div class="swiper th-slider has-shadow" id="teamSlider3"
        data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
        <div class="swiper-wrapper">

          @php
          $board = [
          ['name' => 'Mrs. Abugu Gloria Onyedikachi', 'role' => 'Chairman'],
          ['name' => 'Mr. Patrick Chukwuka Chinadum', 'role' => 'Board Member'],
          ['name' => 'Nweke Ukamaka Irene', 'role' => 'Board Member'],
          ['name' => 'Fabian Onyekachi', 'role' => 'Board Member'],
          ['name' => 'Abugu Kasiemobi', 'role' => 'Board Member'],
          ['name' => 'Tagbo Francis Obiozor', 'role' => 'Board Member'],
          ['name' => 'Azuta Ifeoma Calista', 'role' => 'Board Member'],
          ];
          @endphp

          @foreach ($board as $member)
          <div class="swiper-slide">
            <div class="th-team directors team-card3">
              <div class="team-img">
                <img src="{{ asset('assets/img/user/user-icon.jpg') }}"
                  alt="{{ $member['name'] }}">
              </div>
              <div class="team-card-content">
                <h3 class="box-title">{{ $member['name'] }}</h3>
                <span class="team-desig">{{ $member['role'] }}</span>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</section>



{{-- ===== PARTNER WITH AGO ===== --}}
<section class="space background-image shape-mockup-wrap" id="partner"
  style="background-image: url(&quot;assets/img/bg/gray-bg2.png&quot;);">
  <div class="container">
    <div class="title-area text-center mb-50">
      <span class="sub-title">Work With Us</span>
      <h2 class="sec-title">Partner with AGO Cares Foundation</h2>
    </div>

    <div class="row gy-40 align-items-start">
      <div class="col-lg-6">
        <div class="ago-partner-text">
          <p class="mb-20">AGO Cares Foundation is willing to partner with local and international
            non-governmental organizations with similar interests. We welcome volunteers and donors
            who share our vision of offering help and providing selfless services towards enlivening
            those people in dire need of our support.</p>
          <p class="mb-30">Volunteers are great assets and positively impact the lives of those they
            help. Our volunteers and donors are highly valued and appreciated. With your support,
            you can help us achieve our vision of giving hope and a future to the hopeless!</p>

          <div class="btn-wrap">
            <a href="{{ route('volunteer') }}" class="th-btn me-3">
              Volunteer <i class="fas fa-arrow-up-right ms-2"></i>
            </a>
            <a href="{{ route('donate') }}" class="th-btn style-border">
              Donate Now <i class="fas fa-arrow-up-right ms-2"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="ago-bank-wrap">
          <h4 class="ago-bank-heading mb-25">
            <i class="fas fa-university me-2 text-theme"></i> Donation Bank Details
          </h4>

          <div class="ago-bank-card mb-20">
            <div class="ago-bank-logo">
              <i class="fas fa-landmark"></i>
            </div>
            <div class="ago-bank-info">
              <span class="ago-bank-name">Keystone Bank Plc</span>
              <p class="ago-bank-acct-name">AGO Cares Foundation for People with Disability</p>
              <div class="ago-bank-number">
                <span class="label">Account Number:</span>
                <strong>0000 000 0000</strong>
              </div>
            </div>
          </div>

          <div class="ago-bank-card">
            <div class="ago-bank-logo">
              <i class="fas fa-landmark"></i>
            </div>
            <div class="ago-bank-info">
              <span class="ago-bank-name">Ecobank Nigeria Plc</span>
              <p class="ago-bank-acct-name">AGO Cares Foundation for People with Disability</p>
              <div class="ago-bank-number">
                <span class="label">Account Number:</span>
                <strong>0000 000 000</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== PARTNERS / BRAND ===== --}}
<div class="bg-theme-dark overflow-hidden brand-area-1"
  data-mask-src="{{ asset('assets/img/shape/brand-bg-shape1.png') }}">
  <div class="container">
    <div class="brand-wrap1 text-center">
      <h3 class="brand-wrap-title text-white">
        Supported by <span class="text-theme2">Partners</span> who share our vision
      </h3>
      <div class="swiper th-slider" id="brandSlider1"
        data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5","spaceBetween":"90"}}}'>
        <div class="swiper-wrapper">
          @foreach (['brand2-1', 'brand2-2', 'brand2-3', 'brand2-4', 'brand2-5', 'brand2-1', 'brand2-2', 'brand2-3', 'brand2-4', 'brand2-5'] as $brand)
          <div class="swiper-slide">
            <a href="#" class="brand-box">
              <img src="{{ asset('assets/img/brand/' . $brand . '.svg') }}" alt="Partner Logo">
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>


{{-- ===== GIFTS IN KIND ===== --}}
<section class="space" id="gifts-in-kind">
  <div class="container">
    <div class="title-area mb-30 text-center">
      <span class="sub-title">Gifts in Kind</span>
      <h2 class="sec-title">Items We Need</h2>
      <p class="sec-text mx-auto" style="max-width:600px;">Every item donated goes directly
        towards supporting vulnerable people. All contributions are greatly appreciated.</p>
    </div>

    <div class="service-grid-wrapper">
      <div class="feature-card style2">
        <div class="feature-card-bg-shape">
          <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="Decorative card background shape">
        </div>
        <div class="box-icon"><i class="fas fa-medkit"></i></div>
        <h3 class="box-title">Medical Supplies</h3>
        <p class="box-text">Audiometers, blood pressure monitors, wheelchairs, ultrasound machines,
          ECG machines, stethoscopes, malaria kits, pharmaceuticals, first-aid kits, and hygiene kits.</p>
      </div>

      <div class="feature-card style2">
        <div class="feature-card-bg-shape">
          <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="Decorative card background shape">
        </div>
        <div class="box-icon"><i class="fas fa-apple-alt"></i></div>
        <h3 class="box-title">Food Items</h3>
        <p class="box-text">Baby formula, powdered milk, beans, rice, noodles, cereal,
          nutritional drinks, and canned foods for vulnerable individuals and families.</p>
      </div>

      <div class="feature-card style2">
        <div class="feature-card-bg-shape">
          <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="Decorative card background shape">
        </div>
        <div class="box-icon"><i class="fas fa-tools"></i></div>
        <h3 class="box-title">Vocational Training</h3>
        <p class="box-text">Computers, printers, photocopying machines, sewing machines,
          industrial gas cooker, electric mixer, and a medium size generator.</p>
      </div>

      <div class="feature-card style2">
        <div class="feature-card-bg-shape">
          <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="Decorative card background shape">
        </div>
        <div class="box-icon"><i class="fas fa-low-vision"></i></div>
        <h3 class="box-title">Blind &amp; Low Vision</h3>
        <p class="box-text">Braille embossers, smart braillers, magnifying devices,
          assistive and educational materials, computers, and catering class supplies.</p>
      </div>

      <div class="feature-card style2">
        <div class="feature-card-bg-shape">
          <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="Decorative card background shape">
        </div>
        <div class="box-icon"><i class="fas fa-box-open"></i></div>
        <h3 class="box-title">Other Items</h3>
        <p class="box-text">Baby products, children's diapers, clothing, shoes,
          books, educational supplies, toiletries, bibles, and toys.</p>
      </div>

      <div class="feature-card style2">
        <div class="feature-card-bg-shape">
          <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="Decorative card background shape">
        </div>
        <div class="box-icon"><i class="fas fa-hand-holding-heart"></i></div>
        <h3 class="box-title">Can You Help?</h3>
        <p class="box-text">No contribution is too small. Reach out to us and we will guide
          you on how to get your donation to the right hands.</p>
        <a href="{{ route('contact') }}" class="th-btn mt-20">
          Get in Touch <i class="fas fa-arrow-up-right ms-2"></i>
        </a>
      </div>
    </div>

  </div>
</section>


{{-- ===== CTA — VOLUNTEER + SUPPORT ===== --}}
<div class="cta-area-1 space-bottom">
  <div class="container z-index-common">
    <div class="cta-area-grid">
      <div class="cta-card" data-bg-src="{{ asset('assets/img/bg/cta-bg1-1.jpg') }}">
        <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-right="0"
          data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
          <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="img">
        </div>
        <h3 class="box-title">Become a Volunteer</h3>
        <p class="box-text">Share your time and skills to support people with disabilities,
          individuals living with albinism, and orphaned children through outreach, care,
          and community advocacy.</p>
        <a href="{{ route('volunteer') }}" class="th-btn style5">
          Volunteer With Us <i class="fas fa-arrow-up-right ms-2"></i>
        </a>
      </div>

      <div class="cta-card style2" data-bg-src="{{ asset('assets/img/bg/cta-bg1-2.jpg') }}">
        <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-left="0"
          data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
          <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="img">
        </div>
        <h3 class="box-title">Support Our Mission</h3>
        <p class="box-text">Help us provide healthcare and education for vulnerable people,
          empower communities, and create sustainable programs with long-term impact
          and lasting change.</p>
        <a href="{{ route('donate') }}" class="th-btn style5">
          Support Now <i class="fas fa-arrow-up-right ms-2"></i>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
