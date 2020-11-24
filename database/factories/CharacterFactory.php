<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Character::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['homme', 'femme']);

        return [
            'user_id' => User::factory(),
            'firstname' => $this->faker->firstname($gender),
            'lastname' => $this->faker->lastname,
            'age' => $this->faker->numberBetween(10, 99),
            'sex' =>  $gender,
            'nutri_score' => $this->faker->randomFloat(2, 0, 100),
            'story' => $this->faker->text(250)
        ];
    }
}
