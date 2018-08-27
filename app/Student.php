<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	
	public function classrooms()
	{
		return $this->belongsToMany('App\Classroom', 'classroom_students');
	}
}
