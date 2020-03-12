<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gig;
use App\Order;
use Session;
use Auth;
use App\Notifications\SuspendServiceNotification;
use Log;
class GigController extends Controller
{
    private $gigs;
    private $order = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->user()->can('viewAny',Gig::class)){
            $this->setPagination($request)
            ->setSearch($request)
            ->setStatus($request)
            ->search($request)
            ->view();

            return view('admin.gig-manage.view',['gigs' => $this->gigs]);
        } else {
            abort(404);
        }
    }
    private function view()
    {
        $search = Session::get('search_gigs');
        $pagination = Session::get('gigs_table_size');
        if(empty($search)){
                $status = Session::get('status_action');
                if(!empty($status)){
                       $status = $status==10?0:Session::get('status_action');
                    $this->gigs = Gig::with('user','menu','submenu','gigprice')
                    ->whereStatus(true)
                    ->where('is_status',$status)
                    ->orderBy('id','desc')
                    ->paginate($pagination ?? 10);
                }else{


                    $this->gigs = Gig::with('user','menu','submenu','gigprice')
                    ->whereStatus(true)
                    ->orderBy('id','desc')
                    ->paginate($pagination ?? 10);    
                }
        }
        return $this;
    }
    private function search(Request $request)
    {
        $search = Session::get('search_gigs');
        $pagination = Session::get('gigs_table_size');
        $status = Session::get('status_action');
        if(!empty($search)){

            $this->gigs = Gig::with('user','menu','submenu','gigprice')
            ->whereStatus(1)
            ->where(function($query) use ($status){

                if(!empty($status)){
                    $status = $status==10?0:Session::get('status_action');
                    $query->where('is_status',$status);
                }
            })
            ->where(function($query) use ($search){
                
                $query->orWhereHas('menu',function($q) use ($search) {

                    $q->where('name','like',"{$search}%");
                });
                $query->orWhereHas('submenu',function($q) use ($search) {

                    $q->where('name','like',"{$search}%");
                });
                $query->orWhereHas('user',function($q) use ($search) {

                    $q->where('name','like',"{$search}%");
                });
                $query->orWhere('gig_title','like',"{$search}%");

            })
            ->orderBy('id','desc')
            ->paginate($pagination ?? 10); 
        }
        return $this;
    }
    private function setSearch(Request $request)
    {
        if($request->has('search')){
            Session::put('search_gigs',$request->search);  
        }
        return $this;
    }
    private function setPagination(Request $request)
    {

        if($request->has('display')){
            Session::put('gigs_table_size',$request->display);     
        }
        return $this;
    }
    private function setStatus(Request $request)
    {
        if($request->has('status_action')){

            switch ($request->status_action) {
                case 'pending':
                    Session::put('status_action',10);
                    Session::put('status_action_view','pending'); 
                    break;
                case 'approved':
                    Session::put('status_action',1);
                    Session::put('status_action_view','approved'); 
                    break;
                case 'blocked':
                    Session::put('status_action',2); 
                    Session::put('status_action_view','blocked'); 
                    break;
                case 'suspend':
                    Session::put('status_action',3); 
                    Session::put('status_action_view','suspend'); 
                    break;
                default:
                    Session::put('status_action',null); 
                    Session::put('status_action_view',''); 
                    break;
            }

        }

        return $this;
    }
    /**
     * Accepting Gig
     *
     * @return \Illuminate\Http\Response
     */
    public function accept(Gig $gig)
    {
        if(Auth::user()->can(__FUNCTION__,Gig::class)){
            $gig->update(['is_status' => 1]);
            return back();    
        }else{
            abort(404);
        }
        
    }
    /**
     * Block Gig
     *
     * @return void
     */
    public function block(Gig $gig): void
    {
        if(Auth::user()->can(__FUNCTION__,Gig::class)){
            $gig->update(['is_status' => 2]);
        } else{
            abort(404);
        }
        
    }
    /**
     * Suspend Gig
     *
     * @return void
     */
    public function suspend(Request $request,Gig $gig)
    {
        if(Auth::user()->can(__FUNCTION__,Gig::class)){
            $validator = \Validator::make($request->all(),[
                'number_of_days' => 'required|numeric',
                'region' => 'required'
            ]);
            if($validator->fails()){
                return response()->json(['errors'=>$validator->errors()]);
            }

            $gig->update([
                'is_status' => 3,
                'suspended_till' => date('Y-m-d',strtotime("+ {$request->number_of_days} days")),
                'region' => $request->region
            ]);
                $this->suspendNotification($request,$gig);

            return $gig;
        }else{
            abort(404);
        }
        
    }

    public function suspendNotification(Request $request,Gig $gig)
    {
        
        try {
            $gig->user->notify(new SuspendServiceNotification($request));    
        } catch (Exception $e) {

            Log::error($e->getMessage());
        }

        return $this;
        
    }
    /**
     * Delete Gig
     *
     * @return void
     */
    public function destroy(Gig $gig): void
    {
        if(Auth::user()->can('delete',Gig::class)){
            $gig->delete();
        }else{
             abort(404);
        }
    }
    public function sellerDetail(Gig $gig,$page="")
    {
        $gig = $gig->load(
            'user',
            'user.userDetail',
            'user.userBillingAaddresses',
            'user.gig',
            'user.sellerTransaction',
            'user.wallet'
        );
        if($page == 'buyers'){
            $this->order = Order::with('transaction','user')->where('gig_id',$gig->id)->get();
        }
        return view('admin.gig-manage.seller-detail',[
            'gig' => $gig,
            'orders' => $this->order
        ]);
    }

}
