<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;

class CourseController extends Controller
{
    public function index(){
        $courses = Sentinel::getUser()->student->course;
        return view('student.pages.course.index', compact('courses'));
    }
}
