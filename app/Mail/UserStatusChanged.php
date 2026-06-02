<?php

namespace App\Mail;

use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserStatusChanged extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(Customer $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $statusMessage = $this->user->status === 'Active'
            ? 'Your account has been activated.'
            : 'Your account has been deactivated.';

        return $this->subject(' Welcome to Travel Bro India – Your Vendor Account is Now Active!
        ')
            ->view('email.user-status-changed')
            ->with([
                'name' => $this->user->firstname . ' ' . $this->user->lastname,
                'statusMessage' => $statusMessage,
            ]);
    }
}
