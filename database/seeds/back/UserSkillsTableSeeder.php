<?php

use Illuminate\Database\Seeder;

class UserSkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_skills')->delete();
        
        \DB::table('user_skills')->insert(array (
            0 => 
            array (
                'id' => 11,
                'user_id' => 19,
                'skill_id' => 1,
                'skill_name' => 'php developer',
                'skill_level' => '0',
                'created_at' => '2019-06-18 04:51:34',
                'updated_at' => '2019-06-18 04:51:34',
            ),
            1 => 
            array (
                'id' => 12,
                'user_id' => 19,
                'skill_id' => 1,
                'skill_name' => 'Abaqus',
                'skill_level' => 'beginner',
                'created_at' => '2019-06-19 05:49:06',
                'updated_at' => '2019-06-19 05:49:06',
            ),
            2 => 
            array (
                'id' => 13,
                'user_id' => 19,
                'skill_id' => 1,
                'skill_name' => 'Abaqus',
                'skill_level' => 'beginner',
                'created_at' => '2019-06-19 05:49:32',
                'updated_at' => '2019-06-19 05:49:32',
            ),
            3 => 
            array (
                'id' => 14,
                'user_id' => 19,
                'skill_id' => 2,
                'skill_name' => 'Abacus',
                'skill_level' => 'beginner',
                'created_at' => '2019-06-19 05:49:38',
                'updated_at' => '2019-06-19 05:49:38',
            ),
            4 => 
            array (
                'id' => 15,
                'user_id' => 19,
                'skill_id' => 3,
                'skill_name' => 'Abcd',
                'skill_level' => 'intermediate',
                'created_at' => '2019-06-19 05:50:01',
                'updated_at' => '2019-06-19 05:50:01',
            ),
            5 => 
            array (
                'id' => 16,
                'user_id' => 19,
                'skill_id' => 6,
                'skill_name' => 'Abode Photoshop',
                'skill_level' => 'pro',
                'created_at' => '2019-06-19 05:50:11',
                'updated_at' => '2019-06-19 05:50:11',
            ),
            6 => 
            array (
                'id' => 17,
                'user_id' => 19,
                'skill_id' => 1,
                'skill_name' => 'Abaqus',
                'skill_level' => 'beginner',
                'created_at' => '2019-06-19 05:50:52',
                'updated_at' => '2019-06-19 05:50:52',
            ),
            7 => 
            array (
                'id' => 18,
                'user_id' => 19,
                'skill_id' => 3,
                'skill_name' => 'Abcd',
                'skill_level' => 'beginner',
                'created_at' => '2019-06-19 05:51:03',
                'updated_at' => '2019-06-19 05:51:03',
            ),
            8 => 
            array (
                'id' => 19,
                'user_id' => 19,
                'skill_id' => 11,
                'skill_name' => 'B2c',
                'skill_level' => 'intermediate',
                'created_at' => '2019-06-19 05:57:22',
                'updated_at' => '2019-06-19 05:57:22',
            ),
            9 => 
            array (
                'id' => 20,
                'user_id' => 18,
                'skill_id' => 17,
                'skill_name' => 'Backup',
                'skill_level' => 'pro',
                'created_at' => '2019-06-19 08:05:42',
                'updated_at' => '2019-06-19 08:05:42',
            ),
        ));
        
        
    }
}