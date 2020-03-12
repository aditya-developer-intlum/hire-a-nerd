<?php

use Illuminate\Database\Seeder;

class GigFaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gig_faqs')->delete();
        
        \DB::table('gig_faqs')->insert(array (
            0 => 
            array (
                'id' => 28,
                'gig_id' => 4,
                'question' => 'Question 1',
                'answer' => 'Answer 1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 29,
                'gig_id' => 4,
                'question' => 'ffffffffffffffffff',
                'answer' => 'gggggggggggggggggggggg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 30,
                'gig_id' => 10,
                'question' => 'dsfdsf',
                'answer' => 'dsfdsfds',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 31,
                'gig_id' => 11,
                'question' => 'how can i purchase ?',
                'answer' => 'you can simply buy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 32,
                'gig_id' => 12,
                'question' => 'What do I need to get started?',
                'answer' => 'Nothing much ! After ordering my gig you will see some basic questions where I will determine what are your exact needs and can provide you with best logos.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 33,
                'gig_id' => 12,
                'question' => 'What is Source Files and how they are helpful?',
                'answer' => 'Source files are the original files of your logo in which you can edit/resize the logo to any size without loosing quality using the Adobe software. They are available in Ai,EPS,PSD,PDF,PNG,SVG formats. To get these files please select Standard/Premium package.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 34,
                'gig_id' => 12,
                'question' => 'What is Social media kit?',
                'answer' => 'Social media kit is a Covers for Facebook Twitter & YouTube GooglePlus. The logo which I design is featured on covers and they comes with social media platform friendly size and dimensions. It is offered in Standard and Premium Package.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 35,
                'gig_id' => 12,
                'question' => 'What is Stationary Designs?',
                'answer' => 'Stationary Designs are set of Business card and Letterhead which is designed symmetrical to your logo design\'s overall theme and colors. It comes in direct Print-Ready files in RGB/CMYK as per your need. It is being offered under only PREMIUM PACKAGE.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 36,
                'gig_id' => 14,
                'question' => 'What do you need to start the order?',
            'answer' => 'You may require the following to start the order, - Logo text and tagline - Niche (market) & description about your company/business - Special images or icon you want to use in the design - any color preference - the Overall message you want to convey.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 37,
                'gig_id' => 14,
                'question' => 'How Premium Package is Beneficial?',
                'answer' => 'We will design 3 TOP NOTCH Quality logo variations + Source & Vector files. It will also include Social Media Design, symmetrical to the finalized logo which will brand your business excellently along with TOP Priority Support and Quick Turnaround time. And mascots can be done in this package',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 38,
                'gig_id' => 14,
                'question' => 'What is Vector/Source file?',
            'answer' => 'Vector/Source files are the original files (.ai, .eps or .psd) in which the logos are designed. You can edit/resize the logo to any desirable size without quality loss or pixelation. If you have to print the logo on branding material then you would need vector files.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 39,
                'gig_id' => 14,
                'question' => 'What does Social media kit includes?',
                'answer' => 'For the Branding of your product, we provide Exclusive banners for Facebook, Twitter, YouTube & Google+ in our Social media package.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 40,
                'gig_id' => 15,
                'question' => 'What do I need to get started?',
                'answer' => 'After Placing the order, you will automatically receive a quick logo design questionnaire which contains some simple questions about the project details which help me to design the logo.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 41,
                'gig_id' => 15,
                'question' => 'What is the main difference between my packages?',
                'answer' => 'The main difference between my 3 Packages is the number of initial logo concept and revisions. The quality remains the same in all my packages.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 42,
                'gig_id' => 15,
                'question' => 'What is a Vector/Source file?',
                'answer' => 'A Vector/Source file is the original file of the logo in which you can edit or resize the logo to any desirable size without loss of quality.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 43,
                'gig_id' => 16,
                'question' => 'What is a Catalogue',
                'answer' => 'A Catalogue is a brochure that provides information in a nice compact way.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 44,
                'gig_id' => 17,
                'question' => 'What is the delivery time?',
                'answer' => 'The standard delivery time is 6 days, but we can deliver it fast with our express delivery service.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}