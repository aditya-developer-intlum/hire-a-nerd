<?php

use Illuminate\Database\Seeder;

class UserEducationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_education')->delete();
        
        \DB::table('user_education')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 22,
                'country_id' => 16,
                'university_id' => 13,
                'title' => 'certificate',
                'branch_id' => 'gfhgfh',
                'year' => 2019,
                'created_at' => '2019-06-19 08:06:00',
                'updated_at' => '2019-06-19 08:06:00',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => 22,
                'country_id' => 4,
                'university_id' => 1,
                'title' => 'ba',
                'branch_id' => 'fgfdg',
                'year' => 2003,
                'created_at' => '2019-08-05 13:20:52',
                'updated_at' => '2019-08-05 13:20:52',
            ),
        ));
        
        
    }
}