<?php

use Illuminate\Database\Seeder;

class PressAndNewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('press_and_news')->delete();
        
        \DB::table('press_and_news')->insert(array (
            0 => 
            array (
                'id' => 1,
                'picture' => 'uploads/user/avatar/0QWGvfJphPHPKt3nEfTLhp85ICIFukMo5NOEj7Xm.png',
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'is_active' => 0,
                'created_at' => '2019-08-21 00:00:00',
                'updated_at' => '2019-08-22 10:26:55',
            ),
        ));
        
        
    }
}