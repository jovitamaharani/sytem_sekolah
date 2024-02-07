<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classteacher(): BelongsTo
    {
        return $this->belongsTo(ClassTeacher::class, 'foreign_key', 'other_key');
    }
    /**
     * Get all of the comments for the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function school_years(): HasMany
    {
        return $this->hasMany(SchoolYear::class);
    }

    /**
     * Get the classroom that owns the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * Get the subject that owns the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
