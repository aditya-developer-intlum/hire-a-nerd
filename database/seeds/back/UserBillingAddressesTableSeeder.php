<?php

use Illuminate\Database\Seeder;

class UserBillingAddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_billing_addresses')->delete();
        
        \DB::table('user_billing_addresses')->insert(array (
            0 => 
            array (
                'id' => 5,
                'user_id' => 19,
                'company_name' => 'Being Nice',
                'full_name' => 'Aditya Kumar',
                'country_id' => '35',
                'address' => 'Kestopur',
                'city_id' => '63',
                'zip_code' => 700101,
                'is_invoice' => 1,
                'created_at' => '2019-06-12 11:34:40',
                'updated_at' => '2019-06-12 11:34:40',
            ),
            1 => 
            array (
                'id' => 6,
                'user_id' => 19,
                'company_name' => 'Being Nice',
                'full_name' => 'Aditya Kumar',
                'country_id' => '35',
                'address' => 'Kestopur',
                'city_id' => '63',
                'zip_code' => 700101,
                'is_invoice' => 1,
                'created_at' => '2019-06-12 11:46:39',
                'updated_at' => '2019-06-12 11:46:39',
            ),
            2 => 
            array (
                'id' => 9,
                'user_id' => 18,
                'company_name' => 'Intlum',
                'full_name' => 'Aditya Kumar',
                'country_id' => 'India',
                'address' => 'Durganagar',
                'city_id' => 'Kolkata',
                'zip_code' => 741160,
                'is_invoice' => 1,
                'created_at' => '2019-06-27 11:33:07',
                'updated_at' => '2019-06-27 11:33:07',
            ),
        ));
        
        
    }
}