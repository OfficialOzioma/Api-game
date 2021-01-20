<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;


class GamesController extends Controller
{
    public function getAllGames()
    {
        $games = Game::select('name', 'version')
                ->get()
                ->toJson(JSON_PRETTY_PRINT);
        return response($games, 200);
    }

}
