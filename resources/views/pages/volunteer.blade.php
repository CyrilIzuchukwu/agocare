@extends('layouts.app')
@section('content')
    <div class="ago-volunteer-page">

        {{-- Breadcrumb --}}
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Become a Volunteer</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Volunteer</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- ===== HERO INTRO ===== --}}
        <section class="space overflow-hidden" id="ago-vol-intro">
            <div class="container">
                <div class="row gy-50 gx-60 align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="title-area mb-35">
                            <span class="sub-title">Join Our Mission</span>
                            <h2 class="sec-title">Let's Join Our Community to Become a Volunteer</h2>
                            <p class="mt-20">Volunteering with AGO Cares Foundation is one of the most
                                rewarding things you can do. Your time, skills, and energy directly support
                                persons with disabilities, people living with albinism, and vulnerable
                                children across Nigeria.</p>
                            <p class="mt-15">No matter your background - medical, educational, creative,
                                or administrative - there is a meaningful role for you here.</p>
                        </div>

                        <h4 class="h5 mb-20">Volunteer Requirements</h4>
                        <ul class="ago-vol__checklist mb-35">
                            <li><i class="fas fa-check-circle"></i> Passion for social impact and community service</li>
                            <li><i class="fas fa-check-circle"></i> Willingness to commit at least 4 hours per week</li>
                            <li><i class="fas fa-check-circle"></i> Respectful and inclusive attitude toward all persons
                            </li>
                            <li><i class="fas fa-check-circle"></i> Ability to work in a team and follow guidelines</li>
                            <li><i class="fas fa-check-circle"></i> No prior experience required - we train you</li>
                        </ul>

                        <div class="row gy-20">
                            <div class="col-sm-6">
                                <div class="about-feature-grid">
                                    <div class="box-icon">
                                        <i class="fas fa-stethoscope"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="box-title">Healthcare</h4>
                                        <p class="box-text">Support medical outreach and health screenings in communities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-feature-grid">
                                    <div class="box-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="box-title">Education</h4>
                                        <p class="box-text">Teach and mentor children and young adults with special needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="ago-vol__form-wrap">
                            <div class="title-area mb-35 text-center">
                                <span class="sub-title">Apply Now</span>
                                <h3 class="sec-title" style="font-size:26px;">Volunteer Registration</h3>
                                <p>Fill in the form and we will get back to you within 48 hours.</p>
                            </div>
                            <form action="" method="POST" class="ajax-contact">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="first_name"
                                            placeholder="First Name *" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="last_name"
                                            placeholder="Last Name *" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Email Address *" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="tel" class="form-control" name="phone"
                                            placeholder="Phone Number *" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="occupation"
                                            placeholder="Occupation / Profession">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="area">
                                            <option value="" disabled selected>Volunteer Area</option>
                                            <option>Medical Outreach</option>
                                            <option>Education & Tutoring</option>
                                            <option>Media & Communications</option>
                                            <option>Community Outreach</option>
                                            <option>Skills & Vocational Training</option>
                                            <option>Admin & IT Support</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="text" class="form-control" name="availability"
                                            placeholder="Availability (e.g. Weekends, Full-time, Remote)">
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea class="form-control" name="message" rows="3"
                                            placeholder="Tell us about yourself and why you want to volunteer"></textarea>
                                    </div>
                                    <div class="form-btn col-12">
                                        <button type="submit" class="th-btn style3 w-100">
                                            Send Request <i class="fas fa-paper-plane ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3 text-center"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===== COUNTER STRIP ===== --}}
        <div class="ago-vol__counter-strip">
            <div class="container">
                <div class="row gy-30 justify-content-center text-center">
                    <div class="col-6 col-md-3">
                        <div class="ago-vol__counter-item">
                            <div class="ago-vol__counter-num"><span class="counter-number">500</span>+</div>
                            <div class="ago-vol__counter-label">Lives Touched</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="ago-vol__counter-item">
                            <div class="ago-vol__counter-num"><span class="counter-number">25</span>+</div>
                            <div class="ago-vol__counter-label">Active Volunteers</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="ago-vol__counter-item">
                            <div class="ago-vol__counter-num"><span class="counter-number">40</span>+</div>
                            <div class="ago-vol__counter-label">Communities Reached</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="ago-vol__counter-item">
                            <div class="ago-vol__counter-num"><span class="counter-number">5</span>+</div>
                            <div class="ago-vol__counter-label">Years of Impact</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ===== VOLUNTEER AREAS ===== --}}
        <section class="space bg-smoke" id="ago-vol-areas">
            <div class="container">
                <div class="title-area text-center mb-50">
                    <span class="sub-title">Where You Can Help</span>
                    <h2 class="sec-title">Volunteer Areas</h2>
                    <p class="mx-auto" style="max-width:600px;">From healthcare to education, media to administration —
                        find the role that fits your skills and passion.</p>
                </div>
                <div class="ago-vol__service-grid">
                    <div class="ago-vol__service-card">
                        <div class="ago-vol__service-icon"><i class="fas fa-stethoscope"></i></div>
                        <h4 class="box-title mb-2">Medical Outreach</h4>
                        <p class="box-text">Support health screenings, medical camps, and healthcare delivery to
                            underserved communities across Anambra State.</p>
                    </div>
                    <div class="ago-vol__service-card">
                        <div class="ago-vol__service-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                        <h4 class="box-title mb-2">Education & Tutoring</h4>
                        <p class="box-text">Teach, tutor, or mentor children and young adults with special needs,
                            disabilities, and learning challenges.</p>
                    </div>
                    <div class="ago-vol__service-card">
                        <div class="ago-vol__service-icon"><i class="fas fa-camera"></i></div>
                        <h4 class="box-title mb-2">Media & Communications</h4>
                        <p class="box-text">Help document our work through photography, videography, writing, and social
                            media content creation.</p>
                    </div>
                    <div class="ago-vol__service-card">
                        <div class="ago-vol__service-icon"><i class="fas fa-hands-helping"></i></div>
                        <h4 class="box-title mb-2">Community Outreach</h4>
                        <p class="box-text">Participate in awareness campaigns, home visits, and community sensitization
                            programs for disability inclusion.</p>
                    </div>
                    <div class="ago-vol__service-card">
                        <div class="ago-vol__service-icon"><i class="fas fa-tools"></i></div>
                        <h4 class="box-title mb-2">Skills & Vocational</h4>
                        <p class="box-text">Train beneficiaries in tailoring, catering, computing, and other vocational
                            skills that build sustainable livelihoods.</p>
                    </div>
                    <div class="ago-vol__service-card">
                        <div class="ago-vol__service-icon"><i class="fas fa-laptop-code"></i></div>
                        <h4 class="box-title mb-2">Admin & IT Support</h4>
                        <p class="box-text">Assist with data entry, website management, reporting, and office
                            administration to keep operations running.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===== HOW IT WORKS ===== --}}
        <section class="space-bottom bg-smoke" id="ago-vol-process">
            <div class="container">
                <div class="title-area text-center mb-55">
                    <span class="sub-title">Simple Process</span>
                    <h2 class="sec-title">How to Get Started</h2>
                    <p class="mx-auto mt-15" style="max-width:560px;">Joining AGO Cares as a volunteer is simple. We guide
                        you every step of the way.</p>
                </div>
                <div class="ago-vol__steps-row">
                    <div class="ago-vol__step-wrap">
                        <div class="ago-vol__step-card">
                            <div class="ago-vol__step-num">01</div>
                            <div class="ago-vol__step-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h4 class="ago-vol__step-title">Fill the Form</h4>
                            <p class="ago-vol__step-text">Complete the registration form with your details, skills, and
                                availability. Takes less than 5 minutes.</p>
                        </div>
                        <div class="ago-vol__step-connector d-none d-lg-flex">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                    <div class="ago-vol__step-wrap">
                        <div class="ago-vol__step-card">
                            <div class="ago-vol__step-num">02</div>
                            <div class="ago-vol__step-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <h4 class="ago-vol__step-title">We Review</h4>
                            <p class="ago-vol__step-text">Our team reviews your submission within 48 hours and matches you
                                with the most suitable role.</p>
                        </div>
                        <div class="ago-vol__step-connector d-none d-lg-flex">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                    <div class="ago-vol__step-wrap">
                        <div class="ago-vol__step-card">
                            <div class="ago-vol__step-num">03</div>
                            <div class="ago-vol__step-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h4 class="ago-vol__step-title">Orientation</h4>
                            <p class="ago-vol__step-text">Attend a brief orientation to understand our mission, values,
                                safeguarding policies, and your role.</p>
                        </div>
                        <div class="ago-vol__step-connector d-none d-lg-flex">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                    <div class="ago-vol__step-wrap">
                        <div class="ago-vol__step-card">
                            <div class="ago-vol__step-num">04</div>
                            <div class="ago-vol__step-icon">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <h4 class="ago-vol__step-title">Make an Impact</h4>
                            <p class="ago-vol__step-text">Join the team on the field, in the office, or remotely — and
                                start changing lives from day one.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===== VOLUNTEER TESTIMONIALS ===== --}}
        <section class="testi-area-4 space bg-theme-dark overflow-hidden" id="ago-vol-stories">
            <div class="container">
                <div class="row gy-40 gx-80">

                    {{-- Thumbnail slider --}}
                    <div class="col-lg-4 align-self-end">
                        <div class="swiper th-slider testi-thumb-slider4"
                            data-slider-options='{"effect":"fade","loop":false}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-box-img">
                                        <img class="testi-img" src="{{ asset('assets/img/user/user-icon.jpg') }}"
                                            alt="Chidi Okafor — Medical Volunteer at AGO Care Foundation">
                                        <div class="testi-card_review">
                                            <i class="fas fa-star"></i> 5.0
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-box-img">
                                        <img class="testi-img" src="{{ asset('assets/img/user/user-icon.jpg') }}"
                                            alt="Ngozi Eze — Education Volunteer at AGO Care Foundation">
                                        <div class="testi-card_review">
                                            <i class="fas fa-star"></i> 5.0
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-box-img">
                                        <img class="testi-img" src="{{ asset('assets/img/user/user-icon.jpg') }}"
                                            alt="Emeka Nwosu — Community Outreach Volunteer at AGO Care Foundation">
                                        <div class="testi-card_review">
                                            <i class="fas fa-star"></i> 5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Text slider --}}
                    <div class="col-lg-8">
                        <div class="testi-wrap4">
                            <div class="title-area mb-30">
                                <span class="sub-title after-none">Volunteer Stories</span>
                                <h2 class="sec-title text-white">What Our Volunteers Say</h2>
                            </div>
                            <div class="testi-slider4">
                                <div class="swiper th-slider testimonial-slider4" id="volTestiSlide"
                                    data-slider-options='{"loop":false,"paginationType":"progressbar","effect":"fade","autoHeight":"true","thumbs":{"swiper":".testi-thumb-slider4"}}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testi-card4">
                                                <p class="box-text">"Volunteering with AGO Cares changed my perspective
                                                    entirely. Seeing the smiles on the faces of people who received care for
                                                    the first time was priceless. I came expecting to give, but I received
                                                    so much more — purpose, gratitude, and a deeper understanding of what it
                                                    means to serve."</p>
                                                <h3 class="box-title">Chidi Okafor</h3>
                                                <p class="box-desig">Medical Volunteer</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testi-card4">
                                                <p class="box-text">"I came to teach and ended up learning so much more.
                                                    The children I worked with showed me what resilience truly means. Their
                                                    determination in the face of challenges humbled me. I will keep coming
                                                    back — not just to give, but because this work has become a part of who
                                                    I am."</p>
                                                <h3 class="box-title">Ngozi Eze</h3>
                                                <p class="box-desig">Education Volunteer</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testi-card4">
                                                <p class="box-text">"AGO Cares gave me a platform to serve my community in
                                                    a structured, impactful way. The team is amazing and the work is deeply
                                                    fulfilling. Every outreach visit reminds me why I started — to be a
                                                    voice for those who are often overlooked and to stand for inclusion and
                                                    dignity."</p>
                                                <h3 class="box-title">Emeka Nwosu</h3>
                                                <p class="box-desig">Community Outreach Volunteer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-pagination"></div>
                                    <div class="slider-pagination2"></div>
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
                    <div class="swiper th-slider" id="volBrandSlider"
                        data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"5","spaceBetween":"90"}}}'>
                        <div class="swiper-wrapper">
                            @foreach (['brand2-1', 'brand2-2', 'brand2-3', 'brand2-4', 'brand2-5', 'brand2-1', 'brand2-2', 'brand2-3', 'brand2-4', 'brand2-5'] as $brand)
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

        {{-- ===== CTA ===== --}}
        <div class="cta-area-1 space">
            <div class="container z-index-common">
                <div class="cta-area-grid">
                    <div class="cta-card" data-bg-src="{{ asset('assets/img/bg/cta-bg1-1.jpg') }}">
                        <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-right="0"
                            data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
                            <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="Decorative background shape">
                        </div>
                        <h3 class="box-title">Apply Online</h3>
                        <p class="box-text">Ready to take the next step? Submit a full application for a staff or volunteer
                            position at AGO Cares Foundation.</p>
                        <a href="{{ route('apply') }}" class="th-btn style5">
                            Apply Now <i class="fas fa-arrow-up-right ms-2"></i>
                        </a>
                    </div>
                    <div class="cta-card style2" data-bg-src="{{ asset('assets/img/bg/cta-bg1-2.jpg') }}">
                        <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-left="0"
                            data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
                            <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}"
                                alt="Decorative background shape">
                        </div>
                        <h3 class="box-title">Support Our Mission</h3>
                        <p class="box-text">Can't volunteer right now? You can still make a difference by donating to AGO
                            Cares Foundation.</p>
                        <a href="{{ route('donate') }}" class="th-btn style5">
                            Donate Now <i class="fas fa-arrow-up-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
