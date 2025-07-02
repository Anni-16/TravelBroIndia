<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Awesome | Dashboard - Edit Amenities</title>

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
                    <!-- right column -->
                    <div class="col-md-12">
                        <!-- Horizontal Form -->
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit Amenitie</h3>
                            </div>
                            <!-- form start -->
                            <form class="form-horizontal" action="{{ route('admin.edit-amenities', $amenities->id) }}"
                                id="add_amen" method="post" name="add_amen" accept-charset="UTF-8"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Name<span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="@error('name') is-invalid @enderror
                                             form-control" value="{{ old('name', $amenities->name ) }}" name="name"
                                                placeholder="" id="title">
                                            @error('name')
                                            <p class="invalid-feedback text-white">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Description<span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <textarea id="description" name="description" rows="10" cols="50"
                                                class="@error('description') is-invalid @enderror
                                                form-control">{{ old('description', $amenities->description ) }}</textarea>
                                            @error('description')
                                            <p class="invalid-feedback text-white">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Symbol<span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <div class="input-group ">
                                                <input class="@error('icon') is-invalid @enderror
                                                 form-control" name="icon" value="{{ old('icon', $amenities->icon ) }}"
                                                    type="text">
                                                @error('icon')
                                                <p class="invalid-feedback text-white">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="control-label col-sm-3">Type</label>
                                        <div class="col-sm-6">
                                            <select name="amenities_type_id" class="form-control" id="type_id"
                                                required="">
                                                <option value="1" {{ old('amenities_type_id', $amenities->amenities_type_id ?? '') == '1' ? 'selected' : '' }}> Common Amenities</option>
                                                <option value="2" {{ old('amenities_type_id', $amenities->amenities_type_id ?? '') == '1' ? 'selected' : '' }}> Safety Amenities</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="" class="control-label col-sm-3">Status</label>
                                        <div class="col-sm-6">
                                            <select name="status" class="form-control" id="sv_en_lang_status">
                                                <option value="Active" {{ old('status', $amenities->status ?? '') == 'Active' ? 'selected' : '' }}> Active </option>
                                                <option value="Inactive" {{ old('status', $amenities->status ?? '') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info" id="submitBtn">Submit</button>
                                    <a href="{{ route('admin.amenities') }}" class="btn btn-danger btn-sm">
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
        @inculde('admin.layout.footer');
        <!-- End Footer Section -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
    </div>

    <!--ALL SCRIPT-->

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

    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script>
    let table = new DataTable('#myTable');
    </script>
</body>

</html>