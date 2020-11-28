<?php

namespace App\Http\Livewire\Bank;

use App\Models\BankAccount;
use Livewire\Component;

class Accounts extends Component
{
    public BankAccount $bankAccount;

    public function render()
    {
        return view('livewire.bank.accounts')->layout('layouts.bank');
    }
}
