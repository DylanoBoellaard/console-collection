<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    /** @use HasFactory<\Database\Factories\ColourFactory> */
    use HasFactory;

    // One Colour can belong to multiple variants (One-to-Many)
    // This relationship uses the pivot table 'variant_colours' to link colours and variants
    public function variants()
    {
        return $this->belongsToMany(
            Variant::class,
            'variant_colours',
            'colour_id',
            'variant_id'
        );
        // Use $colour->variants to get all variants associated with a specific colour
    }

    // One Colour can belong to multiple accessories (One-to-Many)
    // This relationship uses the pivot table 'accessory_colours' to link colours and accessories
    public function accessories()
    {
        return $this->belongsToMany(
            Accessory::class,
            'accessory_colours',
            'colour_id',
            'accessory_id'
        );
        // Use $colour->accessories to get all accessories associated with a specific colour
    }

    // One Colour can belong to multiple controllers (One-to-Many)
    // This relationship uses the pivot table 'controller_colours' to link colours and controllers
    public function controllers()
    {
        return $this->belongsToMany(
            Controller::class,
            'controller_colours',
            'colour_id',
            'controller_id'
        );
        // Use $colour->controllers to get all controllers associated with a specific colour
    }
}
