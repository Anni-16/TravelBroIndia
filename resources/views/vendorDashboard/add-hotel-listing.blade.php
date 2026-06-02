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

                            <div>
                                <ul class="nav nav-wizard">
                                    <li class="step active">
                                        <a class="nav-link" href="#">
                                            <span class="circle">1</span>
                                            <h4>Basics</h4>
                                        </a>
                                    </li>
                                    <li class="step">
                                        <a class="nav-link" style="cursor: not-allowed;">
                                            <span class="circle">2</span>
                                            <h4>Description</h4>
                                        </a>
                                    </li>
                                    <li class="step">
                                        <a class="nav-link" style="cursor: not-allowed;">
                                            <span class="circle">3</span>
                                            <h4>Details</h4>
                                        </a>
                                    </li>
                                    <li class="step">
                                        <a class="nav-link" style="cursor: not-allowed;">
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
                                        <a class="nav-link" style="cursor: not-allowed;">
                                            <span class="circle">6</span>
                                            <h4>Photos</h4>
                                        </a>
                                    </li>
                                    <li class="step">
                                        <a class="nav-link" style="cursor: not-allowed;">
                                            <span class="circle">7</span>
                                            <h4>Pricing</h4>
                                        </a>
                                    </li>
                                    <li class="step">
                                        <a class="nav-link" style="cursor: not-allowed;">
                                            <span class="circle">8</span>
                                            <h4>Booking</h4>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <img src="{{ asset('./images/gallery/hotel1.jpg')}}" alt="" style="width: 100%;">
                                    </div>
                                    <div class="col-lg-7">
                                        <form action="" id="first-form">
                                            <div class="row">
                                                <div class="col-lg-12 mt-4">
                                                    <h3>Listings</h3>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <div class="row">
                                                        <!-- Property Type -->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Property Type*</label>
                                                                <select class="default-select   mb-1" name="property_type" id="property_type" required>
                                                                    <option value="0">Select</option>
                                                                    <option value="Boat">Boat</option>
                                                                    <option value="Apartment">Apartment</option>
                                                                    <option value="House">House</option>
                                                                    <option value="Villa">Villa</option>
                                                                    <option value="Castle">Castle</option>
                                                                </select>
                                                                <div class="validation-message" id="property_type_error"></div>
                                                            </div>
                                                        </div>
                                                        <!-- Property Type -->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Property Type*</label>
                                                                <select class="default-select   mb-1" name="room_type" id="room_type" required>
                                                                    <option value="0">Select</option>
                                                                    <option value="Boat">Boat</option>
                                                                    <option value="Apartment">Apartment</option>
                                                                    <option value="House">House</option>
                                                                    <option value="Villa">Villa</option>
                                                                    <option value="Castle">Castle</option>
                                                                </select>
                                                                <div class="validation-message" id="room_type_error"></div>
                                                            </div>
                                                        </div>
                                                        <!-- Property Type -->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Accommodates*</label>
                                                                <select class="default-select   mb-1" name="acommodates_type" id="acommodates_type" required>
                                                                    <option value="0">Select</option>
                                                                    <option value="Boat">Boat</option>
                                                                    <option value="Apartment">Apartment</option>
                                                                    <option value="House">House</option>
                                                                    <option value="Villa">Villa</option>
                                                                    <option value="Castle">Castle</option>
                                                                </select>
                                                                <div class="validation-message" id="acommodates_type_error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <h3>
                                                                                        Rooms and Beds</h3>
                                                        </div>
                                                        <div class="col-lg-12 mb-2 mt-4">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Bedrooms*</label>
                                                                <select class="default-select form-control wide mb-3  " id="selectInput" name="select" onchange="BookingForm()">
                                                                    <option value="select">Select</option>
                                                                    <option value="1">1 </option>
                                                                    <option value="2"> 2</option>
                                                                    <option value="3"> 3</option>
                                                                    <option value="4"> 4</option>
                                                                    <option value="5"> 5</option>
                                                                    <option value="6"> 6</option>
                                                                    <option value="7"> 7</option>
                                                                    <option value="8"> 8</option>
                                                                    <option value="9"> 9</option>
                                                                    <option value="10"> 10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div id="formContainer"></div>
                                                    </div>
                                                </div>
                                                <!-- Submit Button -->
                                                <div class="col-lg-12">
                                                    <div class="form-btn">
                                                        <input type="submit" class="btn btn-primary" value="Next">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                           
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- row -->

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


    <!-- This is used for multi step form validation -->


    <!-- This is validation used with form input -->
    <!-- JavaScript Validation -->
    <script>
        document.getElementById('first-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Always prevent default first

            let isValid = true;

            const fields = [{
                    id: 'property_type',
                    errorId: 'property_type_error',
                    label: 'Property Type'
                },
                {
                    id: 'room_type',
                    errorId: 'room_type_error',
                    label: 'Room Type'
                },
                {
                    id: 'acommodates_type',
                    errorId: 'acommodates_type_error',
                    label: 'Accommodates'
                },
            ];

            // Ensure the Bedrooms error message element exists
            if (!document.getElementById('selectInput_error')) {
                const selectInput = document.getElementById('selectInput');
                const errorDiv = document.createElement('div');
                errorDiv.className = 'validation-message';
                errorDiv.id = 'selectInput_error';
                selectInput.parentNode.appendChild(errorDiv);
            }

            fields.forEach(field => {
                const input = document.getElementById(field.id);
                const errorDiv = document.getElementById(field.errorId);
                if (!input || !errorDiv) return;

                if (input.value === "" || input.value === "0" || input.value.toLowerCase() === "select") {
                    errorDiv.textContent = `Please select a ${field.label}.`;
                    errorDiv.style.color = "red";
                    isValid = false;
                } else {
                    errorDiv.textContent = '';
                }
            });

            if (isValid) {
                window.location.href = "{{ route('hotel-description') }}";
            }
        });
    </script>

</body>



</html>