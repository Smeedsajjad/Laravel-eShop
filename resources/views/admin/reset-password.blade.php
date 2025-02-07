@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
<form action="{{ route('admin.reset-password') }}" method="POST">
    @csrf
    <h2 class="text-lg font-semibold text-gray-600 mb-4">Reset Your Password</h2>
    <p class="text-sm text-gray-500 mb-4">
        Enter your email address, and we'll send you a link to reset your password.
    </p>
    <input type="hidden" name="token" value="{{ $token }}">

    <!-- Email Input -->
    <div class="mb-4">
        <input type="email" name="email" id="email"
            class="block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none"
            placeholder="Enter your email" required>
    </div>
    <div class="mb-4">
        <input type="password" name="password" id="password"
            class="block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none"
            placeholder="New Password" required>
    </div>
    <div class="mb-4">
        <input type="password" name="password_confirmation" id="password_confirmation"
            class="block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none"
            placeholder="Confirm Password" required>
    </div>

    <!-- Submit Button -->
    <button type="submit"
        class="w-full bg-purple-600 text-white p-3 rounded-lg hover:bg-purple-700 focus:outline-none transition-transform transform duration-200 hover:-translate-y-1">
        Reset Password
    </button>

    <!-- Back to Login -->
    <div class="text-center mt-4">
        <a href="{{ route('admin.login') }}" class="text-sm text-purple-600 hover:underline">
            Back to Login
        </a>
    </div>
</form>
@endsection
