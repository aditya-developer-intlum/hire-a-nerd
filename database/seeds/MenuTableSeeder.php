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
                'is_active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'digital-market',
                'name' => 'Digital Marketing',
                'is_active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'writing-translation',
                'name' => 'Writing & Translation',
                'is_active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'video-animation',
                'name' => 'Video & Animation',
                'is_active' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'music-audio',
                'name' => 'Music & Audio',
                'is_active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'programming-tech',
                'name' => 'Programming & Tech',
                'is_active' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'business',
                'name' => 'Business',
                'is_active' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'lifestyle',
                'name' => 'Lifestyle',
                'is_active' => 1,
            ),
            8 => 
            array (
                'id' => 15,
                'slug' => 'pro',
                'name' => 'Pro',
                'is_active' => 1,
            ),
        ));
        
        
    }
}