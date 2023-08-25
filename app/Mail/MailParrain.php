<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailParrain extends Mailable
{
    use Queueable, SerializesModels;

    protected $req;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($item)
    {
        $this->req = $item;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject("Bienvenu sur Challenge-Toit")
        ->view('email.reparrain')->with('data', $this->req);
    }
}
