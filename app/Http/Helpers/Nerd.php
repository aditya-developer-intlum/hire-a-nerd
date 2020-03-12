<?php 

namespace App\Http\Helpers;
use App\Models\SocialMediaLink;
use App\Models\Menu;
use App\Models\SubMenu;
/**
 * 
 */
class Nerd
{
	
	public static function Social()
	{
	  return SocialMediaLink::whereIsActive(true)->orderBy("sort",'asc')->get();
	}

	public static function subMenu($slug = "")
	{
		return Menu::with("subMenu")->whereSlug($slug)->get();
	}
	public static function getMenuId($slug)
	{
		return Menu::where("slug","=",$slug)->firstOrFail()->id;
	}
	public static function getSubMenuId($slug)
	{
		return SubMenu::where("slug","=",$slug)->firstOrFail()->id;
	}
	public static function pageTitleFromSlug($slug)
	{
		return Menu::where("slug","=",$slug)->firstOrFail();
	}
	public static function pageSubTitleFromSlug($slug)
	{
		return SubMenu::where("slug","=",$slug)->firstOrFail()->name;
	}
	public static function category()
	{
		return Menu::with('submenu')->whereIsActive(true)->get();
	}
}