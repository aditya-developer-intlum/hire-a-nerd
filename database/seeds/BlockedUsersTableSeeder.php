<?php

use Illuminate\Database\Seeder;

class BlockedUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blocked_users')->delete();
        
        
        
    }
}