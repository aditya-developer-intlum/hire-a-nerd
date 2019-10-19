<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    protected $fillable = ['permission_id','user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function permissions()
    {
    	return $this->belongsTo('App\Models\Permission');
    }
}
