<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Home - TravelBro - India Best Hotel Service Provider  </title>

    <!-- Css Links  -->
     @include('include.csslinks')
    <!-- Css Links  -->
</head>

<body>


    <!-- Header Start -->
     @include('include.header')
    <!-- Header End -->


    <!-- Banner Area -->
    <section id="home_one_banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_one_text">
                        <h1>Explore the world together</h1>
                        <h3>Find awesome flights, hotel, tour, car and packages</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Area -->
    <section id="theme_search_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="theme_search_form_area">
                        <div class="theme_search_form_tabbtn">
                            <ul class="nav nav-tabs" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="hotels-tab" data-bs-toggle="tab"
                                        data-bs-target="#hotels" type="button" role="tab" aria-controls="hotels"
                                        aria-selected="false"><i class="fas fa-hotel"></i>Hotels</button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="flights" role="tabpanel"
                                aria-labelledby="flights-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="flight_categories_search">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="oneway-tab" data-bs-toggle="tab"
                                                        data-bs-target="#oneway_flight" type="button" role="tab"
                                                        aria-controls="oneway_flight"
                                                        aria-selected="true">Hotels</button>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="myTabContent1">
                                    <div class="tab-pane fade show active" id="oneway_flight" role="tabpanel"
                                        aria-labelledby="oneway-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="oneway_search_form">
                                                    <form action="#!">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                                <div class="form_search_date">
                                                                    <div class="flight_Search_boxed date_flex_area">
                                                                        <div class="Journey_date">
                                                                            <p>Checkin Date</p>
                                                                            <input type="date" value="2022-05-05">
                                                                            <span>Thursday</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                                <div class="form_search_date">
                                                                    <div class="flight_Search_boxed date_flex_area">
                                                                        <div class="Journey_date">
                                                                            <p>Checkin Date</p>
                                                                            <input type="date" value="2022-05-05">
                                                                            <span>Thursday</span>
                                                                        </div>
                                                                        <div class="range_plan">
                                                                            <i class="fas fa-exchange-alt"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4  col-md-6 col-sm-12 col-12">
                                                                <div
                                                                    class="flight_Search_boxed dropdown_passenger_area">
                                                                    <p>Guest </p>
                                                                    <div class="dropdown">
                                                                        <button class="dropdown-toggle final-count"
                                                                            data-toggle="dropdown" type="button"
                                                                            id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            0 Guest
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown_passenger_info"
                                                                            aria-labelledby="dropdownMenuButton1">
                                                                            <div class="traveller-calulate-persons">
                                                                                <div class="passengers">
                                                                                    <h6>Guest</h6>
                                                                                    <div class="passengers-types">
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count pcount">2</span>
                                                                                                <div class="type-label">
                                                                                                    <p>Adult</p>
                                                                                                    <span>12+
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count ccount">0</span>
                                                                                                <div class="type-label">
                                                                                                    <p
                                                                                                        class="fz14 mb-xs-0">
                                                                                                        Children
                                                                                                    </p><span>2
                                                                                                        - Less than 12
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add-c">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract-c">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count incount">0</span>
                                                                                                <div class="type-label">
                                                                                                    <p
                                                                                                        class="fz14 mb-xs-0">
                                                                                                        Infant
                                                                                                    </p><span>Less
                                                                                                        than 2
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add-in">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract-in">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cabin-selection">
                                                                                    <h6>Hotel Type</h6>
                                                                                    <div class="cabin-list">
                                                                                        <button type="button"
                                                                                            class="label-select-btn">
                                                                                            <span
                                                                                                class="muiButton-label">Economy
                                                                                            </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="label-select-btn active">
                                                                                            <span
                                                                                                class="muiButton-label">
                                                                                                Business
                                                                                            </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="label-select-btn">
                                                                                            <span
                                                                                                class="MuiButton-label">First
                                                                                                Class </span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <span>Business</span>
                                                                </div>
                                                            </div>
                                                            <div class="top_form_search_button">
                                                                <button class="btn btn_theme btn_md">Search</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Form Area End -->

    <!-- about section -->
    <section id="five_about_area" class="section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="five_about_left">
                        <div class="section_heading_five">
                            <h5>About us</h5>
                            <h2>We create journeys for the excited travels
                                and value for money</h2>
                            <p>Welcome to Travel Bro: your partner in unforgettable journey
