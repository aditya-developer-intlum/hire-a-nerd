<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatRelation extends Model
{
	protected $fillable = ["sender_id","receiver_id","is_online","last_login"];

    public function chat()
    {
    	return $this->hasMany('App\Chat','receiver_id','sender_id');
    }
    public function user()
    {
    	return $this->belongsTo('App\User','receiver_id');
    }
}
