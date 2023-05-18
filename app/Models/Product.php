<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function animal() {
        return $this->belongsTo(Animal::class);
    }

    public function qualities() {
        return $this->hasMany(Product_Quality::class, 'products_qualities');
    }

    public function parentProduct() {
        return $this->belongsTo(Product::class, 'product_origin_id');
    }
}
