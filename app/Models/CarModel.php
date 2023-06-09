<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'launch_date',
        'brand_id'
    ];

    //one model has many cars
    public function car(): HasMany{
        return $this->hasMany(Car::class);
    }

    //one model belongs to one brand
    public function brand(): BelongsTo {
        return $this->belongsTo(Brand::class);
    }

}
