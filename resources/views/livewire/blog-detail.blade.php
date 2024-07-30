<div>
    <div class="inner-header bg-holder"
        style="background-image: url({{ asset('images/banner/inner-header/page-header-01.jpg') }});">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-md-12 text-center">
                    <h1 class="title">Blog Details</h1>
                    <p>
                        {{ $post->title }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapper">

        <!--=================================
        Blog -->
        <section class="space-ptb ellipse-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="blog-single format-standard">
                            <div class="post-content-header">
                                <div class="post-meta">
                                    <ul>
                                        <li class="post-meta-category"><a href="#">{{ $post->category->name }}</a>
                                        </li>
                                        <li class="post-meta-date">
                                            {{ Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="post-title"><a href="#">{{ $post->title }}</a></h3>

                                <div class="blog-single-info">
                                    <div class="blog-author">
                                        <img class="author-image img-fluid" src="{{ asset('images/favicon.png') }}"
                                            alt="#">
                                        <div class="blog-info">
                                            <h6 class="author-name">Writen by</h6>
                                            <p>admin</p>
                                        </div>
                                    </div>
                                    <div class="social-icon">
                                        <p class="mb-0 me-2 me-sm-4">Share </p>
                                        <ul>
                                            <li><a href="#">Fb</a></li>
                                            <li><a href="#">IN</a></li>
                                            <li><a href="#">X</a></li>
                                            <li><a href="#">YT</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="blog-post-img">
                                <img class="img-fluid radius-10" src="{{ asset('storage/' . $post->image) }}"
                                    alt="Blog Image" />
                            </div>
                            <div class="blog-post-content">
                                <div class="post-content-body">
                                    {!! $post->body !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Blog -->

    </div>
</div>
