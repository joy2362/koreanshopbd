<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;

class invoice extends Mailable
{
    use Queueable, SerializesModels;

    public $order,$content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order,$content)
    {
        $this->order = $order;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order = $this->order;
        $content = $this ->content;

        $pdf = PDF::loadView('pdf.invoice',compact('order','content'));

        return $this->view('emails.invoice.user_invoice')
            ->subject("Order Receipts")
            ->attachData($pdf->output(), "invoice.pdf");;
    }
}
