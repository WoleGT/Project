<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Visa;

class VisaMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $visa;

    public function __construct(Visa $visa)
    {
        $this->visa = $visa;
    }

    public function build()
    {
        return $this->subject('New Visa Form Submission')
                    ->view('emails.visa');
    }

    
}