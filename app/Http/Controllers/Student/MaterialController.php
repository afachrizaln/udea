<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;

class MaterialController extends Controller
{
    public function index(){
        $classrooms = Sentinel::getUser()->student->classrooms;
        return view('student.pages.material.index', compact('classrooms'));
    }
}
