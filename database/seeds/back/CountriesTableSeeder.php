<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 4,
                'iso2' => 'AF',
                'iso3' => 'AFG',
                'name' => 'Afghanistan',
            ),
            1 => 
            array (
                'id' => 8,
                'iso2' => 'AL',
                'iso3' => 'ALB',
                'name' => 'Albania',
            ),
            2 => 
            array (
                'id' => 10,
                'iso2' => 'AQ',
                'iso3' => 'ATA',
                'name' => 'Antarctica',
            ),
            3 => 
            array (
                'id' => 12,
                'iso2' => 'DZ',
                'iso3' => 'DZA',
                'name' => 'Algeria',
            ),
            4 => 
            array (
                'id' => 16,
                'iso2' => 'AS',
                'iso3' => 'ASM',
                'name' => 'American Samoa',
            ),
            5 => 
            array (
                'id' => 20,
                'iso2' => 'AD',
                'iso3' => 'AND',
                'name' => 'Andorra',
            ),
            6 => 
            array (
                'id' => 24,
                'iso2' => 'AO',
                'iso3' => 'AGO',
                'name' => 'Angola',
            ),
            7 => 
            array (
                'id' => 28,
                'iso2' => 'AG',
                'iso3' => 'ATG',
                'name' => 'Antigua and Barbuda',
            ),
            8 => 
            array (
                'id' => 31,
                'iso2' => 'AZ',
                'iso3' => 'AZE',
                'name' => 'Azerbaijan',
            ),
            9 => 
            array (
                'id' => 32,
                'iso2' => 'AR',
                'iso3' => 'ARG',
                'name' => 'Argentina',
            ),
            10 => 
            array (
                'id' => 36,
                'iso2' => 'AU',
                'iso3' => 'AUS',
                'name' => 'Australia',
            ),
            11 => 
            array (
                'id' => 40,
                'iso2' => 'AT',
                'iso3' => 'AUT',
                'name' => 'Austria',
            ),
            12 => 
            array (
                'id' => 44,
                'iso2' => 'BS',
                'iso3' => 'BHS',
                'name' => 'Bahamas',
            ),
            13 => 
            array (
                'id' => 48,
                'iso2' => 'BH',
                'iso3' => 'BHR',
                'name' => 'Bahrain',
            ),
            14 => 
            array (
                'id' => 50,
                'iso2' => 'BD',
                'iso3' => 'BGD',
                'name' => 'Bangladesh',
            ),
            15 => 
            array (
                'id' => 51,
                'iso2' => 'AM',
                'iso3' => 'ARM',
                'name' => 'Armenia',
            ),
            16 => 
            array (
                'id' => 52,
                'iso2' => 'BB',
                'iso3' => 'BRB',
                'name' => 'Barbados',
            ),
            17 => 
            array (
                'id' => 56,
                'iso2' => 'BE',
                'iso3' => 'BEL',
                'name' => 'Belgium',
            ),
            18 => 
            array (
                'id' => 60,
                'iso2' => 'BM',
                'iso3' => 'BMU',
                'name' => 'Bermuda',
            ),
            19 => 
            array (
                'id' => 64,
                'iso2' => 'BT',
                'iso3' => 'BTN',
                'name' => 'Bhutan',
            ),
            20 => 
            array (
                'id' => 68,
                'iso2' => 'BO',
                'iso3' => 'BOL',
                'name' => 'Bolivia',
            ),
            21 => 
            array (
                'id' => 70,
                'iso2' => 'BA',
                'iso3' => 'BIH',
                'name' => 'Bosnia and Herzegovina',
            ),
            22 => 
            array (
                'id' => 72,
                'iso2' => 'BW',
                'iso3' => 'BWA',
                'name' => 'Botswana',
            ),
            23 => 
            array (
                'id' => 74,
                'iso2' => 'BV',
                'iso3' => 'BVT',
                'name' => 'Bouvet Island',
            ),
            24 => 
            array (
                'id' => 76,
                'iso2' => 'BR',
                'iso3' => 'BRA',
                'name' => 'Brazil',
            ),
            25 => 
            array (
                'id' => 84,
                'iso2' => 'BZ',
                'iso3' => 'BLZ',
                'name' => 'Belize',
            ),
            26 => 
            array (
                'id' => 86,
                'iso2' => 'IO',
                'iso3' => 'IOT',
                'name' => 'British Indian Ocean Territory',
            ),
            27 => 
            array (
                'id' => 90,
                'iso2' => 'SB',
                'iso3' => 'SLB',
                'name' => 'Solomon Islands',
            ),
            28 => 
            array (
                'id' => 92,
                'iso2' => 'VG',
                'iso3' => 'VGB',
                'name' => 'Virgin Islands, British',
            ),
            29 => 
            array (
                'id' => 96,
                'iso2' => 'BN',
                'iso3' => 'BRN',
                'name' => 'Brunei Darussalam',
            ),
            30 => 
            array (
                'id' => 100,
                'iso2' => 'BG',
                'iso3' => 'BGR',
                'name' => 'Bulgaria',
            ),
            31 => 
            array (
                'id' => 104,
                'iso2' => 'MM',
                'iso3' => 'MMR',
                'name' => 'Myanmar',
            ),
            32 => 
            array (
                'id' => 108,
                'iso2' => 'BI',
                'iso3' => 'BDI',
                'name' => 'Burundi',
            ),
            33 => 
            array (
                'id' => 112,
                'iso2' => 'BY',
                'iso3' => 'BLR',
                'name' => 'Belarus',
            ),
            34 => 
            array (
                'id' => 116,
                'iso2' => 'KH',
                'iso3' => 'KHM',
                'name' => 'Cambodia',
            ),
            35 => 
            array (
                'id' => 120,
                'iso2' => 'CM',
                'iso3' => 'CMR',
                'name' => 'Cameroon',
            ),
            36 => 
            array (
                'id' => 124,
                'iso2' => 'CA',
                'iso3' => 'CAN',
                'name' => 'Canada',
            ),
            37 => 
            array (
                'id' => 132,
                'iso2' => 'CV',
                'iso3' => 'CPV',
                'name' => 'Cape Verde',
            ),
            38 => 
            array (
                'id' => 136,
                'iso2' => 'KY',
                'iso3' => 'CYM',
                'name' => 'Cayman Islands',
            ),
            39 => 
            array (
                'id' => 140,
                'iso2' => 'CF',
                'iso3' => 'CAF',
                'name' => 'Central African Republic',
            ),
            40 => 
            array (
                'id' => 144,
                'iso2' => 'LK',
                'iso3' => 'LKA',
                'name' => 'Sri Lanka',
            ),
            41 => 
            array (
                'id' => 148,
                'iso2' => 'TD',
                'iso3' => 'TCD',
                'name' => 'Chad',
            ),
            42 => 
            array (
                'id' => 152,
                'iso2' => 'CL',
                'iso3' => 'CHL',
                'name' => 'Chile',
            ),
            43 => 
            array (
                'id' => 156,
                'iso2' => 'CN',
                'iso3' => 'CHN',
                'name' => 'China',
            ),
            44 => 
            array (
                'id' => 158,
                'iso2' => 'TW',
                'iso3' => 'TWN',
                'name' => 'Taiwan, Province of China',
            ),
            45 => 
            array (
                'id' => 162,
                'iso2' => 'CX',
                'iso3' => 'CXR',
                'name' => 'Christmas Island',
            ),
            46 => 
            array (
                'id' => 166,
                'iso2' => 'CC',
                'iso3' => 'CCK',
            'name' => 'Cocos (Keeling); Islands',
            ),
            47 => 
            array (
                'id' => 170,
                'iso2' => 'CO',
                'iso3' => 'COL',
                'name' => 'Colombia',
            ),
            48 => 
            array (
                'id' => 174,
                'iso2' => 'KM',
                'iso3' => 'COM',
                'name' => 'Comoros',
            ),
            49 => 
            array (
                'id' => 175,
                'iso2' => 'YT',
                'iso3' => 'MYT',
                'name' => 'Mayotte',
            ),
            50 => 
            array (
                'id' => 178,
                'iso2' => 'CG',
                'iso3' => 'COG',
                'name' => 'Congo',
            ),
            51 => 
            array (
                'id' => 180,
                'iso2' => 'CD',
                'iso3' => 'COD',
                'name' => 'Congo, Democratic Republic of the',
            ),
            52 => 
            array (
                'id' => 184,
                'iso2' => 'CK',
                'iso3' => 'COK',
                'name' => 'Cook Islands',
            ),
            53 => 
            array (
                'id' => 188,
                'iso2' => 'CR',
                'iso3' => 'CRI',
                'name' => 'Costa Rica',
            ),
            54 => 
            array (
                'id' => 191,
                'iso2' => 'HR',
                'iso3' => 'HRV',
                'name' => 'Croatia',
            ),
            55 => 
            array (
                'id' => 192,
                'iso2' => 'CU',
                'iso3' => 'CUB',
                'name' => 'Cuba',
            ),
            56 => 
            array (
                'id' => 196,
                'iso2' => 'CY',
                'iso3' => 'CYP',
                'name' => 'Cyprus',
            ),
            57 => 
            array (
                'id' => 203,
                'iso2' => 'CZ',
                'iso3' => 'CZE',
                'name' => 'Czech Republic',
            ),
            58 => 
            array (
                'id' => 204,
                'iso2' => 'BJ',
                'iso3' => 'BEN',
                'name' => 'Benin',
            ),
            59 => 
            array (
                'id' => 208,
                'iso2' => 'DK',
                'iso3' => 'DNK',
                'name' => 'Denmark',
            ),
            60 => 
            array (
                'id' => 212,
                'iso2' => 'DM',
                'iso3' => 'DMA',
                'name' => 'Dominica',
            ),
            61 => 
            array (
                'id' => 214,
                'iso2' => 'DO',
                'iso3' => 'DOM',
                'name' => 'Dominican Republic',
            ),
            62 => 
            array (
                'id' => 218,
                'iso2' => 'EC',
                'iso3' => 'ECU',
                'name' => 'Ecuador',
            ),
            63 => 
            array (
                'id' => 222,
                'iso2' => 'SV',
                'iso3' => 'SLV',
                'name' => 'El Salvador',
            ),
            64 => 
            array (
                'id' => 226,
                'iso2' => 'GQ',
                'iso3' => 'GNQ',
                'name' => 'Equatorial Guinea',
            ),
            65 => 
            array (
                'id' => 231,
                'iso2' => 'ET',
                'iso3' => 'ETH',
                'name' => 'Ethiopia',
            ),
            66 => 
            array (
                'id' => 232,
                'iso2' => 'ER',
                'iso3' => 'ERI',
                'name' => 'Eritrea',
            ),
            67 => 
            array (
                'id' => 233,
                'iso2' => 'EE',
                'iso3' => 'EST',
                'name' => 'Estonia',
            ),
            68 => 
            array (
                'id' => 234,
                'iso2' => 'FO',
                'iso3' => 'FRO',
                'name' => 'Faroe Islands',
            ),
            69 => 
            array (
                'id' => 238,
                'iso2' => 'FK',
                'iso3' => 'FLK',
            'name' => 'Falkland Islands (Malvinas);',
            ),
            70 => 
            array (
                'id' => 239,
                'iso2' => 'GS',
                'iso3' => 'SGS',
                'name' => 'South Georgia and the South Sandwich Islands',
            ),
            71 => 
            array (
                'id' => 242,
                'iso2' => 'FJ',
                'iso3' => 'FJI',
                'name' => 'Fiji',
            ),
            72 => 
            array (
                'id' => 246,
                'iso2' => 'FI',
                'iso3' => 'FIN',
                'name' => 'Finland',
            ),
            73 => 
            array (
                'id' => 248,
                'iso2' => 'AX',
                'iso3' => 'ALA',
                'name' => 'Aland Islands',
            ),
            74 => 
            array (
                'id' => 250,
                'iso2' => 'FR',
                'iso3' => 'FRA',
                'name' => 'France',
            ),
            75 => 
            array (
                'id' => 254,
                'iso2' => 'GF',
                'iso3' => 'GUF',
                'name' => 'French Guiana',
            ),
            76 => 
            array (
                'id' => 258,
                'iso2' => 'PF',
                'iso3' => 'PYF',
                'name' => 'French Polynesia',
            ),
            77 => 
            array (
                'id' => 260,
                'iso2' => 'TF',
                'iso3' => 'ATF',
                'name' => 'French Southern Territories',
            ),
            78 => 
            array (
                'id' => 262,
                'iso2' => 'DJ',
                'iso3' => 'DJI',
                'name' => 'Djibouti',
            ),
            79 => 
            array (
                'id' => 266,
                'iso2' => 'GA',
                'iso3' => 'GAB',
                'name' => 'Gabon',
            ),
            80 => 
            array (
                'id' => 268,
                'iso2' => 'GE',
                'iso3' => 'GEO',
                'name' => 'Georgia',
            ),
            81 => 
            array (
                'id' => 270,
                'iso2' => 'GM',
                'iso3' => 'GMB',
                'name' => 'Gambia',
            ),
            82 => 
            array (
                'id' => 275,
                'iso2' => 'PS',
                'iso3' => 'PSE',
                'name' => 'Palestinian Territory, Occupied',
            ),
            83 => 
            array (
                'id' => 276,
                'iso2' => 'DE',
                'iso3' => 'DEU',
                'name' => 'Germany',
            ),
            84 => 
            array (
                'id' => 288,
                'iso2' => 'GH',
                'iso3' => 'GHA',
                'name' => 'Ghana',
            ),
            85 => 
            array (
                'id' => 292,
                'iso2' => 'GI',
                'iso3' => 'GIB',
                'name' => 'Gibraltar',
            ),
            86 => 
            array (
                'id' => 296,
                'iso2' => 'KI',
                'iso3' => 'KIR',
                'name' => 'Kiribati',
            ),
            87 => 
            array (
                'id' => 300,
                'iso2' => 'GR',
                'iso3' => 'GRC',
                'name' => 'Greece',
            ),
            88 => 
            array (
                'id' => 304,
                'iso2' => 'GL',
                'iso3' => 'GRL',
                'name' => 'Greenland',
            ),
            89 => 
            array (
                'id' => 308,
                'iso2' => 'GD',
                'iso3' => 'GRD',
                'name' => 'Grenada',
            ),
            90 => 
            array (
                'id' => 312,
                'iso2' => 'GP',
                'iso3' => 'GLP',
                'name' => 'Guadeloupe',
            ),
            91 => 
            array (
                'id' => 316,
                'iso2' => 'GU',
                'iso3' => 'GUM',
                'name' => 'Guam',
            ),
            92 => 
            array (
                'id' => 320,
                'iso2' => 'GT',
                'iso3' => 'GTM',
                'name' => 'Guatemala',
            ),
            93 => 
            array (
                'id' => 324,
                'iso2' => 'GN',
                'iso3' => 'GIN',
                'name' => 'Guinea',
            ),
            94 => 
            array (
                'id' => 328,
                'iso2' => 'GY',
                'iso3' => 'GUY',
                'name' => 'Guyana',
            ),
            95 => 
            array (
                'id' => 332,
                'iso2' => 'HT',
                'iso3' => 'HTI',
                'name' => 'Haiti',
            ),
            96 => 
            array (
                'id' => 334,
                'iso2' => 'HM',
                'iso3' => 'HMD',
                'name' => 'Heard Island and McDonald Islands',
            ),
            97 => 
            array (
                'id' => 336,
                'iso2' => 'VA',
                'iso3' => 'VAT',
            'name' => 'Holy See (Vatican City State);',
            ),
            98 => 
            array (
                'id' => 340,
                'iso2' => 'HN',
                'iso3' => 'HND',
                'name' => 'Honduras',
            ),
            99 => 
            array (
                'id' => 344,
                'iso2' => 'HK',
                'iso3' => 'HKG',
                'name' => 'Hong Kong',
            ),
            100 => 
            array (
                'id' => 348,
                'iso2' => 'HU',
                'iso3' => 'HUN',
                'name' => 'Hungary',
            ),
            101 => 
            array (
                'id' => 352,
                'iso2' => 'IS',
                'iso3' => 'ISL',
                'name' => 'Iceland',
            ),
            102 => 
            array (
                'id' => 356,
                'iso2' => 'IN',
                'iso3' => 'IND',
                'name' => 'India',
            ),
            103 => 
            array (
                'id' => 360,
                'iso2' => 'ID',
                'iso3' => 'IDN',
                'name' => 'Indonesia',
            ),
            104 => 
            array (
                'id' => 364,
                'iso2' => 'IR',
                'iso3' => 'IRN',
                'name' => 'Iran, Islamic Republic of',
            ),
            105 => 
            array (
                'id' => 368,
                'iso2' => 'IQ',
                'iso3' => 'IRQ',
                'name' => 'Iraq',
            ),
            106 => 
            array (
                'id' => 372,
                'iso2' => 'IE',
                'iso3' => 'IRL',
                'name' => 'Ireland',
            ),
            107 => 
            array (
                'id' => 376,
                'iso2' => 'IL',
                'iso3' => 'ISR',
                'name' => 'Israel',
            ),
            108 => 
            array (
                'id' => 380,
                'iso2' => 'IT',
                'iso3' => 'ITA',
                'name' => 'Italy',
            ),
            109 => 
            array (
                'id' => 384,
                'iso2' => 'CI',
                'iso3' => 'CIV',
                'name' => 'Côte d\'Ivoire',
            ),
            110 => 
            array (
                'id' => 388,
                'iso2' => 'JM',
                'iso3' => 'JAM',
                'name' => 'Jamaica',
            ),
            111 => 
            array (
                'id' => 392,
                'iso2' => 'JP',
                'iso3' => 'JPN',
                'name' => 'Japan',
            ),
            112 => 
            array (
                'id' => 398,
                'iso2' => 'KZ',
                'iso3' => 'KAZ',
                'name' => 'Kazakhstan',
            ),
            113 => 
            array (
                'id' => 400,
                'iso2' => 'JO',
                'iso3' => 'JOR',
                'name' => 'Jordan',
            ),
            114 => 
            array (
                'id' => 404,
                'iso2' => 'KE',
                'iso3' => 'KEN',
                'name' => 'Kenya',
            ),
            115 => 
            array (
                'id' => 408,
                'iso2' => 'KP',
                'iso3' => 'PRK',
                'name' => 'Korea, Democratic People\'s Republic of',
            ),
            116 => 
            array (
                'id' => 410,
                'iso2' => 'KR',
                'iso3' => 'KOR',
                'name' => 'Korea, Republic of',
            ),
            117 => 
            array (
                'id' => 414,
                'iso2' => 'KW',
                'iso3' => 'KWT',
                'name' => 'Kuwait',
            ),
            118 => 
            array (
                'id' => 417,
                'iso2' => 'KG',
                'iso3' => 'KGZ',
                'name' => 'Kyrgyzstan',
            ),
            119 => 
            array (
                'id' => 418,
                'iso2' => 'LA',
                'iso3' => 'LAO',
                'name' => 'Lao People\'s Democratic Republic',
            ),
            120 => 
            array (
                'id' => 422,
                'iso2' => 'LB',
                'iso3' => 'LBN',
                'name' => 'Lebanon',
            ),
            121 => 
            array (
                'id' => 426,
                'iso2' => 'LS',
                'iso3' => 'LSO',
                'name' => 'Lesotho',
            ),
            122 => 
            array (
                'id' => 428,
                'iso2' => 'LV',
                'iso3' => 'LVA',
                'name' => 'Latvia',
            ),
            123 => 
            array (
                'id' => 430,
                'iso2' => 'LR',
                'iso3' => 'LBR',
                'name' => 'Liberia',
            ),
            124 => 
            array (
                'id' => 434,
                'iso2' => 'LY',
                'iso3' => 'LBY',
                'name' => 'Libyan Arab Jamahiriya',
            ),
            125 => 
            array (
                'id' => 438,
                'iso2' => 'LI',
                'iso3' => 'LIE',
                'name' => 'Liechtenstein',
            ),
            126 => 
            array (
                'id' => 440,
                'iso2' => 'LT',
                'iso3' => 'LTU',
                'name' => 'Lithuania',
            ),
            127 => 
            array (
                'id' => 442,
                'iso2' => 'LU',
                'iso3' => 'LUX',
                'name' => 'Luxembourg',
            ),
            128 => 
            array (
                'id' => 446,
                'iso2' => 'MO',
                'iso3' => 'MAC',
                'name' => 'Macao',
            ),
            129 => 
            array (
                'id' => 450,
                'iso2' => 'MG',
                'iso3' => 'MDG',
                'name' => 'Madagascar',
            ),
            130 => 
            array (
                'id' => 454,
                'iso2' => 'MW',
                'iso3' => 'MWI',
                'name' => 'Malawi',
            ),
            131 => 
            array (
                'id' => 458,
                'iso2' => 'MY',
                'iso3' => 'MYS',
                'name' => 'Malaysia',
            ),
            132 => 
            array (
                'id' => 462,
                'iso2' => 'MV',
                'iso3' => 'MDV',
                'name' => 'Maldives',
            ),
            133 => 
            array (
                'id' => 466,
                'iso2' => 'ML',
                'iso3' => 'MLI',
                'name' => 'Mali',
            ),
            134 => 
            array (
                'id' => 470,
                'iso2' => 'MT',
                'iso3' => 'MLT',
                'name' => 'Malta',
            ),
            135 => 
            array (
                'id' => 474,
                'iso2' => 'MQ',
                'iso3' => 'MTQ',
                'name' => 'Martinique',
            ),
            136 => 
            array (
                'id' => 478,
                'iso2' => 'MR',
                'iso3' => 'MRT',
                'name' => 'Mauritania',
            ),
            137 => 
            array (
                'id' => 480,
                'iso2' => 'MU',
                'iso3' => 'MUS',
                'name' => 'Mauritius',
            ),
            138 => 
            array (
                'id' => 484,
                'iso2' => 'MX',
                'iso3' => 'MEX',
                'name' => 'Mexico',
            ),
            139 => 
            array (
                'id' => 492,
                'iso2' => 'MC',
                'iso3' => 'MCO',
                'name' => 'Monaco',
            ),
            140 => 
            array (
                'id' => 496,
                'iso2' => 'MN',
                'iso3' => 'MNG',
                'name' => 'Mongolia',
            ),
            141 => 
            array (
                'id' => 498,
                'iso2' => 'MD',
                'iso3' => 'MDA',
                'name' => 'Moldova',
            ),
            142 => 
            array (
                'id' => 499,
                'iso2' => 'ME',
                'iso3' => 'MNE',
                'name' => 'Montenegro',
            ),
            143 => 
            array (
                'id' => 500,
                'iso2' => 'MS',
                'iso3' => 'MSR',
                'name' => 'Montserrat',
            ),
            144 => 
            array (
                'id' => 504,
                'iso2' => 'MA',
                'iso3' => 'MAR',
                'name' => 'Morocco',
            ),
            145 => 
            array (
                'id' => 508,
                'iso2' => 'MZ',
                'iso3' => 'MOZ',
                'name' => 'Mozambique',
            ),
            146 => 
            array (
                'id' => 512,
                'iso2' => 'OM',
                'iso3' => 'OMN',
                'name' => 'Oman',
            ),
            147 => 
            array (
                'id' => 516,
                'iso2' => 'NA',
                'iso3' => 'NAM',
                'name' => 'Namibia',
            ),
            148 => 
            array (
                'id' => 520,
                'iso2' => 'NR',
                'iso3' => 'NRU',
                'name' => 'Nauru',
            ),
            149 => 
            array (
                'id' => 524,
                'iso2' => 'NP',
                'iso3' => 'NPL',
                'name' => 'Nepal',
            ),
            150 => 
            array (
                'id' => 528,
                'iso2' => 'NL',
                'iso3' => 'NLD',
                'name' => 'Netherlands',
            ),
            151 => 
            array (
                'id' => 530,
                'iso2' => 'AN',
                'iso3' => 'ANT',
                'name' => 'Netherlands Antilles',
            ),
            152 => 
            array (
                'id' => 533,
                'iso2' => 'AW',
                'iso3' => 'ABW',
                'name' => 'Aruba',
            ),
            153 => 
            array (
                'id' => 540,
                'iso2' => 'NC',
                'iso3' => 'NCL',
                'name' => 'New Caledonia',
            ),
            154 => 
            array (
                'id' => 548,
                'iso2' => 'VU',
                'iso3' => 'VUT',
                'name' => 'Vanuatu',
            ),
            155 => 
            array (
                'id' => 554,
                'iso2' => 'NZ',
                'iso3' => 'NZL',
                'name' => 'New Zealand',
            ),
            156 => 
            array (
                'id' => 558,
                'iso2' => 'NI',
                'iso3' => 'NIC',
                'name' => 'Nicaragua',
            ),
            157 => 
            array (
                'id' => 562,
                'iso2' => 'NE',
                'iso3' => 'NER',
                'name' => 'Niger',
            ),
            158 => 
            array (
                'id' => 566,
                'iso2' => 'NG',
                'iso3' => 'NGA',
                'name' => 'Nigeria',
            ),
            159 => 
            array (
                'id' => 570,
                'iso2' => 'NU',
                'iso3' => 'NIU',
                'name' => 'Niue',
            ),
            160 => 
            array (
                'id' => 574,
                'iso2' => 'NF',
                'iso3' => 'NFK',
                'name' => 'Norfolk Island',
            ),
            161 => 
            array (
                'id' => 578,
                'iso2' => 'NO',
                'iso3' => 'NOR',
                'name' => 'Norway',
            ),
            162 => 
            array (
                'id' => 580,
                'iso2' => 'MP',
                'iso3' => 'MNP',
                'name' => 'Northern Mariana Islands',
            ),
            163 => 
            array (
                'id' => 581,
                'iso2' => 'UM',
                'iso3' => 'UMI',
                'name' => 'United States Minor Outlying Islands',
            ),
            164 => 
            array (
                'id' => 583,
                'iso2' => 'FM',
                'iso3' => 'FSM',
                'name' => 'Micronesia, Federated States of',
            ),
            165 => 
            array (
                'id' => 584,
                'iso2' => 'MH',
                'iso3' => 'MHL',
                'name' => 'Marshall Islands',
            ),
            166 => 
            array (
                'id' => 585,
                'iso2' => 'PW',
                'iso3' => 'PLW',
                'name' => 'Palau',
            ),
            167 => 
            array (
                'id' => 586,
                'iso2' => 'PK',
                'iso3' => 'PAK',
                'name' => 'Pakistan',
            ),
            168 => 
            array (
                'id' => 591,
                'iso2' => 'PA',
                'iso3' => 'PAN',
                'name' => 'Panama',
            ),
            169 => 
            array (
                'id' => 598,
                'iso2' => 'PG',
                'iso3' => 'PNG',
                'name' => 'Papua New Guinea',
            ),
            170 => 
            array (
                'id' => 600,
                'iso2' => 'PY',
                'iso3' => 'PRY',
                'name' => 'Paraguay',
            ),
            171 => 
            array (
                'id' => 604,
                'iso2' => 'PE',
                'iso3' => 'PER',
                'name' => 'Peru',
            ),
            172 => 
            array (
                'id' => 608,
                'iso2' => 'PH',
                'iso3' => 'PHL',
                'name' => 'Philippines',
            ),
            173 => 
            array (
                'id' => 612,
                'iso2' => 'PN',
                'iso3' => 'PCN',
                'name' => 'Pitcairn',
            ),
            174 => 
            array (
                'id' => 616,
                'iso2' => 'PL',
                'iso3' => 'POL',
                'name' => 'Poland',
            ),
            175 => 
            array (
                'id' => 620,
                'iso2' => 'PT',
                'iso3' => 'PRT',
                'name' => 'Portugal',
            ),
            176 => 
            array (
                'id' => 624,
                'iso2' => 'GW',
                'iso3' => 'GNB',
                'name' => 'Guinea-Bissau',
            ),
            177 => 
            array (
                'id' => 626,
                'iso2' => 'TL',
                'iso3' => 'TLS',
                'name' => 'Timor-Leste',
            ),
            178 => 
            array (
                'id' => 630,
                'iso2' => 'PR',
                'iso3' => 'PRI',
                'name' => 'Puerto Rico',
            ),
            179 => 
            array (
                'id' => 634,
                'iso2' => 'QA',
                'iso3' => 'QAT',
                'name' => 'Qatar',
            ),
            180 => 
            array (
                'id' => 638,
                'iso2' => 'RE',
                'iso3' => 'REU',
                'name' => 'Réunion',
            ),
            181 => 
            array (
                'id' => 642,
                'iso2' => 'RO',
                'iso3' => 'ROU',
                'name' => 'Romania',
            ),
            182 => 
            array (
                'id' => 643,
                'iso2' => 'RU',
                'iso3' => 'RUS',
                'name' => 'Russian Federation',
            ),
            183 => 
            array (
                'id' => 646,
                'iso2' => 'RW',
                'iso3' => 'RWA',
                'name' => 'Rwanda',
            ),
            184 => 
            array (
                'id' => 652,
                'iso2' => 'BL',
                'iso3' => 'BLM',
                'name' => 'Saint Barthélemy',
            ),
            185 => 
            array (
                'id' => 654,
                'iso2' => 'SH',
                'iso3' => 'SHN',
                'name' => 'Saint Helena',
            ),
            186 => 
            array (
                'id' => 659,
                'iso2' => 'KN',
                'iso3' => 'KNA',
                'name' => 'Saint Kitts and Nevis',
            ),
            187 => 
            array (
                'id' => 660,
                'iso2' => 'AI',
                'iso3' => 'AIA',
                'name' => 'Anguilla',
            ),
            188 => 
            array (
                'id' => 662,
                'iso2' => 'LC',
                'iso3' => 'LCA',
                'name' => 'Saint Lucia',
            ),
            189 => 
            array (
                'id' => 663,
                'iso2' => 'MF',
                'iso3' => 'MAF',
            'name' => 'Saint Martin (French part);',
            ),
            190 => 
            array (
                'id' => 666,
                'iso2' => 'PM',
                'iso3' => 'SPM',
                'name' => 'Saint Pierre and Miquelon',
            ),
            191 => 
            array (
                'id' => 670,
                'iso2' => 'VC',
                'iso3' => 'VCT',
                'name' => 'Saint Vincent and the Grenadines',
            ),
            192 => 
            array (
                'id' => 674,
                'iso2' => 'SM',
                'iso3' => 'SMR',
                'name' => 'San Marino',
            ),
            193 => 
            array (
                'id' => 678,
                'iso2' => 'ST',
                'iso3' => 'STP',
                'name' => 'Sao Tome and Principe',
            ),
            194 => 
            array (
                'id' => 682,
                'iso2' => 'SA',
                'iso3' => 'SAU',
                'name' => 'Saudi Arabia',
            ),
            195 => 
            array (
                'id' => 686,
                'iso2' => 'SN',
                'iso3' => 'SEN',
                'name' => 'Senegal',
            ),
            196 => 
            array (
                'id' => 688,
                'iso2' => 'RS',
                'iso3' => 'SRB',
                'name' => 'Serbia[5]',
            ),
            197 => 
            array (
                'id' => 690,
                'iso2' => 'SC',
                'iso3' => 'SYC',
                'name' => 'Seychelles',
            ),
            198 => 
            array (
                'id' => 694,
                'iso2' => 'SL',
                'iso3' => 'SLE',
                'name' => 'Sierra Leone',
            ),
            199 => 
            array (
                'id' => 702,
                'iso2' => 'SG',
                'iso3' => 'SGP',
                'name' => 'Singapore',
            ),
            200 => 
            array (
                'id' => 703,
                'iso2' => 'SK',
                'iso3' => 'SVK',
                'name' => 'Slovakia',
            ),
            201 => 
            array (
                'id' => 704,
                'iso2' => 'VN',
                'iso3' => 'VNM',
                'name' => 'Viet Nam',
            ),
            202 => 
            array (
                'id' => 705,
                'iso2' => 'SI',
                'iso3' => 'SVN',
                'name' => 'Slovenia',
            ),
            203 => 
            array (
                'id' => 706,
                'iso2' => 'SO',
                'iso3' => 'SOM',
                'name' => 'Somalia',
            ),
            204 => 
            array (
                'id' => 710,
                'iso2' => 'ZA',
                'iso3' => 'ZAF',
                'name' => 'South Africa',
            ),
            205 => 
            array (
                'id' => 716,
                'iso2' => 'ZW',
                'iso3' => 'ZWE',
                'name' => 'Zimbabwe',
            ),
            206 => 
            array (
                'id' => 724,
                'iso2' => 'ES',
                'iso3' => 'ESP',
                'name' => 'Spain',
            ),
            207 => 
            array (
                'id' => 732,
                'iso2' => 'EH',
                'iso3' => 'ESH',
                'name' => 'Western Sahara',
            ),
            208 => 
            array (
                'id' => 736,
                'iso2' => 'SD',
                'iso3' => 'SDN',
                'name' => 'Sudan',
            ),
            209 => 
            array (
                'id' => 740,
                'iso2' => 'SR',
                'iso3' => 'SUR',
                'name' => 'Suriname',
            ),
            210 => 
            array (
                'id' => 744,
                'iso2' => 'SJ',
                'iso3' => 'SJM',
                'name' => 'Svalbard and Jan Mayen',
            ),
            211 => 
            array (
                'id' => 748,
                'iso2' => 'SZ',
                'iso3' => 'SWZ',
                'name' => 'Swaziland',
            ),
            212 => 
            array (
                'id' => 752,
                'iso2' => 'SE',
                'iso3' => 'SWE',
                'name' => 'Sweden',
            ),
            213 => 
            array (
                'id' => 756,
                'iso2' => 'CH',
                'iso3' => 'CHE',
                'name' => 'Switzerland',
            ),
            214 => 
            array (
                'id' => 760,
                'iso2' => 'SY',
                'iso3' => 'SYR',
                'name' => 'Syrian Arab Republic',
            ),
            215 => 
            array (
                'id' => 762,
                'iso2' => 'TJ',
                'iso3' => 'TJK',
                'name' => 'Tajikistan',
            ),
            216 => 
            array (
                'id' => 764,
                'iso2' => 'TH',
                'iso3' => 'THA',
                'name' => 'Thailand',
            ),
            217 => 
            array (
                'id' => 768,
                'iso2' => 'TG',
                'iso3' => 'TGO',
                'name' => 'Togo',
            ),
            218 => 
            array (
                'id' => 772,
                'iso2' => 'TK',
                'iso3' => 'TKL',
                'name' => 'Tokelau',
            ),
            219 => 
            array (
                'id' => 776,
                'iso2' => 'TO',
                'iso3' => 'TON',
                'name' => 'Tonga',
            ),
            220 => 
            array (
                'id' => 780,
                'iso2' => 'TT',
                'iso3' => 'TTO',
                'name' => 'Trinidad and Tobago',
            ),
            221 => 
            array (
                'id' => 784,
                'iso2' => 'AE',
                'iso3' => 'ARE',
                'name' => 'United Arab Emirates',
            ),
            222 => 
            array (
                'id' => 788,
                'iso2' => 'TN',
                'iso3' => 'TUN',
                'name' => 'Tunisia',
            ),
            223 => 
            array (
                'id' => 792,
                'iso2' => 'TR',
                'iso3' => 'TUR',
                'name' => 'Turkey',
            ),
            224 => 
            array (
                'id' => 795,
                'iso2' => 'TM',
                'iso3' => 'TKM',
                'name' => 'Turkmenistan',
            ),
            225 => 
            array (
                'id' => 796,
                'iso2' => 'TC',
                'iso3' => 'TCA',
                'name' => 'Turks and Caicos Islands',
            ),
            226 => 
            array (
                'id' => 798,
                'iso2' => 'TV',
                'iso3' => 'TUV',
                'name' => 'Tuvalu',
            ),
            227 => 
            array (
                'id' => 800,
                'iso2' => 'UG',
                'iso3' => 'UGA',
                'name' => 'Uganda',
            ),
            228 => 
            array (
                'id' => 804,
                'iso2' => 'UA',
                'iso3' => 'UKR',
                'name' => 'Ukraine',
            ),
            229 => 
            array (
                'id' => 807,
                'iso2' => 'MK',
                'iso3' => 'MKD',
                'name' => 'Macedonia, the former Yugoslav Republic of',
            ),
            230 => 
            array (
                'id' => 818,
                'iso2' => 'EG',
                'iso3' => 'EGY',
                'name' => 'Egypt',
            ),
            231 => 
            array (
                'id' => 826,
                'iso2' => 'GB',
                'iso3' => 'GBR',
                'name' => 'United Kingdom',
            ),
            232 => 
            array (
                'id' => 831,
                'iso2' => 'GG',
                'iso3' => 'GGY',
                'name' => 'Guernsey',
            ),
            233 => 
            array (
                'id' => 832,
                'iso2' => 'JE',
                'iso3' => 'JEY',
                'name' => 'Jersey',
            ),
            234 => 
            array (
                'id' => 833,
                'iso2' => 'IM',
                'iso3' => 'IMN',
                'name' => 'Isle of Man',
            ),
            235 => 
            array (
                'id' => 834,
                'iso2' => 'TZ',
                'iso3' => 'TZA',
                'name' => 'Tanzania, United Republic of',
            ),
            236 => 
            array (
                'id' => 840,
                'iso2' => 'US',
                'iso3' => 'USA',
                'name' => 'United States',
            ),
            237 => 
            array (
                'id' => 850,
                'iso2' => 'VI',
                'iso3' => 'VIR',
                'name' => 'Virgin Islands, U.S.',
            ),
            238 => 
            array (
                'id' => 854,
                'iso2' => 'BF',
                'iso3' => 'BFA',
                'name' => 'Burkina Faso',
            ),
            239 => 
            array (
                'id' => 858,
                'iso2' => 'UY',
                'iso3' => 'URY',
                'name' => 'Uruguay',
            ),
            240 => 
            array (
                'id' => 860,
                'iso2' => 'UZ',
                'iso3' => 'UZB',
                'name' => 'Uzbekistan',
            ),
            241 => 
            array (
                'id' => 862,
                'iso2' => 'VE',
                'iso3' => 'VEN',
                'name' => 'Venezuela',
            ),
            242 => 
            array (
                'id' => 876,
                'iso2' => 'WF',
                'iso3' => 'WLF',
                'name' => 'Wallis and Futuna',
            ),
            243 => 
            array (
                'id' => 882,
                'iso2' => 'WS',
                'iso3' => 'WSM',
                'name' => 'Samoa',
            ),
            244 => 
            array (
                'id' => 887,
                'iso2' => 'YE',
                'iso3' => 'YEM',
                'name' => 'Yemen',
            ),
            245 => 
            array (
                'id' => 894,
                'iso2' => 'ZM',
                'iso3' => 'ZMB',
                'name' => 'Zambia',
            ),
        ));
        
        
    }
}