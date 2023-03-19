<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'registration_number',
        'kilometrage',
        'car_model_id',
    ];

    //one car belongs to one model
    public function carModel(): BelongsTo {
        return $this->belongsTo(CarModel::class);
    }
}
