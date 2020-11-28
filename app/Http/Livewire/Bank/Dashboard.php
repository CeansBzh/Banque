<?php

namespace App\Http\Livewire\Bank;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {
        $user = Auth::user();

        $transactionHistories = collect([]);

        foreach ($user->bankAccounts()->with('transactionHistories')->get() as $bankAccount) {
            foreach ($bankAccount->transactionHistories()->get() as $transactionHistory) {
                $transactionHistories->prepend($transactionHistory);
            }
        }

        $transactionHistories->sortBy('lastUpdated');

        return view('livewire.bank.dashboard', ['user' => $user, 'transactionHistories' => $transactionHistories])->layout('layouts.bank');
    }
}
