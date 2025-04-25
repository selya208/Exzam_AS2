<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    public function lessons()
    {
        return
        $this->hasMany(Lesson::class);
    }

    public function entrollments()
    {
        return
            $this->hasMany(Entrollment::class);
    }

    public function users()
    {
        return
            $this->belongsToMany(User::class, 'entrollments');
    }
}
