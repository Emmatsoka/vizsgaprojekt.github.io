<?php


namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * létre hoz egy új üzenetpéldányt.
     */
    public function __construct(private string $title, private string  $body)
    {
    }

    /**
     *Üzenet tárgya
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Üdv a wesox demo emailjén',
        );
    }

    /**
     * üzenet tartalmának meghatározása.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.welcome',
            with: [
                'title' => $this->title,
                'body' => $this->body,
            ],
        );
    }

    /**
     * 
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
