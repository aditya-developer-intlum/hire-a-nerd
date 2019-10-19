<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $fillable=["name","email","mobile_number","age","salary"];
}
