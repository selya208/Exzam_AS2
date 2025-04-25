<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        Lesson::all()->each(function ($lesson) {
            Quiz::factory(2)->create([
                'lesson_id' => $lesson->id
            ]);
        });
    }
}
