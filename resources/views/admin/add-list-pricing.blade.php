<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Travel Bro India | Dashboard - Add Listing Pricing Details </title>

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
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/glyphicon.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/intlTelInput.css') }}">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Star Form Input Field */

        .rating {
            border: none;
            float: left;
            width: 200px;
        }

        .rating>label {
            color: #90a0a3;
            float: right;
        }

        .rating>label:before {
            margin: 5px;
            font-size: 2em;
            font-family: FontAwesome;
            content: "\f005";
            display: inline-block;
        }

        .rating>input {
            display: none;
        }

        .rating>input:checked~label,
        .rating:not(:checked)>label:hover,
        .rating:not(:checked)>label:hover~label {
            color: #f79426;
        }

        .rating>input:checked+label:hover,
        .rating>input:checked~label:hover,
        .rating>label:hover~input:checked~label,
        .rating>input:checked~label:hover~label {
            color: #fece31;
        }
    </style>
</head>

<body class="skin-blue sidebar-mini" data-new-gr-c-s-check-loaded="14.1223.0" data-gr-ext-installed="" style="position: relative; min-height: 100%; top: 0px;">
    <div class="wrapper">
        <!---============ START HEADER ============-->

        <!--start-top-header-->
        @include('admin.layout.nav-top');
        <!--end-top-header-->

        <!--start vertical slider-->
        @include('admin.layout.side-nav');
        <!--end vertical slider-->

        <!---============ END HEADER ============-->
        <div class="content-wrapper sv_content_wrapper" style="min-height: 783px;">
            <!-- Main content -->
            <section class="content-header">
                <h1>List Your Space</h1>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box box-info box_info">
                            <div class="panel-body">
                                <h4 class="all_settings">Property Settings</h4>
                                <ul class="nav navbar-pills nav-tabs nav-stacked no-margin" role="tablist">
                                    <li><a style="cursor:not-allowed;">Basics</a></li>
                                    <li><a style="cursor:not-allowed;">Description</a></li>
                                    <li><a style="cursor:not-allowed;">Location</a></li>
                                    <li><a style="cursor:not-allowed;">Amenities</a></li>
                                    <li><a style="cursor:not-allowed;">Photos</a></li>
                                    <li class="active"><a href="{{ route('admin.add-list-pricing') }}"> Pricing</a></li>
                                    <li><a style="cursor:not-allowed;">Policies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @if(session()->has('success'))
                        <div class="col-md-10">
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        </div>
                        @endif
                        <form method="post" action="{{ route('admin.add-list-policies') }}" class="signup-form login-form" id="seven-form">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $userId }}">
                            <input type="hidden" name="hotel_id" value="{{ $hotelId }}">

                            <div class="box box-info">
                                <div class="box-body mt-0">
                                    <div class="row" style="padding-bottom: 20px;">
                                        <div class="col-md-12">
                                            <h4>Pricing</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">Per Day Price(₹) <span class="text-danger">*</span></label>
                                            <input name="price" id="price" type="text" class="@error('price') is-invalid 
                                            @enderror form-control" value="{{ old('price') }}" />
                                            @error('price')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large"> Currency <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="currency" value="INR (₹)" readonly />
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">Extra Guest Charge (if applicable) <span class="text-danger">*</span></label>
                                            <input type="number" name="extra_guests" id="extra_guests" class="@error('extra_guests') is-invalid 
                                            @enderror form-control"  value="{{ old('extra_guests') }}" />
                                            @error('extra_guests')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">Peak Season / Festive Rates <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="festive_rates"  value="{{ old('festive_rates') }}" />
                                            @error('festive_rates')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large"> Corporate / Group Discount Offers <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="group_discount" value="{{ old('group_discount') }}" />
                                            @error('group_discount')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="form-btn text-right">
                                                <input type="button" class="btn btn-secondary" id="back" value="Back" /> &nbsp;&nbsp;
                                                <input type="submit" class="btn btn-primary" value="Next" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        @include('admin.layout.footer')

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
    <script src="{{ asset('masster-admin-design/js/element.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery.knob.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/moment.min.js') }}"></script>

    <script>
        // Back redirect
        document.getElementById('back').addEventListener('click', function() {
            window.location.href = "{{ route('admin.add-list-photos') }}";
        });
    </script>


</body>

</html>