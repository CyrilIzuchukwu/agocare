@extends('layouts.app')
@section('content')

<div class="ago-gallery-page">

  {{-- Breadcrumb --}}
  <div class="breadcumb-wrapper">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Gallery</h1>
        <ul class="breadcumb-menu">
          <li><a href="/">Home</a></li>
          <li>Gallery</li>
        </ul>
      </div>
    </div>
  </div>

  {{-- ===== FOCAL NEWS ===== --}}
  <section class="space" id="ago-gallery-news">
    <div class="container">
      <div class="title-area text-center mb-50">
        <span class="sub-title">Latest Updates</span>
        <h2 class="sec-title">Focal News & Stories</h2>
        <p class="mx-auto" style="max-width:600px;">Stay updated with the latest outreach activities,
          impact stories, and news from AGO Cares Foundation.</p>
      </div>

      <div class="row gy-30">
        {{-- Featured Article --}}
        <div class="col-lg-6">
          <div class="ago-gallery__news-featured">
            <img src="{{ asset('assets/img/blog/blog_1_1.jpg') }}"
              alt="AGO Care Foundation medical outreach team providing free health screenings in Amawbia community"
              class="ago-gallery__news-featured-img">
            <div class="ago-gallery__news-featured-body">
              <div class="ago-gallery__news-meta">
                <span><i class="far fa-calendar-alt"></i> April 2026</span>
                <span><i class="far fa-folder"></i> Medical Outreach</span>
              </div>
              <h3 class="ago-gallery__news-title">
                <a href="#">AGO Cares Conducts Free Medical Outreach in Amawbia Community</a>
              </h3>
              <p>Over 120 community members received free health screenings, medications, and
                referrals during our latest outreach program targeting persons with disabilities
                and the elderly.</p>
              <a href="#" class="th-btn mt-20">
                Read More <i class="fas fa-arrow-up-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>

        {{-- Sidebar News List --}}
        <div class="col-lg-6">
          <div class="ago-gallery__news-list">
            <div class="ago-gallery__news-list-item">
              <img src="{{ asset('assets/img/blog/blog_1_2.jpg') }}"
                alt="AGO Care Foundation albinism awareness walk in Awka drawing hundreds of participants"
                class="ago-gallery__news-list-thumb">
              <div class="ago-gallery__news-list-body">
                <div class="ago-gallery__news-list-meta">
                  <i class="far fa-calendar-alt"></i> March 2026 &nbsp;|&nbsp;
                  <i class="far fa-folder"></i> Albinism
                </div>
                <h4 class="ago-gallery__news-list-title">
                  <a href="#">Albinism Awareness Walk Draws Hundreds in Awka</a>
                </h4>
                <a href="#" class="th-btn" style="padding:6px 16px; font-size:13px;">Read More</a>
              </div>
            </div>

            <div class="ago-gallery__news-list-item">
              <img src="{{ asset('assets/img/blog/blog_1_3.jpg') }}"
                alt="AGO Care Foundation skills training graduation ceremony for 30 persons with disabilities"
                class="ago-gallery__news-list-thumb">
              <div class="ago-gallery__news-list-body">
                <div class="ago-gallery__news-list-meta">
                  <i class="far fa-calendar-alt"></i> February 2026 &nbsp;|&nbsp;
                  <i class="far fa-folder"></i> Skills Training
                </div>
                <h4 class="ago-gallery__news-list-title">
                  <a href="#">Skills Training Graduation for 30 Persons with Disabilities</a>
                </h4>
                <a href="#" class="th-btn" style="padding:6px 16px; font-size:13px;">Read More</a>
              </div>
            </div>

            <div class="ago-gallery__news-list-item">
              <img src="{{ asset('assets/img/blog/blog-s-1-1.jpg') }}"
                alt="AGO Care Foundation visiting three orphanages with food and essential supplies"
                class="ago-gallery__news-list-thumb">
              <div class="ago-gallery__news-list-body">
                <div class="ago-gallery__news-list-meta">
                  <i class="far fa-calendar-alt"></i> January 2026 &nbsp;|&nbsp;
                  <i class="far fa-folder"></i> Orphanage Support
                </div>
                <h4 class="ago-gallery__news-list-title">
                  <a href="#">AGO Cares Visits Three Orphanages with Food and Supplies</a>
                </h4>
                <a href="#" class="th-btn" style="padding:6px 16px; font-size:13px;">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ===== TESTIMONIALS ===== --}}
  <section class="overflow-hidden space bg-smoke" id="ago-gallery-testimonials">
    <div class="container">
      <div class="title-area text-center mb-50">
        <span class="sub-title after-none before-none">
          <i class="far fa-heart text-theme"></i> Voices of Impact
        </span>
        <h2 class="sec-title">Stories of Hope and Transformation</h2>
      </div>

      <div class="testi-slider3 slider-area">
        <div class="swiper th-slider" id="galleryTestiSlider"
          data-slider-options='{"loop": true, "autoplay": {"delay": 5000, "disableOnInteraction": false}, "breakpoints":{"0":{"slidesPerView":1},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testi-card3">
                <div class="testi-card-shape" data-mask-src="{{ asset('assets/img/shape/testi-card-bg-shape3-1.png') }}"></div>
                <div class="testi-card_profile">
                  <div class="box-thumb">
                    <img src="{{ asset('assets/img/user/user-icon.jpg') }}"
                      alt="Chinwe Okonkwo, mother of an albino child supported by AGO Care Foundation">
                  </div>
                  <div class="media-left">
                    <h3 class="testi-card_name">Chinwe Okonkwo</h3>
                    <span class="testi-card_desig">Mother of Albino Child</span>
                  </div>
                </div>
                <p class="testi-card_text">"AGO Care gave my son confidence. Before, he was hiding at home because of stigma. Now he attends school with sunscreen and glasses you provided. You didn't just give items — you gave him dignity."</p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testi-card3">
                <div class="testi-card-shape" data-mask-src="{{ asset('assets/img/shape/testi-card-bg-shape3-1.png') }}"></div>
                <div class="testi-card_profile">
                  <div class="box-thumb">
                    <img src="{{ asset('assets/img/user/user-icon.jpg') }}"
                      alt="Emeka Nwosu, wheelchair beneficiary of AGO Care Foundation">
                  </div>
                  <div class="media-left">
                    <h3 class="testi-card_name">Emeka Nwosu</h3>
                    <span class="testi-card_desig">Wheelchair Beneficiary</span>
                  </div>
                </div>
                <p class="testi-card_text">"The wheelchair AGO Cares gave me changed my life. I can now move around independently, attend church, and even run a small business from home. I am forever grateful."</p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testi-card3">
                <div class="testi-card-shape" data-mask-src="{{ asset('assets/img/shape/testi-card-bg-shape3-1.png') }}"></div>
                <div class="testi-card_profile">
                  <div class="box-thumb">
                    <img src="{{ asset('assets/img/user/user-icon.jpg') }}"
                      alt="Adaobi Eze, skills training graduate who opened a tailoring shop with AGO Care Foundation support">
                  </div>
                  <div class="media-left">
                    <h3 class="testi-card_name">Adaobi Eze</h3>
                    <span class="testi-card_desig">Skills Training Graduate</span>
                  </div>
                </div>
                <p class="testi-card_text">"With the business training and startup kit from AGO Care, I opened my tailoring shop. You showed me my skin condition isn't a disability — but a different ability."</p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testi-card3">
                <div class="testi-card-shape" data-mask-src="{{ asset('assets/img/shape/testi-card-bg-shape3-1.png') }}"></div>
                <div class="testi-card_profile">
                  <div class="box-thumb">
                    <img src="{{ asset('assets/img/user/user-icon.jpg') }}"
                      alt="Blessing Obi, visually impaired university student supported by AGO Care Foundation scholarship">
                  </div>
                  <div class="media-left">
                    <h3 class="testi-card_name">Blessing Obi</h3>
                    <span class="testi-card_desig">Visually Impaired Student</span>
                  </div>
                </div>
                <p class="testi-card_text">"AGO Cares provided me with braille materials and a scholarship. I am now in my second year of university studying law. None of this would have been possible without their support."</p>
              </div>
            </div>

          </div>
        </div>
        <button data-slider-prev="#galleryTestiSlider" class="slider-arrow slider-prev">
          <i class="far fa-arrow-left"></i>
        </button>
        <button data-slider-next="#galleryTestiSlider" class="slider-arrow slider-next">
          <i class="far fa-arrow-right"></i>
        </button>
      </div>
    </div>
  </section>

  {{-- ===== PHOTO GALLERY ===== --}}
  <section class="space" id="ago-gallery-photos">
    <div class="container">
      <div class="title-area text-center mb-40">
        <span class="sub-title">Our Work in Pictures</span>
        <h2 class="sec-title">Photo Gallery</h2>
      </div>

      <div class="ago-gallery__filter">
        <button class="ago-gallery__filter-btn active" data-filter="all">All</button>
        <button class="ago-gallery__filter-btn" data-filter="outreach">Medical Outreach</button>
        <button class="ago-gallery__filter-btn" data-filter="albinism">Albinism Support</button>
        <button class="ago-gallery__filter-btn" data-filter="skills">Skills Training</button>
        <button class="ago-gallery__filter-btn" data-filter="community">Community</button>
      </div>

      <div class="ago-gallery__grid" id="ago-gallery-grid">
        <div class="ago-gallery__item" data-category="outreach">
          <img src="{{ asset('assets/img/gallery/gallery_1_1.png') }}"
            alt="AGO Care Foundation medical outreach team conducting free health screenings in the community">
          <div class="ago-gallery__item-overlay">
            <a href="{{ asset('assets/img/gallery/gallery_1_1.png') }}" class="popup-image">
              <i class="fas fa-expand"></i>
            </a>
          </div>
        </div>
        <div class="ago-gallery__item" data-category="albinism">
          <img src="{{ asset('assets/img/gallery/gallery_1_2.png') }}"
            alt="AGO Care Foundation albinism awareness and support program for persons living with albinism">
          <div class="ago-gallery__item-overlay">
            <a href="{{ asset('assets/img/gallery/gallery_1_2.png') }}" class="popup-image">
              <i class="fas fa-expand"></i>
            </a>
          </div>
        </div>
        <div class="ago-gallery__item" data-category="skills">
          <img src="{{ asset('assets/img/gallery/gallery_1_3.png') }}"
            alt="AGO Care Foundation vocational skills training session for persons with disabilities">
          <div class="ago-gallery__item-overlay">
            <a href="{{ asset('assets/img/gallery/gallery_1_3.png') }}" class="popup-image">
              <i class="fas fa-expand"></i>
            </a>
          </div>
        </div>
        <div class="ago-gallery__item" data-category="community">
          <img src="{{ asset('assets/img/gallery/gallery_1_4.png') }}"
            alt="AGO Care Foundation community outreach and sensitization program in Anambra State">
          <div class="ago-gallery__item-overlay">
            <a href="{{ asset('assets/img/gallery/gallery_1_4.png') }}" class="popup-image">
              <i class="fas fa-expand"></i>
            </a>
          </div>
        </div>
        <div class="ago-gallery__item" data-category="outreach">
          <img src="{{ asset('assets/img/gallery/gallery_1_5.png') }}"
            alt="AGO Care Foundation distributing medical supplies and medications during outreach program">
          <div class="ago-gallery__item-overlay">
            <a href="{{ asset('assets/img/gallery/gallery_1_5.png') }}" class="popup-image">
              <i class="fas fa-expand"></i>
            </a>
          </div>
        </div>
        <div class="ago-gallery__item" data-category="albinism">
          <img src="{{ asset('assets/img/gallery/gallery_1_6.png') }}"
            alt="AGO Care Foundation providing sunscreen and protective items to albinism beneficiaries">
          <div class="ago-gallery__item-overlay">
            <a href="{{ asset('assets/img/gallery/gallery_1_6.png') }}" class="popup-image">
              <i class="fas fa-expand"></i>
            </a>
          </div>
        </div>
        <div class="ago-gallery__item" data-category="skills">
          <img src="{{ asset('assets/img/gallery/gallery_1_7.png') }}"
            alt="AGO Care Foundation tailoring and sewing skills training session for beneficiaries">
          <div class="ago-gallery__item-overlay">
            <a href="{{ asset('assets/img/gallery/gallery_1_7.png') }}" class="popup-image">
              <i class="fas fa-expand"></i>
            </a>
          </div>
        </div>
        <div class="ago-gallery__item" data-category="community">
          <img src="{{ asset('assets/img/gallery/gallery_1_8.png') }}"
            alt="AGO Care Foundation volunteers and staff during community sensitization event">
          <div class="ago-gallery__item-overlay">
            <a href="{{ asset('assets/img/gallery/gallery_1_8.png') }}" class="popup-image">
              <i class="fas fa-expand"></i>
            </a>
          </div>
        </div>
        <div class="ago-gallery__item" data-category="outreach">
          <img src="{{ asset('assets/img/gallery/gallery_1_9.png') }}"
            alt="AGO Care Foundation team group photo during medical outreach program">
          <div class="ago-gallery__item-overlay">
            <a href="{{ asset('assets/img/gallery/gallery_1_9.png') }}" class="popup-image">
              <i class="fas fa-expand"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ===== VIDEO GALLERY ===== --}}
  <section class="space bg-smoke" id="ago-gallery-videos">
    <div class="container">
      <div class="title-area text-center mb-50">
        <span class="sub-title">Watch Our Work</span>
        <h2 class="sec-title">Video Gallery</h2>
        <p class="mx-auto" style="max-width:600px;">Watch our outreach programs, awareness campaigns, and impact stories in action.</p>
      </div>

      {{-- Featured large video --}}
      <div class="row gy-30 mb-30">
        <div class="col-12">
          <div class="ago-gallery__video-wrap" style="border-radius:16px;overflow:hidden;">
            <img src="{{ asset('assets/img/normal/video-thumb1-1.png') }}"
              alt="AGO Care Foundation community outreach program video — medical screenings and disability support"
              style="width:100%;height:420px;object-fit:cover;display:block;">
            <div class="ago-gallery__video-overlay">
              <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                class="popup-video"
                style="width:80px;height:80px;font-size:26px;"
                aria-label="Watch AGO Care Foundation community outreach highlights video">
                <i class="fa-sharp fa-solid fa-play"></i>
              </a>
            </div>
          </div>
          <div class="ago-gallery__video-caption text-center mt-20">
            <h4>AGO Cares Foundation — Community Outreach Highlights</h4>
            <p>A look at our medical outreach, skills training, and community sensitization programs across Anambra State.</p>
          </div>
        </div>
      </div>

      {{-- Two smaller videos --}}
      <div class="row gy-30">
        <div class="col-md-6">
          <div class="ago-gallery__video-wrap">
            <img src="{{ asset('assets/img/normal/video-thumb2-1.png') }}"
              alt="AGO Care Foundation albinism awareness campaign — breaking the stigma video">
            <div class="ago-gallery__video-overlay">
              <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                class="popup-video"
                aria-label="Watch AGO Care Foundation albinism awareness video">
                <i class="fa-sharp fa-solid fa-play"></i>
              </a>
            </div>
          </div>
          <div class="ago-gallery__video-caption mt-16">
            <h4>Albinism Awareness — Breaking the Stigma</h4>
            <p>Stories of courage from people living with albinism supported by AGO Cares Foundation.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="ago-gallery__video-wrap">
            <img src="{{ asset('assets/img/normal/video-thumb3-1.png') }}"
              alt="AGO Care Foundation skills training graduation ceremony video">
            <div class="ago-gallery__video-overlay">
              <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                class="popup-video"
                aria-label="Watch AGO Care Foundation skills training graduation video">
                <i class="fa-sharp fa-solid fa-play"></i>
              </a>
            </div>
          </div>
          <div class="ago-gallery__video-caption mt-16">
            <h4>Skills Training Graduation 2026</h4>
            <p>30 beneficiaries graduate with vocational skills to build sustainable livelihoods.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ===== PARTNERS ===== --}}
  <div class="bg-theme-dark overflow-hidden brand-area-1"
    data-mask-src="{{ asset('assets/img/shape/brand-bg-shape1.png') }}">
    <div class="container">
      <div class="brand-wrap1 text-center">
        <h3 class="brand-wrap-title text-white">
          Supported by <span class="text-theme2">Partners</span> who share our vision
        </h3>
        <div class="swiper th-slider" id="galleryBrandSlider"
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

  {{-- CTA --}}
  <div class="cta-area-1 space">
    <div class="container z-index-common">
      <div class="cta-area-grid">
        <div class="cta-card" data-bg-src="{{ asset('assets/img/bg/cta-bg1-1.jpg') }}">
          <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-right="0"
            data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
            <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="Decorative background shape">
          </div>
          <h3 class="box-title">Become a Volunteer</h3>
          <p class="box-text">Join our team and be part of the stories you see in this gallery.</p>
          <a href="{{ route('volunteer') }}" class="th-btn style5">
            Volunteer With Us <i class="fas fa-arrow-up-right ms-2"></i>
          </a>
        </div>
        <div class="cta-card style2" data-bg-src="{{ asset('assets/img/bg/cta-bg1-2.jpg') }}">
          <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-left="0"
            data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
            <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="Decorative background shape">
          </div>
          <h3 class="box-title">Support Our Mission</h3>
          <p class="box-text">Your donation helps us create more stories of hope, care, and transformation.</p>
          <a href="{{ route('donate') }}" class="th-btn style5">
            Donate Now <i class="fas fa-arrow-up-right ms-2"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

</div>{{-- /.ago-gallery-page --}}

<script>
  (function() {
    var filterBtns = document.querySelectorAll('.ago-gallery-page .ago-gallery__filter-btn');
    filterBtns.forEach(function(btn) {
      btn.addEventListener('click', function() {
        filterBtns.forEach(function(b) {
          b.classList.remove('active');
        });
        this.classList.add('active');
        var filter = this.getAttribute('data-filter');
        document.querySelectorAll('.ago-gallery-page .ago-gallery__item').forEach(function(item) {
          item.style.display = (filter === 'all' || item.getAttribute('data-category') === filter) ?
            'block' : 'none';
        });
      });
    });
  })();
</script>

@endsection
