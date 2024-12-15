<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content', 'image', 'category_id', 'is_active'];

    public function type(): BelongsTo
    {
        return $this->belongsTo(NewsType::class, 'news_type_id');
    }
}
