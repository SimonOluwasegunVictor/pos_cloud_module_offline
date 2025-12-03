<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-50 to-purple-100 dark:from-gray-900 dark:to-gray-800 p-4">
  <div class="w-full max-w-md shadow-xl bg-white dark:bg-gray-900 rounded-lg">
    <div class="space-y-1 text-center p-6">
      <div class="mx-auto w-16 h-16 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-full flex items-center justify-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2 2 .896 2 2z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
        </svg>
      </div>
      <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">Admin Setup</h2>
      <p class="text-gray-500 dark:text-gray-400">Configure your company data to get started</p>
    </div>

    <div class="p-6 space-y-4">
      <form action="{{ route('salesLogin') }}" method="GET" class="space-y-4">
        <!-- Company Name -->
        <div class="space-y-2">
          <label for="companyName" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Company Name</label>
          <div class="relative">
            <!-- building icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-3 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-2a4 4 0 014-4h10a4 4 0 014 4v2M7 10V5a2 2 0 012-2h6a2 2 0 012 2v5" />
            </svg>
            <input type="text" id="companyName" placeholder="Enter your company name" class="w-full pl-10 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-700">
{{--            @error('companyName') <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span> @enderror--}}
          </div>
        </div>

        <!-- Admin Username -->
        <div class="space-y-2">
          <label for="adminUsername" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Admin Username</label>
          <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-3 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2 2 .896 2 2z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
            <input type="text" id="adminUsername" placeholder="Enter admin username" class="w-full pl-10 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-700">
{{--            @error('adminUsername') <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span> @enderror--}}
          </div>
        </div>

        <!-- Admin Password -->
        <div class="space-y-2">
          <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Admin Password</label>
          <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-3 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2 2 .896 2 2z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
            <input type="password" id="password" class="w-full pl-10 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-700">
{{--            @error('password') <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span> @enderror--}}
          </div>
        </div>

{{--          <p class="text-sm text-red-600 dark:text-red-400">{{ $errorMessage }}</p>--}}

        <button type="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow">
          Initialize System
        </button>

        <p class="text-xs text-center text-gray-500 dark:text-gray-400 mt-4">
          This data will be stored persistently and bind your company to this device
        </p>
      </form>
    </div>
  </div>
</div>
