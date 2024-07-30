<header class="header header-default header-sticky header-absolute">
    <div class="header-inner">
        <div class="site-logo">
            <a class="navbar-brand" href="{{ route('home') }}" wire:navigate>
                <img src="{{ asset('images/logo.png') }}" width="350" class="img-fluid">
            </a>
        </div>
        <div class="site-menu d-none d-xl-block">
            <ul class="main-menu">
                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="/" wire:navigate>
                        Home
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('about-us') ? 'active' : '' }}">
                    <a class="nav-link {{ request()->routeIs('about-us') ? 'active' : '' }}" href="/about-us"
                        wire:navigate>
                        About Us
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('services') || request()->routeIs('service-detail') ? 'active' : '' }}">
                    <a class="nav-link {{ request()->routeIs('services') || request()->routeIs('service-detail') ? 'active' : '' }}"
                        href="/services" wire:navigate>
                        Services
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('blogs') || request()->routeIs('blog-detail') ? 'active' : '' }}">
                    <a class="nav-link {{ request()->routeIs('blogs') || request()->routeIs('blog-detail') ? 'active' : '' }}"
                        href="/blogs" wire:navigate>
                        Blog
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('contact-us') ? 'active' : '' }}">
                    <a class="nav-link {{ request()->routeIs('contact-us') ? 'active' : '' }}" href="/contact"
                        wire:navigate>Contact</a>
                </li>
            </ul>
        </div>

        <div class="site-action d-none d-xl-block">
            <div class="action-hamburger">
                <a class="hamburger" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                    <span class="hamburger-container">
                        <span class="hamburger-inner"></span>
                        <span class="hamburger-hidden"></span>
                    </span>
                </a>
            </div>
        </div>

        <div class="mobile-action d-block d-xl-none">
            <div class="mobile-hamburger">
                <a class="hamburger" href="#" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas"
                    aria-controls="menuOffcanvas">
                    <span class="hamburger-container">
                        <span class="hamburger-inner"></span>
                        <span class="hamburger-hidden"></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</header>
