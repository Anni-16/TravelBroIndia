<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Travl : Hotel Admin " />

	<!-- PAGE TITLE HERE -->
	<title>TravelBro - India | Vendor Dashboard </title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{  asset('VendorDashboard/images/favicon.png') }}" />
	<link href="{{  asset('VendorDashboard/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
	<link href="{{  asset('VendorDashboard/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{  asset('VendorDashboard/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

	<!-- Style css -->
	<link href="{{ asset('VendorDashboard/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('VendorDashboard/css/mystyle.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
		integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

	<div id="main-wrapper">

		<!--**********************************
				Header start
			***********************************-->
		@include('vendorDashboard.layout.header')
		<!--**********************************
				Header end 
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
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-4 col-lg-6 col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-body">
										<div class="text-center">
											<div class="profile-photo">
												<img src="{{ asset('Uploads/user/'.session('userData')->image) }}" width="100"
													class="img-fluid rounded-circle" alt="{{ session('userData')->firstname }}">
											</div>
											<h1 class="mt-4 mb-1">Hi, I’m {{ session('userData')->firstname}}
											</h1>
											<div class="row">
												<div class="col-lg-8 offset-lg-2">
													<div class="external-event btn-primary light" data-class="bg-primary"
														style="width: 250px; display:flex; justify-content:center;"><i class="fa fa-move"></i><span>Member since {{ \Carbon\Carbon::parse(session('userData')->created_at)->format('M j, Y') }}</span></div>
												</div>
											</div>
											<div class="mt-4">
											<a class="btn btn-outline-primary btn-rounded mt-1 px-5"
												href="{{ route('vendorDashboard.edit-profile') }}">Edit Account</a>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-xl-8">
								<div class="row" id="dash-icon">
									<div class="col-xl-4 col-sm-6">
										<div class="card booking">
											<div class="card-body">
												<div class="booking-status d-flex align-items-center">
													<span>
														<i class="fa fa-list-alt" aria-hidden="true"></i>
													</span>
													<div class="ms-4">
														<h2 class="mb-0 font-w600">20</h2>
														<p class="mb-0 text-nowrap">My Bookings</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-sm-6">
										<div class="card booking">
											<div class="card-body">
												<div class="booking-status d-flex align-items-center">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="28" height="20"
															viewBox="0 0 28 20">
															<path
																d="M27,14V7a1,1,0,0,0-1-1H6A1,1,0,0,0,5,7v7a3,3,0,0,0-3,3v8a1,1,0,0,0,2,0V24H28v1a1,1,0,0,0,2,0V17A3,3,0,0,0,27,14ZM7,8H25v6H24V12a2,2,0,0,0-2-2H19a2,2,0,0,0-2,2v2H15V12a2,2,0,0,0-2-2H10a2,2,0,0,0-2,2v2H7Zm12,6V12h3v2Zm-9,0V12h3v2ZM4,17a1,1,0,0,1,1-1H27a1,1,0,0,1,1,1v5H4Z"
																transform="translate(-2 -6)" fill="var(--primary)" />
														</svg>
													</span>
													<div class="ms-4">
														<h2 class="mb-0 font-w600">11</h2>
														<p class="mb-0 text-nowrap ">My Reviews</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-sm-6">
										<div class="card booking">
											<div class="card-body">
												<div class="booking-status d-flex align-items-center">
													<span>
														<i class="fa fa-credit-card" aria-hidden="true"></i>
													</span>
													<div class="ms-4">
														<h2 class="mb-0 font-w600">1635</h2>
														<p class="mb-0">My Hotel</p>
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
			Scripts
		***********************************-->
	<!-- Required vendors -->
	<script src="{{ asset('VendorDashboard/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('VendorDashboard/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('VendorDashboard/js/custom.min.js') }}"></script>
	<script src="{{ asset('VendorDashboard/js/dlabnav-init.js') }}"></script>
	<!--theme change this script -->
	<script src="{{ asset('VendorDashboard/js/demo.js') }}"></script>


</body>

</html>