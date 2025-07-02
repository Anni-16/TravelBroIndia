<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Awesome | Dashboard - Manage user</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

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

    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css') }}" />

    <script src="{{ asset('https://cdn.datatables.net/2.2.2/js/dataTables.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/mycss.css') }}">

    <!--font-awesome-cdn-->
    <link rel="stylesheet"
        href="{{  asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css') }}"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--ion icons-->
    <link rel="stylesheet"
        href="{{  asset('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') }}"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('https://cdn.jsdelivr.net/npm/glyphicons-halflings@1.9.1/css/glyphicons-halflings.min.css') }}"
        rel="stylesheet">

    <!--Css Attached-->
</head>


<body class="skin-blue sidebar-mini" style="position: relative; min-height: 100%; top: 0px;"
    data-new-gr-c-s-check-loaded="14.1223.0" data-gr-ext-installed="">
    <div class="wrapper">
        <!---============ START HEADER ============-->

        <!--start-top-header-->
        @include('admin.layout.nav-top');
        <!--end-top-header-->

        <!--start vertical slider-->
        @include('admin.layout.side-nav');

        <!--end vertical slider-->

        <!---============ END HEADER ============-->

        <div class="content-wrapper" style="min-height: 759px;">
            <section class="content-header">
                <h1>Customers</h1>
            </section>
            <style>
            div.dataTables_filter label input {
                font-size: 14px;
            }

            div.dataTables_filter label {
                font-size: 0;
            }
            </style>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form class="form-horizontal" enctype="multipart/form-data" action=" " method="GET"
                                    accept-charset="UTF-8">
                                    <input type="hidden" name="_token" value="5CAXtj51mgt7FnmPZ4hxGHkrJywL401895qUnutw">
                                    <div class="co;-md-12  d-none">
                                        <input class="form-control" type="text" id="startDate" name="from" value=""
                                            hidden="">
                                        <input class="form-control" type="text" id="endDate" name="to" value=""
                                            hidden="">
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                    <label>Date Range</label>
                                                    <div class="input-group col-xs-12">
                                                        <button type="button" class="form-control" id="daterange-btn">
                                                            <span class="pull-left">Anytime</span>
                                                            <i class="fa fa-caret-down pull-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status" id="status">
                                                        <option value="">All</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                    <label>Customer</label>
                                                    <select class="form-control select2 select2-hidden-accessible"
                                                        name="customer" id="customer" tabindex="-1" aria-hidden="true">
                                                        <option value="">All</option>
                                                    </select>

                                                </div>
                                                <div class="col-md-1 col-sm-2 col-xs-4 mt-5">
                                                    <br>
                                                    <button type="submit" name="btn"
                                                        class="btn btn-primary">Filter</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


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
                                <h3 class="box-title">Customers Management</h3>
                                <div class="pull-right"><a class="btn btn-primary"
                                        href="{{ route('admin.add-customer') }}">Add
                                        Customer</a>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="table-responsive">
                                    <div id="dataTableBuilder_wrapper" class="dataTables_wrapper no-footer">
                                        <div id="exportArea" class="col-md-4 col-sm-4 ">
                                            <div class="row mt-m-2" style="margin-top: 10px; margin-bottom: 20px;">
                                                <div class="btn-group btn-margin"><a href=" " title="CSV"
                                                        id="csv">CSV</a><a href=" " title="PDF" id="pdf">PDF</a>
                                                </div>

                                            </div>
                                        </div>


                                        <table
                                            class="table table-hover dt-responsive svusertable dataTable no-footer dtr-inline"
                                            id="myTable" width="100%" cellspacing="0" role="grid"
                                            aria-describedby="dataTableBuilder_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_desc" tabindex="0"
                                                        aria-controls="dataTableBuilder" rowspan="1" colspan="1"
                                                        style="text-align: left;">S.NO</th>
                                                    <th class="sorting_desc" tabindex="0"
                                                        aria-controls="dataTableBuilder" rowspan="1" colspan="1"
                                                        style="text-align: left;">User ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTableBuilder"
                                                        rowspan="1" colspan="1" style="width: 80px;"
                                                        aria-label="First Name: activate to sort column ascending">
                                                        Photo
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTableBuilder"
                                                        rowspan="1" colspan="1" style="width: 133px;"
                                                        aria-label="First Name: activate to sort column ascending">
                                                        Full
                                                        Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTableBuilder"
                                                        rowspan="1" colspan="1" style="width: 122px;"
                                                        aria-label="Phone: activate to sort column ascending">Phone
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTableBuilder"
                                                        rowspan="1" colspan="1" style="width: 202px;"
                                                        aria-label="Email: activate to sort column ascending">Email
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTableBuilder"
                                                        rowspan="1" colspan="1" style="width: 202px;"
                                                        aria-label="Role: activate to sort column ascending">Role
                                                    </th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 90px;" aria-label="Status">Status
                                                    </th>
                                                    <th title="Created At" class="sorting" tabindex="0"
                                                        aria-controls="dataTableBuilder" rowspan="1" colspan="1"
                                                        style="width: 179px;"
                                                        aria-label="Created At: activate to sort column ascending">
                                                        Created At</th>
                                                    <th title="Action" class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 90px;" aria-label="Action">Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($users->isNotEmpty())
                                                @php $count = 1; @endphp
                                                @foreach ($users as $user )

                                                <tr role="row" class="odd">
                                                    <td style="text-align: left;">{{ $count++ }}</td>
                                                    <td style="text-align: left;">{{ $user->user_id }}</td>
                                                    <td>
                                                        @if($user->image != "")
                                                        <img src="{{ asset('Uploads/user/'.$user->image) }}"
                                                            alt="{{ $user->user_id }}" style="width: 40px;">
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->firstname . ' ' . $user->lastname }}</td>
                                                    <td><a href="tel:+91{{ $user->phone }}">+91 {{ $user->phone }} </td>
                                                    <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                                    <td>{{ $user->role }}</td>
                                                    <td>{{ $user->status }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d-M-Y') }}
                                                    </td>
                                                    <td>
                                                        <!-- <a href="" class="btn btn-xs svbtn  "><i class="fa fa-eye"></i></a> -->
                                                        <a href="{{ route('admin.edit-customer', $user->id) }}"
                                                            class="btn btn-xs svbtn"><i class="fa fa-pencil"></i></a>

                                                        <a href="#" class="btn btn-xs svbtn delete-warning"
                                                            data-id="{{ $user->id }}">
                                                            <i class="fa fa-trash"></i>
                                                        </a>

                                                        <form id="delete-form-{{ $user->id }}"
                                                            action="{{ route('admin.delete-customer', $user->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                        </form>

                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="10" style="text-align: center;">No users found.</td>
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
            categories: jQuery.parseJSON(
                '{"11":"February","10":"January","9":"December","8":"November","7":"October","6":"September","5":"August","4":"July","3":"June","2":"May","1":"April","0":"March"}'
            )
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
            data: jQuery.parseJSON(
                '[0,0,0,0,0,0,0,0,0,0,0,0]'
            ) //[22.0, 4.9, 4.5, 54.5, 8.4, 11.5, 24.2, 21.5, 28.3, 28.3, 12.9, 3.6]
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
            $('#dataTableBuilder_length').after(
                '<div id="exportArea" class="col-md-4 col-sm-4 "><div class="row mt-m-2"><div class="btn-group btn-margin"><a href="" title="CSV" id="csv">CSV</a><a href="" title="PDF" id="pdf">PDF</a></div><div class="btn btn-group btn-refresh"><a href="" id="tablereload" class="form-control"><span>Reset</span></a></div></div></div>'
            );
        });
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

        //reload Datatable
        $(document).on("click", "#tablereload", function(event) {
            event.preventDefault();
            $("#dataTableBuilder").DataTable().ajax.reload();
        });

        $('#dataTableBuilder_filter').prepend(
            '<span style="color:#828690;font-size:13px;">Search by email</span>');


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

    $(document).ready(function() {

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

    <script src="{{ asset('https://cdn.datatables.net/2.2.2/js/dataTables.js') }}"></script>
    <script>
    let table = new DataTable('#myTable');
    </script>


</body>

</html>