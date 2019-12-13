<?php

use Illuminate\Database\Seeder;

class ScopeListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('scope_lists')->delete();
        
        \DB::table('scope_lists')->insert(array (
            0 => 
            array (
                'id' => 12,
                'menu_id' => 2,
                'sub_menu_id' => 158,
                'scope_id' => 1,
                'created_at' => '2019-08-07 10:48:00',
                'updated_at' => '2019-08-07 10:48:00',
            ),
            1 => 
            array (
                'id' => 13,
                'menu_id' => 2,
                'sub_menu_id' => 158,
                'scope_id' => 2,
                'created_at' => '2019-08-07 10:48:00',
                'updated_at' => '2019-08-07 10:48:00',
            ),
            2 => 
            array (
                'id' => 14,
                'menu_id' => 2,
                'sub_menu_id' => 158,
                'scope_id' => 3,
                'created_at' => '2019-08-07 10:48:00',
                'updated_at' => '2019-08-07 10:48:00',
            ),
            3 => 
            array (
                'id' => 18,
                'menu_id' => 4,
                'sub_menu_id' => 159,
                'scope_id' => 2,
                'created_at' => '2019-08-07 12:31:09',
                'updated_at' => '2019-08-07 12:31:09',
            ),
            4 => 
            array (
                'id' => 19,
                'menu_id' => 4,
                'sub_menu_id' => 159,
                'scope_id' => 6,
                'created_at' => '2019-08-07 12:31:09',
                'updated_at' => '2019-08-07 12:31:09',
            ),
            5 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'sub_menu_id' => 1,
                'scope_id' => 2,
                'created_at' => '2019-08-07 12:34:56',
                'updated_at' => '2019-08-07 12:34:56',
            ),
            6 => 
            array (
                'id' => 22,
                'menu_id' => 1,
                'sub_menu_id' => 1,
                'scope_id' => 3,
                'created_at' => '2019-08-07 12:34:56',
                'updated_at' => '2019-08-07 12:34:56',
            ),
            7 => 
            array (
                'id' => 24,
                'menu_id' => 1,
                'sub_menu_id' => 2,
                'scope_id' => 5,
                'created_at' => '2019-08-07 12:47:56',
                'updated_at' => '2019-08-07 12:47:56',
            ),
            8 => 
            array (
                'id' => 25,
                'menu_id' => 7,
                'sub_menu_id' => 160,
                'scope_id' => 2,
                'created_at' => '2019-08-07 13:02:08',
                'updated_at' => '2019-08-07 13:02:08',
            ),
        ));
        
        
    }
}