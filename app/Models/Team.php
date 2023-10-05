<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

// Voeg de relatie met spelers toe
public function players()
{
    return $this->hasMany(Player::class);
}

}

