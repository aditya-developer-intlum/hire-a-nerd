<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function userPermission()
    {
    	return $this->hasMany('App\Models\UserPermission');
    }
    public function getTitleAttribute() {

    	return ucwords(str_replace("_", " ", $this->attributes['title']));
	}
}
