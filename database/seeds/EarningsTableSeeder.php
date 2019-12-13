<?php

use Illuminate\Database\Seeder;

class EarningsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('earnings')->delete();
        
        \DB::table('earnings')->insert(array (
            0 => 
            array (
                'id' => 9,
                'seller_id' => 536,
                'buyer_id' => 536,
                'gig_id' => 21,
                'amount' => '385.00',
                'mode' => 'credited',
                'region' => 'Earing for Selling Service',
                'order_id' => 27,
                'is_withdraw_able' => 0,
                'created_at' => '2019-11-16 09:40:37',
                'updated_at' => '2019-11-16 09:40:37',
            ),
        ));
        
        
    }
}