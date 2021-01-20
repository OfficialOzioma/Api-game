<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\players;
use App\Models\gameplay;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(gamesSeeder::class);
        // players::factory(100)->create();
        // gameplay::factory(1500)->create();

        $this->call([
            GameSeeder::class,
            PlayerSeeder::class,
            GameplaySeeder::class
        ]);
    }
}
