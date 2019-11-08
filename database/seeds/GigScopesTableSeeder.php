<?php

use Illuminate\Database\Seeder;

class GigScopesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gig_scopes')->delete();
        
        \DB::table('gig_scopes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'gig_price_id' => 1,
                'basic' => 2,
                'standard' => 2,
                'premium' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'gig_price_id' => 1,
                'basic' => 3,
                'standard' => 3,
                'premium' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'gig_price_id' => 2,
                'basic' => 5,
                'standard' => 5,
                'premium' => 5,
            ),
            3 => 
            array (
                'id' => 4,
                'gig_price_id' => 3,
                'basic' => 2,
                'standard' => 2,
                'premium' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'gig_price_id' => 3,
                'basic' => 3,
                'standard' => 3,
                'premium' => 3,
            ),
        ));
        
        
    }
}