<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
Route::resource('courses', CourseController::class);
Route::resource('lessons', LessonController::class);
Route::resource('categories', CategoryController::class);
Route::resource('enrollments', EnrollmentController::class);
Route::resource('quizzes', QuizController::class);

Route::get('/users', [UserController::class, 'index']);
