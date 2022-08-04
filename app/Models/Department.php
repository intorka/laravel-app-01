<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $guarded = ['id'];


    public function user() {

        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function role_departments() {

        return $this->hasMany(Role_Department::class, 'department_id', 'id');
    }

}
