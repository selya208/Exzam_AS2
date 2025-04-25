@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Course</h1>

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Course Title</label>
                <input type="text" class="form-control" name="title" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Course Description</label>
                <textarea class="form-control" name="description" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
