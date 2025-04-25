@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lessons</h1>
        <a href="{{ route('lessons.create') }}" class="btn btn-primary mb-3">New Lesson</a>
        <table class="table">
            <thead>
            <tr><th>ID</th><th>Title</th><th>Course</th><th>Actions</th></tr>
            </thead>
            <tbody>
            @foreach ($lessons as $lesson)
                <tr>
                    <td>{{ $lesson->id }}</td>
                    <td>{{ $lesson->title }}</td>
                    <td>{{ $lesson->course->title ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('lessons.show', $lesson->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('lessons.edit', $lesson->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('lessons.destroy', $lesson->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
