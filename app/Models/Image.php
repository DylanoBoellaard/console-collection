<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /** @use HasFactory<\Database\Factories\ImageFactory> */
    use HasFactory;

    public function imageType()
    {
        return $this->belongsTo(ImageType::class);
    }

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }

    // public function controller()
    // {
    //     return $this->belongsTo(Controller::class);
    // }
    // public function controllerVariant()
    // {
    //     return $this->belongsTo(ControllerVariant::class, 'controller_variant_id');
    // }

    // public function accessory()
    // {
    //     return $this->belongsTo(Accessory::class);
    // }
    // public function accessoryVariant()
    // {
    //     return $this->belongsTo(AccessoryVariant::class, 'accessory_variant_id');
    // }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
