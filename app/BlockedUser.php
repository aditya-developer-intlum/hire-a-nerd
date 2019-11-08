<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlockedUser extends Model
{
    protected $fillable = ['visitors','is_blocked','blocked_duration','total_attempt'];
}
