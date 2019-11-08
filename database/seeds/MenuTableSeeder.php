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
                'id' => 9,
                'slug' => 'aditya',
                'name' => 'Aditya',
                'is_active' => 0,
            ),
            9 => 
            array (
                'id' => 15,
                'slug' => 'video-audio',
                'name' => 'Video & Audio',
                'is_active' => 1,
            ),
            10 => 
            array (
                'id' => 16,
                'slug' => 'hhhhhhhhhh',
                'name' => 'Hhhhhhhhhh',
                'is_active' => 0,
            ),
            11 => 
            array (
                'id' => 17,
                'slug' => 'jjjjjjjjjj',
                'name' => 'Jjjjjjjjjj',
                'is_active' => 0,
            ),
            12 => 
            array (
                'id' => 18,
                'slug' => 'fsdfs',
                'name' => 'Fsdfs',
                'is_active' => 0,
            ),
            13 => 
            array (
                'id' => 19,
                'slug' => 'erwere',
                'name' => 'Erwere',
                'is_active' => 0,
            ),
            14 => 
            array (
                'id' => 20,
                'slug' => 'rtertre',
                'name' => 'Rtertre',
                'is_active' => 0,
            ),
            15 => 
            array (
                'id' => 21,
                'slug' => 'fgdfg',
                'name' => 'Fgdfg',
                'is_active' => 0,
            ),
            16 => 
            array (
                'id' => 22,
                'slug' => 'fgdfgd',
                'name' => 'Fgdfgd',
                'is_active' => 0,
            ),
            17 => 
            array (
                'id' => 23,
                'slug' => 'dsds',
                'name' => 'Dsds',
                'is_active' => 0,
            ),
            18 => 
            array (
                'id' => 30,
                'slug' => 'menu-item',
                'name' => 'Menu item',
                'is_active' => 0,
            ),
            19 => 
            array (
                'id' => 35,
                'slug' => 'test-test',
                'name' => 'Test & test',
                'is_active' => 0,
            ),
        ));
        
        
    }
}