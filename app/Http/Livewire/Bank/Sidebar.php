<?php

namespace App\Http\Livewire\Bank;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.bank.sidebar', ['user' => Auth::user()]);
    }
}
