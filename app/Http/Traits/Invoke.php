<?php 

namespace App\Http\Traits;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\University;
use App\Models\Country;
use App\Models\Skill;

Trait Invoke
{

	public function __invoke(Request $request)
	{
		$data = $this->check($request)->store($request);
		 
    	return response()->json(["success"=>true,'data'=>$data]);
	}

	public function TextToId($string)
	{
		$lang = Language::whereName($string)->firstOrFail();

		return $lang->id;
	}
	public function UniveristiyTextToId($string)
	{
		$lang = University::whereName($string)->firstOrFail();

		return $lang->id;
	}
	public function CountryNameToId($string)
	{
		$country = Country::whereName($string)->firstOrFail();

		return $country->id;
	}
	public function skillNametoId($string)
	{
		$skill = Skill::whereName($string)->firstOrFail();

		return $skill->id;
	}
}









 ?>