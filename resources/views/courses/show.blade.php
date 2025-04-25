@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $course->title }}</h1>
        <p>{{ $course->description }}</p>

        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
    </div>
@endsection
