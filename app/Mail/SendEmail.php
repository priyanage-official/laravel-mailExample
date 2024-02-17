<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $name;
    private $attachment;

    public function __construct($name,$attachment)
    {
        $this->name = $name;
        $this->attachment = $attachment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.sendMail')->with(['name' => $this->name])
        ->attach($this->attachment, [
            'as' => 'myattachment.png'
        ]) // with attachment
        ->subject('This is my first test mail'); 
    }
}
