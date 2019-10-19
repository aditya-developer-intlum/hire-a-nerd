<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SubMenu;
use App\Models\ScopeList;

class Menu extends Model
{
    protected $table = "menu";
    public $timestamps = false;
    protected $fillable = ['slug','name','is_active'];

    public function subMenu()
    {
    	return $this->hasMany(SubMenu::class);
    }
    public function scopeList()
    {
    	return $this->hasMany(ScopeList::class);
    }
}
