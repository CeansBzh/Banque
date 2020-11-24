<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Character;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->user->name = 'Ceans';
        $this->user->email = 'ebriantais@orange.fr';
        $this->user->password = Hash::make('u4V1goX6V3#c');
        $this->user->save();
    }
}
