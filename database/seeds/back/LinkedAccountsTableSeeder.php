<?php

use Illuminate\Database\Seeder;

class LinkedAccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('linked_accounts')->delete();
        
        \DB::table('linked_accounts')->insert(array (
            0 => 
            array (
                'id' => 7,
                'name' => 'Facebook',
                'driver' => 'facebook',
                'created_at' => '2019-04-22 00:00:00',
                'updated_at' => '2019-06-01 00:21:00',
            ),
            1 => 
            array (
                'id' => 8,
                'name' => 'Google',
                'driver' => 'google',
                'created_at' => '2019-06-11 00:00:00',
                'updated_at' => '2019-06-11 00:00:00',
            ),
            2 => 
            array (
                'id' => 9,
                'name' => 'Dribbble',
                'driver' => 'dribbble',
                'created_at' => '2019-06-11 00:00:00',
                'updated_at' => '2019-06-12 00:00:00',
            ),
            3 => 
            array (
                'id' => 10,
                'name' => 'Stack Overflow',
                'driver' => 'stackexchange',
                'created_at' => '2019-06-20 00:00:00',
                'updated_at' => '2019-06-11 00:00:00',
            ),
            4 => 
            array (
                'id' => 11,
                'name' => 'Linkedin',
                'driver' => 'linkedin',
                'created_at' => '2019-06-13 00:00:00',
                'updated_at' => '2019-06-12 00:00:00',
            ),
            5 => 
            array (
                'id' => 12,
                'name' => 'Behance',
                'driver' => '',
                'created_at' => '2019-06-13 00:00:00',
                'updated_at' => '2019-06-05 00:00:00',
            ),
            6 => 
            array (
                'id' => 19,
                'name' => 'GitHub',
                'driver' => 'github',
                'created_at' => '2019-06-11 00:00:00',
                'updated_at' => '2019-06-11 00:00:00',
            ),
            7 => 
            array (
                'id' => 20,
                'name' => 'Vimeo',
                'driver' => 'vimeo',
                'created_at' => '2019-06-11 00:00:00',
                'updated_at' => '2019-06-11 00:00:00',
            ),
        ));
        
        
    }
}