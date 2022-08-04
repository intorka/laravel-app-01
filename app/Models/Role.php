<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Department;
use App\Models\User_Department_Role;



class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function role_users() {

        return $this->belongsToMany(User::class, User_Department_Role::class, 'role_id', 'user_id');
    }

    public function role_departments() {

        return $this->belongsToMany(Department::class, User_Department_Role::class, 'role_id', 'department_id');
    }

}
