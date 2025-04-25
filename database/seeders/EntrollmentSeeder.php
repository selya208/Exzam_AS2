<?php

namespace Database\Seeders;

/*use App\Models\Category;*/
use Illuminate\Database\Seeder;
/*use App\Models\Entrollment;
use App\Models\Course;*/

class EntrollmentSeeder extends Seeder
{
    public function run(): void
    {
      /* Category::all()->each(function($category) {
            $courses = Course::inRandomOrder()->take(2)->pluck('id');
            foreach ($courses as $courseId) {
                Entrollment::factory()->create([
                    'category_id' =>
                    $category->id,
                    'course_id' => $courseId
                ]); //
            }//
        }); */
    }
}
