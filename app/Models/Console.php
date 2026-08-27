<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    /** @use HasFactory<\Database\Factories\ConsoleFactory> */
    use HasFactory;

    protected $casts = [
        'release_date' => 'date',
    ];

    // One Console can have multiple models (One-to-Many)
    // This relationship uses the 'console_id' foreign key in the 'models' table to link consoles and models
    public function models()
    {
        return $this->hasMany(ConsoleModel::class, 'console_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_consoles')
            ->withPivot([
                'status',
                'purchase_price',
                'purchase_date',
                'console_condition',
                'box_condition',
                'controller_condition',
                'notes',
            ]);
        // Get all users with a console
        // use $user->consoles; with a foreach loop to display info about all users' consoles
    }

    public function userConsoles()
    {
        return $this->hasMany(UserConsole::class, 'console_id');
        // Use to display info about the user's consoles (ownership records)
        // $userConsole = UserConsole::first(); Then: $userConsole->status;
    }

    // A Console belongs to one manufacturer (Many-to-One)
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    // A Console can belong to one generation (Many-to-One)
    public function generation()
    {
        return $this->belongsTo(Generation::class);
    }

    // A Console can have multiple cpus (Many-to-One)
    public function cpu()
    {
        return $this->belongsTo(Cpu::class);
    }

    // A Console can have multiple gpus (Many-to-One)
    public function gpu()
    {
        return $this->belongsTo(Gpu::class);
    }

    // One Console can have multiple connections (Many-to-Many)
    // This relationship uses the pivot table 'console_connections' to link consoles and connections
    public function connections()
    {
        return $this->belongsToMany(
            Connection::class,
            'console_connections',
            'console_id',
            'connection_id'
        );
        // Use $console->connections to get all connections associated with a specific console
    }

    // One Console can have multiple controllers (Many-to-Many)
    // This relationship uses the pivot table 'console_controllers' to link consoles and controllers
    public function controllers()
    {
        return $this->belongsToMany(
            Controller::class,
            'console_controllers',
            'console_id',
            'controller_id'
        );
        // Use $console->controllers to get all controllers associated with a specific console
    }

    // One Console can have multiple accessories (Many-to-Many)
    // This relationship uses the pivot table 'console_accessories' to link consoles and accessories
    public function accessories()
    {
        return $this->belongsToMany(
            Accessory::class,
            'console_accessories',
            'console_id',
            'accessory_id'
        );
        // Use $console->accessories to get all accessories associated with a specific console
    }

    // One Console can have multiple games (Many-to-Many)
    // This relationship uses the pivot table 'console_games' to link consoles and games
    public function games()
    {
        return $this->belongsToMany(
            Game::class,
            'console_games',
            'console_id',
            'game_id'
        );
        // Use $console->games to get all games associated with a specific console
    }

    // One Console can have multiple features (Many-to-Many)
    // This relationship uses the pivot table 'console_features' to link consoles and features
    public function features()
    {
        return $this->belongsToMany(
            Feature::class,
            'console_features',
            'console_id',
            'feature_id'
        );
    }
}
