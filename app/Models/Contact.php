<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    protected $fillable = ['contact_type_id', 'value', 'is_active'];

    public function contactType(): BelongsTo
    {
        return $this->belongsTo(ContactType::class);
    }
}
