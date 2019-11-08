<?php

use Illuminate\Database\Seeder;

class UserSocialMediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_social_media')->delete();
        
        \DB::table('user_social_media')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 17,
                'linked_account_id' => 7,
                'nick_name' => NULL,
                'name' => NULL,
                'email' => NULL,
                'avatar' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 17,
                'linked_account_id' => 8,
                'nick_name' => NULL,
                'name' => NULL,
                'email' => NULL,
                'avatar' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}