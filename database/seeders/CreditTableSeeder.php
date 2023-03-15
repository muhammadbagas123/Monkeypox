<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CreditTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('credit')->delete();
        
        DB::table('credit')->insert(array (
            0 => 
            array (
                'id' => 'C001',
                'nama' => 'Muhammad Bagas Pangestu',
                'slug' => 'muhammad-bagas-pangestu',
                'deskripsi' => '<p>Fakultas :Teknik Informatika</p>

<p>Program Studi : Informatika</p>

<p>Angkatan : 2018</p>

<p>Universitas Multimedia Nusantara</p>',
                'solusi' => '<p>Semoga sistem diagnosa penyakit <em>Monkeypox&nbsp;</em>ini dapat bermanfaat bagi masyarakat Indonesia.</p>',
                'gambar' => '1663124219_MUHAMMAD BAGAS PANGESTU.jpg',
                'created_at' => '2022-09-14 09:56:59',
                'updated_at' => '2022-09-20 15:31:20',
            ),
            1 => 
            array (
                'id' => 'C002',
                'nama' => 'Dr. Fiska Rosita,Sp.DV',
                'slug' => 'dr-fiska-rositaspdv',
                'deskripsi' => '<p>Salah Satu dokter di suatu aplikasi ALODOKTER</p>

<p>&nbsp;</p>

<p><strong>Riwayat Pendidikan</strong></p>

<p>Fakultas Kedokteran Universitas Brawijaya Kusuma Surabaya (2012)</p>

<p>Pendidikan Dokter Spesialis Dermatologi dan Venereologi Fakultas Kedokteran</p>

<p>&nbsp;</p>

<p><strong>Tempat Praktik</strong></p>

<p>RSUD Ir. Soekarno,</p>

<p>Kab. Pulau Morotai, Kabupaten pulau morotai</p>

<p>&nbsp;</p>',
                'solusi' => '<p>Semoga sehat selalu....</p>',
                'gambar' => '1663492251_dr. Fiska Rosita,Sp.DV.PNG',
                'created_at' => '2022-09-14 10:22:41',
                'updated_at' => '2022-09-23 21:02:29',
            ),
        ));
        
        
    }
}