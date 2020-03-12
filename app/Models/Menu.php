<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SubMenu;
use App\Models\ScopeList;
use Kyslik\ColumnSortable\Sortable;

class Menu extends Model
{   
    use Sortable;
    
    protected $table = "menu";
    public $timestamps = false;
    protected $fillable = ['slug','name','is_active','description'];
    public $sortable = ['slug','name','description','is_active'];

    public function subMenu()
    {
    	return $this->hasMany(SubMenu::class)->orderBy('sort_id','asc');
    }
    public function scopeList()
    {
    	return $this->hasMany(ScopeList::class);
    }
}
