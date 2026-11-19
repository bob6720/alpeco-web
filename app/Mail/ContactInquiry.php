<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\UploadedFile;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactInquiry extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param  array{name: string, email: string, phone: string, site: string, message: string}  $contactDetails
     * @param  array<int, UploadedFile>  $images
     */
    public function __construct(
        public array $contactDetails,
        public array $images = [],
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [$this->contactDetails['email']],
            subject: 'New ALPECO website enquiry',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-inquiry',
            with: [
                'contactDetails' => $this->contactDetails,
                'images' => $this->images,
            ],
        );
    }

    /**
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return array_map(
            fn (UploadedFile $image): Attachment => Attachment::fromPath($image->getPathname())
                ->as($image->hashName())
                ->withMime($image->getMimeType() ?? 'application/octet-stream'),
            $this->images,
        );
    }
}
