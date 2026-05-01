@extends('layouts.app')
@section('content')
<!-- Hero Area -->
@include('partials.hero')



<!-- Mission Area -->
<section class="space">
    <div class="container">
        <div class="title-area mb-30 text-center">
            <span class="sub-title">AGO Care Foundation</span>
            <h2 class="sec-title">Your Generosity Changes Lives</h2>
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
                    Excellence, Accountability, and Collaboration in delivering support and equal opportunities for
                    all.</p>
            </div>
        </div>
    </div>
</section>


<!-- About Area -->
<div class="overflow-hidden space-bottom shape-mockup-wrap" id="about-sec">
    <div class="shape-mockup about-bg-shape2-1 jump-reverse" style="top: 10%; right: 5%;">
        <img src="assets/img/shape/heart-shape1.png" alt="shape">
    </div>
    <div class="container">
        <div class="row gx-60 gy-60 align-items-center">
            <div class="col-xl-6 col-lg-10">
                <div class="img-box2">
                    <div class="img1">
                        <img src="assets/img/normal/about_2_1.png" alt="About">
                    </div>
                    <div class="img2 jump">
                        <img src="assets/img/normal/about_2_2.png" alt="About">
                    </div>

                    <div class="img3 moving bg-mask"
                        style="mask-image: url(&quot;assets/img/normal/about_2_3-mask.png&quot;);">
                        <img src="assets/img/normal/about_2_3.png" alt="About" class="bg-mask"
                            style="mask-image: url(&quot;assets/img/normal/about_2_3-mask.png&quot;);">
                    </div>

                </div>
            </div>
            {{-- <div class="col-xl-6">
                    <div class="about-wrap2">
                        <div class="title-area mb-35">
                            <span class="sub-title after-none before-none">Welcome to Donet Charity</span>
                            <h2 class="sec-title">Transforming Lives,
                                One Donation at a Time</h2>
                            <p class="mt-30">Our secure online donation platform allows you to make contributions quickly
                                and safely. Choose from various payment methods and set up one-time or recurring donations
                                with ease. Your support helps us continue our mission.</p>
                        </div>
                        <div class="about-feature-grid">
                            <div class="box-icon">
                                <img src="assets/img/icon/about-icon2-1.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="box-title">Fundraising</h4>
                                <p class="box-text">Discover the inspiring stories of individuals and communities
                                    transformed by our programs.</p>
                            </div>
                        </div>
                        <div class="about-feature-grid">
                            <div class="box-icon">
                                <img src="assets/img/icon/about-icon2-2.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="box-title">Donation Making</h4>
                                <p class="box-text">Our success stories highlight the real-life impact of your donations and
                                    the resilience of those we help.</p>
                            </div>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="th-btn">About More<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div> --}}

            <div class="col-xl-6">
                <div class="about-wrap2">
                    <div class="title-area mb-35">
                        <span class="sub-title after-none before-none">
                            Welcome to AGO Cares Foundation
                        </span>

                        <h2 class="sec-title">
                            Hope. Care. Dignity.
                        </h2>

                        <p class="mt-30">
                            Abugu Gloria Onyedikachi Foundation (AGO CARES) is a Non-Governmental
                            Organisation committed to improving the quality of life of people
                            with special needs. Through health interventions, academic support,
                            skills development, economic empowerment, social welfare, and advocacy,
                            we promote social inclusion, dignity, and human rights.
                        </p>
                    </div>

                    <div class="about-feature-grid">
                        <div class="box-icon">
                            <i></i>
                            <img src="assets/img/icon/feature-icon3-4.svg" alt="icon">
                        </div>
                        <div class="media-body">
                            <h4 class="box-title">People Living with Albinism</h4>
                            <p class="box-text">
                                We support people living with albinism through healthcare access,
                                awareness campaigns, protection of rights, and social inclusion initiatives.
                            </p>
                        </div>
                    </div>

                    <div class="about-feature-grid">
                        <div class="box-icon">
                            <img src="assets/img/icon/feature-icon3-4.svg" alt="icon">
                        </div>
                        <div class="media-body">
                            <h4 class="box-title">People with Disabilities & Orphans</h4>
                            <p class="box-text">
                                We empower persons with disabilities and support orphanages by providing
                                welfare assistance, education support, skill acquisition, and advocacy
                                for equal opportunities.
                            </p>
                        </div>
                    </div>

                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="th-btn">
                            Learn More About Us
                            <i class="fas fa-arrow-up-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Cta Area -->
