<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantRegion extends Model
{
    /** @use HasFactory<\Database\Factories\VariantRegionFactory> */
    use HasFactory;

    // Empty - This model will only be used if there will be additional data that needs to be stored in this pivot table
    // The relationships are already defined in the individual models (Variant and Region) using belongsToMany
}
