<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubChapter;

class Chapter extends Model
{
    public function subChapter()
	{
		return $this->hasMany(SubChapter::class, 'chapter_id');
	}
}
