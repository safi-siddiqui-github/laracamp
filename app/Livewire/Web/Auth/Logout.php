<?php

namespace App\Livewire\Web\Auth;

use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        return to_route('web.login');
    }

    public function render()
    {
        return view('livewire.web.auth.logout');
    }
}
