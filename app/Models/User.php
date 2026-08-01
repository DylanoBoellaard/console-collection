<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function userConsoles()
    {
        return $this->hasMany(UserConsole::class);
    }

    public function userGames()
    {
        return $this->hasMany(UserGame::class);
    }

    public function consoles()
    {
        return $this->belongsToMany(
            Console::class,
            'user_consoles'
        )
            ->withPivot([
                'status',
                'purchase_price',
                'purchase_date',
                'console_condition',
                'box_condition',
                'controller_condition',
                'notes',
            ]);
    }
}
