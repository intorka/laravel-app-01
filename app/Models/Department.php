<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\User_Department_Role;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $guarded = ['id'];


    public function user() {

        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function department_users() {

        return $this->belongsToMany(User::class, User_Department_Role::class, 'department_id', 'user_id');
    }

    public function department_roles() {

        return $this->belongsToMany(User::class, User_Department_Role::class, 'department_id', 'role_id');
    }

}
