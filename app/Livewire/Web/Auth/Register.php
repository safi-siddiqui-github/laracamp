<?php

namespace App\Livewire\Web\Auth;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{

    #[Rule('required|email|ends_with:gmail.com|unique:users')]
    public $email = '';
    
    #[Rule('required|confirmed|min:7')]
    public $password = '';
    
    #[Rule('required')]
    public $password_confirmation = '';

    #[Rule('boolean')]
    public $remember = '';

    public function register()
    {
        $this->validate(); 
        $hashed = Hash::make($this->password);

        $user = new User();
        $user->email = $this->email;
        $user->password = $hashed;
        $user->save();

        $attemptInstance = [
            'email' => $this->email,
            'password' => $this->password,
        ];
        
        if(auth()->attempt($attemptInstance, $this->remember)) {
            session()->regenerate();
            return to_route('web.home');
        } else {
            $this->addError('password', 'Password is incorrect.');
        }
    }
    
    public function render()
    {
        return view('livewire.web.auth.register');
    }
}
