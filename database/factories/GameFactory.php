<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function randomGames()
    {
        $games = ['Call of Duty',
                'Mortal Kombat',
                'FIFA',
                'Just Cause',
                'Apex Legend'
        ];
        $game = $games[array_rand($games)];

        return $game;
    }

    public function gameversions()
    {
        $versions = [2010, 2011, 2012,
                    2013, 2014, 2015,
                    2016, 2017, 2018,
                    2019, 2020
        ];

        return $versions[array_rand($versions)];
    }
    public function definition()
    {
        return [
            'name' => $this->randomGames(),
            'version' => $this->faker->unique()->numberBetween(2010, 2020),
        ];
    }
}
