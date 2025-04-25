@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Quiz</h1>
        <form action="{{ route('quizzes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Lesson</label>
                <select name="lesson_id" class="form-control">
                    @foreach($lessons as $lesson)
                        <option value="{{ $lesson->id }}">{{ $lesson->title }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
