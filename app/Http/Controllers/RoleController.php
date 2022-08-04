<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view('role.show', compact('role'));
    }
}
