<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = "product_categories";

    protected $fillable = [
        'name'
    ];

    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'product_to_categories',
            'product_id',
            'category_id');
    }
}
