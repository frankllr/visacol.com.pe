<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = 'Nuevo mensaje de VISACOL';
    public $mensaje;
 
    public function __construct($mensaje){
        $this->mensaje = $mensaje;
    }

    public function build(){
        return $this->view('emails.message-received');
    }
}
