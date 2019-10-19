<?php

use Illuminate\Database\Seeder;

class SocialMediaLinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('social_media_links')->delete();
        
        \DB::table('social_media_links')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Twitter',
                'icon' => '<i class="fab fa-twitter"></i>',
                'links' => 'https://twitter.com/',
                'sort' => 4,
                'is_active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'FaceBook',
                'icon' => '<i class="fab fa-facebook-f"></i>',
                'links' => 'https://www.facebook.com/',
                'sort' => 2,
                'is_active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Pinterest',
                'icon' => '<i class="fab fa-pinterest-p"></i>',
                'links' => 'https://in.pinterest.com/',
                'sort' => 3,
                'is_active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Instagram',
                'icon' => '<i class="fab fa-instagram"></i>',
                'links' => 'https://www.instagram.com/',
                'sort' => 1,
                'is_active' => 1,
            ),
        ));
        
        
    }
}