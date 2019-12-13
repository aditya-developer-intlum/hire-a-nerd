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
                'id' => 3,
                'gig_price_id' => 2,
                'basic' => 5,
                'standard' => 5,
                'premium' => 5,
            ),
            1 => 
            array (
                'id' => 8,
                'gig_price_id' => 4,
                'basic' => 2,
                'standard' => 2,
                'premium' => 2,
            ),
            2 => 
            array (
                'id' => 9,
                'gig_price_id' => 4,
                'basic' => 0,
                'standard' => 0,
                'premium' => 3,
            ),
            3 => 
            array (
                'id' => 45,
                'gig_price_id' => 8,
                'basic' => 0,
                'standard' => 0,
                'premium' => 0,
            ),
            4 => 
            array (
                'id' => 46,
                'gig_price_id' => 8,
                'basic' => 0,
                'standard' => 0,
                'premium' => 0,
            ),
            5 => 
            array (
                'id' => 47,
                'gig_price_id' => 8,
                'basic' => 0,
                'standard' => 0,
                'premium' => 0,
            ),
            6 => 
            array (
                'id' => 48,
                'gig_price_id' => 8,
                'basic' => 0,
                'standard' => 0,
                'premium' => 0,
            ),
            7 => 
            array (
                'id' => 49,
                'gig_price_id' => 11,
                'basic' => 2,
                'standard' => 2,
                'premium' => 2,
            ),
            8 => 
            array (
                'id' => 50,
                'gig_price_id' => 11,
                'basic' => 0,
                'standard' => 3,
                'premium' => 3,
            ),
            9 => 
            array (
                'id' => 51,
                'gig_price_id' => 12,
                'basic' => 2,
                'standard' => 2,
                'premium' => 2,
            ),
            10 => 
            array (
                'id' => 52,
                'gig_price_id' => 12,
                'basic' => 0,
                'standard' => 3,
                'premium' => 3,
            ),
            11 => 
            array (
                'id' => 53,
                'gig_price_id' => 13,
                'basic' => 2,
                'standard' => 3,
                'premium' => 2,
            ),
            12 => 
            array (
                'id' => 54,
                'gig_price_id' => 13,
                'basic' => 0,
                'standard' => 0,
                'premium' => 3,
            ),
            13 => 
            array (
                'id' => 55,
                'gig_price_id' => 14,
                'basic' => 2,
                'standard' => 3,
                'premium' => 2,
            ),
            14 => 
            array (
                'id' => 56,
                'gig_price_id' => 14,
                'basic' => 0,
                'standard' => 0,
                'premium' => 3,
            ),
            15 => 
            array (
                'id' => 57,
                'gig_price_id' => 15,
                'basic' => 5,
                'standard' => 5,
                'premium' => 5,
            ),
            16 => 
            array (
                'id' => 58,
                'gig_price_id' => 15,
                'basic' => 0,
                'standard' => 4,
                'premium' => 4,
            ),
            17 => 
            array (
                'id' => 59,
                'gig_price_id' => 15,
                'basic' => 0,
                'standard' => 0,
                'premium' => 6,
            ),
            18 => 
            array (
                'id' => 60,
                'gig_price_id' => 15,
                'basic' => 0,
                'standard' => 0,
                'premium' => 2,
            ),
            19 => 
            array (
                'id' => 61,
                'gig_price_id' => 16,
                'basic' => 2,
                'standard' => 3,
                'premium' => 2,
            ),
            20 => 
            array (
                'id' => 62,
                'gig_price_id' => 16,
                'basic' => 0,
                'standard' => 0,
                'premium' => 3,
            ),
            21 => 
            array (
                'id' => 63,
                'gig_price_id' => 25,
                'basic' => 0,
                'standard' => 0,
                'premium' => 0,
            ),
        ));
        
        
    }
}