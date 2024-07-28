<div>
    <div>
        <div class="inner-header bg-holder"
            style="background-image: url({{ asset('images/banner/inner-header/page-header-01.jpg') }});">
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-md-12 text-center">
                        <h1 class="title">
                            {{ ucwords(str_replace('-', ' ', $service)) }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">

            <!--=================================
            Services -->
            <section class="space-ptb ellipse-bottom">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-3">
                            <div class="sidebar is-sticky">
                                <div class="widget widget-categories">
                                    <h5 class="widget-title">Services</h5>
                                    <ul class="categories-list">
                                        <li><a href="/service/custom-software-development" wire:navigate>Software
                                                Development</a></li>
                                        <li><a href="/service/mobile-app-development" wire:navigate>Mobile App
                                                Development</a></li>
                                        <li><a href="/service/web-development" wire:navigate>Web Development</a></li>
                                        <li><a href="/service/cloud-solutions" wire:navigate>Cloud Solutions</a></li>
                                        <li><a href="/service/enterprise-solutions" wire:navigate>Enterprise
                                                Solutions</a></li>
                                        <li><a href="/service/ui-ux-design" wire:navigate>UI/UX Design</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-9 mt-5 mt-lg-0">
                            @include('livewire.services.' . $service)
                        </div>
                    </div>
                </div>
            </section>
            <!--=================================
            Services -->

        </div>
    </div>

</div>
