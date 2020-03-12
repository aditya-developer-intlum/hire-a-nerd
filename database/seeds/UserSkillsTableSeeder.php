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
                'id' => 19,
                'user_id' => 18,
                'skill_id' => 11,
                'skill_name' => 'B2c',
                'skill_level' => 'intermediate',
                'created_at' => '2019-06-19 05:57:22',
                'updated_at' => '2019-06-19 05:57:22',
            ),
            1 => 
            array (
                'id' => 20,
                'user_id' => 18,
                'skill_id' => 17,
                'skill_name' => 'Backup',
                'skill_level' => 'pro',
                'created_at' => '2019-06-19 08:05:42',
                'updated_at' => '2019-06-19 08:05:42',
            ),
            2 => 
            array (
                'id' => 21,
                'user_id' => 22,
                'skill_id' => 2,
                'skill_name' => 'Abacus',
                'skill_level' => 'beginner',
                'created_at' => '2019-08-05 13:20:34',
                'updated_at' => '2019-08-05 13:20:34',
            ),
            3 => 
            array (
                'id' => 22,
                'user_id' => 22,
                'skill_id' => 8,
                'skill_name' => 'Good Singing Ability',
                'skill_level' => 'intermediate',
                'created_at' => '2019-08-19 16:20:37',
                'updated_at' => '2019-08-19 16:20:37',
            ),
        ));
        
        
    }
}