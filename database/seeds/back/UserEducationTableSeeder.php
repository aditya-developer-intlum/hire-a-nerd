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
                'id' => 1,
                'user_id' => 19,
                'country_id' => 4,
                'university_id' => 1,
                'title' => 'Branch',
                'branch_id' => 'Master ',
                'year' => 2019,
                'created_at' => '2019-06-12 09:54:19',
                'updated_at' => '2019-06-12 09:54:19',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 19,
                'country_id' => 356,
                'university_id' => 397,
                'title' => 'associate',
                'branch_id' => 'MCA',
                'year' => 2018,
                'created_at' => '2019-06-18 12:33:05',
                'updated_at' => '2019-06-18 12:33:05',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 18,
                'country_id' => 16,
                'university_id' => 13,
                'title' => 'certificate',
                'branch_id' => 'gfhgfh',
                'year' => 2019,
                'created_at' => '2019-06-19 08:06:00',
                'updated_at' => '2019-06-19 08:06:00',
            ),
        ));
        
        
    }
}