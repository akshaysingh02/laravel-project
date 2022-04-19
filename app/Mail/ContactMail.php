<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public function __construct(public string $name, public string $email, public string $body)
    {
    }
    public function build()
    {
        return $this->subject('Contact mail from Akshay singh')->replyTo($this->email)->view('email.contact');
    }
}
