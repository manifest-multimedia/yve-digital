<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountRecovery extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $username;
     public $subject;
     public $bodyMessage;
     public $action; 

    public function __construct($username, $subject, $message, $action)
    {
        $this->username=$username;
        $this->subject=$subject; 
        $this->bodyMessage=$message;
        $this->action=$action; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('notifications@yvedigital.com')->view('emails.account_recovery');
    }
}
