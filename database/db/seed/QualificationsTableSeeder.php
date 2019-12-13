<?php

use Illuminate\Database\Seeder;

class QualificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('qualifications')->delete();
        
        \DB::table('qualifications')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Bachelor Of  Engineer',
                'status' => 1,
                'created_at' => '2019-08-13 07:24:15',
                'updated_at' => '2019-08-13 07:24:15',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Bachelor Of Computer Application',
                'status' => 0,
                'created_at' => '2019-08-13 07:24:39',
                'updated_at' => '2019-08-13 07:24:39',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Bachelor Of Arts',
                'status' => 1,
                'created_at' => '2019-08-13 07:24:58',
                'updated_at' => '2019-08-13 07:42:07',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Bachelor Of Commerce',
                'status' => 1,
                'created_at' => '2019-08-13 07:25:08',
                'updated_at' => '2019-08-13 07:42:05',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Master Of Commerce',
                'status' => 0,
                'created_at' => '2019-08-13 07:25:47',
                'updated_at' => '2019-08-13 07:25:47',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Master Of Arts',
                'status' => 1,
                'created_at' => '2019-08-13 07:25:57',
                'updated_at' => '2019-08-13 07:42:00',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'Master Of Computer Application',
                'status' => 1,
                'created_at' => '2019-08-13 07:26:10',
                'updated_at' => '2019-08-13 07:42:04',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'Cake Decorating',
                'status' => 0,
                'created_at' => '2019-08-13 07:26:57',
                'updated_at' => '2019-08-16 07:58:40',
            ),
        ));
        
        
    }
}