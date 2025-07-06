<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $url = url("/api/custom-email-verify/{$this->user->email_verification_token}");

        return $this->subject('Verify Your Email Address')
                    ->view('mails.registeration')
                    ->with([
                        'user' => $this->user,
                        'url' => $url,
                    ]);
    }
}
