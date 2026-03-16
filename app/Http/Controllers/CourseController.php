<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class CourseController extends Controller
{ 
    public function create()
    {
        return view('courses.create'); 
    }


    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
        ]);

        Course::create([
            'course_name' => $request->course_name,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course added successfully.');
    }

    
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
}
   /* public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
        ]);

        Course::create($request->all());
        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_name' => 'required',
        ]);

        $course->update($request->all());
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }*/

