<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Login - TravelBro - India Best Hotel Service Provider </title>

    <!-- Css Links  -->
    @include('include.csslinks')
    <!-- Css Links  -->
</head>

<body>
    <!-- Header Area -->
    @include('include.header')
    <!-- Header Area -->

     <!-- Common Banner Area -->
     <section id="common_banner1"></section>

    <!--  Common Author Area -->
    <section id="common_author_area" class="section_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6  ">
                    <div class="common_author_boxed" style="background-color: #fff; padding:0;">
                        <img src="{{ asset('front-end/assets/img/my-images/hotel-4.jpg') }}" alt=""
                            style="width: 100%; height: 520px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="common_author_boxed">
                        <div class="common_author_heading">
                            <h3 style="color: #1d6597;">Login your account</h3>
                            <h2>Logged in to stay in touch</h2>
                        </div>
                        @if(session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session()->has('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="common_author_form">
                            <form action="{{ route('login') }}" id="main_author_form" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Enter Your Email" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Enter password" />
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="" style="display: flex; justify-content: space-between;">
                                    <div class="form-group">
                                        <input type="radio" name="role" id="vendor" value="Vendor"  required />
                                        <label for="vendor">Login as Vendor</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="role" id="user" value="Customer" required />
                                        <label for="user">Login as User</label>
                                    </div>
                                </div>
                        </div>
                        <div class="common_form_submit">
                            <button type="submit" class="btn btn_theme btn_md">Log in</button>
                        </div>
                        <div class="have_acount_area">
                            <p>Dont have an account? <a href="{{ route('register') }}">Register now</a></p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer  -->
    @include('include.footer')
    <!-- Footer  -->


    <!-- Script Links -->
    @include('include.script')
    <!-- Script Links -->
</body>

</html>