<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    public function course()
	{
		return $this->belongsTo('App\Course');
	}

	public function lecture()
	{
		return $this->belongsTo('App\Lecture');
	}

	public function student()
	{
		return $this->belongsToMany('App\Student', 'classrooms_students');
	}
}
