<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControllerFeature extends Model
{
    /** @use HasFactory<\Database\Factories\ControllerFeatureFactory> */
    use HasFactory;

    // Empty - This model will only be used if there will be additional data that needs to be stored in this pivot table
    // The relationships are already defined in the individual models (Controller and Feature) using belongsToMany
}
