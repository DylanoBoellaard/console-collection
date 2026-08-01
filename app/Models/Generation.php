<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    /** @use HasFactory<\Database\Factories\GenerationFactory> */
    use HasFactory;

    public function games()
    {
        return $this->hasMany(Game::class, 'generation_id');
    }

    public function consoles()
    {
        return $this->hasMany(Console::class, 'generation_id');
    }
}
