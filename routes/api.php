<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('games', 'GamesController@getAllGames');
Route::get('games/{day}', 'GameplayController@getAllGamesPerDay');
Route::get('games/{from}/{to}', 'GameplayController@getAllGamesWithRange');
Route::get('players', 'PlayersController@getAllPlayers');
Route::get('players/100', 'PlayersController@get100PlayerPerMonth');


