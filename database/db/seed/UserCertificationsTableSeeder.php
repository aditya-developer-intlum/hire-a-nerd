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
        ));
        
        
    }
}