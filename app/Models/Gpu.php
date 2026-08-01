<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gpu extends Model
{
    /** @use HasFactory<\Database\Factories\GpuFactory> */
    use HasFactory;

    // A GPU belongs to one manufacturer (Many-to-One)
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function consoles()
    {
        return $this->hasMany(Console::class, 'cpu_id');
    }
}
