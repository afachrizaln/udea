<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomStudent extends Model
{
    protected $fillable = [
		'classroom_id',
		'student_id',
    ];
}
