<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    /** @use HasFactory<\Database\Factories\VariantFactory> */
    use HasFactory;

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }

    public function threejsModels()
    {
        return $this->hasMany(ThreejsModel::class, 'variant_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'variant_id');
    }

    // Not used anymore
    // public function revisions()
    // {
    //     return $this->belongsToMany(
    //         Revision::class,
    //         'revision_variants',
    //         'variant_id',
    //         'revision_id'
    //     );
    // }

    public function regions()
    {
        return $this->belongsToMany(
            Region::class,
            'variant_regions',
            'variant_id',
            'region_id'
        );
    }

    public function colours()
    {
        return $this->belongsToMany(
            Colour::class,
            'variant_colours',
            'variant_id',
            'colour_id'
        );
    }

    public function models()
    {
        return $this->belongsToMany(
            ConsoleModel::class,
            'model_variants',
            'variant_id',
            'model_id'
        );
    }

    public function controllers()
    {
        return $this->belongsToMany(
            Controller::class,
            'controller_variants',
            'variant_id',
            'controller_id'
        );
    }

    public function accessories()
    {
        return $this->belongsToMany(
            Accessory::class,
            'accessory_variants',
            'variant_id',
            'accessory_id'
        );
    }
}
