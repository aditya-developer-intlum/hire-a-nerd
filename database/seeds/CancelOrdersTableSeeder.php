<?php

use Illuminate\Database\Seeder;

class CancelOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cancel_orders')->delete();
        
        
        
    }
}