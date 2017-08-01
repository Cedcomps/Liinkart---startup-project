<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Slack extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Elements de contact
     * @var array
     */
    public $slack;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $slack)
    {
        $this->slack = $slack;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@liinkart.com', env('APP_NAME'))->markdown('email.slack');
    }
}
