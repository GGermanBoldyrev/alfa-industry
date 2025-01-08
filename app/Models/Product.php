<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'brand_id',
        'name',
        'slug',
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
        return $this->belongsTo(Category::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->name, '-');
        });
    }
}
