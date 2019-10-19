<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatFile extends Model
{
	protected $fillable = ["chat_id","file","file_size","file_type"];
    public function chat()
    {
    	return $this->belongsTo('App\Chat');
    }
}
