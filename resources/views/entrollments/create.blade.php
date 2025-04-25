@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Enroll User</h1>
        <form action="{{ route('enrollments.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>User</label>
                <select name="user_id" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Course</label>
                <select name="course_id" class="form-control">
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success">Enroll</button>
        </form>
    </div>
@endsection
