<header class="main-header">
      <a href="{{ route('admin.dashboard') }}" class="logo" style="height:100px;   ">
        <span class="logo-mini"><img class="admin-fav-icon" src="{{ asset('masster-admin-design/images/my-images/small-logo.png') }}"></span>

        <span class="logo-lg"><img src="{{ asset('front-end/assets/img/Travel-bro3.png') }}" style="width: 70px;"></span>
      </a>

      <nav class="navbar navbar-static-top header_controls" >
        <a class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">


            <li class="dropdown user user-menu">

              <a href=" ">
                <img src="{{ asset('masster-admin-design/images/user_pic.jpg') }}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ session('Role') ?? '' }}</span>
              </a>

            </li>
            <li><a href="{{ route('admin.admin-logout') }}"><span class="hidden-xs">Logout</span> <span class="visible-xs"><i
                    class="fa fa-sign-out"></i></span></a></li>

          </ul>
        </div>
      </nav>
    </header>

    <div class="flash-container" style="opacity: 500; display: none;">
      <div class="alert alert-success text-center mb-0 d-none" id="success_message_div" role="alert">
        <a href=" " class="pull-right" data-dismiss="alert">×</a>
        <p id="success_message"></p>
      </div>
      <div class="alert alert-danger text-center mb-0 d-none" id="error_message_div" role="alert">
        <p><a href=" " class="pull-right" data-dismiss="alert">×</a>
        </p>
        <p id="error_message"></p>
      </div>
    </div>