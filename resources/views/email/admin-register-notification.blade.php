<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Registered</title>
    <style type="text/css">
        a,
        a[href],
        a:hover,
        a:link,
        a:visited {
            /* This is the link colour */
            text-decoration: none !important;
            color: #0000ee;
        }

        .link {
            text-decoration: underline !important;
        }

        p,
        p:visited {
            /* Fallback paragraph style */
            font-size: 15px;
            line-height: 24px;
            font-family: "Helvetica", Arial, sans-serif;
            font-weight: 300;
            text-decoration: none;
            color: #1d6597;
        }

        h1 {
            /* Fallback heading style */
            font-size: 22px;
            line-height: 24px;
            font-family: "Helvetica", Arial, sans-serif;
            font-weight: normal;
            text-decoration: none;
            color: #1d6597;
        }

        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td {
            line-height: 100%;
        }

        .ExternalClass {
            width: 100%;
        }
    </style>
</head>
<!-- You can change background colour here -->

<body style=" text-align: center;  margin: 0;  padding-top: 10px; padding-bottom: 10px; padding-left: 0; padding-right: 0; -webkit-text-size-adjust: 100%; background-color: #f2f4f6; color: #1d6597; " align="center">
    <!-- Fallback force center content -->
    <div style="text-align: center">
        <!-- Start container for logo -->
        <table align="center" style=" text-align: center;  vertical-align: top; width: 600px;  max-width: 600px; background-color: #ffffff; " width="600">
            <tbody>
                <tr>
                    <td style=" width: 596px; vertical-align: top; padding-left: 0;  padding-right: 0;  padding-top: 15px;padding-bottom: 15px;" width="596">
                        <!-- Your logo is here -->
                        <img style=" width: 100px; height: 100px; background-size: cover; background-position: center; object-fit: cover; text-align: center; color: #ffffff; " alt="Logo" src="{{ asset('Email-template/Travel-bro1.png') }}" align="center" width="100%" />
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End container for logo -->

        <!-- Hero image -->
        <img style="width: 600px;  max-width: 600px; height: 350px;  max-height: 350px; text-align: center; object-fit: cover; " alt="Hero image" src="{{ asset('Email-template/room6.jpg') }}" align="center" width="600" height="350" />
        <!-- Hero image -->

        <!-- Start single column section -->
        <table align="center" style="text-align: center; vertical-align: top; width: 600px; max-width: 600px; background-color: #ffffff;" width="600">
            <tbody>
                <tr>
                    <td style="width: 596px; vertical-align: top; padding-left: 30px; padding-right: 30px; padding-top: 30px;" width="596">
                        <h1 style="font-size: 20px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 600; color: #1d6597;">
                            Dear Travel Bro India Team,
                        </h1>
                        <p style="font-size: 15px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; color: #919293;">
                            A new user has registered on your website <a href="https://www.travelbroindia.com" target="_blank" style="color: #1d6597;">www.travelbroindia.com</a>. Please review the user's details and activate their account to enable access to your services.
                        </p>
                        <p style="font-size: 15px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; color: #919293;">
                            To activate the account, please click the button below:
                        </p>
                        <!-- Example button -->
                        <a href="http://travelbroindia.com/admin/login" target="_blank" style="display: inline-block; padding: 12px 24px; background-color: #1d6597; color: #ffffff; text-decoration: none; border-radius: 4px; font-weight: 600;">Activate Account</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End single column section -->



        <!-- Start heading for double column section -->
        <table align="center" style=" text-align: center; vertical-align: top;width: 600px; max-width: 600px; background-color: #ffffff; " width="600">
            <tbody>
                <tr>
                    <td style=" width: 596px; vertical-align: top;padding-left: 30px; padding-right: 30px; padding-bottom: 0;" width="596">
                        <h1 style=" font-size: 20px;line-height: 24px;font-family: 'Helvetica', Arial, sans-serif; font-weight: 600; text-decoration: none; color: #1d6597; margin-bottom: 0; ">
                            User Informations {{ $data['firstname'] }}
                        </h1>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End heading for double column section -->

        <!-- Start double column section -->
        <table align="center" style=" text-align: center; vertical-align: top; width: 600px; max-width: 600px; background-color: #ffffff; " width="600">
            <tbody>
                <tr>
                    <td style=" width: 252px; vertical-align: top; padding-left: 30px;padding-right: 15px; padding-top: 0;text-align: center; " width="252">
                        <p style="font-size: 15px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif;  font-weight: 400; text-decoration: none; color: #919293; ">
                            <strong>Name :- </strong> {{ $data['firstname'] }} {{ $data['lastname'] }}
                        </p>
                        <p style="font-size: 15px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif;  font-weight: 400; text-decoration: none; color: #919293; ">
                            <strong>Email :- </strong> {{ $data['email'] }}
                        </p>
                        <p style="font-size: 15px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif;  font-weight: 400; text-decoration: none; color: #919293; ">
                            <strong>Phone :- </strong> {{ $data['phone'] }}
                        </p>
                        <p style="font-size: 15px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif;  font-weight: 400; text-decoration: none; color: #919293; ">
                            <strong>Role :- </strong> {{ $data['role'] }}
                        </p>
                    </td>

                </tr>
                <tr>
                    <td style=" width: 252px; vertical-align: top; padding-left: 30px; padding-right: 15px;  padding-top: 0;  padding-bottom: 30px; text-align: center; " width="252">
                        <a style=" font-size: 15px; line-height: 24px; font-weight: 400; text-decoration: none; color: #919293; ">
                            <span style="color: #919293;"> 📧 Email: </span>
                            <a style="text-decoration: underline; color: #1d6597" href="mailto:travelbroindia1@gmail.com">
                                <u>travelbroindia1@gmail.com</u>
                            </a>
                            <br>
                            <br>
                            <span style="color: #919293;">📞 Phone/WhatsApp:</span>
                            <a style="text-decoration: underline; color: #1d6597" href="tel:+919467766445">
                                <u> +91-94677 66445</u></a>
                            <br>
                            <br>
                            <span style="color: #919293;"> 🌐 Website: </span>
                            <a style="text-decoration: underline; color: #1d6597" href="https://travelbroindia.com">
                                <u> www.travelbroindia.com</u></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End double column section -->

        <!-- Start image -->
        <img style=" width: 600px;  max-width: 600px;  height: 240px;  max-height: 240px; text-align: center; " alt="Image" src="{{ asset('Email-template/home-two-des-5.png') }}" align="center" width="600" height="240" />
        <!-- End image -->

        <!-- Start footer -->
        <table align="center" style=" text-align: center; vertical-align: top;  width: 600px; max-width: 600px; background-color: #1d6597; " width="600">
            <tbody>
                <tr>
                    <td style=" width: 596px; vertical-align: top; padding-left: 30px; padding-right: 30px;padding-top: 30px; padding-bottom: 30px;" width="596">
                        <!-- Your inverted logo is here -->
                        <img style=" width: 85px; max-width: 85px; height: 85px;max-height: 85px; text-align: center; color: #ffffff; " alt="Logo" src="{{ asset('Email-template/Travel-bro3.png') }}" align="center" width="180" height="85" />

                        <p style=" font-size: 13px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #ffffff;">
                        Near Tile Factory , Uchana, Uchana Karnal , Haryana -  132001
                        </p>
                        <p style="margin-bottom: 0; font-size: 13px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif;font-weight: 400; text-decoration: none;color: #ffffff; ">
                            <a target="_blank" style="text-decoration: underline; color: #ffffff" href="www.travelbroindia.com">
                                www.travelbroindia.com
                            </a>
                            <br>
                            &copy; {{ date('Y') }} Travel Bro India. All rights reserved.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End footer -->
    </div>
</body>

</html>