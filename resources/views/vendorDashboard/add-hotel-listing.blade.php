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
    <link rel="shortcut icon" type="image/png" href="{{ asset('Vendordashboard/images/favicon.png') }}" />
    <!-- Form step -->
    <link href="{{ asset('Vendordashboard/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css') }}"
        rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('Vendordashboard/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('Vendordashboard/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('Vendordashboard/css/mystyle.css') }}" rel="stylesheet">
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
                        <li class="breadcrumb-item active"><a href=" ">Home</a></li>
                        <li class="breadcrumb"><a href="">/ Add You Hotel</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Property</h4>
                            </div>
                            <form class="card-body">
                                <div id="smartwizard" class="form-wizard order-create">
                                    <ul class="nav nav-wizard">
                                        <li><a class="nav-link" href="#basics">
                                                <span>1</span>
                                                <h4>Basics</h4>
                                            </a></li>
                                        <li><a class="nav-link" href="#description">
                                                <span>2</span>
                                                <h4>Description</h4>
                                            </a></li>
                                        <li><a class="nav-link" href="#Details">
                                                <span>3</span>
                                                <h4>Details</h4>
                                            </a></li>
                                        <li><a class="nav-link" href="#location">
                                                <span>4</span>
                                                <h4>Location</h4>
                                            </a></li>
                                        <li><a class="nav-link" href="#Amenities">
                                                <span>5</span>
                                                <h4>Amenities</h4>
                                            </a></li>
                                        <li><a class="nav-link" href="#Photos">
                                                <span>6</span>
                                                <h4>Photos</h4>
                                            </a></li>
                                        <li><a class="nav-link" href="#Pricing">
                                                <span>7</span>
                                                <h4>Pricing</h4>
                                            </a></li>
                                        <li><a class="nav-link" href="#Booking">
                                                <span>8</span>
                                                <h4>Booking</h4>
                                            </a></li>
                                    </ul>
                                    <div class="tab-content" id="boking-tab-listing">
                                        <div id="basics" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <img src="{{ asset('VendorDashboard/images/gallery/hotel1.jpg') }}"
                                                        alt="" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="row">
                                                        <div class="col-lg-12 mt-4">
                                                            <h3>Listings</h3>
                                                        </div>
                                                        <div class="col-lg-12 mb-2 ">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="text-label form-label">Property
                                                                            Type*</label>
                                                                        <select
                                                                            class="default-select form-control wide mb-3"
                                                                            id="property_type" name="property_type">
                                                                            <option value="Boat">Boat </option>
                                                                            <option value="Apartment"> Apartment
                                                                            </option>
                                                                            <option value="House"> House</option>
                                                                            <option value="Villa"> Villa </option>
                                                                            <option value="Castle"> Castle</option>
                                                                            <option value="House"> House</option>
                                                                            <option value="Villa"> Villa </option>
                                                                            <option value="Castle"> Castle</option>
                                                                            <option value="House"> House</option>
                                                                            <option value="Villa"> Villa </option>
                                                                            <option value="Castle"> Castle</option>
                                                                            <option value="House"> House</option>
                                                                            <option value="Villa"> Villa </option>
                                                                            <option value="Castle"> Castle</option>
                                                                            <option value="House"> House</option>
                                                                            <option value="Villa"> Villa </option>
                                                                            <option value="Castle"> Castle</option>
                                                                            <option value="House"> House</option>
                                                                            <option value="Villa"> Villa </option>
                                                                            <option value="Castle"> Castle</option>
                                                                            <option value="House"> House</option>
                                                                            <option value="Villa"> Villa </option>
                                                                            <option value="Castle"> Castle</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="text-label form-label">Room
                                                                            Type*</label>
                                                                        <select
                                                                            class="default-select form-control wide mb-3"
                                                                            name="room_type" id="room_type">
                                                                            <option value="Unique Stays">Unique
                                                                                Stays
                                                                            </option>
                                                                            <option value="Private Rooms"> Private
                                                                                Rooms
                                                                            </option>
                                                                            <option value="Shared Rooms"> Shared
                                                                                Rooms
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            class="text-label form-label">Accommodates*</label>
                                                                        <select
                                                                            class="default-select form-control wide mb-3"
                                                                            id="accomdates" name="accomdates">
                                                                            <option value="1">1 </option>
                                                                            <option value="2"> 2</option>
                                                                            <option value="3"> 3</option>
                                                                            <option value="4"> 4</option>
                                                                            <option value="5"> 5</option>
                                                                            <option value="6"> 6</option>
                                                                            <option value="7"> 7</option>
                                                                            <option value="8"> 8</option>
                                                                            <option value="9"> 9</option>
                                                                            <option value="10"> 10+</option>
                                                                        </select>
                                                                    </div>
                                                                    <!-- Real-time output display -->
                                                                    <div class="output">
                                                                        <p id="display_property_type"></p>
                                                                        <p id="display_room_type"></p>
                                                                        <p id="display_accommodates"></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <h3>Rooms and Beds</h3>
                                                        </div>
                                                        <div class="col-lg-12 mb-2 mt-4">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Bedrooms*</label>
                                                                <select class="default-select form-control wide mb-3"
                                                                    id="selectInput" name="bedrooms"
                                                                    onchange="BookingForm()">
                                                                    <option value="">Select</option>
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
                                                        <div id="formContainer">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="description" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <img src="./images/gallery/hotel1.jpg" alt=""
                                                        style="width: 100%;">
                                                </div>
                                                <div class="col-lg-7">
                                                    <h3 class="mb-4">
                                                        Description</h3>
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Listing
                                                                    Name*</label>
                                                                <input type="text" name="listingName"
                                                                    id="listingName" class="form-control"
                                                                    placeholder="Listing Name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Summary*</label>
                                                                <textarea name="message" cols="50" rows="10" class="form-control" id="message" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Details" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <img src="./images/gallery/hotel1.jpg" alt=""
                                                        style="width: 100%;">
                                                </div>
                                                <div class="col-lg-7">
                                                    <h3 class="mb-4">Details</h3>
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">About
                                                                    Place*</label>
                                                                <textarea name="aboutPlace" id="aboutPlace" cols="50" rows="10" class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Place is great
                                                                    for*</label>
                                                                <textarea name="greatPlace" id="greatPlace" cols="50" rows="10" class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Guest
                                                                    Access*</label>
                                                                <textarea name="" id="guestPlace" cols="50" rows="10" class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Interaction with
                                                                    Guests*</label>
                                                                <textarea name="guestInterect" id="guestInterect" cols="50" rows="10" class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Other Things to
                                                                    Note*</label>
                                                                <textarea name="otherThings" id="otherThings" cols="50" rows="10" class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Other Things to
                                                                    Note*</label>
                                                                <textarea name="otherThings1" id="otherThings1" cols="50" rows="10" class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Getting
                                                                    Around*</label>
                                                                <textarea name="aroundThings" id="aroundThings" cols="50" rows="10" class="form-control" id="message "
                                                                    required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="location" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <img src="./images/gallery/hotel1.jpg" alt=""
                                                        style="width: 100%;">
                                                </div>
                                                <div class="col-lg-7">
                                                    <h3 class="mb-4">Location</h3>
                                                    <div class="row">
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Country*</label>
                                                                <select id="country" name="country"
                                                                    class="default-select form-control wide mb-3">
                                                                    <option value="1">1 </option>
                                                                    <option value="2"> 2</option>
                                                                    <option value="3"> 3</option>
                                                                    <option value="4"> 4</option>
                                                                    <option value="5"> 5</option>
                                                                    <option value="6"> 6</option>
                                                                    <option value="7"> 7</option>
                                                                    <option value="8"> 8</option>
                                                                    <option value="9"> 9</option>
                                                                    <option value="10"> 10+</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Address Line 1
                                                                    *</label>
                                                                <input name="address1" id="address1"
                                                                    class="form-control" placeholder="Address Line 1">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <iframe
                                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7010.331727083108!2d77.23666746812657!3d28.534733878068902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce17e015aaf7b%3A0xa211f1cae059d8bc!2sGreater%20Kailash%20II%2C%20Greater%20Kailash%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1739770296430!5m2!1sen!2sin"
                                                                width="100%" height="450" style="border:0;"
                                                                allowfullscreen="" loading="lazy"
                                                                referrerpolicy="no-referrer-when-downgrade"
                                                                class="mt-4 "></iframe>
                                                            <label for="" class="mb-5">You can move the
                                                                pointer to set
                                                                the correct
                                                                map position</label>
                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Address Line
                                                                    2*</label>
                                                                <input name="address2" id="address2"
                                                                    class="form-control" placeholder="Address Line 2">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">City / Town /
                                                                    District *</label>
                                                                <input name="city" id="city"
                                                                    class="form-control" placeholder="Address Line 1">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="mb-3">
                                                                <label
                                                                    class="text-label form-label">State/Province/County/Region
                                                                    *</label>
                                                                <input name="state" id="state"
                                                                    class="form-control" placeholder="Address Line 2">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">ZIP / Postal
                                                                    Code</label>
                                                                <input name="pinCode" id="pinCode"
                                                                    class="form-control" placeholder="Address Line 1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Amenities" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <img src="./images/gallery/hotel1.jpg" alt=""
                                                        style="width: 100%;">
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="row">
                                                        <h3 class="mb-4">Common Amenities *</h3>

                                                        <div class="col-lg-3">
                                                            <div class="form-check custom-checkbox mb-3">
                                                                <input name="common_amentities[]" type="checkbox"
                                                                    class="form-check-input" value="essentials"
                                                                    id="customCheckBox1">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox1">Essentials</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" name="common_amentities[]"
                                                                    class="form-check-input" value="tv"
                                                                    id="customCheckBox2">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox2">TV</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox3" name="common_amentities[]"
                                                                    value="cable_tv">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox3">Cable TV</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox4" name="common_amentities[]"
                                                                    value="ac">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox4">Air Conditioning</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check custom-checkbox mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox5" name="common_amentities[]"
                                                                    value="heating">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox5">Heating</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox6" name="common_amentities[]"
                                                                    value="kitchen">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox6">Kitchen</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox7" name="common_amentities[]"
                                                                    value="internet">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox7">Internet</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox8" name="common_amentities[]"
                                                                    value="gym">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox8">Gym</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check custom-checkbox mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox9" name="common_amentities[]"
                                                                    value="elevator">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox9">Elevator in Building</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox10" name="common_amentities[]"
                                                                    value="fireplace">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox10">Indoor Fireplace</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox11" name="common_amentities[]"
                                                                    value="intercom">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox11">Buzzer/Wireless
                                                                    Intercom</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox12" name="common_amentities[]"
                                                                    value="doorman">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox12">Doorman</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check custom-checkbox mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox13" name="common_amentities[]"
                                                                    value="wireless_internet">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox13">Wireless Internet</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox14" name="common_amentities[]"
                                                                    value="hot_tub">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox14">Hot Tub</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox15" name="common_amentities[]"
                                                                    value="pool">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox15">Pool</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox16" name="common_amentities[]"
                                                                    value="free_parking">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox16">Free Parking on
                                                                    Premises</label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row mt-4">
                                                        <h3 class="mb-4">Safety Amenities</h3>

                                                        <div class="col-lg-3">
                                                            <div class="form-check custom-checkbox mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="safetyamenities1" name="safety_amenities[]"
                                                                    value="smoke_detector">
                                                                <label class="form-check-label"
                                                                    for="safetyamenities1">Smoke Detector</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="safetyamenities2" name="safety_amenities[]"
                                                                    value="carbon_monoxide_detector">
                                                                <label class="form-check-label"
                                                                    for="safetyamenities2">Carbon Monoxide
                                                                    Detector</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="safetyamenities3" name="safety_amenities[]"
                                                                    value="first_aid_kit">
                                                                <label class="form-check-label"
                                                                    for="safetyamenities3">First Aid Kit</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="safetyamenities4" name="safety_amenities[]"
                                                                    value="safety_card">
                                                                <label class="form-check-label"
                                                                    for="safetyamenities4">Safety Card</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check custom-checkbox mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="safetyamenities5" name="safety_amenities[]"
                                                                    value="fire_extinguisher">
                                                                <label class="form-check-label"
                                                                    for="safetyamenities5">Fire Extinguisher</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="safetyamenities6" name="safety_amenities[]"
                                                                    value="kitchen">
                                                                <label class="form-check-label"
                                                                    for="safetyamenities6">Kitchen</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="safetyamenities7" name="safety_amenities[]"
                                                                    value="internet">
                                                                <label class="form-check-label"
                                                                    for="safetyamenities7">Internet</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-check mb-3">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="safetyamenities8" name="safety_amenities[]"
                                                                    value="gym">
                                                                <label class="form-check-label"
                                                                    for="safetyamenities8">Gym</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div id="Photos" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <img src="./images/gallery/hotel1.jpg" alt=""
                                                        style="width: 100%;">
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4 class="card-title">Photos</h4>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="form-file mt-4">
                                                                        <input type="file" name="photo"
                                                                            id="photo"
                                                                            accept="image/jpg, image/png, image/jpeg"
                                                                            class="form-file-input form-control">
                                                                    </div>
                                                                    <span class="input-group-text">Upload</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-12 mt-4">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4 class="card-title">Videos</h4>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="form-file mt-4">
                                                                        <input type="file" name="video"
                                                                            id="video"
                                                                            class="form-file-input form-control"
                                                                            accept="video/mp4,video/x-m4v,video/*">
                                                                    </div>
                                                                    <span class="input-group-text">Upload</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Pricing" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <img src="./images/gallery/hotel1.jpg" alt=""
                                                        style="width: 100%;">
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4 class="card-title">Base price</h4>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <label for=""
                                                                                class="form-label">Daily/hourly Price
                                                                                *</label>
                                                                            <div
                                                                                class="input-group mb-3 input-primary">
                                                                                <span class="input-group-text">$</span>
                                                                                <input name="price" id="price"
                                                                                    type="text"
                                                                                    class="form-control">
                                                                                <span
                                                                                    class="input-group-text">.00</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <label class="form-label">Currency</label>
                                                                            <select name="currency" id="currency"
                                                                                class="default-select form-control wide">
                                                                                <option value="ind">IND</option>
                                                                                <option value="usd">USD</option>
                                                                                <option value="eur">EUR</option>
                                                                                <option value="aud">AUD</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-lg-12 mt-2">
                                                                            <h5 for="" class="text-center">You
                                                                                can
                                                                                offer discounts for
                                                                                longer stays by
                                                                                setting <a href=""> weekly and
                                                                                    monthly</a>
                                                                                prices.</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h3 class="">Additional Pricing Options</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-lg-12">
                                                                        <div class="form-check custom-checkbox mb-3">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="Additional1"
                                                                                name="additional_pricing[]"
                                                                                value="cleaning_fee">
                                                                            <label class="form-check-label"
                                                                                for="Additional1">Cleaning fee</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-check mb-3">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="Additional2"
                                                                                name="additional_pricing[]"
                                                                                value="additional_guests">
                                                                            <label class="form-check-label"
                                                                                for="Additional2">Additional
                                                                                guests</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-check mb-3">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="Additional3"
                                                                                name="additional_pricing[]"
                                                                                value="security_deposit">
                                                                            <label class="form-check-label"
                                                                                for="Additional3">Security
                                                                                deposit</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-check mb-3">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="Additional4"
                                                                                name="additional_pricing[]"
                                                                                value="weekend_pricing">
                                                                            <label class="form-check-label"
                                                                                for="Additional4">Weekend
                                                                                pricing</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Booking" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <img src="./images/gallery/hotel1.jpg" alt=""
                                                        style="width: 100%;">
                                                </div>
                                                <div class="col-lg-7">
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
                                                                                    <select name='per_hour'
                                                                                        id="per_hour"
                                                                                        class="default-select  form-control wide">
                                                                                        <option value='1'>Per Day
                                                                                        </option>
                                                                                        <option value='2'>Per Hour
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-lg-12 mt-4">
                                                                                    <label class="form-label">Booking
                                                                                        Type</label>
                                                                                    <select name="bookingType"
                                                                                        id="bookingType"
                                                                                        class="default-select  form-control wide">
                                                                                        <option value="1">Review
                                                                                            each request</option>
                                                                                        <option value="2">Guests
                                                                                            book instantly</option>
                                                                                    </select>
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
                                                                                    <label
                                                                                        class="form-label">Cancellation
                                                                                        Policy</label>
                                                                                    <select name="policy"
                                                                                        id="policy"
                                                                                        class="default-select  form-control wide">
                                                                                        <option value="1">
                                                                                            Flexible: Full refund 1
                                                                                            day prior to arrival, except
                                                                                            fees</option>
                                                                                        <option value="2">
                                                                                            Moderate: Full refund 5
                                                                                            days prior to arrival,
                                                                                            except fees</option>
                                                                                        <option value="3">Strict:
                                                                                            50% refund up
                                                                                            until 1 week prior to
                                                                                            arrival, except fees
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-lg-12 mt-4">
                                                                                    <label class="form-label">Booking
                                                                                        Type</label>
                                                                                    <select name="bookingTypeTerms"
                                                                                        id="bookingTypeTerms"
                                                                                        class="default-select  form-control wide">
                                                                                        <option value="1">Review
                                                                                            each request</option>
                                                                                        <option value="2">Guests
                                                                                            book instantly</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="col-lg-6 mt-4">
                                                                                    <label class="form-label">Check in
                                                                                        after</label>
                                                                                    <input type="date"
                                                                                        name="checkIn" id="checkIn"
                                                                                        class="form-control input-default "
                                                                                        placeholder="input-default">
                                                                                </div>

                                                                                <div class="col-lg-6 mt-4">
                                                                                    <label class="form-label">Check out
                                                                                        before</label>
                                                                                    <input type="date"
                                                                                        name="checkOut" id="checkOut"
                                                                                        class="form-control input-default "
                                                                                        placeholder="input-default">
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
                            </form>
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
    <script src="{{ asset('VendorDashboard/vendor/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('VendorDashboard/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- Form validate init -->
    <script src="{{ asset('VendorDashboard/js/plugins-init/jquery.validate-init.js') }}"></script>
    <!-- Form Steps -->
    <script src="{{ asset('VendorDashboard/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('VendorDashboard/js/custom.min.js') }}"></script>
    <script src="{{ asset('VendorDashboard/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('VendorDashboard/js/demo.js') }}"></script>
    <script src="{{ asset('VendorDashboard/js/myjs.js') }}"></script>
    <script src="{{ asset('VendorDashboard/js/hotel-form.js') }}"></script>
    <script src="{{ asset('VendorDashboard/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}"></script>

    <script>
        $(document).ready(function() {
            // SmartWizard initialize
            $('#smartwizard').smartWizard();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize select2 for all select elements with the class 'default-select'
            $(".default-select").select2();
        });
        $(document).ready(function() {
            $("body").on("click", ".next", function() {
                // Collect all data from all tabs
                var basics, description, details, location, amenities, pricing, booking, photos;

                // Collect data for the Basics tab
                var property_type = $("#property_type").val();
                var room_type = $("#room_type").val();
                var accomdates = $("#accomdates").val();
                var bedrooms = $("#selectInput").val();
                var kings = [],
                    queens = [],
                    double = [],
                    sofa_bed = [],
                    single = [],
                    bunk_bed = [];

                $("body [name='king']").each(function() {
                    kings.push($(this).val());
                });
                $("body [name='queen']").each(function() {
                    queens.push($(this).val());
                });
                $("body [name='double']").each(function() {
                    double.push($(this).val());
                });
                $("body [name='sofa_bed']").each(function() {
                    sofa_bed.push($(this).val());
                });
                $("body [name='single']").each(function() {
                    single.push($(this).val());
                });
                $("body [name='bunk_bed']").each(function() {
                    bunk_bed.push($(this).val());
                });

                var all_beds = [];
                var bedCount = Math.max(kings.length);
                for (let i = 0; i < bedCount; i++) {
                    all_beds.push({
                        king: kings[i] || "",
                        queen: queens[i] || "",
                        double: double[i] || "",
                        sofa_bed: sofa_bed[i] || "",
                        single: single[i] || "",
                        bunk_bed: bunk_bed[i] || ""
                    });
                }
                basics = {
                    property_type: property_type,
                    room_type: room_type,
                    accomdates: accomdates,
                    bedrooms: bedrooms,
                    all_beds: all_beds
                };

                // Collect data for the Description tab
                var listingName = $("#listingName").val();
                var message = $("#message").val();
                description = {
                    listing_name: listingName,
                    message: message
                };

                // Collect data for the Details tab
                var aboutPlace = $("#aboutPlace").val();
                var greatPlace = $("#greatPlace").val();
                var guestPlace = $("#guestPlace").val();
                var guestInterect = $("#guestInterect").val();
                var otherThings = $("#otherThings").val();
                var otherThings1 = $("#otherThings1").val();
                var aroundThings = $("#aroundThings").val();
                details = {
                    about_place: aboutPlace,
                    great_place: greatPlace,
                    guest_place: guestPlace,
                    guest_interect: guestInterect,
                    other_things: otherThings,
                    other_things1: otherThings1,
                    around_things: aroundThings
                };

                // Collect data for the Location tab
                var country = $("#country").val();
                var address1 = $("#address1").val();
                var address2 = $("#address2").val();
                var city = $("#city").val();
                var state = $("#state").val();
                var pinCode = $("#pinCode").val();
                location = {
                    country,
                    address1,
                    address2,
                    city,
                    state,
                    pinCode
                };

                // Collect data for the Amenities tab
                var safetyAmenities = $("input[name='safety_amenities[]']:checked").map(function() {
                    return this.value;
                }).get();
                var commonAmentities = $("input[name='common_amentities[]']:checked").map(function() {
                    return this.value;
                }).get();
                amenities = {
                    safety_amenities: safetyAmenities,
                    common_amentities: commonAmentities
                };

                // Collect data for the Photos tab (Handle Files with FormData)
                var formData = new FormData();
                var imageFiles = $('#photo')[0].files;
                var videoFiles = $('#video')[0].files;

                // Append the files to FormData
                for (let i = 0; i < imageFiles.length; i++) {
                    formData.append('image_files[]', imageFiles[i]);
                }
                for (let i = 0; i < videoFiles.length; i++) {
                    formData.append('video_files[]', videoFiles[i]);
                }

                photos = {
                    image_files: imageFiles,
                    video_files: videoFiles
                };

                // Collect data for the Pricing tab
                var price = $("#price").val();
                var currency = $("#currency").val();
                var additionalPricing = $("input[name='additional_pricing[]']:checked").map(function() {
                    return this.value;
                }).get();
                pricing = {
                    price,
                    currency,
                    additional_pricing: additionalPricing
                };

                // Collect data for the Booking tab
                var bookingTypeTerms = $("#bookingTypeTerms").val();
                var checkOut = $("#checkOut").val();
                var checkIn = $("#checkIn").val();
                var policy = $("#policy").val();
                var bookingType = $("#bookingType").val();
                var per_hour = $("#per_hour").val();
                booking = {
                    booking_type_terms: bookingTypeTerms,
                    check_out: checkOut,
                    check_in: checkIn,
                    policy: policy,
                    booking_type: bookingType,
                    per_hour: per_hour
                };

                // Append regular form fields to FormData
                formData.append('basics', JSON.stringify(basics));
                formData.append('description', JSON.stringify(description));
                formData.append('details', JSON.stringify(details));
                formData.append('location', JSON.stringify(location));
                formData.append('amenities', JSON.stringify(amenities));
                formData.append('pricing', JSON.stringify(pricing));
                formData.append('booking', JSON.stringify(booking));

                // Send the formData using AJAX
                if (checkIn !== "" && checkOut !== "") { // Check if required fields are filled
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: "{{ url('vendor/hotel-add') }}", // Your endpoint here
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-Token': csrfToken
                        },
                        success: function(response) {
                            const status = response.status;
                            if (status) {
                                alert("data Inserted successfully!");
                            } else {
                                alert("Please fill all required details!")
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log("Error in response!");
                        }
                    });
                }
            });
        });
    </script>
</body>



</html>
