<?php

namespace App\Http\Controllers;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;


/*use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;*/

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('course')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('students.create', compact('courses'));
    }

    public function store(Request $request, Student $student)
    {
        $validate=$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'course_id' => 'required|exists:courses,id',
        ]);

        Student::create($validate);
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $courses = Course::all();
        return view('students.edit', compact('student', 'courses'));
    }

    public function update(Request $request, Student $student)
    {
        $validate=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'required',
            'course_id' => 'required|exists:courses,id',
        ]);

        $student->update($validate);
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}


