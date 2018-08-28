<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classroom;

class DashboardController extends Controller
{
    public function index(){
        $classrooms = Classroom::get();
        return view('student.pages.dashboard', compact('classrooms'));
    }
}
