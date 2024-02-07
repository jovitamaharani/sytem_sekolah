<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    /**
     * Get all of the teachers for the Subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teachers(): HasMany
    {
        return $this->hasMany(Teachers::class);
    }
}
