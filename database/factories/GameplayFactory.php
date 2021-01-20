<?php

namespace Database\Factories;

use App\Models\Gameplay;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameplayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gameplay::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        Gameplay::truncate();

        return [
            'game_id' => rand(1, 5),
            'starter_player_id' => rand(1, 10),
            'number_of_players' => rand(1, 4),
            'day' => 'day_'.rand(1, 20),
        ];
    }
}
