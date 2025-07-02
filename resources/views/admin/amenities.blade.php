<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Awesome | Dashboard - Amenities </title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!--Css Attached-->
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/blue.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/bootstrap3-wysihtml5.min.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/custom.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/datepicker3.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/glyphicon.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/jquery-jvectormap-1.2.2.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/m=el_main_css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/style2.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/_all-skins.css') }}">
    <link rel="stylesheet" href="{{asset('masster-admin-design/css/dataTables.bootstrap.css') }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />

    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>

    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/mycss.css') }}">


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
        <div class="content-wrapper" style="min-height: 783px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Amenities
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
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Amenities Management</h3>
                                <div class="pull-right"><a class="btn btn-primary"
                                        href="{{ route('admin.add-amenities') }}">Add
                                        Amenities</a>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div id="dataTableBuilder_wrapper" class="dataTables_wrapper no-footer">

                                        <div id="exportArea" class="col-md-4 col-sm-4">
                                            <div class="row mt-m-2" style="margin-top: 10px; margin-bottom: 20px">
                                                <div class="btn-group btn-margin">
                                                    <a href=" " title="CSV" id="csv">CSV</a>
                                                    <a href=" " title="PDF" id="pdf">PDF</a>
                                                </div>
                                            </div>
                                        </div>

                                        <table
                                            class="table table-striped table-hover dt-responsive dataTable no-footer dtr-inline"
                                            id="myTable" width="100%" cellspacing="0" role="grid"
                                            aria-describedby="dataTableBuilder_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th style="width: 34px;">S.No</th>
                                                    <th style="width: 253px;">Name</th>
                                                    <th style="width: 122px;">Description</th>
                                                    <th style="width: 122px;">icon</th>
                                                    <th style="width: 122px;">Amenities Type</th>
                                                    <th style="width: 122px;">Status</th>
                                                    <th style="width: 128px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($amenities->isNotEmpty())
                                                @php $count = 1; @endphp
                                                @foreach ($amenities as $amenitie )
                                                <tr role="row" class="odd">
                                                    <td>{{ $count++ }}</td>
                                                    <td>{{ $amenitie->name }}</td>
                                                    <td>{{ $amenitie->description }}</td>
                                                    <td>{{ $amenitie->icon }}</td>
                                                    <td>{{ $amenitie->category_id }}</td>
                                                    <td>{{ $amenitie->status }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.edit-amenities', $amenitie->id) }}"
                                                            class="btn btn-xs svbtn"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-xs svbtn delete-warning"
                                                            data-id="{{ $amenitie->id }}">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                        <form id="delete-form-{{ $amenitie->id }}"
                                                            action="{{ route('admin.delete-amenities', $amenitie->id) }}"
                                                            method="POST">

                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                        <p class="disabletxt"></p>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="10" style="text-align: center;">No Amenities Type
                                                        found.</td>
                                                </tr>
                                                @endif
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

    <!--ALL SCRIPT-->

    <script type="text/javascript">
    $(document).on('click', '.delete-warning', function(e) {
        e.preventDefault();
        let id = $(this).data('id'); // Get the amenity ID
        $('#delete-modal-yes').data('id', id); // Store ID in the modal confirm button
        $('#delete-warning-modal').modal('show');
    });

    $(document).on('click', '#delete-modal-yes', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        $('#delete-form-' + id).submit(); // Submit the delete form
    });
    </script>

    <!--Script added-->
    <script src="{{asset('masster-admin-design/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/app.min.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/admin.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/backend.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/bootbox.min.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/common.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/custom.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/daterangecustom.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/daterangepicker.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/demo.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/element.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/exporting.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/fastclick.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/highcharts.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/jquery-ui.min.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/jquery.knob.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/jquery.validate.min.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/locationpicker.jquery.min.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/moment.min.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/datepicker.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/date-range-picker.js') }}"></script>
    <script src="{{asset('masster-admin-design/js/select-2.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->



    <!-- This script is used to select date in select -->
    <script type="text/javascript">
    //csv convert
    $(document).on("click", "#csv", function(event) {
        event.preventDefault();
        var status = $('#status').val();
        var customer = $('#customer').val();
        var to = $('#endDate').val();
        var from = $('#startDate').val();
        window.location = "customer/customer_list_csv?to=" + to + "&from=" + from + "&status=" +
            status + "&customer=" + customer;
    });

    //pdf convert
    $(document).on("click", "#pdf", function(event) {
        event.preventDefault();
        var status = $('#status').val();
        var customer = $('#customer').val();
        var to = $('#endDate').val();
        var from = $('#startDate').val();
        window.location = "customer/customer_list_pdf?to=" + to + "&from=" + from + "&status=" +
            status + "&customer=" + customer;
    });
    </script>


    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script>
    let table = new DataTable('#myTable');
    </script>

</body>

</html>