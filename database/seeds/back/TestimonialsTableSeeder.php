<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 10,
                'name' => 'John Smith',
                'designation' => 'Graphics Designer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            1 => 
            array (
                'id' => 11,
                'name' => 'Aditya Kumar',
                'designation' => 'Web Designer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            2 => 
            array (
                'id' => 12,
                'name' => 'Reena Kumari',
                'designation' => 'Photoshop Designer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            3 => 
            array (
                'id' => 13,
                'name' => 'Amol Chaurasia',
                'designation' => 'Web Developer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            4 => 
            array (
                'id' => 14,
                'name' => 'Ashish Chaturvedi',
                'designation' => 'Graphics Designer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            5 => 
            array (
                'id' => 15,
                'name' => 'Tanveer Khan',
                'designation' => 'Graphics Designer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            6 => 
            array (
                'id' => 16,
                'name' => 'Aditya Samanta',
                'designation' => 'Graphics Designer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            7 => 
            array (
                'id' => 17,
                'name' => 'Dipti',
                'designation' => 'Graphics Designer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis',
                'created_at' => '2019-06-26 00:00:00',
                'updated_at' => '2019-06-26 00:00:00',
            ),
            8 => 
            array (
                'id' => 19,
                'name' => 'abcdtest',
                'designation' => 'abcd test',
                'description' => 'defg test',
                'created_at' => '2019-07-03 07:35:44',
                'updated_at' => '2019-07-03 07:35:44',
            ),
            9 => 
            array (
                'id' => 20,
                'name' => 'abcdtest',
                'designation' => 'dffdsf',
                'description' => 'dffdfdf',
                'created_at' => '2019-07-03 08:17:52',
                'updated_at' => '2019-07-03 08:17:52',
            ),
            10 => 
            array (
                'id' => 23,
                'name' => 'ghbgfh',
                'designation' => 'gdfhgfh',
                'description' => 'hgfhgfh',
                'created_at' => '2019-07-03 08:30:04',
                'updated_at' => '2019-07-03 08:30:04',
            ),
            11 => 
            array (
                'id' => 24,
                'name' => 'ewrewrwe',
                'designation' => 'werwerwer',
                'description' => 'werwer',
                'created_at' => '2019-07-03 10:02:02',
                'updated_at' => '2019-07-03 10:02:02',
            ),
            12 => 
            array (
                'id' => 25,
                'name' => 'ewrwer',
                'designation' => 'rwerwe',
                'description' => 'wer',
                'created_at' => '2019-07-03 10:02:20',
                'updated_at' => '2019-07-03 10:02:20',
            ),
            13 => 
            array (
                'id' => 37,
                'name' => 'Aditya Singh',
                'designation' => 'kdjsk',
                'description' => 'aaaaaaaaaaaaaaa',
                'created_at' => '2019-07-03 12:47:35',
                'updated_at' => '2019-07-03 13:13:30',
            ),
            14 => 
            array (
                'id' => 38,
                'name' => 'ABCDGF',
                'designation' => 'sssssssssss',
                'description' => 'ssssssssssssssss',
                'created_at' => '2019-07-03 13:20:30',
                'updated_at' => '2019-07-03 13:21:01',
            ),
        ));
        
        
    }
}