<div class="min-h-screen flex items-center justify-center
    bg-gradient-to-br from-blue-50 to-indigo-100
    dark:from-gray-900 dark:to-gray-800 p-4">

    <div class="w-full max-w-md shadow-xl bg-white dark:bg-gray-900 rounded-lg">

        <!-- Card Header -->
        <div class="space-y-1 text-center p-6">
            <div class="mx-auto w-16 h-16 bg-indigo-600 rounded-full flex items-center justify-center mb-4">
                <!-- Shield Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 22c4.97-1.1 8-4 8-10V7l-8-4-8 4v5c0 6 3.03 8.9 8 10z" />
                </svg>
            </div>

            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">POS System</h2>

            <p class="text-gray-500 dark:text-gray-400">
                <span class="block text-indigo-600 dark:text-indigo-400 font-medium mb-1">
                    Example Company
                </span>
                Sign in to access your sales dashboard
            </p>
        </div>

        <!-- Form -->
        <div class="p-6 space-y-4">
            <form action="{{ route('pos.screen') }}" method="GET" class="space-y-4">

                <!-- Username -->
                <div class="space-y-2">
                    <label class="text-sm text-gray-700 dark:text-gray-300">Username</label>

                    <div class="relative">
                        <!-- User Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="absolute left-3 top-3 h-4 w-4 text-gray-400"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5.121 17.804A4 4 0 019 15h6a4 4 0 013.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                        <input
                            name="username"
                            placeholder="Enter your username"
                            class="pl-10 w-full border rounded-lg px-3 py-2 dark:bg-gray-800 dark:border-gray-700"
                        />
                    </div>
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <label class="text-sm text-gray-700 dark:text-gray-300">Password</label>

                    <div class="relative">
                        <!-- Lock Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="absolute left-3 top-3 h-4 w-4 text-gray-400"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 11V7a4 4 0 10-8 0v4m8 0h4m-4 0v10m0 0H8m4 0h4" />
                        </svg>

                        <input
                            type="password"
                            name="password"
                            placeholder="Enter your password"
                            class="pl-10 w-full border rounded-lg px-3 py-2 dark:bg-gray-800 dark:border-gray-700"
                        />
                    </div>
                </div>

                <!-- Sign In -->
                <button
                    type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-lg shadow">
                    Sign In
                </button>

                <p class="text-xs text-center text-gray-500 dark:text-gray-400 mt-4">
                    Demo: Enter any username and password to continue
                </p>
            </form>

            <!-- Admin Logout -->
            <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
                <button
                    type="button"
                    class="w-full text-red-600 hover:text-red-700 hover:bg-red-50
                           dark:hover:bg-red-950 rounded-lg flex items-center justify-center py-2">

                    <!-- Shield Alert Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 22c4.97-1.1 8-4 8-10V7l-8-4-8 4v5c0 6 3.03 8.9 8 10zM12 11v4m0 4h.01" />
                    </svg>

                    Admin Logout
                </button>
            </div>

        </div>
    </div>
</div>
