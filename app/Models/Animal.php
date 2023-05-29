<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'cost',
        'image',
        'interval'
    ];

    public function buildings() {
        return $this->belongsToMany(Building::class, 'buildings_animals')->withPivot('bought');
    }

    public function allowed() {
        return $this->belongsToMany(Building::class, 'buildings_permission_animals');
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
}
