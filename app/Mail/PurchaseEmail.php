<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class PurchaseEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $cartProducts;

    /**
     * Create a new message instance.
     */
    public function __construct($cartProducts,$totalPayment,$CustomerUser,$shipMethod)
    {
        $this->cartProducts = $cartProducts;
        $this->totalPayment = $totalPayment;
        $this->CustomerUser = $CustomerUser;
        $this->shipMethod = $shipMethod;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'SmartStore',
        );
    }
    public function build()
    {
        return $this->subject('SmartStore Purchase')
                    ->view('emails.purchase')
                    ->with(['cartProducts' => $this->cartProducts,
                             'totalPayment' => $this->totalPayment,
                             'CustomerUser' => $this->CustomerUser,
                             'shipMethod' => $this->shipMethod,
                              ]);
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.purchase',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
