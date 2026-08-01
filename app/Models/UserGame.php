<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGame extends Model
{
    /** @use HasFactory<\Database\Factories\UserGameFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'game_id',
        'status',
        'purchase_price',
        'purchase_date',
        'box_condition',
        'disc_condition',
        'booklet_condition',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function console()
    {
        return $this->belongsTo(Console::class);
    }
}
