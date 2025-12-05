<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EndOfDay extends Component
{
    public $darkMode = false;
    public $reportDate;

    public function mount()
    {
        $this->darkMode = session('darkMode', false);
        $this->reportDate = now()->toDateString();
    }

    public function toggleDarkMode()
    {
        $this->darkMode = !$this->darkMode;
        session(['darkMode' => $this->darkMode]);
    }

    public function getDayStats()
    {
        $date = $this->reportDate ?? now()->toDateString();

        $totalRevenue = DB::table('transactions')
            ->whereDate('created_at', $date)
            ->sum('total');

        $totalTransactions = DB::table('transactions')
            ->whereDate('created_at', $date)
            ->count();

        $totalItems = DB::table('transactions')
            ->whereDate('created_at', $date)
            ->get()
            ->sum(function($transaction) {
                $items = json_decode($transaction->items, true);
                return array_sum(array_column($items, 'quantity'));
            });

        return [
            'revenue' => $totalRevenue,
            'transactions' => $totalTransactions,
            'items' => $totalItems,
        ];
    }

    public function getSalesByCategory()
    {
        $date = $this->reportDate ?? now()->toDateString();

        $transactions = DB::table('transactions')
            ->whereDate('created_at', $date)
            ->get();

        $categoryStats = [];

        foreach ($transactions as $transaction) {
            $items = json_decode($transaction->items, true);
            foreach ($items as $item) {
                $category = $item['category'] ?? 'uncategorized';
                if (!isset($categoryStats[$category])) {
                    $categoryStats[$category] = [
                        'items_sold' => 0,
                        'revenue' => 0,
                    ];
                }
                $categoryStats[$category]['items_sold'] += $item['quantity'];
                $categoryStats[$category]['revenue'] += $item['price'] * $item['quantity'];
            }
        }

        $total = array_sum(array_column($categoryStats, 'revenue'));

        foreach ($categoryStats as $category => &$stats) {
            $stats['percentage'] = $total > 0 ? ($stats['revenue'] / $total) * 100 : 0;
        }

        return $categoryStats;
    }

    public function getSalesByPaymentMethod()
    {
        $date = $this->reportDate ?? now()->toDateString();

        $paymentStats = DB::table('transactions')
            ->select('payment_method', DB::raw('count(*) as transactions'), DB::raw('sum(total) as revenue'))
            ->whereDate('created_at', $date)
            ->groupBy('payment_method')
            ->get();

        $total = $paymentStats->sum('revenue');

        return $paymentStats->map(function($stat) use ($total) {
            $stat->percentage = $total > 0 ? ($stat->revenue / $total) * 100 : 0;
            return $stat;
        });
    }

    public function getAverageTransaction()
    {
        $date = $this->reportDate ?? now()->toDateString();

        $stats = $this->getDayStats();

        return $stats['transactions'] > 0 ? $stats['revenue'] / $stats['transactions'] : 0;
    }

    public function getAverageItems()
    {
        $date = $this->reportDate ?? now()->toDateString();

        $stats = $this->getDayStats();

        return $stats['transactions'] > 0 ? $stats['items'] / $stats['transactions'] : 0;
    }

    public function render()
    {
        $stats = $this->getDayStats();
        $categoryStats = $this->getSalesByCategory();
        $paymentStats = $this->getSalesByPaymentMethod();
        $averageTransaction = $this->getAverageTransaction();
        $averageItems = $this->getAverageItems();

        return view('livewire.end-of-day', [
            'stats' => $stats,
            'categoryStats' => $categoryStats,
            'paymentStats' => $paymentStats,
            'averageTransaction' => $averageTransaction,
            'averageItems' => $averageItems,
        ])->layout('layouts.app');
    }
}
