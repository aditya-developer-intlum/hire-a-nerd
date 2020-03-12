<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ScopeList;
use Kyslik\ColumnSortable\Sortable;

class SubMenu extends Model
{
    use Sortable;
    protected $table = "sub_menu";
    public $timestamps = false;
    protected $fillable = ['menu_id','name','slug','is_active','sort_id'];
    public $sortable = ['menu_id','name','slug','is_active','sort_id'];

    public function menu()
    {
    	return $this->belongsTo('App\Models\Menu');
    }
    public function scopeList()
    {
    	return $this->hasMany(ScopeList::class);
    }
}
