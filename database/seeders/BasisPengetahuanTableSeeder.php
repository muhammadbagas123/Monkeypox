<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class BasisPengetahuanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('basis_pengetahuan')->delete();
        
        DB::table('basis_pengetahuan')->insert(array (
            0 => 
            array (
                'id' => 51,
                'gejala_id' => 'G001',
                'penyakit_id' => 'P001',
                'cf' => 1.0,
                'created_at' => '2022-09-18 16:18:15',
                'updated_at' => '2022-12-09 18:37:00',
            ),
            1 => 
            array (
                'id' => 52,
                'gejala_id' => 'G002',
                'penyakit_id' => 'P001',
                'cf' => 0.4,
                'created_at' => '2022-09-18 16:18:40',
                'updated_at' => '2022-12-09 18:37:34',
            ),
            2 => 
            array (
                'id' => 53,
                'gejala_id' => 'G003',
                'penyakit_id' => 'P001',
                'cf' => 0.6,
                'created_at' => '2022-09-18 16:19:05',
                'updated_at' => '2022-09-22 18:48:16',
            ),
            3 => 
            array (
                'id' => 54,
                'gejala_id' => 'G004',
                'penyakit_id' => 'P001',
                'cf' => 0.8,
                'created_at' => '2022-09-18 16:19:48',
                'updated_at' => '2022-09-22 18:47:58',
            ),
            4 => 
            array (
                'id' => 55,
                'gejala_id' => 'G005',
                'penyakit_id' => 'P001',
                'cf' => 0.6,
                'created_at' => '2022-09-18 16:20:14',
                'updated_at' => '2022-09-22 18:47:47',
            ),
            5 => 
            array (
                'id' => 56,
                'gejala_id' => 'G006',
                'penyakit_id' => 'P001',
                'cf' => 1.0,
                'created_at' => '2022-09-18 16:20:52',
                'updated_at' => '2022-09-22 18:47:20',
            ),
            6 => 
            array (
                'id' => 57,
                'gejala_id' => 'G007',
                'penyakit_id' => 'P001',
                'cf' => 1.0,
                'created_at' => '2022-09-18 16:21:18',
                'updated_at' => '2022-09-22 18:47:11',
            ),
            7 => 
            array (
                'id' => 63,
                'gejala_id' => 'G010',
                'penyakit_id' => 'P001',
                'cf' => 0.4,
                'created_at' => '2022-10-08 11:31:28',
                'updated_at' => '2022-10-08 11:31:28',
            ),
            8 => 
            array (
                'id' => 64,
                'gejala_id' => 'G001',
                'penyakit_id' => 'P001',
                'cf' => 1.0,
                'created_at' => '2022-09-18 16:18:15',
                'updated_at' => '2022-12-09 18:37:00',
            ),
            9 => 
            array (
                'id' => 65,
                'gejala_id' => 'G002',
                'penyakit_id' => 'P001',
                'cf' => 0.4,
                'created_at' => '2022-09-18 16:18:40',
                'updated_at' => '2022-12-09 18:37:34',
            ),
            10 => 
            array (
                'id' => 66,
                'gejala_id' => 'G003',
                'penyakit_id' => 'P001',
                'cf' => 0.6,
                'created_at' => '2022-09-18 16:19:05',
                'updated_at' => '2022-09-22 18:48:16',
            ),
            11 => 
            array (
                'id' => 67,
                'gejala_id' => 'G004',
                'penyakit_id' => 'P001',
                'cf' => 0.8,
                'created_at' => '2022-09-18 16:19:48',
                'updated_at' => '2022-09-22 18:47:58',
            ),
            12 => 
            array (
                'id' => 68,
                'gejala_id' => 'G005',
                'penyakit_id' => 'P001',
                'cf' => 0.6,
                'created_at' => '2022-09-18 16:20:14',
                'updated_at' => '2022-09-22 18:47:47',
            ),
            13 => 
            array (
                'id' => 69,
                'gejala_id' => 'G006',
                'penyakit_id' => 'P001',
                'cf' => 1.0,
                'created_at' => '2022-09-18 16:20:52',
                'updated_at' => '2022-09-22 18:47:20',
            ),
            14 => 
            array (
                'id' => 70,
                'gejala_id' => 'G007',
                'penyakit_id' => 'P001',
                'cf' => 1.0,
                'created_at' => '2022-09-18 16:21:18',
                'updated_at' => '2022-09-22 18:47:11',
            ),
            15 => 
            array (
                'id' => 71,
                'gejala_id' => 'G010',
                'penyakit_id' => 'P001',
                'cf' => 0.4,
                'created_at' => '2022-10-08 11:31:28',
                'updated_at' => '2022-10-08 11:31:28',
            ),
            16 => 
            array (
                'id' => 72,
                'gejala_id' => 'G001',
                'penyakit_id' => 'P001',
                'cf' => 1.0,
                'created_at' => '2022-09-18 16:18:15',
                'updated_at' => '2022-12-09 18:37:00',
            ),
            17 => 
            array (
                'id' => 73,
                'gejala_id' => 'G002',
                'penyakit_id' => 'P001',
                'cf' => 0.4,
                'created_at' => '2022-09-18 16:18:40',
                'updated_at' => '2022-12-09 18:37:34',
            ),
            18 => 
            array (
                'id' => 74,
                'gejala_id' => 'G003',
                'penyakit_id' => 'P001',
                'cf' => 0.6,
                'created_at' => '2022-09-18 16:19:05',
                'updated_at' => '2022-09-22 18:48:16',
            ),
            19 => 
            array (
                'id' => 75,
                'gejala_id' => 'G004',
                'penyakit_id' => 'P001',
                'cf' => 0.8,
                'created_at' => '2022-09-18 16:19:48',
                'updated_at' => '2022-09-22 18:47:58',
            ),
            20 => 
            array (
                'id' => 76,
                'gejala_id' => 'G005',
                'penyakit_id' => 'P001',
                'cf' => 0.6,
                'created_at' => '2022-09-18 16:20:14',
                'updated_at' => '2022-09-22 18:47:47',
            ),
            21 => 
            array (
                'id' => 77,
                'gejala_id' => 'G006',
                'penyakit_id' => 'P001',
                'cf' => 1.0,
                'created_at' => '2022-09-18 16:20:52',
                'updated_at' => '2022-09-22 18:47:20',
            ),
            22 => 
            array (
                'id' => 78,
                'gejala_id' => 'G007',
                'penyakit_id' => 'P001',
                'cf' => 1.0,
                'created_at' => '2022-09-18 16:21:18',
                'updated_at' => '2022-09-22 18:47:11',
            ),
            23 => 
            array (
                'id' => 79,
                'gejala_id' => 'G010',
                'penyakit_id' => 'P001',
                'cf' => 0.4,
                'created_at' => '2022-10-08 11:31:28',
                'updated_at' => '2022-10-08 11:31:28',
            ),
        ));
        
        
    }
}