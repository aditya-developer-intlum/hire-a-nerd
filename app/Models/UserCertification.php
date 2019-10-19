<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCertification extends Model
{
    public $fillable=["certified","certified_from","year","user_id"];
}
