<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suspend extends Model
{
    protected $fillable = [
    	'user_id',
    	'suspend_days',
    	'suspend_region',
    	'status'
    ];
}
