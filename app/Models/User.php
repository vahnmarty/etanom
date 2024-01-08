<?php

namespace App\Models;

 use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'funder',
        'planter',
        'verified_at',
        'verified_by'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function seedballs()
    {
        return $this->hasMany(Seedball::class);
    }

    public function seedballCredits()
    {
        return $this->seedballs()->whereNull('date_planted')->count();
    }

    public function isPlanter()
    {
        return $this->planter;
    }

    public function isBuyer()
    {
        return $this->buyer;
    }

    public function myCart()
    {
        return $this->hasOne(Cart::class);
    }

    public function scopePlanters($query)
    {
        return $query->where('planter', true);
    }
}
