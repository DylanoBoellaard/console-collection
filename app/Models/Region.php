<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    /** @use HasFactory<\Database\Factories\RegionFactory> */
    use HasFactory;

    // One Region can have many Countries (One-to-Many)
    public function countries()
    {
        return $this->hasMany(Country::class);
    }

    public function variants()
    {
        return $this->belongsToMany(
            Variant::class,
            'variant_regions',
            'region_id',
            'variant_id'
        );
    }

    public function games()
    {
        return $this->belongsToMany(
            Game::class,
            'game_regions',
            'region_id',
            'game_id'
        );
    }
}
