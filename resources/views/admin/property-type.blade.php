<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Awesome | Dashboard </title>

	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!--Css Attached-->
	<link rel="stylesheet" href="css/blue.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="css/AdminLTE.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/datepicker3.css">
	<link rel="stylesheet" href="css/daterangepicker.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/glyphicon.css">
	<link rel="stylesheet" href="css/intlTelInput.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="css/jquery.dataTables.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/m=el_main_css">
	<link rel="stylesheet" href="css/responsive.dataTables.min.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/_all-skins.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.css">

	<link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />

	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>


	<!--font-awesome-cdn-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
		integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--ion icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link href="
		https://cdn.jsdelivr.net/npm/glyphicons-halflings@1.9.1/css/glyphicons-halflings.min.css
		" rel="stylesheet">

	<!--Css Attached-->
</head>

<body class="skin-blue sidebar-mini" style="position: relative; min-height: 100%; top: 0px;"
	data-new-gr-c-s-check-loaded="14.1223.0" data-gr-ext-installed="">
	<div class="wrapper">
		<!---============ START HEADER ============-->

		<!--start-top-header-->
		<header class="main-header">
			<a href="index.html" class="logo">
				<span class="logo-mini"><img class="admin-fav-icon" src="./images/my-images/small-logo.png"></span>

				<span class="logo-lg"><img src="./images/my-images/logo.png" style="width: 150px;"></span>
			</a>

			<nav class="navbar navbar-static-top header_controls">
				<a class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">


						<li class="dropdown user user-menu">

							<a href=" ">
								<img src="./images/user_pic.jpg" class="user-image" alt="User Image">
								<span class="hidden-xs">Admin</span>
							</a>

						</li>
						<li><a href="log-in.html"><span class="hidden-xs">Logout</span> <span class="visible-xs"><i
										class="fa fa-sign-out"></i></span></a></li>

					</ul>
				</div>
			</nav>
		</header>

		<div class="flash-container" style="opacity: 500; display: none;">
			<div class="alert alert-success text-center mb-0 d-none" id="success_message_div" role="alert">
				<a href=" " class="pull-right" data-dismiss="alert">×</a>
				<p id="success_message"></p>
			</div>
			<div class="alert alert-danger text-center mb-0 d-none" id="error_message_div" role="alert">
				<p><a href=" " class="pull-right" data-dismiss="alert">×</a>
				</p>
				<p id="error_message"></p>
			</div>
		</div>
		<!--end-top-header-->

		<!--start vertical slider-->
		<aside class="main-sidebar">
			<section class="sidebar" style="height: auto;">
				<ul class="sidebar-menu">
					<li class=" "><a href="index.html"><i class="fa fa-desktop"></i><span>Dashboard</span></a></li>

					<li class="treeview ">
						<a href="">
							<i class="fa fa-cog"></i> <span>Site Settings</span><i
								class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="">
								<a href="Site-setting-general.html" data-group="profile">General</a>
							</li>

						</ul>
					</li>

					<li class=" "><a href="Manage-users.html"><i class="fa fa-users"></i><span>Manage
								Users</span></a></li>


					<li class="treeview  ">
						<a href="">
							<i class="fa fa-user-secret"></i> <span>Document Verification</span><i
								class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="">
								<a href="doc-disapprove.html"><span>Disapprove
										Documents</span></a>
							</li>
							<li class="">
								<a href="doc-approve.html"><span>Approve
										Document</span></a>
							</li>
						</ul>
					</li>



					<li class=""><a href="manage-listing.html"><i class="fa fa-list"></i><span>Manage
								Listings</span></a></li>

					<li class=""><a href="manage-exprience.html"><i class="fa fa-list"></i><span>Manage
								Experience</span></a></li>

					<li class="treeview  ">
						<a href="list-experience.html">
							<i class="fa fa-sliders"></i> <span>Experience Settings</span><i
								class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="">
								<a href="experience-category.html" data-group="property_type">Experience Category</a>
							</li>
							<li class="">
								<a href="inclusion.html">Inclusion</a>
							</li>

							<li class="">
								<a href="exclusion.html">Exclusion</a>
							</li>
						</ul>
					</li>



					<li class="treeview active">
						<a href=" ">
							<i class="fa fa-sliders"></i> <span>Listing Settings</span><i
								class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="">
								<a href="property-type.html" data-group="property_type">Property Type</a>
							</li>
							<li class="">
								<a href="space-type.html" data-group="space_type">Space
									Type</a>
							</li>
							<li class="">
								<a href="bed-type.html" data-group="bed_type">Bed Type</a>
							</li>
						</ul>
					</li>
					<li class="treeview ">
						<a href=" ">
							<i class="fa fa-check-circle"></i> <span>Manage Amenities</span><i
								class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class=""><a href="all-amenities.html"><span>All Amenities</span></a>
							</li>
							<li class="">
								<a href="amenities-type.html">Amenities Type</a>
							</li>
						</ul>
					</li>

					<li class=""><a href="user-reviews.html"><i class="fa fa-commenting"></i><span>User
								Reviews</span></a></li>

					<li class=""><a href="site-testimonials.html"><i class="fa fa-list-alt"
								aria-hidden="true"></i><span>Site
								Testimonials</span></a></li>

					<li class="">
						<a href="customer-message.html">
							<i class="fa fa-comments"></i> <span>Customer Messages</span>
						</a>
					</li>


					<li class="treeview ">
						<a href=" ">
							<i class="fa fa-area-chart "></i> <span>Reports &amp; Stats</span><i
								class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="treeview ">
								<a href=" ">
									<span>Overview</span><i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li class=""><a href="overview-property.html"><span>Overview
												(Property)</span></a></li>
									<li class=""><a href="overview-experience.html"><span>Overview
												(Experience)</span></a></li>
								</ul>
							</li>
							<li class=""><a href="booking-report.html"><span>Booking
										Report</span></a></li>

							<li class="treeview ">
								<a href=" ">
									<span>Data Analysis</span><i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li class=""><a href="data-analysis.html"><span>Data Analysis
												Property</span></a></li>
									<li class=""><a href="data-analyst-property.html"><span>Data
												Analysis Experience</span></a></li>

								</ul>
							</li>
						</ul>
					</li>

					<li class="treeview ">
						<a href=" ">
							<i class="fa fa-home"></i> <span>Home Page Settings</span><i
								class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="">
								<a href="banners.html" data-group="profile">Banners</a>
							</li>
							<li class="">
								<a href="cities.html" data-group="home_cities">Popular Cities</a>
							</li>
						</ul>
					</li>

					<li class=""><a href="static-page-cms.html">
							<i class="fa-regular fa-newspaper"></i>&nbsp;&nbsp;
							<span>Static Page CMS</span></a>
					</li>


					<li class="treeview ">
						<a href="">
							<i class="fa fa-university"></i> <span>Payment &amp; Fee settings</span><i
								class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="">
								<a href="payment-methods.html" data-group="payment_methods">Payment Methods</a>
							</li>
							<li class="">
								<a href="manage-fees.html">Fees &amp; Tax Settings</a>
							</li>
						</ul>
					</li>


					<li class="treeview ">
						<a href=" ">
							<i class="fa fa-facebook-square"></i> <span>Social Page &amp; login Settings</span><i
								class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="">
								<a href="social-icons.html" data-group="social_links">Social Media Links</a>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="meta.html" data-group="metas"><i class="fa fa-search-plus"></i> <span>SEO
								Settings</span></a>
					</li>


				</ul>
			</section>
		</aside>
		<!--end vertical slider-->

		<!---============ END HEADER ============-->
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="min-height: 783px;">
			<!-- Main content -->
			<section class="content">
				<div class="row">

					<div class="col-md-9">

						<div class="box box_info">
							<div class="box-header">
								<h3 class="box-title">Property type Management</h3>
								<div class="pull-right"><a class="btn btn-primary" href="add-property-type.html">Add
										Property Type</a></div>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<div class="table-responsive">
									<div id="dataTableBuilder_wrapper" class="dataTables_wrapper no-footer">
										<div class="dataTables_length" id="dataTableBuilder_length"><label><select
													name="dataTableBuilder_length" aria-controls="dataTableBuilder"
													class="">
													<option value="10">10</option>
													<option value="25">25</option>
													<option value="50">50</option>
													<option value="100">100</option>
												</select></label></div>
										<div id="dataTableBuilder_filter" class="dataTables_filter"><label>Search:<input
													type="search" class="" placeholder=""
													aria-controls="dataTableBuilder"></label></div>
										<div id="dataTableBuilder_processing" class="dataTables_processing"
											style="display: none;">Processing...</div>
										<table class="table dataTable no-footer" id="dataTableBuilder" role="grid"
											aria-describedby="dataTableBuilder_info" style="width: 1575px;">
											<thead>
												<tr role="row">
													<th title="Name" class="sorting_desc" tabindex="0"
														aria-controls="dataTableBuilder" rowspan="1" colspan="1"
														style="width: 330px;" aria-sort="descending"
														aria-label="Name: activate to sort column ascending">Name</th>
													<th title="Description" class="sorting" tabindex="0"
														aria-controls="dataTableBuilder" rowspan="1" colspan="1"
														style="width: 438px;"
														aria-label="Description: activate to sort column ascending">
														Description</th>
													<th title="Status" class="sorting" tabindex="0"
														aria-controls="dataTableBuilder" rowspan="1" colspan="1"
														style="width: 307px;"
														aria-label="Status: activate to sort column ascending">Status
													</th>
													<th title="Action" class="sorting_disabled" rowspan="1" colspan="1"
														style="width: 308px;" aria-label="Action">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr role="row" class="odd">
													<td class="sorting_1">Yurt</td>
													<td>Yurt</td>
													<td>Active</td>
													<td>
														<a href="" class="btn btn-xs svbtn  "><i
																class="fa fa-eye"></i></a>
														<a href="edit-property-types.html" class="btn btn-xs svbtn"><i
																class="fa fa-pencil"></i></a>

														<a href=" " class="btn btn-xs svbtn delete-warning"><i
																class="fa fa-trash"></i></a>
													</td>
												</tr>

											</tbody>
										</table>
										<div class="dataTables_info" id="dataTableBuilder_info" role="status"
											aria-live="polite">Showing 1 to 24 of 28 entries</div>
										<div class="dataTables_paginate paging_simple_numbers"
											id="dataTableBuilder_paginate"><a class="paginate_button previous disabled"
												aria-controls="dataTableBuilder" data-dt-idx="0" tabindex="0"
												id="dataTableBuilder_previous">Previous</a><span><a
													class="paginate_button current" aria-controls="dataTableBuilder"
													data-dt-idx="1" tabindex="0">1</a><a class="paginate_button "
													aria-controls="dataTableBuilder" data-dt-idx="2"
													tabindex="0">2</a></span><a class="paginate_button next"
												aria-controls="dataTableBuilder" data-dt-idx="3" tabindex="0"
												id="dataTableBuilder_next">Next</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 5.0.1
			</div>
			<strong>Copyright © 2025 <a
					href="firstpointcreations.com/admin/settings/property-type#">firstpointcreations.com</a>.</strong>
			All rights reserved.
		</footer>

		<!-- Modal -->
		<div class="modal fade z-index-medium" id="delete-warning-modal" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content w-100-p h-100-p">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title">Confirm Delete</h4>
					</div>

					<div class="modal-body">
						<p>You are about to delete one track, this procedure is irreversible.</p>
						<p>Do you want to proceed?</p>
					</div>

					<div class="modal-footer">
						<a class="btn btn-danger" id="delete-modal-yes" href="javascript:void(0)">Yes</a>
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
	</div>
	<!-- ./wrapper -->
	<!--ALL SCRIPT-->
	<script type="text/javascript">
		$.widget.bridge('uibutton', $.ui.button);
		var sessionDate = 'dd-mm-yyyy';
	</script>
	<script type="text/javascript">
		$(document).on('click', '.delete-warning', function (e) {
			e.preventDefault();
			var url = $(this).attr('href');
			$('#delete-modal-yes').attr('href', url)
			$('#delete-warning-modal').modal('show');
		});

		$(window).bind('load change', function () {
			var emailProtocol = $('#driver').val();
			var emailStatus = $('.email_status_check').val();
			if (emailProtocol == 'sendmail') {
				$('.host').css('display', 'none');
				$('.port').css('display', 'none');
				$('.from_address').css('display', 'none');
				$('.from_name').css('display', 'none');
				$('.encryption').css('display', 'none');
				$('.username').css('display', 'none');
				$('.password').css('display', 'none');
				$('.email_status').hide();
				$('.error_email_settings').hide();
			} else if (emailProtocol == 'smtp') {
				$('.host').css('display', 'block');
				$('.port').css('display', 'block');
				$('.from_address').css('display', 'block');
				$('.from_name').css('display', 'block');
				$('.encryption').css('display', 'block');
				$('.username').css('display', 'block');
				$('.password').css('display', 'block');
				if (emailStatus == 1) {
					$('.email_status').show();
					$('.error_email_settings').hide();
				} else {
					$('.error_email_settings').show();
					$('.email_status').hide();
				}
			} else {
				$('.email_status').hide();
				$('.error_email_settings').hide();
			}
		});
		$(".flash-container").fadeTo(20000, 500).slideUp(500, function () {
			$(".flash-container").slideUp(500);
		});
	</script>

	<script>
		Highcharts.chart('container', {
			chart: {
				type: 'spline',
				backgroundColor: '#212130',
			},
			title: {
				text: 'Sales of Past 12 Months'
			},
			subtitle: {
				text: 'Total Income USD 0.00 for 0 Nights'
			},
			xAxis: {
				categories: jQuery.parseJSON('{"11":"February","10":"January","9":"December","8":"November","7":"October","6":"September","5":"August","4":"July","3":"June","2":"May","1":"April","0":"March"}')
			},
			yAxis: {
				title: {
					text: 'Nights per Month'
				}
			},
			plotOptions: {
				line: {
					dataLabels: {
						enabled: true
					},
					enableMouseTracking: true
				}
			},
			legend: {
				itemStyle: {
					color: '#ed3615'
				},

				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle',
				borderWidth: 0,
				color: '#ed3615',
			}, // optional
			series: [{
				name: 'Nights',
				color: '#ed3615',
				data: jQuery.parseJSON('[0,0,0,0,0,0,0,0,0,0,0,0]') //[22.0, 4.9, 4.5, 54.5, 8.4, 11.5, 24.2, 21.5, 28.3, 28.3, 12.9, 3.6]
			}]
		});
	</script>

	<!--Script added-->
	<script src="./js/jquery-2.2.4.min.js"></script>
	<script src="./js/app.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/admin.js"></script>
	<script src="./js/backend.js"></script>
	<script src="./js/bootbox.min.js"></script>
	<script src="./js/bootstrap-datepicker.js"></script>
	<script src="./js/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="./js/common.js"></script>
	<script src="./js/custom.js"></script>
	<script src="./js/daterangecustom.js"></script>
	<script src="./js/daterangepicker.js"></script>
	<script src="./js/demo.js"></script>
	<script src="./js/element.js"></script>
	<script src="./js/exporting.js"></script>
	<script src="./js/fastclick.js"></script>
	<script src="./js/highcharts.js"></script>
	<script src="./js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="./js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="./js/jquery-ui.min.js"></script>
	<script src="./js/jquery.knob.js"></script>
	<script src="./js/jquery.slimscroll.min.js"></script>
	<script src="./js/jquery.sparkline.min.js"></script>
	<script src="./js/jquery.validate.min.js"></script>
	<script src="./js/locationpicker.jquery.min.js"></script>
	<script src="./js/moment.min.js"></script>
	<script src="./js/datepicker.js"></script>
	<script src="./js/date-range-picker.js"></script>
	<script src="./js/select-2.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

	<!-- This script used for select date range -->
	<script type="text/javascript">
		$.widget.bridge('uibutton', $.ui.button);
		var sessionDate = 'dd-mm-yyyy';
	</script>

	<!-- This script is used to select date in select -->
	<script type="text/javascript">

		$('.select2').select2({
			// minimumInputLength: 3,
			ajax: {
				url: 'bookings/customer_search',
				processResults: function (data) {
					$('#customer').val('DSD');
					return {
						results: data
					};
				}
			}

		});

		// Date Time range picker for filter

		$(function () {

			var startDate = $('#startDate').val();
			var endDate = $('#endDate').val();
			dateRangeBtn(startDate, endDate, dt = 1);
			formDate(startDate, endDate);

			$(document).ready(function () {
				$('#dataTableBuilder_length').after('<div id="exportArea" class="col-md-4 col-sm-4 "><div class="row mt-m-2"><div class="btn-group btn-margin"><a href="" title="CSV" id="csv">CSV</a><a href="" title="PDF" id="pdf">PDF</a></div><div class="btn btn-group btn-refresh"><a href="" id="tablereload" class="form-control"><span>Reset</span></a></div></div></div>');
			});
			//csv convert
			$(document).on("click", "#csv", function (event) {
				event.preventDefault();
				var status = $('#status').val();
				var customer = $('#customer').val();
				var to = $('#endDate').val();
				var from = $('#startDate').val();
				window.location = "customer/customer_list_csv?to=" + to + "&from=" + from + "&status=" + status + "&customer=" + customer;
			});

			//pdf convert
			$(document).on("click", "#pdf", function (event) {
				event.preventDefault();
				var status = $('#status').val();
				var customer = $('#customer').val();
				var to = $('#endDate').val();
				var from = $('#startDate').val();
				window.location = "customer/customer_list_pdf?to=" + to + "&from=" + from + "&status=" + status + "&customer=" + customer;
			});

			//reload Datatable
			$(document).on("click", "#tablereload", function (event) {
				event.preventDefault();
				$("#dataTableBuilder").DataTable().ajax.reload();
			});

			$('#dataTableBuilder_filter').prepend('<span style="color:#828690;font-size:13px;">Search by email</span>');


		});
	</script>


	<script type="text/javascript">

		function enableDisableButton() {
			if (!hasPhoneError && !hasEmailError) {
				$('form').find("button[type='button']").prop('disabled', false);
			} else {
				$('form').find("button[type='button']").prop('disabled', true);
			}
		}

		$(document).ready(function () {

			$('#add_pr').validate({
				rules: {
					map_address: {
						required: true
					},
					host_id: {
						required: true
					}
				}
			});

		}); 
	</script>

	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
	<script>
		let table = new DataTable('#myTable');
	</script>
</body>

</html>