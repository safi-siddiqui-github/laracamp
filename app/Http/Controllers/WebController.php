<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class WebController extends Controller
{
    public function home_page()
    {
        return view('home');
    }
    public function google_redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function google_callback()
    {
        $google_user = Socialite::driver('google')->user();
        $user = User::where('google_id', $google_user->id)->first() ?? new User();
        $user->google_id = $google_user->id;
        $user->email = $google_user->email;
        $user->name = $google_user->name;
        $user->avatar = $google_user->avatar;
        $user->email_verified = $google_user->user['email_verified'] ? true : false;
        $user->save();
        Auth::login($user);
        return to_route('home_page');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('home_page');
    }
}
