<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;
use Sentinel;

class TaskController extends Controller
{
    public function index(){
        $classrooms = Sentinel::getUser()->student->classrooms;
        return view('student.pages.task.index', compact('classrooms'));
    }

    public function show($slug){
        $task = Task::where('slug', '=', $slug)->first();
        return view('student.pages.task.show', compact('task'));
    }
}
