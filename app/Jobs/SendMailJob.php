<?php
namespace App\Jobs;

use App\Models\User;
use App\Mail\RegistrationMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;


class SendmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $userId;
    public $key;

    public function __construct($userId , $key)
    {
        $this->userId = $userId;
        $this->key = $key;
    }

    public function handle(): void
    {
        $user = User::find($this->userId);

        if (!$user) {
            Log::error("User not found in SendmailJob. ID: {$this->userId}");
            return;
        }


        Log::debug("SendmailJob running with key: {$this->key}");

        switch ($this->key) {
            case 'registration':
                Log::debug('*** Registration mail');
                Mail::to($user->email)->send(new RegistrationMail($user));
                break;

            case 'password':
                Log::debug('*** Password reset mail');
                // Mail::to($user->email)->send(new PasswordResetMail($user));
                break;

            default:
                Log::warning("Unknown mail type: {$this->key}");
        }
    }


    public function test($key)
    {
        log::debug('this is test function ');
        return "hello from varrrrr";
    }
}
