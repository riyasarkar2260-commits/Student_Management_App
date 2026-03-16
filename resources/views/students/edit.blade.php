@extends('layouts.app')

@section('content')

<h2>Edit Student</h2>

<form action="{{ route('students.update',$student->id) }}" method="POST">
@csrf
@method('PUT')

Name:
<input type="text" name="name" value="{{ $student->name }}"><br>

Email:
<input type="text" name="email" value="{{ $student->email }}"><br>

Phone:
<input type="text" name="phone" value="{{ $student->phone }}"><br>

<button type="submit">Update</button>

</form>



<label for="course_id">Course:</label><br>
<select name="course_id" id="course_id" required>
    <option value="">-- Select Course --</option>
    @foreach($courses as $course)
        <option value="{{ $course->id }}" {{ $student->course_id == $course->id ? 'selected' : '' }}>
            {{ $course->course_name }}
        </option>
    @endforeach
</select><br><br>
@endsection