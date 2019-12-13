<?php

use Illuminate\Database\Seeder;

class UserDetailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_detail')->delete();
        
        \DB::table('user_detail')->insert(array (
            0 => 
            array (
                'id' => 6,
                'user_id' => 19,
                'sort_story' => '',
                'country' => '',
                'description' => 'Aditya Singh',
                'linked_account_id' => '',
                'education_country_id' => 0,
                'university_id' => 0,
                'edu_title' => '',
                'edu_major' => '',
                'year_of_graduation' => 0,
                'certification' => '',
                'certified_by' => '',
                'certification_year' => 0,
                'avatar' => 'uploads/user/avatar/qHX88A4h9aG0WetPA7iNeCLasqW44J2YWN4XTdJ4.jpeg',
                'notification_email' => 'null',
                'notification_mobile' => 'null',
                'created_at' => '2019-06-12 06:44:31',
                'updated_at' => '2019-06-18 06:47:58',
            ),
            1 => 
            array (
                'id' => 7,
                'user_id' => 18,
                'sort_story' => '',
                'country' => '',
                'description' => 'My name is Gotlancer Portal. I have over five years of experience in graphic design field. Now i am here to help you for all your creativity needs. Looking forward to hear from you.',
                'linked_account_id' => '',
                'education_country_id' => 0,
                'university_id' => 0,
                'edu_title' => '',
                'edu_major' => '',
                'year_of_graduation' => 0,
                'certification' => '',
                'certified_by' => '',
                'certification_year' => 0,
                'avatar' => 'uploads/user/avatar/hkCuM0QyU222oOmbIPv5g47KnGGEtBM8GolbrcgP.jpeg',
                'notification_email' => 'null',
                'notification_mobile' => 'null',
                'created_at' => '2019-06-19 08:05:24',
                'updated_at' => '2019-06-26 06:22:52',
            ),
        ));
        
        
    }
}