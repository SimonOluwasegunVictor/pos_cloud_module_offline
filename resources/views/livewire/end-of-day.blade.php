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
                    <a href="{{ route('sales-history') }}" class="flex items-center space-x-2 px-4 py-2 {{ $darkMode ? 'text-gray-300 hover:bg-gray-700' : 'text-gray-700 hover:bg-gray-100' }} rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Sales History</span>
                    </a>
                    <a href="{{ route('end-of-day') }}" class="flex items-center space-x-2 px-4 py-2 {{ $darkMode ? 'bg-gray-700 text-white' : 'bg-gray-900 text-white' }} rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>End of Day</span>
                    </a>
                </nav>

                <div class="flex items-center space-x-3">
                    <button class="w-10 h-10 bg-indigo-600 text-white rounded-full flex items-center justify-center font-semibold hover:bg-indigo-700 transition-colors">
                        KN
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
            {{-- Header --}}
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center space-x-2">
                    <svg class="w-6 h-6 {{ $darkMode ? 'text-gray-400' : 'text-gray-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <div>
                        <h2 class="text-2xl font-bold {{ $darkMode ? 'text-white' : 'text-gray-900' }}">End of Day Report</h2>
                        <p class="text-sm {{ $darkMode ? 'text-gray-400' : 'text-gray-500' }}">{{ \Carbon\Carbon::parse($reportDate)->format('l, F d, Y') }}</p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <button class="px-4 py-2 {{ $darkMode ? 'bg-gray-700 text-gray-300 hover:bg-gray-600' : 'bg-white text-gray-700 hover:bg-gray-50' }} border {{ $darkMode ? 'border-gray-600' : 'border-gray-300' }} rounded-lg transition-colors flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                        </svg>
                        <span>Print</span>
                    </button>
                    <button class="px-4 py-2 {{ $darkMode ? 'bg-gray-700 text-gray-300 hover:bg-gray-600' : 'bg-white text-gray-700 hover:bg-gray-50' }} border {{ $darkMode ? 'border-gray-600' : 'border-gray-300' }} rounded-lg transition-colors flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Export</span>
                    </button>
                </div>
            </div>

            {{-- Summary Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="bg-blue-50 dark:bg-blue-900/20 rounded-lg p-4 flex items-center space-x-4">
                    <div class="bg-blue-500 rounded-full p-3">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-blue-600 dark:text-blue-400">Total Revenue</p>
                        <p class="text-2xl font-bold {{ $darkMode ? 'text-white' : 'text-gray-900' }}">₦{{ number_format($stats['revenue'], 2) }}</p>
                    </div>
                </div>

                <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-4 flex items-center space-x-4">
                    <div class="bg-green-500 rounded-full p-3">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-green-600 dark:text-green-400">Transactions</p>
                        <p class="text-2xl font-bold {{ $darkMode ? 'text-white' : 'text-gray-900' }}">{{ $stats['transactions'] }}</p>
                    </div>
                </div>

                <div class="bg-purple-50 dark:bg-purple-900/20 rounded-lg p-4 flex items-center space-x-4">
                    <div class="bg-purple-500 rounded-full p-3">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-purple-600 dark:text-purple-400">Items Sold</p>
                        <p class="text-2xl font-bold {{ $darkMode ? 'text-white' : 'text-gray-900' }}">{{ $stats['items'] }}</p>
                    </div>
                </div>
            </div>

            {{-- Sales by Time Chart Placeholder --}}
            <div class="{{ $darkMode ? 'bg-gray-700' : 'bg-gray-50' }} rounded-lg p-6 mb-6">
                <div class="flex items-center space-x-2 mb-4">
                    <svg class="w-5 h-5 {{ $darkMode ? 'text-gray-400' : 'text-gray-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="font-semibold {{ $darkMode ? 'text-white' : 'text-gray-900' }}">Sales by Time of Day</h3>
                </div>
                <p class="text-sm {{ $darkMode ? 'text-gray-400' : 'text-gray-500' }}">Identify peak sales hours to optimize staffing and operations</p>
                @if($stats['transactions'] > 0)
                    <div class="mt-4 text-center py-8 {{ $darkMode ? 'text-gray-500' : 'text-gray-400' }}">
                        <p>Chart visualization would appear here</p>
                    </div>
                @else
                    <div class="mt-4 text-center py-8 {{ $darkMode ? 'text-gray-500' : 'text-gray-400' }}">
                        <p>No sales data for today</p>
                    </div>
                @endif
            </div>

            {{-- Sales by Category --}}
            <div class="{{ $darkMode ? 'bg-gray-700' : 'bg-gray-50' }} rounded-lg p-6 mb-6">
                <h3 class="font-semibold {{ $darkMode ? 'text-white' : 'text-gray-900' }} mb-4">Sales by Category</h3>
                @if(count($categoryStats) > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="{{ $darkMode ? 'bg-gray-600' : 'bg-gray-100' }}">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium {{ $darkMode ? 'text-gray-300' : 'text-gray-600' }} uppercase">Category</th>
                                <th class="px-4 py-2 text-left text-xs font-medium {{ $darkMode ? 'text-gray-300' : 'text-gray-600' }} uppercase">Items Sold</th>
                                <th class="px-4 py-2 text-left text-xs font-medium {{ $darkMode ? 'text-gray-300' : 'text-gray-600' }} uppercase">Revenue</th>
                                <th class="px-4 py-2 text-left text-xs font-medium {{ $darkMode ? 'text-gray-300' : 'text-gray-600' }} uppercase">Percentage</th>
                            </tr>
                            </thead>
                            <tbody class="{{ $darkMode ? 'divide-gray-600' : 'divide-gray-200' }} divide-y">
                            @foreach($categoryStats as $category => $stat)
                                <tr>
                                    <td class="px-4 py-3 {{ $darkMode ? 'text-gray-300' : 'text-gray-900' }} capitalize">{{ $category }}</td>
                                    <td class="px-4 py-3 {{ $darkMode ? 'text-gray-300' : 'text-gray-900' }}">{{ $stat['items_sold'] }}</td>
                                    <td class="px-4 py-3 {{ $darkMode ? 'text-gray-300' : 'text-gray-900' }}">₦{{ number_format($stat['revenue'], 2) }}</td>
                                    <td class="px-4 py-3 {{ $darkMode ? 'text-gray-300' : 'text-gray-900' }}">{{ number_format($stat['percentage'], 1) }}%</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-center py-8 {{ $darkMode ? 'text-gray-500' : 'text-gray-400' }}">No sales data for today</p>
                @endif
            </div>

            {{-- Sales by Payment Method --}}
            <div class="{{ $darkMode ? 'bg-gray-700' : 'bg-gray-50' }} rounded-lg p-6 mb-6">
                <h3 class="font-semibold {{ $darkMode ? 'text-white' : 'text-gray-900' }} mb-4">Sales by Payment Method</h3>
                @if($paymentStats->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="{{ $darkMode ? 'bg-gray-600' : 'bg-gray-100' }}">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium {{ $darkMode ? 'text-gray-300' : 'text-gray-600' }} uppercase">Payment Method</th>
                                <th class="px-4 py-2 text-left text-xs font-medium {{ $darkMode ? 'text-gray-300' : 'text-gray-600' }} uppercase">Transactions</th>
                                <th class="px-4 py-2 text-left text-xs font-medium {{ $darkMode ? 'text-gray-300' : 'text-gray-600' }} uppercase">Revenue</th>
                                <th class="px-4 py-2 text-left text-xs font-medium {{ $darkMode ? 'text-gray-300' : 'text-gray-600' }} uppercase">Percentage</th>
                            </tr>
                            </thead>
                            <tbody class="{{ $darkMode ? 'divide-gray-600' : 'divide-gray-200' }} divide-y">
                            @foreach($paymentStats as $stat)
                                <tr>
                                    <td class="px-4 py-3 {{ $darkMode ? 'text-gray-300' : 'text-gray-900' }}">{{ $stat->payment_method }}</td>
                                    <td class="px-4 py-3 {{ $darkMode ? 'text-gray-300' : 'text-gray-900' }}">{{ $stat->transactions }}</td>
                                    <td class="px-4 py-3 {{ $darkMode ? 'text-gray-300' : 'text-gray-900' }}">₦{{ number_format($stat->revenue, 2) }}</td>
                                    <td class="px-4 py-3 {{ $darkMode ? 'text-gray-300' : 'text-gray-900' }}">{{ number_format($stat->percentage, 1) }}%</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-center py-8 {{ $darkMode ? 'text-gray-500' : 'text-gray-400' }}">No payment data for today</p>
                @endif
            </div>

            {{-- Averages --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="{{ $darkMode ? 'bg-gray-700' : 'bg-gray-50' }} rounded-lg p-6">
                    <h3 class="font-semibold {{ $darkMode ? 'text-white' : 'text-gray-900' }} mb-2">Average Transaction</h3>
                    <p class="text-3xl font-bold text-indigo-600">₦{{ number_format($averageTransaction, 2) }}</p>
                    <p class="text-sm {{ $darkMode ? 'text-gray-400' : 'text-gray-500' }} mt-1">Per sale today</p>
                </div>

                <div class="{{ $darkMode ? 'bg-gray-700' : 'bg-gray-50' }} rounded-lg p-6">
                    <h3 class="font-semibold {{ $darkMode ? 'text-white' : 'text-gray-900' }} mb-2">Average Items</h3>
                    <p class="text-3xl font-bold text-green-600">{{ number_format($averageItems, 1) }}</p>
                    <p class="text-sm {{ $darkMode ? 'text-gray-400' : 'text-gray-500' }} mt-1">Per transaction</p>
                </div>
            </div>
        </div>
    </div>
</div>
