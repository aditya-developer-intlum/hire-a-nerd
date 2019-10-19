<?php

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'admin@gmail.com',
                'token' => '$2y$10$jNhkgtL9nEwdinHp2LVX5uFDMwVe4VUlM/AR/KT8Yuqnj1GHSny6u',
                'created_at' => '2019-08-16 06:13:57',
            ),
            1 => 
            array (
                'email' => 'adityakumar.ak127@gmail.com',
                'token' => '$2y$10$RGvchfuDdpzDRUUlcCydquA1bnzWBII8opoY9.difEdZ5mmOYmVDC',
                'created_at' => '2019-08-16 06:25:47',
            ),
            2 => 
            array (
                'email' => 'funk.johathan@example.com',
                'token' => '$2y$10$/HHQLNcL5JM5JkprdZ4AbubM4X/hWIFRTUW0PLXc6W/h422fJaWWy',
                'created_at' => '2019-08-16 06:26:58',
            ),
        ));
        
        
    }
}