<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 17,
                'name' => 'Aditya Kumar',
                'email' => 'adityakumar.ak127@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P2NYYNdMRF5jezMVXJo7V.AJkj6zRCoXFr.606Xla/4jJqYorJPTK',
                'term_and_condition' => 1,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-06-11 07:53:13',
                'updated_at' => '2019-06-11 07:53:13',
            ),
            1 => 
            array (
                'id' => 18,
                'name' => 'Gotlancer Portal',
                'email' => 'iklas.intlum@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ykBYwp5jiDWGv7ygLrLpOuujUUgFbNuT5DhRYlhS63jwyNP9wmVTS',
                'term_and_condition' => 1,
                'status' => 1,
                'online_status' => 0,
                'remember_token' => '64JielSPb2lTk27Teox19vSa1IdXguYOrH9DcwdCHQHq60Z7WPRrJYzW46WI',
                'deative_reasion' => 'not usefull for me',
                'created_at' => '2019-06-11 08:07:12',
                'updated_at' => '2019-06-27 05:02:03',
            ),
            2 => 
            array (
                'id' => 19,
                'name' => 'Aditya Singh Rajpoot',
                'email' => 'aditya@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SSiJBtahextqF4tXXYRNz.NrQ5ltMEQwh/UgBLs190JkAx..OEyQG',
                'term_and_condition' => 1,
                'status' => 1,
                'online_status' => 3,
                'remember_token' => 'vskzwhlA1yqauIFwLhR4bRODXfnjzY7uFlV9YNPOT6O0VMRtR0kP2HlniaJo',
                'deative_reasion' => 'not usefull for me',
                'created_at' => '2019-06-11 08:10:45',
                'updated_at' => '2019-06-19 05:32:25',
            ),
            3 => 
            array (
                'id' => 20,
                'name' => 'developer account',
                'email' => 'developerlaravel5@gmail.com',
                'email_verified_at' => NULL,
                'password' => '',
                'term_and_condition' => 1,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-06-26 05:09:12',
                'updated_at' => '2019-06-26 05:09:12',
            ),
            4 => 
            array (
                'id' => 21,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rgv/BdAQlyE65QT6w6rSxOpgAbVNh7U6JcBc1m35sltox2W2awjFu',
                'term_and_condition' => 1,
                'status' => 1,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-07-05 04:47:22',
                'updated_at' => '2019-07-05 04:47:22',
            ),
        ));
        
        
    }
}