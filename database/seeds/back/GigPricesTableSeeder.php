<?php

use Illuminate\Database\Seeder;

class GigPricesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gig_prices')->delete();
        
        \DB::table('gig_prices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'gig_id' => 46,
                'basic_package_name' => 'BASIC CHATBOT',
                'standard_package_name' => '',
                'premium_package_name' => '',
                'basic_description' => 'A simple chatbot with upto 10 Inter',
                'standard_description' => '',
                'premium_description' => '',
                'basic_delivery_time' => '1',
                'standard_delivery_time' => '',
                'premium_delivery_time' => '',
                'basic_price' => '20.00',
                'standard_price' => '50.00',
                'premium_price' => '100.00',
                'status' => 0,
            ),
        ));
        
        
    }
}