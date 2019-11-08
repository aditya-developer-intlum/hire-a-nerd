<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facebook extends Model
{
	protected $table = "facebook";
    protected $fillable = ["user_id","name","email","avatar"];
	public $timestamps = false;
}
