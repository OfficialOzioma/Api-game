<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Player extends Model
{
    use HasFactory;

    protected $table  = 'players';

    protected $fillable = [
        'name', 'email','nickname','password','game_id','last_login'
    ];

    public function games()
    {
        return $this->belongsTo(Game::class, 'game_id')->select('id', 'name');
    }

    public function Gameplay()
    {
       return $this->hasMany(Gameplay::class, 'starter_player_id')->select('starter_player_id', 'day');;
    }
}
