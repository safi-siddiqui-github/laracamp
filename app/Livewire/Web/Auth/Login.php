<?php

namespace App\Livewire\Web\Auth;

use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{

    #[Rule('required|email|ends_with:gmail.com|exists:users')]
    public $email = '';
    
    #[Rule('required')]
    public $password = '';

    #[Rule('boolean')]
    public $remember = '';

    public function login()
    {
        $this->validate(); 

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
        return view('livewire.web.auth.login');
    }
}
