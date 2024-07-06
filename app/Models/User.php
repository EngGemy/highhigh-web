<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    const ROLE_CLIENT = 'client';
    const ROLE_ADMIN = 'admin';
    const ROLE_ENTERPRISE = 'enterprise';

    protected $table = "users";

    protected $guard_name = 'web';

    protected $fillable = [
        'full_name', 'email', 'phone', 'password', 'role', 'company_name'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function devices()
    {
        return $this->hasMany(Device::class, 'user_id', 'id');
    }
}
