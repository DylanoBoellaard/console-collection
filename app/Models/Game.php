<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /** @use HasFactory<\Database\Factories\GameFactory> */
    use HasFactory;

    public function generation()
    {
        return $this->belongsTo(Generation::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'game_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_games')
            ->withPivot([
                'status',
                'purchase_price',
                'purchase_date',
                'console_condition',
                'box_condition',
                'controller_condition',
                'notes',
            ]);
        // Get all users with a game
        // use $user->games; with a foreach loop to display info about all users' games
    }

    public function userGames()
    {
        return $this->hasMany(UserGame::class, 'game_id');
        // Use to display info about the user's games (ownership records)
        // $userGame = UserGame::first(); Then: $userGame->status;
    }

    public function consoles()
    {
        return $this->belongsToMany(
            Console::class,
            'game_consoles',
            'game_id',
            'console_id'
        );
    }

    public function categoriess()
    {
        return $this->belongsToMany(
            Category::class,
            'category_games',
            'game_id',
            'category_id'
        );
    }

    public function regions()
    {
        return $this->belongsToMany(
            Region::class,
            'game_regions',
            'game_id',
            'region_id'
        );
    }
}
