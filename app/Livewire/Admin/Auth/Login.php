<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email, $password, $remember;

    public $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8'
    ];
    public function login() {
        $this->validate();

        if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $this->remember)){
            return redirect()->route('admin.dashboard');
        }
        session()->flash('error', 'Invalid email or password.');
    }
    public function render()
    {
        return view('livewire.admin.auth.login');
    }
}
