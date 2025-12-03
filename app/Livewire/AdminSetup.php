<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class AdminSetup extends Component
{
//    public $companyName = '';
//    public $adminUsername = '';
//    public $password = '';
//    public $errorMessage = '';

    public function submit()
    {
        // Here you can add validation, saving logic, etc.
        $this->validate([
            'companyName' => 'required|string|max:255',
            'adminUsername' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        // e.g. store the values, initialize company, etc.
        // For demo: redirect to SalesLogin route
        // return redirect()->route('sales.login');   // or route name you have for SalesLogin
    }

    public function render()
    {
        return view('livewire.admin-setup')->layout('layouts.app');
    }
}
