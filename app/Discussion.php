<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Discussion extends Model
{

    protected $appends = ['created_at_display', 'closed_at_display', 'has_ended'];

    public function getCreatedAtDisplayAttribute()
	{
        $created_at_date_display = date_format(new Carbon($this->created_at), "d-m-Y");
        $created_at_hour_display = date_format(new Carbon($this->created_at), "H:i:s");
        $created_at = $created_at_date_display . ' ' . $created_at_hour_display;
    	return $created_at;
    }

    public function getClosedAtDisplayAttribute()
	{
        $closed_at_date_display = date_format(new Carbon($this->closed_at), "d-m-Y");
        $closed_at_hour_display = date_format(new Carbon($this->closed_at), "H:i:s");
        $closed_at = $closed_at_date_display . ' ' . $closed_at_hour_display;
    	return $closed_at;
    }
    
    public function getHasEndedAttribute()
	{
        $deadline = new Carbon($this->closed_at);
        if(new Carbon() < $deadline)
            $has_ended = false;
        else
            $has_ended = true;
    	return $has_ended;
    }
    
    public function lecturer()
    {
		return $this->belongsTo('App\Lecturer');
    }

    public function comment()
    {
		return $this->hasMany('App\Comment');
    }
}
