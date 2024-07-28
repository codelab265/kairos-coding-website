<footer class="site-footer footer-dark">
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-5">
                    <div class="widget widget-address-info">
                        <h5 class="widget-title">Where To Find Us</h5>
                        <ul class="address-info-list">
                            <li>
                                <i class="icon">
                                    <img class="img-fluid" src="{{ asset('images/svg/address-info-contacts.svg') }}"
                                        alt="" />
                                </i>
                                <span class="info">
                                    <span>19 Horseshoe Close,
                                    </span>Hemel Hempstead, UK</span>
                            </li>
                            <li><i class="icon"><img class="img-fluid"
                                        src="{{ asset('images/svg/address-info-headphone.svg') }}"
                                        alt="" /></i><span class="info"><span>(+44) 7519 331 999
                                    </span>Mon-fri 8:30am 6:30pm</span></li>
                            <li><i class="icon"><img class="img-fluid"
                                        src="{{ asset('images/svg/address-info-email.svg') }}"
                                        alt="" /></i><span class="info"><span>contact@kairoscoding.com
                                    </span>24x7
                                    online support</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-md-7">
                    <div class="widget">
                        <div class="widget widget-menu">
                            <h6 class="widget-title">Quick Links</h6>
                            <ul class="list-unstyled list-col-3 mb-0">
                                <li><a href="/" wire:navigate>Home</a></li>
                                <li><a href="/about-us" wire:navigate>About us</a></li>
                                <li><a href="/services" wire:navigate>Service</a></li>
                                <li><a href="/blog" wire:navigate>Blog</a></li>
                                <li><a href="/contact" wire:navigate>Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-12 ms-auto">
                    <div class="widget widget-info">
                        <h5 class="widget-title">Call Center</h5>
                        <a class="number">+447519 331 999</a>
                        <h6 class="title">and get a free estimate</h6>
                    </div>
                    <div class="widget-socail">
                        <ul class="socail-icon">
                            <li><a href="#">Fb</a></li>
                            <li><a href="#">Dr</a></li>
                            <li><a href="#">Tw</a></li>
                            <li><a href="#">Be</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p>
                        <a class="footer-logo" href="/">
                            <img src="{{ asset('images/logo.png') }}" width="350" class="img-fluid">
                        </a>
                    </p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>
                        © {{ now()->year }} KairosCoding. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
