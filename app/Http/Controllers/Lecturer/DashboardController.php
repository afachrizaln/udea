<?php

namespace App\Http\Controllers\Lecturer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classroom;

class DashboardController extends Controller
{
    public function index(){
        $classrooms = Classroom::get();
        return view('lecturer.pages.dashboard', compact('classrooms'));
    }
}
