<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Character::factory(10)->create();

        $this->call([
            UserSeeder::class,
            CharacterSeeder::class,
            BankAccountSeeder::class,
            TransactionHistorySeeder::class,
            BalanceHistorySeeder::class
        ]);
    }
}
