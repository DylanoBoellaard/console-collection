<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThreejsModel extends Model
{
    /** @use HasFactory<\Database\Factories\ThreejsModelFactory> */
    use HasFactory;

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }
}
