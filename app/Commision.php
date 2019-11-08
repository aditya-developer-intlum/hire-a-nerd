<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commision extends Model
{
    protected $fillable = ['user_id','menu_id','sub_menu_id','amount'];
}
