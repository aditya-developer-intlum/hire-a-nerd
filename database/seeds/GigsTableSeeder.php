<?php

use Illuminate\Database\Seeder;

class GigsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gigs')->delete();
        
        \DB::table('gigs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 22,
                'gig_title' => 'I Will Design 2 Modern Logo Design',
                'category' => 1,
                'sub_category' => 2,
                'tags' => 'logo,design',
                'describe_your_gig' => '<p><strong>&quot;Creating beautiful brand face, one at a time&quot;<br />
♛TOP RATED SELLER♛</strong><br />
<br />
<strong>&lsquo;We&rsquo; &lsquo;Perfectionist&rsquo;</strong>&nbsp;is a highly talented and dedicated team, focused on providing unique logo design absolutely from scratch. A Logo is the face of your brand which is as equally important as the success of your business and we make sure to dig the pillars of your success from depth.<br />
<br />
<strong>Kindly select STANDARD or PREMIUM pack for best results similar to my portfolio.</strong><br />
<br />
<strong>Reasons that make our gig unique!</strong><br />
<strong>✔</strong>Original, highly creative and conceptual design that clearly depict the brand&rsquo;s message<br />
<strong>✔</strong>Swift, Reliable and Premium support<br />
<strong>✔</strong>Unlimited Revisions(until you are satisfied)<br />
<strong>✔</strong>Express 24 hours delivery available<br />
<strong>✔</strong>Team of award-winning designers<br />
<strong>✔</strong>All types of vector source files-AI EPS PDF PNG JPEG<br />
<strong>✔</strong>and lot more<br />
<br />
&nbsp;</p>',
                'requirement' => 'nothing',
                'answer_type' => '1',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/9LeXakXPFjuA3oHhafzzokCzi5MbJfkikOMxL9Ea.jpeg',
                'gig_photo_two' => 'uploads/gig-photo/MlF31yCOtYm7rnFnrL2VWg5VO2p5wbul7QZTUmwN.jpeg',
                'gig_photo_three' => 'uploads/gig-photo/NJBYsMPLwDnq6mQEsFhWHci9nd33cP6kHbvQNOA0.jpeg',
                'gig_video' => 'uploads/gig-video/SPWZnl2chglFVX6ze53uJ2QwFJgaPDaS2QsADfbJ.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/KyErxo8txoxajDrJwe5y5602prGZRLPs9lovvuo9.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/TDJvbI4pC6i0zR49kgcbgRwXdfxrCSsQMf8EwEMG.pdf',
                'is_status' => 2,
                'region' => 'no resion',
                'suspended_till' => '2019-09-07',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
                'clicks' => 27,
                'created_at' => '2019-08-20 03:37:44',
                'updated_at' => '2019-11-08 12:33:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 22,
                'gig_title' => 'I Will Design A Professional Brand Guide For Your Business',
                'category' => 1,
                'sub_category' => 2,
                'tags' => 'search me from,any tag',
                'describe_your_gig' => '<p>Do you wish to improve the image of your business and distinguish yourself from the competition? Do you want your brand to appear more interesting and spark a sense of curiosity in your clients?&nbsp;</p>

<p>If &quot;Yes&quot; then you came to the right place!</p>

<p>&nbsp;</p>

<p>My main focus is on providing you with a high-quality design for your business. A design which will help you really stand out!</p>

<p>I offer you a unique logo in the style of your choosing&nbsp;and in order to ensure the 100% satisfaction with the end product,&nbsp;we will&nbsp;discuss the design together down to the smallest detail and you can be sure that&nbsp;I&#39;ll keep in touch with you through the whole designing process!</p>

<p><br />
<strong>Services:</strong><br />
&nbsp;</p>

<ul>
<li><strong>Unique Design!</strong></li>
<li><strong>UNLIMITED revisions!</strong></li>
<li><strong>100% Vector based logo.</strong></li>
<li><strong>Quick response.</strong></li>
<li><strong>Friendly communication</strong></li>
</ul>

<p>&nbsp;</p>',
                'requirement' => 'hhhhhhhhhhhhhhhhhhhh',
                'answer_type' => '1',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/psUJt2HFSTBxsHymdv5l2rRGeqogZ1xbCZrMCEpO.png',
                'gig_photo_two' => 'uploads/gig-photo/3PnWNAfbS2DdSSDWtAWfJD9ip2U98XkdJSvYxZpC.png',
                'gig_photo_three' => 'uploads/gig-photo/8bEMReNnKLLLEolxkFJpr5X1v2iqXymatOtrlKfW.png',
                'gig_video' => 'uploads/gig-video/NNd5L2YZhR7hrrY7322p01kGItSq54GX0AIBgXwi.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/NlaP0A5R3bxCjgytQhULo6eaYa37iYjKZToc1KxI.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/cVCb39mMxvOvjr6jw6zKXRKJ5DZV0u2JLs0xwxz4.pdf',
                'is_status' => 1,
                'region' => 'hhjjj',
                'suspended_till' => '2019-09-02',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
                'clicks' => NULL,
                'created_at' => '2019-08-21 01:40:53',
                'updated_at' => '2019-11-15 06:38:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => 22,
                'gig_title' => 'I Will Be Your Fortnite Coach 2800 Wins 4kd And 18k Arena Points',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'deff',
                'describe_your_gig' => '<p>sadddddddddddddddddsdsa dssssssssssssssssdasadasdsadsadsadasdasdasdasdasdasdasdasdasdasdasdsasdassdasasdadadadasdasdasdassasasdasasdasdasdassadasdassadsadsadadsadasdadsasdas&nbsp; dd&nbsp; ddd</p>',
                'requirement' => 'Hey, my name is Nils!
I am working for an e-commerce company in the SEA department. I also own a marketing agency. 

In my freetime i like to build webshops and i love do some social media marketing.
I am 19 years old with 3 years of work experience and a lot of understanding of the online business.
I will controll, optimize or setup your Google Ads, Facebook/Instagram Ads or even your own Webshop.',
                'answer_type' => NULL,
                'is_mandatory' => 0,
                'gig_photo_one' => 'uploads/gig-photo/jUU4zpLsj1fihf9jFZdFfNYcc6MiTcwf8fgxVNDZ.webp',
                'gig_photo_two' => NULL,
                'gig_photo_three' => NULL,
                'gig_video' => NULL,
                'gig_pdf_one' => NULL,
                'gig_pdf_two' => NULL,
                'is_status' => 3,
                'region' => NULL,
                'suspended_till' => NULL,
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
                'clicks' => NULL,
                'created_at' => '2019-08-27 07:13:51',
                'updated_at' => '2019-10-04 12:50:01',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'user_id' => 22,
                'gig_title' => 'I Will Design 2 Modern Logo Design',
                'category' => 4,
                'sub_category' => 74,
                'tags' => 'logo,design',
                'describe_your_gig' => '<p><strong>&quot;Creating beautiful brand face, one at a time&quot;<br />
♛TOP RATED SELLER♛</strong><br />
<br />
<strong>&lsquo;We&rsquo; &lsquo;Perfectionist&rsquo;</strong>&nbsp;is a highly talented and dedicated team, focused on providing unique logo design absolutely from scratch. A Logo is the face of your brand which is as equally important as the success of your business and we make sure to dig the pillars of your success from depth.<br />
<br />
<strong>Kindly select STANDARD or PREMIUM pack for best results similar to my portfolio.</strong><br />
<br />
<strong>Reasons that make our gig unique!</strong><br />
<strong>✔</strong>Original, highly creative and conceptual design that clearly depict the brand&rsquo;s message<br />
<strong>✔</strong>Swift, Reliable and Premium support<br />
<strong>✔</strong>Unlimited Revisions(until you are satisfied)<br />
<strong>✔</strong>Express 24 hours delivery available<br />
<strong>✔</strong>Team of award-winning designers<br />
<strong>✔</strong>All types of vector source files-AI EPS PDF PNG JPEG<br />
<strong>✔</strong>and lot more<br />
<br />
&nbsp;</p>',
                'requirement' => 'nothing',
                'answer_type' => NULL,
                'is_mandatory' => 0,
                'gig_photo_one' => 'uploads/gig-photo/2Osps14jgJOLDunACHxCpivBmOpU51mLnO9BTkIj.jpeg',
                'gig_photo_two' => NULL,
                'gig_photo_three' => NULL,
                'gig_video' => NULL,
                'gig_pdf_one' => NULL,
                'gig_pdf_two' => NULL,
                'is_status' => 1,
                'region' => NULL,
                'suspended_till' => NULL,
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
                'clicks' => NULL,
                'created_at' => '2019-08-29 03:58:16',
                'updated_at' => '2019-11-10 16:16:01',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'user_id' => 22,
                'gig_title' => 'dfsgfg',
                'category' => 6,
                'sub_category' => 104,
                'tags' => 'fdgfdg,ds gsfg,dfdsg',
                'describe_your_gig' => NULL,
                'requirement' => NULL,
                'answer_type' => NULL,
                'is_mandatory' => 0,
                'gig_photo_one' => NULL,
                'gig_photo_two' => NULL,
                'gig_photo_three' => NULL,
                'gig_video' => NULL,
                'gig_pdf_one' => NULL,
                'gig_pdf_two' => NULL,
                'is_status' => 0,
                'region' => NULL,
                'suspended_till' => NULL,
                'status' => 0,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => NULL,
                'widget_four' => NULL,
                'widget_five' => NULL,
                'clicks' => NULL,
                'created_at' => '2019-09-13 03:02:40',
                'updated_at' => '2019-11-08 12:22:05',
                'deleted_at' => '2019-11-08 18:22:05',
            ),
            5 => 
            array (
                'id' => 9,
                'user_id' => 17,
                'gig_title' => 'I will develop website using yii, yii2, codeigniter, laravel, php',
                'category' => 6,
                'sub_category' => 104,
                'tags' => 'Ci,Laravel',
                'describe_your_gig' => '<p>High Delivery Completion</p>

<p>lembits delivered at least 95% of their orders.</p>

<p>Helpful?</p>

<p>Yes</p>

<p>No</p>

<p>Great Communicator</p>

<p>100% of recent customers said they had had excellent communication with lembits.</p>

<p>Helpful?</p>

<p>Yes</p>

<p>No</p>

<p>Meets Expectations</p>

<p>Customers liked working with this seller and ordered their service again.</p>

<p>Helpful?</p>

<p>Yes</p>

<p>No</p>

<p><br />
<br />
I am also an expert in payment integration like&nbsp;<strong>PayPal, Stripe, ChargeBee, 2Checkout, Paytm, PayUmoney, Braintree</strong>, etc.<br />
<br />
Great experience:<br />
1. Yii,<br />
2. Yii2<br />
3. Codeigniter<br />
4. Laravel<br />
5. AngularJs<br />
6. Any php framework<br />
7. MySql<br />
8. APIs for mobile application</p>',
                'requirement' => 'WordPress, Yii, Yii2, Codeigniter, Laravel, Shopify, BigCommerce, PSD to HTML to WordPress, and any kind of Php Frameworks.
✪ Logo Design, Mockup Design( UI/UX ), Application Design, Banner Design, Flyer Design, Vector Design, Email Template Design, Social Media Marketing Banner and all design related things.',
                'answer_type' => NULL,
                'is_mandatory' => 0,
                'gig_photo_one' => 'uploads/gig-photo/isTvvxG47gKUITwOXTlc7ulxNRoPxOTVn6qrKJwe.webp',
                'gig_photo_two' => NULL,
                'gig_photo_three' => NULL,
                'gig_video' => NULL,
                'gig_pdf_one' => NULL,
                'gig_pdf_two' => NULL,
                'is_status' => 2,
                'region' => NULL,
                'suspended_till' => NULL,
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
                'clicks' => NULL,
                'created_at' => '2019-09-13 15:57:04',
                'updated_at' => '2019-11-08 12:33:42',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 11,
                'user_id' => 535,
                'gig_title' => 'I will create a stunning signature logo',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'logo,design',
                'describe_your_gig' => 'About This Gig
**Please read carefully before placing the order**

I offer a highly professional service and customer experience.
For complex Illustrations send me a message and ask me first!


In the Basic Package you’ll get:
☑ Elegant Signature logo (only text NO drawings)
☑Jpg-png files
☑300 dpi High Quality image
☑Up to 2 revisions

In the Standard Package you’ll get:
☑1 Main logo
☑1 Watermark to brand your photos',
                'requirement' => 'need your Design',
                'answer_type' => NULL,
                'is_mandatory' => 0,
                'gig_photo_one' => 'uploads/gig-photo/CbaCuNU9w4JV8vgQePGZtoHrmyHbz2kPb796SGHj.jpeg',
                'gig_photo_two' => NULL,
                'gig_photo_three' => NULL,
                'gig_video' => NULL,
                'gig_pdf_one' => NULL,
                'gig_pdf_two' => NULL,
                'is_status' => 2,
                'region' => NULL,
                'suspended_till' => NULL,
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
                'clicks' => NULL,
                'created_at' => '2019-10-04 12:25:41',
                'updated_at' => '2019-11-14 11:21:56',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 12,
                'user_id' => 22,
                'gig_title' => 'I will design 2 minimalist logo design',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'logo,design,logo design',
                'describe_your_gig' => 'About This Gig
Are you looking for Minimal logos? Look No further!

Why nowadays we see mostly Minimal logos for successful brands like Instagram, Twitter & many more? Because it’s an Era of clean and minimal theme.

Design will clearly portray your business with minimum detail yet maximum explanation.

NOTE : My portfolio displays logo designs which falls under standard/premium pack only. Please order appropriate pack to receive such quality of work. 

My Recent Work Sample : https://flic.kr/s/aHskLztmPf

Personally I have made around 5K+ happy faces which includes my Freelance and Local experience.



Why me?

Reliable and Quick communication
Printable and HQ File size
Minimalist Logo and Flat Logo Expert

This gig assures you all the print resolution solutions and a brand face for your company.

Fast and professional service.
Copyrights will be with customer.
Get source and editable files ai,eps,psd,pdf and High quality files.

Minimalist Logo | Minimal | Professional | Modern | Text | Vintage | Badge | Hand drawn | Feminine | Signature | Custom Logo Design',
                'requirement' => 's',
                'answer_type' => NULL,
                'is_mandatory' => 0,
                'gig_photo_one' => 'uploads/gig-photo/nSOfXEX4oUodmCPuTTsL5siAHddGdUC5CXlTq4us.png',
                'gig_photo_two' => NULL,
                'gig_photo_three' => NULL,
                'gig_video' => NULL,
                'gig_pdf_one' => NULL,
                'gig_pdf_two' => NULL,
                'is_status' => 1,
                'region' => NULL,
                'suspended_till' => NULL,
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
                'clicks' => NULL,
                'created_at' => '2019-11-08 12:27:57',
                'updated_at' => '2019-11-15 06:31:01',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 13,
                'user_id' => 22,
                'gig_title' => 'I will design twitch, youtube, gaming logo',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'Game,Logo,Gaming Logo',
            'describe_your_gig' => 'Hi. I´m happy to have you here :)

Just send a picture of you, or tell me what you need and I´ll make it.
ADDING OBJECTS HAVES ADDITIONAL COST (HEADSETS, WEAPOS, TATTOOS, ITEMS ETC)

The revisions are UNLIMITED until the order has been completed.
I guaratee an amazing result.

Source File has adittional cost, check the extras.',
            'requirement' => 's',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/Mc5sLqJ6CrCxNpEXMVF2YtqRC1BZ9Q52KQpL51zl.jpeg',
            'gig_photo_two' => NULL,
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 1,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-08 12:35:17',
            'updated_at' => '2019-11-08 12:37:13',
            'deleted_at' => NULL,
        ),
        9 => 
        array (
            'id' => 14,
            'user_id' => 22,
            'gig_title' => 'I will do urban streetwear clothing brand logo design',
            'category' => 1,
            'sub_category' => 2,
            'tags' => 'brand,Graphic,graphic logo,brand style logo',
            'describe_your_gig' => 'This is our Urban Streetwear Clothing Brand Logo GiG!

We are a team of dedicated and passionate designers with plenty of experience in Logo Designing. Having worked with more than 300 clothing brands we have discovered the necessary ingredients for a successful Logo. We know what kind of logo would represent your brand perfectly and what your consumer would like to see that represents the thought behind your brand!

★ Why Choose Us? ★
Instant Response
STUNNING Streetwear and clothing brand Logos
Unlimited revisions
Free Transparent .png
Swift communication with Professional service
24 hrs Express delivery',
            'requirement' => 's',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/tnFSW9kdpBopvKNnVPibBNARjpb6uObqrQDhhD0F.jpeg',
            'gig_photo_two' => NULL,
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 1,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-08 12:38:55',
            'updated_at' => '2019-11-10 10:19:25',
            'deleted_at' => NULL,
        ),
        10 => 
        array (
            'id' => 15,
            'user_id' => 22,
            'gig_title' => 'I will design a clean minimalist logo',
            'category' => 1,
            'sub_category' => 1,
            'tags' => 'Gamoing,logo',
            'describe_your_gig' => 'Hello! I\'m Apoorv - I am a professional logo designer. I am specialized in creating clean, modern and effective design solutions. My design style is clean modern and minimalist. In my process of designing logos, I focus on smart and effective ways to design the logo, using simple shapes in logos, making it clean, memorable and eye-catching. I believe a good logo has to be simple, clean and eye-catching. 



Why Choose Me



Continued support after order completion
Unlimited revisions
Quick, Clear and Friendly communication
Provide you many Font/Typeface options and color codes
Money-back guarantee, If you are still not satisfied with the end results.',
            'requirement' => 'Required Rough Design',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/Yqir4oGSICwzIvHw3xdEgcisneRIWJXwPSlaUrBA.jpeg',
            'gig_photo_two' => NULL,
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 1,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-08 12:44:35',
            'updated_at' => '2019-11-10 10:18:26',
            'deleted_at' => NULL,
        ),
        11 => 
        array (
            'id' => 16,
            'user_id' => 536,
            'gig_title' => 'I can design any kind of professional Catalogue. I have 10 years of experience.',
            'category' => 1,
            'sub_category' => 16,
            'tags' => 'Catalogue Design,Brochure Design,Design,Photoshop,Catalogue',
            'describe_your_gig' => 'Catalog is an important part of anything that you do. A good catalogue design can make an excellent expression. We have years of experience is all kinds of digital work.',
            'requirement' => 'Send me if you have any sample design.',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/smS1V1OhOg1WWzovfneLwT8btEdvAgr6v8ATYELO.jpeg',
            'gig_photo_two' => 'uploads/gig-photo/UGKWj41BwDVAn4gEBFiVntsIgu45MG2VIrsosGq1.jpeg',
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 1,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-10 11:54:51',
            'updated_at' => '2019-11-16 10:26:37',
            'deleted_at' => NULL,
        ),
        12 => 
        array (
            'id' => 17,
            'user_id' => 536,
            'gig_title' => 'I can design stunning Flyers that can increase the value of your brand instantly',
            'category' => 1,
            'sub_category' => 9,
            'tags' => 'Flyer Design,Flyer Creation,Flyers',
            'describe_your_gig' => 'Advertising through flyers is the most useful mode of small scale marketing. By using clever concepts and engaging designs, we can help you grasp the attention of your existing and potential customers, allowing your brand to flourish.

Our Services:
FLYERS (Business,Corporate,Party,Event)
BROCHURE (Trifold/Bifold)
POSTCARD
POSTER
MAGAZINE AD  
EBOOK COVER
ADS DESIGN
We offer fast turnaround times, quick response times and a high attention to detail. Our online reviews will prove to you our trustworthiness and professionalism.

We Offer:
✔ High Quality and Unique designs
✔ 24 Hours Express Delivery
✔ Unlimited revisions until you\'re Happy
✔ High-quality (300dpi) JPEG, PDF, AI, PSD and Print Ready files
✔ Professional and friendly customer service

Order now and get your brand new flyer design created in just 12 hours. Choose the SUPER FAST delivery. Please contact before ordering SUPERFAST Delivery gig.

We\'ll not provide any text or images. All content will be provided by the client.',
            'requirement' => 'Send me the design if you have any.',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/sPo1feHsXSvpFaracFw0tcOzuZ6YUJvvyiizK5D2.jpeg',
            'gig_photo_two' => NULL,
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 1,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-10 12:18:06',
            'updated_at' => '2019-11-11 04:25:01',
            'deleted_at' => NULL,
        ),
        13 => 
        array (
            'id' => 18,
            'user_id' => 536,
            'gig_title' => 'I can do stunning Logo Animation.',
            'category' => 4,
            'sub_category' => 75,
            'tags' => 'Logo Animation',
            'describe_your_gig' => 'We have a team of graphics designers and logo animators. We have more than 10 years of experience in these fields and we have worked with many reputed brands.',
            'requirement' => 'Send me the link of the video that you liked.',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/5l6tjnC8uxqu5ycGsB1F3ioB2GUGryQiJyQsERYz.jpeg',
            'gig_photo_two' => NULL,
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 1,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-10 15:59:55',
            'updated_at' => '2019-11-13 02:23:44',
            'deleted_at' => NULL,
        ),
        14 => 
        array (
            'id' => 19,
            'user_id' => 536,
            'gig_title' => 'I will write you sales copy that converts',
            'category' => 3,
            'sub_category' => 57,
            'tags' => 'Sales copy,Copy writing',
            'describe_your_gig' => 'There are so many companies out there who don\'t understand they even NEED copy.

They think it\'s all just web design and pretty pics, and money will come.

No.

Especially if you have any competition whatsoever (and you probably do). 

So just the fact that you know copywriting = easier $ is GREAT.

But there\'s more to it than that.

The more I\'ve studied copywriting as an art and science, the more I realize it really is like mind control. 

There are some pretty crazy studies about the power of suggestibility of words coming out of neuroscience labs.

I know, because I got my Master\'s in psychology from a place that has one of those labs.

Almost nobody who goes to school for their Master\'s in psychology ends up a copywriter.

But here I am!',
            'requirement' => 'Send me a sample writing',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/dOlnX8iS6PEeihi8q0nQGLGY4oAsdlFGsYrkoX5h.jpeg',
            'gig_photo_two' => NULL,
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 2,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-10 16:22:58',
            'updated_at' => '2019-11-13 03:03:55',
            'deleted_at' => NULL,
        ),
        15 => 
        array (
            'id' => 20,
            'user_id' => 537,
            'gig_title' => 'I am really good at writing Sales Copy that sells.',
            'category' => 3,
            'sub_category' => 57,
            'tags' => 'Writing,Sales Copy',
            'describe_your_gig' => 'To best serve you, please contact me before placing your order.

If you\'re here, you\'re either:

starting a business and need killer copywriting to launch your business the right way, or
need some revamping for your current copy because you\'re just not selling as much as you\'d like.

Chances are, you fall into one of the two categories above. If you do, you could take advantage of  savage, cutting-edge copywriting from a team that\'s always testing the limits. I have a multi-disciplined, multi-team approach to copywriting (writers with backgrounds in marketing, business, and psychology) that is rooted in consumer behavior. To put it briefly, I know people and I know the markets.

If you work with me, you\'ll get:

No BS word count limits: Pay-per-hour and combine my one-on-one consultation and copywriting services as you please
Unparalleled customer service
Quick turnaround
The only copywriting service you\'ll ever need!

Still unsure?

My copy is backed by a 100% money-back guarantee. If you don\'t like it, there\'s no risk to you!

Questions? Just ask; I\'m here all day.',
            'requirement' => 'Send me the sample writing.',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/FJrdiAUKLwRVoumMT0tGz90yrGd6BwVJFc1dKBJQ.jpeg',
            'gig_photo_two' => NULL,
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 1,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-13 02:28:33',
            'updated_at' => '2019-11-13 03:04:16',
            'deleted_at' => NULL,
        ),
        16 => 
        array (
            'id' => 21,
            'user_id' => 536,
            'gig_title' => 'I am really good at ranking any site on Google.',
            'category' => 2,
            'sub_category' => 34,
            'tags' => 'SEO,Search Engine Optimization',
            'describe_your_gig' => 'SEO is the most effective way to gain the trust of Google and your visitors. Are you there when your potential clients and customers search for the services and products provided by you?',
            'requirement' => 'Send me the website address.',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/ceFNmlyop3CgRxBwAvdAe4wt9RvDj5sX8SG1QeQS.jpeg',
            'gig_photo_two' => NULL,
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 3,
            'region' => 'Suspension Testing',
            'suspended_till' => '2019-11-18',
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-13 03:28:01',
            'updated_at' => '2019-11-16 10:42:46',
            'deleted_at' => NULL,
        ),
        17 => 
        array (
            'id' => 22,
            'user_id' => 538,
            'gig_title' => 'I can be your Social Media Manager.',
            'category' => 2,
            'sub_category' => 33,
            'tags' => 'Social Media Management,Social Media,Facebook Marketing,Social Media Marketing,Social Media Manager',
            'describe_your_gig' => 'No matter what business you own, you must be on social media – that is crucial. I will post content on your social media platforms. The goal of posts will be to engage your followers on a consistent basis and create more visibility and loyalty to your brand. In a nutshell, rather than you taking the time to manage your brand’s media or hiring a full-time employee to do this, I do it for you!',
            'requirement' => 'Tell me about your business and expectations.',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/BSL5aotmi4X8LdIuez3ICe5szAs6sIllJ5ftAaw7.jpeg',
            'gig_photo_two' => 'uploads/gig-photo/2rLfwOBNCLqwHBUY5IR5MSp4XjuFcl5YRVQSxgPi.jpeg',
            'gig_photo_three' => 'uploads/gig-photo/2yea3Zh90YOzyHSmXTi0MSNKjkID3AszrYzhCqL0.jpeg',
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 1,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-15 07:58:52',
            'updated_at' => '2019-11-16 07:03:53',
            'deleted_at' => NULL,
        ),
        18 => 
        array (
            'id' => 23,
            'user_id' => 538,
            'gig_title' => 'I will write about any topic you request for any audience.',
            'category' => 3,
            'sub_category' => 55,
            'tags' => 'Content writing,Blog Writing',
            'describe_your_gig' => 'I can create exceptional SEO optimized content for in the below-mentioned niches.:
Digital Marketing, Legal, Educational, Current affairs, Health and fitness, Personal Development, Parenting, Product description/ reviews, Blog and Article writing, etc.',
            'requirement' => 'Please share any special requirements at the start.',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/dWtusCAyOPkShvI2iCr9mDxSTmJQRuSmQewUDK2a.jpeg',
            'gig_photo_two' => 'uploads/gig-photo/tkj1Ruu1lKQ6TH0Bk0qyqpXPeohpc7l5UJ0WH4uq.jpeg',
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 1,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-15 08:40:31',
            'updated_at' => '2019-11-16 07:25:12',
            'deleted_at' => NULL,
        ),
        19 => 
        array (
            'id' => 24,
            'user_id' => 539,
            'gig_title' => 'I can be your content writer.',
            'category' => 2,
            'sub_category' => 35,
            'tags' => 'Content writing,SEO writing',
            'describe_your_gig' => 'Niche
Digital Marketing, Legal, Educational, Current affairs, Health and fitness, Personal Development, Parenting, Product description/ reviews, Blog and Article writing, etc.',
            'requirement' => 'Kindly share all the requirements in advance.',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/KvhhPxilSDhT7cteDBhdGqsHN9M4NitDiEczl5lJ.jpeg',
            'gig_photo_two' => 'uploads/gig-photo/J7Y0z2YuP4gJURU0tG82x3XhjAkslFVlau3xfiuz.jpeg',
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 1,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-16 06:46:29',
            'updated_at' => '2019-11-16 09:34:38',
            'deleted_at' => NULL,
        ),
        20 => 
        array (
            'id' => 25,
            'user_id' => 539,
            'gig_title' => 'I can be your Social Media Manager',
            'category' => 2,
            'sub_category' => 33,
            'tags' => 'Social Media,Marketing,social Media,Facebook Marketing',
            'describe_your_gig' => 'I\'m a Digital Marketing with exceptional blog writing, and social media marketing skills. With over 5 years of marketing experience.',
            'requirement' => 'Kidly share the details in advance.',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/OVon5OUKw2whGPndU2Q9xnvPm6mpFHSwjw6qvk0n.jpeg',
            'gig_photo_two' => 'uploads/gig-photo/Y7nYr5T0pHXYuGghpnLX9MZfDoD9p79GVpFvP4oY.png',
            'gig_photo_three' => 'uploads/gig-photo/RSidV4JV7kJe6xYGwQFyaVgr2sAlzh4kR4HeCofm.png',
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 3,
            'region' => 'dddd',
            'suspended_till' => '2019-11-18',
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-16 07:01:53',
            'updated_at' => '2019-11-16 11:45:35',
            'deleted_at' => NULL,
        ),
        21 => 
        array (
            'id' => 26,
            'user_id' => 538,
            'gig_title' => 'I can be your digital marketer',
            'category' => 2,
            'sub_category' => 50,
            'tags' => 'digital marketing',
            'describe_your_gig' => NULL,
            'requirement' => NULL,
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => NULL,
            'gig_photo_two' => NULL,
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 0,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 0,
            'widget_one' => 1,
            'widget_two' => NULL,
            'widget_three' => NULL,
            'widget_four' => NULL,
            'widget_five' => NULL,
            'clicks' => NULL,
            'created_at' => '2019-11-16 07:30:22',
            'updated_at' => '2019-11-16 07:30:22',
            'deleted_at' => NULL,
        ),
        22 => 
        array (
            'id' => 27,
            'user_id' => 536,
            'gig_title' => 'I can help you with Search Engine Marketing.',
            'category' => 2,
            'sub_category' => 39,
            'tags' => 'SEM,Internet Marketing',
            'describe_your_gig' => 'Search Engine Marketing or SEM is the most effective way of promoting your brand and getting tons of new visitors for Free.',
            'requirement' => 'No Requirements.',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/kJev2iVM3umj69DsEPCeUtnCeX2Kb8izX1TsT2kt.jpeg',
            'gig_photo_two' => NULL,
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 1,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-19 07:07:42',
            'updated_at' => '2019-11-19 07:32:07',
            'deleted_at' => NULL,
        ),
        23 => 
        array (
            'id' => 28,
            'user_id' => 536,
            'gig_title' => 'I am Really Good at all kinds of Video Marketing.',
            'category' => 2,
            'sub_category' => 36,
            'tags' => 'Video Marketing,Digital Marketing',
            'describe_your_gig' => 'Get your videos as the Highest ranking. Have a lot of active fans worldwide including USA, UK, and other top countries. Spread your videos among all interested fans on social affiliated media

^ Boost your video popularity and reputation
^ Build Powerful SEO Backlinks to Rank Your YouTube Video (Extra)
^ V. Ranking high competition 8 blog network
^ Embeds On High (7-9) PR Web 2 Properties
^ This will raise your video´s credibility on search engines.
^ All orders will be processed in 1-2 hours or less',
            'requirement' => 'Sample Video',
            'answer_type' => NULL,
            'is_mandatory' => 0,
            'gig_photo_one' => 'uploads/gig-photo/UcE0zh5mgQ5Zo6cKJ0q4bqGVpIbGdiqfxChDhbHR.jpeg',
            'gig_photo_two' => NULL,
            'gig_photo_three' => NULL,
            'gig_video' => NULL,
            'gig_pdf_one' => NULL,
            'gig_pdf_two' => NULL,
            'is_status' => 1,
            'region' => NULL,
            'suspended_till' => NULL,
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
            'clicks' => NULL,
            'created_at' => '2019-11-19 07:36:15',
            'updated_at' => '2019-11-19 07:59:36',
            'deleted_at' => NULL,
        ),
    ));
        
        
    }
}