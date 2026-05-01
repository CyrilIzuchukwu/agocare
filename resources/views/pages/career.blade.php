@extends('layouts.app')
@section('content')

<div class="ago-career-page">

  {{-- Breadcrumb --}}
  <div class="breadcumb-wrapper">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Career</h1>
        <ul class="breadcumb-menu">
          <li><a href="/">Home</a></li>
          <li>Career</li>
        </ul>
      </div>
    </div>
  </div>

  {{-- Intro --}}
  <section class="space" id="career-intro">
    <div class="container">
      <div class="row gy-40 align-items-center">
        <div class="col-lg-6">
          <div class="title-area mb-30">
            <span class="sub-title">Work With Us</span>
            <h2 class="sec-title">Build a Career That Changes Lives</h2>
            <p class="mt-20">At AGO Cares Foundation, we believe that meaningful work goes beyond a job
              title. We are looking for passionate, driven individuals who want to make a real
              difference in the lives of persons with disabilities, people living with albinism,
              and vulnerable children across Nigeria.</p>
            <p class="mt-15">Join a team that values compassion, integrity, and impact. Whether you are
              a healthcare professional, educator, social worker, or administrator — there is a
              place for you here.</p>
            <div class="btn-wrap mt-35">
              <a href="{{ route('apply') }}" class="th-btn">
                Apply Online <i class="fas fa-arrow-up-right ms-2"></i>
              </a>
              <a href="{{ route('volunteer') }}" class="th-btn style-border ms-3">
                Volunteer Instead <i class="fas fa-arrow-up-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="{{ asset('assets/img/normal/about_3_1.png') }}"
            alt="AGO Care Foundation team members working together in the office"
            class="w-100" style="border-radius:12px;">
        </div>
      </div>
    </div>
  </section>

  {{-- Why Work With Us --}}
  <section class="space bg-smoke" id="why-work-with-ago">
    <div class="container">
      <div class="title-area text-center mb-50">
        <span class="sub-title">Why AGO Cares</span>
        <h2 class="sec-title">Why Work With Us</h2>
      </div>
      <div class="ago-career__values-grid">
        <div class="ago-career__value-card">
          <div class="ago-career__value-icon"><i class="fas fa-heart"></i></div>
          <h4>Purposeful Work</h4>
          <p>Every role directly contributes to improving lives and building an inclusive Nigeria.</p>
        </div>
        <div class="ago-career__value-card">
          <div class="ago-career__value-icon"><i class="fas fa-users"></i></div>
          <h4>Collaborative Team</h4>
          <p>Work alongside dedicated professionals who share your passion for social impact.</p>
        </div>
        <div class="ago-career__value-card">
          <div class="ago-career__value-icon"><i class="fas fa-graduation-cap"></i></div>
          <h4>Growth & Learning</h4>
          <p>Access training, workshops, and development opportunities to grow your skills.</p>
        </div>
        <div class="ago-career__value-card">
          <div class="ago-career__value-icon"><i class="fas fa-handshake"></i></div>
          <h4>Inclusive Culture</h4>
          <p>We practice what we preach — a diverse, respectful, and inclusive workplace for all.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- Current Openings --}}
  <section class="space" id="ago-career-openings">
    <div class="container">
      <div class="title-area text-center mb-50">
        <span class="sub-title">Opportunities</span>
        <h2 class="sec-title">Current Job Openings</h2>
      </div>

      <div class="ago-career__job-card">
        <div class="ago-career__job-header">
          <div>
            <h3 class="box-title mb-1">Program Officer – Disability Inclusion</h3>
            <span class="ago-career__badge ago-career__badge--full">Full Time</span>
          </div>
          <a href="{{ route('apply') }}" class="th-btn">Apply Now <i class="fas fa-arrow-up-right ms-2"></i></a>
        </div>
        <div class="ago-career__job-meta">
          <span><i class="fas fa-map-marker-alt"></i> Amawbia, Anambra State</span>
          <span><i class="fas fa-briefcase"></i> 2+ Years Experience</span>
          <span><i class="fas fa-calendar-alt"></i> Open Until Filled</span>
        </div>
        <p>Responsible for planning, implementing, and monitoring disability inclusion programs across
          communities. The ideal candidate has experience in NGO program management and a passion
          for disability rights.</p>
      </div>

      <div class="ago-career__job-card">
        <div class="ago-career__job-header">
          <div>
            <h3 class="box-title mb-1">Community Health Worker</h3>
            <span class="ago-career__badge ago-career__badge--full">Full Time</span>
          </div>
          <a href="{{ route('apply') }}" class="th-btn">Apply Now <i class="fas fa-arrow-up-right ms-2"></i></a>
        </div>
        <div class="ago-career__job-meta">
          <span><i class="fas fa-map-marker-alt"></i> Anambra State (Field-Based)</span>
          <span><i class="fas fa-briefcase"></i> 1+ Year Experience</span>
          <span><i class="fas fa-calendar-alt"></i> Open Until Filled</span>
        </div>
        <p>Conduct community health outreach, provide basic health education, and support medical
          intervention programs for persons with disabilities and people living with albinism.</p>
      </div>

      <div class="ago-career__job-card">
        <div class="ago-career__job-header">
          <div>
            <h3 class="box-title mb-1">Communications & Social Media Officer</h3>
            <span class="ago-career__badge ago-career__badge--part">Part Time</span>
          </div>
          <a href="{{ route('apply') }}" class="th-btn">Apply Now <i class="fas fa-arrow-up-right ms-2"></i></a>
        </div>
        <div class="ago-career__job-meta">
          <span><i class="fas fa-map-marker-alt"></i> Remote / Hybrid</span>
          <span><i class="fas fa-briefcase"></i> 1+ Year Experience</span>
          <span><i class="fas fa-calendar-alt"></i> Open Until Filled</span>
        </div>
        <p>Manage AGO's social media presence, create compelling content, and help tell the stories
          of the people we serve. Strong writing and digital skills required.</p>
      </div>

      <div class="ago-career__job-card">
        <div class="ago-career__job-header">
          <div>
            <h3 class="box-title mb-1">Volunteer Coordinator</h3>
            <span class="ago-career__badge ago-career__badge--vol">Volunteer Role</span>
          </div>
          <a href="{{ route('apply') }}" class="th-btn">Apply Now <i class="fas fa-arrow-up-right ms-2"></i></a>
        </div>
        <div class="ago-career__job-meta">
          <span><i class="fas fa-map-marker-alt"></i> Amawbia, Anambra State</span>
          <span><i class="fas fa-briefcase"></i> No Experience Required</span>
          <span><i class="fas fa-calendar-alt"></i> Ongoing</span>
        </div>
        <p>Help recruit, onboard, and coordinate volunteers for AGO's outreach programs. A great
          opportunity for students and early-career professionals looking to gain NGO experience.</p>
      </div>
    </div>
  </section>

  {{-- CTA --}}
  <div class="cta-area-1 space-bottom">
    <div class="container z-index-common">
      <div class="cta-area-grid">
        <div class="cta-card" data-bg-src="{{ asset('assets/img/bg/cta-bg1-1.jpg') }}">
          <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-right="0"
            data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
            <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="Decorative background shape">
          </div>
          <h3 class="box-title">Ready to Apply?</h3>
          <p class="box-text">Fill out our online application form and take the first step toward a career with purpose.</p>
          <a href="{{ route('apply') }}" class="th-btn style5">
            Apply Online <i class="fas fa-arrow-up-right ms-2"></i>
          </a>
        </div>
        <div class="cta-card style2" data-bg-src="{{ asset('assets/img/bg/cta-bg1-2.jpg') }}">
          <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-left="0"
            data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
            <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="Decorative background shape">
          </div>
          <h3 class="box-title">Not Ready to Apply?</h3>
          <p class="box-text">Start as a volunteer and experience the AGO Cares mission firsthand before committing full time.</p>
          <a href="{{ route('volunteer') }}" class="th-btn style5">
            Volunteer With Us <i class="fas fa-arrow-up-right ms-2"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

</div>{{-- /.ago-career-page --}}
@endsection
