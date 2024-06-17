<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login_page()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        return to_route('home_page');

        // $request->validate([
        //     'email' => ['required', 'email', 'unique:users,email'],
        //     'password' => ['required'],
        // ]);

        // dd(Hash::make($request->input('password')));
        
        // $user = new User();
        // $user->email = $request->input('email');
        // $user->password = Hash::make($request->input('password'));
        // $user->save();
 
    }
    
    public function register_page()
    {
        return view('register');
    }

    public function register_user(Request $request)
    {
        return to_route('home_page');
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
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
