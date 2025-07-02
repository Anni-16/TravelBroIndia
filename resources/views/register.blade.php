<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Register -TravelBro - India Best Hotel Service Provider </title>

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
                            style="width: 100%; height: 75vh; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6  ">
                    <div class="common_author_boxed">
                        <div class="common_author_heading">
                            <h3 style="color: #1d6597;">Register account</h3>
                            <h2>Register your account</h2>
                        </div>
                        <div class="common_author_form">
                            <form action="{{ route('register') }}" method="post" enctype="multipart/form-data"
                                id="main_author_form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="firstname" value="{{ old('firstname') }}"
                                        class="@error('firstname') is-invalid @enderror form-control"
                                        placeholder="Enter first name*" />
                                    @error('firstname')
                                    <p class="invalid-feedback text-red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lastname" class="form-control"
                                        placeholder="Enter last name*" value="{{ old('lastname') }}" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="@error('email') is-invalid
                                    @enderror form-control" placeholder="your email id " value="{{ old('email') }}" />
                                    @error('email')
                                    <p class="invalid-feedback text-red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="@error('phone') is-invalid
                                    @enderror form-control" placeholder="Mobile number*" value="{{ old('phone') }}" />
                                    @error('phone')
                                    <p class="invalid-feedback text-red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="@error('password') is-invalid
                                    @enderror form-control" placeholder="Password" />
                                    @error('password')
                                    <p class="invalid-feedback text-red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="" style="display: flex; justify-content: space-between;">
                                    <div class="form-group">
                                        <input type="radio" class="@error('role') is-invalid
                                        @enderror" name="role" id="vendor" value="Vendor" />
                                        <label for="vendor">Register as Vendor</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" class="@error('role') is-invalid
                                        @enderror" name="role" id="user" placeholder="Password" value="Customer" />
                                        <label for="user">Register as User</label>
                                    </div>
                                    @error('role')
                                    <p class="invalid-feedback text-red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="common_form_submit">
                                    <button type="submit" class="btn btn_theme btn_md">Submit</button>
                                </div>
                                <div class="have_acount_area other_author_option">

                                    <p>Already have an account? <a href="{{ route('login') }}">Log in now</a></p>
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

    <!-- Script Links  -->
    @include('include.script')
    <!-- Script Links  -->
</body>


</html>