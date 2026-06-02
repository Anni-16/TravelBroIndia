<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel Bro India | Dashboard - Add Amenities Type </title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('front-end/assets/img/Travel-bro1.png') }}">


	<!--Css Attached-->
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/blue.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/bootstrap3-wysihtml5.min.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/AdminLTE.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/font-awesome.min.css') }}">
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
		integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />


	<!--Css Attached-->
</head>

<body class="skin-blue sidebar-mini" data-new-gr-c-s-check-loaded="14.1223.0" data-gr-ext-installed=""
	style="position: relative; min-height: 100%; top: 0px;">
	<div class="wrapper">
		<!---============ START HEADER ============-->

		<!--start-top-header-->
        @include('admin.layout.nav-top');
        <!--end-top-header-->

        <!--start vertical slider-->
        @include('admin.layout.side-nav');

        <!--end vertical slider-->

		<!---============ END HEADER ============-->
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="min-height: 759px;">

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Add Amenity Categories</h3>
							</div>
							<!-- form start -->
							<form class="form-horizontal"
								action="{{route('admin.add-amenities-type') }}" id="add_amenity"
								method="post" name="add_amenity" accept-charset="UTF-8" enctype="multipart/form-data">
                                @csrf
								<div class="box-body">
									<div class="form-group">
										<label for="exampleInputPassword1" class="control-label col-sm-3">Name<span
												class="text-danger">*</span></label>
										<div class="col-sm-6">
											<input type="text" class="@error('name') is-invalid 
                                            @enderror form-control" value="{{ old('name') }}" name="name" id="name">
                                            @error('name')
                                            <p class="invalid-feedback text-white">{{ $message }}</p>
                                            @enderror
										</div>
									</div>

									<div class="form-group">
                                        <label class="control-label col-sm-3">Status</label>
                                        <div class="col-sm-6">
                                            <select name="status" class="form-control">
                                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" class="btn btn-info" id="submitBtn">Submit</button>
									<a href="{{ route('admin.amenities-type') }}"
										class="btn btn-danger btn-sm">
										Back
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>

		 <!-- Start Footer Section -->
         @include('admin.layout.footer');
        <!-- End Footer Section -->

	</div>


	<!--ALL SCRIPT-->

	<!--Script added-->
	<script src="{{  asset('masster-admin-design/js/jquery-2.2.4.min.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/app.min.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/bootstrap.min.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/admin.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/backend.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/bootbox.min.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/bootstrap3-wysihtml5.all.min.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/custom.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/demo.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/element.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/jquery-ui.min.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/jquery.knob.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/moment.min.js') }}"></script>
	<script src="{{  asset('masster-admin-design/js/select-2.js') }}"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
</body>

</html>