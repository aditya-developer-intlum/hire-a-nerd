<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu')->delete();
        
        \DB::table('menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'graphic-design',
                'name' => 'Graphics & Design',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'digital-market',
                'name' => 'Digital Marketing',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'writing-translation',
                'name' => 'Writing & Translation',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'video-animation',
                'name' => 'Video & Animation',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'music-audio',
                'name' => 'Music & Audio',
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'programming-tech',
                'name' => 'Programming & Tech',
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'business',
                'name' => 'Business',
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'lifestyle',
                'name' => 'Lifestyle',
            ),
        ));
        
        
    }
}