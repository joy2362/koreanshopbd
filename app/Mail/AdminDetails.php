<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminDetails extends Mailable
{
    use Queueable, SerializesModels;
    public $pass,$details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pass,$details)
    {
        $this->pass = $pass;
        $this->details =$details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.admin.details')->with('pass','details');
    }
}
