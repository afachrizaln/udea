<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    public function subChapter()
	{
		return $this->hasMany('App\SubChapter');
	}

	public function discussion()
	{
		return $this->hasMany('App\Discussion');
	}
}
