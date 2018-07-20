<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Discussion;
use App\Comment;
use Sentinel;

class DiscussionController extends Controller
{
    public function index(){
        $courses = Sentinel::getUser()->student->course;
        return view('student.pages.discussion.index', compact('courses'));
    }

    public function show($slug){
        $discussion = Discussion::where('slug', '=', $slug)->first();
        return view('student.pages.discussion.show', compact('discussion'));
    }

    public function comment(Request $request, $slug){
        $discussion = Discussion::where('slug', '=', $slug)->first();
        $data = [
            'user_id'           => Sentinel::getUser()->id,
            'discussion_id'     => $discussion->id,
            'comment'           => $request->comment,
        ];
        $comment = Comment::create($data);
        $notification = [
            'heading' => 'Berhasil Disimpan!',
            'message' => 'Komentar berhasil ditambahkan.',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
}
