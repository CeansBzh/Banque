<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class BalanceHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', 'Ceans')->with('character.bankAccounts')->first();
        $bankAccount = $user->character->bankAccounts()->first();

        $bankAccount->balanceHistories()->save(
            new \App\Models\BalanceHistory(['amount' => 12534.53]),
        );
    }
}
