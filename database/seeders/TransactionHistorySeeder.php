<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class TransactionHistorySeeder extends Seeder
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

        $bankAccount->transactionHistories()->saveMany([
            new \App\Models\TransactionHistory(['message' => 'Tiens mon super reuf', 'amount' => 11.56]),
            new \App\Models\TransactionHistory(['message' => 'Cadeau de mémé', 'amount' => 150]),
            new \App\Models\TransactionHistory(['message' => 'Yo c\'est la banque va te faire voir t\'as des dettes', 'amount' => -1000])
        ]);
    }
}
