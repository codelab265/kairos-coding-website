<div class="offcanvas main-menu-offcanvas offcanvas-end" tabindex="-1" id="menuOffcanvas"
    aria-labelledby="menuOffcanvasLabel">
    <div class="offcanvas-header">
        <a id="menuOffcanvasLabel" class="navbar-brand" href="index.html">
            <img src="{{ asset('images/logo.png') }}" width="350" class="img-fluid">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="offcanvas-body">
        <div class="body-inner">
            <nav class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="/"
                            wire:navigate>
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about-us') ? 'active' : '' }}" href="/about-us"
                            wire:navigate>
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') || request()->routeIs('service-detail') ? 'active' : '' }}"
                            href="/services" wire:navigate>
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('blogs') || request()->routeIs('blog-detail') ? 'active' : '' }}"
                            href="/blogs" wire:navigate>
                            Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="/contact"
                            wire:navigate>Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="bottom-info">
                <div class="contact-info">
                    <span class="number">(+44) 7519 331 999</span>
                    <a class="mail" href="#"><i class="fa-regular fa-envelope"></i>contact@kairoscoding.com</a>

                </div>
            </div>
        </div>
    </div>
</div>