We're passionate about creating unique and memorable journeys that
go beyond the normal, exploring new cultures, welcoming the
unexpected, and creating unforgettable memories. Founded on March
3rd, 2025 our team of committed travel experts has spent years
exploring the world, sharing knowledge and expertise to design
itineraries that resonate with your passion. Whether you're looking for
a relaxing getaway or an adventure-filled trip, we've got the perfect
itinerary for you. By choosing Travel Bro, you will experience local
expertise, extraordinary service, cost-effective and eco-tourism
practices that support local communities and diminish environmental
impact. </p>
                        </div>
                        <!-- <div class="about_five_info">
                            <div class="about_five_item about_item_one">
                                <div class="hotel_img">
                                    <img src="{{ asset('front-end/assets/img/icon/best-hotel.png') }}" alt="icon">
                                </div>
                                <div class="about_five_text">
                                    <h3>Best hotels</h3>
                                    <p>Officia ad ad pariatur id eu ipsum excepteur incididunt eiusmod ad proident. Id
                                        et tempor laboris irure quis adipisicing fugiat.</p>
                                </div>
                            </div>
                            <div class="about_five_item">
                                <div class="flight_img">
                                    <img src="{{ asset('front-end/assets/img/icon/cheaf-flight.png') }}" alt="icon">
                                </div>
                                <div class="about_five_text">
                                    <h3>Cheap flights</h3>
                                    <p>Officia ad ad pariatur id eu ipsum excepteur incididunt eiusmod ad proident. Id
                                        et tempor laboris irure quis adipisicing fugiat.</p>
                                </div>
                            </div>
                        </div> -->
                        <div class="about_five_bottom">
                            <div class="about_five_button">
                                <a href="{{ route('about-us') }}" class="btn btn_theme btn_md">Learn more</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="five_about_img">
                        <img src="{{ asset('front-end/assets/img/home-five/common/about_five.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- Trending destinations section -->
    <section id="trending_destinations_area" class="section_padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_heading_seven">
                        <h2>Trending destinations</h2>
                        <a href="top-destinations.html">See all<img src="{{ asset('front-end/assets/img/icon/list-arrow.png') }}" alt="icon"></a>
                    </div>
                    <div class="trending_destinations_wrapper">
                        <div class="trending_item">
                            <div class="treding_img">
                                <a href="top-destinations.html"><img src="{{ asset('front-end/assets/img/home-seven/destination/paris.png') }}"
                                        alt="img"></a>
                            </div>
                            <h3>Dehradun</h3>
                            <p>120+ tours</p>
                        </div>
                        <div class="trending_item">
                            <div class="treding_img">
                                <a href="top-destinations.html">
                                    <img src="{{ asset('front-end/assets/img/home-seven/destination/singapore.png') }}" alt="img"></a>
                            </div>
                            <h3>Puri</h3>
                            <p>82+ tours</p>
                        </div>
                        <div class="trending_item">
                            <div class="treding_img">
                                <a href="top-destinations.html"><img src="{{ asset('front-end/assets/img/home-seven/destination/rome.png') }}"
                                        alt="img"></a>
                            </div>
                            <h3>Goa</h3>
                            <p>140+ tours</p>
                        </div>
                        <div class="trending_item">
                            <div class="treding_img">
                                <a href="top-destinations.html"><img src="{{  asset('front-end/assets/img/home-seven/destination/bangkok.png') }}"
                                        alt="img"></a>
                            </div>
                            <h3>Ooty</h3>
                            <p>247+ tours</p>
                        </div>
                        <div class="trending_item">
                            <div class="treding_img">
                                <a href="top-destinations.html"><img src="{{ asset('front-end/assets/img/home-seven/destination/bali.png') }}"
                                        alt="img"></a>
                            </div>
                            <h3>Shimla</h3>
                            <p>250+ tours</p>
                        </div>
                        <div class="trending_item">
                            <div class="treding_img">
                                <a href="top-destinations.html"><img src="{{ asset('front-end/assets/img/home-seven/destination/phuket.png') }}"
                                        alt="img"></a>
                            </div>
                            <h3>Manali</h3>
                            <p>320+ tours</p>
                        </div>
                        <div class="trending_item">
                            <div class="treding_img">
                                <a href="top-destinations.html"><img src="{{ asset('front-end/assets/img/home-seven/destination/tokyo.png') }}"
                                        alt="img"></a>
                            </div>
                            <h3>Mysore</h3>
                            <p>70+ tours</p>
                        </div>
                        <div class="trending_item">
                            <div class="treding_img">
                                <a href="top-destinations.html"><img
                                        src="{{ asset('front-end/assets/img/home-seven/destination/indonesia.png') }}" alt="img"></a>
                            </div>
                            <h3>Amritsar</h3>
                            <p>120+ tours</p>
                        </div>
                        <div class="trending_item">
                            <div class="treding_img">
                                <a href="top-destinations.html"><img src="{{ asset('front-end/assets/img/home-seven/destination/mexico.png') }}"
                                        alt="img"></a>
                            </div>
                            <h3>Pokhara</h3>
                            <p>30+ tours</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending destinations section End -->


    <!--Explore India Tours Area -->
    <section id="promotional_tours">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Explore India</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="promotional_tour_slider owl-theme owl-carousel dot_style">
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i> Jaipur</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">The Oberoi Rajvilas, Jaipur</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Hyderabad</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">Taj Falaknuma Palace</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>
                                    New Delhi
                                </p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">
                                        Taj Mahal Hotel </a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset( 'front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Goa</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">Taj Exotica </a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Gulmarg, Kashmir</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">The Khyber Himalayan Resort and Spa</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i> Goa</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">
                                        Alila Diwa</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explore India Tours Area End -->

    <!-- Popular destinations Start -->
    <section id="top_destinations" class="section_padding_top">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Popular destinations</h2>
                    </div>
                </div>
            </div>
            <!-- amazing place area -->
            <section id="amazing_tour_place">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="amazing_place_boxed">
                                        <a href="my-hotel-details.html">
                                            <div class="amazing_place_img">
                                                <img src="{{ asset('front-end/assets/img/home-eight/amazing-place/am-place-1.png') }}" alt="img">
                                            </div>
                                            <div class="amazing_place_box_content">
                                                <div class="amazing_place_inner_content">
                                                    <div class="rating_outof">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <h5>5 Out of 5</h5>
                                                    </div>
                                                    <h3>The Raj Palace</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="amazing_place_boxed">
                                        <a href="my-hotel-details.html">
                                            <div class="amazing_place_img">
                                                <img src="{{ asset('front-end/assets/img/home-eight/amazing-place/am-place-2.png') }}" alt="img">
                                            </div>
                                            <div class="amazing_place_box_content">
                                                <div class="amazing_place_inner_content">
                                                    <div class="rating_outof">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <h5>5 Out of 5</h5>
                                                    </div>
                                                    <h3>Ritz Carlton, Bangalore</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="amazing_place_boxed">
                                        <a href="my-hotel-details.html">
                                            <div class="amazing_place_img padding_img">
                                                <img src="{{ asset('front-end/assets/img/home-eight/amazing-place/am-place-3.png') }}" alt="img">
                                            </div>
                                            <div class="amazing_place_box_content">
                                                <div class="amazing_place_inner_content">
                                                    <div class="rating_outof">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <h5>5 Out of 5</h5>
                                                    </div>
                                                    <h3>Park Hyatt, Chennai</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="amazing_place_boxed">
                                        <a href="my-hotel-details.html">
                                            <div class="amazing_place_img">
                                                <img src="{{ asset('front-end/assets/img/home-eight/amazing-place/am-place-4.png') }}" alt="img">
                                            </div>
                                            <div class="amazing_place_box_content">
                                                <div class="amazing_place_inner_content">
                                                    <div class="rating_outof">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <h5>5 Out of 5</h5>
                                                    </div>
                                                    <h3>Shangri-La's Eros Hotel, Delhi </h3>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="amazing_place_boxed">
                                                <a href="my-hotel-details.html">
                                                    <div class="amazing_place_img padding_img">
                                                        <img src="{{ asset('front-end/assets/img/home-eight/amazing-place/am-place-5.png') }}"
                                                            alt="img">
                                                    </div>
                                                    <div class="amazing_place_box_content">
                                                        <div class="amazing_place_inner_content">
                                                            <div class="rating_outof">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <h5>5 Out of 5</h5>
                                                            </div>
                                                            <h3>The Oberoi, Gurgaon</h3>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                            <div class="amazing_place_boxed">
                                                <a href="my-hotel-details.html">
                                                    <div class="amazing_place_img">
                                                        <img src="{{ asset('front-end/assets/img/home-eight/amazing-place/am-place-6.png') }}"
                                                            alt="img">
                                                    </div>
                                                    <div class="amazing_place_box_content">
                                                        <div class="amazing_place_inner_content">
                                                            <div class="rating_outof">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <h5>5 Out of 5</h5>
                                                            </div>
                                                            <h3>Fairmont, Jaipur</h3>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- Popular destinations  End -->

    <!-- Relegious Tours Area -->
    <section id="promotional_tours">
        <div class="container">
            <!-- Section Heading -->
            <div class="row section_padding_top">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Relegious Hotels</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="promotional_tour_slider owl-theme owl-carousel dot_style">
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i> Jaipur</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">The Oberoi Rajvilas, Jaipur</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Hyderabad</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">Taj Falaknuma Palace</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>
                                    New Delhi
                                </p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">
                                        Taj Mahal Hotel </a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Goa</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">Taj Exotica </a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Gulmarg, Kashmir</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">The Khyber Himalayan Resort and Spa</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{  asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i> Goa</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">
                                        Alila Diwa</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Relegious Tours Area -->

    <!-- Desert Special Tours Area -->
    <section id="promotional_tours">
        <div class="container">
            <!-- Section Heading -->
            <div class="row section_padding_top">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Desert Special Hotels</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="promotional_tour_slider owl-theme owl-carousel dot_style">
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i> Jaipur</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">The Oberoi Rajvilas, Jaipur</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Hyderabad</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">Taj Falaknuma Palace</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>
                                    New Delhi
                                </p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">
                                        Taj Mahal Hotel </a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Goa</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">Taj Exotica </a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Gulmarg, Kashmir</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">The Khyber Himalayan Resort and Spa</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i> Goa</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">
                                        Alila Diwa</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Desert Special Tours Area -->

    <!-- Snow Special Tours Area -->
    <section id="promotional_tours">
        <div class="container">
            <!-- Section Heading -->
            <div class="row section_padding_top">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Snow Special Hotels</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="promotional_tour_slider owl-theme owl-carousel dot_style">
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i> Jaipur</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">The Oberoi Rajvilas, Jaipur</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Hyderabad</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">Taj Falaknuma Palace</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>
                                    New Delhi
                                </p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">
                                        Taj Mahal Hotel </a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Goa</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">Taj Exotica </a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Gulmarg, Kashmir</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">The Khyber Himalayan Resort and Spa</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="my-hotel-details.html"><img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i> Goa</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="my-hotel-details.html">
                                        Alila Diwa</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>₹99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Snow Special Tours Area -->

    <!-- Browse by property type start -->
    <section id="explore_area" class="section_padding_top">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Browse by property type</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-hotels" role="tabpanel"
                            aria-labelledby="nav-hotels-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="my-hotel-details.html">
                                                <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i>Jaipur</p>
                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="my-hotel-details.html">The Raj Palace</a></h4>
                                            <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                    class="review_count">(1214
                                                    reviewes)</span></p>
                                            <h3>₹99.00 <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="my-hotel-details.html">
                                                <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i>New Delhi</p>
                                            <div class="discount_tab">
                                                <span>50%</span>
                                            </div>

                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="my-hotel-details.html">Shangri-La's Eros Hotel</a></h4>
                                            <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                    class="review_count">(1214
                                                    reviewes)</span></p>
                                            <h3>₹99.00 <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="my-hotel-details.html">
                                                <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i>Mumbai</p>
                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="my-hotel-details.html">
                                                    Sofitel Mumbai BKC</a></h4>
                                            <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                    class="review_count">(1214
                                                    reviewes)</span></p>
                                            <h3>₹99.00 <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="my-hotel-details.html">
                                                <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i>Bangalore</p>
                                            <div class="discount_tab">
                                                <span>50%</span>
                                            </div>
                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="my-hotel-details.html">Ritz Carlton Bangalore</a></h4>
                                            <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                    class="review_count">(1214
                                                    reviewes)</span></p>
                                            <h3>₹99.00 <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="my-hotel-details.html">
                                                <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i>Hyderabad</p>
                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="my-hotel-details.html">
                                                    Hyatt Hyderabad Gachibowli</a></h4>
                                            <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                    class="review_count">(1214
                                                    reviewes)</span></p>
                                            <h3>₹99.00 <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="my-hotel-details.html">
                                                <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i>Chennai</p>
                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="my-hotel-details.html">
                                                    The Leela Palace Chennai</a></h4>
                                            <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                    class="review_count">(1214
                                                    reviewes)</span></p>
                                            <h3>₹99.00 <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="my-hotel-details.html">
                                                <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i>Chennai</p>
                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="my-hotel-details.html">
                                                    Park Hyatt Chennai</a></h4>
                                            <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                    class="review_count">(1214
                                                    reviewes)</span></p>
                                            <h3>₹99.00 <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="my-hotel-details.html">
                                                <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i>Gurgaon</p>
                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="my-hotel-details.html">The Oberoi Gurgaon</a></h4>
                                            <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                    class="review_count">(1214
                                                    reviewes)</span></p>
                                            <h3>₹99.00 <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 offset-lg-5">
                                    <div class="destinations_content_box">
                                        <a href="top-destinations.html" class="btn btn_theme btn_md w-100">View all</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Browse by property type End -->

    <!-- Offer Area -->
    <section id="offer_area" class="section_padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="offer_area_box d-none-phone img_animation">
                        <img src="{{ asset('front-end/assets/img/offer/offer1.png') }}" alt="img">
                        <div class="offer_area_content">
                            <h2>Special Offers</h2>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum. Stet clita kasd dolor sit amet. Lorem ipsum
                                dolor sit amet.</p>
                            <a href="#!" class="btn btn_theme btn_md">Holiday deals</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="offer_area_box img_animation">
                        <img src="{{  asset('front-end/assets/img/offer/offer2.png') }}" alt="img">
                        <div class="offer_area_content">
                            <h2>News letter</h2>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
                            <a href="#!" class="btn btn_theme btn_md">Subscribe now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="offer_area_box img_animation">
                        <img src="{{  asset('front-end/assets/img/offer/offer3.png') }}" alt="img">
                        <div class="offer_area_content">
                            <h2>Travel tips</h2>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
                            <a href="#!" class="btn btn_theme btn_md">Get tips</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Area End -->

    <!-- Top Deals and Discounts Area -->
    <section id="top_details_area" class="section_padding_top">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="section_heading_left">
                        <h2> Deals for the Weekend</h2>
                        <p>Nostrud aliqua ipsum dolore velit labore nulla fugiat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="top_details_four_item">
                        <img src="{{ asset('front-end/assets/img/common/offer_banner.png') }}" alt="">
                        <div class="top_details_posation">
                            <p>Get winter deal</p>
                            <h3>Book your ticket to enjoy</h3>
                            <a href="#!" class="btn btn_theme btn_md">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="top_details_four_slider button_style_top_left owl-theme owl-carousel">
                        <div class="common_card_four">
                            <div class="common_card_four_img">
                                <a href="tour-search.html">
                                    <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                </a>
                            </div>
                            <div class="common_card_four_text">
                                <ul class="common_card_four_list">
                                    <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                                    <li>Family tour</li>
                                </ul>
                                <h3><a href="tour-search.html">
                                        ITC Grand Bharat</a></h3>
                                <p><i class="fas fa-map-marker-alt"></i>Gurgaon, Haryana</p>
                                <div class="common_card_four_bottom">
                                    <div class="common_card_four_bottom_left">
                                        <p>4.8/5 Excellent</p>
                                        <h6>(1214 reviewes)</h6>
                                    </div>
                                    <div class="common_card_four_bottom_right">
                                        <h4>₹99.00 <sub>/Per person</sub></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="common_card_four_img">
                                <a href="tour-search.html">
                                    <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                </a>
                            </div>
                            <div class="common_card_four_text">
                                <ul class="common_card_four_list">
                                    <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                                    <li>Family tour</li>
                                </ul>
                                <h3><a href="tour-search.html">
                                        Park Hyatt Chennai</a></h3>
                                <p><i class="fas fa-map-marker-alt"></i>Chennai, Tamil Nadu </p>
                                <div class="common_card_four_bottom">
                                    <div class="common_card_four_bottom_left">
                                        <p>4.8/5 Excellent</p>
                                        <h6>(1214 reviewes)</h6>
                                    </div>
                                    <div class="common_card_four_bottom_right">
                                        <h4>₹99.00 <sub>/Per person</sub></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="common_card_four_img">
                                <a href="tour-search.html">
                                    <img src="{{  asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                </a>
                            </div>
                            <div class="common_card_four_text">
                                <ul class="common_card_four_list">
                                    <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                                    <li>Family tour</li>
                                </ul>
                                <h3><a href="tour-search.html">The Leela Palace Chennai</a></h3>
                                <p><i class="fas fa-map-marker-alt"></i>Chennai, Tamilnadu </p>
                                <div class="common_card_four_bottom">
                                    <div class="common_card_four_bottom_left">
                                        <p>4.8/5 Excellent</p>
                                        <h6>(1214 reviewes)</h6>
                                    </div>
                                    <div class="common_card_four_bottom_right">
                                        <h4>₹99.00 <sub>/Per person</sub></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="common_card_four_img">
                                <a href="tour-search.html">
                                    <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                </a>
                            </div>
                            <div class="common_card_four_text">
                                <ul class="common_card_four_list">
                                    <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                                    <li>Family tour</li>
                                </ul>
                                <h3><a href="tour-search.html">
                                        Fairmont Jaipur</a></h3>
                                <p><i class="fas fa-map-marker-alt"></i>Jaipur, Rajsthan</p>
                                <div class="common_card_four_bottom">
                                    <div class="common_card_four_bottom_left">
                                        <p>4.8/5 Excellent</p>
                                        <h6>(1214 reviewes)</h6>
                                    </div>
                                    <div class="common_card_four_bottom_right">
                                        <h4>₹99.00 <sub>/Per person</sub></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="common_card_four_img">
                                <a href="tour-search.html">
                                    <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                </a>
                            </div>
                            <div class="common_card_four_text">
                                <ul class="common_card_four_list">
                                    <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                                    <li>Family tour</li>
                                </ul>
                                <h3><a href="tour-search.html">
                                        Shangri-La's Eros Hotel</a></h3>
                                <p><i class="fas fa-map-marker-alt"></i>New Delhi, Delhi</p>
                                <div class="common_card_four_bottom">
                                    <div class="common_card_four_bottom_left">
                                        <p>4.8/5 Excellent</p>
                                        <h6>(1214 reviewes)</h6>
                                    </div>
                                    <div class="common_card_four_bottom_right">
                                        <h4>₹99.00 <sub>/Per person</sub></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="common_card_four_img">
                                <a href="tour-search.html">
                                    <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                </a>
                            </div>
                            <div class="common_card_four_text">
                                <ul class="common_card_four_list">
                                    <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                                    <li>Family tour</li>
                                </ul>
                                <h3><a href="tour-search.html">Sofitel Mumbai BKC</a></h3>
                                <p><i class="fas fa-map-marker-alt"></i>Mumbai, Maharastra</p>
                                <div class="common_card_four_bottom">
                                    <div class="common_card_four_bottom_left">
                                        <p>4.8/5 Excellent</p>
                                        <h6>(1214 reviewes)</h6>
                                    </div>
                                    <div class="common_card_four_bottom_right">
                                        <h4>₹99.00 <sub>/Per person</sub></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="common_card_four_img">
                                <a href="tour-search.html">
                                    <img src="{{ asset('front-end/assets/img/my-images/hotel-1.jpeg') }}" alt="img">
                                </a>
                            </div>
                            <div class="common_card_four_text">
                                <ul class="common_card_four_list">
                                    <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                                    <li>Family tour</li>
                                </ul>
                                <h3><a href="tour-search.html">
                                        Ritz Carlton Bangalore</a></h3>
                                <p><i class="fas fa-map-marker-alt"></i>Bangalore, India </p>
                                <div class="common_card_four_bottom">
                                    <div class="common_card_four_bottom_left">
                                        <p>4.8/5 Excellent</p>
                                        <h6>(1214 reviewes)</h6>
                                    </div>
                                    <div class="common_card_four_bottom_right">
                                        <h4>₹99.00 <sub>/Per person</sub></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Deals And Discounts Area End -->

    <!-- Destinations Area -->
    <section id="destinations_area" class="section_padding_top" style="padding-bottom: 50px;">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Destinations for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="theme_nav_tab">
                        <nav class="theme_nav_tab_item">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-nepal-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-nepal" type="button" role="tab" aria-controls="nav-nepal"
                                    aria-selected="true">Mumbai</button>
                                <button class="nav-link" id="nav-malaysia-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-malaysia" type="button" role="tab" aria-controls="nav-malaysia"
                                    aria-selected="false">Ooty</button>
                                <button class="nav-link" id="nav-indonesia-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-indonesia" type="button" role="tab"
                                    aria-controls="nav-indonesia" aria-selected="false">Delhi</button>
                                <button class="nav-link" id="nav-turkey-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-turkey" type="button" role="tab" aria-controls="nav-turkey"
                                    aria-selected="false">Jaipur</button>
                                <button class="nav-link" id="nav-china-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-china" type="button" role="tab" aria-controls="nav-china"
                                    aria-selected="false">Manali</button>
                                <button class="nav-link" id="nav-darjeeling-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-darjeeling" type="button" role="tab"
                                    aria-controls="nav-darjeeling" aria-selected="false">Darjeeling</button>
                                <button class="nav-link" id="nav-italy-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-italy" type="button" role="tab" aria-controls="nav-italy"
                                    aria-selected="false">Goa</button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="nav-tabContent1">
                        <div class="tab-pane fade show active" id="nav-nepal" role="tabpanel"
                            aria-labelledby="nav-nepal-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small1.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Everest trek to Base Camp</a></h3>
                                            <p>Price starts at <span>₹105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small2.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Kathmundu tour</a></h3>
                                            <p>Price starts at <span>₹85.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small3.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
                                            <p>Price starts at <span>₹100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small4.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>₹75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{  asset('front-end/assets/img/destination/destination-small5.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Chitwan national park</a></h3>
                                            <p>Price starts at <span>₹105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small6.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Langtang region</a></h3>
                                            <p>Price starts at <span>₹105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-malaysia" role="tabpanel" aria-labelledby="nav-malaysia-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small2.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Kathmundu tour</a></h3>
                                            <p>Price starts at <span>₹85.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small3.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
                                            <p>Price starts at <span>₹100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html">
                                                <img src="{{ asset('front-end/assets/img/destination/destination-small4.png') }}" alt="img">
                                            </a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>₹75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small6.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Langtang region</a></h3>
                                            <p>Price starts at <span>₹105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-indonesia" role="tabpanel"
                            aria-labelledby="nav-indonesia-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small3.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
                                            <p>Price starts at <span>₹100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small4.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>₹75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small6.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Langtang region</a></h3>
                                            <p>Price starts at <span>₹105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-turkey" role="tabpanel" aria-labelledby="nav-turkey-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small2.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Kathmundu tour</a></h3>
                                            <p>Price starts at <span>₹85.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small3.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
                                            <p>Price starts at <span>₹100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small4.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>₹75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-china" role="tabpanel" aria-labelledby="nav-china-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small4.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>₹75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small6.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Langtang region</a></h3>
                                            <p>Price starts at <span>₹105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-darjeeling" role="tabpanel"
                            aria-labelledby="nav-darjeeling-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small4.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>₹75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-italy" role="tabpanel" aria-labelledby="nav-italy-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small4.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>₹75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="{{ asset('front-end/assets/img/destination/destination-small6.png') }}" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Langtang region</a></h3>
                                            <p>Price starts at <span>₹105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Destinations Area -->

    <!-- client feedback area -->
    <section id="client_feedback" class="slider_btn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client_feedback_heading text-center">
                        <h2>Here Are Some Feedback From Clients</h2>
                    </div>
                    <div class="client_feedback_slider owl-theme owl-carousel">
                        <div class="client_feedback-card">
                            <div class="client_feedback_top">
                                <div class="client_img">
                                    <img src="{{ asset('front-end/assets/img/home-seven/common/client-fe-1.png') }}" alt="img">
                                </div>
                                <div class="feedback_quote">
                                    <img src="{{ asset('assets/img/icon/feedback-quote.png') }}" alt="icon">
                                </div>
                            </div>
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip ali
                                qua nostrud ipsum. Esse et conseq dolor anim esse dolore. Voluptate consectetur denorus
                                consectetur ven
                                iam ad aliqua houston.</p>
                            <div class="client_feedback_bottom">
                                <div class="client_info">
                                    <h3>David connley</h3>
                                    <p>General Manager</p>
                                </div>
                                <div class="client_ratings text-end">
                                    <div class="all_rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Awesome service</p>
                                </div>
                            </div>
                        </div>
                        <div class="client_feedback-card">
                            <div class="client_feedback_top">
                                <div class="client_img">
                                    <img src="{{ asset('front-end/assets/img/home-seven/common/client-fe-2.png') }}" alt="img">
                                </div>
                                <div class="feedback_quote">
                                    <img src="{{ asset('front-end/assets/img/icon/feedback-quote.png') }}" alt="icon">
                                </div>
                            </div>
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip poli aliqua nostrud ipsum. Esse et
                                conseq dolor anim es
                                se dolore. Voluptate consectetur consectetur veniam ad aliqua koilom none.</p>
                            <div class="client_feedback_bottom">
                                <div class="client_info">
                                    <h3>Selina Madis</h3>
                                    <p>Operation Officer</p>
                                </div>
                                <div class="client_ratings text-end">
                                    <div class="all_rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Great delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="client_feedback-card">
                            <div class="client_feedback_top">
                                <div class="client_img">
                                    <img src="{{ asset('front-end/assets/img/home-seven/common/client-fe-3.png') }}" alt="img">
                                </div>
                                <div class="feedback_quote">
                                    <img src="{{ asset('front-end/assets/img/icon/feedback-quote.png') }}" alt="icon">
                                </div>
                            </div>
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip poli aliqua nostrud ipsum. Esse et
                                conseq dolor anim es
                                se dolore. Voluptate consectetur consectetur veniam ad aliqua koilom none.</p>
                            <div class="client_feedback_bottom">
                                <div class="client_info">
                                    <h3>Harry Gonzelo</h3>
                                    <p>General Manager</p>
                                </div>
                                <div class="client_ratings text-end">
                                    <div class="all_rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Very efficient</p>
                                </div>
                            </div>
                        </div>
                        <div class="client_feedback-card">
                            <div class="client_feedback_top">
                                <div class="client_img">
                                    <img src="{{ asset('front-end/assets/img/home-seven/common/client-fe-1.png') }}" alt="img">
                                </div>
                                <div class="feedback_quote">
                                    <img src="{{ asset('front-end/assets/img/icon/feedback-quote.png') }}" alt="icon">
                                </div>
                            </div>
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip ali
                                qua nostrud ipsum. Esse et conseq dolor anim esse dolore. Voluptate consectetur denorus
                                consectetur ven
                                iam ad aliqua houston.</p>
                            <div class="client_feedback_bottom">
                                <div class="client_info">
                                    <h3>David connley</h3>
                                    <p>General Manager</p>
                                </div>
                                <div class="client_ratings text-end">
                                    <div class="all_rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Awesome service</p>
                                </div>
                            </div>
                        </div>
                        <div class="client_feedback-card">
                            <div class="client_feedback_top">
                                <div class="client_img">
                                    <img src="{{ asset('front-end/assets/img/home-seven/common/client-fe-2.png') }}" alt="img">
                                </div>
                                <div class="feedback_quote">
                                    <img src="{{ asset('front-end/assets/img/icon/feedback-quote.png') }}" alt="icon">
                                </div>
                            </div>
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip jui aliqua nostrud ipsum. Esse et
                                conseq dolor anim esse dolore. Voluptate consectetur consectetur guir veniam
                                ad aliqua.</p>
                            <div class="client_feedback_bottom">
                                <div class="client_info">
                                    <h3>Selina Madis</h3>
                                    <p>Operation Officer</p>
                                </div>
                                <div class="client_ratings text-end">
                                    <div class="all_rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Great delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="client_feedback-card">
                            <div class="client_feedback_top">
                                <div class="client_img">
                                    <img src="{{ asset('front-end/assets/img/home-seven/common/client-fe-3.png') }}" alt="img">
                                </div>
                                <div class="feedback_quote">
                                    <img src="{{ asset('front-end/assets/img/icon/feedback-quote.png') }}" alt="icon">
                                </div>
                            </div>
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip poli aliqua nostrud ipsum. Esse et
                                conseq dolor anim es
                                se dolore. Voluptate consectetur consectetur veniam ad aliqua koilom none.</p>
                            <div class="client_feedback_bottom">
                                <div class="client_info">
                                    <h3>Harry Gonzelo</h3>
                                    <p>General Manager</p>
                                </div>
                                <div class="client_ratings text-end">
                                    <div class="all_rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Very efficient</p>
                                </div>
                            </div>
                        </div>
                        <div class="client_feedback-card">
                            <div class="client_feedback_top">
                                <div class="client_img">
                                    <img src="{{ asset('front-end/assets/img/home-seven/common/client-fe-1.png') }}" alt="img">
                                </div>
                                <div class="feedback_quote">
                                    <img src="{{ asset('front-end/assets/img/icon/feedback-quote.png') }}" alt="icon">
                                </div>
                            </div>
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip ali
                                qua nostrud ipsum. Esse et conseq dolor anim esse dolore. Voluptate consectetur denorus
                                consectetur ven
                                iam ad aliqua houston.</p>
                            <div class="client_feedback_bottom">
                                <div class="client_info">
                                    <h3>David connley</h3>
                                    <p>General Manager</p>
                                </div>
                                <div class="client_ratings text-end">
                                    <div class="all_rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Awesome service</p>
                                </div>
                            </div>
                        </div>
                        <div class="client_feedback-card">
                            <div class="client_feedback_top">
                                <div class="client_img">
                                    <img src="{{ asset('front-end/assets/img/home-seven/common/client-fe-2.png') }}" alt="img">
                                </div>
                                <div class="feedback_quote">
                                    <img src="{{ asset('front-end/assets/img/icon/feedback-quote.png') }}" alt="icon">
                                </div>
                            </div>
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip jui aliqua nostrud ipsum. Esse et
                                conseq dolor anim esse dolore. Voluptate consectetur consectetur guir veniam
                                ad aliqua.</p>
                            <div class="client_feedback_bottom">
                                <div class="client_info">
                                    <h3>Selina Madis</h3>
                                    <p>Operation Officer</p>
                                </div>
                                <div class="client_ratings text-end">
                                    <div class="all_rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Great delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="client_feedback-card">
                            <div class="client_feedback_top">
                                <div class="client_img">
                                    <img src="{{ asset('front-end/assets/img/home-seven/common/client-fe-3.png') }}" alt="img">
                                </div>
                                <div class="feedback_quote">
                                    <img src="{{ asset('front-end/assets/img/icon/feedback-quote.png') }}" alt="icon">
                                </div>
                            </div>
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip poli aliqua nostrud ipsum. Esse et
                                conseq dolor anim es
                                se dolore. Voluptate consectetur consectetur veniam ad aliqua koilom none.</p>
                            <div class="client_feedback_bottom">
                                <div class="client_info">
                                    <h3>Harry Gonzelo</h3>
                                    <p>General Manager</p>
                                </div>
                                <div class="client_ratings text-end">
                                    <div class="all_rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Very efficient</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Feedback Area -->

    <!-- Counter Area -->
    <section id="counter_seven_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="counter_seven_area_wrapper">
                        <div class="row justify-content-evenly">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="countre_seven_item">
                                    <h3><span class="counter">8</span>k</h3>
                                    <h5>Project Complete</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="countre_seven_item">
                                    <h3><span class="counter">750</span>+</h3>
                                    <h5>Happy Clients</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="countre_seven_item">
                                    <h3><span class="counter">29</span></h3>
                                    <h5>Total Countries</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="countre_seven_item">
                                    <h3><span class="counter">124</span></h3>
                                    <h5>Win Awards</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News And Blog Area -->
    <section id="top_details_area" class="section_padding_top">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="section_heading_left">
                        <h2>News and Blog</h2>
                        <p>Nostrud aliqua ipsum dolore velit labore nulla fugiat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="top_details_four_slider button_style_top_left owl-theme owl-carousel">
                        <div class="news_card_four_wrapper">
                            <div class="news_card_four_img">
                                <a href="news-details.html">
                                    <img src="{{ asset('front-end/assets/img/news/news-2.png') }}" alt="img">
                                </a>
                            </div>
                            <div class="news_card_four_heading">
                                <h3>
                                    <a href="news-details.html">
                                        Revolutionizing the travel industry, one partnership at a time
                                    </a>
                                </h3>
                                <ul>
                                    <li>24th January <i class="fas fa-circle"></i></li>
                                    <li>5min read</li>
                                </ul>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="news_card_four_wrapper">
                                <div class="news_card_four_img">
                                    <a href="news-details.html">
                                        <img src="{{ asset('front-end/assets/img/news/news-3.png') }}" alt="img">
                                    </a>
                                </div>
                                <div class="news_card_four_heading">
                                    <h3>
                                        <a href="news-details.html">
                                            It is a long established fact that a reader will be distracted.
                                        </a>
                                    </h3>
                                    <ul>
                                        <li>24th January <i class="fas fa-circle"></i></li>
                                        <li>5min read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="news_card_four_wrapper">
                                <div class="news_card_four_img">
                                    <a href="news-details.html">
                                        <img src="{{ asset('front-end/assets/img/news/news-1.png') }}" alt="img">
                                    </a>
                                </div>
                                <div class="news_card_four_heading">
                                    <h3>
                                        <a href="news-details.html">
                                            There are many variations of passages of sum available
                                        </a>
                                    </h3>
                                    <ul>
                                        <li>24th January <i class="fas fa-circle"></i></li>
                                        <li>5min read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="news_card_four_wrapper">
                                <div class="news_card_four_img">
                                    <a href="news-details.html">
                                        <img src="{{ asset('front-end/assets/img/news/news-3.png') }}" alt="img">
                                    </a>
                                </div>
                                <div class="news_card_four_heading">
                                    <h3>
                                        <a href="news-details.html">
                                            It is a long established fact that a reader will be distracted.
                                        </a>
                                    </h3>
                                    <ul>
                                        <li>24th January <i class="fas fa-circle"></i></li>
                                        <li>5min read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="news_card_four_wrapper">
                                <div class="news_card_four_img">
                                    <a href="news-details.html">
                                        <img src="{{ asset('front-end/assets/img/news/news-1.png') }}" alt="img">
                                    </a>
                                </div>
                                <div class="news_card_four_heading">
                                    <h3>
                                        <a href="news-details.html">
                                            There are many variations of passages of sum available
                                        </a>
                                    </h3>
                                    <ul>
                                        <li>24th January <i class="fas fa-circle"></i></li>
                                        <li>5min read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="news_card_four_wrapper">
                                <div class="news_card_four_img">
                                    <a href="news-details.html">
                                        <img src="{{ asset('front-end/assets/img/news/news-3.png') }}" alt="img">
                                    </a>
                                </div>
                                <div class="news_card_four_heading">
                                    <h3>
                                        <a href="news-details.html">
                                            It is a long established fact that a reader will be distracted.
                                        </a>
                                    </h3>
                                    <ul>
                                        <li>24th January <i class="fas fa-circle"></i></li>
                                        <li>5min read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="news_card_four_wrapper">
                                <div class="news_card_four_img">
                                    <a href="news-details.html">
                                        <img src="{{ asset('front-end/assets/img/news/news-1.png') }}" alt="img">
                                    </a>
                                </div>
                                <div class="news_card_four_heading">
                                    <h3>
                                        <a href="news-details.html">
                                            There are many variations of passages of sum available
                                        </a>
                                    </h3>
                                    <ul>
                                        <li>24th January <i class="fas fa-circle"></i></li>
                                        <li>5min read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="news_card_four_wrapper">
                                <div class="news_card_four_img">
                                    <a href="news-details.html">
                                        <img src="{{ asset('front-end/assets/img/news/news-3.png') }}" alt="img">
                                    </a>
                                </div>
                                <div class="news_card_four_heading">
                                    <h3>
                                        <a href="news-details.html">
                                            It is a long established fact that a reader will be distracted.
                                        </a>
                                    </h3>
                                    <ul>
                                        <li>24th January <i class="fas fa-circle"></i></li>
                                        <li>5min read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="common_card_four">
                            <div class="news_card_four_wrapper">
                                <div class="news_card_four_img">
                                    <a href="news-details.html">
                                        <img src="{{ asset('front-end/assets/img/news/news-1.png') }}" alt="img">
                                    </a>
                                </div>
                                <div class="news_card_four_heading">
                                    <h3>
                                        <a href="news-details.html">
                                            There are many variations of passages of sum available
                                        </a>
                                    </h3>
                                    <ul>
                                        <li>24th January <i class="fas fa-circle"></i></li>
                                        <li>5min read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News And Blog Area End -->

    <!-- Our partners Area -->
    <section id="our_partners" class="section_padding">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Our partners</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="partner_slider_area owl-theme owl-carousel">
                        <div class="partner_logo">
                            <a href="#!"><img src="{{ asset('front-end/assets/img/partner/1.png') }}" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="{{ asset('front-end/assets/img/partner/2.png') }}" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="{{ asset('front-end/assets/img/partner/3.png') }}" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="{{ asset('front-end/assets/img/partner/4.png') }}" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="{{ asset('front-end/assets/img/partner/5.png') }}" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="{{ asset('front-end/assets/img/partner/6.png') }}" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="{{ asset('front-end/assets/img/partner/7.png') }}" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="{{ asset('front-end/assets/img/partner/8.png') }}" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="{{ asset('front-end/assets/img/partner/5.png') }}" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="{{ asset('front-end/assets/img/partner/3.png') }}" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="{{ asset('front-end/assets/img/partner/2.png') }}" alt="logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Partner Area End -->

    <!-- Subscribe Area -->
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
                            <div class="input-group"><input type="text" class="form-control"
                                    placeholder="Enter your mail address"><button class="btn btn_theme btn_md"
                                    type="button">Subscribe</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Area End -->



    <!-- Footer start  -->
     @include('include.footer')
    <!-- Footer End  -->


    <!-- Script Links  -->
    @include('include.script')
    <!-- Script Links -->



</body>


</html>
