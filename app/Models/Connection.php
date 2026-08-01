<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    /** @use HasFactory<\Database\Factories\ConnectionFactory> */
    use HasFactory;

    // One Connection can belong to multiple consoles (One-to-Many)
    // This relationship uses the pivot table 'console_connections' to link connections and consoles
    public function consoles()
    {
        return $this->belongsToMany(
            Console::class,
            'console_connections',
            'connection_id',
            'console_id'
        );
        // Use $connection->consoles to get all consoles associated with a specific connection
    }
}
