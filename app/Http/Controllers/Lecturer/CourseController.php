<?php

namespace App\Http\Controllers\Lecturer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;
use App\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('lecturer.pages.course.index', compact('courses'));
    }

    public function create(){
        return view('lecturer.pages.course.create');
    }
}
