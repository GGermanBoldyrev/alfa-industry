<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'brand_id',
        'name',
        'description',
        'specifications',
        'price',
        'image',
    ];

    protected $casts = [
        'specifications' => 'array', // Для работы с JSON-полем
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(EquipmentType::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
