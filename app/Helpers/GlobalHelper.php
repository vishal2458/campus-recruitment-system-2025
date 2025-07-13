<?php

namespace App\Helpers;
use App\Models\User;

class GlobalHelper
{
    public static function emailVerification($uuid,$otp)
    {
        $user = User::where('uuid', $uuid)
                    ->where('email_verification_token', $otp)
                    ->first();

        return $user;
    }
}
