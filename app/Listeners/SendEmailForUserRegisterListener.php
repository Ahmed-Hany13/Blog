<?php

namespace App\Listeners;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Mail\UserRegisterMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailForUserRegisterListener
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
    public function handle(Registered $event): void
    {
        Mail::send(new UserRegisterMail($event->user));
    }
}
