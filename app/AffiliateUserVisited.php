<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliateUserVisited extends Model
{
    protected $table = "affiliate_user_visited";

    protected $fillable = [
    	"public_ip",
    	"affiliate_link_id",
    	"total_count",
    	"unique_count",
    	"device",
    	"os",
    	"browser",
    	"device_type"
    ];
}
