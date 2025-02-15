<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class welcomemail extends Mailable
{
    use Queueable, SerializesModels;

   public $request;
   public $fileName;
    public function __construct($request,$fileName)
    {
        $this->request =$request;
        $this->fileName =$fileName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // subject: 'Welcomemail',
            // subject: $this->subject,
            subject:"Contact Form"
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.welcome-mail',


        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];
        if($this->fileName){
            $attachments = [
                Attachment::fromPath(public_path('/uploads/'.$this->fileName))
            ];
        }

        return $attachments;

    }
}
