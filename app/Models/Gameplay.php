<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gameplay extends Model
{
    use HasFactory;

    public function player()
    {
        return $this->belongsTo(Player::class, 'starter_player_id')->select('id', 'name');
    }

    public function games()
    {
        return $this->belongsTo(Game::class, 'game_id')->select('id', 'name');
    }
}
