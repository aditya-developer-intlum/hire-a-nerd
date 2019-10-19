<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dribbble extends Model
{
    public $timestamps = false;

    public $fillable = [
		    
		    "user_id",
		    "avatar_url",
		    "bio",
		    "created_at",
		    "followers_count",
		    "html_url",
		    "location",
		    "login",
		    "type"
	];
}

