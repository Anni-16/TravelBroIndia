<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Bro India | Dashboard - Add Blogs</title>

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
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/intlTelInput.css') }}">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="hold-transition skin-blue sidebar-mini">
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
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Add Blog</h3>
                            </div>
                            <!-- form start -->
                            <form class="form-horizontal" action="{{ route('admin.add-blog') }}" id="add_page" method="post" accept-charset='UTF-8' enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Author Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-6" id="respo">
                                            <select name="author_name" class="@error('author_name') is-invalid @enderror form-control">
                                                <option data-icon-class="icon-star-alt" value="Admin"> Admin </option>
                                                <option data-icon-class="icon-star-alt" value="Avni"> Avni </option>
                                                <option data-icon-class="icon-star-alt" value="Kanish"> Kanish </option>
                                                <option data-icon-class="icon-star-alt" value="Content Writer"> Content Writer </option>
                                            </select>
                                            @error('author_name')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Blog Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="@error('blog_name') is-invalid @enderror form-control" name="blog_name" >
                                            @error('blog_name')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Image <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="file" class="form-control" name="image" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Alt Tag Keyword <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="alt_tag" id="page_url" required>
                                            @error('blog_name')
                                            <p class="invalid-feedback text-red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Content <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea class="ckeditor" id="content" name="content" rows="10" cols="80" required></textarea>
                                            <span id="content-validation-error"></span>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Meta Title</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="meta_title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Meta Keyword</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="meta_keyword">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Meta Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="meta_description" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Status</label>
                                        <div class="col-sm-2">
                                            <select name="status" class="form-control" id="sv_en_lang_status" required>
                                                <option value="Active"> Active </option>
                                                <option value="Inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div>



                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info" id="submitBtn">Submit</button>
                                    <a href="{{ route('admin.manage-blog') }}" class="btn btn-danger btn-sm">
                                        Cancel
                                    </a>

                                </div>
                            </form>
                        </div>
                    </div>
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
    <script src="{{ asset('masster-admin-design/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/moment.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/select-2.js') }}"></script>

    <!-- Text Editor -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content');
    </script>


</body>

</html>