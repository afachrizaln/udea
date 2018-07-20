<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Comment extends Model
{
    protected $fillable = [
		'user_id',
		'discussion_id',
		'comment',
    ];
    
    protected $appends = ['created_at_display'];

    public function getCreatedAtDisplayAttribute()
	{
        $created_at_date_display = date_format(new Carbon($this->created_at), "d-m-Y");
        $created_at_hour_display = date_format(new Carbon($this->created_at), "H:i:s");
        $created_at = $created_at_date_display . ' ' . $created_at_hour_display;
    	return $created_at;
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
