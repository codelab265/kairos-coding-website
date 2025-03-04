<div>
    <div class="inner-header bg-holder" style="background-image: url(images/banner/inner-header/page-header-01.jpg);">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-md-12 text-center">
                    <h1 class="title">Blog</h1>
                    <p>When asked the question</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapper">

        <!--=================================
        Blog -->
        <section class="space-ptb ellipse-top ellipse-bottom">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-12">
                        <div class="blog-items grid-wrapper grid-xl-3 grid-md-2 grid-sm-1">
                            @foreach ($posts as $post)
                                <div class="blog-post-wrapper blog-style-1">
                                    <div class="blog-post-info">
                                        <div class="post-meta">
                                            <div class="post-meta-date">
                                                <span>{{ Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}</span>
                                            </div>
                                        </div>
                                        <h5 class="post-title"><a href="#">
                                                {{ $post->title }}
                                            </a>
                                        </h5>
                                    </div>
                                    <div class="blog-post-img">
                                        <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}"
                                            alt="" />
                                    </div>
                                    <div class="blog-action-info">
                                        <h5 class="post-category">
                                            <a href="{{ route('blog-detail', $post->slug) }}">
                                                {{ $post->category->name }}
                                            </a>
                                        </h5>
                                        <div class="post-link">
                                            <a class="btn-arrow" href="{{ route('blog-detail', $post->slug) }}"
                                                wire:navigate><svg width="17" height="16" viewBox="0 0 17 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_923_133)">
                                                        <path
                                                            d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657"
                                                            stroke="inherit" stroke-width="2" />
                                                        <path d="M15.7602 8.12158H0.1875" stroke="inherit"
                                                            stroke-width="2" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_923_133">
                                                            <rect width="15.904" height="14.8437" fill="inherit"
                                                                transform="translate(0.1875 0.578125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Blog -->

    </div>
</div>
