<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Jobs\SendMailJob;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'profile_completed' => 0,
        ]);

        if($user)
        {
            SendMailJob::dispatch($user);

        }
        // dd($user);
        // $user->sendEmailVerificationNotification(); // this sends the link

        return response()->json([
            'status' => true,
            'message' => 'User registered successfully'
        ]);
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
    public function loginform(Request $request){
        return response()->json([
            'message' => 'Login form',
            'status' => true,
        ]);

    }
}

