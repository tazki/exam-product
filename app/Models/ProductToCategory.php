<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductToCategory extends Model
{
    use HasFactory;
    public $table = "product_to_categories";

    protected $fillable = [
        'product_id',
        'category_id'
    ];
}
