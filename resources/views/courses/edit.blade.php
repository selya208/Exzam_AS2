@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Course</h1>

        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Course Title</label>
                <input type="text" class="form-control" name="title" value="{{ $course->title }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Course Description</label>
                <textarea class="form-control" name="description" rows="4" required>{{ $course->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
