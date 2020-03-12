<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2019_06_11_121511_create_countries_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2019_06_11_121511_create_languages_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2019_06_11_121511_create_linked_Accounts_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2019_06_11_121511_create_password_resets_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2019_06_11_121511_create_universities_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2019_06_11_121511_create_user_detail_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2019_06_11_121511_create_users_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2019_06_26_070040_create_countries_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2019_06_26_070040_create_employees_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2019_06_26_070040_create_gigs_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2019_06_26_070040_create_languages_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2019_06_26_070040_create_linked_accounts_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2019_06_26_070040_create_notifications_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2019_06_26_070040_create_password_resets_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2019_06_26_070040_create_skills_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2019_06_26_070040_create_testimonials_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2019_06_26_070040_create_universities_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2019_06_26_070040_create_user_billing_addresses_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2019_06_26_070040_create_user_certifications_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2019_06_26_070040_create_user_detail_table',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2019_06_26_070040_create_user_education_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2019_06_26_070040_create_user_languages_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2019_06_26_070040_create_user_notifications_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2019_06_26_070040_create_user_skills_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2019_06_26_070040_create_user_social_media_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2019_06_26_070040_create_users_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2019_06_26_071923_create_marketplaces_table',
                'batch' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2019_07_05_051549_create_countries_table',
                'batch' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2019_07_05_051549_create_employees_table',
                'batch' => 1,
            ),
            29 => 
            array (
                'id' => 33,
                'migration' => '2019_07_05_051549_create_languages_table',
                'batch' => 1,
            ),
            30 => 
            array (
                'id' => 34,
                'migration' => '2019_07_05_051549_create_linked_accounts_table',
                'batch' => 1,
            ),
            31 => 
            array (
                'id' => 35,
                'migration' => '2019_07_05_051549_create_marketplaces_table',
                'batch' => 1,
            ),
            32 => 
            array (
                'id' => 36,
                'migration' => '2019_07_05_051549_create_menu_table',
                'batch' => 1,
            ),
            33 => 
            array (
                'id' => 37,
                'migration' => '2019_07_05_051549_create_notifications_table',
                'batch' => 1,
            ),
            34 => 
            array (
                'id' => 38,
                'migration' => '2019_07_05_051549_create_password_resets_table',
                'batch' => 1,
            ),
            35 => 
            array (
                'id' => 39,
                'migration' => '2019_07_05_051549_create_scopes_table',
                'batch' => 1,
            ),
            36 => 
            array (
                'id' => 40,
                'migration' => '2019_07_05_051549_create_skills_table',
                'batch' => 1,
            ),
            37 => 
            array (
                'id' => 41,
                'migration' => '2019_07_05_051549_create_social_media_links_table',
                'batch' => 1,
            ),
            38 => 
            array (
                'id' => 42,
                'migration' => '2019_07_05_051549_create_sub_menu_table',
                'batch' => 1,
            ),
            39 => 
            array (
                'id' => 43,
                'migration' => '2019_07_05_051549_create_testimonials_table',
                'batch' => 1,
            ),
            40 => 
            array (
                'id' => 44,
                'migration' => '2019_07_05_051549_create_universities_table',
                'batch' => 1,
            ),
            41 => 
            array (
                'id' => 45,
                'migration' => '2019_07_05_051549_create_user_billing_addresses_table',
                'batch' => 1,
            ),
            42 => 
            array (
                'id' => 46,
                'migration' => '2019_07_05_051549_create_user_certifications_table',
                'batch' => 1,
            ),
            43 => 
            array (
                'id' => 47,
                'migration' => '2019_07_05_051549_create_user_detail_table',
                'batch' => 1,
            ),
            44 => 
            array (
                'id' => 48,
                'migration' => '2019_07_05_051549_create_user_education_table',
                'batch' => 1,
            ),
            45 => 
            array (
                'id' => 49,
                'migration' => '2019_07_05_051549_create_user_languages_table',
                'batch' => 1,
            ),
            46 => 
            array (
                'id' => 50,
                'migration' => '2019_07_05_051549_create_user_notifications_table',
                'batch' => 1,
            ),
            47 => 
            array (
                'id' => 51,
                'migration' => '2019_07_05_051549_create_user_skills_table',
                'batch' => 1,
            ),
            48 => 
            array (
                'id' => 53,
                'migration' => '2019_07_05_051549_create_users_table',
                'batch' => 1,
            ),
            49 => 
            array (
                'id' => 55,
                'migration' => '2019_08_12_044105_create_supends_table',
                'batch' => 1,
            ),
            50 => 
            array (
                'id' => 56,
                'migration' => '2019_08_13_064505_create_qualifications_table',
                'batch' => 1,
            ),
            51 => 
            array (
                'id' => 57,
                'migration' => '2019_08_14_082128_create_permissions_table',
                'batch' => 1,
            ),
            52 => 
            array (
                'id' => 58,
                'migration' => '2019_08_14_082144_create_user_permissions_table',
                'batch' => 1,
            ),
            53 => 
            array (
                'id' => 59,
                'migration' => '2019_08_16_122402_create_blocked_users_table',
                'batch' => 1,
            ),
            54 => 
            array (
                'id' => 60,
                'migration' => '2019_07_05_051549_create_user_social_media_table',
                'batch' => 1,
            ),
            55 => 
            array (
                'id' => 61,
                'migration' => '2019_08_20_105321_create_commisions_table',
                'batch' => 1,
            ),
            56 => 
            array (
                'id' => 62,
                'migration' => '2019_07_05_051549_create_gigs_table',
                'batch' => 1,
            ),
            57 => 
            array (
                'id' => 63,
                'migration' => '2019_07_05_051549_create_gig_prices_table',
                'batch' => 1,
            ),
            58 => 
            array (
                'id' => 64,
                'migration' => '2019_07_05_051549_create_gig_scopes_table',
                'batch' => 1,
            ),
            59 => 
            array (
                'id' => 66,
                'migration' => '2019_08_21_150030_create_press_and_news_table',
                'batch' => 1,
            ),
            60 => 
            array (
                'id' => 67,
                'migration' => '2019_08_21_184447_create_faq_table',
                'batch' => 1,
            ),
            61 => 
            array (
                'id' => 69,
                'migration' => '2019_08_22_152119_create_pages_table',
                'batch' => 1,
            ),
            62 => 
            array (
                'id' => 71,
                'migration' => '2019_08_23_153448_create_orders_table',
                'batch' => 1,
            ),
            63 => 
            array (
                'id' => 74,
                'migration' => '2019_08_23_172856_create_transactions_table',
                'batch' => 2,
            ),
            64 => 
            array (
                'id' => 75,
                'migration' => '2019_08_23_172918_create_wallets_table',
                'batch' => 3,
            ),
            65 => 
            array (
                'id' => 76,
                'migration' => '2019_08_27_174526_create_gig_faqs_table',
                'batch' => 4,
            ),
            66 => 
            array (
                'id' => 77,
                'migration' => '2019_09_12_185537_create_websockets_statistics_entries_table',
                'batch' => 5,
            ),
        ));
        
        
    }
}