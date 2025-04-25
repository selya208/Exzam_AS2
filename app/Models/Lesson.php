<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /** @use HasFactory<\Database\Factories\LessonFactory> */
    use HasFactory;

    public function course()
    {
        return
            $this->belongsTo(Course::class);
    }

    public function quizzes()
    {
        return
            $this->hasMany(Quiz::class);
    }
}
