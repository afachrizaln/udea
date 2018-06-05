<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('student.pages.course.index', compact('courses'));
    }
}
