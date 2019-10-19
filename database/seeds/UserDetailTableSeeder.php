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
                'avatar' => 'uploads/user/avatar/0QWGvfJphPHPKt3nEfTLhp85ICIFukMo5NOEj7Xm.png',
                'notification_email' => 'null',
                'notification_mobile' => 'null',
                'created_at' => '2019-06-19 08:05:24',
                'updated_at' => '2019-06-26 06:22:52',
            ),
            1 => 
            array (
                'id' => 8,
                'user_id' => 21,
                'sort_story' => '',
                'country' => '',
                'description' => 'Adityafffjkkkklllll',
                'linked_account_id' => '',
                'education_country_id' => 0,
                'university_id' => 0,
                'edu_title' => '',
                'edu_major' => '',
                'year_of_graduation' => 0,
                'certification' => '',
                'certified_by' => '',
                'certification_year' => 0,
                'avatar' => '',
                'notification_email' => 'null',
                'notification_mobile' => 'null',
                'created_at' => '2019-07-08 13:04:54',
                'updated_at' => '2019-07-08 13:10:12',
            ),
            2 => 
            array (
                'id' => 9,
                'user_id' => 71023,
                'sort_story' => '',
                'country' => '',
                'description' => 'HE llo',
                'linked_account_id' => '',
                'education_country_id' => 0,
                'university_id' => 0,
                'edu_title' => '',
                'edu_major' => '',
                'year_of_graduation' => 0,
                'certification' => '',
                'certified_by' => '',
                'certification_year' => 0,
                'avatar' => 'uploads/user/avatar/LlPL41wyrUj52AUND8O9AeSKZIDhteGhv1OzsyBF.jpeg',
                'notification_email' => 'null',
                'notification_mobile' => 'null',
                'created_at' => '2019-07-09 12:11:24',
                'updated_at' => '2019-08-22 17:56:21',
            ),
            3 => 
            array (
                'id' => 10,
                'user_id' => 17,
                'sort_story' => NULL,
                'country' => NULL,
                'description' => NULL,
                'linked_account_id' => NULL,
                'education_country_id' => NULL,
                'university_id' => NULL,
                'edu_title' => NULL,
                'edu_major' => NULL,
                'year_of_graduation' => NULL,
                'certification' => NULL,
                'certified_by' => NULL,
                'certification_year' => NULL,
                'avatar' => 'uploads/user/avatar/tkyxint0oVkh3e097sjtciaytoVKTancqblYs3X0.jpeg',
                'notification_email' => NULL,
                'notification_mobile' => NULL,
                'created_at' => '2019-08-19 16:19:41',
                'updated_at' => '2019-08-19 16:19:41',
            ),
        ));
        
        
    }
}