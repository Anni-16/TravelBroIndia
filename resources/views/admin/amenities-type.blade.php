<!DOCTYPE html>

<html style="height: 100%;" data-qb-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Bro India | Dashboard - Amentites Types </title>

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

    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />

    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/mycss.css') }}">


    <!--font-awesome-cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Css Attached-->
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
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 783px;">
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
                    <div class="col-md-9">
                        <div class="box box_info">
                            <div class="box-header">
                                <h3 class="box-title">Amenity Categories</h3>
                                <div class="pull-right"><a class="btn btn-primary" href="{{ route('admin.add-amenities-type') }}">Add
                                        Amenity categories</a></div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div id="dataTableBuilder_wrapper" class="dataTables_wrapper no-footer">

                                        <table class="table table-striped table-hover dt-responsive dataTable no-footer dtr-inline" id="myTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTableBuilder_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th style="width: 34px;">S.No</th>
                                                    <th style="width: 253px;">Name</th>
                                                    <th style="width: 122px;">
                                                        Status</th>
                                                    <th style="width: 128px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($amenitiestype->isNotEmpty())
                                                @php $count = 1; @endphp
                                                @foreach ($amenitiestype as $amenitiestypes )
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1" tabindex="0">{{ $count++ }}</td>
                                                    <td>{{ $amenitiestypes->name }}</td>
                                                    <td>
                                                        <button type="submit" class="btn btn-sm {{ $amenitiestypes->status == '1' ? 'btn-success' : 'btn-danger' }}">
                                                            {{ $amenitiestypes->status == '1' ? 'Active' : 'Inactive' }}
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.edit-amenities-type', $amenitiestypes->id) }}" class="btn btn-xs svbtn"><i class="fa fa-pencil"></i></a>
                                                        <a class="btn btn-xs svbtn delete-warning" data-id="{{ $amenitiestypes->id }}" data-toggle="modal" data-target="#deleteModal">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                        <form id="delete-form-{{ $amenitiestypes->id }}" action="{{ route('admin.delete-amenities-type', $amenitiestypes->id) }}" method="POST" style="display: none;">
                                                            @csrf
                                                            @method('delete')
                                                        </form>

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
                        Are you sure you want to delete this property category?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-danger" id="delete-modal-yes">Yes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!--ALL SCRIPT-->
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
    <script src="{{ asset('masster-admin-design/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/moment.min.js') }}"></script>
    <script src="{{ asset('masster-admin-design/js/select-2.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>

</html>