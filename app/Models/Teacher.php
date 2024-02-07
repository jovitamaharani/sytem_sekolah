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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subjectTeachers(): HasMany
    {
        return $this->HasMany(SubjectTeacher::class);
    }

    /**
     * Get the classroom associated with the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function classroom(): HasOne
    {
        return $this->hasOne(Classroom::class);
    }
}
