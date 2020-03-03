<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.user_booking_email')
        ->with([
            'name' => $this->user['name'],
            'phone_no' => $this->user['phone_no'],
            'email' => $this->user['email'],
            'gender' => $this->user['gender'],
            'package' => $this->user['package'],
            'booking_date' => $this->user['booking_date'],
            'booking_time' => $this->user['booking_time'],
            'branch' => $this->user['branch'],
        ]);
    }
}
