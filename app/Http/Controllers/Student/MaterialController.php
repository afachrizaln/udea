<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubChapter;
use Sentinel;
use Storage;

class MaterialController extends Controller
{
    public function index(){
        $classrooms = Sentinel::getUser()->student->classrooms;
        return view('student.pages.material.index', compact('classrooms'));
    }

    public function download($slug){
        $subChapter = SubChapter::where('slug', '=' , $slug)->first();
        $path = storage_path() . '/' . 'app' . '/material/' . $subChapter->file;
        if (file_exists($path)) {
            return response()->file($path);
        } else {
            return "hey";
        }
    }
}
