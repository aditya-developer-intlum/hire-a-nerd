<?php

use Illuminate\Database\Seeder;

class ChatRelationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_relations')->delete();
        
        \DB::table('chat_relations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sender_id' => 22,
                'receiver_id' => 17,
                'last_login' => '2019-11-16 03:54:56',
                'is_online' => 0,
                'created_at' => NULL,
                'updated_at' => '2019-11-16 09:54:56',
            ),
            1 => 
            array (
                'id' => 2,
                'sender_id' => 17,
                'receiver_id' => 22,
                'last_login' => '2019-11-11 05:35:58',
                'is_online' => 1,
                'created_at' => NULL,
                'updated_at' => '2019-11-14 11:02:42',
            ),
            2 => 
            array (
                'id' => 3,
                'sender_id' => 22,
                'receiver_id' => 21,
                'last_login' => '2019-09-26 10:19:00',
                'is_online' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'sender_id' => 21,
                'receiver_id' => 22,
                'last_login' => '2019-11-11 05:35:58',
                'is_online' => 1,
                'created_at' => NULL,
                'updated_at' => '2019-11-14 11:02:42',
            ),
            4 => 
            array (
                'id' => 5,
                'sender_id' => 17,
                'receiver_id' => 21,
                'last_login' => '2019-09-26 13:19:00',
                'is_online' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'sender_id' => 21,
                'receiver_id' => 17,
                'last_login' => '2019-11-16 03:54:56',
                'is_online' => 0,
                'created_at' => NULL,
                'updated_at' => '2019-11-16 09:54:56',
            ),
        ));
        
        
    }
}