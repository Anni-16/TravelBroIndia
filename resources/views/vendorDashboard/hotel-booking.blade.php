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
                                 <a class="nav-link " href="my-hotel-amenities.html">
                                    <span class="circle">5</span>
                                    <h4>Amenities</h4>
                                 </a>
                              </li>
                              <li class="step active">
                                 <a class="nav-link"  href="my-hotel-photo.html">
                                    <span class="circle">6</span>
                                    <h4>Photos</h4>
                                 </a>
                              </li>
                              <li class="step active">
                                 <a class="nav-link"  href="my-hotel-pricing.html">
                                    <span class="circle">7</span>
                                    <h4>Pricing</h4>
                                 </a>
                              </li>
                              <li class="step">
                                 <a class="nav-link"  href="#">
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
                                         
                                    <form action="" id="seven-form"> 
                                      
                                          <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4 class="card-title">Booking</h4>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <h4>Choose how your guests book *</h4>
                                                                            <h6>Get ready for guests by choosing your
                                                                                booking style.</h6>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 mt-4">
                                                                                    <label class="form-label">Booking
                                                                                        Per Day/Hour</label>
                                                                                    <select name='per_hour' id="per_hour" class="default-select  form-control wide">
                                                                                        <option value=''>Select  
                                                                                        </option>
                                                                                        <option value='1'>Per Day
                                                                                        </option>
                                                                                        <option value='2'>Per Hour
                                                                                        </option>
                                                                                    </select>
                                                                                    <div class="validation-message" id="per_hour_error"></div>
                                                                                </div>
                                                                                <div class="col-lg-12 mt-4">
                                                                                    <label class="form-label">Booking
                                                                                        Type</label>
                                                                                    <select name="bookingType" id="bookingType" class="default-select  form-control wide">
                                                                                           <option value=''>Select  
                                                                                        </option>
                                                                                        <option value="1">Review
                                                                                            each request</option>
                                                                                        <option value="2">Guests
                                                                                            book instantly</option>
                                                                                    </select>
                                                                                    <div class="validation-message" id="bookingType_error"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4>Terms</h4>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <h6>The
                                                                                requirements and conditions to
                                                                                book a reservation at your
                                                                                listing. * </h6>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 mt-2">
                                                                                    <label class="form-label">Cancellation
                                                                                        Policy</label>
                                                                                    <select name="policy" id="policy" class="default-select  form-control wide">
                                                                                          <option value=''>Select  Cancellation
                                                                                        Policy 
                                                                                        </option>
                                                                                        <option value="1">
                                                                                            Partial Refund : Cancellations made within 24 hours of check-in will incur a 50% cancellation charge.</option>
                                                                                        <option value="2">
                                                                                            No Refund : Same-day cancellations or no-shows will not be eligible for any refund.</option>
                                                                                        <option value="3">Peak Season Policy :
                                                                                            During festivals or peak travel seasons, cancellations must be made 7 days in advance for a refund. (Non-refundable bookings apply as per offer.)
                                                                                        </option>
                                                                                        <option value="4">Early Check-Out :
                                                                                            In case of early check-out, no refund will be processed for unused nights.
                                                                                        </option>
                                                                                        <option value="5">Modification of Booking :
                                                                                            Date changes are allowed up to 48 hours prior to check-in, subject to availability.
                                                                                        </option>
                                                                                        <option value="6">Refund Process :
                                                                                            Refunds (if applicable) will be processed within 7–10 working days to the original payment method. </option>
                                                                                    </select>
                                                                                     <div class="validation-message" id="policy_error"></div>
                                                                                </div>
                                                                                 
                                                                                <div class="col-lg-6 mt-4">
                                                                                    <label class="form-label">Check in
                                                                                        after</label>
                                                                                    <input type="time" name="checkIn" id="checkIn" class="form-control input-default " placeholder="input-default">
                                                                                 <div class="validation-message" id="checkIn_error"></div>
                                                                                </div>

                                                                                <div class="col-lg-6 mt-4">
                                                                                    <label class="form-label">Check out
                                                                                        before</label>
                                                                                    <input type="time" name="checkOut" id="checkOut" class="form-control input-default " placeholder="input-default">
                                                                                 <div class="validation-message" id="checkOut_error"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        
                                            <!-- Submit Button -->
                                            <div class="col-lg-12" style="margin-top: 30px;">
                                                <div class="form-btn">
                                                    <input type="submit" class="btn btn-primary" id="back" value="Back">
                                                    &nbsp;&nbsp;&nbsp;
                                                        <input type="submit" class="btn btn-primary" value="Submit">
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
document.getElementById('seven-form').addEventListener('submit', function(e) {
    e.preventDefault();

    let isValid = true;

    const fields = [
        { id: 'per_hour', errorId: 'per_hour_error', label: ' Please Select  Booking Per Hour  ' }, 
        { id: 'bookingType', errorId: 'bookingType_error', label: ' Please Select  Booking Type' }, 
        { id: 'policy', errorId: 'policy_error', label: ' Please Select  Cancellation Policy' }, 
        { id: 'checkIn', errorId: 'checkIn_error', label: ' Please Enter  Check in  Time   ' }, 
        { id: 'checkOut', errorId: 'checkOut_error', label: ' Please Enter  Check out  Time' }, 
         
    ];

    fields.forEach(field => {
        const input = document.getElementById(field.id);
        const errorDiv = document.getElementById(field.errorId);

        if (!input || !errorDiv) return;

        if (input.value.trim() === "") {
            errorDiv.textContent = `${field.label}  `;
            errorDiv.style.color = "red";
            isValid = false;
        } else {
            errorDiv.textContent = '';
        }
    });

    if (isValid) {
        window.location.href = "index.html"; // This is for submit redirection
    }
});

// Back redirect
document.getElementById('back').addEventListener('click', function() {
    window.location.href = "my-hotel-pricing.html";
});
</script>


</body>



</html>