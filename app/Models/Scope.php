<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ScopeList;
class Scope extends Model
{
	use SoftDeletes;
	
    public $timestamps = false;
    protected $fillable = ['name'];
    public function scopeList()
    {
    	return $this->hasMany(ScopeList::class);
    }
   
}
