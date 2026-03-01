<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Faker\Provider\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
   
    use HasFactory, Notifiable;
    public function role():BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
    public function collocations():BelongsTo
    {
        return $this->belongsTo(Collocation::class);
    }
    public function depenses():HasMany
    {
        return $this->hasMany(Depense::class);
    }
    public function payments():HasMany
    {
        return $this->hasMany(Payment::class);
    }


   
    protected $fillable = [
        'name',
        'email',
        'password',
        'pic',
        'isOwner',
        'isActive'
    ];

    
    protected $hidden = [
        'password'
        
    ];

    
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    // public function role():belongsTO
}
