<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * Get all of the studentclassroom for the Stundent
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentclassrooms(): HasMany
    {
        return $this->hasMany(StudentClassroom::class);
    }
}
