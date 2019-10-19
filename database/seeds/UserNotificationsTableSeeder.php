<?php

use Illuminate\Database\Seeder;

class UserNotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_notifications')->delete();
        
        
        
    }
}