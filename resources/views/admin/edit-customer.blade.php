<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Awesome | Dashboard - Edit Customers</title>

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

    <!--font-awesome-cdn-->
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css') }}"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--ion icons-->
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') }}"
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
                <h1>Edit Customer</h1>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <form class="svform" action="{{ route('admin.edit-customer',$users->id) }}"
                                id="add_customer" method="post" enctype="multipart/form-data" name="add-customer"
                                accept-charset="UTF-8" novalidate="novalidate">
                                @method('put')
                                @csrf
                                <div class="box-body">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">First
                                            Name <span class="text-danger"> *</span></label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                class="@error('firstname') is-invalid @enderror form-control"
                                                name="firstname" id="first_name"
                                                value="{{ old('firstname', $users->firstname) }}"
                                                placeholder="First Name">
                                            @error('firstname')
                                            <p class="invalid-feedback text-white">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">Last Name
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="lastname"
                                                value="{{ old('lastname', $users->lastname) }}" id="last_name"
                                                placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="col-sm-3 control-label">Image <span
                                                class="text-danger"> *</span> </label>

                                        <div class="col-sm-6">
                                            <input type="file" name="image" class="form-control" id="photo"
                                                placeholder="Choose Image">
                                            <span class="text-danger"></span>

                                            @if($users->image != "")
                                            <img src="{{ asset('Uploads/user/'.$users->image) }}"
                                                alt="{{ $users->user_id }}" style="width: 80px; margin-top:10px ;">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">Email <span
                                                class="text-danger"> *</span></label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                class="@error('email') is-invalid @enderror form-control error"
                                                name="email" id="email" value="{{ old('email' , $users->email )}}"
                                                placeholder="exaple@gmail.com">
                                            <div id="emailError"></div>
                                            @error('email')
                                            <p class="invalid-feedback text-white">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">Phone <span
                                                class="text-danger"> *</span></label>
                                        <div class="col-sm-8">
                                            <div class="intl-tel-input allow-dropdown separate-dial-code iti-sdc-2">
                                                <div class="flag-container">
                                                    <div class="selected-flag" role="combobox"
                                                        aria-owns="country-listbox" tabindex="0"
                                                        title="United States: +1">
                                                        <img src="{{ asset('masster-admin-design/images/flag.png') }}"
                                                            alt="" width="20px"
                                                            style="padding: 0; display: flex; padding-top: 5px;">
                                                        <div class="selected-dial-code" style="padding-left: 0;">
                                                            <span> +91</span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <input type="tel"
                                                    class="@error('phone') is-invalid @enderror form-control" id="phone"
                                                    name="phone" autocomplete="off"
                                                    value="{{ old('phone', $users->phone) }}" placeholder="882245-8954">
                                            </div>
                                            @error('phone')
                                            <p class="invalid-feedback text-white">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">Password <span
                                                class="text-danger"> *</span></label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="password">
                                        </div>
                                        <div class="col-sm-4">
                                            <span>Enter new password only. Leave blank to use existing password.
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">Role <span
                                                class="text-danger"> *</span></label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="role" id="role">
                                                <option value="select Role">Select Role</option>
                                                <option value="Vendor"
                                                    {{ old('role', $users->role ?? '') == 'Vendor' ? 'selected' : '' }}>
                                                    Vendor</option>
                                                <option value="Customer"
                                                    {{ old('role', $users->role ?? '') == 'Customer' ? 'selected' : '' }}>
                                                    Customer</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputPassword1" class="control-label col-sm-3">Status</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="status" id="status">
                                                <option value="Active"
                                                    {{ old('status', $users->status ?? '') == 'Active' ? 'selected' : '' }}>
                                                    Active</option>
                                                <option value="Inactive"
                                                    {{ old('status', $users->status ?? '') == 'Inactive' ? 'selected' : '' }}>
                                                    Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary" name="submit"
                                        id="submitBtn">Update</button>
                                    <a href="{{ route('admin.manage-user') }}" class="btn btn-default">Back</a>
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


</body>

</html>