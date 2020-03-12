<?php

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faq')->delete();
        
        \DB::table('faq')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'seller',
                'title' => 'How can Earn Money ?',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <strong>tempor </strong>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet,<strong> consectetu</strong>r adipiscing elit, sed do eiusmod tempor incididunt.</p>',
                'is_active' => 1,
                'created_at' => '2019-08-22 00:56:00',
                'updated_at' => '2019-08-23 09:02:56',
            ),
            1 => 
            array (
                'id' => 3,
                'type' => 'buyer',
                'title' => 'How Can I Purchase Gig ?',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>',
                'is_active' => 1,
                'created_at' => '2019-08-22 07:14:08',
                'updated_at' => '2019-08-22 07:14:08',
            ),
            2 => 
            array (
                'id' => 4,
                'type' => 'buyer',
                'title' => 'Elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua enim ad minim?',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>',
                'is_active' => 1,
                'created_at' => '2019-08-22 07:14:46',
                'updated_at' => '2019-08-22 07:14:46',
            ),
        ));
        
        
    }
}