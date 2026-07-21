<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'name',
    'category',
    'image',
    'price_per_day',
    'horsepower',
    'transmission',
    'seats',
    'fuel_type',
    'status',
    'description',
])]
class Car extends Model
{
    protected function casts(): array
    {
        return [
            'price_per_day' => 'decimal:2',
        ];
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
