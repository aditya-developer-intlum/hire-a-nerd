<?php

use Illuminate\Database\Seeder;

class ChatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chats')->delete();
        
        \DB::table('chats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'hi',
                'is_seen' => 1,
                'created_at' => '2019-09-26 07:27:35',
                'updated_at' => '2019-09-26 09:01:37',
            ),
            1 => 
            array (
                'id' => 2,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'hi',
                'is_seen' => 1,
                'created_at' => '2019-09-26 07:28:18',
                'updated_at' => '2019-09-26 09:01:37',
            ),
            2 => 
            array (
                'id' => 3,
                'sender_id' => 22,
                'receiver_id' => 21,
                'message' => 'hi',
                'is_seen' => 0,
                'created_at' => '2019-09-26 07:47:42',
                'updated_at' => '2019-09-26 07:47:42',
            ),
            3 => 
            array (
                'id' => 4,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'hi',
                'is_seen' => 1,
                'created_at' => '2019-09-26 08:06:39',
                'updated_at' => '2019-09-26 09:01:37',
            ),
            4 => 
            array (
                'id' => 5,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'hello',
                'is_seen' => 1,
                'created_at' => '2019-09-26 08:06:49',
                'updated_at' => '2019-09-26 09:01:37',
            ),
            5 => 
            array (
                'id' => 6,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'hi',
                'is_seen' => 1,
                'created_at' => '2019-09-26 08:07:01',
                'updated_at' => '2019-09-26 09:01:37',
            ),
            6 => 
            array (
                'id' => 7,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'hi',
                'is_seen' => 1,
                'created_at' => '2019-09-26 08:07:35',
                'updated_at' => '2019-09-26 09:01:37',
            ),
            7 => 
            array (
                'id' => 8,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'l',
                'is_seen' => 1,
                'created_at' => '2019-09-26 08:09:18',
                'updated_at' => '2019-09-26 09:01:37',
            ),
            8 => 
            array (
                'id' => 9,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'hi',
                'is_seen' => 1,
                'created_at' => '2019-09-26 08:10:21',
                'updated_at' => '2019-09-26 09:01:37',
            ),
            9 => 
            array (
                'id' => 10,
                'sender_id' => 17,
                'receiver_id' => 22,
                'message' => NULL,
                'is_seen' => 1,
                'created_at' => '2019-09-26 08:11:21',
                'updated_at' => '2019-09-26 09:01:12',
            ),
            10 => 
            array (
                'id' => 11,
                'sender_id' => 17,
                'receiver_id' => 22,
                'message' => NULL,
                'is_seen' => 1,
                'created_at' => '2019-09-26 08:11:39',
                'updated_at' => '2019-09-26 09:01:12',
            ),
            11 => 
            array (
                'id' => 12,
                'sender_id' => 17,
                'receiver_id' => 22,
                'message' => 'dd',
                'is_seen' => 1,
                'created_at' => '2019-09-26 08:11:49',
                'updated_at' => '2019-09-26 09:01:12',
            ),
            12 => 
            array (
                'id' => 13,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'hi hello',
                'is_seen' => 1,
                'created_at' => '2019-09-26 08:18:55',
                'updated_at' => '2019-09-26 09:01:37',
            ),
            13 => 
            array (
                'id' => 14,
                'sender_id' => 17,
                'receiver_id' => 22,
                'message' => 'yes please',
                'is_seen' => 1,
                'created_at' => '2019-09-26 08:19:06',
                'updated_at' => '2019-09-26 09:01:12',
            ),
            14 => 
            array (
                'id' => 15,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => '1',
                'is_seen' => 0,
                'created_at' => '2019-09-27 04:38:23',
                'updated_at' => '2019-09-27 04:38:23',
            ),
            15 => 
            array (
                'id' => 16,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => '1',
                'is_seen' => 0,
                'created_at' => '2019-09-27 04:38:24',
                'updated_at' => '2019-09-27 04:38:24',
            ),
            16 => 
            array (
                'id' => 17,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => '1',
                'is_seen' => 0,
                'created_at' => '2019-09-27 04:38:24',
                'updated_at' => '2019-09-27 04:38:24',
            ),
            17 => 
            array (
                'id' => 18,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => '1',
                'is_seen' => 0,
                'created_at' => '2019-09-27 04:38:24',
                'updated_at' => '2019-09-27 04:38:24',
            ),
            18 => 
            array (
                'id' => 19,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => '1',
                'is_seen' => 0,
                'created_at' => '2019-09-27 04:38:25',
                'updated_at' => '2019-09-27 04:38:25',
            ),
            19 => 
            array (
                'id' => 20,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => '1',
                'is_seen' => 0,
                'created_at' => '2019-09-27 04:38:46',
                'updated_at' => '2019-09-27 04:38:46',
            ),
            20 => 
            array (
                'id' => 21,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => NULL,
                'is_seen' => 0,
                'created_at' => '2019-09-27 04:42:01',
                'updated_at' => '2019-09-27 04:42:01',
            ),
            21 => 
            array (
                'id' => 22,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'df',
                'is_seen' => 0,
                'created_at' => '2019-09-27 04:44:08',
                'updated_at' => '2019-09-27 04:44:08',
            ),
            22 => 
            array (
                'id' => 23,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'hi',
                'is_seen' => 0,
                'created_at' => '2019-09-27 04:46:37',
                'updated_at' => '2019-09-27 04:46:37',
            ),
            23 => 
            array (
                'id' => 24,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'ss',
                'is_seen' => 0,
                'created_at' => '2019-10-19 12:28:19',
                'updated_at' => '2019-10-19 12:28:19',
            ),
            24 => 
            array (
                'id' => 25,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'ss',
                'is_seen' => 0,
                'created_at' => '2019-10-19 12:28:22',
                'updated_at' => '2019-10-19 12:28:22',
            ),
            25 => 
            array (
                'id' => 26,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'ss',
                'is_seen' => 0,
                'created_at' => '2019-10-19 12:28:24',
                'updated_at' => '2019-10-19 12:28:24',
            ),
            26 => 
            array (
                'id' => 27,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'ss',
                'is_seen' => 0,
                'created_at' => '2019-10-19 12:28:24',
                'updated_at' => '2019-10-19 12:28:24',
            ),
            27 => 
            array (
                'id' => 28,
                'sender_id' => 22,
                'receiver_id' => 17,
                'message' => 'ss',
                'is_seen' => 0,
                'created_at' => '2019-10-19 12:28:24',
                'updated_at' => '2019-10-19 12:28:24',
            ),
        ));
        
        
    }
}