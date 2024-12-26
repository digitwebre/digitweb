<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailableContact extends Mailable
{
    use Queueable, SerializesModels;
    public $sendata;
    /**
     * Create a new message instance.
     */
    public function __construct($sendata)
    {
        $this->sendata = $sendata;
        // dd($this->sendata);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->sendata->email, ($this->sendata->prenom.' '.$this->sendata->nom)),
            subject: $this->sendata->objet,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'contact.tocustomer',
            with: [
                'nom' => $this->sendata->nom,
                'prenom' => $this->sendata->prenom,
                'email' => $this->sendata->email,
                'raisonsociale' => $this->sendata->raisonsociale,
                'objet' => $this->sendata->objet,
                'form_message' => $this->sendata->form_message,
                'acceptance' => $this->sendata->acceptance,
            ]
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
