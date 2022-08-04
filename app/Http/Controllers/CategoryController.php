<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    public function index()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));

    }

    public function show($id) {

        $category = Category::find($id);

        return view('category.show', compact('category', 'id'));

    }
}
