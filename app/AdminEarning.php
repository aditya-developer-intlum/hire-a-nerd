<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminEarning extends Model
{
    protected $fillable = [
    	"admin_id",
    	"seller_id",
    	"gig_id",
    	"amount",
    	"mode",
    	"region",
    	"order_id"
    ];
}
