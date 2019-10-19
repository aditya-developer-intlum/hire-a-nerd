<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Abkhaz',
                'nativeName' => 'аҧсуа',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Afar',
                'nativeName' => 'Afaraf',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Afrikaans',
                'nativeName' => 'Afrikaans',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Akan',
                'nativeName' => 'Akan',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Albanian',
                'nativeName' => 'Shqip',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Amharic',
                'nativeName' => 'አማርኛ',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Arabic',
                'nativeName' => 'العربية',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Aragonese',
                'nativeName' => 'Aragonés',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Armenian',
                'nativeName' => 'Հայերեն',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Assamese',
                'nativeName' => 'অসমীয়া',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Avaric',
                'nativeName' => 'авар мацӀ, магӀарул мацӀ',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Avestan',
                'nativeName' => 'avesta',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Aymara',
                'nativeName' => 'aymar aru',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Azerbaijani',
                'nativeName' => 'azərbaycan dili',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Bambara',
                'nativeName' => 'bamanankan',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Bashkir',
                'nativeName' => 'башҡорт теле',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Basque',
                'nativeName' => 'euskara, euskera',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Belarusian',
                'nativeName' => 'Беларуская',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Bengali',
                'nativeName' => 'বাংলা',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Bihari',
                'nativeName' => 'भोजपुरी',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Bislama',
                'nativeName' => 'Bislama',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Bosnian',
                'nativeName' => 'bosanski jezik',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Breton',
                'nativeName' => 'brezhoneg',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Bulgarian',
                'nativeName' => 'български език',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Burmese',
                'nativeName' => 'ဗမာစာ',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Catalan; Valencian',
                'nativeName' => 'Català',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Chamorro',
                'nativeName' => 'Chamoru',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Chechen',
                'nativeName' => 'нохчийн мотт',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Chichewa; Chewa; Nyanja',
                'nativeName' => 'chiCheŵa, chinyanja',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Chinese',
            'nativeName' => '中文 (Zhōngwén), 汉语, 漢語',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Chuvash',
                'nativeName' => 'чӑваш чӗлхи',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Cornish',
                'nativeName' => 'Kernewek',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Corsican',
                'nativeName' => 'corsu, lingua corsa',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Cree',
                'nativeName' => 'ᓀᐦᐃᔭᐍᐏᐣ',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Croatian',
                'nativeName' => 'hrvatski',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Czech',
                'nativeName' => 'česky, čeština',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Danish',
                'nativeName' => 'dansk',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Divehi; Dhivehi; Maldivian;',
                'nativeName' => 'ދިވެހި',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Dutch',
                'nativeName' => 'Nederlands, Vlaams',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'English',
                'nativeName' => 'English',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Esperanto',
                'nativeName' => 'Esperanto',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Estonian',
                'nativeName' => 'eesti, eesti keel',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Ewe',
                'nativeName' => 'Eʋegbe',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Faroese',
                'nativeName' => 'føroyskt',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Fijian',
                'nativeName' => 'vosa Vakaviti',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Finnish',
                'nativeName' => 'suomi, suomen kieli',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'French',
                'nativeName' => 'français, langue française',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Fula; Fulah; Pulaar; Pular',
                'nativeName' => 'Fulfulde, Pulaar, Pular',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Galician',
                'nativeName' => 'Galego',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Georgian',
                'nativeName' => 'ქართული',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'German',
                'nativeName' => 'Deutsch',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Greek, Modern',
                'nativeName' => 'Ελληνικά',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Guaraní',
                'nativeName' => 'Avañeẽ',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Gujarati',
                'nativeName' => 'ગુજરાતી',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Haitian; Haitian Creole',
                'nativeName' => 'Kreyòl ayisyen',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Hausa',
                'nativeName' => 'Hausa, هَوُسَ',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            56 => 
            array (
                'id' => 57,
            'name' => 'Hebrew (modern)',
                'nativeName' => 'עברית',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Herero',
                'nativeName' => 'Otjiherero',
                'created_at' => '2019-06-11 10:29:04',
                'updated_at' => '2019-06-11 10:29:04',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Hindi',
                'nativeName' => 'हिन्दी, हिंदी',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Hiri Motu',
                'nativeName' => 'Hiri Motu',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Hungarian',
                'nativeName' => 'Magyar',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Interlingua',
                'nativeName' => 'Interlingua',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Indonesian',
                'nativeName' => 'Bahasa Indonesia',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Interlingue',
                'nativeName' => 'Originally called Occidental; then Interlingue after WWII',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Irish',
                'nativeName' => 'Gaeilge',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Igbo',
                'nativeName' => 'Asụsụ Igbo',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Inupiaq',
                'nativeName' => 'Iñupiaq, Iñupiatun',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Ido',
                'nativeName' => 'Ido',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Icelandic',
                'nativeName' => 'Íslenska',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Italian',
                'nativeName' => 'Italiano',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Inuktitut',
                'nativeName' => 'ᐃᓄᒃᑎᑐᑦ',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Japanese',
            'nativeName' => '日本語 (にほんご／にっぽんご)',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Javanese',
                'nativeName' => 'basa Jawa',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Kalaallisut, Greenlandic',
                'nativeName' => 'kalaallisut, kalaallit oqaasii',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Kannada',
                'nativeName' => 'ಕನ್ನಡ',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Kanuri',
                'nativeName' => 'Kanuri',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Kashmiri',
                'nativeName' => 'कश्मीरी, كشميري‎',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Kazakh',
                'nativeName' => 'Қазақ тілі',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Khmer',
                'nativeName' => 'ភាសាខ្មែរ',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Kikuyu, Gikuyu',
                'nativeName' => 'Gĩkũyũ',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Kinyarwanda',
                'nativeName' => 'Ikinyarwanda',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Kirghiz, Kyrgyz',
                'nativeName' => 'кыргыз тили',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Komi',
                'nativeName' => 'коми кыв',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Kongo',
                'nativeName' => 'KiKongo',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Korean',
            'nativeName' => '한국어 (韓國語), 조선말 (朝鮮語)',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Kurdish',
                'nativeName' => 'Kurdî, كوردی‎',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Kwanyama, Kuanyama',
                'nativeName' => 'Kuanyama',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Latin',
                'nativeName' => 'latine, lingua latina',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Luxembourgish, Letzeburgesch',
                'nativeName' => 'Lëtzebuergesch',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Luganda',
                'nativeName' => 'Luganda',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Limburgish, Limburgan, Limburger',
                'nativeName' => 'Limburgs',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Lingala',
                'nativeName' => 'Lingála',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Lao',
                'nativeName' => 'ພາສາລາວ',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Lithuanian',
                'nativeName' => 'lietuvių kalba',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Luba-Katanga',
                'nativeName' => '',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Latvian',
                'nativeName' => 'latviešu valoda',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Manx',
                'nativeName' => 'Gaelg, Gailck',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Macedonian',
                'nativeName' => 'македонски јазик',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Malagasy',
                'nativeName' => 'Malagasy fiteny',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Malay',
                'nativeName' => 'bahasa Melayu, بهاس ملايو‎',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Malayalam',
                'nativeName' => 'മലയാളം',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Maltese',
                'nativeName' => 'Malti',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'M?ori',
                'nativeName' => 'te reo Māori',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            103 => 
            array (
                'id' => 104,
            'name' => 'Marathi (Mar??h?)',
                'nativeName' => 'मराठी',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Marshallese',
                'nativeName' => 'Kajin M̧ajeļ',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Mongolian',
                'nativeName' => 'монгол',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Nauru',
                'nativeName' => 'Ekakairũ Naoero',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Navajo, Navaho',
                'nativeName' => 'Diné bizaad, Dinékʼehǰí',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Norwegian Bokmål',
                'nativeName' => 'Norsk bokmål',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'North Ndebele',
                'nativeName' => 'isiNdebele',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Nepali',
                'nativeName' => 'नेपाली',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Ndonga',
                'nativeName' => 'Owambo',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Norwegian Nynorsk',
                'nativeName' => 'Norsk nynorsk',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Norwegian',
                'nativeName' => 'Norsk',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Nuosu',
                'nativeName' => 'ꆈꌠ꒿ Nuosuhxop',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'South Ndebele',
                'nativeName' => 'isiNdebele',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Occitan',
                'nativeName' => 'Occitan',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Ojibwe, Ojibwa',
                'nativeName' => 'ᐊᓂᔑᓈᐯᒧᐎᓐ',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic',
                'nativeName' => 'ѩзыкъ словѣньскъ',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Oromo',
                'nativeName' => 'Afaan Oromoo',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Oriya',
                'nativeName' => 'ଓଡ଼ିଆ',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Ossetian, Ossetic',
                'nativeName' => 'ирон æвзаг',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Panjabi, Punjabi',
                'nativeName' => 'ਪੰਜਾਬੀ, پنجابی‎',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'P?li',
                'nativeName' => 'पाऴि',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Persian',
                'nativeName' => 'فارسی',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Polish',
                'nativeName' => 'polski',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Pashto, Pushto',
                'nativeName' => 'پښتو',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Portuguese',
                'nativeName' => 'Português',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Quechua',
                'nativeName' => 'Runa Simi, Kichwa',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Romansh',
                'nativeName' => 'rumantsch grischun',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Kirundi',
                'nativeName' => 'kiRundi',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Romanian, Moldavian, Moldovan',
                'nativeName' => 'română',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Russian',
                'nativeName' => 'русский язык',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            133 => 
            array (
                'id' => 134,
            'name' => 'Sanskrit (Sa?sk?ta)',
                'nativeName' => 'संस्कृतम्',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Sardinian',
                'nativeName' => 'sardu',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Sindhi',
                'nativeName' => 'सिन्धी, سنڌي، سندھی‎',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Northern Sami',
                'nativeName' => 'Davvisámegiella',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Samoan',
                'nativeName' => 'gagana faa Samoa',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Sango',
                'nativeName' => 'yângâ tî sängö',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Serbian',
                'nativeName' => 'српски језик',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Scottish Gaelic; Gaelic',
                'nativeName' => 'Gàidhlig',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Shona',
                'nativeName' => 'chiShona',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Sinhala, Sinhalese',
                'nativeName' => 'සිංහල',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Slovak',
                'nativeName' => 'slovenčina',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Slovene',
                'nativeName' => 'slovenščina',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Somali',
                'nativeName' => 'Soomaaliga, af Soomaali',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Southern Sotho',
                'nativeName' => 'Sesotho',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Spanish; Castilian',
                'nativeName' => 'español, castellano',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Sundanese',
                'nativeName' => 'Basa Sunda',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Swahili',
                'nativeName' => 'Kiswahili',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Swati',
                'nativeName' => 'SiSwati',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Swedish',
                'nativeName' => 'svenska',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Tamil',
                'nativeName' => 'தமிழ்',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Telugu',
                'nativeName' => 'తెలుగు',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Tajik',
                'nativeName' => 'тоҷикӣ, toğikī, تاجیکی‎',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Thai',
                'nativeName' => 'ไทย',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Tigrinya',
                'nativeName' => 'ትግርኛ',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Tibetan Standard, Tibetan, Central',
                'nativeName' => 'བོད་ཡིག',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Turkmen',
                'nativeName' => 'Türkmen, Түркмен',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Tagalog',
                'nativeName' => 'Wikang Tagalog, ᜏᜒᜃᜅ᜔ ᜆᜄᜎᜓᜄ᜔',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Tswana',
                'nativeName' => 'Setswana',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            161 => 
            array (
                'id' => 162,
            'name' => 'Tonga (Tonga Islands)',
                'nativeName' => 'faka Tonga',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Turkish',
                'nativeName' => 'Türkçe',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Tsonga',
                'nativeName' => 'Xitsonga',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Tatar',
                'nativeName' => 'татарча, tatarça, تاتارچا‎',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Twi',
                'nativeName' => 'Twi',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Tahitian',
                'nativeName' => 'Reo Tahiti',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Uighur, Uyghur',
                'nativeName' => 'Uyƣurqə, ئۇيغۇرچە‎',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Ukrainian',
                'nativeName' => 'українська',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Urdu',
                'nativeName' => 'اردو',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Uzbek',
                'nativeName' => 'zbek, Ўзбек, أۇزبېك‎',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Venda',
                'nativeName' => 'Tshivenḓa',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Vietnamese',
                'nativeName' => 'Tiếng Việt',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Volapük',
                'nativeName' => 'Volapük',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Walloon',
                'nativeName' => 'Walon',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Welsh',
                'nativeName' => 'Cymraeg',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Wolof',
                'nativeName' => 'Wollof',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Western Frisian',
                'nativeName' => 'Frysk',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Xhosa',
                'nativeName' => 'isiXhosa',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Yiddish',
                'nativeName' => 'ייִדיש',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Yoruba',
                'nativeName' => 'Yorùbá',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Zhuang, Chuang',
                'nativeName' => 'Saɯ cueŋƅ, Saw cuengh',
                'created_at' => '2019-06-11 10:29:05',
                'updated_at' => '2019-06-11 10:29:05',
            ),
        ));
        
        
    }
}