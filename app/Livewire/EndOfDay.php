<?php

namespace App\Livewire;

use Livewire\Component;

class EndOfDay extends Component
{
    public $darkMode = false;

    public function mount()
    {
        $this->darkMode = session('darkMode', false);
    }

    public function toggleDarkMode()
    {
        $this->darkMode = !$this->darkMode;
        session(['darkMode' => $this->darkMode]);
    }

    public function render()
    {
        return view('livewire.end-of-day')->layout('layouts.app');
    }
}
