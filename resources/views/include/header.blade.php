<header class="main_header_arae">
        <!-- Top Bar -->
        <div class="topbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-list">
                            <li>
                                <a href="#!"><i class="fab fa-facebook"></i></a>
                                <a href="#!"><i class="fab fa-twitter-square"></i></a>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                <a href="#!"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li><a href="#!"><span>+011 234 567 89</span></a></li>
                            <li><a href="#!"><span>contact@domain.com</span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-others-options">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Sign up</a></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar Bar -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                          
                            <a class="navbar-brand" href="{{ url('/') }}" id="logo-four">
                            <img src="{{ asset('front-end/assets/img/Travel-bro3.png') }}" alt="travelbro" style="width:60px;">
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}" id="logo-first">
                            <img src="{{ asset('front-end/assets/img/Travel-bro1.png') }}" alt="travelbro" style="width:100px;">
                        </a>
                        <a class="navbar-brand" href="{{ url('/') }}" id="logo-second">
                            <img src="{{ asset('front-end/assets/img/Travel-bro3.png') }}" alt="travelbro" style="width:100px;">
                        </a>

                        <script>
                            window.addEventListener('scroll', function () {
                                const firstLogo = document.getElementById('logo-first');
                                const secondLogo = document.getElementById('logo-second');

                                if (window.scrollY > 50) { // Adjust this threshold value as needed
                                    firstLogo.style.display = 'none';
                                    secondLogo.style.display = 'block';
                                } else {
                                    firstLogo.style.display = 'block';
                                    secondLogo.style.display = 'none';
                                }
                            });

                        </script>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link active">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about-us') }}" class="nav-link">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="hotel-list.html" class="nav-link">
                                        Hotels
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">Blog </a>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link" id="mobile-hide-show">Login </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link" id="mobile-hide-show">Signup </a>
                                </li>
                            </ul>
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="#" class="search-box">
                                        <i class="bi bi-search"></i>
                                    </a>
                                </div>
                                <div class="option-item">
                                    <a href="{{ route('login') }}" class="btn  btn_navber">Become a partner</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="#" class="search-box">
                                        <i class="bi bi-search"></i>
                                    </a>
                                </div>
                                <div class="option-item">
                                    <a href="{{ route('login') }}" class="btn  btn_navber">Become a partner</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



        <!-- search -->
        <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>