@extends('layouts.app')
@section('content')

<div class="ago-campaigns-page">

  {{-- Breadcrumb --}}
  <div class="breadcumb-wrapper">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Campaigns</h1>
        <ul class="breadcumb-menu">
          <li><a href="/">Home</a></li>
          <li>Campaigns</li>
        </ul>
      </div>
    </div>
  </div>

  {{-- ===== IMPACT COUNTERS ===== --}}
  <div class="bg-smoke2 pt-80 pb-80">
    <div class="container">
      <div class="title-area text-center mb-50">
        <span class="sub-title">Our Impact</span>
        <h2 class="sec-title">Every Contribution Makes a Difference</h2>
        <p class="mx-auto mt-15" style="max-width:580px;">Since 2019, AGO Cares Foundation has been reaching communities, touching lives, and creating lasting change across Anambra State.</p>
      </div>
      <div class="counter-wrap">
        <div class="counter-card">
          <div class="box-icon">
            <i class="fas fa-users"></i>
          </div>
          <div class="media-body">
            <h2 class="box-number text-theme">
              <span class="counter-number">500</span><span class="fw-light">+</span>
            </h2>
            <p class="box-text">Lives Touched</p>
          </div>
        </div>
        <div class="divider"></div>
        <div class="counter-card">
          <div class="box-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="media-body">
            <h2 class="box-number text-theme2">
              <span class="counter-number">40</span><span class="fw-light">+</span>
            </h2>
            <p class="box-text">Communities Reached</p>
          </div>
        </div>
        <div class="divider"></div>
        <div class="counter-card">
          <div class="box-icon">
            <i class="fas fa-hand-holding-heart"></i>
          </div>
          <div class="media-body">
            <h2 class="box-number text-theme">
              <span class="counter-number">350</span><span class="fw-light">+</span>
            </h2>
            <p class="box-text">Gift Items Donated</p>
          </div>
        </div>
        <div class="divider"></div>
        <div class="counter-card">
          <div class="box-icon">
            <i class="fas fa-calendar-check"></i>
          </div>
          <div class="media-body">
            <h2 class="box-number text-theme2">
              <span class="counter-number">5</span><span class="fw-light">+</span>
            </h2>
            <p class="box-text">Years of Impact</p>
          </div>
        </div>
        <div class="divider"></div>
      </div>
    </div>
  </div>

  {{-- ===== URGENT NEEDS VIDEO CTA ===== --}}
  <section class="space overflow-hidden" style="background:var(--theme-dark);position:relative;">
    <div class="cta-bg-shape4-3 shape-mockup d-lg-block d-none" data-bottom="0" data-left="0">
      <img src="{{ asset('assets/img/shape/cta_shape4_1.png') }}" alt="Decorative shape">
    </div>
    <div style="position:absolute;inset:0;z-index:0;overflow:hidden;">
      <img src="{{ asset('assets/img/bg/cta-bg4-1.jpg') }}"
        alt="AGO Care Foundation campaigns background"
        style="width:100%;height:100%;object-fit:cover;opacity:0.2;">
    </div>
    <div class="container" style="position:relative;z-index:1;">
      <div class="cta-wrap4">
        <div class="cta-title-wrap">
          <div class="row justify-content-between align-items-center">
            <div class="col-xxl-7 col-lg-8">
              <h2 class="sec-title text-white">Support and contribute to their urgent needs</h2>
            </div>
            <div class="col-md-auto">
              <div class="cta-play-btn">
                <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                  class="play-btn style8 popup-video"
                  aria-label="Watch AGO Care Foundation outreach video">
                  <i class="fa-sharp fa-solid fa-play"></i>
                </a>
                <span class="title">Watch Video</span>
              </div>
            </div>
          </div>
        </div>
        <div class="cta-content-wrap">
          <div class="box-icon">
            <i class="fas fa-hand-holding-heart" style="font-size:30px;color:var(--theme-color2);"></i>
          </div>
          <h4 class="title">Every small contribution can create a meaningful change.</h4>
          <a href="{{ route('donate') }}" class="th-btn style5">
            Get Involved <i class="fas fa-arrow-up-right ms-2"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- ===== FUNDRAISING CAMPAIGNS ===== --}}
  <div class="overflow-hidden campaign-area-1 space-top bg-gray"
    data-bg-src="{{ asset('assets/img/bg/gray-bg2.png') }}">
    <div class="shape-mockup d-xl-block d-none campaign-bg-shape1-1 jump-reverse"
      data-bottom="10%" data-right="0">
      <img src="{{ asset('assets/img/shape/campaign-bg-shape1-1.png') }}"
        alt="Decorative campaign background shape">
    </div>
    <div class="shape-mockup d-xl-block d-none campaign-bg-shape1-2" data-top="0" data-right="0">
      <img src="{{ asset('assets/img/shape/campaign-bg-shape1-2.png') }}"
        alt="Decorative campaign background shape">
    </div>
    <div class="container">
      <div class="row align-items-center justify-content-between mb-50">
        <div class="col-lg-7">
          <div class="title-area">
            <span class="sub-title before-none">Fundraising Campaigns</span>
            <h2 class="sec-title">Save the Children, One Donation at a Time</h2>
          </div>
        </div>
        <div class="col-auto">
          <div class="sec-btn">
            <a href="{{ route('donate') }}" class="th-btn">
              Donate Now <i class="fas fa-heart ms-2"></i>
            </a>
          </div>
        </div>
      </div>

      {{-- Campaign Slider --}}
      <div class="slider-area">
        <div class="swiper th-slider has-shadow" id="campaignSlider"
          data-slider-options='{"loop":true,"autoplay":{"delay":5000,"disableOnInteraction":false},"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="donation-card">
                <div class="donation-card-shape"
                  data-mask-src="{{ asset('assets/img/target/target-shape.png') }}"></div>
                <div class="box-thumb">
                  <img src="{{ asset('assets/img/target/target3.jpg') }}"
                    alt="AGO Care Foundation — Helping Vulnerable Children campaign">
                </div>
                <div class="box-content">
                  <span class="ago-campaign__tag">Children & Orphans</span>
                  <h3 class="box-title">
                    <a href="{{ route('donate') }}">Helping Vulnerable Children</a>
                  </h3>
                  <p>Providing care, education, and basic needs for vulnerable children and orphans across Anambra State.</p>
                  <a href="{{ route('donate') }}" class="th-btn mt-20">
                    <i class="fas fa-heart me-2"></i> Donate Now
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="donation-card">
                <div class="donation-card-shape"
                  data-mask-src="{{ asset('assets/img/target/target-shape.png') }}"></div>
                <div class="box-thumb">
                  <img src="{{ asset('assets/img/target/target4.jpg') }}"
                    alt="AGO Care Foundation — Supporting the Visually Impaired campaign">
                </div>
                <div class="box-content">
                  <span class="ago-campaign__tag">Visual Impairment</span>
                  <h3 class="box-title">
                    <a href="{{ route('donate') }}">Supporting the Visually Impaired</a>
                  </h3>
                  <p>Providing braille materials, assistive devices, skills training, and education support for the visually impaired.</p>
                  <a href="{{ route('donate') }}" class="th-btn mt-20">
                    <i class="fas fa-heart me-2"></i> Donate Now
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="donation-card">
                <div class="donation-card-shape"
                  data-mask-src="{{ asset('assets/img/target/target-shape.png') }}"></div>
                <div class="box-thumb">
                  <img src="{{ asset('assets/img/target/target2.jpeg') }}"
                    alt="AGO Care Foundation — Physical and Mental Disabilities campaign">
                </div>
                <div class="box-content">
                  <span class="ago-campaign__tag">Disability Support</span>
                  <h3 class="box-title">
                    <a href="{{ route('donate') }}">Physical & Mental Disabilities</a>
                  </h3>
                  <p>Providing skills training, care, welfare support, and advocacy for persons with physical and mental disabilities.</p>
                  <a href="{{ route('donate') }}" class="th-btn mt-20">
                    <i class="fas fa-heart me-2"></i> Donate Now
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="donation-card">
                <div class="donation-card-shape"
                  data-mask-src="{{ asset('assets/img/target/target-shape.png') }}"></div>
                <div class="box-thumb">
                  <img src="{{ asset('assets/img/target/target1.jpeg') }}"
                    alt="AGO Care Foundation — People Living with Albinism campaign">
                </div>
                <div class="box-content">
                  <span class="ago-campaign__tag">Albinism</span>
                  <h3 class="box-title">
                    <a href="{{ route('donate') }}">People Living with Albinism</a>
                  </h3>
                  <p>Providing sunscreen, protective eyewear, healthcare access, and social inclusion support for persons with albinism.</p>
                  <a href="{{ route('donate') }}" class="th-btn mt-20">
                    <i class="fas fa-heart me-2"></i> Donate Now
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="donation-card">
                <div class="donation-card-shape"
                  data-mask-src="{{ asset('assets/img/target/target-shape.png') }}"></div>
                <div class="box-thumb">
                  <img src="{{ asset('assets/img/project/project1.jpg') }}"
                    alt="AGO Care Foundation — Free Medical Outreach campaign">
                </div>
                <div class="box-content">
                  <span class="ago-campaign__tag">Healthcare</span>
                  <h3 class="box-title">
                    <a href="{{ route('donate') }}">Free Medical Outreach</a>
                  </h3>
                  <p>Funding free health screenings, medications, and referrals for underserved communities across Anambra State.</p>
                  <a href="{{ route('donate') }}" class="th-btn mt-20">
                    <i class="fas fa-heart me-2"></i> Donate Now
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="donation-card">
                <div class="donation-card-shape"
                  data-mask-src="{{ asset('assets/img/target/target-shape.png') }}"></div>
                <div class="box-thumb">
                  <img src="{{ asset('assets/img/project/project2.jpg') }}"
                    alt="AGO Care Foundation — Vocational Skills Training campaign">
                </div>
                <div class="box-content">
                  <span class="ago-campaign__tag">Empowerment</span>
                  <h3 class="box-title">
                    <a href="{{ route('donate') }}">Vocational Skills Training</a>
                  </h3>
                  <p>Equipping persons with disabilities with tailoring, catering, and computing skills to build sustainable livelihoods.</p>
                  <a href="{{ route('donate') }}" class="th-btn mt-20">
                    <i class="fas fa-heart me-2"></i> Donate Now
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <button data-slider-prev="#campaignSlider" class="slider-arrow slider-prev">
          <i class="far fa-arrow-left"></i>
        </button>
        <button data-slider-next="#campaignSlider" class="slider-arrow slider-next">
          <i class="far fa-arrow-right"></i>
        </button>
      </div>
    </div>
  </div>

  {{-- ===== UPCOMING EVENTS ===== --}}
  <section class="space overflow-hidden" id="ago-campaigns-events">
    <div class="container">
      <div class="title-area text-center mb-50">
        <span class="sub-title">Our Events</span>
        <h2 class="sec-title">Join Our Latest Upcoming Events</h2>
      </div>
      <div class="row gy-30">

        <div class="col-12">
          <div class="event-card2">
            <div class="box-thumb">
              <img src="{{ asset('assets/img/project/project1.jpg') }}"
                alt="AGO Care Foundation free medical outreach event — Amawbia community">
            </div>
            <div class="box-content">
              <div class="event-card-meta">
                <span><i class="far fa-calendar-days"></i>June 14, 2026</span>
                <span class="event-card_time"><i class="far fa-clock"></i>9:00 AM – 3:00 PM</span>
              </div>
              <h3 class="box-title">
                <a href="{{ route('donate') }}">Free Medical Outreach — Amawbia Community</a>
              </h3>
              <p class="box-text">Free health screenings, medication distribution, and referrals targeting persons with disabilities, the elderly, and people living with albinism.</p>
              <div class="event-content">
                <div class="media-left">
                  <h5 class="event-box-subtitle">Venue</h5>
                  <p class="event-location">Amawbia Town Hall, Awka South, Anambra State</p>
                  <a href="{{ route('volunteer') }}" class="th-btn">
                    Volunteer <i class="fas fa-arrow-up-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="event-card2">
            <div class="box-thumb">
              <img src="{{ asset('assets/img/project/project2.jpg') }}"
                alt="AGO Care Foundation albinism awareness walk — Awka">
            </div>
            <div class="box-content">
              <div class="event-card-meta">
                <span><i class="far fa-calendar-days"></i>July 26, 2026</span>
                <span class="event-card_time"><i class="far fa-clock"></i>8:00 AM – 12:00 PM</span>
              </div>
              <h3 class="box-title">
                <a href="{{ route('donate') }}">Albinism Awareness Walk — Awka</a>
              </h3>
              <p class="box-text">Walk with us through Awka to raise awareness about the rights, dignity, and inclusion of persons living with albinism. Free sunscreen and protective items distributed.</p>
              <div class="event-content">
                <div class="media-left">
                  <h5 class="event-box-subtitle">Venue</h5>
                  <p class="event-location">Awka City Centre, Anambra State</p>
                  <a href="{{ route('volunteer') }}" class="th-btn">
                    Volunteer <i class="fas fa-arrow-up-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="event-card2">
            <div class="box-thumb">
              <img src="{{ asset('assets/img/project/project3.jpg') }}"
                alt="AGO Care Foundation skills training graduation ceremony">
            </div>
            <div class="box-content">
              <div class="event-card-meta">
                <span><i class="far fa-calendar-days"></i>August 30, 2026</span>
                <span class="event-card_time"><i class="far fa-clock"></i>10:00 AM – 2:00 PM</span>
              </div>
              <h3 class="box-title">
                <a href="{{ route('donate') }}">Skills Training Graduation Ceremony</a>
              </h3>
              <p class="box-text">Celebrate with 30 beneficiaries graduating from our vocational skills training program in tailoring, catering, and computing. Starter kits presented to all graduates.</p>
              <div class="event-content">
                <div class="media-left">
                  <h5 class="event-box-subtitle">Venue</h5>
                  <p class="event-location">AGO Cares Training Centre, Amawbia, Anambra State</p>
                  <a href="{{ route('donate') }}" class="th-btn">
                    Support Event <i class="fas fa-arrow-up-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- ===== MORE PEOPLE CTA ===== --}}
  <section class="space bg-theme-dark overflow-hidden">
    <div class="cta-bg-shape5-1 shape-mockup d-lg-block d-none" data-bottom="0" data-right="0">
      <img src="{{ asset('assets/img/shape/cta_shape5_1.png') }}" alt="Decorative shape">
    </div>
    <div class="cta-bg-shape5-2 shape-mockup d-lg-block d-none" data-top="0" data-left="0">
      <img src="{{ asset('assets/img/shape/cta_shape5_2.png') }}" alt="Decorative shape">
    </div>
    <div class="cta-thumb5-1 shape-mockup" data-top="0" data-left="10%">
      <img src="{{ asset('assets/img/normal/cta_5_1.png') }}"
        alt="AGO Care Foundation volunteer helping a beneficiary">
    </div>
    <div class="cta-thumb5-2 shape-mockup" data-bottom="0" data-right="10%">
      <img src="{{ asset('assets/img/normal/cta_5_2.png') }}"
        alt="AGO Care Foundation community outreach program">
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="title-area text-center mb-0">
            <h2 class="sec-title text-white">More people who wish to help one another are always welcome!</h2>
            <div class="btn-wrap justify-content-center mt-40">
              <a href="{{ route('volunteer') }}" class="th-btn style5 me-3">
                Become a Volunteer <i class="fas fa-arrow-up-right ms-2"></i>
              </a>
              <a href="{{ route('donate') }}" class="th-btn">
                Donate Now <i class="fas fa-heart ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ===== PARTNERS — light bg break after dark CTA ===== --}}
  <div class="overflow-hidden pt-60 pb-60 brand-area-1" style="background:#f5f5f5;">
    <div class="container">
      <div class="brand-wrap1 text-center">
        <h3 class="brand-wrap-title mb-40">
          Supported by <span class="text-theme2">Partners</span> who share our vision
        </h3>
        <div class="swiper th-slider" id="campaignBrandSlider"
          data-slider-options='{"loop":true,"autoplay":{"delay":0,"disableOnInteraction":false},"speed":3000,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"3"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"5","spaceBetween":"90"}}}'>
          <div class="swiper-wrapper">
            @foreach(['brand1-1','brand1-2','brand1-3','brand1-4','brand1-5','brand1-1','brand1-2','brand1-3','brand1-4','brand1-5'] as $brand)
            <div class="swiper-slide">
              <a href="#" class="brand-box">
                <img src="{{ asset('assets/img/brand/' . $brand . '.svg') }}"
                  alt="AGO Care Foundation partner organisation logo">
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

</div>{{-- /.ago-campaigns-page --}}
@endsection
