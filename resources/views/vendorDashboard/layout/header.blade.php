	<!--**********************************
				Nav header start
			***********************************-->
	<div class="nav-header">
		<a href="index.html" class="brand-logo">
			<img src="{{ asset('VendorDashboard/images/favicon.png') }}" alt="TravelBro" style="width: 70px;">
		</a>
	</div>
	<!--**********************************
				Nav header end
			***********************************-->


	<!--**********************************
				Header start
			***********************************-->
	<div class="header">
		<div class="header-content">
			<nav class="navbar navbar-expand">
				<div class="collapse navbar-collapse justify-content-between">
					<!--Dashboard hide for space keep-->
					<div class="header-left" style="visibility: hidden;">
						<div class="dashboard_bar">
							Dashboard
						</div>
					</div>

					<!-- search-area -->
					<!-- <div class="nav-item d-flex align-items-center">
							<div class="input-group search-area">
								<input type="text" class="form-control" placeholder="">
								<span class="input-group-text"><a href="javascript:void(0)"><i
											class="flaticon-381-search-2"></i></a></span>
							</div>
						</div> -->


					<ul class="navbar-nav header-right">
						<!-- Become a Host dropdown -->
						<li class="nav-item dropdown header-profile">
							<a class="nav-link" href="{{ route('vendorDashboard.hotel-listing') }}">
								Add Your Hotel
							</a>
							<!-- <div class="dropdown-menu dropdown-menu-end">
									<a href="app-profile.html" class="dropdown-item ai-icon">
										<span class="ms-2">Add Your Space </span>
									</a>
									<a href="email-inbox.html" class="dropdown-item ai-icon">
										<span class="ms-2">Add Experience </span>
									</a>
								</div> -->
						</li>

						<!-- Profile  -->
						<li class="nav-item dropdown header-profile">
							<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
								<img src="{{ asset('VendorDashboard/images/profile/pic1.jpg') }}" width="20" alt="" />
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="user-profile.html" class="dropdown-item ai-icon">
									<i class="fa fa-user" aria-hidden="true" style="color: #8B3EEA;"></i>
									<span class="ms-2">Profile </span>
								</a>
								<a href="{{ route('vendorDashboard.logout') }}" class="dropdown-item ai-icon">
									<svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
										height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
										<polyline points="16 17 21 12 16 7"></polyline>
										<line x1="21" y1="12" x2="9" y2="12"></line>
									</svg>
									<span class="ms-2">Logout </span>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!--**********************************
				Header end ti-comment-alt
			***********************************-->