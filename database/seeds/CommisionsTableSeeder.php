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
                'amount' => 15,
                'created_at' => '2019-08-20 11:54:14',
                'updated_at' => '2019-08-21 17:09:31',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => 17,
                'menu_id' => 9,
                'sub_menu_id' => NULL,
                'amount' => 30,
                'created_at' => '2019-08-20 12:26:10',
                'updated_at' => '2019-08-20 12:26:10',
            ),
            2 => 
            array (
                'id' => 5,
                'user_id' => 17,
                'menu_id' => 8,
                'sub_menu_id' => NULL,
                'amount' => 10,
                'created_at' => '2019-08-20 12:26:42',
                'updated_at' => '2019-08-20 12:26:42',
            ),
            3 => 
            array (
                'id' => 6,
                'user_id' => 17,
                'menu_id' => NULL,
                'sub_menu_id' => 147,
                'amount' => 10,
                'created_at' => '2019-08-20 12:30:46',
                'updated_at' => '2019-08-20 12:30:46',
            ),
            4 => 
            array (
                'id' => 7,
                'user_id' => 17,
                'menu_id' => NULL,
                'sub_menu_id' => 146,
                'amount' => 15,
                'created_at' => '2019-08-20 12:31:23',
                'updated_at' => '2019-08-20 12:31:23',
            ),
            5 => 
            array (
                'id' => 8,
                'user_id' => 17,
                'menu_id' => NULL,
                'sub_menu_id' => 2,
                'amount' => 15,
                'created_at' => '2019-08-20 16:40:33',
                'updated_at' => '2019-08-21 17:34:18',
            ),
        ));
        
        
    }
}