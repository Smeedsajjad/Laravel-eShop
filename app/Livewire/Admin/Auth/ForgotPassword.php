<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;

class ForgotPassword extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|exists:admins,email',
    ];

    public function sendResetLink()
    {
        $this->validate();

        $status = Password::broker('admins')->sendResetLink(['email' => $this->email]);

        session()->flash('status', __($status));
    }
    public function render()
    {
        return view('livewire.admin.auth.forgot-password');
    }
}
