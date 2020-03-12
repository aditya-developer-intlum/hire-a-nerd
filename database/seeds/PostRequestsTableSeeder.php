<?php

use Illuminate\Database\Seeder;

class PostRequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('post_requests')->delete();
        
        \DB::table('post_requests')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'Virus removal from my laptop',
                'category_id' => 7,
                'sub_category_id' => 114,
                'deliver_time' => 'other',
                'deliver_time_other' => '6',
                'budget' => '15',
                'attachment' => NULL,
                'created_at' => '2019-11-19 06:01:13',
                'updated_at' => '2019-11-19 06:01:13',
            ),
        ));
        
        
    }
}