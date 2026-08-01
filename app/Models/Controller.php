<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controller extends Model
{
    /** @use HasFactory<\Database\Factories\ControllerFactory> */
    use HasFactory;

    // public function images()
    // {
    //     return $this->hasMany(Image::class, 'controller_variant_id');
    // }

    public function variants()
    {
        return $this->belongsToMany(
            Variant::class,
            'controller_variants',
            'controller_id',
            'variant_id'
        );
    }

    public function consoles()
    {
        return $this->belongsToMany(
            Console::class,
            'console_controllers',
            'controller_id',
            'console_id'
        );
    }

    public function features()
    {
        return $this->belongsToMany(
            Feature::class,
            'controller_features',
            'controller_id',
            'feature_id'
        );
    }

    public function colours()
    {
        return $this->belongsToMany(
            Colour::class,
            'controller_colours',
            'controller_id',
            'colour_id'
        );
    }
}
