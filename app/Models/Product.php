<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'image'
    ];

    public function productcategories()
    {
        return $this->belongsToMany(
            ProductCategory::class,
            'product_to_categories',
            'product_id',
            'category_id');
    }
}
