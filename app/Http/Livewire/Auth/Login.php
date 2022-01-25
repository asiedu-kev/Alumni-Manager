<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
   
    public function register(){
        return view('livewire.auth.register')
                ->layout('layouts.auth');
    }
    public function render()
    {
        return view('livewire.auth.login')
                ->layout('layouts.auth');
    }
}