<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    public function buildings() {
        return $this->belongsToMany(Material::class, 'buildings_materials');
    }
}
