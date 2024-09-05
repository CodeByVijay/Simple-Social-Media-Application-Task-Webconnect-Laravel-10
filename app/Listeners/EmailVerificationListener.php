<?php

namespace App\Listeners;

use App\Events\EmailVerificationEvent;
use App\Mail\EmailVerificationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EmailVerificationListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EmailVerificationEvent $event)
    {
        Mail::to($event->user->email)->send(new EmailVerificationMail($event->user, $event->token));
    }
}
