<header class="th-header header-default">
  <div class="menu-top">
    <div class="container">
      <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
        <div class="col-auto d-none d-lg-block">
          <div class="header-logo">
            <a href="/"><img src="{{ asset('assets/img/logo-copy.png') }}" alt="Logo"></a>
          </div>
        </div>
        <div class="col-auto d-none d-md-block">
          <div class="info-card-wrap">
            <div class="info-card">
              <div class="box-icon">
                <i class="fa fa-map-marker-alt"></i>
                <div class="bg-shape1" data-mask-src="{{ asset('assets/img/shape/info_card_icon_bg_shape_1_1.png') }}">
                </div>
                <div class="bg-shape2" data-mask-src="{{ asset('assets/img/shape/info_card_icon_bg_shape_1_1.png') }}">
                </div>
              </div>
              <div class="box-content">
                <p class="box-text">Address:</p>
                <h4 class="box-title">
                  <a
                    href="https://www.google.com/maps">{{ $infos->site_address ?? 'Amawbia, Anambra Nigeria' }}</a>
                </h4>
              </div>
            </div>
            <div class="info-card">
              <div class="box-icon">
                <i class="fa fa-phone"></i>
                <div class="bg-shape1"
                  data-mask-src="{{ asset('assets/img/shape/info_card_icon_bg_shape_1_1.png') }}">
                </div>
                <div class="bg-shape2"
                  data-mask-src="{{ asset('assets/img/shape/info_card_icon_bg_shape_1_1.png') }}">
                </div>
              </div>
              <div class="box-content">
                <p class="box-text">Call us:</p>
                <h4 class="box-title">
                  <a
                    href="tel:{{ $infos->site_phone ?? '+2349123263656' }}">{{ $infos->site_phone ?? '+234-912-326-3656' }}</a>
                </h4>
              </div>
            </div>
            <div class="info-card">
              <div class="box-icon">
                <i class="fal fa-envelope-open"></i>
                <div class="bg-shape1"
                  data-mask-src="{{ asset('assets/img/shape/info_card_icon_bg_shape_1_1.png') }}">
                </div>
                <div class="bg-shape2"
                  data-mask-src="{{ asset('assets/img/shape/info_card_icon_bg_shape_1_1.png') }}">
                </div>
              </div>
              <div class="box-content">
                <p class="box-text">Email us:</p>
                <h4 class="box-title">
                  <a
                    href="mailto:{{ $infos->site_email ?? 'support@agofoundation.com.ng' }}">{{ $infos->site_email ?? 'support@agofoundation.com.ng' }}</a>
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-auto header-social-col">
          <div class="th-social">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sticky-wrapper">
    <div class="container">
      <div class="menu-area">
        <div class="menu-area-wrap">
          <div class="col-auto d-inline-block d-lg-none">
            <div class="header-logo logo-mobile">
              <a href="/"><img src="{{ asset('assets/img/logo-copy-white.png') }}"
                  alt="Logo"></a>
            </div>
          </div>

          <nav class="main-menu d-none d-lg-block">
            <ul>
              <li class="{{ request()->is('/') ? 'active' : '' }}">
                <a href="/">Home</a>
              </li>

              <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                <a href="{{ route('about') }}">About Us</a>
              </li>

              <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
                <a href="{{ route('services') }}">Our Services</a>
              </li>

              <li class="{{ request()->routeIs('campaigns') ? 'active' : '' }}">
                <a href="{{ route('campaigns') }}">Campaigns</a>
              </li>

              <li class="{{ request()->routeIs('projects') ? 'active' : '' }}">
                <a href="{{ route('projects') }}">AGO Projects</a>
              </li>

              <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}">
                <a href="{{ route('gallery') }}">Gallery</a>
              </li>

              <li class="{{ request()->routeIs('blog', 'blog.details') ? 'active' : '' }}">
                <a href="{{ route('blog') }}">Blog</a>
              </li>

              <li
                class="menu-item-has-children {{ request()->routeIs('career', 'apply', 'volunteer', 'donate') ? 'active' : '' }}">
                <a href="#">Join Us</a>
                <ul class="sub-menu">
                  <li><a href="{{ route('career') }}">Career</a></li>
                  <li><a href="{{ route('apply') }}">Apply Online</a></li>
                  <li><a href="{{ route('volunteer') }}">Volunteer</a></li>
                  <li><a href="{{ route('donate') }}">Donate</a></li>
                </ul>
              </li>

              <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                <a href="{{ route('contact') }}">Contact Us</a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="header-button">
          <a href="{{ route('donate') }}" class="th-btn style3 d-lg-block d-none">
            <i class="fas fa-heart me-2"></i> Donate
          </a>
          <button type="button" class="icon-btn th-menu-toggle d-lg-none">
            <i class="far fa-bars"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>
