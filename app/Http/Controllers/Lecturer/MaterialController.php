<?php

namespace App\Http\Controllers\Lecturer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Chapter;

class MaterialController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('lecturer.pages.material.index', compact('courses'));
    }

    public function create(){
        return view('lecturer.pages.material.create');
    }

    public function show($slug){
        $chapter = Chapter::where('slug', '=' , $slug)->first();
        return view('lecturer.pages.material.show', compact('chapter'));
    }
}
