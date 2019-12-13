<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'can_viewAny_user',
                'title' => 'Can View User',
                'identify' => 'user',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'can_create_user',
                'title' => 'Can Create User',
                'identify' => 'user',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'can_edit_user',
                'title' => 'Can Edit User',
                'identify' => 'user',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'can_delete_user',
                'title' => 'Can Delete User',
                'identify' => 'user',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'can_change_status_user',
                'title' => 'Can Change User Status',
                'identify' => 'user',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'can_viewAny_skill',
                'title' => 'Can View Skill',
                'identify' => 'skill',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'can_create_skill',
                'title' => 'Can Create Skill',
                'identify' => 'skill',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'can_edit_skill',
                'title' => 'Can Edit Skill',
                'identify' => 'skill',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            8 => 
            array (
                'id' => 9,
                'slug' => 'can_delete_skill',
                'title' => 'Can Delete Skill',
                'identify' => 'skill',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            9 => 
            array (
                'id' => 10,
                'slug' => 'can_change_status_skill',
                'title' => 'Can Change Skill Status',
                'identify' => 'skill',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            10 => 
            array (
                'id' => 11,
                'slug' => 'can_viewAny_qualification',
                'title' => 'Can View Qualification',
                'identify' => 'qualification',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            11 => 
            array (
                'id' => 12,
                'slug' => 'can_create_qualification',
                'title' => 'Can Create Qualification',
                'identify' => 'qualification',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            12 => 
            array (
                'id' => 13,
                'slug' => 'can_edit_qualification',
                'title' => 'Can Edit Qualification',
                'identify' => 'qualification',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            13 => 
            array (
                'id' => 14,
                'slug' => 'can_delete_qualification',
                'title' => 'Can Delete Qualification',
                'identify' => 'qualification',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            14 => 
            array (
                'id' => 15,
                'slug' => 'can_change_status_qualification',
                'title' => 'Can Change Qualification Status',
                'identify' => 'qualification',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            15 => 
            array (
                'id' => 16,
                'slug' => 'can_viewAny_category',
                'title' => 'Can View Category',
                'identify' => 'category',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            16 => 
            array (
                'id' => 17,
                'slug' => 'can_create_category',
                'title' => 'Can Create Category',
                'identify' => 'category',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            17 => 
            array (
                'id' => 18,
                'slug' => 'can_edit_category',
                'title' => 'Can Edit Category',
                'identify' => 'category',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            18 => 
            array (
                'id' => 19,
                'slug' => 'can_delete_category',
                'title' => 'Can Delete Category',
                'identify' => 'category',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            19 => 
            array (
                'id' => 20,
                'slug' => 'can_change_status_category',
                'title' => 'Can Change Category Status',
                'identify' => 'category',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            20 => 
            array (
                'id' => 21,
                'slug' => 'can_viewAny_sub_category',
                'title' => 'Can View Sub_Category',
                'identify' => 'sub_category',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            21 => 
            array (
                'id' => 22,
                'slug' => 'can_create_sub_category',
                'title' => 'Can Create Sub_Category',
                'identify' => 'sub_category',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            22 => 
            array (
                'id' => 23,
                'slug' => 'can_edit_sub_category',
                'title' => 'Can Edit Sub_Category',
                'identify' => 'sub_category',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            23 => 
            array (
                'id' => 24,
                'slug' => 'can_delete_sub_category',
                'title' => 'Can Delete Sub_Category',
                'identify' => 'sub_category',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            24 => 
            array (
                'id' => 25,
                'slug' => 'can_change_status_sub_category',
                'title' => 'Can Change Sub_Category Status',
                'identify' => 'sub_category',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            25 => 
            array (
                'id' => 26,
                'slug' => 'can_viewAny_sub_admin',
                'title' => 'Can View Sub_Admin',
                'identify' => 'sub_admin',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            26 => 
            array (
                'id' => 27,
                'slug' => 'can_create_sub_admin',
                'title' => 'Can Create Sub_Admin',
                'identify' => 'sub_admin',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            27 => 
            array (
                'id' => 28,
                'slug' => 'can_edit_sub_admin',
                'title' => 'Can Edit Sub_Admin',
                'identify' => 'sub_admin',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            28 => 
            array (
                'id' => 29,
                'slug' => 'can_delete_sub_admin',
                'title' => 'Can Delete Sub_Admin',
                'identify' => 'sub_admin',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            29 => 
            array (
                'id' => 30,
                'slug' => 'can_change_status_sub_admin',
                'title' => 'Can Change Sub_Admin Status',
                'identify' => 'sub_admin',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            30 => 
            array (
                'id' => 31,
                'slug' => 'can_viewAny_manage_gig',
                'title' => 'Can View Manage_Gig',
                'identify' => 'manage_gig',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            31 => 
            array (
                'id' => 32,
                'slug' => 'can_create_manage_gig',
                'title' => 'Can Create Manage_Gig',
                'identify' => 'manage_gig',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            32 => 
            array (
                'id' => 33,
                'slug' => 'can_edit_manage_gig',
                'title' => 'Can Edit Manage_Gig',
                'identify' => 'manage_gig',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            33 => 
            array (
                'id' => 34,
                'slug' => 'can_delete_manage_gig',
                'title' => 'Can Delete Manage_Gig',
                'identify' => 'manage_gig',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            34 => 
            array (
                'id' => 35,
                'slug' => 'can_change_status_manage_gig',
                'title' => 'Can Change Manage_Gig Status',
                'identify' => 'manage_gig',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            35 => 
            array (
                'id' => 36,
                'slug' => 'can_viewAny_press_and_news',
                'title' => 'Can View Press_And_News',
                'identify' => 'press_and_news',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            36 => 
            array (
                'id' => 37,
                'slug' => 'can_create_press_and_news',
                'title' => 'Can Create Press_And_News',
                'identify' => 'press_and_news',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            37 => 
            array (
                'id' => 38,
                'slug' => 'can_edit_press_and_news',
                'title' => 'Can Edit Press_And_News',
                'identify' => 'press_and_news',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            38 => 
            array (
                'id' => 39,
                'slug' => 'can_delete_press_and_news',
                'title' => 'Can Delete Press_And_News',
                'identify' => 'press_and_news',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            39 => 
            array (
                'id' => 40,
                'slug' => 'can_change_status_press_and_news',
                'title' => 'Can Change Press_And_News Status',
                'identify' => 'press_and_news',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            40 => 
            array (
                'id' => 41,
                'slug' => 'can_viewAny_faq',
                'title' => 'Can View Faq',
                'identify' => 'faq',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            41 => 
            array (
                'id' => 42,
                'slug' => 'can_create_faq',
                'title' => 'Can Create Faq',
                'identify' => 'faq',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            42 => 
            array (
                'id' => 43,
                'slug' => 'can_edit_faq',
                'title' => 'Can Edit Faq',
                'identify' => 'faq',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            43 => 
            array (
                'id' => 44,
                'slug' => 'can_delete_faq',
                'title' => 'Can Delete Faq',
                'identify' => 'faq',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            44 => 
            array (
                'id' => 45,
                'slug' => 'can_change_status_faq',
                'title' => 'Can Change Faq Status',
                'identify' => 'faq',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            45 => 
            array (
                'id' => 46,
                'slug' => 'can_suspend_user',
                'title' => 'Can Suspend User',
                'identify' => 'user',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            46 => 
            array (
                'id' => 47,
                'slug' => 'can_view_user',
                'title' => 'Can See User Detail',
                'identify' => 'user',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            47 => 
            array (
                'id' => 48,
                'slug' => 'can_reset_password_user',
                'title' => 'Can Reset User Password',
                'identify' => 'user',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            48 => 
            array (
                'id' => 49,
                'slug' => 'can_login_as_user',
                'title' => 'Can Login as User',
                'identify' => 'user',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            49 => 
            array (
                'id' => 50,
                'slug' => 'can_download_user',
                'title' => 'Can Download User List in Excel and CSV',
                'identify' => 'user',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            50 => 
            array (
                'id' => 51,
                'slug' => 'can_permission_sub_admin',
                'title' => 'Can Access Permission',
                'identify' => 'sub_admin',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            51 => 
            array (
                'id' => 52,
                'slug' => 'can_manage_gig_accept',
                'title' => 'Can Accept Gig',
                'identify' => 'manage_gig',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            52 => 
            array (
                'id' => 53,
                'slug' => 'can_manage_gig_view',
                'title' => 'Can View Gig',
                'identify' => 'manage_gig',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            53 => 
            array (
                'id' => 54,
                'slug' => 'can_manage_gig_block',
                'title' => 'Can Block Gig',
                'identify' => 'manage_gig',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            54 => 
            array (
                'id' => 55,
                'slug' => 'can_manage_gig_suspend',
                'title' => 'Can Suspend Gig',
                'identify' => 'manage_gig',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
            55 => 
            array (
                'id' => 56,
                'slug' => 'can_manage_gig_see_earning',
                'title' => 'Can See Commision on Gig',
                'identify' => 'manage_gig',
                'created_at' => '2019-08-22 03:31:11',
                'updated_at' => '2019-08-22 03:31:11',
            ),
        ));
        
        
    }
}