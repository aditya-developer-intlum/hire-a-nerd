<?php

use Illuminate\Database\Seeder;

class EmailHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_histories')->delete();
        
        \DB::table('email_histories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 539,
                'message' => 'hi',
                'file' => NULL,
                'created_at' => '2019-11-16 07:59:01',
                'updated_at' => '2019-11-16 07:59:01',
            ),
        ));
        
        
    }
}