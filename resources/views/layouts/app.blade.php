@php
    $setting = getSetting();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Interar" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="PRISM - Interior & Décor offers premium interior design and decoration services for residential and commercial spaces. Transform your space with our creative and modern designs." />
    <meta name="keywords"
        content="interior design, home decor, office decor, luxury interiors, modern design, space planning, architecture, furniture design, PRISM Interiors, commercial interiors" />
    <title>PRISM - Interior & Decor</title>
    <link rel="icon" href="{{ env('IMAGE_SHOW_PATH') . 'logo/' . $setting->logo }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-dark.css') }}" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

</head>

<body>
    <section>
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="P" class="letters-loading">P</span>
                        <span data-text-preloader="R" class="letters-loading">R</span>
                        <span data-text-preloader="I" class="letters-loading">I</span>
                        <span data-text-preloader="S" class="letters-loading">S</span>
                        <span data-text-preloader="M" class="letters-loading">M</span>
                    </div>
                </div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </section>

    @include('layouts.header')
    @include('layouts.message')
    @yield('content')
    @include('layouts.footer')

    <div class="mobile-nav-wrapper">
        <div class="mobile-nav-overlay mobile-nav-toggler"></div>
        <div class="mobile-nav-content">
            <a href="#" class="mobile-nav-close mobile-nav-toggler">
                <span></span>
                <span></span>
            </a>
            <div class="logo-box">
                <a href="index-2.html" aria-label="logo image">
                    <img src="images/logo-light.svg" width="165" height="72" alt="logo" />
                </a>
            </div>
            <div class="mobile-nav-container"></div>
            <ul class="list-items mobile-sidebar-contact">
                <li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>121 King Street, Australia</li>
                <li><span class="fas fa-envelope mrr-10 text-primary-color"></span><a
                        href="mailto:example@gmail.com">example@gmail.com</a></li>
                <li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span><a href="tel:123456789">+12 345 666
                        789</a></li>
            </ul>
            <ul class="social-list list-primary-color">
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="search-popup">
        <div class="search-popup-overlay search-toggler"></div>
        <div class="search-popup-content">
            <form action="#">
                <label for="search" class="sr-only">search here</label>
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="base-icon-search-1"></i>
                </button>
            </form>
        </div>
    </div>

    <div class="anim-scroll-to-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>




    <script>
        $(document).ready(function () {
            $(".scroll-to-section").click(function (e) {
                var target = $(this).data("target");
                var homeUrl = "{{ url('/') }}";

                if (window.location.pathname !== homeUrl.replace(window.location.origin, "")) {
                    e.preventDefault();
                    window.location.href = homeUrl + target;
                }
            });

            var hash = window.location.hash;
            if (hash && $(hash).length) {
                var headerHeight = $("header").length ? $("header").outerHeight() : 0;
                var offset = headerHeight + 20;  // Adjust 20 for any additional offset needed

                $("html, body").animate(
                    {
                        scrollTop: $(hash).offset().top - offset
                    },
                    800
                );
            }
        });
    </script>


    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.event.move.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.twentytwenty.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/backtotop.js') }}"></script>
    <script src="{{ asset('assets/js/trigger.js') }}"></script>
</body>

</html>