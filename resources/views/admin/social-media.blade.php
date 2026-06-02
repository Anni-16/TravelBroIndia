<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Bro India | Dashboard - Manage Soical Media Link</title>

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
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/mycss.css') }}">

    <!--font-awesome-cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>


<body class="skin-blue sidebar-mini" style="position: relative; min-height: 100%; top: 0px;" data-new-gr-c-s-check-loaded="14.1223.0" data-gr-ext-installed="">
    <div class="wrapper">
        <!---============ START HEADER ============-->

        <!--start-top-header-->
        @include('admin.layout.nav-top');
        <!--end-top-header-->

        <!--start vertical slider-->
        @include('admin.layout.side-nav');

        <!--end vertical slider-->

        <!---============ END HEADER ============-->
        <div class="content-wrapper" style="min-height: 783px;">
            <section class="content">
                <section class="content-header">
                    <h1>Social Media Links Manage</h1>
                </section>
                <section class="content">
                    @if(session()->has('success'))
                    <div class="col-md-10">
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    </div>
                    @endif
                    <div class="row">

                        <div class="col-md-9">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Social Media Links Form</h3>
                                </div>

                                <form id="social_setting" method="post" action="{{ route('admin.social-media') }}" class="form-horizontal">
                                    @csrf
                                    <div class="box-body">

                                        <div class="form-group facebook">
                                            <label class="col-sm-3 control-label">Facebook</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="facebook" class="form-control" value="{{ $socials['facebook'] ?? '' }}" placeholder="Facebook">
                                            </div>
                                        </div>

                                        <div class="form-group twitter">
                                            <label class="col-sm-3 control-label">Twitter</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="twitter" class="form-control" value="{{ $socials['twitter'] ?? '' }}" placeholder="Twitter">
                                            </div>
                                        </div>

                                        <div class="form-group linkedin">
                                            <label class="col-sm-3 control-label">Linkedin</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="linkedin" class="form-control" value="{{ $socials['linkedin'] ?? '' }}" placeholder="Linkedin">
                                            </div>
                                        </div>

                                        <div class="form-group pinterest">
                                            <label class="col-sm-3 control-label">Pinterest</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="pinterest" class="form-control" value="{{ $socials['pinterest'] ?? '' }}" placeholder="Pinterest">
                                            </div>
                                        </div>

                                        <div class="form-group youtube">
                                            <label class="col-sm-3 control-label">Youtube</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="youtube" class="form-control" value="{{ $socials['youtube'] ?? '' }}" placeholder="Youtube">
                                            </div>
                                        </div>

                                        <div class="form-group instagram">
                                            <label class="col-sm-3 control-label">Instagram</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="instagram" class="form-control" value="{{ $socials['instagram'] ?? '' }}" placeholder="Instagram">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary btn-space">Submit</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>

        <!-- Start Footer Section -->
        @include('admin.layout.footer');
        <!-- End Footer Section -->
    </div>

    <!--Script added-->
    <script src="{{ asset('masster-admin-design/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/app.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/admin.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/backend.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/bootbox.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/custom.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/demo.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/element.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery.knob.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/moment.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/select-2.js') }}"></script>
 
</body>

</html>