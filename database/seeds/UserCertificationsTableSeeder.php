<?php

use Illuminate\Database\Seeder;

class UserCertificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_certifications')->delete();
        
        \DB::table('user_certifications')->insert(array (
            0 => 
            array (
                'id' => 6,
                'user_id' => 18,
                'certified' => 'fghgf',
                'certified_from' => 'fghgf',
                'year' => 2019,
                'created_at' => '2019-06-19 08:06:05',
                'updated_at' => '2019-06-19 08:06:05',
            ),
            1 => 
            array (
                'id' => 7,
                'user_id' => 536,
                'certified' => 'Award',
                'certified_from' => 'Adobe',
                'year' => 2019,
                'created_at' => '2019-11-10 17:15:46',
                'updated_at' => '2019-11-10 17:15:46',
            ),
            2 => 
            array (
                'id' => 8,
                'user_id' => 537,
                'certified' => 'Best Copywriter Award',
                'certified_from' => 'Copywriting Academy',
                'year' => 2018,
                'created_at' => '2019-11-13 08:06:30',
                'updated_at' => '2019-11-13 08:06:30',
            ),
        ));
        
        
    }
}