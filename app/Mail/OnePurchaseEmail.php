<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class OnePurchaseEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $Product;

    /**
     * Create a new message instance.
     */
    public function __construct($Product,$totalPayment,$CustomerUser,$shipMethod)
    {
        $this->Product = $Product;
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
                    ->view('emails.onePurchase')
                    ->with(['Product' => $this->Product,
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
            view: 'emails.onePurchase',
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
