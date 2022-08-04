<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('dashboard.home');

Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');


Route::get('users', [UserController::class, 'index'])->name('user.index');
Route::get('user/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('departments', [DepartmentsController::class, 'index'])->name('department.index');
Route::get('department/{id}', [DepartmentController::class, 'show'])->name('department.show');

Route::get('roles', [RoleController::class, 'index'])->name('role.index');
Route::get('role/{id}', [RoleController::class, 'show'])->name('role.show');