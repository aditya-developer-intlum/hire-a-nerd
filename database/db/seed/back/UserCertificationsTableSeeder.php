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
                'id' => 2,
                'user_id' => 19,
                'certified' => 'Photoshop',
                'certified_from' => 'Adobe',
                'year' => 2019,
                'created_at' => '2019-06-12 10:39:09',
                'updated_at' => '2019-06-12 10:39:09',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 19,
                'certified' => 'hgfhg',
                'certified_from' => 'gfhgjhgjhgj',
                'year' => 2017,
                'created_at' => '2019-06-18 10:08:27',
                'updated_at' => '2019-06-18 10:08:27',
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => 19,
                'certified' => 'dfdsf',
                'certified_from' => 'dsfdsfds',
                'year' => 2011,
                'created_at' => '2019-06-18 10:26:31',
                'updated_at' => '2019-06-18 10:26:31',
            ),
            3 => 
            array (
                'id' => 5,
                'user_id' => 19,
                'certified' => 'Php',
                'certified_from' => 'Laravel',
                'year' => 2010,
                'created_at' => '2019-06-18 10:30:44',
                'updated_at' => '2019-06-18 10:30:44',
            ),
            4 => 
            array (
                'id' => 6,
                'user_id' => 18,
                'certified' => 'fghgf',
                'certified_from' => 'fghgf',
                'year' => 2019,
                'created_at' => '2019-06-19 08:06:05',
                'updated_at' => '2019-06-19 08:06:05',
            ),
        ));
        
        
    }
}