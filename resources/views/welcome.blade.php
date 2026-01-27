@extends('layouts.app')
@section('content')
    <!-- Hero Area -->
    @include('partials.hero')

    <section class="space">
        <div class="container">
            <div class="title-area mb-30 text-center">
                <span class="sub-title">AGO Care Foundation</span>
                <h2 class="sec-title">Your Generosity Changes Lives</h2>
            </div>
            <div class="service-grid-wrapper">
                <div class="feature-card style2">
                    <div class="feature-card-bg-shape">
                        <img src="assets/img/shape/feature-card-bg-shape1-1.png" alt="img">
                    </div>
                    <div class="box-icon">
                        <img src="assets/img/icon/feature-icon3-1.svg" alt="icon">
                    </div>
                    <h3 class="box-title">Our Mission</h3>
                    <p class="box-text"> To raise awareness and promote acceptance by educating society on disability
                        issues, reducing stigma, and supporting equal social and economic inclusion for persons with
                        disabilities.</p>
                </div>
                    <div class="feature-card style2">
                        <div class="feature-card-bg-shape">
                            <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="assets/img/icon/feature-icon3-2.svg" alt="icon">
                        </div>
                        <h3 class="box-title">Our Vision</h3>
                        <p class="box-text">To build an inclusive Nigeria where persons with disabilities have equal access
                            to education, opportunities, social support, and economic empowerment without barriers.</p>
                    </div>
                    <div class="feature-card style2">
                        <div class="feature-card-bg-shape">
                            <img src="assets/img/shape/feature-card-bg-shape1-1.png" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="assets/img/icon/feature-icon3-3.svg" alt="icon">
                        </div>
                        <h3 class="box-title">Our Core Values</h3>
                        <p class="box-text"> Creativity, Respect, Integrity, Confidence, Service, Empathy, Inclusion,
                            Excellence, Accountability,and Collaboration in delivering support and equal opportunities for
                            all.
                        </p>
                    </div>

            </div>
        </div>
    </section>



    <!-- About Area -->
    <div class="overflow-hidden space shape-mockup-wrap" id="about-sec">
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
                        <div class="img3 moving bg-mask" style="mask-image: url(&quot;assets/img/normal/about_2_3-mask.png&quot;);">
                            <img src="assets/img/normal/about_2_3.png" alt="About" class="bg-mask" style="mask-image: url(&quot;assets/img/normal/about_2_3-mask.png&quot;);">
                        </div>
                        <div class="about-shape2-1 jump">
                            <div class="color-masking">
                                <div class="masking-src bg-mask" style="mask-image: url(&quot;assets/img/shape/about_shape2_1.png&quot;);"></div>
                                <img src="assets/img/shape/about_shape2_1.png" alt="img">
                            </div>
                        </div>
                        <div class="about-shape2-2 jump-reverse">
                            <div class="color-masking2">
                                <div class="masking-src bg-mask" style="mask-image: url(&quot;assets/img/shape/about_shape2_2.png&quot;);"></div>
                                <img src="assets/img/shape/about_shape2_2.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-wrap2">
                        <div class="title-area mb-35">
                            <span class="sub-title after-none before-none">Welcome to Donet Charity</span>
                            <h2 class="sec-title">Transforming Lives,
                                One Donation at a Time</h2>
                            <p class="mt-30">Our secure online donation platform allows you to make contributions quickly and safely. Choose from various payment methods and set up one-time or recurring donations with ease. Your support helps us continue our mission.</p>
                        </div>
                        <div class="about-feature-grid">
                            <div class="box-icon">
                                <img src="assets/img/icon/about-icon2-1.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="box-title">Fundraising</h4>
                                <p class="box-text">Discover the inspiring stories of individuals and communities transformed by our programs.</p>
                            </div>
                        </div>
                        <div class="about-feature-grid">
                            <div class="box-icon">
                                <img src="assets/img/icon/about-icon2-2.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="box-title">Donation Making</h4>
                                <p class="box-text">Our success stories highlight the real-life impact of your donations and the resilience of those we help.</p>
                            </div>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="th-btn">About More<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cta Area -->
    <div class="cta-area-1">
        <div class="container z-index-common " data-pos-for="#donation-sec" data-sec-pos="bottom-half">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="cta-card" data-bg-src="assets/img/bg/cta-bg1-1.jpg">
                        <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-right="0"
                            data-mask-src="assets/img/shape/cta_shape1_1.png">
                            <img src="assets/img/shape/cta_shape1_1.png" alt="img">
                        </div>
                        <h3 class="box-title">Become a volunteer</h3>
                        <p class="box-text">Provide resources such as reports, infographics, and educational materials
                            related to the charity's cause. Use a clear and intuitive navigation menu to help users find
                            information quickly.</p>
                        <a href="contact.html" class="th-btn style5">Learn More <i
                                class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-card style2" data-bg-src="assets/img/bg/cta-bg1-2.jpg">
                        <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-left="0"
                            data-mask-src="assets/img/shape/cta_shape1_1.png">
                            <img src="assets/img/shape/cta_shape1_1.png" alt="img">
                        </div>
                        <h3 class="box-title">Join Us volunteer</h3>
                        <p class="box-text">Provide resources such as reports, infographics, and educational materials
                            related to the charity's cause. Use a clear and intuitive navigation menu to help users find
                            information quickly.</p>
                        <a href="contact.html" class="th-btn style5">Join Us Now <i
                                class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Donation Area -->
    <section class="space bg-gray" data-bg-src="assets/img/bg/donation-bg1-1.png" id="donation-sec">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <span class="sub-title">Our Targets/Focus</span>
                        <h2 class="sec-title">See Your Impact: Transparent
                            Donation Causes</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="donationSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}, "autoHeight": "true"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="">
                                <div class="donation-card-shape"
                                    data-mask-src="assets/img/donation/donation-card-bg-shape1-1.png"></div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-1.png" alt="image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="blog-details.html">Big charity: build school for
                                            poor children</a></h3>
                                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.</p>

                                    <a href="" class="th-btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="var(--theme-color2)">
                                <div class="donation-card-shape"
                                    data-mask-src="assets/img/donation/donation-card-bg-shape1-1.png"></div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-2.png" alt="image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="blog-details.html">Give health support for every
                                            homeless poor children</a></h3>

                                    <a href="blog-details.html" class="th-btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="#FF5528">
                                <div class="donation-card-shape"
                                    data-mask-src="assets/img/donation/donation-card-bg-shape1-1.png"></div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-3.png" alt="image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="blog-details.html">Construct Dwellings African
                                            Impoverished Women</a></h3>

                                    <a href="blog-details.html" class="th-btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="">
                                <div class="donation-card-shape"
                                    data-mask-src="assets/img/donation/donation-card-bg-shape1-1.png"></div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-1.png" alt="image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="blog-details.html">Big charity: build school for
                                            poor children</a></h3>

                                    <a href="blog-details.html" class="th-btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="var(--theme-color2)">
                                <div class="donation-card-shape"
                                    data-mask-src="assets/img/donation/donation-card-bg-shape1-1.png"></div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-2.png" alt="image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="blog-details.html">Give health support for every
                                            homeless poor children</a></h3>

                                    <a href="blog-details.html" class="th-btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="#FF5528">
                                <div class="donation-card-shape"
                                    data-mask-src="assets/img/donation/donation-card-bg-shape1-1.png"></div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-3.png" alt="image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="blog-details.html">Construct Dwellings African
                                            Impoverished Women</a></h3>
                                    <a href="blog-details.html" class="th-btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Area -->
    <section class="cta-area-2" id="contact-sec">
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
                                <img src="assets/img/normal/story_1_1.png" alt="img">
                            </div>
                            <div class="story-shape1-1 jump-reverse">
                                <img src="assets/img/shape/story_shape1_1.png" alt="img">
                            </div>
                            <div class="story-card movingX">
                                <h5 class="box-title">Adam Cruz</h5>
                                <p class="box-text">Our success stories highlight the
                                    real life impact of your donations &
                                    the resilience of those we help.
                                    These narratives showcase the
                                    power of compassion.</p>
                                <div class="quote-icon" data-mask-src="assets/img/icon/quote.svg"></div>
                            </div>
                            <div class="year-counter">
                                <p class="year-counter_text">Years of <span>Experience</span></p>
                                <div class="year-counter_number"><span class="counter-number">16</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="story-wrap1">
                        <div class="title-area mb-0">
                            <span class="sub-title before-none">Success Story</span>
                            <h2 class="sec-title">We Help Fellow Nonprofits Access the Funding Tools, Training</h2>
                            <p class="mt-30">Our secure online donation platform allows you to make contributions
                                quickly and safely. Choose from various payment methods and set up one-time.exactly.</p>
                            <div class="btn-wrap mt-35">
                                <a href="about.html" class="th-btn style-border">Our Success Story <i
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
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_1.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
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
                                        <img src="assets/img/team/team_1_2.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
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
                                        <img src="assets/img/team/team_1_3.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Jessica Lauren</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_4.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
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
                                        <img src="assets/img/team/team_1_1.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
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
                                        <img src="assets/img/team/team_1_2.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
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
                                        <img src="assets/img/team/team_1_3.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Jessica Lauren</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_4.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
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
                        <p class="text-white">We move to various communities to put a smile in the face of people living with disabilities.</p>
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
                                <h2 class="box-number text-theme2"><span class="counter-number">35</span>k<span
                                        class="fw-light">+</span></h2>
                                <p class="box-text text-white">Team Support</p>
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



    <!--Testimonial Area -->
    <section class="testi-area-1 space overflow-hidden" id="testi-sec">
        <div class="shape-mockup testi-bg-shape1-1 jump-reverse d-xl-block d-none" data-top="5%" data-right="0">
            <img src="assets/img/shape/footer-bg-shape3.png" alt="img">
        </div>
        <div class="shape-mockup testi-bg-shape1-2" data-top="28%" data-left="5%">
            <img src="assets/img/shape/testimonial_shape1_1.png" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center">
                        <span class="sub-title">Testimonials</span>
                        <h2 class="sec-title">What People Say About
                            Our Charity</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0 justify-content-end">
                <div class="col-lg-5">
                    <div class="swiper th-slider testi-thumb-slider1"
                        data-slider-options='{"effect":"fade","loop":false}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_1.png" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_2.png" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_1.png" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_2.png" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testi-slider1">
                        <div class="swiper th-slider testimonial-slider1" id="testiSlide1"
                            data-slider-options='{"loop":false,"paginationType":"progressbar","effect":"fade", "autoHeight": "true", "thumbs":{"swiper":".testi-thumb-slider1"}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Stay informed about our upcoming events and campaigns.
                                            Whether it's a fundraising gala, a charity run, or a community outreach
                                            program, there are plenty of ways to get involved and support our cause.
                                            Check our event calendar for details. We prioritize your security. Our
                                            donation process uses the latest encryption technology to protect your
                                            personal and financial information. Donate with confidence knowing”</p>
                                        <h3 class="box-title">Alex Furnandes</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon" data-mask-src="assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Our donation process uses the latest encryption
                                            technology to protect your personal and financial information. Donate with
                                            confidence knowing Stay informed about our upcoming events and campaigns.
                                            Whether it's a fundraising gala, a charity run, or a community outreach
                                            program, there are plenty of ways to get involved and support our cause.
                                            Check our event calendar for details. We prioritize your security.”</p>
                                        <h3 class="box-title">Mustafa Kamal</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon" data-mask-src="assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Stay informed about our upcoming events and campaigns.
                                            Whether it's a fundraising gala, a charity run, or a community outreach
                                            program, there are plenty of ways to get involved and support our cause.
                                            Check our event calendar for details. We prioritize your security. Our
                                            donation process uses the latest encryption technology to protect your
                                            personal and financial information. Donate with confidence knowing”</p>
                                        <h3 class="box-title">Alex Furnandes</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon" data-mask-src="assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Our donation process uses the latest encryption
                                            technology to protect your personal and financial information. Donate with
                                            confidence knowing Stay informed about our upcoming events and campaigns.
                                            Whether it's a fundraising gala, a charity run, or a community outreach
                                            program, there are plenty of ways to get involved and support our cause.
                                            Check our event calendar for details. We prioritize your security.”</p>
                                        <h3 class="box-title">Mustafa Kamal</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon" data-mask-src="assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-pagination"></div>
                            <div class="slider-pagination2"></div>
                        </div>
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlide1"
                                class="slider-arrow default style-border slider-prev"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#testiSlide1"
                                class="slider-arrow default style-border slider-next"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Area -->
    <section class="overflow-hidden">
        <div class="project-wrap1 space th-radius overflow-hidden" data-bg-src="assets/img/bg/gray-bg2.png"
            data-overlay="gray" data-opacity="5">
           
            <div class="container">
                <div class="row justify-content-md-between align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="title-area">
                            <span class="sub-title before-none">Complete Projects</span>
                            <h2 class="sec-title">Our Recent Project</h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="sec-btn">
                            <a href="contact.html" class="th-btn">View All Project<i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-area">
                    <div class="swiper th-slider" id="ProjectSlider1"
                        data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                        <div class="swiper-wrapper">
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_1_1.png" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <div class="project-card-bg-shape"
                                            data-mask-src="assets/img/shape/project-card-bg-shape1-1.png"></div>
                                        <h3 class="project-title"><a href="#">Compassion Connect</a></h3>
                                        <p class="project-subtitle">Stronger Community</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_1_2.png" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <div class="project-card-bg-shape"
                                            data-mask-src="assets/img/shape/project-card-bg-shape1-1.png"></div>
                                        <h3 class="project-title"><a href="#">Child Educations</a></h3>
                                        <p class="project-subtitle">Charity & Fundraising</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_1_3.png" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <div class="project-card-bg-shape"
                                            data-mask-src="assets/img/shape/project-card-bg-shape1-1.png"></div>
                                        <h3 class="project-title"><a href="#">Nurturing Health</a></h3>
                                        <p class="project-subtitle">Healing Hearts</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog Area -->
    <section class="space" id="blog-sec">
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
                                        <a href="blog.html"><i class="fas fa-calendar"></i>July 16, 2025</a>
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">See Your Impact: Transparent
                                            Donation Tracking</a></h3>
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
                                        <a href="blog.html"><i class="fas fa-calendar"></i>March 24, 2025</a>
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Every Contribution Counts:
                                            Make a Difference</a></h3>
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
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Real Stories, Real Impact:
                                            Your Donations at Work</a></h3>
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
                                        <a href="blog.html"><i class="fas fa-calendar"></i>July 16, 2025</a>
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">See Your Impact: Transparent
                                            Donation Tracking</a></h3>
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
                                        <a href="blog.html"><i class="fas fa-calendar"></i>March 24, 2025</a>
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Every Contribution Counts:
                                            Make a Difference</a></h3>
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
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Real Stories, Real Impact:
                                            Your Donations at Work</a></h3>
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
