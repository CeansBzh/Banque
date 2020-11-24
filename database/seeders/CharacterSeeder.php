<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Character;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    public function __construct(Character $character)
    {
        $this->character = $character;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $this->character->firstname = 'Michel';
        $this->character->lastname = 'Sport';
        $this->character->age = 52;
        $this->character->sex = 'homme';
        $this->character->nutri_score = 12.53;
        $this->character->story = $faker->text(250);
        $this->character->user()->associate(User::where('name', 'Ceans')->first());
        $this->character->save();
    }
}
