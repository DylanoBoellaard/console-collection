<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
}
