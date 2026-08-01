<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessoryVariant extends Model
{
    /** @use HasFactory<\Database\Factories\AccessoryVariantFactory> */
    // use HasFactory;

    // Empty - This model will only be used if there will be additional data that needs to be stored in this pivot table
    // The relationships are already defined in the individual models (Accessory and Variant) using belongsToMany
}
