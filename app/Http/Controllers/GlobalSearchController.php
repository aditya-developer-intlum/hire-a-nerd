<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;
use App\Models\GigPrice;
use Spatie\Searchable\Search;
use Spatie\Searchable\ModelSearchAspect;
use Auth;
use App\WishList;
use App\User;
class GlobalSearchController extends Controller
{
    public function search(Request $request)
    {

      if($request->search == ""){
        return back();
      }
    	$gigs = (new Search())
   		->registerModel(Gig::class, function(ModelSearchAspect $modelSearchAspect){
   			$modelSearchAspect->addSearchableAttribute('gig_title')
   			->with('user','user.userDetail','menu','subMenu')
   			->whereStatus(true)
            ->whereIsStatus(1)
            ->orderBy('id',"desc");
        $modelSearchAspect->addSearchableAttribute('tags')
   			->with('user','user.userDetail','menu','subMenu')
   			->whereStatus(true)
        ->whereIsStatus(1)
        ->orderBy('id',"desc");

   		})
      ->registerModel(User::class, function(ModelSearchAspect $modelSearchAspect){
        $modelSearchAspect->addSearchableAttribute('name')
        ->with(['gig'=>function($query){
          $query->whereStatus(true);
          $query->whereIsStatus(1);
        },'gig.menu','gig.subMenu','gig.user.userDetail'])
        ->whereHas('gig',function($query){
          $query->whereStatus(true);
          $query->whereIsStatus(1);
        })
        ;
      })
   		->search($request->search);
   		$title = "Search Results";

   		if (Auth::check()) {
   			$wish = WishList::where('user_id',auth()->user()->id)->get();	
   		}else{
   			$wish = [];
   		}
   		
   		
   		return view('front.search-result',compact('gigs','title','wish'));
    }
}

