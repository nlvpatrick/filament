<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categorys(){
        return $this->hasMany(Category::class, 'product_id');
    }
    // public function categorys(){
    //     return $this->hasMany(Category::class);
    // }
}
