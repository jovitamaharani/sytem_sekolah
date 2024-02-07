<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassTeacher extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the ClassTeacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function classroom(): HasOne
    {
        return $this->hasOne(Classroom::class, 'foreign_key', 'local_key');
    }
}
