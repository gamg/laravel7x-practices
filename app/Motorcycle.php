<?php

namespace App;

use App\Casts\MotorcycleCode;
use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    protected $fillable = ['code'];

    protected $casts = [
        'code' => MotorcycleCode::class
    ];
}
