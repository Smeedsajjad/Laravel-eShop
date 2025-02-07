<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class AdminForgotPasswordController extends Controller
{
    public function showLinkRequestForm (){
        return view('admin.forget-password');
    }

    public function sendRestLinkEmail(Request $request){
        $request->validate(['email' => 'required|email|exists:admins,email']);
        $status = Password::broker('admins')->sendResetLink($request->only('email'));
        return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
    }
}
