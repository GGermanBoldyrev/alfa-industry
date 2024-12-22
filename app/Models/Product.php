<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'type_id',
        'name',
        'description',
        'specifications',
        'price',
        'image',
    ];

    protected $casts = [
        'specifications' => 'array', // Для работы с JSON-полем
    ];

    public function type()
    {
        return $this->belongsTo(EquipmentType::class);
    }
}
