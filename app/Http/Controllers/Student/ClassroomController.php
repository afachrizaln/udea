<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classroom;
use App\ClassroomStudent;
use Sentinel;
use Illuminate\Foundation\Console\PackageDiscoverCommand;

class ClassroomController extends Controller
{
    public function join(Request $request){
        $classroom = Classroom::where('public_key', '=', $request->public_key)->first();
        if($classroom){
            $isExist = $this->checkExistClassroom($classroom);
            if(!$isExist){
                $data = [
                    'classroom_id'      => $classroom->id,
                    'student_id'        => Sentinel::getUser()->student->id,
                ];
                $classroom_student = ClassroomStudent::create($data);
                $message = 'Kode kelas cocok. Berhasil gabung ke dalam kelas.';
                $type = 'success';
            } else {
                $message = 'Tidak diperbolehkan mengambil kelas dengan mata kuliah yang sama.';
            }
        } 
        $notification = [
            'message' => (isset($message)) ? $message : 'Kode kelas tidak ditemukan. Silahkan periksa kembali kode kelas yang dimasukkan.',
            'alert-type' => (isset($type)) ? $type : 'error',
        ];
        return redirect()->back()->with($notification);
    }

    public function checkExistClassroom($classroom){
        $classrooms = Sentinel::getUser()->student->classrooms;
        foreach($classrooms as $row){
            if($row->course->id == $classroom->course->id)
                return true;
        }
        return false;
    }
}
