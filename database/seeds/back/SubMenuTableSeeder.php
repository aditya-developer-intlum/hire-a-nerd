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
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => '1',
                'name' => 'Brand Style Guides',
                'slug' => 'brand-style-guides',
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => '1',
                'name' => 'Game Design',
                'slug' => 'game-design',
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => '1',
                'name' => 'Graphics for Streamers',
                'slug' => 'graphics-for-streamers',
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => '1',
                'name' => 'Business Cards & Stationery',
                'slug' => 'business-cards-stationery',
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => '1',
                'name' => 'Illustration',
                'slug' => 'illustration',
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => '1',
                'name' => 'Brochure Design',
                'slug' => 'brochure-design',
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => '1',
                'name' => 'Poster Design',
                'slug' => 'poster-design',
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => '1',
                'name' => 'Flyer Design',
                'slug' => 'flyer-design',
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => '1',
                'name' => 'Book & Album Covers',
                'slug' => 'book-album-covers',
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => '1',
                'name' => 'Packaging Design',
                'slug' => 'packaging-design',
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => '1',
                'name' => 'Storyboards',
                'slug' => 'storyboards',
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => '1',
                'name' => 'Web & Mobile Design',
                'slug' => 'web-mobile-design',
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => '1',
                'name' => 'Menu Design',
                'slug' => 'menu-design',
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => '1',
                'name' => 'Postcard Design',
                'slug' => 'postcard-design',
            ),
            15 => 
            array (
                'id' => 16,
                'menu_id' => '1',
                'name' => 'Catalog Design',
                'slug' => 'catalog-design',
            ),
            16 => 
            array (
                'id' => 17,
                'menu_id' => '1',
                'name' => 'Social Media Design',
                'slug' => 'social-media-design',
            ),
            17 => 
            array (
                'id' => 18,
                'menu_id' => '1',
                'name' => 'Portraits & Caricatures',
                'slug' => 'portraits-caricatures',
            ),
            18 => 
            array (
                'id' => 19,
                'menu_id' => '1',
                'name' => 'Cartoons & Comics',
                'slug' => 'cartoons-comics',
            ),
            19 => 
            array (
                'id' => 20,
                'menu_id' => '1',
                'name' => 'Car Wraps',
                'slug' => 'car-wraps',
            ),
            20 => 
            array (
                'id' => 21,
                'menu_id' => '1',
                'name' => 'Banner Ads',
                'slug' => 'banner-ads',
            ),
            21 => 
            array (
                'id' => 22,
                'menu_id' => '1',
                'name' => 'Photoshop Editing',
                'slug' => 'photoshop-editing',
            ),
            22 => 
            array (
                'id' => 23,
                'menu_id' => '1',
                'name' => 'Architecture & Floor Plans',
                'slug' => 'architecture-floor-plans',
            ),
            23 => 
            array (
                'id' => 24,
                'menu_id' => '1',
                'name' => 'Character Modeling',
                'slug' => 'character-modeling',
            ),
            24 => 
            array (
                'id' => 25,
                'menu_id' => '1',
                'name' => '3D Models & Product Design',
                'slug' => '3d-models-product-design',
            ),
            25 => 
            array (
                'id' => 26,
                'menu_id' => '1',
                'name' => 'T-Shirts & Merchandise',
                'slug' => 't-shirts-merchandise',
            ),
            26 => 
            array (
                'id' => 27,
                'menu_id' => '1',
                'name' => 'Presentation Design',
                'slug' => 'presentation-design',
            ),
            27 => 
            array (
                'id' => 28,
                'menu_id' => '1',
                'name' => 'Infographic Design',
                'slug' => 'infographic-design',
            ),
            28 => 
            array (
                'id' => 29,
                'menu_id' => '1',
                'name' => 'Vector Tracing',
                'slug' => 'vector-tracing',
            ),
            29 => 
            array (
                'id' => 30,
                'menu_id' => '1',
                'name' => 'Invitations',
                'slug' => 'invitations',
            ),
            30 => 
            array (
                'id' => 31,
                'menu_id' => '1',
                'name' => 'Twitch Store',
                'slug' => 'twitch-store',
            ),
            31 => 
            array (
                'id' => 32,
                'menu_id' => '1',
                'name' => 'Other',
                'slug' => 'other',
            ),
            32 => 
            array (
                'id' => 33,
                'menu_id' => '2',
                'name' => 'Social Media Marketing',
                'slug' => 'social-media-marketing',
            ),
            33 => 
            array (
                'id' => 34,
                'menu_id' => '2',
                'name' => 'SEO',
                'slug' => 'seo',
            ),
            34 => 
            array (
                'id' => 35,
                'menu_id' => '2',
                'name' => 'Content Marketing',
                'slug' => 'content-marketing',
            ),
            35 => 
            array (
                'id' => 36,
                'menu_id' => '2',
                'name' => 'Video Marketing',
                'slug' => 'video-marketing',
            ),
            36 => 
            array (
                'id' => 37,
                'menu_id' => '2',
                'name' => 'Email Marketing',
                'slug' => 'email-marketing',
            ),
            37 => 
            array (
                'id' => 38,
                'menu_id' => '2',
                'name' => 'Crowdfunding',
                'slug' => 'crowdfunding',
            ),
            38 => 
            array (
                'id' => 39,
                'menu_id' => '2',
                'name' => 'SEM',
                'slug' => 'sem',
            ),
            39 => 
            array (
                'id' => 40,
                'menu_id' => '2',
                'name' => 'Marketing Strategy',
                'slug' => 'marketing-strategy',
            ),
            40 => 
            array (
                'id' => 41,
                'menu_id' => '2',
                'name' => 'Surveys',
                'slug' => 'surveys',
            ),
            41 => 
            array (
                'id' => 42,
                'menu_id' => '2',
                'name' => 'Web Analytics',
                'slug' => 'web-analytics',
            ),
            42 => 
            array (
                'id' => 43,
                'menu_id' => '2',
                'name' => 'Influencer Marketing',
                'slug' => 'influencer-marketing',
            ),
            43 => 
            array (
                'id' => 44,
                'menu_id' => '2',
                'name' => 'Local Listings',
                'slug' => 'local-listings',
            ),
            44 => 
            array (
                'id' => 45,
                'menu_id' => '2',
                'name' => 'Domain Research',
                'slug' => 'domain-research',
            ),
            45 => 
            array (
                'id' => 46,
                'menu_id' => '2',
                'name' => 'E-Commerce Marketing',
                'slug' => 'e-commerce-marketing',
            ),
            46 => 
            array (
                'id' => 47,
                'menu_id' => '2',
                'name' => 'Mobile Advertising',
                'slug' => 'mobile-advertising',
            ),
            47 => 
            array (
                'id' => 48,
                'menu_id' => '2',
                'name' => 'Music Promotion',
                'slug' => 'music-promotion',
            ),
            48 => 
            array (
                'id' => 49,
                'menu_id' => '2',
                'name' => 'Web Traffic',
                'slug' => 'web-traffic',
            ),
            49 => 
            array (
                'id' => 50,
                'menu_id' => '2',
                'name' => 'Other',
                'slug' => 'other',
            ),
            50 => 
            array (
                'id' => 51,
                'menu_id' => '3',
                'name' => 'Articles & Blog Posts',
                'slug' => 'articles-blog-posts',
            ),
            51 => 
            array (
                'id' => 52,
                'menu_id' => '3',
                'name' => 'Resumes & Cover Letters',
                'slug' => 'resumes-cover-letters',
            ),
            52 => 
            array (
                'id' => 53,
                'menu_id' => '3',
                'name' => 'Technical Writing',
                'slug' => 'technical-writing',
            ),
            53 => 
            array (
                'id' => 54,
                'menu_id' => '3',
                'name' => 'Translation',
                'slug' => 'translation',
            ),
            54 => 
            array (
                'id' => 55,
                'menu_id' => '3',
                'name' => 'Creative Writing',
                'slug' => 'creative-writing',
            ),
            55 => 
            array (
                'id' => 56,
                'menu_id' => '3',
                'name' => 'Research & Summaries',
                'slug' => 'research-summaries',
            ),
            56 => 
            array (
                'id' => 57,
                'menu_id' => '3',
                'name' => 'Sales Copy',
                'slug' => 'sales-copy',
            ),
            57 => 
            array (
                'id' => 58,
                'menu_id' => '3',
                'name' => 'Press Releases',
                'slug' => 'press-releases',
            ),
            58 => 
            array (
                'id' => 59,
                'menu_id' => '3',
                'name' => 'Transcripts',
                'slug' => 'transcripts',
            ),
            59 => 
            array (
                'id' => 60,
                'menu_id' => '3',
                'name' => 'Legal Writing',
                'slug' => 'legal-writing',
            ),
            60 => 
            array (
                'id' => 61,
                'menu_id' => '3',
                'name' => 'Email Copy',
                'slug' => 'email-copy',
            ),
            61 => 
            array (
                'id' => 62,
                'menu_id' => '3',
                'name' => 'Business Names & Slogans',
                'slug' => 'business-names-slogans',
            ),
            62 => 
            array (
                'id' => 63,
                'menu_id' => '3',
                'name' => 'Website Content',
                'slug' => 'website-content',
            ),
            63 => 
            array (
                'id' => 64,
                'menu_id' => '3',
                'name' => 'Scriptwriting',
                'slug' => 'scriptwriting',
            ),
            64 => 
            array (
                'id' => 65,
                'menu_id' => '3',
                'name' => 'Book & eBook Writing',
                'slug' => 'book-ebook-writing',
            ),
            65 => 
            array (
                'id' => 66,
                'menu_id' => '3',
                'name' => 'Product Descriptions',
                'slug' => 'product-descriptions',
            ),
            66 => 
            array (
                'id' => 67,
                'menu_id' => '3',
                'name' => 'Speechwriting',
                'slug' => 'speechwriting',
            ),
            67 => 
            array (
                'id' => 68,
                'menu_id' => '3',
                'name' => 'Beta Reading',
                'slug' => 'beta-reading',
            ),
            68 => 
            array (
                'id' => 69,
                'menu_id' => '3',
                'name' => 'Proofreading & Editing',
                'slug' => 'proofreading-editing',
            ),
            69 => 
            array (
                'id' => 70,
                'menu_id' => '3',
                'name' => 'Other',
                'slug' => 'other',
            ),
            70 => 
            array (
                'id' => 71,
                'menu_id' => '4',
                'name' => 'Whiteboard & Animated Explainers',
                'slug' => 'whiteboard-animated-explainers',
            ),
            71 => 
            array (
                'id' => 72,
                'menu_id' => '4',
                'name' => 'Video Editing',
                'slug' => 'video-editing',
            ),
            72 => 
            array (
                'id' => 73,
                'menu_id' => '4',
                'name' => 'Short Video Ads',
                'slug' => 'short-video-ads',
            ),
            73 => 
            array (
                'id' => 74,
                'menu_id' => '4',
                'name' => 'Animated GIFs',
                'slug' => 'animated-gifs',
            ),
            74 => 
            array (
                'id' => 75,
                'menu_id' => '4',
                'name' => 'Logo Animation',
                'slug' => 'logo-animation',
            ),
            75 => 
            array (
                'id' => 76,
                'menu_id' => '4',
                'name' => 'Intros & Outros',
                'slug' => 'intros-outros',
            ),
            76 => 
            array (
                'id' => 77,
                'menu_id' => '4',
                'name' => 'Live Action Explainers',
                'slug' => 'live-action-explainers',
            ),
            77 => 
            array (
                'id' => 78,
                'menu_id' => '4',
                'name' => 'Character Animation',
                'slug' => 'character-animation',
            ),
            78 => 
            array (
                'id' => 79,
                'menu_id' => '4',
                'name' => '3D Product Animation',
                'slug' => '3d-product-animation',
            ),
            79 => 
            array (
                'id' => 80,
                'menu_id' => '4',
                'name' => 'Lyric & Music Videos',
                'slug' => 'lyric-music-videos',
            ),
            80 => 
            array (
                'id' => 81,
                'menu_id' => '4',
                'name' => 'Spokespersons Videos',
                'slug' => 'spokespersons-videos',
            ),
            81 => 
            array (
                'id' => 82,
                'menu_id' => '4',
                'name' => 'Visual Effects',
                'slug' => 'visual-effects',
            ),
            82 => 
            array (
                'id' => 83,
                'menu_id' => '4',
                'name' => 'Animation for Kids',
                'slug' => 'animation-for-kids',
            ),
            83 => 
            array (
                'id' => 84,
                'menu_id' => '4',
                'name' => 'Slideshows & Promo Videos',
                'slug' => 'slideshows-promo-videos',
            ),
            84 => 
            array (
                'id' => 85,
                'menu_id' => '4',
                'name' => 'Game Trailers',
                'slug' => 'game-trailers',
            ),
            85 => 
            array (
                'id' => 86,
                'menu_id' => '4',
                'name' => 'Animation for Streamers',
                'slug' => 'animation-for-streamers',
            ),
            86 => 
            array (
                'id' => 87,
                'menu_id' => '4',
                'name' => 'Product Photography',
                'slug' => 'product-photography',
            ),
            87 => 
            array (
                'id' => 88,
                'menu_id' => '4',
                'name' => 'Other',
                'slug' => 'other',
            ),
            88 => 
            array (
                'id' => 89,
                'menu_id' => '5',
                'name' => 'Voice Over',
                'slug' => 'voice-over',
            ),
            89 => 
            array (
                'id' => 90,
                'menu_id' => '5',
                'name' => 'Mixing & Mastering',
                'slug' => 'mixing-mastering',
            ),
            90 => 
            array (
                'id' => 91,
                'menu_id' => '5',
                'name' => 'Producers & Composers',
                'slug' => 'producers-composers',
            ),
            91 => 
            array (
                'id' => 92,
                'menu_id' => '5',
                'name' => 'Singer-Songwriters',
                'slug' => 'singer-songwriters',
            ),
            92 => 
            array (
                'id' => 93,
                'menu_id' => '5',
                'name' => 'Session Musicians & Singers',
                'slug' => 'session-musicians-singers',
            ),
            93 => 
            array (
                'id' => 94,
                'menu_id' => '5',
                'name' => 'Podcast & Spoken-Word Editing',
                'slug' => 'podcast-spoken-word-editing',
            ),
            94 => 
            array (
                'id' => 95,
                'menu_id' => '5',
                'name' => 'Vocal Tuning',
                'slug' => 'vocal-tuning',
            ),
            95 => 
            array (
                'id' => 96,
                'menu_id' => '5',
                'name' => 'Jingles & Drops',
                'slug' => 'jingles-drops',
            ),
            96 => 
            array (
                'id' => 97,
                'menu_id' => '5',
                'name' => 'Sound Effects',
                'slug' => 'sound-effects',
            ),
            97 => 
            array (
                'id' => 98,
                'menu_id' => '5',
                'name' => 'Other',
                'slug' => 'other',
            ),
            98 => 
            array (
                'id' => 99,
                'menu_id' => '6',
                'name' => 'WordPress',
                'slug' => 'wordpress',
            ),
            99 => 
            array (
                'id' => 100,
                'menu_id' => '6',
                'name' => 'Website Builders & CMS',
                'slug' => 'website-builders-cms',
            ),
            100 => 
            array (
                'id' => 101,
                'menu_id' => '6',
                'name' => 'Game Development',
                'slug' => 'game-development',
            ),
            101 => 
            array (
                'id' => 102,
                'menu_id' => '6',
                'name' => 'Web Programming',
                'slug' => 'web-programming',
            ),
            102 => 
            array (
                'id' => 103,
                'menu_id' => '6',
                'name' => 'Ecommerce',
                'slug' => 'ecommerce',
            ),
            103 => 
            array (
                'id' => 104,
                'menu_id' => '6',
                'name' => 'Mobile Apps & Web',
                'slug' => 'mobile-apps-web',
            ),
            104 => 
            array (
                'id' => 105,
                'menu_id' => '6',
                'name' => 'Desktop applications',
                'slug' => 'desktop-applications',
            ),
            105 => 
            array (
                'id' => 106,
                'menu_id' => '6',
                'name' => 'Support & IT',
                'slug' => 'support-it',
            ),
            106 => 
            array (
                'id' => 107,
                'menu_id' => '6',
                'name' => 'Chatbots',
                'slug' => 'chatbots',
            ),
            107 => 
            array (
                'id' => 108,
                'menu_id' => '6',
                'name' => 'Data Analysis & Reports',
                'slug' => 'data-analysis-reports',
            ),
            108 => 
            array (
                'id' => 109,
                'menu_id' => '6',
                'name' => 'Convert Files',
                'slug' => 'convert-files',
            ),
            109 => 
            array (
                'id' => 110,
                'menu_id' => '6',
                'name' => 'Databases',
                'slug' => 'databases',
            ),
            110 => 
            array (
                'id' => 111,
                'menu_id' => '6',
                'name' => 'User Testing',
                'slug' => 'user-testing',
            ),
            111 => 
            array (
                'id' => 112,
                'menu_id' => '6',
                'name' => 'QA',
                'slug' => 'qa',
            ),
            112 => 
            array (
                'id' => 113,
                'menu_id' => '6',
                'name' => 'Other',
                'slug' => 'other',
            ),
            113 => 
            array (
                'id' => 114,
                'menu_id' => '7',
                'name' => 'Virtual Assistant',
                'slug' => 'virtual-assistant',
            ),
            114 => 
            array (
                'id' => 115,
                'menu_id' => '7',
                'name' => 'Data Entry',
                'slug' => 'data-entry',
            ),
            115 => 
            array (
                'id' => 116,
                'menu_id' => '7',
                'name' => 'Market Research',
                'slug' => 'market-research',
            ),
            116 => 
            array (
                'id' => 117,
                'menu_id' => '7',
                'name' => 'Product Research',
                'slug' => 'product-research',
            ),
            117 => 
            array (
                'id' => 118,
                'menu_id' => '7',
                'name' => 'Business Plans',
                'slug' => 'business-plans',
            ),
            118 => 
            array (
                'id' => 119,
                'menu_id' => '7',
                'name' => 'Branding Services',
                'slug' => 'branding-services',
            ),
            119 => 
            array (
                'id' => 120,
                'menu_id' => '7',
                'name' => 'Legal Consulting',
                'slug' => 'legal-consulting',
            ),
            120 => 
            array (
                'id' => 121,
                'menu_id' => '7',
                'name' => 'Financial Consulting',
                'slug' => 'financial-consulting',
            ),
            121 => 
            array (
                'id' => 122,
                'menu_id' => '7',
                'name' => 'Business Tips',
                'slug' => 'business-tips',
            ),
            122 => 
            array (
                'id' => 123,
                'menu_id' => '7',
                'name' => 'Presentations',
                'slug' => 'presentations',
            ),
            123 => 
            array (
                'id' => 124,
                'menu_id' => '7',
                'name' => 'Career Advice',
                'slug' => 'career-advice',
            ),
            124 => 
            array (
                'id' => 125,
                'menu_id' => '7',
                'name' => 'Flyer Distribution',
                'slug' => 'flyer-distribution',
            ),
            125 => 
            array (
                'id' => 126,
                'menu_id' => '7',
                'name' => 'Lead Generation',
                'slug' => 'lead-generation',
            ),
            126 => 
            array (
                'id' => 127,
                'menu_id' => '7',
                'name' => 'Other',
                'slug' => 'other',
            ),
            127 => 
            array (
                'id' => 128,
                'menu_id' => '8',
                'name' => 'Online Lessons',
                'slug' => 'online-lessons',
            ),
            128 => 
            array (
                'id' => 129,
                'menu_id' => '8',
                'name' => 'Arts & Crafts',
                'slug' => 'arts-crafts',
            ),
            129 => 
            array (
                'id' => 130,
                'menu_id' => '8',
                'name' => 'Relationship Advice',
                'slug' => 'relationship-advice',
            ),
            130 => 
            array (
                'id' => 131,
                'menu_id' => '8',
                'name' => 'Health, Nutrition & Fitness',
                'slug' => 'health-nutrition-fitness',
            ),
            131 => 
            array (
                'id' => 132,
                'menu_id' => '8',
                'name' => 'Astrology & Readings',
                'slug' => 'astrology-readings',
            ),
            132 => 
            array (
                'id' => 133,
                'menu_id' => '8',
                'name' => 'Spiritual & Healing',
                'slug' => 'spiritual-healing',
            ),
            133 => 
            array (
                'id' => 134,
                'menu_id' => '8',
                'name' => 'Family & Genealogy',
                'slug' => 'family-genealogy',
            ),
            134 => 
            array (
                'id' => 135,
                'menu_id' => '8',
                'name' => 'Gaming',
                'slug' => 'gaming',
            ),
            135 => 
            array (
                'id' => 136,
                'menu_id' => '8',
                'name' => 'Greeting Cards & Videos',
                'slug' => 'greeting-cards-videos',
            ),
            136 => 
            array (
                'id' => 137,
                'menu_id' => '8',
                'name' => 'Your Message On...',
                'slug' => 'your-message-on',
            ),
            137 => 
            array (
                'id' => 138,
                'menu_id' => '8',
                'name' => 'Viral Videos',
                'slug' => 'viral-videos',
            ),
            138 => 
            array (
                'id' => 139,
                'menu_id' => '8',
                'name' => 'Celebrity Impersonators',
                'slug' => 'celebrity-impersonators',
            ),
            139 => 
            array (
                'id' => 140,
                'menu_id' => '8',
                'name' => 'Collectibles',
                'slug' => 'collectibles',
            ),
            140 => 
            array (
                'id' => 141,
                'menu_id' => '8',
                'name' => 'Global Culture',
                'slug' => 'global-culture',
            ),
            141 => 
            array (
                'id' => 142,
                'menu_id' => '8',
                'name' => 'Other',
                'slug' => 'other',
            ),
        ));
        
        
    }
}