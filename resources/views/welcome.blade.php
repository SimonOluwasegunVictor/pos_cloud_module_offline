<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8 max-w-md w-full text-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100 mb-4">Welcome to the POS System</h1>
            <p class="text-gray-600 dark:text-gray-400 mb-6">Get started by setting up your admin account.</p>
            <a href="{{ route('adminSetup') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-lg shadow">
                Setup Admin Account
            </a>
        </div>
    </div>

    @livewireScripts
</body>
</html>
