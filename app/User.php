<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \Cartalyst\Sentinel\Users\EloquentUser
{
    protected $loginNames = ['no_academic'];

    protected $appends = ['name', 'path_image'];

    public function getNameAttribute()
	{
        $name = $this->first_name . ' ' . $this->last_name;
        return $name;
    }

    // public function getPathImageAttribute()
	// {
    //     $path_image = '/images/' . $this->image;
	// 	return $path_image;
    // }
    
    public function student()
	{
		return $this->hasOne('App\Student');
    }
    
    public function discussion()
	{
		return $this->belongsToMany('App\Discussion', 'comments');
	}
}
