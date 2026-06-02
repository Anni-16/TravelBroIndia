<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel Bro India | Dashboard - Manage Listing </title>

	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('front-end/assets/img/Travel-bro1.png') }}">

	<!--Css Attached-->
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/blue.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/bootstrap3-wysihtml5.min.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/AdminLTE.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/datepicker3.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/daterangepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/glyphicon.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/intlTelInput.css') }}">
	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/ionicons.min.css') }}">
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

	<link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />

	<link rel="stylesheet" href="{{ asset('masster-admin-design/css/mycss.css') }}">

	<!--font-awesome-cdn-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!--Css Attached-->
</head>


<body class="skin-blue sidebar-mini" data-new-gr-c-s-check-loaded="14.1223.0" data-gr-ext-installed="" style="position: relative; min-height: 100%; top: 0px;">
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
		<div class="content-wrapper" style="min-height: 783px;">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Properties

				</h1>
			</section>

			<!-- Main content -->
			<section class="content">
				@if(session()->has('success'))
				<div class="col-md-10">
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				</div>
				@endif
				<!--Filtering Box Start -->
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-body">
								<form class="form-horizontal" enctype="multipart/form-data" action="firstpointcreations.com/admin/properties" method="GET" accept-charset="UTF-8">
									<input type="hidden" name="_token" value="5CAXtj51mgt7FnmPZ4hxGHkrJywL401895qUnutw">

									<div class="co;-md-12  d-none">
										<input class="form-control" type="text" id="startDate" name="from" value="18-02-2025" hidden="">
										<input class="form-control" type="text" id="endDate" name="to" value="18-02-2025" hidden="">
									</div>

									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="col-md-3 col-sm-3 col-xs-12">
													<label>Date Range</label>
													<div class="input-group col-xs-12">
														<button type="button" class="form-control" id="daterange-btn">
															<span class="pull-left">18-2-2025-18-2-2025</span>
															<i class="fa fa-caret-down pull-right"></i>
														</button>
													</div>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<label>Status</label>
													<select class="form-control" name="status" id="status">
														<option value="">All</option>
														<option value="Listed">Listed</option>
														<option value="Unlisted">Unlisted</option>
													</select>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<label>Space Type</label>
													<select class="form-control" name="space_type" id="space_type">
														<option value="">All</option>

														<option value="1">Entire home/apt</option>
														<option value="2">Private room</option>
														<option value="3">Shared room</option>
														<option value="4">Unique stays</option>
														<option value="5">single room</option>

													</select>
												</div>
												<div class="col-md-1 col-sm-2 col-xs-4 mt-5">
													<br>
													<button type="submit" name="btn" class="btn btn-primary">Filter</button>
												</div>

											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--Filtering Box End -->
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Properties Management</h3>
								<div class="pull-right"><a class="btn btn-primary" href="{{ route('admin.add-list-basic') }}">Add
										Properties</a></div>
							</div>

							<!-- /.box-header -->
							<div class="box-body">
								<div class="table-responsive">
									<div id="dataTableBuilder_wrapper" class="dataTables_wrapper no-footer">

										<!-- <div id="exportArea" class="col-md-4 col-sm-4">
											<div class="row mt-m-2" style="margin-top: 10px; margin-bottom: 20px">
												<div class="btn-group btn-margin"><a href=" " title="CSV" id="csv">CSV</a><a href=" " title="PDF" id="pdf">PDF</a></div>

											</div>
										</div> -->

										<table class="table table-striped table-hover dt-responsive dataTable no-footer dtr-inline" id="myTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTableBuilder_info" style="width: 100%;">
											<thead>
												<tr role="row">
													<th style="width: 34px;">Id</th>
													<th style="width: 253px;">Hotel Name</th>
													<th style="width: 253px;">Hotel Id</th>
													<th style="width: 116px;">User/Host
														Name</th>
													<th style="width: 122px;">Property
														Type</th>
													<th style="width: 75px;">Status
													</th>
													<th style="width: 139px;">
														Admin Status</th>
													<th style="width: 128px;">
														Approval</th>
													<th style="width: 149px;">Date</th>
													<th style="width: 128px;">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr role="row" class="odd">
													<td>74</td>
													<td><a href="">Private room in Thailand</a></td>
													<td><a href="">HOTEL0016</a></td>
													<td><a href=" ">Susana</a></td>
													<td>Private room</td>
													<td>Listed</td>
													<td><span class="text-danger">Disapproved</span></td>
													<td><a href="javascript:void(0);" style="color:#fff" class="btn btn-xs btn-success btndisable">Approve</a>
														<p class="disabletxt"></p>&nbsp;
													</td>
													<td>11-07-2023 7:16 AM</td>
													<td>
														<a href="" class="btn btn-xs svbtn  "><i class="fa fa-eye"></i></a>
														<a href="list-space.html" class="btn btn-xs svbtn"><i class="fa fa-pencil"></i></a>
														<a href=" " class="btn btn-xs svbtn"><i class="fa fa-trash"></i>
														</a>
														<p class="disabletxt"></p>
													</td>
												</tr>
											</tbody>
										</table>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!-- Start Footer Section -->
		@include('admin.layout.footer');
		<!-- End Footer Section -->
	</div>
	<!-- ./wrapper -->


	<!--ALL SCRIPT-->
	<script type="text/javascript">
		$.widget.bridge('uibutton', $.ui.button);
		var sessionDate = 'dd-mm-yyyy';
	</script>
	<script type="text/javascript">
		$(document).on('click', '.delete-warning', function(e) {
			e.preventDefault();
			var url = $(this).attr('href');
			$('#delete-modal-yes').attr('href', url)
			$('#delete-warning-modal').modal('show');
		});

		$(window).bind('load change', function() {
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
		$(".flash-container").fadeTo(20000, 500).slideUp(500, function() {
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
	<script src="{{ asset('masster-admin-design/js/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/app.min.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/admin.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/backend.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/bootbox.min.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/bootstrap3-wysihtml5.all.min.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/common.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/custom.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/daterangecustom.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/daterangepicker.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/demo.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/element.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/exporting.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/fastclick.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/highcharts.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/jquery.knob.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/locationpicker.jquery.min.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/moment.min.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/datepicker.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/date-range-picker.js') }}"></script>
	<script src="{{ asset('masster-admin-design/js/select-2.js') }}"></script>
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
				processResults: function(data) {
					$('#customer').val('DSD');
					return {
						results: data
					};
				}
			}

		});

		// Date Time range picker for filter

		$(function() {

			var startDate = $('#startDate').val();
			var endDate = $('#endDate').val();
			dateRangeBtn(startDate, endDate, dt = 1);
			formDate(startDate, endDate);

			$(document).ready(function() {
				$('#dataTableBuilder_length').after('<div id="exportArea" class="col-md-4 col-sm-4 "><div class="row mt-m-2"><div class="btn-group btn-margin"><a href="" title="CSV" id="csv">CSV</a><a href="" title="PDF" id="pdf">PDF</a></div><div class="btn btn-group btn-refresh"><a href="" id="tablereload" class="form-control"><span>Reset</span></a></div></div></div>');
			});
			//csv convert
			$(document).on("click", "#csv", function(event) {
				event.preventDefault();
				var status = $('#status').val();
				var customer = $('#customer').val();
				var to = $('#endDate').val();
				var from = $('#startDate').val();
				window.location = "customer/customer_list_csv?to=" + to + "&from=" + from + "&status=" + status + "&customer=" + customer;
			});

			//pdf convert
			$(document).on("click", "#pdf", function(event) {
				event.preventDefault();
				var status = $('#status').val();
				var customer = $('#customer').val();
				var to = $('#endDate').val();
				var from = $('#startDate').val();
				window.location = "customer/customer_list_pdf?to=" + to + "&from=" + from + "&status=" + status + "&customer=" + customer;
			});

			//reload Datatable
			$(document).on("click", "#tablereload", function(event) {
				event.preventDefault();
				$("#dataTableBuilder").DataTable().ajax.reload();
			});

			$('#dataTableBuilder_filter').prepend('<span style="color:#828690;font-size:13px;">Search by email</span>');


		});
	</script>

	<!-- This used for datatable jquery -->
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
	<script>
		let table = new DataTable('#myTable');
	</script>

</body>

</html>