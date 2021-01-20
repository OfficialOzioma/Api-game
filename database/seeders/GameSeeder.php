<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        Game::truncate();
        // $games = [
        //     [
        //         'name' => 'Call of Duty',
        //         'version' => rand(2010, 2020),
        //     ],
        //     [
        //         'name' => 'Mortal Kombat',
        //         'version' => rand(2010, 2020),
        //     ],
        //     [
        //         'name' => 'FIFA',
        //         'version' => rand(2010, 2020),
        //     ],
        //     [
        //         'name' => 'Just Cause',
        //         'version' => rand(2010, 2020),
        //     ],
        //     [
        //         'name' => 'Apex Legend',
        //         'version' => rand(2010, 2020),
        //     ]

        // ];
        // foreach($games as $game){
        //     games::create($game);
        // }
        Game::factory()->count(10)->create();
    }
}
