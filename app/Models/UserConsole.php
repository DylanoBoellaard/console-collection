<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserConsole extends Model
{
    /** @use HasFactory<\Database\Factories\UserConsoleFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'console_id',
        'status',
        'purchase_price',
        'purchase_date',
        'console_condition',
        'box_condition',
        'controller_condition',
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
