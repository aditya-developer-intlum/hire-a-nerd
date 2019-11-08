<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\User;
use App\Models\UserPermission;
use Carbon\Carbon;
use Illuminate\Support\Str;
class PersmissionsTableSeeder extends Seeder
{	
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_ids = [
            'user',
            'skill',
            'qualification',
            'category',
            'sub_category',
            'sub_admin',
            'manage_gig',
            'press_and_news',
            'faq'
        ];

        $permissions = [];
        foreach ($permissions_ids as $_id) {
            $title = Str::title($_id);

            $permissions[] = ['slug' => "can_viewAny_{$_id}", 'title' => "Can View {$title}",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"{$_id}"];

            $permissions[] = ['slug' => "can_create_{$_id}", 'title' => "Can Create {$title}",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"{$_id}"];

            $permissions[] = ['slug' => "can_edit_{$_id}", 'title' => "Can Edit {$title}",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"{$_id}"];

            $permissions[] = ['slug' => "can_delete_{$_id}", 'title' => "Can Delete {$title}",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"{$_id}"];

            $permissions[] = ['slug' => "can_change_status_{$_id}", 'title' => "Can Change {$title} Status",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"{$_id}"];
        }

        $permissions[] = ['slug' => "can_suspend_user", 'title' => "Can Suspend User",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"user"];

        $permissions[] = ['slug' => "can_view_user", 'title' => "Can See User Detail",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"user"];

        $permissions[] = ['slug' => "can_reset_password_user", 'title' => "Can Reset User Password",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"user"];

        $permissions[] = ['slug' => "can_login_as_user", 'title' => "Can Login as User",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"user"];

        $permissions[] = ['slug' => "can_download_user", 'title' => "Can Download User List in Excel and CSV",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"user"];

        $permissions[] = ['slug' => "can_permission_sub_admin", 'title' => "Can Access Permission",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"sub_admin"];

        $permissions[] = ['slug' => "can_manage_gig_accept", 'title' => "Can Accept Gig",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"manage_gig"];

        $permissions[] = ['slug' => "can_manage_gig_view", 'title' => "Can View Gig",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"manage_gig"];

        $permissions[] = ['slug' => "can_manage_gig_block", 'title' => "Can Block Gig",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"manage_gig"];

         $permissions[] = ['slug' => "can_manage_gig_suspend", 'title' => "Can Suspend Gig",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"manage_gig"];

         $permissions[] = ['slug' => "can_manage_gig_see_earning", 'title' => "Can See Commision on Gig",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),'identify'=>"manage_gig"];

        Permission::insert($permissions);

        $this->userPermission();

       
    }
    private function userPermission()
    {
        $admins = User::whereType(1)->get();
        $permissions = Permission::all();
        $userPermission = [];
        foreach($admins as $admin){

            foreach ($permissions as $_permisison) {
                
                $userPermission[] = [
                    'user_id' => $admin->id,
                    'permission_id' => $_permisison->id, 
                ];    
            }
            
        }
        UserPermission::insert($userPermission);
    }
}
