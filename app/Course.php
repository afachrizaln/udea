<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function chapter()
	{
		return $this->hasMany('App\Chapter');
	}

	public function student()
	{
		return $this->belongsToMany('App\Student', 'student_courses');
	}
}
