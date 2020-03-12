<?php

use Illuminate\Database\Seeder;

class SubMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_menu')->delete();
        
        \DB::table('sub_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => '1',
                'name' => 'Logo Design',
                'slug' => 'logo-design',
                'is_active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => '1',
                'name' => 'Brand Style Guides',
                'slug' => 'brand-style-guides',
                'is_active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => '1',
                'name' => 'Game Design',
                'slug' => 'game-design',
                'is_active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => '1',
                'name' => 'Graphics for Streamers',
                'slug' => 'graphics-for-streamers',
                'is_active' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => '1',
                'name' => 'Business Cards & Stationery',
                'slug' => 'business-cards-stationery',
                'is_active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => '1',
                'name' => 'Illustration',
                'slug' => 'illustration',
                'is_active' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => '1',
                'name' => 'Brochure Design',
                'slug' => 'brochure-design',
                'is_active' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => '1',
                'name' => 'Poster Design',
                'slug' => 'poster-design',
                'is_active' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => '1',
                'name' => 'Flyer Design',
                'slug' => 'flyer-design',
                'is_active' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => '1',
                'name' => 'Book & Album Covers',
                'slug' => 'book-album-covers',
                'is_active' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => '1',
                'name' => 'Packaging Design',
                'slug' => 'packaging-design',
                'is_active' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => '1',
                'name' => 'Storyboards',
                'slug' => 'storyboards',
                'is_active' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => '1',
                'name' => 'Web & Mobile Design',
                'slug' => 'web-mobile-design',
                'is_active' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => '1',
                'name' => 'Menu Design',
                'slug' => 'menu-design',
                'is_active' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => '1',
                'name' => 'Postcard Design',
                'slug' => 'postcard-design',
                'is_active' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'menu_id' => '1',
                'name' => 'Catalog Design',
                'slug' => 'catalog-design',
                'is_active' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'menu_id' => '1',
                'name' => 'Social Media Design',
                'slug' => 'social-media-design',
                'is_active' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'menu_id' => '1',
                'name' => 'Portraits & Caricatures',
                'slug' => 'portraits-caricatures',
                'is_active' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'menu_id' => '1',
                'name' => 'Cartoons & Comics',
                'slug' => 'cartoons-comics',
                'is_active' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'menu_id' => '1',
                'name' => 'Car Wraps',
                'slug' => 'car-wraps',
                'is_active' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'menu_id' => '1',
                'name' => 'Banner Ads',
                'slug' => 'banner-ads',
                'is_active' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'menu_id' => '1',
                'name' => 'Photoshop Editing',
                'slug' => 'photoshop-editing',
                'is_active' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'menu_id' => '1',
                'name' => 'Architecture & Floor Plans',
                'slug' => 'architecture-floor-plans',
                'is_active' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'menu_id' => '1',
                'name' => 'Character Modeling',
                'slug' => 'character-modeling',
                'is_active' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'menu_id' => '1',
                'name' => '3D Models & Product Design',
                'slug' => '3d-models-product-design',
                'is_active' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'menu_id' => '1',
                'name' => 'T-Shirts & Merchandise',
                'slug' => 't-shirts-merchandise',
                'is_active' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'menu_id' => '1',
                'name' => 'Presentation Design',
                'slug' => 'presentation-design',
                'is_active' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'menu_id' => '1',
                'name' => 'Infographic Design',
                'slug' => 'infographic-design',
                'is_active' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'menu_id' => '1',
                'name' => 'Vector Tracing',
                'slug' => 'vector-tracing',
                'is_active' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'menu_id' => '1',
                'name' => 'Invitations',
                'slug' => 'invitations',
                'is_active' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'menu_id' => '1',
                'name' => 'Twitch Store',
                'slug' => 'twitch-store',
                'is_active' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'menu_id' => '1',
                'name' => 'Other',
                'slug' => 'other',
                'is_active' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'menu_id' => '2',
                'name' => 'Social Media Marketing',
                'slug' => 'social-media-marketing',
                'is_active' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'menu_id' => '2',
                'name' => 'SEO',
                'slug' => 'seo',
                'is_active' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'menu_id' => '2',
                'name' => 'Content Marketing',
                'slug' => 'content-marketing',
                'is_active' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'menu_id' => '2',
                'name' => 'Video Marketing',
                'slug' => 'video-marketing',
                'is_active' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'menu_id' => '2',
                'name' => 'Email Marketing',
                'slug' => 'email-marketing',
                'is_active' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'menu_id' => '2',
                'name' => 'Crowdfunding',
                'slug' => 'crowdfunding',
                'is_active' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'menu_id' => '2',
                'name' => 'SEM',
                'slug' => 'sem',
                'is_active' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'menu_id' => '2',
                'name' => 'Marketing Strategy',
                'slug' => 'marketing-strategy',
                'is_active' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'menu_id' => '2',
                'name' => 'Surveys',
                'slug' => 'surveys',
                'is_active' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'menu_id' => '2',
                'name' => 'Web Analytics',
                'slug' => 'web-analytics',
                'is_active' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'menu_id' => '2',
                'name' => 'Influencer Marketing',
                'slug' => 'influencer-marketing',
                'is_active' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'menu_id' => '2',
                'name' => 'Local Listings',
                'slug' => 'local-listings',
                'is_active' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'menu_id' => '2',
                'name' => 'Domain Research',
                'slug' => 'domain-research',
                'is_active' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'menu_id' => '2',
                'name' => 'E-Commerce Marketing',
                'slug' => 'e-commerce-marketing',
                'is_active' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'menu_id' => '2',
                'name' => 'Mobile Advertising',
                'slug' => 'mobile-advertising',
                'is_active' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'menu_id' => '2',
                'name' => 'Music Promotion',
                'slug' => 'music-promotion',
                'is_active' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'menu_id' => '2',
                'name' => 'Web Traffic',
                'slug' => 'web-traffic',
                'is_active' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'menu_id' => '2',
                'name' => 'Other',
                'slug' => 'other',
                'is_active' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'menu_id' => '3',
                'name' => 'Articles & Blog Posts',
                'slug' => 'articles-blog-posts',
                'is_active' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'menu_id' => '3',
                'name' => 'Resumes & Cover Letters',
                'slug' => 'resumes-cover-letters',
                'is_active' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'menu_id' => '3',
                'name' => 'Technical Writing',
                'slug' => 'technical-writing',
                'is_active' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'menu_id' => '3',
                'name' => 'Translation',
                'slug' => 'translation',
                'is_active' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'menu_id' => '3',
                'name' => 'Creative Writing',
                'slug' => 'creative-writing',
                'is_active' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'menu_id' => '3',
                'name' => 'Research & Summaries',
                'slug' => 'research-summaries',
                'is_active' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'menu_id' => '3',
                'name' => 'Sales Copy',
                'slug' => 'sales-copy',
                'is_active' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'menu_id' => '3',
                'name' => 'Press Releases',
                'slug' => 'press-releases',
                'is_active' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'menu_id' => '3',
                'name' => 'Transcripts',
                'slug' => 'transcripts',
                'is_active' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'menu_id' => '3',
                'name' => 'Legal Writing',
                'slug' => 'legal-writing',
                'is_active' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'menu_id' => '3',
                'name' => 'Email Copy',
                'slug' => 'email-copy',
                'is_active' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'menu_id' => '3',
                'name' => 'Business Names & Slogans',
                'slug' => 'business-names-slogans',
                'is_active' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'menu_id' => '3',
                'name' => 'Website Content',
                'slug' => 'website-content',
                'is_active' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'menu_id' => '3',
                'name' => 'Scriptwriting',
                'slug' => 'scriptwriting',
                'is_active' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'menu_id' => '3',
                'name' => 'Book & eBook Writing',
                'slug' => 'book-ebook-writing',
                'is_active' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'menu_id' => '3',
                'name' => 'Product Descriptions',
                'slug' => 'product-descriptions',
                'is_active' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'menu_id' => '3',
                'name' => 'Speechwriting',
                'slug' => 'speechwriting',
                'is_active' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'menu_id' => '3',
                'name' => 'Beta Reading',
                'slug' => 'beta-reading',
                'is_active' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'menu_id' => '3',
                'name' => 'Proofreading & Editing',
                'slug' => 'proofreading-editing',
                'is_active' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'menu_id' => '3',
                'name' => 'Other',
                'slug' => 'other',
                'is_active' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'menu_id' => '4',
                'name' => 'Whiteboard & Animated Explainers',
                'slug' => 'whiteboard-animated-explainers',
                'is_active' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'menu_id' => '4',
                'name' => 'Video Editing',
                'slug' => 'video-editing',
                'is_active' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'menu_id' => '4',
                'name' => 'Short Video Ads',
                'slug' => 'short-video-ads',
                'is_active' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'menu_id' => '4',
                'name' => 'Animated GIFs',
                'slug' => 'animated-gifs',
                'is_active' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'menu_id' => '4',
                'name' => 'Logo Animation',
                'slug' => 'logo-animation',
                'is_active' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'menu_id' => '4',
                'name' => 'Intros & Outros',
                'slug' => 'intros-outros',
                'is_active' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'menu_id' => '4',
                'name' => 'Live Action Explainers',
                'slug' => 'live-action-explainers',
                'is_active' => 1,
            ),
            77 => 
            array (
                'id' => 78,
                'menu_id' => '4',
                'name' => 'Character Animation',
                'slug' => 'character-animation',
                'is_active' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'menu_id' => '4',
                'name' => '3D Product Animation',
                'slug' => '3d-product-animation',
                'is_active' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'menu_id' => '4',
                'name' => 'Lyric & Music Videos',
                'slug' => 'lyric-music-videos',
                'is_active' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                'menu_id' => '4',
                'name' => 'Spokespersons Videos',
                'slug' => 'spokespersons-videos',
                'is_active' => 1,
            ),
            81 => 
            array (
                'id' => 82,
                'menu_id' => '4',
                'name' => 'Visual Effects',
                'slug' => 'visual-effects',
                'is_active' => 1,
            ),
            82 => 
            array (
                'id' => 83,
                'menu_id' => '4',
                'name' => 'Animation for Kids',
                'slug' => 'animation-for-kids',
                'is_active' => 1,
            ),
            83 => 
            array (
                'id' => 84,
                'menu_id' => '4',
                'name' => 'Slideshows & Promo Videos',
                'slug' => 'slideshows-promo-videos',
                'is_active' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                'menu_id' => '4',
                'name' => 'Game Trailers',
                'slug' => 'game-trailers',
                'is_active' => 1,
            ),
            85 => 
            array (
                'id' => 86,
                'menu_id' => '4',
                'name' => 'Animation for Streamers',
                'slug' => 'animation-for-streamers',
                'is_active' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'menu_id' => '4',
                'name' => 'Product Photography',
                'slug' => 'product-photography',
                'is_active' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                'menu_id' => '4',
                'name' => 'Other',
                'slug' => 'other',
                'is_active' => 1,
            ),
            88 => 
            array (
                'id' => 89,
                'menu_id' => '5',
                'name' => 'Voice Over',
                'slug' => 'voice-over',
                'is_active' => 1,
            ),
            89 => 
            array (
                'id' => 90,
                'menu_id' => '5',
                'name' => 'Mixing & Mastering',
                'slug' => 'mixing-mastering',
                'is_active' => 1,
            ),
            90 => 
            array (
                'id' => 91,
                'menu_id' => '5',
                'name' => 'Producers & Composers',
                'slug' => 'producers-composers',
                'is_active' => 1,
            ),
            91 => 
            array (
                'id' => 92,
                'menu_id' => '5',
                'name' => 'Singer-Songwriters',
                'slug' => 'singer-songwriters',
                'is_active' => 1,
            ),
            92 => 
            array (
                'id' => 93,
                'menu_id' => '5',
                'name' => 'Session Musicians & Singers',
                'slug' => 'session-musicians-singers',
                'is_active' => 1,
            ),
            93 => 
            array (
                'id' => 94,
                'menu_id' => '5',
                'name' => 'Podcast & Spoken-Word Editing',
                'slug' => 'podcast-spoken-word-editing',
                'is_active' => 1,
            ),
            94 => 
            array (
                'id' => 95,
                'menu_id' => '5',
                'name' => 'Vocal Tuning',
                'slug' => 'vocal-tuning',
                'is_active' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'menu_id' => '5',
                'name' => 'Jingles & Drops',
                'slug' => 'jingles-drops',
                'is_active' => 1,
            ),
            96 => 
            array (
                'id' => 97,
                'menu_id' => '5',
                'name' => 'Sound Effects',
                'slug' => 'sound-effects',
                'is_active' => 1,
            ),
            97 => 
            array (
                'id' => 98,
                'menu_id' => '5',
                'name' => 'Other',
                'slug' => 'other',
                'is_active' => 1,
            ),
            98 => 
            array (
                'id' => 99,
                'menu_id' => '6',
                'name' => 'WordPress',
                'slug' => 'wordpress',
                'is_active' => 1,
            ),
            99 => 
            array (
                'id' => 100,
                'menu_id' => '6',
                'name' => 'Website Builders & CMS',
                'slug' => 'website-builders-cms',
                'is_active' => 1,
            ),
            100 => 
            array (
                'id' => 101,
                'menu_id' => '6',
                'name' => 'Game Development',
                'slug' => 'game-development',
                'is_active' => 1,
            ),
            101 => 
            array (
                'id' => 102,
                'menu_id' => '6',
                'name' => 'Web Programming',
                'slug' => 'web-programming',
                'is_active' => 1,
            ),
            102 => 
            array (
                'id' => 103,
                'menu_id' => '6',
                'name' => 'Ecommerce',
                'slug' => 'ecommerce',
                'is_active' => 1,
            ),
            103 => 
            array (
                'id' => 104,
                'menu_id' => '6',
                'name' => 'Mobile Apps & Web',
                'slug' => 'mobile-apps-web',
                'is_active' => 1,
            ),
            104 => 
            array (
                'id' => 105,
                'menu_id' => '6',
                'name' => 'Desktop applications',
                'slug' => 'desktop-applications',
                'is_active' => 1,
            ),
            105 => 
            array (
                'id' => 106,
                'menu_id' => '6',
                'name' => 'Support & IT',
                'slug' => 'support-it',
                'is_active' => 1,
            ),
            106 => 
            array (
                'id' => 107,
                'menu_id' => '6',
                'name' => 'Chatbots',
                'slug' => 'chatbots',
                'is_active' => 1,
            ),
            107 => 
            array (
                'id' => 108,
                'menu_id' => '6',
                'name' => 'Data Analysis & Reports',
                'slug' => 'data-analysis-reports',
                'is_active' => 1,
            ),
            108 => 
            array (
                'id' => 109,
                'menu_id' => '6',
                'name' => 'Convert Files',
                'slug' => 'convert-files',
                'is_active' => 1,
            ),
            109 => 
            array (
                'id' => 110,
                'menu_id' => '6',
                'name' => 'Databases',
                'slug' => 'databases',
                'is_active' => 1,
            ),
            110 => 
            array (
                'id' => 111,
                'menu_id' => '6',
                'name' => 'User Testing',
                'slug' => 'user-testing',
                'is_active' => 1,
            ),
            111 => 
            array (
                'id' => 112,
                'menu_id' => '6',
                'name' => 'QA',
                'slug' => 'qa',
                'is_active' => 1,
            ),
            112 => 
            array (
                'id' => 113,
                'menu_id' => '6',
                'name' => 'Other',
                'slug' => 'other',
                'is_active' => 1,
            ),
            113 => 
            array (
                'id' => 114,
                'menu_id' => '7',
                'name' => 'Virtual Assistant',
                'slug' => 'virtual-assistant',
                'is_active' => 1,
            ),
            114 => 
            array (
                'id' => 115,
                'menu_id' => '7',
                'name' => 'Data Entry',
                'slug' => 'data-entry',
                'is_active' => 1,
            ),
            115 => 
            array (
                'id' => 116,
                'menu_id' => '7',
                'name' => 'Market Research',
                'slug' => 'market-research',
                'is_active' => 1,
            ),
            116 => 
            array (
                'id' => 117,
                'menu_id' => '7',
                'name' => 'Product Research',
                'slug' => 'product-research',
                'is_active' => 1,
            ),
            117 => 
            array (
                'id' => 118,
                'menu_id' => '7',
                'name' => 'Business Plans',
                'slug' => 'business-plans',
                'is_active' => 1,
            ),
            118 => 
            array (
                'id' => 119,
                'menu_id' => '7',
                'name' => 'Branding Services',
                'slug' => 'branding-services',
                'is_active' => 1,
            ),
            119 => 
            array (
                'id' => 120,
                'menu_id' => '7',
                'name' => 'Legal Consulting',
                'slug' => 'legal-consulting',
                'is_active' => 1,
            ),
            120 => 
            array (
                'id' => 121,
                'menu_id' => '7',
                'name' => 'Financial Consulting',
                'slug' => 'financial-consulting',
                'is_active' => 1,
            ),
            121 => 
            array (
                'id' => 122,
                'menu_id' => '7',
                'name' => 'Business Tips',
                'slug' => 'business-tips',
                'is_active' => 1,
            ),
            122 => 
            array (
                'id' => 123,
                'menu_id' => '7',
                'name' => 'Presentations',
                'slug' => 'presentations',
                'is_active' => 1,
            ),
            123 => 
            array (
                'id' => 124,
                'menu_id' => '7',
                'name' => 'Career Advice',
                'slug' => 'career-advice',
                'is_active' => 1,
            ),
            124 => 
            array (
                'id' => 125,
                'menu_id' => '7',
                'name' => 'Flyer Distribution',
                'slug' => 'flyer-distribution',
                'is_active' => 1,
            ),
            125 => 
            array (
                'id' => 126,
                'menu_id' => '7',
                'name' => 'Lead Generation',
                'slug' => 'lead-generation',
                'is_active' => 1,
            ),
            126 => 
            array (
                'id' => 127,
                'menu_id' => '7',
                'name' => 'Other',
                'slug' => 'other',
                'is_active' => 1,
            ),
            127 => 
            array (
                'id' => 128,
                'menu_id' => '8',
                'name' => 'Online Lessons',
                'slug' => 'online-lessons',
                'is_active' => 1,
            ),
            128 => 
            array (
                'id' => 129,
                'menu_id' => '8',
                'name' => 'Arts & Crafts',
                'slug' => 'arts-crafts',
                'is_active' => 1,
            ),
            129 => 
            array (
                'id' => 130,
                'menu_id' => '8',
                'name' => 'Relationship Advice',
                'slug' => 'relationship-advice',
                'is_active' => 1,
            ),
            130 => 
            array (
                'id' => 131,
                'menu_id' => '8',
                'name' => 'Health, Nutrition & Fitness',
                'slug' => 'health-nutrition-fitness',
                'is_active' => 1,
            ),
            131 => 
            array (
                'id' => 132,
                'menu_id' => '8',
                'name' => 'Astrology & Readings',
                'slug' => 'astrology-readings',
                'is_active' => 1,
            ),
            132 => 
            array (
                'id' => 133,
                'menu_id' => '8',
                'name' => 'Spiritual & Healing',
                'slug' => 'spiritual-healing',
                'is_active' => 1,
            ),
            133 => 
            array (
                'id' => 134,
                'menu_id' => '8',
                'name' => 'Family & Genealogy',
                'slug' => 'family-genealogy',
                'is_active' => 1,
            ),
            134 => 
            array (
                'id' => 135,
                'menu_id' => '8',
                'name' => 'Gaming',
                'slug' => 'gaming',
                'is_active' => 1,
            ),
            135 => 
            array (
                'id' => 136,
                'menu_id' => '8',
                'name' => 'Greeting Cards & Videos',
                'slug' => 'greeting-cards-videos',
                'is_active' => 1,
            ),
            136 => 
            array (
                'id' => 137,
                'menu_id' => '8',
                'name' => 'Your Message On...',
                'slug' => 'your-message-on',
                'is_active' => 1,
            ),
            137 => 
            array (
                'id' => 138,
                'menu_id' => '8',
                'name' => 'Viral Videos',
                'slug' => 'viral-videos',
                'is_active' => 1,
            ),
            138 => 
            array (
                'id' => 139,
                'menu_id' => '8',
                'name' => 'Celebrity Impersonators',
                'slug' => 'celebrity-impersonators',
                'is_active' => 1,
            ),
            139 => 
            array (
                'id' => 140,
                'menu_id' => '8',
                'name' => 'Collectibles',
                'slug' => 'collectibles',
                'is_active' => 1,
            ),
            140 => 
            array (
                'id' => 141,
                'menu_id' => '8',
                'name' => 'Global Culture',
                'slug' => 'global-culture',
                'is_active' => 1,
            ),
            141 => 
            array (
                'id' => 142,
                'menu_id' => '8',
                'name' => 'Other',
                'slug' => 'other',
                'is_active' => 1,
            ),
        ));
        
        
    }
}