<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    public function user(){
      	return $this->belongsTo('App\User');
	}
	
	public function classroom()
	{
		return $this->hasMany('App\Classroom');
	}
}
