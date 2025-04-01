<!-- ======= Header ======= -->
@php
    $setting = getSetting();
  @endphp

<header class="header-style-01">
    <nav class="main-menu sticky-header">
        <div class="main-menu-wrapper">
            <div class="main-menu-logo">
                <a href="{{ url('/') }}">
                    <img src="{{ env('IMAGE_SHOW_PATH') . 'logo/' . $setting->logo }}" alt="Prism" width="165"
                        height="72" alt="logo"></a>
            </div>
            <ul class="main-nav-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#" class="scroll-to-section" data-target="#about_us">About</a></li>
                <li><a href="{{ url('contact') }}">Contact</a></li>
                <li class="menu-has-sub">
                    <a href="#" class="scroll-to-section" data-target="#our-services">Services</a>
                    <ul>
                        <li><a href="#" class="scroll-to-section" data-target="#civil-works">Civil Works</a></li>
                        <li><a href="#" class="scroll-to-section" data-target="#carpentry">Carpentry & Woodwork</a></li>
                        <li><a href="#" class="scroll-to-section" data-target="#modular-furniture">Modular Furniture</a>
                        </li>
                        <li><a href="#" class="scroll-to-section" data-target="#electrical-ac">Electrical & AC</a></li>
                        <li><a href="#" class="scroll-to-section" data-target="#flooring-tiles">Flooring & Tiles</a>
                        </li>
                        <li><a href="#" class="scroll-to-section" data-target="#ceiling-interiors">Ceiling &
                                Interiors</a></li>
                        <li><a href="#" class="scroll-to-section" data-target="#painting-decor">Painting & Decor</a>
                        </li>
                        <li><a href="#" class="scroll-to-section" data-target="#it-networking">IT & Networking</a></li>
                    </ul>
                </li>
            </ul>
            <div class="main-menu-right">
                <a href="#" class="mobile-nav-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <div class="header-contact-info">
                    <div class="header-contact-info-icon">
                        <i class="base-icon-011-phone-1"></i>
                    </div>
                    <div class="header-contact-info-text">
                        <p class="call-text">Call Anytime</p>
                        <h5 class="phone-no"><a href="tel:{{ $setting->mobile ?? '' }}">+91
                                {{ $setting->mobile ?? '' }}</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>