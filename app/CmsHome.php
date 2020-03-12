<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsHome extends Model
{
    public $guarded = ['_token'];
    public $timestamps = false;
    public $table = "cms_home";
}
