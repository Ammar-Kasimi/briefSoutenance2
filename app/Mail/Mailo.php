<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class Mailo extends Mailable
{
    use Queueable, SerializesModels;
    // protected $fillable['senderEmail','senderName'];
    /**
     * Create a new message instance.
     */
    public $senderName;
    public $senderEmail;
    public $inviteUrl;

    public function __construct($a, $b, $c)
    {
        $this->senderName = $a;
        $this->senderEmail = $b;
        $this->inviteUrl = $c;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->senderEmail, $this->senderName),
            subject: $this->senderName . ' mr7ba bik f collcoation dyalna'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'invitation.invitation',
            with:['token' => $this->token]
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
