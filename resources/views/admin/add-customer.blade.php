<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Bro India | Dashboard - Add Customers</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('front-end/assets/img/Travel-bro1.png') }}">


    <!--Css Attached-->
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/bootstrap3-wysihtml5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/jquery-jvectormap-1.2.2.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/m=el_main_css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/_all-skins.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/dataTables.bootstrap.css') }}">

    <!--font-awesome-cdn-->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css') }}" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Css Attached-->
</head>

<body class="skin-blue sidebar-mini" style="position: relative; min-height: 100%; top: 0px;" data-new-gr-c-s-check-loaded="14.1223.0" data-gr-ext-installed="">
    <div class="wrapper">
        <!---============ START HEADER ============-->

        <!--start-top-header-->
        @include('admin.layout.nav-top');
        <!--end-top-header-->

        <!--start vertical slider-->
        @include('admin.layout.side-nav');
        <!--end vertical slider-->

        <!---============ END HEADER ============-->


        <div class="content-wrapper" style="min-height: 759px;">
            <section class="content-header">
                <h1>Add Customer</h1>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <form class="svform" action="{{ route('admin.add-customer') }}" id="add_customer" method="post" enctype="multipart/form-data" name="add-customer" accept-charset="UTF-8" novalidate="novalidate">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">First
                                            Name <span class="text-danger"> *</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="@error('firstname') is-invalid @enderror form-control" name="firstname" id="first_name" value="{{ old('firstname') }}" placeholder="First Name">
                                            @error('firstname')
                                            <p class="invalid-feedback text-white">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">Last Name
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" id="last_name" placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="col-sm-3 control-label">Image <span class="text-danger"> *</span> </label>

                                        <div class="col-sm-6">
                                            <input type="file" name="image" class="form-control" id="photo" placeholder="Choose Image">

                                            <span class="text-danger"></span>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">Email <span class="text-danger"> *</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="@error('email') is-invalid @enderror form-control error" name="email" id="email" value="{{ old('email') }}" placeholder="exaple@gmail.com">
                                            <div id="emailError"></div>
                                            @error('email')
                                            <p class="invalid-feedback text-white">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">Phone <span class="text-danger"> *</span></label>
                                        <div class="col-sm-8">
                                            <div class="intl-tel-input allow-dropdown separate-dial-code iti-sdc-2">
                                                <div class="flag-container">
                                                    <div class="selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="United States: +1">
                                                        <img src="{{ asset('masster-admin-design/images/flag.png') }}" alt="" width="20px" style="padding: 0; display: flex; padding-top: 5px;">
                                                        <div class="selected-dial-code" style="padding-left: 0;">
                                                            <span> +91</span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <input type="tel" class="@error('phone') is-invalid @enderror form-control" id="phone" name="phone" autocomplete="off" value="{{ old('phone') }}" placeholder="882245-8954">
                                            </div>
                                            @error('phone')
                                            <p class="invalid-feedback text-white">{{ $message }}</p>
                                            @enderror
                                            <span id="phone-error" class="text-danger text-13"></span>
                                            <span id="tel-error" class="text-danger text-13"></span>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">Password <span class="text-danger"> *</span></label>
                                        <div class="col-sm-8">
                                            <input type="password" class="@error('password') is-invalid @enderror form-control" name="password" id="password" placeholder="password">
                                            @error('password')
                                            <p class="invalid-feedback text-white">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">Role <span class="text-danger"> *</span></label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="role" id="role">
                                                <option value="select Role">Select Role</option>
                                                <option value="Vendor">Vendor</option>
                                                <option value="Customer">Customer</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">Status</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="status" id="status">
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary" name="submit" id="submitBtn">Submit</button>
                                    <a href="{{ route('admin.manage-user') }}" class="btn btn-default">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Start Footer Section -->
        @include('admin.layout.footer');
        <!-- End Footer Section -->
    </div>


    <!--Script added-->
    <script src="{{ asset('masster-admin-design/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/app.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/admin.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/backend.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/bootbox.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/custom.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/demo.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/moment.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/select-2.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->


</body>

</html>