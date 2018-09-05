<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
	public function course()
	{
		return $this->belongsTo('App\Course');
	}

    public function subChapter()
	{
		return $this->hasMany('App\SubChapter');
	}

	public function discussion()
	{
		return $this->hasMany('App\Discussion');
	}

	public function task()
	{
		return $this->hasMany('App\Task');
	}
}
