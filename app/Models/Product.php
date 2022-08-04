<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = "products";

    public function user() {

        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function categories() {

        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }
    
}
