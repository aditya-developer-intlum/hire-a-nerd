<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Inbox Messages',
                'created_at' => '2019-06-11 00:00:00',
                'updated_at' => '2019-06-11 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Order Messages',
                'created_at' => '2019-06-11 00:00:00',
                'updated_at' => '2019-06-11 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Order Updates',
                'created_at' => '2019-06-11 00:00:00',
                'updated_at' => '2019-06-11 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Buyer Requests',
                'created_at' => '2019-06-11 00:00:00',
                'updated_at' => '2019-06-11 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'My Gigs',
                'created_at' => '2019-06-11 00:00:00',
                'updated_at' => '2019-06-11 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'My Account',
                'created_at' => '2019-06-11 00:00:00',
                'updated_at' => '2019-06-11 00:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'To-dos',
                'created_at' => '2019-06-11 17:57:30',
                'updated_at' => '2019-06-11 00:00:00',
            ),
        ));
        
        
    }
}