<div class="cta-area-1">
    <div class="container z-index-common" data-pos-for="#donation-sec" data-sec-pos="bottom-half">
        <div class="cta-area-grid">

            <!-- Volunteer CTA -->
            <div class="cta-card" data-bg-src="assets/img/bg/cta-bg1-1.jpg">
                <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-right="0"
                    data-mask-src="assets/img/shape/cta_shape1_1.png">
                    <img src="assets/img/shape/cta_shape1_1.png" alt="img">
                </div>

                <h3 class="box-title">Become a Volunteer</h3>
                <p class="box-text">
                    Share your time and skills to support people with disabilities,
                    individuals living with albinism, and orphaned children through
                    outreach, care, and community advocacy.
                </p>

                <a href="contact.html" class="th-btn style5">
                    Volunteer With Us <i class="fas fa-arrow-up-right ms-2"></i>
                </a>
            </div>

            <!-- Support CTA -->
            <div class="cta-card style2" data-bg-src="assets/img/bg/cta-bg1-2.jpg">
                <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-left="0"
                    data-mask-src="assets/img/shape/cta_shape1_1.png">
                    <img src="assets/img/shape/cta_shape1_1.png" alt="img">
                </div>

                <h3 class="box-title">Support Our Mission</h3>
                <p class="box-text">
                    Help us provide healthcare and education for vulnerable people,
                    empower communities, and create sustainable programs with
                    long-term impact and lasting change.
                </p>

                <a href="donate.html" class="th-btn style5">
                    Support Now <i class="fas fa-arrow-up-right ms-2"></i>
                </a>
            </div>

        </div>
    </div>
</div>


