<?php

use Illuminate\Database\Seeder;

class SuspendsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('suspends')->delete();
        
        \DB::table('suspends')->insert(array (
            0 => 
            array (
                'id' => 6,
                'user_id' => 43,
                'suspend_days' => 10,
                'suspend_region' => 'fake id',
                'status' => 0,
                'created_at' => '2019-08-12 01:55:38',
                'updated_at' => '2019-08-12 01:55:38',
            ),
            1 => 
            array (
                'id' => 7,
                'user_id' => 22,
                'suspend_days' => 20,
                'suspend_region' => 'fake id',
                'status' => 0,
                'created_at' => '2019-08-12 01:56:49',
                'updated_at' => '2019-08-12 01:56:49',
            ),
            2 => 
            array (
                'id' => 8,
                'user_id' => 22,
                'suspend_days' => 55,
                'suspend_region' => 'dfdsff',
                'status' => 0,
                'created_at' => '2019-08-14 00:40:12',
                'updated_at' => '2019-08-14 00:40:12',
            ),
        ));
        
        
    }
}