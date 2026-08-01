<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControllerColour extends Model
{
    /** @use HasFactory<\Database\Factories\ControllerColourFactory> */
    use HasFactory;

    // Empty - This model will only be used if there will be additional data that needs to be stored in this pivot table
    // The relationships are already defined in the individual models (Controller and Colour) using belongsToMany
}
