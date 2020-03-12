<?php

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ratings')->delete();
        
        \DB::table('ratings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 23,
                'stars' => 4,
                'type' => 'Communication with seller',
                'gig_id' => 11,
                'seller_id' => 22,
                'created_at' => '2019-10-11 00:00:00',
                'updated_at' => '2019-10-11 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 23,
                'stars' => 5,
                'type' => 'Service as Described',
                'gig_id' => 11,
                'seller_id' => 22,
                'created_at' => '2019-10-11 00:00:00',
                'updated_at' => '2019-10-11 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 23,
                'stars' => 3,
                'type' => 'Buy Again or Recommend',
                'gig_id' => 11,
                'seller_id' => 22,
                'created_at' => '2019-10-11 00:00:00',
                'updated_at' => '2019-10-11 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 529,
                'stars' => 5,
                'type' => 'Communication with seller',
                'gig_id' => 11,
                'seller_id' => 22,
                'created_at' => '2019-10-11 00:00:00',
                'updated_at' => '2019-10-11 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 529,
                'stars' => 5,
                'type' => 'Service as Described',
                'gig_id' => 11,
                'seller_id' => 22,
                'created_at' => '2019-10-11 00:00:00',
                'updated_at' => '2019-10-11 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 529,
                'stars' => 5,
                'type' => 'Buy Again or Recommend',
                'gig_id' => 11,
                'seller_id' => 22,
                'created_at' => '2019-10-11 00:00:00',
                'updated_at' => '2019-10-11 00:00:00',
            ),
        ));
        
        
    }
}