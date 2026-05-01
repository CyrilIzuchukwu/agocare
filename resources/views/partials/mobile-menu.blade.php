<div class="th-menu-wrapper">
  <div class="th-menu-area text-center">
    <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
    <div class="mobile-logo">
      <a href="/"><img src="{{ asset('assets/img/logo-copy.png') }}" alt="AGO Care Foundation Logo"></a>
    </div>
    <div class="th-mobile-menu">
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
        <li class="menu-item-has-children {{ request()->routeIs('career', 'apply', 'volunteer', 'donate') ? 'active' : '' }}">
          <a href="#">Join Us</a>
          <ul class="sub-menu">
            <li class="{{ request()->routeIs('career') ? 'active' : '' }}">
              <a href="{{ route('career') }}">Career</a>
            </li>
            <li class="{{ request()->routeIs('apply') ? 'active' : '' }}">
              <a href="{{ route('apply') }}">Apply Online</a>
            </li>
            <li class="{{ request()->routeIs('volunteer') ? 'active' : '' }}">
              <a href="{{ route('volunteer') }}">Volunteer</a>
            </li>
            <li class="{{ request()->routeIs('donate') ? 'active' : '' }}">
              <a href="{{ route('donate') }}">Donate</a>
            </li>
          </ul>
        </li>
        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
          <a href="{{ route('contact') }}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</div>
