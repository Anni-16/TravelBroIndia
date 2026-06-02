<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>{{ $blog->blog_name }}</title>
    <meta name="title" content="{{ $blog->meta_title }}">
    <meta name="keyword" content="{{ $blog->meta_keyword }}">
    <meta name="description" content="{{ $blog->meta_description }}">
    <!-- Css Links Start -->
    @include('include.csslinks')
    <!-- Css Links End -->
</head>

<body>


    <!-- header Section Start -->
    @include('include.header')
    <!-- header Section  End -->


    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>{{ $blog->blog_name }}</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><span><i class="fas fa-circle"></i></span>{{ $blog->blog_name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Area -->
    <section id="news_details_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="news_detail_wrapper">
                        <div class="news_details_content_area">
                            <img src="{{ asset('Uploads/blog/' . $blog->image) }}" alt="{{ $blog->alt_tag }}">

                            <div class=" pt-4">
                                <div class="news_author_area_name d-flex " style="justify-content: space-between;">
                                    <h4>Posted By :- {{ $blog->author_name }} </h4>
                                    <h4>Date :- {{ $blog->formatted_date }}
                                    </h4>
                                </div>
                            </div>

                            <h2>{{ $blog->blog_name }}</h2>
                            <p>{{ $blog->content }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="news_details_rightbar">
                        <div class="news_details_right_item">
                            <h3>Recent Blogs</h3>
                            @if ($recentBlogs->isNotEmpty())
                            @foreach ($recentBlogs as $recent)
                            <div class="recent_news_item">
                                <div class="recent_news_img">
                                    <img src="{{ asset('Uploads/blog/' . $recent->image) }}" alt="{{ $recent->alt_tag }}" width="80px">
                                </div>
                                <div class="recent_news_text">
                                    <h5>
                                        <a href="{{ route('blog-details', $recent->slug) }}">
                                            {{ $recent->blog_name }}
                                        </a>
                                    </h5>
                                    <p>
                                        <a href="{{ route('blog-details', $recent->slug) }}">{{ $recent->formatted_date }}</a></i>
                                    </p>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="col-12 text-center">
                                <p>No blog found.</p>
                            </div>
                            @endif
                        </div>
                        <div class="news_details_right_item">
                            <h3>Share causes</h3>
                            <div class="share_icon_area">
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Area -->
    <section id="cta_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta_left">
                        <div class="cta_icon">
                            <img src="{{ asset('front-end/assets/img/common/email.png') }}" alt="icon">
                        </div>
                        <div class="cta_content">
                            <h4>Get the latest news and offers</h4>
                            <h2>Subscribe to our newsletter</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cat_form">
                        <form id="cta_form_wrappper">
                            <div class="input-group"><input type="text" class="form-control" placeholder="Enter your mail address"><button class="btn btn_theme btn_md" type="button">Subscribe</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer Section Start -->
    @include('include.footer')
    <!-- Footer Section End -->

    <!-- Script Links Start -->
    @include('include.script')
    <!-- Script Links End -->

</body>

</html>