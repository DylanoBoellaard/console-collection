<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory;

    // One Country can have one Region (Many-to-One)
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function manufacturers()
    {
        return $this->hasMany(Manufacturer::class, 'country_id');
    }
}
