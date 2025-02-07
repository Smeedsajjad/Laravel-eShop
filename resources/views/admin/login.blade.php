@extends('layouts.auth')

@section('title', 'Admin Login')

@section('content')
<form action="{{ route('admin.login') }}" method="POST">
    @csrf
    <h2 class="text-lg font-semibold text-gray-600 mb-4">Sign in to start your session</h2>

    <!-- Email Input -->
    <div class="mb-4">
        <input type="email" name="email" id="email" value="admin@example.com"
            class="block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none"
            required>
    </div>

    <!-- Password Input -->
    <div class="mb-4">
        <input type="password" name="password" id="password" value="admin123"
            class="block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none"
            required>
    </div>

    <!-- Remember Me -->
    <div class="flex items-center mb-6">
        <input id="remember" type="checkbox" name="remember"
            class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
        <label for="remember" class="ml-2 text-sm text-gray-700">Remember me</label>
    </div>

    <!-- Submit Button -->
    <button type="submit"
        class="w-full bg-purple-600 text-white p-3 rounded-lg hover:bg-purple-700 focus:outline-none transition-transform transform duration-200 hover:-translate-y-1">
        Submit
    </button>

    <!-- Forgot Password Link -->
    <div class="text-center mt-4">
        <a href="{{ route('admin.forgot-password') }}" class="text-sm text-purple-600 hover:underline">
            Forgot your password?
        </a>
    </div>
</form>
@endsection
