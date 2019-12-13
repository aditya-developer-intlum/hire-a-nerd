<?php

use Illuminate\Database\Seeder;

class WishListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wish_lists')->delete();
        
        \DB::table('wish_lists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'gig_id' => 11,
                'user_id' => 17,
                'created_at' => '2019-10-19 18:13:00',
                'updated_at' => '2019-10-19 18:13:00',
            ),
            1 => 
            array (
                'id' => 2,
                'gig_id' => 15,
                'user_id' => 22,
                'created_at' => '2019-11-08 18:48:05',
                'updated_at' => '2019-11-08 18:48:05',
            ),
        ));
        
        
    }
}