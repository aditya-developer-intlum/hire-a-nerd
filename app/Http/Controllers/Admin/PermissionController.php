<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserPermission;
use App\User;
use App\Models\Permission;
class PermissionController extends Controller
{
	private $userPermission;

    public function __invoke(Request $request)
    {
        if($request->user()
            ->permissions('can_permission_sub_admin')
            ->exists()){

            $this->userPermission($request)
            ->collect($request)
            ->sync();

        }else{
            abort(404);
        }
    	
    }
    private function userPermission(Request $request)
    {
    	UserPermission::where('user_id',$request->user_id)->delete();

    	return $this;
    }
    private function collect(Request $request)
    {
    	foreach ($request->permission as $key => $permission) {
    			
    			$this->userPermission [] = [
    				'user_id' => $request->user_id,
    				'permission_id' => $permission
    			];
    		}
    	return $this;
    }
    private function sync()
    {
    	UserPermission::insert($this->userPermission);
    }

    public function subAdmin(Request $request,User $user)
    {
        if($request->ajax()){
            return $user->load('userPermission');
        }
        
        $permissions = new Permission;

        return view('admin.sub-admin.permission',compact('permissions','user'));
    }

}
