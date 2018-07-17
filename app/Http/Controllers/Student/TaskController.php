<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;
use Sentinel;

class TaskController extends Controller
{
    public function index(){
        $courses = Sentinel::getUser()->student->course;
        return view('student.pages.task.index', compact('courses'));
    }

    public function show($slug){
        $task = Task::where('slug', '=', $slug)->first();
        return view('student.pages.task.show', compact('task'));
    }
}
