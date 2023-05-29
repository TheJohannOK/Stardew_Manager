<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Farm extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'user_id',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function buildings(): BelongsToMany {
        return $this->belongsToMany(Building::class, 'farms_buildings')->withPivot('bought');
    }
}
