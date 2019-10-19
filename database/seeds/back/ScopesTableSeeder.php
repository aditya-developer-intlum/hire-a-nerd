<?php

use Illuminate\Database\Seeder;

class ScopesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('scopes')->delete();
        
        \DB::table('scopes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Source File',
                'category_id' => 1,
                'subcategory_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Logo Transparency',
                'category_id' => 1,
                'subcategory_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'High Resolution',
                'category_id' => 1,
                'subcategory_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '3D Mockup',
                'category_id' => 1,
                'subcategory_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Includes Logo Design',
                'category_id' => 1,
                'subcategory_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Brand Book Design',
                'category_id' => 1,
                'subcategory_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Logo Usage Guidelines',
                'category_id' => 1,
                'subcategory_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Color Palette',
                'category_id' => 1,
                'subcategory_id' => 2,
            ),
        ));
        
        
    }
}