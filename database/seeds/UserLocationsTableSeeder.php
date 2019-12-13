<?php

use Illuminate\Database\Seeder;

class UserLocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_locations')->delete();
        
        \DB::table('user_locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 536,
                'visitor' => '103.50.80.193',
                'type' => 'ipv4',
                'continent_code' => 'AS',
                'continent_name' => 'Asia',
                'country_code' => 'IN',
                'country_name' => 'India',
                'region_code' => 'WB',
                'region_name' => 'West Bengal',
                'city' => 'Dam Dam',
                'zip' => '700080',
                'latitude' => '22.624900817871094',
                'longitude' => '88.4207992553711',
                'geo_id' => '1272243',
                'capital' => 'New Delhi',
                'lang_code' => 'hi',
                'lang_name' => 'Hindi',
                'lang_native' => '??????',
                'country_flag' => 'http://assets.ipstack.com/flags/in.svg',
                'country_flag_emoji' => '??',
                'calling_code' => '91',
                'created_at' => '2019-11-08 12:43:38',
                'updated_at' => '2019-11-08 12:43:38',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 537,
                'visitor' => '103.50.80.193',
                'type' => 'ipv4',
                'continent_code' => 'AS',
                'continent_name' => 'Asia',
                'country_code' => 'IN',
                'country_name' => 'India',
                'region_code' => 'WB',
                'region_name' => 'West Bengal',
                'city' => 'Dam Dam',
                'zip' => '700080',
                'latitude' => '22.624900817871094',
                'longitude' => '88.4207992553711',
                'geo_id' => '1272243',
                'capital' => 'New Delhi',
                'lang_code' => 'hi',
                'lang_name' => 'Hindi',
                'lang_native' => '??????',
                'country_flag' => 'http://assets.ipstack.com/flags/in.svg',
                'country_flag_emoji' => '??',
                'calling_code' => '91',
                'created_at' => '2019-11-13 07:54:27',
                'updated_at' => '2019-11-13 07:54:27',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 538,
                'visitor' => '103.50.80.193',
                'type' => 'ipv4',
                'continent_code' => 'AS',
                'continent_name' => 'Asia',
                'country_code' => 'IN',
                'country_name' => 'India',
                'region_code' => 'WB',
                'region_name' => 'West Bengal',
                'city' => 'Dam Dam',
                'zip' => '700080',
                'latitude' => '22.624900817871094',
                'longitude' => '88.4207992553711',
                'geo_id' => '1272243',
                'capital' => 'New Delhi',
                'lang_code' => 'hi',
                'lang_name' => 'Hindi',
                'lang_native' => '??????',
                'country_flag' => 'http://assets.ipstack.com/flags/in.svg',
                'country_flag_emoji' => '??',
                'calling_code' => '91',
                'created_at' => '2019-11-15 11:14:51',
                'updated_at' => '2019-11-15 11:14:51',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 539,
                'visitor' => '103.50.80.193',
                'type' => 'ipv4',
                'continent_code' => 'AS',
                'continent_name' => 'Asia',
                'country_code' => 'IN',
                'country_name' => 'India',
                'region_code' => 'WB',
                'region_name' => 'West Bengal',
                'city' => 'Dam Dam',
                'zip' => '700080',
                'latitude' => '22.624900817871094',
                'longitude' => '88.4207992553711',
                'geo_id' => '1272243',
                'capital' => 'New Delhi',
                'lang_code' => 'hi',
                'lang_name' => 'Hindi',
                'lang_native' => '??????',
                'country_flag' => 'http://assets.ipstack.com/flags/in.svg',
                'country_flag_emoji' => '??',
                'calling_code' => '91',
                'created_at' => '2019-11-16 11:57:53',
                'updated_at' => '2019-11-16 11:57:53',
            ),
        ));
        
        
    }
}