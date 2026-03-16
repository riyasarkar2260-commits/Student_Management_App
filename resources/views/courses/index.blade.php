<h2>Course List</h2>
<a href="/courses/create">Add Course</a>

<table border="1">
    <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        
    </tr>
    @foreach($courses as $course)
    <tr>
        <td>{{ $course->id}}</td>
        <td>{{ $course->course_name }}</td>
        
    </tr>
    @endforeach
</table>