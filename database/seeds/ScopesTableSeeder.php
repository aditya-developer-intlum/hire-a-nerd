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
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Logo Transparency',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'High Resolution',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '3D Mockup',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Includes Logo Design',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Brand Book Design',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Logo Usage Guidelines',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Color Palette',
            ),
        ));
        
        
    }
}