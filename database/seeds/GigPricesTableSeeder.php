<?php

use Illuminate\Database\Seeder;

class GigPricesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gig_prices')->delete();
        
        \DB::table('gig_prices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'gig_id' => 1,
                'basic_package_name' => 'BASIC LOGO DESIGN',
                'standard_package_name' => 'RECOMMENDED - MOST SELLING PACKAGE',
                'premium_package_name' => 'COMPLETE PACKAGE - PERFECT NEED 4 U',
                'basic_description' => '2 Basic Logos + Standard High Quality Mockup - NO COMPLEX OR MASCOT LOGO',
                'standard_description' => '2 HQ UltraQuality Logos + AI EPS Vector Source File + 3D Mockup + VIP Support + 5 Social Media Cover',
                'premium_description' => '3 ULTIMATE Logos + AI - EPS PDF JPG PNG File + 3D Mock-up + 5 Social Media Cover + Stationery Design',
                'basic_delivery_time' => '3',
                'standard_delivery_time' => '3',
                'premium_delivery_time' => '2',
                'basic_price' => '15.00',
                'standard_price' => '55.00',
                'premium_price' => '150.00',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'gig_id' => 2,
                'basic_package_name' => 'BASIC',
                'standard_package_name' => 'Pro',
                'premium_package_name' => 'ULTIMATE',
            'basic_description' => '- 3 Concepts, Professional Logo Design + All the files (.AI, .PNG,PDF etc.)+Unlimited Revisions',
                'standard_description' => '-Logo Design
-Business Card

Formats:
.ai .pdf .jpeg .png .eps .psd',
                'premium_description' => '-Logo 
-Business Card
-Brand Guide

Formats:
.ai .pdf .jpeg .png .eps .psd',
                'basic_delivery_time' => '1',
                'standard_delivery_time' => '2',
                'premium_delivery_time' => '3',
                'basic_price' => '15.00',
                'standard_price' => '60.00',
                'premium_price' => '220.00',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'gig_id' => 3,
                'basic_package_name' => 'dfdsf',
                'standard_package_name' => 'dfdsf',
                'premium_package_name' => 'dfdsf',
                'basic_description' => 'dsfdsf',
                'standard_description' => 'dsfdsf',
                'premium_description' => 'fdsf',
                'basic_delivery_time' => '5',
                'standard_delivery_time' => '4',
                'premium_delivery_time' => '4',
                'basic_price' => '5.00',
                'standard_price' => '5.00',
                'premium_price' => '5.00',
                'status' => 0,
            ),
        ));
        
        
    }
}