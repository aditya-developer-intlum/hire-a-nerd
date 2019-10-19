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
                'id' => 32,
                'user_id' => 18,
                'gig_title' => 'I ma relay Good',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'fg,gg,php',
                'describe_your_gig' => 'gfdgdfg',
                'requirement' => 'dsffsdjfjsdklfjklsedfj',
                'answer_type' => '3',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/lbT53yzzkpnWTqj35AsqQ6qcHnYQPWgPu3mPgQug.jpeg',
                'gig_photo_two' => 'uploads/gig-photo/ziTLSNdJb0hxm7CdIh247vU523YlfhiymVcmy5oP.jpeg',
                'gig_photo_three' => 'uploads/gig-photo/BZHRz6phGJ5BWxz73ct0MbukTpoGYqQ8gfWLvWiC.jpeg',
                'gig_video' => 'uploads/gig-video/SsyihTENKCG3CNoWJHZ8h5JNOMi9WbgF0twWhca4.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/fcnhq9Y15WSyp1ObkQqmBliDY9KA5bJ8JkL4JjKG.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/NL6oK35CvH6lF1OKkU2YYwT4AJ2hWdFPHEsR0aiy.pdf',
                'created_at' => '2019-06-20 12:32:38',
                'updated_at' => '2019-06-21 08:32:53',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            1 => 
            array (
                'id' => 33,
                'user_id' => 18,
                'gig_title' => 'Aditya',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'sdfysdufuiyfsdiudsghf',
                'describe_your_gig' => 'ghftghgfhgfhgf',
                'requirement' => 'gfdgdfgdfg',
                'answer_type' => '1',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/Ix7rPETI4WwqfhtAQO1afx0E8KozRNmzvGUAavRy.png',
                'gig_photo_two' => 'uploads/gig-photo/6XtuJ3XLSqhhPSoqdHg28arjyHEJRZZaEMWPWFWV.png',
                'gig_photo_three' => 'uploads/gig-photo/VtkWNFi7Gcpnt0WdN15q2WBVU3VsNisL0NT4PXix.png',
                'gig_video' => 'uploads/gig-video/3ST8oVc0mxIOahYSplO9AYGpCUDnVoYp2viQt8yl.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/DgPiAG9T8rQih4vxdceWJGDZVp5Fhyv9Ka5GKkpM.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/y1blTf2xVyPQfIa3nYMQBA61jRvE78UWj6p99WzK.pdf',
                'created_at' => '2019-06-21 09:46:44',
                'updated_at' => '2019-06-21 11:20:09',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            2 => 
            array (
                'id' => 34,
                'user_id' => 18,
                'gig_title' => 'sghosfjgoik',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'fgf,fgdfg,dsfdsg,fg,hgfh,gfh',
                'describe_your_gig' => 'gdfuogiufoi',
                'requirement' => 'hgfhgfh',
                'answer_type' => '3',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/BkuXPrEfVZIT4wRqM8Kjflc75GnTIsrx49p9TcOc.png',
                'gig_photo_two' => 'uploads/gig-photo/IIul22WPSVbDcoVUvMpp9EGmNhx2aNwgp8rZxL2C.jpeg',
                'gig_photo_three' => 'uploads/gig-photo/W2izSnwVjKsAGnK0HKDrhFzGsDgThu1UC2Ay0v7X.png',
                'gig_video' => 'uploads/gig-video/xpQ6xvAtx3pqNOyYSqU3d1cKExbL1HxUhrVnyf10.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/X1InLq91ww3r68827p6TcDh1BaQaMY2HUxN6bYDm.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/gEKLoGoJE43ngfwbpIE586QkI7DSXLOS1vFkHEtV.pdf',
                'created_at' => '2019-06-21 11:21:54',
                'updated_at' => '2019-06-21 11:25:15',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            3 => 
            array (
                'id' => 35,
                'user_id' => 18,
                'gig_title' => 'I Will Do Laravel Tasks Very Quickly',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'Laravel,Best Laravel Developer,Web Application,Full Stack Developer,Developer',
                'describe_your_gig' => 'Hello, Welcome to my Gig! If you want to create the website in Laravel or If your website is suffering from any issues in coding level then you are at right Gig. I will resolve your laravel website very quickly man.
Client satisfaction and quality services are my foremost priorities.

Laravel  Expertise:
1. Laravel 5.x
2. Queues, Jobs, background workers and events
3. Error handling
4. Custom middle-wares in Laravel
5. REST APIs in Laravel]
6. Laravel Echo and real time communication

You can hire me for:

Laravel website app development, optimization and bug fixing
Micro-services, dockers
Laravel web app development, customization and bug fixing.
Payment gateway integration in Laravel PHP framework
REST API creation in Laravel
Deploy Laravel web application on the cloud AWS, Digital Ocean, Google Cloud

Kindly message me before putting an order. 

You chose Laravel, I love Laravel, thank you! 
Laravel PHP developer is fun. PHP Developer is World. PHP Developer is an engineer. PHP Developer is a guru. PHP developer, PHP Developer. So I am a PHP Developer. If you are looking for a PHP Developer you just found a PHP Developer, So I am a cool PHP Developer.',
                'requirement' => 'Project Document to be submitted with step by step Explanation.
Provide Server Detail',
                'answer_type' => '3',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/XSxMX2Nm5dBfEuMEzrky71dWiKPjbnwI4BGXmvTV.webp',
                'gig_photo_two' => 'uploads/gig-photo/M5GBgy7086T6afprtBw5XXOWRcOmrvTIBNVCeK9c.webp',
                'gig_photo_three' => 'uploads/gig-photo/btEe5IlEtpL6rqK89FO6NgY9xelKMcBkJLuLCvBM.jpeg',
                'gig_video' => 'uploads/gig-video/3SXBeJimpn0ZzO5o7cgLuexctxodPFZ7d1pqQVgd.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/A05mxxcI2F1MpNcJYnwZDhYsWhgZGGbWYU91i1IS.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/3QJnh5UAT2LcX3VUhn1zvr0brHo9Gw2ZHUKhAxzR.pdf',
                'created_at' => '2019-06-21 12:19:34',
                'updated_at' => '2019-06-26 05:32:06',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            4 => 
            array (
                'id' => 36,
                'user_id' => 18,
                'gig_title' => 'I Will Do Laravel Tasks Very Quickly',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'Laravel,Best Laravel Developer,Web Application,Full Stack Developer,Developer',
                'describe_your_gig' => 'Hello, Welcome to my Gig! If you want to create the website in Laravel or If your website is suffering from any issues in coding level then you are at right Gig. I will resolve your laravel website very quickly man.
Client satisfaction and quality services are my foremost priorities.

Laravel  Expertise:
1. Laravel 5.x
2. Queues, Jobs, background workers and events
3. Error handling
4. Custom middle-wares in Laravel
5. REST APIs in Laravel]
6. Laravel Echo and real time communication

You can hire me for:

Laravel website app development, optimization and bug fixing
Micro-services, dockers
Laravel web app development, customization and bug fixing.
Payment gateway integration in Laravel PHP framework
REST API creation in Laravel
Deploy Laravel web application on the cloud AWS, Digital Ocean, Google Cloud

Kindly message me before putting an order. 

You chose Laravel, I love Laravel, thank you! 
Laravel PHP developer is fun. PHP Developer is World. PHP Developer is an engineer. PHP Developer is a guru. PHP developer, PHP Developer. So I am a PHP Developer. If you are looking for a PHP Developer you just found a PHP Developer, So I am a cool PHP Developer.',
                'requirement' => 'Project Document to be submitted with step by step Explanation.
Provide Server Detail',
                'answer_type' => '3',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/XSxMX2Nm5dBfEuMEzrky71dWiKPjbnwI4BGXmvTV.webp',
                'gig_photo_two' => 'uploads/gig-photo/M5GBgy7086T6afprtBw5XXOWRcOmrvTIBNVCeK9c.webp',
                'gig_photo_three' => 'uploads/gig-photo/btEe5IlEtpL6rqK89FO6NgY9xelKMcBkJLuLCvBM.jpeg',
                'gig_video' => 'uploads/gig-video/3SXBeJimpn0ZzO5o7cgLuexctxodPFZ7d1pqQVgd.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/A05mxxcI2F1MpNcJYnwZDhYsWhgZGGbWYU91i1IS.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/3QJnh5UAT2LcX3VUhn1zvr0brHo9Gw2ZHUKhAxzR.pdf',
                'created_at' => '2019-06-21 12:19:34',
                'updated_at' => '2019-06-26 05:32:06',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            5 => 
            array (
                'id' => 37,
                'user_id' => 18,
                'gig_title' => 'I Will Do Laravel Tasks Very Quickly',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'Laravel,Best Laravel Developer,Web Application,Full Stack Developer,Developer',
                'describe_your_gig' => 'Hello, Welcome to my Gig! If you want to create the website in Laravel or If your website is suffering from any issues in coding level then you are at right Gig. I will resolve your laravel website very quickly man.
Client satisfaction and quality services are my foremost priorities.

Laravel  Expertise:
1. Laravel 5.x
2. Queues, Jobs, background workers and events
3. Error handling
4. Custom middle-wares in Laravel
5. REST APIs in Laravel]
6. Laravel Echo and real time communication

You can hire me for:

Laravel website app development, optimization and bug fixing
Micro-services, dockers
Laravel web app development, customization and bug fixing.
Payment gateway integration in Laravel PHP framework
REST API creation in Laravel
Deploy Laravel web application on the cloud AWS, Digital Ocean, Google Cloud

Kindly message me before putting an order. 

You chose Laravel, I love Laravel, thank you! 
Laravel PHP developer is fun. PHP Developer is World. PHP Developer is an engineer. PHP Developer is a guru. PHP developer, PHP Developer. So I am a PHP Developer. If you are looking for a PHP Developer you just found a PHP Developer, So I am a cool PHP Developer.',
                'requirement' => 'Project Document to be submitted with step by step Explanation.
Provide Server Detail',
                'answer_type' => '3',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/XSxMX2Nm5dBfEuMEzrky71dWiKPjbnwI4BGXmvTV.webp',
                'gig_photo_two' => 'uploads/gig-photo/M5GBgy7086T6afprtBw5XXOWRcOmrvTIBNVCeK9c.webp',
                'gig_photo_three' => 'uploads/gig-photo/btEe5IlEtpL6rqK89FO6NgY9xelKMcBkJLuLCvBM.jpeg',
                'gig_video' => 'uploads/gig-video/3SXBeJimpn0ZzO5o7cgLuexctxodPFZ7d1pqQVgd.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/A05mxxcI2F1MpNcJYnwZDhYsWhgZGGbWYU91i1IS.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/3QJnh5UAT2LcX3VUhn1zvr0brHo9Gw2ZHUKhAxzR.pdf',
                'created_at' => '2019-06-21 12:19:34',
                'updated_at' => '2019-06-26 05:32:06',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            6 => 
            array (
                'id' => 38,
                'user_id' => 18,
                'gig_title' => 'I Will Do Laravel Tasks Very Quickly',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'Laravel,Best Laravel Developer,Web Application,Full Stack Developer,Developer',
                'describe_your_gig' => 'Hello, Welcome to my Gig! If you want to create the website in Laravel or If your website is suffering from any issues in coding level then you are at right Gig. I will resolve your laravel website very quickly man.
Client satisfaction and quality services are my foremost priorities.

Laravel  Expertise:
1. Laravel 5.x
2. Queues, Jobs, background workers and events
3. Error handling
4. Custom middle-wares in Laravel
5. REST APIs in Laravel]
6. Laravel Echo and real time communication

You can hire me for:

Laravel website app development, optimization and bug fixing
Micro-services, dockers
Laravel web app development, customization and bug fixing.
Payment gateway integration in Laravel PHP framework
REST API creation in Laravel
Deploy Laravel web application on the cloud AWS, Digital Ocean, Google Cloud

Kindly message me before putting an order. 

You chose Laravel, I love Laravel, thank you! 
Laravel PHP developer is fun. PHP Developer is World. PHP Developer is an engineer. PHP Developer is a guru. PHP developer, PHP Developer. So I am a PHP Developer. If you are looking for a PHP Developer you just found a PHP Developer, So I am a cool PHP Developer.',
                'requirement' => 'Project Document to be submitted with step by step Explanation.
Provide Server Detail',
                'answer_type' => '3',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/XSxMX2Nm5dBfEuMEzrky71dWiKPjbnwI4BGXmvTV.webp',
                'gig_photo_two' => 'uploads/gig-photo/M5GBgy7086T6afprtBw5XXOWRcOmrvTIBNVCeK9c.webp',
                'gig_photo_three' => 'uploads/gig-photo/btEe5IlEtpL6rqK89FO6NgY9xelKMcBkJLuLCvBM.jpeg',
                'gig_video' => 'uploads/gig-video/3SXBeJimpn0ZzO5o7cgLuexctxodPFZ7d1pqQVgd.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/A05mxxcI2F1MpNcJYnwZDhYsWhgZGGbWYU91i1IS.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/3QJnh5UAT2LcX3VUhn1zvr0brHo9Gw2ZHUKhAxzR.pdf',
                'created_at' => '2019-06-21 12:19:34',
                'updated_at' => '2019-06-26 05:32:06',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            7 => 
            array (
                'id' => 39,
                'user_id' => 18,
                'gig_title' => 'I Will Do Laravel Tasks Very Quickly',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'Laravel,Best Laravel Developer,Web Application,Full Stack Developer,Developer',
                'describe_your_gig' => 'Hello, Welcome to my Gig! If you want to create the website in Laravel or If your website is suffering from any issues in coding level then you are at right Gig. I will resolve your laravel website very quickly man.
Client satisfaction and quality services are my foremost priorities.

Laravel  Expertise:
1. Laravel 5.x
2. Queues, Jobs, background workers and events
3. Error handling
4. Custom middle-wares in Laravel
5. REST APIs in Laravel]
6. Laravel Echo and real time communication

You can hire me for:

Laravel website app development, optimization and bug fixing
Micro-services, dockers
Laravel web app development, customization and bug fixing.
Payment gateway integration in Laravel PHP framework
REST API creation in Laravel
Deploy Laravel web application on the cloud AWS, Digital Ocean, Google Cloud

Kindly message me before putting an order. 

You chose Laravel, I love Laravel, thank you! 
Laravel PHP developer is fun. PHP Developer is World. PHP Developer is an engineer. PHP Developer is a guru. PHP developer, PHP Developer. So I am a PHP Developer. If you are looking for a PHP Developer you just found a PHP Developer, So I am a cool PHP Developer.',
                'requirement' => 'Project Document to be submitted with step by step Explanation.
Provide Server Detail',
                'answer_type' => '3',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/XSxMX2Nm5dBfEuMEzrky71dWiKPjbnwI4BGXmvTV.webp',
                'gig_photo_two' => 'uploads/gig-photo/M5GBgy7086T6afprtBw5XXOWRcOmrvTIBNVCeK9c.webp',
                'gig_photo_three' => 'uploads/gig-photo/btEe5IlEtpL6rqK89FO6NgY9xelKMcBkJLuLCvBM.jpeg',
                'gig_video' => 'uploads/gig-video/3SXBeJimpn0ZzO5o7cgLuexctxodPFZ7d1pqQVgd.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/A05mxxcI2F1MpNcJYnwZDhYsWhgZGGbWYU91i1IS.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/3QJnh5UAT2LcX3VUhn1zvr0brHo9Gw2ZHUKhAxzR.pdf',
                'created_at' => '2019-06-21 12:19:34',
                'updated_at' => '2019-06-26 05:32:06',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            8 => 
            array (
                'id' => 40,
                'user_id' => 18,
                'gig_title' => 'I Will Do Laravel Tasks Very Quickly',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'Laravel,Best Laravel Developer,Web Application,Full Stack Developer,Developer',
                'describe_your_gig' => 'Hello, Welcome to my Gig! If you want to create the website in Laravel or If your website is suffering from any issues in coding level then you are at right Gig. I will resolve your laravel website very quickly man.
Client satisfaction and quality services are my foremost priorities.

Laravel  Expertise:
1. Laravel 5.x
2. Queues, Jobs, background workers and events
3. Error handling
4. Custom middle-wares in Laravel
5. REST APIs in Laravel]
6. Laravel Echo and real time communication

You can hire me for:

Laravel website app development, optimization and bug fixing
Micro-services, dockers
Laravel web app development, customization and bug fixing.
Payment gateway integration in Laravel PHP framework
REST API creation in Laravel
Deploy Laravel web application on the cloud AWS, Digital Ocean, Google Cloud

Kindly message me before putting an order. 

You chose Laravel, I love Laravel, thank you! 
Laravel PHP developer is fun. PHP Developer is World. PHP Developer is an engineer. PHP Developer is a guru. PHP developer, PHP Developer. So I am a PHP Developer. If you are looking for a PHP Developer you just found a PHP Developer, So I am a cool PHP Developer.',
                'requirement' => 'Project Document to be submitted with step by step Explanation.
Provide Server Detail',
                'answer_type' => '3',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/XSxMX2Nm5dBfEuMEzrky71dWiKPjbnwI4BGXmvTV.webp',
                'gig_photo_two' => 'uploads/gig-photo/M5GBgy7086T6afprtBw5XXOWRcOmrvTIBNVCeK9c.webp',
                'gig_photo_three' => 'uploads/gig-photo/btEe5IlEtpL6rqK89FO6NgY9xelKMcBkJLuLCvBM.jpeg',
                'gig_video' => 'uploads/gig-video/3SXBeJimpn0ZzO5o7cgLuexctxodPFZ7d1pqQVgd.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/A05mxxcI2F1MpNcJYnwZDhYsWhgZGGbWYU91i1IS.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/3QJnh5UAT2LcX3VUhn1zvr0brHo9Gw2ZHUKhAxzR.pdf',
                'created_at' => '2019-06-21 12:19:34',
                'updated_at' => '2019-06-26 05:32:06',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            9 => 
            array (
                'id' => 41,
                'user_id' => 18,
                'gig_title' => 'I Will Do Laravel Tasks Very Quickly',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'Laravel,Best Laravel Developer,Web Application,Full Stack Developer,Developer',
                'describe_your_gig' => 'Hello, Welcome to my Gig! If you want to create the website in Laravel or If your website is suffering from any issues in coding level then you are at right Gig. I will resolve your laravel website very quickly man.
Client satisfaction and quality services are my foremost priorities.

Laravel  Expertise:
1. Laravel 5.x
2. Queues, Jobs, background workers and events
3. Error handling
4. Custom middle-wares in Laravel
5. REST APIs in Laravel]
6. Laravel Echo and real time communication

You can hire me for:

Laravel website app development, optimization and bug fixing
Micro-services, dockers
Laravel web app development, customization and bug fixing.
Payment gateway integration in Laravel PHP framework
REST API creation in Laravel
Deploy Laravel web application on the cloud AWS, Digital Ocean, Google Cloud

Kindly message me before putting an order. 

You chose Laravel, I love Laravel, thank you! 
Laravel PHP developer is fun. PHP Developer is World. PHP Developer is an engineer. PHP Developer is a guru. PHP developer, PHP Developer. So I am a PHP Developer. If you are looking for a PHP Developer you just found a PHP Developer, So I am a cool PHP Developer.',
                'requirement' => 'Project Document to be submitted with step by step Explanation.
Provide Server Detail',
                'answer_type' => '3',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/XSxMX2Nm5dBfEuMEzrky71dWiKPjbnwI4BGXmvTV.webp',
                'gig_photo_two' => 'uploads/gig-photo/M5GBgy7086T6afprtBw5XXOWRcOmrvTIBNVCeK9c.webp',
                'gig_photo_three' => 'uploads/gig-photo/btEe5IlEtpL6rqK89FO6NgY9xelKMcBkJLuLCvBM.jpeg',
                'gig_video' => 'uploads/gig-video/3SXBeJimpn0ZzO5o7cgLuexctxodPFZ7d1pqQVgd.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/A05mxxcI2F1MpNcJYnwZDhYsWhgZGGbWYU91i1IS.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/3QJnh5UAT2LcX3VUhn1zvr0brHo9Gw2ZHUKhAxzR.pdf',
                'created_at' => '2019-06-21 12:19:34',
                'updated_at' => '2019-06-26 05:32:06',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            10 => 
            array (
                'id' => 42,
                'user_id' => 18,
                'gig_title' => 'I Will Do Laravel Tasks Very Quickly',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'Laravel,Best Laravel Developer,Web Application,Full Stack Developer,Developer',
                'describe_your_gig' => 'Hello, Welcome to my Gig! If you want to create the website in Laravel or If your website is suffering from any issues in coding level then you are at right Gig. I will resolve your laravel website very quickly man.
Client satisfaction and quality services are my foremost priorities.

Laravel  Expertise:
1. Laravel 5.x
2. Queues, Jobs, background workers and events
3. Error handling
4. Custom middle-wares in Laravel
5. REST APIs in Laravel]
6. Laravel Echo and real time communication

You can hire me for:

Laravel website app development, optimization and bug fixing
Micro-services, dockers
Laravel web app development, customization and bug fixing.
Payment gateway integration in Laravel PHP framework
REST API creation in Laravel
Deploy Laravel web application on the cloud AWS, Digital Ocean, Google Cloud

Kindly message me before putting an order. 

You chose Laravel, I love Laravel, thank you! 
Laravel PHP developer is fun. PHP Developer is World. PHP Developer is an engineer. PHP Developer is a guru. PHP developer, PHP Developer. So I am a PHP Developer. If you are looking for a PHP Developer you just found a PHP Developer, So I am a cool PHP Developer.',
                'requirement' => 'Project Document to be submitted with step by step Explanation.
Provide Server Detail',
                'answer_type' => '3',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/XSxMX2Nm5dBfEuMEzrky71dWiKPjbnwI4BGXmvTV.webp',
                'gig_photo_two' => 'uploads/gig-photo/M5GBgy7086T6afprtBw5XXOWRcOmrvTIBNVCeK9c.webp',
                'gig_photo_three' => 'uploads/gig-photo/btEe5IlEtpL6rqK89FO6NgY9xelKMcBkJLuLCvBM.jpeg',
                'gig_video' => 'uploads/gig-video/3SXBeJimpn0ZzO5o7cgLuexctxodPFZ7d1pqQVgd.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/A05mxxcI2F1MpNcJYnwZDhYsWhgZGGbWYU91i1IS.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/3QJnh5UAT2LcX3VUhn1zvr0brHo9Gw2ZHUKhAxzR.pdf',
                'created_at' => '2019-06-21 12:19:34',
                'updated_at' => '2019-06-26 05:32:06',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            11 => 
            array (
                'id' => 43,
                'user_id' => 18,
                'gig_title' => 'I Will Do Laravel Tasks Very Quickly',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'Laravel,Best Laravel Developer,Web Application,Full Stack Developer,Developer',
                'describe_your_gig' => 'Hello, Welcome to my Gig! If you want to create the website in Laravel or If your website is suffering from any issues in coding level then you are at right Gig. I will resolve your laravel website very quickly man.
Client satisfaction and quality services are my foremost priorities.

Laravel  Expertise:
1. Laravel 5.x
2. Queues, Jobs, background workers and events
3. Error handling
4. Custom middle-wares in Laravel
5. REST APIs in Laravel]
6. Laravel Echo and real time communication

You can hire me for:

Laravel website app development, optimization and bug fixing
Micro-services, dockers
Laravel web app development, customization and bug fixing.
Payment gateway integration in Laravel PHP framework
REST API creation in Laravel
Deploy Laravel web application on the cloud AWS, Digital Ocean, Google Cloud

Kindly message me before putting an order. 

You chose Laravel, I love Laravel, thank you! 
Laravel PHP developer is fun. PHP Developer is World. PHP Developer is an engineer. PHP Developer is a guru. PHP developer, PHP Developer. So I am a PHP Developer. If you are looking for a PHP Developer you just found a PHP Developer, So I am a cool PHP Developer.',
                'requirement' => 'Project Document to be submitted with step by step Explanation.
Provide Server Detail',
                'answer_type' => '3',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/XSxMX2Nm5dBfEuMEzrky71dWiKPjbnwI4BGXmvTV.webp',
                'gig_photo_two' => 'uploads/gig-photo/M5GBgy7086T6afprtBw5XXOWRcOmrvTIBNVCeK9c.webp',
                'gig_photo_three' => 'uploads/gig-photo/btEe5IlEtpL6rqK89FO6NgY9xelKMcBkJLuLCvBM.jpeg',
                'gig_video' => 'uploads/gig-video/3SXBeJimpn0ZzO5o7cgLuexctxodPFZ7d1pqQVgd.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/A05mxxcI2F1MpNcJYnwZDhYsWhgZGGbWYU91i1IS.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/3QJnh5UAT2LcX3VUhn1zvr0brHo9Gw2ZHUKhAxzR.pdf',
                'created_at' => '2019-06-21 12:19:34',
                'updated_at' => '2019-06-26 05:32:06',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            12 => 
            array (
                'id' => 44,
                'user_id' => 18,
                'gig_title' => 'I Will Do Laravel Tasks Very Quickly',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'Laravel,Best Laravel Developer,Web Application,Full Stack Developer,Developer',
                'describe_your_gig' => 'Hello, Welcome to my Gig! If you want to create the website in Laravel or If your website is suffering from any issues in coding level then you are at right Gig. I will resolve your laravel website very quickly man.
Client satisfaction and quality services are my foremost priorities.

Laravel  Expertise:
1. Laravel 5.x
2. Queues, Jobs, background workers and events
3. Error handling
4. Custom middle-wares in Laravel
5. REST APIs in Laravel]
6. Laravel Echo and real time communication

You can hire me for:

Laravel website app development, optimization and bug fixing
Micro-services, dockers
Laravel web app development, customization and bug fixing.
Payment gateway integration in Laravel PHP framework
REST API creation in Laravel
Deploy Laravel web application on the cloud AWS, Digital Ocean, Google Cloud

Kindly message me before putting an order. 

You chose Laravel, I love Laravel, thank you! 
Laravel PHP developer is fun. PHP Developer is World. PHP Developer is an engineer. PHP Developer is a guru. PHP developer, PHP Developer. So I am a PHP Developer. If you are looking for a PHP Developer you just found a PHP Developer, So I am a cool PHP Developer.',
                'requirement' => 'Project Document to be submitted with step by step Explanation.
Provide Server Detail',
                'answer_type' => '3',
                'is_mandatory' => 1,
                'gig_photo_one' => 'uploads/gig-photo/XSxMX2Nm5dBfEuMEzrky71dWiKPjbnwI4BGXmvTV.webp',
                'gig_photo_two' => 'uploads/gig-photo/M5GBgy7086T6afprtBw5XXOWRcOmrvTIBNVCeK9c.webp',
                'gig_photo_three' => 'uploads/gig-photo/btEe5IlEtpL6rqK89FO6NgY9xelKMcBkJLuLCvBM.jpeg',
                'gig_video' => 'uploads/gig-video/3SXBeJimpn0ZzO5o7cgLuexctxodPFZ7d1pqQVgd.mp4',
                'gig_pdf_one' => 'uploads/gig-pdf/A05mxxcI2F1MpNcJYnwZDhYsWhgZGGbWYU91i1IS.pdf',
                'gig_pdf_two' => 'uploads/gig-pdf/3QJnh5UAT2LcX3VUhn1zvr0brHo9Gw2ZHUKhAxzR.pdf',
                'created_at' => '2019-06-21 12:19:34',
                'updated_at' => '2019-06-26 05:32:06',
                'status' => 1,
                'widget_one' => 1,
                'widget_two' => 1,
                'widget_three' => 1,
                'widget_four' => 1,
                'widget_five' => 1,
            ),
            13 => 
            array (
                'id' => 45,
                'user_id' => 18,
                'gig_title' => 'I Will Design 2 Minimalist Logo Design In 24 Hours',
                'category' => 1,
                'sub_category' => 1,
                'tags' => 'logo,logo1,logo2,logo3,logo4',
                'describe_your_gig' => 'Are you looking for Minimal logos? Look No further!

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

Minimalist Logo | Minimal | Professional | Modern | Text | Vintage | Badge | Hand drawn | Feminine | Signature | Custom Logo Design



Get free consultation.

Sounds Interesting? Let\'s have a word!

Always Happy to help ! Order a gig now :)',
            'requirement' => 'Nothing Required',
            'answer_type' => '2',
            'is_mandatory' => 1,
            'gig_photo_one' => 'uploads/gig-photo/02AF1Rv5VhS4jdY6g6NOViHaosODa5Wi4XUUldqa.webp',
            'gig_photo_two' => 'uploads/gig-photo/yQx2ILRGiQjEFHdc30A7XHrRufpZlaYZ9O32XXxE.webp',
            'gig_photo_three' => 'uploads/gig-photo/dg7CceaTsrXtpiuhwtn5B2nLPpuxxLDtMb2B1afo.jpeg',
            'gig_video' => 'uploads/gig-video/8K1SwLqeGWrD1lwNxoDP9PMauA1fTRzmA6vB3pvf.mp4',
            'gig_pdf_one' => 'uploads/gig-pdf/LzlsaL50VA91kBTItIdpx8JQ3B1imYgy3SHiCc86.pdf',
            'gig_pdf_two' => 'uploads/gig-pdf/T4N5EnR7dEIqNipi8CFpmlOlzxPHCaXUgYrQqtPv.pdf',
            'created_at' => '2019-06-27 08:25:39',
            'updated_at' => '2019-06-27 09:50:15',
            'status' => 1,
            'widget_one' => 1,
            'widget_two' => 1,
            'widget_three' => 1,
            'widget_four' => 1,
            'widget_five' => 1,
        ),
        14 => 
        array (
            'id' => 46,
            'user_id' => 18,
            'gig_title' => 'dddddddddddddddddddddddddddddddddddddddddddddddddddddd',
            'category' => 1,
            'sub_category' => 1,
            'tags' => 'asdf,asd,sad,sadsad,sadasd',
            'describe_your_gig' => '',
            'requirement' => '',
            'answer_type' => '',
            'is_mandatory' => 0,
            'gig_photo_one' => '',
            'gig_photo_two' => '',
            'gig_photo_three' => '',
            'gig_video' => '',
            'gig_pdf_one' => '',
            'gig_pdf_two' => '',
            'created_at' => '2019-07-04 05:44:42',
            'updated_at' => '2019-07-04 12:44:36',
            'status' => 0,
            'widget_one' => 1,
            'widget_two' => 0,
            'widget_three' => 0,
            'widget_four' => 0,
            'widget_five' => 0,
        ),
        15 => 
        array (
            'id' => 47,
            'user_id' => 21,
            'gig_title' => 'dsfdf',
            'category' => 1,
            'sub_category' => 2,
            'tags' => 'dff',
            'describe_your_gig' => '',
            'requirement' => '',
            'answer_type' => '',
            'is_mandatory' => 0,
            'gig_photo_one' => '',
            'gig_photo_two' => '',
            'gig_photo_three' => '',
            'gig_video' => '',
            'gig_pdf_one' => '',
            'gig_pdf_two' => '',
            'created_at' => '2019-07-05 04:57:30',
            'updated_at' => '2019-07-05 05:01:10',
            'status' => 0,
            'widget_one' => 1,
            'widget_two' => 0,
            'widget_three' => 0,
            'widget_four' => 0,
            'widget_five' => 0,
        ),
    ));
        
        
    }
}