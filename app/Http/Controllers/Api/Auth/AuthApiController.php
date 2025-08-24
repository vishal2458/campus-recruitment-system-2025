<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Jobs\SendMailJob;
use App\Helpers\GlobalHelper;


class AuthApiController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'role' => 'required|in:student,admin,company',
        ]);

        $token = random_int(100000, 999999);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role' => $validated['role'],
            'profile_completed' => 0,
            'email_verification_token' => $token,
        ]);

        if ($user) {
            SendMailJob::dispatch($user->id, 'registration');

            return response()->json([
                'status' => true,
                'message' => 'An email with your OTP has been sent.',
                'user_id' => $user->uuid,
            ], 201);
        }

        return response()->json([
            'status' => false,
            'message' => 'Registration failed. Please try again.',
        ], 500);
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

                $token = Auth::attempt([
                    "email" => $request->email,
                    "password" => $request->password
                ]);

                if(!$token)
                {
                    return response()->json([
                        'message' => 'Invalid credentials',
                        'status' => false
                    ]);
                }
                    return response()->json([

                        'message' => 'Login successful',
                        'status' => true,
                        'token' => $token,
                        'expires_in' => Auth::factory()->getTTL() * 60
                    ]);


    }

    public function verifyEmail(Request $request)
    {
        dd($request);
        $request->validate([
            'code'  => 'required|digits:6',
        ]);

        $user = GlobalHelper::emailVerification($request->uuid,$request->code);

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid OTP.',
            ], 422);
        }

        $user->update([
            'is_verified' => true,
            'email_verified_at' => now(),
            'email_verification_token' => null,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Email verified successfully.',
        ]);
    }

    public function loginForm(Request $request){
        return response()->json([
            'message' => 'Login form',
            'status' => true,
        ]);

    }
    public function profile(Request $request){
        $user = Auth::user();

        return response()->json([
            'message' => 'User profile',
            'status' => true,
            'user' => $user
        ]);
    }

    public function refreshToken(Request $request){

        $newToken = auth()->refresh();

        return response()->json([
            'message' => 'Token refreshed',
            'status' => true,
            'token' => $newToken,
            'expires_in' => Auth::factory()->getTTL() * 60
        ]);
    }
    public function logout(Request $request){
        auth()->logout();
        return response()->json([
            'message' => 'User logged out',
            'status' => true,
        ]);
    }
}

