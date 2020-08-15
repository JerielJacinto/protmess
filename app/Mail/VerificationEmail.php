<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class VerificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $verificationEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($verificationEmail)
    {
        //
        $this->verificationEmail = $verificationEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   

        return $this->from('info@protectedmessage.com')
                    ->view('emailTemplate.verifyEmail');
    }

}
