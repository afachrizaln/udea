<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \Cartalyst\Sentinel\Users\EloquentUser
{
    protected $loginNames = ['no_academic'];

    protected $appends = ['name', 'image'];

    public function getNameAttribute()
	{
        $name = $this->first_name . ' ' . $this->last_name;
        return $name;
    }

    public function getImageAttribute()
	{
        if($this->roles()->first()->slug == 'admin')
            return $image = '/material/images/users/admin.png';
            
		if($this->gender == 'M')
			$image = '/material/images/users/doctor-M.png';
		else
			$image = '/material/images/users/doctor-F.png';
		return $image;
    }
    
    public function student()
	{
		return $this->hasOne('App\Student');
	}
}
