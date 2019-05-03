<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $cli;
     public $ven;
    public function __construct($cliente, $venta)
    {
        //
        $this->cli = $cliente;
        $this->ven = $venta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $e_cliente =   $this->cli;
      $e_venta =     $this->ven;
        return $this->view('mail.sendemail', compact('e_cliente', 'e_venta'))->subject("Compra Exitosa");
    }
}
