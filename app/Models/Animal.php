<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function buildings() {
        return $this->belongsToMany(Building::class, 'buildings_animals');
    }

    public function allowed() {
        return $this->belongsToMany(Building::class, 'buildings_permission_animals');
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
}
