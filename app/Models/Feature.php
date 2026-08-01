<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    /** @use HasFactory<\Database\Factories\FeatureFactory> */
    use HasFactory;

    public function consoles()
    {
        return $this->belongsToMany(
            Console::class,
            'console_features',
            'feature_id',
            'console_id'
        );
    }

    public function controllers()
    {
        return $this->belongsToMany(
            Controller::class,
            'controller_features',
            'feature_id',
            'controller_id'
        );
    }

    public function accessories()
    {
        return $this->belongsToMany(
            Accessory::class,
            'accessory_features',
            'feature_id',
            'accessory_id'
        );
    }
}
