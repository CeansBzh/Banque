<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class BankAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', 'Ceans')->with('character.bankAccounts')->first();

        $user->character->bankAccounts()->saveMany([
            new \App\Models\BankAccount(['name' => 'Mon Super Compte', 'balance' => 12534.53]),
            new \App\Models\BankAccount(['name' => 'Deuxième Compte', 'balance' => 200])
        ]);
    }
}
