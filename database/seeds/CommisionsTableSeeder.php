<?php

use Illuminate\Database\Seeder;

class CommisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('commisions')->delete();
        
        \DB::table('commisions')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 17,
                'menu_id' => 1,
                'sub_menu_id' => NULL,
                'amount' => 10,
                'created_at' => '2019-08-20 02:24:14',
                'updated_at' => '2019-08-23 08:55:01',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => 17,
                'menu_id' => 9,
                'sub_menu_id' => NULL,
                'amount' => 30,
                'created_at' => '2019-08-20 02:56:10',
                'updated_at' => '2019-08-20 02:56:10',
            ),
            2 => 
            array (
                'id' => 5,
                'user_id' => 17,
                'menu_id' => 8,
                'sub_menu_id' => NULL,
                'amount' => 10,
                'created_at' => '2019-08-20 02:56:42',
                'updated_at' => '2019-08-20 02:56:42',
            ),
            3 => 
            array (
                'id' => 8,
                'user_id' => 17,
                'menu_id' => NULL,
                'sub_menu_id' => 2,
                'amount' => 15,
                'created_at' => '2019-08-20 07:10:33',
                'updated_at' => '2019-08-21 08:04:18',
            ),
            4 => 
            array (
                'id' => 9,
                'user_id' => 17,
                'menu_id' => NULL,
                'sub_menu_id' => 104,
                'amount' => 15,
                'created_at' => '2019-10-04 11:46:39',
                'updated_at' => '2019-10-04 11:46:39',
            ),
        ));
        
        
    }
}