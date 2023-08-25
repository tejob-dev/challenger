<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendExpireProjectConstructMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $challenger;
    protected $project;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($challenger ,$project)
    {
        $this->challenger = $challenger;
        $this->project = $project;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject("Le programme ".$this->challenger->libel." vient de prendre fin!")
        ->view('email.projectexp')
        ->with("project", $this->project);
    }
}
