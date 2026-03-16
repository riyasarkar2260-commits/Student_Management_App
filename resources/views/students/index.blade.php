
<h2>Student list</h2>
<a href="/students/create">Add Student</a>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Course</th>
        <th>Actions</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->course->course_name }}</td>
        <td>
            <a href='/students/{{ $student->id }}/edit'>Edit</a>
            <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
               
                <button type="submit">Delete</button>
            </form>
                
        </td>
    </tr>
    @endforeach

</table>




