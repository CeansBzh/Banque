<?php

namespace App\Http\Livewire\Bank;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.bank.dashboard')->layout('layouts.bank');
    }
}