<!-- Target Focus Area -->
<section class="space " data-bg-src="assets/img/bg/donation-bg1-1.png" id="donation-sec">
    {{-- <div class="donation-card" data-theme-color="var(--theme-color2)"> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-area text-center">
                    <span class="sub-title">Our Targets/Focus</span>
                    <h2 class="sec-title">Changing Lives of the Vulnerable</h2>

                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="donationSlider1"
                data-slider-options='{"loop": true, "autoplay": {"delay": 4000, "disableOnInteraction": false, "reverseDirection": true}, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}, "autoHeight": "true"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="donation-card" data-theme-color="">
                            <div class="donation-card-shape"
                                data-mask-src="{{ asset('assets/img/target/target-shape.png') }}"></div>
                            <div class="box-thumb">
                                <img src="{{ asset('assets/img/target/target3.jpg') }}" alt="image">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">
                                    <a href="">Helping Vulnerable Children
                                    </a>
                                </h3>
                                <p>Providing care, education, and basic needs for vulnerable children.</p>

                                <a href="" class="th-btn">Donate
                                    <i class="fas fa-arrow-up-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="donation-card" data-theme-color="">
                            <div class="donation-card-shape"
                                data-mask-src="{{ asset('assets/img/target/target-shape.png') }}"></div>
                            <div class="box-thumb">
                                <img src="{{ asset('assets/img/target/target4.jpg') }}" alt="image">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title"><a href="">Supporting the Visually Impaired</a></h3>
                                <p>Providing skills, education, and support for the visually impaired.</p>


                                <a href="" class="th-btn">Donate <i
                                        class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="donation-card" data-theme-color="">
                            <div class="donation-card-shape"
                                data-mask-src="{{ asset('assets/img/target/target-shape.png') }}"></div>
                            <div class="box-thumb">
                                <img src="{{ asset('assets/img/target/target2.jpeg') }}" alt="image">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">
                                    <a href="">
                                        Physical and Mental Disabilities
                                    </a>

                                </h3>
                                <p>Providing skills, care, and support for physical and mental disabilities.</p>

                                <a href="" class="th-btn">Donate Now <i
                                        class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="donation-card" data-theme-color="">
                            <div class="donation-card-shape"
                                data-mask-src="{{ asset('assets/img/target/target-shape.png') }}">
                            </div>
                            <div class="box-thumb">
                                <img src="{{ asset('assets/img/target/target1.jpeg') }}" alt="image">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">
                                    <a href="">
                                        People Living with Albinism
                                    </a>
                                </h3>
                                <p>Providing healthcare items, protection, and support for people with albinism.</p>

                                <a href="" class="th-btn">Donate Now <i
                                        class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#donationSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#donationSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>


<!-- disability-awareness-section Area -->
<section class="disability-awareness-section" id="contact-sec">
    <img src="{{ asset('assets/img/bg/normal.jpg') }}" alt="">
</section>

<!-- Story Area -->
<div class="story-area-1 overflow-hidden space">
    <div class="container">
        <div class="row gy-40 justify-content-between flex-row-reverse align-items-center">
            <div class="col-xl-7">
                <div class="story-img-box1">
                    <div class="box-wrap d-inline-block">
                        <div class="img1">
                            <img src="{{ asset('assets/img/normal/story.png') }}" alt="img">
                        </div>
                        <div class="story-shape1-1 jump-reverse">
                            <img src="{{ asset('assets/img/shape/story_shape1_1.png') }}" alt="img">
                        </div>
                        <div class="story-card movingX">
                            <h5 class="box-title">Adaobi Eze</h5>
                            <p class="box-text">With the business training and startup kit from AGO Care,
                                I opened my tailoring shop. You showed me my skin condition
                                isn't a disability - but a different ability.</p>
                            <div class="quote-icon" data-mask-src="{{ asset('assets/img/icon/quote.svg') }}"></div>
                        </div>
                        <div class="year-counter">
                            <p class="year-counter_text">Years of <span>Impact</span></p>
                            <div class="year-counter_number"><span class="counter-number">5</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="story-wrap1">
                    <div class="title-area mb-0">
                        <span class="sub-title before-none">Success Stories</span>
                        <h2 class="sec-title">Real Lives Changed Through Care and Compassion</h2>
                        <p class="mt-30">From persons living with albinism gaining confidence and healthcare,
                            to visually impaired students excelling academically, and persons with disabilities
                            building livelihoods - every story is proof that your support transforms lives.</p>
                        <div class="btn-wrap mt-35">
                            <a href="about.html" class="th-btn style-border">Read Our Stories <i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--Team Area -->
<section class="space-bottom team-area-1">
    <div class="shape-mockup team-bg-shape1-1 spin d-xxl-block d-none" data-top="0%" data-right="3%"><img
            src="assets/img/shape/hand-group-shape1.png" alt="img"></div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Our Volunteer</span>
            <h2 class="sec-title">Meet The Optimistic Volunteer</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow team-slider1" id="teamSlider1"
                data-slider-options='{"loop": true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="{{ asset('assets/img/user/user-icon.jpg') }}" alt="Team">
                                </div>
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Michel Connor</a></h3>
                                <span class="team-desig">Volunteer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/user/user-icon.jpg" alt="Team">
                                </div>
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Joseph Alexander</a></h3>
                                <span class="team-desig">Volunteer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/user/user-icon.jpg" alt="Team">
                                </div>
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="javascript:void(0)">Jessica Lauren</a></h3>
                                <span class="team-desig">Volunteer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/user/user-icon.jpg" alt="Team">
                                </div>
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Daniel Thomas</a></h3>
                                <span class="team-desig">Volunteer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/user/user-icon.jpg" alt="Team">
                                </div>

                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Daniel Thomas</a></h3>
                                <span class="team-desig">Volunteer</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i
                    class="far fa-arrow-left"></i></button>
            <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i
                    class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>

<!-- Video Area -->
<div class="video-area-1 space bg-theme overflow-hidden">
    <div class="shape-mockup video-bg-shape1-1" data-top="0" data-left="0">
        <img src="assets/img/shape/video_shape1_1.png" alt="img">
    </div>
    <div class="shape-mockup video-bg-shape1-2" data-bottom="0" data-right="0">
        <img src="assets/img/shape/video_shape1_2.png" alt="img">
    </div>
    <div class="container">
        <div class="row gy-40 justify-content-between">
            <div class="col-xl-5">
                <div class="title-area mb-35">
                    <h2 class="sec-title text-white">AGO Foundation Achieivements</h2>
                    <p class="text-white">We move to various communities to put a smile in the face of people living
                        with disabilities.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 counter-card-wrap">
                        <div class="counter-card">
                            <h2 class="box-number text-theme2"><span class="counter-number">500</span><span
                                    class="fw-light">+</span></h2>
                            <p class="box-text text-white">Lives Touched</p>
                        </div>
                    </div>
                    <div class="col-sm-6 counter-card-wrap">
                        <div class="counter-card">
                            <h2 class="box-number text-white"><span class="counter-number">25</span><span
                                    class="fw-light">+</span></h2>
                            <p class="box-text text-white">Staff/Volunteer</p>
                        </div>
                    </div>
                    <div class="col-sm-6 counter-card-wrap">
                        <div class="counter-card">
                            <h2 class="box-number text-white"><span class="counter-number">40</span><span
                                    class="fw-light">+</span></h2>
                            <p class="box-text text-white">Communities Visited</p>
                        </div>
                    </div>
                    <div class="col-sm-6 counter-card-wrap">
                        <div class="counter-card">
                            <h2 class="box-number text-theme2"><span class="counter-number">350</span><span
                                    class="fw-light">+</span></h2>
                            <p class="box-text text-white">Gift Items From Sponsors</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="video-thumb1-1 video-box-center">
                    <img src="assets/img/normal/video-thumb1-1.png" alt="img">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video"><i
                            class="fa-sharp fa-solid fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Testimonial Area -->
<section class="overflow-hidden space overflow-hidden">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> Voices of
                Impact</span>
            <h2 class="sec-title">Stories of Hope and Transformation</h2>
        </div>
        <div class="testi-slider3 slider-area">
            <div class="swiper th-slider" id="testiSlide3"
                data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-card3">
                            <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png">
                            </div>

                            <div class="testi-card_profile">
                                <div class="box-thumb">
                                    <img src="{{ asset('assets/img/user/user-icon.jpg') }}" alt="img">
                                </div>
                                <div class="media-left">
                                    <h3 class="testi-card_name">Chinwe Okonkwo</h3>
                                    <span class="testi-card_desig">Mother of Albino Child</span>
                                </div>
                            </div>
                            <p class="testi-card_text">“AGO Care gave my son confidence. Before, he was hiding at home
                                because of stigma. Now he attends school with sunscreen and glasses you provided. You
                                didn't just give items—you gave him dignity.”</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card3">
                            <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png">
                            </div>

                            <div class="testi-card_profile">
                                <div class="box-thumb">
                                    <img src="{{ asset('assets/img/user/user-icon.jpg') }}" alt="img">
                                </div>
                                <div class="media-left">
                                    <h3 class="testi-card_name">Emeka Nwosu</h3>
                                    <span class="testi-card_desig">Visually Impaired Student</span>
                                </div>
                            </div>
                            <p class="testi-card_text">“The braille materials and audio books from AGO Care changed
                                everything. I'm now first in my class at University of Nigeria. Your support made
                                education accessible when everyone said it was impossible.”</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card3">
                            <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png">
                            </div>

                            <div class="testi-card_profile">
                                <div class="box-thumb">
                                    <img src="{{ asset('assets/img/user/user-icon.jpg') }}" alt="img">
                                </div>
                                <div class="media-left">
                                    <h3 class="testi-card_name">Adaobi Eze</h3>
                                    <span class="testi-card_desig">Albino Entrepreneur</span>
                                </div>
                            </div>
                            <p class="testi-card_text">“With the business training and startup kit from AGO Care, I
                                opened my tailoring shop. Now I employ three others. You showed me my skin condition
                                isn't a disability but a different ability.”</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card3">
                            <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png">
                            </div>

                            <div class="testi-card_profile">
                                <div class="box-thumb">
                                    <img src="{{ asset('assets/img/user/user-icon.jpg') }}" alt="img">
                                </div>
                                <div class="media-left">
                                    <h3 class="testi-card_name">Obinna Chukwu</h3>
                                    <span class="testi-card_desig">Blind Massage Therapist</span>
                                </div>
                            </div>
                            <p class="testi-card_text">“AGO Care trained me in therapeutic massage when I lost my
                                sight. Now I support my family and train others. You turned my darkness into purpose.
                                Ndewo (thank you) for seeing my potential.”</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card3">
                            <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png">
                            </div>

                            <div class="testi-card_profile">
                                <div class="box-thumb">
                                    <img src="{{ asset('assets/img/user/user-icon.jpg') }}" alt="img">
                                </div>
                                <div class="media-left">
                                    <h3 class="testi-card_name">Ngozi Madu</h3>
                                    <span class="testi-card_desig">Community Health Worker</span>
                                </div>
                            </div>
                            <p class="testi-card_text">“The awareness campaigns by AGO Care changed our community's
                                attitude toward albinism. Before, there was fear and myths. Now there's understanding
                                and inclusion. You're healing minds while helping bodies.”</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card3">
                            <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png">
                            </div>

                            <div class="testi-card_profile">
                                <div class="box-thumb">
                                    <img src="{{ asset('assets/img/user/user-icon.jpg') }}" alt="img">
                                </div>
                                <div class="media-left">
                                    <h3 class="testi-card_name">Ifeanyi Okafor</h3>
                                    <span class="testi-card_desig">Father, Visually Impaired</span>
                                </div>
                            </div>
                            <p class="testi-card_text">“The white cane and mobility training from AGO Care gave me
                                independence. I can now walk to market alone and provide for my children. Your work
                                doesn't just help individuals—it strengthens families.”</p>
                        </div>
                    </div>
                </div>
            </div>
            <button data-slider-prev="#testiSlide3" class="slider-arrow style-border slider-prev"><i
                    class="far fa-arrow-left"></i></button>
            <button data-slider-next="#testiSlide3" class="slider-arrow style-border slider-next"><i
                    class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>


<!-- Blog Area -->
<section class="space-bottom" id="blog-sec">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">News & Articles</span>
            <h2 class="sec-title">Our Latest News & Articles</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}, "autoHeight": "true"}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <div class="blog-img-shape1"
                                        data-mask-src="assets/img/blog/blog-card-bg-shape1-2.png"></div>
                                    <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-card-shape"
                                    data-mask-src="assets/img/blog/blog-card-bg-shape1-1.png"></div>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fas fa-calendar"></i>January 10, 2025</a>
                                    <a href="blog.html"><i class="fas fa-tags"></i>Albinism Awareness</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Breaking the Stigma:
                                        Understanding Albinism in Nigeria</a></h3>
                                <a href="blog-details.html" class="th-btn">Read More <i
                                        class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <div class="blog-img-shape1"
                                        data-mask-src="assets/img/blog/blog-card-bg-shape1-2.png"></div>
                                    <img src="assets/img/blog/blog_1_2.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-card-shape"
                                    data-mask-src="assets/img/blog/blog-card-bg-shape1-1.png"></div>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fas fa-calendar"></i>February 28, 2025</a>
                                    <a href="blog.html"><i class="fas fa-tags"></i>Disability Rights</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Empowering Persons with
                                        Disabilities Through Skills Acquisition</a></h3>
                                <a href="blog-details.html" class="th-btn">Read More <i
                                        class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <div class="blog-img-shape1"
                                        data-mask-src="assets/img/blog/blog-card-bg-shape1-2.png"></div>
                                    <img src="assets/img/blog/blog_1_3.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-card-shape"
                                    data-mask-src="assets/img/blog/blog-card-bg-shape1-1.png"></div>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fas fa-calendar"></i>March 24, 2025</a>
                                    <a href="blog.html"><i class="fas fa-tags"></i>Community Outreach</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">AGO Care's Community Visit:
                                        Bringing Hope to the Vulnerable</a></h3>
                                <a href="blog-details.html" class="th-btn">Read More <i
                                        class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <div class="blog-img-shape1"
                                        data-mask-src="assets/img/blog/blog-card-bg-shape1-2.png"></div>
                                    <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-card-shape"
                                    data-mask-src="assets/img/blog/blog-card-bg-shape1-1.png"></div>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fas fa-calendar"></i>April 15, 2025</a>
                                    <a href="blog.html"><i class="fas fa-tags"></i>Healthcare</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Sun Protection and
                                        Skin Health: A Guide for People Living with Albinism</a></h3>
                                <a href="blog-details.html" class="th-btn">Read More <i
                                        class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <div class="blog-img-shape1"
                                        data-mask-src="assets/img/blog/blog-card-bg-shape1-2.png"></div>
                                    <img src="assets/img/blog/blog_1_2.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-card-shape"
                                    data-mask-src="assets/img/blog/blog-card-bg-shape1-1.png"></div>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fas fa-calendar"></i>May 20, 2025</a>
                                    <a href="blog.html"><i class="fas fa-tags"></i>Inclusion</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Building an Inclusive
                                        Nigeria: How You Can Make a Difference</a></h3>
                                <a href="blog-details.html" class="th-btn">Read More <i
                                        class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <div class="blog-img-shape1"
                                        data-mask-src="assets/img/blog/blog-card-bg-shape1-2.png"></div>
                                    <img src="assets/img/blog/blog_1_3.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-card-shape"
                                    data-mask-src="assets/img/blog/blog-card-bg-shape1-1.png"></div>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fas fa-calendar"></i>June 30, 2025</a>
                                    <a href="blog.html"><i class="fas fa-tags"></i>Orphan Support</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">From Orphanage to
                                        Opportunity: Supporting Children Without Families</a></h3>
                                <a href="blog-details.html" class="th-btn">Read More <i
                                        class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev"><i
                    class="far fa-arrow-left"></i></button>
            <button data-slider-next="#blogSlider1" class="slider-arrow slider-next"><i
                    class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>
@endsection
