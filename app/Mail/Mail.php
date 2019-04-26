<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;   
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->from('fadlannaufal6969@gmail.com')->view('admin.email.email')->with([
     'nama' => $this->registrasi
   ]);
    }
}
