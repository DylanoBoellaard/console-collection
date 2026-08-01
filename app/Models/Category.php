<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    // One Category can have multiple games (One-to-Many)
    // This relationship uses the pivot table 'game_categories' to link categories and games
    public function games()
    {
        return $this->belongsToMany(
            Game::class,
            'game_categories',
            'category_id',
            'game_id'
        );
        // Use $category->games to get all games associated with a specific category
    }
}
