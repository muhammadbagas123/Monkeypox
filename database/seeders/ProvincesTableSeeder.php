<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('provinces')->delete();
        
        DB::table('provinces')->insert(array (
            0 => 
            array (
                'prov_id' => 1,
                'prov_name' => 'ACEH',
                'locationid' => 1,
                'status' => 1,
            ),
            1 => 
            array (
                'prov_id' => 2,
                'prov_name' => 'SUMATERA UTARA',
                'locationid' => 1,
                'status' => 1,
            ),
            2 => 
            array (
                'prov_id' => 3,
                'prov_name' => 'SUMATERA BARAT',
                'locationid' => 1,
                'status' => 1,
            ),
            3 => 
            array (
                'prov_id' => 4,
                'prov_name' => 'RIAU',
                'locationid' => 1,
                'status' => 1,
            ),
            4 => 
            array (
                'prov_id' => 5,
                'prov_name' => 'JAMBI',
                'locationid' => 1,
                'status' => 1,
            ),
            5 => 
            array (
                'prov_id' => 6,
                'prov_name' => 'SUMATERA SELATAN',
                'locationid' => 1,
                'status' => 1,
            ),
            6 => 
            array (
                'prov_id' => 7,
                'prov_name' => 'BENGKULU',
                'locationid' => 1,
                'status' => 1,
            ),
            7 => 
            array (
                'prov_id' => 8,
                'prov_name' => 'LAMPUNG',
                'locationid' => 1,
                'status' => 1,
            ),
            8 => 
            array (
                'prov_id' => 9,
                'prov_name' => 'KEPULAUAN BANGKA BELITUNG',
                'locationid' => 1,
                'status' => 1,
            ),
            9 => 
            array (
                'prov_id' => 10,
                'prov_name' => 'KEPULAUAN RIAU',
                'locationid' => 1,
                'status' => 1,
            ),
            10 => 
            array (
                'prov_id' => 11,
                'prov_name' => 'DKI JAKARTA',
                'locationid' => 1,
                'status' => 1,
            ),
            11 => 
            array (
                'prov_id' => 12,
                'prov_name' => 'JAWA BARAT',
                'locationid' => 1,
                'status' => 1,
            ),
            12 => 
            array (
                'prov_id' => 13,
                'prov_name' => 'JAWA TENGAH',
                'locationid' => 1,
                'status' => 1,
            ),
            13 => 
            array (
                'prov_id' => 14,
                'prov_name' => 'DI YOGYAKARTA',
                'locationid' => 1,
                'status' => 1,
            ),
            14 => 
            array (
                'prov_id' => 15,
                'prov_name' => 'JAWA TIMUR',
                'locationid' => 1,
                'status' => 1,
            ),
            15 => 
            array (
                'prov_id' => 16,
                'prov_name' => 'BANTEN',
                'locationid' => 1,
                'status' => 1,
            ),
            16 => 
            array (
                'prov_id' => 17,
                'prov_name' => 'BALI',
                'locationid' => 1,
                'status' => 1,
            ),
            17 => 
            array (
                'prov_id' => 18,
                'prov_name' => 'NUSA TENGGARA BARAT',
                'locationid' => 1,
                'status' => 1,
            ),
            18 => 
            array (
                'prov_id' => 19,
                'prov_name' => 'NUSA TENGGARA TIMUR',
                'locationid' => 1,
                'status' => 1,
            ),
            19 => 
            array (
                'prov_id' => 20,
                'prov_name' => 'KALIMANTAN BARAT',
                'locationid' => 1,
                'status' => 1,
            ),
            20 => 
            array (
                'prov_id' => 21,
                'prov_name' => 'KALIMANTAN TENGAH',
                'locationid' => 1,
                'status' => 1,
            ),
            21 => 
            array (
                'prov_id' => 22,
                'prov_name' => 'KALIMANTAN SELATAN',
                'locationid' => 1,
                'status' => 1,
            ),
            22 => 
            array (
                'prov_id' => 23,
                'prov_name' => 'KALIMANTAN TIMUR',
                'locationid' => 1,
                'status' => 1,
            ),
            23 => 
            array (
                'prov_id' => 24,
                'prov_name' => 'KALIMANTAN UTARA',
                'locationid' => 1,
                'status' => 1,
            ),
            24 => 
            array (
                'prov_id' => 25,
                'prov_name' => 'SULAWESI UTARA',
                'locationid' => 1,
                'status' => 1,
            ),
            25 => 
            array (
                'prov_id' => 26,
                'prov_name' => 'SULAWESI TENGAH',
                'locationid' => 1,
                'status' => 1,
            ),
            26 => 
            array (
                'prov_id' => 27,
                'prov_name' => 'SULAWESI SELATAN',
                'locationid' => 1,
                'status' => 1,
            ),
            27 => 
            array (
                'prov_id' => 28,
                'prov_name' => 'SULAWESI TENGGARA',
                'locationid' => 1,
                'status' => 1,
            ),
            28 => 
            array (
                'prov_id' => 29,
                'prov_name' => 'GORONTALO',
                'locationid' => 1,
                'status' => 1,
            ),
            29 => 
            array (
                'prov_id' => 30,
                'prov_name' => 'SULAWESI BARAT',
                'locationid' => 1,
                'status' => 1,
            ),
            30 => 
            array (
                'prov_id' => 31,
                'prov_name' => 'MALUKU',
                'locationid' => 1,
                'status' => 1,
            ),
            31 => 
            array (
                'prov_id' => 32,
                'prov_name' => 'MALUKU UTARA',
                'locationid' => 1,
                'status' => 1,
            ),
            32 => 
            array (
                'prov_id' => 33,
                'prov_name' => 'PAPUA',
                'locationid' => 1,
                'status' => 1,
            ),
            33 => 
            array (
                'prov_id' => 34,
                'prov_name' => 'PAPUA BARAT',
                'locationid' => 1,
                'status' => 1,
            ),
        ));
        
        
    }
}