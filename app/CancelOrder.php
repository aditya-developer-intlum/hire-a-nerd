<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CancelOrder extends Model
{
    protected $fillable = ["order_id","region"];
}
