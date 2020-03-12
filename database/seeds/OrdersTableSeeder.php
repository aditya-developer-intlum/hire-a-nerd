<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 27,
                'buyer_id' => 536,
                'seller_id' => 536,
                'gig_id' => 21,
                'package' => 'standard',
                'price' => 385,
                'total_price' => 550,
                'is_completed' => 0,
                'is_accepted' => 1,
                'is_late' => 0,
                'is_delivered' => 1,
                'is_cancelled' => 0,
                'is_rejected' => 0,
                'accepted_at' => '2019-11-16',
                'rejected_at' => NULL,
                'completed_at' => NULL,
                'delivered_at' => '2019-11-16 15:42:42',
                'created_at' => '2019-11-16 09:40:37',
                'updated_at' => '2019-11-16 09:42:42',
                'due_date' => '2019-12-06 03:40:37',
            ),
        ));
        
        
    }
}