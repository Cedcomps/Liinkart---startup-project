<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewProposition extends Notification
{
    use Queueable;

    /**
     * Elements de post
     * @var array
     */
    public $post;
    public $user;
    public $price;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($price, $post, $user)
    {
        $this->price = $price;
        $this->post = $post;
        $this->user = $user;
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
        $url = url('/messages/');
        return (new MailMessage)
                    ->error()
                    ->subject('Nouvelle offre pour votre oeuvre')
                    ->markdown('email.proposition', ['url' => $url]);
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
