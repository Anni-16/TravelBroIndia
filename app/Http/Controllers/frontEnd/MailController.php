<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Mail\RegisterEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function RegisterEmail(Request $request)
    {
        // Validate input
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
        ]);

        $to = $request->email;
        $firstname = $request->firstname;
        $lastname = $request->lastname;

        $subject = "Your Travel Bro India Account Will Be Activated Within 24–48 Hours 🌍";

        $msg = "Dear $firstname $lastname,

                    Thank you for registering on Travel Bro India – we're excited to have you onboard!

                    We’re happy to inform you that your account is currently under review and will be activated within the next 24 to 48 hours. Once your account is active, you’ll receive a confirmation email from us. After that, you’ll be able to log in, access your personalized dashboard, and start exploring exclusive travel deals, bookings, and services available only to our registered members.

                    Our team is working to ensure your profile is verified and activated as quickly as possible. We appreciate your patience during this short wait.

                    In the meantime, if you have any questions, or need any assistance, feel free to reach out to our support team. We’re here to help!

                    📧 Email: travelbroindia1@gmail.com
                    📞 Phone/WhatsApp: +91-94677 66445
                    🌐 Website: www.travelbroindia.com

                    Once again, welcome to the Travel Bro India community – your gateway to smarter, easier, and more affordable travel.

                    Warm regards,  
                    Team Travel Bro India  
                    Explore More. Travel Smart.";

        // Send the email
        try {
            Mail::to($to)->send(new RegisterEmail($msg, $subject));
            return back()->with('success', 'Registration successful. Please check your email.');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }
}
