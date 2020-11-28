<?php

namespace App\Http\Livewire\Bank;

use Livewire\Component;
use Illuminate\Support\Arr;
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

        $transactionHistoriesSorted = array_reverse(array_values(Arr::sort($transactionHistories, function ($value) {
            return $value['created_at'];
        })));

        return view('livewire.bank.dashboard', ['user' => $user, 'transactionHistories' => $transactionHistoriesSorted])->layout('layouts.bank');
    }
}
