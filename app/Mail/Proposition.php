<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Proposition extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Elements de post
     * @var array
     */
    public $post;
    public $user;
    public $price;

    /**
     * Create a new message instance.
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
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@liinkart.com', env('APP_NAME'))->subject('Nouvelle offre pour votre oeuvre')->markdown('email.proposition');
    }
}
