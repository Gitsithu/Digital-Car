<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationStatusMail extends Mailable
{
    use Queueable, SerializesModels;
    public $registrationstatus;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($registrationstatus)
    {
        //
        $this->registrationstatus = $registrationstatus;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('backend.email.registrationstatus');
    }
}
