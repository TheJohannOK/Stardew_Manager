<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'capacity',
        'cost',
        'image'
    ];


    public function materials() {
        return $this->belongsToMany(Material::class, 'buildings_materials')->withPivot('quantity');
    }

    public function allowed() {
        return $this->belongsToMany(Animal::class, 'buildings_permission_animals');
    }

    public function animals() {
        return $this->belongsToMany(Animal::class, 'buildings_animals')->withPivot('bought');
    }

    public function farms() {
        return $this->belongsToMany(Farm::class, 'farms_buildings')->withPivot('bought','id');
    }
}
