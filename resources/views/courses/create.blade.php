<x-app-layout>
<h2>Add Course</h2>
<form  method="POST"action="/courses">
    @csrf
    Course Name
    <input type="text" name="course_name" >
    <button type="submit">Save</button>
</form>
</x-app-layout>