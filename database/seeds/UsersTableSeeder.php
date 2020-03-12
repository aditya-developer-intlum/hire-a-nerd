<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 17,
                'name' => 'Super Admin',
                'f_name' => 'Super',
                'l_name' => 'Admin',
                'email' => 'admin@admin.com',
                'mobile_number' => '123456789',
                'type' => 1,
                'email_verified_at' => NULL,
                'password' => '$2y$10$P2NYYNdMRF5jezMVXJo7V.AJkj6zRCoXFr.606Xla/4jJqYorJPTK',
                'term_and_condition' => 1,
                'status' => 1,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-06-10 16:53:13',
                'updated_at' => '2019-10-19 12:18:18',
                'token' => '',
                'mode' => 2,
            ),
            1 => 
            array (
                'id' => 18,
                'name' => 'Gotlancer Portal',
                'f_name' => '',
                'l_name' => '',
                'email' => 'iklas.intlum@gmail.com',
                'mobile_number' => '2222222222',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$ykBYwp5jiDWGv7ygLrLpOuujUUgFbNuT5DhRYlhS63jwyNP9wmVTS',
                'term_and_condition' => 0,
                'status' => 1,
                'online_status' => 0,
                'remember_token' => 'j1v4qgDgT5mqtxMeqjQOsI7KwZUxiQ7dnDr4SLwhFm9y4HCLjaml2JeBtwsn',
                'deative_reasion' => 'not usefull for me',
                'created_at' => '2019-06-10 17:07:12',
                'updated_at' => '2019-08-19 22:00:25',
                'token' => '',
                'mode' => 1,
            ),
            2 => 
            array (
                'id' => 21,
                'name' => 'Sub Admin',
                'f_name' => 'Sub',
                'l_name' => 'Admin',
                'email' => 'subadmin@subadmin.com',
                'mobile_number' => '333333333333',
                'type' => 2,
                'email_verified_at' => NULL,
                'password' => '$2y$10$P2NYYNdMRF5jezMVXJo7V.AJkj6zRCoXFr.606Xla/4jJqYorJPTK',
                'term_and_condition' => 1,
                'status' => 1,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-07-04 13:47:22',
                'updated_at' => '2019-09-16 16:31:32',
                'token' => '',
                'mode' => 1,
            ),
            3 => 
            array (
                'id' => 22,
                'name' => 'Shofia',
                'f_name' => '',
                'l_name' => '',
                'email' => 'adityakumar@gmail.com',
                'mobile_number' => '4444444444',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$P2NYYNdMRF5jezMVXJo7V.AJkj6zRCoXFr.606Xla/4jJqYorJPTK',
                'term_and_condition' => 0,
                'status' => 1,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-08-05 14:16:16',
                'updated_at' => '2019-11-14 11:53:08',
                'token' => '',
                'mode' => 2,
            ),
            4 => 
            array (
                'id' => 23,
                'name' => 'developer account',
                'f_name' => '',
                'l_name' => '',
                'email' => 'developerlaravel5@gmail.com',
                'mobile_number' => '6666666666666',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '',
                'term_and_condition' => 1,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-08-05 22:16:31',
                'updated_at' => '2019-08-05 22:16:31',
                'token' => '',
                'mode' => 1,
            ),
            5 => 
            array (
                'id' => 29,
                'name' => 'Jaquan Cremin',
                'f_name' => '',
                'l_name' => '',
                'email' => 'bechtelar.alisha@example.net',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => '2019-08-10 11:31:29',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'term_and_condition' => 0,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => 'T5EmQrFReR',
                'deative_reasion' => '',
                'created_at' => '2019-08-09 20:31:29',
                'updated_at' => '2019-08-09 20:31:29',
                'token' => '',
                'mode' => 1,
            ),
            6 => 
            array (
                'id' => 525,
                'name' => 'Morgan Sporer',
                'f_name' => '',
                'l_name' => '',
                'email' => 'jwill@example.com',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => '2019-08-10 11:31:29',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'term_and_condition' => 0,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => '3AY2q742rq',
                'deative_reasion' => '',
                'created_at' => '2019-08-09 20:31:31',
                'updated_at' => '2019-08-09 20:31:31',
                'token' => '',
                'mode' => 1,
            ),
            7 => 
            array (
                'id' => 526,
                'name' => 'Tommie Heathcote V',
                'f_name' => '',
                'l_name' => '',
                'email' => 'walter.evalyn@example.com',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => '2019-08-10 11:31:29',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'term_and_condition' => 0,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => 'rmYl1s4W3U',
                'deative_reasion' => '',
                'created_at' => '2019-08-09 20:31:31',
                'updated_at' => '2019-08-09 20:31:31',
                'token' => '',
                'mode' => 1,
            ),
            8 => 
            array (
                'id' => 527,
                'name' => 'Mrs. Millie McClure V',
                'f_name' => '',
                'l_name' => '',
                'email' => 'canderson@example.net',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => '2019-08-10 11:31:29',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'term_and_condition' => 0,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => 'FR5jgwQDy4',
                'deative_reasion' => '',
                'created_at' => '2019-08-09 20:31:31',
                'updated_at' => '2019-08-09 20:31:31',
                'token' => '',
                'mode' => 1,
            ),
            9 => 
            array (
                'id' => 528,
                'name' => 'Ms. Alize Bosco',
                'f_name' => '',
                'l_name' => '',
                'email' => 'orland66@example.org',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => '2019-08-10 11:31:29',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'term_and_condition' => 0,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => 'nndWRkDgnI',
                'deative_reasion' => '',
                'created_at' => '2019-08-09 20:31:31',
                'updated_at' => '2019-08-09 20:31:31',
                'token' => '',
                'mode' => 1,
            ),
            10 => 
            array (
                'id' => 529,
                'name' => 'Breejraj',
                'f_name' => '',
                'l_name' => '',
                'email' => 'breejraj@yaho.com',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$AXPdegJcIgyUQ5ZwDRWRfeDDioIgFMh49mQEBMJDpknawOe8TxTMq',
                'term_and_condition' => 1,
                'status' => 1,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-08-28 10:19:45',
                'updated_at' => '2019-08-28 10:22:04',
                'token' => '',
                'mode' => 1,
            ),
            11 => 
            array (
                'id' => 530,
                'name' => 'abc',
                'f_name' => '',
                'l_name' => '',
                'email' => 'abc@gmail.com',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$0Pu8Fq6qPzUZUw05TE1LcugldQr3H/EXhXbvFG8Ji5rYdCoG6130W',
                'term_and_condition' => 1,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-08-29 07:03:00',
                'updated_at' => '2019-08-29 07:03:00',
                'token' => '',
                'mode' => 1,
            ),
            12 => 
            array (
                'id' => 531,
                'name' => 'dfgfg',
                'f_name' => '',
                'l_name' => '',
                'email' => 'fgsfg@sfsdh.gfhg',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$QilDPbU.g33oVeSBoVqyb.ZHE/b0hqVJXT4PnkQqUqH/fpWxFvn2i',
                'term_and_condition' => 1,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-08-29 07:08:17',
                'updated_at' => '2019-08-29 07:08:17',
                'token' => '',
                'mode' => 1,
            ),
            13 => 
            array (
                'id' => 532,
                'name' => 'dfdsf',
                'f_name' => '',
                'l_name' => '',
                'email' => 'dsfdffh@rgfg.gfhgfh',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$1FGGuC5Q0TLddYN2B4oBV.qxmHlVCuJ1YQ4CRMa9EXPJSXCrYunRS',
                'term_and_condition' => 1,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-08-29 07:16:59',
                'updated_at' => '2019-08-29 07:17:15',
                'token' => '',
                'mode' => 2,
            ),
            14 => 
            array (
                'id' => 533,
                'name' => 'aditya',
                'f_name' => '',
                'l_name' => '',
                'email' => 'aditya113@gmail.com',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$FRcXg6iXYWqsI7//LMzk7.2lL/MELECcR98noUrofkciqH1e4f5Ti',
                'term_and_condition' => 1,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-09-16 16:36:17',
                'updated_at' => '2019-09-16 16:37:01',
                'token' => '',
                'mode' => 2,
            ),
            15 => 
            array (
                'id' => 534,
                'name' => 'Ravi Kumar',
                'f_name' => '',
                'l_name' => '',
                'email' => 'ravi@gmail.com',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$4oJI303OhLAMd.FjNdmUoe.4pcaGLy7l9t6ebdXEVclScHw2SkNAq',
                'term_and_condition' => 1,
                'status' => 0,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-10-04 09:24:00',
                'updated_at' => '2019-10-04 09:37:59',
                'token' => '',
                'mode' => 2,
            ),
            16 => 
            array (
                'id' => 535,
                'name' => 'amol',
                'f_name' => '',
                'l_name' => '',
                'email' => 'amol@gmail.com',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$kIfThfVZ1nB1ltaearfilOUIe4lU7Vw2c1YZeedxwVg3v8EgBboeO',
                'term_and_condition' => 1,
                'status' => 1,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-10-04 12:21:29',
                'updated_at' => '2019-11-16 07:06:49',
                'token' => '',
                'mode' => 2,
            ),
            17 => 
            array (
                'id' => 536,
                'name' => 'Breej Raj',
                'f_name' => '',
                'l_name' => '',
                'email' => 'breejraj@outlook.com',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$rtlH03wUlHXmBF9iDHtIxuB8wBVc3w6xZjj/4ljaUbzK1z7DYr0yK',
                'term_and_condition' => 1,
                'status' => 1,
                'online_status' => 1,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-11-08 06:43:38',
                'updated_at' => '2019-11-19 07:04:17',
                'token' => '',
                'mode' => 2,
            ),
            18 => 
            array (
                'id' => 537,
                'name' => 'Sandy Mack',
                'f_name' => '',
                'l_name' => '',
                'email' => 'sandy.mack2019@hotmail.com',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$53omPMBqSQR0dYE/x3autu8unUICffNPr/un276.HfLM0QO12V5E.',
                'term_and_condition' => 1,
                'status' => 1,
                'online_status' => 0,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-11-13 01:54:27',
                'updated_at' => '2019-11-16 07:06:30',
                'token' => '',
                'mode' => 2,
            ),
            19 => 
            array (
                'id' => 538,
                'name' => 'Shree',
                'f_name' => '',
                'l_name' => '',
                'email' => 'shreeja.snair@gmail.com',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$LY6R9zwYKJrdW9tAEq5mY.wQKrUsv0pgh3EDvBAQEZuoaGbk2WAY6',
                'term_and_condition' => 1,
                'status' => 1,
                'online_status' => 1,
                'remember_token' => NULL,
                'deative_reasion' => 'other',
                'created_at' => '2019-11-15 05:14:51',
                'updated_at' => '2019-11-16 07:31:41',
                'token' => '',
                'mode' => 1,
            ),
            20 => 
            array (
                'id' => 539,
                'name' => 'Shary',
                'f_name' => '',
                'l_name' => '',
                'email' => 'shreeja.nair@virohaa.com',
                'mobile_number' => '',
                'type' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$1nK5sVe2.ltb8EVV1HeYq.4BJ31Vx8mInOha3HeuJc0DtTVcAJLqO',
                'term_and_condition' => 1,
                'status' => 1,
                'online_status' => 1,
                'remember_token' => NULL,
                'deative_reasion' => '',
                'created_at' => '2019-11-16 05:57:53',
                'updated_at' => '2019-11-16 08:02:34',
                'token' => '',
                'mode' => 2,
            ),
        ));
        
        
    }
}