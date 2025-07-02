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
                                        <a href="#v-pills-verification" data-bs-toggle="pill" class="nav-link">Trust &
                                            Verification</a>
                                        <a href="#v-pills-review" data-bs-toggle="pill" class="nav-link">Review About
                                            You</a>
                                        <a href="#v-pills-review2" data-bs-toggle="pill" class="nav-link">Review By
                                            You</a>
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
                                                        <form>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">First Name</label>
                                                                    <input type="text" value="Sumit"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Last Name</label>
                                                                    <input type="text" value="Rathore"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Display Name</label>
                                                                    <select class="default-select  form-control wide">
                                                                        <option selected>Choose...</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>


                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Email.</label>
                                                                    <div class="input-group  ">
                                                                        <input type="email" value="its00@gmail.com"
                                                                            class="form-control">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Phone No.</label>
                                                                    <div class="input-group  ">
                                                                        <button class="btn btn-primary"
                                                                            type="button">+91</button>
                                                                        <input type="text" class="form-control"
                                                                            value="9999 999 999">

                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">I Am</label>
                                                                    <select class="default-select  form-control wide">
                                                                        <option selected>Choose Gender</option>
                                                                        <option value="1">Male</option>
                                                                        <option value="2">Female</option>
                                                                        <option value="3">Others</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-12">
                                                                    <label class="form-label">Where You Live</label>
                                                                    <div class="input-group ">
                                                                        <input type="text"
                                                                            placeholder="Apartment, studio, or floor"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="mb-3 col-md-12">
                                                                    <label class="form-label">Describe Yourself</label>
                                                                    <div class="input-group ">
                                                                        <textarea type="text" class="form-control"
                                                                            placeholder="I'm Albert, and I like to meet new people and learn about various cultures. This is mainly why I chose to work as a host."></textarea>
                                                                    </div>
                                                                </div>

                                                            </div>



                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="v-pills-profile" class="tab-pane fade">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Upload Photo</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="basic-form custom_file_input">
                                                            <form action="#">
                                                                <div class="input-group ">
                                                                    <div class="form-file">
                                                                        <input type="file"
                                                                            class="form-file-input form-control">
                                                                    </div>
                                                                    <span class="input-group-text">Upload</span>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="v-pills-verification" class="tab-pane fade">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="basic-list-group">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item active">Cras justo
                                                                            odio</li>
                                                                        <li class="list-group-item ">
                                                                            <div class="external-event btn-primary light"
                                                                                data-class="bg-primary"><i
                                                                                    class="fa fa-move"></i><span>No
                                                                                    Verification Available</span></div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="basic-list-group">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item active">Add More
                                                                            Verifications</li>
                                                                        <li class="list-group-item mt-4 ">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <label for="">
                                                                                        <h4>Email</h4>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-xl-9">

                                                                                    <div> <span
                                                                                            class="badge light badge-primary"
                                                                                            style="font-size: 14px; padding:10px 20px;">
                                                                                            Please
                                                                                            verify your email address by
                                                                                            clicking the link in the
                                                                                            message we just sent to:
                                                                                            albert@demo.com.</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-3 ">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-primary btn-sm">Connect</button>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                        <li class="list-group-item mt-4 ">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <label for="">
                                                                                        <h4>Facebook</h4>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-xl-9">

                                                                                    <div> <span
                                                                                            class="badge light badge-primary"
                                                                                            style="font-size: 14px; padding:10px 20px;">
                                                                                            Sign in with Facebook and
                                                                                            discover your trusted
                                                                                            connections to hosts and
                                                                                            guests all over the
                                                                                            world.</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-3 ">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-primary btn-sm">Connect</button>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                        <li class="list-group-item mt-4 ">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <label for="">
                                                                                        <h4>Google</h4>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-xl-9">

                                                                                    <div> <span
                                                                                            class="badge light badge-primary"
                                                                                            style="font-size: 14px; padding:10px 20px;">
                                                                                            Connect your Buy2Rental
                                                                                            account to your Google
                                                                                            account for simplicity and
                                                                                            ease.</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-3 ">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-primary btn-sm">Connect</button>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                        <li class="list-group-item mt-4 ">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <label for="">
                                                                                        <h4>Document Verification</h4>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-xl-9">

                                                                                    <div> <span
                                                                                            class="badge light badge-primary"
                                                                                            style="font-size: 14px; padding:10px 20px;">
                                                                                            Please upload your documents
                                                                                            for ID verification. Eg:
                                                                                            Passport, Driving
                                                                                            License</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-3 ">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-primary btn-sm">
                                                                                        Verification</button>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="v-pills-review" class="tab-pane fade">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content">
                                                                            <div role="tabpanel"
                                                                                class="tab-pane fade show active"
                                                                                id="first">
                                                                                <img class="img-fluid" id="fix-image"
                                                                                    src="images/my-images/1.jpg" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--Tab slider End-->
                                                                    <div
                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                        <div class="product-detail-content">
                                                                            <!--Product details-->
                                                                            <div class="new-arrival-content pr">
                                                                                <div class="d-table mb-2">
                                                                                    <p
                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                        Entire Villa in
                                                                                        Hyderabad
                                                                                    </p>
                                                                                </div>
                                                                                <p>Best Host and comfortable
                                                                                    accommodation for a perfect
                                                                                    vacation
                                                                                    trip
                                                                                </p>

                                                                                <div class="nav-item   header-profile  "
                                                                                    style="float: right;">
                                                                                    <a class="nav-link"
                                                                                        href="javascript:void(0);"
                                                                                        role="button"
                                                                                        data-bs-toggle="dropdown">
                                                                                        <img src="images/profile/pic1.jpg"
                                                                                            width="20" alt="" />
                                                                                    </a>

                                                                                </div>

                                                                               
                                                                                <div class="d-table mb-2 mt-4">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                        Details</button>
                                                                                </div>
                                                                                <p>
                                                                                    <span
                                                                                        class="badge badge-success light mt-4">2
                                                                                        Years ago</span>
                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content">
                                                                            <div role="tabpanel"
                                                                                class="tab-pane fade show active"
                                                                                id="first">
                                                                                <img class="img-fluid" id="fix-image"
                                                                                    src="images/my-images/1.jpg" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--Tab slider End-->
                                                                    <div
                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                        <div class="product-detail-content">
                                                                            <!--Product details-->
                                                                            <div class="new-arrival-content pr">
                                                                                <div class="d-table mb-2">
                                                                                    <p
                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                        Entire Villa in
                                                                                        Hyderabad
                                                                                    </p>
                                                                                </div>
                                                                                <p>Best Host and comfortable
                                                                                    accommodation for a perfect
                                                                                    vacation
                                                                                    trip
                                                                                </p>

                                                                                <div class="nav-item   header-profile  "
                                                                                    style="float: right;">
                                                                                    <a class="nav-link"
                                                                                        href="javascript:void(0);"
                                                                                        role="button"
                                                                                        data-bs-toggle="dropdown">
                                                                                        <img src="images/profile/pic1.jpg"
                                                                                            width="20" alt="" />
                                                                                    </a>

                                                                                </div>
                                                                                <div class="d-table mb-2 mt-4">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                        Details</button>
                                                                                </div>
                                                                                <p>
                                                                                    <span
                                                                                        class="badge badge-success light mt-4">2
                                                                                        Years ago</span>
                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content">
                                                                            <div role="tabpanel"
                                                                                class="tab-pane fade show active"
                                                                                id="first">
                                                                                <img class="img-fluid" id="fix-image"
                                                                                    src="images/my-images/1.jpg" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--Tab slider End-->
                                                                    <div
                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                        <div class="product-detail-content">
                                                                            <!--Product details-->
                                                                            <div class="new-arrival-content pr">
                                                                                <div class="d-table mb-2">
                                                                                    <p
                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                        Entire Villa in
                                                                                        Hyderabad
                                                                                    </p>
                                                                                </div>
                                                                                <p>Best Host and comfortable
                                                                                    accommodation for a perfect
                                                                                    vacation
                                                                                    trip
                                                                                </p>

                                                                                <div class="nav-item   header-profile  "
                                                                                    style="float: right;">
                                                                                    <a class="nav-link"
                                                                                        href="javascript:void(0);"
                                                                                        role="button"
                                                                                        data-bs-toggle="dropdown">
                                                                                        <img src="images/profile/pic1.jpg"
                                                                                            width="20" alt="" />
                                                                                    </a>

                                                                                </div>
                                                                                <div class="d-table mb-2 mt-4">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                        Details</button>
                                                                                </div>
                                                                                <p>
                                                                                    <span
                                                                                        class="badge badge-success light mt-4">2
                                                                                        Years ago</span>
                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content">
                                                                            <div role="tabpanel"
                                                                                class="tab-pane fade show active"
                                                                                id="first">
                                                                                <img class="img-fluid" id="fix-image"
                                                                                    src="images/my-images/1.jpg" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--Tab slider End-->
                                                                    <div
                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                        <div class="product-detail-content">
                                                                            <!--Product details-->
                                                                            <div class="new-arrival-content pr">
                                                                                <div class="d-table mb-2">
                                                                                    <p
                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                        Entire Villa in
                                                                                        Hyderabad
                                                                                    </p>
                                                                                </div>
                                                                                <p>Best Host and comfortable
                                                                                    accommodation for a perfect
                                                                                    vacation
                                                                                    trip
                                                                                </p>

                                                                                <div class="nav-item   header-profile  "
                                                                                    style="float: right;">
                                                                                    <a class="nav-link"
                                                                                        href="javascript:void(0);"
                                                                                        role="button"
                                                                                        data-bs-toggle="dropdown">
                                                                                        <img src="images/profile/pic1.jpg"
                                                                                            width="20" alt="" />
                                                                                    </a>

                                                                                </div>
                                                                                <div class="d-table mb-2 mt-4">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                        Details</button>
                                                                                </div>
                                                                                <p>
                                                                                    <span
                                                                                        class="badge badge-success light mt-4">2
                                                                                        Years ago</span>
                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content">
                                                                            <div role="tabpanel"
                                                                                class="tab-pane fade show active"
                                                                                id="first">
                                                                                <img class="img-fluid" id="fix-image"
                                                                                    src="images/my-images/1.jpg" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--Tab slider End-->
                                                                    <div
                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                        <div class="product-detail-content">
                                                                            <!--Product details-->
                                                                            <div class="new-arrival-content pr">
                                                                                <div class="d-table mb-2">
                                                                                    <p
                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                        Entire Villa in
                                                                                        Hyderabad
                                                                                    </p>
                                                                                </div>
                                                                                <p>Best Host and comfortable
                                                                                    accommodation for a perfect
                                                                                    vacation
                                                                                    trip
                                                                                </p>

                                                                                <div class="nav-item   header-profile  "
                                                                                    style="float: right;">
                                                                                    <a class="nav-link"
                                                                                        href="javascript:void(0);"
                                                                                        role="button"
                                                                                        data-bs-toggle="dropdown">
                                                                                        <img src="images/profile/pic1.jpg"
                                                                                            width="20" alt="" />
                                                                                    </a>

                                                                                </div>
                                                                                <div class="d-table mb-2 mt-4">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                        Details</button>
                                                                                </div>
                                                                                <p>
                                                                                    <span
                                                                                        class="badge badge-success light mt-4">2
                                                                                        Years ago</span>
                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div id="v-pills-review2" class="tab-pane fade">
                                                <div class="row">
                                                    <div class="row ">
                                                        <div class="col-xl-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <!-- Nav tabs -->
                                                                    <div class="custom-tab-1">
                                                                        <ul class="nav nav-tabs">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active"
                                                                                    data-bs-toggle="tab"
                                                                                    href="#Write"><i
                                                                                        class="la la-home me-2"></i>
                                                                                    Write Review</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" data-bs-toggle="tab"
                                                                                    href="#Past"><i
                                                                                        class="la la-user me-2"></i>
                                                                                    Past Review</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" data-bs-toggle="tab"
                                                                                    href="#Expired"><i
                                                                                        class="la la-user me-2"></i>
                                                                                    Expired Review</a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="tab-content">
                                                                            <div class="tab-pane fade show active"
                                                                                id="Write" role="tabpanel">

                                                                            </div>
                                                                            <div class="tab-pane fade" id="Past">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                                                        <!-- Tab panes -->
                                                                                                        <div
                                                                                                            class="tab-content">
                                                                                                            <div role="tabpanel"
                                                                                                                class="tab-pane fade show active"
                                                                                                                id="first">
                                                                                                                <img class="img-fluid"
                                                                                                                    id="fix-image"
                                                                                                                    src="images/my-images/1.jpg"
                                                                                                                    alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--Tab slider End-->
                                                                                                    <div
                                                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                                                        <div
                                                                                                            class="product-detail-content">
                                                                                                            <!--Product details-->
                                                                                                            <div
                                                                                                                class="new-arrival-content pr">
                                                                                                                <div
                                                                                                                    class="d-table mb-2">
                                                                                                                    <p
                                                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                                                        Entire
                                                                                                                        Villa
                                                                                                                        in
                                                                                                                        Hyderabad
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                                <div class="nav-item   header-profile  "
                                                                                                                    style="float: right;">
                                                                                                                    <a class="nav-link"
                                                                                                                        href="javascript:void(0);"
                                                                                                                        role="button"
                                                                                                                        data-bs-toggle="dropdown">
                                                                                                                        <img src="images/profile/pic1.jpg"
                                                                                                                            width="20"
                                                                                                                            alt="" />
                                                                                                                    </a>

                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <i class="fa fa-calendar"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    Oct
                                                                                                                    28 -
                                                                                                                    29,
                                                                                                                    2022
                                                                                                                </p>
                                                                                                                <p>Good
                                                                                                                    accommodation
                                                                                                                </p>

                                                                                                                <div
                                                                                                                    class="d-table mb-2 mt-3">
                                                                                                                    <button
                                                                                                                        type="button"
                                                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                                                        Details</button>
                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <span
                                                                                                                        class="badge badge-success light mt-2">2
                                                                                                                        Years
                                                                                                                        ago</span>
                                                                                                                </p>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                                                        <!-- Tab panes -->
                                                                                                        <div
                                                                                                            class="tab-content">
                                                                                                            <div role="tabpanel"
                                                                                                                class="tab-pane fade show active"
                                                                                                                id="first">
                                                                                                                <img class="img-fluid"
                                                                                                                    id="fix-image"
                                                                                                                    src="images/my-images/1.jpg"
                                                                                                                    alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--Tab slider End-->
                                                                                                    <div
                                                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                                                        <div
                                                                                                            class="product-detail-content">
                                                                                                            <!--Product details-->
                                                                                                            <div
                                                                                                                class="new-arrival-content pr">
                                                                                                                <div
                                                                                                                    class="d-table mb-2">
                                                                                                                    <p
                                                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                                                        Entire
                                                                                                                        Villa
                                                                                                                        in
                                                                                                                        Hyderabad
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                                <div class="nav-item   header-profile  "
                                                                                                                    style="float: right;">
                                                                                                                    <a class="nav-link"
                                                                                                                        href="javascript:void(0);"
                                                                                                                        role="button"
                                                                                                                        data-bs-toggle="dropdown">
                                                                                                                        <img src="images/profile/pic1.jpg"
                                                                                                                            width="20"
                                                                                                                            alt="" />
                                                                                                                    </a>

                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <i class="fa fa-calendar"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    Oct
                                                                                                                    28 -
                                                                                                                    29,
                                                                                                                    2022
                                                                                                                </p>
                                                                                                                <p>Good
                                                                                                                    accommodation
                                                                                                                </p>

                                                                                                                <div
                                                                                                                    class="d-table mb-2 mt-3">
                                                                                                                    <button
                                                                                                                        type="button"
                                                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                                                        Details</button>
                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <span
                                                                                                                        class="badge badge-success light mt-2">2
                                                                                                                        Years
                                                                                                                        ago</span>
                                                                                                                </p>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                                                        <!-- Tab panes -->
                                                                                                        <div
                                                                                                            class="tab-content">
                                                                                                            <div role="tabpanel"
                                                                                                                class="tab-pane fade show active"
                                                                                                                id="first">
                                                                                                                <img class="img-fluid"
                                                                                                                    id="fix-image"
                                                                                                                    src="images/my-images/1.jpg"
                                                                                                                    alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--Tab slider End-->
                                                                                                    <div
                                                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                                                        <div
                                                                                                            class="product-detail-content">
                                                                                                            <!--Product details-->
                                                                                                            <div
                                                                                                                class="new-arrival-content pr">
                                                                                                                <div
                                                                                                                    class="d-table mb-2">
                                                                                                                    <p
                                                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                                                        Entire
                                                                                                                        Villa
                                                                                                                        in
                                                                                                                        Hyderabad
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                                <div class="nav-item   header-profile  "
                                                                                                                    style="float: right;">
                                                                                                                    <a class="nav-link"
                                                                                                                        href="javascript:void(0);"
                                                                                                                        role="button"
                                                                                                                        data-bs-toggle="dropdown">
                                                                                                                        <img src="images/profile/pic1.jpg"
                                                                                                                            width="20"
                                                                                                                            alt="" />
                                                                                                                    </a>

                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <i class="fa fa-calendar"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    Oct
                                                                                                                    28 -
                                                                                                                    29,
                                                                                                                    2022
                                                                                                                </p>
                                                                                                                <p>Good
                                                                                                                    accommodation
                                                                                                                </p>

                                                                                                                <div
                                                                                                                    class="d-table mb-2 mt-3">
                                                                                                                    <button
                                                                                                                        type="button"
                                                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                                                        Details</button>
                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <span
                                                                                                                        class="badge badge-success light mt-2">2
                                                                                                                        Years
                                                                                                                        ago</span>
                                                                                                                </p>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                                                        <!-- Tab panes -->
                                                                                                        <div
                                                                                                            class="tab-content">
                                                                                                            <div role="tabpanel"
                                                                                                                class="tab-pane fade show active"
                                                                                                                id="first">
                                                                                                                <img class="img-fluid"
                                                                                                                    id="fix-image"
                                                                                                                    src="images/my-images/1.jpg"
                                                                                                                    alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--Tab slider End-->
                                                                                                    <div
                                                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                                                        <div
                                                                                                            class="product-detail-content">
                                                                                                            <!--Product details-->
                                                                                                            <div
                                                                                                                class="new-arrival-content pr">
                                                                                                                <div
                                                                                                                    class="d-table mb-2">
                                                                                                                    <p
                                                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                                                        Entire
                                                                                                                        Villa
                                                                                                                        in
                                                                                                                        Hyderabad
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                                <div class="nav-item   header-profile  "
                                                                                                                    style="float: right;">
                                                                                                                    <a class="nav-link"
                                                                                                                        href="javascript:void(0);"
                                                                                                                        role="button"
                                                                                                                        data-bs-toggle="dropdown">
                                                                                                                        <img src="images/profile/pic1.jpg"
                                                                                                                            width="20"
                                                                                                                            alt="" />
                                                                                                                    </a>

                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <i class="fa fa-calendar"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    Oct
                                                                                                                    28 -
                                                                                                                    29,
                                                                                                                    2022
                                                                                                                </p>
                                                                                                                <p>Good
                                                                                                                    accommodation
                                                                                                                </p>

                                                                                                                <div
                                                                                                                    class="d-table mb-2 mt-3">
                                                                                                                    <button
                                                                                                                        type="button"
                                                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                                                        Details</button>
                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <span
                                                                                                                        class="badge badge-success light mt-2">2
                                                                                                                        Years
                                                                                                                        ago</span>
                                                                                                                </p>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                                                        <!-- Tab panes -->
                                                                                                        <div
                                                                                                            class="tab-content">
                                                                                                            <div role="tabpanel"
                                                                                                                class="tab-pane fade show active"
                                                                                                                id="first">
                                                                                                                <img class="img-fluid"
                                                                                                                    id="fix-image"
                                                                                                                    src="images/my-images/1.jpg"
                                                                                                                    alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--Tab slider End-->
                                                                                                    <div
                                                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                                                        <div
                                                                                                            class="product-detail-content">
                                                                                                            <!--Product details-->
                                                                                                            <div
                                                                                                                class="new-arrival-content pr">
                                                                                                                <div
                                                                                                                    class="d-table mb-2">
                                                                                                                    <p
                                                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                                                        Entire
                                                                                                                        Villa
                                                                                                                        in
                                                                                                                        Hyderabad
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                                <div class="nav-item   header-profile  "
                                                                                                                    style="float: right;">
                                                                                                                    <a class="nav-link"
                                                                                                                        href="javascript:void(0);"
                                                                                                                        role="button"
                                                                                                                        data-bs-toggle="dropdown">
                                                                                                                        <img src="images/profile/pic1.jpg"
                                                                                                                            width="20"
                                                                                                                            alt="" />
                                                                                                                    </a>

                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <i class="fa fa-calendar"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    Oct
                                                                                                                    28 -
                                                                                                                    29,
                                                                                                                    2022
                                                                                                                </p>
                                                                                                                <p>Good
                                                                                                                    accommodation
                                                                                                                </p>

                                                                                                                <div
                                                                                                                    class="d-table mb-2 mt-3">
                                                                                                                    <button
                                                                                                                        type="button"
                                                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                                                        Details</button>
                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <span
                                                                                                                        class="badge badge-success light mt-2">2
                                                                                                                        Years
                                                                                                                        ago</span>
                                                                                                                </p>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade" id="Expired">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                                                        <!-- Tab panes -->
                                                                                                        <div
                                                                                                            class="tab-content">
                                                                                                            <div role="tabpanel"
                                                                                                                class="tab-pane fade show active"
                                                                                                                id="first">
                                                                                                                <img class="img-fluid"
                                                                                                                    id="fix-image"
                                                                                                                    src="images/my-images/1.jpg"
                                                                                                                    alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--Tab slider End-->
                                                                                                    <div
                                                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                                                        <div
                                                                                                            class="product-detail-content">
                                                                                                            <!--Product details-->
                                                                                                            <div
                                                                                                                class="new-arrival-content pr">
                                                                                                                <div
                                                                                                                    class="d-table mb-2">
                                                                                                                    <p
                                                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                                                        Entire
                                                                                                                        Villa
                                                                                                                        in
                                                                                                                        Hyderabad
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                                <div class="nav-item   header-profile  "
                                                                                                                    style="float: right;">
                                                                                                                    <a class="nav-link"
                                                                                                                        href="javascript:void(0);"
                                                                                                                        role="button"
                                                                                                                        data-bs-toggle="dropdown">
                                                                                                                        <img src="images/profile/pic1.jpg"
                                                                                                                            width="20"
                                                                                                                            alt="" />
                                                                                                                    </a>

                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <i class="fa fa-calendar"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    Oct
                                                                                                                    28 -
                                                                                                                    29,
                                                                                                                    2022
                                                                                                                </p>
                                                                                                                <p>Good
                                                                                                                    accommodation
                                                                                                                </p>

                                                                                                                <div
                                                                                                                    class="d-table mb-2 mt-3">
                                                                                                                    <button
                                                                                                                        type="button"
                                                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                                                        Details</button>
                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <span
                                                                                                                        class="badge badge-success light mt-2">2
                                                                                                                        Years
                                                                                                                        ago</span>
                                                                                                                </p>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                                                        <!-- Tab panes -->
                                                                                                        <div
                                                                                                            class="tab-content">
                                                                                                            <div role="tabpanel"
                                                                                                                class="tab-pane fade show active"
                                                                                                                id="first">
                                                                                                                <img class="img-fluid"
                                                                                                                    id="fix-image"
                                                                                                                    src="images/my-images/1.jpg"
                                                                                                                    alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--Tab slider End-->
                                                                                                    <div
                                                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                                                        <div
                                                                                                            class="product-detail-content">
                                                                                                            <!--Product details-->
                                                                                                            <div
                                                                                                                class="new-arrival-content pr">
                                                                                                                <div
                                                                                                                    class="d-table mb-2">
                                                                                                                    <p
                                                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                                                        Entire
                                                                                                                        Villa
                                                                                                                        in
                                                                                                                        Hyderabad
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                                <div class="nav-item   header-profile  "
                                                                                                                    style="float: right;">
                                                                                                                    <a class="nav-link"
                                                                                                                        href="javascript:void(0);"
                                                                                                                        role="button"
                                                                                                                        data-bs-toggle="dropdown">
                                                                                                                        <img src="images/profile/pic1.jpg"
                                                                                                                            width="20"
                                                                                                                            alt="" />
                                                                                                                    </a>

                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <i class="fa fa-calendar"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    Oct
                                                                                                                    28 -
                                                                                                                    29,
                                                                                                                    2022
                                                                                                                </p>
                                                                                                                <p>Good
                                                                                                                    accommodation
                                                                                                                </p>

                                                                                                                <div
                                                                                                                    class="d-table mb-2 mt-3">
                                                                                                                    <button
                                                                                                                        type="button"
                                                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                                                        Details</button>
                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <span
                                                                                                                        class="badge badge-success light mt-2">2
                                                                                                                        Years
                                                                                                                        ago</span>
                                                                                                                </p>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                                                        <!-- Tab panes -->
                                                                                                        <div
                                                                                                            class="tab-content">
                                                                                                            <div role="tabpanel"
                                                                                                                class="tab-pane fade show active"
                                                                                                                id="first">
                                                                                                                <img class="img-fluid"
                                                                                                                    id="fix-image"
                                                                                                                    src="images/my-images/1.jpg"
                                                                                                                    alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--Tab slider End-->
                                                                                                    <div
                                                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                                                        <div
                                                                                                            class="product-detail-content">
                                                                                                            <!--Product details-->
                                                                                                            <div
                                                                                                                class="new-arrival-content pr">
                                                                                                                <div
                                                                                                                    class="d-table mb-2">
                                                                                                                    <p
                                                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                                                        Entire
                                                                                                                        Villa
                                                                                                                        in
                                                                                                                        Hyderabad
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                                <div class="nav-item   header-profile  "
                                                                                                                    style="float: right;">
                                                                                                                    <a class="nav-link"
                                                                                                                        href="javascript:void(0);"
                                                                                                                        role="button"
                                                                                                                        data-bs-toggle="dropdown">
                                                                                                                        <img src="images/profile/pic1.jpg"
                                                                                                                            width="20"
                                                                                                                            alt="" />
                                                                                                                    </a>

                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <i class="fa fa-calendar"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    Oct
                                                                                                                    28 -
                                                                                                                    29,
                                                                                                                    2022
                                                                                                                </p>
                                                                                                                <p>Good
                                                                                                                    accommodation
                                                                                                                </p>

                                                                                                                <div
                                                                                                                    class="d-table mb-2 mt-3">
                                                                                                                    <button
                                                                                                                        type="button"
                                                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                                                        Details</button>
                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <span
                                                                                                                        class="badge badge-success light mt-2">2
                                                                                                                        Years
                                                                                                                        ago</span>
                                                                                                                </p>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                                                        <!-- Tab panes -->
                                                                                                        <div
                                                                                                            class="tab-content">
                                                                                                            <div role="tabpanel"
                                                                                                                class="tab-pane fade show active"
                                                                                                                id="first">
                                                                                                                <img class="img-fluid"
                                                                                                                    id="fix-image"
                                                                                                                    src="images/my-images/1.jpg"
                                                                                                                    alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--Tab slider End-->
                                                                                                    <div
                                                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                                                        <div
                                                                                                            class="product-detail-content">
                                                                                                            <!--Product details-->
                                                                                                            <div
                                                                                                                class="new-arrival-content pr">
                                                                                                                <div
                                                                                                                    class="d-table mb-2">
                                                                                                                    <p
                                                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                                                        Entire
                                                                                                                        Villa
                                                                                                                        in
                                                                                                                        Hyderabad
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                                <div class="nav-item   header-profile  "
                                                                                                                    style="float: right;">
                                                                                                                    <a class="nav-link"
                                                                                                                        href="javascript:void(0);"
                                                                                                                        role="button"
                                                                                                                        data-bs-toggle="dropdown">
                                                                                                                        <img src="images/profile/pic1.jpg"
                                                                                                                            width="20"
                                                                                                                            alt="" />
                                                                                                                    </a>

                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <i class="fa fa-calendar"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    Oct
                                                                                                                    28 -
                                                                                                                    29,
                                                                                                                    2022
                                                                                                                </p>
                                                                                                                <p>Good
                                                                                                                    accommodation
                                                                                                                </p>

                                                                                                                <div
                                                                                                                    class="d-table mb-2 mt-3">
                                                                                                                    <button
                                                                                                                        type="button"
                                                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                                                        Details</button>
                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <span
                                                                                                                        class="badge badge-success light mt-2">2
                                                                                                                        Years
                                                                                                                        ago</span>
                                                                                                                </p>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xl-4 col-lg-6  col-md-6 col-xxl-5 ">
                                                                                                        <!-- Tab panes -->
                                                                                                        <div
                                                                                                            class="tab-content">
                                                                                                            <div role="tabpanel"
                                                                                                                class="tab-pane fade show active"
                                                                                                                id="first">
                                                                                                                <img class="img-fluid"
                                                                                                                    id="fix-image"
                                                                                                                    src="images/my-images/1.jpg"
                                                                                                                    alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--Tab slider End-->
                                                                                                    <div
                                                                                                        class="col-xl-8 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                                                                        <div
                                                                                                            class="product-detail-content">
                                                                                                            <!--Product details-->
                                                                                                            <div
                                                                                                                class="new-arrival-content pr">
                                                                                                                <div
                                                                                                                    class="d-table mb-2">
                                                                                                                    <p
                                                                                                                        class="price float-start d-block mb-2 mt-1">
                                                                                                                        Entire
                                                                                                                        Villa
                                                                                                                        in
                                                                                                                        Hyderabad
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                                <div class="nav-item   header-profile  "
                                                                                                                    style="float: right;">
                                                                                                                    <a class="nav-link"
                                                                                                                        href="javascript:void(0);"
                                                                                                                        role="button"
                                                                                                                        data-bs-toggle="dropdown">
                                                                                                                        <img src="images/profile/pic1.jpg"
                                                                                                                            width="20"
                                                                                                                            alt="" />
                                                                                                                    </a>

                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <i class="fa fa-calendar"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    Oct
                                                                                                                    28 -
                                                                                                                    29,
                                                                                                                    2022
                                                                                                                </p>
                                                                                                                <p>Good
                                                                                                                    accommodation
                                                                                                                </p>

                                                                                                                <div
                                                                                                                    class="d-table mb-2 mt-3">
                                                                                                                    <button
                                                                                                                        type="button"
                                                                                                                        class="btn btn-outline-primary btn-sm">View
                                                                                                                        Details</button>
                                                                                                                </div>
                                                                                                                <p>
                                                                                                                    <span
                                                                                                                        class="badge badge-success light mt-2">2
                                                                                                                        Years
                                                                                                                        ago</span>
                                                                                                                </p>

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

            jQuery(window).on('load', function () {
                setTimeout(function () {
                    TravlCarousel();
                }, 1000);
            });
        </script>
        <script>
            $(function () {
                $('#datetimepicker').datetimepicker({
                    inline: true,
                });
            });

            $(document).ready(function () {
                $(".booking-calender .fa.fa-clock-o").removeClass(this);
                $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
            });
        </script>

</body>

</html>