<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Category;

class User extends Authenticatable
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

    protected function categories() {

        return $this->hasMany(Category::class, 'created_by', 'id');
    }

    protected function products() {

        return $this->hasMany(Category::class, 'created_by', 'id');
    }

    protected function departments() {

        return $this->hasMany(Department::class, 'created_by', 'id');
    }

    protected function roles() {

        return $this->hasMany(Role::class, 'created_by', 'id');
    }

    protected function role_departments() {

        return $this->hasMany(Role_Department::class, 'user_id', 'id');
    }
    
}
