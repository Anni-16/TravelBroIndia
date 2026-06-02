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
                                 <a class="nav-link " href="#"  >
                                    <span class="circle">4</span>
                                    <h4>Location</h4>
                                 </a>
                              </li>
                              <li class="step">
                                 <a class="nav-link" style="cursor: not-allowed;">
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
                                         
                                    <form action="" id="four-form">
                                        <h3 class="mb-4">Location</h3>
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Address Line 1
                                                                    *</label>
                                                                <input name="address1" id="address1" class="form-control" placeholder="Address Line 1">
                                                                 <div class="validation-message" id="address1_error"></div>
                                                            </div>
                                                                

                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Address Line
                                                                    2*</label>
                                                                <input name="address2" id="address2" class="form-control" placeholder="Address Line 2">
                                                                 <div class="validation-message" id="address2_error"></div>
                                                            </div>
                                                                

                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">City / Town /
                                                                    District *</label>
                                                                <input name="city" id="city" class="form-control" placeholder="City / Town /  District">
                                                                  <div class="validation-message" id="city_error"></div>
                                                            </div>
                                                               

                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">State/Province/County/Region
                                                                    *</label>
                                                                <input name="state" id="state" class="form-control" placeholder="State/Province/County/Region">
                                                                   <div class="validation-message" id="state_error"></div>
                                                            </div>
                                                              

                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">ZIP / Postal
                                                                    Code</label>
                                                                <input name="pinCode" type="number" id="pinCode" class="form-control" placeholder="ZIP / Postal Code">
                                                                   <div class="validation-message" id="pinCode_error"></div>
                                                            </div>
                                                              

                                                        </div>
                                                        <div class="col-lg-12 mb-2">
                                                            <label for="">Enter Your Google Map Location Link * </label>
                                                            <input type="text" class="form-control" name="map_url" id="map_url" placeholder=" Enter The Google Map Location Embed A Map  ">
                                                             <div class="validation-message" id="map_url_error"></div>
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
document.getElementById('four-form').addEventListener('submit', function(e) {
    e.preventDefault();

    let isValid = true;

    const fields = [
        { id: 'address1', errorId: 'address1_error', label: 'Please Enter Address Line 1 *' },
        { id: 'address2', errorId: 'address2_error', label: 'Please Enter Address Line 2 *' },
        { id: 'city', errorId: 'city_error', label: 'Please Enter City / Town / District ' },
        { id: 'state', errorId: 'state_error', label: 'Please Enter State/Province/County/Region' },
        { id: 'pinCode', errorId: 'pinCode_error', label: 'Please Enter ZIP / Postal Code' },
        { id: 'map_url', errorId: 'map_url_error', label: 'Please Enter Google Map Location Link ' },
         
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
        window.location.href = "{{ route('hotel-amenities') }}";
    }
});

// Back redirect
document.getElementById('back').addEventListener('click', function() {
    window.location.href = "my-hotel-details.html";
});
</script>


</body>



</html>