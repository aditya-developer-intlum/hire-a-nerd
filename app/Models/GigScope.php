<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GigScope extends Model
{
    public $timestamps = false;
    public $fillable = ["gig_price_id","basic","standard","premium"];
}
