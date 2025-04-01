@php
    $setting = getSetting();
@endphp

<footer class="footer bg-cover" data-background="images/bg/5.jpg" data-overlay-dark="98">
    <div class="footer-main-area">
        <div class="footer-section-obj1">
            <img src="{{ asset('assets/images/objects/footer-obj1.png') }}" alt="" />
        </div>
        <div class="footer-section-obj2">
            <img src="{{ asset('assets/images/objects/footer-obj2.png') }}" alt="" />
        </div>
        <div class="container">
            <div class="row pdb-65">
                <div class="col-xl-4 col-lg-6">
                    <div class="widget footer-widget mrr-60 mrr-md-0">
                        <h5 class="widget-title text-white mrb-30">Newsletter</h5>
                        <p class="mrb-30">"Stay inspired with PRISM - Interior & Decor! Sign up for our newsletter to
                            get the latest design trends, expert tips, and exclusive offers delivered to your inbox."
                        </p>
                        <form action="{{ url('newsletter') }}" method="post" class="newsletter-inner">
                            @csrf
                            <div class="newsletter-from">
                                <div class="email">
                                    <input name="email" placeholder="Your email address" class="common-input"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                        required="" type="email">
                                </div>
                                <div class="submit">
                                    <button type="submit">
                                        <i class="base-icon-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="widget footer-widget">
                        <h5 class="widget-title text-white mrb-30">Services</h5>
                        <ul class="footer-widget-list">
                            <li><a href="#" class="scroll-to-section" data-target="#civil-works">Civil Works</a>
                            </li>
                            <li><a href="#" class="scroll-to-section" data-target="#carpentry">Carpentry &
                                    Woodwork</a></li>
                            <li><a href="#" class="scroll-to-section" data-target="#modular-furniture">Modular
                                    Furniture</a>
                            </li>
                            <li><a href="#" class="scroll-to-section" data-target="#electrical-ac">Electrical &
                                    AC</a></li>
                            <li><a href="#" class="scroll-to-section" data-target="#flooring-tiles">Flooring &
                                    Tiles</a>
                            </li>
                            <li><a href="#" class="scroll-to-section" data-target="#ceiling-interiors">Ceiling &
                                    Interiors</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6">
                    <div class="widget footer-widget mrr-30 mrr-md-0">
                        <h5 class="widget-title text-white mrb-30">Contact</h5>
                        <address class="mrb-0">
                            <p>{{ $setting->address ?? ''}}</p>
                            <div class="mrb-10">
                                <a href="tel:{{ $setting->mobile ?? ''}}"><i class="fas fa-phone-alt mrr-10"></i>+91
                                    {{ $setting->mobile ?? ''}}</a>
                            </div>
                            <div class="mrb-10">
                                <a href="mailto:{{ $setting->email ?? ''}}"><i
                                        class="fas fa-envelope mrr-10"></i>{{ $setting->email ?? ''}}</a>
                            </div>
                        </address>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="widget footer-widget mrr-60 mrr-md-0">
                        <p class="mrb-25">Follow us for the latest trends, design inspiration, and exclusive updates.
                            Let’s create beautiful spaces together!
                        </p>
                        <ul class="social-list">
                            <li>
                                <a href="{{ $setting->facebook_link ?? '#' }}" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{ $setting->twitter_link ?? '#' }}" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{ $setting->instagram_link ?? '#' }}" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{ $setting->youtube_link ?? '#' }}" target="_blank"><i
                                        class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>