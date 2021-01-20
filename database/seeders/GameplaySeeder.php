<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gameplay;

class GameplaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gameplay::factory()->count(100)->create();

    }
}
