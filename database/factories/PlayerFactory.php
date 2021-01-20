<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Player::truncate();

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'nickname' => $this->faker->username,
            'password' => bcrypt('password'), // password
            'game_id' => rand(1, 10),
            'last_login' => now()
        ];
    }
}
