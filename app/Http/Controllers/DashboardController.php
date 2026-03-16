<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class DashboardController extends Controller
{
    public function index()
{
    $totalStudents = Student::count();
    $totalCourses = Course::count();
    $latestStudents = Student::latest()->take(5)->get();

    return view('dashboard', compact(
        'totalStudents',
        'totalCourses',
        'latestStudents'
    ));
}
}
