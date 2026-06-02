<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />

    <!-- PAGE TITLE HERE -->
    <title>TravelBro - India | Vendor Dashboard - Edit Vendor Profile</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('VendorDashboard/images/favicon.png') }}" />
    <link href="{{ asset('VendorDashboard/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('VendorDashboard/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('VendorDashboard/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('VendorDashBoard/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('VendorDashBoard/css/mystyle.css') }}" rel="stylesheet">

</head>

<body>

    <!--**********************************
			Main wrapper start
		***********************************-->
    <div id="main-wrapper">


        <!--**********************************
				Header start
			***********************************-->
        @include('vendorDashboard.layout.header')
        <!--**********************************
                    Header end ti-comment-alt
                ***********************************-->

        <!--**********************************
                    Sidebar start
                ***********************************-->
        @include('vendorDashboard.layout.side-nav')
        <!--**********************************
                    Sidebar end
                ***********************************-->

        <!--**********************************
				Content body start
			***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="nav flex-column nav-pills mb-3">
                                        <a href="#v-pills-home" data-bs-toggle="pill" class="nav-link active show">Edit
                                            Profile</a>
                                        <a href="#v-pills-profile" data-bs-toggle="pill" class="nav-link">Profile
                                            Photos</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content">
                                           <div id="v-pills-home" class="tab-pane fade active show">
    <div class="pt-3">
        <div class="settings-form">
            <form method="POST" action="{{ route('vendorDashboard.update-profile') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" value="{{ $user['first_name'] ?? '' }}" class="form-control">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" value="{{ $user['last_name'] ?? '' }}" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Phone No.</label>
                        <div class="input-group">
                            <button class="btn btn-primary" type="button">+91</button>
                            <input type="text" name="phone" value="{{ $user['phone'] ?? '' }}" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Email</label>
                        <div class="input-group">
                            <input type="email" name="email" value="{{ $user['email'] ?? '' }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label class="form-label">Enter New Password</label>
                        <div class="input-group">
                            <input type="text" name="password" placeholder="Enter New Password" class="form-control">
                        </div>
                        <small><b>Note :-</b> Enter new password only. Leave blank to use existing password.</small>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>

<div id="v-pills-profile" class="tab-pane fade">
    <div class="card">
        <div class="card-body">
            <div class="basic-form custom_file_input">
                <form action="{{ route('vendorDashboard.update-profile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">Upload Profile Photo</h4>
                    </div>
                    <div class="input-group">
                        <div class="form-file">
                            <input type="file" name="image" class="form-file-input form-control">
                        </div>
                    </div>
                    <div class="card-header">
                        <h4 class="card-title">Upload Your Valid Gov. ID Proof</h4>
                    </div>
                    <div class="input-group">
                        <div class="form-file">
                            <input type="file" name="file" class="form-file-input form-control">
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit">Save</button>
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
            </div>
            <!--**********************************
				Content body end
			***********************************-->



            <!--**********************************
				Footer start
			***********************************-->
            @include('vendorDashboard.layout.footer')
            <!--**********************************
				Footer end
			***********************************-->

        </div>
        <!--**********************************
			Main wrapper end
		***********************************-->

        <!--**********************************
			Scripts
		***********************************-->
        <!-- Required vendors -->
        <script src="{{ asset('VendorDashboard/vendor/global/global.min.js') }}"></script>

        <script src="{{ asset('VendorDashboard/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>


        <!-- Dashboard 1 -->
        <script src="{{ asset('VendorDashboard/js/dashboard/dashboard-1.js') }}"></script>

        <script src="{{ asset('VendorDashboard/vendor/owl-carousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('VendorDashboard/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
        <script src="{{ asset('VendorDashboard/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

        <script src="{{ asset('VendorDashboard/js/custom.min.js') }}"></script>
        <script src="{{ asset('VendorDashboard/js/dlabnav-init.js') }}"></script>

        <!--theme change this script -->
        <script src="{{ asset('VendorDashboard/js/demo.js') }}"></script>

        <script>
            function TravlCarousel() {

                /*  testimonial one function by = owl.carousel.js */
                jQuery('.front-view-slider').owlCarousel({
                    loop: false,
                    margin: 15,
                    nav: true,
                    autoplaySpeed: 3000,
                    navSpeed: 3000,
                    paginationSpeed: 3000,
                    slideSpeed: 3000,
                    smartSpeed: 3000,
                    autoplay: false,
                    animateOut: 'fadeOut',
                    dots: true,
                    navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                    responsive: {
                        0: {
                            items: 1
                        },

                        768: {
                            items: 2
                        },

                        1400: {
                            items: 2
                        },
                        1600: {
                            items: 3
                        },
                        1750: {
                            items: 3
                        }
                    }
                })
            }

            jQuery(window).on('load', function() {
                setTimeout(function() {
                    TravlCarousel();
                }, 1000);
            });
        </script>
        <script>
            $(function() {
                $('#datetimepicker').datetimepicker({
                    inline: true,
                });
            });

            $(document).ready(function() {
                $(".booking-calender .fa.fa-clock-o").removeClass(this);
                $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
            });
        </script>

</body>

</html>