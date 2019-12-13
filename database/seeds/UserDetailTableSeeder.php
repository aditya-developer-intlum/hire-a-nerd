<?php

use Illuminate\Database\Seeder;

class UserDetailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_detail')->delete();
        
        \DB::table('user_detail')->insert(array (
            0 => 
            array (
                'id' => 7,
                'user_id' => 22,
                'sort_story' => '',
                'country' => '',
                'description' => 'My name is  Portal. I have over five years of experience in graphic design field. Now i am here to help you for all your creativity needs. Looking forward to hear from you.',
                'avatar' => 'uploads/user/avatar/VwSy6RQw8gFs6hh9vKQYu2TPRzlqxSkcYlNRlgYx.jpeg',
                'created_at' => '2019-06-18 22:35:24',
                'updated_at' => '2019-08-29 06:23:35',
            ),
            1 => 
            array (
                'id' => 8,
                'user_id' => 22,
                'sort_story' => '',
                'country' => '',
                'description' => 'Adityafffjkkkklllll',
                'avatar' => '',
                'created_at' => '2019-07-08 03:34:54',
                'updated_at' => '2019-07-08 03:40:12',
            ),
            2 => 
            array (
                'id' => 9,
                'user_id' => 22,
                'sort_story' => '',
                'country' => '',
                'description' => 'HE llo',
                'avatar' => 'uploads/user/avatar/cXD9FN6ap3i3RYurssaTSf0QXwwTx0ecyQCL5yS7.jpeg',
                'created_at' => '2019-07-09 02:41:24',
                'updated_at' => '2019-08-26 02:25:21',
            ),
            3 => 
            array (
                'id' => 10,
                'user_id' => 22,
                'sort_story' => NULL,
                'country' => NULL,
                'description' => NULL,
                'avatar' => 'uploads/user/avatar/tkyxint0oVkh3e097sjtciaytoVKTancqblYs3X0.jpeg',
                'created_at' => '2019-08-19 06:49:41',
                'updated_at' => '2019-08-19 06:49:41',
            ),
            4 => 
            array (
                'id' => 11,
                'user_id' => 534,
                'sort_story' => NULL,
                'country' => NULL,
                'description' => 'Hi i have 10 Year of Experience',
                'avatar' => NULL,
                'created_at' => '2019-10-04 09:29:05',
                'updated_at' => '2019-10-04 09:29:05',
            ),
            5 => 
            array (
                'id' => 12,
                'user_id' => 536,
                'sort_story' => NULL,
                'country' => NULL,
                'description' => 'Breejraj provides different types of excellent services at a very competitive price.',
                'avatar' => 'uploads/user/avatar/8ZVUvisK6GJcrt4maUwd4z7N7E0tDfHDdne0NQl9.png',
                'created_at' => '2019-11-10 10:56:28',
                'updated_at' => '2019-11-10 11:02:06',
            ),
            6 => 
            array (
                'id' => 13,
                'user_id' => 537,
                'sort_story' => NULL,
                'country' => NULL,
                'description' => 'Hey, this is Sandy Mack and I am an in born professional. I can do all your digital work in a short time with great quality.',
                'avatar' => 'uploads/user/avatar/PYY3jwALyzkEoMOlg0oTYAFoI5lUJFcnaBUTbyRb.jpeg',
                'created_at' => '2019-11-13 01:58:13',
                'updated_at' => '2019-11-13 01:59:21',
            ),
            7 => 
            array (
                'id' => 14,
                'user_id' => 538,
                'sort_story' => NULL,
                'country' => NULL,
                'description' => 'I will be your Social Media Manager.',
                'avatar' => 'uploads/user/avatar/WAbxaUarjMlhwuztbvcQ8tLtUZe3KDcUl0wYtc5E.jpeg',
                'created_at' => '2019-11-15 06:55:55',
                'updated_at' => '2019-11-15 06:57:49',
            ),
        ));
        
        
    }
}