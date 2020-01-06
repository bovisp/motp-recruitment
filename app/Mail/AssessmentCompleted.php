<?php

namespace App\Mail;

use App\Candidate;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AssessmentCompleted extends Mailable
{
    use SerializesModels;

    public $candidate;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Candidate $candidate)
    {
      $this->candidate = $candidate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_TO'))
          ->markdown('emails.assessments.completed');
    }
}
