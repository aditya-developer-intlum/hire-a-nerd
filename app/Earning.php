<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Earning extends Model
{
    protected $fillable = [
    	"seller_id",
    	"buyer_id",
    	"gig_id",
    	"amount",
    	"mode",
    	"region",
    	"order_id"
    ];
}
