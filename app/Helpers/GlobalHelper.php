<?php

namespace App\Helpers;
use App\Models\User;

class GlobalHelper
{
    public static function emailVerification($email,$otp)
    {
        $user = User::where('email', $email)
                    ->where('email_verification_token', $otp)
                    ->first();
        return $user;
    }
}
