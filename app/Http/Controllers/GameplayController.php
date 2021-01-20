<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gameplay;

class GameplayController extends Controller
{
    public function getAllGamesPerDay($day)
    {
        if (Gameplay::where('day', $day)->exists()) {
            $gameplay = Gameplay::where('day', $day)
                                ->with('games')
                                ->with('player')
                                ->select('day', 'starter_player_id', 'game_id','number_of_players')
                                ->get()
                                ->toJson(JSON_PRETTY_PRINT);
            return response($gameplay, 200);
        } else {
            return response()->json([
              "message" => "game not found"
            ], 404);
        }
    }

    public function getAllGamesWithRange($from, $to)
    {
        if (Gameplay::whereBetween('day', [$from, $to])->exists()) {
            $gameplay = Gameplay::whereBetween('day', [$from, $to])
                                ->orderBy('day', 'asc')
                                ->with('games')
                                ->select('day', 'game_id')
                                ->get()
                                ->toJson(JSON_PRETTY_PRINT);
            return response($gameplay, 200);
        } else {
            return response()->json([
              "message" => "game not found"
            ], 404);
        }
    }
}
