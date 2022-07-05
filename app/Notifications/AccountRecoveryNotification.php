<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Mail\AccountRecovery as AccountRecoveryMailable; 
use Illuminate\Notifications\AnonymousNotifiable;


class AccountRecoveryNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */


     public $username; 
     public $subject; 
     public $action; 
     public $message;


    public function __construct($username, $subject, $message, $action)
    {
        $this->username = $username;
        $this->subject = $subject;
        $this->message = $message; 
        $this->action = $action; 
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $recipient = $notifiable instanceof AnonymousNotifiable
        ? $notifiable->routeNotificationFor('mail')
        : $notifiable->email;

        return (new AccountRecoveryMailable($this->username,$this->subject, $this->message, $this->action))->to($recipient);

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
