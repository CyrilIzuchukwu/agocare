<footer class="footer-wrapper footer-layout1">
    <div class="widget-area space-top">
        <div class="container">
            <div class="row justify-content-between">

                {{-- Col 1: Logo + Contact Info --}}
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="/"><img src="{{ asset('assets/img/logo-copy-white.png') }}" alt="AGO Care Foundation"></a>
                            </div>

                            <div class="info-card style2">
                                <div class="box-icon bg-theme">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Call us any time:</p>
                                    <h4 class="box-title">
                                        <a href="tel:{{ $infos->site_phone ?? '+2349123263656' }}">
                                            {{ $infos->site_phone ?? '+234-912-326-3656' }}
                                        </a>
                                    </h4>
                                </div>
                            </div>

                            <div class="info-card style2">
                                <div class="box-icon bg-theme2">
                                    <i class="fal fa-envelope-open"></i>
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Email us any time:</p>
                                    <h4 class="box-title">
                                        <a href="mailto:{{ $infos->site_email ?? 'support@agofoundation.com.ng' }}">
                                            {{ $infos->site_email ?? 'support@agofoundation.com.ng' }}
                                        </a>
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Col 2: Quick Links --}}
                <div class="col-sm-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('services') }}">Our Services</a></li>
                                <li><a href="{{ route('campaigns') }}">Campaigns</a></li>
                                <li><a href="{{ route('projects') }}">AGO Projects</a></li>
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Col 3: Get Involved --}}
                <div class="col-sm-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Get Involved</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('donate') }}">Donate to AGO</a></li>
                                <li><a href="{{ route('volunteer') }}">Volunteer</a></li>
                                <li><a href="{{ route('apply') }}">Apply Online</a></li>
                                <li><a href="{{ route('career') }}">Career</a></li>
                                <li><a href="{{ route('contact') }}">Complaints</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Col 4: Newsletter --}}
                <div class="col-md-6 col-xl-auto">
                    <div class="widget newsletter-widget footer-widget">
                        <h3 class="widget_title">Newsletter</h3>
                        <p class="footer-text mb-4">Stay updated with our latest projects, outreach programs and impact stories.</p>
                        <form class="newsletter-form">
                            <div class="form-group style-dark">
                                <input class="form-control" type="email" placeholder="Enter your email" required>
                            </div>
                            <button type="submit" class="th-btn style5"><i class="fas fa-paper-plane"></i></button>
                        </form>

                        <div class="th-social style6">
                            @if (!empty($infos->site_fb))
                                <a href="{{ $infos->site_fb }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            @endif
                            @if (!empty($infos->site_twitter))
                                <a href="{{ $infos->site_twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if (!empty($infos->site_youtube))
                                <a href="{{ $infos->site_youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
                            @endif
                            @if (!empty($infos->site_instagram))
                                <a href="{{ $infos->site_instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright-wrap bg-theme text-center">
        <div class="container">
            <p class="copyright-text">
                Copyright &copy; {{ date('Y') }} <a href="/">AGO Care Foundation.</a> All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
