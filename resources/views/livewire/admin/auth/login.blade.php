<div class="w-full lg:w-4/5 bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-lg font-semibold text-gray-600 mb-4">Admin Login</h2>

    @if (session()->has('error'))
        <div class="text-red-600 mb-3">{{ session('error') }}</div>
    @endif

    <form wire:submit.prevent="login">
        <!-- Email Input -->
        <div class="mb-4">
            <input type="email" wire:model="email" placeholder="Email"
                class="block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Password Input -->
        <div class="mb-4">
            <input type="password" wire:model="password" placeholder="Password"
                class="block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Remember Me -->
        <div class="flex items-center mb-6">
            <input id="remember" type="checkbox" wire:model="remember"
                class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
            <label for="remember" class="ml-2 text-sm text-gray-700">Remember me</label>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full bg-purple-600 text-white p-3 rounded-lg hover:bg-purple-700 focus:outline-none transition-transform transform duration-200 hover:-translate-y-1">
            Login
        </button>
    </form>
</div>
