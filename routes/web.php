<?php

use Illuminate\Support\Facades\Route;
//use App\Livewire\AdminSetup;
//use App\Livewire\AdminLogin;
use App\Livewire\PointOfSale;
use App\Livewire\AdminSetup;
use App\Livewire\SalesLogin;
use App\Livewire\SalesHistory;
use App\Livewire\EndOfDay;

Route::get('/', function () {
    return redirect()->route('pos');
});

Route::get('/', AdminSetup::class)->name('admin.setup');
Route::get('/sales-login', SalesLogin::class)->name('sales.login');
Route::get('/pos', PointOfSale::class)->name('pos');
Route::get('/sales-history', SalesHistory::class)->name('sales-history');
Route::get('/end-of-day', EndOfDay::class)->name('end-of-day');
