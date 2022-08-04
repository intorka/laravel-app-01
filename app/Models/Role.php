<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function role_departments() {

        return $this->hasMany(Role_Department::class, 'role_id', 'id');
    }

}
