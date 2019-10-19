<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Scope;

class ScopeList extends Model
{
    protected $fillable = ['menu_id','sub_menu_id','scope_id'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function subMenu()
    {
        return $this->belongsTo(SubMenu::class);
    }
    public function scope()
    {
        return $this->belongsTo(Scope::class);
    }

}
