<div class="min-h-screen {{ $darkMode ? 'bg-gray-900' : 'bg-gray-50' }} transition-colors duration-200">
    {{-- Header --}}
    <header class="{{ $darkMode ? 'bg-gray-800 border-gray-700' : 'bg-white border-gray-200' }} border-b transition-colors duration-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="bg-indigo-600 rounded-lg p-2">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold {{ $darkMode ? 'text-white' : 'text-gray-900' }}">qtrt</h1>
                        <p class="text-xs {{ $darkMode ? 'text-gray-400' : 'text-gray-500' }}">Point of Sale</p>
                    </div>
                </div>

                <nav class="hidden md:flex items-center space-x-4">
                    <a href="{{ route('pos') }}" class="flex items-center space-x-2 px-4 py-2 {{ $darkMode ? 'text-gray-300 hover:bg-gray-700' : 'text-gray-700 hover:bg-gray-100' }} rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span>Products</span>
                    </a>
                    <a href="{{ route('sales-history') }}" class="flex items-center space-x-2 px-4 py-2 {{ $darkMode ? 'bg-gray-700 text-white' : 'bg-gray-900 text-white' }} rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Sales History</span>
                    </a>
                    <a href="{{ route('end-of-day') }}" class="flex items-center space-x-2 px-4 py-2 {{ $darkMode ? 'text-gray-300 hover:bg-gray-700' : 'text-gray-700 hover:bg-gray-100' }} rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>End of Day</span>
                    </a>
                </nav>

                <div class="flex items-center space-x-3">
                    <button class="w-10 h-10 bg-indigo-600 text-white rounded-full flex items-center justify-center font-semibold hover:bg-indigo-700 transition-colors">
                        DF
                    </button>
                    <button class="hidden sm:block {{ $darkMode ? 'text-gray-400 hover:text-gray-200' : 'text-gray-600 hover:text-gray-900' }} transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </button>
                    <button
                        wire:click="toggleDarkMode"
                        class="hidden sm:block {{ $darkMode ? 'text-gray-400 hover:text-gray-200' : 'text-gray-600 hover:text-gray-900' }} transition-colors"
                    >
                        @if($darkMode)
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        @else
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                            </svg>
                        @endif
                    </button>
                    <button class="hidden sm:block {{ $darkMode ? 'text-gray-400 hover:text-gray-200' : 'text-gray-600 hover:text-gray-900' }} transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    {{-- Main Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
        <div class="{{ $darkMode ? 'bg-gray-800' : 'bg-white' }} rounded-xl shadow-sm p-6 transition-colors duration-200">
            <h2 class="text-2xl font-bold {{ $darkMode ? 'text-white' : 'text-gray-900' }} mb-6">Sales History</h2>

            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 {{ $darkMode ? 'text-gray-600' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="mt-2 text-sm font-medium {{ $darkMode ? 'text-gray-300' : 'text-gray-900' }}">No sales history</h3>
                <p class="mt-1 text-sm {{ $darkMode ? 'text-gray-500' : 'text-gray-500' }}">Sales transactions will appear here.</p>
            </div>
        </div>
    </div>
</div>
