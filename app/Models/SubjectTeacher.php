<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectTeacher extends Model
{
    use HasFactory;

    /**
     * Get the subject that owns the SubjectTeacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

       /**
     * Get the subject that owns the SubjectTeacher
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
}
