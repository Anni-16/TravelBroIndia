<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Travel Bro India | Dashboard - Add Listing Photos Details </title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('front-end/assets/img/Travel-bro1.png') }}">

    <!--Css Attached-->
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/blue.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/bootstrap3-wysihtml5.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/AdminLTE.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/glyphicon.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/intlTelInput.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/jquery-jvectormap-1.2.2.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/jquery.dataTables.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/m=el_main_css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/style2.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/_all-skins.css') }}" />
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/dataTables.bootstrap.css') }}" />

    <!--font-awesome-cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        /* Star Form Input Field */

        .rating {
            border: none;
            float: left;
            width: 200px;
        }

        .rating>label {
            color: #90a0a3;
            float: right;
        }

        .rating>label:before {
            margin: 5px;
            font-size: 2em;
            font-family: FontAwesome;
            content: "\f005";
            display: inline-block;
        }

        .rating>input {
            display: none;
        }

        .rating>input:checked~label,
        .rating:not(:checked)>label:hover,
        .rating:not(:checked)>label:hover~label {
            color: #f79426;
        }

        .rating>input:checked+label:hover,
        .rating>input:checked~label:hover,
        .rating>label:hover~input:checked~label,
        .rating>input:checked~label:hover~label {
            color: #fece31;
        }
    </style>
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
                                    <li><a style="cursor:not-allowed;">Description</a></li>
                                    <li><a style="cursor:not-allowed;">Location</a></li>
                                    <li><a style="cursor:not-allowed;">Amenities</a></li>
                                    <li class="active"><a href="{{ route('admin.add-list-photos') }}">Photos</a></li>
                                    <li><a style="cursor:not-allowed;"> Pricing</a></li>
                                    <li><a style="cursor:not-allowed;">Policies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @if(session()->has('success'))
                        <div class="col-md-10">
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        </div>
                        @endif
                        <form method="post" action="{{ route('admin.add-list-pricing') }}" enctype="multipart/form-data" class="signup-form login-form" id="six-form">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $userId }}">
                            <input type="hidden" name="hotel_id" value="{{ $hotelId }}">

                            <div class="box box-info">
                                <div class="box-body mt-0">
                                    <div class="row" style="padding-bottom: 20px;">
                                        <div class="col-md-12">
                                            <h4>Photos</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">Hotel Photo <span class="text-danger">*</span></label>
                                            <input type="file" name="photo" id="photo" class="form-control" required>
                                            <div class="validation-message" id="photo_error"></div>
                                            <div id="photo_preview" class="mt-3"></div>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">Hotel Multiple Photo <span class="text-danger">*</span></label>
                                            <input type="file" name="multi_photo[]" id="multi_photo" class="form-control" multiple>
                                            <div class="validation-message" id="multi_photo_error"></div>
                                            <div id="multi_photo_preview" class="mt-3 d-flex flex-wrap gap-2"></div>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 mb20">
                                            <label class="label-large">Video Link <span class="text-danger">*</span></label>
                                            <input type="url" name="video_link" class="form-control" required>
                                            <div class="validation-message" id="video_error"></div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="form-btn text-right">
                                                <input type="button" class="btn btn-secondary" id="back" value="Back" /> &nbsp;&nbsp;
                                                <input type="submit" class="btn btn-primary" value="Next" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <!-- /.content -->
        <div class="clearfix"></div>
        @include('admin.layout.footer')

    </div>

    <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>

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



    <script>
        let selectedFiles = [];

        document.getElementById('multi_photo').addEventListener('change', function() {
            const fileInput = this;
            const errorDiv = document.getElementById('multi_photo_error');
            const previewContainer = document.getElementById('multi_photo_preview');

            errorDiv.textContent = '';
            previewContainer.innerHTML = '';
            selectedFiles = [];

            const files = Array.from(fileInput.files);
            if (!files.length) {
                errorDiv.textContent = 'Please upload at least one image.';
                errorDiv.style.color = 'red';
                return;
            }

            const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
            let hasInvalidFile = false;

            files.forEach((file, index) => {
                if (!allowedTypes.includes(file.type)) {
                    hasInvalidFile = true;
                    return;
                }

                selectedFiles.push(file); // Store valid files

                const reader = new FileReader();
                reader.onload = function(e) {
                    const wrapper = document.createElement('div');
                    wrapper.className = 'position-relative d-inline-block me-2 mb-2';
                    wrapper.dataset.index = index;

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = `Preview ${index}`;
                    img.style.width = '200px';
                    img.style.height = '200px';
                    img.style.marginBottom = '20px';
                    img.style.objectFit = 'cover';
                    img.classList.add('border', 'rounded');

                    const removeBtn = document.createElement('button');
                    removeBtn.type = 'button';
                    removeBtn.innerHTML = '&times;';
                    removeBtn.className = 'btn btn-sm btn-danger position-absolute top-0 end-0';
                    removeBtn.style.transform = 'translate(25%, -25%)';
                    removeBtn.style.width = '50px';
                    removeBtn.style.height = '50px';
                    removeBtn.title = 'Remove image';

                    removeBtn.addEventListener('click', () => {
                        // Remove from selectedFiles array
                        selectedFiles = selectedFiles.filter(f => f.name !== file.name);
                        wrapper.remove();

                        if (!selectedFiles.length) {
                            errorDiv.textContent = 'Please upload at least one image.';
                            errorDiv.style.color = 'red';
                            fileInput.value = ''; // Reset input
                        }
                    });

                    wrapper.appendChild(img);
                    wrapper.appendChild(removeBtn);
                    previewContainer.appendChild(wrapper);
                };
                reader.readAsDataURL(file);
            });

            if (hasInvalidFile) {
                errorDiv.textContent = 'Only JPG, JPEG, and PNG files are allowed.';
                errorDiv.style.color = 'red';
                fileInput.value = '';
                previewContainer.innerHTML = '';
                selectedFiles = [];
            }
        });

        // Optional: before submitting form, use selectedFiles to append to FormData
        function getMultiPhotoFormData() {
            const formData = new FormData();
            selectedFiles.forEach((file, index) => {
                formData.append('multi_photo[]', file);
            });
            return formData;
        }
    </script>


    <!-- Image Preview -->
    <script>
        document.getElementById('photo').addEventListener('change', function() {
            const fileInput = this;
            const errorDiv = document.getElementById('photo_error');
            const previewContainer = document.getElementById('photo_preview');

            errorDiv.textContent = '';
            previewContainer.innerHTML = '';

            const file = fileInput.files[0];

            if (!file) {
                errorDiv.textContent = 'Please upload a photo.';
                errorDiv.style.color = 'red';
                return;
            }

            const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
            if (!allowedTypes.includes(file.type)) {
                errorDiv.textContent = 'Only JPG, JPEG, and PNG files are allowed.';
                errorDiv.style.color = 'red';
                fileInput.value = ''; // Reset input
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.alt = 'Preview';
                img.style.width = '200px';
                img.style.height = '200px';
                img.style.objectFit = 'cover';
                img.classList.add('border', 'rounded');
                previewContainer.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    </script>
    <!-- Image Preview -->


    <script>
        // Back redirect
        document.getElementById('back').addEventListener('click', function() {
            window.location.href = "{{ route('admin.add-list-amenities') }}";
        });
    </script>

</body>

</html>