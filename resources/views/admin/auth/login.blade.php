<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Travel Bro India - Dashboard | Log in</title>
    <link rel="shortcut icon"
        href="https://demowpthemes.com/buy2rental/public/front/images/logos/1628150085_favicon.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="https://demowpthemes.com/buy2rental/public/backend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('masster-admin-design/css/login-css.css') }}">
    <style>
    /*eye-password-mode*/
    .password-wrapper {
        position: relative;
    }

    .toggle-button {
        display: inline-flex;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: unset;
        right: 12px;
        cursor: pointer;
    }

    .eye-icon {
        width: 20px;
        height: 20px;
    }
    </style>
</head>

<body class="hold-transition">

    <div class="flash-container" class="ml-15">
    </div>

    <div class="admin-login-page">
        <div class="container-fluid">
            <div class="row">
                <div class="login-form-sec">
                    <div class="admin-login-bg"
                        style="background:url(https://demowpthemes.com/buy2rental/public/front/images/logos/1635916462_admin_login_img.png); background-repeat: no-repeat; background-size: contain; background-position: 50% 50%;">
                    </div>
                    <div class="admin-login-content">
                        <div class="admin-login-form">
                            <div class="text-center">
                                <a href="#"><img
                                        src="{{ asset('front-end/assets/img/Travel-bro1.png') }}" alt="logo"
                                        style="width: 100px;"></a>
                            </div>
                            <h2 class="text-center welcome-txt">Welcome Travel bro India </h2>

                            @if(session()->has('error'))

                            <div class="alert alert-danger">

                                {{ session()->get('error') }}
                            </div>


                            @endif

                            <form action="{{ route('admin.admin-login') }}" method="post" id="admin_login">
                                @csrf
                                <div class="form-group has-feedback">
                                    <label for="username">Email Address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email Address"
                                        required>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="password">Password</label>
                                    <div class="password-wrapper ">
                                        <input type="password" id="password-field"  name="password" class="form-control"
                                            style="padding: 0 20px;" placeholder="Password" />
                                        <div class="toggle-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="eye-icon">
                                                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                <path fill-rule="evenodd"
                                                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class="checkbox icheck">
                                            <label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign
                                            In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
    /*eye-password-mode*/
    const eyeIcons = {
        open: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="eye-icon"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z" /><path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" /></svg>',
        closed: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="eye-icon"><path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" /><path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" /><path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" /></svg>'
    };

    function addListeners() {
        const toggleButtons = document.querySelectorAll(".toggle-button");

        if (toggleButtons.length === 0) {
            return;
        }

        toggleButtons.forEach((toggleButton) => {
            toggleButton.addEventListener("click", togglePassword);
        });
    }

    function togglePassword(event) {
        const toggleButton = event.currentTarget;
        const passwordField = toggleButton.previousElementSibling; // Assuming password field is before toggle button

        if (!passwordField || !toggleButton) {
            return;
        }

        toggleButton.classList.toggle("open");

        const isEyeOpen = toggleButton.classList.contains("open");

        toggleButton.innerHTML = isEyeOpen ? eyeIcons.closed : eyeIcons.open;
        passwordField.type = isEyeOpen ? "text" : "password";
    }

    document.addEventListener("DOMContentLoaded", addListeners);
    </script>
</body>

</html>