<?php

namespace App\Http\Controllers\front;

use App\WishList;
use Illuminate\Http\Request;
use App\Models\Gig;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wish = WishList::where('user_id',auth()->user()->id)->get();
        $wish_arr = [];

        foreach ($wish as $_wish) {
            
            $wish_arr[] = $_wish->gig_id;
        }

        $gigs = Gig::with('user','user.userDetail','menu','subMenu')->whereIn('id',$wish_arr)
                ->whereStatus(true)
                ->whereIsStatus(1)
                ->orderBy('id',"desc")
                ->get();

        return view('wishlist.view',compact('gigs','wish'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wishlist = WishList::where('gig_id',$request->service_id)
        ->where('user_id',$request->user()->id);
        if($wishlist->exists()){

            $wishlist->delete();

        }else{

            WishList::create([
                'gig_id' => $request->service_id,
                'user_id' => $request->user()->id,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function show(WishList $wishList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function edit(WishList $wishList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WishList $wishList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function destroy(WishList $wishList)
    {
        //
    }
}
