<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       return view('home.home');
    }
    public function admin()
    {
       return view('admin.adminDashboard');
    }
    public function student()
    {
       return view('student.studentHome');
    }
    public function dashboard()
    {
       return view('dashboard.dashboard');
    }

    public function registrationForm()
    {
        return view('auth.registration-form');
    }
    public function loginForm()
    {
        return view('auth.login-form');
    }
}
