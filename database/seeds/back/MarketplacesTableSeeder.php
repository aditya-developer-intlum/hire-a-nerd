<?php

use Illuminate\Database\Seeder;

class MarketplacesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marketplaces')->delete();
        
        \DB::table('marketplaces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'icon' => 'images/exp-icon-1.png',
                'title' => 'Graphics Design',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'icon' => 'images/exp-icon-2.png',
                'title' => 'Marketing',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'icon' => 'images/exp-icon-3.png',
                'title' => 'Writing & Translation',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'icon' => 'images/exp-icon-4.png',
                'title' => 'Video & Animation',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'icon' => 'images/exp-icon-5.png',
                'title' => 'Music & Audio',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'icon' => 'images/exp-icon-6.png',
                'title' => 'Music & Audio',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'icon' => 'images/exp-icon-2.png',
                'title' => 'Graphics Design',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
        ));
        
        
    }
}