<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class GejalaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('gejala')->delete();
        
        DB::table('gejala')->insert(array (
            0 => 
            array (
                'id' => 'G001',
                'nama' => 'Sakit Kepala',
                'created_at' => '2022-09-18 16:15:16',
                'updated_at' => '2022-09-18 16:15:16',
            ),
            1 => 
            array (
                'id' => 'G002',
                'nama' => 'Demam',
                'created_at' => '2022-09-18 16:15:30',
                'updated_at' => '2022-09-18 16:15:30',
            ),
            2 => 
            array (
                'id' => 'G003',
                'nama' => 'Nyeri Otot',
                'created_at' => '2022-09-18 16:15:42',
                'updated_at' => '2022-09-18 16:15:42',
            ),
            3 => 
            array (
                'id' => 'G004',
                'nama' => 'Lemas / Letih',
                'created_at' => '2022-09-18 16:16:03',
                'updated_at' => '2022-09-18 16:16:03',
            ),
            4 => 
            array (
                'id' => 'G005',
                'nama' => 'Nyeri pada Tenggorokan',
                'created_at' => '2022-09-18 16:16:15',
                'updated_at' => '2022-09-18 16:16:15',
            ),
            5 => 
            array (
                'id' => 'G006',
                'nama' => 'Bintik berisi Cairan',
                'created_at' => '2022-09-18 16:16:26',
                'updated_at' => '2022-09-18 16:16:26',
            ),
            6 => 
            array (
                'id' => 'G007',
            'nama' => 'Pembekakan pada gelenjar getah bening (limfadenopati)',
                'created_at' => '2022-09-18 16:16:45',
                'updated_at' => '2022-09-18 16:16:45',
            ),
            7 => 
            array (
                'id' => 'G010',
                'nama' => 'Muncul Ruam Kecil Lepuh dan Gatal',
                'created_at' => '2022-10-08 10:26:44',
                'updated_at' => '2022-10-08 10:26:44',
            ),
        ));
        
        
    }
}