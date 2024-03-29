<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;


    /**
     * Get all of the comments for the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function school_years(): BelongsTo
    {
        return $this->belongsTo(SchoolYear::class);
    }

    /**
     * Get the subject that owns the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

        /**
     * Get all of the teacherclassrooms for the SubjectTeacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teacherclassrooms(): HasMany
    {
        return $this->hasMany(TeacherClassroom::class);
    }

    /**
     * Get all of the studentclassrooms for the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentclassrooms(): HasMany
    {
        return $this->hasMany(StudentClassroom::class);
    }
}
