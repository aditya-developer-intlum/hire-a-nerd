<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
	protected $fillable = ["sender_id","receiver_id","message","file","url","is_seen"];
	
    public function relation()
    {
    	return $this->belongsTo('App\ChatRelation','sender_id');
    }
    public function user()
    {
    	return $this->belongsTo('App\User','sender_id');
    }
}
