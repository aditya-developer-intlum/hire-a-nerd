<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSocialMedia extends Model
{
    public $fillable=[
				    	"user_id",
				    	"linked_account_id",
				    	"nick_name",
				    	"name",
				    	"email",
				    	"avatar"
				    ];
}
