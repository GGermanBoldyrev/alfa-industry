<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'country'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function equipmentTypes()
    {
        return $this->hasMany(EquipmentType::class);
    }
}
