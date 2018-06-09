<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Discussion;
use Sentinel;

class DiscussionController extends Controller
{
    public function index(){
        $courses = Sentinel::getUser()->student->course;
        return view('student.pages.discussion.index', compact('courses'));
    }

    public function show($id){
        $discussion = Discussion::find($id);
        return view('student.pages.discussion.show', compact('discussion'));
    }
}
