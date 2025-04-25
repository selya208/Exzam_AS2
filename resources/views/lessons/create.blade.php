@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Lesson</h1>
        <form action="{{ route('lessons.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Content</label>
                <textarea name="content" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label>Course</label>
                <select name="course_id" class="form-control" required>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success">Create</button>
        </form>
    </div>
@endsection

