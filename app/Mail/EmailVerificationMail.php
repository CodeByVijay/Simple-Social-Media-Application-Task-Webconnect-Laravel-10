<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailVerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $user;
    public $token;
    public function __construct($user, $token)
    {
        $this->user = $user;
        $this->token = $token;
    }


    public function build()
    {
        return $this->view("mail.email-verification")
            ->subject('Account Verification Alert: Your account successfully created.')
            ->with([
                'name' => $this->user->name,
                "link" => env("APP_URL") . "/verify-email?token=" . $this->token
            ]);
    }
}
