<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Admin Login</title>
</head>

<body class="font-poppins bg-gray-50 text-gray-800">
    <div class="grid grid-cols-12 h-screen w-full">
        <!-- Left Image Section -->
        <div class="hidden lg:flex col-span-8 items-center justify-center bg-gray-100">
            <img src="{{ asset('images/Login_IMG.webp') }}" alt="Login Illustration" class="w-3/5">
        </div>

        <!-- Right Login Section -->
        <div class="col-span-12 lg:col-span-4 flex flex-col items-center justify-center px-4 lg:px-12">
            <!-- Alert Section -->
            <div class="bg-yellow-100 text-yellow-500 rounded-lg p-4 w-full lg:w-4/5 mb-6">
                <p class="text-sm">
                    <strong>Note:</strong>Note: If you cannot login here, please close the codecanyon frame by clicking on x Remove Frame button from top right corner on the page or
                    <a href="{{route('admin.login')}}" class="text-red-600 md:w-8/12 lg:w-4/5 font-semibold underline">&gt;&gt; Click here &lt;&lt;</a>.
                </p>
            </div>

            <!-- Logo Section -->
            <a href="{{ route('admin.login') }}" class="mb-8">
                <img src="{{ asset('images/Untitled_1.webp') }}" alt="Admin Logo" class="w-4/5 mx-auto object-contain">
            </a>

            <!-- Login Form -->
            <form class="w-full lg:w-4/5 bg-white " action="{{ route('admin.login') }}" method="POST">
                @csrf
                <h2 class="text-lg font-semibold text-gray-600 mb-4">Sign in to start your session</h2>

                <!-- Email Input -->
                <div class="mb-4">
                    {{-- <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label> --}}
                    <input type="email" name="email" id="email" value="admin@example.com"
                        class="block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none"
                        required>
                </div>

                <!-- Password Input -->
                <div class="mb-4">
                    {{-- <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label> --}}
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
            </form>
        </div>
    </div>
</body>

</html>
