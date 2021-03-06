<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Game;

class PlayersController extends Controller
{
    public function getAllPlayers()
    {
        //$player = new Player();
        $players = Player::select('id','name', 'email', 'nickname', 'game_id')
                    ->with('games')
                    ->with('gameplay')
                    ->get()
                    ->toJson(JSON_PRETTY_PRINT);

       // $games = Game::where('id', 8)->get(['name', 'version'])->toJson(JSON_PRETTY_PRINT);
        return response($players, 200);
    }


    public function get100PlayerPerMonth()
    {
        $top100 = Player::select('id','name', 'email', 'nickname', 'game_id')
                ->limit(100)
                ->with('games')
                ->with('gameplay')
                ->get()
                ->toJson(JSON_PRETTY_PRINT);

        return response($top100, 200);
    }
}
