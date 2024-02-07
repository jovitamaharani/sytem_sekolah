<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the SchoolYear
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classroom(): HasMany
    {
        return $this->hasMany(Classroom::class);
    }
}
