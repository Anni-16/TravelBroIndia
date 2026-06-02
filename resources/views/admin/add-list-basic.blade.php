<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Travel Bro India | Dashboard - Add Listing Basic Details </title>

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
                                    <li class="active"><a href="{{ route('admin.add-list-basic') }}">Basics</a></li>
                                    <li><a style="cursor:not-allowed;">Description</a></li>
                                    <li><a style="cursor:not-allowed;">Location</a></li>
                                    <li><a style="cursor:not-allowed;">Amenities</a></li>
                                    <li><a style="cursor:not-allowed;">Photos</a></li>
                                    <li><a style="cursor:not-allowed;">Pricing</a></li>
                                    <li><a style="cursor:not-allowed;">Policies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form method="post" action="{{ route('admin.add-list-description') }}" class="signup-form login-form" id="sec-form">
                            @csrf
                            <div class="box box-info">
                                <div class="box-body mt-0">
                                    <div class="row" style="padding-bottom: 20px;">
                                        <div class="col-md-12">
                                            <h4>Basics</h4>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group">
                                            <label for="user_name" class="control-label col-sm-3">User <span class="text-danger">*</span></label>
                                            <div class="col-sm-6" id="respo">
                                                <select id="user_name" name="user_id" class="@error('user_id') is-invalid @enderror form-control">
                                                    <option value="">-- Select user --</option>

                                                    @forelse($users as $user)
                                                    @php
                                                    $fullName = trim(($user->firstname ?? '') . ' ' . ($user->lastname ?? ''));
                                                    $selected = (string) old('user_id', isset($listing) ? $listing->user_id : null) === (string) $user->user_id ? 'selected' : '';
                                                    @endphp
                                                    <option value="{{ $user->user_id }}" {{ $selected }}>
                                                        {{ $fullName }} ({{ $user->email }})
                                                    </option>
                                                    @empty
                                                    <option value="">No users found</option>
                                                    @endforelse
                                                </select>
                                                @error('user_id')
                                                <p class="invalid-feedback text-red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <a href="{{ route('admin.manage-user') }}" class=" btn btn-primary btn-sm customer-modal"><span class="fa fa-user"></span></a>
                                        </div>

                                        <!-- Hotel Name -->
                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">Hotel/Brand Name <span class="text-danger">*</span></label>
                                            <input type="text" name="hotel_name" class="@error('hotel_name') is-invalid 
                                            @enderror form-control" value="{{ old('hotel_name') }}" id="hotel_name" />
                                            @error('hotel_name')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Star Rating -->
                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <div style="display: flex; flex-direction: column;">
                                                <label class="label-large">Star Ratings <span class="text-danger">*</span></label>
                                                <div class="rating">
                                                    <input type="radio" id="star5" name="hotel_rating" value="5" />
                                                    <label class="star" for="star5" title="Awesome"></label>

                                                    <input type="radio" id="star4" name="hotel_rating" value="4" />
                                                    <label class="star" for="star4" title="Great"></label>

                                                    <input type="radio" id="star3" name="hotel_rating" value="3" />
                                                    <label class="star" for="star3" title="Very good"></label>

                                                    <input type="radio" id="star2" name="hotel_rating" value="2" />
                                                    <label class="star" for="star2" title="Good"></label>

                                                    <input type="radio" id="star1" name="hotel_rating" value="1" />
                                                    <label class="star" for="star1" title="Bad"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Owner/Manager Name -->
                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">Owner/Manager Name <span class="text-danger">*</span></label>
                                            <input type="text" name="hotel_owner_name" class="@error('hotel_owner_name') is-invalid 
                                            @enderror form-control" id="hotel_owner_name" value="{{ old('hotel_owner_name') }}" />
                                            @error('hotel_owner_name')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Designation -->
                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">Designation <span class="text-danger">*</span></label>
                                            <input type="text" name="hotel_designation" class="@error('hotel_designation') is-invalid
                                            @enderror form-control" id="hotel_designation" value="{{ old('hotel_designation') }}" />
                                            @error('hotel_designation')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Primary Contact -->
                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">Primary Contact No. <span class="text-danger">*</span></label>
                                            <input type="number" name="hotel_primary_no" class="@error('hotel_primary_no') is-invalid
                                            @enderror form-control" id="hotel_primary_no" value="{{ old('hotel_primary_no') }}" />
                                            @error('hotel_primary_no')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Alternate Contact -->
                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">Alternate Contact No.</label>
                                            <input type="number" name="hotel_alternate_no" class="form-control" id="hotel_alternate_no" value="{{ old('hotel_alternate_no') }}" />
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">Email Id <span class="text-danger">*</span></label>
                                            <input type="email" name="hotel_email" class="@error('hotel_email') is-invalid
                                            @enderror form-control" id="hotel_email" value="{{ old('hotel_email') }}" />
                                            @error('hotel_email')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- GST -->
                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">GST No.</label>
                                            <input type="text" name="hotel_gst_no" class="@error('hotel_gst_no') is-invalid
                                            @enderror form-control" id="hotel_gst_no"  value="{{ old('hotel_gst_no') }}"/>
                                            @error('hotel_gst_no')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Buttons -->
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
        document.getElementById('sec-form').addEventListener('submit', function(e) {
            e.preventDefault(); 
            let isValid = true;
            if (isValid) {
                this.submit(); 
            }
        });

        // Back button redirect
        document.getElementById('back').addEventListener('click', function() {
            window.location.href = "{{ route('admin.manage-listing') }}";
        });
    </script>


</body>

</html>