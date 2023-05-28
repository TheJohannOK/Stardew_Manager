<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function buildings(): BelongsToMany {
        return $this->belongsToMany(Building::class, 'farms_buildings');
    }
}
