<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    /** @use HasFactory<\Database\Factories\RevisionFactory> */
    use HasFactory;

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function variants()
    {
        return $this->belongsToMany(
            Variant::class,
            'revision_variants',
            'revision_id',
            'variant_id'
        );
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'revision_id');
    }
}
