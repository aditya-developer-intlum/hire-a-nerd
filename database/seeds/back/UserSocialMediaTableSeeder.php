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
                'id' => 5,
                'user_id' => 18,
                'linked_account_id' => 19,
                'nick_name' => 'iklasintlum',
                'name' => NULL,
                'email' => 'iklas.intlum@gmail.com',
                'avatar' => 'https://avatars0.githubusercontent.com/u/49859702?v=4',
                'created_at' => '2019-06-24 08:00:52',
                'updated_at' => '2019-06-24 08:00:52',
            ),
            1 => 
            array (
                'id' => 6,
                'user_id' => 18,
                'linked_account_id' => 7,
                'nick_name' => NULL,
                'name' => 'Gotlancer Portal',
                'email' => 'iklas.intlum@gmail.com',
                'avatar' => 'https://graph.facebook.com/v3.0/119234985983551/picture?type=normal',
                'created_at' => '2019-06-24 08:02:58',
                'updated_at' => '2019-06-24 08:02:58',
            ),
            2 => 
            array (
                'id' => 7,
                'user_id' => 18,
                'linked_account_id' => 8,
                'nick_name' => NULL,
                'name' => 'developer account',
                'email' => 'developerlaravel5@gmail.com',
                'avatar' => 'https://lh6.googleusercontent.com/-4A9S3GWTrpc/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdmf8YyrQdoUhWse0Q0BW8iR4wCHQ/mo/photo.jpg',
                'created_at' => '2019-06-24 08:09:53',
                'updated_at' => '2019-06-24 08:09:53',
            ),
            3 => 
            array (
                'id' => 8,
                'user_id' => 18,
                'linked_account_id' => 9,
                'nick_name' => 'aditya-dribble',
                'name' => 'Aditya',
                'email' => NULL,
                'avatar' => 'https://cdn.dribbble.com/assets/avatar-default-aa2eab7684294781f93bc99ad394a0eb3249c5768c21390163c9f55ea8ef83a4.gif',
                'created_at' => '2019-06-24 08:12:04',
                'updated_at' => '2019-06-24 08:12:04',
            ),
            4 => 
            array (
                'id' => 9,
                'user_id' => 18,
                'linked_account_id' => 20,
                'nick_name' => NULL,
                'name' => 'developer account',
                'email' => NULL,
                'avatar' => NULL,
                'created_at' => '2019-06-24 08:30:41',
                'updated_at' => '2019-06-24 08:30:41',
            ),
        ));
        
        
    }
}