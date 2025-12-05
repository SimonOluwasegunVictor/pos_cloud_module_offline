<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SalesHistory extends Component
{
    public $darkMode = false;
    public $search = '';
    public $startDate = '';
    public $endDate = '';
    public $selectedTransaction = null;

    public function mount()
    {
        $this->darkMode = session('darkMode', false);
    }

    public function toggleDarkMode()
    {
        $this->darkMode = !$this->darkMode;
        session(['darkMode' => $this->darkMode]);
    }

    public function viewTransaction($transactionId)
    {
        $this->selectedTransaction = DB::table('transactions')
            ->where('transaction_id', $transactionId)
            ->first();

        if ($this->selectedTransaction) {
            $this->selectedTransaction->items = json_decode($this->selectedTransaction->items, true);
        }
    }

    public function closeModal()
    {
        $this->selectedTransaction = null;
    }

    public function getTransactions()
    {
        $query = DB::table('transactions')->orderBy('created_at', 'desc');

        if ($this->search) {
            $query->where(function($q) {
                $q->where('transaction_id', 'like', '%' . $this->search . '%')
                    ->orWhere('customer_id', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->startDate) {
            $query->whereDate('created_at', '>=', $this->startDate);
        }

        if ($this->endDate) {
            $query->whereDate('created_at', '<=', $this->endDate);
        }

        return $query->get();
    }

    public function getTodayStats()
    {
        $today = now()->toDateString();

        $todaySales = DB::table('transactions')
            ->whereDate('created_at', $today)
            ->count();

        $todayRevenue = DB::table('transactions')
            ->whereDate('created_at', $today)
            ->sum('total');

        return [
            'sales' => $todaySales,
            'revenue' => $todayRevenue,
            'transactions' => $todaySales,
        ];
    }

    public function render()
    {
        $transactions = $this->getTransactions();
        $stats = $this->getTodayStats();

        return view('livewire.sales-history', [
            'transactions' => $transactions,
            'stats' => $stats,
        ])->layout('layouts.app');
    }
}
