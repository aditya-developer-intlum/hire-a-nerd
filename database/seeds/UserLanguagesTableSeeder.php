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
                'id' => 31,
                'user_id' => 22,
                'language_id' => 2,
                'language_level' => 'basic',
                'created_at' => '2019-08-29 18:56:14',
                'updated_at' => '2019-08-29 18:56:14',
            ),
            1 => 
            array (
                'id' => 39,
                'user_id' => 22,
                'language_id' => 5,
                'language_level' => 'conversational',
                'created_at' => '2019-08-29 19:04:30',
                'updated_at' => '2019-08-29 19:04:30',
            ),
            2 => 
            array (
                'id' => 41,
                'user_id' => 534,
                'language_id' => 40,
                'language_level' => 'basic',
                'created_at' => '2019-10-04 15:30:06',
                'updated_at' => '2019-10-04 15:30:06',
            ),
            3 => 
            array (
                'id' => 42,
                'user_id' => 536,
                'language_id' => 40,
                'language_level' => 'fluent',
                'created_at' => '2019-11-10 17:02:32',
                'updated_at' => '2019-11-10 17:02:32',
            ),
            4 => 
            array (
                'id' => 43,
                'user_id' => 536,
                'language_id' => 148,
                'language_level' => 'basic',
                'created_at' => '2019-11-10 17:02:53',
                'updated_at' => '2019-11-10 17:02:53',
            ),
            5 => 
            array (
                'id' => 44,
                'user_id' => 536,
                'language_id' => 47,
                'language_level' => 'basic',
                'created_at' => '2019-11-10 17:03:20',
                'updated_at' => '2019-11-10 17:03:20',
            ),
            6 => 
            array (
                'id' => 45,
                'user_id' => 537,
                'language_id' => 40,
                'language_level' => 'native_or_bilingual',
                'created_at' => '2019-11-13 07:59:34',
                'updated_at' => '2019-11-13 07:59:34',
            ),
            7 => 
            array (
                'id' => 46,
                'user_id' => 537,
                'language_id' => 47,
                'language_level' => 'fluent',
                'created_at' => '2019-11-13 08:00:10',
                'updated_at' => '2019-11-13 08:00:10',
            ),
            8 => 
            array (
                'id' => 47,
                'user_id' => 538,
                'language_id' => 40,
                'language_level' => 'fluent',
                'created_at' => '2019-11-15 12:58:05',
                'updated_at' => '2019-11-15 12:58:05',
            ),
            9 => 
            array (
                'id' => 48,
                'user_id' => 538,
                'language_id' => 59,
                'language_level' => 'fluent',
                'created_at' => '2019-11-15 12:58:15',
                'updated_at' => '2019-11-15 12:58:15',
            ),
        ));
        
        
    }
}