<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    /** @use HasFactory<\Database\Factories\AccessoryFactory> */
    use HasFactory;

    // One Accessory can have multiple images (One-to-Many)
    public function images()
    {
        return $this->hasMany(Image::class, 'accessory_id');
    }

    // One Accessory can belong to multiple consoles (One-to-Many)
    // This relationship uses the pivot table 'console_accessories' to link accessories and consoles
    public function consoles()
    {
        return $this->belongsToMany(
            Console::class,
            'console_accessories',
            'accessory_id',
            'console_id'
        );
        // Use $accessory->consoles to get all consoles associated with a specific accessory
    }

    // One Accessory can have multiple features (One-to-Many)
    // This relationship uses the pivot table 'accessory_features' to link accessories and features
    public function features()
    {
        return $this->belongsToMany(
            Feature::class,
            'accessory_features',
            'accessory_id',
            'feature_id'
        );
    }

    // One Accessory can have multiple colours (One-to-Many)
    // This relationship uses the pivot table 'accessory_colours' to link accessories and colours
    public function colours()
    {
        return $this->belongsToMany(
            Colour::class,
            'accessory_colours',
            'accessory_id',
            'colour_id'
        );
    }

    public function variants()
    {
        return $this->belongsToMany(
            Variant::class,
            'accessory_variants',
            'accessory_id',
            'variant_id'
        );
    }
}
