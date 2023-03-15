<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('cities')->delete();
        
        DB::table('cities')->insert(array (
            0 => 
            array (
                'city_id' => 1,
                'city_name' => 'PIDIE JAYA',
                'prov_id' => 1,
            ),
            1 => 
            array (
                'city_id' => 2,
                'city_name' => 'SIMEULUE',
                'prov_id' => 1,
            ),
            2 => 
            array (
                'city_id' => 3,
                'city_name' => 'BIREUEN',
                'prov_id' => 1,
            ),
            3 => 
            array (
                'city_id' => 4,
                'city_name' => 'ACEH TIMUR',
                'prov_id' => 1,
            ),
            4 => 
            array (
                'city_id' => 5,
                'city_name' => 'ACEH UTARA',
                'prov_id' => 1,
            ),
            5 => 
            array (
                'city_id' => 6,
                'city_name' => 'PIDIE',
                'prov_id' => 1,
            ),
            6 => 
            array (
                'city_id' => 7,
                'city_name' => 'ACEH BARAT DAYA',
                'prov_id' => 1,
            ),
            7 => 
            array (
                'city_id' => 8,
                'city_name' => 'GAYO LUES',
                'prov_id' => 1,
            ),
            8 => 
            array (
                'city_id' => 9,
                'city_name' => 'ACEH SELATAN',
                'prov_id' => 1,
            ),
            9 => 
            array (
                'city_id' => 10,
                'city_name' => 'ACEH TAMIANG',
                'prov_id' => 1,
            ),
            10 => 
            array (
                'city_id' => 11,
                'city_name' => 'ACEH BESAR',
                'prov_id' => 1,
            ),
            11 => 
            array (
                'city_id' => 12,
                'city_name' => 'ACEH TENGGARA',
                'prov_id' => 1,
            ),
            12 => 
            array (
                'city_id' => 13,
                'city_name' => 'BENER MERIAH',
                'prov_id' => 1,
            ),
            13 => 
            array (
                'city_id' => 14,
                'city_name' => 'ACEH JAYA',
                'prov_id' => 1,
            ),
            14 => 
            array (
                'city_id' => 15,
                'city_name' => 'LHOKSEUMAWE',
                'prov_id' => 1,
            ),
            15 => 
            array (
                'city_id' => 16,
                'city_name' => 'ACEH BARAT',
                'prov_id' => 1,
            ),
            16 => 
            array (
                'city_id' => 17,
                'city_name' => 'NAGAN RAYA',
                'prov_id' => 1,
            ),
            17 => 
            array (
                'city_id' => 18,
                'city_name' => 'LANGSA',
                'prov_id' => 1,
            ),
            18 => 
            array (
                'city_id' => 19,
                'city_name' => 'BANDA ACEH',
                'prov_id' => 1,
            ),
            19 => 
            array (
                'city_id' => 20,
                'city_name' => 'ACEH SINGKIL',
                'prov_id' => 1,
            ),
            20 => 
            array (
                'city_id' => 21,
                'city_name' => 'SABANG',
                'prov_id' => 1,
            ),
            21 => 
            array (
                'city_id' => 22,
                'city_name' => 'ACEH TENGAH',
                'prov_id' => 1,
            ),
            22 => 
            array (
                'city_id' => 23,
                'city_name' => 'SUBULUSSALAM',
                'prov_id' => 1,
            ),
            23 => 
            array (
                'city_id' => 24,
                'city_name' => 'NIAS SELATAN',
                'prov_id' => 2,
            ),
            24 => 
            array (
                'city_id' => 25,
                'city_name' => 'MANDAILING NATAL',
                'prov_id' => 2,
            ),
            25 => 
            array (
                'city_id' => 26,
                'city_name' => 'DAIRI',
                'prov_id' => 2,
            ),
            26 => 
            array (
                'city_id' => 27,
                'city_name' => 'LABUHAN BATU UTARA',
                'prov_id' => 2,
            ),
            27 => 
            array (
                'city_id' => 28,
                'city_name' => 'TAPANULI UTARA',
                'prov_id' => 2,
            ),
            28 => 
            array (
                'city_id' => 29,
                'city_name' => 'SIMALUNGUN',
                'prov_id' => 2,
            ),
            29 => 
            array (
                'city_id' => 30,
                'city_name' => 'LANGKAT',
                'prov_id' => 2,
            ),
            30 => 
            array (
                'city_id' => 31,
                'city_name' => 'SERDANG BEDAGAI',
                'prov_id' => 2,
            ),
            31 => 
            array (
                'city_id' => 32,
                'city_name' => 'TAPANULI SELATAN',
                'prov_id' => 2,
            ),
            32 => 
            array (
                'city_id' => 33,
                'city_name' => 'ASAHAN',
                'prov_id' => 2,
            ),
            33 => 
            array (
                'city_id' => 34,
                'city_name' => 'PADANG LAWAS UTARA',
                'prov_id' => 2,
            ),
            34 => 
            array (
                'city_id' => 35,
                'city_name' => 'PADANG LAWAS',
                'prov_id' => 2,
            ),
            35 => 
            array (
                'city_id' => 36,
                'city_name' => 'LABUHAN BATU SELATAN',
                'prov_id' => 2,
            ),
            36 => 
            array (
                'city_id' => 37,
                'city_name' => 'PADANG SIDEMPUAN',
                'prov_id' => 2,
            ),
            37 => 
            array (
                'city_id' => 38,
                'city_name' => 'TOBA SAMOSIR',
                'prov_id' => 2,
            ),
            38 => 
            array (
                'city_id' => 39,
                'city_name' => 'TAPANULI TENGAH',
                'prov_id' => 2,
            ),
            39 => 
            array (
                'city_id' => 40,
                'city_name' => 'HUMBANG HASUNDUTAN',
                'prov_id' => 2,
            ),
            40 => 
            array (
                'city_id' => 41,
                'city_name' => 'SIBOLGA',
                'prov_id' => 2,
            ),
            41 => 
            array (
                'city_id' => 42,
                'city_name' => 'BATU BARA',
                'prov_id' => 2,
            ),
            42 => 
            array (
                'city_id' => 43,
                'city_name' => 'SAMOSIR',
                'prov_id' => 2,
            ),
            43 => 
            array (
                'city_id' => 44,
                'city_name' => 'PEMATANG SIANTAR',
                'prov_id' => 2,
            ),
            44 => 
            array (
                'city_id' => 45,
                'city_name' => 'LABUHAN BATU',
                'prov_id' => 2,
            ),
            45 => 
            array (
                'city_id' => 46,
                'city_name' => 'DELI SERDANG',
                'prov_id' => 2,
            ),
            46 => 
            array (
                'city_id' => 47,
                'city_name' => 'GUNUNGSITOLI',
                'prov_id' => 2,
            ),
            47 => 
            array (
                'city_id' => 48,
                'city_name' => 'NIAS UTARA',
                'prov_id' => 2,
            ),
            48 => 
            array (
                'city_id' => 49,
                'city_name' => 'NIAS',
                'prov_id' => 2,
            ),
            49 => 
            array (
                'city_id' => 50,
                'city_name' => 'KARO',
                'prov_id' => 2,
            ),
            50 => 
            array (
                'city_id' => 51,
                'city_name' => 'NIAS BARAT',
                'prov_id' => 2,
            ),
            51 => 
            array (
                'city_id' => 52,
                'city_name' => 'MEDAN',
                'prov_id' => 2,
            ),
            52 => 
            array (
                'city_id' => 53,
                'city_name' => 'PAKPAK BHARAT',
                'prov_id' => 2,
            ),
            53 => 
            array (
                'city_id' => 54,
                'city_name' => 'TEBING TINGGI',
                'prov_id' => 2,
            ),
            54 => 
            array (
                'city_id' => 55,
                'city_name' => 'BINJAI',
                'prov_id' => 2,
            ),
            55 => 
            array (
                'city_id' => 56,
                'city_name' => 'TANJUNG BALAI',
                'prov_id' => 2,
            ),
            56 => 
            array (
                'city_id' => 57,
                'city_name' => 'DHARMASRAYA',
                'prov_id' => 3,
            ),
            57 => 
            array (
                'city_id' => 58,
                'city_name' => 'SOLOK SELATAN',
                'prov_id' => 3,
            ),
            58 => 
            array (
                'city_id' => 59,
            'city_name' => 'SIJUNJUNG (SAWAH LUNTO SIJUNJUNG)',
                'prov_id' => 3,
            ),
            59 => 
            array (
                'city_id' => 60,
                'city_name' => 'PASAMAN BARAT',
                'prov_id' => 3,
            ),
            60 => 
            array (
                'city_id' => 61,
                'city_name' => 'SOLOK',
                'prov_id' => 3,
            ),
            61 => 
            array (
                'city_id' => 62,
                'city_name' => 'PASAMAN',
                'prov_id' => 3,
            ),
            62 => 
            array (
                'city_id' => 63,
                'city_name' => 'PARIAMAN',
                'prov_id' => 3,
            ),
            63 => 
            array (
                'city_id' => 64,
                'city_name' => 'TANAH DATAR',
                'prov_id' => 3,
            ),
            64 => 
            array (
                'city_id' => 65,
                'city_name' => 'PADANG PARIAMAN',
                'prov_id' => 3,
            ),
            65 => 
            array (
                'city_id' => 66,
                'city_name' => 'PESISIR SELATAN',
                'prov_id' => 3,
            ),
            66 => 
            array (
                'city_id' => 67,
                'city_name' => 'PADANG',
                'prov_id' => 3,
            ),
            67 => 
            array (
                'city_id' => 68,
                'city_name' => 'SAWAH LUNTO',
                'prov_id' => 3,
            ),
            68 => 
            array (
                'city_id' => 69,
                'city_name' => 'LIMA PULUH KOTO / KOTA',
                'prov_id' => 3,
            ),
            69 => 
            array (
                'city_id' => 70,
                'city_name' => 'AGAM',
                'prov_id' => 3,
            ),
            70 => 
            array (
                'city_id' => 71,
                'city_name' => 'PAYAKUMBUH',
                'prov_id' => 3,
            ),
            71 => 
            array (
                'city_id' => 72,
                'city_name' => 'BUKITTINGGI',
                'prov_id' => 3,
            ),
            72 => 
            array (
                'city_id' => 73,
                'city_name' => 'PADANG PANJANG',
                'prov_id' => 3,
            ),
            73 => 
            array (
                'city_id' => 74,
                'city_name' => 'KEPULAUAN MENTAWAI',
                'prov_id' => 3,
            ),
            74 => 
            array (
                'city_id' => 75,
                'city_name' => 'INDRAGIRI HILIR',
                'prov_id' => 4,
            ),
            75 => 
            array (
                'city_id' => 76,
                'city_name' => 'KUANTAN SINGINGI',
                'prov_id' => 4,
            ),
            76 => 
            array (
                'city_id' => 77,
                'city_name' => 'PELALAWAN',
                'prov_id' => 4,
            ),
            77 => 
            array (
                'city_id' => 78,
                'city_name' => 'PEKANBARU',
                'prov_id' => 4,
            ),
            78 => 
            array (
                'city_id' => 79,
                'city_name' => 'ROKAN HILIR',
                'prov_id' => 4,
            ),
            79 => 
            array (
                'city_id' => 80,
                'city_name' => 'BENGKALIS',
                'prov_id' => 4,
            ),
            80 => 
            array (
                'city_id' => 81,
                'city_name' => 'INDRAGIRI HULU',
                'prov_id' => 4,
            ),
            81 => 
            array (
                'city_id' => 82,
                'city_name' => 'ROKAN HULU',
                'prov_id' => 4,
            ),
            82 => 
            array (
                'city_id' => 83,
                'city_name' => 'KAMPAR',
                'prov_id' => 4,
            ),
            83 => 
            array (
                'city_id' => 84,
                'city_name' => 'KEPULAUAN MERANTI',
                'prov_id' => 4,
            ),
            84 => 
            array (
                'city_id' => 85,
                'city_name' => 'DUMAI',
                'prov_id' => 4,
            ),
            85 => 
            array (
                'city_id' => 86,
                'city_name' => 'SIAK',
                'prov_id' => 4,
            ),
            86 => 
            array (
                'city_id' => 87,
                'city_name' => 'TEBO',
                'prov_id' => 5,
            ),
            87 => 
            array (
                'city_id' => 88,
                'city_name' => 'TANJUNG JABUNG BARAT',
                'prov_id' => 5,
            ),
            88 => 
            array (
                'city_id' => 89,
                'city_name' => 'MUARO JAMBI',
                'prov_id' => 5,
            ),
            89 => 
            array (
                'city_id' => 90,
                'city_name' => 'KERINCI',
                'prov_id' => 5,
            ),
            90 => 
            array (
                'city_id' => 91,
                'city_name' => 'MERANGIN',
                'prov_id' => 5,
            ),
            91 => 
            array (
                'city_id' => 92,
                'city_name' => 'BUNGO',
                'prov_id' => 5,
            ),
            92 => 
            array (
                'city_id' => 93,
                'city_name' => 'TANJUNG JABUNG TIMUR',
                'prov_id' => 5,
            ),
            93 => 
            array (
                'city_id' => 94,
                'city_name' => 'SUNGAIPENUH',
                'prov_id' => 5,
            ),
            94 => 
            array (
                'city_id' => 95,
                'city_name' => 'BATANG HARI',
                'prov_id' => 5,
            ),
            95 => 
            array (
                'city_id' => 96,
                'city_name' => 'JAMBI',
                'prov_id' => 5,
            ),
            96 => 
            array (
                'city_id' => 97,
                'city_name' => 'SAROLANGUN',
                'prov_id' => 5,
            ),
            97 => 
            array (
                'city_id' => 98,
                'city_name' => 'PALEMBANG',
                'prov_id' => 6,
            ),
            98 => 
            array (
                'city_id' => 99,
                'city_name' => 'LAHAT',
                'prov_id' => 6,
            ),
            99 => 
            array (
                'city_id' => 100,
                'city_name' => 'OGAN KOMERING ULU TIMUR',
                'prov_id' => 6,
            ),
            100 => 
            array (
                'city_id' => 101,
                'city_name' => 'MUSI BANYUASIN',
                'prov_id' => 6,
            ),
            101 => 
            array (
                'city_id' => 102,
                'city_name' => 'PAGAR ALAM',
                'prov_id' => 6,
            ),
            102 => 
            array (
                'city_id' => 103,
                'city_name' => 'OGAN KOMERING ULU SELATAN',
                'prov_id' => 6,
            ),
            103 => 
            array (
                'city_id' => 104,
                'city_name' => 'BANYUASIN',
                'prov_id' => 6,
            ),
            104 => 
            array (
                'city_id' => 105,
                'city_name' => 'MUSI RAWAS',
                'prov_id' => 6,
            ),
            105 => 
            array (
                'city_id' => 106,
                'city_name' => 'MUARA ENIM',
                'prov_id' => 6,
            ),
            106 => 
            array (
                'city_id' => 107,
                'city_name' => 'OGAN KOMERING ULU',
                'prov_id' => 6,
            ),
            107 => 
            array (
                'city_id' => 108,
                'city_name' => 'OGAN KOMERING ILIR',
                'prov_id' => 6,
            ),
            108 => 
            array (
                'city_id' => 109,
                'city_name' => 'EMPAT LAWANG',
                'prov_id' => 6,
            ),
            109 => 
            array (
                'city_id' => 110,
                'city_name' => 'LUBUK LINGGAU',
                'prov_id' => 6,
            ),
            110 => 
            array (
                'city_id' => 111,
                'city_name' => 'PRABUMULIH',
                'prov_id' => 6,
            ),
            111 => 
            array (
                'city_id' => 112,
                'city_name' => 'OGAN ILIR',
                'prov_id' => 6,
            ),
            112 => 
            array (
                'city_id' => 113,
                'city_name' => 'BENGKULU TENGAH',
                'prov_id' => 7,
            ),
            113 => 
            array (
                'city_id' => 114,
                'city_name' => 'REJANG LEBONG',
                'prov_id' => 7,
            ),
            114 => 
            array (
                'city_id' => 115,
                'city_name' => 'MUKO MUKO',
                'prov_id' => 7,
            ),
            115 => 
            array (
                'city_id' => 116,
                'city_name' => 'KAUR',
                'prov_id' => 7,
            ),
            116 => 
            array (
                'city_id' => 117,
                'city_name' => 'BENGKULU UTARA',
                'prov_id' => 7,
            ),
            117 => 
            array (
                'city_id' => 118,
                'city_name' => 'LEBONG',
                'prov_id' => 7,
            ),
            118 => 
            array (
                'city_id' => 119,
                'city_name' => 'KEPAHIANG',
                'prov_id' => 7,
            ),
            119 => 
            array (
                'city_id' => 120,
                'city_name' => 'BENGKULU SELATAN',
                'prov_id' => 7,
            ),
            120 => 
            array (
                'city_id' => 121,
                'city_name' => 'SELUMA',
                'prov_id' => 7,
            ),
            121 => 
            array (
                'city_id' => 122,
                'city_name' => 'BENGKULU',
                'prov_id' => 7,
            ),
            122 => 
            array (
                'city_id' => 123,
                'city_name' => 'LAMPUNG UTARA',
                'prov_id' => 8,
            ),
            123 => 
            array (
                'city_id' => 124,
                'city_name' => 'WAY KANAN',
                'prov_id' => 8,
            ),
            124 => 
            array (
                'city_id' => 125,
                'city_name' => 'LAMPUNG TENGAH',
                'prov_id' => 8,
            ),
            125 => 
            array (
                'city_id' => 126,
                'city_name' => 'MESUJI',
                'prov_id' => 8,
            ),
            126 => 
            array (
                'city_id' => 127,
                'city_name' => 'PRINGSEWU',
                'prov_id' => 8,
            ),
            127 => 
            array (
                'city_id' => 128,
                'city_name' => 'LAMPUNG TIMUR',
                'prov_id' => 8,
            ),
            128 => 
            array (
                'city_id' => 129,
                'city_name' => 'LAMPUNG SELATAN',
                'prov_id' => 8,
            ),
            129 => 
            array (
                'city_id' => 130,
                'city_name' => 'TULANG BAWANG',
                'prov_id' => 8,
            ),
            130 => 
            array (
                'city_id' => 131,
                'city_name' => 'TULANG BAWANG BARAT',
                'prov_id' => 8,
            ),
            131 => 
            array (
                'city_id' => 132,
                'city_name' => 'TANGGAMUS',
                'prov_id' => 8,
            ),
            132 => 
            array (
                'city_id' => 133,
                'city_name' => 'LAMPUNG BARAT',
                'prov_id' => 8,
            ),
            133 => 
            array (
                'city_id' => 134,
                'city_name' => 'PESISIR BARAT',
                'prov_id' => 8,
            ),
            134 => 
            array (
                'city_id' => 135,
                'city_name' => 'PESAWARAN',
                'prov_id' => 8,
            ),
            135 => 
            array (
                'city_id' => 136,
                'city_name' => 'BANDAR LAMPUNG',
                'prov_id' => 8,
            ),
            136 => 
            array (
                'city_id' => 137,
                'city_name' => 'METRO',
                'prov_id' => 8,
            ),
            137 => 
            array (
                'city_id' => 138,
                'city_name' => 'BELITUNG',
                'prov_id' => 9,
            ),
            138 => 
            array (
                'city_id' => 139,
                'city_name' => 'BELITUNG TIMUR',
                'prov_id' => 9,
            ),
            139 => 
            array (
                'city_id' => 140,
                'city_name' => 'BANGKA',
                'prov_id' => 9,
            ),
            140 => 
            array (
                'city_id' => 141,
                'city_name' => 'BANGKA SELATAN',
                'prov_id' => 9,
            ),
            141 => 
            array (
                'city_id' => 142,
                'city_name' => 'BANGKA BARAT',
                'prov_id' => 9,
            ),
            142 => 
            array (
                'city_id' => 143,
                'city_name' => 'PANGKAL PINANG',
                'prov_id' => 9,
            ),
            143 => 
            array (
                'city_id' => 144,
                'city_name' => 'BANGKA TENGAH',
                'prov_id' => 9,
            ),
            144 => 
            array (
                'city_id' => 145,
                'city_name' => 'KEPULAUAN ANAMBAS',
                'prov_id' => 10,
            ),
            145 => 
            array (
                'city_id' => 146,
                'city_name' => 'BINTAN',
                'prov_id' => 10,
            ),
            146 => 
            array (
                'city_id' => 147,
                'city_name' => 'NATUNA',
                'prov_id' => 10,
            ),
            147 => 
            array (
                'city_id' => 148,
                'city_name' => 'BATAM',
                'prov_id' => 10,
            ),
            148 => 
            array (
                'city_id' => 149,
                'city_name' => 'TANJUNG PINANG',
                'prov_id' => 10,
            ),
            149 => 
            array (
                'city_id' => 150,
                'city_name' => 'KARIMUN',
                'prov_id' => 10,
            ),
            150 => 
            array (
                'city_id' => 151,
                'city_name' => 'LINGGA',
                'prov_id' => 10,
            ),
            151 => 
            array (
                'city_id' => 152,
                'city_name' => 'JAKARTA UTARA',
                'prov_id' => 11,
            ),
            152 => 
            array (
                'city_id' => 153,
                'city_name' => 'JAKARTA BARAT',
                'prov_id' => 11,
            ),
            153 => 
            array (
                'city_id' => 154,
                'city_name' => 'JAKARTA TIMUR',
                'prov_id' => 11,
            ),
            154 => 
            array (
                'city_id' => 155,
                'city_name' => 'JAKARTA SELATAN',
                'prov_id' => 11,
            ),
            155 => 
            array (
                'city_id' => 156,
                'city_name' => 'JAKARTA PUSAT',
                'prov_id' => 11,
            ),
            156 => 
            array (
                'city_id' => 157,
                'city_name' => 'KEPULAUAN SERIBU',
                'prov_id' => 11,
            ),
            157 => 
            array (
                'city_id' => 158,
                'city_name' => 'DEPOK',
                'prov_id' => 12,
            ),
            158 => 
            array (
                'city_id' => 159,
                'city_name' => 'KARAWANG',
                'prov_id' => 12,
            ),
            159 => 
            array (
                'city_id' => 160,
                'city_name' => 'CIREBON',
                'prov_id' => 12,
            ),
            160 => 
            array (
                'city_id' => 161,
                'city_name' => 'BANDUNG',
                'prov_id' => 12,
            ),
            161 => 
            array (
                'city_id' => 162,
                'city_name' => 'SUKABUMI',
                'prov_id' => 12,
            ),
            162 => 
            array (
                'city_id' => 163,
                'city_name' => 'SUMEDANG',
                'prov_id' => 12,
            ),
            163 => 
            array (
                'city_id' => 164,
                'city_name' => 'INDRAMAYU',
                'prov_id' => 12,
            ),
            164 => 
            array (
                'city_id' => 165,
                'city_name' => 'MAJALENGKA',
                'prov_id' => 12,
            ),
            165 => 
            array (
                'city_id' => 166,
                'city_name' => 'KUNINGAN',
                'prov_id' => 12,
            ),
            166 => 
            array (
                'city_id' => 167,
                'city_name' => 'TASIKMALAYA',
                'prov_id' => 12,
            ),
            167 => 
            array (
                'city_id' => 168,
                'city_name' => 'CIAMIS',
                'prov_id' => 12,
            ),
            168 => 
            array (
                'city_id' => 169,
                'city_name' => 'SUBANG',
                'prov_id' => 12,
            ),
            169 => 
            array (
                'city_id' => 170,
                'city_name' => 'PURWAKARTA',
                'prov_id' => 12,
            ),
            170 => 
            array (
                'city_id' => 171,
                'city_name' => 'BOGOR',
                'prov_id' => 12,
            ),
            171 => 
            array (
                'city_id' => 172,
                'city_name' => 'BEKASI',
                'prov_id' => 12,
            ),
            172 => 
            array (
                'city_id' => 173,
                'city_name' => 'GARUT',
                'prov_id' => 12,
            ),
            173 => 
            array (
                'city_id' => 174,
                'city_name' => 'PANGANDARAN',
                'prov_id' => 12,
            ),
            174 => 
            array (
                'city_id' => 175,
                'city_name' => 'CIANJUR',
                'prov_id' => 12,
            ),
            175 => 
            array (
                'city_id' => 176,
                'city_name' => 'BANJAR',
                'prov_id' => 12,
            ),
            176 => 
            array (
                'city_id' => 177,
                'city_name' => 'BANDUNG BARAT',
                'prov_id' => 12,
            ),
            177 => 
            array (
                'city_id' => 178,
                'city_name' => 'CIMAHI',
                'prov_id' => 12,
            ),
            178 => 
            array (
                'city_id' => 179,
                'city_name' => 'PURBALINGGA',
                'prov_id' => 13,
            ),
            179 => 
            array (
                'city_id' => 180,
                'city_name' => 'KEBUMEN',
                'prov_id' => 13,
            ),
            180 => 
            array (
                'city_id' => 181,
                'city_name' => 'MAGELANG',
                'prov_id' => 13,
            ),
            181 => 
            array (
                'city_id' => 182,
                'city_name' => 'CILACAP',
                'prov_id' => 13,
            ),
            182 => 
            array (
                'city_id' => 183,
                'city_name' => 'BATANG',
                'prov_id' => 13,
            ),
            183 => 
            array (
                'city_id' => 184,
                'city_name' => 'BANJARNEGARA',
                'prov_id' => 13,
            ),
            184 => 
            array (
                'city_id' => 185,
                'city_name' => 'BLORA',
                'prov_id' => 13,
            ),
            185 => 
            array (
                'city_id' => 186,
                'city_name' => 'BREBES',
                'prov_id' => 13,
            ),
            186 => 
            array (
                'city_id' => 187,
                'city_name' => 'BANYUMAS',
                'prov_id' => 13,
            ),
            187 => 
            array (
                'city_id' => 188,
                'city_name' => 'WONOSOBO',
                'prov_id' => 13,
            ),
            188 => 
            array (
                'city_id' => 189,
                'city_name' => 'TEGAL',
                'prov_id' => 13,
            ),
            189 => 
            array (
                'city_id' => 190,
                'city_name' => 'PURWOREJO',
                'prov_id' => 13,
            ),
            190 => 
            array (
                'city_id' => 191,
                'city_name' => 'PATI',
                'prov_id' => 13,
            ),
            191 => 
            array (
                'city_id' => 192,
                'city_name' => 'SUKOHARJO',
                'prov_id' => 13,
            ),
            192 => 
            array (
                'city_id' => 193,
                'city_name' => 'KARANGANYAR',
                'prov_id' => 13,
            ),
            193 => 
            array (
                'city_id' => 194,
                'city_name' => 'PEKALONGAN',
                'prov_id' => 13,
            ),
            194 => 
            array (
                'city_id' => 195,
                'city_name' => 'PEMALANG',
                'prov_id' => 13,
            ),
            195 => 
            array (
                'city_id' => 196,
                'city_name' => 'BOYOLALI',
                'prov_id' => 13,
            ),
            196 => 
            array (
                'city_id' => 197,
                'city_name' => 'GROBOGAN',
                'prov_id' => 13,
            ),
            197 => 
            array (
                'city_id' => 198,
                'city_name' => 'SEMARANG',
                'prov_id' => 13,
            ),
            198 => 
            array (
                'city_id' => 199,
                'city_name' => 'DEMAK',
                'prov_id' => 13,
            ),
            199 => 
            array (
                'city_id' => 200,
                'city_name' => 'REMBANG',
                'prov_id' => 13,
            ),
            200 => 
            array (
                'city_id' => 201,
                'city_name' => 'KLATEN',
                'prov_id' => 13,
            ),
            201 => 
            array (
                'city_id' => 202,
                'city_name' => 'KUDUS',
                'prov_id' => 13,
            ),
            202 => 
            array (
                'city_id' => 203,
                'city_name' => 'TEMANGGUNG',
                'prov_id' => 13,
            ),
            203 => 
            array (
                'city_id' => 204,
                'city_name' => 'SRAGEN',
                'prov_id' => 13,
            ),
            204 => 
            array (
                'city_id' => 205,
                'city_name' => 'JEPARA',
                'prov_id' => 13,
            ),
            205 => 
            array (
                'city_id' => 206,
                'city_name' => 'WONOGIRI',
                'prov_id' => 13,
            ),
            206 => 
            array (
                'city_id' => 207,
                'city_name' => 'KENDAL',
                'prov_id' => 13,
            ),
            207 => 
            array (
                'city_id' => 208,
            'city_name' => 'SURAKARTA (SOLO)',
                'prov_id' => 13,
            ),
            208 => 
            array (
                'city_id' => 209,
                'city_name' => 'SALATIGA',
                'prov_id' => 13,
            ),
            209 => 
            array (
                'city_id' => 210,
                'city_name' => 'SLEMAN',
                'prov_id' => 14,
            ),
            210 => 
            array (
                'city_id' => 211,
                'city_name' => 'BANTUL',
                'prov_id' => 14,
            ),
            211 => 
            array (
                'city_id' => 212,
                'city_name' => 'YOGYAKARTA',
                'prov_id' => 14,
            ),
            212 => 
            array (
                'city_id' => 213,
                'city_name' => 'GUNUNG KIDUL',
                'prov_id' => 14,
            ),
            213 => 
            array (
                'city_id' => 214,
                'city_name' => 'KULON PROGO',
                'prov_id' => 14,
            ),
            214 => 
            array (
                'city_id' => 215,
                'city_name' => 'GRESIK',
                'prov_id' => 15,
            ),
            215 => 
            array (
                'city_id' => 216,
                'city_name' => 'KEDIRI',
                'prov_id' => 15,
            ),
            216 => 
            array (
                'city_id' => 217,
                'city_name' => 'SAMPANG',
                'prov_id' => 15,
            ),
            217 => 
            array (
                'city_id' => 218,
                'city_name' => 'BANGKALAN',
                'prov_id' => 15,
            ),
            218 => 
            array (
                'city_id' => 219,
                'city_name' => 'SUMENEP',
                'prov_id' => 15,
            ),
            219 => 
            array (
                'city_id' => 220,
                'city_name' => 'SITUBONDO',
                'prov_id' => 15,
            ),
            220 => 
            array (
                'city_id' => 221,
                'city_name' => 'SURABAYA',
                'prov_id' => 15,
            ),
            221 => 
            array (
                'city_id' => 222,
                'city_name' => 'JEMBER',
                'prov_id' => 15,
            ),
            222 => 
            array (
                'city_id' => 223,
                'city_name' => 'PAMEKASAN',
                'prov_id' => 15,
            ),
            223 => 
            array (
                'city_id' => 224,
                'city_name' => 'JOMBANG',
                'prov_id' => 15,
            ),
            224 => 
            array (
                'city_id' => 225,
                'city_name' => 'PROBOLINGGO',
                'prov_id' => 15,
            ),
            225 => 
            array (
                'city_id' => 226,
                'city_name' => 'BANYUWANGI',
                'prov_id' => 15,
            ),
            226 => 
            array (
                'city_id' => 227,
                'city_name' => 'PASURUAN',
                'prov_id' => 15,
            ),
            227 => 
            array (
                'city_id' => 228,
                'city_name' => 'BOJONEGORO',
                'prov_id' => 15,
            ),
            228 => 
            array (
                'city_id' => 229,
                'city_name' => 'BONDOWOSO',
                'prov_id' => 15,
            ),
            229 => 
            array (
                'city_id' => 230,
                'city_name' => 'MAGETAN',
                'prov_id' => 15,
            ),
            230 => 
            array (
                'city_id' => 231,
                'city_name' => 'LUMAJANG',
                'prov_id' => 15,
            ),
            231 => 
            array (
                'city_id' => 232,
                'city_name' => 'MALANG',
                'prov_id' => 15,
            ),
            232 => 
            array (
                'city_id' => 233,
                'city_name' => 'BLITAR',
                'prov_id' => 15,
            ),
            233 => 
            array (
                'city_id' => 234,
                'city_name' => 'SIDOARJO',
                'prov_id' => 15,
            ),
            234 => 
            array (
                'city_id' => 235,
                'city_name' => 'LAMONGAN',
                'prov_id' => 15,
            ),
            235 => 
            array (
                'city_id' => 236,
                'city_name' => 'PACITAN',
                'prov_id' => 15,
            ),
            236 => 
            array (
                'city_id' => 237,
                'city_name' => 'TULUNGAGUNG',
                'prov_id' => 15,
            ),
            237 => 
            array (
                'city_id' => 238,
                'city_name' => 'MOJOKERTO',
                'prov_id' => 15,
            ),
            238 => 
            array (
                'city_id' => 239,
                'city_name' => 'MADIUN',
                'prov_id' => 15,
            ),
            239 => 
            array (
                'city_id' => 240,
                'city_name' => 'PONOROGO',
                'prov_id' => 15,
            ),
            240 => 
            array (
                'city_id' => 241,
                'city_name' => 'NGAWI',
                'prov_id' => 15,
            ),
            241 => 
            array (
                'city_id' => 242,
                'city_name' => 'NGANJUK',
                'prov_id' => 15,
            ),
            242 => 
            array (
                'city_id' => 243,
                'city_name' => 'TUBAN',
                'prov_id' => 15,
            ),
            243 => 
            array (
                'city_id' => 244,
                'city_name' => 'TRENGGALEK',
                'prov_id' => 15,
            ),
            244 => 
            array (
                'city_id' => 245,
                'city_name' => 'BATU',
                'prov_id' => 15,
            ),
            245 => 
            array (
                'city_id' => 246,
                'city_name' => 'TANGERANG',
                'prov_id' => 16,
            ),
            246 => 
            array (
                'city_id' => 247,
                'city_name' => 'SERANG',
                'prov_id' => 16,
            ),
            247 => 
            array (
                'city_id' => 248,
                'city_name' => 'PANDEGLANG',
                'prov_id' => 16,
            ),
            248 => 
            array (
                'city_id' => 249,
                'city_name' => 'LEBAK',
                'prov_id' => 16,
            ),
            249 => 
            array (
                'city_id' => 250,
                'city_name' => 'TANGERANG SELATAN',
                'prov_id' => 16,
            ),
            250 => 
            array (
                'city_id' => 251,
                'city_name' => 'CILEGON',
                'prov_id' => 16,
            ),
            251 => 
            array (
                'city_id' => 252,
                'city_name' => 'KLUNGKUNG',
                'prov_id' => 17,
            ),
            252 => 
            array (
                'city_id' => 253,
                'city_name' => 'KARANGASEM',
                'prov_id' => 17,
            ),
            253 => 
            array (
                'city_id' => 254,
                'city_name' => 'BANGLI',
                'prov_id' => 17,
            ),
            254 => 
            array (
                'city_id' => 255,
                'city_name' => 'TABANAN',
                'prov_id' => 17,
            ),
            255 => 
            array (
                'city_id' => 256,
                'city_name' => 'GIANYAR',
                'prov_id' => 17,
            ),
            256 => 
            array (
                'city_id' => 257,
                'city_name' => 'BADUNG',
                'prov_id' => 17,
            ),
            257 => 
            array (
                'city_id' => 258,
                'city_name' => 'JEMBRANA',
                'prov_id' => 17,
            ),
            258 => 
            array (
                'city_id' => 259,
                'city_name' => 'BULELENG',
                'prov_id' => 17,
            ),
            259 => 
            array (
                'city_id' => 260,
                'city_name' => 'DENPASAR',
                'prov_id' => 17,
            ),
            260 => 
            array (
                'city_id' => 261,
                'city_name' => 'MATARAM',
                'prov_id' => 18,
            ),
            261 => 
            array (
                'city_id' => 262,
                'city_name' => 'DOMPU',
                'prov_id' => 18,
            ),
            262 => 
            array (
                'city_id' => 263,
                'city_name' => 'SUMBAWA BARAT',
                'prov_id' => 18,
            ),
            263 => 
            array (
                'city_id' => 264,
                'city_name' => 'SUMBAWA',
                'prov_id' => 18,
            ),
            264 => 
            array (
                'city_id' => 265,
                'city_name' => 'LOMBOK TENGAH',
                'prov_id' => 18,
            ),
            265 => 
            array (
                'city_id' => 266,
                'city_name' => 'LOMBOK TIMUR',
                'prov_id' => 18,
            ),
            266 => 
            array (
                'city_id' => 267,
                'city_name' => 'LOMBOK UTARA',
                'prov_id' => 18,
            ),
            267 => 
            array (
                'city_id' => 268,
                'city_name' => 'LOMBOK BARAT',
                'prov_id' => 18,
            ),
            268 => 
            array (
                'city_id' => 269,
                'city_name' => 'BIMA',
                'prov_id' => 18,
            ),
            269 => 
            array (
                'city_id' => 270,
                'city_name' => 'TIMOR TENGAH SELATAN',
                'prov_id' => 19,
            ),
            270 => 
            array (
                'city_id' => 271,
                'city_name' => 'FLORES TIMUR',
                'prov_id' => 19,
            ),
            271 => 
            array (
                'city_id' => 272,
                'city_name' => 'ALOR',
                'prov_id' => 19,
            ),
            272 => 
            array (
                'city_id' => 273,
                'city_name' => 'ENDE',
                'prov_id' => 19,
            ),
            273 => 
            array (
                'city_id' => 274,
                'city_name' => 'NAGEKEO',
                'prov_id' => 19,
            ),
            274 => 
            array (
                'city_id' => 275,
                'city_name' => 'KUPANG',
                'prov_id' => 19,
            ),
            275 => 
            array (
                'city_id' => 276,
                'city_name' => 'SIKKA',
                'prov_id' => 19,
            ),
            276 => 
            array (
                'city_id' => 277,
                'city_name' => 'NGADA',
                'prov_id' => 19,
            ),
            277 => 
            array (
                'city_id' => 278,
                'city_name' => 'TIMOR TENGAH UTARA',
                'prov_id' => 19,
            ),
            278 => 
            array (
                'city_id' => 279,
                'city_name' => 'BELU',
                'prov_id' => 19,
            ),
            279 => 
            array (
                'city_id' => 280,
                'city_name' => 'LEMBATA',
                'prov_id' => 19,
            ),
            280 => 
            array (
                'city_id' => 281,
                'city_name' => 'SUMBA BARAT DAYA',
                'prov_id' => 19,
            ),
            281 => 
            array (
                'city_id' => 282,
                'city_name' => 'SUMBA BARAT',
                'prov_id' => 19,
            ),
            282 => 
            array (
                'city_id' => 283,
                'city_name' => 'SUMBA TENGAH',
                'prov_id' => 19,
            ),
            283 => 
            array (
                'city_id' => 284,
                'city_name' => 'SUMBA TIMUR',
                'prov_id' => 19,
            ),
            284 => 
            array (
                'city_id' => 285,
                'city_name' => 'ROTE NDAO',
                'prov_id' => 19,
            ),
            285 => 
            array (
                'city_id' => 286,
                'city_name' => 'MANGGARAI TIMUR',
                'prov_id' => 19,
            ),
            286 => 
            array (
                'city_id' => 287,
                'city_name' => 'MANGGARAI',
                'prov_id' => 19,
            ),
            287 => 
            array (
                'city_id' => 288,
                'city_name' => 'SABU RAIJUA',
                'prov_id' => 19,
            ),
            288 => 
            array (
                'city_id' => 289,
                'city_name' => 'MANGGARAI BARAT',
                'prov_id' => 19,
            ),
            289 => 
            array (
                'city_id' => 290,
                'city_name' => 'LANDAK',
                'prov_id' => 20,
            ),
            290 => 
            array (
                'city_id' => 291,
                'city_name' => 'KETAPANG',
                'prov_id' => 20,
            ),
            291 => 
            array (
                'city_id' => 292,
                'city_name' => 'SINTANG',
                'prov_id' => 20,
            ),
            292 => 
            array (
                'city_id' => 293,
                'city_name' => 'KUBU RAYA',
                'prov_id' => 20,
            ),
            293 => 
            array (
                'city_id' => 294,
                'city_name' => 'PONTIANAK',
                'prov_id' => 20,
            ),
            294 => 
            array (
                'city_id' => 295,
                'city_name' => 'KAYONG UTARA',
                'prov_id' => 20,
            ),
            295 => 
            array (
                'city_id' => 296,
                'city_name' => 'BENGKAYANG',
                'prov_id' => 20,
            ),
            296 => 
            array (
                'city_id' => 297,
                'city_name' => 'KAPUAS HULU',
                'prov_id' => 20,
            ),
            297 => 
            array (
                'city_id' => 298,
                'city_name' => 'SAMBAS',
                'prov_id' => 20,
            ),
            298 => 
            array (
                'city_id' => 299,
                'city_name' => 'SINGKAWANG',
                'prov_id' => 20,
            ),
            299 => 
            array (
                'city_id' => 300,
                'city_name' => 'SANGGAU',
                'prov_id' => 20,
            ),
            300 => 
            array (
                'city_id' => 301,
                'city_name' => 'MELAWI',
                'prov_id' => 20,
            ),
            301 => 
            array (
                'city_id' => 302,
                'city_name' => 'SEKADAU',
                'prov_id' => 20,
            ),
            302 => 
            array (
                'city_id' => 303,
                'city_name' => 'KOTAWARINGIN TIMUR',
                'prov_id' => 21,
            ),
            303 => 
            array (
                'city_id' => 304,
                'city_name' => 'SUKAMARA',
                'prov_id' => 21,
            ),
            304 => 
            array (
                'city_id' => 305,
                'city_name' => 'KOTAWARINGIN BARAT',
                'prov_id' => 21,
            ),
            305 => 
            array (
                'city_id' => 306,
                'city_name' => 'BARITO TIMUR',
                'prov_id' => 21,
            ),
            306 => 
            array (
                'city_id' => 307,
                'city_name' => 'KAPUAS',
                'prov_id' => 21,
            ),
            307 => 
            array (
                'city_id' => 308,
                'city_name' => 'PULANG PISAU',
                'prov_id' => 21,
            ),
            308 => 
            array (
                'city_id' => 309,
                'city_name' => 'LAMANDAU',
                'prov_id' => 21,
            ),
            309 => 
            array (
                'city_id' => 310,
                'city_name' => 'SERUYAN',
                'prov_id' => 21,
            ),
            310 => 
            array (
                'city_id' => 311,
                'city_name' => 'KATINGAN',
                'prov_id' => 21,
            ),
            311 => 
            array (
                'city_id' => 312,
                'city_name' => 'BARITO SELATAN',
                'prov_id' => 21,
            ),
            312 => 
            array (
                'city_id' => 313,
                'city_name' => 'MURUNG RAYA',
                'prov_id' => 21,
            ),
            313 => 
            array (
                'city_id' => 314,
                'city_name' => 'BARITO UTARA',
                'prov_id' => 21,
            ),
            314 => 
            array (
                'city_id' => 315,
                'city_name' => 'GUNUNG MAS',
                'prov_id' => 21,
            ),
            315 => 
            array (
                'city_id' => 316,
                'city_name' => 'PALANGKA RAYA',
                'prov_id' => 21,
            ),
            316 => 
            array (
                'city_id' => 317,
                'city_name' => 'TAPIN',
                'prov_id' => 22,
            ),
            317 => 
            array (
                'city_id' => 318,
                'city_name' => 'BANJAR',
                'prov_id' => 22,
            ),
            318 => 
            array (
                'city_id' => 319,
                'city_name' => 'HULU SUNGAI TENGAH',
                'prov_id' => 22,
            ),
            319 => 
            array (
                'city_id' => 320,
                'city_name' => 'TABALONG',
                'prov_id' => 22,
            ),
            320 => 
            array (
                'city_id' => 321,
                'city_name' => 'HULU SUNGAI UTARA',
                'prov_id' => 22,
            ),
            321 => 
            array (
                'city_id' => 322,
                'city_name' => 'BALANGAN',
                'prov_id' => 22,
            ),
            322 => 
            array (
                'city_id' => 323,
                'city_name' => 'TANAH BUMBU',
                'prov_id' => 22,
            ),
            323 => 
            array (
                'city_id' => 324,
                'city_name' => 'BANJARMASIN',
                'prov_id' => 22,
            ),
            324 => 
            array (
                'city_id' => 325,
                'city_name' => 'KOTABARU',
                'prov_id' => 22,
            ),
            325 => 
            array (
                'city_id' => 326,
                'city_name' => 'TANAH LAUT',
                'prov_id' => 22,
            ),
            326 => 
            array (
                'city_id' => 327,
                'city_name' => 'HULU SUNGAI SELATAN',
                'prov_id' => 22,
            ),
            327 => 
            array (
                'city_id' => 328,
                'city_name' => 'BARITO KUALA',
                'prov_id' => 22,
            ),
            328 => 
            array (
                'city_id' => 329,
                'city_name' => 'BANJARBARU',
                'prov_id' => 22,
            ),
            329 => 
            array (
                'city_id' => 330,
                'city_name' => 'KUTAI BARAT',
                'prov_id' => 23,
            ),
            330 => 
            array (
                'city_id' => 331,
                'city_name' => 'SAMARINDA',
                'prov_id' => 23,
            ),
            331 => 
            array (
                'city_id' => 332,
                'city_name' => 'PASER',
                'prov_id' => 23,
            ),
            332 => 
            array (
                'city_id' => 333,
                'city_name' => 'KUTAI KARTANEGARA',
                'prov_id' => 23,
            ),
            333 => 
            array (
                'city_id' => 334,
                'city_name' => 'BERAU',
                'prov_id' => 23,
            ),
            334 => 
            array (
                'city_id' => 335,
                'city_name' => 'PENAJAM PASER UTARA',
                'prov_id' => 23,
            ),
            335 => 
            array (
                'city_id' => 336,
                'city_name' => 'BONTANG',
                'prov_id' => 23,
            ),
            336 => 
            array (
                'city_id' => 337,
                'city_name' => 'KUTAI TIMUR',
                'prov_id' => 23,
            ),
            337 => 
            array (
                'city_id' => 338,
                'city_name' => 'BALIKPAPAN',
                'prov_id' => 23,
            ),
            338 => 
            array (
                'city_id' => 339,
                'city_name' => 'MALINAU',
                'prov_id' => 24,
            ),
            339 => 
            array (
                'city_id' => 340,
                'city_name' => 'NUNUKAN',
                'prov_id' => 24,
            ),
            340 => 
            array (
                'city_id' => 341,
            'city_name' => 'BULUNGAN (BULONGAN)',
                'prov_id' => 24,
            ),
            341 => 
            array (
                'city_id' => 342,
                'city_name' => 'TANA TIDUNG',
                'prov_id' => 24,
            ),
            342 => 
            array (
                'city_id' => 343,
                'city_name' => 'TARAKAN',
                'prov_id' => 24,
            ),
            343 => 
            array (
                'city_id' => 344,
            'city_name' => 'BOLAANG MONGONDOW (BOLMONG)',
                'prov_id' => 25,
            ),
            344 => 
            array (
                'city_id' => 345,
                'city_name' => 'BOLAANG MONGONDOW SELATAN',
                'prov_id' => 25,
            ),
            345 => 
            array (
                'city_id' => 346,
                'city_name' => 'MINAHASA SELATAN',
                'prov_id' => 25,
            ),
            346 => 
            array (
                'city_id' => 347,
                'city_name' => 'BITUNG',
                'prov_id' => 25,
            ),
            347 => 
            array (
                'city_id' => 348,
                'city_name' => 'MINAHASA',
                'prov_id' => 25,
            ),
            348 => 
            array (
                'city_id' => 349,
                'city_name' => 'KEPULAUAN SANGIHE',
                'prov_id' => 25,
            ),
            349 => 
            array (
                'city_id' => 350,
                'city_name' => 'MINAHASA UTARA',
                'prov_id' => 25,
            ),
            350 => 
            array (
                'city_id' => 351,
                'city_name' => 'KEPULAUAN TALAUD',
                'prov_id' => 25,
            ),
            351 => 
            array (
                'city_id' => 352,
            'city_name' => 'KEPULAUAN SIAU TAGULANDANG BIARO (SITARO)',
                'prov_id' => 25,
            ),
            352 => 
            array (
                'city_id' => 353,
                'city_name' => 'MANADO',
                'prov_id' => 25,
            ),
            353 => 
            array (
                'city_id' => 354,
                'city_name' => 'BOLAANG MONGONDOW UTARA',
                'prov_id' => 25,
            ),
            354 => 
            array (
                'city_id' => 355,
                'city_name' => 'BOLAANG MONGONDOW TIMUR',
                'prov_id' => 25,
            ),
            355 => 
            array (
                'city_id' => 356,
                'city_name' => 'MINAHASA TENGGARA',
                'prov_id' => 25,
            ),
            356 => 
            array (
                'city_id' => 357,
                'city_name' => 'KOTAMOBAGU',
                'prov_id' => 25,
            ),
            357 => 
            array (
                'city_id' => 358,
                'city_name' => 'TOMOHON',
                'prov_id' => 25,
            ),
            358 => 
            array (
                'city_id' => 359,
                'city_name' => 'BANGGAI KEPULAUAN',
                'prov_id' => 26,
            ),
            359 => 
            array (
                'city_id' => 360,
                'city_name' => 'TOLI-TOLI',
                'prov_id' => 26,
            ),
            360 => 
            array (
                'city_id' => 361,
                'city_name' => 'PARIGI MOUTONG',
                'prov_id' => 26,
            ),
            361 => 
            array (
                'city_id' => 362,
                'city_name' => 'BUOL',
                'prov_id' => 26,
            ),
            362 => 
            array (
                'city_id' => 363,
                'city_name' => 'DONGGALA',
                'prov_id' => 26,
            ),
            363 => 
            array (
                'city_id' => 364,
                'city_name' => 'POSO',
                'prov_id' => 26,
            ),
            364 => 
            array (
                'city_id' => 365,
                'city_name' => 'MOROWALI',
                'prov_id' => 26,
            ),
            365 => 
            array (
                'city_id' => 366,
                'city_name' => 'TOJO UNA-UNA',
                'prov_id' => 26,
            ),
            366 => 
            array (
                'city_id' => 367,
                'city_name' => 'BANGGAI',
                'prov_id' => 26,
            ),
            367 => 
            array (
                'city_id' => 368,
                'city_name' => 'SIGI',
                'prov_id' => 26,
            ),
            368 => 
            array (
                'city_id' => 369,
                'city_name' => 'PALU',
                'prov_id' => 26,
            ),
            369 => 
            array (
                'city_id' => 370,
                'city_name' => 'MAROS',
                'prov_id' => 27,
            ),
            370 => 
            array (
                'city_id' => 371,
                'city_name' => 'WAJO',
                'prov_id' => 27,
            ),
            371 => 
            array (
                'city_id' => 372,
                'city_name' => 'BONE',
                'prov_id' => 27,
            ),
            372 => 
            array (
                'city_id' => 373,
                'city_name' => 'SOPPENG',
                'prov_id' => 27,
            ),
            373 => 
            array (
                'city_id' => 374,
                'city_name' => 'SIDENRENG RAPPANG / RAPANG',
                'prov_id' => 27,
            ),
            374 => 
            array (
                'city_id' => 375,
                'city_name' => 'TAKALAR',
                'prov_id' => 27,
            ),
            375 => 
            array (
                'city_id' => 376,
                'city_name' => 'BARRU',
                'prov_id' => 27,
            ),
            376 => 
            array (
                'city_id' => 377,
                'city_name' => 'LUWU TIMUR',
                'prov_id' => 27,
            ),
            377 => 
            array (
                'city_id' => 378,
                'city_name' => 'SINJAI',
                'prov_id' => 27,
            ),
            378 => 
            array (
                'city_id' => 379,
                'city_name' => 'PANGKAJENE KEPULAUAN',
                'prov_id' => 27,
            ),
            379 => 
            array (
                'city_id' => 380,
                'city_name' => 'PINRANG',
                'prov_id' => 27,
            ),
            380 => 
            array (
                'city_id' => 381,
                'city_name' => 'JENEPONTO',
                'prov_id' => 27,
            ),
            381 => 
            array (
                'city_id' => 382,
                'city_name' => 'PALOPO',
                'prov_id' => 27,
            ),
            382 => 
            array (
                'city_id' => 383,
                'city_name' => 'TORAJA UTARA',
                'prov_id' => 27,
            ),
            383 => 
            array (
                'city_id' => 384,
                'city_name' => 'LUWU',
                'prov_id' => 27,
            ),
            384 => 
            array (
                'city_id' => 385,
                'city_name' => 'BULUKUMBA',
                'prov_id' => 27,
            ),
            385 => 
            array (
                'city_id' => 386,
                'city_name' => 'MAKASSAR',
                'prov_id' => 27,
            ),
            386 => 
            array (
                'city_id' => 387,
            'city_name' => 'SELAYAR (KEPULAUAN SELAYAR)',
                'prov_id' => 27,
            ),
            387 => 
            array (
                'city_id' => 388,
                'city_name' => 'TANA TORAJA',
                'prov_id' => 27,
            ),
            388 => 
            array (
                'city_id' => 389,
                'city_name' => 'LUWU UTARA',
                'prov_id' => 27,
            ),
            389 => 
            array (
                'city_id' => 390,
                'city_name' => 'BANTAENG',
                'prov_id' => 27,
            ),
            390 => 
            array (
                'city_id' => 391,
                'city_name' => 'GOWA',
                'prov_id' => 27,
            ),
            391 => 
            array (
                'city_id' => 392,
                'city_name' => 'ENREKANG',
                'prov_id' => 27,
            ),
            392 => 
            array (
                'city_id' => 393,
                'city_name' => 'PAREPARE',
                'prov_id' => 27,
            ),
            393 => 
            array (
                'city_id' => 394,
                'city_name' => 'KOLAKA',
                'prov_id' => 28,
            ),
            394 => 
            array (
                'city_id' => 395,
                'city_name' => 'MUNA',
                'prov_id' => 28,
            ),
            395 => 
            array (
                'city_id' => 396,
                'city_name' => 'KONAWE SELATAN',
                'prov_id' => 28,
            ),
            396 => 
            array (
                'city_id' => 397,
                'city_name' => 'KENDARI',
                'prov_id' => 28,
            ),
            397 => 
            array (
                'city_id' => 398,
                'city_name' => 'KONAWE',
                'prov_id' => 28,
            ),
            398 => 
            array (
                'city_id' => 399,
                'city_name' => 'KONAWE UTARA',
                'prov_id' => 28,
            ),
            399 => 
            array (
                'city_id' => 400,
                'city_name' => 'KOLAKA UTARA',
                'prov_id' => 28,
            ),
            400 => 
            array (
                'city_id' => 401,
                'city_name' => 'BUTON',
                'prov_id' => 28,
            ),
            401 => 
            array (
                'city_id' => 402,
                'city_name' => 'BOMBANA',
                'prov_id' => 28,
            ),
            402 => 
            array (
                'city_id' => 403,
                'city_name' => 'WAKATOBI',
                'prov_id' => 28,
            ),
            403 => 
            array (
                'city_id' => 404,
                'city_name' => 'BAU-BAU',
                'prov_id' => 28,
            ),
            404 => 
            array (
                'city_id' => 405,
                'city_name' => 'BUTON UTARA',
                'prov_id' => 28,
            ),
            405 => 
            array (
                'city_id' => 406,
                'city_name' => 'GORONTALO UTARA',
                'prov_id' => 29,
            ),
            406 => 
            array (
                'city_id' => 407,
                'city_name' => 'BONE BOLANGO',
                'prov_id' => 29,
            ),
            407 => 
            array (
                'city_id' => 408,
                'city_name' => 'GORONTALO',
                'prov_id' => 29,
            ),
            408 => 
            array (
                'city_id' => 409,
                'city_name' => 'BOALEMO',
                'prov_id' => 29,
            ),
            409 => 
            array (
                'city_id' => 410,
                'city_name' => 'POHUWATO',
                'prov_id' => 29,
            ),
            410 => 
            array (
                'city_id' => 411,
                'city_name' => 'MAJENE',
                'prov_id' => 30,
            ),
            411 => 
            array (
                'city_id' => 412,
                'city_name' => 'MAMUJU',
                'prov_id' => 30,
            ),
            412 => 
            array (
                'city_id' => 413,
                'city_name' => 'MAMUJU UTARA',
                'prov_id' => 30,
            ),
            413 => 
            array (
                'city_id' => 414,
                'city_name' => 'POLEWALI MANDAR',
                'prov_id' => 30,
            ),
            414 => 
            array (
                'city_id' => 415,
                'city_name' => 'MAMASA',
                'prov_id' => 30,
            ),
            415 => 
            array (
                'city_id' => 416,
                'city_name' => 'MALUKU TENGGARA BARAT',
                'prov_id' => 31,
            ),
            416 => 
            array (
                'city_id' => 417,
                'city_name' => 'MALUKU TENGGARA',
                'prov_id' => 31,
            ),
            417 => 
            array (
                'city_id' => 418,
                'city_name' => 'SERAM BAGIAN BARAT',
                'prov_id' => 31,
            ),
            418 => 
            array (
                'city_id' => 419,
                'city_name' => 'MALUKU TENGAH',
                'prov_id' => 31,
            ),
            419 => 
            array (
                'city_id' => 420,
                'city_name' => 'SERAM BAGIAN TIMUR',
                'prov_id' => 31,
            ),
            420 => 
            array (
                'city_id' => 421,
                'city_name' => 'MALUKU BARAT DAYA',
                'prov_id' => 31,
            ),
            421 => 
            array (
                'city_id' => 422,
                'city_name' => 'AMBON',
                'prov_id' => 31,
            ),
            422 => 
            array (
                'city_id' => 423,
                'city_name' => 'BURU',
                'prov_id' => 31,
            ),
            423 => 
            array (
                'city_id' => 424,
                'city_name' => 'BURU SELATAN',
                'prov_id' => 31,
            ),
            424 => 
            array (
                'city_id' => 425,
                'city_name' => 'KEPULAUAN ARU',
                'prov_id' => 31,
            ),
            425 => 
            array (
                'city_id' => 426,
                'city_name' => 'TUAL',
                'prov_id' => 31,
            ),
            426 => 
            array (
                'city_id' => 427,
                'city_name' => 'HALMAHERA BARAT',
                'prov_id' => 32,
            ),
            427 => 
            array (
                'city_id' => 428,
                'city_name' => 'TIDORE KEPULAUAN',
                'prov_id' => 32,
            ),
            428 => 
            array (
                'city_id' => 429,
                'city_name' => 'TERNATE',
                'prov_id' => 32,
            ),
            429 => 
            array (
                'city_id' => 430,
                'city_name' => 'PULAU MOROTAI',
                'prov_id' => 32,
            ),
            430 => 
            array (
                'city_id' => 431,
                'city_name' => 'KEPULAUAN SULA',
                'prov_id' => 32,
            ),
            431 => 
            array (
                'city_id' => 432,
                'city_name' => 'HALMAHERA SELATAN',
                'prov_id' => 32,
            ),
            432 => 
            array (
                'city_id' => 433,
                'city_name' => 'HALMAHERA TENGAH',
                'prov_id' => 32,
            ),
            433 => 
            array (
                'city_id' => 434,
                'city_name' => 'HALMAHERA TIMUR',
                'prov_id' => 32,
            ),
            434 => 
            array (
                'city_id' => 435,
                'city_name' => 'HALMAHERA UTARA',
                'prov_id' => 32,
            ),
            435 => 
            array (
                'city_id' => 436,
                'city_name' => 'YALIMO',
                'prov_id' => 33,
            ),
            436 => 
            array (
                'city_id' => 437,
                'city_name' => 'DOGIYAI',
                'prov_id' => 33,
            ),
            437 => 
            array (
                'city_id' => 438,
                'city_name' => 'ASMAT',
                'prov_id' => 33,
            ),
            438 => 
            array (
                'city_id' => 439,
                'city_name' => 'JAYAPURA',
                'prov_id' => 33,
            ),
            439 => 
            array (
                'city_id' => 440,
                'city_name' => 'PANIAI',
                'prov_id' => 33,
            ),
            440 => 
            array (
                'city_id' => 441,
                'city_name' => 'MAPPI',
                'prov_id' => 33,
            ),
            441 => 
            array (
                'city_id' => 442,
                'city_name' => 'TOLIKARA',
                'prov_id' => 33,
            ),
            442 => 
            array (
                'city_id' => 443,
                'city_name' => 'PUNCAK JAYA',
                'prov_id' => 33,
            ),
            443 => 
            array (
                'city_id' => 444,
                'city_name' => 'PEGUNUNGAN BINTANG',
                'prov_id' => 33,
            ),
            444 => 
            array (
                'city_id' => 445,
                'city_name' => 'JAYAWIJAYA',
                'prov_id' => 33,
            ),
            445 => 
            array (
                'city_id' => 446,
                'city_name' => 'LANNY JAYA',
                'prov_id' => 33,
            ),
            446 => 
            array (
                'city_id' => 447,
                'city_name' => 'NDUGA',
                'prov_id' => 33,
            ),
            447 => 
            array (
                'city_id' => 448,
                'city_name' => 'BIAK NUMFOR',
                'prov_id' => 33,
            ),
            448 => 
            array (
                'city_id' => 449,
            'city_name' => 'KEPULAUAN YAPEN (YAPEN WAROPEN)',
                'prov_id' => 33,
            ),
            449 => 
            array (
                'city_id' => 450,
                'city_name' => 'PUNCAK',
                'prov_id' => 33,
            ),
            450 => 
            array (
                'city_id' => 451,
                'city_name' => 'INTAN JAYA',
                'prov_id' => 33,
            ),
            451 => 
            array (
                'city_id' => 452,
                'city_name' => 'WAROPEN',
                'prov_id' => 33,
            ),
            452 => 
            array (
                'city_id' => 453,
                'city_name' => 'NABIRE',
                'prov_id' => 33,
            ),
            453 => 
            array (
                'city_id' => 454,
                'city_name' => 'MIMIKA',
                'prov_id' => 33,
            ),
            454 => 
            array (
                'city_id' => 455,
                'city_name' => 'BOVEN DIGOEL',
                'prov_id' => 33,
            ),
            455 => 
            array (
                'city_id' => 456,
                'city_name' => 'YAHUKIMO',
                'prov_id' => 33,
            ),
            456 => 
            array (
                'city_id' => 457,
                'city_name' => 'SARMI',
                'prov_id' => 33,
            ),
            457 => 
            array (
                'city_id' => 458,
                'city_name' => 'MERAUKE',
                'prov_id' => 33,
            ),
            458 => 
            array (
                'city_id' => 459,
            'city_name' => 'DEIYAI (DELIYAI)',
                'prov_id' => 33,
            ),
            459 => 
            array (
                'city_id' => 460,
                'city_name' => 'KEEROM',
                'prov_id' => 33,
            ),
            460 => 
            array (
                'city_id' => 461,
                'city_name' => 'SUPIORI',
                'prov_id' => 33,
            ),
            461 => 
            array (
                'city_id' => 462,
                'city_name' => 'MAMBERAMO RAYA',
                'prov_id' => 33,
            ),
            462 => 
            array (
                'city_id' => 463,
                'city_name' => 'MAMBERAMO TENGAH',
                'prov_id' => 33,
            ),
            463 => 
            array (
                'city_id' => 464,
                'city_name' => 'RAJA AMPAT',
                'prov_id' => 34,
            ),
            464 => 
            array (
                'city_id' => 465,
                'city_name' => 'MANOKWARI SELATAN',
                'prov_id' => 34,
            ),
            465 => 
            array (
                'city_id' => 466,
                'city_name' => 'MANOKWARI',
                'prov_id' => 34,
            ),
            466 => 
            array (
                'city_id' => 467,
                'city_name' => 'KAIMANA',
                'prov_id' => 34,
            ),
            467 => 
            array (
                'city_id' => 468,
                'city_name' => 'MAYBRAT',
                'prov_id' => 34,
            ),
            468 => 
            array (
                'city_id' => 469,
                'city_name' => 'SORONG SELATAN',
                'prov_id' => 34,
            ),
            469 => 
            array (
                'city_id' => 470,
                'city_name' => 'FAKFAK',
                'prov_id' => 34,
            ),
            470 => 
            array (
                'city_id' => 471,
                'city_name' => 'PEGUNUNGAN ARFAK',
                'prov_id' => 34,
            ),
            471 => 
            array (
                'city_id' => 472,
                'city_name' => 'TAMBRAUW',
                'prov_id' => 34,
            ),
            472 => 
            array (
                'city_id' => 473,
                'city_name' => 'SORONG',
                'prov_id' => 34,
            ),
            473 => 
            array (
                'city_id' => 474,
                'city_name' => 'TELUK WONDAMA',
                'prov_id' => 34,
            ),
            474 => 
            array (
                'city_id' => 475,
                'city_name' => 'TELUK BINTUNI',
                'prov_id' => 34,
            ),
        ));
        
        
    }
}