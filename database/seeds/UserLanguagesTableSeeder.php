<?php

use Illuminate\Database\Seeder;

class UserLanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_languages')->delete();
        
        \DB::table('user_languages')->insert(array (
            0 => 
            array (
                'id' => 25,
                'user_id' => 71023,
                'language_id' => 55,
                'language_level' => 'conversational',
                'created_at' => '2019-06-19 08:05:32',
                'updated_at' => '2019-06-19 08:05:32',
            ),
            1 => 
            array (
                'id' => 26,
                'user_id' => 18,
                'language_id' => 59,
                'language_level' => 'conversational',
                'created_at' => '2019-06-24 10:40:00',
                'updated_at' => '2019-06-24 10:40:00',
            ),
            2 => 
            array (
                'id' => 27,
                'user_id' => 18,
                'language_id' => 40,
                'language_level' => 'conversational',
                'created_at' => '2019-06-27 13:14:30',
                'updated_at' => '2019-06-27 13:14:30',
            ),
            3 => 
            array (
                'id' => 28,
                'user_id' => 71023,
                'language_id' => 40,
                'language_level' => 'conversational',
                'created_at' => '2019-08-05 13:20:12',
                'updated_at' => '2019-08-05 13:20:12',
            ),
        ));
        
        
    }
}