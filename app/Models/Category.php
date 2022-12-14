<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = "categories";

    public function user() {

        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function products() {

        return $this->hasMany(Product::class, 'product_categories', 'category_id', 'product_id');
    }

}
