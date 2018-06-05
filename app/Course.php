<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Chapter;

class Course extends Model
{
    public function chapter()
	{
		return $this->hasMany(Chapter::class, 'course_id');
	}
}
