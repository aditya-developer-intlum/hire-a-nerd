<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ScopeList;

class SubMenu extends Model
{
    protected $table = "sub_menu";
    public $timestamps = false;
    protected $fillable = ['menu_id','name','slug','is_active'];

    public function menu()
    {
    	return $this->belongsTo('App\Models\Menu');
    }
    public function scopeList()
    {
    	return $this->hasMany(ScopeList::class);
    }
}
