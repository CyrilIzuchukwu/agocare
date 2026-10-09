  <div class="sidebar" id="sidebar">
    <!-- Logo -->
    <div class="sidebar-logo">
      <a href="/" class="logo logo-normal">
        <img src="{{ asset('assets/img/logo-copy.png') }}" alt="Img">
      </a>
      <a href="/" class="logo logo-white">
        <img src="{{ asset('assets/img/logo-copy.png') }}" alt="Img">
      </a>



      <a id="toggle_btn" href="javascript:void(0);">
        <i data-feather="chevrons-left" class="feather-16"></i>
      </a>
    </div>
    <!-- /Logo -->



    <div class="sidebar-inner slimscroll">
      <div id="sidebar-menu" class="sidebar-menu">
        <ul>
          <li class="submenu-open">
            <h6 class="submenu-hdr">Main</h6>
            <ul>
              <li class="mb-1 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="">
                  <i class="ti ti-layout-grid fs-16 me-2">
                  </i><span>Dashboard</span>
                </a>
              </li>

              <li class="mb-1 ">
                <a href="">
                  <i class="ti ti-users fs-16 me-2"></i>
                  <span>Users</span>
                </a>
              </li>

              <li class="mb-1 {{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
                <a href="{{ route('admin.team.index') }}">
                  <i class="ti ti-users-group fs-16 me-2"></i>
                  <span>Team Members</span>
                </a>
              </li>

              <li class="mb-1 {{ request()->routeIs('admin.volunteer-applications.*') ? 'active' : '' }}">
                <a href="{{ route('admin.volunteer-applications.index') }}">
                  <i class="ti ti-clipboard-text fs-16 me-2"></i>
                  <span>Volunteer Applications</span>
                </a>
              </li>


              <li class="mb-1 ">
                <a href="" class="">
                  <i class="ti ti-list-details fs-16 me-2"></i><span>Categories</span>
                </a>
              </li>


              <li class="mb-1 ">
                <a href="" class="">
                  <i class="ti ti-carousel-vertical fs-16 me-2"></i><span>Campaigns</span>
                </a>
              </li>

              <li class="mb-1 {{ request()->routeIs('admin.blog.*') ? 'active' : '' }}">
                <a href="{{ route('admin.blog.index') }}" class="">
                  <i class="ti ti-article fs-16 me-2"></i><span>Blog Posts</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="submenu-open">
            <h6 class="submenu-hdr">Emails</h6>
            <ul>
              <li class="mb-1 ">
                <a href=""><i class="ti ti-mail-plus fs-16 me-2"></i><span>Compose Email</span></a>
              </li>
            </ul>
          </li>

          <li class="submenu-open">
            <h6 class="submenu-hdr">Financials</h6>
            <ul>

              <li class=" mb-1  ">
                <a href="">
                  <i class="ti ti-building-bank fs-16 me-2"></i>
                  <span>Donations </span></a>
              </li>
              <li class=" mb-1 ">
                <a href=""><i class="ti ti-moneybag fs-16 me-2"></i>
                  <span> Payment Methods</span>
                </a>
              </li>
            </ul>
          </li>



          <li class="submenu-open">
            <h6 class="submenu-hdr">System Settings</h6>
            <ul>
              <li class="mb-1 {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <a href="{{ route('admin.settings.index') }}">
                  <i class="ti ti-settings fs-16 me-2"></i>
                  <span>General Settings</span>
                </a>
              </li>

              <li class="mb-1 {{ request()->routeIs('admin.seo.*') ? 'active' : '' }}">
                <a href="{{ route('admin.seo.index') }}">
                  <i class="ti ti-search fs-16 me-2"></i>
                  <span>SEO Settings</span>
                </a>
              </li>

              <li class="mb-1 {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <a href="{{ route('admin.settings.index') }}#maintenance">
                  <i class="ti ti-alert-triangle fs-16 me-2 {{ \App\Models\Setting::first()?->maintenance_mode ? 'text-warning' : '' }}"></i>
                  <span>
                    Maintenance
                    @if(\App\Models\Setting::first()?->maintenance_mode)
                    <span class="badge bg-warning text-dark ms-1" style="font-size:10px;">ON</span>
                    @endif
                  </span>
                </a>
              </li>

              <li class="mb-1 {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
                <a href="{{ route('admin.profile.index') }}">
                  <i class="ti ti-user-circle fs-16 me-2"></i>
                  <span>Edit Profile</span>
                </a>
              </li>

              <li class="mb-1">
                <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit();">
                  <i class="ti ti-logout fs-16 me-2"></i>
                  <span>Logout</span>
                </a>
              </li>

              <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
              </form>

            </ul>
          </li>

        </ul>
      </div>
    </div>
  </div>
