<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
    <meta name="format-detection" content="telephone=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- PAGE TITLE HERE -->
    <title>TravelBro - India | Vendor Dashboard - Add Hotel Listing</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('VendorDashboard/images/favicon.png') }}" />

    <!-- Custom Stylesheet -->
    <link href="{{ asset('VendorDashboard/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('VendorDashboard/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('VendorDashboard/css/mystyle.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css">


</head>

<body>
    {{-- {{ dd(session()->all()) }} --}}
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
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href=" {{ route('vendorDashboard.vendorDashboard') }}">Home</a></li>
                        <li class="breadcrumb"><a href="">/ Add Your Hotel</a></li>
                    </ol>
                </div>

                <!-- row -->
                <div class="row">
                  <div class="col-xl-12 col-xxl-12">
                     <div class="card">
                        <div class="card-header">
                           <h4 class="card-title">Add Property</h4>
                        </div>
                       
                        <div >
                           <ul class="nav nav-wizard">
                              <li class="step active">
                                 <a class="nav-link" href="my-hotel-basics.html">
                                    <span class="circle">1</span>
                                    <h4>Basics</h4>
                                 </a>
                              </li>
                              <li class="step active">
                                 <a class="nav-link" href="my-hotel-description.html">
                                    <span class="circle">2</span>
                                    <h4>Description</h4>
                                 </a>
                              </li>
                              <li class="step active">
                                 <a class="nav-link"  href="my-hotel-details.html">
                                    <span class="circle">3</span>
                                    <h4>Details</h4>
                                 </a>
                              </li>
                              <li class="step active">
                                 <a class="nav-link " href="my-hotel-location.html"  >
                                    <span class="circle">4</span>
                                    <h4>Location</h4>
                                 </a>
                              </li>
                              <li class="step active">
                                 <a class="nav-link" href="#">
                                    <span class="circle">5</span>
                                    <h4>Amenities</h4>
                                 </a>
                              </li>
                              <li class="step">
                                 <a class="nav-link"  style="cursor: not-allowed;">
                                    <span class="circle">6</span>
                                    <h4>Photos</h4>
                                 </a>
                              </li>
                              <li class="step">
                                 <a class="nav-link"  style="cursor: not-allowed;">
                                    <span class="circle">7</span>
                                    <h4>Pricing</h4>
                                 </a>
                              </li>
                              <li class="step">
                                 <a class="nav-link"  style="cursor: not-allowed;">
                                    <span class="circle">8</span>
                                    <h4>Booking</h4>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <img src="./images/gallery/hotel1.jpg" alt="" style="width: 100%;">
                                    </div>
                                    <div class="col-lg-7"> 
                                         
                                    <form action="" id="five-form">
                                        <h3 class="mb-4">Amenities</h3>
                                      <div class="row">
                                         <div class="row">
                                                        <h3 class="mb-4">Common Amenities *</h3>

                                                        <div class="col-lg-3">
                                                            <div class="form-check custom-checkbox mb-3">
                                                                <input name="common_amentities[]" type="checkbox" class="form-check-input" value="essentials" id="customCheckBox1">
                                                                <label class="form-check-label" for="customCheckBox1">Essentials</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" name="common_amentities[]" class="form-check-input" value="tv" id="customCheckBox2">
                                                                <label class="form-check-label" for="customCheckBox2">TV</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox3" name="common_amentities[]" value="cable_tv">
                                                                <label class="form-check-label" for="customCheckBox3">Cable TV</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox4" name="common_amentities[]" value="ac">
                                                                <label class="form-check-label" for="customCheckBox4">Air Conditioning</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check custom-checkbox mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox5" name="common_amentities[]" value="heating">
                                                                <label class="form-check-label" for="customCheckBox5">Heating</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox6" name="common_amentities[]" value="kitchen">
                                                                <label class="form-check-label" for="customCheckBox6">Kitchen</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox7" name="common_amentities[]" value="internet">
                                                                <label class="form-check-label" for="customCheckBox7">Internet</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox8" name="common_amentities[]" value="gym">
                                                                <label class="form-check-label" for="customCheckBox8">Gym</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check custom-checkbox mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox9" name="common_amentities[]" value="elevator">
                                                                <label class="form-check-label" for="customCheckBox9">Elevator in Building</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox10" name="common_amentities[]" value="fireplace">
                                                                <label class="form-check-label" for="customCheckBox10">Indoor Fireplace</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox11" name="common_amentities[]" value="intercom">
                                                                <label class="form-check-label" for="customCheckBox11">Buzzer/Wireless
                                                                    Intercom</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox12" name="common_amentities[]" value="doorman">
                                                                <label class="form-check-label" for="customCheckBox12">Doorman</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check custom-checkbox mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox13" name="common_amentities[]" value="wireless_internet">
                                                                <label class="form-check-label" for="customCheckBox13">Wireless Internet</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox14" name="common_amentities[]" value="hot_tub">
                                                                <label class="form-check-label" for="customCheckBox14">Hot Tub</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox15" name="common_amentities[]" value="pool">
                                                                <label class="form-check-label" for="customCheckBox15">Pool</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox16" name="common_amentities[]" value="free_parking">
                                                                <label class="form-check-label" for="customCheckBox16">Free Parking on
                                                                    Premises</label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row mt-4">
                                                        <h3 class="mb-4">Safety Amenities</h3>

                                                        <div class="col-lg-3">
                                                            <div class="form-check custom-checkbox mb-3">
                                                                <input type="checkbox" class="form-check-input" id="safetyamenities1" name="safety_amenities[]" value="smoke_detector">
                                                                <label class="form-check-label" for="safetyamenities1">Smoke Detector</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="safetyamenities2" name="safety_amenities[]" value="carbon_monoxide_detector">
                                                                <label class="form-check-label" for="safetyamenities2">Carbon Monoxide
                                                                    Detector</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="safetyamenities3" name="safety_amenities[]" value="first_aid_kit">
                                                                <label class="form-check-label" for="safetyamenities3">First Aid Kit</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input" id="safetyamenities4" name="safety_amenities[]" value="safety_card">
                                                                <label class="form-check-label" for="safetyamenities4">Safety Card</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check custom-checkbox mb-3">
                                                                <input type="checkbox" class="form-check-input" id="safetyamenities5" name="safety_amenities[]" value="fire_extinguisher">
                                                                <label class="form-check-label" for="safetyamenities5">Fire Extinguisher</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                      </div>
                                            <!-- Submit Button -->
                                            <div class="col-lg-12" style="margin-top: 30px;">
                                                <div class="form-btn">
                                                    <input type="submit" class="btn btn-primary" id="back" value="Back">
                                                    &nbsp;&nbsp;&nbsp;
                                                        <input type="submit" class="btn btn-primary" value="Next">
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
    <script src="{{ asset('VendorDashboard/vendor/global/global.min.js')}}"></script>
    <!-- Form validate init -->
    <script src="{{ asset('VendorDashboard/js/plugins-init/jquery.validate-init.js')}}"></script>
    <!-- Form Steps -->
    <script src="{{ asset('VendorDashboard/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('VendorDashboard/js/custom.min.js')}}"></script>
    <script src="{{ asset('VendorDashboard/js/dlabnav-init.js')}}"></script>
    <script src="{{ asset('VendorDashboard/js/demo.js')}}"></script>
    <script src="{{ asset('VendorDashboard/js/myjs.js')}}"></script>
    <script src="{{ asset('VendorDashboard/js/hotel-form.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize select2 for all select elements with the class 'default-select'
            $(".default-select").select2();
        });
    </script>


   
<script>
document.getElementById('five-form').addEventListener('submit', function(e) {
    e.preventDefault();

    let isValid = true;
 

    if (isValid) {
        window.location.href = "{{ route('hotel-photos') }}";
    }
});

// Back redirect
document.getElementById('back').addEventListener('click', function() {
    window.location.href = "my-hotel-location.html";
});
</script>



</body>



</html>