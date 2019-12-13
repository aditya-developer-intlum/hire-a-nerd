<?php

use Illuminate\Database\Seeder;

class AdminEarningsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_earnings')->delete();
        
        \DB::table('admin_earnings')->insert(array (
            0 => 
            array (
                'id' => 9,
                'admin_id' => 17,
                'seller_id' => 536,
                'gig_id' => 21,
                'amount' => '165.00',
                'mode' => 'credited',
                'region' => 'Seller Service Sold Commision 30% of the total amount of service',
                'order_id' => 27,
                'created_at' => '2019-11-16 09:40:37',
                'updated_at' => '2019-11-16 09:40:37',
            ),
        ));
        
        
    }
}