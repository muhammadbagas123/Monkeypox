<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DiagnosaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('diagnosa')->delete();
        
        DB::table('diagnosa')->insert(array (
            0 => 
            array (
                'id' => 251,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'Lampung',
                'penyakit_id' => 'P001',
                'presentase' => 0.2,
                'created_at' => '2022-11-15 19:57:04',
                'updated_at' => '2022-11-05 19:57:04',
            ),
            1 => 
            array (
                'id' => 252,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'Lampung',
                'penyakit_id' => 'P001',
                'presentase' => 0.4,
                'created_at' => '2022-11-05 19:57:30',
                'updated_at' => '2022-11-05 19:57:30',
            ),
            2 => 
            array (
                'id' => 253,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'Lampung',
                'penyakit_id' => 'P001',
                'presentase' => 0.08,
                'created_at' => '2022-11-05 20:01:14',
                'updated_at' => '2022-11-05 20:01:14',
            ),
            3 => 
            array (
                'id' => 254,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'Lampung',
                'penyakit_id' => 'P001',
                'presentase' => 0.08,
                'created_at' => '2022-11-05 20:59:04',
                'updated_at' => '2022-11-05 20:59:04',
            ),
            4 => 
            array (
                'id' => 255,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 1.0,
                'created_at' => '2022-12-09 18:37:12',
                'updated_at' => '2022-12-09 18:37:12',
            ),
            5 => 
            array (
                'id' => 256,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 0.24,
                'created_at' => '2022-12-09 18:38:16',
                'updated_at' => '2022-12-09 18:38:16',
            ),
            6 => 
            array (
                'id' => 257,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 0.32,
                'created_at' => '2022-12-09 18:38:36',
                'updated_at' => '2022-12-09 18:38:36',
            ),
            7 => 
            array (
                'id' => 258,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 0.32,
                'created_at' => '2022-12-09 18:38:49',
                'updated_at' => '2022-12-09 18:38:49',
            ),
            8 => 
            array (
                'id' => 259,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 0.4,
                'created_at' => '2022-12-09 18:38:58',
                'updated_at' => '2022-12-09 18:38:58',
            ),
            9 => 
            array (
                'id' => 260,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 0.76,
                'created_at' => '2022-12-09 18:41:33',
                'updated_at' => '2022-12-09 18:41:33',
            ),
            10 => 
            array (
                'id' => 261,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 1.24,
                'created_at' => '2022-12-09 18:42:39',
                'updated_at' => '2022-12-09 18:42:39',
            ),
            11 => 
            array (
                'id' => 262,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 0.76,
                'created_at' => '2022-12-09 18:43:54',
                'updated_at' => '2022-12-09 18:43:54',
            ),
            12 => 
            array (
                'id' => 263,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 0.76,
                'created_at' => '2022-12-09 18:44:48',
                'updated_at' => '2022-12-09 18:44:48',
            ),
            13 => 
            array (
                'id' => 264,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 1.24,
                'created_at' => '2022-12-09 18:44:57',
                'updated_at' => '2022-12-09 18:44:57',
            ),
            14 => 
            array (
                'id' => 265,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 0.76,
                'created_at' => '2022-12-09 18:45:29',
                'updated_at' => '2022-12-09 18:45:29',
            ),
            15 => 
            array (
                'id' => 266,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 0.76,
                'created_at' => '2022-12-09 18:45:36',
                'updated_at' => '2022-12-09 18:45:36',
            ),
            16 => 
            array (
                'id' => 267,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 0.76,
                'created_at' => '2022-12-09 18:45:42',
                'updated_at' => '2022-12-09 18:45:42',
            ),
            17 => 
            array (
                'id' => 268,
                'nama_penderita' => 'Muhammad Bagas Pangestu',
                'gender' => 'Laki-laki',
                'usia' => 21,
                'prov' => 'BANTEN',
                'penyakit_id' => 'P001',
                'presentase' => 0.76,
                'created_at' => '2022-12-09 18:46:11',
                'updated_at' => '2022-12-09 18:46:11',
            ),
        ));
        
        
    }
}