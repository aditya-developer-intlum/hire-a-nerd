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
                'id' => 14,
                'gig_price_id' => 1,
                'basic' => 2,
                'standard' => 0,
                'premium' => 0,
            ),
            1 => 
            array (
                'id' => 15,
                'gig_price_id' => 1,
                'basic' => 4,
                'standard' => 0,
                'premium' => 0,
            ),
        ));
        
        
    }
}