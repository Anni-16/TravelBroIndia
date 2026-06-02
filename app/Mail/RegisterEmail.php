<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('email.register-email')
                    ->subject('Your Travel Bro India Account Will Be Activated Within 24–48 Hours 🌍')
                    ->with('data', $this->data);
    }
}
