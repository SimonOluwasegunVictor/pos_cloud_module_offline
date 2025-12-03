<?php

use Illuminate\Support\Facades\Route;
//use App\Livewire\AdminSetup;
//use App\Livewire\AdminLogin;
use App\Livewire\PointOfSale;
use App\Livewire\AdminSetup;
use App\Livewire\SalesLogin;

//
Route::get('/', AdminSetup::class)->name('admin.setup');
//Route::get('/login', AdminLogin::class)->name('sales.login');
Route::get('/pos', PointOfSale::class)->name('pos.screen');
Route::get('/sales-login', SalesLogin::class)->name('salesLogin');
//Route::get('/', AdminSetup::class)->name('admin.setup');
