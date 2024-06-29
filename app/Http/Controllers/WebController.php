<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Laravel\Socialite\Facades\Socialite;

class WebController extends Controller
{
    public function home_page()
    {
        return view('home');
    }

    public function react_page()
    {
        return Inertia::render('Home');
    }
    
    public function react_dash_page()
    {
        return Inertia::render('Dashboard');
    }
}
