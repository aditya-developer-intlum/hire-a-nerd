<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    public $fillable=["user_id","skill_id","skill_name","skill_level"];
}
