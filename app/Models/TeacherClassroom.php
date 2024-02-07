<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherClassroom extends Model
{
    use HasFactory;

    /**
     * Get the classroom that owns the TeacherClassroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

        /**
     * Get the classroom that owns the TeacherClassroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subjectteacher(): BelongsTo
    {
        return $this->belongsTo(SubjectTeacher::class);
    }
}
