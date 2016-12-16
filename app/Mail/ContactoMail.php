<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $email;
    public $contact_message;
    public $phone;
    public $nss;
    public $birthday;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos)
    {
        $this->name = $datos['name'];
        $this->email = $datos['email'];
        $this->contact_message = $datos['message'];
        $this->phone = $datos['phone'];
        $this->nss= $datos['nss'];
        $this->birthday = $datos['birthday'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contacto');
    }
}
