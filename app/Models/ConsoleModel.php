<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsoleModel extends Model
{
    /** @use HasFactory<\Database\Factories\ConsoleModelFactory> */
    use HasFactory;

    // Reassign model name to the correct table
    protected $table = 'models';

    public function console()
    {
        return $this->belongsTo(Console::class);
    }

    public function variants()
    {
        return $this->belongsToMany(
            Variant::class,
            'model_variants',
            'model_id',
            'variant_id'
        );
    }

    public function primaryVariants()
    {
        return $this->belongsToMany(
            Variant::class,
            'model_variants',
            'model_id',
            'variant_id'
        )->where('is_primary', true);
    }
}
