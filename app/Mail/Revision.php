<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Revision extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Elements de post
     * @var array
     */
    public $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@liinkart.com', env('APP_NAME'))->subject('Modération de votre annonce')->markdown('email.revision');
    }
}
