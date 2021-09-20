<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-mail')
        ->with([
            'name' => $this->name,
            'phone' => $this->phone
        ])
        ->subject('Новый клиент');
    }
}
