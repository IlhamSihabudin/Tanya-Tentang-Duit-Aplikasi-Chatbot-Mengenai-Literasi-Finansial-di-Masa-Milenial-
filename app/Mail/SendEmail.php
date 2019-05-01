<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $send, $email, $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($sends, $emails, $passwords)
    {
        $this->send = $sends;
        $this->email = $emails;
        $this->password = $passwords;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->email;
        $password = $this->password;
        $e_subject  = "TTD (Tanya Tentang Duit)";

        return $this->subject($e_subject)->view('sendmail', compact('email', 'password'));
    }
}
