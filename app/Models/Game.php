<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'version','player_id',
    ];

    public function player()
    {
        return $this->hasMany(Player::class, 'game_id');
    }

    public function gameplay()
    {
        return $this->hasmany(Gameplay::class);
    }

}
