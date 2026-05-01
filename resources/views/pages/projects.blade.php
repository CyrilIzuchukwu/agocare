@extends('layouts.app')
@section('content')
    {{-- BREADCRUMB --}}
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">AGO Projects</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>AGO Projects</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- PAGE INTRO --}}
    <section class="space-bottom space-top">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">On The Ground</span>
                <h2 class="sec-title">Projects That Change Lives</h2>
                <p class="sec-text mx-auto" style="max-width:620px;">
                    We don't just raise awareness - we show up. Here are the projects
                    AGO Cares Foundation runs directly in communities across Nigeria.
                </p>
            </div>
        </div>
    </section>



    {{-- PROJECT 1 — MEDICAL OUTREACH --}}
    <section class="ago-project-block container ago-project-odd">
        <div class=" p-0">
            <div class="ago-project-inner">
                <div class="ago-project-img">
                    <img src="{{ asset('assets/img/project/project2.jpg') }}" alt="Medical Outreach">
                </div>
                <div class="ago-project-content">
                    <span class="ago-project-number">01</span>
                    <h2 class="ago-project-title">Medical Services Outreach</h2>
                    <p>We move into underserved communities to provide free medical consultations,
                        health screenings, and essential healthcare items to persons with disabilities
                        who cannot access standard healthcare facilities.</p>
                    <ul class="ago-project-list">
                        <li><i class="fas fa-check-circle"></i> Free health screenings &amp; consultations</li>
                        <li><i class="fas fa-check-circle"></i> Distribution of medications &amp; hygiene kits</li>
                        <li><i class="fas fa-check-circle"></i> Wheelchairs &amp; mobility aids provided</li>
                        <li><i class="fas fa-check-circle"></i> Eye care &amp; vision support</li>
                    </ul>
                    <a href="{{ route('donate') }}" class="th-btn mt-35">
                        Support This Project <i class="fas fa-arrow-up-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- PROJECT 2 — ARTIFICIAL LEGS --}}
    <section class="ago-project-block container ago-project-even">
        <div class="p-0">
            <div class="ago-project-inner">
                <div class="ago-project-img">
                    <img src="{{ asset('assets/img/project/project3.jpg') }}" alt="Artificial Legs">
                </div>
                <div class="ago-project-content">
                    <span class="ago-project-number">02</span>
                    <h2 class="ago-project-title">Provision of Artificial Legs</h2>
                    <p>We partner with medical professionals and donors to provide prosthetic limbs
                        and mobility aids to amputees and physically challenged individuals —
                        restoring their independence and dignity.</p>
                    <ul class="ago-project-list">
                        <li><i class="fas fa-check-circle"></i> Custom-fitted prosthetic limbs</li>
                        <li><i class="fas fa-check-circle"></i> Full rehabilitation follow-up support</li>
                        <li><i class="fas fa-check-circle"></i> Crutches &amp; walking frames distributed</li>
                        <li><i class="fas fa-check-circle"></i> Partnership with certified prosthetists</li>
                    </ul>
                    <a href="{{ route('donate') }}" class="th-btn mt-35">
                        Support This Project <i class="fas fa-arrow-up-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- PROJECT 3 — SPECIAL NEEDS --}}
    <section class="ago-project-block container ago-project-odd space-bottom">
        <div class=" p-0">
            <div class="ago-project-inner">
                <div class="ago-project-img">
                    <img src="{{ asset('assets/img/project/project1.jpg') }}" alt="Special Needs">
                </div>
                <div class="ago-project-content">
                    <span class="ago-project-number">03</span>
                    <h2 class="ago-project-title">Special Needs Intervention</h2>
                    <p>Through education support, skill acquisition, welfare packages, and social
                        inclusion programs, we intervene directly in the lives of orphans, children
                        with disabilities, and individuals with special needs.</p>
                    <ul class="ago-project-list">
                        <li><i class="fas fa-check-circle"></i> School supplies &amp; scholarships</li>
                        <li><i class="fas fa-check-circle"></i> Vocational &amp; skills training</li>
                        <li><i class="fas fa-check-circle"></i> Food packages &amp; clothing</li>
                        <li><i class="fas fa-check-circle"></i> Community inclusion programs</li>
                    </ul>
                    <a href="{{ route('donate') }}" class="th-btn mt-35">
                        Support This Project <i class="fas fa-arrow-up-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- VIDEO --}}
    <div class="video-area-2  bg-theme-dark overflow-hidden shape-mockup-wrap">
        <div class="shape-mockup video-bg-shape2-1" style="top:0;bottom:0;left:0;">
            <img src="{{ asset('assets/img/shape/video_shape2_1.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row gy-40 gx-80 justify-content-between align-items-center">
                <div class="col-xl-5">
                    <div class="title-area mb-35">
                        <span class="sub-title after-none before-none">See Us in Action</span>
                        <h2 class="sec-title text-white">Watch Our Projects Make Real Impact</h2>
                        <p class="text-light">We move into communities across Nigeria bringing
                            healthcare, mobility aids, and empowerment to people who need it most.
                            The work speaks for itself.</p>
                    </div>
                    <div class="row">
                        <div class="col-6 counter-card-wrap">
                            <div class="counter-card">
                                <h2 class="box-number text-theme2">
                                    <span class="counter-number">500</span><span class="fw-light">+</span>
                                </h2>
                                <p class="box-text text-white">Lives Touched</p>
                            </div>
                        </div>
                        <div class="col-6 counter-card-wrap">
                            <div class="counter-card">
                                <h2 class="box-number text-white">
                                    <span class="counter-number">40</span><span class="fw-light">+</span>
                                </h2>
                                <p class="box-text text-white">Communities</p>
                            </div>
                        </div>
                        <div class="col-6 counter-card-wrap">
                            <div class="counter-card">
                                <h2 class="box-number text-white">
                                    <span class="counter-number">25</span><span class="fw-light">+</span>
                                </h2>
                                <p class="box-text text-white">Volunteers</p>
                            </div>
                        </div>
                        <div class="col-6 counter-card-wrap">
                            <div class="counter-card">
                                <h2 class="box-number text-theme2">
                                    <span class="counter-number">350</span><span class="fw-light">+</span>
                                </h2>
                                <p class="box-text text-white">Gift Items</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="video-thumb2-1 video-box-center">
                        <img src="{{ asset('assets/img/normal/video-thumb2-1.png') }}" alt="AGO Projects">
                        <h2 class="video-title">Watch Now</h2>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style5 popup-video">
                            <i class="fa-sharp fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- CTA --}}
    <div class="cta-area-1 space">
        <div class="container z-index-common">
            <div class="cta-area-grid">
                <div class="cta-card" data-bg-src="{{ asset('assets/img/bg/cta-bg1-1.jpg') }}">
                    <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-right="0"
                        data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
                        <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="img">
                    </div>
                    <h3 class="box-title">Become a Volunteer</h3>
                    <p class="box-text">Join our outreach teams and make a hands-on difference
                        in the lives of persons with disabilities across Nigeria.</p>
                    <a href="{{ route('volunteer') }}" class="th-btn style5">
                        Volunteer With Us <i class="fas fa-arrow-up-right ms-2"></i>
                    </a>
                </div>
                <div class="cta-card style2" data-bg-src="{{ asset('assets/img/bg/cta-bg1-2.jpg') }}">
                    <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-left="0"
                        data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
                        <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="img">
                    </div>
                    <h3 class="box-title">Support Our Projects</h3>
                    <p class="box-text">Your donation funds medical outreach, artificial limbs,
                        and special needs programs that create real lasting impact.</p>
                    <a href="{{ route('donate') }}" class="th-btn style5">
                        Donate Now <i class="fas fa-arrow-up-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
