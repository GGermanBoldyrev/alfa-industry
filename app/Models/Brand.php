<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'description', 'country'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function equipmentTypes(): HasMany
    {
        return $this->hasMany(EquipmentType::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->name, '-');
        });
    }
}
