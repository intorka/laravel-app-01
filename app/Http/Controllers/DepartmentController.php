<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('department.index', compact('departments'));
    }

    public function show($id)
    {
        $department = Department::findOrFail($id);
        return view('department.show', compact('department'));
    }
}
