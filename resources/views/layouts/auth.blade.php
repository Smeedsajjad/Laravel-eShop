<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
    @livewireStyles
</head>

<body class="font-poppins bg-gray-50 text-gray-800">
    <div class="grid grid-cols-12 h-screen w-full">
        <!-- Left Image Section -->
        <div class="hidden lg:flex col-span-8 items-center justify-center bg-gray-100">
            <img src="{{ asset('images/Login_IMG.webp') }}" alt="Login Illustration" class="w-3/5">
        </div>

        <!-- Right Content Section -->
        <div class="col-span-12 lg:col-span-4 flex flex-col items-center justify-center px-4 lg:px-12">
            <!-- Alert Section -->
            <div class="bg-yellow-100 text-yellow-500 rounded-lg p-4 w-full lg:w-4/5 mb-6">
                <p class="text-sm">
                    <strong>Note:</strong> If you cannot log in here, please close the Codecanyon frame by clicking on <b>X Remove Frame</b> or
                    <a href="{{ route('admin.login') }}" class="text-red-600 font-semibold underline">Click here</a>.
                </p>
            </div>

            <!-- Logo Section -->
            <a href="{{ route('admin.login') }}" class="mb-8">
                <img src="{{ asset('images/Untitled_1.webp') }}" alt="Admin Logo" class="w-4/5 mx-auto object-contain">
            </a>

            <!-- Page Content -->
            <div class="w-full lg:w-4/5 bg-white p-6 rounded-lg shadow-md">
                @yield('content')
            </div>
        </div>
    </div>
    @livewireScript
</body>

</html>
