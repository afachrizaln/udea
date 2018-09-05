<?php

namespace App\Http\Controllers\Lecturer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\SubChapter;
use Validator;
use Storage;

class MaterialController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('lecturer.pages.material.index', compact('courses'));
    }

    public function create(){
        return view('lecturer.pages.material.create');
    }

    public function edit($slug){
        $subChapter = SubChapter::where('slug', '=' , $slug)->first();
        return view('lecturer.pages.material.edit', compact('subChapter'));
    }

    public function update(Request $request, $id){
        $rules = [
            'material' => 'required',
        ];

        $messages = [
            'material.required' => 'Kolom upload file tidak boleh kosong.',
        ];
        

        $validation = Validator::make($request->all(), $rules, $messages);

        if (!$validation->fails()) {
            $subChapter = SubChapter::find($id);
            
            $uploadedFile = $request->file('material')[0];
            $ext = $request->material[0]->getClientOriginalExtension();
            $timestamp = date('y') . date('m') . date('d') . date('H') . date('i') . date('s');
            $uploadedFileName = $subChapter->slug . "." . $ext;
            
            if (Storage::exists($uploadedFileName)) {
                Storage::delete($uploadedFileName);
            }
            $path = $uploadedFile->storeAs('material', $uploadedFileName);

            $subChapter->file = $uploadedFileName;
            $subChapter->save();
            $notification = [
                'message' => 'Materi berhasil diupdate.',
                'alert-type' => 'success'
            ];
            return redirect()->back()->with($notification);
        }

        $notification = [
            'message' => $validation->errors()->first(),
            'alert-type' => 'error'
        ];
        return redirect()->back()->with($notification);
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
