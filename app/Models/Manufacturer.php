<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    /** @use HasFactory<\Database\Factories\ManufacturerFactory> */
    use HasFactory;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function cpus()
    {
        return $this->hasMany(Cpu::class, 'manufacturer_id');
    }

    public function gpus()
    {
        return $this->hasMany(Gpu::class, 'manufacturer_id');
    }

    public function consoles()
    {
        return $this->hasMany(Console::class, 'manufacturer_id');
    }
}
