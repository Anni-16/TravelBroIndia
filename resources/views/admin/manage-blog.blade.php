<!DOCTYPE html>
<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Bro India | Dashboard - Manage Blogs</title>

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

</head>

<body class="skin-blue sidebar-mini">
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
                <h1>Manage Blogs</h1>
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
                                <h3 class="box-title">Blogs Management</h3>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('admin.add-blog') }}">
                                        Add Blogs
                                    </a>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="table-responsive">
                                    <div id="dataTableBuilder_wrapper" class="dataTables_wrapper no-footer">
                                        <table class="table table-hover dt-responsive svusertable dataTable no-footer dtr-inline" id="myTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTableBuilder_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Photo</th>
                                                    <th>Description</th>
                                                    <th>Author Name</th>
                                                    <th>Status</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($blogs->isNotEmpty())
                                                @php $count = 1; @endphp
                                                @foreach ($blogs as $blog)
                                                <tr role="row" class="odd">
                                                    <td style="text-align: left;">{{ $count++ }}</td>
                                                    <td>{{ $blog->blog_name }}</td>
                                                    <td>
                                                        @if(!empty($blog->image))
                                                        <img src="{{ asset('Uploads/blog/' . $blog->image) }}" alt="{{ $blog->alt_tag ?? 'Blog Image' }}" style="width: 40px;">
                                                        @endif
                                                    </td>
                                                    <td>{{ $blog->content }}</td>
                                                    <td>{{ $blog->author_name }}</td>
                                                    <td>{{ $blog->status }}</td>
                                                    <td>{{ $blog->formatted_date }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.edit-blog', $blog->id) }}" class="btn btn-xs svbtn"><i class="fa fa-pencil"></i></a>
                                                        <a class="btn btn-xs svbtn delete-warning" data-id="{{ $blog->id }}" data-toggle="modal" data-target="#deleteModal">
                                                            <i class="fa fa-trash"></i>
                                                        </a>

                                                        <form id="delete-form-{{ $blog->id }}" action="{{ route('admin.delete-blog', $blog->id) }}" method="POST" style="display: none;">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="8" style="text-align: center;">No blog found.</td>
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
        @include('admin.layout.footer')
        <!-- End Footer Section -->

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this Blog?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-danger" id="delete-modal-yes">Yes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        let deleteId = null;

        // When delete button is clicked, store the ID
        document.querySelectorAll('.svbtn').forEach(btn => {
            btn.addEventListener('click', function() {
                deleteId = this.getAttribute('data-id');
            });
        });

        // On confirm "Yes", submit the right form
        document.getElementById('delete-modal-yes').addEventListener('click', function() {
            if (deleteId) {
                document.getElementById('delete-form-' + deleteId).submit();
            }
        });
    </script>

    <!--Script added-->
    <script src="{{ asset('masster-admin-design/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/app.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/backend.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/bootbox.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/custom.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery.knob.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/moment.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/select-2.js') }}"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>

</html>