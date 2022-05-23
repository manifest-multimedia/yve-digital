<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class SetUserIdInSession
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {

        if(session()->has('user_id')){
            session_unset('user_id');
        }

        session()->put('user_id', $event->user->user_id);

    }
}
