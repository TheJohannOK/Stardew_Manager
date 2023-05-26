<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Quality extends Model
{
    use HasFactory;

    public $table = "products_qualities";

    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'difficulty',
        'price',
        'probability',
        'image'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
