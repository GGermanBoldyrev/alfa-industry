<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'country'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function equipmentTypes(): HasMany
    {
        return $this->hasMany(EquipmentType::class);
    }
}
