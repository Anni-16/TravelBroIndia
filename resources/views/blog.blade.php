<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Blogs - TravelBro - India Best Hotel Service Provider </title>
    <meta name="title" content="">
    <meta name="keyword" content="">
    <meta name="description" content="">
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
                        <h2>Blog</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Area -->
    <section id="news_main_arae" class="section_padding">
        <div class="container">

            <div class="new_main_news_box">
                <div class="row">
                    @if ($blogs->isNotEmpty())
                    @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="news_item_boxed">
                            <div class="news_item_img">
                                <a href="{{ route('blog-details', $blog->slug) }}">
                                    <img src="{{ asset('Uploads/blog/' . $blog->image) }}" alt="{{ $blog->alt_tag }}" style="width: 100%;">
                                </a>
                            </div>
                            <div class="news_item_content">
                                <h3>
                                    <a href="{{ route('blog-details', $blog->slug) }}">
                                        {{ $blog->blog_name }}
                                    </a>
                                </h3>
                                <p>{{ $blog->content }}</p>
                            </div>
                            <div class="news_author_area">
                                <div class="news_author_img">
                                    <img src="{{ asset('front-end/assets/img/Travel-bro1.png') }}" alt="Author">
                                </div>
                                <div class="news_author_area_name">
                                    <h4>{{ $blog->author_name }}</h4>
                                    <p>
                                        {{ $blog->formatted_date }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12 text-center">
                        <p>No blog found.</p>
                    </div>
                    @endif
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