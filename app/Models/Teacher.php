<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    /**
     * Get the subject that owns the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
