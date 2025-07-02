<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Awesome | Dashboard - {{ session('Role') ?? '' }}</title>

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

        <!--start vertical Side Nav Bar-->
        @include('admin.layout.side-nav');
        <!--end vertical Side Nav Bar-->

        <!---============ END HEADER ============-->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper svdashboard" style="min-height: 783px;">
            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Start Footer Section -->
        @include('admin.layout.footer');
        <!-- End Footer Section -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
    </div>
    <!-- ./wrapper -->
    <script type="text/javascript">
    var APP_URL = "firstpointcreations.com";
    </script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
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
                '[0,0,0,0,0,0,0,0,0,0,0,0]') //[22.0, 4.9, 4.5, 54.5, 8.4, 11.5, 24.2, 21.5, 28.3, 28.3, 12.9, 3.6]
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


</body>

</html>