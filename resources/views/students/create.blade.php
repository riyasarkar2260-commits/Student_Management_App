<x-app-layout>
    <h2>Add student</h2>
    <form action="/students" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ old('name') }}"required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>

    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required><br>

<label for="course_id">Course:</label><br>

<select id="course_id" name="course_id" required>
    <option value="">-- Select Course --</option>
    @foreach($courses as $course)
        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
    @endforeach
    <input type="submit"  value="Submit">
</select><br><br>
</x-app-layout>