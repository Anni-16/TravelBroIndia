<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Travel Bro India | Dashboard - Add Listing Description </title>

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
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/glyphicon.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/jquery-jvectormap-1.2.2.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/m=el_main_css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/_all-skins.css') }}">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/dataTables.bootstrap.css') }}">

    <!--font-awesome-cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="skin-blue sidebar-mini" style="position: relative; min-height: 100%; top: 0px;" data-new-gr-c-s-check-loaded="14.1223.0" data-gr-ext-installed="" data-new-gr-c-s-loaded="14.1223.0">
    <div class="wrapper">
        <!---============ START HEADER ============-->

        <!--start-top-header-->
        @include('admin.layout.nav-top');
        <!--end-top-header-->

        <!--start vertical slider-->
        @include('admin.layout.side-nav');

        <!--end vertical slider-->

        <!---============ END HEADER ============-->
        <div class="content-wrapper sv_content_wrapper" style="min-height: 783px;">
            <!-- Main content -->
            <section class="content-header">
                <h1>List Your Space</h1>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box box-info box_info">
                            <div class="panel-body">
                                <h4 class="all_settings">Property Settings</h4>
                                <ul class="nav navbar-pills nav-tabs nav-stacked no-margin" role="tablist">
                                    <li><a style="cursor:not-allowed;">Basics</a></li>
                                    <li class="active"><a href="{{ route('admin.add-list-description') }}">Description</a></li>
                                    <li><a style="cursor:not-allowed;">Location</a></li>
                                    <li><a style="cursor:not-allowed;">Amenities</a></li>
                                    <li><a style="cursor:not-allowed;">Photos</a></li>
                                    <li><a style="cursor:not-allowed;"> Pricing</a></li>
                                    <li><a style="cursor:not-allowed;">Policies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">

                        <form method="post" action="{{ route('admin.add-list-location') }}" class="signup-form login-form" id="three-form">
                            @csrf

                            <input type="hidden" name="user_id" value="{{ $userId }}">
                            <input type="hidden" name="hotel_id" value="{{ $hotelId }}">
                            
                            <div class="box box-info">
                                <div class="box-body mt-0">
                                    <div class="row" style="padding-bottom: 20px;">
                                        <div class="col-md-12">
                                            <h4>Description</h4>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                        <label class="label-large">Property Type <span class="text-danger">*</span></label>
                                        <select name="property_type" id="property_type" class="form-control select2">
                                            <option value="">-- Select Property Type --</option>
                                            @foreach($propertyType as $type)
                                            <option value="{{ $type->id }}" {{ old('property_type') == $type->id ? 'selected' : '' }}>
                                                {{ $type->name }}
                                            </option>
                                            @endforeach
                                        </select>

                                        @error('property_type')
                                        <p class="invalid-feedback text-red">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                        <label class="label-large">Room Type <span class="text-danger">*</span></label>
                                        <select name="room_type" id="room_type" class="form-control select2">
                                            <option value="">-- Select Room Type --</option>
                                            @foreach($roomType as $types)
                                            <option value="{{ $types->id }}" {{ old('room_type') == $types->id ? 'selected' : '' }}>
                                                {{ $types->name }}
                                            </option>
                                            @endforeach
                                        </select>

                                        @error('room_type')
                                        <p class="invalid-feedback text-red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                        <label class="label-large">Max Guests <span class="text-danger">*</span></label>
                                        <input type="text" name="max_guests" class="@error('max_guests') is-invalid
                                        @enderror form-control" placeholder="Enter Max Guests In one Room" id="guests" value="{{ old('max_guests') }}" />
                                        @error('max_guests')
                                        <p class="invalid-feedback text-red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                        <label class="label-large">Room Sq. ft. <span class="text-danger">*</span></label>
                                        <input type="text" name="room_sq_ft" class="@error('room_sq_ft') is-invalid
                                        @enderror form-control" placeholder="Enter Your Room Sq. Ft. Area" id="rooms" value="{{ old('room_sq_ft') }}" />
                                        @error('room_sq_ft')
                                        <p class="invalid-feedback text-red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- <div class="col-lg-12">
                                        <div class="col-md-12">
                                            <label class="label-large">Bedrooms</label>
                                            <select name="bedrooms" id="basics-select-bedrooms" data-saving="basics1" class="form-control">
                                                <option value="1" selected="">
                                                    1
                                                </option>
                                                <option value="2">
                                                    2
                                                </option>
                                                <option value="3">
                                                    3
                                                </option>
                                                <option value="4">
                                                    4
                                                </option>
                                                <option value="5">
                                                    5
                                                </option>
                                                <option value="6">
                                                    6
                                                </option>
                                                <option value="7">
                                                    7
                                                </option>
                                                <option value="8">
                                                    8
                                                </option>
                                                <option value="9">
                                                    9
                                                </option>
                                                <option value="10">
                                                    10
                                                </option>

                                            </select>
                                        </div>


                                        <div style="clear:both;" class="mt-5"></div>

                                        <div id="main" class="col-md-12 mt-5 mb-5">
                                            <div class="col-md-12 border-bottom p-3" id="room-1">
                                                <div class="col-md-12 font-weight-700 svbedroom_count">Bedroom 1</div>
                                                <div class="total_beds pl-4" id="total-beds-1">
                                                    <p class="sv_bedname" style="visibility: hidden;">king</p>
                                                    <p class="sv_bedtype_number"> </p>
                                                    <p class="sv_bedname" style="visibility: hidden;">Queen</p>
                                                    <p class="sv_bedtype_number"> </p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="row sub_div" id="sub-div-1" style="display:none">
                                                            <div class="col-md-6">
                                                                <div class="col-sm-12">
                                                                    <div class="mt-2 pl-0">
                                                                        <div class="form-group row pl-0">
                                                                            <div class="col-md-4 p-0">
                                                                                <p class="bedname">king</p>
                                                                            </div>
                                                                            <div class="col-md-8 p-0">
                                                                                <input type="hidden" id="bedname" value="King">
                                                                                <input type="hidden" id="fid" name="fid[]" value="91">
                                                                                <input type="hidden" id="bedroom_no" name="bedroom_type[]" value="1">
                                                                                <input type="hidden" id="bedid" name="sv_bed_name[]" value="1">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="sv_bed_count_91" id="king" value="1">
                                                                                    <label class="form-check-label" for="bedtype_yes_91">Yes</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="sv_bed_count_91" id="king" value="0" checked>
                                                                                    <label class="form-check-label" for="bedtype_no_91">No</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="col-sm-12">
                                                                    <div class="mt-2 pl-0">
                                                                        <div class="form-group row pl-0">
                                                                            <div class="col-md-4 p-0">
                                                                                <p class="bedname">Queen</p>
                                                                            </div>
                                                                            <div class="col-md-8 p-0">
                                                                                <input type="hidden" id="bedname" value="Queen">
                                                                                <input type="hidden" id="fid" name="fid[]" value="92">
                                                                                <input type="hidden" id="bedroom_no" name="bedroom_type[]" value="1">
                                                                                <input type="hidden" id="bedid" name="sv_bed_name[]" value="2">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="sv_bed_count_92" id="queen" value="1">
                                                                                    <label class="form-check-label" for="bedtype_yes_92">Yes</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="sv_bed_count_92" id="queen" value="0" checked>
                                                                                    <label class="form-check-label" for="bedtype_no_92">No</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 changeid">
                                                        <div id="edit-beds-1" data-id="1" class="edit_beds btn btn-danger text-14">Edit Beds</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div> -->

                                    <br>
                                    <div class="col-lg-12 mt-2">
                                        <div class="form-btn text-right">
                                            <input type="button" class="btn btn-secondary" id="back" value="Back" /> &nbsp;&nbsp;
                                            <input type="submit" class="btn btn-primary" value="Next" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </section>
        </div>


        @include('admin.layout.footer')

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
    <script src="{{ asset('masster-admin-design/js/hotel-form.js') }}"></script>

    <!-- JavaScript Validation -->
    <script>
        document.getElementById('three-form').addEventListener('submit', function(e) {
            e.preventDefault();
            let isValid = true;
            if (isValid) {
                this.submit();
            }
        });

        // Back button redirect
        document.getElementById('back').addEventListener('click', function() {
            window.location.href = "{{ route('admin.add-list-basic') }}";
        });
    </script>
</body>

</html>